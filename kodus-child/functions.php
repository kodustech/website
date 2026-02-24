<?php
/**
 * Kodus Child Theme — functions.php
 */

// ═══════════════════════════════════════════════════════════════
// 1. CARREGAR CSS DO TEMA PAI (pro blog funcionar)
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_child_enqueue_parent', 10);
function kodus_child_enqueue_parent() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// ═══════════════════════════════════════════════════════════════
// 2. LISTA DE TODOS OS TEMPLATES RETRO
// ═══════════════════════════════════════════════════════════════
function kodus_get_retro_templates() {
    return [
        'page-home.php',
        'page-pricing.php',
        'page-customers.php',
        'page-roi.php',
        'page-benchmark.php',
        'page-case-brendi.php',
        'page-case-lerian.php',
        'page-case-notificacoes.php',
        'page-kodus-wrapper.php',
        'page-blog.php',
    ];
}

// Helper: checa se a página atual usa um template retro (funciona em block themes)
function kodus_is_retro_page() {
    // Blog posts, archives, blog index, and search use retro layout
    if (is_singular('post') || is_archive() || is_home() || is_search()) {
        return true;
    }

    if (!is_page() && !is_front_page()) {
        return false;
    }
    $post_id = get_queried_object_id();
    if (!$post_id) {
        $post_id = get_option('page_on_front');
    }
    $tpl = get_post_meta($post_id, '_wp_page_template', true);
    return in_array($tpl, kodus_get_retro_templates(), true);
}

// ═══════════════════════════════════════════════════════════════
// 3. CARREGAR ASSETS RETRO NAS PÁGINAS CUSTOM
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_enqueue_retro_assets', 999);
function kodus_enqueue_retro_assets() {
    if (!kodus_is_retro_page()) {
        return;
    }

    // Remover TODOS os CSS que não são do Kodus (evita conflito)
    wp_dequeue_style('parent-style');
    wp_dequeue_style('twenty-twenty-three-style');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-components');
    wp_dequeue_style('dashicons');
    wp_dequeue_style('elementor-frontend');
    wp_dequeue_style('elementor-icons');
    wp_dequeue_style('megamenu');
    wp_dequeue_style('contact-form-7');
    wp_dequeue_style('algori_social_share_buttons-bttn-css');
    wp_dequeue_style('algori_social_share_buttons-fontawesome-css');
    wp_dequeue_style('algori_social_share_buttons-fontawesome-brands-css');
    wp_dequeue_style('algori_social_share_buttons-fontawesome-solid-css');
    wp_dequeue_style('lottiefiles-css');
    wp_dequeue_style('rock-convert-frontend');
    wp_dequeue_style('softlite-integration-widget-style');
    wp_dequeue_style('table-addons-for-elementor');

    // Remover inline styles do WP
    wp_dequeue_style('wp-emoji-styles');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles-inline');

    // Carregar CSS retro
    wp_enqueue_style(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/css/kodus-retro.css',
        [],
        filemtime(get_stylesheet_directory() . '/assets/css/kodus-retro.css')
    );

    // Carregar JS retro (no footer)
    wp_enqueue_script(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/js/kodus-retro.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-retro.js'),
        true
    );

    // Google Fonts
    wp_enqueue_style(
        'kodus-fonts',
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Inter:wght@400;600;700&family=Press+Start+2P&display=swap',
        [],
        null
    );
}

// ═══════════════════════════════════════════════════════════════
// 4. PRECONNECT GOOGLE FONTS
// ═══════════════════════════════════════════════════════════════
add_action('wp_head', 'kodus_preconnect_fonts', 1);
function kodus_preconnect_fonts() {
    if (kodus_is_retro_page()) {
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    }
}

// ═══════════════════════════════════════════════════════════════
// 5. AUMENTAR LIMITE DE UPLOAD
// ═══════════════════════════════════════════════════════════════
add_filter('upload_size_limit', function() {
    return 50 * 1024 * 1024; // 50MB
});

// ═══════════════════════════════════════════════════════════════
// 6. REGISTRAR TEMPLATES NO BLOCK THEME (Twenty Twenty-Three)
// ═══════════════════════════════════════════════════════════════
add_filter('theme_page_templates', 'kodus_register_page_templates');
function kodus_register_page_templates($templates) {
    $templates['page-home.php']              = 'Kodus Home';
    $templates['page-pricing.php']           = 'Kodus Pricing';
    $templates['page-customers.php']         = 'Kodus Customers';
    $templates['page-roi.php']               = 'Kodus ROI';
    $templates['page-benchmark.php']         = 'Kodus Benchmark';
    $templates['page-case-brendi.php']       = 'Kodus Case Brendi';
    $templates['page-case-lerian.php']       = 'Kodus Case Lerian';
    $templates['page-case-notificacoes.php'] = 'Kodus Case Notificações';
    $templates['page-kodus-wrapper.php']     = 'Kodus Wrapper';
    $templates['page-blog.php']              = 'Kodus Blog';
    return $templates;
}

// ═══════════════════════════════════════════════════════════════
// 7. FORÇAR TEMPLATE PHP EM BLOCK THEMES (inclui front_page)
// ═══════════════════════════════════════════════════════════════
add_filter('template_include', 'kodus_force_page_template', 999);
function kodus_force_page_template($template) {
    // Force single.php for individual blog posts
    if (is_singular('post')) {
        $child_template = get_stylesheet_directory() . '/single.php';
        if (file_exists($child_template)) {
            return $child_template;
        }
    }

    // Force archive.php for blog listing, categories, tags, search
    if (is_archive() || is_home() || is_search()) {
        $child_template = get_stylesheet_directory() . '/archive.php';
        if (file_exists($child_template)) {
            return $child_template;
        }
    }

    // Pages with custom templates
    $post_id = null;

    if (is_front_page()) {
        $post_id = get_option('page_on_front');
    } elseif (is_page()) {
        $post_id = get_queried_object_id();
    }

    if ($post_id) {
        $page_template = get_post_meta($post_id, '_wp_page_template', true);
        if ($page_template && $page_template !== 'default') {
            $child_template = get_stylesheet_directory() . '/' . $page_template;
            if (file_exists($child_template)) {
                return $child_template;
            }
        }
    }
    return $template;
}

// ═══════════════════════════════════════════════════════════════
// 8. LAZY LOADING — adicionar loading=lazy nas imagens retro
// ═══════════════════════════════════════════════════════════════
add_filter('the_content', 'kodus_lazy_images', 999);
function kodus_lazy_images($content) {
    return $content;
}

// Adicionar lazy loading via output buffer nas páginas retro
add_action('template_redirect', 'kodus_start_lazy_buffer');
function kodus_start_lazy_buffer() {
    if (kodus_is_retro_page()) {
        ob_start('kodus_add_lazy_loading');
    }
}

function kodus_add_lazy_loading($html) {
    $had_gtm = stripos($html, 'GTM-KN2J57G') !== false;

    // Skip images that already have loading attribute or are preloaded
    $html = preg_replace(
        '/<img(?![^>]*loading=)(?![^>]*rel="preload")([^>]*)(src=)/i',
        '<img loading="lazy"$1$2',
        $html
    );

    // Drop duplicate <script src="..."></script> tags injected by multiple plugins.
    $seen_script_src = [];
    $html = preg_replace_callback(
        '/<script\b[^>]*\bsrc=(["\'])([^"\']+)\1[^>]*>\s*<\/script>/i',
        function ($matches) use (&$seen_script_src) {
            $src = html_entity_decode($matches[2], ENT_QUOTES);
            if (isset($seen_script_src[$src])) {
                return '';
            }
            $seen_script_src[$src] = true;
            return $matches[0];
        },
        $html
    );

    // Remove local @font-face bundle from parent block theme on retro pages.
    $html = preg_replace(
        '/<style[^>]*class=(["\'])[^"\']*wp-fonts-local[^"\']*\1[^>]*>.*?<\/style>/is',
        '',
        $html
    );

    // Remove direct GTM/gtag bootstrap from HTML.
    $html = preg_replace(
        '/<!--\s*Google Tag Manager snippet added by Site Kit\s*-->.*?<!--\s*End Google Tag Manager snippet added by Site Kit\s*-->/is',
        '',
        $html
    );

    $html = preg_replace(
        '/<script[^>]*\bsrc=(["\'])https?:\/\/www\.googletagmanager\.com\/gtag\/js\?id=[^"\']+\1[^>]*>\s*<\/script>/i',
        '',
        $html
    );

    $html = preg_replace(
        '/<script[^>]*id=(["\'])google_gtagjs-js-after\1[^>]*>.*?<\/script>/is',
        '',
        $html
    );

    $html = preg_replace(
        '/<script[^>]*>.*?googletagmanager\.com\/gtm\.js\?id=GTM-[^<]*<\/script>/is',
        '',
        $html
    );

    // Remove GTM noscript iframe variants.
    $html = preg_replace(
        '/<noscript>\s*<iframe[^>]*googletagmanager\.com\/ns\.html[^>]*>\s*<\/iframe>\s*<\/noscript>/is',
        '',
        $html
    );

    $html = preg_replace(
        '/<!--\s*Google Tag Manager\s*-->\s*<iframe[^>]*googletagmanager\.com\/ns\.html[^>]*>\s*<\/iframe>\s*<!--\s*End Google Tag Manager\s*-->/is',
        '',
        $html
    );

    // Remove extra third-party trackers that are not needed for page rendering.
    $html = preg_replace(
        '/<script[^>]*\bsrc=(["\'])https?:\/\/analytics\.crawlconsole\.com\/tracker\.js[^"\']*\1[^>]*>\s*<\/script>/i',
        '',
        $html
    );

    $html = preg_replace(
        '/<script[^>]*\bsrc=(["\'])https?:\/\/a\.omappapi\.com\/app\/js\/api\.min\.js[^"\']*\1[^>]*>\s*<\/script>/i',
        '',
        $html
    );

    // Remove inline gtag config block left by Site Kit.
    $html = preg_replace(
        '/<!--\s*Google tag \(gtag\.js\)\s*-->.*?<!--\s*End - Google tag \(gtag\.js\)\s*-->/is',
        '',
        $html
    );

    // Remove inline Twitter tracking bootstrap.
    $html = preg_replace(
        '/<!--\s*Twitter conversion tracking base code\s*-->.*?<!--\s*End Twitter conversion tracking base code\s*-->/is',
        '',
        $html
    );

    // Remove inline OptinMonster bootstrap that injects api.min.js dynamically.
    $html = preg_replace(
        '/<script[^>]*>\s*\(function\(d,u,ac\)\{[^<]*a\.omappapi\.com\/app\/js\/api\.min\.js[^<]*<\/script>/is',
        '',
        $html
    );

    // Re-inject GTM with delay to protect initial render and interactivity.
    if ($had_gtm) {
        $delayed_gtm_loader = "<script>(function(){window.dataLayer=window.dataLayer||[];window.gtag=window.gtag||function(){window.dataLayer.push(arguments);};var gtmLoaded=false;function loadGTM(){if(gtmLoaded){return;}gtmLoaded=true;window.dataLayer.push({'gtm.start':Date.now(),event:'gtm.js'});var s=document.createElement('script');s.async=true;s.src='https://www.googletagmanager.com/gtm.js?id=GTM-KN2J57G';document.head.appendChild(s);}['click','scroll','touchstart','keydown','pointerdown'].forEach(function(evt){window.addEventListener(evt,loadGTM,{once:true,passive:true});});})();</script>";
        $html = preg_replace('/<\/head>/i', $delayed_gtm_loader . "\n</head>", $html, 1);
    }

    return $html;
}

// ═══════════════════════════════════════════════════════════════
// 9. REMOVER JS/CSS DE PLUGINS NAS PÁGINAS RETRO
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_remove_plugin_assets', 1000);
function kodus_remove_plugin_assets() {
    if (!kodus_is_retro_page()) {
        return;
    }

    // JS de plugins/editor que não é necessário no frontend retro.
    $script_handles = [
        'contact-form-7',
        'optinmonster-api-script',
        'rock-convert-frontend',
        'lottiefiles',
        'lottiefiles-block-frontend',
        'lottieFilesLocalPlayer',
        'lottieFilesInteractivityCDN',
        'swiper',
        'softlite-main-script',
        'megamenu',
        'hoverIntent',
        'wp-embed',
        'jquery-core',
        'jquery-migrate',
        'wp-editor',
        'wp-block-editor',
        'wp-components',
        'wp-blocks',
        'wp-patterns',
        'wp-plugins',
        'wp-server-side-render',
        'wp-media-utils',
        'wp-core-data',
        'wp-preferences',
        'wp-preferences-persistence',
        'wp-notices',
        'wp-commands',
        'wp-keyboard-shortcuts',
        'wp-api-fetch',
        'wp-url',
        'wp-shortcode',
        'wp-block-serialization-default-parser',
        'wp-blob',
        'wp-autop',
        'wp-warning',
        'wp-rich-text',
        'wp-data',
        'wp-redux-routine',
        'wp-private-apis',
        'wp-primitives',
        'wp-html-entities',
        'wp-date',
        'moment',
        'wp-compose',
        'wp-priority-queue',
        'wp-keycodes',
        'wp-is-shallow-equal',
        'wp-element',
        'wp-escape-html',
        'wp-dom',
        'wp-deprecated',
        'wp-a11y',
        'wp-i18n',
        'wp-hooks',
        'wp-dom-ready',
        'wp-token-list',
        'wp-style-engine',
        'wp-viewport',
        'wp-wordcount',
        'wp-polyfill',
        'react',
        'react-dom',
        'react-jsx-runtime',
        'google_gtagjs',
    ];

    foreach ($script_handles as $handle) {
        wp_dequeue_script($handle);
        wp_deregister_script($handle);
    }

    // CSS de plugins desnecessário no retro.
    $style_handles = [
        'optinmonster-api-css',
    ];

    foreach ($style_handles as $handle) {
        wp_dequeue_style($handle);
        wp_deregister_style($handle);
    }
}

// Hard-stop late plugin/editor assets that are queued after wp_enqueue_scripts.
add_action('wp_print_scripts', 'kodus_prune_late_assets', 1000);
add_action('wp_print_footer_scripts', 'kodus_prune_late_assets', 1000);
add_action('wp_print_styles', 'kodus_prune_late_assets', 1000);
function kodus_prune_late_assets() {
    if (!kodus_is_retro_page()) {
        return;
    }

    $blocked_script_src_fragments = [
        '/wp-content/plugins/lottiefiles/',
        '/wp-content/plugins/megamenu/',
        '/wp-content/plugins/softlite-io-integration/',
        '/wp-content/plugins/elementor/assets/lib/swiper/',
        '/wp-content/plugins/jquery-updater/',
        '/wp-includes/js/dist/',
        '/wp-includes/js/hoverIntent',
        'www.googletagmanager.com/gtag/js',
        'analytics.crawlconsole.com/tracker.js',
        'a.omappapi.com/app/js/',
    ];

    $blocked_style_src_fragments = [
        '/wp-content/plugins/lottiefiles/',
        '/wp-content/plugins/megamenu/',
        '/wp-content/plugins/softlite-io-integration/',
        '/wp-content/plugins/elementor/',
        'a.omappapi.com/app/js/api.min.css',
    ];

    global $wp_scripts, $wp_styles;

    if ($wp_scripts instanceof WP_Scripts) {
        foreach ((array) $wp_scripts->queue as $handle) {
            if (!isset($wp_scripts->registered[$handle])) {
                continue;
            }
            $src = (string) $wp_scripts->registered[$handle]->src;
            foreach ($blocked_script_src_fragments as $fragment) {
                if ($src !== '' && stripos($src, $fragment) !== false) {
                    wp_dequeue_script($handle);
                    wp_deregister_script($handle);
                    break;
                }
            }
        }
    }

    if ($wp_styles instanceof WP_Styles) {
        foreach ((array) $wp_styles->queue as $handle) {
            if (!isset($wp_styles->registered[$handle])) {
                continue;
            }
            $src = (string) $wp_styles->registered[$handle]->src;
            foreach ($blocked_style_src_fragments as $fragment) {
                if ($src !== '' && stripos($src, $fragment) !== false) {
                    wp_dequeue_style($handle);
                    wp_deregister_style($handle);
                    break;
                }
            }
        }
    }
}

// ═══════════════════════════════════════════════════════════════
// 9b. REMOVE WP AUTO-INSERTED WIDTH/HEIGHT ON RETRO IMAGES
//     WP adds width="3684" height="3072" to <img> tags, breaking layout
// ═══════════════════════════════════════════════════════════════
add_filter('wp_img_tag_add_width_and_height_attr', function($value) {
    if (kodus_is_retro_page()) return false;
    return $value;
});

// ═══════════════════════════════════════════════════════════════
// 9c. DISABLE WP ROCKET OPTIMIZATION ON RETRO PAGES
//     Prevents CSS concat/minify/delay that breaks retro assets
// ═══════════════════════════════════════════════════════════════
add_action('wp', 'kodus_disable_rocket_on_retro');
function kodus_disable_rocket_on_retro() {
    if (!kodus_is_retro_page()) return;

    // Disable CSS minify/concat/async
    add_filter('pre_get_rocket_option_minify_css', '__return_zero');
    add_filter('pre_get_rocket_option_minify_concatenate_css', '__return_zero');
    add_filter('pre_get_rocket_option_async_css', '__return_zero');
    add_filter('pre_get_rocket_option_optimize_css_delivery', '__return_zero');
    add_filter('pre_get_rocket_option_remove_unused_css', '__return_zero');

    // Disable JS minify/concat/defer/delay
    add_filter('pre_get_rocket_option_minify_js', '__return_zero');
    add_filter('pre_get_rocket_option_minify_concatenate_js', '__return_zero');
    add_filter('pre_get_rocket_option_defer_all_js', '__return_zero');
    add_filter('pre_get_rocket_option_delay_js', '__return_zero');
}

// ═══════════════════════════════════════════════════════════════
// 10. CACHE GITHUB STARS (evita rate limit)
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_github_stars_cache', 1001);
function kodus_github_stars_cache() {
    if (!kodus_is_retro_page()) return;
    
    $stars = get_transient('kodus_github_stars');
    if ($stars === false) {
        $response = wp_remote_get('https://api.github.com/repos/kodustech/kodus-ai', [
            'headers' => ['User-Agent' => 'Kodus-Website'],
            'timeout' => 5,
        ]);
        if (!is_wp_error($response)) {
            $data = json_decode(wp_remote_retrieve_body($response), true);
            if (isset($data['stargazers_count'])) {
                $stars = (int) $data['stargazers_count'];
                set_transient('kodus_github_stars', $stars, HOUR_IN_SECONDS);
            }
        }
        if ($stars === false) {
            $stars = get_option('kodus_github_stars_fallback', 0);
        } else {
            update_option('kodus_github_stars_fallback', $stars, false);
        }
    }
    
    wp_localize_script('kodus-retro', 'kodusData', ['ghStars' => $stars]);
}

// ═══════════════════════════════════════════════════════════════
// 11. WRAPPER PAGES — remove ALL Elementor hooks + clean output
// ═══════════════════════════════════════════════════════════════
add_action('template_redirect', 'kodus_wrapper_disable_elementor', 0);
function kodus_wrapper_disable_elementor() {
    if (!kodus_is_retro_page()) {
        return;
    }

    // Remove ALL Elementor callbacks from WP hooks
    global $wp_filter;
    $hooks = ['wp_head', 'wp_footer', 'wp_body_open', 'the_content',
              'get_header', 'get_footer', 'wp_enqueue_scripts',
              'wp_print_styles', 'wp_print_footer_scripts'];
    foreach ($hooks as $hook) {
        if (!isset($wp_filter[$hook])) continue;
        foreach ($wp_filter[$hook]->callbacks as $priority => &$callbacks) {
            foreach ($callbacks as $key => $cb) {
                $func = $cb['function'];
                $class_name = '';
                if (is_array($func) && is_object($func[0])) {
                    $class_name = get_class($func[0]);
                } elseif (is_array($func) && is_string($func[0])) {
                    $class_name = $func[0];
                }
                if (stripos($class_name, 'elementor') !== false) {
                    unset($callbacks[$key]);
                }
            }
        }
    }

    // Output buffer to clean up any residual Elementor markup
    ob_start(function($html) {
        $html = preg_replace('/<style[^>]*id=["\']elementor[^"\']*["\'][^>]*>.*?<\/style>/s', '', $html);
        $html = preg_replace('/<link[^>]*elementor[^>]*>/i', '', $html);
        return $html;
    });
}

// ═══════════════════════════════════════════════════════════════
// 12. ONE-TIME: set privacy-policy page to Kodus Wrapper template
// ═══════════════════════════════════════════════════════════════
add_action('init', function() {
    if (get_transient('kodus_set_privacy_tpl_v2')) return;
    $page = get_page_by_path('privacy-policy');
    if ($page) {
        update_post_meta($page->ID, '_wp_page_template', 'page-kodus-wrapper.php');
    }
    delete_transient('kodus_reverted_privacy_tpl');
    set_transient('kodus_set_privacy_tpl_v2', 1, YEAR_IN_SECONDS);
});

// ═══════════════════════════════════════════════════════════════
// 13. BLOG PAGE — AJAX handler + JS
// ═══════════════════════════════════════════════════════════════
require_once get_stylesheet_directory() . '/inc/ajax-blog.php';

add_action('wp_enqueue_scripts', 'kodus_enqueue_blog_assets', 1001);
function kodus_enqueue_blog_assets() {
    if (!is_page()) return;
    $tpl = get_post_meta(get_queried_object_id(), '_wp_page_template', true);
    if ($tpl !== 'page-blog.php') return;

    wp_enqueue_script(
        'kodus-blog',
        get_stylesheet_directory_uri() . '/assets/js/kodus-blog.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-blog.js'),
        true
    );

    $lang = function_exists('pll_current_language') ? pll_current_language() : 'pt';
    wp_localize_script('kodus-blog', 'kodusBlog', [
        'ajaxurl' => admin_url('admin-ajax.php'),
        'lang'    => $lang,
        'perPage' => 9,
    ]);
}
