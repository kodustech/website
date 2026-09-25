<?php
/*
 * Template Name: Kodus Home
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<style>
  /* Hallmark · component: hero-cta · genre: playful-retro (inherited) · theme: kodus-retro (project system)
   * states: default · hover · focus-visible · active (disabled/loading/error/success n/a: nav links)
   * contrast: pass */
  .hero__ctas {
    max-width: none !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    overflow: visible !important;
    gap: 18px;
    margin-bottom: 26px;
  }

  .hero__cta-row {
    display: flex;
    align-items: stretch;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
  }

  .hero__cta-row .btn {
    min-width: 190px;
    justify-content: center;
    padding: 13px 30px;
  }

  .hero__ctas .btn:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 3px;
  }

  .hero__ctas .hero__disclaimer {
    margin: 0;
  }

  .hero__providers {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
  }

  .hero__providers .hero__git-providers {
    margin-bottom: 0;
    gap: 16px;
  }

  .hero__providers-label {
    font-family: var(--font-mono);
    font-size: 0.68rem;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--color-text-dim);
  }

  .hero__clients {
    margin-top: 130px !important;
  }

  @media (max-width: 768px) {
    .hero__clients {
      margin-top: 90px !important;
    }
  }

  .cartridge__desc {
    display: block;
    margin-top: 12px;
    padding: 0 6px;
    font-size: 0.78rem;
    line-height: 1.55;
    color: var(--color-text-muted);
    text-align: center;
  }

  @media (max-width: 480px) {
    .hero__cta-row {
      flex-direction: column;
      align-items: stretch;
    }
    .hero__cta-row .btn {
      width: 100%;
      min-width: 0;
    }
  }
</style>

<!-- Global bugs container for parallax effect across the site -->
  <div class="site-bugs" aria-hidden="true">
    <!-- Hero bugs (moved from hero section) -->
    <svg class="site-bug" data-speed="0.3" style="top: 8%; left: 5%; width: 50px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.5" style="top: 15%; right: 8%; width: 35px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    <svg class="site-bug" data-speed="0.2" style="top: 40%; left: 3%; width: 42px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.6" style="top: 550px; right: 4%; width: 55px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    
    <!-- New Hero bugs (Right side - Absolute pixels to ensure Hero placement) -->
    <svg class="site-bug" data-speed="0.4" style="top: 250px; right: 15%; width: 25px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    <!-- Removed bug at top: 700px; right: 10% -->
    
    <!-- New bugs distributed across other sections -->
    <!-- Around Why Different section (~800px - 1400px) -->
    <svg class="site-bug" data-speed="0.4" style="top: 900px; left: 15%; width: 30px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <!-- Removed bugs on the right side here -->
    
    <!-- Around Basics section (~1600px - 2200px) -->
    <svg class="site-bug" data-speed="0.2" style="top: 2200px; left: 8%; width: 45px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    <svg class="site-bug" data-speed="0.45" style="top: 2500px; right: 5%; width: 32px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>

    <!-- Around Testimonials section (~2800px - 3400px) -->
    <svg class="site-bug" data-speed="0.3" style="top: 3000px; left: 10%; width: 35px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.6" style="top: 3300px; right: 8%; width: 50px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>

    <!-- Around FAQ section (~3600px+) -->
    <svg class="site-bug" data-speed="0.25" style="top: 3800px; left: 4%; width: 30px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.4" style="top: 4100px; right: 8%; width: 42px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
  </div>

  <main>

    <!-- ========== HERO ========== -->
    <section class="hero">
      <!-- Hero background: quiet corner traces (decorative only) -->
      <svg class="hero-circuit" viewBox="0 0 1440 780" preserveAspectRatio="xMidYMin meet" aria-hidden="true" focusable="false">
        <path class="hc-trace" d="M84 79 L84 127 L250 138"/><path class="hc-trace" d="M1227 122 L1240 138 L1343 149 L1346 181"/><path class="hc-trace" d="M1382 406 L1382 474 L1309 476"/><path class="hc-trace" d="M60 604 L60 641 L138 653"/><path class="hc-trace" d="M1211 691 L1266 672 L1309 633"/>
        <rect class="hc-sq" x="78" y="66" width="12" height="12" rx="1"/><rect class="hc-sq" x="238" y="155" width="12" height="12" rx="1"/><rect class="hc-sq" x="1376" y="393" width="12" height="12" rx="1"/><rect class="hc-sq" x="54" y="592" width="12" height="12" rx="1"/><rect class="hc-sq" x="1198" y="685" width="12" height="12" rx="1"/>
        <rect class="hc-dot hc-dot--0" x="182" y="135" width="6" height="6"/><rect class="hc-dot hc-dot--1" x="1282" y="146" width="6" height="6"/><rect class="hc-dot hc-dot--2" x="108" y="650" width="6" height="6"/><rect class="hc-dot hc-dot--3" x="1241" y="667" width="6" height="6"/>
        <g class="hc-bubble" transform="translate(1207 97)"><rect width="38" height="24" rx="3"/><path d="M8 24 l4 5 l4 -5"/><rect class="hc-bubble-dot" x="9" y="10" width="4" height="4"/><rect class="hc-bubble-dot" x="17" y="10" width="4" height="4"/><rect class="hc-bubble-dot" x="25" y="10" width="4" height="4"/></g>
      </svg>
      <!-- Scattered bugs removed from here and moved to global container -->


      <div class="container hero__container">
        <h1 class="hero__title">
          The <span class="highlight">open source</span> alternative to CodeRabbit
        </h1>
        <p class="hero__subtitle">
          Self-host for free, or use our cloud with your own model keys.<br>You pay the model provider at list price, zero markup.
        </p>

        <div class="hero__ctas">
          <div class="hero__cta-row">
            <a href="https://app.kodus.io/sign-up" class="btn btn--primary hero__cta-btn" id="homeHeroStartFreeTrialBtn">Start free</a>
            <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--outline-light hero__cta-btn" id="homeHeroSelfHostBtn">Self-host setup</a>
          </div>
          <p class="hero__disclaimer">14-day free trial &bull; up to 35 PR reviews included &bull; no credit card required</p>
          <div class="hero__providers">
            <span class="hero__providers-label">Works with</span>
            <div class="hero__git-providers">
                <span class="hero__provider" aria-label="GitHub">
                  <svg width="28" height="28" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
                </span>
                <span class="hero__provider" aria-label="GitLab">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 01-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 014.82 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0118.6 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.51L23 13.45a.84.84 0 01-.35.94z"/></svg>
                </span>
                <span class="hero__provider" aria-label="Bitbucket">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M2.65 3A1 1 0 001.66 4.18l2.75 17.63a1.36 1.36 0 001.33 1.14h12.9a1 1 0 001-.85l2.75-17.92A1 1 0 0021.35 3zm11.59 12.83H9.84L8.9 9.57h6.28z"/></svg>
                </span>
                <span class="hero__provider" aria-label="Azure DevOps">
                  <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor"><path d="M0 8.877L2.247 5.91l8.405-3.416V.022l7.37 5.393L2.966 8.338v8.225L0 15.707zm24-4.45v14.651l-5.753 4.9-9.303-3.057v3.056l-5.978-7.416 15.057 1.98V2.244z"/></svg>
                </span>
                <span class="hero__provider" aria-label="Forgejo / Gitea" title="Forgejo / Gitea">
                  <svg width="28" height="28" viewBox="0 0 212 212" fill="none" stroke="currentColor"><g transform="translate(6,6)"><path d="M58 168 v-98 a50 50 0 0 1 50-50 h20" stroke-width="25"/><path d="M58 168 v-30 a50 50 0 0 1 50-50 h20" stroke-width="25"/><circle cx="142" cy="20" r="18" stroke-width="15"/><circle cx="142" cy="88" r="18" stroke-width="15"/><circle cx="58" cy="180" r="18" stroke-width="15"/></g></svg>
                </span>
            </div>
          </div>
        </div>

        <!-- Retro OS window — client logos -->
        <div class="hero__clients">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-paws.webp" alt="" class="hero__kody-paws fade-in">
          <div class="retro-window">
            <div class="retro-window__bar">
              <span class="retro-window__bar-title">trusted_by.exe</span>
              <div class="retro-window__bar-btns">
                <span class="retro-window__bar-btn">&#9472;</span>
                <span class="retro-window__bar-btn">&#9633;</span>
                <span class="retro-window__bar-btn">&times;</span>
              </div>
            </div>
            <div class="retro-window__body">
              <?php kodus_render_trusted_logo_carousel(); ?>
            </div>
          </div>
          <p class="hero__trusted">Trusted by <strong>5,000+ teams</strong> in 66 countries</p>
        </div>
      </div>
    </section>

    <!-- ========== WHY WE ARE DIFFERENT (Cartridges) ========== -->
    <section class="cartridges" id="different">
      <div class="container">
        <h2 class="section-title">Why teams choose Kodus</h2>

        <div class="cartridges__grid">

          <!-- Cartridge 1: Free Tier -->
          <button class="cartridge" data-modal="modal-free-tier">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--green"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--love">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-love.webp" alt="Kody Love" class="kody-love">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coracao.webp" alt="" class="pixel-heart heart-1">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coracao.webp" alt="" class="pixel-heart heart-2">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coracao.webp" alt="" class="pixel-heart heart-3">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coracao.webp" alt="" class="pixel-heart heart-4">
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">Open source<br>core</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">AGPL licensed. Read the code, run it on your own infra.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 4: Extensible Configs -->
          <button class="cartridge" data-modal="modal-configs">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--blue"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--config">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-config.webp" alt="Kody Configs" class="kody-config">
                  <svg class="pixel-gear gear-1" viewBox="0 0 24 24" fill="#30304B"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                  <svg class="pixel-gear gear-2" viewBox="0 0 24 24" fill="#30304B"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                  <svg class="pixel-gear gear-3" viewBox="0 0 24 24" fill="#30304B"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">Self-host,<br>no sales call</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">No seat minimums. Deploy with Docker Compose or Helm.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 3: Zero Markup -->
          <button class="cartridge" data-modal="modal-zero-markup">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--red"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--tax">
                  <div class="model-track-wrapper cartridge__models" aria-hidden="true">
                    <div class="model-track move-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anthropic.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/open-ai.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gemini.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deepsek.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/zai.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/meta.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/grok.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/claude-ai.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anthropic.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/open-ai.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gemini.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deepsek.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/zai.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/meta.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/grok.webp" class="track-icon" alt=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/claude-ai.webp" class="track-icon" alt=""></div>
                  </div>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-taxa.webp" alt="Kody Zero Markup" class="kody-taxa">
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">Any model,<br>zero markup</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">Bring any model with your own key, on every plan. You pay the provider at list price.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 4: No PR rate limits -->
          <button class="cartridge" data-modal="modal-no-limits">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--green"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--nolimit" aria-hidden="true">
                  <div class="nolimit__log"><div class="nolimit__track"><span class="nolimit__line"><i>push</i><em>a1f3c9</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>7be04d</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>rebase</i><em>c92e11</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>force-push</i><em>3fd8a0</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>e41b7c</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>09ac5e</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>a1f3c9</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>7be04d</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>rebase</i><em>c92e11</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>force-push</i><em>3fd8a0</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>e41b7c</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>09ac5e</em><b>&#10003; reviewed</b></span></div></div>
                  <div class="nolimit__rate"><b>&infin;</b><span>reviews/h</span></div>
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">No PR<br>rate limits</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">Every push gets reviewed. Unlimited PRs on every plan with your own key.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

        </div>
      </div>
    </section>

    <!-- Cartridge details: server-rendered so crawlers and LLMs read them; the modal below displays them -->
    <div class="cartridge-details" hidden>
          <article class="cartridge-detail" id="modal-free-tier-content">
            <h3>Open source core</h3>
            <div class="cartridge-detail__body">
            <p>The Kodus core is open source under the AGPL license.</p>
            <p>You can read the review logic, audit what touches your code, and run it on your own infrastructure with Docker Compose or Helm.</p>
            <ul><li>Public repository on GitHub</li><li>Community plan self-hosts for free</li><li>Commercial license available for enterprise needs</li></ul>
            <p>No black box between your code and production.</p><div style="display: flex; gap: 12px; margin-top: 24px; justify-content: center;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img src="/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"></div>
            </div>
          </article>
          <article class="cartridge-detail" id="modal-no-limits-content">
            <h3>No PR rate limits</h3>
            <div class="cartridge-detail__body">
            <p>Kodus doesn’t cap how many reviews you get per hour.</p>
            <p>With your own API key, every plan reviews unlimited PRs. Push, rebase or force-push as often as you need, and each change gets reviewed.</p>
            <ul><li>No reviews-per-hour quota</li><li>No waiting for a limit to reset</li><li>The only ceiling is your LLM provider’s rate limit on your key</li></ul>
            </div>
          </article>
          <article class="cartridge-detail" id="modal-zero-markup-content">
            <h3>Any model, zero markup</h3>
            <div class="cartridge-detail__body">
            <p>Bring your own API keys on every plan, cloud included. Use any provider with an OpenAI-compatible API, pick a different model per repository, and set a fallback model. You pay for tokens directly to your provider, at list price.</p>
            <ul><li>No hidden fees</li><li>No token limits</li><li>No billing surprises</li></ul>
            <p>On the Teams plan, the $10 per user is strictly for platform infrastructure. Your model spend stays on your own bill, with the provider you choose.</p><div style="display: flex; justify-content: center; margin-top: -8px;"><img src="/wp-content/themes/kodus-child/assets/img/plaquinha.webp" style="width: 140px; height: auto; image-rendering: pixelated;"></div>
            </div>
          </article>
          <article class="cartridge-detail" id="modal-configs-content">
            <h3>Self-host, no sales call</h3>
            <div class="cartridge-detail__body">
            <p>Run Kodus on your own infrastructure without an enterprise contract.</p>
            <p>Clone the repository and deploy with Docker Compose on a VM, or with Helm on Kubernetes. Point it at your Git provider and your model keys, and reviews stay inside your network.</p>
            <p>Self-hosting is available on the free Community plan. Enterprise adds SSO, RBAC, audit logs and dedicated support when you need them.</p>
            <p><a href="/self-hosted-ai-code-review/" style="color: var(--color-primary);">How self-hosted AI code review works with Kodus →</a></p>
            </div>
          </article>
    </div>

    <!-- ========== CARTRIDGE MODALS ========== -->
    <div class="modal-overlay" id="modalOverlay" aria-hidden="true" hidden inert>
      <div class="modal" id="modalContent" role="dialog" aria-modal="true" aria-labelledby="modalTitle" tabindex="-1">
        <button class="modal__close" id="modalClose" aria-label="Close modal">&times;</button>
        <div class="modal__header">
          <p class="modal__title" id="modalTitle"></p>
        </div>
        <div class="modal__desc" id="modalDesc"></div>
      </div>
    </div>

    <!-- ========== TEST KODUS ON A REAL PR (live demo) ========== -->
    <!-- Temporarily hidden while we figure out attribution / measurement.
         Code kept intact — re-enable by uncommenting the line below
         AND removing the early-return guard in kodus_enqueue_pr_review_assets() (functions.php). -->
    <?php // get_template_part('template-parts/pr-review-demo'); ?>

    <!-- ========== YOU'LL HATE US IF (VCR) ========== -->
    <section class="vcr-section" id="hate-us">
      <div class="container">
        <h2 class="section-title">You'll hate us if...</h2>

        <div class="vcr">
          <!-- VCR top bar -->
          <div class="vcr__top">
            <div class="vcr__vents"><span></span><span></span><span></span><span></span><span></span><span></span></div>
            <span class="vcr__brand">Pixel-Vision</span>
            <div class="vcr__vents"><span></span><span></span><span></span><span></span><span></span><span></span></div>
          </div>

          <!-- CRT Screen -->
          <div class="vcr__screen">
            <div class="vcr__scanlines"></div>

            <!-- Screen header -->
            <div class="vcr__screen-header">
              <span class="vcr__warn">&#9888;</span>
              <span class="vcr__screen-title">You'll hate <strong class="highlight">Kodus</strong> if...</span>
              <span class="vcr__file" id="vcrFile">FILE_01.DAT</span>
            </div>

            <!-- Slide content -->
            <div class="vcr__content">
              <div class="vcr__content-inner" id="vcrContent">
                <div class="vcr__slide-top">
                  <!-- Icon removed -->
                </div>
                <div class="vcr__body vcr__panel vcr__panel--active" data-file="FILE_01.DAT">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-poeta.webp" alt="" class="vcr__image" loading="lazy" decoding="async">
                  <p class="vcr__text">You want a poem in every pull request.</p>
                </div>
                <div class="vcr__body vcr__panel" data-file="FILE_02.DAT">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-money.webp" alt="" class="vcr__image" loading="lazy" decoding="async">
                  <p class="vcr__text">You want one vendor picking your models and marking up every token.</p>
                </div>
                <div class="vcr__body vcr__panel" data-file="FILE_03.DAT">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-good-vibes.webp" alt="" class="vcr__image" loading="lazy" decoding="async">
                  <p class="vcr__text">You think every team should review by its own rules.</p>
                </div>
                <div class="vcr__body vcr__panel" data-file="FILE_04.DAT">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-noise.webp" alt="" class="vcr__image" loading="lazy" decoding="async">
                  <p class="vcr__text">You enjoy 50 auto-generated comments on every pull request.</p>
                </div>
                <div class="vcr__body vcr__panel" data-file="FILE_05.DAT">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-waiting.webp" alt="" class="vcr__image" loading="lazy" decoding="async">
                  <p class="vcr__text">You like waiting for your review quota to reset before you can push again.</p>
                </div>
                <div class="vcr__slide-bottom">
                  <!-- Status removed -->
                </div>
              </div>
            </div>

            <!-- Category bar -->
            <div class="vcr__categories">
              <button class="vcr__cat vcr__cat--active" data-slide="0">[1] Poetry</button>
              <button class="vcr__cat" data-slide="1">[2] Lock-in</button>
              <button class="vcr__cat" data-slide="2">[3] Standards</button>
              <button class="vcr__cat" data-slide="3">[4] Noise</button>
              <button class="vcr__cat" data-slide="4">[5] Limits</button>
            </div>
          </div>

          <!-- VCR Control panel -->
          <div class="vcr__controls">
            <div class="vcr__speaker"><span></span><span></span><span></span></div>
            <div class="vcr__buttons">
              <button class="vcr__btn" data-slide="0"><span class="vcr__btn-num">1</span><span class="vcr__btn-label">Poetry</span></button>
              <button class="vcr__btn" data-slide="1"><span class="vcr__btn-num">2</span><span class="vcr__btn-label">Lock-in</span></button>
              <button class="vcr__btn" data-slide="2"><span class="vcr__btn-num">3</span><span class="vcr__btn-label">Standards</span></button>
              <button class="vcr__btn" data-slide="3"><span class="vcr__btn-num">4</span><span class="vcr__btn-label">Noise</span></button>
              <button class="vcr__btn" data-slide="4"><span class="vcr__btn-num">5</span><span class="vcr__btn-label">Limits</span></button>
              <button class="vcr__btn vcr__btn--power"><span class="vcr__btn-num">I/O</span></button>
            </div>
            <div class="vcr__leds">
              <span class="vcr__led-indicator vcr__led-indicator--blue"></span>
              <span class="vcr__led-label">PWR</span>
              <span class="vcr__led-indicator vcr__led-indicator--pink"></span>
              <span class="vcr__led-label">HDD</span>
            </div>
            <div class="vcr__speaker"><span></span><span></span><span></span></div>
          </div>
        </div>

      </div>
    </section>

    <!-- ========== FEATURES (assembled grid) ========== -->
    <section class="feat-grid" id="basics">
      <div class="container">
        <h2 class="section-title">The basics, done <span class="highlight">right</span></h2>
        <div class="feat-grid__grid">
            <div class="feat-cell">
              <div class="feat-cell__art">
                <svg class="sgraph" viewBox="0 0 284 206" fill="none" aria-hidden="true">
                  <text class="sg-col" x="46" y="40">callers</text>
                  <text class="sg-col" x="238" y="40">callees</text>
                  <path class="sg-e sg-e1" d="M92 60 C104 60 104 92 106 92" pathLength="1"/>
                  <path class="sg-e sg-e2" d="M92 124 C104 124 104 92 106 92" pathLength="1"/>
                  <path class="sg-e sg-e3" d="M178 92 C180 92 180 60 192 60" pathLength="1"/>
                  <path class="sg-e sg-e4" d="M178 92 C180 92 180 124 192 124" pathLength="1"/>
                  <path class="sg-e sg-e5 sg-e--test" d="M142 104 V148" pathLength="1"/>
                  <g class="sgc sgc--n sgc-1"><rect x="2" y="50" width="90" height="20" rx="4"/><text x="47.0" y="63.5">login()</text></g>
                  <g class="sgc sgc--n sgc--x sgc-2"><rect x="2" y="114" width="90" height="20" rx="4"/><text x="47.0" y="127.5">chargeCard()</text><text class="sgc__repo" x="4" y="145">billing-api · linked repo</text></g>
                  <g class="sgc sgc--core"><rect x="106" y="80" width="72" height="24" rx="5"/><text x="142" y="96">verifyToken()</text></g>
                  <g class="sgc sgc--n sgc-3"><rect x="192" y="50" width="90" height="20" rx="4"/><text x="237.0" y="63.5">db.findUser()</text></g>
                  <g class="sgc sgc--n sgc-4"><rect x="192" y="114" width="90" height="20" rx="4"/><text x="237.0" y="127.5">crypto.hash()</text></g>
                  <g class="sgc sgc--t sgc-5"><rect x="100" y="148" width="84" height="20" rx="4"/><text x="142.0" y="161.5">auth.test.ts</text></g>
                  <text class="sg-risk" x="2" y="200"><tspan class="sg-risk__k">Risk</tspan> MEDIUM (0.45)</text>
                  <text class="sg-risk sg-risk--r" x="282" y="200"><tspan class="sg-risk__k">Blast radius</tspan> 12 fns · 5 files</text>
                </svg>
              </div>
              <h3 class="feat-cell__title">Catches bugs across files and repos</h3>
              <p class="feat-cell__desc">Kody maps the callers, callees and tests around every change, including code in the other repos you link.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="srules" aria-hidden="true">
                  <div class="srules__card">
                    <div class="srules__head">
                      <span class="srules__title"><span class="srules__type srules__t1">Never expose secrets</span><span class="srules__type srules__t2">to the client</span></span>
                      <span class="srules__sev">HIGH</span>
                    </div>
                    <div class="srules__meta">
                      <span><em>Path</em>**/*.tsx</span>
                      <span><em>Scope</em>File</span>
                    </div>
                    <div class="srules__ins">
                      <em>Instructions</em>
                      <span class="srules__type srules__l1">Flag client components that read</span>
                      <span class="srules__type srules__l2">API keys or tokens.</span>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Enforces your team's rules</h3>
              <p class="feat-cell__desc">Write review rules in plain language, or import the ones you already keep in .cursorrules, CLAUDE.md or AGENTS.md.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="bval" aria-hidden="true">
                  <div class="bval__card">
                    <div class="bval__h">## Business Rules Validation</div>
                    <div class="bval__meta"><span><em>Task</em>LIN-482 · Refund flow</span><span class="bval__src">Linear</span></div>
                    <ul class="bval__acs">
                      <li class="bval__ac bval__ac--1"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l4 4 10-10"/></svg></i><span>AC #1 amount within limit</span><b>refund.ts:42</b></li>
                      <li class="bval__ac bval__ac--2"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l4 4 10-10"/></svg></i><span>AC #2 audit log written</span><b>audit.ts:18</b></li>
                    </ul>
                    <div class="bval__fix"><span class="bval__lvl">MUST_FIX</span><span>Refund needs a reason</span></div>
                    <div class="bval__status">Status: <b>Issues Found</b></div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Validates your business rules</h3>
              <p class="feat-cell__desc">Kody pulls requirements from Jira, Linear and Notion, then checks every PR against them, and flags what breaks.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="kchat" aria-hidden="true">
                  <div class="kchat__card">
                    <div class="kchat__msg kchat__msg--1"><span class="kchat__who">you</span><p><b>@kody</b> why is this flagged?</p></div>
                    <div class="kchat__msg kchat__msg--2 kchat__msg--kody"><span class="kchat__who">kody</span><p>After logout <code>session.user</code> is null, so <code>findUser()</code> throws.</p></div>
                    <div class="kchat__msg kchat__msg--3"><span class="kchat__who">you</span><p>We already guard that in the auth middleware.</p></div>
                    <div class="kchat__msg kchat__msg--4 kchat__msg--kody"><span class="kchat__who">kody</span><p>Got it. Save this as a memory for future reviews?</p><span class="kchat__save">Save memory</span></div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Talk to Kody in the PR</h3>
              <p class="feat-cell__desc">Ask why something was flagged, or push back. When you correct Kody, it offers to save that as a memory for the next reviews.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="tdebt" aria-hidden="true">
                  <div class="tdebt__card">
                    <div class="tdebt__head"><span class="tdebt__title">Issues</span><span class="tdebt__auto">Auto-create issues <i class="tdebt__switch"></i></span></div>
                    <div class="tdebt__event">PR #322 closed · 3 suggestions not implemented</div>
                    <ul class="tdebt__list">
                    <li class="tdebt__row tdebt__row--1"><span class="tdebt__st">OPEN</span><span class="tdebt__sev tdebt__sev--high">HIGH</span><span class="tdebt__t">Inject service via DI token<small>kody rules · session.ts</small></span></li>
                    <li class="tdebt__row tdebt__row--2"><span class="tdebt__st">OPEN</span><span class="tdebt__sev tdebt__sev--crit">CRITICAL</span><span class="tdebt__t">Token logged in error handler<small>security · auth.ts</small></span></li>
                    <li class="tdebt__row tdebt__row--3"><span class="tdebt__st">OPEN</span><span class="tdebt__sev tdebt__sev--med">MEDIUM</span><span class="tdebt__t">Handle missing user in refund<small>bug · refund.ts</small></span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Track technical debt</h3>
              <p class="feat-cell__desc">Unimplemented suggestions become issues automatically, so debt stays visible and shrinks over time.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="cock" aria-hidden="true">
                  <div class="cock__card">
                    <div class="cock__head"><span>Productivity</span><span class="cock__range">Last 15 days</span></div>
                    <div class="cock__grid">
                    <div class="cock__tile cock__tile--1"><span class="cock__k">Deploy Frequency</span><span class="cock__v">4.2<small>/week</small></span><span class="cock__band cock__band--high">High</span></div>
                    <div class="cock__tile cock__tile--2"><span class="cock__k">PR Cycle Time (p75)</span><span class="cock__v">26<small>h</small></span><span class="cock__band cock__band--elite">Elite</span></div>
                    <div class="cock__tile cock__tile--3"><span class="cock__k">Bug Ratio</span><span class="cock__v">12<small>%</small></span><span class="cock__band cock__band--fair">Fair</span></div>
                    <div class="cock__tile cock__tile--4"><span class="cock__k">PR Size (p75)</span><span class="cock__v">214<small>lines</small></span><span class="cock__band cock__band--elite">Elite</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Accelerate your delivery</h3>
              <p class="feat-cell__desc">Deploy frequency, cycle time, bug ratio and PR size in one dashboard, all trending the right way.</p>
            </div>
        </div>
      </div>
      <style>
.anim-test{padding:60px 0}
      .anim-test__flag{text-align:center;font-family:var(--font-mono);font-size:0.72rem;color:var(--color-text-dim);letter-spacing:0.5px;margin-bottom:24px}
      .anim-test__cell{max-width:440px;margin:0 auto;padding:48px 40px}
      .anim-test__art{height:300px;display:flex;align-items:center;justify-content:center;margin-bottom:36px}
      .anim-test__title{font-family:var(--font-mono);font-size:1.5rem;color:var(--color-text);margin-bottom:10px;line-height:1.2}
      .anim-test__desc{font-size:0.95rem;color:var(--color-text-muted);line-height:1.65;max-width:360px}
      .sgraph{width:100%;max-width:284px;height:auto;overflow:visible;font-family:var(--font-mono)}
      /* context: the call graph kodus-graph builds around a changed function */
      .sg-col{font-size:7px;letter-spacing:.08em;text-transform:uppercase;fill:var(--color-text-muted);text-anchor:middle;opacity:.8}
      .sgc text{font-size:7px;text-anchor:middle;fill:var(--color-text-muted)}
      .sgc--n rect,.sgc--t rect{fill:var(--color-card-lv1);stroke:var(--color-card-lv3)}
      .sgc--n,.sgc--t{opacity:.35;animation:sg-node 6s infinite}
      .sgc--core rect{fill:var(--color-primary-dark);stroke:var(--color-primary)}
      .sgc--core text{fill:var(--color-primary);font-size:8px;font-weight:700}
      .sgc--core{animation:sg-core 6s infinite;transform-box:fill-box;transform-origin:center}
      .sgc--t rect{stroke-dasharray:3 3}
      .sg-e{stroke:var(--color-primary);stroke-width:1.3;stroke-dasharray:1;stroke-dashoffset:1;animation:sg-draw 6s infinite}
      .sg-e--test{stroke:var(--color-secondary);stroke-dasharray:1}
      .sg-e1{animation-name:sg-draw1}.sg-e2{animation-name:sg-draw2}.sg-e3{animation-name:sg-draw3}.sg-e4{animation-name:sg-draw4}.sg-e5{animation-name:sg-draw5}
      .sgc-1,.sgc-2{animation-name:sg-node12}.sgc-3,.sgc-4{animation-name:sg-node34}.sgc-5{animation-name:sg-node5}
      .sg-risk{font-size:7.5px;fill:var(--color-primary);opacity:0;animation:sg-risk 6s infinite}
      .sg-risk--r{text-anchor:end;fill:var(--color-text)}
      .sg-risk__k{fill:var(--color-text-muted)}
      @keyframes sg-core{0%{opacity:0;transform:scale(.8)}6%{opacity:1;transform:scale(1.08)}10%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0}}
      @keyframes sg-draw1{0%,10%{stroke-dashoffset:1;opacity:1}20%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw2{0%,14%{stroke-dashoffset:1;opacity:1}24%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw3{0%,26%{stroke-dashoffset:1;opacity:1}36%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw4{0%,30%{stroke-dashoffset:1;opacity:1}40%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw5{0%,44%{stroke-dashoffset:1;opacity:1}54%,92%{stroke-dashoffset:0;opacity:.8}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-node12{0%,18%{opacity:.35}24%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-node34{0%,34%{opacity:.35}40%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-node5{0%,52%{opacity:.35}58%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-risk{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.sg-e{animation:none;stroke-dashoffset:0;opacity:.7}.sgc--n,.sgc--t,.sgc--core,.sg-risk{animation:none;opacity:1}}
      /* shared shell for the text-card motifs */
      .bval,.tdebt,.cock,.kchat{width:100%;max-width:286px;font-family:var(--font-mono)}
      .bval__card,.tdebt__card,.cock__card,.kchat__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px}
      /* business rules: the "Business Rules Validation" comment Kody posts on the PR */
      .bval__h{font-size:0.7rem;font-weight:700;color:var(--color-text)}
      .bval__meta{display:flex;align-items:flex-end;justify-content:space-between;margin-top:9px;font-size:0.64rem;color:var(--color-text)}
      .bval__meta em{display:block;font-style:normal;font-size:0.56rem;color:var(--color-text-muted);margin-bottom:2px}
      .bval__src{font-size:0.54rem;color:var(--color-secondary);border:1px solid var(--color-secondary-dark);border-radius:3px;padding:1px 5px}
      .bval__acs{list-style:none;margin:11px 0 0;padding:10px 0 0;border-top:1px solid var(--color-card-lv3);display:grid;gap:7px}
      .bval__ac{display:flex;align-items:center;gap:7px;font-size:0.6rem;color:var(--color-text-muted)}
      .bval__ac span{flex:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
      .bval__ac b{font-weight:400;color:var(--color-text-muted);opacity:.7}
      .bval__ac i{flex-shrink:0;width:13px;height:13px;border-radius:3px;border:1px solid var(--color-card-lv3);display:grid;place-items:center;color:var(--color-success)}
      .bval__ac i svg{width:9px;height:9px;opacity:0;animation:6s infinite}
      .bval__ac--1 i svg{animation-name:bval-c1}.bval__ac--2 i svg{animation-name:bval-c2}
      .bval__fix{display:flex;align-items:center;gap:8px;margin-top:9px;padding:6px 8px;border-radius:3px;background:rgba(250,88,103,0.08);box-shadow:inset 0 0 0 1px rgba(250,88,103,0.35);font-size:0.62rem;color:var(--color-text);opacity:0;animation:bval-fix 6s infinite}
      .bval__lvl{font-size:0.54rem;font-weight:700;color:var(--color-danger)}
      .bval__status{margin-top:10px;font-size:0.6rem;color:var(--color-text-muted);opacity:0;animation:bval-st 6s infinite}
      .bval__status b{color:var(--color-danger)}
      @keyframes bval-c1{0%,16%{opacity:0;transform:scale(.4)}22%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-c2{0%,30%{opacity:0;transform:scale(.4)}36%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-fix{0%,46%{opacity:0;transform:translateY(4px)}54%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-st{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}
      /* tech_debt: suggestions left unimplemented become rows on the Issues page when the PR closes */
      .tdebt__head{display:flex;align-items:center;justify-content:space-between;font-size:0.7rem;font-weight:700;color:var(--color-text)}
      .tdebt__auto{display:flex;align-items:center;gap:6px;font-size:0.56rem;font-weight:400;color:var(--color-text-muted)}
      .tdebt__switch{position:relative;width:22px;height:12px;border-radius:6px;background:var(--color-primary)}
      .tdebt__switch::after{content:'';position:absolute;top:2px;left:12px;width:8px;height:8px;border-radius:50%;background:#fff}
      .tdebt__event{margin-top:10px;padding:6px 8px;border-radius:3px;background:var(--color-card-lv2);font-size:0.56rem;color:var(--color-text-muted);opacity:0;animation:tdebt-ev 6s infinite}
      .tdebt__list{list-style:none;margin:10px 0 0;padding:0;display:grid;grid-template-columns:minmax(0,1fr);gap:6px}
      .tdebt__row{min-width:0;display:flex;align-items:flex-start;gap:6px;opacity:0;animation:6s infinite}
      .tdebt__row--1{animation-name:tdebt-r1}.tdebt__row--2{animation-name:tdebt-r2}.tdebt__row--3{animation-name:tdebt-r3}
      .tdebt__st,.tdebt__sev{flex-shrink:0;font-size:0.5rem;font-weight:700;border-radius:3px;padding:2px 4px;margin-top:1px}
      .tdebt__st{color:var(--color-text);background:var(--color-card-lv3)}
      .tdebt__sev--crit{color:var(--color-danger);box-shadow:inset 0 0 0 1px var(--color-danger)}
      .tdebt__sev--high{color:var(--color-warning);box-shadow:inset 0 0 0 1px var(--color-warning)}
      .tdebt__sev--med{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}
      .tdebt__t{min-width:0;font-size:0.6rem;color:var(--color-text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
      .tdebt__t small{display:block;font-size:0.52rem;color:var(--color-text-muted);margin-top:1px}
      @keyframes tdebt-ev{0%,4%{opacity:0}10%,92%{opacity:1}98%,100%{opacity:0}}
      @keyframes tdebt-r1{0%,18%{opacity:0;transform:translateX(-6px)}25%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes tdebt-r2{0%,30%{opacity:0;transform:translateX(-6px)}37%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes tdebt-r3{0%,42%{opacity:0;transform:translateX(-6px)}49%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      /* cockpit: the Productivity tab, with the app's own bands (Elite / High / Fair / Need focus) */
      .cock__head{display:flex;justify-content:space-between;font-size:0.68rem;font-weight:700;color:var(--color-text);padding-bottom:10px}
      .cock__range{font-weight:400;font-size:0.56rem;color:var(--color-text-muted)}
      .cock__grid{display:grid;grid-template-columns:1fr 1fr;gap:6px}
      .cock__tile{background:var(--color-card-lv2);border-radius:3px;padding:8px 9px;display:flex;flex-direction:column;gap:4px;opacity:0;animation:6s infinite}
      .cock__tile--1{animation-name:cock-t1}.cock__tile--2{animation-name:cock-t2}.cock__tile--3{animation-name:cock-t3}.cock__tile--4{animation-name:cock-t4}
      .cock__k{font-size:0.5rem;color:var(--color-text-muted);white-space:nowrap}
      .cock__v{font-size:0.95rem;font-weight:700;color:var(--color-text)}
      .cock__v small{font-size:0.52rem;font-weight:400;color:var(--color-text-muted);margin-left:2px}
      .cock__band{align-self:flex-start;font-size:0.5rem;font-weight:700;border-radius:3px;padding:1px 5px}
      .cock__band--elite{color:var(--color-success);box-shadow:inset 0 0 0 1px var(--color-success)}
      .cock__band--high{color:var(--color-info);box-shadow:inset 0 0 0 1px var(--color-info)}
      .cock__band--fair{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}
      @keyframes cock-t1{0%,6%{opacity:0;transform:translateY(5px)}14%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t2{0%,16%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t3{0%,26%{opacity:0;transform:translateY(5px)}34%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t4{0%,36%{opacity:0;transform:translateY(5px)}44%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.kchat__msg,.kchat__save,.bval__fix,.bval__status,.bval__ac i svg,.tdebt__event,.tdebt__row,.cock__tile{animation:none;opacity:1;transform:none}}
      /* @kody in the PR: a short thread that ends with Kody offering to save a memory */
      .kchat__card{display:grid;gap:9px}
      .kchat__msg{display:grid;grid-template-columns:34px 1fr;gap:6px;align-items:start;font-size:0.62rem;color:var(--color-text);opacity:0;animation:6s infinite}
      .kchat__msg p{margin:0;line-height:1.5;background:var(--color-card-lv2);border-radius:3px;padding:5px 8px}
      .kchat__msg--kody p{background:rgba(201,187,242,0.08);box-shadow:inset 0 0 0 1px var(--color-secondary-dark)}
      .kchat__msg b{color:var(--color-secondary);font-weight:700}
      .kchat__msg code{font-family:inherit;color:var(--color-primary)}
      .kchat__who{font-size:0.52rem;color:var(--color-text-muted);padding-top:5px}
      .kchat__msg--kody .kchat__who{color:var(--color-secondary)}
      .kchat__save{grid-column:2;justify-self:start;margin-top:5px;font-size:0.54rem;font-weight:700;color:var(--color-bg);background:var(--color-secondary);border-radius:3px;padding:3px 7px;opacity:0;animation:kchat-save 6s infinite}
      .kchat__msg--1{animation-name:kchat-m1}.kchat__msg--2{animation-name:kchat-m2}.kchat__msg--3{animation-name:kchat-m3}.kchat__msg--4{animation-name:kchat-m4}
      @keyframes kchat-m1{0%,4%{opacity:0;transform:translateY(5px)}10%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m2{0%,18%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m3{0%,36%{opacity:0;transform:translateY(5px)}42%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m4{0%,52%{opacity:0;transform:translateY(5px)}58%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-save{0%,66%{opacity:0;transform:scale(.8)}72%{opacity:1;transform:scale(1.08)}76%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      /* context: a caller that lives in another, linked repository */
      .sgc--x rect{stroke:var(--color-info);stroke-dasharray:3 2}
      .sgc--x text{fill:var(--color-info)}
      .sgc .sgc__repo{font-size:6px;text-anchor:start;fill:var(--color-info);opacity:.85}
      /* cartridge 4: pushes keep getting reviewed, no hourly cap */
      .cartridge__screen-body--nolimit{position:relative;overflow:hidden;background:#101019;height:110px;display:flex;align-items:stretch;gap:8px;padding:0 10px;font-family:var(--font-mono)}
      .nolimit__log{flex:1;min-width:0;overflow:hidden;-webkit-mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent);mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent)}
      .nolimit__track{display:flex;flex-direction:column;gap:6px;padding-top:6px;animation:nolimit-scroll 7s linear infinite}
      .nolimit__line{display:flex;gap:6px;font-size:8.5px;white-space:nowrap;color:var(--color-text-muted)}
      .nolimit__line i{font-style:normal;color:var(--color-text);min-width:52px}
      .nolimit__line em{font-style:normal;opacity:.6}
      .nolimit__line b{font-weight:400;color:var(--color-success);margin-left:auto}
      .nolimit__rate{flex-shrink:0;display:flex;flex-direction:column;align-items:center;justify-content:center;padding-left:8px;border-left:1px solid var(--color-card-lv3)}
      .nolimit__rate b{font-size:1.6rem;line-height:1;color:var(--color-primary)}
      .nolimit__rate span{font-size:7px;color:var(--color-text-muted);margin-top:4px}
      @keyframes nolimit-scroll{to{transform:translateY(-50%)}}
      @media(prefers-reduced-motion:reduce){.nolimit__track{animation:none}}
      /* cartridge 3: model logos drifting above the accountant Kody */
      .cartridge__models{position:absolute;top:8px;left:0;width:100%;height:36px;overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent);mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent)}
      .cartridge__models .track-icon{width:26px !important;height:26px !important;opacity:.7}
      .cartridge__models .model-track{gap:22px}
      .cartridge__screen-body--tax .kody-taxa{width:92px !important}
      /* Hero background: quiet corner traces */
      .hero{position:relative}
      .hero-circuit{position:absolute;left:50%;top:64px;transform:translateX(-50%);width:min(100%,1600px);height:auto;pointer-events:none;z-index:0;display:none}
      @media(min-width:1200px){.hero-circuit{display:block}}
      .hc-trace{fill:none;stroke:var(--color-card-lv3);stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0 9}
      .hc-sq{fill:none;stroke:var(--color-card-lv3);stroke-width:2}
      .hc-dot{fill:var(--color-primary);opacity:.85;animation:hc-blink 4s ease-in-out infinite}
      .hc-dot--1{animation-delay:-1s}.hc-dot--2{animation-delay:-2s}.hc-dot--3{animation-delay:-3s}
      @keyframes hc-blink{0%,100%{opacity:.35}50%{opacity:.9}}
      .hc-bubble rect:first-child{fill:none;stroke:var(--color-card-lv3);stroke-width:2}
      .hc-bubble path{fill:none;stroke:var(--color-card-lv3);stroke-width:2;stroke-linejoin:round}
      .hc-bubble-dot{fill:var(--color-primary);opacity:.7;animation:hc-typing 1.6s steps(1) infinite}
      .hc-bubble-dot:nth-of-type(3){animation-delay:.2s}.hc-bubble-dot:nth-of-type(4){animation-delay:.4s}
      @keyframes hc-typing{0%,60%{opacity:.25}30%{opacity:.8}}
      @media(prefers-reduced-motion:reduce){.hc-dot,.hc-bubble-dot{animation:none}}
      /* set_rules: a Kody Rule card (same fields as the app) being written */
      .srules{width:100%;max-width:286px;font-family:var(--font-mono)}
      .srules__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px 15px}
      .srules__head{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;min-height:32px}
      .srules__title{font-size:0.74rem;font-weight:700;color:var(--color-text);line-height:1.35}
      .srules__sev{flex-shrink:0;font-size:0.56rem;font-weight:700;letter-spacing:0.08em;color:var(--color-warning);border:1px solid var(--color-warning);border-radius:3px;padding:2px 5px;opacity:0;transform:scale(0.6);animation:srules-pop 6s infinite}
      .srules__meta{display:flex;gap:22px;margin-top:12px;font-size:0.66rem;color:var(--color-text);opacity:0;animation:srules-meta 6s infinite}
      .srules__meta em,.srules__ins em{display:block;font-style:normal;font-size:0.58rem;color:var(--color-text-muted);margin-bottom:3px}
      .srules__ins{margin-top:12px;padding-top:11px;border-top:1px solid var(--color-card-lv3);font-size:0.66rem;color:var(--color-text-muted);line-height:1.6}
      .srules__type{display:block;overflow:hidden;white-space:nowrap;width:0}
      .srules__t1{animation:srules-t1 6s infinite}
      .srules__t2{animation:srules-t2 6s infinite}
      .srules__l1{animation:srules-l1 6s infinite}
      .srules__l2{animation:srules-l2 6s infinite}
      .srules__l2::after{content:'';display:inline-block;width:6px;height:0.9em;margin-left:2px;vertical-align:-1px;background:var(--color-secondary);animation:srules-caret 0.8s step-end infinite}
      @keyframes srules-t1{0%{width:0;animation-timing-function:steps(20,end)}15%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}
      @keyframes srules-t2{0%,15%{width:0;animation-timing-function:steps(13,end)}25%{width:13ch}92%{width:13ch;opacity:1}98%,100%{width:13ch;opacity:0}}
      @keyframes srules-pop{0%,28%{opacity:0;transform:scale(0.6)}32%{opacity:1;transform:scale(1.15)}35%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0;transform:scale(1)}}
      @keyframes srules-meta{0%,36%{opacity:0}42%,92%{opacity:1}98%,100%{opacity:0}}
      @keyframes srules-l1{0%,44%{width:0;animation-timing-function:steps(33,end)}62%{width:33ch}92%{width:33ch;opacity:1}98%,100%{width:33ch;opacity:0}}
      @keyframes srules-l2{0%,63%{width:0;animation-timing-function:steps(19,end)}74%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}
      @keyframes srules-caret{50%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.srules__type{width:auto!important;animation:none!important}.srules__sev,.srules__meta{opacity:1;transform:none;animation:none}.srules__l2::after{display:none}}

      .feat-grid{padding:var(--section-padding) 0;position:relative;z-index:1}
      .feat-grid__grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));max-width:1180px;margin:0 auto;border-top:1px solid var(--color-card-lv2);border-left:1px solid var(--color-card-lv2)}
      .feat-cell{border-right:1px solid var(--color-card-lv2);border-bottom:1px solid var(--color-card-lv2);padding:38px 34px 34px;display:flex;flex-direction:column}
      .feat-cell__art{height:240px;display:flex;align-items:center;justify-content:center;margin-bottom:28px}
      .feat-cell__art > *{max-width:100%}
      .feat-cell__title{font-family:var(--font-mono);font-size:1.3rem;color:var(--color-text);margin-bottom:14px;line-height:1.3}
      .feat-cell__desc{font-size:0.85rem;color:var(--color-text-muted);line-height:1.7}
      @media(max-width:980px){.feat-grid__grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
      @media(max-width:640px){.feat-grid__grid{grid-template-columns:minmax(0,1fr)}.feat-cell{padding:32px 20px 30px}}
      </style>
    </section>

    <!-- ========== TESTIMONIALS (VHS Tapes) ========== -->
    <section class="vhs-section" id="testimonials">
      <div class="container">
        <h2 class="section-title">Loved by engineering teams</h2>

        <!-- Shelf wrapper -->
        <div class="vhs__shelf-wrapper">
          <!-- Nav arrows -->
          <button class="vhs__nav vhs__nav--prev" id="vhsPrev" aria-label="Previous">
            <span class="vhs__nav-icon">&#9664;&#9664;</span>
            <span class="vhs__nav-label">REW</span>
          </button>

          <div class="vhs__shelf-track" id="vhsTrack">
            <div class="vhs__shelf" id="vhsShelf">

              <!-- VHS 5: Luiz Barrile -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-info);">
                  <span class="vhs__spine-title">LERIAN_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-info);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/LF-Lerian-300x300-1.jpeg" alt="Luiz Barrile" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Luiz Barrile</p>
                    <p class="vhs__role">@Lerian</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus has become an essential part of our process at Lerian. By standardizing steps and automating checks, we’ve gained <span style="color: #339966;"><b>more speed and consistency</b></span>, while reducing rework and improving delivery quality.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 7: Pedro Maia -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-danger);">
                  <span class="vhs__spine-title">NOTIF_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-danger);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/pedro-maia.jpeg" alt="Pedro Maia" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Pedro Maia</p>
                    <p class="vhs__role">@Notificações Inteligentes</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">We trained the team to use AI in day-to-day coding, and <span style="color: #339966;"><b>Kodus stepped in as our senior reviewer that never forgets anything</b></span>. It doesn’t replace human review, but it’s now a required step: it ensures consistency and prevents repeat incidents.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 2: Oleksandr Kuchma -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-info);">
                  <span class="vhs__spine-title">SAASJET_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-info);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/Oleksandr Kuchma.jpeg'); ?>" alt="Oleksandr Kuchma" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Oleksandr Kuchma</p>
                    <p class="vhs__role">@SaaSJet</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">We love what Kodus does. It has dramatically reduced our PR review time, and <span style="color: #339966;"><b>our developers no longer want to review a PR without Kodus running first.</b></span> The accuracy is very good: it catches many of the small issues that are easy to miss, allowing our developers to focus on the architectural decisions that truly require human judgment.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 4: Ricardo -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-success);">
                  <span class="vhs__spine-title">ICATEC_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-success);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/ricardo-ikatec-150x150-1.jpg" alt="Ricardo" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Ricardo</p>
                    <p class="vhs__role">@Ikatec</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Since we started using Kody, the dev experience has improved a lot. <span style="color: #339966;"><b>Time spent on code reviews dropped by around 30%</b></span>, and the AI brings valuable insights on performance, security, and code optimization. One of the best parts is that we can tailor how it works for each project.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 6: Raphael Sampaio -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-warning);">
                  <span class="vhs__spine-title">PILAR_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-warning);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/raphael-pilar-300x300-1.jpeg" alt="Raphael Sampaio" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Raphael Sampaio</p>
                    <p class="vhs__role">@Pilar</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus has been helping us save a lot of time on code reviews, while also providing key engineering productivity metrics. Since we started using the tool, <span style="color: #339966;"><b>our average review time has dropped from hours to minutes.</b></span></p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 8: Jonathan Georgeu -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-primary);">
                  <span class="vhs__spine-title">ORIGEN_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-primary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/04/Jonathan-Georgeu-1-1.jpeg" alt="Jonathan Georgeu" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Jonathan Georgeu</p>
                    <p class="vhs__role">@Origen</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus has had a huge impact on our workflow by <span style="color: #339966;"><b>saving us valuable time during PR reviews.</b></span> It consistently catches the small details that are easy to miss, and the ability to set up custom rules means we can align automated reviews with our own standards.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 3: João H. Kersul -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-tertiary);">
                  <span class="vhs__spine-title">DOJI_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-tertiary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/04/joao-doji.jpg" alt="João H. Kersul" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">João H. Kersul</p>
                    <p class="vhs__role">@Doji</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">These days, Kodus is part of our daily review routine. <span style="color: #339966;"><b>It helps a lot with error handling and brings up suggestions that would often go unnoticed</b></span>. This active listening and fast turnaround have made a real difference for our engineering team.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 9: Igor Duca -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-secondary);">
                  <span class="vhs__spine-title">DUCA_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-secondary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/igor-duca.png" alt="Igor Duca" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Igor Duca</p>
                    <p class="vhs__role">@ducaswtf</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus helped me move as fast as I ever could during my development days. <span style="color: #339966;"><b>It has never been so easy to ship reliable code and build real solutions.</b></span></p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 2: André Diogo -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-secondary);">
                  <span class="vhs__spine-title">BRENDI_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-secondary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/04/andre.jpg" alt="André Diogo" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">André Diogo</p>
                    <p class="vhs__role">@Brendi</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus fit like a glove for me. Before, I was buried in slow code reviews. Now, <span style="color: #339966;"><b>feedback happens way faster</b></span>, and I can actually focus on other things.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>

              <!-- VHS 1: David Barnett -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-primary);">
                  <span class="vhs__spine-title">QUINTO_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-primary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/david-quinto-andar.png'); ?>" alt="David Barnett" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">David Barnett</p>
                    <p class="vhs__role">@QuintoAndar</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus helps us reflect our standards in PRs to share knowledge and raise our code quality. <span style="color: #339966;"><b>Kody catches some subtle issues and calls attention to them so reviews and authors can have a more effective review.</b></span> I appreciate the flexibility to configure custom rules and integrations.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button class="vhs__nav vhs__nav--next" id="vhsNext" aria-label="Next">
            <span class="vhs__nav-icon">&#9654;&#9654;</span>
            <span class="vhs__nav-label">FF</span>
          </button>
        </div>

        <!-- Tape counter -->
        <div class="vhs__counter" id="vhsCounter">
          <span class="vhs__counter-label">TAPE</span>
          <span class="vhs__counter-current" id="vhsCounterCurrent">001</span>
          <span class="vhs__counter-sep">/</span>
          <span class="vhs__counter-total" id="vhsCounterTotal">009</span>
        </div>

      </div>
    </section>

    <!-- ========== FAQ (Terminal / Man Page) ========== -->
    <section class="faq" id="faq">
      <div class="container">
        <h2 class="section-title">FAQ</h2>

        <div class="faq__terminal">
          <!-- Terminal bar -->
          <div class="faq__bar">
            <div class="faq__bar-dots">
              <span class="faq__dot faq__dot--red"></span>
              <span class="faq__dot faq__dot--yellow"></span>
              <span class="faq__dot faq__dot--green"></span>
            </div>
            <span class="faq__bar-title">kodus-faq(1)</span>
            <span class="faq__bar-status">bash</span>
          </div>

          <!-- Man page header -->
          <div class="faq__body">
            <div class="faq__man-header">
              <span class="faq__man-section">KODUS-FAQ(1)</span>
              <span class="faq__man-center">Kodus Manual</span>
              <span class="faq__man-section">KODUS-FAQ(1)</span>
            </div>

            <div class="faq__man-block">
              <p class="faq__man-heading">NAME</p>
              <p class="faq__man-indent">kodus-faq &mdash; frequently asked questions about Kodus</p>
            </div>

            <div class="faq__man-block">
              <p class="faq__man-heading">SYNOPSIS</p>
              <p class="faq__man-indent"><span class="faq__man-cmd">kodus</span> --help [topic]</p>
            </div>

            <!-- FAQ items -->
            <div class="faq__list">

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">Which AI models are supported?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Kodus is model agnostic. You can use Claude, GPT, Gemini, Llama or any OpenAI-compatible endpoint, including self-hosted models.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">Can I restrict the permissions Kodus uses?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Yes, you have full control over the permissions you grant. Kodus operates with the minimum access required to keep your code secure.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">Will I be charged for all developers in my organization?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, you decide who is included in the Kodus team and will only be charged for those users. You have full control over team management and billing.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">Do you train your AI model with my code or data?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, Kodus does not train its models with customer data. Your data is processed securely and is never used to improve or retrain our AI.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">How does Kodus compare to CodeRabbit?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Both review pull requests with AI. Kodus is open source with an AGPL core, you can self-host it without an enterprise seat minimum, and bring-your-own-keys with zero token markup is the default on every plan.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">What Git providers are supported?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>GitHub, GitLab, Bitbucket, Azure DevOps and Forgejo/Gitea, including the self-managed versions: GitHub Enterprise Server (beta), GitLab Self-Managed and Bitbucket Data Center. Kodus integrates at the pull request level: it reads diffs, posts inline comments, and respects your existing review workflows. Setup takes under 5 minutes.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">Does Kodus limit how many PRs it reviews per hour?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No. With your own API key, every plan reviews unlimited PRs, and each push, rebase or force-push gets reviewed. The only limit is the rate limit your LLM provider sets on your key.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">What does zero markup mean?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>We don't add any margin on top of LLM API calls. You pay the model provider directly at their listed price. No hidden multipliers, no per-seat AI surcharges. Our revenue comes from the platform subscription, not from reselling tokens.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">Do you store my source code?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, Kodus does not store your source code. All processing happens in real-time, and no part of your repository is saved on our servers.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">How does Kodus access my repositories?</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Kodus uses your selected Git provider integration and only accesses what is required to review pull requests. You can control and revoke access at any time.</p>
                </div>
              </div>

            </div>
            <div class="faq__man-footer">
              <span class="faq__man-section">Kodus v2.0</span>
              <span class="faq__man-center">2026-01-01</span>
              <span class="faq__man-section">KODUS-FAQ(1)</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ASK YOUR LLM ========== -->
    <!-- ========== SECURITY / TRUST BAND ========== -->
    <section class="home-security" id="security">
      <div class="container">
        <div class="home-security__inner">
          <div class="home-security__art">
            <div class="pixel-cloud" style="top:15%;left:12%;--s:1.5;animation:float-cloud 30s linear infinite"></div>
            <div class="pixel-cloud" style="top:30%;left:72%;--s:1.2;opacity:0.5;animation:float-cloud 45s linear infinite reverse"></div>
            <div class="pixel-cloud" style="top:8%;left:50%;--s:1;opacity:0.4;animation:float-cloud 60s linear infinite"></div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/castle.webp" alt="Castle" class="home-security__castle">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-guard.webp" alt="Kody Guard" class="home-security__guard">
          </div>
          <div class="home-security__copy">
            <span class="home-security__eyebrow">// privacy_security.mod</span>
            <h2 class="home-security__title">Private by default</h2>
            <p class="home-security__desc">Your source code is never stored and never used to train models. All data is encrypted in transit and at rest, and self-hosted runners keep your IP entirely inside your own infrastructure.</p>
            <ul class="home-security__chips">
              <li>SOC 2</li>
              <li>Self-hosted runners</li>
              <li>Encrypted in transit &amp; at rest</li>
              <li>Never trained on your code</li>
            </ul>
          </div>
        </div>
      </div>

      <style>
      .home-security{padding:60px 0}
      .home-security__inner{position:relative;display:grid;grid-template-columns:0.85fr 1.15fr;gap:40px;align-items:center;background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-left:3px solid var(--color-success);border-radius:var(--border-radius);padding:40px 44px;overflow:hidden}
      .home-security__art{position:relative;min-height:260px;display:flex;justify-content:center;align-items:flex-end}
      .home-security__castle{width:240px;height:auto;image-rendering:pixelated;position:relative;z-index:1;filter:drop-shadow(0 10px 20px rgba(0,0,0,0.6))}
      .home-security__guard{width:110px;height:auto;image-rendering:pixelated;position:absolute;left:50%;bottom:-6px;transform:translateX(-50%);z-index:2;filter:drop-shadow(0 5px 15px rgba(0,0,0,0.8))}
      .home-security__eyebrow{display:block;font-family:var(--font-mono);font-size:0.78rem;color:var(--color-success);letter-spacing:0.5px;margin-bottom:12px}
      .home-security__title{font-family:var(--font-mono);font-size:1.9rem;color:var(--color-text);margin-bottom:14px;line-height:1.2}
      .home-security__desc{font-size:0.95rem;color:var(--color-text-muted);line-height:1.7;max-width:560px}
      .home-security__chips{display:flex;flex-wrap:wrap;gap:10px;margin-top:22px}
      .home-security__chips li{display:flex;align-items:center;gap:7px;font-family:var(--font-mono);font-size:0.75rem;color:var(--color-text);background:var(--color-card-lv2);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);padding:7px 13px}
      .home-security__chips li::before{content:"\2713";color:var(--color-success);font-weight:700}
      @media(max-width:880px){.home-security__inner{grid-template-columns:1fr;gap:24px;padding:32px 24px}.home-security__art{min-height:220px;order:2}.home-security__title{font-size:1.6rem}}
      </style>
    </section>

    <section class="ask-llm" id="ask-llm">
      <div class="container">
        <h2 class="section-title">Still have questions?</h2>
        <p class="ask-llm__subtitle">Don't trust us — ask your favorite LLM</p>

        <div class="ask-llm__console">
          <!-- CRT top bar -->
          <div class="ask-llm__bar">
            <div class="ask-llm__bar-dots">
              <span class="ask-llm__dot ask-llm__dot--red"></span>
              <span class="ask-llm__dot ask-llm__dot--yellow"></span>
              <span class="ask-llm__dot ask-llm__dot--green"></span>
            </div>
            <span class="ask-llm__bar-title">query_builder.sh</span>
            <span class="ask-llm__bar-status">&#9679; READY</span>
          </div>

          <!-- Prompt area -->
          <div class="ask-llm__body">
            <div class="ask-llm__prompt">
              <span class="ask-llm__prompt-symbol">&gt;_</span>
              <p class="ask-llm__prompt-text">Tell me why Kodus is a great choice for my team</p>
            </div>

            <div class="ask-llm__actions">
              <span class="ask-llm__hint">Pick your oracle:</span>
              <div class="ask-llm__buttons">
                <a href="https://chatgpt.com/?hints=search&q=tell%20me%20why%20kodus%20%28kodus.io%29%20is%20a%20great%20choice%20for%20my%20team" target="_blank" rel="noopener noreferrer" class="ask-llm__btn" id="askLlmChatgptBtn">
                  <span class="ask-llm__btn-icon">&#9678;</span>
                  <span class="ask-llm__btn-label">ChatGPT</span>
                </a>
                <a href="https://claude.ai/new?q=tell%20me%20why%20kodus%20%28kodus.io%29%20is%20a%20great%20choice%20for%20my%20team" target="_blank" rel="noopener noreferrer" class="ask-llm__btn" id="askLlmClaudeBtn">
                  <span class="ask-llm__btn-icon">&#10023;</span>
                  <span class="ask-llm__btn-label">Claude</span>
                </a>
                <a href="https://www.perplexity.ai/search/?q=tell%20me%20why%20kodus%20%28kodus.io%29%20is%20a%20great%20choice%20for%20my%20team" target="_blank" rel="noopener noreferrer" class="ask-llm__btn" id="askLlmPerplexityBtn">
                  <span class="ask-llm__btn-icon">&#10070;</span>
                  <span class="ask-llm__btn-label">Perplexity</span>
                </a>
              </div>
            </div>
          </div>

          <!-- Scanlines overlay -->
          <div class="ask-llm__scanlines"></div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer('kodus'); ?>
