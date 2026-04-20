<?php
/**
 * Frontend security headers for AI readiness and baseline browser protection.
 */

function kodus_get_csp_header_value() {
    $directives = [
        "default-src 'self' https: data: blob:",
        "base-uri 'self'",
        "object-src 'none'",
        "frame-ancestors 'self'",
        "form-action 'self' https:",
        "script-src 'self' 'unsafe-inline' 'unsafe-eval' https: blob:",
        "style-src 'self' 'unsafe-inline' https:",
        "img-src 'self' data: blob: https:",
        "font-src 'self' data: https:",
        "connect-src 'self' https: wss:",
        "frame-src 'self' https:",
        "media-src 'self' https: blob:",
        "worker-src 'self' blob:",
        'upgrade-insecure-requests',
    ];

    return implode('; ', $directives);
}

function kodus_add_security_headers($headers) {
    if (is_admin() || wp_doing_ajax()) {
        return $headers;
    }

    if (defined('REST_REQUEST') && REST_REQUEST) {
        return $headers;
    }

    if (is_ssl()) {
        $headers['Strict-Transport-Security'] = 'max-age=31536000; includeSubDomains; preload';
    }

    $headers['Content-Security-Policy'] = kodus_get_csp_header_value();
    $headers['X-Content-Type-Options'] = 'nosniff';
    $headers['X-Frame-Options'] = 'SAMEORIGIN';
    $headers['Referrer-Policy'] = 'strict-origin-when-cross-origin';

    return $headers;
}
add_filter('wp_headers', 'kodus_add_security_headers', 20);
