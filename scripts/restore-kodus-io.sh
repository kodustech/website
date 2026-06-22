#!/usr/bin/env bash
# kodus.io — restaura o backup no droplet novo
# Roda como root no droplet novo. Espera os arquivos do backup em $BACKUP_DIR.
# Usa /root/CREDENTIALS.txt pra pegar credenciais do MySQL.

set -euo pipefail

log() { echo ""; echo "=== [$(date +%H:%M:%S)] $* ==="; }

[ "$(id -u)" -eq 0 ] || { echo "❌ Precisa rodar como root"; exit 1; }

BACKUP_DIR="${BACKUP_DIR:-/home/ezdevs/restore}"
WP_ROOT="/home/ezdevs/kodus-files"

# Carrega credenciais
[ -f /root/CREDENTIALS.txt ] || { echo "❌ /root/CREDENTIALS.txt não existe"; exit 1; }
source /root/CREDENTIALS.txt

# Verifica arquivos
log "Verificando backup em $BACKUP_DIR"
for f in wp-files.tar.gz db-wordpress.sql.gz nginx-kodus.io.conf; do
  [ -f "$BACKUP_DIR/$f" ] || { echo "❌ Falta $BACKUP_DIR/$f"; exit 1; }
done
ls -lh "$BACKUP_DIR"

# ============================================================
# 1. Extract wp-files
# ============================================================
log "Extraindo wp-files (~6GB, demora 1-3 min)"
mkdir -p "$WP_ROOT"
# O tar tem caminhos absolutos /home/ezdevs/kodus-files/...
tar -xzf "$BACKUP_DIR/wp-files.tar.gz" -C /
chown -R www-data:www-data "$WP_ROOT"
chmod -R u=rwX,g=rX,o=rX "$WP_ROOT"

# Limpa cache do WP Rocket / minify (vão regenerar)
rm -rf "$WP_ROOT/wp-content/cache/min" \
       "$WP_ROOT/wp-content/cache/wp-rocket" \
       "$WP_ROOT/wp-content/cache/critical-css" \
       2>/dev/null || true

# ============================================================
# 2. Import DB
# ============================================================
log "Importando DB"
gunzip -c "$BACKUP_DIR/db-wordpress.sql.gz" | mysql -u root -p"$MYSQL_ROOT_PASSWORD" "$WP_DB_NAME"

# ============================================================
# 3. Atualiza wp-config.php com credenciais novas
# ============================================================
log "Atualizando wp-config.php com credenciais novas"
cd "$WP_ROOT"
sudo -u www-data wp config set DB_NAME "$WP_DB_NAME" --type=constant
sudo -u www-data wp config set DB_USER "$WP_DB_USER" --type=constant
sudo -u www-data wp config set DB_PASSWORD "$WP_DB_PASSWORD" --type=constant
sudo -u www-data wp config set DB_HOST localhost --type=constant

# ============================================================
# 4. nginx config — versão HTTP-only pra smoke test
# ============================================================
log "Configurando nginx (HTTP-only inicialmente, sem SSL)"

# Cria config minimal HTTP que serve o WP
cat > /etc/nginx/sites-available/kodus.io <<'EOF'
server {
    listen 80;
    listen [::]:80;
    server_name kodus.io www.kodus.io;

    root /home/ezdevs/kodus-files;
    index index.php index.html;

    client_max_body_size 64M;

    # WP permalinks
    location / {
        try_files $uri $uri/ /index.php?$args;
    }

    # PHP via FastCGI (PHP 8.3-fpm)
    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_read_timeout 120;
    }

    # Bloqueia acesso a .ht*, .git, etc
    location ~ /\.(?!well-known) {
        deny all;
    }

    # Cache de estáticos (matching original: revalidação via etag pra CSS/JS)
    location ~* \.(jpg|jpeg|png|gif|webp|svg|ico|woff2?|ttf|eot)$ {
        expires 30d;
        add_header Cache-Control "public, no-transform";
        access_log off;
    }

    # CSS/JS: revalidate (sem cache longo, pra evitar bundle stale do WP Rocket)
    location ~* \.(css|js)$ {
        add_header Cache-Control "no-cache, must-revalidate";
        etag on;
    }

    # Robots e sitemap
    location = /robots.txt { allow all; log_not_found off; access_log off; }
    location = /favicon.ico { log_not_found off; access_log off; }

    access_log /var/log/nginx/kodus.io.access.log;
    error_log  /var/log/nginx/kodus.io.error.log;
}
EOF

ln -sf /etc/nginx/sites-available/kodus.io /etc/nginx/sites-enabled/kodus.io

# Testa e recarrega
nginx -t
systemctl reload nginx

# ============================================================
# 5. Verificações
# ============================================================
log "Verificações"
echo ""
echo "WP core:"
sudo -u www-data wp core version
echo ""
echo "Site URL:"
sudo -u www-data wp option get siteurl
echo ""
echo "Active plugins:"
sudo -u www-data wp plugin list --status=active --field=name | wc -l | xargs echo "  Total ativos:"
echo ""
echo "Disco após restore:"
df -h /
echo ""
echo "Smoke local (deve retornar 200 ou 301 do WP):"
curl -s -o /dev/null -w "HTTP %{http_code}\n" -H "Host: kodus.io" http://localhost/ || true

log "RESTORE COMPLETO ✅"
echo ""
echo "📋 Próximos passos:"
echo "  1. No SEU local, smoke test via /etc/hosts override:"
echo "       sudo sh -c 'echo \"167.99.229.121 kodus.io www.kodus.io\" >> /etc/hosts'"
echo "       Abre http://kodus.io no browser"
echo ""
echo "  2. Após validar smoke test, no dia do cutover:"
echo "       - Vira DNS no Cloudflare pra 167.99.229.121"
echo "       - Roda: certbot --nginx -d kodus.io -d www.kodus.io --redirect --non-interactive --agree-tos -m admin@kodus.io"
echo "       - Certbot configura SSL + 301 HTTP→HTTPS automaticamente"
