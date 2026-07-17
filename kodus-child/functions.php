<?php
/**
 * Kodus Child Theme — functions.php
 */

require_once get_stylesheet_directory() . '/inc/comparison-page.php';
require_once get_stylesheet_directory() . '/inc/llms-txt.php';
require_once get_stylesheet_directory() . '/inc/robots-policy.php';
require_once get_stylesheet_directory() . '/inc/schema.php';
require_once get_stylesheet_directory() . '/inc/security-headers.php';

// Ensure WP outputs <title> in head.
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
}, 20);

// ═══════════════════════════════════════════════════════════════
// 1. CARREGAR CSS DO TEMA PAI (pro blog funcionar)
// ═══════════════════════════════════════════════════════════════
add_action('wp_enqueue_scripts', 'kodus_child_enqueue_parent', 10);
function kodus_child_enqueue_parent() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function kodus_get_current_page_template() {
    if (is_front_page()) {
        $front_page_id = (int) get_option('page_on_front');
        if ($front_page_id > 0) {
            return (string) get_post_meta($front_page_id, '_wp_page_template', true);
        }
    }

    $post_id = get_queried_object_id();
    if (!$post_id) {
        return '';
    }

    return (string) get_post_meta($post_id, '_wp_page_template', true);
}

function kodus_get_english_product_templates() {
    return [
        'page-ai-engineering-fde.php',
        'page-managed-qa.php',
        'page-engineering-quality-sprint.php',
        'page-home.php',
        'page-pricing.php',
        'page-customers.php',
        'page-roi.php',
        'page-benchmark.php',
        'page-case-brendi.php',
        'page-case-lerian.php',
        'page-case-notificacoes.php',
        'page-kodus-wrapper.php',
        'page-kodus-vs-coderabbit.php',
        'page-kodus-vs-bugbot.php',
        'page-kodus-vs-github.php',
        'page-kodus-vs-claude.php',
        'page-self-hosted-ai-code-review.php',
        'page-byo-llm-code-review.php',
        'page-policy-as-code-review.php',
        'page-data.php',
        'page-manifesto.php',
    ];
}

function kodus_is_english_product_page() {
    if (!is_page() && !is_front_page()) {
        return false;
    }

    return in_array(kodus_get_current_page_template(), kodus_get_english_product_templates(), true);
}

function kodus_get_current_page_permalink() {
    if (is_front_page()) {
        return home_url('/');
    }

    $post_id = get_queried_object_id();
    if ($post_id) {
        $permalink = get_permalink($post_id);
        if ($permalink) {
            return $permalink;
        }
    }

    $request_uri = isset($_SERVER['REQUEST_URI']) ? (string) wp_unslash($_SERVER['REQUEST_URI']) : '/';
    $request_path = (string) wp_parse_url($request_uri, PHP_URL_PATH);

    return home_url(trailingslashit($request_path));
}

function kodus_home_meta_title() {
    return 'Kodus | Open Source AI Code Review';
}

function kodus_home_meta_description() {
    return 'Kody is an open source code review tool that learns your team\'s workflow and delivers precise reviews on quality, security, and performance.';
}

function kodus_get_product_meta_titles() {
    return [
        'page-ai-engineering-fde.php' => 'AI Engineering Assessment | Kodus',
        'page-managed-qa.php' => 'Managed QA for critical user flows | Kodus',
        'page-engineering-quality-sprint.php' => 'Stop AI bugs reaching production | Kodus sprint',
        'page-home.php' => 'Kodus | Open Source AI Code Review',
        'page-pricing.php' => 'Kodus Pricing | AI Code Review | Try for free',
        'page-customers.php' => 'Kodus Customers | AI Code Review',
        'page-benchmark.php' => 'AI Code Review Tools Benchmark',
        'page-case-brendi.php' => 'Brendi Case Study | Kodus',
        'page-case-lerian.php' => 'Lerian Case Study | Kodus',
        'page-case-notificacoes.php' => 'Notificações Inteligentes Case Study | Kodus',
        'page-kodus-vs-coderabbit.php' => 'Kodus vs CodeRabbit | AI Code Review Tools Compared',
        'page-kodus-vs-bugbot.php' => 'Kodus vs Cursor BugBot | AI Code Review Tools Compared',
        'page-kodus-vs-github.php' => 'Kodus vs GitHub Copilot | AI Code Review Tools Compared',
        'page-kodus-vs-claude.php' => 'Kodus vs Claude | AI Code Review Tools Compared',
        'page-self-hosted-ai-code-review.php' => 'Self-Hosted AI Code Review | Kodus (Open Source, AGPLv3)',
        'page-byo-llm-code-review.php' => 'BYO LLM Code Review | Kodus (Bring Any Model, Zero Markup)',
        'page-policy-as-code-review.php' => 'Policy as Code Review | Kodus (Plain-English Rules, Per-Folder)',
        'page-data.php' => 'State of AI Code Review 2026 | Kodus Research',
        'page-manifesto.php' => 'Kodus Investor Memo | AI Code Acceptance Layer',
    ];
}

function kodus_get_current_page_meta_title() {
    $template = kodus_get_current_page_template();
    $titles = kodus_get_product_meta_titles();

    if (isset($titles[$template])) {
        return $titles[$template];
    }

    return '';
}

function kodus_get_product_meta_descriptions() {
    return [
        'page-ai-engineering-fde.php' => 'A three-week assessment of how AI-generated changes move through context, review, tests and delivery, with evidence and a prioritized 30/90-day action plan.',
        'page-managed-qa.php' => 'Kodus protects critical user journeys with browser tests, API checks or AI evals in your repository, plus ongoing maintenance and human failure triage.',
        'page-engineering-quality-sprint.php' => 'A founder-led 4-week embedded sprint for teams shipping fast with AI. We build the safety net that stops AI bugs from reaching production — measured before and after.',
        'page-home.php' => 'Open source AI code review — reviews that adapt to your team. Catch issues early, keep delivery moving, and improve quality without slowing things down.',
        'page-pricing.php' => 'Choose the right plan for your engineering team and get AI-powered code reviews that feel like your senior dev wrote them — with context, quality, and consistency.',
        'page-customers.php' => 'See how engineering teams use Kodus to speed up code review, improve pull request quality, and enforce custom standards across repositories.',
        'page-roi.php' => 'Calculate the ROI of AI code review with Kodus and estimate time saved, review cost reduction, and engineering impact for your team.',
        'page-benchmark.php' => 'We evaluated the leading AI code review tools using real PRs from open-source projects. See how each solution performs in practice.',
        'page-case-brendi.php' => 'Before Kodus, I woke up to 3/4 PRs waiting for review—and 2 hours of my day gone in manual checks.',
        'page-case-lerian.php' => 'Discover how Lerian cut review time by over 60% with Kodus, freeing up engineers to focus on critical tasks and accelerating product delivery.',
        'page-case-notificacoes.php' => 'See how Notificacoes Inteligentes uses Kody as a senior reviewer to bring consistency, reduce rework, and deliver with more confidence.',
        'page-kodus-wrapper.php' => 'Explore Kodus, the open source AI code review platform for pull requests, engineering standards, security checks, and customizable team workflows.',
        'page-kodus-vs-coderabbit.php' => 'See how Kodus stacks up against CodeRabbit in features, customization, context awareness, and team fit.',
        'page-kodus-vs-bugbot.php' => 'See how Kodus stacks up against Cursor Bugbot in features, customization, context awareness, and team fit.',
        'page-kodus-vs-github.php' => 'Here’s how Kodus stacks up against GitHub Copilot in features, customization, context understanding, and how well it fits your team.',
        'page-kodus-vs-claude.php' => 'See how Kodus compares to Claude in features, customization, contextual understanding, and overall fit for your team.',
        'page-self-hosted-ai-code-review.php' => 'Open source AI code review without vendor lock-in. Runs on your infrastructure, deploys with Docker Compose, brings any OpenAI-compatible LLM. AGPLv3.',
        'page-byo-llm-code-review.php' => 'Bring your own LLM to AI code review. Pay the model provider directly with zero markup on inference. Open source, supports any OpenAI-compatible model.',
        'page-policy-as-code-review.php' => 'Write your team review rules in plain English. Kodus enforces them in every PR with inline comments. Per repo, per folder, versioned audit trail. Open source, AGPLv3.',
        'page-data.php' => '180,739 AI code-review suggestions across 530 organizations: what happens after an AI leaves a review comment. 33.2% become code. Kodus production data, Sep 2025 to Jun 2026.',
        'page-manifesto.php' => 'An open memo on why Kodus is building the merge layer for AI-generated code: open source AI code review without vendor lock-in.',
    ];
}

function kodus_get_current_page_meta_description() {
    $template = kodus_get_current_page_template();
    $descriptions = kodus_get_product_meta_descriptions();

    if (isset($descriptions[$template])) {
        return $descriptions[$template];
    }

    return '';
}

function kodus_is_primary_home() {
    return is_front_page() || is_home();
}

// Core WP title for pages where Yoast does not inject a title tag.
add_filter('pre_get_document_title', function ($title) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_title();
    }
    $custom_title = kodus_get_current_page_meta_title();
    if ($custom_title !== '') {
        return $custom_title;
    }
    return $title;
}, 20);

// Yoast metadata overrides for home.
add_filter('wpseo_title', function ($title) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_title();
    }
    $custom_title = kodus_get_current_page_meta_title();
    if ($custom_title !== '') {
        return $custom_title;
    }
    return $title;
}, 20);

add_filter('wpseo_metadesc', function ($desc) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_description();
    }
    $custom_description = kodus_get_current_page_meta_description();
    if ($custom_description !== '') {
        return $custom_description;
    }
    return $desc;
}, 20);

add_filter('wpseo_opengraph_title', function ($title) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_title();
    }
    $custom_title = kodus_get_current_page_meta_title();
    if ($custom_title !== '') {
        return $custom_title;
    }
    return $title;
}, 20);

add_filter('wpseo_opengraph_desc', function ($desc) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_description();
    }
    $custom_description = kodus_get_current_page_meta_description();
    if ($custom_description !== '') {
        return $custom_description;
    }
    return $desc;
}, 20);

add_filter('wpseo_twitter_title', function ($title) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_title();
    }
    $custom_title = kodus_get_current_page_meta_title();
    if ($custom_title !== '') {
        return $custom_title;
    }
    return $title;
}, 20);

add_filter('wpseo_twitter_description', function ($desc) {
    if (kodus_is_primary_home()) {
        return kodus_home_meta_description();
    }
    $custom_description = kodus_get_current_page_meta_description();
    if ($custom_description !== '') {
        return $custom_description;
    }
    return $desc;
}, 20);

// Per-template social share image (overrides the site default og:image / twitter:image).
function kodus_get_product_meta_images() {
    return [
        'page-data.php' => get_stylesheet_directory_uri() . '/assets/img/og-data.png',
    ];
}

function kodus_get_current_page_meta_image() {
    $template = kodus_get_current_page_template();
    $images = kodus_get_product_meta_images();
    if (isset($images[$template])) {
        return $images[$template];
    }
    return '';
}

add_filter('wpseo_opengraph_image', function ($image) {
    $custom = kodus_get_current_page_meta_image();
    return $custom !== '' ? $custom : $image;
}, 20);

add_filter('wpseo_twitter_image', function ($image) {
    $custom = kodus_get_current_page_meta_image();
    return $custom !== '' ? $custom : $image;
}, 20);

// Add x-default hreflang for single blog posts, preferring the EN translation.
add_action('wp_head', 'kodus_add_post_x_default_hreflang', 20);
function kodus_add_post_x_default_hreflang() {
    if (!is_singular('post')) {
        return;
    }

    $post_id = get_queried_object_id();
    if (!$post_id) {
        return;
    }

    $target_post_id = $post_id;

    if (function_exists('pll_get_post')) {
        $english_post_id = pll_get_post($post_id, 'en');
        if (!empty($english_post_id)) {
            $target_post_id = $english_post_id;
        }
    }

    $target_url = get_permalink($target_post_id);
    if (!$target_url) {
        return;
    }

    echo '<link rel="alternate" hreflang="x-default" href="' . esc_url($target_url) . '">' . "\n";
}

// ═══════════════════════════════════════════════════════════════
// 2. LISTA DE TODOS OS TEMPLATES RETRO
// ═══════════════════════════════════════════════════════════════
function kodus_get_retro_templates() {
    return [
        'page-ai-engineering-fde.php',
        'page-managed-qa.php',
        'page-engineering-quality-sprint.php',
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
        'page-kodus-vs-coderabbit.php',
        'page-kodus-vs-bugbot.php',
        'page-kodus-vs-github.php',
        'page-kodus-vs-claude.php',
        'page-self-hosted-ai-code-review.php',
        'page-byo-llm-code-review.php',
        'page-policy-as-code-review.php',
        'page-data.php',
        'page-manifesto.php',
    ];
}

// Helper: checa se a página atual usa um template retro (funciona em block themes)
function kodus_is_retro_page() {
    // Blog posts, archives, blog index, and search use retro layout
    if (is_singular('post') || is_archive() || is_home() || is_search() || is_404()) {
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

function kodus_get_trusted_logo_items() {
    return [
        ['file' => 'logos_new/purple_metrics.webp', 'name' => 'Purple Metrics'],
        ['file' => 'logos_new/r10.webp', 'name' => 'R10 Score'],
        ['file' => 'logos_new/frame_16.webp', 'name' => 'Sommus Sistemas'],
        ['file' => 'logos_new/cred.webp', 'name' => 'Cred Aluga'],
        ['file' => 'logos_new/ikatec.webp', 'name' => 'Ikatec'],
        ['file' => 'logos_new/maino.webp', 'name' => 'Mainô'],
        ['file' => 'logos_new/frame_9.webp', 'name' => 'Open Co'],
        ['file' => 'logos_new/frame_7.webp', 'name' => 'Rocket.Chat'],
        ['file' => 'logos_new/vixt.webp', 'name' => 'Vixting'],
        ['file' => 'logos_new/frame_12.webp', 'name' => 'Seeds'],
        ['file' => 'logos_new/frame_10.webp', 'name' => 'Pilar'],
        ['file' => 'logos_new/frame_8.webp', 'name' => 'Asksuite'],
        ['file' => 'logos_new/frame_11.webp', 'name' => 'Mecanizou'],
        ['file' => 'logos_new/doji.webp', 'name' => 'Doji'],
        ['file' => 'logos_new/frame_13.webp', 'name' => 'Lecom'],
        ['file' => 'logos_new/frame_14.webp', 'name' => 'Precisão Sistemas'],
        ['file' => 'logos_new/frame_17.webp', 'name' => 'Up Estate'],
        ['file' => 'logos_new/frame_19.webp', 'name' => 'SaaSJet'],
        ['file' => 'logos_new/brendi_v2.webp', 'name' => 'Brendi'],
        ['file' => 'logos_new/lerian_v2.webp', 'name' => 'Lerian', 'class' => 'logo-carousel__img--lerian'],
        ['file' => 'logos_new/notificacoes.webp', 'name' => 'Notificações Inteligentes', 'class' => 'logo-carousel__img--notificacoes'],
        ['file' => 'clickbus.png', 'name' => 'ClickBus', 'class' => 'logo-carousel__img--clickbus'],
        ['file' => 'logos_new/quintoandar.png', 'name' => 'QuintoAndar', 'class' => 'logo-carousel__img--quintoandar'],
    ];
}

function kodus_render_trusted_logo_carousel() {
    $base_uri = trailingslashit(get_stylesheet_directory_uri()) . 'assets/img/';
    $logos = kodus_get_trusted_logo_items();

    echo '<div class="logo-carousel" data-logo-carousel>';
    echo '<div class="logo-carousel__track">';

    for ($copy = 0; $copy < 2; $copy++) {
        echo '<div class="logo-carousel__group"' . ($copy === 1 ? ' aria-hidden="true"' : '') . '>';

        foreach ($logos as $logo) {
            $classes = 'logo-carousel__img';
            if (!empty($logo['class'])) {
                $classes .= ' ' . $logo['class'];
            }

            printf(
                '<img src="%s" alt="%s" class="%s" decoding="async">',
                esc_url($base_uri . $logo['file']),
                esc_attr($logo['name']),
                esc_attr($classes)
            );
        }

        echo '</div>';
    }

    echo '</div>';
    echo '</div>';
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

    if (kodus_get_current_page_template() === 'page-managed-qa.php') {
        wp_enqueue_style(
            'kodus-managed-qa-tokens',
            get_stylesheet_directory_uri() . '/assets/css/managed-qa-tokens.css',
            ['kodus-retro'],
            filemtime(get_stylesheet_directory() . '/assets/css/managed-qa-tokens.css')
        );

        wp_enqueue_style(
            'kodus-managed-qa',
            get_stylesheet_directory_uri() . '/assets/css/managed-qa.css',
            ['kodus-managed-qa-tokens'],
            filemtime(get_stylesheet_directory() . '/assets/css/managed-qa.css')
        );

        wp_enqueue_script(
            'kodus-managed-qa',
            get_stylesheet_directory_uri() . '/assets/js/managed-qa.js',
            [],
            filemtime(get_stylesheet_directory() . '/assets/js/managed-qa.js'),
            true
        );
    }

    if (kodus_get_current_page_template() === 'page-ai-engineering-fde.php') {
        wp_enqueue_style(
            'kodus-ai-engineering-fde-tokens',
            get_stylesheet_directory_uri() . '/assets/css/ai-engineering-fde-tokens.css',
            ['kodus-retro'],
            filemtime(get_stylesheet_directory() . '/assets/css/ai-engineering-fde-tokens.css')
        );

        wp_enqueue_style(
            'kodus-ai-engineering-fde',
            get_stylesheet_directory_uri() . '/assets/css/ai-engineering-fde.css',
            ['kodus-ai-engineering-fde-tokens'],
            filemtime(get_stylesheet_directory() . '/assets/css/ai-engineering-fde.css')
        );

        wp_enqueue_script(
            'kodus-ai-engineering-fde',
            get_stylesheet_directory_uri() . '/assets/js/ai-engineering-fde.js',
            [],
            filemtime(get_stylesheet_directory() . '/assets/js/ai-engineering-fde.js'),
            true
        );
    }

    if (kodus_get_current_page_template() === 'page-manifesto.php') {
        wp_enqueue_style(
            'kodus-manifesto',
            get_stylesheet_directory_uri() . '/assets/css/kodus-manifesto.css',
            ['kodus-retro'],
            filemtime(get_stylesheet_directory() . '/assets/css/kodus-manifesto.css')
        );
    }

    // Carregar JS retro (no footer)
    wp_enqueue_script(
        'kodus-retro',
        get_stylesheet_directory_uri() . '/assets/js/kodus-retro.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-retro.js'),
        true
    );

    // Terminal dev mode (pure JS overlay, no SEO impact)
    wp_enqueue_script(
        'kodus-terminal',
        get_stylesheet_directory_uri() . '/assets/js/kodus-terminal.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-terminal.js'),
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
        // High-priority preload of the Google Fonts stylesheet so the
        // @font-face declarations arrive before render-blocking parsing
        // of the body. Lighthouse 11/mai showed LCP waiting on hero
        // font (Press Start 2P / Inter) on homepage and pricing.
        echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Inter:wght@400;600;700&family=Press+Start+2P&display=swap" crossorigin>' . "\n";
    }
}

add_action('wp_head', 'kodus_preload_404_image', 2);
function kodus_preload_404_image() {
    if (!is_404()) {
        return;
    }
    $href = esc_url(get_stylesheet_directory_uri() . '/assets/img/kody-404.png');
    echo '<link rel="preload" as="image" href="' . $href . '">' . "\n";
}

// ═══════════════════════════════════════════════════════════════
// 4b. PRELOAD FEATURED IMAGE ON SINGULAR POSTS/PAGES
//     Lighthouse 11/mai flagged the featured image as LCP element
//     on alternative/comparison posts (e.g. /en/coderabbit-alternative/)
//     with requestDiscoverable=false. Preloading via <link rel=preload>
//     with imagesrcset/imagesizes makes the LCP candidate discoverable
//     during the initial HTML parse, before kodus-retro.css loads.
//     Paired with the wp_get_attachment_image_attributes filter that
//     also adds fetchpriority=high to the actual <img> tag.
// ═══════════════════════════════════════════════════════════════
add_action('wp_head', 'kodus_preload_featured_image', 2);
function kodus_preload_featured_image() {
    if (!is_singular() || !has_post_thumbnail()) {
        return;
    }
    $thumb_id = (int) get_post_thumbnail_id();
    if ($thumb_id <= 0) {
        return;
    }
    $url = wp_get_attachment_image_url($thumb_id, 'large');
    if (!$url) {
        return;
    }
    $srcset = wp_get_attachment_image_srcset($thumb_id, 'large');
    $sizes  = wp_get_attachment_image_sizes($thumb_id, 'large');
    $tag = '<link rel="preload" as="image" fetchpriority="high" href="' . esc_url($url) . '"';
    if ($srcset) {
        $tag .= ' imagesrcset="' . esc_attr($srcset) . '"';
    }
    if ($sizes) {
        $tag .= ' imagesizes="' . esc_attr($sizes) . '"';
    }
    $tag .= '>';
    echo $tag . "\n";
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
    $templates['page-ai-engineering-fde.php'] = 'Kodus AI Engineering Assessment';
    $templates['page-managed-qa.php'] = 'Kodus Managed QA';
    $templates['page-engineering-quality-sprint.php'] = 'Kodus Engineering Quality Sprint';
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
    $templates['page-kodus-vs-coderabbit.php'] = 'Kodus vs CodeRabbit';
    $templates['page-kodus-vs-bugbot.php']     = 'Kodus vs Cursor BugBot';
    $templates['page-kodus-vs-github.php']     = 'Kodus vs GitHub Copilot';
    $templates['page-kodus-vs-claude.php']     = 'Kodus vs Claude';
    $templates['page-self-hosted-ai-code-review.php'] = 'Kodus Self-Hosted AI Code Review';
    $templates['page-byo-llm-code-review.php']        = 'Kodus BYO LLM Code Review';
    $templates['page-policy-as-code-review.php']      = 'Kodus Policy as Code Review';
    $templates['page-data.php']                       = 'Kodus Data Report';
    $templates['page-manifesto.php']                  = 'Kodus Manifesto';
    return $templates;
}

// ═══════════════════════════════════════════════════════════════
// 7. FORÇAR TEMPLATE PHP EM BLOCK THEMES (inclui front_page)
// ═══════════════════════════════════════════════════════════════
add_filter('template_include', 'kodus_force_page_template', 999);
function kodus_force_page_template($template) {
    // Force custom 404 template for block theme setup.
    if (is_404()) {
        $child_template = get_stylesheet_directory() . '/404.php';
        if (file_exists($child_template)) {
            return $child_template;
        }
    }

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

    // Re-inject GTM with short delay plus interaction fallback.
    // This keeps performance protection while preserving page view tracking.
    if ($had_gtm) {
        $delayed_gtm_loader = "<script>(function(){window.dataLayer=window.dataLayer||[];window.gtag=window.gtag||function(){window.dataLayer.push(arguments);};var gtmLoaded=false;var timeoutId=null;var interactionEvents=['click','keydown','scroll','touchstart'];function removeListeners(){interactionEvents.forEach(function(evt){window.removeEventListener(evt,loadGTM,{capture:false});});}function loadGTM(){if(gtmLoaded){return;}gtmLoaded=true;if(timeoutId){clearTimeout(timeoutId);}removeListeners();window.dataLayer.push({'gtm.start':Date.now(),event:'gtm.js'});var s=document.createElement('script');s.async=true;s.src='https://www.googletagmanager.com/gtm.js?id=GTM-KN2J57G';document.head.appendChild(s);}interactionEvents.forEach(function(evt){window.addEventListener(evt,loadGTM,{once:true,passive:true});});if(document.readyState==='loading'){document.addEventListener('DOMContentLoaded',function(){timeoutId=setTimeout(loadGTM,800);},{once:true});}else{timeoutId=setTimeout(loadGTM,800);}})();</script>";
        $html = preg_replace('/<\/head>/i', $delayed_gtm_loader . "\n</head>", $html, 1);
    }

    if (kodus_is_english_product_page()) {
        $current_url = esc_url(kodus_get_current_page_permalink());
        $hreflang_links = '<link rel="alternate" href="' . $current_url . '" hreflang="en" />' . "\n";
        $hreflang_links .= '<link rel="alternate" href="' . $current_url . '" hreflang="x-default" />' . "\n";

        $html = preg_replace('/<html\b[^>]*\blang=(["\'])[^"\']+\1([^>]*)>/i', '<html lang="en-US"$2>', $html, 1);
        $html = preg_replace('/\s*<link rel="alternate" href="[^"]+" hreflang="[^"]+"\s*\/?>\s*/i', "\n", $html);
        $html = preg_replace('/\s*<meta property="og:locale:alternate" content="[^"]+"\s*\/?>\s*/i', "\n", $html);
        $html = preg_replace('/<meta property="og:locale" content="[^"]+"\s*\/?>/i', '<meta property="og:locale" content="en_US" />', $html, 1);
        $html = preg_replace('/(<meta name=[\'"]robots[\'"][^>]*>\s*)/i', "$1" . $hreflang_links, $html, 1);
        $html = str_replace('"inLanguage":"pt-BR"', '"inLanguage":"en-US"', $html);
        $html = str_replace('"inLanguage":"pt_BR"', '"inLanguage":"en_US"', $html);
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
        'connect.facebook.net/',
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
// 9b2. PROMOTE FEATURED IMAGE TO LCP CANDIDATE ON SINGULAR PAGES
//      Lighthouse 11/mai flagged loading=lazy + missing fetchpriority
//      on /en/coderabbit-alternative/ and /en/ai-code-review-tools/
//      featured images (the LCP element). This filter eagerly loads
//      and prioritizes the post thumbnail on singular post/page views.
// ═══════════════════════════════════════════════════════════════
add_filter('wp_get_attachment_image_attributes', 'kodus_prioritize_featured_image', 10, 3);
function kodus_prioritize_featured_image($attr, $attachment, $size) {
    if (!is_singular() || !in_the_loop() || !has_post_thumbnail()) {
        return $attr;
    }
    if ((int) $attachment->ID !== (int) get_post_thumbnail_id()) {
        return $attr;
    }
    $attr['loading'] = 'eager';
    $attr['fetchpriority'] = 'high';
    if (isset($attr['decoding']) && $attr['decoding'] === 'async') {
        $attr['decoding'] = 'sync';
    }
    return $attr;
}

// ═══════════════════════════════════════════════════════════════
// 9b3. INLINE CRITICAL CSS + ASYNC kodus-retro.css (LCP fix)
//      Lighthouse 11/mai showed LCP 4.5-5.3s with hero text/image
//      waiting on the 183 KiB kodus-retro.css render-blocking load.
//      Per-template critical CSS (above-the-fold) is inlined in
//      <head> priority 1, and the full stylesheet loads async via
//      preload+onload swap. Pages without critical CSS render normally.
// ═══════════════════════════════════════════════════════════════
function kodus_get_critical_css_name() {
    if (is_front_page()) {
        return 'homepage';
    }
    if (is_page()) {
        $template = basename((string) get_page_template_slug());
        if ($template === 'page-pricing.php') {
            return 'pricing';
        }
    }
    if (is_singular('post')) {
        $slug = (string) get_post_field('post_name');
        if ($slug === 'coderabbit-alternative') {
            return 'coderabbit-alternative';
        }
        if ($slug === 'ai-code-review-tools') {
            return 'ai-code-review-tools';
        }
    }
    return null;
}

add_action('wp_head', 'kodus_inline_critical_css', 1);
function kodus_inline_critical_css() {
    $name = kodus_get_critical_css_name();
    if ($name === null) {
        return;
    }
    $path = get_stylesheet_directory() . "/assets/css/critical/{$name}.css";
    if (!is_readable($path)) {
        return;
    }
    $css = file_get_contents($path);
    if ($css === false || $css === '') {
        return;
    }
    // Already minified by extraction tool; inline as-is.
    echo "<style id=\"kodus-critical\">{$css}</style>\n";
}

add_filter('style_loader_tag', 'kodus_async_retro_css', 10, 4);
function kodus_async_retro_css($html, $handle, $href, $media) {
    if ($handle !== 'kodus-retro') {
        return $html;
    }
    if (kodus_get_critical_css_name() === null) {
        // No critical CSS for this page; keep sync load to avoid FOUC.
        return $html;
    }
    $url = esc_url($href);
    return sprintf(
        '<link rel="preload" as="style" href="%1$s" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n" .
        '<noscript><link rel="stylesheet" href="%1$s"></noscript>' . "\n",
        $url
    );
}

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

// ═══════════════════════════════════════════════════════════════
// 13b. PR REVIEW LIVE DEMO — assets + public API config (home section)
// ═══════════════════════════════════════════════════════════════

/**
 * Base URL of the public PR Review API the front-end talks to directly.
 *
 * Override per-environment (in order of precedence):
 *   1. define('KODUS_PUBLIC_API_URL', 'https://api.kodus.io') in wp-config.php
 *   2. env var KODUS_PUBLIC_API_URL
 *   3. the 'kodus_public_api_url' filter
 * Defaults to http://localhost:3001 for local Docker dev.
 */
function kodus_public_api_url() {
    if (defined('KODUS_PUBLIC_API_URL') && KODUS_PUBLIC_API_URL) {
        $url = KODUS_PUBLIC_API_URL;
    } elseif (getenv('KODUS_PUBLIC_API_URL')) {
        $url = getenv('KODUS_PUBLIC_API_URL');
    } else {
        $url = 'http://localhost:3001';
    }
    return untrailingslashit(apply_filters('kodus_public_api_url', $url));
}

/**
 * Base URL of the "try" front-end that owns the PR review-result screen.
 * After enqueuing a live review we redirect the visitor to {try}/r/{jobId}
 * instead of rendering the result on the marketing site.
 *
 * Override via define('KODUS_TRY_URL', ...), env var, or the filter.
 * Defaults to http://localhost:3002 for local Docker dev.
 */
function kodus_try_url() {
    if (defined('KODUS_TRY_URL') && KODUS_TRY_URL) {
        $url = KODUS_TRY_URL;
    } elseif (getenv('KODUS_TRY_URL')) {
        $url = getenv('KODUS_TRY_URL');
    } else {
        $url = 'http://localhost:3002';
    }
    return untrailingslashit(apply_filters('kodus_try_url', $url));
}

add_action('wp_enqueue_scripts', 'kodus_enqueue_pr_review_assets', 1001);
function kodus_enqueue_pr_review_assets() {
    // Temporarily disabled — the "Test Kodus on a real PR" section is hidden
    // (see page-home.php) while we sort out attribution/measurement. This skips
    // loading the CSS/JS (and its featured-reviews API ping). Remove this line
    // to re-enable. Code below kept intact.
    return;

    // Only on the home template (front page uses page-home.php).
    if (!is_page() && !is_front_page()) return;
    $post_id = is_front_page() ? get_option('page_on_front') : get_queried_object_id();
    if (get_post_meta($post_id, '_wp_page_template', true) !== 'page-home.php') return;

    wp_enqueue_style(
        'kodus-pr-review',
        get_stylesheet_directory_uri() . '/assets/css/kodus-pr-review.css',
        ['kodus-retro'],
        filemtime(get_stylesheet_directory() . '/assets/css/kodus-pr-review.css')
    );

    wp_enqueue_script(
        'kodus-pr-review',
        get_stylesheet_directory_uri() . '/assets/js/kodus-pr-review.js',
        [],
        filemtime(get_stylesheet_directory() . '/assets/js/kodus-pr-review.js'),
        true
    );

    wp_localize_script('kodus-pr-review', 'kodusPrReview', [
        'apiUrl' => kodus_public_api_url(),
        'tryUrl' => kodus_try_url(),
    ]);
}

// ═══════════════════════════════════════════════════════════════
// 14. COMPARISON PAGES — 301 redirects from old URLs to final slugs
// ═══════════════════════════════════════════════════════════════
add_action('template_redirect', 'kodus_comparison_redirects', 1);
function kodus_comparison_redirects() {
    $redirects = [
        // Old PT slugs
        '/comparacao-kodus-vs-coderabbit/'     => '/kodus-vs-coderabbit/',
        '/comparacao-kodus-vs-github-copilot/' => '/kodus-vs-github-copilot/',
        '/comparacao-kodus-vs-claude-code/'    => '/kodus-vs-claude/',
        '/kodus-x-cursor-bugbot/'             => '/kodus-vs-cursor-bugbot/',
        // Old EN slugs
        '/en/kodus-vs-coderabbit/'            => '/kodus-vs-coderabbit/',
        '/en/kodus-vs-cursor-bugbot/'         => '/kodus-vs-cursor-bugbot/',
        '/en/kodus-vs-github-copilot/'        => '/kodus-vs-github-copilot/',
        '/en/kodus-vs-claude/'                => '/kodus-vs-claude/',
    ];

    $path = trailingslashit(wp_parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if (isset($redirects[$path])) {
        wp_redirect(home_url($redirects[$path]), 301);
        exit;
    }
}
