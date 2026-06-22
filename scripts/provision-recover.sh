#!/usr/bin/env bash
# kodus.io — recuperação após falha do provisioning original na etapa do MySQL.
# Limpa estado parcial do MySQL, reinstala, configura corretamente,
# e completa as etapas que faltaram: swap, journald, UFW, fail2ban, credenciais.
#
# Roda como root no droplet novo.

set -euo pipefail

log() { echo ""; echo "=== [$(date +%H:%M:%S)] $* ==="; }

[ "$(id -u)" -eq 0 ] || { echo "❌ Precisa rodar como root"; exit 1; }

# ============================================================
# 1. Limpa estado quebrado do MySQL
# ============================================================
log "Removendo config quebrada do MySQL"
rm -f /etc/mysql/mysql.conf.d/kodus.cnf

log "Parando MySQL (pode falhar se já tá down, ignora)"
systemctl stop mysql 2>/dev/null || true

log "Purgando MySQL completamente (NADA importante restaurado ainda)"
DEBIAN_FRONTEND=noninteractive apt purge -y 'mysql-server*' 'mysql-client*' 'mysql-common*' 'mysql-*' || true
rm -rf /var/lib/mysql /etc/mysql /var/log/mysql
DEBIAN_FRONTEND=noninteractive apt autoremove -y

# ============================================================
# 2. Reinstala MySQL limpo
# ============================================================
log "Reinstalando MySQL"
DEBIAN_FRONTEND=noninteractive apt update
DEBIAN_FRONTEND=noninteractive apt install -y mysql-server

# Garante que MySQL subiu
systemctl enable --now mysql
sleep 2
systemctl is-active mysql >/dev/null || { echo "❌ MySQL não subiu mesmo após reinstall"; exit 1; }

# ============================================================
# 3. Configura MySQL (root password + DB + user) — versão CORRIGIDA
# ============================================================
log "Configurando MySQL (root password, DB, user) — sem query_cache_type"

# Garante que pwgen tá instalado
which pwgen >/dev/null 2>&1 || DEBIAN_FRONTEND=noninteractive apt install -y pwgen

MYSQL_ROOT_PASSWORD=$(pwgen -s 32 1)
WP_DB_PASSWORD=$(pwgen -s 32 1)

# Ubuntu 24.04 default usa auth_socket pra root
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

# MySQL tuning leve pra 2GB RAM (SEM query_cache_type — MySQL 8.0 não tem)
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
sleep 2
systemctl is-active mysql >/dev/null || { echo "❌ MySQL não subiu com config customizada"; cat /var/log/mysql/error.log | tail -20; exit 1; }
log "✅ MySQL ok"

# ============================================================
# 4. Swap 2GB
# ============================================================
log "Configurando swap 2GB"
if [ ! -f /swapfile ]; then
  fallocate -l 2G /swapfile
  chmod 600 /swapfile
  mkswap /swapfile
  swapon /swapfile
  echo '/swapfile none swap sw 0 0' >> /etc/fstab
fi
sysctl -w vm.swappiness=10 >/dev/null
echo 'vm.swappiness=10' > /etc/sysctl.d/99-swappiness.conf

# ============================================================
# 5. Limita systemd-journald
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
# 6. UFW (firewall)
# ============================================================
log "Configurando UFW"
ufw --force reset
ufw default deny incoming
ufw default allow outgoing
ufw allow OpenSSH
ufw allow 'Nginx Full'
ufw --force enable

# ============================================================
# 7. fail2ban
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
EOF
systemctl enable --now fail2ban
systemctl restart fail2ban

# ============================================================
# 8. Remove default nginx site
# ============================================================
log "Limpando nginx default"
rm -f /etc/nginx/sites-enabled/default
nginx -t
systemctl reload nginx

# ============================================================
# 9. Salva credenciais
# ============================================================
log "Salvando /root/CREDENTIALS.txt"
PUBLIC_IP=$(curl -s ifconfig.me 2>/dev/null || echo "?")
cat > /root/CREDENTIALS.txt <<EOF
# kodus.io — credenciais do droplet novo (kodus-web-new)
# Gerado em $(date)
# IP público: ${PUBLIC_IP}

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
# 10. Resumo
# ============================================================
log "RECUPERAÇÃO COMPLETA ✅"
echo ""
echo "Stack:"
nginx -v 2>&1 | sed 's/^/   /'
php -v | head -1 | sed 's/^/   /'
mysql --version | sed 's/^/   /'
wp --version --allow-root 2>/dev/null | sed 's/^/   /' || true
echo ""
echo "Serviços:"
for svc in nginx php8.3-fpm mysql fail2ban; do
  printf "   %-15s %s\n" "$svc:" "$(systemctl is-active $svc)"
done
echo ""
echo "Recursos:"
df -h / | sed 's/^/   /'
free -h | sed 's/^/   /'
echo ""
echo "📋 Credenciais em /root/CREDENTIALS.txt — guarda com carinho"
