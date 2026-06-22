#!/usr/bin/env bash
# Pull a snapshot of prod (db + plugins + parent theme) into the local docker
# WP stack so kodus-child can be tested against a near-prod environment.
#
# Read-only on the droplet. Heavy uploads are SKIPPED (images load remotely
# from https://kodus.io/wp-content/uploads/...). Run from the website repo
# root: ./scripts/pull-prod-to-local.sh
set -euo pipefail

DROPLET_HOST="${DROPLET_HOST:-ezdevs@167.99.229.121}"
DROPLET_WP_ROOT="${DROPLET_WP_ROOT:-/home/ezdevs/kodus-files}"
LOCAL_URL="${LOCAL_URL:-http://localhost:8080}"
PROD_URL="${PROD_URL:-https://kodus.io}"

LOCAL_TMP="/tmp/kodus-prod-snapshot"
SQL_FILE="$LOCAL_TMP/kodus-db.sql"
PLUGINS_TAR="$LOCAL_TMP/plugins.tar.gz"
PARENT_TAR="$LOCAL_TMP/parent-theme.tar.gz"

mkdir -p "$LOCAL_TMP"

echo "=== 1. Generate snapshot on droplet (read-only) ==="
# shellcheck disable=SC2087
ssh "$DROPLET_HOST" bash <<EOF
set -euo pipefail
cd "$DROPLET_WP_ROOT"
echo "  db export..."
wp db export /tmp/kodus-db.sql --add-drop-table --skip-themes --skip-plugins
echo "  plugins tarball..."
cd wp-content
tar -czf /tmp/plugins.tar.gz plugins/
echo "  parent theme tarball..."
tar -czf /tmp/parent-theme.tar.gz themes/twentytwentythree/
echo "  done on droplet"
EOF

echo ""
echo "=== 2. Download to $LOCAL_TMP ==="
scp -q "$DROPLET_HOST:/tmp/kodus-db.sql"      "$SQL_FILE"
scp -q "$DROPLET_HOST:/tmp/plugins.tar.gz"    "$PLUGINS_TAR"
scp -q "$DROPLET_HOST:/tmp/parent-theme.tar.gz" "$PARENT_TAR"
echo "  db: $(du -h "$SQL_FILE" | cut -f1)"
echo "  plugins: $(du -h "$PLUGINS_TAR" | cut -f1)"
echo "  parent theme: $(du -h "$PARENT_TAR" | cut -f1)"

echo ""
echo "=== 3. Cleanup droplet tmp files ==="
ssh "$DROPLET_HOST" 'rm -f /tmp/kodus-db.sql /tmp/plugins.tar.gz /tmp/parent-theme.tar.gz'

echo ""
echo "=== 4. Bring docker stack up ==="
docker compose up -d
echo "  waiting 10s for mysql to be ready..."
sleep 10

echo ""
echo "=== 4b. Ensure WP-CLI inside the container ==="
docker compose exec -T wordpress bash -c '
  set -e
  if ! command -v wp >/dev/null 2>&1; then
    echo "  installing wp-cli..."
    curl -sO https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
    chmod +x wp-cli.phar
    mv wp-cli.phar /usr/local/bin/wp
  fi
  wp --version --allow-root
'

echo ""
echo "=== 5. Install WP core (idempotent — skips if already installed) ==="
if docker compose exec -T wordpress wp core is-installed --allow-root 2>/dev/null; then
  echo "  WP already installed locally — skipping core install"
else
  docker compose exec -T wordpress wp core install \
    --url="$LOCAL_URL" \
    --title="Kodus Local" \
    --admin_user=admin --admin_password=admin \
    --admin_email=local@kodus.io \
    --skip-email --allow-root
fi

echo ""
echo "=== 6. Import prod database ==="
# Copy SQL into the wordpress container first, then import via wp db import
docker compose cp "$SQL_FILE" wordpress:/tmp/kodus-db.sql
docker compose exec -T wordpress wp db import /tmp/kodus-db.sql --allow-root
docker compose exec -T wordpress rm -f /tmp/kodus-db.sql

echo ""
echo "=== 7. Extract plugins + parent theme into the container ==="
docker compose cp "$PLUGINS_TAR" wordpress:/tmp/plugins.tar.gz
docker compose cp "$PARENT_TAR" wordpress:/tmp/parent-theme.tar.gz
docker compose exec -T wordpress bash -c '
  set -e
  cd /var/www/html/wp-content
  rm -rf plugins
  tar -xzf /tmp/plugins.tar.gz
  mkdir -p themes
  tar -xzf /tmp/parent-theme.tar.gz -C themes/.. 2>/dev/null || tar -xzf /tmp/parent-theme.tar.gz
  chown -R www-data:www-data plugins themes
  rm -f /tmp/plugins.tar.gz /tmp/parent-theme.tar.gz
'

echo ""
echo "=== 8. Point siteurl + home to localhost (keep uploads pointing to prod) ==="
docker compose exec -T wordpress wp option update siteurl "$LOCAL_URL" --allow-root
docker compose exec -T wordpress wp option update home "$LOCAL_URL" --allow-root

echo ""
echo "=== 9. Activate kodus-child + flush ==="
docker compose exec -T wordpress wp theme activate kodus-child --allow-root || \
  echo "  WARN: child theme activation failed — check that parent twentytwentythree extracted"
docker compose exec -T wordpress wp cache flush --allow-root
docker compose exec -T wordpress wp rewrite flush --allow-root

echo ""
echo "=== 10. Self-hosted LP — create if missing ==="
SLUG="self-hosted-ai-code-review"
EXISTING_ID=$(docker compose exec -T wordpress wp post list \
  --post_type=page --name="$SLUG" --field=ID --allow-root | tr -d '\r' | head -1 || true)
if [ -z "$EXISTING_ID" ]; then
  docker compose exec -T wordpress wp post create \
    --post_type=page \
    --post_title='Self-Hosted AI Code Review' \
    --post_name="$SLUG" \
    --post_status=publish \
    --page_template='page-self-hosted-ai-code-review.php' \
    --allow-root
  echo "  Page created."
else
  echo "  Page already exists (ID $EXISTING_ID), updating template just in case..."
  docker compose exec -T wordpress wp post meta update "$EXISTING_ID" \
    _wp_page_template page-self-hosted-ai-code-review.php --allow-root
fi

echo ""
echo "=================================================================="
echo "  Open $LOCAL_URL/$SLUG/ in your browser."
echo "  Admin: $LOCAL_URL/wp-admin (admin / admin)"
echo "  Images load remotely from kodus.io — that's intentional."
echo "  Re-run this script to refresh from prod."
echo "=================================================================="
