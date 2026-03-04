<?php
/**
 * AJAX handler for blog posts (category filter + load more)
 */

add_action('wp_ajax_kodus_blog_posts', 'kodus_ajax_blog_posts');
add_action('wp_ajax_nopriv_kodus_blog_posts', 'kodus_ajax_blog_posts');

function kodus_ajax_blog_posts() {
    $lang     = isset($_GET['lang']) ? sanitize_text_field($_GET['lang']) : '';
    $category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'all';
    $per_page = 9;
    $page     = isset($_GET['page']) ? max(1, absint($_GET['page'])) : 0;

    // Backward compatibility for older frontend payloads using offset.
    if ($page < 1) {
        $offset = isset($_GET['offset']) ? absint($_GET['offset']) : 0;
        $page   = max(1, (int) floor($offset / $per_page) + 1);
    }

    $args = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => $per_page,
        'paged'          => $page,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'ignore_sticky_posts' => true,
    ];

    if ($lang && function_exists('pll_current_language')) {
        $args['lang'] = $lang;
    }

    if ($category && $category !== 'all') {
        $args['category_name'] = $category;
    }

    $query = new WP_Query($args);

    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/blog-card');
        }
        wp_reset_postdata();
    }
    $html = ob_get_clean();

    $total     = $query->found_posts;
    $max_pages = (int) $query->max_num_pages;
    $has_more  = $page < $max_pages;
    $next_page = $has_more ? ($page + 1) : $page;

    wp_send_json([
        'html'     => $html,
        'has_more' => $has_more,
        'total'    => $total,
        'next_page'=> $next_page,
    ]);
}
