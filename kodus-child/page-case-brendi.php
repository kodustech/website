<?php
/*
 * Template Name: Kodus Case Brendi
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main class="chat">

    <!-- Chat Header -->
    <div class="chat__header">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__header-avatar">
      <div class="chat__header-info">
        <h1 class="chat__header-name">Brendi &times; Kodus</h1>
        <div class="chat__header-status">
          <span class="chat__header-dot"></span> Case verified
        </div>
      </div>
      <span class="chat__header-ref">REF: BRN-01</span>
    </div>

    <!-- Chat Thread -->
    <div class="chat__thread">

      <!-- System: Case opened -->
      <div class="chat__system chat__system--divider">Case opened</div>

      <!-- Client: Who they are -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Brendi</span>
          We're an AI agent that automates WhatsApp support and mass messaging for restaurants. We've processed over <strong>4 million conversations</strong>, <strong>40 million messages</strong>, and <strong>2 million orders</strong>.
        </div>
      </div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Brendi</span>
          Our team has <strong>25 developers</strong>. And code reviews have become a serious bottleneck.
        </div>
      </div>

      <!-- System: Diagnostic -->
      <div class="chat__system chat__system--divider">Diagnostic running...</div>

      <!-- Client: Pain points -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Brendi</span>
          We're spending around <strong>125 hours per week</strong> on reviews alone. PRs sit idle for 12 to 24 hours. Every morning there's a backlog of 3-4 PRs waiting.
        </div>
      </div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Brendi</span>
          Senior devs are burning <strong>2 hours a day</strong> just doing manual checks &mdash; formatting, repeated mistakes, team conventions. The same stuff over and over.
        </div>
      </div>

      <!-- System: Warnings -->
      <div class="chat__system chat__system--warn">[WARN] 125 hrs/week consumed by reviews</div>
      <div class="chat__system chat__system--warn">[WARN] PRs idle for 12-24 hours</div>
      <div class="chat__system chat__system--err">[ERR] 3-4 PR backlog every morning</div>
      <div class="chat__system chat__system--warn">[WARN] 2 hrs/day lost to manual checks</div>

      <!-- System: Divider -->
      <div class="chat__system chat__system--divider">Kody entering the chat...</div>

      <!-- Kody: Solution -->
      <div class="chat__msg chat__msg--kody">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody_profile.webp" alt="Kody" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Kody</span>
          Got it. Let me take over the repetitive layer. Here's what I've set up:
          <ul class="chat__checklist">
            <li><span class="chat__check">&#10003;</span> Custom Kody Rules configured</li>
            <li><span class="chat__check">&#10003;</span> Style guide matching enabled</li>
            <li><span class="chat__check">&#10003;</span> Low-value alerts filtered</li>
            <li><span class="chat__check">&#10003;</span> Automated pre-PR checks activated</li>
          </ul>
        </div>
      </div>

      <div class="chat__msg chat__msg--kody">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody_profile.webp" alt="Kody" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Kody</span>
          I'll catch the formatting issues, enforce conventions, and flag repeated patterns before they reach your seniors. They'll only review what actually needs a human eye.
        </div>
      </div>

      <!-- System: Integration complete -->
      <div class="chat__system chat__system--ok">&#10003; Integration complete</div>

      <!-- System: Divider -->
      <div class="chat__system chat__system--divider">Results</div>

      <!-- Metric cards -->
      <div class="chat__metrics">
        <div class="chat__metric">
          <div class="chat__metric-value" data-countup="70">0%</div>
          <div class="chat__metric-label">reduction in review time</div>
        </div>
        <div class="chat__metric">
          <div class="chat__metric-value" data-countup="85">0 hrs</div>
          <div class="chat__metric-label">reclaimed per week</div>
        </div>
      </div>

      <!-- Client: Impact -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Brendi</span>
          The impact was immediate. We went from 125 hours to around <strong>40 hours per week</strong> on reviews. That freed up roughly <strong>85 hours per week</strong> of senior engineering time. PRs move faster, context switching is down, and the team can finally focus on product work.
        </div>
      </div>

      <!-- Quote -->
      <div class="chat__msg chat__msg--client chat__msg--quote">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/brendi1.webp" alt="Brendi" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__quote-text">"Before Kodus, I woke up to 3/4 PRs waiting for review &mdash; and 2 hours of my day gone in manual checks."</span>
          <span class="chat__quote-author">&mdash; Andr&eacute; Diogo, Product Engineer</span>
        </div>
      </div>

      <!-- System: Case verified -->
      <div class="chat__system chat__system--divider">Case verified &mdash; BRN-01</div>

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
