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
        <?php while (have_posts()) : the_post(); ?>
          <article class="blog-card">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" class="blog-card__thumb">
                <?php the_post_thumbnail('medium_large'); ?>
              </a>
            <?php endif; ?>
            <div class="blog-card__body">
              <?php
              $categories = get_the_category();
              if ($categories) : ?>
                <span class="blog-card__category"><?php echo esc_html($categories[0]->name); ?></span>
              <?php endif; ?>
              <h2 class="blog-card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="blog-card__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <time class="blog-card__date" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
            </div>
          </article>
        <?php endwhile; ?>
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
