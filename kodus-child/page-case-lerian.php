<?php
/*
 * Template Name: Kodus Case Lerian
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main class="chat">

    <!-- Chat Header -->
    <div class="chat__header">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__header-avatar">
      <div class="chat__header-info">
        <h1 class="chat__header-name">Lerian &times; Kodus</h1>
        <div class="chat__header-status">
          <span class="chat__header-dot"></span> Case verified
        </div>
      </div>
      <span class="chat__header-ref">REF: LER-02</span>
    </div>

    <!-- Chat Thread -->
    <div class="chat__thread">

      <div class="chat__system chat__system--divider">Case opened</div>

      <!-- Client: Who they are -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Lerian</span>
          We're an open source core banking platform. We power financial products for institutions across the market with a team of <strong>14 people</strong>.
        </div>
      </div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Lerian</span>
          We ship fast, but reviews have been dragging us down. We're spending over <strong>100 hours per week</strong> on code reviews.
        </div>
      </div>

      <div class="chat__system chat__system--divider">Diagnostic running...</div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Lerian</span>
          Most of it is repetitive. The same corrections come up PR after PR &mdash; formatting, team conventions, basic rules. Our seniors are stuck in the queue instead of writing code.
        </div>
      </div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Lerian</span>
          PRs sit idle for days waiting on feedback that's mostly mechanical. It's slowing everything down.
        </div>
      </div>

      <!-- System: Warnings -->
      <div class="chat__system chat__system--err">[ERR] 100+ hrs/week on code reviews</div>
      <div class="chat__system chat__system--warn">[WARN] Repetitive corrections dominating reviews</div>
      <div class="chat__system chat__system--warn">[WARN] Senior engineers blocked by queue</div>
      <div class="chat__system chat__system--warn">[WARN] PRs idle for days</div>

      <div class="chat__system chat__system--divider">Kody entering the chat...</div>

      <!-- Kody: Solution -->
      <div class="chat__msg chat__msg--kody">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody_profile.webp" alt="Kody" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Kody</span>
          I'll automate the repetitive layer so your seniors can focus on architecture and logic. Deploying now:
          <ul class="chat__checklist">
            <li><span class="chat__check">&#10003;</span> Standardized review automation</li>
            <li><span class="chat__check">&#10003;</span> Team conventions auto-enforced</li>
            <li><span class="chat__check">&#10003;</span> Recurring issue detection enabled</li>
            <li><span class="chat__check">&#10003;</span> Instant PR feedback deployed</li>
          </ul>
        </div>
      </div>

      <div class="chat__msg chat__msg--kody">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody_profile.webp" alt="Kody" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Kody</span>
          Same comments won't surface again and again. I'll enforce your team's conventions automatically and give instant feedback on every PR.
        </div>
      </div>

      <div class="chat__system chat__system--ok">&#10003; Integration complete</div>

      <div class="chat__system chat__system--divider">Results &mdash; 3 months, 5 days later</div>

      <!-- Metrics -->
      <div class="chat__metrics">
        <div class="chat__metric">
          <div class="chat__metric-value" data-countup="60">0%</div>
          <div class="chat__metric-label">reduction in review time</div>
        </div>
        <div class="chat__metric">
          <div class="chat__metric-value" data-countup="40">0 hrs</div>
          <div class="chat__metric-label">reclaimed per week</div>
        </div>
      </div>

      <!-- Client: Impact -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Lerian</span>
          Review time dropped from around 100 to about <strong>40 hours per week</strong>. The freed capacity is equivalent to <strong>+2 full-time engineers</strong>. Less queue, less rework, more time for work that actually matters.
        </div>
      </div>

      <!-- Quote -->
      <div class="chat__msg chat__msg--client chat__msg--quote">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/lerian1.webp" alt="Lerian" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__quote-text">"Kodus has become an essential part of our process at Lerian. It catches the things that used to slow us down &mdash; automatically."</span>
          <span class="chat__quote-author">&mdash; Luis Barrile, SRE Specialist</span>
        </div>
      </div>

      <div class="chat__system chat__system--divider">Case verified &mdash; LER-02</div>

    </div>

  </main>

  <!-- CTA -->
  <div class="chat__cta">
    <div class="pixel-cta">
      <div class="pixel-cta__window">
        <div class="pixel-cta__bar">
          <span class="pixel-cta__bar-text">NEXT_STEP.EXE</span>
        </div>
        <div class="pixel-cta__content">
          <div class="pixel-cta__media">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-review.webp" alt="Kody Review" class="pixel-cta__kody">
          </div>
          <div class="pixel-cta__copy">
            <h2 class="pixel-cta__title">Ready to let Kody review<br>your next PR?</h2>
            <p class="pixel-cta__desc">Spin it up in under 2 minutes &mdash; cloud or self-hosted, no credit card.</p>
            <div class="pixel-cta__actions">
              <a href="https://github.com/kodustech/kodus-ai" class="btn btn--outline-light pixel-cta__btn">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
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

<?php get_footer('kodus'); ?>
