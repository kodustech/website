<?php
/**
 * Template Name: Kodus Blog
 *
 * Retro blog listing with language selector, category filter (AJAX),
 * and load-more pagination.
 */

// Bypass Elementor rendering
if (class_exists('\Elementor\Plugin')) {
    remove_filter('the_content', [\Elementor\Plugin::$instance->frontend, 'apply_builder_in_content']);
}

get_header('kodus');

$current_lang = function_exists('pll_current_language') ? pll_current_language() : 'pt';
$per_page     = 9;

// Language links via Polylang — only PT and EN
$lang_links = [];
if (function_exists('pll_the_languages')) {
    $raw = pll_the_languages(['raw' => 1]);
    if (is_array($raw)) {
        foreach ($raw as $l) {
            if (!in_array($l['slug'], ['pt', 'en'], true)) continue;
            $lang_links[] = [
                'slug'   => $l['slug'],
                'name'   => $l['name'],
                'url'    => $l['url'],
                'active' => $l['current_lang'],
            ];
        }
    }
}

// Fallback if Polylang is not active
if (empty($lang_links)) {
    $lang_links = [
        ['slug' => 'pt', 'name' => 'Português', 'url' => '#', 'active' => $current_lang === 'pt'],
        ['slug' => 'en', 'name' => 'English',    'url' => '#', 'active' => $current_lang === 'en'],
    ];
}

// Categories for current language
$cat_args = [
    'taxonomy'   => 'category',
    'hide_empty' => true,
    'orderby'    => 'name',
    'order'      => 'ASC',
];
if (function_exists('pll_current_language')) {
    $cat_args['lang'] = $current_lang;
}
$categories = get_terms($cat_args);

// Initial posts query
$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => $per_page,
    'offset'         => 0,
    'orderby'        => 'date',
    'order'          => 'DESC',
];
if (function_exists('pll_current_language')) {
    $args['lang'] = $current_lang;
}
$initial_query = new WP_Query($args);
$total_posts   = $initial_query->found_posts;
$has_more      = $per_page < $total_posts;

$page_subtitle = ($current_lang === 'en')
    ? 'Articles about code review, AI, and engineering productivity'
    : 'Artigos sobre code review, IA e produtividade em engenharia';
$all_label     = ($current_lang === 'en') ? 'All' : 'Todos';
$load_more_lbl = ($current_lang === 'en') ? 'Load More' : 'Carregar Mais';
$loading_lbl   = ($current_lang === 'en') ? 'Loading...' : 'Carregando...';
?>

<main>
  <section class="blog-page">
    <div class="container">

      <!-- Header -->
      <header class="blog-page__header">
        <h1 class="section-title">Insights</h1>
        <p class="blog-page__subtitle"><?php echo esc_html($page_subtitle); ?></p>

        <!-- Language selector -->
        <div class="blog-page__langs">
          <?php foreach ($lang_links as $l) : ?>
            <a href="<?php echo esc_url($l['url']); ?>"
               class="hero__tab<?php echo $l['active'] ? ' hero__tab--active' : ''; ?>"
               <?php echo $l['active'] ? 'aria-current="page"' : ''; ?>>
              <?php echo esc_html($l['name']); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </header>

      <!-- Category filter -->
      <nav class="blog-page__categories" aria-label="Categories">
        <button class="blog-cat-btn blog-cat-btn--active" data-cat="all"><?php echo esc_html($all_label); ?></button>
        <?php if (!is_wp_error($categories)) : foreach ($categories as $cat) : ?>
          <button class="blog-cat-btn" data-cat="<?php echo esc_attr($cat->slug); ?>"><?php echo esc_html($cat->name); ?></button>
        <?php endforeach; endif; ?>
      </nav>

      <!-- Post grid -->
      <div class="blog-grid" id="blog-grid">
        <?php
        if ($initial_query->have_posts()) :
            while ($initial_query->have_posts()) :
                $initial_query->the_post();
                get_template_part('template-parts/blog-card');
            endwhile;
            wp_reset_postdata();
        else : ?>
          <p class="no-results"><?php echo ($current_lang === 'en') ? 'No posts found.' : 'Nenhum post encontrado.'; ?></p>
        <?php endif; ?>
      </div>

      <!-- Load more -->
      <?php if ($has_more) : ?>
        <div class="blog-page__load-more">
          <button class="btn btn--outline-light" id="blog-load-more"
                  data-label="<?php echo esc_attr($load_more_lbl); ?>"
                  data-loading="<?php echo esc_attr($loading_lbl); ?>">
            <?php echo esc_html($load_more_lbl); ?>
          </button>
        </div>
      <?php endif; ?>

    </div>
  </section>
</main>

<?php get_footer('kodus'); ?>
