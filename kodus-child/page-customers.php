<?php
/*
 * Template Name: Kodus Customers
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main>

    <!-- ========== CUSTOMERS HERO ========== -->
    <section class="cust-hero">
      <div class="container">
        <h1 class="cust-hero__title">
          Engineering teams that <span class="highlight">review every PR with Kodus</span>
        </h1>
        <p class="cust-hero__subtitle">How teams at QuintoAndar, Pilar, Ikatec and others use Kody to catch issues before they reach production.</p>
        <div class="cust-hero__actions">
          <a href="https://app.kodus.io/sign-up" class="btn btn--primary" id="customersHeroTryCloudBtn">Try Cloud For Free &rarr;</a>
          <button
            type="button"
            class="btn btn--outline-light"
            id="customersHeroContactSalesBtn"
            data-cal-link="gabrielmalinosqui/30min"
            data-cal-config='{"layout":"month_view"}'
          >
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
            Talk to a founder
          </button>
        </div>
      </div>
    </section>

    <!-- ========== FEATURED QUOTE ========== -->
    <section class="cust-featured">
      <div class="container">
        <div class="cust-featured__card">
          <div class="cust-featured__card-bar">
            <span class="cust-featured__file-label">PERSONNEL_FILE: SEC-8492</span>
            <span class="pricing__card-bar-title">quintoandar_testimonial.dat</span>
          </div>
          <div class="cust-featured__body">
            <aside class="cust-featured__profile">
              <div class="cust-featured__photo-wrap">
                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/david-quinto-andar.png'); ?>" alt="David Barnett" class="cust-featured__avatar">
                <span class="cust-featured__stamp">VERIFIED</span>
              </div>

              <div class="cust-featured__meta-item">
                <span class="cust-featured__meta-label">NAME</span>
                <span class="cust-featured__meta-value">David Barnett</span>
              </div>

              <div class="cust-featured__meta-item">
                <span class="cust-featured__meta-label">ROLE</span>
                <span class="cust-featured__meta-value">Principal Engineer</span>
              </div>

              <div class="cust-featured__meta-item">
                <span class="cust-featured__meta-label">COMPANY</span>
                <span class="cust-featured__meta-value">QuintoAndar</span>
              </div>
            </aside>

            <div class="cust-featured__statement">
              <div class="cust-featured__statement-head">
                <span class="cust-featured__statement-label">SUBJECT_STATEMENT</span>
                <span class="cust-featured__statement-date">DATE: LIVE_FEED</span>
              </div>

              <blockquote class="cust-featured__quote">
                &ldquo;Kodus helps us reflect our standards in PRs to share knowledge and raise our code quality. Kody catches some subtle issues and calls attention to them so reviews and authors can have a more effective review. I appreciate the flexibility to configure custom rules and integrations.&rdquo;
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== LOGO GRID ========== -->
    <section class="cust-logos">
      <div class="container">
        <h2 class="section-title cust-logos__intro">For teams that ship fast and sleep well at night.</h2>
        <div class="cust-logos__terminal">
          <div class="cust-logos__bar">
            <span class="cust-logos__bar-left">CLIENT_NODES_OS</span>
            <span class="cust-logos__bar-center">// v2.0</span>
            <span class="cust-logos__bar-right">READY</span>
          </div>

          <div class="cust-logos__body">
            <h2 class="cust-logos__title">CUSTOMERS_</h2>
            <p class="cust-logos__meta">ACCESSING_DATABASE...</p>
            <p class="cust-logos__meta">SHOWING 40 OF 5,000+ TEAMS</p>

            <div class="cust-logos__grid">
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/quintoandar.png" alt="QuintoAndar" loading="lazy"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/covergenius.svg" alt="Cover Genius" loading="lazy" style="--h:21px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/insighttimer.svg" alt="Insight Timer" loading="lazy" style="--h:22px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/scorpion.svg" alt="Scorpion" loading="lazy" style="--h:19px"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/dsr.webp" alt="DSR" loading="lazy"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/capim.svg" alt="Capim" loading="lazy" style="--h:30px"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clickbus.png" alt="ClickBus" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_7.webp" alt="Rocket.Chat" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_19.webp" alt="SaaSJet" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_10.webp" alt="Pilar" loading="lazy"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" loading="lazy" style="--h:25px"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/ikatec.webp" alt="Ikatec" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_9.webp" alt="Open Co" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi_v2.webp" alt="Brendi" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notificacoes.webp" alt="Notificações Inteligentes" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/doji.webp" alt="Doji" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/purple_metrics.webp" alt="Purple Metrics" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/r10.webp" alt="R10" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/maino.webp" alt="Maino" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/vixt.webp" alt="Vixting" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_12.webp" alt="Seeds" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_8.webp" alt="Asksuite" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_11.webp" alt="Mecanizou" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_13.webp" alt="Lecom" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_14.webp" alt="Precisão Sistemas" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_16.webp" alt="Sommus Sistemas" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/frame_17.webp" alt="Up Estate" loading="lazy"></div>
              <div class="cust-logos__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/cred.webp" alt="Cred Aluga" loading="lazy"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/inhire.svg" alt="InHire" loading="lazy" style="--h:24px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/irrah.webp" alt="Irrah Tech" loading="lazy" style="--h:20px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/esolution.webp" alt="eSolution" loading="lazy" style="--h:23px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/prodata.webp" alt="Prodata" loading="lazy" style="--h:25px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/melhorplano.webp" alt="MelhorPlano" loading="lazy" style="--h:21px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/century.svg" alt="CENTURY Tech" loading="lazy" style="--h:22px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/botdesigner.webp" alt="Botdesigner" loading="lazy" style="--h:27px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/erpopen.webp" alt="erp&#124;open" loading="lazy" style="--h:24px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/dponet.webp" alt="DPOnet" loading="lazy" style="--h:28px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/humanizadas.svg" alt="Humanizadas" loading="lazy" style="--h:18px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/fpscloud.webp" alt="Full Potential Solutions (FPS Cloud)" loading="lazy" style="--h:28px"></div>
              <div class="cust-logos__item cust-logos__item--tight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/classcard.svg" alt="Classcard" loading="lazy" style="--h:21px"></div>
            </div>

            <div class="cust-logos__footer">
              <span>+ thousands more</span>
              <span>5,000+ teams &middot; 66 countries</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== DOSSIER STATION ========== -->
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
                  <a href="<?php echo home_url('/case-brendi/'); ?>" class="dossier__export-btn" id="dossierBtn">VIEW_FULL_CASE_DATA</a>
                </div>
              </div>

            </div>
          </main>

        </div>

      </div>
    </section>

    <!-- Customer dossiers: all three cases are server-rendered for crawlers and LLMs; the dossier UI above displays one at a time -->
    <div class="dossier-data" hidden>
      <article class="dossier-data__item" id="dossier-brendi" data-ref="BRN-01" data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" data-image-class="" data-link="/case-brendi/">
        <h3>BRENDI</h3>
        <ul><li>Review Backlog</li><li>Manual Checks</li><li>Slow Feedback</li><li>Auto PR Prechecks</li></ul>
        <p class="dossier-data__desc">At Brendi, reviews became a bottleneck. PRs stayed open. The queue grew early in the day. Senior engineers started their mornings clearing pending reviews instead of writing code. A big part of the time went into obvious fixes that showed up in almost every PR. Kody stepped into the flow to catch those issues early, running the team&#x27;s rules automatically.</p>
        <p class="dossier-data__impact">About 70 percent less time spent on reviews per week. From 125 hours down to around 40. Less waiting. Less context switching. More time to focus on what actually moves the product.</p>
        <a href="/case-brendi/">Read the full Brendi case study</a>
      </article>
      <article class="dossier-data__item" id="dossier-lerian" data-ref="LER-02" data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" data-image-class="" data-link="/case-lerian/">
        <h3>LERIAN</h3>
        <ul><li>Review Queue</li><li>Repeated Comments</li><li>Manual Checks</li><li>Auto PR Feedback</li></ul>
        <p class="dossier-data__desc">At Lerian, the problem was simple. Reviews were taking too much time because too much of the work was repetitive. The same adjustments showed up in PR after PR. Formatting. Team conventions. Basic rules. Kody stepped into the PR flow to catch those things early, applying the team&#x27;s own rules and giving feedback right away.</p>
        <p class="dossier-data__impact">About 60 percent less time spent on reviews per week. From around 100 hours down to about 40. Less queue. Less rework. More time for work that actually matters.</p>
        <a href="/case-lerian/">Read the full Lerian case study</a>
      </article>
      <article class="dossier-data__item" id="dossier-notificacoes" data-ref="NTF-03" data-image="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" data-image-class="dossier__visual-img--notifica" data-link="/case-notificacoes/">
        <h3>NOTIFICAÇÕES INTELIGENTES</h3>
        <ul><li>Review Noise</li><li>Repeated Comments</li><li>Rule Gaps</li><li>Consistency Enforcement</li></ul>
        <p class="dossier-data__desc">At Notificações Inteligentes, reviews started to get too noisy. The same comments showed up in PR after PR. Formatting. Team standards. Basic rules. Each reviewer had a different approach and many things ended up being fixed more than once. The turning point was creating custom rules inside Kody, aligned with the team&#x27;s workflow, and combining them with the ready to use Kody Rules library. This stopped the same issues from repeating across PRs and made the review process much more consistent day to day.</p>
        <p class="dossier-data__impact">Less rework, less back and forth in PRs, and more predictable feedback. The team kept moving fast without sacrificing quality.</p>
        <a href="/case-notificacoes/">Read the full Notificações Inteligentes case study</a>
      </article>
    </div>

    <!-- ========== NUMBERS ========== -->
    <section class="cust-stats">
      <div class="container">
        <h2 class="section-title">Kodus in numbers</h2>

        <p class="cust-nums">
          <strong>5,000+ teams</strong> in <strong>66 countries</strong> review code with Kodus. Their developers have implemented <strong>80,000+</strong> of Kody's suggestions.
        </p>
      </div>
    </section>

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

              <!-- VHS 2: Oleksandr Kuchma -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-info);">
                  <span class="vhs__spine-title">SAASJET_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-info);">
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/Oleksandr Kuchma.jpeg'); ?>" alt="Oleksandr Kuchma" class="vhs__avatar-img">
                    </div>
                    <h4 class="vhs__name">Oleksandr Kuchma</h4>
                    <p class="vhs__role">CTO, SaaSJet</p>
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

              <!-- VHS 3: João H. Kersul -->
              <div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-tertiary);">
                  <span class="vhs__spine-title">DOJI_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-tertiary);">
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/04/joao-doji.jpg" alt="João H. Kersul" class="vhs__avatar-img">
                    </div>
                    <h4 class="vhs__name">João H. Kersul</h4>
                    <p class="vhs__role">Principal Engineer, Doji</p>
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
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/ricardo-ikatec-150x150-1.jpg" alt="Ricardo" class="vhs__avatar-img">
                    </div>
                    <h4 class="vhs__name">Ricardo</h4>
                    <p class="vhs__role">Director, Ikatec</p>
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
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/raphael-pilar-300x300-1.jpeg" alt="Raphael Sampaio" class="vhs__avatar-img">
                    </div>
                    <h4 class="vhs__name">Raphael Sampaio</h4>
                    <p class="vhs__role">CTO, Pilar</p>
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
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img src="https://kodus.io/wp-content/uploads/2025/10/pedro-maia.jpeg" alt="Pedro Maia" class="vhs__avatar-img">
                    </div>
                    <h4 class="vhs__name">Pedro Maia</h4>
                    <p class="vhs__role">Founder, Notificações Inteligentes</p>
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
          <span class="vhs__counter-total" id="vhsCounterTotal">005</span>
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
                  <a href="https://github.com/kodustech/kodus-ai" class="btn btn--outline-light pixel-cta__btn" id="customersCtaDeployBtn">
                    <svg width="20" height="20" viewBox="0 0 16 16" fill="currentColor" style="margin-right: 8px;"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
                    DEPLOY
                  </a>
                  <a href="https://app.kodus.io/sign-up" class="btn btn--primary pixel-cta__btn" id="customersCtaStartFreeTrialBtn">
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
