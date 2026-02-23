<?php
/**
 * Kodus Child Theme — Shared Header
 * Called via get_header('kodus')
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Preload critical images -->
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/castle.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-guard.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-box.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cockpit.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kilo.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/copilot.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cursor.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/claude.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/openai.webp">
  <link rel="preload" as="image" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cline.webp">
  
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

  <!-- ========== HEADER / NAV ========== -->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="<?php echo home_url(); ?>" class="nav__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus_dark.webp" alt="Kodus" class="nav__logo-img">
      </a>

      <ul class="nav__links" id="navLinks">
        <li><a href="https://docs.kodus.io/how_to_use/en/overview" class="nav__link nav__link--external" target="_blank" rel="noopener">Docs</a></li>
        <li><a href="https://discord.gg/TFZBRk9fT6" class="nav__link nav__link--external" target="_blank" rel="noopener">Community</a></li>
        <li class="nav__dropdown">
          <a href="#" class="nav__link">Resources <span class="nav__chevron">&#9662;</span></a>
          <ul class="nav__dropdown-menu">
            <li>
              <a href="https://kodus.io/code-review-rules/">
                <span class="nav__item-title">Kody Rules</span>
                <span class="nav__item-desc">Library of production tested review rules for real world codebases.</span>
              </a>
            </li>
            <li>
              <a href="https://kodus.io/changelog-en/">
                <span class="nav__item-title">Changelog</span>
                <span class="nav__item-desc">Detailed release notes for every Kodus update.</span>
              </a>
            </li>
            <li>
              <a href="https://kodus.io/customers/">
                <span class="nav__item-title">Customers</span>
                <span class="nav__item-desc">Engineering teams using Kody in their day-to-day code review process.</span>
              </a>
            </li>
            <li>
              <a href="https://docs.kodus.io/how_to_use/en/security/data_usage">
                <span class="nav__item-title">Security</span>
                <span class="nav__item-desc">Technical overview of how Kodus handles code, models and credentials.</span>
              </a>
            </li>
            <li>
              <a href="https://kodus.io/benchmark-ai-code-review/">
                <span class="nav__item-title">AI Code Review Tools Benchmarks</span>
                <span class="nav__item-desc">Practical comparison of AI code review tools using real pull requests.</span>
              </a>
            </li>
            <li>
              <a href="https://codereviewbench.com/">
                <span class="nav__item-title">LLMs Performance Benchmark</span>
                <span class="nav__item-desc">Evaluation of LLMs on real pull request diffs, not toy snippets.</span>
              </a>
            </li>
            <li>
              <a href="https://ai-skills.io/">
                <span class="nav__item-title">Agent Skills Library</span>
                <span class="nav__item-desc">Curated collection of agent skills and capabilities for AI agents.</span>
              </a>
            </li>
          </ul>
        </li>
        <li><a href="https://kodus.io/en/insights-en/" class="nav__link">Blog</a></li>
        <li><a href="https://kodus.io/pricing/" class="nav__link">Pricing</a></li>
      </ul>

      <div class="nav__actions">
        <a href="https://github.com/kodustech/kodus-ai/stargazers" target="_blank" rel="noopener noreferrer" class="btn btn--github">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
          <span id="ghStars">--</span>
        </a>
        <a href="https://app.kodus.io/sign-in" class="btn btn--outline-light">Login</a>
        <a href="https://app.kodus.io/sign-up" class="btn btn--primary">Start Free Trial</a>
      </div>

      <button class="nav__hamburger" id="navHamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </header>
