<?php
/**
 * Kodus Child Theme — Ads landing page header
 * Called via get_header('kodus-lp', ['actions' => '...']). Logo without a link, no navigation.
 */
?>
<!DOCTYPE html>
<html <?php if (kodus_is_english_product_page()) : ?>lang="en-US"<?php else : language_attributes(); endif; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- SVG sprite -->
  <svg xmlns="http://www.w3.org/2000/svg" style="display:none;">
    <symbol id="bug-shape" viewBox="0 0 11 8">
      <rect x="1" y="0" width="1" height="1" fill="currentColor"/>
      <rect x="9" y="0" width="1" height="1" fill="currentColor"/>
      <rect x="2" y="1" width="1" height="1" fill="currentColor"/>
      <rect x="8" y="1" width="1" height="1" fill="currentColor"/>
      <rect x="1" y="2" width="9" height="1" fill="currentColor"/>
      <rect x="0" y="3" width="2" height="1" fill="currentColor"/>
      <rect x="3" y="3" width="5" height="1" fill="currentColor"/>
      <rect x="9" y="3" width="2" height="1" fill="currentColor"/>
      <rect x="0" y="4" width="11" height="1" fill="currentColor"/>
      <rect x="0" y="5" width="1" height="1" fill="currentColor"/>
      <rect x="2" y="5" width="7" height="1" fill="currentColor"/>
      <rect x="10" y="5" width="1" height="1" fill="currentColor"/>
      <rect x="0" y="6" width="1" height="1" fill="currentColor"/>
      <rect x="2" y="6" width="1" height="1" fill="currentColor"/>
      <rect x="8" y="6" width="1" height="1" fill="currentColor"/>
      <rect x="10" y="6" width="1" height="1" fill="currentColor"/>
      <rect x="3" y="7" width="2" height="1" fill="currentColor"/>
      <rect x="6" y="7" width="2" height="1" fill="currentColor"/>
    </symbol>
  </svg>

  <!-- ========== HEADER (ads LP: logo + page CTAs only) ========== -->
  <header class="header" id="header">
    <nav class="nav container" style="display:flex;align-items:center;justify-content:space-between">
      <span class="nav__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus_dark.webp" alt="Kodus" class="nav__logo-img">
      </span>
      <div class="nav__actions" style="margin-left:auto;margin-right:0">
        <?php echo isset($args['actions']) ? $args['actions'] : ''; ?>
      </div>
    </nav>
  </header>
