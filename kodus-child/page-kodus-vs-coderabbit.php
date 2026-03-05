<?php
/*
 * Template Name: Kodus vs CodeRabbit
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>
<?php
// Source content is rendered from comparisons-src/kodus-vs-coderabbit.html.
$comparison_slug = 'kodus-vs-coderabbit';
kodus_render_comparison_page($comparison_slug);
?>
<?php get_footer('kodus'); ?>
