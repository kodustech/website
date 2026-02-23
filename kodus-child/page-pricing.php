<?php
/*
 * Template Name: Kodus Pricing
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main>

    <!-- ========== PRICING ========== -->
    <section class="pricing">
      <div class="container">
        <h1 class="section-title">Choose your plan</h1>
        <p class="pricing__subtitle">Open source, model agnostic, zero markup on AI costs.</p>

        <!-- Toggle Monthly / Annual -->
        <div class="pricing__toggle">
          <span class="pricing__toggle-label pricing__toggle-label--active" data-period="monthly">Monthly</span>
          <button class="pricing__switch" id="pricingSwitch" aria-label="Toggle billing period">
            <span class="pricing__switch-knob"></span>
          </button>
          <span class="pricing__toggle-label" data-period="annual">Annual</span>
          <span class="pricing__save-badge">SAVE 20%</span>
        </div>

        <!-- Pricing grid -->
        <div class="pricing__grid">

          <!-- Card 1: Community -->
          <div class="pricing__card pricing__card--community">
            <div class="pricing__card-bar">
              <div class="pricing__card-dots">
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
              </div>
              <span class="pricing__card-bar-title">community.exe</span>
              <span class="pricing__card-badge">BYOK</span>
            </div>
            <div class="pricing__card-body">
              <div class="pricing__card-scanlines"></div>

              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-community2.webp" alt="Kody Community" class="pricing__plan-kody pricing__plan-kody--community">
              <h3 class="pricing__plan-name">Community</h3>
              <p class="pricing__plan-desc">For indie devs, students and small teams getting started.</p>

              <div class="pricing__price">
                <span class="pricing__price-value">Free</span>
              </div>

              <a href="https://app.kodus.io/sign-up" class="btn btn--outline-light pricing__cta">Start Free</a>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Self Hosted or Hosted by Kodus</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited PRs using your own API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited issues on Quality Radar</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use up to 10 Kody Rules</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use up to 3 active plugins</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Kody Learnings and Memory</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Discord Community Support</li>
              </ul>
            </div>
          </div>

          <!-- Card 2: Teams (Recommended) -->
          <div class="pricing__card pricing__card--teams pricing__card--recommended">
            <div class="pricing__recommended-tag">
              <span class="pricing__recommended-led"></span>
              RECOMMENDED
            </div>
            <div class="pricing__card-bar">
              <div class="pricing__card-dots">
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
              </div>
              <span class="pricing__card-bar-title">teams.exe</span>
              <span class="pricing__card-badge">BYOK</span>
            </div>
            <div class="pricing__card-body">
              <div class="pricing__card-scanlines"></div>

              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-team.webp" alt="Kody Team" class="pricing__plan-kody pricing__plan-kody--team">
              <h3 class="pricing__plan-name">Teams</h3>
              <p class="pricing__plan-desc">For growing teams that need advanced features and priority support.</p>

              <div class="pricing__price">
                <span class="pricing__price-currency">$</span>
                <span class="pricing__price-value pricing__price-value--dynamic" data-monthly="10" data-annual="8">10</span>
                <span class="pricing__price-period">/mo per dev</span>
              </div>
              <p class="pricing__price-note">+ Tokens per dev</p>
              <p class="pricing__price-detail">Tokens included during the free trial. No API key required.</p>

              <a href="https://app.kodus.io/sign-up" class="btn btn--primary pricing__cta">Start Free Trial</a>
              <p class="pricing__trial-note">14-day free trial &bull; no credit card required</p>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Hosted by Kodus</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited PRs using your own API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Use unlimited Kody Rules</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Use unlimited active plugins</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Priority queue for Kody Agents</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Engineering Metrics / Cockpit</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Discord Community and Email Support</li>
              </ul>
            </div>
          </div>

          <!-- Card 3: Enterprise -->
          <div class="pricing__card pricing__card--enterprise">
            <div class="pricing__card-bar">
              <div class="pricing__card-dots">
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
              </div>
              <span class="pricing__card-bar-title">enterprise.exe</span>
              <span class="pricing__card-badge">Custom setup</span>
            </div>
            <div class="pricing__card-body">
              <div class="pricing__card-scanlines"></div>

              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-enterprise.webp" alt="Kody Enterprise" class="pricing__plan-kody pricing__plan-kody--enterprise">
              <h3 class="pricing__plan-name">Enterprise</h3>
              <p class="pricing__plan-desc">For organizations that need SSO, compliance and dedicated support.</p>

              <div class="pricing__price">
                <span class="pricing__price-value">Custom</span>
              </div>

              <button
                type="button"
                class="btn btn--outline-light pricing__cta"
                data-cal-link="gabrielmalinosqui/30min"
                data-cal-config='{"layout":"month_view"}'
              >Contact Sales</button>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Hosted by Kodus</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> SSO</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Unlimited PRs using our AI Tokens API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use unlimited Kody Rules</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use unlimited active plugins</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Priority queue for Kody Agents</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Engineering Metrics / Cockpit</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> RBAC + Audit logs and analytics</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> SOC 2 in progress</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Up to 5 hours month dedicated support with personalized onboarding</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Private Discord Channel and Email Support</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- ========== HOW TOKEN COSTS WORK ========== -->
    <section class="token-info">
      <div class="container">
        <h2 class="section-title">How token costs work</h2>
        <p class="token-info__subtitle">Understand how token pricing works with your own API keys</p>

        <div class="token-info__grid token-info__grid--cartridge">

          <article class="token-info__cartridge cartridge">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--green"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--love token-info__screen-body--love">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coin.webp" alt="" class="token-info__coin token-info__coin--1" aria-hidden="true">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coin.webp" alt="" class="token-info__coin token-info__coin--2" aria-hidden="true">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/coin.webp" alt="" class="token-info__coin token-info__coin--3" aria-hidden="true">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-porta.webp" alt="Kody Porta" class="kody-love token-info__visual-love">
                </div>
              </div>
              <div class="cartridge__title-area">
                <h3 class="cartridge__title">How it works</h3>
              </div>
              <p class="token-info__copy-desc">You use your own API key and pay tokens directly to your AI provider.</p>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
          </article>

          <article class="token-info__cartridge cartridge">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--blue"></span>
                </div>
                <div class="cartridge__screen-body token-info__screen-body token-info__screen-body--mountain">
                  <span class="token-info__pixel-cloud token-info__pixel-cloud--1"></span>
                  <span class="token-info__pixel-cloud token-info__pixel-cloud--2"></span>
                  <span class="token-info__pixel-cloud token-info__pixel-cloud--3"></span>
                  <span class="token-info__pixel-cloud token-info__pixel-cloud--4"></span>
                  <span class="token-info__pixel-cloud token-info__pixel-cloud--5"></span>
                  <span class="token-info__pixel-cloud token-info__pixel-cloud--6"></span>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-montanha.webp" alt="Kody Montanha" class="token-info__visual-mountain">
                </div>
              </div>
              <div class="cartridge__title-area">
                <h3 class="cartridge__title">How token costs scale</h3>
              </div>
              <p class="token-info__copy-desc">Token usage increases as your team reviews more PRs and larger code changes.</p>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
          </article>

          <article class="token-info__cartridge cartridge">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--red"></span>
                </div>
                <div class="cartridge__screen-body token-info__screen-body token-info__screen-body--panel">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-painel.webp" alt="Kody Painel" class="token-info__visual-panel">
                  <span class="token-info__panel-swap">
                    <span class="token-info__panel-slot token-info__panel-slot--a"></span>
                    <span class="token-info__panel-slot token-info__panel-slot--b"></span>
                    <span class="token-info__panel-slot token-info__panel-slot--c"></span>
                    <span class="token-info__panel-block token-info__panel-block--1"></span>
                    <span class="token-info__panel-block token-info__panel-block--2"></span>
                  </span>
                </div>
              </div>
              <div class="cartridge__title-area">
                <h3 class="cartridge__title">What affects the cost</h3>
              </div>
              <p class="token-info__copy-desc">Number of PRs, size of the diffs, and the model you choose.</p>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- ========== PRICING CALCULATOR ========== -->
    <section class="calculator">
      <div class="container">
        <h2 class="section-title">Pricing Calculator</h2>
        <p class="calculator__subtitle">Compare estimated costs for each AI model option, based on how teams use Kodus. Costs may vary by usage.</p>

        <div class="calculator__window">
          <div class="calculator__window-bar">
            <div class="pricing__card-dots">
              <span class="pricing__card-dot"></span>
              <span class="pricing__card-dot"></span>
              <span class="pricing__card-dot"></span>
            </div>
            <span class="pricing__card-bar-title">cost_calculator.exe</span>
          </div>

          <div class="calculator__body">
            <div class="calculator__card-scanlines"></div>

            <!-- Priority selector -->
            <div class="calculator__section">
              <h3 class="calculator__label">What do you want to prioritize?</h3>
              <div class="calculator__priorities">
                <button class="calculator__priority" data-priority="quality">Highest review quality</button>
                <button class="calculator__priority calculator__priority--active" data-priority="balance">Best quality–cost balance</button>
                <button class="calculator__priority" data-priority="cost">Lowest possible cost</button>
              </div>
            </div>

            <!-- Developer slider -->
            <div class="calculator__section">
              <h3 class="calculator__label">Number of Developers: <span class="calculator__dev-count" id="calcDevCount">30</span></h3>
              <div class="calculator__slider-wrap">
                <input type="range" class="calculator__slider" id="calcSlider" min="1" max="1000" value="30">
                <div class="calculator__slider-marks">
                  <span data-val="1">1</span>
                  <span data-val="10">10</span>
                  <span data-val="50">50</span>
                  <span data-val="100">100</span>
                  <span data-val="300">300</span>
                  <span data-val="600">600</span>
                  <span data-val="1000">1000</span>
                </div>
              </div>
            </div>

            <!-- Model cards -->
            <div class="calculator__models" id="calcModels">

              <div class="calculator__model" data-model="sonnet">
                <h4 class="calculator__model-name">Sonnet 4.5</h4>
                <p class="calculator__model-plan">TEAMS PLAN</p>
                <div class="calculator__model-rows">
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">LLM cost</span>
                    <span class="calculator__model-row-value"><strong class="calculator__llm-total">$270</strong> <span class="calculator__per-dev">($9/dev)</span></span>
                  </div>
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">Kodus license</span>
                    <span class="calculator__model-row-value"><strong class="calculator__license-total">$300</strong> <span class="calculator__per-dev">($10/dev)</span></span>
                  </div>
                </div>
                <div class="calculator__model-total">
                  <span class="calculator__model-total-value">$570</span>
                  <span class="calculator__model-total-period">per month</span>
                </div>
              </div>

              <div class="calculator__model" data-model="gemini-pro">
                <h4 class="calculator__model-name">Gemini Pro</h4>
                <p class="calculator__model-plan">TEAMS PLAN</p>
                <div class="calculator__model-rows">
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">LLM cost</span>
                    <span class="calculator__model-row-value"><strong class="calculator__llm-total">$150</strong> <span class="calculator__per-dev">($5/dev)</span></span>
                  </div>
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">Kodus license</span>
                    <span class="calculator__model-row-value"><strong class="calculator__license-total">$300</strong> <span class="calculator__per-dev">($10/dev)</span></span>
                  </div>
                </div>
                <div class="calculator__model-total">
                  <span class="calculator__model-total-value">$450</span>
                  <span class="calculator__model-total-period">per month</span>
                </div>
                <span class="calculator__model-recommended">&#10003; Recommended for you</span>
              </div>

              <div class="calculator__model" data-model="chatgpt">
                <h4 class="calculator__model-name">ChatGPT 5.1</h4>
                <p class="calculator__model-plan">TEAMS PLAN</p>
                <div class="calculator__model-rows">
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">LLM cost</span>
                    <span class="calculator__model-row-value"><strong class="calculator__llm-total">$150</strong> <span class="calculator__per-dev">($5/dev)</span></span>
                  </div>
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">Kodus license</span>
                    <span class="calculator__model-row-value"><strong class="calculator__license-total">$300</strong> <span class="calculator__per-dev">($10/dev)</span></span>
                  </div>
                </div>
                <div class="calculator__model-total">
                  <span class="calculator__model-total-value">$450</span>
                  <span class="calculator__model-total-period">per month</span>
                </div>
                <span class="calculator__model-recommended">&#10003; Recommended for you</span>
              </div>

              <div class="calculator__model" data-model="haiku">
                <h4 class="calculator__model-name">Haiku 4.5</h4>
                <p class="calculator__model-plan">TEAMS PLAN</p>
                <div class="calculator__model-rows">
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">LLM cost</span>
                    <span class="calculator__model-row-value"><strong class="calculator__llm-total">$75</strong> <span class="calculator__per-dev">($2.5/dev)</span></span>
                  </div>
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">Kodus license</span>
                    <span class="calculator__model-row-value"><strong class="calculator__license-total">$300</strong> <span class="calculator__per-dev">($10/dev)</span></span>
                  </div>
                </div>
                <div class="calculator__model-total">
                  <span class="calculator__model-total-value">$375</span>
                  <span class="calculator__model-total-period">per month</span>
                </div>
              </div>

              <div class="calculator__model" data-model="gemini-flash">
                <h4 class="calculator__model-name">Gemini Flash</h4>
                <p class="calculator__model-plan">TEAMS PLAN</p>
                <div class="calculator__model-rows">
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">LLM cost</span>
                    <span class="calculator__model-row-value"><strong class="calculator__llm-total">$45</strong> <span class="calculator__per-dev">($1.5/dev)</span></span>
                  </div>
                  <div class="calculator__model-row">
                    <span class="calculator__model-row-label">Kodus license</span>
                    <span class="calculator__model-row-value"><strong class="calculator__license-total">$300</strong> <span class="calculator__per-dev">($10/dev)</span></span>
                  </div>
                </div>
                <div class="calculator__model-total">
                  <span class="calculator__model-total-value">$345</span>
                  <span class="calculator__model-total-period">per month</span>
                </div>
              </div>

            </div>

            <p class="calculator__footnote">All prices shown are per month</p>
          </div>
        </div>

        <!-- Benchmark callout -->
        <div class="calculator__callout">
          <p>Model choice directly impacts review quality, noise, and team trust.</p>
          <p>Compare code review performance across different models in our <a href="https://codereviewbench.com/" class="calculator__callout-link">benchmark</a>.</p>
        </div>

      </div>
    </section>

    <!-- ========== GLOBAL BUILDERS CTA ========== -->
    <section class="builders-cta">
      <div class="container">
        <div class="builders-cta__window">
          <div class="builders-cta__bar">
            <div class="builders-cta__dots">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <span class="builders-cta__bar-title">kodus-builders(1)</span>
            <span class="builders-cta__bar-status">bash</span>
          </div>
          <div class="builders-cta__body">
            <div class="builders-cta__art">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-rocket.webp" alt="Kody Rocket" class="builders-cta__img">
            </div>

            <div class="builders-cta__content">
              <div class="builders-cta__badge"><span class="builders-cta__badge-led"></span>Kody Pilot Program</div>
              <h2 class="builders-cta__title">MISSION://GLOBAL_BUILDERS</h2>
              <p class="builders-cta__meta">priority_channel.bin :: active</p>
              <p class="builders-cta__text">
                We offer <strong>30–100% discounts</strong> for startups, open-source projects, and teams in countries with weaker currencies
                — so you can focus on shipping great software.
              </p>
              <a href="https://tally.so/r/npjK2P" class="btn btn--primary builders-cta__btn">Apply now</a>
            </div>
          </div>
        </div>
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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notificacoes.webp" alt="Notificações Inteligentes" class="logo-carousel__img">

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
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notificacoes.webp" alt="Notificações Inteligentes" class="logo-carousel__img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ========== FAQ (Terminal / Man Page) ========== -->
    <section class="faq" id="faq-pricing">
      <div class="container">
        <h2 class="section-title">FAQ</h2>

        <div class="faq__terminal">
          <div class="faq__bar">
            <div class="faq__bar-dots">
              <span class="faq__dot faq__dot--red"></span>
              <span class="faq__dot faq__dot--yellow"></span>
              <span class="faq__dot faq__dot--green"></span>
            </div>
            <span class="faq__bar-title">kodus-pricing-faq(1)</span>
            <span class="faq__bar-status">bash</span>
          </div>

          <div class="faq__body">
            <div class="faq__man-header">
              <span class="faq__man-section">KODUS-PRICING(1)</span>
              <span class="faq__man-center">Kodus Manual</span>
              <span class="faq__man-section">KODUS-PRICING(1)</span>
            </div>

            <div class="faq__man-block">
              <p class="faq__man-heading">NAME</p>
              <p class="faq__man-indent">kodus-pricing-faq &mdash; frequently asked questions about pricing and billing</p>
            </div>

            <div class="faq__man-block">
              <p class="faq__man-heading">SYNOPSIS</p>
              <p class="faq__man-indent"><span class="faq__man-cmd">kodus</span> --help pricing</p>
            </div>

            <div class="faq__list">
              <div class="faq__item">
                <button class="faq__question">
                  <span class="faq__prompt">$</span>
                  <span class="faq__question-text">kodus --help "Do I pay twice if I use BYOK (Kodus + OpenAI)?"</span>
                  <span class="faq__toggle">+</span>
                </button>
                <div class="faq__answer">
                  <p>You pay Kodus for the platform ($10/dev) and your LLM provider for API usage. We don’t charge any markup on your tokens.</p>
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
                  <p>Kodus uses your selected Git provider integration and only accesses what is required to review pull requests. You can control and revoke access at any time.</p>
                </div>
              </div>
            </div>

            <div class="faq__man-footer">
              <span class="faq__man-section">Kodus v2.0</span>
              <span class="faq__man-center">2026-01-01</span>
              <span class="faq__man-section">KODUS-PRICING(1)</span>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php get_footer('kodus'); ?>
