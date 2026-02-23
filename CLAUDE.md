# Kodus Website — Agent Instructions

## Server & Deploy

- **SSH**: `ssh ezdevs@134.209.210.171`
- **WP root**: `/home/ezdevs/kodus-files`
- **Theme**: `kodus-child` (parent: `twentytwentythree`)
- **WP-CLI**: `/usr/local/bin/wp`
- **PHP**: 7.4-fpm
- **Nginx config**: `/etc/nginx/sites-enabled/kodus.io`
- **CI/CD**: push to `main` → auto deploy. **Always flush caches after deploy.**

### Cache Flush (full sequence)

```bash
ssh ezdevs@134.209.210.171 "cd /home/ezdevs/kodus-files && \
  rm -rf wp-content/cache/min/* wp-content/cache/wp-rocket/* wp-content/cache/critical-css/* && \
  wp cache flush && \
  wp eval 'rocket_clean_domain();rocket_clean_minify();echo \"Done\";'"
```

## WP Rocket — CRITICAL

WP Rocket has aggressive settings: minify + concat CSS, async CSS, defer + delay JS, CDN (`t5y4w6q9.rocketcdn.me`).

**All retro pages bypass WP Rocket** via `pre_get_rocket_option_*` filters (section 9c in `functions.php`). This is required — WP Rocket concat bundles go stale and break layout for returning visitors.

Nginx CSS/JS cache is set to `no-cache` + ETag revalidation (not `expires 30d`). Do NOT change this back.

## Elementor Cleanup — BE CAREFUL

`kodus_wrapper_disable_elementor()` strips all Elementor hooks and CSS.

**Only runs on**: `page-kodus-wrapper.php`, `page-blog.php`, blog posts, archives, search.

**NEVER on**: Home, Pricing, Customers, ROI, Benchmark, Case pages — they never had Elementor. Running it on these pages breaks images (Kody stretching) and layout.

If adding a new page that was previously Elementor, add its template to the explicit list in this function.

## Polylang

- PT = default (no URL prefix, `hide_default: true`)
- EN = `/en/` prefix (`force_lang: 1`)
- **ES exists in Polylang but we don't use it** — always filter to `['pt','en']`
- Categories are separate per language
- Use `'lang' => pll_current_language()` in WP_Query and get_terms

## Retro Theme Architecture

### Template System

- `kodus_get_retro_templates()` — central list of all retro page templates
- `kodus_is_retro_page()` — checks if current page uses retro layout
- `kodus_register_page_templates()` — registers in WP admin
- `kodus_force_page_template()` — forces PHP templates in block theme
- Header/footer: `get_header('kodus')` / `get_footer('kodus')` — shared components

### CSS Design System

```
--color-bg: #101019           --color-primary: #F8B76D (orange)
--color-card-lv1: #181825     --color-secondary: #C9BBF2 (purple)
--color-card-lv2: #202032     --color-text: #F3F3F7
--color-card-lv3: #30304B     --color-text-muted: #CDCDDF
--font-mono: 'JetBrains Mono'
--font-pixel: 'Press Start 2P'
--font-sans: 'Inter'
```

### WordPress Gotchas

- WP injects `width`/`height` on `<img>` tags — disabled on retro pages (section 9b). CSS has `img{max-width:100%;height:auto}` as safety net.
- `filemtime()` is used for cache-busting CSS/JS query strings.

## Key Page IDs

| Page | ID | URL |
|------|----|-----|
| Insights PT | 15212 | `/insights/` |
| Insights EN | 22028 | `/en/insights-en/` |

## Blog Page (page-blog.php)

- Language selector: `pll_the_languages(['raw'=>1])` filtered to PT/EN
- Category filter: AJAX via `kodus_ajax_blog_posts` (`inc/ajax-blog.php`)
- Card partial: `template-parts/blog-card.php` (shared with `archive.php`)
- JS: `assets/js/kodus-blog.js`
- 9 posts per page, Load More appends next 9
