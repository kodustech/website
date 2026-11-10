<?php
/*
 * Template Name: Kodus AI Review Cost
 * Template Post Type: page
 */
get_header('kodus');
?>
<style>
.cost-page { --cc-bg:#101019; --cc-panel:#181825; --cc-line:#34344c; --cc-muted:#aaaabb; --cc-orange:#ffbc78; font-family:Inter,Arial,sans-serif; color:#f7f7fb; }
.cost-page * { box-sizing:border-box; }
.cost-page .cost-wrap { max-width:1160px; margin:auto; padding:0 24px; }
.cost-page .cost-intro { padding:135px 0 38px; }
.cost-page .cost-eyebrow { color:var(--cc-orange); font:600 12px/1.5 var(--font-mono); letter-spacing:.12em; text-transform:uppercase; margin:0 0 18px; }
.cost-page h1 { max-width:800px; margin:0; font:700 clamp(30px,4vw,51px)/1.16 Inter, sans-serif; letter-spacing:-.035em; text-wrap:balance; }
.cost-page .cost-lead { color:#bcbcca; font-size:17px; line-height:1.6; margin:15px 0 0; max-width:660px; }
.cost-page .cost-tool { border:1px solid #3a3a53; border-radius:12px; background:var(--cc-panel); overflow:hidden; box-shadow:0 18px 55px #0004; }
.cost-page .cost-top { display:flex; justify-content:space-between; gap:16px; align-items:center; padding:16px 28px; border-bottom:1px solid var(--cc-line); font:600 12px/1.5 var(--font-mono); letter-spacing:.06em; color:#d7d7e2; }
.cost-page .cost-top span:last-child { color:#aaaabb; font-weight:400; letter-spacing:0; }
.cost-page .cost-layout { display:grid; grid-template-columns:minmax(270px, .85fr) minmax(0,1.6fr); }
.cost-page .cost-inputs { padding:30px 28px; border-right:1px solid var(--cc-line); }
.cost-page .cost-section-label { font:600 11px/1.4 var(--font-mono); letter-spacing:.12em; text-transform:uppercase; color:#b8b8ca; margin:0 0 10px; }
.cost-page h2 { font-size:21px; line-height:1.25; margin:0; color:#f7f7fb; }
.cost-page .cost-help { color:var(--cc-muted); font-size:14px; line-height:1.55; margin:8px 0 25px; }
.cost-page .cost-field { display:block; margin:0 0 22px; }
.cost-page .cost-field label { display:block; color:#e4e4ed; font-size:14px; font-weight:600; margin-bottom:8px; }
.cost-page .cost-number-wrap { display:flex; align-items:center; background:#101019; border:1px solid #55556b; border-radius:6px; padding:0 13px; }
.cost-page .cost-number-wrap:focus-within { outline:2px solid var(--cc-orange); outline-offset:2px; }
.cost-page .cost-number-wrap input { width:100%; min-width:0; height:48px; border:0; outline:0; background:transparent; color:white; font:600 19px/1 var(--font-mono); }
.cost-page .cost-number-wrap input::-webkit-inner-spin-button, .cost-page .cost-number-wrap input::-webkit-outer-spin-button { -webkit-appearance:none; margin:0; }
.cost-page .cost-number-wrap input[type=number] { appearance:textfield; -moz-appearance:textfield; }
.cost-page .cost-number-wrap span { white-space:nowrap; font-size:12px; color:var(--cc-muted); }
.cost-page .cost-hint { color:#a5a5b7; font-size:12px; line-height:1.5; margin:7px 0 0; }
.cost-page .cost-volume { background:#222233; border:1px solid #38384e; border-radius:6px; padding:14px; color:#c7c7d5; font-size:13px; line-height:1.5; }
.cost-page .cost-volume strong { color:#fff; }
.cost-page .cost-results { padding:30px 32px; min-width:0; }
.cost-page .cost-results-head { display:flex; align-items:end; justify-content:space-between; gap:15px; margin-bottom:16px; }
.cost-page .cost-results-head p { margin:0; font-size:12px; color:#b7b7c8; white-space:nowrap; }
.cost-page .cost-row { border-top:1px solid #36364b; padding:15px 0 14px; }
.cost-page .cost-row__head,.cost-page .cost-row__bottom { display:flex; justify-content:space-between; align-items:center; gap:16px; }
.cost-page .cost-row__head { margin-bottom:10px; }
.cost-page .cost-row__name { font-weight:600; font-size:15px; }
.cost-page .cost-row--kodus .cost-row__name { color:var(--cc-orange); }
.cost-page .cost-row__badge { color:#ffd6a9; font:600 10px/1 var(--font-mono); border:1px solid #805f49; padding:3px 5px; border-radius:3px; vertical-align:2px; margin-left:5px; }
.cost-page .cost-row__amount { font:700 20px/1.2 var(--font-mono); white-space:nowrap; }
.cost-page .cost-row__amount small { font:400 11px/1 var(--font-mono); color:#b5b5c5; }
.cost-page .cost-row__track { height:7px; flex:1; background:#303043; border-radius:8px; overflow:hidden; }
.cost-page .cost-row__fill { background:#85859b; height:100%; border-radius:8px; transition:width .2s ease; min-width:2px; }
.cost-page .cost-row--kodus .cost-row__fill { background:var(--cc-orange); }
.cost-page .cost-row__per { width:87px; text-align:right; white-space:nowrap; color:#b8b8c9; font:12px/1.2 var(--font-mono); }
.cost-page .cost-disclaimer { margin:13px 0 0; color:#bcbcca; font-size:13px; line-height:1.55; }
.cost-page .cost-disclaimer a,.cost-page .cost-assumptions a { color:#ffca96; text-decoration:underline; text-underline-offset:3px; }
.cost-page .cost-bottom { display:flex; justify-content:space-between; align-items:center; gap:20px; background:#12121d; border-top:1px solid var(--cc-line); padding:18px 28px; }
.cost-page .cost-bottom p { margin:0; color:#bdbdca; font-size:13px; line-height:1.5; }
.cost-page .cost-bottom .btn { flex-shrink:0; }
.cost-page .cost-assumptions { max-width:960px; margin:0 auto; padding:52px 0 75px; }
.cost-page .cost-assumptions h2 { margin:0 0 10px; }
.cost-page .cost-assumptions > p { color:#b6b6c6; line-height:1.6; font-size:14px; }
.cost-page .cost-assumptions ul { list-style:none; padding:0; margin:24px 0; border-top:1px solid var(--cc-line); }
.cost-page .cost-assumptions li { border-bottom:1px solid var(--cc-line); padding:16px 0; color:#c8c8d4; font-size:14px; line-height:1.65; }
.cost-page .cost-assumptions strong { color:white; }
@media(max-width:760px) { .cost-page .cost-intro { padding:115px 0 28px; } .cost-page .cost-layout { grid-template-columns:1fr; } .cost-page .cost-inputs { border-right:0; border-bottom:1px solid var(--cc-line); } .cost-page .cost-inputs,.cost-page .cost-results { padding:24px 20px; } .cost-page .cost-top,.cost-page .cost-bottom { padding:16px 20px; } .cost-page .cost-bottom { align-items:stretch; flex-direction:column; } .cost-page .cost-bottom .btn { justify-content:center; } }
@media(max-width:420px) { .cost-page .cost-wrap { padding:0 16px; } .cost-page .cost-top span:last-child { display:none; } .cost-page .cost-row__amount { font-size:17px; } .cost-page .cost-row__amount small { display:none; } .cost-page .cost-results-head { align-items:start; flex-direction:column; gap:5px; } }
@media(prefers-reduced-motion:reduce) { .cost-page .cost-row__fill { transition:none; } }
</style>
<main class="cost-page">
  <section class="cost-intro"><div class="cost-wrap">
    <p class="cost-eyebrow">Kodus / Cost calculator</p>
    <h1>What does AI code review cost your team?</h1>
    <p class="cost-lead">Compare estimated monthly costs across five tools using your team size and PR volume.</p>
  </div></section>
  <section><div class="cost-wrap"><div class="cost-tool">
    <div class="cost-top"><span>▦ &nbsp; REVIEW COST CALCULATOR</span><span>Monthly estimates · USD</span></div>
    <div class="cost-layout">
      <div class="cost-inputs"><p class="cost-section-label">01 / Your team</p><h2>Start with your numbers</h2><p class="cost-help">Change either value to update the comparison.</p>
        <div class="cost-field"><label for="costDevs">Developers opening PRs</label><div class="cost-number-wrap"><input id="costDevs" type="number" inputmode="numeric" min="1" max="500" value="50"><span>developers</span></div><p class="cost-hint">People whose PRs will be reviewed.</p></div>
        <div class="cost-field"><label for="costPrs">PRs per developer</label><div class="cost-number-wrap"><input id="costPrs" type="number" inputmode="numeric" min="1" max="100" value="12"><span>PRs / month</span></div><p class="cost-hint">Average opened by each developer monthly.</p></div>
        <div class="cost-volume">That's <strong><span id="costTotalPrs">600</span> PRs per month</strong> across your team.</div>
      </div>
      <div class="cost-results"><div class="cost-results-head"><div><p class="cost-section-label">02 / Comparison</p><h2>Estimated monthly cost</h2></div><p>Whole team · USD</p></div>
        <div id="costBars" aria-live="polite"></div>
        <p class="cost-disclaimer">Estimates use public list prices and assumptions about usage. Kodus includes estimated model costs paid to your provider. <a href="#cost-assumptions">See how we calculated this ↓</a></p>
      </div>
    </div>
    <div class="cost-bottom"><p>Compare the numbers, then try Kodus on your own code.</p><a class="btn btn--primary" href="https://app.kodus.io/sign-up">START FREE →</a></div>
  </div></div></section>
  <section id="cost-assumptions"><div class="cost-wrap"><div class="cost-assumptions"><p class="cost-section-label">The fine print</p><h2>How the numbers are calculated</h2><p>These are estimates, not quotes. The assumptions below affect the comparison.</p>
          <ul>
            <li>A PR gets about 2 reviews on average (2.16), because each new push is reviewed again. Tools that charge per review pay for each one. This is the average we measured on Kodus in October 2026.</li>
            <li><strong>Kodus:</strong> Teams plan at $10 per developer per month (monthly billing; $8 on annual), plus model tokens paid directly to your provider with your own key. Tokens are estimated at about $0.16 per PR on DeepSeek V4 Flash, which already covers every review on that PR. <a href="https://kodus.io/pricing/" target="_blank" rel="noopener">Pricing</a></li>
            <li><strong>GitHub Copilot code review:</strong> Balanced effort, which GitHub estimates at $1.50 per review on average. Copilot Business includes 1,900 AI credits ($19) per user per month, shared with every other Copilot feature; we assume half is left for review. Each review also uses GitHub Actions minutes, estimated at 5 minutes on a Linux runner at $0.006 per minute. <a href="https://docs.github.com/en/copilot/reference/copilot-billing/models-and-pricing" target="_blank" rel="noopener">Models and pricing</a>, <a href="https://docs.github.com/en/copilot/concepts/billing-and-usage/organizations-and-enterprises/billing" target="_blank" rel="noopener">credit allowances</a></li>
            <li><strong>Cursor Bugbot:</strong> on Teams plans reviews bill from on-demand usage, and Cursor says the average review costs $1.00 to $1.50. We use $1.25. The Cursor seat itself is not counted. <a href="https://cursor.com/bugbot" target="_blank" rel="noopener">Bugbot</a></li>
            <li><strong>CodeRabbit:</strong> Essentials at $24 per developer per month on annual billing. It includes up to 5 PR reviews per developer per hour; extra reviews are paid on usage and are not counted here. <a href="https://www.coderabbit.ai/pricing" target="_blank" rel="noopener">Pricing</a></li>
            <li><strong>Greptile:</strong> Pro at $1 per credit, and a Base review uses 1 credit. Plus (3 credits) and Apex (10 credits) reviews cost more. <a href="https://www.greptile.com/pricing" target="_blank" rel="noopener">Pricing</a></li>
          </ul>
          <p class="cost-calc__checked">Prices checked on November 10, 2026. Vendors change them; the links above have the current numbers. Your own costs depend on PR size, the model you pick and how often your team pushes.</p>
</div></div></section>
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
    document.getElementById('costTotalPrs').textContent = (devs * prs).toLocaleString('en-US');

    var rows = perDev(prs);
    var max = 1;
    rows.forEach(function (r) { if (r.value * devs > max) max = r.value * devs; });

    bars.innerHTML = rows.map(function (r) {
      var total = r.value * devs;
      return '<div class="cost-row' + (r.kodus ? ' cost-row--kodus' : '') + '">' +
        '<div class="cost-row__head"><span class="cost-row__name">' + r.name + (r.kodus ? ' <span class="cost-row__badge">BYOK</span>' : '') + '</span>' +
        '<span class="cost-row__amount">' + money(total) + '<small> / month</small></span></div>' +
        '<div class="cost-row__bottom"><div class="cost-row__track"><div class="cost-row__fill" style="width:' + (total / max * 100).toFixed(1) + '%"></div></div>' +
        '<span class="cost-row__per">' + money(r.value) + ' / dev</span></div></div>';
    }).join('');
  }


  function update() {
    if (!devsInput.value || !prsInput.value) return;
    render();
  }
  function clamp(input) {
    var value = parseInt(input.value, 10);
    if (!Number.isFinite(value)) value = Number(input.min);
    input.value = Math.min(Number(input.max), Math.max(Number(input.min), value));
    render();
  }
  [devsInput, prsInput].forEach(function(input) {
    input.addEventListener('input', update);
    input.addEventListener('change', function() { clamp(input); });
  });
  render();
})();
</script>
<?php get_footer('kodus'); ?>
