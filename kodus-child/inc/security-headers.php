<?php
/**
 * Frontend security headers for AI readiness and baseline browser protection.
 */

function kodus_get_csp_header_value() {
    // The PR review demo (home) fetches the public API directly from the
    // browser, so its origin must be allowed by connect-src. On prod the API
    // is https (covered by the blanket `https:`), but in local dev it's a
    // plain-http origin (e.g. http://localhost:3001) that needs to be listed.
    $connect = "connect-src 'self' https: wss:";
    if (function_exists('kodus_public_api_url')) {
        $api_origin = wp_parse_url(kodus_public_api_url());
        if (!empty($api_origin['host'])) {
            $origin = $api_origin['scheme'] . '://' . $api_origin['host'];
            if (!empty($api_origin['port'])) {
                $origin .= ':' . $api_origin['port'];
            }
            // Only need to add it explicitly when it isn't already covered.
            if (($api_origin['scheme'] ?? '') !== 'https') {
                $connect .= ' ' . $origin;
            }
        }
    }

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
        $connect,
        "frame-src 'self' https:",
        "media-src 'self' https: blob:",
        "worker-src 'self' blob:",
    ];

    // upgrade-insecure-requests rewrites http→https for every subresource.
    // That's right on prod (the site is https) but breaks local dev, where
    // both the site and the API are plain http. Only emit it under SSL.
    if (is_ssl()) {
        $directives[] = 'upgrade-insecure-requests';
    }

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
