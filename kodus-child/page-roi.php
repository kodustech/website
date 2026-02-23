<?php
/*
 * Template Name: Kodus ROI
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main>

    <!-- ========== ROI HERO ========== -->
    <section class="roi-hero">
      <div class="container">
        <div class="roi-hero__header">
          <h1 class="roi-hero__title">Calculate your ROI with Kodus</h1>
          <p class="roi-hero__subtitle">See what your team could be saving</p>
        </div>
        
        <div class="roi-hero__window">
          <div class="pricing__card-bar">
            <div class="pricing__card-dots">
              <span class="pricing__card-dot"></span>
              <span class="pricing__card-dot"></span>
              <span class="pricing__card-dot"></span>
            </div>
            <span class="pricing__card-bar-title">roi_calculator.exe</span>
          </div>
          <div class="roi-hero__body">
            <div class="pricing__card-scanlines"></div>
            <!-- Content removed from window as requested -->
          </div>
        </div>
      </div>
    </section>

    <!-- ========== ROI CALCULATOR (Industrial Design Final) ========== -->
    <section class="roi">
      <div class="container">
        
        <div class="roi-industrial">
          <!-- Screws -->
          <div class="roi-screw roi-screw--tl"></div>
          <div class="roi-screw roi-screw--tr"></div>
          <div class="roi-screw roi-screw--bl"></div>
          <div class="roi-screw roi-screw--br"></div>

          <!-- Header -->
          <div class="roi-ind__header">
            <div class="roi-ind__brand">
              <span class="roi-ind__logo">KODUS</span>
              <span class="roi-ind__subtitle">IMPACT SYSTEM</span>
            </div>
            <div class="roi-ind__status">
              <span class="roi-ind__dot"></span>
              ANALYZER_ONLINE [v4.2]
            </div>
            <div class="roi-ind__session">
              SESSION_ID: ROI_9921_X
            </div>
          </div>

          <div class="roi-ind__label-bar">
            CONTROL INPUT MODULES
          </div>

          <div class="roi-ind__grid">
            <!-- LEFT: Controls -->
            <div class="roi-ind__controls">
              
              <!-- Card 1 -->
              <div class="roi-ind__input-card">
                <div class="roi-ind__input-header">
                  <label for="roiDevs" class="roi-ind__label">How many developers on your team?</label>
                  <div class="roi-ind__value-display"><span id="roiDevsValue">50</span> DEVS</div>
                </div>
                <div class="roi-ind__slider-row">
                  <span class="roi-ind__range-limit">R:1-500</span>
                  <input type="range" class="roi-ind__slider" id="roiDevs" min="1" max="500" value="50">
                </div>
              </div>

              <!-- Card 2 -->
              <div class="roi-ind__input-card">
                <div class="roi-ind__input-header">
                  <label for="roiRate" class="roi-ind__label">Average hourly rate per developer</label>
                  <div class="roi-ind__value-display">$<span id="roiRateValue">50</span>/HR</div>
                </div>
                <div class="roi-ind__slider-row">
                  <span class="roi-ind__range-limit">R:20-200</span>
                  <input type="range" class="roi-ind__slider" id="roiRate" min="20" max="200" value="50">
                </div>
              </div>

              <!-- Card 3 -->
              <div class="roi-ind__input-card">
                <div class="roi-ind__input-header">
                  <label for="roiTime" class="roi-ind__label">Average time spent per PR</label>
                  <div class="roi-ind__value-display"><span id="roiTimeValue">30</span> MIN</div>
                </div>
                <div class="roi-ind__slider-row">
                  <span class="roi-ind__range-limit">R:5-180</span>
                  <input type="range" class="roi-ind__slider" id="roiTime" min="5" max="180" value="30">
                </div>
              </div>

              <!-- CTA (Orange) -->
              <a href="https://app.kodus.io/sign-up" class="btn btn--primary roi-ind__cta-btn">START FREE TRIAL</a>

            </div>

            <!-- RIGHT: Monitor -->
            <div class="roi-ind__monitor-frame">
              <div class="roi-ind__monitor-screen">
                <div class="roi-ind__roi-section">
                  <span class="roi-ind__roi-label">ESTIMATED ROI</span>
                  <div class="roi-ind__roi-big"><span id="roiROI">20x</span></div>
                  <p class="roi-ind__roi-desc">RETURN ON INVESTMENT WITH AUTOMATED REVIEWS</p>
                </div>

                <div class="roi-ind__stats-grid">
                  <div class="roi-ind__stat">
                    <span class="roi-ind__stat-label">MONTHLY PRS</span>
                    <span class="roi-ind__stat-val" id="roiPRs">500</span>
                    <span class="roi-ind__stat-sub">PULL REQUESTS (BASED ON 10 PER DEV)</span>
                  </div>
                  <div class="roi-ind__stat">
                    <span class="roi-ind__stat-label">TIME SPENT ON REVIEWS</span>
                    <span class="roi-ind__stat-val" id="roiHours">250</span>
                    <span class="roi-ind__stat-sub">HOURS PER MONTH</span>
                  </div>
                  <div class="roi-ind__stat">
                    <span class="roi-ind__stat-label">CURRENT REVIEW COST</span>
                    <span class="roi-ind__stat-val roi-ind__stat-val--cyan" id="roiCost">$12,500</span>
                    <span class="roi-ind__stat-sub">PER MONTH</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <div class="roi-ind__footer">
            <div class="roi-ind__dots">
              <span></span><span></span><span></span><span></span>
            </div>
            <div class="roi-ind__model-info">KODUS INDUSTRIAL // MODEL X-24</div>
            <div class="roi-ind__dots">
              <span></span><span></span><span></span><span></span>
            </div>
          </div>

        </div>

      </div>
    </section>

      </div>
    </section>

    <!-- ========== TRUSTED BY ========== -->
    <section class="trusted-by">
      <div class="container">
        <h2 class="section-title">For teams that care how they ship.</h2>
        <div class="hero__clients">
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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="Notificações Inteligentes" class="logo-carousel__img">

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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="Notificações Inteligentes" class="logo-carousel__img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== DOSSIER STATION (Cases Redesign) ========== -->
    <section class="dossier-section">
      <div class="container">
        
        <!-- Case Archive Header -->
        <div class="dossier-header">
          <div class="dossier-header__left">
            <div class="dossier-header__title-row">
              <div class="dossier-header__accent"></div>
              <h2 class="dossier-header__title">CASE_ARCHIVE</h2>
            </div>
            <div class="dossier-header__subtitle">
              // OPERATIONAL SUCCESS LOGS / ENGINEERING DOSSIERS
            </div>
          </div>
          <div class="dossier-header__right">
            <span>STATUS: SYSTEM_READY</span>
            <span>ST_CODE: 200_OK_DB</span>
          </div>
        </div>

        <div class="dossier">
          
          <!-- LEFT SIDEBAR -->
          <div class="dossier__sidebar">
            <div class="dossier__drive-header">
              DRIVE_SELECTOR [A:]
            </div>
            <nav class="dossier__nav" id="dossierNav">
              <!-- Tab 1 -->
              <button class="dossier__tab dossier__tab--active" data-case="brendi">
                <span class="dossier__tab-label">ARCHIVE_REF: 1</span>
                <span class="dossier__tab-title">BRENDI.CASE</span>
              </button>
              <!-- Tab 2 -->
              <button class="dossier__tab" data-case="lerian">
                <span class="dossier__tab-label">ARCHIVE_REF: 2</span>
                <span class="dossier__tab-title">LERIAN.CASE</span>
              </button>
              <!-- Tab 3 -->
              <button class="dossier__tab" data-case="notificacoes">
                <span class="dossier__tab-label">ARCHIVE_REF: 3</span>
                <span class="dossier__tab-title">NOTIFICACOES.CASE</span>
              </button>
            </nav>

            <div class="dossier__radar">
              <div class="dossier__radar-circle">
                <div class="dossier__radar-scan"></div>
                <div class="dossier__radar-blip-track">
                  <div class="dossier__radar-blip"></div>
                </div>
              </div>
              <div class="dossier__radar-info">
                <span>CORE_TEMP: 42°C</span>
                <span>SIGNAL: EXCELLENT</span>
              </div>
            </div>
          </div>

          <!-- RIGHT MAIN CONTENT -->
          <main class="dossier__main">
            <!-- Top Status Bar -->
            <div class="dossier__top-bar">
              <div class="dossier__status-text">
                DOSSIER_STATION_v2.0 <span style="margin: 0 8px; color: #333344;">//</span> UPLINK_ESTABLISHED
              </div>
              <div class="dossier__status-indicator">
                <span>ARCHIVE_ACCESS: GRANTED</span>
                <span class="dossier__status-dot"></span>
              </div>
            </div>

            <div class="dossier__content-wrapper">
              
              <div class="dossier__grid">
                <!-- Visual Capture -->
                <div class="dossier__visual">
                  <div class="dossier__visual-lines"></div>
                  <div class="dossier__visual-overlay" id="dossierRecLabel">REC // brendi.case</div>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi Visual" class="dossier__visual-img" id="dossierImage">
                </div>

                <!-- Telemetry -->
                <div class="dossier__telemetry">
                  <div class="dossier__telemetry-title">TELEMETRY</div>
                  
                  <div class="dossier__telemetry-row">
                    <div class="dossier__telemetry-header">
                      <span>CPU_LOAD</span>
                      <span class="dossier__telemetry-val">MINIMAL</span>
                    </div>
                    <div class="dossier__bar"><div class="dossier__bar-fill" style="width: 15%;"></div></div>
                  </div>

                  <div class="dossier__telemetry-row">
                    <div class="dossier__telemetry-header">
                      <span>REF_ID</span>
                      <span class="dossier__telemetry-val" id="dossierRefId">BRN-01</span>
                    </div>
                    <div class="dossier__bar"><div class="dossier__bar-fill" style="width: 45%;"></div></div>
                  </div>

                  <div class="dossier__telemetry-row">
                    <div class="dossier__telemetry-header">
                      <span>STATUS</span>
                      <span class="dossier__telemetry-val">OPTIMIZED</span>
                    </div>
                    <div class="dossier__bar"><div class="dossier__bar-fill" style="width: 92%;"></div></div>
                  </div>
                </div>
              </div>

              <!-- Operational Log -->
              <div class="dossier__log">
                <span class="dossier__log-label">OPERATIONAL_DOSSIER_LOG</span>

                <h2 class="dossier__client-name" id="dossierTitle">BRENDI</h2>

                <div class="dossier__diagnosis" id="dossierDiagnosis">
                  <span class="dossier__tag">Review Backlog</span><span class="dossier__tag">Manual Checks</span><span class="dossier__tag">Slow Feedback</span><span class="dossier__tag">Auto PR Prechecks</span>
                </div>

                <p class="dossier__desc" id="dossierDesc">
                  At Brendi, reviews became a bottleneck. PRs stayed open. The queue grew early in the day. Senior engineers started their mornings clearing pending reviews instead of writing code. A big part of the time went into obvious fixes that showed up in almost every PR. Kody stepped into the flow to catch those issues early, running the team’s rules automatically.
                </p>

                <div class="dossier__impact-section">
                  <div class="dossier__impact">
                    <span class="dossier__impact-label">BOTTOM_LINE_IMPACT:</span>
                    <span id="dossierImpact">About 70 percent less time spent on reviews per week. From 125 hours down to around 40. Less waiting. Less context switching. More time to focus on what actually moves the product.</span>
                  </div>
                  <a href="https://kodus.io/how-brendi-cut-review-time-by-70/" class="dossier__export-btn" id="dossierBtn">VIEW_FULL_CASE_DATA</a>
                </div>
              </div>

            </div>
          </main>

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
          <span class="vhs__counter-total" id="vhsCounterTotal">008</span>
        </div>

      </div>
    </section>

    <!-- ========== CTA (Pixel Art Style) ========== -->
    <section class="roi-cta">
      <div class="container">
        <div class="pixel-cta">
          
          <div class="pixel-cta__window">
            <div class="pixel-cta__bar">
              <span class="pixel-cta__bar-text">GET_STARTED.EXE</span>
            </div>
            
            <div class="pixel-cta__content">
              <div class="pixel-cta__media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-review.webp" alt="Kody Review" class="pixel-cta__kody">
              </div>
              <div class="pixel-cta__copy">
                <h2 class="pixel-cta__title">Ready to let Kody review<br>your next PR?</h2>
                <p class="pixel-cta__desc">Spin it up in under 2 minutes — cloud or self-hosted, no credit card.</p>
                
                <div class="pixel-cta__actions">
                  <a href="https://github.com/kodustech/kodus-ai" class="btn btn--outline-light pixel-cta__btn">
                    <svg width="20" height="20" viewBox="0 0 16 16" fill="currentColor" style="margin-right: 8px;"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
                    DEPLOY
                  </a>
                  <a href="https://app.kodus.io/sign-up" class="btn btn--primary pixel-cta__btn">
                    START FREE TRIAL
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer('kodus'); ?>
