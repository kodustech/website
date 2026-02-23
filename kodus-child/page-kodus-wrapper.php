<?php
/**
 * Template Name: Kodus Wrapper
 * Template Post Type: page
 *
 * Generic wrapper: retro header + footer around standard WP content.
 * Assign this template to any page (terms-of-use, privacy-policy, etc.)
 */
?>
<?php get_header('kodus'); ?>

<main class="wrapper-content">
  <div class="wrapper-content__inner">
    <?php
    while (have_posts()) :
        the_post();
        // Bypass Elementor rendering — output plain WP content only
        if (class_exists('\Elementor\Plugin')) {
            remove_filter('the_content', [\Elementor\Plugin::$instance->frontend, 'apply_builder_in_content']);
        }
        the_content();
    endwhile;
    ?>
  </div>
</main>

<?php get_footer('kodus'); ?>
