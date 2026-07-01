<?php
/**
 * Kodus Child Theme — Shared Header
 * Called via get_header('kodus')
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

<?php if (is_front_page()) : ?>
  <!-- ========== ANNOUNCEMENT BAR (home only) ========== -->
  <div class="announce-bar" id="dataAnnounce">
    <a class="announce-bar__link" href="<?php echo esc_url(home_url('/data/')); ?>">
      <svg class="announce-bar__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="m19 9-5 5-4-4-3 3"/></svg>
      <span class="announce-bar__label">New research</span>
      <span class="announce-bar__text">State of AI Code Review 2026 &mdash; what happens after an AI leaves 180k+ review comments.</span>
      <span class="announce-bar__cta">Read the report &rarr;</span>
    </a>
    <button class="announce-bar__close" id="dataAnnounceClose" aria-label="Dismiss announcement">&times;</button>
  </div>
  <script>
  (function(){
    var bar=document.getElementById('dataAnnounce');
    if(!bar)return;
    try{if(localStorage.getItem('kodusDataAnnounceDismissed')==='1'){bar.hidden=true;return;}}catch(e){}
    var btn=document.getElementById('dataAnnounceClose');
    if(btn)btn.addEventListener('click',function(){bar.hidden=true;try{localStorage.setItem('kodusDataAnnounceDismissed','1');}catch(e){}});
  })();
  </script>
<?php endif; ?>

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
              <a href="<?php echo esc_url(home_url('/data/')); ?>">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="m19 9-5 5-4-4-3 3"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">State of AI Code Review 2026</span>
                  <span class="nav__item-desc">Research report on 180k+ AI review suggestions across 530 organizations.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/en/insights-en/')); ?>">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">Blog</span>
                  <span class="nav__item-desc">Deep dives on AI code review, engineering quality and dev workflows.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="https://kodus.io/code-review-rules/">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 17 2 2 4-4"/><path d="m3 7 2 2 4-4"/><path d="M13 6h8"/><path d="M13 12h8"/><path d="M13 18h8"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">Kody Rules</span>
                  <span class="nav__item-desc">Library of production tested review rules for real world codebases.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="https://docs.kodus.io/changelog">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M12 7v5l4 2"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">Changelog</span>
                  <span class="nav__item-desc">Detailed release notes for every Kodus update.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/customers/')); ?>">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">Customers</span>
                  <span class="nav__item-desc">Engineering teams using Kody in their day-to-day code review process.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="https://docs.kodus.io/how_to_use/en/security/data_usage">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/><path d="m9 12 2 2 4-4"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">Security</span>
                  <span class="nav__item-desc">Technical overview of how Kodus handles code, models and credentials.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="<?php echo esc_url(home_url('/benchmark-ai-code-review/')); ?>">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">AI Code Review Tools Benchmarks</span>
                  <span class="nav__item-desc">Practical comparison of AI code review tools using real pull requests.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="https://codereviewbench.com/">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="16" x="4" y="4" rx="2"/><rect width="6" height="6" x="9" y="9" rx="1"/><path d="M15 2v2"/><path d="M15 20v2"/><path d="M2 15h2"/><path d="M2 9h2"/><path d="M20 15h2"/><path d="M20 9h2"/><path d="M9 2v2"/><path d="M9 20v2"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">LLMs Performance Benchmark</span>
                  <span class="nav__item-desc">Evaluation of LLMs on real pull request diffs, not toy snippets.</span>
                </span>
              </a>
            </li>
            <li>
              <a href="https://ai-skills.io/">
                <span class="nav__item-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.5 2A2.5 2.5 0 0 1 12 4.5V6h1.5a2.5 2.5 0 1 1 0 5H12v3.5a2.5 2.5 0 1 1-5 0V11H5.5a2.5 2.5 0 1 1 0-5H7V4.5A2.5 2.5 0 0 1 9.5 2Z"/><path d="M14 8h5.5a2.5 2.5 0 1 1 0 5H18v3.5a2.5 2.5 0 1 1-5 0"/></svg>
                </span>
                <span class="nav__item-text">
                  <span class="nav__item-title">Agent Skills Library</span>
                  <span class="nav__item-desc">Curated collection of agent skills and capabilities for AI agents.</span>
                </span>
              </a>
            </li>
          </ul>
        </li>
        <li><a href="<?php echo esc_url(home_url('/engineering-quality-sprint/')); ?>" class="nav__link">Quality Sprint</a></li>
        <li><a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="nav__link">Pricing</a></li>
      </ul>

      <div class="nav__actions">
        <a href="https://github.com/kodustech/kodus-ai/stargazers" target="_blank" rel="noopener noreferrer" class="btn btn--github" id="navGithubStarsBtn">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
          <span id="ghStars">--</span>
        </a>
        <a href="https://app.kodus.io/sign-in" class="btn btn--outline-light" id="navLoginBtn">Login</a>
        <a href="https://app.kodus.io/sign-up" class="btn btn--primary" id="navStartFreeTrialBtn">Start Free Trial</a>
      </div>

      <button class="nav__hamburger" id="navHamburger" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </header>
