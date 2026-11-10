<?php
/*
 * Template Name: Kodus Self-Hosted Security
 * Template Post Type: page
 */
get_header('kodus');
?>
<style>
.security-brief { --sb-line:#38384f; --sb-muted:#bfc0cf; --sb-accent:#ffc18a; color:#f4f4f8; font-family:Inter, sans-serif; }
.security-brief * { box-sizing:border-box; }
.security-brief .sb-wrap { max-width:1060px; padding:0 24px; margin:0 auto; }
.security-brief .sb-intro { padding:132px 0 42px; }
.security-brief .sb-label { color:var(--sb-accent); font:600 12px/1.5 'JetBrains Mono',monospace; letter-spacing:.1em; text-transform:uppercase; margin:0 0 18px; }
.security-brief h1 { font:400 clamp(22px,3vw,36px)/normal var(--font-pixel); letter-spacing:0; max-width:940px; margin:0; text-wrap:balance; }
.security-brief .sb-lead { color:var(--sb-muted); font-size:18px; line-height:1.6; max-width:750px; margin:18px 0 0; }
.security-brief a { color:#ffca96; text-decoration:underline; text-underline-offset:3px; }
.security-brief .sb-panel { border:1px solid var(--sb-line); border-radius:10px; background:#181825; overflow:hidden; }
.security-brief .sb-panel-head { padding:15px 24px; border-bottom:1px solid var(--sb-line); color:#c5c5d3; font:600 11px/1.5 'JetBrains Mono',monospace; text-transform:uppercase; letter-spacing:.09em; }
.security-brief .sb-grid { display:grid; grid-template-columns:repeat(3,1fr); }
.security-brief .sb-step { padding:24px; min-width:0; border-right:1px solid var(--sb-line); }
.security-brief .sb-step:last-child { border-right:0; }
.security-brief .sb-number { color:var(--sb-accent); font:600 11px 'JetBrains Mono',monospace; }
.security-brief h2 { color:#f5f5fa; font:400 clamp(15px,2vw,19px)/normal var(--font-pixel); margin:0 0 12px; }
.security-brief h3 { color:#f5f5fa; font:700 16px/1.4 Inter,sans-serif; margin:12px 0 8px; }
.security-brief p { font-size:15px; line-height:1.65; }
.security-brief .sb-step p { color:var(--sb-muted); margin:0; font-size:14px; }
.security-brief .sb-body { padding:52px 0 72px; max-width:830px; }
.security-brief .sb-section { padding:0 0 30px; margin:0 0 30px; border-bottom:1px solid var(--sb-line); }
.security-brief .sb-section p { color:#c8c8d4; margin:10px 0; }
.security-brief .sb-section strong { color:#f3f3f8; }
.security-brief code { background:#292939; color:#f2ceac; padding:2px 5px; border-radius:3px; font-size:.9em; overflow-wrap:anywhere; }
.security-brief .sb-callout { border-left:3px solid var(--sb-accent); background:#1c1c2b; padding:18px 20px; margin-top:20px; }
.security-brief .sb-callout p { margin:0; }
.security-brief .sb-links { display:flex; flex-wrap:wrap; gap:12px 25px; margin-top:20px; font-size:14px; }
@media(max-width:700px) { .security-brief .sb-intro { padding:112px 0 30px; } .security-brief .sb-grid { grid-template-columns:1fr; } .security-brief .sb-step { border-right:0; border-bottom:1px solid var(--sb-line); } .security-brief .sb-step:last-child { border-bottom:0; } .security-brief .sb-body { padding-top:38px; } }

.security-brief .sb-lab { border:1px solid var(--sb-line); border-radius:10px; background:#181825; overflow:hidden; }
.security-brief .sb-lab-head { padding:16px 24px; border-bottom:1px solid var(--sb-line); display:flex; align-items:center; justify-content:space-between; gap:12px; color:#c7c7d5; font:600 11px/1.4 var(--font-mono); text-transform:uppercase; letter-spacing:.06em; }
.security-brief .sb-lab-body { padding:26px; }
.security-brief .sb-lab-title { margin:0 0 6px; font:600 18px/1.4 Inter,sans-serif; }
.security-brief .sb-lab-help { color:#bfc0cf; margin:0 0 20px; font-size:14px; }
.security-brief .sb-options { display:flex; flex-wrap:wrap; gap:8px; margin:0 0 24px; padding:0; border:0; }
.security-brief .sb-options legend { font-weight:600; font-size:13px; margin-bottom:10px; }
.security-brief .sb-choice { cursor:pointer; display:flex; align-items:center; gap:9px; padding:10px 13px; border:1px solid #55556e; border-radius:5px; color:#e7e7ee; background:#12121c; font-size:13px; }
.security-brief .sb-choice:has(input:checked) { border-color:#ffbc78; background:#332a2a; }
.security-brief .sb-choice input { accent-color:#ffbc78; margin:0; }
.security-brief .sb-choice:has(input:focus-visible) { outline:2px solid #ffca96; outline-offset:3px; }
.security-brief .sb-map { display:grid; grid-template-columns:1fr 30px 1fr 30px 1fr; gap:0; align-items:stretch; }
.security-brief .sb-node { border:1px solid #45455e; background:#12121d; border-radius:5px; padding:16px; min-width:0; }
.security-brief .sb-node--model { border-color:#936b4c; }
.security-brief .sb-node span { color:#ffbd7c; font:600 10px/1.4 var(--font-mono); text-transform:uppercase; letter-spacing:.05em; }
.security-brief .sb-node h3 { margin:9px 0 6px; font-size:14px; }
.security-brief .sb-node p { margin:0; color:#c5c5d1; font-size:13px; line-height:1.5; }
.security-brief .sb-arrow { align-self:center; text-align:center; color:#c6a58a; font-size:18px; }
.security-brief .sb-result { border:1px solid #51483f; background:#262123; padding:15px 17px; margin:16px 0 0; border-radius:5px; }
.security-brief .sb-result p { color:#eee8e2; font-size:14px; margin:0; }
.security-brief .sb-result [hidden] { display:none !important; }
.security-brief .sb-ongoing { border-top:1px solid #38384f; margin-top:22px; padding-top:19px; }
.security-brief .sb-ongoing-title { font:600 11px/1.4 var(--font-mono); color:#c9c9d5; text-transform:uppercase; letter-spacing:.05em; margin:0 0 9px; }
.security-brief .sb-ongoing p { font-size:13px; color:#c4c4d0; margin:0; }
.security-brief .sb-ongoing a { white-space:normal; }
@media(max-width:700px){ .security-brief .sb-lab-body { padding:20px; } .security-brief .sb-map { grid-template-columns:1fr; } .security-brief .sb-arrow { transform:rotate(90deg); padding:4px 0; } .security-brief .sb-options { display:grid; } .security-brief .sb-choice { width:100%; } }
</style>
<main class="security-brief">
  <section class="sb-intro"><div class="sb-wrap">
    <p class="sb-label">Kodus / Self-hosted security</p>
    <h1>How self-hosted code review handles your data</h1>
    <p class="sb-lead">A short guide for engineering and security teams assessing where code goes when they run Kodus in their own environment.</p>
  </div></section>
  <section><div class="sb-wrap"><div class="sb-lab">
    <div class="sb-lab-head"><span>Explore the review path</span><span>Illustrative configuration</span></div>
    <div class="sb-lab-body">
      <p class="sb-lab-title">Where does a review request go?</p>
      <p class="sb-lab-help">Choose a model endpoint to see how the review path changes.</p>
      <fieldset class="sb-options"><legend>Model endpoint</legend>
        <label class="sb-choice"><input type="radio" name="model-location" value="local" checked> Hosted in your network</label>
        <label class="sb-choice"><input type="radio" name="model-location" value="cloud"> External model provider</label>
      </fieldset>
      <div class="sb-map" aria-label="Review request flow">
        <div class="sb-node"><span>01 / Source</span><h3>Git provider</h3><p>Pull request and review context.</p></div>
        <div class="sb-arrow" aria-hidden="true">→</div>
        <div class="sb-node"><span>02 / Your infrastructure</span><h3>Self-hosted Kodus</h3><p>Prepares the review request and stores results.</p></div>
        <div class="sb-arrow" aria-hidden="true">→</div>
        <div class="sb-node sb-node--model"><span>03 / Model endpoint</span><h3 id="sb-model-name">Your selected model</h3><p id="sb-model-location">Local or external, according to your configuration.</p></div>
      </div>
      <div class="sb-result" aria-live="polite"><p id="sb-result-local"><strong>Local model:</strong> the model request can remain inside your network when its endpoint is hosted there.</p><p id="sb-result-cloud"><strong>External model:</strong> the review request travels to the provider you configure. Its terms and settings govern retention and processing.</p></div>
      <div class="sb-ongoing"><p class="sb-ongoing-title">Also check, in either scenario</p><p>Git hosting, the separate OpenAI embeddings path, telemetry and enabled integrations can have their own connections. <a href="#outbound-connections">See the details below ↓</a></p></div>
    </div>
  </div></div></section>
  <section><div class="sb-wrap"><div class="sb-body">
    <div class="sb-section"><p class="sb-label">Model and data flow</p><h2>Where does the code go?</h2><p>Review requests include the diff and the context needed by the review. With your own model key, those requests go to the provider or compatible endpoint you configure. A model hosted inside your network can keep those model requests inside it; a cloud endpoint sends them to that provider.</p><p>Provider retention, training and data residency depend on your agreement and settings with that provider. Review those terms for your deployment.</p><div class="sb-callout"><p><strong>Check every configured service.</strong> Choosing a local review model alone does not establish that the complete installation is isolated from external services.</p></div></div>
    <div class="sb-section" id="outbound-connections"><p class="sb-label">Additional connections</p><h2>What else can leave the environment?</h2><p><strong>Embeddings.</strong> The review pipeline has a separate OpenAI embedding path for suggestion deduplication. When an OpenAI API key is configured for this path, review-related content may be sent to OpenAI. It is separate from the review model's BYOK configuration. Review this path and your environment settings before relying on network isolation. <a href="https://github.com/kodustech/kodus-ai/blob/main/libs/common/utils/document.ts">Inspect the embedding configuration</a>.</p><p><strong>Telemetry.</strong> Self-hosted instances can send a daily heartbeat with aggregated usage and runtime metadata to Kodus. The documented payload excludes source code and can be disabled with <code>KODUS_TELEMETRY_DISABLED=true</code>. <a href="https://github.com/kodustech/kodus-ai/blob/main/docs/en/how_to_deploy/deploy_kodus/telemetry.mdx">Inspect the payload and controls</a>.</p><p><strong>Other integrations.</strong> Git hosting, model providers and any integrations you enable have their own endpoints. Your network configuration and selected services determine which are external.</p></div>
    <div class="sb-section"><p class="sb-label">Stored information</p><h2>What stays in the deployment?</h2><p>Review results and metadata are stored for review history and product features. Suggestions can contain excerpts of code. Set retention, backups, encryption and access controls according to your infrastructure and policies.</p></div>
    <div><p class="sb-label">For your security review</p><h2>Review the configuration with us</h2><p>Need to map the outbound connections for your setup? Contact <a href="mailto:support@kodus.io">support@kodus.io</a> with your deployment and model configuration.</p><div class="sb-links"><a href="https://docs.kodus.io/en/how_to_use/security/data_usage">AI model security documentation ↗</a><a href="https://github.com/kodustech/kodus-ai">Kodus source code ↗</a><a href="https://trust.kodus.io">Trust center ↗</a></div></div>
  </div></div></section>
</main>
<script>
(function() {
  var radios = document.querySelectorAll('input[name="model-location"]');
  var localResult = document.getElementById('sb-result-local');
  var cloudResult = document.getElementById('sb-result-cloud');
  var title = document.getElementById('sb-model-name');
  var detail = document.getElementById('sb-model-location');
  if (!radios.length || !localResult || !cloudResult || !title || !detail) return;
  function update() {
    var selected = document.querySelector('input[name="model-location"]:checked');
    var local = selected && selected.value === 'local';
    localResult.hidden = !local;
    cloudResult.hidden = local;
    title.textContent = local ? 'Model in your network' : 'External model provider';
    detail.textContent = local ? 'Review request stays within that network.' : 'Review request goes to the configured provider.';
  }
  radios.forEach(function(radio) { radio.addEventListener('change', update); });
  update();
})();
</script>
<?php get_footer('kodus'); ?>
