<?php
/*
 * Template Name: Kodus Case Notificações
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<main class="chat">

    <!-- Chat Header -->
    <div class="chat__header">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="Notifica&ccedil;&otilde;es Inteligentes" class="chat__header-avatar">
      <div class="chat__header-info">
        <h1 class="chat__header-name">Notifica&ccedil;&otilde;es Inteligentes &times; Kodus</h1>
        <div class="chat__header-status">
          <span class="chat__header-dot"></span> Case verified
        </div>
      </div>
      <span class="chat__header-ref">REF: NTF-03</span>
    </div>

    <!-- Chat Thread -->
    <div class="chat__thread">

      <div class="chat__system chat__system--divider">Case opened</div>

      <!-- Client: Who they are -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="NI" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Notifica&ccedil;&otilde;es Inteligentes</span>
          We're an automation tool for WhatsApp sales &mdash; smart flows and personalized notifications that help businesses reach customers at scale.
        </div>
      </div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="NI" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Notifica&ccedil;&otilde;es Inteligentes</span>
          As our product grew, code reviews got heavier. The problem isn't effort &mdash; our team cares about quality. The problem is <strong>consistency</strong>.
        </div>
      </div>

      <div class="chat__system chat__system--divider">Diagnostic running...</div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="NI" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Notifica&ccedil;&otilde;es Inteligentes</span>
          The same comments show up PR after PR. Formatting, team standards, basic rules everyone knows but keeps missing. Each reviewer has a different approach, so feedback is inconsistent.
        </div>
      </div>

      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="NI" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Notifica&ccedil;&otilde;es Inteligentes</span>
          Many things end up being corrected more than once. Without a shared, automated standard, reviews depend on who's looking at the code that day.
        </div>
      </div>

      <!-- System: Warnings -->
      <div class="chat__system chat__system--warn">[WARN] Reviews getting heavier with growth</div>
      <div class="chat__system chat__system--warn">[WARN] Repeated details overlooked in PRs</div>
      <div class="chat__system chat__system--err">[ERR] Rules everyone knew but kept missing</div>
      <div class="chat__system chat__system--warn">[WARN] Inconsistent feedback across reviews</div>

      <div class="chat__system chat__system--divider">Kody entering the chat...</div>

      <!-- Kody: Solution -->
      <div class="chat__msg chat__msg--kody">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody_profile.webp" alt="Kody" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Kody</span>
          Let's fix the consistency problem at the source. I'll be your reviewer who never forgets anything:
          <ul class="chat__checklist">
            <li><span class="chat__check">&#10003;</span> Custom Kody Rules reflecting team standards</li>
            <li><span class="chat__check">&#10003;</span> Kody Rules library integrated</li>
            <li><span class="chat__check">&#10003;</span> Consistency enforcement automated</li>
            <li><span class="chat__check">&#10003;</span> Required review step in flow</li>
          </ul>
        </div>
      </div>

      <div class="chat__msg chat__msg--kody">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody_profile.webp" alt="Kody" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Kody</span>
          From naming conventions to architectural patterns &mdash; I'll enforce your team's rules on every PR, regardless of who opened it or who reviews it. Same issues won't repeat.
        </div>
      </div>

      <div class="chat__system chat__system--ok">&#10003; Integration complete</div>

      <div class="chat__system chat__system--divider">Results</div>

      <!-- Metrics (qualitative) -->
      <div class="chat__metrics">
        <div class="chat__metric">
          <div class="chat__metric-value chat__metric-value--text">CONSISTENT</div>
          <div class="chat__metric-label">quality across reviews</div>
        </div>
        <div class="chat__metric">
          <div class="chat__metric-value" data-countup="0">0</div>
          <div class="chat__metric-label">repeated issues</div>
        </div>
        <div class="chat__metric">
          <div class="chat__metric-value chat__metric-value--text">FAST</div>
          <div class="chat__metric-label">delivery maintained</div>
        </div>
      </div>

      <!-- Client: Impact -->
      <div class="chat__msg chat__msg--client">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="NI" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__bubble-name">Notifica&ccedil;&otilde;es Inteligentes</span>
          <strong>Less rework, less back-and-forth in PRs, and more predictable feedback.</strong> We kept moving fast without sacrificing quality. Reviews finally feel like a reliable step in our process, not a bottleneck.
        </div>
      </div>

      <!-- Quote -->
      <div class="chat__msg chat__msg--client chat__msg--quote">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logos_new/notifica1.webp" alt="NI" class="chat__avatar">
        <div class="chat__bubble">
          <span class="chat__quote-text">"I trained the team to use AI in day-to-day coding, and Kody joined as our senior reviewer who never forgets anything."</span>
          <span class="chat__quote-author">&mdash; Pedro Maia, Director</span>
        </div>
      </div>

      <div class="chat__system chat__system--divider">Case verified &mdash; NTF-03</div>

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
