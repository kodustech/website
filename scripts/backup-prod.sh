#!/usr/bin/env bash
# kodus.io — backup completo pré-migração
# Roda no droplet velho (ezdevs@134.209.210.171). Read-only, não destrutivo.
# Output: /home/ezdevs/backups/YYYYMMDD/{kodus-io-live,graveyard-sites,graveyard-dbs}.tar.gz

set -euo pipefail

DATE=$(date +%Y%m%d-%H%M%S)
BACKUP_ROOT="/home/ezdevs/backups/${DATE}"
WP_ROOT="/home/ezdevs/kodus-files"

mkdir -p "${BACKUP_ROOT}"
cd "${BACKUP_ROOT}"

log() { echo "[$(date +%H:%M:%S)] $*"; }

# ============================================================
# 1. SITE LIVE: kodus.io
# ============================================================
log "Backup #1 — kodus.io (live site)"
mkdir -p kodus-io-live

# 1a. DB do WordPress (DB name = "wordpress")
log "  → DB dump (wordpress)"
cd "${WP_ROOT}"
wp db export "${BACKUP_ROOT}/kodus-io-live/db-wordpress.sql" --add-drop-table --default-character-set=utf8mb4
gzip "${BACKUP_ROOT}/kodus-io-live/db-wordpress.sql"

# 1b. Arquivos do WP (excluindo cache que regenera)
log "  → tar wp-content (excluindo cache)"
cd /
sudo tar --exclude="${WP_ROOT}/wp-content/cache" \
         --exclude="${WP_ROOT}/wp-content/wp-rocket-config" \
         --exclude="${WP_ROOT}/wp-content/uploads/wp-rocket" \
         --exclude="${WP_ROOT}/wp-content/cache/min" \
         -czf "${BACKUP_ROOT}/kodus-io-live/wp-files.tar.gz" \
         "${WP_ROOT}"

# 1c. Configs do server relevantes
log "  → configs (nginx, php-fpm 7.4, certbot)"
sudo cp /etc/nginx/sites-available/kodus.io "${BACKUP_ROOT}/kodus-io-live/nginx-kodus.io.conf" 2>/dev/null || \
  sudo cp /etc/nginx/sites-enabled/kodus.io "${BACKUP_ROOT}/kodus-io-live/nginx-kodus.io.conf"
sudo cp -r /etc/php/7.4/fpm/pool.d "${BACKUP_ROOT}/kodus-io-live/php-fpm-pool.d" 2>/dev/null || true
sudo cp /etc/php/7.4/fpm/php.ini "${BACKUP_ROOT}/kodus-io-live/php74-php.ini" 2>/dev/null || true
sudo cp -r /etc/letsencrypt "${BACKUP_ROOT}/kodus-io-live/letsencrypt" 2>/dev/null || true

# 1d. Lista de plugins ativos (referência pra validar pós-restore)
log "  → plugin list snapshot"
cd "${WP_ROOT}"
wp plugin list --format=csv > "${BACKUP_ROOT}/kodus-io-live/plugin-list.csv"
wp core version > "${BACKUP_ROOT}/kodus-io-live/wp-core-version.txt"
wp option get siteurl > "${BACKUP_ROOT}/kodus-io-live/siteurl.txt"
wp option get home > "${BACKUP_ROOT}/kodus-io-live/home.txt"

# 1e. Ajusta ownership pra ezdevs poder fazer scp
# (NOTA: removido wrapper tar.gz — comprimir arquivos já comprimidos é desnecessário
# e causou "no space left" quando o disco do prod estava em 85%. Os arquivos
# ficam soltos em kodus-io-live/ e são puxados via `scp -r`.)
log "  → ajustando ownership pra scp"
sudo chown -R ezdevs:ezdevs kodus-io-live

# ============================================================
# 2 + 3. GRAVEYARD — NÃO FAZ NESTE SCRIPT
# ============================================================
# Os 9 dirs antigos (~49GB raw) e 6 DBs zumbis NÃO são empacotados aqui
# porque o disco do prod já está em 85% — escrever 15-30GB extras causa
# "no space left on device". Em vez disso, faz STREAMING via SSH direto
# pro local (não toca disco do prod). Veja README.md ou rode:
#
#   # Sites antigos:
#   ssh ezdevs@HOST 'tar -czf - -C /home/ezdevs db ezcomunica fimdeano kodus new-site novosite test-wp teste yaap-blog 2>/dev/null' > graveyard-sites.tar.gz
#
#   # DBs zumbis (cada um separado):
#   for db in conq ezcomunica ezdevs kodus new_ezdevs yaap; do
#     ssh ezdevs@HOST "sudo mysqldump --add-drop-table --default-character-set=utf8mb4 ${db} | gzip" > "graveyard-db-${db}.sql.gz"
#   done

log "Backup #2 + #3 — graveyard: NÃO empacotado neste script"
log "  → use streaming via SSH do local (ver comentário no script)"

# ============================================================
# 4. RESUMO
# ============================================================
log ""
log "=========================================="
log "BACKUP COMPLETO em: ${BACKUP_ROOT}"
log "=========================================="
ls -lh "${BACKUP_ROOT}"/*.tar.gz 2>/dev/null

log ""
log "Próximo passo: pull pro local"
log "  scp ezdevs@134.209.210.171:${BACKUP_ROOT}/*.tar.gz ./"
log ""
log "Validação local:"
log "  for f in *.tar.gz; do tar -tzf \"\$f\" > /dev/null && echo \"\$f OK\" || echo \"\$f FAIL\"; done"
