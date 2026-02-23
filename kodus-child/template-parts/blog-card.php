<?php
/**
 * Blog Card — reusable partial
 *
 * Used by page-blog.php, archive.php, and AJAX handler.
 * Expects the global $post to be set (inside a Loop or setup_postdata).
 */
?>
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
