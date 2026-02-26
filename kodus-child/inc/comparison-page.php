<?php
/**
 * Helpers to render comparison pages from source HTML files.
 */

if (!defined('ABSPATH')) {
    exit;
}

function kodus_get_comparison_template_files() {
    return [
        'page-kodus-vs-coderabbit.php',
        'page-kodus-vs-bugbot.php',
        'page-kodus-vs-github.php',
        'page-kodus-vs-claude.php',
    ];
}

function kodus_is_comparison_template($template = '') {
    if (!$template) {
        if (!is_page() && !is_front_page()) {
            return false;
        }
        $post_id = get_queried_object_id();
        if (!$post_id) {
            return false;
        }
        $template = get_post_meta($post_id, '_wp_page_template', true);
    }

    return in_array($template, kodus_get_comparison_template_files(), true);
}

add_filter('body_class', function ($classes) {
    if (kodus_is_comparison_template()) {
        $classes[] = 'kvc-page';
    }
    return $classes;
});

function kodus_render_comparison_page($slug) {
    $slug_map = [
        'kodus-vs-coderabbit' => 'kodus-vs-coderabbit.html',
        'kodus-vs-bugbot'     => 'kodus-vs-bugbot.html',
        'kodus-vs-github'     => 'kodus-vs-github.html',
        'kodus-vs-claude'     => 'kodus-vs-claude.html',
    ];

    if (!isset($slug_map[$slug])) {
        echo '<main><div class="container"><p>Invalid comparison page slug.</p></div></main>';
        return;
    }

    $source_path = get_stylesheet_directory() . '/comparisons-src/' . $slug_map[$slug];
    if (!file_exists($source_path)) {
        echo '<main><div class="container"><p>Comparison source file not found.</p></div></main>';
        return;
    }

    $html = file_get_contents($source_path);
    if ($html === false || $html === '') {
        echo '<main><div class="container"><p>Comparison source file is empty.</p></div></main>';
        return;
    }

    // Force theme asset paths for WP deployment.
    $asset_uri = trailingslashit(get_stylesheet_directory_uri()) . 'assets/';
    $html = preg_replace('#([\'"])/?assets/#', '$1' . $asset_uri, $html);

    // Render inline styles from source page.
    if (preg_match_all('#<style\b[^>]*>(.*?)</style>#is', $html, $style_matches)) {
        foreach ($style_matches[1] as $style_block) {
            $style_block = trim($style_block);
            if ($style_block === '') {
                continue;
            }
            echo "<style>\n" . $style_block . "\n</style>\n";
        }
    }

    // Render only main content (WP header/footer stay shared).
    if (preg_match('#<main\b[^>]*>.*?</main>#is', $html, $main_match)) {
        echo $main_match[0];
    } else {
        echo '<main><div class="container"><p>Main comparison content was not found in source file.</p></div></main>';
    }

    // Render inline scripts needed by comparison blocks.
    if (preg_match_all('#<script\b[^>]*>.*?</script>#is', $html, $script_matches)) {
        foreach ($script_matches[0] as $script_tag) {
            // Skip external scripts and JSON-LD schema blocks from static page.
            if (stripos($script_tag, ' src=') !== false || stripos($script_tag, ' src =') !== false) {
                continue;
            }
            if (stripos($script_tag, 'application/ld+json') !== false) {
                continue;
            }
            echo $script_tag . "\n";
        }
    }
}
