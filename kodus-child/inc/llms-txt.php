<?php
/**
 * Curated llms.txt output for Kodus.
 */

function kodus_get_llms_txt_content() {
    $lines = [
        '# Kodus',
        '',
        '> Kodus is an open source AI code review platform for pull requests, code quality, security, and team-specific engineering standards.',
        '',
        'Kodus helps engineering teams automate reviews, learn team context, measure ROI, and compare AI review systems with a public benchmark.',
        'The main product site is published in English, while the blog and linked resources include English content plus some legacy Portuguese entries.',
        '',
        '## Product',
        '- [Homepage](' . home_url('/') . '): Main product overview',
        '- [Pricing](' . home_url('/pricing/') . '): Plans, pricing, and signup path',
        '- [Customers](' . home_url('/customers/') . '): Customer stories and proof points',
        '- [ROI Calculator](' . home_url('/roi/') . '): Estimate engineering and review impact',
        '',
        '## Benchmark and Evaluation',
        '- [AI Code Review Benchmark](' . home_url('/benchmark-ai-code-review/') . '): Kodus benchmark landing page',
        '- [LLMs Performance Benchmark](https://codereviewbench.com/): External benchmark referenced by Kodus',
        '',
        '## Documentation and Open Source',
        '- [Documentation](https://docs.kodus.io/how_to_use/en/overview): Product docs and onboarding material',
        '- [GitHub Repository](https://github.com/kodustech/kodus-ai): Open source Kodus AI repository',
        '',
        '## Comparisons',
        '- [Kodus vs CodeRabbit](' . home_url('/kodus-vs-coderabbit/') . '): Product comparison page',
        '- [Kodus vs Cursor BugBot](' . home_url('/kodus-vs-cursor-bugbot/') . '): Product comparison page',
        '- [Kodus vs GitHub Copilot](' . home_url('/kodus-vs-github-copilot/') . '): Product comparison page',
        '- [Kodus vs Claude](' . home_url('/kodus-vs-claude/') . '): Product comparison page',
        '',
        '## App',
        '- [Sign In](https://app.kodus.io/sign-in): Existing user login',
        '- [Sign Up](https://app.kodus.io/sign-up): New account creation',
        '',
        '## Blog and Learning',
        '- [Insights](https://kodus.io/en/insights-en/): English blog hub',
        '',
        '## Case Studies',
        '- [Brendi](' . home_url('/case-brendi/') . '): Customer case study',
        '- [Lerian](' . home_url('/case-lerian/') . '): Customer case study',
        '- [Notificacoes Inteligentes](' . home_url('/case-notificacoes/') . '): Customer case study',
    ];

    return implode("\n", $lines) . "\n";
}

function kodus_get_llms_txt_path() {
    if (defined('WP_CONTENT_DIR')) {
        return rtrim(dirname(WP_CONTENT_DIR), '/\\') . '/llms.txt';
    }

    return rtrim(ABSPATH, '/\\') . '/llms.txt';
}

function kodus_sync_llms_txt_file() {
    $path = kodus_get_llms_txt_path();
    $content = kodus_get_llms_txt_content();
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
add_action('init', 'kodus_sync_llms_txt_file', 20);

function kodus_render_llms_txt_fallback() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    $request_path = $request_uri ? (string) wp_parse_url($request_uri, PHP_URL_PATH) : '';

    if ($request_path !== '/llms.txt') {
        return;
    }

    status_header(200);
    header('Content-Type: text/plain; charset=UTF-8');
    echo kodus_get_llms_txt_content();
    exit;
}
add_action('template_redirect', 'kodus_render_llms_txt_fallback', 0);
