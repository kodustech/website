<?php
/*
 * Template Name: Kodus Self-Hosted AI Code Review
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
/* Scene hero: full-bleed pixel-art room, text on the empty left side.
   The card stays in the markup (hidden) in case we go back to it. */
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
.lp-shp__hero--scene .lp-shp__infra { display: none; }
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
    object-position: 78% center;
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

/* ====== Retro window terminal (reuses .retro-window styling) ====== */

/* ====== Hero card: the review loop inside your infrastructure ====== */

.lp-shp__infra {
  background: var(--color-card-lv1);
  border: 1px solid var(--color-card-lv3);
  border-radius: 12px;
  padding: 18px;
  box-shadow: 0 24px 60px rgba(0, 0, 0, .35);
}
.lp-shp__infra-head {
  display: flex;
  align-items: center;
  gap: 16px;
  margin-bottom: 18px;
}
.lp-shp__infra-badge {
  flex: none;
  display: grid;
  place-items: center;
  width: 48px;
  height: 48px;
  border-radius: 8px;
  background: var(--color-card-lv2);
  border: 1px solid var(--color-card-lv3);
  color: var(--color-primary);
}
.lp-shp__infra-badge svg { width: 24px; height: 24px; }
.lp-shp__infra-title {
  display: block;
  font-family: var(--font-mono);
  font-size: .9rem;
  letter-spacing: .06em;
  text-transform: uppercase;
  color: var(--color-text);
}
.lp-shp__infra-sub {
  display: block;
  margin-top: 4px;
  font-family: var(--font-mono);
  font-size: .78rem;
  color: var(--color-text-muted);
}

.lp-shp__infra-flow {
  display: flex;
  align-items: flex-start;
  border: 1px dashed var(--color-card-lv3);
  border-radius: 10px;
  padding: 44px 24px 36px;
}
.lp-shp__infra-step {
  flex: none;
  min-width: 76px;
  white-space: nowrap;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}
.lp-shp__infra-tile {
  display: grid;
  place-items: center;
  width: 76px;
  height: 76px;
  border-radius: 10px;
  background: var(--color-card-lv2);
  border: 1px solid var(--color-card-lv3);
  color: var(--color-text);
}
.lp-shp__infra-tile svg { width: 28px; height: 28px; }
.lp-shp__infra-tile img { width: 28px; height: 28px; display: block; }
.lp-shp__infra-name {
  margin-top: 14px;
  font-family: var(--font-sans);
  font-size: .9rem;
  color: var(--color-text);
}
.lp-shp__infra-desc {
  margin-top: 4px;
  font-family: var(--font-mono);
  font-size: .72rem;
  line-height: 1.45;
  color: var(--color-text-muted);
}

/* dashed connector with an orange packet in the middle, centered on the tiles */
.lp-shp__infra-link {
  flex: 1;
  position: relative;
  height: 76px;
  min-width: 20px;
}
.lp-shp__infra-link::before {
  content: '';
  position: absolute;
  left: 0; right: 0; top: 50%;
  border-top: 1px dashed var(--color-card-lv3);
}
.lp-shp__infra-link::after {
  content: '';
  position: absolute;
  left: 50%; top: 50%;
  width: 12px; height: 12px;
  transform: translate(-50%, -50%);
  background: var(--color-primary);
  border-radius: 2px;
}

@media (max-width: 480px) {
  .lp-shp__infra { padding: 14px; }
  .lp-shp__infra-flow { padding: 28px 10px 24px; }
  .lp-shp__infra-step { min-width: 0; width: 60px; white-space: normal; }
  .lp-shp__infra-tile { width: 52px; height: 52px; }
  .lp-shp__infra-tile svg,
  .lp-shp__infra-tile img { width: 22px; height: 22px; }
  .lp-shp__infra-link { height: 52px; min-width: 12px; }
  .lp-shp__infra-link::after { width: 8px; height: 8px; }
  .lp-shp__infra-name { font-size: .78rem; }
  .lp-shp__infra-desc { font-size: .64rem; }
}

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

/* Castle: blocked traffic bounces off the moat, torches flicker */
.lp-shp__castle { position: relative; }
.lp-shp__castle-img { display: block; width: 100%; height: auto; }
.lp-shp__castle-fx { position: absolute; inset: 0; width: 100%; height: 100%; pointer-events: none; overflow: visible; }
.castle-torch { fill: url(#castleGlow); mix-blend-mode: screen; opacity: .55; transform-box: fill-box; transform-origin: center; animation: castle-flicker 1.3s ease-in-out infinite alternate; }
.castle-torch--1 { animation-duration: 1.7s; animation-delay: -.4s; }
.castle-torch--2 { animation-duration: 1.1s; animation-delay: -.8s; }
.castle-pkt { fill: #8a93b8; }
.castle-hit { opacity: 0; animation: castle-shot 4s cubic-bezier(.4,0,.8,.4) infinite; }
.castle-x { fill: url(#castleHit); opacity: 0; transform-box: fill-box; transform-origin: center; animation: castle-block 4s ease-out infinite; }
.castle-hit--2, .castle-x--2 { animation-delay: 1s; }
.castle-hit--3, .castle-x--3 { animation-delay: 2s; }
.castle-hit--4, .castle-x--4 { animation-delay: 3s; }
@keyframes castle-flicker { 0% { opacity: .35; transform: scale(.85); } 100% { opacity: .75; transform: scale(1.15); } }
@keyframes castle-shot {
  0% { opacity: 0; transform: translate(0,0); }
  6% { opacity: 1; }
  24% { opacity: 1; transform: translate(var(--dx), var(--dy)); }
  30%, 100% { opacity: 0; transform: translate(var(--dx), var(--dy)); }
}
@keyframes castle-block {
  0%, 22% { opacity: 0; transform: scale(.4); }
  26% { opacity: 1; transform: scale(1.1); }
  40%, 100% { opacity: 0; transform: scale(1.4); }
}
@media (prefers-reduced-motion: reduce) { .lp-shp__castle-fx { display: none; } }

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

/* ============================================================
   HOW IT WORKS  ─  pixel machine tower with callouts per floor
   ============================================================ */

.lp-hw {
  padding: 112px 0 120px;
  border-top: 1px solid var(--color-card-lv2);
}
.lp-hw__head {
  text-align: center;
  margin-bottom: 56px;
}
.lp-hw__title {
  font-family: var(--font-pixel);
  font-weight: 400;
  font-size: clamp(1.6rem, 3vw, 2.4rem);
  line-height: 1.1;
  color: var(--color-text);
  margin: 0 0 16px;
}
.lp-hw__sub {
  font-family: var(--font-sans);
  font-size: 1.05rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  max-width: 44ch;
  margin: 0 auto;
  text-wrap: balance;
}

/* Tower in the middle, cards pinned to the height of their floor. */
.lp-hw__stage {
  position: relative;
  max-width: 1120px;
  margin: 0 auto;
}
.lp-hw__tower {
  display: block;
  width: 54%;
  height: auto;
  margin: 0 auto;
}
.lp-hw__card {
  position: absolute;
  width: 27%;
  transform: translateY(-50%);
  background: var(--color-card-lv1);
  border: 1px solid var(--color-card-lv3);
  border-radius: 6px;
  padding: 20px 22px 18px;
}
.lp-hw__card--left  { left: 0; }
.lp-hw__card--right { right: 0; }
.lp-hw__card--1 { top: 20%; }
.lp-hw__card--2 { top: 40.5%; }
.lp-hw__card--3 { top: 62.5%; }
.lp-hw__card--4 { top: 84%; }

/* dashed lead from the card to its floor, ending in an orange dot */
.lp-hw__card::after {
  content: '';
  position: absolute;
  top: 50%;
  border-top: 1px dashed var(--color-card-lv3);
}
.lp-hw__card::before {
  content: '';
  position: absolute;
  top: 50%;
  width: 8px;
  height: 8px;
  margin-top: -4px;
  border-radius: 50%;
  background: var(--color-primary);
}
/* lead lengths are a share of the card width, measured to the tower's walls */
.lp-hw__card--left::after  { left: 100%; width: 43%; }
.lp-hw__card--left::before { left: calc(143% - 4px); }
.lp-hw__card--right::after  { right: 100%; width: 29%; }
.lp-hw__card--right::before { right: calc(129% - 4px); }

.lp-hw__label {
  display: block;
  font-family: var(--font-mono);
  font-size: .78rem;
  font-weight: 700;
  letter-spacing: .14em;
  text-transform: uppercase;
  color: var(--color-primary);
  padding-bottom: 12px;
  margin-bottom: 14px;
  border-bottom: 1px solid var(--color-card-lv3);
}
.lp-hw__h {
  font-family: var(--font-pixel);
  font-weight: 400;
  font-size: 1.05rem;
  line-height: 1.25;
  color: var(--color-text);
  margin: 0 0 16px;
}

.lp-hw__tools {
  display: flex;
  gap: 6px;
}
.lp-hw__tool {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 6px;
  flex: 1 1 0;
  min-width: 0;
  padding: 10px 2px 8px;
  border: 1px solid var(--color-card-lv3);
  border-radius: 6px;
  background: var(--color-card-lv2);
  font-family: var(--font-mono);
  font-size: .62rem;
  color: var(--color-text-muted);
  white-space: nowrap;
}
.lp-hw__tool svg { width: 20px; height: 20px; color: var(--color-text); }

.lp-hw__list {
  list-style: none;
  margin: 0;
  padding: 0;
  display: grid;
  gap: 10px;
}
.lp-hw__list li {
  display: flex;
  align-items: center;
  gap: 12px;
  font-family: var(--font-mono);
  font-size: .8rem;
  color: var(--color-text-muted);
}
.lp-hw__list svg {
  flex: none;
  width: 18px;
  height: 18px;
  fill: none;
  stroke: var(--color-primary);
  stroke-width: 1.6;
  stroke-linecap: round;
  stroke-linejoin: round;
}

/* Below desktop the cards can't sit beside the tower: stack them under it. */
@media (max-width: 1024px) {
  .lp-hw__stage {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
    max-width: 720px;
  }
  .lp-hw__tower {
    grid-column: 1 / -1;
    width: min(420px, 80%);
    margin-bottom: 24px;
  }
  .lp-hw__card { position: static; width: auto; transform: none; }
  .lp-hw__card::before,
  .lp-hw__card::after { display: none; }
}
@media (max-width: 600px) {
  .lp-hw { padding: 80px 0 88px; }
  .lp-hw__stage { grid-template-columns: 1fr; }
  .lp-hw__tower { width: 100%; }
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
</style>

<main class="lp-shp">

  <!-- ========== HERO ========== -->
  <section class="lp-shp__hero lp-shp__hero--scene">
    <img class="lp-shp__hero-bg"
         src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-self-hosted-room.webp"
         srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-self-hosted-room-960.webp 960w, <?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero-self-hosted-room.webp 1672w"
         sizes="100vw" alt="" loading="eager" fetchpriority="high" decoding="async">
    <div class="container">
      <div class="lp-shp__hero-grid">
        <div>
          <h1 class="lp-shp__hero-title">
            Self-hosted AI code review.
          </h1>
          <p class="lp-shp__hero-sub">
            Open source AI code review without vendor lock&#8209;in. Runs on your infrastructure, with the LLM you choose.
          </p>

          <div class="lp-shp__hero-ctas">
            <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--primary" id="lpSelfHostedDocsBtn">Install on a VM</a>
            <a href="https://github.com/kodustech/kodus-installer" target="_blank" rel="noopener" class="btn btn--outline-light" id="lpSelfHostedGithubBtn">Get the installer</a>
          </div>
          <p class="lp-shp__hero-proof">Trusted by <strong>5,000+ teams</strong> around the world</p>
        </div>

        <div class="lp-shp__infra" role="img" aria-label="Inside your infrastructure: a pull request goes to Kody, Kody calls your LLM, and the review comes back as comments.">
          <div class="lp-shp__infra-head">
            <span class="lp-shp__infra-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3.5" width="16" height="5" rx="1.5"/><rect x="4" y="9.5" width="16" height="5" rx="1.5"/><rect x="4" y="15.5" width="16" height="5" rx="1.5"/><path d="M7.5 6h.01M7.5 12h.01M7.5 18h.01"/></svg>
            </span>
            <div>
              <span class="lp-shp__infra-title">Your infrastructure</span>
              <span class="lp-shp__infra-sub">On-prem &middot; Your cloud &middot; Your rules</span>
            </div>
          </div>

          <div class="lp-shp__infra-flow">
            <div class="lp-shp__infra-step">
              <span class="lp-shp__infra-tile">
                <svg viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
              </span>
              <span class="lp-shp__infra-name">Pull Request</span>
              <span class="lp-shp__infra-desc">GitHub / GitLab</span>
            </div>
            <span class="lp-shp__infra-link" aria-hidden="true"></span>
            <div class="lp-shp__infra-step">
              <span class="lp-shp__infra-tile">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus-mark.webp" alt="" width="28" height="28">
              </span>
              <span class="lp-shp__infra-name">Kody</span>
              <span class="lp-shp__infra-desc">Code review</span>
            </div>
            <span class="lp-shp__infra-link" aria-hidden="true"></span>
            <div class="lp-shp__infra-step">
              <span class="lp-shp__infra-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="6" width="12" height="12" rx="2"/><rect x="9.5" y="9.5" width="5" height="5" rx=".5"/><path d="M9.5 2.5V6M14.5 2.5V6M9.5 18v3.5M14.5 18v3.5M2.5 9.5H6M2.5 14.5H6M18 9.5h3.5M18 14.5h3.5"/></svg>
              </span>
              <span class="lp-shp__infra-name">Your LLM</span>
              <span class="lp-shp__infra-desc">Any model</span>
            </div>
            <span class="lp-shp__infra-link" aria-hidden="true"></span>
            <div class="lp-shp__infra-step">
              <span class="lp-shp__infra-tile">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3.5h9l4 4V19a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 5 19V5a1.5 1.5 0 0 1 1-1.5z"/><path d="M8.5 10h7M8.5 13.5h7M8.5 17h4"/></svg>
              </span>
              <span class="lp-shp__infra-name">Review</span>
              <span class="lp-shp__infra-desc">Comments,<br>suggestions</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== DEFINITION (AI Mode snippet) ========== -->
  <section class="lp-shp__def" aria-label="What is self-hosted AI code review">
    <div class="container">
      <div class="lp-shp__def-inner">
        <span class="lp-shp__def-tag">What it is</span>
        <p class="lp-shp__def-text">
          <strong>Self-hosted AI code review</strong> is when the AI that reviews your pull requests runs on your own infrastructure, not on a vendor's cloud.
        </p>
        <p class="lp-shp__def-note">
          Source code, LLM calls, and review history stay inside the network your team controls.
        </p>
      </div>
      <div class="lp-shp__def-art lp-shp__castle">
          <img class="lp-shp__castle-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/self-hosted-castle.webp" width="1080" height="810" alt="A pixel-art castle surrounded by a moat, holding your repos, Kodus and your LLM inside its walls, with reviews crossing the drawbridge." loading="lazy" decoding="async">
          <svg class="lp-shp__castle-fx" viewBox="0 0 1080 810" aria-hidden="true">
            <defs>
              <radialGradient id="castleGlow"><stop offset="0" stop-color="#F8B76D" stop-opacity=".9"/><stop offset="1" stop-color="#F8B76D" stop-opacity="0"/></radialGradient>
              <radialGradient id="castleHit"><stop offset="0" stop-color="#FA5867" stop-opacity=".75"/><stop offset="1" stop-color="#FA5867" stop-opacity="0"/></radialGradient>
            </defs>
            <circle class="castle-torch castle-torch--0" cx="355" cy="288" r="14"/><circle class="castle-torch castle-torch--1" cx="623" cy="288" r="14"/><circle class="castle-torch castle-torch--2" cx="355" cy="498" r="14"/><circle class="castle-torch castle-torch--0" cx="622" cy="498" r="14"/><circle class="castle-torch castle-torch--1" cx="288" cy="405" r="14"/><circle class="castle-torch castle-torch--2" cx="670" cy="410" r="14"/>
            <g class="castle-hit castle-hit--1" style="--dx:61px;--dy:30px">
              <rect class="castle-pkt" x="144" y="114" width="12" height="12" rx="2"/>
            </g>
            <circle class="castle-x castle-x--1" cx="211" cy="150" r="26"/>
            <g class="castle-hit castle-hit--2" style="--dx:-50px;--dy:30px">
              <rect class="castle-pkt" x="864" y="114" width="12" height="12" rx="2"/>
            </g>
            <circle class="castle-x castle-x--2" cx="820" cy="150" r="26"/>
            <g class="castle-hit castle-hit--3" style="--dx:60px;--dy:-28px">
              <rect class="castle-pkt" x="144" y="684" width="12" height="12" rx="2"/>
            </g>
            <circle class="castle-x castle-x--3" cx="210" cy="662" r="26"/>
            <g class="castle-hit castle-hit--4" style="--dx:-69px;--dy:-30px">
              <rect class="castle-pkt" x="869" y="694" width="12" height="12" rx="2"/>
            </g>
            <circle class="castle-x castle-x--4" cx="806" cy="670" r="26"/>
          </svg>
        </div>
    </div>
  </section>

  <!-- ========== BOUNDARY ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">What stays on your infrastructure when you <span class="highlight">self-host Kodus</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        When you self-host Kodus, the web app, API, worker, webhooks and databases all run on your servers. The only code that leaves is what you send to your LLM provider, and that provider can be a model running inside your network.
      </p>

      <div class="lp-shp__bnd-grid">
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-sovereignty.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>Your repos and review data stay on your servers</h3>
          <p>Webhooks arrive on your domain and Kodus reads diffs straight from your Git host. Review history and embeddings are stored in your own Postgres and MongoDB. Kodus, the company, never gets a copy.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-painel.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>You choose where LLM calls go</h3>
          <p>Use OpenAI, Anthropic, Google or Groq with your own API key, or an OpenAI-compatible model you run yourself with vLLM, Ollama, TGI or LiteLLM. Kodus doesn't proxy those calls.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-taxa.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>Logs stay in your stack</h3>
          <p>The containers running on your servers write the logs, so they go wherever you already collect container logs. Retention and access follow your own policy.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-config.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>Open source under AGPLv3</h3>
          <p>You can read, fork and audit the code. Docker images are pinned to tagged releases, so you upgrade when you decide to. Nothing in the product needs a Kodus server to keep running.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== HOW KODY REVIEWS ========== -->
  <section class="lp-hw">
    <div class="container">
      <div class="lp-hw__head">
        <h2 class="lp-hw__title">How it works</h2>
        <p class="lp-hw__sub">From a pull request to useful feedback, in four steps. All of it inside your network.</p>
      </div>

      <div class="lp-hw__stage">
        <img class="lp-hw__tower" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/how-it-works-tower.webp" width="1024" height="1536" alt="A pixel-art machine with four floors: trigger, context, review and output, with Kody working on each floor." loading="lazy" decoding="async">
        <article class="lp-hw__card lp-hw__card--1 lp-hw__card--left">
          <span class="lp-hw__label">01 / Trigger</span>
          <h3 class="lp-hw__h">PRs can start from your Git host or the CLI.</h3>
          <div class="lp-hw__tools"><span class="lp-hw__tool"><svg viewBox="0 0 16 16" fill="currentColor" aria-hidden="true"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>GitHub</span><span class="lp-hw__tool"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 01-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 014.82 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0118.6 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.51L23 13.45a.84.84 0 01-.35.94z"/></svg>GitLab</span><span class="lp-hw__tool"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M2.65 3A1 1 0 001.66 4.18l2.75 17.63a1.36 1.36 0 001.33 1.14h12.9a1 1 0 001-.85l2.75-17.92A1 1 0 0021.35 3zm11.59 12.83H9.84L8.9 9.57h6.28z"/></svg>Bitbucket</span><span class="lp-hw__tool"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3.5" y="4.5" width="17" height="15" rx="1.5"/><path d="M7.5 9.5l3 2.5-3 2.5M12.5 15h4"/></svg>CLI</span></div>
        </article>
        <article class="lp-hw__card lp-hw__card--2 lp-hw__card--right">
          <span class="lp-hw__label">02 / Context</span>
          <h3 class="lp-hw__h">Kodus builds the picture before it writes anything.</h3>
          <ul class="lp-hw__list"><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 7l-5 5 5 5M16 7l5 5-5 5"/></svg>Your codebase</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3.5h8l4 4V20a.5.5 0 0 1-.5.5h-11A.5.5 0 0 1 6 20z"/><path d="M9 12h6M9 15.5h6"/></svg>Docs and READMEs</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6h11M9 12h11M9 18h11"/><path d="M4 6l1 1 2-2M4 12l1 1 2-2M4 18l1 1 2-2"/></svg>Your Kody Rules</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="5" width="17" height="14" rx="1.5"/><path d="M8 9h8M8 12.5h8M8 16h5"/></svg>Issues and tickets</li></ul>
        </article>
        <article class="lp-hw__card lp-hw__card--3 lp-hw__card--left">
          <span class="lp-hw__label">03 / Review</span>
          <h3 class="lp-hw__h">Kody reviews the change with all of that context.</h3>
          <ul class="lp-hw__list"><li><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="7.5" y="7" width="9" height="12" rx="4.5"/><path d="M12 7v12M4 11h3.5M16.5 11H20M4 16h3.5M16.5 16H20M9 4l1.5 3M15 4l-1.5 3"/></svg>Bugs and edge cases</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5l7 2.5v5.5c0 4.5-3 7.8-7 9-4-1.2-7-4.5-7-9V6z"/><path d="M9 12l2 2 4-4"/></svg>Security issues</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 3L5 13.5h6L10 21l8-10.5h-6z"/></svg>Performance problems</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 6h11M9 12h11M9 18h11"/><path d="M4 6l1 1 2-2M4 12l1 1 2-2M4 18l1 1 2-2"/></svg>Your team's Kody Rules</li></ul>
        </article>
        <article class="lp-hw__card lp-hw__card--4 lp-hw__card--right">
          <span class="lp-hw__label">04 / Output</span>
          <h3 class="lp-hw__h">Findings come back on the PR or in the CLI.</h3>
          <ul class="lp-hw__list"><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5.5h16v10H10l-4 3.5v-3.5H4z"/></svg>Inline comments</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="6.5" cy="6" r="2"/><circle cx="6.5" cy="18" r="2"/><circle cx="17.5" cy="12" r="2"/><path d="M6.5 8v8M8.5 6c5 0 9 1.5 9 4"/></svg>Suggested changes</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12.5l5 5L20 6.5"/></svg>Approve or request changes</li><li><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="4.5" width="17" height="15" rx="1.5"/><path d="M7.5 9.5l3 2.5-3 2.5M12.5 15h4"/></svg>Works in the CLI too</li></ul>
        </article>
      </div>
    </div>
  </section>


  <!-- ========== AIR-GAPPED ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">Running Kodus in an <span class="highlight">air-gapped network</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Kodus can run with no outbound internet access. There's no packaged air-gap installer yet, so you set it up in four steps.
      </p>
      <ol class="lp-shp__steps">
        <li>
          <h3>Mirror the container images</h3>
          <p>Push the <code>ghcr.io/kodustech/*</code> images to your private registry and pin <code>KODUS_VERSION</code> in <code>.env</code>, so every deploy uses the same versions without reaching the internet.</p>
        </li>
        <li>
          <h3>Run the LLM inside the network</h3>
          <p>Set <code>API_OPENAI_FORCE_BASE_URL</code> to an OpenAI-compatible server you operate, such as vLLM, Ollama, TGI or LiteLLM.</p>
        </li>
        <li>
          <h3>Use a self-managed Git host</h3>
          <p>Connect GitHub Enterprise Server, GitLab Self-Managed or Bitbucket Data Center on the same network, so webhooks never cross the boundary.</p>
        </li>
        <li>
          <h3>Turn off telemetry</h3>
          <p>Set <code>KODUS_TELEMETRY_DISABLED=true</code>. The anonymous daily heartbeat is the only outbound call Kodus makes by default.</p>
        </li>
      </ol>
    </div>
  </section>

  <!-- ========== BYOK ========== -->
  <section class="lp-shp__section lp-shp__byok-section">
    <div class="container">
      <div class="lp-shp__byok-grid">
        <div>
          <h2 class="lp-shp__title">Which LLMs work with <span class="highlight">self-hosted Kodus</span></h2>
          <p class="lp-shp__lede">
            Any provider with an OpenAI-compatible API. You set three variables in <code>.env</code> and Kodus calls that endpoint with your own key, so you pay the provider directly with no markup.
          </p>

          <div class="lp-shp__pills">
            <span class="lp-shp__pill">OpenAI</span>
            <span class="lp-shp__pill">Anthropic</span>
            <span class="lp-shp__pill">Google</span>
            <span class="lp-shp__pill">Vertex AI</span>
            <span class="lp-shp__pill">Novita</span>
            <span class="lp-shp__pill">Groq</span>
            <span class="lp-shp__pill">Cerebras</span>
            <span class="lp-shp__pill">Together AI</span>
            <span class="lp-shp__pill">Fireworks</span>
            <span class="lp-shp__pill">Moonshot / Kimi</span>
            <span class="lp-shp__pill">Z.ai / GLM</span>
            <span class="lp-shp__pill">Chutes</span>
            <span class="lp-shp__pill">Synthetic</span>
            <span class="lp-shp__pill lp-shp__pill--accent">+ any OpenAI-compatible</span>
          </div>
        </div>

        <div class="lp-shp__tabs" role="tablist">
          <input type="radio" name="byok-tab" id="byok-openai" checked>
          <input type="radio" name="byok-tab" id="byok-anthropic">
          <input type="radio" name="byok-tab" id="byok-google">
          <input type="radio" name="byok-tab" id="byok-local">

          <div class="lp-shp__tabs-nav">
            <label for="byok-openai">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/openai.webp" alt="" loading="lazy">
              <span>OpenAI</span>
            </label>
            <label for="byok-anthropic">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/anthropic.webp" alt="" loading="lazy">
              <span>Anthropic</span>
            </label>
            <label for="byok-google">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gemini.webp" alt="" loading="lazy">
              <span>Gemini</span>
            </label>
            <label for="byok-local">
              <svg viewBox="0 0 16 16" shape-rendering="crispEdges" fill="currentColor">
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
<pre><span class="c"># Same 3 vars for every provider.</span>
<span class="c"># Swap the base URL, swap the model, you are done.</span>
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
<pre><span class="c"># Gemini exposes an OpenAI-compatible endpoint.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"https://generativelanguage.googleapis.com/v1beta/openai"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"..."</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">gemini-3.8-flash</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-local">
<pre><span class="c"># Same 3 vars. Point at your own gateway.</span>
<span class="c"># vLLM, Ollama, LiteLLM, TGI, any OpenAI-compatible server.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"http://llm.internal.your-co/v1"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"sk-local-anything"</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">your-local-model</span></pre>
            </div>
          </div>

          <p class="lp-shp__tabs-note">The same three variables work for every provider. Only the base URL, key and model name change.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== COMPETITOR COMPARISON ========== -->
  <section class="lp-shp__section lp-shp__section--tinted" id="comparison">
    <div class="container">
      <h2 class="lp-shp__title">Self-hosted AI code review <span class="highlight">tools compared</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        What each tool offers if you want to run AI code review on your own infrastructure. Checked against each vendor's docs and pricing pages in September 2026.
      </p>
      <div class="lp-shp__cmp-wrap">
        <table class="lp-shp__cmp" aria-label="Self-hosted AI code review tools compared">
          <thead>
            <tr>
              <th style="width: 19%;">Capability</th>
              <th class="kodus"><span class="lp-shp__cmp-brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus_dark.webp" class="lp-shp__cmp-logo" alt="Kodus"></span></th>
              <th><span class="lp-shp__cmp-brand">PR-Agent</span></th>
              <th><span class="lp-shp__cmp-brand">Qodo</span></th>
              <th><span class="lp-shp__cmp-brand">CodeRabbit</span></th>
              <th><span class="lp-shp__cmp-brand">Greptile</span></th>
              <th><span class="lp-shp__cmp-brand">SonarQube</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Self-host</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Free Community edition, any team size</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Free</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise plan</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise, 500+ seats</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise plan</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise and Data Center editions</span></td>
            </tr>
            <tr>
              <td>Open source</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">AGPLv3</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">MIT</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Community Build only, without AI CodeFix</span></td>
            </tr>
            <tr>
              <td>Bring your own LLM</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Any OpenAI-compatible API</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Any LiteLLM provider</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">API keys, Enterprise only</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">OpenAI, Azure OpenAI, Bedrock</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">OpenAI-compatible APIs, Bedrock</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Azure OpenAI, Bedrock, self-hosted gateway</span></td>
            </tr>
            <tr>
              <td>Model running inside your network</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">vLLM, Ollama, TGI, LiteLLM</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Ollama and others via LiteLLM</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--dash">Not documented</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--dash">Not documented</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Custom base URL</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Ollama, vLLM, LiteLLM</span></td>
            </tr>
            <tr>
              <td>Air-gapped deployment</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--part">Possible, manual setup</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--dash">Not documented</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--dash">Not documented</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Documented</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">With your own LLM</span></td>
            </tr>
            <tr>
              <td>Self-managed Git hosts</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">GHES, GitLab Self-Managed, Bitbucket DC</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">GHES, GitLab, Bitbucket</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">GitHub, GitLab, Bitbucket, Gerrit</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">GHES, GitLab Self-Managed, Bitbucket DC</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">GitHub, GitLab, Bitbucket</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">GitHub, GitLab, Bitbucket DC</span></td>
            </tr>
            <tr>
              <td>Azure DevOps</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Coming soon</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
            </tr>
            <tr>
              <td>Web app for setup and review history</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">All editions</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">CLI and config files</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Team and Enterprise plans</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Settings UI</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--dash">Not documented for self-hosted</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
            </tr>
            <tr>
              <td>SSO (SAML)</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise, documented for cloud</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise, not confirmed for self-hosted</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise, documented for self-hosted</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">All editions</span></td>
            </tr>
            <tr>
              <td>Role-based access control</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Team and Enterprise plans</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Admin and member roles</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">All editions</span></td>
            </tr>
            <tr>
              <td>Audit logs</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--dash">Not documented</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise and above</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ========== USE CASES ========== -->
  <section class="lp-shp__section">
    <div class="container">
      <h2 class="lp-shp__title">Who self-hosts <span class="highlight">AI code review</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Teams whose code can't be sent to a third-party service. Most of them fall into one of these four groups.
      </p>
      <div class="lp-shp__cases-grid">
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-money.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Financial services</span>
          <h3>Keep code review inside your PCI scope</h3>
          <p>Run Kodus in the network segment you already audit. Pair it with a model you host and code review adds no new third-party processor to your PCI-DSS report.</p>
        </div>
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-doctor.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Healthcare</span>
          <h3>No code review vendor to sign a BAA with</h3>
          <p>Kodus runs on your HIPAA-covered infrastructure, so there is no review vendor in the loop. If you use a hosted LLM, that provider is the one to review.</p>
        </div>
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-sovereignty.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Data residency</span>
          <h3>Keep review data in your region</h3>
          <p>Deploy Kodus in the region where your data has to stay for GDPR or LGPD. Review history and embeddings are stored there and nowhere else.</p>
        </div>
        <div class="lp-shp__case">
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-ninja.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Proprietary code</span>
          <h3>Review unreleased code where it already lives</h3>
          <p>Proprietary algorithms and unreleased features are reviewed on your own servers. Point Kodus at a model you run and nothing leaves the network.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SECURITY ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">Security controls in <span class="highlight">self-hosted Kodus</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        The Community edition (AGPLv3) and Enterprise run on the same Docker stack. Enterprise adds SSO, role-based access and audit logs. The <a href="https://docs.kodus.io/how_to_use/en/security/sso" style="color: var(--color-primary);">security docs</a> and the <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/telemetry" style="color: var(--color-primary);">telemetry policy</a> have the details.
      </p>
      <div class="lp-shp__ctl">
        <div class="lp-shp__ctl-col">
          <span class="lp-shp__ctl-tier">All editions</span>
          <ul>
          <li><h3>Open source code</h3><p>The code is on GitHub under AGPLv3, with tagged releases and security advisories published on the repo. Your security team can diff every upgrade.</p></li>
          <li><h3>Secrets stay in your store</h3><p>API keys, LLM tokens, OAuth secrets and webhook signatures stay in your secret store. Kodus reads them at runtime inside your containers.</p></li>
          </ul>
        </div>
        <div class="lp-shp__ctl-col">
          <span class="lp-shp__ctl-tier lp-shp__ctl-tier--ee">Enterprise</span>
          <ul>
          <li><h3>SSO with SAML 2.0</h3><p>Works with Okta, Microsoft Entra, Google Workspace and any other SAML 2.0 identity provider.</p></li>
          <li><h3>Role-based access</h3><p>Roles live in your database and scope access per repository, rule and analytics view.</p></li>
          <li><h3>Audit logs</h3><p>Every workspace action is recorded with actor, target and timestamp, and can be forwarded to Datadog, Splunk, Loki or ELK.</p></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ (theme classes) ========== -->
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
          <span class="faq__bar-title">kodus-self-hosted-faq(1)</span>
          <span class="faq__bar-status">bash</span>
        </div>
        <div class="faq__body">
          <div class="faq__man-header">
            <span class="faq__man-section">KODUS-FAQ(1)</span>
            <span class="faq__man-center">Self-Hosted Edition</span>
            <span class="faq__man-section">KODUS-FAQ(1)</span>
          </div>

          <div class="faq__list">
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">What is self-hosted AI code review?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Self-hosted AI code review means the tool that reviews your pull requests runs on infrastructure you control, on-prem or in your own cloud account, instead of on the vendor's servers. Your repositories, review history and LLM settings stay with you.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">Which AI code review tools can be self-hosted?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>As of September 2026, Kodus (AGPLv3) and PR-Agent (MIT) are open source and free to self-host at any team size. Qodo, Greptile and CodeRabbit offer self-hosted deployments on their Enterprise plans, and CodeRabbit's requires at least 500 seats. SonarQube's AI CodeFix runs self-hosted on its Enterprise and Data Center editions.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">Is Kodus self-hosted end to end?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes. The web app, API, worker, webhooks, RabbitMQ, Postgres (with pgvector) and MongoDB all run on your Docker host, installed with the <code>kodus-installer</code> repo. The code is AGPLv3, and the product doesn't need to call home to run.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">Can Kodus run on-prem or as a single-tenant deployment?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes. Every self-hosted Kodus install is single-tenant: one deployment for your company, on your own servers, a VM or your own cloud account. Any host that runs Docker works, and Linux is recommended.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">Does Kodus work with GitHub Enterprise Server?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes. Kodus supports GitHub Enterprise Server, GitLab Self-Managed and Bitbucket Data Center, as well as GitHub, GitLab, Bitbucket and Azure DevOps in the cloud, and Forgejo or Gitea. Self-managed hosts use the same webhook signing and OAuth flows, so if your Git host is internal, the whole review runs inside your network.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">What infrastructure do I need to self-host Kodus?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Docker with the Compose plugin, a domain or fixed IP your Git host can send webhooks to, and a machine with at least 8 GB of RAM. For repositories over 100k lines of code, plan for 16 GB and give the worker container 4 to 8 GB of that. Default ports are 3000 (web), 3001 (API), 3332 (webhooks), 5432 (Postgres), 27017 (MongoDB) and 5672, 15672 and 15692 (RabbitMQ).</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">Which LLMs does self-hosted Kodus support?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>OpenAI, Anthropic, Google Gemini, Google Vertex AI, Novita, Groq, Cerebras, Together AI, Fireworks, Chutes, Moonshot (Kimi), Synthetic and Z.ai (GLM) are supported directly. Anything else with an OpenAI-compatible API works through <code>API_OPENAI_FORCE_BASE_URL</code>, including a vLLM, TGI or Ollama server inside your network.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">Can I run Kodus air-gapped?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes, with some setup on your side. Mirror the Docker images to a private registry, point Kodus at an OpenAI-compatible LLM inside your network and set <code>KODUS_TELEMETRY_DISABLED=true</code>. Kodus doesn't need outbound traffic to run. There's no packaged air-gap installer yet, so the mirroring is up to you.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">What's the difference between Kodus Community and Enterprise?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Community is the AGPLv3 codebase: free, open source, and you can self-host it or use our cloud. Enterprise adds SSO, RBAC, audit logs and analytics under a commercial license, turned on with <code>KODUS_LICENSE_KEY</code>. Files marked <code>.ee.</code> in the repo are the Enterprise parts.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">How do updates work?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Kodus ships tagged releases on GitHub with pinned Docker images, selected with <code>KODUS_VERSION</code>. You roll a new tag out through your own change process, since there is no auto-update. Security advisories are published on the repo with CVE references.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">What does Kodus collect from a self-hosted deployment?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>An anonymous daily heartbeat with aggregate counters such as PRs reviewed, integrations enabled, uptime and Node version. It never includes source code, PR titles, identifiers or LLM traffic. You can inspect it with <code>yarn telemetry:preview</code> and turn it off with <code>KODUS_TELEMETRY_DISABLED=true</code>.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">How long does it take to install?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>The production install uses the <code>kodus-installer</code> repo: clone it, fill in <code>.env</code> and run <code>./scripts/install.sh</code>. The script generates secrets, creates the Docker networks, pulls the <code>ghcr.io/kodustech/*</code> images and waits for health checks. Plan 15 to 30 minutes for the first deployment and a few minutes for later ones.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">How does Kodus compare to PR-Agent?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Both are open source and free to self-host. PR-Agent is MIT-licensed and describes itself as a community-maintained legacy project of Qodo; it runs as a CLI, a GitHub Action or a webhook service. Kodus is AGPLv3 and includes a web app for configuration and review history, Kody Rules for your team's own review rules, and an optional hosted cloud if you'd rather not run it yourself.</p>
              </div>
            </div>
            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">How does Kodus compare to CodeRabbit for self-hosting?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>CodeRabbit's self-hosted version is part of its Enterprise plan for teams of 500 or more seats, and it works with OpenAI, Azure OpenAI and Amazon Bedrock models. Kodus can be self-hosted for free at any team size under AGPLv3, and works with any OpenAI-compatible model, including one running inside your own network. The comparison table above covers other tools.</p>
              </div>
            </div>

          </div>

          <div class="faq__man-footer">
            <span class="faq__man-section">Kodus v2.0</span>
            <span class="faq__man-center">2026-09-24</span>
            <span class="faq__man-section">KODUS-FAQ(1)</span>
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
            Run Kodus on <span class="highlight">your own infrastructure</span>
          </h2>
          <p class="lp-shp__final-sub">
            Clone the repo, fill in <code>.env</code> and start it with Docker Compose. A first production install usually takes 15 to 30 minutes.
          </p>
          <div class="lp-shp__final-ctas">
            <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--primary" id="lpSelfHostedFinalDocsBtn">Install on a VM</a>
            <a href="https://docs.kodus.io/how_to_deploy/en/local_quickstart/orchestrator" class="btn btn--outline-light" id="lpSelfHostedFinalLocalBtn">Local quickstart</a>
          </div>
          <div class="lp-shp__final-aside">
            <a href="https://github.com/kodustech/kodus-ai" target="_blank" rel="noopener" id="lpSelfHostedFinalGithubBtn">Star kodus-ai on GitHub</a>
          </div>
        </div>

        <div class="lp-shp__final-terminal" aria-hidden="true">
          <div class="lp-shp__final-terminal-bar">
            <i></i><i></i><i></i>
            <span>your-laptop &middot; zsh</span>
          </div>
          <div class="lp-shp__final-terminal-body">
<span class="lp-shp__final-terminal-line">git clone github.com/kodustech/kodus-ai</span>
<span class="lp-shp__final-terminal-line">cd kodus-ai && cp .env.example .env</span>
<span class="lp-shp__final-terminal-line">docker compose up -d</span>
<span class="lp-shp__final-terminal-line lp-shp__final-terminal-line--ok">kodus running at http://localhost:3000</span>
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
  "name": "Kodus Self-Hosted",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Linux, Docker",
  "url": "https://kodus.io/self-hosted-ai-code-review/",
  "description": "Kodus is an open source (AGPLv3) AI code review tool you can self-host with Docker Compose, on-prem or in your own cloud. It works with GitHub, GitHub Enterprise Server, GitLab Self-Managed, Bitbucket Data Center and Azure DevOps, and with any OpenAI-compatible LLM, including models you run yourself with vLLM or Ollama.",
  "license": "https://www.gnu.org/licenses/agpl-3.0.html",
  "softwareVersion": "2.0",
  "downloadUrl": "https://github.com/kodustech/kodus-ai",
  "softwareRequirements": "Docker, 2+ CPU cores, 8 GB RAM, 60 GB disk",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD",
    "description": "Community Edition under AGPLv3"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Kodus",
    "url": "https://kodus.io/"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Table",
  "about": "Comparison of self-hosted AI code review tools (checked September 2026)",
  "name": "Self-hosted AI code review tools compared: Kodus, PR-Agent, Qodo, CodeRabbit, Greptile, SonarQube",
  "url": "https://kodus.io/self-hosted-ai-code-review/#comparison",
  "isPartOf": {
    "@type": "WebPage",
    "url": "https://kodus.io/self-hosted-ai-code-review/"
  },
  "mainEntity": [
    {
      "@type": "PropertyValue",
      "name": "Self-host",
      "value": "Kodus: Free Community edition, any team size; PR-Agent: Free; Qodo: Enterprise plan; CodeRabbit: Enterprise, 500+ seats; Greptile: Enterprise plan; SonarQube: Enterprise and Data Center editions"
    },
    {
      "@type": "PropertyValue",
      "name": "Open source",
      "value": "Kodus: AGPLv3; PR-Agent: MIT; Qodo: No; CodeRabbit: No; Greptile: No; SonarQube: Community Build only, without AI CodeFix"
    },
    {
      "@type": "PropertyValue",
      "name": "Bring your own LLM",
      "value": "Kodus: Any OpenAI-compatible API; PR-Agent: Any LiteLLM provider; Qodo: API keys, Enterprise only; CodeRabbit: OpenAI, Azure OpenAI, Bedrock; Greptile: OpenAI-compatible APIs, Bedrock; SonarQube: Azure OpenAI, Bedrock, self-hosted gateway"
    },
    {
      "@type": "PropertyValue",
      "name": "Model running inside your network",
      "value": "Kodus: vLLM, Ollama, TGI, LiteLLM; PR-Agent: Ollama and others via LiteLLM; Qodo: Not documented; CodeRabbit: Not documented; Greptile: Custom base URL; SonarQube: Ollama, vLLM, LiteLLM"
    },
    {
      "@type": "PropertyValue",
      "name": "Air-gapped deployment",
      "value": "Kodus: Possible, manual setup; PR-Agent: Not documented; Qodo: Enterprise; CodeRabbit: Not documented; Greptile: Documented; SonarQube: With your own LLM"
    },
    {
      "@type": "PropertyValue",
      "name": "Self-managed Git hosts",
      "value": "Kodus: GHES, GitLab Self-Managed, Bitbucket DC; PR-Agent: GHES, GitLab, Bitbucket; Qodo: GitHub, GitLab, Bitbucket, Gerrit; CodeRabbit: GHES, GitLab Self-Managed, Bitbucket DC; Greptile: GitHub, GitLab, Bitbucket; SonarQube: GitHub, GitLab, Bitbucket DC"
    },
    {
      "@type": "PropertyValue",
      "name": "Azure DevOps",
      "value": "Kodus: Yes; PR-Agent: Yes; Qodo: Yes; CodeRabbit: Yes; Greptile: Coming soon; SonarQube: Yes"
    },
    {
      "@type": "PropertyValue",
      "name": "Web app for setup and review history",
      "value": "Kodus: All editions; PR-Agent: CLI and config files; Qodo: Team and Enterprise plans; CodeRabbit: Settings UI; Greptile: Not documented for self-hosted; SonarQube: Yes"
    },
    {
      "@type": "PropertyValue",
      "name": "SSO (SAML)",
      "value": "Kodus: Enterprise; PR-Agent: No; Qodo: Enterprise, documented for cloud; CodeRabbit: Enterprise, not confirmed for self-hosted; Greptile: Enterprise, documented for self-hosted; SonarQube: All editions"
    },
    {
      "@type": "PropertyValue",
      "name": "Role-based access control",
      "value": "Kodus: Enterprise; PR-Agent: No; Qodo: Team and Enterprise plans; CodeRabbit: Enterprise; Greptile: Admin and member roles; SonarQube: All editions"
    },
    {
      "@type": "PropertyValue",
      "name": "Audit logs",
      "value": "Kodus: Enterprise; PR-Agent: No; Qodo: Enterprise; CodeRabbit: Enterprise; Greptile: Not documented; SonarQube: Enterprise and above"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is self-hosted AI code review?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Self-hosted AI code review means the tool that reviews your pull requests runs on infrastructure you control, on-prem or in your own cloud account, instead of on the vendor's servers. Your repositories, review history and LLM settings stay with you."
      }
    },
    {
      "@type": "Question",
      "name": "Which AI code review tools can be self-hosted?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "As of September 2026, Kodus (AGPLv3) and PR-Agent (MIT) are open source and free to self-host at any team size. Qodo, Greptile and CodeRabbit offer self-hosted deployments on their Enterprise plans, and CodeRabbit's requires at least 500 seats. SonarQube's AI CodeFix runs self-hosted on its Enterprise and Data Center editions."
      }
    },
    {
      "@type": "Question",
      "name": "Is Kodus self-hosted end to end?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. The web app, API, worker, webhooks, RabbitMQ, Postgres (with pgvector) and MongoDB all run on your Docker host, installed with the kodus-installer repo. The code is AGPLv3, and the product doesn't need to call home to run."
      }
    },
    {
      "@type": "Question",
      "name": "Can Kodus run on-prem or as a single-tenant deployment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every self-hosted Kodus install is single-tenant: one deployment for your company, on your own servers, a VM or your own cloud account. Any host that runs Docker works, and Linux is recommended."
      }
    },
    {
      "@type": "Question",
      "name": "Does Kodus work with GitHub Enterprise Server?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Kodus supports GitHub Enterprise Server, GitLab Self-Managed and Bitbucket Data Center, as well as GitHub, GitLab, Bitbucket and Azure DevOps in the cloud, and Forgejo or Gitea. Self-managed hosts use the same webhook signing and OAuth flows, so if your Git host is internal, the whole review runs inside your network."
      }
    },
    {
      "@type": "Question",
      "name": "What infrastructure do I need to self-host Kodus?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Docker with the Compose plugin, a domain or fixed IP your Git host can send webhooks to, and a machine with at least 8 GB of RAM. For repositories over 100k lines of code, plan for 16 GB and give the worker container 4 to 8 GB of that. Default ports are 3000 (web), 3001 (API), 3332 (webhooks), 5432 (Postgres), 27017 (MongoDB) and 5672, 15672 and 15692 (RabbitMQ)."
      }
    },
    {
      "@type": "Question",
      "name": "Which LLMs does self-hosted Kodus support?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "OpenAI, Anthropic, Google Gemini, Google Vertex AI, Novita, Groq, Cerebras, Together AI, Fireworks, Chutes, Moonshot (Kimi), Synthetic and Z.ai (GLM) are supported directly. Anything else with an OpenAI-compatible API works through API_OPENAI_FORCE_BASE_URL, including a vLLM, TGI or Ollama server inside your network."
      }
    },
    {
      "@type": "Question",
      "name": "Can I run Kodus air-gapped?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, with some setup on your side. Mirror the Docker images to a private registry, point Kodus at an OpenAI-compatible LLM inside your network and set KODUS_TELEMETRY_DISABLED=true. Kodus doesn't need outbound traffic to run. There's no packaged air-gap installer yet, so the mirroring is up to you."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between Kodus Community and Enterprise?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Community is the AGPLv3 codebase: free, open source, and you can self-host it or use our cloud. Enterprise adds SSO, RBAC, audit logs and analytics under a commercial license, turned on with KODUS_LICENSE_KEY. Files marked .ee. in the repo are the Enterprise parts."
      }
    },
    {
      "@type": "Question",
      "name": "How do updates work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Kodus ships tagged releases on GitHub with pinned Docker images, selected with KODUS_VERSION. You roll a new tag out through your own change process, since there is no auto-update. Security advisories are published on the repo with CVE references."
      }
    },
    {
      "@type": "Question",
      "name": "What does Kodus collect from a self-hosted deployment?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An anonymous daily heartbeat with aggregate counters such as PRs reviewed, integrations enabled, uptime and Node version. It never includes source code, PR titles, identifiers or LLM traffic. You can inspect it with yarn telemetry:preview and turn it off with KODUS_TELEMETRY_DISABLED=true."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to install?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The production install uses the kodus-installer repo: clone it, fill in .env and run ./scripts/install.sh. The script generates secrets, creates the Docker networks, pulls the ghcr.io/kodustech/* images and waits for health checks. Plan 15 to 30 minutes for the first deployment and a few minutes for later ones."
      }
    },
    {
      "@type": "Question",
      "name": "How does Kodus compare to PR-Agent?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Both are open source and free to self-host. PR-Agent is MIT-licensed and describes itself as a community-maintained legacy project of Qodo; it runs as a CLI, a GitHub Action or a webhook service. Kodus is AGPLv3 and includes a web app for configuration and review history, Kody Rules for your team's own review rules, and an optional hosted cloud if you'd rather not run it yourself."
      }
    },
    {
      "@type": "Question",
      "name": "How does Kodus compare to CodeRabbit for self-hosting?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "CodeRabbit's self-hosted version is part of its Enterprise plan for teams of 500 or more seats, and it works with OpenAI, Azure OpenAI and Amazon Bedrock models. Kodus can be self-hosted for free at any team size under AGPLv3, and works with any OpenAI-compatible model, including one running inside your own network. The comparison table above covers other tools."
      }
    }
  ]
}
</script>

<?php get_footer('kodus'); ?>
