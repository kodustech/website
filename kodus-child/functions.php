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
// 11. INJETAR HEADER/FOOTER RETRO EM PÁGINAS ELEMENTOR
// ═══════════════════════════════════════════════════════════════
// IDs das páginas Elementor que devem receber header/footer retro
function kodus_get_injected_page_ids() {
    return [22946, 15066]; // terms-of-use, privacy-policy
}

function kodus_is_injected_page() {
    return is_page(kodus_get_injected_page_ids());
}

// 11a. Carregar CSS/JS retro + esconder header/footer do Elementor
add_action('wp_enqueue_scripts', 'kodus_inject_assets', 999);
function kodus_inject_assets() {
    if (!kodus_is_injected_page()) return;

    wp_enqueue_style(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/css/kodus-retro.css',
        [],
        filemtime(get_stylesheet_directory() . '/assets/css/kodus-retro.css')
    );
    wp_enqueue_script(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/js/kodus-retro.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-retro.js'),
        true
    );
    wp_enqueue_style(
        'kodus-fonts',
        'https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=Press+Start+2P&display=swap',
        [],
        null
    );

    // Esconder containers do header/footer Elementor + padding pro header fixo
    wp_add_inline_style('kodus-retro', '
        .elementor-element[data-id="fb7ffe4"],
        .elementor-element[data-id="0f62b0c"] { display: none !important; }
        .elementor[data-elementor-type="wp-page"] > .elementor-top-section:first-of-type { padding-top: 80px; }
    ');
}

// 11a2. Remover CSS dos templates Elementor de header/footer via output buffer
add_action('template_redirect', 'kodus_strip_elementor_hf_css');
function kodus_strip_elementor_hf_css() {
    if (!kodus_is_injected_page()) return;
    ob_start('kodus_remove_elementor_hf_styles');
}
function kodus_remove_elementor_hf_styles($html) {
    // Remove <style id="elementor-post-25308">...</style> (header global)
    $html = preg_replace('/<style id="elementor-post-25308">[^<]*<\/style>/s', '', $html);
    // Remove <style id="elementor-post-25462">...</style> (footer global)
    $html = preg_replace('/<style id="elementor-post-25462">[^<]*<\/style>/s', '', $html);
    return $html;
}

// 11b. Injetar nav retro via wp_body_open
add_action('wp_body_open', 'kodus_inject_nav');
function kodus_inject_nav() {
    if (!kodus_is_injected_page()) return;
    $uri = get_stylesheet_directory_uri();
    $home = home_url();
    ?>
    <header class="header" id="header">
      <nav class="nav container">
        <a href="<?php echo $home; ?>" class="nav__logo">
          <img src="<?php echo $uri; ?>/assets/img/kodus_dark.webp" alt="Kodus" class="nav__logo-img">
        </a>
        <ul class="nav__links" id="navLinks">
          <li><a href="https://docs.kodus.io/how_to_use/en/overview" class="nav__link nav__link--external" target="_blank" rel="noopener">Docs</a></li>
          <li><a href="https://discord.gg/TFZBRk9fT6" class="nav__link nav__link--external" target="_blank" rel="noopener">Community</a></li>
          <li class="nav__dropdown">
            <a href="#" class="nav__link">Resources <span class="nav__chevron">&#9662;</span></a>
            <ul class="nav__dropdown-menu">
              <li><a href="https://kodus.io/code-review-rules/"><span class="nav__item-title">Kody Rules</span><span class="nav__item-desc">Library of production tested review rules for real world codebases.</span></a></li>
              <li><a href="https://kodus.io/changelog-en/"><span class="nav__item-title">Changelog</span><span class="nav__item-desc">Detailed release notes for every Kodus update.</span></a></li>
              <li><a href="https://kodus.io/customers/"><span class="nav__item-title">Customers</span><span class="nav__item-desc">Engineering teams using Kody in their day-to-day code review process.</span></a></li>
              <li><a href="https://docs.kodus.io/how_to_use/en/security/data_usage"><span class="nav__item-title">Security</span><span class="nav__item-desc">Technical overview of how Kodus handles code, models and credentials.</span></a></li>
              <li><a href="https://kodus.io/benchmark-ai-code-review/"><span class="nav__item-title">AI Code Review Tools Benchmarks</span><span class="nav__item-desc">Practical comparison of AI code review tools using real pull requests.</span></a></li>
              <li><a href="https://codereviewbench.com/"><span class="nav__item-title">LLMs Performance Benchmark</span><span class="nav__item-desc">Evaluation of LLMs on real pull request diffs, not toy snippets.</span></a></li>
              <li><a href="https://ai-skills.io/"><span class="nav__item-title">Agent Skills Library</span><span class="nav__item-desc">Curated collection of agent skills and capabilities for AI agents.</span></a></li>
            </ul>
          </li>
          <li><a href="https://kodus.io/en/insights-en/" class="nav__link">Blog</a></li>
          <li><a href="https://kodus.io/pricing/" class="nav__link">Pricing</a></li>
        </ul>
        <div class="nav__actions">
          <a href="https://github.com/kodustech/kodus-ai/stargazers" target="_blank" rel="noopener noreferrer" class="btn btn--github">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
            <span id="ghStars">--</span>
          </a>
          <a href="https://app.kodus.io/sign-in" class="btn btn--outline-light">Login</a>
          <a href="https://app.kodus.io/sign-up" class="btn btn--primary">Start Free Trial</a>
        </div>
        <button class="nav__hamburger" id="navHamburger" aria-label="Toggle menu">
          <span></span><span></span><span></span>
        </button>
      </nav>
    </header>
    <?php
}

// 11c. Injetar footer retro via wp_footer (priority 5 = antes de outros scripts)
add_action('wp_footer', 'kodus_inject_footer_html', 5);
function kodus_inject_footer_html() {
    if (!kodus_is_injected_page()) return;
    $uri = get_stylesheet_directory_uri();
    $home = home_url();
    ?>
    <footer class="footer">
      <div class="container footer__container">
        <div class="footer__brand">
          <a href="<?php echo $home; ?>" class="nav__logo">
            <img src="<?php echo $uri; ?>/assets/img/kodus_dark.webp" alt="Kodus" class="nav__logo-img">
          </a>
          <p class="footer__tagline">The Open Source Alternative to CodeRabbit</p>
        </div>
        <div class="footer__columns">
          <div class="footer__col">
            <h4 class="footer__col-title">Legal & Contact</h4>
            <ul class="footer__col-list">
              <li><a href="https://kodus.io/privacy-policy/">Privacy Policy</a></li>
              <li><a href="https://kodus.io/terms-of-use/">Terms of Use</a></li>
              <li><a href="mailto:support@kodus.io">support@kodus.io</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4 class="footer__col-title">Meet Kody</h4>
            <ul class="footer__col-list">
              <li><a href="https://kodus.io/pricing/">Pricing</a></li>
              <li><a href="https://kodus.io/customers/">Customers</a></li>
              <li><a href="https://kodus.io/code-review-rules/">Kody Rules</a></li>
              <li><a href="https://docs.kodus.io/how_to_use/en/security/data_usage">Security</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4 class="footer__col-title">Resources</h4>
            <ul class="footer__col-list">
              <li><a href="https://kodus.io/en/insights-en/">Blog</a></li>
              <li><a href="https://docs.kodus.io/how_to_use/en/overview">Docs</a></li>
              <li><a href="https://kodus.io/changelog-en/">Changelog</a></li>
              <li><a href="https://discord.gg/TFZBRk9fT6">Support Discord</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4 class="footer__col-title">Helpful Links</h4>
            <ul class="footer__col-list">
              <li><a href="https://kodus.io/benchmark-ai-code-review/">AI Code Review Tools Benchmarks</a></li>
              <li><a href="https://codereviewbench.com/">LLMs Performance Benchmark</a></li>
              <li><a href="https://ai-skills.io/">Agent Skills Library</a></li>
              <li><a href="https://kodus.io/how-software-engineering-teams-are-using-ai-to-be-more-effective/">White Paper</a></li>
              <li><a href="https://kodus.io/kodus-vs-coderabbit/">Kodus vs Coderabbit</a></li>
              <li><a href="https://kodus.io/kodus-vs-cursor-bugbot/">Kodus vs BugBot</a></li>
              <li><a href="https://kodus.io/kodus-vs-github-copilot/">Kodus vs Copilot</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4 class="footer__col-title">Our Network</h4>
            <div class="footer__social">
              <a href="https://www.linkedin.com/company/kodustech/" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="LinkedIn"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
              <a href="https://twitter.com/kodustech" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="X (Twitter)"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg></a>
              <a href="https://www.reddit.com/r/Kodus/" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="Reddit"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0A12 12 0 000 12a12 12 0 0012 12 12 12 0 0012-12A12 12 0 0012 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 01-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 01.042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 014.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 01.14-.197.35.35 0 01.238-.042l2.906.617a1.214 1.214 0 011.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 00-.231.094.33.33 0 000 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 000-.463.327.327 0 00-.462 0c-.545.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 00-.205-.094z"/></svg></a>
              <a href="https://github.com/kodustech" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="GitHub"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg></a>
              <a href="https://discord.gg/TFZBRk9fT6" target="_blank" rel="noopener noreferrer" class="footer__social-link" aria-label="Discord"><svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189z"/></svg></a>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <p>&copy; 2026 Kodus. All rights reserved.</p>
        </div>
      </div>
    </footer>
    <?php
}

// 11d. GitHub stars para páginas injetadas
add_action('wp_enqueue_scripts', 'kodus_inject_stars_cache', 1001);
function kodus_inject_stars_cache() {
    if (!kodus_is_injected_page()) return;
    $stars = get_transient('kodus_github_stars');
    if ($stars === false) {
        $stars = get_option('kodus_github_stars_fallback', 0);
    }
    wp_localize_script('kodus-retro', 'kodusData', ['ghStars' => $stars]);
}
