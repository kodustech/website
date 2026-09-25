<?php
/*
 * Template Name: Kodus BYO LLM Code Review
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<style>
/* Page-local additions. Reuses theme vars and existing retro components. */
.lp-shp {
  --rule: 1px solid var(--color-card-lv2);
}

.lp-shp__section {
  padding: 80px 0;
  border-top: var(--rule);
}
.lp-shp__section:first-of-type { border-top: none; }

/* Alternating tinted band — matches home (.cartridges/.basics/.faq pattern) */
.lp-shp__section--tinted {
  background: linear-gradient(to bottom, transparent, rgba(24, 24, 37, 0.85) 20%, rgba(24, 24, 37, 0.85) 80%, transparent);
  border-top: none;
}
.lp-shp__section--tinted + .lp-shp__section { border-top: none; }

.lp-shp__eyebrow {
  display: inline-block;
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
  margin-bottom: 16px;
}

.lp-shp__title {
  font-family: var(--font-pixel);
  font-size: clamp(1.25rem, 2vw, 1.7rem);
  line-height: 1.2;
  margin: 0 0 16px;
  color: var(--color-text);
  letter-spacing: -0.3px;
}
.lp-shp__title .highlight {
  color: var(--color-primary);
}
.lp-shp__lede {
  font-family: var(--font-mono);
  font-size: 1rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  max-width: 64ch;
  margin: 0;
}

/* ====== Hero (matches home aesthetic) ====== */

.lp-shp__hero {
  padding: 128px 0 160px;
  position: relative;
}
.lp-shp__hero-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 64px;
  align-items: center;
}
@media (max-width: 960px) {
  .lp-shp__hero { padding: 88px 0 100px; }
  .lp-shp__hero-grid { grid-template-columns: 1fr; gap: 40px; }
}

.lp-shp__hero-title {
  font-family: var(--font-pixel);
  font-size: clamp(1.8rem, 3.2vw, 2.8rem);
  line-height: 1.15;
  margin: 0 0 32px;
  color: var(--color-text);
  letter-spacing: -0.5px;
}
.lp-shp__hero-title .highlight {
  color: var(--color-primary);
}
.lp-shp__hero-sub {
  font-family: var(--font-sans);
  font-size: 1.25rem;
  line-height: 1.5;
  color: var(--color-text-muted);
  margin: 0 0 40px;
  max-width: 40ch;
}
.lp-shp__hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
}
/* Scene hero (same pattern as the self-hosted page): full-bleed pixel-art
   bridges, text on the empty left side. The page-specific panel was removed;
   the scene carries the hero. */
.lp-shp__hero--scene {
  /* the fixed 64px nav sits on top of the hero, so the scene runs under it */
  min-height: 100vh;
  min-height: 100svh;
  display: flex;
  align-items: center;
  padding: 128px 0 96px;
  overflow: hidden;
  isolation: isolate;
}
.lp-shp__hero--scene > .container { width: 100%; }
.lp-shp__hero-bg {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  /* on very wide screens keep the scene tied to the content column instead of the screen edge */
  width: min(100%, 1680px);
  height: 100%;
  object-fit: cover;
  object-position: right center;
  z-index: -2;
}
@media (min-width: 1700px) {
  /* soften the scene's outer edges once it no longer reaches the screen edge */
  .lp-shp__hero-bg {
    -webkit-mask-image: linear-gradient(90deg, transparent 0, #000 12%, #000 88%, transparent 100%);
            mask-image: linear-gradient(90deg, transparent 0, #000 12%, #000 88%, transparent 100%);
  }
}
/* keep the left side readable and melt the bottom edge into the page */
.lp-shp__hero--scene::before {
  content: '';
  position: absolute;
  inset: 0;
  z-index: -1;
  background:
    linear-gradient(90deg, var(--color-bg) 0%, rgba(16,16,25,.75) 30%, rgba(16,16,25,0) 55%),
    linear-gradient(180deg, rgba(16,16,25,0) 70%, var(--color-bg) 100%);
}
.lp-shp__hero--scene .lp-shp__hero-grid { grid-template-columns: minmax(0, 560px); }
.lp-shp__hero--scene .lp-shp__hero-title {
  font-size: clamp(2.2rem, 4.4vw, 3.6rem);
  /* Kodus Pixel is drawn at 1.38x (size-adjust), so 1.5 here renders as a
     solid ~1.1 leading, tight enough for a two-line display title */
  line-height: 1.5;
}
.lp-shp__hero--scene .lp-shp__hero-sub { text-wrap: pretty; }

@media (min-width: 901px) and (max-width: 1200px) {
  /* narrower desktops: the text column is wider relative to the scene, so darken further in */
  .lp-shp__hero--scene::before {
    background:
      linear-gradient(90deg, var(--color-bg) 0%, rgba(16,16,25,.88) 42%, rgba(16,16,25,0) 72%),
      linear-gradient(180deg, rgba(16,16,25,0) 70%, var(--color-bg) 100%);
  }
}
@media (max-width: 900px) {
  /* phones and tablets: the scene stays behind the text, dimmed, like on desktop */
  .lp-shp__hero--scene {
    min-height: 0;
    padding: 112px 0 72px;
  }
  .lp-shp__hero-bg {
    left: 0;
    transform: none;
    width: 100%;
    object-position: 82% center;
  }
  .lp-shp__hero--scene::before {
    background:
      linear-gradient(180deg, rgba(16,16,25,.8) 0%, rgba(16,16,25,.7) 45%, rgba(16,16,25,.82) 80%, var(--color-bg) 100%);
  }
}

.lp-shp__hero-proof {
  margin: 28px 0 0;
  font-family: var(--font-mono);
  font-size: .8rem;
  color: var(--color-text-muted);
}
.lp-shp__hero-proof strong {
  color: var(--color-primary);
  font-weight: 600;
}
.lp-shp__hero-foot {
  margin-top: 18px;
  font-family: var(--font-mono);
  font-size: .8rem;
  color: var(--color-text-dim);
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  align-items: baseline;
}
.lp-shp__hero-foot a {
  color: var(--color-text-muted);
  text-decoration: none;
  transition: color .15s ease;
}
.lp-shp__hero-foot a:hover { color: var(--color-primary); }
.lp-shp__hero-foot a::before { content: '\2192  '; color: var(--color-primary); }


.lp-shp__term {
  background: rgba(10, 10, 18, 0.85);
  border: var(--rule);
  font-family: var(--font-mono);
  font-size: .85rem;
  box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
}
.lp-shp__term-bar {
  display: flex;
  align-items: center;
  gap: 6px;
  padding: 10px 14px;
  border-bottom: var(--rule);
  background: rgba(255,255,255,.02);
}
.lp-shp__term-bar span.dot {
  width: 10px; height: 10px; border-radius: 50%;
  background: var(--color-card-lv3);
}
.lp-shp__term-bar span.dot--r { background: #FF7A85; }
.lp-shp__term-bar span.dot--y { background: var(--color-primary); }
.lp-shp__term-bar span.dot--g { background: #6BE19F; }
.lp-shp__term-bar span.t {
  margin-left: 10px;
  color: var(--color-text-dim);
  font-size: .72rem;
  letter-spacing: 1.2px;
}
.lp-shp__term-body {
  padding: 22px 22px 26px;
  color: var(--color-text);
  min-height: 280px;
}
.lp-shp__term-body span.l { display: block; }
.lp-shp__term-body span.l + span.l { margin-top: 6px; }
.lp-shp__term-body .p { color: var(--color-primary); margin-right: 8px; }
.lp-shp__term-body .ok { color: #6BE19F; }
.lp-shp__term-body .wn { color: var(--color-primary); }
.lp-shp__term-body .dim { color: var(--color-text-dim); }
.lp-shp__term-body .blink {
  display: inline-block;
  width: 9px; height: 1.05em;
  background: var(--color-primary);
  vertical-align: text-bottom;
  margin-left: 5px;
  animation: lp-shp-cursor 1s infinite step-end;
}
@keyframes lp-shp-cursor {
  0%, 50% { opacity: 1; } 51%, 100% { opacity: 0; }
}

/* ====== Definitional block (AI Mode snippet bait) ====== */
/* Standalone statement: one big serif sentence, lots of air, no box. */
.lp-shp__def {
  padding: 120px 0 128px;
}
.lp-shp__def > .container {
  display: grid;
  grid-template-columns: minmax(0, 1fr) minmax(0, 1.1fr);
  align-items: center;
  gap: 48px;
}
.lp-shp__def-art {
  width: 100%;
  height: auto;
  display: block;
}
@media (max-width: 960px) {
  .lp-shp__def > .container { grid-template-columns: 1fr; gap: 32px; }
  .lp-shp__def-art { max-width: 560px; margin: 0 auto; }
}
.lp-shp__def-inner {
  max-width: 880px;
  display: flex;
  flex-direction: column;
  gap: 28px;
}
.lp-shp__def-tag {
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.lp-shp__def-text {
  font-family: var(--font-pixel);
  font-weight: 400;
  font-size: clamp(1rem, 1.9vw, 1.55rem);
  line-height: 1.12;
  letter-spacing: -0.02em;
  color: var(--color-text);
  margin: 0;
}
.lp-shp__def-text strong {
  font-weight: inherit;
  color: var(--color-primary);
}
.lp-shp__def-note {
  font-family: var(--font-sans);
  font-size: 1.05rem;
  line-height: 1.6;
  color: var(--color-text-muted);
  max-width: 52ch;
  margin: 0;
}
@media (max-width: 768px) {
  .lp-shp__def { padding: 80px 0 88px; }
  .lp-shp__def-text { font-size: 1.15rem; }
}

/* ====== Boundary section ====== */

.lp-shp__bnd-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 24px;
}
@media (max-width: 720px) { .lp-shp__bnd-grid { grid-template-columns: 1fr; } }
.lp-shp__bnd-card {
  background: var(--color-card-lv1);
  border: var(--rule);
  padding: 28px 26px 28px;
  position: relative;
  /* text on the left, Kody in her own column so copy never runs under her */
  display: grid;
  grid-template-columns: minmax(0, 1fr) auto;
  grid-template-areas: "title kody" "text kody";
  column-gap: 20px;
  align-content: start;
  overflow: hidden;
  transition: border-color .2s ease, transform .2s ease;
}
.lp-shp__bnd-card:hover {
  border-color: var(--color-primary);
  transform: translateY(-3px);
}
.lp-shp__bnd-card:hover .lp-shp__bnd-kody {
  transform: rotate(0deg) scale(1.06);
}
.lp-shp__bnd-kody {
  grid-area: kody;
  align-self: start;
  width: 84px;
  height: 84px;
  object-fit: contain;
  opacity: .92;
  transform: rotate(-3deg);
  transition: transform .25s ease;
  pointer-events: none;
}
@media (max-width: 720px) {
  .lp-shp__bnd-kody { width: 64px; height: 64px; }
}
.lp-shp__bnd-card h3 {
  font-family: var(--font-mono);
  font-size: 1.05rem;
  color: var(--color-text);
  margin: 0 0 10px;
  font-weight: 600;
  grid-area: title;
  position: relative;
  z-index: 1;
}
.lp-shp__bnd-card p {
  grid-area: text;
  font-family: var(--font-sans);
  font-size: .95rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  margin: 0;
  position: relative;
  z-index: 1;
}

/* ====== BYOK section ====== */

.lp-shp__byok-section {
  position: relative;
}

.lp-shp__tabs-note {
  margin: 14px 18px 18px;
  font-family: var(--font-mono);
  font-size: 0.75rem;
  color: var(--color-text-muted, #9b9bb0);
  line-height: 1.5;
}

/* CSS-only tabbed code switcher */
.lp-shp__tabs {
  background: rgba(10, 10, 18, 0.9);
  border: 1px solid var(--color-card-lv2);
  font-family: var(--font-mono);
  overflow: hidden;
}
.lp-shp__tabs input[type="radio"] {
  position: absolute;
  opacity: 0;
  pointer-events: none;
}
.lp-shp__tabs-nav {
  display: flex;
  border-bottom: 1px solid var(--color-card-lv2);
  background: rgba(255,255,255,.02);
}
.lp-shp__tabs-nav label {
  flex: 1 1 0;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  padding: 14px 16px;
  font-family: var(--font-mono);
  font-size: .78rem;
  letter-spacing: 1px;
  color: var(--color-text-dim);
  cursor: pointer;
  border-right: 1px solid var(--color-card-lv2);
  transition: background .15s ease, color .15s ease, border-color .15s ease, filter .15s ease;
  position: relative;
  white-space: nowrap;
  user-select: none;
}
.lp-shp__tabs-nav label:last-child { border-right: none; }
@media (max-width: 520px) {
  /* four tabs have to fit a phone: icon over label, no fixed padding */
  .lp-shp__tabs-nav label {
    min-width: 0;
    flex-direction: column;
    gap: 6px;
    padding: 12px 4px;
    font-size: .68rem;
    letter-spacing: .5px;
  }
}
.lp-shp__tabs-nav label img,
.lp-shp__tabs-nav label svg {
  width: 22px;
  height: 22px;
  object-fit: contain;
  flex: 0 0 auto;
  filter: grayscale(.6) brightness(.9);
  opacity: .75;
  transition: filter .15s ease, opacity .15s ease;
}
.lp-shp__tabs-nav label svg { color: var(--color-text-dim); }
.lp-shp__tabs-nav label:hover {
  color: var(--color-text);
  background: rgba(248,183,109,.04);
}
.lp-shp__tabs-nav label:hover img,
.lp-shp__tabs-nav label:hover svg { filter: none; opacity: 1; }
.lp-shp__tabs-nav label::before {
  content: '';
  position: absolute;
  left: 0; right: 0; bottom: -1px;
  height: 2px;
  background: transparent;
  transition: background .15s ease;
}
.lp-shp__tabs-panels { position: relative; }
.lp-shp__tabs-panel { display: none; }
.lp-shp__tabs-panel pre {
  margin: 0;
  padding: 22px 22px 26px;
  font-family: var(--font-mono);
  font-size: .85rem;
  line-height: 1.7;
  color: #DCDCEC;
  white-space: pre-wrap;
  word-break: break-all;
}
.lp-shp__tabs-panel pre .c { color: rgba(243,243,247,.4); font-style: italic; }
.lp-shp__tabs-panel pre .k { color: var(--color-primary); }
.lp-shp__tabs-panel pre .v { color: var(--color-secondary); }
.lp-shp__tabs-panel pre .s { color: #6BE19F; }

/* Active states — one per radio */
#byok-openai:checked    ~ .lp-shp__tabs-nav label[for="byok-openai"],
#byok-anthropic:checked ~ .lp-shp__tabs-nav label[for="byok-anthropic"],
#byok-google:checked    ~ .lp-shp__tabs-nav label[for="byok-google"],
#byok-local:checked     ~ .lp-shp__tabs-nav label[for="byok-local"] {
  color: var(--color-primary);
  background: rgba(248,183,109,.06);
}
#byok-openai:checked    ~ .lp-shp__tabs-nav label[for="byok-openai"] img,
#byok-anthropic:checked ~ .lp-shp__tabs-nav label[for="byok-anthropic"] img,
#byok-google:checked    ~ .lp-shp__tabs-nav label[for="byok-google"] img,
#byok-openai:checked    ~ .lp-shp__tabs-nav label[for="byok-openai"] svg,
#byok-anthropic:checked ~ .lp-shp__tabs-nav label[for="byok-anthropic"] svg,
#byok-google:checked    ~ .lp-shp__tabs-nav label[for="byok-google"] svg,
#byok-local:checked     ~ .lp-shp__tabs-nav label[for="byok-local"] svg {
  filter: none;
  opacity: 1;
  color: var(--color-primary);
}
#byok-openai:checked    ~ .lp-shp__tabs-nav label[for="byok-openai"]::before,
#byok-anthropic:checked ~ .lp-shp__tabs-nav label[for="byok-anthropic"]::before,
#byok-google:checked    ~ .lp-shp__tabs-nav label[for="byok-google"]::before,
#byok-local:checked     ~ .lp-shp__tabs-nav label[for="byok-local"]::before {
  background: var(--color-primary);
}
#byok-openai:checked    ~ .lp-shp__tabs-panels #panel-byok-openai,
#byok-anthropic:checked ~ .lp-shp__tabs-panels #panel-byok-anthropic,
#byok-google:checked    ~ .lp-shp__tabs-panels #panel-byok-google,
#byok-local:checked     ~ .lp-shp__tabs-panels #panel-byok-local {
  display: block;
}

.lp-shp__byok-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 48px;
  align-items: start;
}
@media (max-width: 960px) { .lp-shp__byok-grid { grid-template-columns: 1fr; gap: 32px; } }

.lp-shp__pills {
  margin-top: 22px;
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
}
.lp-shp__pill {
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 1px;
  text-transform: uppercase;
  padding: 6px 10px;
  border: var(--rule);
  background: rgba(255,255,255,.02);
  color: var(--color-text-muted);
}
.lp-shp__pill--accent {
  color: var(--color-primary);
  border-color: var(--color-primary);
}

.lp-shp__code {
  background: rgba(10, 10, 18, 0.85);
  border: var(--rule);
  font-family: var(--font-mono);
}
.lp-shp__code + .lp-shp__code { margin-top: 18px; }
.lp-shp__code-bar {
  display: flex; justify-content: space-between;
  padding: 10px 16px;
  border-bottom: var(--rule);
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 1.2px;
  color: var(--color-text-dim);
}
.lp-shp__code-bar .lang { color: var(--color-primary); }
.lp-shp__code-mode {
  font-family: var(--font-mono);
  font-size: .72rem;
  color: var(--color-primary);
  letter-spacing: 1.5px;
  text-transform: uppercase;
  margin-bottom: 8px;
  display: inline-block;
}
.lp-shp__code-pre {
  margin: 0;
  padding: 22px 20px;
  font-family: var(--font-mono);
  font-size: .85rem;
  line-height: 1.7;
  color: var(--color-text);
  white-space: pre-wrap;
  word-break: break-all;
}
.lp-shp__code-pre .c { color: var(--color-text-dim); font-style: italic; }
.lp-shp__code-pre .k { color: var(--color-primary); }
.lp-shp__code-pre .v { color: var(--color-secondary); }
.lp-shp__code-pre .s { color: #6BE19F; }

/* ====== Comparison table ====== */

.lp-shp__cmp-wrap {
  border: var(--rule);
  background: var(--color-card-lv1);
  overflow-x: auto;
}
.lp-shp__cmp {
  width: 100%;
  min-width: 920px;
  border-collapse: collapse;
  table-layout: fixed;
  font-family: var(--font-sans, system-ui, sans-serif);
  font-size: .86rem;
  min-width: 880px;
}
.lp-shp__cmp thead th {
  padding: 18px 14px;
  text-align: left;
  font-family: var(--font-sans, system-ui, sans-serif);
  font-size: .82rem;
  letter-spacing: 0;
  text-transform: none;
  color: var(--color-text);
  border-bottom: var(--rule);
  background: rgba(255,255,255,.02);
  font-weight: 600;
  vertical-align: middle;
}
.lp-shp__cmp thead th:first-child {
  color: var(--color-text-dim);
  font-size: .68rem;
  letter-spacing: 1.8px;
  text-transform: uppercase;
  font-weight: 500;
}
.lp-shp__cmp thead th.kodus {
  color: var(--color-primary);
  background: rgba(248, 183, 109, 0.12);
  border-bottom: 2px solid var(--color-primary);
}
.lp-shp__cmp tbody td {
  padding: 11px 14px;
  border-bottom: var(--rule);
  vertical-align: middle;
  color: var(--color-text-muted);
  font-size: .84rem;
  line-height: 1.35;
}
.lp-shp__cmp tbody td:first-child {
  color: var(--color-text);
  font-weight: 600;
  letter-spacing: .2px;
  font-family: var(--font-sans, system-ui, sans-serif);
}
.lp-shp__cmp tbody td.kodus {
  background: rgba(248, 183, 109, 0.10);
  color: var(--color-primary);
  font-weight: 600;
  box-shadow: inset 1px 0 0 rgba(248,183,109,.25), inset -1px 0 0 rgba(248,183,109,.25);
}
.lp-shp__cmp tbody tr:last-child td { border-bottom: none; }
.lp-shp__cmp tbody tr:hover td { background: rgba(255,255,255,0.02); }
.lp-shp__cmp tbody tr:hover td.kodus { background: rgba(248, 183, 109, 0.14); }

.lp-shp__cmp-brand {
  display: inline-flex;
  align-items: center;
  white-space: nowrap;
}
/* the logo already carries the wordmark, so size it like a line of text */
.lp-shp__cmp-logo {
  height: 22px;
  width: auto;
  display: block;
}
/* keep the capability names visible while the table scrolls sideways on small screens */
.lp-shp__cmp tbody td:first-child,
.lp-shp__cmp thead th:first-child {
  position: sticky;
  left: 0;
  z-index: 2;
  background: var(--color-card-lv1);
  box-shadow: 1px 0 0 var(--color-card-lv3);
}
.lp-shp__mk {
  display: inline-flex; align-items: center; gap: 8px;
  font-family: var(--font-sans, system-ui, sans-serif);
}
.lp-shp__mk::before {
  display: inline-block;
  width: 14px; text-align: center;
  font-weight: 700;
  font-family: var(--font-mono);
}
.lp-shp__mk--yes::before  { content: '✓'; color: #6BE19F; }
.lp-shp__mk--no::before   { content: '✗'; color: var(--color-text-dim); }
.lp-shp__mk--part::before { content: '~'; color: var(--color-primary); }
.lp-shp__mk--dash::before { content: '—'; color: var(--color-text-dim); }
.lp-shp__mk--no  { color: var(--color-text-dim); }
.lp-shp__mk--dash{ color: var(--color-text-dim); }

/* ====== Air-gapped steps ====== */

.lp-shp__steps {
  list-style: none;
  margin: 0;
  padding: 0;
  counter-reset: step;
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 16px;
}
.lp-shp__steps li {
  counter-increment: step;
  position: relative;
  background: var(--color-card-lv1);
  border: var(--rule);
  border-radius: 6px;
  padding: 24px 24px 22px 64px;
}
.lp-shp__steps li::before {
  content: counter(step);
  position: absolute;
  left: 22px;
  top: 22px;
  width: 26px;
  height: 26px;
  display: grid;
  place-items: center;
  border-radius: 4px;
  background: var(--color-primary);
  color: var(--color-bg);
  font-family: var(--font-mono);
  font-size: .8rem;
  font-weight: 700;
}
.lp-shp__steps h3 {
  font-family: var(--font-mono);
  font-size: 1rem;
  font-weight: 600;
  color: var(--color-text);
  margin: 2px 0 8px;
}
.lp-shp__steps p,
.lp-shp__ctl p {
  font-family: var(--font-sans);
  font-size: .94rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  margin: 0;
}
.lp-shp__steps code,
.lp-shp__ctl code {
  overflow-wrap: anywhere;
  font-family: var(--font-mono);
  font-size: .85em;
  color: var(--color-primary);
}
@media (max-width: 760px) {
  .lp-shp__steps { grid-template-columns: minmax(0, 1fr); }
  .lp-shp__steps li { padding: 20px 18px 18px 56px; }
}

/* ====== Security controls ====== */

.lp-shp__ctl {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 16px;
}
.lp-shp__ctl-col {
  background: var(--color-card-lv1);
  border: var(--rule);
  border-radius: 6px;
  padding: 24px;
}
.lp-shp__ctl-tier {
  display: inline-block;
  font-family: var(--font-mono);
  font-size: .72rem;
  font-weight: 700;
  letter-spacing: .12em;
  text-transform: uppercase;
  color: var(--color-text);
  padding-bottom: 12px;
  margin-bottom: 18px;
  border-bottom: 1px solid var(--color-card-lv3);
  width: 100%;
}
.lp-shp__ctl-tier--ee { color: var(--color-primary); }
.lp-shp__ctl ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  gap: 18px;
}
.lp-shp__ctl h3 {
  font-family: var(--font-mono);
  font-size: .95rem;
  font-weight: 600;
  color: var(--color-text);
  margin: 0 0 6px;
}
@media (max-width: 760px) {
  .lp-shp__ctl { grid-template-columns: minmax(0, 1fr); }
}

/* ====== Use cases — dossier files ====== */

.lp-shp__cases-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 28px 22px;
  padding-top: 18px;
}
.lp-shp__case {
  background: var(--color-card-lv1);
  border: var(--rule);
  padding: 30px 24px 22px;
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.lp-shp__case-kody {
  width: 96px;
  height: 96px;
  margin-top: 10px;
  margin-bottom: 4px;
  object-fit: contain;
  display: block;
  flex: 0 0 auto;
  opacity: .94;
  transform: rotate(-2deg);
  transition: opacity .25s ease, transform .25s ease;
  pointer-events: none;
}
.lp-shp__case:hover .lp-shp__case-kody {
  opacity: 1;
  transform: rotate(0deg) scale(1.05);
}
@media (max-width: 720px) {
  .lp-shp__case-kody { width: 80px; height: 80px; }
}
.lp-shp__case-tag {
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-dim);
  margin-top: 6px;
}
.lp-shp__case h3 {
  font-family: var(--font-mono);
  font-size: 1.05rem;
  color: var(--color-text);
  margin: 0;
  font-weight: 600;
  letter-spacing: .3px;
}
.lp-shp__case p {
  font-family: var(--font-sans);
  font-size: .94rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  margin: 0;
}

/* ====== Production receipt ====== */


/* ====== Final CTA ====== */

.lp-shp__final {
  padding: 90px 0 100px;
  border-top: 1px solid var(--color-card-lv2);
}
.lp-shp__final-grid {
  display: grid;
  grid-template-columns: 1fr 1.05fr;
  gap: 56px;
  align-items: center;
  max-width: 1080px;
  margin: 0 auto;
}
@media (max-width: 880px) {
  .lp-shp__final-grid { grid-template-columns: 1fr; gap: 36px; }
}
.lp-shp__final-text {
  display: flex; flex-direction: column; align-items: flex-start; gap: 14px;
}
.lp-shp__final-title {
  font-family: var(--font-pixel);
  font-size: clamp(1.35rem, 2.3vw, 1.75rem);
  line-height: 1.25;
  margin: 4px 0 0;
  color: var(--color-text);
  letter-spacing: -0.3px;
}
.lp-shp__final-title .highlight { color: var(--color-primary); }
.lp-shp__final-sub {
  font-family: var(--font-sans);
  color: var(--color-text-muted);
  max-width: 40ch;
  margin: 0;
  font-size: 1rem;
  line-height: 1.55;
}
.lp-shp__final-ctas {
  display: flex; flex-wrap: wrap; gap: 12px;
  margin-top: 6px;
}
.lp-shp__final-aside {
  margin-top: 14px;
  font-family: var(--font-mono);
  font-size: .82rem;
}
.lp-shp__final-aside a {
  color: var(--color-text-muted);
  text-decoration: none;
  transition: color .15s ease;
}
.lp-shp__final-aside a:hover { color: var(--color-primary); }
.lp-shp__final-aside a::before {
  content: '\2192  ';
  color: var(--color-primary);
}

.lp-shp__final-terminal {
  background: var(--color-bg);
  border: var(--rule);
  border-radius: 6px;
  font-family: var(--font-mono);
  font-size: .86rem;
  line-height: 1.7;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0,0,0,0.28);
}
.lp-shp__final-terminal-bar {
  display: flex; align-items: center; gap: 6px;
  padding: 9px 14px;
  background: var(--color-card-lv2);
  border-bottom: var(--rule);
}
.lp-shp__final-terminal-bar i {
  display: inline-block; width: 10px; height: 10px;
  border-radius: 50%;
  background: #555;
}
.lp-shp__final-terminal-bar i:nth-child(1) { background: #FF5F56; opacity: 0.7; }
.lp-shp__final-terminal-bar i:nth-child(2) { background: #FFBD2E; opacity: 0.7; }
.lp-shp__final-terminal-bar i:nth-child(3) { background: #27C93F; opacity: 0.7; }
.lp-shp__final-terminal-bar span {
  margin-left: 12px;
  font-size: .72rem;
  color: var(--color-text-dim);
  letter-spacing: 0.5px;
}
.lp-shp__final-terminal-body {
  padding: 18px 22px;
  overflow-x: auto;
}
.lp-shp__final-terminal-line {
  display: block;
  white-space: pre;
  color: var(--color-text);
}
@media (max-width: 600px) {
  .lp-shp__final-terminal-line { white-space: pre-wrap; overflow-wrap: anywhere; }
}
.lp-shp__final-terminal-line::before {
  content: '$ ';
  color: var(--color-primary);
  font-weight: 700;
}
.lp-shp__final-terminal-line--ok { color: #6FBF73; }
.lp-shp__final-terminal-line--ok::before {
  content: '\2713 ';
  color: #6FBF73;
}

/* ====== BYO page additions ====== */

/* Statement without artwork: one column. */
.lp-shp__def--solo > .container { display: block; }

/* Where the money goes: Kodus seats on one side, provider inference on the other */
.lp-byo__bill {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 1px;
  background: var(--color-card-lv2);
  border: 1px solid var(--color-card-lv2);
}
.lp-byo__bill-col {
  background: var(--color-bg);
  padding: 28px 28px 24px;
  display: flex;
  flex-direction: column;
  gap: 18px;
  min-width: 0;
}
.lp-byo__bill-who {
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.lp-byo__bill-col h3 {
  font-family: var(--font-sans);
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--color-text);
  margin: 0;
}
.lp-byo__bill dl { margin: 0; display: grid; gap: 0; }
.lp-byo__bill dl > div {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  gap: 16px;
  padding: 12px 0;
  border-top: 1px dashed var(--color-card-lv3);
}
.lp-byo__bill dt {
  font-family: var(--font-sans);
  font-size: .95rem;
  color: var(--color-text-muted);
  min-width: 0;
}
.lp-byo__bill dd {
  margin: 0;
  font-family: var(--font-mono);
  font-size: .9rem;
  color: var(--color-text);
  text-align: right;
  white-space: nowrap;
}
.lp-byo__bill dd.is-zero { color: var(--color-primary); }
.lp-byo__bill-note {
  font-family: var(--font-sans);
  font-size: .9rem;
  line-height: 1.6;
  color: var(--color-text-muted);
  margin: auto 0 0;
}
@media (max-width: 760px) {
  .lp-byo__bill { grid-template-columns: minmax(0, 1fr); }
  .lp-byo__bill-col { padding: 22px 18px 20px; }
  .lp-byo__bill dd { white-space: normal; }
}

/* ====== Model routing map: scope on the left, model on the right ====== */
.lp-byo-rt { padding: 112px 0 120px; }
.lp-byo-rt .lp-shp__lede { margin-bottom: 40px; }
.lp-byo-rt__map {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  gap: 12px;
}
.lp-byo-rt__row {
  display: grid;
  /* both boxes stretch to the row height, so left and right always line up */
  grid-template-columns: minmax(0, 1fr) minmax(48px, .5fr) minmax(0, 1fr);
  align-items: stretch;
}
.lp-byo-rt__wire { align-self: center; }
.lp-byo-rt__src,
.lp-byo-rt__dst {
  position: relative;
  min-width: 0;
  background: var(--color-card-lv1);
  border: 1px solid var(--color-card-lv2);
  padding: 16px 18px;
  min-height: 76px;
}
.lp-byo-rt__src { display: flex; flex-direction: column; justify-content: center; gap: 4px; }
.lp-byo-rt small {
  font-family: var(--font-mono);
  font-size: .66rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.lp-byo-rt__src code {
  font-family: var(--font-mono);
  font-size: .9rem;
  color: var(--color-text);
  background: none;
  padding: 0;
  overflow-wrap: anywhere;
}
.lp-byo-rt__dst { display: flex; align-items: center; gap: 14px; }
.lp-byo-rt__dst img,
.lp-byo-rt__local { width: 28px; height: 28px; object-fit: contain; flex: 0 0 auto; }
.lp-byo-rt__local { color: var(--color-text-muted); }
.lp-byo-rt__dst > span { display: flex; flex-direction: column; gap: 4px; min-width: 0; }
.lp-byo-rt__dst b {
  font-family: var(--font-mono);
  font-size: .95rem;
  font-weight: 500;
  color: var(--color-text);
  overflow-wrap: anywhere;
}
.lp-byo-rt__dst small { text-transform: none; letter-spacing: .3px; font-size: .72rem; }

/* the wire: a dashed line with a request travelling along it */
.lp-byo-rt__wire {
  position: relative;
  height: 2px;
  background: repeating-linear-gradient(90deg, var(--color-card-lv3) 0 6px, transparent 6px 10px);
}
.lp-byo-rt__wire i {
  position: absolute;
  top: -3px;
  left: 0;
  width: 8px;
  height: 8px;
  background: var(--color-primary);
  opacity: 0;
  animation: lp-byo-rt-flow 3s linear infinite;
}
.lp-byo-rt__row:nth-child(2) .lp-byo-rt__wire i { animation-delay: -.9s; }
.lp-byo-rt__row:nth-child(3) .lp-byo-rt__wire i { animation-delay: -1.8s; }
.lp-byo-rt__row:nth-child(4) .lp-byo-rt__wire i { animation-delay: -2.4s; }
@keyframes lp-byo-rt-flow {
  0% { left: 0; opacity: 0; }
  10%, 88% { opacity: 1; }
  100% { left: calc(100% - 8px); opacity: 0; }
}

/* row 1 hits a rate limit, then the same call goes out on the fallback row */
.lp-byo-rt__row--fail .lp-byo-rt__wire i { animation: lp-byo-rt-fail 6s linear infinite; }
.lp-byo-rt__row--fb .lp-byo-rt__wire i { background: var(--color-secondary); animation: lp-byo-rt-fb 6s linear infinite; }
.lp-byo-rt__row--fb .lp-byo-rt__dst { border-style: dashed; border-color: var(--color-card-lv3); }
.lp-byo-rt__row--fb .lp-byo-rt__src small { color: var(--color-secondary); }
.lp-byo-rt__err {
  position: absolute;
  top: -9px;
  right: 10px;
  font-family: var(--font-mono);
  font-style: normal;
  font-size: .66rem;
  letter-spacing: 1px;
  padding: 2px 6px;
  color: var(--color-bg);
  background: #FF7A85;
  opacity: 0;
  animation: lp-byo-rt-err 6s linear infinite;
}
.lp-byo-rt__row--fail .lp-byo-rt__dst { animation: lp-byo-rt-shake 6s linear infinite; }
@keyframes lp-byo-rt-fail {
  0% { left: 0; opacity: 0; }
  4%, 26% { opacity: 1; }
  30% { left: calc(100% - 8px); opacity: 0; }
  100% { left: calc(100% - 8px); opacity: 0; }
}
@keyframes lp-byo-rt-err {
  0%, 29% { opacity: 0; transform: translateY(4px); }
  32%, 52% { opacity: 1; transform: none; }
  56%, 100% { opacity: 0; }
}
@keyframes lp-byo-rt-shake {
  0%, 29%, 56%, 100% { border-color: var(--color-card-lv2); }
  32%, 52% { border-color: #FF7A85; }
}
@keyframes lp-byo-rt-fb {
  0%, 40% { left: 0; opacity: 0; }
  44%, 66% { opacity: 1; }
  70% { left: calc(100% - 8px); opacity: 0; }
  100% { left: calc(100% - 8px); opacity: 0; }
}

.lp-byo-rt__notes {
  margin: 40px 0 0;
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 28px;
}
.lp-byo-rt__notes dt {
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
  margin-bottom: 8px;
}
.lp-byo-rt__notes dd {
  margin: 0;
  font-family: var(--font-sans);
  font-size: .95rem;
  line-height: 1.6;
  color: var(--color-text-muted);
}

@media (max-width: 720px) {
  .lp-byo-rt { padding: 80px 0 88px; }
  /* phones: scope above model, joined by a short vertical wire */
  .lp-byo-rt__row { grid-template-columns: minmax(0, 1fr); }
  .lp-byo-rt__wire {
    width: 2px;
    height: 18px;
    margin-left: 22px;
    background: repeating-linear-gradient(180deg, var(--color-card-lv3) 0 4px, transparent 4px 7px);
  }
  .lp-byo-rt__wire i { display: none; }
  .lp-byo-rt__map { gap: 20px; }
  .lp-byo-rt__notes { grid-template-columns: minmax(0, 1fr); gap: 20px; }
}
@media (prefers-reduced-motion: reduce) {
  .lp-byo-rt__wire i,
  .lp-byo-rt__err { display: none; }
  .lp-byo-rt__row--fail .lp-byo-rt__dst { animation: none; }
}
</style>

<?php
$kodus_img = get_stylesheet_directory_uri() . '/assets/img/';

// Comparison rows. Rendered as the table below and as its Table schema, so both stay in sync.
// Checked against each vendor's docs and pricing pages in September 2026.
$byo_cmp_tools = ['Kodus', 'PR-Agent', 'Qodo', 'CodeRabbit', 'Greptile', 'Sourcery', 'GitHub Copilot'];
$byo_cmp_rows = [
  ['Bring your own LLM key', [
    ['yes', 'Every plan, Cloud and self-hosted'],
    ['yes', 'Yes, self-hosted only'],
    ['part', 'Enterprise plan'],
    ['part', 'Self-hosted Enterprise, 500+ seats'],
    ['part', 'Self-hosted Enterprise'],
    ['part', 'Enterprise plan'],
    ['no', 'No, code review doesn\'t support model switching'],
  ]],
  ['Providers', [
    ['yes', '12 built in, plus any OpenAI-compatible API'],
    ['yes', 'Any LiteLLM provider'],
    ['part', 'OpenAI, Anthropic, Azure OpenAI, Bedrock, self-hosted models'],
    ['part', 'OpenAI, Azure OpenAI, Bedrock'],
    ['yes', 'OpenAI-compatible APIs, Bedrock'],
    ['dash', 'Not documented'],
    ['no', 'GitHub picks the models'],
  ]],
  ['Model running inside your network', [
    ['yes', 'vLLM, Ollama, TGI, LiteLLM'],
    ['yes', 'Ollama and others via LiteLLM'],
    ['part', 'Self-hosted models, Enterprise'],
    ['dash', 'Not documented'],
    ['yes', 'Custom base URL'],
    ['dash', 'Not documented'],
    ['no', 'No'],
  ]],
  ['Different model per repository', [
    ['yes', 'Per repository, directory and task'],
    ['yes', 'Per-repo config file'],
    ['dash', 'Not documented'],
    ['dash', 'Not documented'],
    ['dash', 'Not documented'],
    ['dash', 'Not documented'],
    ['no', 'No'],
  ]],
  ['Open source', [
    ['yes', 'AGPLv3'],
    ['yes', 'MIT'],
    ['no', 'No'],
    ['no', 'No'],
    ['no', 'No'],
    ['no', 'No'],
    ['no', 'No'],
  ]],
  ['Paid plan price', [
    ['yes', 'Teams: $8/dev/month annual, $10 monthly, plus your provider bill'],
    ['yes', 'Free, plus your provider bill'],
    ['part', 'Pro Team: $30/month for up to 30 users, plus credits'],
    ['part', 'Team: $48/dev/month annual, $60 monthly'],
    ['part', 'Pro: $30/seat/month, plus credits'],
    ['part', 'Team: $24/dev/month annual, $30 monthly'],
    ['part', 'Included in paid Copilot plans, AI credits per review'],
  ]],
];

// FAQ. Rendered as HTML and as FAQPage schema from the same array.
$byo_faq = [
  ['What is BYO LLM code review?',
   'BYO LLM (bring your own LLM) code review means the AI that reviews your pull requests calls a model on your own provider account, with your own API key. The review vendor charges for its product, and your provider bills you directly for inference.'],
  ['Which AI code review tools support bring-your-own LLM keys?',
   'As of September 2026, Kodus supports your own key on every plan, in the cloud and self-hosted. PR-Agent (MIT) supports it when you self-host it. Qodo and Sourcery offer it on their Enterprise plans, and CodeRabbit and Greptile only on self-hosted Enterprise deployments, with CodeRabbit requiring 500+ seats. GitHub Copilot code review does not let you choose the model.'],
  ['Does Kodus charge a markup on inference?',
   'No. Kodus charges per seat for the product. Your LLM provider bills you for inference at its own list price, and Kodus adds nothing on top.'],
  ['Which LLM providers does Kodus support?',
   'Kodus has 12 built-in providers: OpenAI, Anthropic, Google Gemini, Google Vertex AI, Amazon Bedrock, Azure OpenAI, OpenRouter, Novita, Moonshot, Z.ai, plus generic OpenAI-compatible and Anthropic-compatible endpoints. Groq, Cerebras, Together AI, Fireworks and any other OpenAI-compatible API work through a custom base URL.'],
  ['Can I use a coding plan subscription instead of paying per token?',
   'Yes. The GLM Coding Plan and the Kimi Code Plan are built-in options, and Kodus sets their concurrency limits for you. OpenCode Go and Synthetic work through their OpenAI-compatible endpoints. A subscription caps your monthly model spend. Because these plans limit concurrent requests, pair one with a pay-per-token fallback model for busy days.'],
  ['Which model should I use for code review?',
   'Kodus suggests Claude Sonnet by default. The BYOK docs also recommend Gemini Pro, the latest GPT model, and the Kimi and GLM coding plans. You can start with one and switch later, since the change applies to the next review.'],
  ['Can I use a local or self-hosted LLM?',
   'Yes. Point the base URL at an OpenAI-compatible server you run, such as vLLM, Ollama, TGI or LiteLLM, and set the model name. With self-hosted Kodus, the whole review can run without calling an outside provider.'],
  ['Does Kodus work with my existing AI gateway or cloud AI contract?',
   'Yes. Azure OpenAI, Amazon Bedrock and Google Vertex AI are built-in providers, so reviews can use the contract and credits your company already has. Vertex also works without a key through Application Default Credentials. Gateways like LiteLLM or OpenRouter work as an OpenAI-compatible endpoint.'],
  ['Can I use a different model per repository?',
   'Yes. You can set the model per repository and per directory. You can also route each task to its own model: code review, Kody Rules review, rule generation, business rules validation, PR summaries and conversations in the PR.'],
  ['What happens if my LLM provider is down or rate-limited?',
   'If you set a fallback model, Kodus retries the call once on it after a rate limit, a server error, a timeout or an invalid key. You can also cap concurrent requests per provider to stay under its limits.'],
  ['How do I see what my reviews cost?',
   'The Token Usage page shows tokens and cost for each review, with a breakdown by model and by task. You can set a monthly spend limit that sends alerts at 50, 75, 90 and 100 percent. Your provider\'s own dashboard shows the same spend.'],
  ['Can I use my own key on the free plan?',
   'Yes, and on the free Community plan it is required: reviews run on your own key. The 14-day trial includes a default model paid by Kodus, so you can test before adding a key. Teams and Enterprise also support your own key.'],
  ['Does Kodus limit how many PRs it reviews?',
   'No. Kodus sets no limit on the number of pull requests or reviews. The limits you run into are your provider\'s. Pull requests with more than 200 changed files are skipped.'],
  ['How is my API key stored?',
   'Keys are encrypted in transit and at rest, and Kodus never shows them again or writes them to logs in plain text. On self-hosted Kodus, keys set in .env stay on your servers.'],
  ['How does Kodus compare to PR-Agent for BYO LLM?',
   'Both are open source and both let you bring your own key, pick the provider and run a local model. PR-Agent (MIT) is a self-hosted tool you configure through files and run from the CLI, a GitHub Action or a webhook. Kodus (AGPLv3) also has a hosted cloud, a web app for setup and review history, per-repository and per-task model routing, fallback models and a token usage page.'],
];
?>
<main class="lp-shp">

  <!-- ========== HERO ========== -->
  <section class="lp-shp__hero lp-shp__hero--scene">
    <img class="lp-shp__hero-bg"
         src="<?php echo $kodus_img; ?>hero-byo-llm.webp"
         srcset="<?php echo $kodus_img; ?>hero-byo-llm-1000.webp 1000w, <?php echo $kodus_img; ?>hero-byo-llm.webp 2033w"
         sizes="100vw" alt="" loading="eager" fetchpriority="high" decoding="async">
    <div class="container">
      <div class="lp-shp__hero-grid">
        <div>
          <h1 class="lp-shp__hero-title">BYO LLM code review.</h1>
          <p class="lp-shp__hero-sub">
            Open source AI code review with the model you choose. Bring your own key and pay the provider at list price, with zero markup.
          </p>

          <div class="lp-shp__hero-ctas">
            <a href="https://app.kodus.io/sign-up" class="btn btn--primary" id="lpByoStartBtn">Start free</a>
            <a href="#byok-config" class="btn btn--outline-light" id="lpByoModelBtn">See supported models</a>
          </div>
          <p class="lp-shp__hero-foot">
            <a href="https://docs.kodus.io/how_to_use/en/byok" id="lpByoDocsBtn">BYOK docs</a>
            <span>&middot;</span>
            <a href="<?php echo esc_url(home_url('/self-hosted-ai-code-review/')); ?>" id="lpByoSelfHostedBtn">Self-host Kodus</a>
          </p>
          <p class="lp-shp__hero-proof">Trusted by <strong>5,000+ teams</strong> around the world</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== DEFINITION ========== -->
  <section class="lp-shp__def lp-shp__def--solo" aria-label="What is BYO LLM code review">
    <div class="container">
      <div class="lp-shp__def-inner">
        <span class="lp-shp__def-tag">What it is</span>
        <p class="lp-shp__def-text">
          <strong>BYO LLM code review</strong> is when the AI that reviews your pull requests runs on a model from your own provider account, with your own API key.
        </p>
        <p class="lp-shp__def-note">
          Kodus charges per seat for the product. Your provider bills you for inference at its list price, and nothing is added in between.
        </p>
      </div>
    </div>
  </section>

  <!-- ========== WHAT YOU CONTROL ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">What you control when you <span class="highlight">bring your own model</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        You set this up once in Settings, on any plan. Self-hosted installs can also set it in <code>.env</code>.
      </p>

      <div class="lp-shp__bnd-grid">
        <div class="lp-shp__bnd-card">
          <img src="<?php echo $kodus_img; ?>kody-key.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>The provider and the key</h3>
          <p>Pick one of 12 built-in providers or any OpenAI-compatible endpoint, including a model you run yourself. Keys are encrypted and never shown again after you save them.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo $kodus_img; ?>kody-config.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>Which model runs where</h3>
          <p>Set the model per repository, per directory and per task. Code review can run on one model while PR summaries run on a cheaper one. A change applies to the next review, with no redeploy.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo $kodus_img; ?>kody-painel.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>What happens when a provider fails</h3>
          <p>Add a fallback model and Kodus retries once on it after a rate limit, a server error or a timeout. Cap concurrent requests to stay under your provider's limits.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo $kodus_img; ?>kody-taxa.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>What each review costs</h3>
          <p>The Token Usage page shows tokens and cost per review, per model and per task. A monthly spend limit alerts you at 50, 75, 90 and 100 percent.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== MODEL ROUTING ========== -->
  <section class="lp-byo-rt">
    <div class="container">
      <h2 class="lp-shp__title">One model per repo, <span class="highlight">directory or task</span></h2>
      <p class="lp-shp__lede">
        Set a default model, then override it where it makes sense. If a call fails, Kodus retries it once on your fallback model.
      </p>

      <ol class="lp-byo-rt__map">
        <li class="lp-byo-rt__row lp-byo-rt__row--fail">
          <span class="lp-byo-rt__src"><small>Repository</small><code>acme/api</code></span>
          <span class="lp-byo-rt__wire" aria-hidden="true"><i></i></span>
          <span class="lp-byo-rt__dst">
            <img src="<?php echo $kodus_img; ?>anthropic.webp" alt="" loading="lazy">
            <span><b>claude-sonnet-5</b><small>Anthropic API</small></span>
            <em class="lp-byo-rt__err" aria-hidden="true">429</em>
          </span>
        </li>
        <li class="lp-byo-rt__row">
          <span class="lp-byo-rt__src"><small>Directory</small><code>acme/web/src/ui/</code></span>
          <span class="lp-byo-rt__wire" aria-hidden="true"><i></i></span>
          <span class="lp-byo-rt__dst">
            <img src="<?php echo $kodus_img; ?>gemini.webp" alt="" loading="lazy">
            <span><b>gemini-3.8-flash</b><small>Gemini API</small></span>
          </span>
        </li>
        <li class="lp-byo-rt__row">
          <span class="lp-byo-rt__src"><small>Task</small><code>PR summaries</code></span>
          <span class="lp-byo-rt__wire" aria-hidden="true"><i></i></span>
          <span class="lp-byo-rt__dst">
            <img src="<?php echo $kodus_img; ?>zai.webp" alt="" loading="lazy">
            <span><b>glm-5.3</b><small>GLM Coding Plan, flat monthly fee</small></span>
          </span>
        </li>
        <li class="lp-byo-rt__row">
          <span class="lp-byo-rt__src"><small>Repository</small><code>acme/data-platform</code></span>
          <span class="lp-byo-rt__wire" aria-hidden="true"><i></i></span>
          <span class="lp-byo-rt__dst">
            <svg class="lp-byo-rt__local" viewBox="0 0 16 16" shape-rendering="crispEdges" fill="currentColor" aria-hidden="true"><rect x="1" y="2" width="14" height="5"/><rect x="1" y="9" width="14" height="5"/><rect x="3" y="4" width="2" height="1" fill="#181825"/><rect x="3" y="11" width="2" height="1" fill="#181825"/></svg>
            <span><b>Qwen3.8-27B</b><small>vLLM inside your network</small></span>
          </span>
        </li>
        <li class="lp-byo-rt__row lp-byo-rt__row--fb">
          <span class="lp-byo-rt__src"><small>Fallback</small><code>any failed call</code></span>
          <span class="lp-byo-rt__wire" aria-hidden="true"><i></i></span>
          <span class="lp-byo-rt__dst">
            <img src="<?php echo $kodus_img; ?>openai.webp" alt="" loading="lazy">
            <span><b>gpt-6-sol</b><small>OpenAI API</small></span>
          </span>
        </li>
      </ol>

      <dl class="lp-byo-rt__notes">
        <div><dt>Scopes</dt><dd>An organization default, then overrides per repository and per directory.</dd></div>
        <div><dt>Tasks</dt><dd>Code review, Kody Rules review, rule generation, business rules validation, PR summaries and conversations in the PR.</dd></div>
        <div><dt>Fallback</dt><dd>Retried once after a rate limit, a server error, a timeout or an invalid key.</dd></div>
      </dl>
    </div>
  </section>

  <!-- ========== SUPPORTED MODELS ========== -->
  <section class="lp-shp__section lp-shp__byok-section" id="byok-config">
    <div class="container">
      <div class="lp-shp__byok-grid">
        <div>
          <h2 class="lp-shp__title">Which LLMs work with <span class="highlight">Kodus</span></h2>
          <p class="lp-shp__lede">
            12 providers are built in, including coding plan subscriptions from Z.ai and Kimi, and any API that speaks the OpenAI format works through a custom base URL. In Kodus Cloud you add the key in Settings. Self-hosted installs can use the same screen or three variables in <code>.env</code>.
          </p>

          <div class="lp-shp__pills">
            <span class="lp-shp__pill">OpenAI</span>
            <span class="lp-shp__pill">Anthropic</span>
            <span class="lp-shp__pill">Google Gemini</span>
            <span class="lp-shp__pill">Google Vertex AI</span>
            <span class="lp-shp__pill">Amazon Bedrock</span>
            <span class="lp-shp__pill">Azure OpenAI</span>
            <span class="lp-shp__pill">OpenRouter</span>
            <span class="lp-shp__pill">Novita</span>
            <span class="lp-shp__pill">Moonshot / Kimi</span>
            <span class="lp-shp__pill">Z.ai / GLM</span>
            <span class="lp-shp__pill">OpenAI-compatible</span>
            <span class="lp-shp__pill">Anthropic-compatible</span>
            <span class="lp-shp__pill">GLM Coding Plan</span>
            <span class="lp-shp__pill">Kimi Code Plan</span>
            <span class="lp-shp__pill">OpenCode Go</span>
            <span class="lp-shp__pill">Synthetic</span>
            <span class="lp-shp__pill lp-shp__pill--accent">+ Groq, Together, Fireworks, vLLM, Ollama&hellip;</span>
          </div>
        </div>

        <div class="lp-shp__tabs" role="tablist">
          <input type="radio" name="byok-tab" id="byok-openai" checked>
          <input type="radio" name="byok-tab" id="byok-anthropic">
          <input type="radio" name="byok-tab" id="byok-google">
          <input type="radio" name="byok-tab" id="byok-local">

          <div class="lp-shp__tabs-nav">
            <label for="byok-openai">
              <img src="<?php echo $kodus_img; ?>openai.webp" alt="" loading="lazy">
              <span>OpenAI</span>
            </label>
            <label for="byok-anthropic">
              <img src="<?php echo $kodus_img; ?>anthropic.webp" alt="" loading="lazy">
              <span>Anthropic</span>
            </label>
            <label for="byok-google">
              <img src="<?php echo $kodus_img; ?>gemini.webp" alt="" loading="lazy">
              <span>Gemini</span>
            </label>
            <label for="byok-local">
              <svg viewBox="0 0 16 16" shape-rendering="crispEdges" fill="currentColor" aria-hidden="true">
                <rect x="1" y="2" width="14" height="2"/>
                <rect x="1" y="4" width="2" height="3"/>
                <rect x="13" y="4" width="2" height="3"/>
                <rect x="1" y="5" width="14" height="2"/>
                <rect x="4" y="4" width="2" height="1"/>
                <rect x="1" y="9" width="14" height="2"/>
                <rect x="1" y="11" width="2" height="3"/>
                <rect x="13" y="11" width="2" height="3"/>
                <rect x="1" y="12" width="14" height="2"/>
                <rect x="4" y="11" width="2" height="1"/>
              </svg>
              <span>Local</span>
            </label>
          </div>

          <div class="lp-shp__tabs-panels">
            <div class="lp-shp__tabs-panel" id="panel-byok-openai">
<pre><span class="c"># Self-hosted .env. Same 3 vars for every provider.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"https://api.openai.com/v1"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"sk-..."</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">gpt-6-sol</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-anthropic">
<pre><span class="c"># Claude keys go in the same variable.</span>
<span class="c"># Kodus calls Anthropic through its native SDK.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"https://api.anthropic.com/v1"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"sk-ant-..."</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">claude-sonnet-5</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-google">
<pre><span class="c"># Gemini through its OpenAI-compatible endpoint.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"https://generativelanguage.googleapis.com/v1beta/openai"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"..."</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">gemini-3.8-flash</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-local">
<pre><span class="c"># Point at a server you run:</span>
<span class="c"># vLLM, Ollama, TGI, LiteLLM, any OpenAI-compatible API.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"http://llm.internal.your-co/v1"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"sk-local-anything"</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">your-local-model</span></pre>
            </div>
          </div>

          <p class="lp-shp__tabs-note">In Kodus Cloud you pick the same provider, key and model in Settings, no <code>.env</code> needed.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PRICING ========== -->
  <section class="lp-shp__section lp-shp__section--tinted" id="pricing">
    <div class="container">
      <h2 class="lp-shp__title">What you pay with <span class="highlight">your own LLM key</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        You get two separate bills: Kodus charges for seats, and your provider charges for the tokens your reviews use, at its list price.
      </p>

      <div class="lp-byo__bill">
        <div class="lp-byo__bill-col">
          <span class="lp-byo__bill-who">Kodus bills you</span>
          <h3>Seats, per developer</h3>
          <dl>
            <div><dt>Community, self-hosted</dt><dd>Free</dd></div>
            <div><dt>Teams, billed annually</dt><dd>$8/dev/month</dd></div>
            <div><dt>Teams, billed monthly</dt><dd>$10/dev/month</dd></div>
            <div><dt>Enterprise</dt><dd>Custom</dd></div>
          </dl>
          <p class="lp-byo__bill-note">No limit on PRs or reviews on any plan. <a href="<?php echo esc_url(home_url('/pricing/')); ?>" style="color: var(--color-primary);">Pricing</a> has the full plan details.</p>
        </div>
        <div class="lp-byo__bill-col">
          <span class="lp-byo__bill-who">Your provider bills you</span>
          <h3>Tokens or a flat subscription</h3>
          <dl>
            <div><dt>Pay-per-token API</dt><dd>Provider list price</dd></div>
            <div><dt>Coding plan subscription</dt><dd>Flat monthly fee</dd></div>
            <div><dt>Markup from Kodus</dt><dd class="is-zero">$0</dd></div>
            <div><dt>Model running on your servers</dt><dd>Your compute only</dd></div>
          </dl>
          <p class="lp-byo__bill-note">For example, Claude Sonnet 5 lists at $2 per million input tokens and $10 per million output tokens (September 2026). The Token Usage page in Kodus shows what each review used.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== COMPARISON ========== -->
  <section class="lp-shp__section" id="comparison">
    <div class="container">
      <h2 class="lp-shp__title">AI code review tools that support <span class="highlight">bring-your-own LLM keys</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Where each tool lets you use your own model, and on which plan. Checked against each vendor's docs and pricing pages in September 2026.
      </p>
      <div class="lp-shp__cmp-wrap">
        <table class="lp-shp__cmp" aria-label="AI code review tools that support bring-your-own LLM keys">
          <thead>
            <tr>
              <th style="width: 16%;">Capability</th>
              <th class="kodus"><span class="lp-shp__cmp-brand"><img src="<?php echo $kodus_img; ?>kodus_dark.webp" class="lp-shp__cmp-logo" alt="Kodus"></span></th>
              <?php foreach (array_slice($byo_cmp_tools, 1) as $tool) : ?>
              <th><span class="lp-shp__cmp-brand"><?php echo esc_html($tool); ?></span></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($byo_cmp_rows as $row) : ?>
            <tr>
              <td><?php echo esc_html($row[0]); ?></td>
              <?php foreach ($row[1] as $i => $cell) : ?>
              <td<?php echo $i === 0 ? ' class="kodus"' : ''; ?>><span class="lp-shp__mk lp-shp__mk--<?php echo esc_attr($cell[0]); ?>"><?php echo esc_html($cell[1]); ?></span></td>
              <?php endforeach; ?>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ========== USE CASES ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">Who brings <span class="highlight">their own model</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Most teams that bring their own model to code review fall into one of these groups.
      </p>
      <div class="lp-shp__cases-grid">
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo $kodus_img; ?>kody-sovereignty.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Existing AI contracts</span>
          <h3>Use the AI contract you already have</h3>
          <p>If your company already pays for Azure OpenAI, Bedrock or Vertex AI, reviews run on that contract, its credits and its data terms. No new AI vendor to approve.</p>
        </div>
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo $kodus_img; ?>kody-money.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Cost control</span>
          <h3>Spend on the model where it matters</h3>
          <p>Run code review on a strong model and PR summaries on a cheap one. The Token Usage page shows which repos and tasks drive the bill.</p>
        </div>
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo $kodus_img; ?>kody-mage.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Open-weight models</span>
          <h3>Review with a model you host</h3>
          <p>Run Kimi, GLM, DeepSeek, Qwen or Llama on vLLM or Ollama. With self-hosted Kodus, code never leaves your network.</p>
        </div>
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo $kodus_img; ?>kody-config.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Model changes</span>
          <h3>Change models when you decide to</h3>
          <p>Set an exact model ID and it stays until you change it. When a better model ships, switch in Settings and the next review uses it.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ ========== -->
  <section class="faq" id="faq" style="border-top: 1px solid var(--color-card-lv2);">
    <div class="container">
      <h2 class="section-title">FAQ</h2>
      <div class="faq__terminal">
        <div class="faq__bar">
          <div class="faq__bar-dots">
            <span class="faq__dot faq__dot--red"></span>
            <span class="faq__dot faq__dot--yellow"></span>
            <span class="faq__dot faq__dot--green"></span>
          </div>
          <span class="faq__bar-title">kodus-byo-llm-faq(1)</span>
          <span class="faq__bar-status">bash</span>
        </div>
        <div class="faq__body">
          <div class="faq__man-header">
            <span class="faq__man-section">KODUS-FAQ(1)</span>
            <span class="faq__man-center">BYO LLM</span>
            <span class="faq__man-section">KODUS-FAQ(1)</span>
          </div>

          <div class="faq__list">
            <?php foreach ($byo_faq as $item) : ?>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text"><?php echo esc_html($item[0]); ?></span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p><?php echo esc_html($item[1]); ?></p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FINAL CTA ========== -->
  <section class="lp-shp__final">
    <div class="container">
      <div class="lp-shp__final-grid">

        <div class="lp-shp__final-text">
          <h2 class="lp-shp__final-title">
            Bring your own model <span class="highlight">to Kodus</span>
          </h2>
          <p class="lp-shp__final-sub">
            Add your provider key in Settings, or set three variables in <code>.env</code> if you self-host. The next review runs on your model.
          </p>
          <div class="lp-shp__final-ctas">
            <a href="https://app.kodus.io/sign-up" class="btn btn--primary" id="lpByoFinalStartBtn">Start free</a>
            <a href="https://docs.kodus.io/how_to_use/en/byok" class="btn btn--outline-light" id="lpByoFinalDocsBtn">Read the BYOK docs</a>
          </div>
          <div class="lp-shp__final-aside">
            <a href="https://github.com/kodustech/kodus-ai" target="_blank" rel="noopener" id="lpByoFinalGithubBtn">Star kodus-ai on GitHub</a>
          </div>
        </div>

        <div class="lp-shp__final-terminal" aria-hidden="true">
          <div class="lp-shp__final-terminal-bar">
            <i></i><i></i><i></i>
            <span>your-server &middot; .env</span>
          </div>
          <div class="lp-shp__final-terminal-body">
<span class="lp-shp__final-terminal-line">API_OPENAI_FORCE_BASE_URL="https://api.anthropic.com/v1"</span>
<span class="lp-shp__final-terminal-line">API_OPEN_AI_API_KEY="sk-ant-..."</span>
<span class="lp-shp__final-terminal-line">API_LLM_PROVIDER_MODEL=claude-sonnet-5</span>
<span class="lp-shp__final-terminal-line lp-shp__final-terminal-line--ok">kody is reviewing PR #42 with claude-sonnet-5</span>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<!-- ========== SCHEMAS (JSON-LD) ========== -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Kodus",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Web, Linux, Docker",
  "url": "https://kodus.io/byo-llm-code-review/",
  "description": "Kodus is an open source (AGPLv3) AI code review tool that runs on your own LLM key on every plan, in the cloud or self-hosted. It has 12 built-in providers, including OpenAI, Anthropic, Google Gemini, Vertex AI, Amazon Bedrock, Azure OpenAI and OpenRouter, and works with any OpenAI-compatible API, including models you run with vLLM or Ollama. Kodus adds no markup to inference.",
  "license": "https://www.gnu.org/licenses/agpl-3.0.html",
  "downloadUrl": "https://github.com/kodustech/kodus-ai",
  "featureList": [
    "Bring your own LLM API key on every plan",
    "12 built-in LLM providers plus any OpenAI-compatible API",
    "Local and self-hosted models through vLLM, Ollama, TGI or LiteLLM",
    "Model per repository, per directory and per task",
    "Fallback model on rate limits, server errors and timeouts",
    "Token usage and cost per review",
    "Zero markup on inference"
  ],
  "offers": [
    {"@type": "Offer", "name": "Community", "price": "0", "priceCurrency": "USD", "description": "Free, self-hosted, open source under AGPLv3"},
    {"@type": "Offer", "name": "Teams (annual)", "price": "8", "priceCurrency": "USD", "description": "Per developer per month, billed annually. Inference billed by your LLM provider."},
    {"@type": "Offer", "name": "Teams (monthly)", "price": "10", "priceCurrency": "USD", "description": "Per developer per month, billed monthly. Inference billed by your LLM provider."}
  ],
  "publisher": {"@type": "Organization", "name": "Kodus", "url": "https://kodus.io/"}
}
</script>

<?php
$byo_table_schema = [
  '@context'   => 'https://schema.org',
  '@type'      => 'Table',
  'about'      => 'AI code review tools that support bring-your-own LLM keys, checked September 2026',
  'name'       => 'AI code review tools that support bring-your-own LLM keys',
  'url'        => 'https://kodus.io/byo-llm-code-review/#comparison',
  'isPartOf'   => ['@type' => 'WebPage', 'url' => 'https://kodus.io/byo-llm-code-review/'],
  'mainEntity' => array_map(function ($row) use ($byo_cmp_tools) {
    $parts = [];
    foreach ($row[1] as $i => $cell) {
      $parts[] = $byo_cmp_tools[$i] . ': ' . $cell[1];
    }
    return ['@type' => 'PropertyValue', 'name' => $row[0], 'value' => implode('; ', $parts)];
  }, $byo_cmp_rows),
];
$byo_faq_schema = [
  '@context'   => 'https://schema.org',
  '@type'      => 'FAQPage',
  'mainEntity' => array_map(function ($item) {
    return [
      '@type'          => 'Question',
      'name'           => $item[0],
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item[1]],
    ];
  }, $byo_faq),
];
?>
<script type="application/ld+json"><?php echo wp_json_encode($byo_table_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
<script type="application/ld+json"><?php echo wp_json_encode($byo_faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>

<?php get_footer('kodus'); ?>
