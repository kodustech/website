<?php
/**
 * Archive / Blog Listing Template — Kodus Retro
 *
 * Handles blog index, category, tag, and search results
 * with the retro header/footer layout.
 */
?>
<?php get_header('kodus'); ?>

<main class="wrapper-content">
  <div class="wrapper-content__inner">

    <header class="archive-header">
      <?php if (is_search()) : ?>
        <h1 class="archive-title">Search: <span>&ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;</span></h1>
      <?php elseif (is_category()) : ?>
        <h1 class="archive-title"><?php single_cat_title(); ?></h1>
      <?php elseif (is_tag()) : ?>
        <h1 class="archive-title">Tag: <?php single_tag_title(); ?></h1>
      <?php elseif (is_author()) : ?>
        <h1 class="archive-title">Author: <?php the_author(); ?></h1>
      <?php else : ?>
        <h1 class="archive-title">Blog</h1>
      <?php endif; ?>

      <?php if (category_description()) : ?>
        <p class="archive-description"><?php echo category_description(); ?></p>
      <?php endif; ?>
    </header>

    <?php if (have_posts()) : ?>
      <div class="blog-grid">
        <?php while (have_posts()) : the_post();
          get_template_part('template-parts/blog-card');
        endwhile; ?>
      </div>

      <?php
      the_posts_pagination([
          'mid_size'  => 2,
          'prev_text' => '&larr; Prev',
          'next_text' => 'Next &rarr;',
          'class'     => 'posts-pagination',
      ]);
      ?>

    <?php else : ?>
      <p class="no-results">No posts found.</p>
    <?php endif; ?>

  </div>
</main>

<?php get_footer('kodus'); ?>
