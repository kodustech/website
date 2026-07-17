<?php
/**
 * Explicit robots.txt policy for AI search, assistants, and model training.
 */

function kodus_get_robots_txt_content() {
    return implode("\n", [
        '# START KODUS AI CRAWLER POLICY',
        '#',
        '# AI search and assistant access: allowed.',
        'User-agent: OAI-SearchBot',
        'Allow: /',
        '',
        'User-agent: ChatGPT-User',
        'Allow: /',
        '',
        'User-agent: PerplexityBot',
        'Allow: /',
        '',
        'User-agent: ClaudeBot',
        'Allow: /',
        '',
        '# AI training / model improvement: disallowed unless policy changes.',
        'User-agent: GPTBot',
        'Disallow: /',
        '',
        'User-agent: Google-Extended',
        'Disallow: /',
        '',
        'User-agent: Applebot-Extended',
        'Disallow: /',
        '',
        'User-agent: anthropic-ai',
        'Disallow: /',
        '',
        '# General crawling remains allowed.',
        'User-agent: *',
        'Disallow:',
        '',
        'Sitemap: https://kodus.io/sitemap_index.xml',
        '#',
        '# END KODUS AI CRAWLER POLICY',
        '',
    ]);
}

function kodus_filter_robots_txt($output, $public) {
    if ('0' === (string) $public) {
        return $output;
    }

    return kodus_get_robots_txt_content();
}
add_filter('robots_txt', 'kodus_filter_robots_txt', 100000, 2);

function kodus_get_robots_txt_path() {
    if (defined('WP_CONTENT_DIR')) {
        return rtrim(dirname(WP_CONTENT_DIR), '/\\') . '/robots.txt';
    }

    return rtrim(ABSPATH, '/\\') . '/robots.txt';
}

function kodus_sync_robots_txt_file() {
    $path = kodus_get_robots_txt_path();
    $content = kodus_get_robots_txt_content();
    $existing = @file_get_contents($path);

    if ($existing === $content) {
        return;
    }

    $directory = dirname($path);
    $path_exists = file_exists($path);

    if (!is_dir($directory)) {
        return;
    }

    if (!$path_exists && !is_writable($directory)) {
        return;
    }

    if ($path_exists && !is_writable($path)) {
        return;
    }

    @file_put_contents($path, $content, LOCK_EX);
}
add_action('init', 'kodus_sync_robots_txt_file', 20);
