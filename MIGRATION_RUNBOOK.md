# kodus.io — Runbook de Migração

**Estratégia:** novo droplet $14 com OS+PHP fresh, restaurar SÓ kodus.io WP do backup, descartar todo o cruft de 4 anos.

## Contexto

**Origem (decommission):**
- Droplet `server-ez` `s-2vcpu-4gb` regular Intel, NYC1, IP `134.209.210.171`
- Ubuntu 18.04 (EOL), nginx 1.14, PHP 7.4 (EOL)
- $24 droplet + $4 volume (vazio) + $4.80 backups = **$32.80/mês**
- 4 anos sem reboot, 9 sites zumbis no `/home`, 7 DBs zumbis, Docker rodando à toa, vsftpd inseguro
- `conq.com.br` é zumbi também (vive em ASP.NET externo)

**Destino:**
- Droplet novo `s-1vcpu-2gb-amd`, NYC1, **$14/mês**
- **Ubuntu 24.04 LTS** (suporte até abr/2029)
- **PHP 8.2-fpm** (nativo, sem PPA)
- **nginx 1.24+**
- Cloudflare na frente (free tier)
- DO Backups: manter primeiro 60d, depois trocar por Backblaze B2 ($0.10/mês)

**Economia:** $32.80 → $14.10/mês = **-$224/ano (-57%)**

## Confiança baseada em dado

- CPU atual idle 97% → 1 vCPU AMD aguenta sobrando
- RAM atual 1.2GB → 2GB tem 800MB margem
- Disco kodus-files = 6.9GB → cabe folgado em 70GB do novo
- Tráfego 7-10k/mês → Cloudflare absorve, origin quase ocioso

---

## FASE 1 — Backup completo (read-only, no droplet velho)

### 1.1 Roda o script de backup no droplet velho

```bash
scp /Users/gabrielmalinosqui/dev/kodus/website/scripts/backup-prod.sh ezdevs@134.209.210.171:~/
ssh ezdevs@134.209.210.171 'chmod +x ~/backup-prod.sh && ~/backup-prod.sh'
```

O script gera 3 tarballs em `/home/ezdevs/backups/YYYYMMDD/`:
- `kodus-io-live.tar.gz` — DB `wordpress` + `wp-content` + nginx config + php-fpm config + certbot
- `graveyard-sites.tar.gz` — os 9 dirs antigos do `/home/ezdevs/*`
- `graveyard-dbs.tar.gz` — os 6 DBs zumbis (conq, ezcomunica, ezdevs, kodus, new_ezdevs, yaap)

### 1.2 Pull pro local

```bash
mkdir -p ~/kodus-backup-$(date +%Y%m%d)
cd ~/kodus-backup-$(date +%Y%m%d)
scp ezdevs@134.209.210.171:~/backups/$(date +%Y%m%d)/*.tar.gz .

# Verifica integridade
for f in *.tar.gz; do
  echo "=== $f ==="
  tar -tzf "$f" > /dev/null && echo "OK" || echo "❌ CORROMPIDO"
  ls -lh "$f"
done
```

### 1.3 Replicar pro Drive

Sobe o diretório `~/kodus-backup-YYYYMMDD/` pro Google Drive (manual, ou via `rclone`).

### 1.4 Replicar pro S3 (depois)

Quando tiver bucket S3 ou Backblaze B2 configurado, sincroniza com `aws s3 sync` ou `b2 sync`.

### ✅ Critério pra avançar pra Fase 2

- [ ] 3 tarballs validados localmente
- [ ] Cópia no Google Drive concluída

---

## FASE 2 — Cloudflare na frente (não toca no server)

### 2.1 Adicionar `kodus.io` no Cloudflare

1. Cloudflare → Add Site → `kodus.io` → Free plan
2. Cloudflare lista DNS records atuais — **revisa cada um**:
   - `A kodus.io → 134.209.210.171` → **Proxy: DNS only (cinza)**
   - `A www → 134.209.210.171` → **DNS only**
   - MX, TXT (SPF/DKIM/DMARC) → copia exatamente como tá
3. Cloudflare gera 2 nameservers

### 2.2 Trocar nameservers no registrar

No registrar do `kodus.io`:
- Substitui NS atuais pelos do Cloudflare
- Aguarda propagação (1-24h, normalmente <1h)
- Confirma: `dig NS kodus.io +short`

### 2.3 Lower TTL pro cutover

Cloudflare → DNS → A records `kodus.io` e `www`:
- TTL: **2 minutes**

### 2.4 SSL mode

Cloudflare → SSL/TLS → **Full (strict)**

⚠️ **NÃO LIGA O PROXY (laranja) AINDA.** Liga só depois do cutover estável.

### ✅ Critério pra avançar

- [ ] Nameservers propagados (`dig NS kodus.io` retorna CF)
- [ ] DNS records ainda apontam pro IP velho
- [ ] Proxy DESLIGADO (cinza/DNS only)

---

## FASE 3 — Provisionar droplet novo fresh

### 3.1 Criar droplet via painel DO

- Image: **Ubuntu 24.04 (LTS) x64**
- Plan: **Premium AMD → 1 vCPU / 2 GB RAM / 70 GB SSD ($14/mês)**
- Region: **NYC1**
- Authentication: **SSH key** (mesma do droplet velho — facilita deploy)
- Hostname: `kodus-web-new`
- Backups: ON (DO Automated Backups, $2.80/mês na vida $14 → revisita depois)

Anota o IP novo. Ex: `XXX.XXX.XXX.XXX`

### 3.2 Provisioning inicial

```bash
ssh root@<NOVO_IP>
```

No droplet novo:

```bash
# Atualiza sistema
apt update && apt upgrade -y

# Cria usuário ezdevs (mesmo nome do velho pra manter consistência)
adduser --disabled-password --gecos "" ezdevs
usermod -aG sudo ezdevs
mkdir -p /home/ezdevs/.ssh
cp /root/.ssh/authorized_keys /home/ezdevs/.ssh/
chown -R ezdevs:ezdevs /home/ezdevs/.ssh
chmod 700 /home/ezdevs/.ssh
chmod 600 /home/ezdevs/.ssh/authorized_keys

# Stack: nginx + PHP 8.2 + MySQL + WP-CLI + certbot
apt install -y nginx mysql-server \
  php8.2-fpm php8.2-mysql php8.2-curl php8.2-gd php8.2-xml php8.2-mbstring \
  php8.2-zip php8.2-imagick php8.2-intl php8.2-bcmath php8.2-soap php8.2-opcache \
  certbot python3-certbot-nginx \
  unzip curl

# WP-CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# Hardening básico
ufw default deny incoming
ufw default allow outgoing
ufw allow OpenSSH
ufw allow 'Nginx Full'
ufw --force enable

apt install -y fail2ban
systemctl enable --now fail2ban

# Swap 2GB (segurança contra OOM)
fallocate -l 2G /swapfile
chmod 600 /swapfile
mkswap /swapfile
swapon /swapfile
echo '/swapfile none swap sw 0 0' >> /etc/fstab
echo 'vm.swappiness=10' >> /etc/sysctl.conf

# Disable systemd-journald log explosion (lição do velho)
mkdir -p /etc/systemd/journald.conf.d
cat > /etc/systemd/journald.conf.d/size.conf <<EOF
[Journal]
SystemMaxUse=200M
SystemKeepFree=500M
SystemMaxFileSize=50M
EOF
systemctl restart systemd-journald
```

### 3.3 MySQL setup

```bash
mysql_secure_installation
# Set root pwd, remove anonymous, disallow remote root, remove test, reload

mysql -u root -p <<EOF
CREATE DATABASE wordpress CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'wp_user'@'localhost' IDENTIFIED BY 'STRONG_PASSWORD_HERE';
GRANT ALL PRIVILEGES ON wordpress.* TO 'wp_user'@'localhost';
FLUSH PRIVILEGES;
EOF
```

### 3.4 Restaurar kodus.io a partir do backup

```bash
# Sobe o tarball pro novo
scp ~/kodus-backup-YYYYMMDD/kodus-io-live.tar.gz ezdevs@<NOVO_IP>:~/

ssh ezdevs@<NOVO_IP>
cd ~
sudo mkdir -p /home/ezdevs/kodus-files
sudo tar -xzf kodus-io-live.tar.gz -C /
sudo chown -R www-data:www-data /home/ezdevs/kodus-files

# Importa DB
gunzip -c kodus-io-live/db-wordpress.sql.gz | sudo mysql -u root wordpress

# Updates wp-config.php pra apontar pro novo MySQL user/password
sudo sed -i "s/DB_USER.*/DB_USER', 'wp_user');/" /home/ezdevs/kodus-files/wp-config.php
sudo sed -i "s/DB_PASSWORD.*/DB_PASSWORD', 'STRONG_PASSWORD_HERE');/" /home/ezdevs/kodus-files/wp-config.php
```

### 3.5 nginx + PHP 8.2-fpm vhost

Reaproveita o nginx config do backup (`kodus-io-live/nginx-kodus.io.conf`), ajustando paths PHP-FPM:

```bash
sudo cp ~/kodus-io-live/nginx-kodus.io.conf /etc/nginx/sites-available/kodus.io
sudo sed -i 's|php7.4-fpm|php8.2-fpm|g' /etc/nginx/sites-available/kodus.io
sudo sed -i 's|unix:/var/run/php/php7.4-fpm.sock|unix:/var/run/php/php8.2-fpm.sock|g' /etc/nginx/sites-available/kodus.io
sudo ln -sf /etc/nginx/sites-available/kodus.io /etc/nginx/sites-enabled/
sudo rm /etc/nginx/sites-enabled/default

sudo nginx -t && sudo systemctl reload nginx
```

### 3.6 SSL Let's Encrypt (origin cert pro Cloudflare ler)

```bash
sudo certbot --nginx -d kodus.io -d www.kodus.io --redirect
```

(Cloudflare em "DNS only" agora, então Let's Encrypt vai validar via HTTP-01 normalmente.)

### 3.7 Testa PHP-FPM tunning

Edita `/etc/php/8.2/fpm/pool.d/www.conf`:

```
pm = ondemand
pm.max_children = 15
pm.process_idle_timeout = 30s
pm.max_requests = 500
```

```bash
sudo systemctl restart php8.2-fpm
```

### ✅ Critério pra avançar

- [ ] `curl -I http://<NOVO_IP>` retorna 200 ou 301
- [ ] WP-CLI funciona: `cd /home/ezdevs/kodus-files && wp core version`
- [ ] DB importado: `wp option get siteurl` retorna `https://kodus.io`

---

## FASE 4 — Smoke test via /etc/hosts (sem trocar DNS)

### 4.1 Override local

```bash
sudo sh -c 'echo "<NOVO_IP> kodus.io www.kodus.io" >> /etc/hosts'
```

### 4.2 Checklist completo (browser)

- [ ] Home `/` carrega com layout correto
- [ ] Pricing `/pricing/`
- [ ] Customers `/customers/`
- [ ] ROI calc `/roi-with-kodus/` calcula
- [ ] Benchmark `/benchmark-ai-code-review/`
- [ ] Cases (`/case-brendi/`, `/case-lerian/`, `/case-notificacoes/`)
- [ ] Blog `/blog/` lista posts
- [ ] Post individual abre
- [ ] Polylang: `/en/` versão inglês carrega
- [ ] AJAX do blog (filtro de categoria) funciona
- [ ] Imagens `wp-content/uploads/...` carregam
- [ ] Forms (contato, newsletter) submetem
- [ ] Login `/wp-admin` funciona com credenciais antigas
- [ ] WP Rocket regenera cache sem erro
- [ ] Sitemap `/sitemap.xml` retorna 200
- [ ] robots.txt idêntico

### 4.3 Performance baseline

Testar [PageSpeed Insights](https://pagespeed.web.dev/) com hosts override:
- Anota Core Web Vitals (LCP, FID/INP, CLS) ANTES do cutover
- Devem ser iguais ou melhores que velho

### 4.4 Remove override

```bash
sudo sed -i '' '/<NOVO_IP>/d' /etc/hosts
```

### ✅ Critério pra avançar

- [ ] Todos os items do checklist OK
- [ ] Core Web Vitals ≥ atual

---

## FASE 5 — Cutover (zero-downtime, janela off-peak)

> **Janela ideal:** domingo 5-6h BR (8-9h UTC)

### 5.1 Modo read-only no WP velho (5min)

```bash
ssh ezdevs@134.209.210.171 << 'EOF'
cat | sudo tee /home/ezdevs/kodus-files/wp-content/mu-plugins/000-readonly.php > /dev/null << 'PHP'
<?php
add_action('init', function() {
    if ((defined('REST_REQUEST') && REST_REQUEST && $_SERVER['REQUEST_METHOD'] !== 'GET') || $_SERVER['REQUEST_METHOD'] === 'POST') {
        wp_die('Manutenção rápida — tente em 5 min', 'Manutenção', ['response' => 503]);
    }
});
PHP
EOF
```

### 5.2 Delta sync (DB + uploads)

```bash
# Dump DB do velho
ssh ezdevs@134.209.210.171 'cd /home/ezdevs/kodus-files && wp db export ~/cutover-db.sql --add-drop-table'

# Copia local → novo
scp ezdevs@134.209.210.171:~/cutover-db.sql /tmp/
scp /tmp/cutover-db.sql ezdevs@<NOVO_IP>:~/

# Importa no novo
ssh ezdevs@<NOVO_IP> 'cd /home/ezdevs/kodus-files && wp db import ~/cutover-db.sql && rm ~/cutover-db.sql'

# Rsync delta de uploads
rsync -avz --delete \
  ezdevs@134.209.210.171:/home/ezdevs/kodus-files/wp-content/uploads/ \
  ezdevs@<NOVO_IP>:/home/ezdevs/kodus-files/wp-content/uploads/

# Flush cache
ssh ezdevs@<NOVO_IP> 'cd /home/ezdevs/kodus-files && wp cache flush'
```

### 5.3 Trocar DNS no Cloudflare

Cloudflare → DNS:
- `A kodus.io` → IP novo
- `A www` → IP novo
- Proxy: ainda **DNS only** (laranja desligado)
- TTL 2min

```bash
# Verificar
dig kodus.io +short @1.1.1.1
dig kodus.io +short @8.8.8.8
```

### 5.4 Tirar read-only do velho (safe-guard)

```bash
ssh ezdevs@134.209.210.171 'sudo rm /home/ezdevs/kodus-files/wp-content/mu-plugins/000-readonly.php'
```

### 5.5 Verificar tráfego entrou no novo

```bash
ssh ezdevs@<NOVO_IP> 'sudo tail -f /var/log/nginx/access.log'
```

### ✅ Critério pra avançar

- [ ] DNS propagado (resolve o novo IP)
- [ ] Logs do novo recebendo tráfego
- [ ] Site responde sem erro do novo IP

---

## FASE 6 — Pós-cutover SEO/AEO (mesmo dia)

- [ ] Smoke test do checklist da Fase 4 — agora live
- [ ] `https://kodus.io/sitemap.xml` → 200
- [ ] `https://kodus.io/robots.txt` → 200, idêntico ao velho
- [ ] Imagem aleatória de `wp-content/uploads/...` → 200
- [ ] `curl -I https://kodus.io` → 200, SSL válido
- [ ] Search Console → URL Inspection → home → "URL is available to Google"
- [ ] Submit sitemap novamente no Search Console
- [ ] PageSpeed Insights → comparar com baseline (não regredir)
- [ ] [Schema.org Validator](https://validator.schema.org/) → estrutura intacta
- [ ] llms.txt (se existir) → 200

---

## FASE 7 — Cloudflare Proxy ON (após 24h estável)

1. Cloudflare → DNS → A kodus.io → toggle Proxy ON (laranja)
2. Cloudflare → DNS → A www → toggle Proxy ON
3. SSL/TLS → **Full (strict)**
4. Speed → Optimization → Auto Minify (HTML, CSS, JS) ON
5. Caching → Configuration → Browser Cache TTL: 4 hours
6. Page Rules:
   - `kodus.io/wp-admin/*` → Bypass cache, Security level High
   - `kodus.io/wp-login.php` → Bypass cache
   - `kodus.io/*` → Cache Everything, Edge TTL 2h, Browser TTL 4h

⚠️ **Ao ligar proxy:** considera **desligar minify do WP Rocket** (CF faz). Conflitos de minify quebram CSS/JS.

---

## FASE 8 — Decommission (após 72h estável)

```bash
# Snapshot final do velho (segurança)
# Painel DO → server-ez → Snapshots → "server-ez-final-YYYYMMDD"

# Detach + destroy do volume vazio
# Painel DO → Volumes → volume_nyc1_01 → Detach → Destroy = -$4/mês

# Power off + destroy droplet velho
# Painel DO → server-ez → Power Off → Destroy
```

Confirma na fatura DO que cobrança parou.

---

## FASE 9 — Pós-migração (60 dias depois)

- [ ] Trocar DO Backups ($4.80) por Backblaze B2 ($0.10) com cron de backup próprio
- [ ] Documentar credenciais novas em vault da empresa
- [ ] Atualizar `kodus/website/AGENTS.md` e `CLAUDE.md` com novo IP, OS, PHP, paths

---

## ROLLBACK (se algo der ruim em <24h)

1. Cloudflare → DNS → A records voltam pro IP velho `134.209.210.171`
2. TTL 2min → tráfego volta em ~5min
3. Diagnostica problema, retenta cutover depois

Se já houve writes no novo (posts, comments) que precisam preservar:
```bash
ssh ezdevs@<NOVO_IP> 'wp db export ~/rollback-db.sql --add-drop-table'
scp ezdevs@<NOVO_IP>:~/rollback-db.sql /tmp/
scp /tmp/rollback-db.sql ezdevs@134.209.210.171:~/
ssh ezdevs@134.209.210.171 'cd /home/ezdevs/kodus-files && wp db import ~/rollback-db.sql'
```

---

## Checklist do dia D

- [ ] Backup local validado (Fase 1)
- [ ] Backup no Drive (Fase 1.3)
- [ ] Cloudflare nameservers propagados, DNS-only (Fase 2)
- [ ] Droplet novo provisionado e WP rodando (Fase 3)
- [ ] Smoke test 100% via hosts override (Fase 4)
- [ ] Janela off-peak agendada
- [ ] Cutover executado (Fase 5)
- [ ] SEO check OK (Fase 6)
- [ ] 24h estável → CF proxy ON (Fase 7)
- [ ] 72h estável → droplet velho destruído (Fase 8)

---

## Custo final

| Item | Antes | Depois |
|---|---|---|
| Droplet | $24 | $14 |
| Volume Block Storage | $4 | $0 (destruído) |
| DO Backups | $4.80 | $4.80 (60d) → $0.10 B2 (depois) |
| **Total mês 1** | **$32.80** | **$18.80** |
| **Total estável** | — | **$14.10** |
| **Economia/ano** | — | **$224 (-57%)** |
