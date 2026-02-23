<?php
/**
 * Single Post Template — Kodus Retro
 *
 * Renders individual blog posts with the retro header/footer.
 */
?>
<?php get_header('kodus'); ?>

<main class="wrapper-content">
  <div class="wrapper-content__inner entry-content">
    <?php
    while (have_posts()) :
        the_post();

        // Bypass Elementor rendering — output plain WP content only
        if (class_exists('\Elementor\Plugin')) {
            remove_filter('the_content', [\Elementor\Plugin::$instance->frontend, 'apply_builder_in_content']);
        }
    ?>
    <header class="entry-header">
      <div class="entry-meta">
        <?php
        $categories = get_the_category();
        if ($categories) :
            $cat = $categories[0];
        ?>
          <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="entry-category"><?php echo esc_html($cat->name); ?></a>
        <?php endif; ?>
        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
      </div>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry-author">
        <?php echo get_avatar(get_the_author_meta('ID'), 40); ?>
        <span><?php the_author(); ?></span>
      </div>
    </header>

    <?php if (has_post_thumbnail()) : ?>
      <figure class="entry-featured">
        <?php the_post_thumbnail('large'); ?>
      </figure>
    <?php endif; ?>

    <div class="entry-body">
      <?php the_content(); ?>
    </div>

    <?php
    $tags = get_the_tags();
    if ($tags) : ?>
      <div class="entry-tags">
        <?php foreach ($tags as $tag) : ?>
          <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="entry-tag"><?php echo esc_html($tag->name); ?></a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <nav class="post-navigation">
      <?php
      $prev = get_previous_post();
      $next = get_next_post();
      ?>
      <?php if ($prev) : ?>
        <a href="<?php echo get_permalink($prev); ?>" class="post-navigation__link post-navigation__prev">
          <span class="post-navigation__label">&larr; Previous</span>
          <span class="post-navigation__title"><?php echo esc_html(get_the_title($prev)); ?></span>
        </a>
      <?php endif; ?>
      <?php if ($next) : ?>
        <a href="<?php echo get_permalink($next); ?>" class="post-navigation__link post-navigation__next">
          <span class="post-navigation__label">Next &rarr;</span>
          <span class="post-navigation__title"><?php echo esc_html(get_the_title($next)); ?></span>
        </a>
      <?php endif; ?>
    </nav>

    <?php endwhile; ?>
  </div>
</main>

<?php get_footer('kodus'); ?>
