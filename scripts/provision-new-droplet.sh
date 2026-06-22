#!/usr/bin/env bash
# kodus.io — provisioning do droplet novo (kodus-web-new)
# Roda como root no droplet recém-criado (Ubuntu 24.04 LTS).
# Output: stack pronta pra restore (nginx + PHP 8.3-fpm + MySQL 8 + certbot)
#         + credenciais geradas em /root/CREDENTIALS.txt

set -euo pipefail

log() { echo ""; echo "=== [$(date +%H:%M:%S)] $* ==="; }

# Verifica que rodou como root
[ "$(id -u)" -eq 0 ] || { echo "❌ Precisa rodar como root (sudo)"; exit 1; }

# Detecta versão Ubuntu
. /etc/os-release
log "OS: $NAME $VERSION"
[ "$VERSION_ID" = "24.04" ] || { echo "⚠️  Esperava Ubuntu 24.04, achou $VERSION_ID — continuando mesmo assim"; }

# ============================================================
# 1. Update do sistema
# ============================================================
log "Atualizando sistema"
DEBIAN_FRONTEND=noninteractive apt update
DEBIAN_FRONTEND=noninteractive apt -y -o Dpkg::Options::="--force-confnew" upgrade

# ============================================================
# 2. Cria usuário ezdevs (mesmo nome do velho)
# ============================================================
log "Configurando user ezdevs"
if ! id ezdevs &>/dev/null; then
  adduser --disabled-password --gecos "" ezdevs
  usermod -aG sudo ezdevs
fi
mkdir -p /home/ezdevs/.ssh
cp /root/.ssh/authorized_keys /home/ezdevs/.ssh/ 2>/dev/null || true
chown -R ezdevs:ezdevs /home/ezdevs/.ssh
chmod 700 /home/ezdevs/.ssh
chmod 600 /home/ezdevs/.ssh/authorized_keys 2>/dev/null || true

# Sudo NOPASSWD pra ezdevs (facilita scripts; remova se quiser senha)
echo "ezdevs ALL=(ALL) NOPASSWD:ALL" > /etc/sudoers.d/ezdevs
chmod 440 /etc/sudoers.d/ezdevs

# ============================================================
# 3. Stack: nginx + PHP 8.3 + MySQL + certbot + WP-CLI
# ============================================================
log "Instalando stack (nginx, PHP 8.3, MySQL 8, certbot, ferramentas)"
DEBIAN_FRONTEND=noninteractive apt install -y \
  nginx \
  mysql-server \
  php8.3-fpm php8.3-mysql php8.3-curl php8.3-gd php8.3-xml php8.3-mbstring \
  php8.3-zip php8.3-imagick php8.3-intl php8.3-bcmath php8.3-soap php8.3-opcache \
  certbot python3-certbot-nginx \
  unzip curl wget pwgen jq htop ncdu

log "Instalando WP-CLI"
curl -sO https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# ============================================================
# 4. PHP 8.3-fpm tuning (otimizado pra 2GB RAM, low traffic)
# ============================================================
log "Tuning PHP 8.3-fpm"
cat > /etc/php/8.3/fpm/pool.d/www.conf <<'EOF'
[www]
user = www-data
group = www-data
listen = /run/php/php8.3-fpm.sock
listen.owner = www-data
listen.group = www-data
listen.mode = 0660

pm = ondemand
pm.max_children = 15
pm.process_idle_timeout = 30s
pm.max_requests = 500

php_admin_value[error_log] = /var/log/php8.3-fpm.error.log
php_admin_flag[log_errors] = on

clear_env = no
EOF

# php.ini tweaks pra WordPress
cat > /etc/php/8.3/fpm/conf.d/99-kodus.ini <<'EOF'
upload_max_filesize = 64M
post_max_size = 64M
memory_limit = 256M
max_execution_time = 120
max_input_vars = 3000
EOF

systemctl restart php8.3-fpm
systemctl enable php8.3-fpm

# ============================================================
# 5. MySQL hardening + cria DB + user
# ============================================================
log "Configurando MySQL"

MYSQL_ROOT_PASSWORD=$(pwgen -s 32 1)
WP_DB_PASSWORD=$(pwgen -s 32 1)

# Define senha do root (Ubuntu 24.04 default usa auth_socket pra root)
mysql <<EOF
ALTER USER 'root'@'localhost' IDENTIFIED WITH caching_sha2_password BY '${MYSQL_ROOT_PASSWORD}';
DELETE FROM mysql.user WHERE User='';
DELETE FROM mysql.user WHERE User='root' AND Host NOT IN ('localhost', '127.0.0.1', '::1');
DROP DATABASE IF EXISTS test;
DELETE FROM mysql.db WHERE Db='test' OR Db='test\\_%';
FLUSH PRIVILEGES;
EOF

# Cria DB wordpress + user
mysql -u root -p"${MYSQL_ROOT_PASSWORD}" <<EOF
CREATE DATABASE wordpress CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'wp_user'@'localhost' IDENTIFIED WITH caching_sha2_password BY '${WP_DB_PASSWORD}';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wp_user'@'localhost';
FLUSH PRIVILEGES;
EOF

# MySQL tuning leve pra 2GB RAM
# NOTA: MySQL 8.0 REMOVEU `query_cache_type` — não usar.
cat > /etc/mysql/mysql.conf.d/kodus.cnf <<'EOF'
[mysqld]
innodb_buffer_pool_size = 384M
innodb_flush_log_at_trx_commit = 2
innodb_flush_method = O_DIRECT
table_open_cache = 400
max_connections = 50
thread_cache_size = 8
tmp_table_size = 32M
max_heap_table_size = 32M
EOF

systemctl restart mysql

# ============================================================
# 6. Swap 2GB (segurança contra OOM)
# ============================================================
log "Configurando swap 2GB"
if [ ! -f /swapfile ]; then
  fallocate -l 2G /swapfile
  chmod 600 /swapfile
  mkswap /swapfile
  swapon /swapfile
  echo '/swapfile none swap sw 0 0' >> /etc/fstab
fi
sysctl -w vm.swappiness=10
echo 'vm.swappiness=10' > /etc/sysctl.d/99-swappiness.conf

# ============================================================
# 7. Limita systemd-journald (lição do velho: 4.1GB de journal)
# ============================================================
log "Limitando journald (max 200MB)"
mkdir -p /etc/systemd/journald.conf.d
cat > /etc/systemd/journald.conf.d/size.conf <<'EOF'
[Journal]
SystemMaxUse=200M
SystemKeepFree=500M
SystemMaxFileSize=50M
EOF
systemctl restart systemd-journald

# ============================================================
# 8. Firewall (UFW)
# ============================================================
log "Configurando firewall UFW"
ufw default deny incoming
ufw default allow outgoing
ufw allow OpenSSH
ufw allow 'Nginx Full'
ufw --force enable

# ============================================================
# 9. fail2ban
# ============================================================
log "Instalando fail2ban"
DEBIAN_FRONTEND=noninteractive apt install -y fail2ban
cat > /etc/fail2ban/jail.local <<'EOF'
[DEFAULT]
bantime = 3600
findtime = 600
maxretry = 5

[sshd]
enabled = true

[nginx-http-auth]
enabled = true

[nginx-noscript]
enabled = true
filter = nginx-noscript
port = http,https
logpath = /var/log/nginx/access.log
maxretry = 6
EOF
systemctl enable --now fail2ban

# ============================================================
# 10. nginx default — placeholder até restore
# ============================================================
log "Removendo default nginx site"
rm -f /etc/nginx/sites-enabled/default
nginx -t
systemctl reload nginx

# ============================================================
# 11. Salva credenciais
# ============================================================
log "Salvando credenciais em /root/CREDENTIALS.txt"
cat > /root/CREDENTIALS.txt <<EOF
# kodus.io — credenciais do droplet novo (kodus-web-new)
# Gerado em $(date)
# IP: $(curl -s ifconfig.me 2>/dev/null || echo "?")

MYSQL_ROOT_PASSWORD=${MYSQL_ROOT_PASSWORD}
WP_DB_NAME=wordpress
WP_DB_USER=wp_user
WP_DB_PASSWORD=${WP_DB_PASSWORD}

# Comandos úteis:
#   sudo mysql -u root -p   # senha root acima
#   wp config set DB_PASSWORD '${WP_DB_PASSWORD}' --path=/home/ezdevs/kodus-files
EOF
chmod 600 /root/CREDENTIALS.txt

# ============================================================
# 12. Resumo final
# ============================================================
log "PROVISIONING COMPLETO"
echo ""
echo "✅ Stack instalada:"
nginx -v 2>&1 | sed 's/^/   /'
php -v | head -1 | sed 's/^/   /'
mysql --version | sed 's/^/   /'
echo "   $(wp --version)"
echo ""
echo "✅ Versões de PHP-FPM rodando:"
ls /etc/php/ | sed 's/^/   /'
echo ""
echo "✅ Serviços ativos:"
systemctl is-active nginx | sed 's/^/   nginx: /'
systemctl is-active php8.3-fpm | sed 's/^/   php8.3-fpm: /'
systemctl is-active mysql | sed 's/^/   mysql: /'
systemctl is-active fail2ban | sed 's/^/   fail2ban: /'
echo ""
echo "✅ Disco e RAM:"
df -h / | sed 's/^/   /'
free -h | sed 's/^/   /'
echo ""
echo "📋 Credenciais salvas em /root/CREDENTIALS.txt"
echo ""
echo "📋 Próximo passo: copiar backup do local pro novo droplet, depois rodar restore."
echo "   No seu local:"
echo "     scp ~/kodus-backup-20260504/kodus-io-live/* ezdevs@$(curl -s ifconfig.me):/home/ezdevs/restore/"
