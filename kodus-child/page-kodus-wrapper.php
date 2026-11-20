<?php
/**
 * Template Name: Kodus Wrapper
 * Template Post Type: page
 *
 * Generic wrapper: retro header + footer around standard WP content.
 * Assign this template to any page (terms-of-use, privacy-policy, etc.)
 * If template-parts/legal/<page-slug>.php exists, it is rendered instead of
 * the page content (the DPA works this way).
 */
?>
<?php get_header('kodus'); ?>

<main class="wrapper-content">
  <div class="wrapper-content__inner">
    <?php
    while (have_posts()) :
        the_post();
        // Pages whose text is versioned in the theme (e.g. the DPA) render that file instead of the DB content
        $legal_part = 'template-parts/legal/' . get_post_field('post_name');
        if (locate_template($legal_part . '.php')) {
            get_template_part($legal_part);
            continue;
        }
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
