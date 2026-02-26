# Kodus Website — Agent Guide

## Overview

The Kodus website (kodus.io) runs on **WordPress** with a custom **child theme** called `kodus-child`. The site has two layers:

1. **Retro pages** — custom PHP templates with pixel-art/retro UI (the main website)
2. **Blog/Elementor pages** — managed via WordPress editor (blog at `/en/insights-en/`)

---

## Architecture

### WordPress Setup
- **Server**: Digital Ocean droplet at `134.209.210.171`
- **SSH access**: `ssh ezdevs@134.209.210.171`
- **WordPress root**: `/home/ezdevs/kodus-files/`
- **Theme location**: `/home/ezdevs/kodus-files/wp-content/themes/kodus-child/`
- **Parent theme**: Twenty Twenty-Three (block theme / FSE)
- **PHP version**: 7.4
- **Web server**: Nginx (with Apache behind)
- **SSL**: Let's Encrypt via Certbot
- **Nginx config**: `/etc/nginx/sites-enabled/kodus.io`

### Key Plugins
| Plugin | Purpose |
|--------|---------|
| Polylang | Multi-language (PT default, EN, ES, ZH) |
| Yoast SEO | SEO meta, sitemaps, schema |
| WP Rocket | Page caching, minification |
| Imagify | Image optimization (media library only) |
| Elementor + Pro | Blog page builder |
| OptinMonster | Lead capture |

### Polylang Config
- Default language: **Português (pt)**
- `hide_default: true` — PT URLs have no prefix, other languages use `/en/`, `/es/`, `/zh/`
- `browser: false` — disabled browser language detection (was causing redirects)
- `redirect_lang: false` — disabled auto-redirect
- All retro pages are assigned to language `pt`

---

## File Structure

```
kodus-child/
├── style.css                 # Theme declaration (Template: twentytwentythree)
├── functions.php             # Asset loading, template registration, caching
├── header-kodus.php          # Shared header/nav (used by all retro pages)
├── footer-kodus.php          # Shared footer (used by all retro pages)
├── page-home.php             # Homepage template
├── page-pricing.php          # Pricing page template
├── page-customers.php        # Customers/case studies template
├── page-roi.php              # ROI calculator template
├── page-benchmark.php        # AI Code Review Benchmark template
├── page-case-brendi.php      # Case study: Brendi
├── page-case-lerian.php      # Case study: Lerian
├── page-case-notificacoes.php # Case study: Notificações Inteligentes
├── assets/
│   ├── css/
│   │   ├── kodus-retro.css       # Main CSS (minified, ~183KB)
│   │   └── kodus-retro-full.css  # Unminified backup
│   ├── js/
│   │   └── kodus-retro.js        # Main JS (~48KB, vanilla)
│   └── img/
│       ├── *.webp                # All images in WebP format
│       ├── *.svg                 # Vector icons
│       ├── *.webm                # Video assets
│       └── logos_new/            # Customer logos
```

---

## Pages & URLs

| Page | Template | URL | WP Post ID |
|------|----------|-----|------------|
| Home | page-home.php | `kodus.io/` | 32441 |
| Pricing | page-pricing.php | `kodus.io/pricing/` | 32443 |
| Customers | page-customers.php | `kodus.io/customers/` | 32444 |
| ROI Calculator | page-roi.php | `kodus.io/roi/` | 32445 |
| Benchmark | page-benchmark.php | `kodus.io/benchmark-ai-code-review/` | 32446 |
| Case Brendi | page-case-brendi.php | `kodus.io/case-brendi/` | 32447 |
| Case Lerian | page-case-lerian.php | `kodus.io/case-lerian/` | 32448 |
| Case Notificações | page-case-notificacoes.php | `kodus.io/case-notificacoes/` | 32449 |
| Blog | (no template) | `kodus.io/en/insights-en/` | 32450 |

### WordPress Settings
- **Settings > Reading**: Static front page = Home (32441), Posts page = Blog (32450)
- **Settings > Permalinks**: `/%postname%/`

---

## How Templates Work

### Shared Header & Footer
All retro pages use:
```php
<?php get_header('kodus'); ?>
  <!-- page content -->
<?php get_footer('kodus'); ?>
```

**To change the nav or footer, edit only these files:**
- `header-kodus.php` — navigation, logo, CTAs
- `footer-kodus.php` — footer links, social icons, copyright

### Template Registration
Because Twenty Twenty-Three is a block theme, PHP templates need explicit registration. This is handled in `functions.php`:

1. `theme_page_templates` filter — registers templates in WP admin
2. `template_include` filter — forces PHP template loading (block themes ignore classic templates by default)
3. `kodus_is_retro_page()` helper — detects retro pages using post meta (works with `is_front_page()` too)

### Asset Loading (functions.php)
- Retro pages: loads `kodus-retro.css`, `kodus-retro.js`, Google Fonts
- Retro pages: dequeues ALL parent theme and plugin CSS/JS to avoid conflicts
- Blog/other pages: loads parent theme normally

---

## Important Technical Details

### Image Paths
- All images are **WebP** format in `assets/img/`
- PHP templates use: `<?php echo get_stylesheet_directory_uri(); ?>/assets/img/filename.webp`
- JS references use absolute paths: `/wp-content/themes/kodus-child/assets/img/filename.webp`
- **If adding new images**: use WebP format and absolute paths in JS

### GitHub Stars
- Stars count is **cached server-side** via WP transients (1 hour TTL)
- PHP fetches from GitHub API and passes to JS via `wp_localize_script` as `kodusData.ghStars`
- No client-side API calls — avoids rate limiting
- Fallback stored in `wp_options` as `kodus_github_stars_fallback`

### JS Features (kodus-retro.js)
The JS file is vanilla (no frameworks) and includes:
- GitHub stars display (cached)
- Mobile hamburger menu
- VCR carousel ("You'll hate us if..." section)
- Pricing calculator with slider
- ROI calculator
- FAQ accordion
- Modal system (cartridge modals)
- Pixel world map (customers page)
- Dossier/case study tabs
- Scroll animations
- Cal.com modal integration (pricing CTAs)

### CSS
- Single file `kodus-retro.css` handles all retro pages
- Minified version is deployed; `kodus-retro-full.css` is the unminified backup
- Custom body classes per page: `customers-page`, `roi-page`, `benchmark-page`
- Admin bar fix: `body.admin-bar .header { top: 32px; }`

---

## External Links

| Destination | URL |
|-------------|-----|
| AI Code Review Benchmark (internal) | `https://kodus.io/benchmark-ai-code-review/` |
| LLMs Performance Benchmark (external) | `https://codereviewbench.com/` |
| Blog | `https://kodus.io/en/insights-en/` |
| Docs | `https://docs.kodus.io/how_to_use/en/overview` |
| Discord | `https://discord.gg/TFZBRk9fT6` |
| GitHub repo | `https://github.com/kodustech/kodus-ai` |
| App login | `https://app.kodus.io/sign-in` |
| App signup | `https://app.kodus.io/sign-up` |

---

## Deployment (CI/CD)

### Automatic Deploy via GitHub Actions
The workflow at `.github/workflows/deploy.yml` automatically deploys when changes are pushed to `kodus-child/` on the `main` branch.

**Flow:**
1. Edit files locally in `kodus-child/`
2. `git add kodus-child/ && git commit -m "description" && git push`
3. GitHub Action: rsync files → fix permissions → flush cache

**GitHub Secret:** `DEPLOY_SSH_KEY` (ed25519 key for `ezdevs@134.209.210.171`)

### Manual Deploy
```bash
# From local machine
rsync -avz --delete kodus-child/ ezdevs@134.209.210.171:/home/ezdevs/kodus-files/wp-content/themes/kodus-child/

# On server
sudo chown -R www-data:www-data /home/ezdevs/kodus-files/wp-content/themes/kodus-child/
cd /home/ezdevs/kodus-files && wp cache flush
sudo rm -rf /home/ezdevs/kodus-files/wp-content/cache/wp-rocket/*
```

### WP-CLI
WP-CLI is installed globally. Always run from the WordPress root:
```bash
cd /home/ezdevs/kodus-files
wp post list --post_type=page
wp cache flush
wp option get polylang
```

---

## Common Tasks

### Adding a New Page
1. Create `page-newpage.php` in `kodus-child/` with:
   ```php
   <?php
   /*
    * Template Name: Kodus New Page
    * Template Post Type: page
    */
   ?>
   <?php get_header('kodus'); ?>
     <!-- page content here -->
   <?php get_footer('kodus'); ?>
   ```
2. Register in `functions.php`:
   - Add to `kodus_get_retro_templates()` array
   - Add to `kodus_register_page_templates()` filter
3. Create the page via WP-CLI:
   ```bash
   cd /home/ezdevs/kodus-files
   wp post create --post_type=page --post_title='New Page' --post_name='new-page' --post_status=publish --page_template='page-newpage.php'
   wp post term set <POST_ID> language pt
   ```
4. Deploy and flush cache

### Changing Nav Links
Edit `header-kodus.php` — one change applies to all pages.

### Changing Footer
Edit `footer-kodus.php` — one change applies to all pages.

### Adding Images
1. Convert to WebP: `cwebp -q 80 image.png -o image.webp`
2. Place in `kodus-child/assets/img/`
3. Reference in PHP: `<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image.webp`
4. Reference in JS: `/wp-content/themes/kodus-child/assets/img/image.webp`

### Editing CSS
- Edit `kodus-retro.css` (the minified version is what's deployed)
- Keep `kodus-retro-full.css` as unminified backup if needed
- After changes, clear WP Rocket cache

### Clearing Cache
```bash
ssh ezdevs@134.209.210.171
cd /home/ezdevs/kodus-files
wp cache flush
sudo rm -rf /home/ezdevs/kodus-files/wp-content/cache/wp-rocket/*
```

---

## Performance

### Current Optimizations
- **Gzip**: enabled in Nginx for text/css/js/svg
- **Browser cache**: images 1 year, CSS/JS 30 days
- **CSS minified**: 244KB → 183KB
- **Images**: all WebP (113MB → 37MB total)
- **Lazy loading**: applied to all images below the fold
- **Plugin assets**: dequeued on retro pages
- **GitHub stars**: server-side cached (no client API calls)

### Nginx Config
Performance rules are in `/etc/nginx/sites-enabled/kodus.io` (gzip, expires, cache-control).

### Potential Improvements
- Upgrade PHP 7.4 → 8.1+ (~30% faster)
- Enable OPcache
- WP Rocket full page caching for retro pages
- Critical CSS inlining for above-the-fold content
- Image lazy loading with blur placeholder

---

## Gotchas & Known Issues

1. **Block theme quirk**: `is_page_template()` doesn't work reliably in Twenty Twenty-Three. Use `kodus_is_retro_page()` helper instead.
2. **Front page detection**: `is_page()` returns false on the front page. Always check `is_front_page()` too.
3. **Polylang**: all new pages MUST be assigned to language `pt` via `wp post term set <ID> language pt`.
4. **WP Rocket cache**: must be cleared manually after file changes (`sudo rm -rf .../cache/wp-rocket/*`).
5. **File permissions**: theme files must be owned by `www-data:www-data` with `755` permissions.
6. **CSS minified**: the deployed `kodus-retro.css` is minified. For readable edits, work from `kodus-retro-full.css` and re-minify.
7. **Slug conflicts**: WordPress auto-appends `-2` if a slug already exists. Always check/rename old pages first.
