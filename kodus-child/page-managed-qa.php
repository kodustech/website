<?php
/*
 * Template Name: Kodus Managed QA
 * Template Post Type: page
 */

add_filter('body_class', function ($classes) {
    $classes[] = 'managed-qa-page';
    return $classes;
});

get_header('kodus');

$mqa_logo = get_stylesheet_directory_uri() . '/assets/img/kodus_dark.webp';
?>

<a class="mqa-skip" href="#main">Skip to content</a>

<header class="mqa-header" data-mqa-header>
  <nav class="mqa-header__nav container" aria-label="Managed QA">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__logo" aria-label="Kodus home">
      <img src="<?php echo esc_url($mqa_logo); ?>" alt="Kodus" class="nav__logo-img" decoding="async">
    </a>

    <ul class="mqa-header__links">
      <li><a class="mqa-header__link" href="#how-it-works">How it works</a></li>
      <li><a class="mqa-header__link" href="#deliverables">What you get</a></li>
      <li><a class="mqa-header__link" href="#pilot">Pricing</a></li>
      <li><a class="mqa-header__link" href="#faq">FAQ</a></li>
    </ul>

    <div class="mqa-header__actions">
      <button class="btn btn--primary mqa-header__cta" type="button" data-cal-link="gabrielmalinosqui/managed-qa" data-cal-config='{"layout":"month_view"}'>
        Protect your critical flows
      </button>
    </div>
  </nav>
</header>

<main id="main" class="mqa-main">

  <!-- Pixel bugs (homepage DNA) — click to squash. Outer layer = parallax, inner = squash. -->
  <div class="site-bugs mqa-bugs" data-mqa-bugs>
    <button type="button" class="site-bug mqa-bug" data-speed="0.3" style="top: 9%; left: 3%; width: 72px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.5" style="top: 16%; right: 5%; width: 58px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.2" style="top: 40%; left: 2%; width: 64px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.45" style="top: 260px; right: 12%; width: 48px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.55" style="top: 500px; right: 3%; width: 80px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.35" style="top: 1100px; left: 7%; width: 56px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.4" style="top: 1800px; right: 6%; width: 66px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.25" style="top: 2600px; left: 4%; width: 70px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg></span>
    </button>
    <button type="button" class="site-bug mqa-bug" data-speed="0.5" style="top: 3200px; right: 8%; width: 54px;" aria-label="Squash bug">
      <span class="mqa-bug__sprite" aria-hidden="true"><svg viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg></span>
    </button>
  </div>
  <!-- HERO -->
  <section class="mqa-hero">
    <div class="mqa-shell mqa-hero__grid">
      <div class="mqa-hero__lead">
        <p class="mqa-kicker">Managed QA for software teams shipping every week</p>
        <h1>Your critical user flows, <span class="mqa-hl">tested on every release.</span></h1>
        <p class="mqa-hero__copy">We map the flows your product depends on. The right tests and evals live in your repository and run in CI. A QA engineer investigates failures before your developers spend time on them.</p>
        <div class="mqa-actions">
          <button class="btn btn--primary" type="button" data-cal-link="gabrielmalinosqui/managed-qa" data-cal-config='{"layout":"month_view"}'>
            Protect your critical flows
          </button>
          <a class="btn btn--outline-light" href="#pilot">See pricing</a>
        </div>
        <p class="mqa-hero__terms">
          <span>One software product</span>
          <span aria-hidden="true">·</span>
          <span>First critical coverage live within 14 days</span>
          <span aria-hidden="true">·</span>
          <span>$2,000/mo</span>
        </p>
      </div>

      <aside class="mqa-hero__panel" aria-hidden="true" data-mqa-ci>
        <div class="mqa-panel">
          <div class="mqa-panel__bar">
            <span class="mqa-panel__dots"><i></i><i></i><i></i></span>
            <span class="mqa-panel__title">ci · critical-flows.yml</span>
            <span class="mqa-panel__live"><i></i> running</span>
          </div>
          <div class="mqa-panel__body">
            <div class="mqa-ci-row mqa-ci-row--pass" data-mqa-ci-row>
              <span class="mqa-ci-icon"></span>
              <span class="mqa-ci-name">web · sign-in</span>
              <span class="mqa-ci-meta">12s</span>
            </div>
            <div class="mqa-ci-row mqa-ci-row--pass" data-mqa-ci-row>
              <span class="mqa-ci-icon"></span>
              <span class="mqa-ci-name">api · checkout</span>
              <span class="mqa-ci-meta">28s</span>
            </div>
            <div class="mqa-ci-row mqa-ci-row--pass" data-mqa-ci-row>
              <span class="mqa-ci-icon"></span>
              <span class="mqa-ci-name">eval · AI response quality</span>
              <span class="mqa-ci-meta">41s</span>
            </div>
            <div class="mqa-ci-row mqa-ci-row--run" data-mqa-ci-row>
              <span class="mqa-ci-icon"></span>
              <span class="mqa-ci-name">billing · upgrade plan</span>
              <span class="mqa-ci-meta">…</span>
            </div>
            <div class="mqa-ci-row mqa-ci-row--wait" data-mqa-ci-row>
              <span class="mqa-ci-icon"></span>
              <span class="mqa-ci-name">export · invoice PDF</span>
              <span class="mqa-ci-meta">queued</span>
            </div>
          </div>
          <div class="mqa-panel__foot">
            <span data-mqa-ci-status>3 / 5 green · triage watching failures</span>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <!-- TRUST LOGOS -->
  <section class="mqa-logos" aria-label="Built by the team behind Kodus">
    <div class="mqa-shell">
      <p class="mqa-logos__label">Built by the team behind Kodus, trusted by engineering teams at</p>
      <?php kodus_render_trusted_logo_carousel(); ?>
    </div>
  </section>

  <!-- FIT / CHECKLIST -->
  <section class="mqa-section mqa-section--tint" id="fit">
    <div class="mqa-shell mqa-two-col">
      <div class="mqa-section__intro">
        <p class="mqa-kicker">Is this your week?</p>
        <h2>You are shipping faster than your test coverage can keep up.</h2>
        <p>Built for software teams shipping every week without a dedicated owner for test automation and failure triage. If several of these sound familiar, there is probably a small set of flows worth protecting first.</p>
      </div>

      <div class="mqa-checklist" data-mqa-checklist>
        <label class="mqa-check">
          <input type="checkbox">
          <span class="mqa-check__box" aria-hidden="true"></span>
          <span class="mqa-check__body">
            <strong>Manual release testing</strong>
            <em>Critical flows are still clicked through by hand before ship.</em>
          </span>
        </label>
        <label class="mqa-check">
          <input type="checkbox">
          <span class="mqa-check__box" aria-hidden="true"></span>
          <span class="mqa-check__body">
            <strong>E2E suite nobody trusts</strong>
            <em>The suite exists, but the team ignores red builds.</em>
          </span>
        </label>
        <label class="mqa-check">
          <input type="checkbox">
          <span class="mqa-check__box" aria-hidden="true"></span>
          <span class="mqa-check__body">
            <strong>UI changes break tests</strong>
            <em>Selectors die every redesign. Engineers fix tests instead of product.</em>
          </span>
        </label>
        <label class="mqa-check">
          <input type="checkbox">
          <span class="mqa-check__box" aria-hidden="true"></span>
          <span class="mqa-check__body">
            <strong>Release-day fire drills</strong>
            <em>Engineers spend ship day reproducing failures instead of shipping.</em>
          </span>
        </label>
        <label class="mqa-check">
          <input type="checkbox">
          <span class="mqa-check__box" aria-hidden="true"></span>
          <span class="mqa-check__body">
            <strong>AI outpaced QA</strong>
            <em>Code output went up. Coverage and confidence did not.</em>
          </span>
        </label>
        <div class="mqa-checklist__result" aria-live="polite">
          <span class="mqa-checklist__count" data-mqa-count>0</span>
          <div>
            <p class="mqa-checklist__label">signals selected</p>
            <p data-mqa-result>Select the problems your team is dealing with.</p>
            <button class="mqa-checklist__cta btn btn--primary" type="button" data-mqa-fit-cta data-cal-link="gabrielmalinosqui/managed-qa" data-cal-config='{"layout":"month_view"}' hidden>
              Protect your critical flows
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section class="mqa-section" id="how-it-works">
    <div class="mqa-shell">
      <div class="mqa-section__intro mqa-section__intro--wide">
        <p class="mqa-kicker">How it works</p>
        <h2>We start with what cannot break.</h2>
        <p>We pick the journeys that matter, put them in CI and keep the signal useful. The scope stays small enough to ship quickly.</p>
      </div>

      <ol class="mqa-timeline" data-mqa-timeline>
        <li class="mqa-timeline__item is-active">
          <div class="mqa-timeline__node"><span>01</span></div>
          <article class="mqa-timeline__card">
            <header>
              <h3>Choose the critical journeys</h3>
              <span class="mqa-pill">Output · coverage map</span>
            </header>
            <p>In a 45-minute kickoff, we review the product, staging environment and current release process. Together we prioritize the highest-risk journeys tied to revenue, activation or access.</p>
          </article>
        </li>
        <li class="mqa-timeline__item">
          <div class="mqa-timeline__node"><span>02</span></div>
          <article class="mqa-timeline__card">
            <header>
              <h3>Build the first coverage</h3>
              <span class="mqa-pill">Output · tests in CI</span>
            </header>
            <p>We build coverage for up to five critical user journeys and connect it to your CI. Each journey may include browser tests, API checks or evals for AI behavior. The first coverage runs within 14 days.</p>
          </article>
        </li>
        <li class="mqa-timeline__item">
          <div class="mqa-timeline__node"><span>03</span></div>
          <article class="mqa-timeline__card">
            <header>
              <h3>Run and investigate</h3>
              <span class="mqa-pill">Output · confirmed issues</span>
            </header>
            <p>Tests run on pull requests, deploys or a nightly schedule. A QA engineer separates product bugs from test failures and environment issues before your team gets involved.</p>
          </article>
        </li>
        <li class="mqa-timeline__item">
          <div class="mqa-timeline__node"><span>04</span></div>
          <article class="mqa-timeline__card">
            <header>
              <h3>Maintain what changes</h3>
              <span class="mqa-pill">Output · useful coverage</span>
            </header>
            <p>We update the suite as the product moves and send a short weekly report. Your engineers can inspect every test, run it locally and change it whenever they want.</p>
          </article>
        </li>
      </ol>
    </div>
  </section>

  <!-- DELIVERABLES -->
  <section class="mqa-section mqa-section--tint" id="deliverables">
    <div class="mqa-shell">
      <div class="mqa-section__intro mqa-section__intro--wide">
        <p class="mqa-kicker">What you get</p>
        <h2>A working test system inside your repository.</h2>
      </div>

      <div class="mqa-deliverables" data-mqa-deliverables>
        <article class="mqa-card">
          <span class="mqa-card__index">01 / coverage</span>
          <h3>Critical journey map</h3>
          <p>A prioritized map of the five user journeys we protect first, including the scenarios and failure points inside each one.</p>
          <div class="mqa-flow" data-mqa-flow aria-hidden="true">
            <span class="mqa-flow__step is-on">Sign in</span>
            <i></i>
            <span class="mqa-flow__step">Checkout</span>
            <i></i>
            <span class="mqa-flow__step">Receipt</span>
          </div>
        </article>

        <article class="mqa-card">
          <span class="mqa-card__index">02 / automation</span>
          <h3>Tests and evals in your repo</h3>
          <p>Browser tests, API checks and AI evals selected according to what can actually break in each journey.</p>
          <pre class="mqa-code" data-mqa-code aria-hidden="true"><code><span class="tok-fn">test</span>(<span class="tok-str">'checkout'</span>, <span class="tok-kw">async</span> ({ page }) =&gt; {
  <span class="tok-kw">await</span> <span class="tok-fn">expect</span>(receipt).<span class="tok-fn">toBeVisible</span>();
});<span class="mqa-code__cursor"></span></code></pre>
        </article>

        <article class="mqa-card">
          <span class="mqa-card__index">03 / triage</span>
          <h3>Investigated failures</h3>
          <p>Confirmed bugs arrive with video, logs, reproduction steps and the affected journey.</p>
          <div class="mqa-issue" data-mqa-issue aria-hidden="true">
            <div class="mqa-issue__top">
              <b>Checkout failed</b>
              <span class="mqa-issue__badge">Product bug</span>
            </div>
            <div class="mqa-issue__meta">
              <span>video.mp4</span>
              <span>trace.zip</span>
              <span>repro · 4 steps</span>
            </div>
            <div class="mqa-issue__pulse"></div>
          </div>
        </article>

        <article class="mqa-card">
          <span class="mqa-card__index">04 / maintenance</span>
          <h3>Coverage that moves with the product</h3>
          <p>We maintain the existing suite and add or update up to five test scenarios each month as the product changes.</p>
          <div class="mqa-status" data-mqa-status aria-hidden="true">
            <span class="is-on">Passed</span>
            <span>Reviewed</span>
            <span>Nothing ignored</span>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- OWNERSHIP -->
  <section class="mqa-section" id="ownership">
    <div class="mqa-shell mqa-ownership">
      <div class="mqa-section__intro">
        <p class="mqa-kicker">Who owns what</p>
        <h2>Your team keeps responsibility for the product.</h2>
        <p>We own the coverage, maintenance and first-pass investigation. Your team owns the code, product decisions and the final release call.</p>
      </div>

      <div class="mqa-split" data-mqa-split>
        <article class="mqa-split__col mqa-split__col--us">
          <header>
            <span class="mqa-split__tag">Kodus owns</span>
            <div class="mqa-split__pulse" aria-hidden="true"></div>
          </header>
          <ul>
            <li>Coverage design</li>
            <li>Test implementation</li>
            <li>Suite maintenance</li>
            <li>Failure triage</li>
            <li>Weekly reporting</li>
          </ul>
        </article>

        <div class="mqa-split__bridge" aria-hidden="true">
          <span class="mqa-split__dot"></span>
          <span class="mqa-split__line"></span>
          <span class="mqa-split__dot"></span>
        </div>

        <article class="mqa-split__col mqa-split__col--you">
          <header>
            <span class="mqa-split__tag">Your team owns</span>
          </header>
          <ul>
            <li>Application code</li>
            <li>Product behavior</li>
            <li>Bug prioritization</li>
            <li>Release decision</li>
            <li>Repository access</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- PRICING -->
  <section class="mqa-section mqa-section--tint" id="pilot">
    <div class="mqa-shell">
      <div class="mqa-pilot">
        <div class="mqa-pilot__copy">
          <p class="mqa-kicker">Pricing</p>
          <h2>Start with one app and the flows that cost you the most when they break.</h2>
          <p>We build the coverage, watch it run through real product changes and keep the suite useful as the product moves.</p>
        </div>
        <div class="mqa-price-card">
          <p class="mqa-price-card__label">Managed QA</p>
          <p class="mqa-price"><span>$</span>2,000<span class="mqa-price__period">/mo</span></p>
          <p class="mqa-price-card__term">One software product. Tests, maintenance and human triage included.</p>
          <ul>
            <li>One product</li>
            <li>One staging environment</li>
            <li>One CI pipeline</li>
            <li>Up to five critical journeys live within 14 days</li>
            <li>Up to five scenarios added or updated each month</li>
            <li>Human triage and maintenance</li>
          </ul>
          <button class="btn btn--primary mqa-price-card__cta" type="button" data-cal-link="gabrielmalinosqui/managed-qa" data-cal-config='{"layout":"month_view"}'>
            Protect your critical flows
          </button>
          <small>15-minute call. We will tell you if the scope is a bad fit.</small>
        </div>
      </div>
    </div>
  </section>

  <!-- BUILD VS BUY -->
  <section class="mqa-section mqa-math" id="math">
    <div class="mqa-shell">
      <div class="mqa-math__intro">
        <p class="mqa-kicker">The math</p>
        <h2>The math versus building QA in-house.</h2>
        <p>Managed QA replaces the work of building, operating and maintaining critical-flow coverage yourself. Start with the flows that carry the most risk, without turning QA operations into another full-time engineering responsibility.</p>
      </div>

      <div class="mqa-math__table" role="table" aria-label="Managed QA compared with building QA in-house">
        <div class="mqa-math__row mqa-math__row--head" role="row">
          <span role="columnheader">What an in-house QA motion requires</span>
          <span role="columnheader">Annual cost</span>
        </div>
        <div class="mqa-math__row" role="row">
          <span role="cell">QA automation engineer, fully loaded <small data-mqa-market-label>US-based estimate</small></span>
          <strong role="cell" data-mqa-cost="qa">~$145K+/yr</strong>
        </div>
        <div class="mqa-math__row" role="row">
          <span role="cell">Test tooling and environment infrastructure</span>
          <strong role="cell" data-mqa-cost="tooling">~$5K–15K/yr</strong>
        </div>
        <div class="mqa-math__row" role="row">
          <span role="cell">Flaky-test maintenance and failure triage</span>
          <strong class="mqa-math__opportunity" role="cell">Developer time</strong>
        </div>
        <div class="mqa-math__row mqa-math__row--total" role="row">
          <span role="cell">In-house QA motion</span>
          <strong role="cell" data-mqa-cost="total">~$150K+/yr</strong>
        </div>
        <div class="mqa-math__row mqa-math__row--kodus" role="row">
          <span role="cell">Kodus Managed QA</span>
          <strong role="cell">$24K/yr</strong>
        </div>
      </div>
      <p class="mqa-math__note" data-mqa-market-note>Estimate based on your region. Actual costs vary by market, tooling and the coverage your team needs.</p>
    </div>
  </section>

  <!-- BOUNDARIES -->
  <section class="mqa-section" id="boundaries">
    <div class="mqa-shell">
      <div class="mqa-section__intro">
        <p class="mqa-kicker">Scope boundaries</p>
        <h2>What this engagement does not try to cover.</h2>
      </div>
      <div class="mqa-boundaries">
        <p><span>Full application coverage</span></p>
        <p><span>Native iOS and Android applications</span></p>
        <p><span>Load testing</span></p>
        <p><span>Penetration testing</span></p>
        <p><span>24/7 release certification</span></p>
        <p><span>A replacement for engineering ownership</span></p>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="mqa-section mqa-section--tint" id="faq">
    <div class="mqa-shell mqa-faq-layout">
      <div class="mqa-section__intro">
        <p class="mqa-kicker">FAQ</p>
        <h2>The questions we expect your engineering team to ask.</h2>
      </div>
      <div class="mqa-faq">
        <details>
          <summary>What is included in $2,000 per month?</summary>
          <p>One product, one staging environment and one CI pipeline. We build coverage for up to five critical journeys, then maintain the suite and add or update up to five scenarios each month. Human failure triage is included.</p>
        </details>
        <details>
          <summary>How fast can we get coverage live?</summary>
          <p>The first coverage for up to five critical journeys runs within 14 days, provided the agreed staging, repository and CI access are ready.</p>
        </details>
        <details>
          <summary>How does billing work?</summary>
          <p>The first engagement is monthly. We agree the scope in the fit call, then begin once access and a technical contact are ready. There is no annual lock-in on the first engagement.</p>
        </details>
        <details>
          <summary>What access do you need?</summary>
          <p>We agree the repository, CI and staging access required for the scope. The tests and evals stay in your repository, and the access needed is documented during onboarding.</p>
        </details>
        <details>
          <summary>Do the tests stay with us?</summary>
          <p>Yes. The tests and evals live in your repository. Your team can inspect, run and change them at any time.</p>
        </details>
        <details>
          <summary>Do you test every feature?</summary>
          <p>No. We choose depth on the flows that matter over shallow coverage everywhere, then expand as risk and product change demand it.</p>
        </details>
        <details>
          <summary>Is coverage limited to five journeys?</summary>
          <p>We start with up to five high-risk user journeys. A journey can contain several browser, API or AI evaluation scenarios. After launch, we maintain that coverage and add or update up to five scenarios each month.</p>
        </details>
        <details>
          <summary>What happens when our scope grows?</summary>
          <p>We review the risk and the new coverage needed together. Additional capacity is scoped explicitly, so the service expands with the product without quietly diluting coverage on the flows already protected.</p>
        </details>
        <details>
          <summary>What happens when a test fails?</summary>
          <p>A QA engineer reviews the failure first. We classify it as a product bug, test issue or environment problem. Confirmed product bugs reach your team with evidence and reproduction steps.</p>
        </details>
        <details>
          <summary>Do you provide a release SLA?</summary>
          <p>No. Managed QA is not 24/7 release certification. Tests run on the agreed triggers, and failures receive first-pass investigation within the operating model defined for the engagement.</p>
        </details>
        <details>
          <summary>How much work does our team need to do?</summary>
          <p>You provide staging access, one technical contact and context when product behavior is unclear. We handle the test work and maintenance inside the agreed scope.</p>
        </details>
        <details>
          <summary>Are you using AI to run QA?</summary>
          <p>For AI-powered features, coverage may include eval cases, datasets and automated checks for expected behavior. A QA engineer reviews the results before confirmed failures reach your team.</p>
        </details>
        <details>
          <summary>Can we leave after we start?</summary>
          <p>Yes. The suite lives in your repository. You can keep the tests and run them internally, or stop the managed service. There is no annual lock-in on the first engagement.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CLOSE -->
  <section class="mqa-close">
    <div class="mqa-shell">
      <div class="mqa-close__card">
        <p class="mqa-kicker">Start small</p>
        <h2>Which five user journeys would hurt the most if they broke tomorrow?</h2>
        <p class="mqa-close__copy">Map them with the founders. Fixed scope. Clear ownership. Tests that stay in your repo.</p>
        <button class="btn btn--primary" type="button" data-cal-link="gabrielmalinosqui/managed-qa" data-cal-config='{"layout":"month_view"}'>
          Protect your critical flows
        </button>
      </div>
    </div>
  </section>
</main>

<a class="mqa-fit-fab" href="#fit" data-mqa-fit-fab>
  <span>Run your QA</span>
  <strong>risk check</strong>
  <i aria-hidden="true">↓</i>
</a>

<!-- Outside main so fixed positioning is never overridden by section stacking -->
<div class="mqa-bug-toast" data-mqa-bug-toast hidden role="status" aria-live="polite">
  <span class="mqa-bug-toast__mark" data-mqa-bug-toast-mark aria-hidden="true">&gt;</span>
  <span class="mqa-bug-toast__text" data-mqa-bug-toast-text></span>
</div>

<!-- Cal.com embed loader -->
<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://cal.com"});
</script>

<?php get_footer('kodus'); ?>
