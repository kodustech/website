<?php
/*
 * Template Name: Kodus Home
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

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
      <!-- Scattered bugs removed from here and moved to global container -->


      <div class="container hero__container">
        <h1 class="hero__title">
          The <span class="highlight">Open Source</span> Alternative to CodeRabbit
        </h1>
        <p class="hero__subtitle">
          AI Code Review With Full Control Over<br>Model Choice and Costs
        </p>

        <div class="hero__ctas">
          <div class="hero__cta-tabs">
            <button class="hero__tab hero__tab--active" data-tab="git">Start with Git</button>
            <button class="hero__tab" data-tab="terminal">Start with Terminal</button>
          </div>

          <div class="hero__cta-content">
            <!-- Git tab -->
            <div class="hero__tab-panel hero__tab-panel--active" id="tab-git">
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
              </div>
              <a href="https://app.kodus.io/sign-up" class="btn btn--primary hero__cta-btn">Start Free Trial</a>
            </div>

            <!-- Terminal tab -->
            <div class="hero__tab-panel" id="tab-terminal">
              <div class="hero__terminal-cmd">
                <code class="hero__terminal-code">curl -fsSL https://review-skill.com/install | bash</code>
                <button class="hero__terminal-copy" aria-label="Copy command" id="copyCmd">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>
                </button>
              </div>
            </div>
          </div>
        </div>

        <p class="hero__disclaimer">No credit card required &bull; 14-day free trial</p>

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
              <div class="logo-carousel">
                <div class="logo-carousel__track" id="logoTrack">
                  <!-- Set 1 -->
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/purple_metrics.webp" alt="Purple Metrics" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/r10.webp" alt="R10" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_16.webp" alt="Mecanizou" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/cred.webp" alt="Cred Aluga" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/ikatec.webp" alt="Ikatec" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/maino.webp" alt="Mainô" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_9.webp" alt="Logo 7" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_7.webp" alt="Logo 8" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/vixt.webp" alt="Vixting" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_12.webp" alt="Logo 10" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_10.webp" alt="Logo 11" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_8.webp" alt="Logo 12" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_11.webp" alt="Logo 13" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/doji.webp" alt="Doji" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_13.webp" alt="Logo 15" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_14.webp" alt="Logo 16" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_17.webp" alt="Logo 17" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_19.webp" alt="Logo 18" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi_v2.webp" alt="Brendi" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian_v2.webp" alt="Lerian" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clickbus.png" alt="ClickBus" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notificacoes.webp" alt="Notificações Inteligentes" class="logo-carousel__img">

                  <!-- Set 2 (Duplicate for infinite scroll) -->
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/purple_metrics.webp" alt="Purple Metrics" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/r10.webp" alt="R10" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_16.webp" alt="Mecanizou" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/cred.webp" alt="Cred Aluga" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/ikatec.webp" alt="Ikatec" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/maino.webp" alt="Mainô" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_9.webp" alt="Logo 7" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_7.webp" alt="Logo 8" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/vixt.webp" alt="Vixting" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_12.webp" alt="Logo 10" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_10.webp" alt="Logo 11" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_8.webp" alt="Logo 12" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_11.webp" alt="Logo 13" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/doji.webp" alt="Doji" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_13.webp" alt="Logo 15" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_14.webp" alt="Logo 16" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_17.webp" alt="Logo 17" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_19.webp" alt="Logo 18" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi_v2.webp" alt="Brendi" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian_v2.webp" alt="Lerian" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clickbus.png" alt="ClickBus" class="logo-carousel__img">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notificacoes.webp" alt="Notificações Inteligentes" class="logo-carousel__img">
                </div>
              </div>
            </div>
          </div>
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
                <h3 class="cartridge__title">Generous<br>Free Tier</h3>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 2: Model Agnostic -->
          <button class="cartridge" data-modal="modal-agnostic">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--blue"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--orbit" style="flex-direction: column; justify-content: flex-end;">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-space.webp" alt="Kody Space" class="orbit-center" style="z-index: 20; position: relative; bottom: -5px; width: 80px;">

                  <div class="model-track-wrapper" style="position: absolute; top: 10px; left: 0; width: 100%; height: 40px; overflow: hidden;">
                    <div class="model-track move-right">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anthropic.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/claude-ai.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deepsek.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gemini.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anthropic.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/claude-ai.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/deepsek.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gemini.webp" class="track-icon" alt="">
                    </div>
                  </div>

                  <div class="model-track-wrapper" style="position: absolute; top: 55px; left: 0; width: 100%; height: 40px; overflow: hidden;">
                    <div class="model-track move-left">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/glm.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/meta.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/open-ai.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/grok.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/glm.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/meta.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/open-ai.webp" class="track-icon" alt="">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/grok.webp" class="track-icon" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cartridge__title-area">
                <h3 class="cartridge__title">Model<br>Agnostic</h3>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-taxa.webp" alt="Kody Zero Markup" class="kody-taxa">
                  <div class="pixel-sign sign-1"></div>
                  <div class="pixel-sign sign-2"></div>
                  <div class="pixel-sign sign-3"></div>
                  <div class="pixel-sign sign-4"></div>
                </div>
              </div>
              <div class="cartridge__title-area">
                <h3 class="cartridge__title">Zero<br>Markup</h3>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
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
                <h3 class="cartridge__title">Flexible<br>Configuration</h3>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__cta">Learn more</span>
          </button>

        </div>
      </div>
    </section>

    <!-- ========== CARTRIDGE MODALS ========== -->
    <div class="modal-overlay" id="modalOverlay" aria-hidden="true">
      <div class="modal" id="modalContent" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <button class="modal__close" id="modalClose" aria-label="Close modal">&times;</button>
        <div class="modal__header">
          <h3 class="modal__title" id="modalTitle"></h3>
        </div>
        <div class="modal__desc" id="modalDesc"></div>
      </div>
    </div>

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
                <div class="vcr__body">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-poeta.webp" alt="" class="vcr__image" id="vcrImage" style="display: block;">
                  <p class="vcr__text" id="vcrText">You want a poem in every pull request.</p>
                </div>
                <div class="vcr__slide-bottom">
                  <!-- Status removed -->
                </div>
              </div>
            </div>

            <!-- Category bar -->
            <div class="vcr__categories">
              <button class="vcr__cat vcr__cat--active" data-slide="0">[1] Poetry</button>
              <button class="vcr__cat" data-slide="1">[2] Billing</button>
              <button class="vcr__cat" data-slide="2">[3] Vendor</button>
              <button class="vcr__cat" data-slide="3">[4] Noise</button>
            </div>
          </div>

          <!-- VCR Control panel -->
          <div class="vcr__controls">
            <div class="vcr__speaker"><span></span><span></span><span></span></div>
            <div class="vcr__buttons">
              <button class="vcr__btn" data-slide="0"><span class="vcr__btn-num">1</span><span class="vcr__btn-label">Poetry</span></button>
              <button class="vcr__btn" data-slide="1"><span class="vcr__btn-num">2</span><span class="vcr__btn-label">Billing</span></button>
              <button class="vcr__btn" data-slide="2"><span class="vcr__btn-num">3</span><span class="vcr__btn-label">Vendor</span></button>
              <button class="vcr__btn" data-slide="3"><span class="vcr__btn-num">4</span><span class="vcr__btn-label">Noise</span></button>
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

    <!-- ========== THE BASICS DONE RIGHT ========== -->
    <section class="basics" id="basics">
      <div class="container">
        <h2 class="section-title">The basics done <span class="highlight">Right</span></h2>

        <div class="basics__showcase">
          <div class="basics__window">
            <div class="window-bar">
              <span class="window-dot"></span>
              <span class="window-dot"></span>
              <span class="window-dot"></span>
              <span class="window-bar__url">kodus://features</span>
            </div>
            <!-- Mobile feature selector (hidden on desktop) -->
            <div class="basics__mobile-nav">
              <button class="basics__mobile-tab basics__mobile-tab--active" data-feature="0">Context</button>
              <button class="basics__mobile-tab" data-feature="1">Rules</button>
              <button class="basics__mobile-tab" data-feature="2">Sync</button>
              <button class="basics__mobile-tab" data-feature="3">Plugins</button>
              <button class="basics__mobile-tab" data-feature="4">Tech Debt</button>
              <button class="basics__mobile-tab" data-feature="5">Cockpit</button>
              <button class="basics__mobile-tab" data-feature="6">Security</button>
            </div>

            <div class="basics__body">
              <!-- File tree sidebar -->
              <div class="basics__sidebar">
                <div class="basics__sidebar-header">
                  <span class="basics__folder-icon">&#128193;</span> Explorer
                </div>
                <ul class="basics__tree">
                  <li class="basics__tree-folder">
                    <span class="basics__tree-toggle">&#9660;</span> features/
                  </li>
                  <li class="basics__tree-file basics__tree-file--active" data-feature="0">
                    <span class="basics__file-icon"></span> codebase_context.mod
                  </li>
                  <li class="basics__tree-file" data-feature="1">
                    <span class="basics__file-icon"></span> set_rules.mod
                  </li>
                  <li class="basics__tree-file" data-feature="2">
                    <span class="basics__file-icon"></span> rule_sync.mod
                  </li>
                  <li class="basics__tree-file" data-feature="3">
                    <span class="basics__file-icon"></span> plugins_mcps.mod
                  </li>
                  <li class="basics__tree-file" data-feature="4">
                    <span class="basics__file-icon"></span> technical_debt.mod
                  </li>
                  <li class="basics__tree-file" data-feature="5">
                    <span class="basics__file-icon"></span> cockpit.mod
                  </li>
                  <li class="basics__tree-file" data-feature="6">
                    <span class="basics__file-icon"></span> privacy_security.mod
                  </li>
                </ul>
              </div>

              <!-- Detail panel -->
              <div class="basics__content">
                <div class="basics__content-header">
                  <span class="basics__tab basics__tab--active" id="basicsTab">codebase_context.mod</span>
                </div>
                <div class="basics__content-body" id="basicsDetail">
                  <!-- Panel 0: Learns from your context -->
                  <div class="basics__panel" id="basics-panel-0">
                    <h3 class="basics__feature-title">Learns from your context</h3>
                    <div class="basics__video">
                      <video src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/context.webm" autoplay loop muted playsinline style="width: 100%; height: auto; display: block;"></video>
                    </div>
                    <p class="basics__feature-desc">Deep understanding of your entire project structure and logic.</p>
                    <p class="basics__feature-detail">Kody analyzes your team’s workflows, coding standards and Architecture to understand your unique needs and provide tailored reviews.</p>
                  </div>

                  <!-- Panel 1: You set the rules -->
                  <div class="basics__panel" id="basics-panel-1" style="display: none;">
                    <h3 class="basics__feature-title">You set the rules</h3>
                    <div class="basics__video">
                      <video data-src="https://kodus.io/wp-content/uploads/2026/02/1111.mp4" preload="none" autoplay loop muted playsinline class="basics__deferred-video" style="width: 100%; height: auto; display: block;"></video>
                    </div>
                    <p class="basics__feature-desc">Teams define their own review standards.</p>
                    <p class="basics__feature-detail">Create custom review guidelines in plain language or use rules from the built-in library. Reviews consistently follow the standards defined by your team.</p>
                  </div>

                  <!-- Panel 2: Rule Sync -->
                  <div class="basics__panel" id="basics-panel-2" style="display: none;">
                    <h3 class="basics__feature-title">Sync Your Existing Rules</h3>
                    <div class="basics__video">
                      <div class="rule-sync-animation" style="position: relative; width: 100%; height: 320px; display: flex; justify-content: center; align-items: center; background: transparent; overflow: hidden; opacity: 0; animation: fade-in-anim 0.3s forwards;">
                        <svg viewBox="0 0 100 100" preserveAspectRatio="none" style="position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; z-index: 1;">
                          <g class="circuit-lines">
                            <path d="M28 20 H 38 V 45 H 44" class="flow-path" />
                            <path d="M28 50 H 44" class="flow-path" />
                            <path d="M28 80 H 38 V 55 H 44" class="flow-path" />
                            <path d="M72 20 H 62 V 45 H 56" class="flow-path" />
                            <path d="M72 50 H 56" class="flow-path" />
                            <path d="M72 80 H 62 V 55 H 56" class="flow-path" />
                          </g>
                          <g class="data-packets">
                            <rect width="3" height="3" class="data-packet">
                              <animateMotion dur="2s" repeatCount="indefinite" path="M28 20 H 38 V 45 H 44" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
                            </rect>
                            <rect width="3" height="3" class="data-packet">
                              <animateMotion dur="2s" begin="0.5s" repeatCount="indefinite" path="M28 50 H 44" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
                            </rect>
                            <rect width="3" height="3" class="data-packet">
                              <animateMotion dur="2s" begin="1s" repeatCount="indefinite" path="M28 80 H 38 V 55 H 44" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
                            </rect>
                            <rect width="3" height="3" class="data-packet">
                              <animateMotion dur="2s" begin="0.2s" repeatCount="indefinite" path="M72 20 H 62 V 45 H 56" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
                            </rect>
                            <rect width="3" height="3" class="data-packet">
                              <animateMotion dur="2s" begin="0.7s" repeatCount="indefinite" path="M72 50 H 56" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
                            </rect>
                            <rect width="3" height="3" class="data-packet">
                              <animateMotion dur="2s" begin="1.2s" repeatCount="indefinite" path="M72 80 H 62 V 55 H 56" calcMode="discrete" keyPoints="0;0.2;0.4;0.6;0.8;1" keyTimes="0;0.2;0.4;0.6;0.8;1" />
                            </rect>
                          </g>
                        </svg>
                        <div style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%) scale(1.1); z-index: 10;">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-box.webp" alt="Kody Box" class="kody-box" style="width: 140px; height: auto;">
                        </div>
                        <div style="position: absolute; left: 22%; top: 0; bottom: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 0; z-index: 5; width: 50px; align-items: center; transform: scale(1.1);">
                          <div class="tool-icon tool-left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kilo.webp" alt="Kiln"></div>
                          <div class="tool-icon tool-left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/copilot.webp" alt="Copilot"></div>
                          <div class="tool-icon tool-left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cursor.webp" alt="Cursor"></div>
                        </div>
                        <div style="position: absolute; right: 22%; top: 0; bottom: 0; display: flex; flex-direction: column; justify-content: space-between; padding: 30px 0; z-index: 5; width: 50px; align-items: center; transform: scale(1.1);">
                          <div class="tool-icon tool-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/claude.webp" alt="Claude"></div>
                          <div class="tool-icon tool-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/openai.webp" alt="OpenAI"></div>
                          <div class="tool-icon tool-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cline.webp" alt="Cline"></div>
                        </div>
                      </div>
                    </div>
                    <p class="basics__feature-desc">Keep the standards you already use. No rework.</p>
                    <p class="basics__feature-detail">Kody automatically detects rule files from tools like Cursor, Copilot, Claude, and Windsurf — so your reviews stay consistent.</p>
                  </div>

                  <!-- Panel 3: Bring your business context -->
                  <div class="basics__panel" id="basics-panel-3" style="display: none;">
                    <h3 class="basics__feature-title">Bring your business context</h3>
                    <div class="basics__video">
                      <video data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/plugins.webm" preload="none" autoplay loop muted playsinline class="basics__deferred-video" style="width: 100%; height: auto; display: block;"></video>
                    </div>
                    <p class="basics__feature-desc">Extend functionality with Model Context Protocol servers.</p>
                    <p class="basics__feature-detail">Connect tools like Jira, Notion, or Linear so Kody can understand specs, tasks, and requirements while reviewing your code.</p>
                  </div>

                  <!-- Panel 4: Track technical debt -->
                  <div class="basics__panel" id="basics-panel-4" style="display: none;">
                    <h3 class="basics__feature-title">Track technical debt</h3>
                    <div class="basics__video">
                      <video data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/issues.webm" preload="none" autoplay loop muted playsinline class="basics__deferred-video" style="width: 100%; height: auto; display: block;"></video>
                    </div>
                    <p class="basics__feature-desc">Monitor and manage technical debt over time.</p>
                    <p class="basics__feature-detail">Kodus automatically turns unimplemented suggestions into issues, helping your team visualize and reduce technical debt over time.</p>
                  </div>

                  <!-- Panel 5: Accelerate your delivery -->
                  <div class="basics__panel" id="basics-panel-5" style="display: none;">
                    <h3 class="basics__feature-title">Accelerate your delivery</h3>
                    <div class="basics__video">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cockpit.webp" alt="Accelerate your delivery" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <p class="basics__feature-desc">A centralized dashboard for your engineering insights.</p>
                    <p class="basics__feature-detail">Monitor deploy frequency, cycle time, bug ratio and PR sizes to keep your team shipping fast — and safely.</p>
                  </div>

                  <!-- Panel 6: Privacy & Security -->
                  <div class="basics__panel" id="basics-panel-6" style="display: none;">
                    <h3 class="basics__feature-title">Privacy & Security</h3>
                    <div class="basics__video">
                      <div class="security-anim" style="width: 100%; height: 320px; position: relative; overflow: hidden; background: transparent;">
                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;">
                          <div class="pixel-cloud" style="top: 15%; left: 15%; --s: 1.5; animation: float-cloud 30s linear infinite;"></div>
                          <div class="pixel-cloud" style="top: 30%; left: 75%; --s: 1.2; opacity: 0.5; animation: float-cloud 45s linear infinite reverse;"></div>
                          <div class="pixel-cloud" style="top: 10%; left: 55%; --s: 1; opacity: 0.4; animation: float-cloud 60s linear infinite;"></div>
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/castle.webp" alt="Castle" style="width: 280px; height: auto; image-rendering: pixelated; position: absolute; bottom: 60px; left: 50%; transform: translateX(-50%); z-index: 1; filter: drop-shadow(0 10px 20px rgba(0,0,0,0.6));">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-guard.webp" alt="Kody Guard" style="width: 130px; height: auto; image-rendering: pixelated; position: absolute; z-index: 2; bottom: 20px; left: 50%; transform: translateX(-50%); filter: drop-shadow(0 5px 15px rgba(0,0,0,0.8));">
                      </div>
                    </div>
                    <p class="basics__feature-desc">Enterprise-grade security ensuring your code stays safe.</p>
                    <p class="basics__feature-detail">Source code is never stored and is never used to train models. All data is encrypted in transit and at rest. Kodus supports SOC 2 compliance and offers self-hosted runners, so your IP can remain entirely within your own infrastructure.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

              <!-- VHS 1: Leonardo Maia -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-primary);">
                  <span class="vhs__spine-title">VOLTZ_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-primary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/leonardo-maia-1-150x150-1.jpeg" alt="Leonardo Maia" class="vhs__avatar-img">
                    </div>
                    <h4 class="vhs__name">Leonardo Maia</h4>
                    <p class="vhs__role">@Conta Voltz</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kody feels like having a senior dev reviewing every pull request—clear, actionable feedback on quality, security, and performance, right in Git. Since we started using it, our <span style="color: #339966;"><b>code review time dropped by 40%</b></span>, and production bugs were reduced by half.</p>
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
                    <h4 class="vhs__name">André Diogo</h4>
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
                    <h4 class="vhs__name">João H. Kersul</h4>
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
                    <h4 class="vhs__name">Ricardo</h4>
                    <p class="vhs__role">@Icatec</p>
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
                    <h4 class="vhs__name">Luiz Barrile</h4>
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
                    <h4 class="vhs__name">Raphael Sampaio</h4>
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
                    <h4 class="vhs__name">Pedro Maia</h4>
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
                    <h4 class="vhs__name">Jonathan Georgeu</h4>
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
          <span class="vhs__counter-total" id="vhsCounterTotal">006</span>
        </div>

      </div>
    </section>

    <!-- ========== ROI Calculator ========== -->
    <section class="roi" id="roi">
      <div class="container">
        <h2 class="section-title">Calculate your ROI</h2>

        <div class="roi-calc">
          <!-- LCD Display -->
          <div class="roi-calc__display">
            <div class="roi-calc__display-inner">
              <span class="roi-calc__display-label">Estimated ROI</span>
              <div class="roi-calc__display-value"><span id="roiROI">20x</span></div>
              <div class="roi-calc__display-stats">
                <div class="roi-calc__stat">
                  <span class="roi-calc__stat-val" id="roiPRs">500</span>
                  <span class="roi-calc__stat-label">PRs/month</span>
                </div>
                <div class="roi-calc__stat">
                  <span class="roi-calc__stat-val" id="roiHours">250</span>
                  <span class="roi-calc__stat-label">Hours saved</span>
                </div>
                <div class="roi-calc__stat">
                  <span class="roi-calc__stat-val" id="roiCost">$12,500</span>
                  <span class="roi-calc__stat-label">Monthly cost</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Input keys -->
          <div class="roi-calc__inputs">
            <div class="roi-calc__field">
              <div class="roi-calc__field-top">
                <label for="roiDevs" class="roi-calc__label">Developers on your team</label>
                <span class="roi-calc__readout"><span id="roiDevsValue">50</span></span>
              </div>
              <span class="roi-calc__hint">We estimate ~10 PRs per developer each month</span>
              <input type="range" class="roi-calc__slider" id="roiDevs" min="1" max="500" value="50">
            </div>

            <div class="roi-calc__field">
              <div class="roi-calc__field-top">
                <label for="roiRate" class="roi-calc__label">Average hourly rate</label>
                <span class="roi-calc__readout">$<span id="roiRateValue">50</span></span>
              </div>
              <span class="roi-calc__hint">Cost per hour of developer time, including benefits</span>
              <input type="range" class="roi-calc__slider" id="roiRate" min="20" max="200" value="50">
            </div>

            <div class="roi-calc__field">
              <div class="roi-calc__field-top">
                <label for="roiTime" class="roi-calc__label">Time spent per review</label>
                <span class="roi-calc__readout"><span id="roiTimeValue">30</span> min</span>
              </div>
              <span class="roi-calc__hint">Average minutes a reviewer spends on each PR</span>
              <input type="range" class="roi-calc__slider" id="roiTime" min="5" max="180" value="30">
            </div>
          </div>

          <a href="https://app.kodus.io/sign-up" class="btn btn--primary roi-calc__cta">Start Free Trial</a>
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
                  <span class="faq__question-text">kodus --help "Which AI models are supported?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Kodus is model agnostic. You can use Claude, GPT-4, Gemini, Llama, or any OpenAI-compatible endpoint.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Can I restrict the permissions Kodus uses?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Yes, you have full control over the permissions you grant. Kodus operates with the minimum access required to keep your code secure.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Will I be charged for all developers in my organization?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, you decide who is included in the Kodus team and will only be charged for those users. You have full control over team management and billing.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Do you train your AI model with my code or data?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, Kodus does not train its models with customer data. Your data is processed securely and is never used to improve or retrain our AI.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "How does Kodus compare to CodeRabbit?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>Both offer AI code review, but Kodus is open source, model agnostic, and charges zero markup on LLM costs. CodeRabbit locks you into their model choices and bundles AI costs into opaque pricing. With Kodus you control the model, the cost, and the rules.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "What Git providers are supported?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>GitHub, GitLab, Bitbucket, and Azure DevOps. Kodus integrates at the pull request level — it reads diffs, posts inline comments, and respects your existing review workflows. Setup takes under 5 minutes.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "What does zero markup mean?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>We don't add any margin on top of LLM API calls. You pay the model provider directly at their listed price. No hidden multipliers, no per-seat AI surcharges. Our revenue comes from the platform subscription, not from reselling tokens.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Do you store my source code?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, Kodus does not store your source code. All processing happens in real-time, and no part of your repository is saved on our servers.</p>
                </div>
              </div>

              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "How does Kodus access my repositories?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>No, Kodus does not store your source code. All processing happens in real-time, and no part of your repository is saved on our servers.</p>
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
                <a href="https://chatgpt.com/?hints=search&q=tell%20me%20why%20kodus%20%28kodus.io%29%20is%20a%20great%20choice%20for%20my%20team" target="_blank" rel="noopener noreferrer" class="ask-llm__btn">
                  <span class="ask-llm__btn-icon">&#9678;</span>
                  <span class="ask-llm__btn-label">ChatGPT</span>
                </a>
                <a href="https://claude.ai/new?q=tell%20me%20why%20kodus%20%28kodus.io%29%20is%20a%20great%20choice%20for%20my%20team" target="_blank" rel="noopener noreferrer" class="ask-llm__btn">
                  <span class="ask-llm__btn-icon">&#10023;</span>
                  <span class="ask-llm__btn-label">Claude</span>
                </a>
                <a href="https://www.perplexity.ai/search/?q=tell%20me%20why%20kodus%20%28kodus.io%29%20is%20a%20great%20choice%20for%20my%20team" target="_blank" rel="noopener noreferrer" class="ask-llm__btn">
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
