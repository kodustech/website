<?php
/*
 * Template Name: Kodus AI Review Cost
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<style>
/* Page-local additions. Reuses theme vars and the ROI calculator components. */
.cost-calc__bars {
  display: grid;
  gap: 14px;
}
.cost-calc__row {
  display: grid;
  grid-template-columns: 130px minmax(0, 1fr) 120px;
  gap: 12px;
  align-items: center;
}
.cost-calc__name {
  font-family: var(--font-mono);
  font-size: 13px;
  color: var(--color-text-muted);
}
.cost-calc__row--kodus .cost-calc__name { color: var(--color-primary); font-weight: 700; }
.cost-calc__track {
  height: 22px;
  background: var(--color-card-lv2);
  border-radius: var(--border-radius-xs);
  overflow: hidden;
}
.cost-calc__fill {
  height: 100%;
  min-width: 2px;
  background: var(--color-card-lv3);
  border-radius: 0 var(--border-radius-xs) var(--border-radius-xs) 0;
  transition: width .25s ease;
}
.cost-calc__row--kodus .cost-calc__fill { background: var(--color-primary); }
.cost-calc__val {
  text-align: right;
  font-family: var(--font-mono);
  font-variant-numeric: tabular-nums;
  color: var(--color-text);
  font-size: 15px;
}
.cost-calc__val small {
  display: block;
  color: var(--color-text-dim);
  font-size: 11px;
}
.cost-calc__note {
  margin-top: 18px;
  font-size: 12px;
  color: var(--color-text-dim);
  font-family: var(--font-mono);
}
.cost-calc__assumptions {
  max-width: 820px;
  margin: 0 auto;
  padding: 72px 0 24px;
}
.cost-calc__assumptions h2 {
  font-size: 22px;
  margin: 0 0 16px;
}
.cost-calc__assumptions ul {
  margin: 0;
  padding-left: 18px;
  display: grid;
  gap: 10px;
  color: var(--color-text-muted);
  line-height: 1.6;
}
.cost-calc__assumptions a { color: var(--color-secondary); }
.cost-calc__checked {
  margin-top: 18px;
  font-size: 13px;
  color: var(--color-text-dim);
}
@media (max-width: 640px) {
  .cost-calc__row { grid-template-columns: minmax(0, 1fr) 96px; }
  .cost-calc__track { grid-column: 1 / -1; grid-row: 2; }
}
@media (prefers-reduced-motion: reduce) {
  .cost-calc__fill { transition: none; }
}
</style>

<main>

    <section class="roi-hero">
      <div class="container">
        <div class="roi-hero__header">
          <h1 class="roi-hero__title">What AI code review costs your team</h1>
          <p class="roi-hero__subtitle">Put in your team size and PR volume. The calculator does the rest with public list prices.</p>
        </div>
      </div>
    </section>

    <section class="roi">
      <div class="container">
        <div class="roi-industrial">
          <div class="roi-screw roi-screw--tl"></div>
          <div class="roi-screw roi-screw--tr"></div>
          <div class="roi-screw roi-screw--bl"></div>
          <div class="roi-screw roi-screw--br"></div>

          <div class="roi-ind__header">
            <div class="roi-ind__brand">
              <span class="roi-ind__logo">KODUS</span>
              <span class="roi-ind__subtitle">REVIEW COST</span>
            </div>
            <div class="roi-ind__status">
              <span class="roi-ind__dot"></span>
              MONTHLY ESTIMATE
            </div>
          </div>

          <div class="roi-ind__label-bar">YOUR TEAM</div>

          <div class="roi-ind__grid">
            <div class="roi-ind__controls">

              <div class="roi-ind__input-card">
                <div class="roi-ind__input-header">
                  <label for="costDevs" class="roi-ind__label">Developers opening PRs</label>
                  <div class="roi-ind__value-display"><span id="costDevsValue">50</span> DEVS</div>
                </div>
                <div class="roi-ind__slider-row">
                  <span class="roi-ind__range-limit">1-500</span>
                  <input type="range" class="roi-ind__slider" id="costDevs" min="1" max="500" value="50">
                </div>
              </div>

              <div class="roi-ind__input-card">
                <div class="roi-ind__input-header">
                  <label for="costPrs" class="roi-ind__label">PRs per developer per month</label>
                  <div class="roi-ind__value-display"><span id="costPrsValue">12</span> PRS</div>
                </div>
                <div class="roi-ind__slider-row">
                  <span class="roi-ind__range-limit">1-100</span>
                  <input type="range" class="roi-ind__slider" id="costPrs" min="1" max="100" value="12">
                </div>
              </div>

              <a href="https://app.kodus.io/sign-up" class="btn btn--primary roi-ind__cta-btn" id="costCalculatorStartFreeBtn">START FREE</a>
            </div>

            <div class="roi-ind__monitor-frame">
              <div class="roi-ind__monitor-screen">
                <span class="roi-ind__roi-label">COST PER MONTH, WHOLE TEAM</span>
                <div class="cost-calc__bars" id="costBars" aria-live="polite"></div>
                <p class="cost-calc__note">Per-dev cost under each total. Kodus includes the model tokens you pay your provider with your own key.</p>
              </div>
            </div>
          </div>

          <div class="roi-ind__footer">
            <div class="roi-ind__dots"><span></span><span></span><span></span><span></span></div>
            <div class="roi-ind__model-info">LIST PRICES, CHECKED NOV 10, 2026</div>
            <div class="roi-ind__dots"><span></span><span></span><span></span><span></span></div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="cost-calc__assumptions">
          <h2>How the numbers are calculated</h2>
          <ul>
            <li>A PR gets about 2 reviews on average (2.16), because each new push is reviewed again. Tools that charge per review pay for each one. This is the average we measured on Kodus in October 2026.</li>
            <li><strong>Kodus:</strong> Teams plan at $10 per developer per month (monthly billing; $8 on annual), plus model tokens paid directly to your provider with your own key. Tokens are estimated at about $0.16 per PR on DeepSeek V4 Flash, which already covers every review on that PR. <a href="https://kodus.io/pricing/" target="_blank" rel="noopener">Pricing</a></li>
            <li><strong>GitHub Copilot code review:</strong> Balanced effort, which GitHub estimates at $1.50 per review on average. Copilot Business includes 1,900 AI credits ($19) per user per month, shared with every other Copilot feature; we assume half is left for review. Each review also uses GitHub Actions minutes, estimated at 5 minutes on a Linux runner at $0.006 per minute. <a href="https://docs.github.com/en/copilot/reference/copilot-billing/models-and-pricing" target="_blank" rel="noopener">Models and pricing</a>, <a href="https://docs.github.com/en/copilot/concepts/billing-and-usage/organizations-and-enterprises/billing" target="_blank" rel="noopener">credit allowances</a></li>
            <li><strong>Cursor Bugbot:</strong> on Teams plans reviews bill from on-demand usage, and Cursor says the average review costs $1.00 to $1.50. We use $1.25. The Cursor seat itself is not counted. <a href="https://cursor.com/bugbot" target="_blank" rel="noopener">Bugbot</a></li>
            <li><strong>CodeRabbit:</strong> Essentials at $24 per developer per month on annual billing. It includes up to 5 PR reviews per developer per hour; extra reviews are paid on usage and are not counted here. <a href="https://www.coderabbit.ai/pricing" target="_blank" rel="noopener">Pricing</a></li>
            <li><strong>Greptile:</strong> Pro at $1 per credit, and a Base review uses 1 credit. Plus (3 credits) and Apex (10 credits) reviews cost more. <a href="https://www.greptile.com/pricing" target="_blank" rel="noopener">Pricing</a></li>
          </ul>
          <p class="cost-calc__checked">Prices checked on November 10, 2026. Vendors change them; the links above have the current numbers. Your own costs depend on PR size, the model you pick and how often your team pushes.</p>
        </div>
      </div>
    </section>

</main>

<script>
(function () {
  var REVIEWS_PER_PR = 2.16;
  var devsInput = document.getElementById('costDevs');
  var prsInput = document.getElementById('costPrs');
  var bars = document.getElementById('costBars');
  if (!devsInput || !prsInput || !bars) return;

  function perDev(prs) {
    var reviews = prs * REVIEWS_PER_PR;
    return [
      { name: 'Kodus', value: 10 + prs * 0.16, kodus: true },
      { name: 'Copilot review', value: Math.max(0, reviews * 1.5 - 9.5) + reviews * 5 * 0.006 },
      { name: 'Cursor Bugbot', value: reviews * 1.25 },
      { name: 'CodeRabbit', value: 24 },
      { name: 'Greptile', value: reviews * 1 }
    ];
  }

  function money(v) {
    return '$' + Math.round(v).toLocaleString('en-US');
  }

  function render() {
    var devs = Math.max(1, parseInt(devsInput.value, 10) || 1);
    var prs = Math.max(1, parseInt(prsInput.value, 10) || 1);
    document.getElementById('costDevsValue').textContent = devs;
    document.getElementById('costPrsValue').textContent = prs;

    var rows = perDev(prs);
    var max = 1;
    rows.forEach(function (r) { if (r.value * devs > max) max = r.value * devs; });

    bars.innerHTML = rows.map(function (r) {
      var total = r.value * devs;
      return '<div class="cost-calc__row' + (r.kodus ? ' cost-calc__row--kodus' : '') + '">' +
        '<span class="cost-calc__name">' + r.name + '</span>' +
        '<div class="cost-calc__track"><div class="cost-calc__fill" style="width:' + (total / max * 100).toFixed(1) + '%"></div></div>' +
        '<span class="cost-calc__val">' + money(total) + '<small>' + money(r.value) + ' per dev</small></span>' +
      '</div>';
    }).join('');
  }

  devsInput.addEventListener('input', render);
  prsInput.addEventListener('input', render);
  render();
})();
</script>

<?php get_footer('kodus'); ?>
