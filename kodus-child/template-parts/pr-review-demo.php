<?php
/**
 * PR Review live demo section.
 *
 * Lets a visitor paste any public GitHub PR URL and watch Kodus review it live,
 * or try one of the pre-curated "featured" PRs that render instantly.
 *
 * Talks directly to the public PR Review API (CORS is open). The API base URL
 * is injected via wp_localize_script as window.kodusPrReview.apiUrl
 * (see kodus_enqueue_pr_review_assets() in functions.php).
 *
 * Markup only — all behaviour lives in assets/js/kodus-pr-review.js.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="pr-review" id="pr-review">
  <div class="container">
    <h2 class="section-title">Test Kodus on a real PR</h2>
    <p class="pr-review__subtitle">Paste any public GitHub PR and watch Kodus review it live. <strong>No signup needed.</strong></p>

    <!-- ── Input console ─────────────────────────────────────────── -->
    <div class="pr-review__console" data-pr-console>
      <div class="pr-review__bar">
        <div class="pr-review__bar-dots">
          <span class="pr-review__dot pr-review__dot--red"></span>
          <span class="pr-review__dot pr-review__dot--yellow"></span>
          <span class="pr-review__dot pr-review__dot--green"></span>
        </div>
        <span class="pr-review__bar-title">kody_review.sh</span>
        <span class="pr-review__bar-status" data-pr-status>&#9679; READY</span>
      </div>

      <div class="pr-review__body">
        <form class="pr-review__form" data-pr-form novalidate>
          <span class="pr-review__prompt-symbol">$</span>
          <input
            type="url"
            class="pr-review__input"
            data-pr-input
            placeholder="https://github.com/owner/repo/pull/123"
            autocomplete="off"
            spellcheck="false"
            aria-label="Public GitHub pull request URL"
          >
          <button type="submit" class="btn btn--primary pr-review__submit" data-pr-submit>Run review</button>
        </form>
        <p class="pr-review__error" data-pr-error hidden></p>
        <p class="pr-review__hint">2 free reviews per hour &bull; PRs up to 10k changed lines / 80 files</p>
      </div>

      <div class="pr-review__scanlines" aria-hidden="true"></div>
    </div>

    <!-- ── Featured PRs ──────────────────────────────────────────── -->
    <div class="pr-review__featured" data-pr-featured-wrap>
      <p class="pr-review__featured-label">Or try a featured PR — these load instantly:</p>
      <div class="pr-review__cards" data-pr-featured>
        <!-- Cards injected by JS. Skeletons shown while loading. -->
        <div class="pr-review__card pr-review__card--skeleton" aria-hidden="true"></div>
        <div class="pr-review__card pr-review__card--skeleton" aria-hidden="true"></div>
        <div class="pr-review__card pr-review__card--skeleton" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</section>
