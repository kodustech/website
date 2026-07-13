<?php
/*
 * Template Name: Kodus AI Engineering Assessment
 * Template Post Type: page
 *
 * Warm-traffic LP for the AI Engineering Assessment (Raio-X de Engenharia).
 * Sells a conversation about a fixed three-week, data-backed assessment.
 */

add_filter('body_class', function ($classes) {
    $classes[] = 'ai-fde-page';
    return $classes;
});

get_header('kodus');

$ai_fde_logo = get_stylesheet_directory_uri() . '/assets/img/kodus_dark.webp';
$ai_fde_cal = 'gabrielmalinosqui/ai-engineering-assessment';
?>

<a class="aif-skip" href="#main">Skip to content</a>

<header class="aif-header" data-aif-header>
  <nav class="aif-header__nav container" aria-label="AI Engineering Assessment">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__logo" aria-label="Kodus home">
      <img src="<?php echo esc_url($ai_fde_logo); ?>" alt="Kodus" class="nav__logo-img" decoding="async">
    </a>

    <ul class="aif-header__links">
      <li><a class="aif-header__link" href="#analyze">What we inspect</a></li>
      <li><a class="aif-header__link" href="#how-it-works">How it works</a></li>
      <li><a class="aif-header__link" href="#deliverables">Deliverables</a></li>
      <li><a class="aif-header__link" href="#fit">Who it’s for</a></li>
      <li><a class="aif-header__link" href="#faq">FAQ</a></li>
    </ul>

    <div class="aif-header__actions">
      <button class="btn btn--primary aif-header__cta" type="button" data-cal-link="<?php echo esc_attr($ai_fde_cal); ?>" data-cal-config='{"layout":"month_view"}'>
        Book an assessment fit call
      </button>
    </div>
  </nav>
</header>

<main id="main" class="aif-main">

  <!-- HERO -->
  <section class="aif-hero">
    <div class="aif-shell aif-hero__grid">
      <div class="aif-hero__lead">
        <p class="aif-kicker">AI Engineering Assessment</p>
        <h1>Find the bottleneck in your <span class="aif-hl">AI-assisted development workflow.</span></h1>
        <p class="aif-hero__copy">In three weeks, we analyze how AI-generated changes move through context, review, tests and delivery. You leave with evidence of where rework or risk is accumulating and a prioritized 30/90-day plan.</p>
        <div class="aif-actions">
          <button class="btn btn--primary" type="button" data-cal-link="<?php echo esc_attr($ai_fde_cal); ?>" data-cal-config='{"layout":"month_view"}'>
            Book an assessment fit call
          </button>
          <a class="btn btn--outline-light" href="#deliverables">See what you get</a>
        </div>
        <p class="aif-hero__terms">
          <span>One engineering team</span>
          <span aria-hidden="true">·</span>
          <span>Three weeks</span>
          <span aria-hidden="true">·</span>
          <span>Scope defined after the fit call</span>
        </p>
      </div>

      <aside class="aif-hero__panel" aria-label="Assessment analysis flow" data-aif-flow>
        <div class="aif-panel aif-flow" data-aif-flow-root>
          <div class="aif-panel__bar">
            <span class="aif-panel__dots"><i></i><i></i><i></i></span>
            <span class="aif-panel__title">assessment · engineering-workflow</span>
            <span class="aif-panel__live"><i></i> <span data-aif-flow-live>ingest</span></span>
          </div>

          <div class="aif-flow__stages">
            <div class="aif-flow__stage is-active" data-aif-flow-stage="0">
              <span class="aif-flow__stage-label">Current workflow</span>
              <div class="aif-flow__stack">
                <div class="aif-flow__chip is-in"><b>PR #4821</b><small>auth service</small></div>
                <div class="aif-flow__chip is-in" style="--d:1"><b>PR #4818</b><small>billing</small></div>
                <div class="aif-flow__chip is-in" style="--d:2"><b>PR #4812</b><small>checkout</small></div>
                <div class="aif-flow__chip is-in" style="--d:3"><b>repo · api-core</b><small>6 months</small></div>
                <div class="aif-flow__chip is-in" style="--d:4"><b>repo · web-app</b><small>6 months</small></div>
              </div>
              <p class="aif-flow__caption">Team context, PR history and repositories</p>
            </div>

            <div class="aif-flow__arrow" aria-hidden="true">↓</div>

            <div class="aif-flow__stage" data-aif-flow-stage="1">
              <span class="aif-flow__stage-label">Assessment investigation</span>
              <div class="aif-flow__dims">
                <span data-aif-dim>quality</span>
                <span data-aif-dim>review</span>
                <span data-aif-dim>readiness</span>
                <span data-aif-dim>delivery</span>
              </div>
              <p class="aif-flow__caption">Patterns across code, PRs, review and delivery</p>
            </div>

            <div class="aif-flow__arrow" aria-hidden="true">↓</div>

            <div class="aif-flow__stage" data-aif-flow-stage="2">
              <span class="aif-flow__stage-label">Prioritize the evidence</span>
              <div class="aif-flow__founders">
                <span>Architecture context</span>
                <span>Business priorities</span>
                <span>Root cause vs symptom</span>
              </div>
              <p class="aif-flow__caption">What is worth fixing first and why</p>
            </div>

            <div class="aif-flow__arrow" aria-hidden="true">↓</div>

            <div class="aif-flow__stage" data-aif-flow-stage="3">
              <span class="aif-flow__stage-label">Output</span>
              <div class="aif-flow__out">
                <div>
                  <b>Scorecard</b>
                  <small>evidence and priorities</small>
                </div>
                <div>
                  <b>Priority #1</b>
                  <small>the bottleneck to address</small>
                </div>
                <div>
                  <b>30/90-day plan</b>
                  <small>sequenced actions</small>
                </div>
              </div>
              <p class="aif-flow__caption">Decision-ready package</p>
            </div>
          </div>

          <div class="aif-panel__foot">
            <span data-aif-flow-msg>Map the system. Prioritize the bottleneck.</span>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <!-- PROBLEM / VISIBILITY GAP -->
  <section class="aif-section aif-section--tint" id="signals">
    <div class="aif-shell aif-two-col">
      <div class="aif-section__intro">
        <p class="aif-kicker">The signal</p>
        <h2>AI-generated changes are moving faster than review and verification.</h2>
        <p>Teams add coding tools quickly, while context, tests, review standards and ownership evolve one decision at a time.</p>
      </div>

      <div class="aif-checklist" data-aif-checklist>
        <p class="aif-checklist__legend">What is happening inside your team?</p>
        <label class="aif-check">
          <input type="checkbox">
          <span class="aif-check__box" aria-hidden="true"></span>
          <span class="aif-check__text">AI-generated PRs are larger and harder to review.</span>
        </label>
        <label class="aif-check">
          <input type="checkbox">
          <span class="aif-check__box" aria-hidden="true"></span>
          <span class="aif-check__text">New roles can ship code, but ownership is unclear.</span>
        </label>
        <label class="aif-check">
          <input type="checkbox">
          <span class="aif-check__box" aria-hidden="true"></span>
          <span class="aif-check__text">Every team is inventing its own context and model setup.</span>
        </label>
        <label class="aif-check">
          <input type="checkbox">
          <span class="aif-check__box" aria-hidden="true"></span>
          <span class="aif-check__text">Tests and evals did not keep up with output.</span>
        </label>
        <label class="aif-check">
          <input type="checkbox">
          <span class="aif-check__box" aria-hidden="true"></span>
          <span class="aif-check__text">Tool and model spend is fragmented.</span>
        </label>
        <label class="aif-check">
          <input type="checkbox">
          <span class="aif-check__box" aria-hidden="true"></span>
          <span class="aif-check__text">Adoption exists, but nobody can show what improved.</span>
        </label>
        <div class="aif-checklist__result" aria-live="polite">
          <span class="aif-checklist__count" data-aif-count>0</span>
          <div>
            <p class="aif-checklist__label">signals selected</p>
            <p data-aif-result>Select the signals you recognize.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- METHOD -->
  <section class="aif-section" id="how-it-works">
    <div class="aif-shell">
      <div class="aif-section__intro aif-section__intro--wide">
        <p class="aif-kicker">How we investigate</p>
        <h2>Context from your team. Evidence from your engineering workflow.</h2>
      </div>

      <div class="aif-mechanism">
        <article class="aif-mechanism__col aif-mechanism__col--kody">
          <header>
            <span class="aif-mechanism__tag">Workflow investigation</span>
            <span class="aif-mechanism__pulse" aria-hidden="true"></span>
          </header>
          <ul>
            <li>Talk with the people closest to the work.</li>
            <li>Map tools, handoffs and current constraints.</li>
            <li>Separate reported symptoms from root causes.</li>
            <li>Understand what the team has already tried.</li>
          </ul>
        </article>

        <div class="aif-mechanism__bridge" aria-hidden="true">
          <span class="aif-mechanism__dot"></span>
          <span class="aif-mechanism__line"></span>
          <span class="aif-mechanism__dot"></span>
        </div>

        <article class="aif-mechanism__col aif-mechanism__col--founder">
          <header>
            <span class="aif-mechanism__tag">Repository and PR evidence</span>
          </header>
          <ul>
            <li>Review the agreed repositories and PR history.</li>
            <li>Find recurring patterns in quality and review.</li>
            <li>Ground the diagnosis in real examples.</li>
            <li>Build a plan around the evidence.</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- WHAT WE ANALYZE -->
  <section class="aif-section aif-section--tint" id="analyze">
    <div class="aif-shell">
      <div class="aif-section__intro aif-section__intro--wide">
        <p class="aif-kicker">What we inspect</p>
        <h2>Four parts of the development system.</h2>
        <p>We combine conversations with the team, repository analysis and PR history to identify the bottleneck with the clearest cost or risk.</p>
      </div>

      <div class="aif-cards aif-cards--dims">
        <article class="aif-card">
          <span class="aif-card__index">01 / context</span>
          <h3>Context and toolchain</h3>
          <p>Instructions, repository context, model usage and how engineering knowledge is shared.</p>
          <span class="aif-card__out">Evidence · team interviews and repository analysis</span>
        </article>
        <article class="aif-card">
          <span class="aif-card__index">02 / workflow</span>
          <h3>Development workflow</h3>
          <p>PR size, review patterns, CI, handoffs and how AI-generated changes move through the team.</p>
          <span class="aif-card__out">Evidence · PR history and workflow conversations</span>
        </article>
        <article class="aif-card">
          <span class="aif-card__index">03 / verification</span>
          <h3>Verification systems</h3>
          <p>Tests, evals, review guardrails and the evidence required before changes reach production.</p>
          <span class="aif-card__out">Evidence · repositories, CI and recent changes</span>
        </article>
        <article class="aif-card">
          <span class="aif-card__index">04 / ownership</span>
          <h3>Ownership and measurement</h3>
          <p>Access, costs, adoption and quality signals, including who owns each decision.</p>
          <span class="aif-card__out">Evidence · team context and available workflow data</span>
        </article>
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="aif-section" id="process">
    <div class="aif-shell">
      <div class="aif-section__intro aif-section__intro--wide">
        <p class="aif-kicker">Timeline</p>
        <h2>Three weeks from symptoms to a plan.</h2>
        <p>The clock starts after the contract is signed, the questionnaire is completed and access is granted.</p>
      </div>

      <ol class="aif-timeline" data-aif-timeline>
        <li class="aif-timeline__item is-active">
          <div class="aif-timeline__node"><span>01</span></div>
          <article class="aif-timeline__card">
            <header>
              <h3>Week 1: map and investigate</h3>
              <span class="aif-pill">Output · initial findings</span>
            </header>
            <p>Kickoff with engineering leadership, conversations with senior engineers, repository review and PR history analysis.</p>
          </article>
        </li>
        <li class="aif-timeline__item">
          <div class="aif-timeline__node"><span>02</span></div>
          <article class="aif-timeline__card">
            <header>
              <h3>Week 2: find the bottleneck</h3>
              <span class="aif-pill">Output · draft scorecard</span>
            </header>
            <p>Cross-reference evidence with team context, identify root causes and prioritize what is worth fixing.</p>
          </article>
        </li>
        <li class="aif-timeline__item">
          <div class="aif-timeline__node"><span>03</span></div>
          <article class="aif-timeline__card">
            <header>
              <h3>Week 3: recommend and align</h3>
              <span class="aif-pill">Output · decision-ready assessment</span>
            </header>
            <p>Scorecard, 30/90-day action plan, executive session and written handoff.</p>
          </article>
        </li>
      </ol>
    </div>
  </section>

  <!-- DELIVERABLES -->
  <section class="aif-section aif-section--tint" id="deliverables">
    <div class="aif-shell">
      <div class="aif-section__intro aif-section__intro--wide">
        <p class="aif-kicker">What you leave with</p>
        <h2>Evidence, priorities and a plan your team can execute.</h2>
      </div>

      <div class="aif-cards aif-cards--deliverables">
        <article class="aif-card">
          <span class="aif-card__index">01 / scorecard</span>
          <h3>Engineering scorecard</h3>
          <p>A one-page view of context and toolchain, development workflow, verification, ownership and measurement. Each area includes the evidence we found and the gaps worth addressing.</p>
        </article>
        <article class="aif-card">
          <span class="aif-card__index">02 / findings</span>
          <h3>Prioritized findings</h3>
          <p>Each finding includes the observed symptom, repository or workflow evidence, likely root cause, cost or risk, and recommended decision.</p>
        </article>
        <article class="aif-card">
          <span class="aif-card__index">03 / plan</span>
          <h3>30/90-day action plan</h3>
          <p>A sequenced list of actions with a suggested owner and timing. The plan also defines the signal that shows whether each change worked.</p>
        </article>
        <article class="aif-card">
          <span class="aif-card__index">04 / session</span>
          <h3>Executive session</h3>
          <p>A 60–90 minute discussion with engineering leadership to align on the findings and next decisions.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- PROOF -->
  <section class="aif-section" id="proof">
    <div class="aif-shell">
      <div class="aif-section__intro aif-section__intro--wide aif-section__intro--center">
        <p class="aif-kicker">Why Kodus</p>
        <h2>Built by the team that operates Kodus.</h2>
        <p>Kodus builds open source AI code review without vendor lock-in. The assessment combines direct founder investigation with the engineering experience behind the product.</p>
      </div>
    </div>
  </section>

  <section class="aif-logos" aria-label="Trusted by engineering teams">
    <div class="aif-shell">
      <p class="aif-logos__label">Trusted by engineering teams at</p>
      <?php kodus_render_trusted_logo_carousel(); ?>
    </div>
  </section>

  <!-- FIT -->
  <section class="aif-section aif-section--tint" id="fit">
    <div class="aif-shell">
      <div class="aif-section__intro aif-section__intro--wide">
        <p class="aif-kicker">Who it’s for</p>
        <h2>A good fit when AI coding is already part of the workflow.</h2>
        <p>Built for CTOs, VPs of Engineering and Heads of Engineering at companies with roughly 15–100 developers already using tools such as Cursor, Copilot or Claude Code.</p>
      </div>

      <div class="aif-fit">
        <article class="aif-fit__col aif-fit__col--yes">
          <header>
            <span class="aif-fit__tag">Good fit</span>
          </header>
          <ul>
            <li>15–100 developers</li>
            <li>Active use of AI coding tools</li>
            <li>Engineering leader involved</li>
            <li>Access to recent repositories and PR history</li>
            <li>A real quality, review or readiness concern</li>
            <li>Willingness to act on the findings</li>
          </ul>
        </article>
        <article class="aif-fit__col aif-fit__col--no">
          <header>
            <span class="aif-fit__tag">Not a good fit</span>
          </header>
          <ul>
            <li>Looking for employee performance evaluation</li>
            <li>Looking for a pentest or security audit</li>
            <li>No access to repositories or PR metadata</li>
            <li>No owner or ability to act on the findings</li>
            <li>Expecting full implementation during the assessment</li>
          </ul>
        </article>
      </div>
    </div>
  </section>

  <!-- COMMERCIAL -->
  <section class="aif-section" id="assessment">
    <div class="aif-shell">
      <div class="aif-pilot">
        <div class="aif-pilot__copy">
          <p class="aif-kicker">The assessment</p>
          <h2>Three weeks. One engineering team. A concrete next decision.</h2>
        <p>The scope is fixed after the fit call, then documented in a proposal. Your team can use the plan internally. Hands-on work is scoped separately if you need it.</p>
        </div>
        <div class="aif-price-card">
          <p class="aif-price-card__label">What’s included</p>
          <ul>
            <li>Up to three repositories</li>
            <li>Up to six months of PR history</li>
            <li>Two leadership and engineering conversations</li>
            <li>Workflow investigation and repository review</li>
            <li>Scorecard and prioritized findings</li>
            <li>30/90-day action plan</li>
            <li>Executive delivery session</li>
          </ul>
          <button class="btn btn--primary aif-price-card__cta" type="button" data-cal-link="<?php echo esc_attr($ai_fde_cal); ?>" data-cal-config='{"layout":"month_view"}'>
            Book an assessment fit call
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="aif-section" id="faq">
    <div class="aif-shell aif-faq-layout">
      <div class="aif-section__intro">
        <p class="aif-kicker">FAQ</p>
        <h2>Before we start</h2>
      </div>
      <div class="aif-faq">
        <details>
          <summary>Is this a performance evaluation?</summary>
          <p>No. We analyze engineering systems, code and workflows. We do not score individual developers.</p>
        </details>
        <details>
          <summary>Do you need write access?</summary>
          <p>No. The assessment starts with read-only access to the agreed repositories and metadata.</p>
        </details>
        <details>
          <summary>Do we need to use Kodus already?</summary>
          <p>No. Existing Kodus customers may have faster setup, but the assessment can evaluate teams using other AI coding and review tools.</p>
        </details>
        <details>
          <summary>Is this a security audit?</summary>
          <p>No. We may identify security-related code review patterns, but the assessment does not replace SAST, penetration testing or a dedicated security audit.</p>
        </details>
        <details>
          <summary>Will you implement the recommendations?</summary>
          <p>Implementation is scoped separately after the assessment. Your team can also execute the plan internally.</p>
        </details>
        <details>
          <summary>When do the three weeks begin?</summary>
          <p>The assessment starts after the contract, questionnaire and required access are complete.</p>
        </details>
        <details>
          <summary>How much time does our team need?</summary>
          <p>A kickoff, two focused conversations and the final executive session. Additional questions are handled asynchronously.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- CLOSE -->
  <section class="aif-close">
    <div class="aif-shell">
      <div class="aif-close__card">
        <p class="aif-kicker">Start with evidence</p>
        <h2>Find the engineering problem worth fixing first.</h2>
        <p class="aif-close__copy">Bring your repositories, PR history and current concerns. We’ll tell you whether the assessment is a good fit.</p>
        <button class="btn btn--primary" type="button" data-cal-link="<?php echo esc_attr($ai_fde_cal); ?>" data-cal-config='{"layout":"month_view"}'>
          Book an assessment fit call
        </button>
      </div>
    </div>
  </section>
</main>

<footer class="aif-footer">
  <div class="aif-shell aif-footer__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Kodus home">
      <img src="<?php echo esc_url($ai_fde_logo); ?>" alt="Kodus" width="150" height="43" loading="lazy" decoding="async">
    </a>
    <p>Find the engineering problem worth fixing first.</p>
    <span>© <?php echo esc_html(date('Y')); ?> Kodus</span>
  </div>
</footer>

<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://cal.com"});
</script>

<?php get_footer('kodus'); ?>
