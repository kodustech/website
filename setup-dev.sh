#!/bin/bash
set -e

# ── Config ──────────────────────────────────────────────
REMOTE_HOST="134.209.210.171"
REMOTE_USER="ezdevs"
REMOTE_WP="/home/ezdevs/kodus-files"
LOCAL_URL="http://localhost:8080"
PROD_URL="https://kodus.io"
DB_NAME="wordpress"
DB_USER="root"
DB_PASS="root"

# ── Colors ──────────────────────────────────────────────
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

info()  { echo -e "${GREEN}[✓]${NC} $1"; }
warn()  { echo -e "${YELLOW}[!]${NC} $1"; }
error() { echo -e "${RED}[✗]${NC} $1"; exit 1; }

# ── Pre-checks ──────────────────────────────────────────
command -v docker >/dev/null 2>&1 || error "Docker não encontrado. Instala primeiro."
docker info >/dev/null 2>&1 || error "Docker não está rodando. Inicia o Docker Desktop."

# ── Step 1: Subir containers ───────────────────────────
info "Subindo containers..."
docker compose up -d

# ── Step 2: Esperar WordPress ficar pronto ─────────────
info "Esperando WordPress ficar pronto..."
for i in $(seq 1 30); do
  if curl -s -o /dev/null -w "%{http_code}" "$LOCAL_URL" | grep -qE "200|302"; then
    break
  fi
  sleep 2
done
# Espera extra pro MySQL estabilizar
sleep 5

# ── Step 3: Instalar WordPress ─────────────────────────
info "Configurando WordPress..."
docker compose exec -T wordpress bash -c "
  # Instala WP-CLI
  if [ ! -f /usr/local/bin/wp ]; then
    curl -sO https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
  fi

  cd /var/www/html

  # Instala WP se ainda não foi instalado
  if ! wp core is-installed --allow-root 2>/dev/null; then
    wp core install \
      --url='$LOCAL_URL' \
      --title='Kodus Dev' \
      --admin_user=admin \
      --admin_password=admin \
      --admin_email=dev@kodus.io \
      --skip-email \
      --allow-root
  fi

  # Instala tema pai
  if [ ! -d wp-content/themes/twentytwentythree ]; then
    wp theme install twentytwentythree --allow-root
  fi

  # Ativa child theme
  wp theme activate kodus-child --allow-root

  # Instala Polylang
  if ! wp plugin is-installed polylang --allow-root 2>/dev/null; then
    wp plugin install polylang --activate --allow-root
  else
    wp plugin activate polylang --allow-root 2>/dev/null || true
  fi

  # Permalink bonito
  wp rewrite structure '/%postname%/' --allow-root
  wp rewrite flush --allow-root
"
info "WordPress configurado."

# ── Step 4: Importar banco de produção ─────────────────
warn "Vou puxar o dump do banco de produção via SSH."
warn "Precisa ter acesso SSH ao servidor (ssh-key configurada)."
echo ""
read -p "Quer importar o banco de produção? (s/n) " -n 1 -r
echo ""

if [[ $REPLY =~ ^[Ss]$ ]]; then
  # Tabelas de log/cache que não precisamos no dev
  SKIP_TABLES="wp_irrp_redirection_logs,wp_actionscheduler_actions,wp_actionscheduler_logs,wp_actionscheduler_claims"

  info "Exportando banco de produção (excluindo tabelas de log)..."
  info "O banco tem ~900MB, pode levar alguns minutos..."

  # Dump em arquivo no servidor (mais estável que pipe direto)
  ssh "${REMOTE_USER}@${REMOTE_HOST}" "cd ${REMOTE_WP} && \
    wp db export /tmp/kodus-dump.sql \
      --single-transaction \
      --exclude_tables=${SKIP_TABLES} && \
    gzip -f /tmp/kodus-dump.sql && \
    ls -lh /tmp/kodus-dump.sql.gz"

  info "Baixando dump comprimido..."
  scp "${REMOTE_USER}@${REMOTE_HOST}:/tmp/kodus-dump.sql.gz" dump.sql.gz

  # Limpa arquivo remoto
  ssh "${REMOTE_USER}@${REMOTE_HOST}" "rm -f /tmp/kodus-dump.sql.gz"

  if [ ! -s dump.sql.gz ]; then
    error "Dump veio vazio. Verifica teu acesso SSH."
  fi

  info "Descomprimindo ($(du -h dump.sql.gz | cut -f1) comprimido)..."
  gunzip -f dump.sql.gz

  info "Importando dump ($(du -h dump.sql | cut -f1))..."
  docker compose exec -T db mysql -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" < dump.sql

  info "Substituindo URLs de produção por localhost..."
  docker compose exec -T wordpress bash -c "
    cd /var/www/html
    wp search-replace '$PROD_URL' '$LOCAL_URL' --all-tables --allow-root
    wp search-replace 'www.kodus.io' 'localhost:8080' --all-tables --allow-root
    wp cache flush --allow-root
  "

  rm -f dump.sql dump.sql.gz
  info "Banco importado e URLs ajustadas."
fi

# ── Done ────────────────────────────────────────────────
echo ""
info "========================================="
info "  Ambiente pronto!"
info "========================================="
echo ""
echo "  Site:   $LOCAL_URL"
echo "  Admin:  $LOCAL_URL/wp-admin"
echo "  Login:  admin / admin"
echo ""
echo "  Parar:    docker compose down"
echo "  Resetar:  docker compose down -v"
echo ""
