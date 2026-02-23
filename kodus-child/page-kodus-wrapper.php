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
        the_content();
    endwhile;
    ?>
  </div>
</main>

<?php get_footer('kodus'); ?>
