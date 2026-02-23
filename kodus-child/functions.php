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
    ];
}

// Helper: checa se a página atual usa um template retro (funciona em block themes)
function kodus_is_retro_page() {
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
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=Press+Start+2P&display=swap',
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
    return $templates;
}

// ═══════════════════════════════════════════════════════════════
// 7. FORÇAR TEMPLATE PHP EM BLOCK THEMES (inclui front_page)
// ═══════════════════════════════════════════════════════════════
add_filter('template_include', 'kodus_force_page_template', 999);
function kodus_force_page_template($template) {
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
    // Skip images that already have loading attribute or are preloaded
    $html = preg_replace(
        '/<img(?![^>]*loading=)(?![^>]*rel="preload")([^>]*)(src=)/i',
        '<img loading="lazy"$1$2',
        $html
    );
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
    // JS de plugins desnecessários
    wp_dequeue_script('contact-form-7');
    wp_dequeue_script('optinmonster-api-script');
    wp_dequeue_script('rock-convert-frontend');
    wp_dequeue_script('lottiefiles');
    wp_dequeue_script('wp-embed');
    
    // CSS de plugins  
    wp_dequeue_style('optinmonster-api-css');
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
// 11. WRAPPER PAGES — strip Elementor header/footer from content
// ═══════════════════════════════════════════════════════════════
// Páginas usando template Kodus Wrapper: o the_content() vem do Elementor
// e inclui widgets de header/footer embutidos. Removemos via filtro.
add_filter('the_content', 'kodus_strip_elementor_hf_widgets', 1);
function kodus_strip_elementor_hf_widgets($content) {
    if (!is_page()) return $content;
    $tpl = get_post_meta(get_the_ID(), '_wp_page_template', true);
    if ($tpl !== 'page-kodus-wrapper.php') return $content;

    // Remove container do header Elementor (data-id="fb7ffe4") e tudo dentro
    $content = preg_replace(
        '/<div[^>]*data-id="fb7ffe4"[^>]*>.*?<\/div>\s*<\/div>\s*<\/div>\s*<\/div>/s',
        '',
        $content
    );
    // Remove container do footer Elementor (data-id="0f62b0c") e tudo dentro
    $content = preg_replace(
        '/<div[^>]*data-id="0f62b0c"[^>]*>.*?<\/div>\s*<\/div>\s*<\/div>/s',
        '',
        $content
    );
    // Remove <style> blocks dos templates de header/footer do Elementor
    $content = preg_replace('/<style id="elementor-post-25308">.*?<\/style>/s', '', $content);
    $content = preg_replace('/<style id="elementor-post-25462">.*?<\/style>/s', '', $content);

    return $content;
}
