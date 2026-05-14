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
.lp-shp__hero::after {
  content: '';
  position: absolute;
  left: 50%;
  bottom: 64px;
  transform: translateX(-50%);
  width: 1px;
  height: 56px;
  background-image: linear-gradient(180deg, var(--color-primary) 0 6px, transparent 6px 12px);
  background-size: 1px 12px;
  background-repeat: repeat-y;
  opacity: .45;
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
  font-family: var(--font-mono);
  font-size: 1.05rem;
  line-height: 1.65;
  color: var(--color-text-muted);
  margin: 0 0 44px;
  max-width: 54ch;
}
.lp-shp__hero-ctas {
  display: flex;
  flex-wrap: wrap;
  gap: 14px;
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

/* ====== Hero cost-flow diagram (BYO LLM money path visualization) ====== */

.lp-byo__flow {
  background: rgba(10, 10, 18, 0.92);
  border: 1px solid var(--color-card-lv2);
  border-radius: 8px;
  font-family: var(--font-mono);
  overflow: hidden;
  box-shadow: 0 14px 40px rgba(0,0,0,0.32);
}
.lp-byo__flow-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 16px;
  background: var(--color-card-lv2);
  border-bottom: 1px solid var(--color-card-lv2);
  font-size: .68rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
}
.lp-byo__flow-bar-title { color: var(--color-text); font-weight: 700; }
.lp-byo__flow-bar-meta { color: var(--color-text-dim); }
.lp-byo__flow-body {
  padding: 24px 22px 22px;
  display: flex;
  flex-direction: column;
  gap: 22px;
}
.lp-byo__flow-scenario {
  border-left: 3px solid var(--color-card-lv2);
  padding-left: 14px;
}
.lp-byo__flow-scenario--bad { border-left-color: #E07A7A; }
.lp-byo__flow-scenario--good { border-left-color: #6FBF73; }
.lp-byo__flow-label {
  margin-bottom: 10px;
}
.lp-byo__flow-tag {
  display: inline-block;
  font-size: .58rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 3px 8px;
  border-radius: 2px;
  font-weight: 700;
}
.lp-byo__flow-tag--bad { background: rgba(224, 122, 122, 0.16); color: #E07A7A; }
.lp-byo__flow-tag--good { background: rgba(111, 191, 115, 0.16); color: #6FBF73; }
.lp-byo__flow-pipe {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 8px 6px;
  font-size: .82rem;
}
.lp-byo__flow-node {
  display: inline-flex;
  flex-direction: column;
  align-items: center;
  gap: 2px;
  padding: 8px 12px;
  background: var(--color-bg);
  border: 1px solid var(--color-card-lv2);
  border-radius: 4px;
  color: var(--color-text);
  font-weight: 600;
  letter-spacing: 0.5px;
  font-size: .78rem;
  min-width: 56px;
  text-align: center;
}
.lp-byo__flow-node--vendor {
  color: #E07A7A;
  border-color: rgba(224, 122, 122, 0.42);
  padding: 6px 12px 8px;
}
.lp-byo__flow-node--vendor em {
  font-style: normal;
  font-size: .56rem;
  letter-spacing: 1px;
  text-transform: uppercase;
  opacity: 0.95;
  margin-top: 1px;
  color: #E07A7A;
  font-weight: 600;
}
.lp-byo__flow-node--model { color: var(--color-secondary); border-color: rgba(201, 187, 242, 0.42); }
.lp-byo__flow-arrow {
  display: inline-flex;
  align-items: center;
  gap: 4px;
  color: var(--color-text-dim);
  font-size: .82rem;
  letter-spacing: 0.5px;
}
.lp-byo__flow-arrow strong {
  font-weight: 700;
  color: var(--color-text);
  font-family: var(--font-pixel);
  font-size: .78rem;
  letter-spacing: -0.5px;
}
.lp-byo__flow-arrow i {
  font-style: normal;
  font-size: 1.1rem;
  line-height: 1;
  color: var(--color-text-muted);
}
.lp-byo__flow-arrow--bad { color: #E07A7A; }
.lp-byo__flow-arrow--bad strong { color: #E07A7A; }
.lp-byo__flow-arrow--bad i { color: #E07A7A; }
.lp-byo__flow-arrow--good { color: #6FBF73; }
.lp-byo__flow-arrow--good strong { color: #6FBF73; }
.lp-byo__flow-arrow--good i { color: #6FBF73; }
.lp-byo__flow-orchestration {
  margin-top: 14px;
  padding: 10px 14px;
  background: rgba(248, 183, 109, 0.08);
  border: 1px dashed rgba(248, 183, 109, 0.4);
  border-radius: 4px;
  display: flex;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}
.lp-byo__flow-kodus {
  font-weight: 700;
  color: var(--color-primary);
  font-size: .8rem;
  letter-spacing: 1px;
}
.lp-byo__flow-kodus-note {
  font-size: .72rem;
  color: var(--color-text-dim);
  font-family: var(--font-sans);
}
.lp-byo__flow-payoff {
  margin-top: 18px;
  padding: 14px 16px 12px;
  border-top: 1px dashed var(--color-card-lv2);
  display: flex;
  align-items: baseline;
  gap: 14px;
  flex-wrap: wrap;
}
.lp-byo__flow-payoff-amount {
  font-family: var(--font-pixel);
  font-size: clamp(1.1rem, 1.6vw, 1.35rem);
  font-weight: 700;
  color: #6FBF73;
  letter-spacing: -0.5px;
  line-height: 1;
  white-space: nowrap;
}
.lp-byo__flow-payoff-meta {
  font-family: var(--font-sans);
  font-size: .82rem;
  color: var(--color-text-muted);
  line-height: 1.4;
}

/* ====== Cost calculator (3 scenarios via CSS :checked) ====== */

.lp-byo__calc {
  background: var(--color-card-lv1);
  border: var(--rule);
  border-radius: 6px;
  overflow: hidden;
}
.lp-byo__calc > input[type="radio"] { display: none; }

.lp-byo__calc-nav {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  border-bottom: var(--rule);
}
@media (max-width: 760px) {
  .lp-byo__calc-nav { grid-template-columns: 1fr; }
}
.lp-byo__calc-nav label {
  padding: 16px 18px;
  display: flex;
  flex-direction: column;
  gap: 4px;
  cursor: pointer;
  border-right: var(--rule);
  background: var(--color-bg);
  transition: background .15s ease;
}
.lp-byo__calc-nav label:last-child { border-right: none; }
.lp-byo__calc-nav label:hover { background: var(--color-card-lv2); }
.lp-byo__calc-nav label strong {
  font-family: var(--font-mono);
  font-size: .8rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-text);
  font-weight: 700;
}
.lp-byo__calc-nav label span {
  font-family: var(--font-mono);
  font-size: .7rem;
  color: var(--color-text-dim);
}

#calc-a:checked ~ .lp-byo__calc-nav label[for="calc-a"],
#calc-b:checked ~ .lp-byo__calc-nav label[for="calc-b"],
#calc-c:checked ~ .lp-byo__calc-nav label[for="calc-c"] {
  background: var(--color-card-lv2);
  box-shadow: inset 0 -3px 0 var(--color-primary);
}
#calc-a:checked ~ .lp-byo__calc-nav label[for="calc-a"] strong,
#calc-b:checked ~ .lp-byo__calc-nav label[for="calc-b"] strong,
#calc-c:checked ~ .lp-byo__calc-nav label[for="calc-c"] strong {
  color: var(--color-primary);
}

.lp-byo__calc-panels { padding: 28px 26px 24px; }
.lp-byo__calc-panel { display: none; }
#calc-a:checked ~ .lp-byo__calc-panels #panel-calc-a,
#calc-b:checked ~ .lp-byo__calc-panels #panel-calc-b,
#calc-c:checked ~ .lp-byo__calc-panels #panel-calc-c { display: block; }

.lp-byo__calc-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 16px;
  margin-bottom: 18px;
}
@media (max-width: 760px) {
  .lp-byo__calc-grid { grid-template-columns: 1fr; }
}
.lp-byo__calc-cell {
  background: var(--color-bg);
  border: var(--rule);
  border-radius: 4px;
  padding: 18px 18px 16px;
  display: flex;
  flex-direction: column;
  gap: 5px;
}
.lp-byo__calc-cell--bad { border-left: 3px solid #E07A7A; }
.lp-byo__calc-cell--good { border-left: 3px solid #6FBF73; }
.lp-byo__calc-cell--save {
  border-left: 3px solid var(--color-primary);
  background: rgba(248, 183, 109, 0.06);
}
.lp-byo__calc-cell-label {
  font-family: var(--font-mono);
  font-size: .64rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-dim);
}
.lp-byo__calc-cell-amount {
  font-family: var(--font-pixel);
  font-size: clamp(1.2rem, 2vw, 1.55rem);
  font-weight: 700;
  letter-spacing: -0.5px;
  line-height: 1.05;
  color: var(--color-text);
}
.lp-byo__calc-cell--bad .lp-byo__calc-cell-amount { color: #E07A7A; }
.lp-byo__calc-cell--good .lp-byo__calc-cell-amount { color: #6FBF73; }
.lp-byo__calc-cell--save .lp-byo__calc-cell-amount { color: var(--color-primary); }
.lp-byo__calc-cell-detail {
  font-family: var(--font-sans);
  font-size: .82rem;
  line-height: 1.4;
  color: var(--color-text-muted);
}
.lp-byo__calc-note {
  font-family: var(--font-sans);
  font-size: .88rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  margin: 0;
}

/* ====== Why BYO matters (3 risk cards) ====== */

.lp-byo__risks {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  gap: 22px;
}
@media (max-width: 880px) {
  .lp-byo__risks { grid-template-columns: 1fr; gap: 16px; }
}
.lp-byo__risk {
  background: var(--color-card-lv1);
  border: var(--rule);
  border-left: 3px solid #E07A7A;
  padding: 24px 22px 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.lp-byo__risk-num {
  font-family: var(--font-pixel);
  font-size: 1.1rem;
  color: #E07A7A;
  letter-spacing: -0.5px;
  line-height: 1;
}
.lp-byo__risk h3 {
  font-family: var(--font-mono);
  font-size: 1rem;
  color: var(--color-text);
  margin: 0;
  font-weight: 600;
  letter-spacing: 0.2px;
}
.lp-byo__risk p {
  font-family: var(--font-sans);
  font-size: .92rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  margin: 0;
}

/* ====== Cost comparison receipts (BYO LLM cost flow section) ====== */

.lp-byo__receipts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 22px;
  margin-bottom: 28px;
}
@media (max-width: 820px) {
  .lp-byo__receipts { grid-template-columns: 1fr; }
}
.lp-byo__receipt {
  background: var(--color-card-lv1);
  border: 1px solid var(--color-card-lv2);
  border-radius: 6px;
  padding: 22px 22px 18px;
  font-family: var(--font-mono);
  position: relative;
  display: flex;
  flex-direction: column;
}
.lp-byo__receipt--bad { border-left: 3px solid #E07A7A; }
.lp-byo__receipt--good { border-left: 3px solid #6FBF73; }
.lp-byo__receipt-head {
  display: flex;
  flex-direction: column;
  gap: 4px;
  margin-bottom: 16px;
  padding-bottom: 14px;
  border-bottom: 1px dashed var(--color-card-lv2);
}
.lp-byo__receipt-vendor {
  font-size: .76rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-text);
  font-weight: 700;
}
.lp-byo__receipt-id {
  font-size: .65rem;
  color: var(--color-text-dim);
  letter-spacing: 0.8px;
}
.lp-byo__receipt-rows {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-bottom: 18px;
}
.lp-byo__receipt-row {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  gap: 12px;
  font-size: .85rem;
  color: var(--color-text);
}
.lp-byo__receipt-row--hidden { color: var(--color-text-dim); }
.lp-byo__receipt-line { flex: 1; }
.lp-byo__receipt-amount {
  font-weight: 600;
  color: var(--color-text);
  white-space: nowrap;
}
.lp-byo__receipt-amount--hidden {
  font-style: italic;
  font-weight: 400;
  color: var(--color-text-dim);
  font-size: .78rem;
}
.lp-byo__receipt-amount--zero { color: #6FBF73; }
.lp-byo__receipt-total {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
  padding-top: 12px;
  border-top: 2px solid var(--color-card-lv2);
  margin-bottom: 14px;
}
.lp-byo__receipt-total span {
  font-size: .72rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-text-dim);
}
.lp-byo__receipt-total strong {
  font-size: 1.4rem;
  font-weight: 700;
  color: var(--color-text);
  font-family: var(--font-pixel);
  letter-spacing: -0.5px;
}
.lp-byo__receipt--good .lp-byo__receipt-total strong { color: #6FBF73; }
.lp-byo__receipt--bad .lp-byo__receipt-total strong { color: #E07A7A; }
.lp-byo__receipt-note {
  font-family: var(--font-sans);
  font-size: .82rem;
  line-height: 1.5;
  color: var(--color-text-muted);
  margin: 0;
}

.lp-byo__savings {
  background: rgba(111, 191, 115, 0.08);
  border: 1px dashed rgba(111, 191, 115, 0.4);
  border-radius: 6px;
  padding: 20px 24px;
  display: flex;
  flex-direction: column;
  gap: 6px;
  margin-bottom: 18px;
  align-items: flex-start;
}
.lp-byo__savings-label {
  font-family: var(--font-mono);
  font-size: .66rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-dim);
}
.lp-byo__savings-amount {
  font-family: var(--font-pixel);
  font-size: clamp(1.6rem, 3vw, 2.2rem);
  font-weight: 700;
  color: #6FBF73;
  letter-spacing: -0.5px;
  line-height: 1;
}
.lp-byo__savings-meta {
  font-family: var(--font-sans);
  font-size: .9rem;
  line-height: 1.5;
  color: var(--color-text-muted);
  margin-top: 4px;
}
.lp-byo__disclaimer {
  font-family: var(--font-sans);
  font-size: .8rem;
  line-height: 1.55;
  color: var(--color-text-dim);
  margin: 0;
  max-width: 78ch;
}

/* ====== Retro window terminal (reuses .retro-window styling) ====== */

/* ====== Hero PR mock (legacy, unused on BYO LLM page) ====== */

.lp-shp__hero-pr {
  background: rgba(10, 10, 18, 0.92);
  border: 1px solid var(--color-card-lv2);
  font-family: var(--font-mono);
  font-size: .82rem;
  box-shadow: 0 24px 60px rgba(0,0,0,0.5);
  overflow: hidden;
  position: relative;
}
.lp-shp__hero-pr-bar {
  display: flex; align-items: center; gap: 10px;
  padding: 12px 16px;
  border-bottom: 1px solid var(--color-card-lv2);
  background: rgba(255,255,255,.02);
  font-family: var(--font-mono);
  font-size: .75rem;
}
.lp-shp__hero-pr-bar .branch {
  color: var(--color-text);
  font-weight: 600;
}
.lp-shp__hero-pr-bar .branch::before {
  content: '◉ ';
  color: var(--color-primary);
}
.lp-shp__hero-pr-bar .status {
  margin-left: auto;
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 1.5px;
  font-weight: 700;
  color: var(--color-tertiary, #FDBFBF);
  padding: 3px 8px;
  border: 1px solid var(--color-tertiary, #FDBFBF);
}
.lp-shp__hero-pr-diff {
  padding: 12px 0 4px;
  font-family: var(--font-mono);
  overflow-x: auto;
}
.lp-shp__hero-pr-diff .line {
  padding: 1px 18px;
  display: block;
  font-size: .78rem;
  color: rgba(243,243,247,.6);
  line-height: 1.6;
  white-space: pre;
  font-variant-ligatures: none;
}
.lp-shp__hero-pr-diff .line .gut {
  display: inline-block;
  width: 28px;
  color: rgba(243,243,247,.3);
  text-align: right;
  margin-right: 14px;
  user-select: none;
}
.lp-shp__hero-pr-diff .line--del { background: rgba(255,122,133,.08); color: #FFB8BE; }
.lp-shp__hero-pr-diff .line--del .gut::before { content: '-'; }
.lp-shp__hero-pr-diff .line--add { background: rgba(107,225,159,.08); color: #ABEAC5; }
.lp-shp__hero-pr-diff .line--add .gut::before { content: '+'; }
.lp-shp__hero-pr-diff .line--ctx .gut::before { content: ' '; }
.lp-shp__hero-pr-comment {
  margin: 14px 18px 0 60px;
  background: rgba(248,183,109,.06);
  border-left: 3px solid var(--color-primary);
  padding: 12px 14px;
  font-family: var(--font-sans);
  font-size: .85rem;
  color: var(--color-text);
  line-height: 1.5;
  opacity: 0;
  transform: translateY(6px);
  animation: lp-shp-hero-pop 0.5s ease-out forwards;
}
.lp-shp__hero-pr-comment:nth-of-type(1) { animation-delay: 0.6s; }
.lp-shp__hero-pr-comment:nth-of-type(2) { animation-delay: 1.3s; }
.lp-shp__hero-pr-comment--med {
  border-left-color: var(--color-secondary, #C9BBF2);
  background: rgba(201,187,242,.06);
}
.lp-shp__hero-pr-comment-head {
  font-family: var(--font-mono);
  font-size: .65rem;
  text-transform: uppercase;
  letter-spacing: 1.8px;
  font-weight: 700;
  margin-bottom: 6px;
  color: var(--color-primary);
  display: flex;
  align-items: center;
  gap: 8px;
}
.lp-shp__hero-pr-comment--med .lp-shp__hero-pr-comment-head { color: var(--color-secondary, #C9BBF2); }
.lp-shp__hero-pr-comment-head::before {
  content: '';
  width: 6px; height: 6px;
  background: currentColor;
  display: inline-block;
}
.lp-shp__hero-pr-comment strong { color: var(--color-primary); }
.lp-shp__hero-pr-comment--med strong { color: var(--color-secondary, #C9BBF2); }
.lp-shp__hero-pr-comment code {
  background: rgba(248,183,109,.12);
  color: var(--color-primary);
  padding: 1px 5px;
  font-family: var(--font-mono);
  font-size: .85em;
}
.lp-shp__hero-pr-footer {
  padding: 12px 18px 14px;
  margin-top: 14px;
  border-top: 1px solid var(--color-card-lv2);
  font-family: var(--font-mono);
  font-size: .7rem;
  color: var(--color-text-dim);
  display: flex;
  justify-content: space-between;
  letter-spacing: 1px;
  opacity: 0;
  animation: lp-shp-hero-pop 0.5s ease-out 2s forwards;
}
.lp-shp__hero-pr-footer .meta::before {
  content: '◆ ';
  color: var(--color-primary);
}
@keyframes lp-shp-hero-pop {
  to { opacity: 1; transform: translateY(0); }
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

.lp-shp__def {
  padding: 48px 0 44px;
  border-top: 1px solid var(--color-card-lv2);
  border-bottom: 1px solid var(--color-card-lv2);
  background: rgba(24, 24, 37, 0.45);
}
.lp-shp__def-inner {
  max-width: 76ch;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.lp-shp__def-tag {
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
}
.lp-shp__def-tag::before {
  content: '// ';
  color: var(--color-primary);
  opacity: .7;
}
.lp-shp__def-text {
  font-family: var(--font-sans);
  font-size: 1.05rem;
  line-height: 1.65;
  color: var(--color-text-muted);
  margin: 0;
}
.lp-shp__def-text strong {
  color: var(--color-text);
  font-weight: 600;
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
  position: absolute;
  top: 12px;
  right: 14px;
  width: 84px;
  height: 84px;
  object-fit: contain;
  opacity: .92;
  transform: rotate(-3deg);
  transition: transform .25s ease;
  pointer-events: none;
}
@media (max-width: 720px) {
  .lp-shp__bnd-kody { width: 64px; height: 64px; top: 16px; right: 16px; }
}
.lp-shp__bnd-num {
  font-family: var(--font-pixel);
  font-size: 1rem;
  color: var(--color-primary);
  letter-spacing: 2px;
  margin-bottom: 14px;
  display: inline-block;
  position: relative;
  z-index: 1;
}
.lp-shp__bnd-card h3 {
  font-family: var(--font-mono);
  font-size: 1.05rem;
  color: var(--color-text);
  margin: 0 0 10px;
  font-weight: 600;
  padding-right: 88px;
  position: relative;
  z-index: 1;
}
.lp-shp__bnd-card p {
  font-family: var(--font-sans);
  font-size: .95rem;
  line-height: 1.55;
  color: var(--color-text-muted);
  margin: 0;
  position: relative;
  z-index: 1;
}

/* ====== Stack: arch + spec table ====== */

.lp-shp__stack-layout {
  display: flex;
  flex-direction: column;
  gap: 24px;
}
.lp-shp__stack-layout > .lp-shp__bp { width: 100%; }

/* ============================================================
   HOW KODY REVIEWS  ─  arcade-stage style
   ============================================================ */

.lp-hk {
  padding: 96px 0 110px;
  border-top: 1px solid var(--color-card-lv2);
  background: var(--color-bg);
}

.lp-hk__head {
  text-align: center;
  margin-bottom: 72px;
  position: relative;
}
.lp-hk__eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 12px;
  font-family: var(--font-mono);
  font-size: .7rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  color: var(--color-primary);
  margin-bottom: 22px;
}
.lp-hk__eyebrow::before,
.lp-hk__eyebrow::after {
  content: '';
  width: 36px;
  height: 1px;
  background: var(--color-primary);
  opacity: .55;
}
.lp-hk__title {
  font-family: var(--font-pixel);
  font-size: clamp(1.4rem, 2.6vw, 2.1rem);
  line-height: 1.15;
  margin: 0 auto 16px;
  color: var(--color-text);
  max-width: 22ch;
  letter-spacing: -0.2px;
}
.lp-hk__title em {
  font-style: normal;
  color: var(--color-primary);
  position: relative;
}
.lp-hk__title em::after {
  content: '';
  position: absolute;
  left: 0; right: 0; bottom: -4px;
  height: 3px;
  background: var(--color-primary);
  opacity: .35;
}
.lp-hk__sub {
  font-family: var(--font-mono);
  font-size: 1rem;
  color: var(--color-text-muted);
  max-width: 58ch;
  margin: 0 auto;
  line-height: 1.55;
}

/* Steps stack */
.lp-hk__steps {
  display: flex;
  flex-direction: column;
  gap: 24px;
}

/* Each row: animation column + content column */
.lp-hk__row {
  display: grid;
  grid-template-columns: 200px 1fr;
  align-items: stretch;
  background: var(--color-card-lv1);
  border: 1px solid var(--color-card-lv2);
  position: relative;
  transition: border-color .25s ease, transform .25s ease;
  text-decoration: none;
  color: inherit;
}
.lp-hk__row:hover {
  border-color: var(--color-primary);
  transform: translateY(-2px);
}
@media (max-width: 760px) {
  .lp-hk__row { grid-template-columns: 1fr; }
}

/* Animation slot — left visual */
.lp-hk__viz {
  position: relative;
  background: rgba(0,0,0,0.2);
  border-right: 1px solid var(--color-card-lv2);
  min-height: 180px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
@media (max-width: 760px) {
  .lp-hk__viz { border-right: none; border-bottom: 1px solid var(--color-card-lv2); min-height: 140px; }
}
.lp-hk__viz-num {
  position: absolute;
  top: 12px; left: 14px;
  font-family: var(--font-mono);
  font-size: .7rem;
  letter-spacing: 2px;
  color: var(--color-text-dim);
  font-weight: 600;
  z-index: 2;
}
.lp-hk__viz-num strong { color: var(--color-primary); font-weight: 700; }

/* === Viz 01: pulse dot === */
.lp-hk__pulse {
  width: 64px; height: 64px;
  border-radius: 50%;
  background: var(--color-tertiary, #FDBFBF);
  position: relative;
}
.lp-hk__pulse::before,
.lp-hk__pulse::after {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 50%;
  border: 2px solid var(--color-tertiary, #FDBFBF);
  animation: lp-hk-ring 2.6s infinite ease-out;
}
.lp-hk__pulse::after { animation-delay: 1.3s; }
@keyframes lp-hk-ring {
  0%   { transform: scale(1);   opacity: .8; }
  100% { transform: scale(2.4); opacity: 0; }
}

/* === Viz 02: 3 boxes fade-in sequence === */
.lp-hk__triplet {
  display: flex;
  gap: 8px;
}
.lp-hk__triplet span {
  width: 32px; height: 44px;
  border: 1.5px solid var(--color-primary);
  background: rgba(248,183,109,0.08);
  opacity: 0;
  animation: lp-hk-fade 3s infinite;
  position: relative;
}
.lp-hk__triplet span::before {
  content: '';
  position: absolute;
  top: 6px; left: 6px;
  width: 6px; height: 6px;
  background: var(--color-primary);
}
.lp-hk__triplet span:nth-child(1) { animation-delay: 0s;   }
.lp-hk__triplet span:nth-child(2) { animation-delay: 0.4s; }
.lp-hk__triplet span:nth-child(3) { animation-delay: 0.8s; }
@keyframes lp-hk-fade {
  0%, 20%   { opacity: 0; transform: translateY(4px); }
  30%, 80%  { opacity: 1; transform: translateY(0); }
  90%, 100% { opacity: 0; transform: translateY(-2px); }
}

/* === Viz 03: 4 agent dots blinking in parallel === */
.lp-hk__quad {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
}
.lp-hk__quad span {
  width: 28px; height: 28px;
  border: 2px solid var(--color-secondary, #C9BBF2);
  background: rgba(201,187,242,0.1);
  position: relative;
}
.lp-hk__quad span::after {
  content: '';
  position: absolute;
  top: 50%; left: 50%;
  width: 8px; height: 8px;
  background: var(--color-secondary, #C9BBF2);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  animation: lp-hk-blink 1.6s infinite ease-in-out;
}
.lp-hk__quad span:nth-child(1) ::after,
.lp-hk__quad span:nth-child(1)::after { animation-delay: 0s; }
.lp-hk__quad span:nth-child(2)::after { animation-delay: 0.2s; }
.lp-hk__quad span:nth-child(3)::after { animation-delay: 0.4s; }
.lp-hk__quad span:nth-child(4)::after { animation-delay: 0.6s; }
@keyframes lp-hk-blink {
  0%, 100% { opacity: 0.25; transform: translate(-50%, -50%) scale(0.7); }
  50%      { opacity: 1;    transform: translate(-50%, -50%) scale(1.1); }
}

/* === Viz 04: typewriter line === */
.lp-hk__type {
  font-family: var(--font-mono);
  font-size: .78rem;
  color: var(--color-text);
  white-space: nowrap;
  overflow: hidden;
  border-right: 2px solid var(--color-primary);
  width: 0;
  animation:
    lp-hk-type 6s steps(40, end) infinite,
    lp-hk-caret 0.7s step-end infinite;
  max-width: 160px;
}
.lp-hk__type::before {
  content: '> kody · ';
  color: var(--color-primary);
}
@keyframes lp-hk-type {
  0%, 5%     { width: 0; }
  35%, 65%   { width: 160px; }
  95%, 100%  { width: 0; }
}
@keyframes lp-hk-caret {
  0%, 50%   { border-color: var(--color-primary); }
  51%, 100% { border-color: transparent; }
}

/* The content card */
.lp-hk__card {
  padding: 32px 36px 30px;
  display: flex;
  flex-direction: column;
  gap: 14px;
}
@media (max-width: 760px) {
  .lp-hk__card { padding: 24px 24px; }
}

/* Per-row color accent (border-left) */
.lp-hk__row--peach { border-left: 3px solid var(--color-tertiary, #FDBFBF); }
.lp-hk__row--amber { border-left: 3px solid var(--color-primary); }
.lp-hk__row--lilac { border-left: 3px solid var(--color-secondary, #C9BBF2); }

/* Connector dashed line between rows */
.lp-hk__row::after {
  content: '';
  position: absolute;
  left: 100px;
  bottom: -25px;
  width: 2px;
  height: 24px;
  background-image: linear-gradient(180deg, var(--color-text-dim) 0 6px, transparent 6px 12px);
  background-size: 2px 12px;
  background-repeat: repeat-y;
  opacity: .4;
}
.lp-hk__row:last-child::after { display: none; }
@media (max-width: 760px) {
  .lp-hk__row::after { left: 30px; }
}

.lp-hk__tag {
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-weight: 700;
}
.lp-hk__tag::before {
  content: '';
  display: inline-block;
  width: 7px; height: 7px;
  background: var(--color-primary);
}
.lp-hk__row--peach .lp-hk__tag { color: var(--color-tertiary, #FDBFBF); }
.lp-hk__row--peach .lp-hk__tag::before { background: var(--color-tertiary, #FDBFBF); }
.lp-hk__row--lilac .lp-hk__tag { color: var(--color-secondary, #C9BBF2); }
.lp-hk__row--lilac .lp-hk__tag::before { background: var(--color-secondary, #C9BBF2); }

.lp-hk__h {
  font-family: var(--font-pixel);
  font-size: clamp(1.1rem, 1.8vw, 1.5rem);
  line-height: 1.2;
  margin: 0;
  color: var(--color-text);
  letter-spacing: -0.3px;
}
.lp-hk__p {
  font-family: var(--font-sans);
  font-size: 1rem;
  line-height: 1.6;
  color: var(--color-text-muted);
  margin: 0;
  max-width: 56ch;
}
.lp-hk__p code {
  background: rgba(248,183,109,.1);
  color: var(--color-primary);
  padding: 1px 6px;
  font-family: var(--font-mono);
  font-size: .85em;
}

/* Inline meta chips */
.lp-hk__chips {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-top: 6px;
}
.lp-hk__chip {
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 1px;
  text-transform: uppercase;
  padding: 5px 10px;
  border: 1px solid var(--color-card-lv2);
  background: rgba(255,255,255,.02);
  color: var(--color-text-muted);
}
.lp-hk__chip--accent {
  color: var(--color-primary);
  border-color: var(--color-primary);
}

/* Provider logos row */
.lp-hk__logos {
  display: flex;
  align-items: center;
  gap: 22px;
  margin-top: 8px;
  flex-wrap: wrap;
}
.lp-hk__logo {
  width: 26px; height: 26px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: var(--color-text-muted);
  transition: color .2s ease, transform .2s ease;
}
.lp-hk__logo:hover {
  color: var(--color-primary);
  transform: translateY(-2px);
}
.lp-hk__logo svg { width: 100%; height: 100%; }
.lp-hk__logos-sep {
  width: 1px;
  height: 20px;
  background: var(--color-card-lv2);
}
.lp-hk__logos-ref {
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 1.5px;
  padding: 5px 10px;
  border: 1px solid var(--color-primary);
  color: var(--color-primary);
  text-transform: uppercase;
}

/* Step 03 — agents grid inside */
.lp-hk__agents {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 14px;
  margin-top: 10px;
}
@media (max-width: 880px) {
  .lp-hk__agents { grid-template-columns: repeat(2, 1fr); }
}
.lp-hk__agent {
  background: rgba(201,187,242,0.05);
  border: 1px solid rgba(201,187,242,0.4);
  padding: 18px 16px 16px;
  position: relative;
  transition: transform .2s ease, background .2s, border-color .2s;
}
.lp-hk__agent:hover {
  transform: translateY(-3px);
  background: rgba(201,187,242,0.12);
  border-color: var(--color-secondary, #C9BBF2);
}
.lp-hk__agent::before {
  content: '';
  position: absolute;
  top: -1px; left: -1px;
  width: 7px; height: 7px;
  background: var(--color-secondary, #C9BBF2);
}
.lp-hk__agent-name {
  font-family: var(--font-mono);
  font-size: .85rem;
  color: var(--color-secondary, #C9BBF2);
  font-weight: 700;
  letter-spacing: .3px;
  margin: 0 0 6px;
}
.lp-hk__agent-desc {
  font-family: var(--font-mono);
  font-size: .72rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  margin: 0;
  letter-spacing: .2px;
}

.lp-hk__agent-note {
  margin-top: 14px;
  font-family: var(--font-mono);
  font-size: .72rem;
  color: var(--color-text-dim);
  letter-spacing: .8px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.lp-hk__agent-note::before {
  content: '◢';
  color: var(--color-secondary, #C9BBF2);
  font-size: .8rem;
}

/* Step 04 — PR mock */
.lp-hk__pr {
  margin-top: 8px;
  background: #0A0A12;
  border: 1px solid var(--color-card-lv2);
  font-family: var(--font-mono);
  font-size: .8rem;
  overflow: hidden;
}
.lp-hk__pr-bar {
  display: flex; align-items: center; gap: 10px;
  padding: 8px 14px;
  border-bottom: 1px solid var(--color-card-lv2);
  background: rgba(255,255,255,0.02);
  font-size: .7rem;
  color: var(--color-text-dim);
}
.lp-hk__pr-bar::before {
  content: 'PR #1247 · feat/auth-guard-tier';
  color: var(--color-text);
}
.lp-hk__pr-bar::after {
  content: '⬤ REQUEST_CHANGES';
  margin-left: auto;
  color: var(--color-tertiary, #FDBFBF);
  font-weight: 700;
  letter-spacing: 1.2px;
}
.lp-hk__pr-diff {
  padding: 14px 0;
  color: #DCDCEC;
  position: relative;
}
.lp-hk__pr-diff .line {
  padding: 1px 18px;
  display: block;
  font-variant-emoji: text;
}
.lp-hk__pr-diff .line .gut {
  display: inline-block;
  width: 28px;
  color: rgba(243,243,247,.35);
  text-align: right;
  margin-right: 12px;
  user-select: none;
}
.lp-hk__pr-diff .line--ctx { color: rgba(243,243,247,.55); }
.lp-hk__pr-diff .line--del { background: rgba(255,122,133,.08); color: #FFB8BE; }
.lp-hk__pr-diff .line--del .gut::before { content: '-'; }
.lp-hk__pr-diff .line--add { background: rgba(107,225,159,.08); color: #ABEAC5; }
.lp-hk__pr-diff .line--add .gut::before { content: '+'; }
.lp-hk__pr-diff .line--ctx .gut::before { content: ' '; }

.lp-hk__pr-comment {
  margin: 8px 18px 14px 58px;
  background: rgba(248,183,109,.06);
  border-left: 3px solid var(--color-primary);
  padding: 12px 14px;
  font-family: var(--font-sans);
  font-size: .85rem;
  color: var(--color-text);
  line-height: 1.5;
  position: relative;
}
.lp-hk__pr-comment::before {
  content: 'Kody · critical';
  display: block;
  font-family: var(--font-mono);
  font-size: .65rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: var(--color-primary);
  margin-bottom: 6px;
}
.lp-hk__pr-comment strong { color: var(--color-primary); }

/* Bottom strip — system requirements */
.lp-hk__req {
  margin-top: 80px;
  display: grid;
  grid-template-columns: 80px repeat(6, 1fr);
  gap: 0;
  border: 1px solid var(--color-card-lv2);
  background: var(--color-card-lv1);
}
@media (max-width: 880px) {
  .lp-hk__req { grid-template-columns: repeat(3, 1fr); }
  .lp-hk__req-head { display: none !important; }
}
.lp-hk__req-head {
  padding: 18px 16px;
  font-family: var(--font-pixel);
  font-size: .9rem;
  color: var(--color-primary);
  background: rgba(248,183,109,.05);
  border-right: 1px solid var(--color-card-lv2);
  display: flex; align-items: center; justify-content: center;
  letter-spacing: -0.3px;
}
.lp-hk__req-cell {
  padding: 14px 14px 12px;
  border-right: 1px solid var(--color-card-lv2);
  font-family: var(--font-mono);
}
.lp-hk__req-cell:last-child { border-right: none; }
@media (max-width: 880px) {
  .lp-hk__req-cell { border-bottom: 1px solid var(--color-card-lv2); }
  .lp-hk__req-cell:nth-child(3n+1) { border-right: 1px solid var(--color-card-lv2); }
  .lp-hk__req-cell:nth-last-child(-n+3) { border-bottom: none; }
}
.lp-hk__req-k {
  font-size: .65rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
  display: block;
  margin-bottom: 6px;
  font-weight: 700;
}
.lp-hk__req-v {
  font-size: .92rem;
  color: var(--color-text);
  font-weight: 600;
  display: block;
}
.lp-hk__req-r {
  font-size: .7rem;
  color: var(--color-text-dim);
  display: block;
  margin-top: 3px;
}

/* ====== Live engine demo (animated terminal) ====== */

.lp-shp__demo {
  background: #0A0A12;
  border: var(--rule);
  font-family: var(--font-mono);
  box-shadow: 0 24px 60px rgba(0,0,0,0.5);
  overflow: hidden;
}
.lp-shp__demo-bar {
  display: flex; align-items: center; gap: 8px;
  padding: 10px 14px;
  border-bottom: var(--rule);
  background: rgba(255,255,255,.02);
}
.lp-shp__demo-bar span.dot { width: 10px; height: 10px; border-radius: 50%; }
.lp-shp__demo-bar span.dot--r { background: #FF7A85; }
.lp-shp__demo-bar span.dot--y { background: var(--color-primary); }
.lp-shp__demo-bar span.dot--g { background: #6BE19F; }
.lp-shp__demo-bar span.t {
  margin-left: 10px;
  color: var(--color-text-dim);
  font-size: .72rem;
  letter-spacing: 1.2px;
}
.lp-shp__demo-bar .status {
  margin-left: auto;
  font-size: .68rem;
  letter-spacing: 1.5px;
  color: #6BE19F;
  display: inline-flex;
  align-items: center;
  gap: 8px;
}
.lp-shp__demo-bar .status::before {
  content: '';
  width: 8px; height: 8px; border-radius: 50%;
  background: #6BE19F;
  box-shadow: 0 0 10px #6BE19F;
  animation: lp-shp-pulse 1.4s infinite;
}
.lp-shp__demo-body {
  padding: 24px 26px 26px;
  min-height: 460px;
  position: relative;
}
.lp-shp__demo:hover .lp-shp__demo-body,
.lp-shp__demo:focus-within .lp-shp__demo-body {
  /* pause animations on hover so users can read */
}
.lp-shp__demo:hover .lp-shp__demo-line,
.lp-shp__demo:hover .lp-shp__demo-cur { animation-play-state: paused; }

.lp-shp__demo-line {
  display: block;
  font-size: .9rem;
  line-height: 1.7;
  color: #DCDCEC;
  opacity: 0;
  animation: lp-shp-line 22s infinite;
}
.lp-shp__demo-line .p   { color: var(--color-primary); margin-right: 8px; font-weight: 700; }
.lp-shp__demo-line .ok  { color: #6BE19F; margin-right: 6px; }
.lp-shp__demo-line .wn  { color: var(--color-primary); margin-right: 6px; }
.lp-shp__demo-line .dim { color: rgba(243,243,247,.45); }
.lp-shp__demo-line .tag {
  display: inline-block;
  padding: 1px 8px;
  margin-left: 6px;
  border: 1px solid var(--color-card-lv2);
  font-size: .68rem;
  letter-spacing: 1.2px;
  text-transform: uppercase;
  color: var(--color-text-dim);
}
.lp-shp__demo-line .tag--llm { color: var(--color-secondary, #C9BBF2); border-color: var(--color-secondary, #C9BBF2); }
.lp-shp__demo-line .tag--ok  { color: #6BE19F; border-color: #6BE19F; }
.lp-shp__demo-line .crit { color: #FF7A85; font-weight: 700; }
.lp-shp__demo-line .high { color: var(--color-primary); font-weight: 600; }
.lp-shp__demo-line .med  { color: var(--color-secondary, #C9BBF2); }
.lp-shp__demo-line .low  { color: rgba(243,243,247,.55); }

@keyframes lp-shp-line {
  0%, 4%   { opacity: 0; transform: translateY(3px); }
  6%, 90%  { opacity: 1; transform: translateY(0); }
  95%, 100%{ opacity: 0; transform: translateY(-2px); }
}

.lp-shp__demo-cur {
  display: inline-block;
  width: 9px; height: 1.05em;
  background: var(--color-primary);
  vertical-align: text-bottom;
  margin-left: 4px;
  animation: lp-shp-cursor 1s infinite step-end;
}

.lp-shp__demo-foot {
  border-top: var(--rule);
  padding: 12px 18px;
  font-family: var(--font-mono);
  font-size: .72rem;
  color: var(--color-text-dim);
  letter-spacing: 1px;
  display: flex; justify-content: space-between; flex-wrap: wrap; gap: 12px;
  background: rgba(255,255,255,0.02);
}
.lp-shp__demo-foot .hint::before {
  content: '↪ ';
  color: var(--color-primary);
}

/* Blueprint kept for backwards compat (no longer used) */
/* ====== Blueprint diagram ====== */

.lp-shp__bp {
  border: var(--rule);
  background:
    repeating-linear-gradient(0deg,  rgba(248,183,109,0.045) 0 1px, transparent 1px 24px),
    repeating-linear-gradient(90deg, rgba(248,183,109,0.045) 0 1px, transparent 1px 24px),
    radial-gradient(ellipse at 50% 0%, rgba(248,183,109,0.04), transparent 60%),
    #07070D;
  position: relative;
  overflow: hidden;
}
.lp-shp__bp::before, .lp-shp__bp::after {
  content: '+';
  position: absolute;
  color: var(--color-primary);
  font-family: var(--font-mono);
  font-size: 1.2rem;
  opacity: .5;
  pointer-events: none;
}
.lp-shp__bp::before { top: 6px; left: 8px; }
.lp-shp__bp::after  { top: 6px; right: 10px; }

.lp-shp__bp-title {
  display: grid;
  grid-template-columns: auto 1fr auto auto;
  gap: 18px;
  padding: 10px 18px;
  border-bottom: 1px dashed rgba(248,183,109,0.35);
  font-family: var(--font-mono);
  font-size: .68rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-primary);
  background: rgba(0,0,0,0.25);
}
.lp-shp__bp-title-s { color: var(--color-text-dim); }
.lp-shp__bp-title-s strong { color: var(--color-text); font-weight: 600; }

.lp-shp__bp-fig {
  padding: 8px 18px 4px;
  font-family: var(--font-mono);
  font-size: .7rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-text-muted);
}
.lp-shp__bp-fig::before {
  content: 'FIG. 01 ─ ';
  color: var(--color-primary);
}

.lp-shp__bp-body {
  display: grid;
  grid-template-columns: 64px 1fr;
  align-items: stretch;
}
.lp-shp__bp-rail {
  border-right: 1px dashed rgba(248,183,109,0.25);
  padding: 22px 8px 22px 12px;
  display: flex;
  flex-direction: column;
  font-family: var(--font-mono);
  font-size: .7rem;
  color: var(--color-primary);
  letter-spacing: 1.5px;
  gap: 0;
}
.lp-shp__bp-rail-mark {
  height: 130px;
  display: flex;
  align-items: center;
  position: relative;
}
.lp-shp__bp-rail-mark::before {
  content: '⌖';
  font-size: 1.1rem;
  margin-right: 6px;
  color: var(--color-primary);
}
.lp-shp__bp-rail-mark--short { height: 90px; }

.lp-shp__bp-stage {
  position: relative;
  padding: 22px 22px 22px 22px;
}
.lp-shp__bp-stage + .lp-shp__bp-stage {
  border-top: 1px dashed rgba(248,183,109,0.18);
}
.lp-shp__bp-stage-head {
  display: flex;
  align-items: baseline;
  gap: 14px;
  margin-bottom: 14px;
  font-family: var(--font-mono);
}
.lp-shp__bp-stage-id {
  font-size: .72rem;
  letter-spacing: 2px;
  color: var(--color-primary);
  font-weight: 700;
  white-space: nowrap;
}
.lp-shp__bp-stage-name {
  font-size: 1.1rem;
  color: var(--color-text);
  font-weight: 700;
  letter-spacing: .5px;
}
.lp-shp__bp-stage-dim {
  flex: 1;
  border-bottom: 1px dashed rgba(248,183,109,0.25);
  position: relative;
  top: -4px;
}
.lp-shp__bp-stage-ref {
  font-size: .65rem;
  letter-spacing: 1.5px;
  color: var(--color-text-dim);
}

.lp-shp__bp-row {
  display: grid;
  gap: 10px;
  font-family: var(--font-mono);
}
.lp-shp__bp-row--3 { grid-template-columns: repeat(3, 1fr); }
.lp-shp__bp-row--4 { grid-template-columns: repeat(4, 1fr); }
.lp-shp__bp-row--1 { grid-template-columns: 1fr; }
@media (max-width: 720px) {
  .lp-shp__bp-row--3, .lp-shp__bp-row--4 { grid-template-columns: 1fr 1fr; }
}
.lp-shp__bp-node {
  border: 1.5px solid var(--color-primary);
  background: rgba(248,183,109,0.04);
  padding: 12px 14px 11px;
  position: relative;
}
.lp-shp__bp-node::before,
.lp-shp__bp-node::after {
  content: '';
  position: absolute;
  width: 6px; height: 6px;
  border: 1.5px solid var(--color-primary);
  background: var(--color-bg);
}
.lp-shp__bp-node::before { top: -4px; left: -4px; }
.lp-shp__bp-node::after  { top: -4px; right: -4px; }
.lp-shp__bp-node h4 {
  font-family: var(--font-mono);
  font-size: .82rem;
  color: var(--color-primary);
  margin: 0 0 4px;
  letter-spacing: .5px;
  font-weight: 700;
  text-transform: lowercase;
}
.lp-shp__bp-node h4::before {
  content: '◢ ';
  color: var(--color-primary);
  font-size: .9em;
}
.lp-shp__bp-node p {
  font-family: var(--font-mono);
  font-size: .72rem;
  color: var(--color-text-muted);
  line-height: 1.5;
  margin: 0;
  letter-spacing: .3px;
}

.lp-shp__bp-node--alt {
  border-color: var(--color-secondary, #C9BBF2);
}
.lp-shp__bp-node--alt::before,
.lp-shp__bp-node--alt::after { border-color: var(--color-secondary, #C9BBF2); }
.lp-shp__bp-node--alt h4    { color: var(--color-secondary, #C9BBF2); }
.lp-shp__bp-node--alt h4::before { color: var(--color-secondary, #C9BBF2); }

.lp-shp__bp-node--end {
  border-color: var(--color-tertiary, #FDBFBF);
}
.lp-shp__bp-node--end::before,
.lp-shp__bp-node--end::after { border-color: var(--color-tertiary, #FDBFBF); }
.lp-shp__bp-node--end h4    { color: var(--color-tertiary, #FDBFBF); }
.lp-shp__bp-node--end h4::before { color: var(--color-tertiary, #FDBFBF); }

.lp-shp__bp-annot {
  margin-top: 12px;
  font-family: var(--font-mono);
  font-size: .68rem;
  color: var(--color-text-dim);
  letter-spacing: .8px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.lp-shp__bp-annot::before {
  content: 'NOTE';
  color: var(--color-primary);
  border: 1px solid var(--color-primary);
  padding: 1px 5px;
  font-size: .6rem;
  letter-spacing: 1.5px;
}

.lp-shp__bp-footer {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 14px;
  padding: 10px 18px;
  border-top: 1px dashed rgba(248,183,109,0.35);
  font-family: var(--font-mono);
  font-size: .62rem;
  letter-spacing: 1.5px;
  color: var(--color-text-dim);
  text-transform: uppercase;
  background: rgba(0,0,0,0.25);
}
.lp-shp__bp-footer span strong {
  color: var(--color-primary);
  font-weight: 700;
  margin-right: 6px;
}

.lp-shp__spec {
  background: var(--color-card-lv1);
  border: var(--rule);
  display: grid;
  grid-template-columns: repeat(6, 1fr);
}
@media (max-width: 900px) { .lp-shp__spec { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 540px) { .lp-shp__spec { grid-template-columns: repeat(2, 1fr); } }
.lp-shp__spec-row {
  padding: 16px 18px;
  border-right: var(--rule);
  font-family: var(--font-mono);
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.lp-shp__spec-row:last-child { border-right: none; }
@media (max-width: 900px) {
  .lp-shp__spec-row { border-bottom: var(--rule); }
  .lp-shp__spec-row:nth-last-child(-n+3) { border-bottom: none; }
  .lp-shp__spec-row:nth-child(3n) { border-right: none; }
}
.lp-shp__spec-row--head { display: none; }
.lp-shp__spec-k {
  font-size: .65rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
  font-weight: 700;
}
.lp-shp__spec-v {
  color: var(--color-text);
  font-size: .92rem;
  font-weight: 600;
}
.lp-shp__spec-r {
  color: var(--color-text-dim);
  font-size: .72rem;
  letter-spacing: .3px;
  line-height: 1.4;
}

/* ====== BYOK section ====== */

.lp-shp__byok-section {
  position: relative;
}
.lp-shp__byok-kody {
  position: absolute;
  bottom: 24px;
  right: 24px;
  width: 112px;
  height: 112px;
  object-fit: contain;
  opacity: .92;
  pointer-events: none;
  transform: scaleX(-1) rotate(4deg);
  transition: transform .25s ease;
}
.lp-shp__byok-section:hover .lp-shp__byok-kody { transform: scaleX(-1) rotate(0deg) scale(1.05); }
@media (max-width: 720px) { .lp-shp__byok-kody { display: none; } }

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
.lp-shp__byo-tiers {
  margin-top: 22px;
  display: flex;
  flex-direction: column;
  gap: 18px;
}
.lp-shp__byo-tier {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  row-gap: 8px;
}
.lp-shp__byo-tier-label {
  flex-basis: 100%;
  font-family: var(--font-mono);
  font-size: .62rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-dim);
  margin-bottom: 2px;
}
.lp-shp__byo-tier-label::before {
  content: '// ';
  color: var(--color-primary);
}
.lp-shp__byo-tier .lp-shp__pill {
  text-transform: none;
  letter-spacing: 0;
  font-family: var(--font-mono);
  font-size: .78rem;
  padding: 5px 10px;
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

/* ====== Verdict card ====== */
.lp-shp__cmp-verdict {
  border: var(--rule);
  background: var(--color-card-lv1);
  padding: 28px 32px;
  margin-bottom: 28px;
  display: grid;
  grid-template-columns: 1fr 1.4fr;
  gap: 36px;
  align-items: center;
}
@media (max-width: 820px) { .lp-shp__cmp-verdict { grid-template-columns: 1fr; gap: 22px; } }
.lp-shp__cmp-verdict-head { font-family: var(--font-mono); }
.lp-shp__cmp-verdict-tag {
  display: inline-block;
  padding: 4px 10px;
  border: 1px solid var(--color-primary);
  color: var(--color-primary);
  font-size: .62rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  margin-bottom: 14px;
}
.lp-shp__cmp-verdict-title {
  font-family: var(--font-display);
  font-size: clamp(1rem, 1.6vw, 1.4rem);
  line-height: 1.4;
  color: var(--color-text);
  margin: 0;
}
.lp-shp__cmp-verdict-title .highlight { color: var(--color-primary); }
.lp-shp__cmp-verdict-bars {
  display: grid;
  gap: 10px;
}
.lp-shp__cmp-verdict-row {
  display: grid;
  grid-template-columns: 120px 1fr 40px;
  align-items: center;
  gap: 14px;
  font-family: var(--font-mono);
  font-size: .78rem;
}
.lp-shp__cmp-verdict-name {
  color: var(--color-text-dim);
  letter-spacing: .3px;
}
.lp-shp__cmp-verdict-row--kodus .lp-shp__cmp-verdict-name {
  color: var(--color-primary);
  font-weight: 600;
}
.lp-shp__cmp-verdict-bar {
  --filled: 0;
  position: relative;
  height: 10px;
  background: rgba(255,255,255,.06);
  border: 1px solid var(--color-card-lv2);
}
.lp-shp__cmp-verdict-bar::before {
  content: "";
  position: absolute;
  inset: 0;
  width: calc(var(--filled) / 8 * 100%);
  background: var(--color-text-dim);
  transition: background .2s ease;
}
.lp-shp__cmp-verdict-row--kodus .lp-shp__cmp-verdict-bar::before {
  background: var(--color-primary);
}
.lp-shp__cmp-verdict-score {
  font-size: .78rem;
  color: var(--color-text-dim);
  text-align: right;
}
.lp-shp__cmp-verdict-row--kodus .lp-shp__cmp-verdict-score {
  color: var(--color-primary);
  font-weight: 600;
}

/* Brand chips in column headers */
.lp-shp__cmp-brand {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  white-space: nowrap;
}
.lp-shp__cmp-mono {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 26px;
  height: 26px;
  border: 1px solid var(--color-card-lv2);
  background: rgba(255,255,255,.03);
  color: var(--color-text-dim);
  font-family: var(--font-mono);
  font-size: .68rem;
  font-weight: 700;
  letter-spacing: .5px;
}
.lp-shp__cmp-logo {
  width: 26px;
  height: 26px;
  object-fit: contain;
  display: block;
}

/* Category header rows */
.lp-shp__cmp-cat th {
  padding: 26px 18px 10px;
  background: transparent;
  border-bottom: 1px solid var(--color-card-lv2);
  border-top: 1px solid var(--color-card-lv2);
  font-family: var(--font-mono);
  font-size: .62rem;
  letter-spacing: 2.5px;
  text-transform: uppercase;
  color: var(--color-primary);
  font-weight: 700;
}
.lp-shp__cmp tbody > tr.lp-shp__cmp-cat:first-child th { border-top: none; }

/* ====== Air-gapped — kill switch panel ====== */

.lp-shp__panel {
  background:
    linear-gradient(180deg, rgba(248,183,109,0.03), transparent 30%),
    rgba(10, 10, 18, 0.65);
  border: var(--rule);
  padding: 8px;
}
.lp-shp__panel-bar {
  display: flex; justify-content: space-between; align-items: center;
  padding: 12px 18px;
  border: 1px solid var(--color-card-lv2);
  background: rgba(0,0,0,0.3);
  margin-bottom: 8px;
  font-family: var(--font-mono);
  font-size: .7rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-text-dim);
}
.lp-shp__panel-bar::before {
  content: '◉ AIRGAP.PANEL';
  color: var(--color-primary);
  letter-spacing: 2.5px;
}
.lp-shp__panel-bar::after {
  content: 'STATUS: ARMED';
  color: #6BE19F;
}
.lp-shp__switch {
  display: grid;
  grid-template-columns: 80px 90px 1fr;
  gap: 24px;
  align-items: center;
  padding: 22px 26px;
  border: 1px solid var(--color-card-lv2);
  background: rgba(0,0,0,0.25);
  margin-bottom: 6px;
  position: relative;
  transition: background .2s;
}
.lp-shp__switch:hover { background: rgba(248,183,109,0.04); }
.lp-shp__switch:last-child { margin-bottom: 0; }
.lp-shp__switch-id {
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 1.5px;
  color: var(--color-primary);
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 10px;
}
.lp-shp__switch-id::before {
  content: '';
  width: 9px; height: 9px;
  border-radius: 50%;
  background: #6BE19F;
  box-shadow: 0 0 10px #6BE19F, inset 0 -1px 2px rgba(0,0,0,0.4);
  animation: lp-shp-pulse 2.4s infinite ease-in-out;
}
@keyframes lp-shp-pulse {
  0%, 100% { opacity: 1; }
  50% { opacity: 0.55; }
}
.lp-shp__switch-toggle {
  width: 70px;
  height: 32px;
  border: 2px solid var(--color-card-lv2);
  background: rgba(0,0,0,0.5);
  display: flex;
  align-items: center;
  padding: 2px;
  position: relative;
}
.lp-shp__switch-toggle::after {
  content: 'ON';
  font-family: var(--font-mono);
  font-size: .6rem;
  font-weight: 700;
  position: absolute;
  right: 8px;
  color: #6BE19F;
  letter-spacing: 1px;
}
.lp-shp__switch-toggle-knob {
  width: 26px;
  height: 24px;
  background:
    linear-gradient(180deg, #F8B76D, #C88848);
  margin-left: 0;
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -1px 0 rgba(0,0,0,0.3),
    0 0 8px rgba(248,183,109,0.4);
}
.lp-shp__switch-body h3 {
  font-family: var(--font-mono);
  font-size: 1rem;
  color: var(--color-text);
  margin: 0 0 4px;
  letter-spacing: .3px;
}
.lp-shp__switch-body p {
  font-family: var(--font-sans);
  font-size: .9rem;
  line-height: 1.5;
  color: var(--color-text-muted);
  margin: 0;
}
.lp-shp__switch-body code {
  background: rgba(248,183,109,.1);
  color: var(--color-primary);
  padding: 1px 6px;
  font-family: var(--font-mono);
  font-size: .82em;
}
@media (max-width: 720px) {
  .lp-shp__switch {
    grid-template-columns: 1fr;
    gap: 12px;
    padding: 18px 20px;
  }
  .lp-shp__switch-toggle { order: -1; }
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
.lp-shp__case:nth-child(odd)  { transform: rotate(-0.4deg); }
.lp-shp__case:nth-child(even) { transform: rotate(0.4deg); }
.lp-shp__case-tab {
  position: absolute;
  top: -16px;
  left: 22px;
  background: var(--color-bg);
  border: var(--rule);
  border-bottom: none;
  padding: 6px 14px;
  font-family: var(--font-mono);
  font-size: .65rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: var(--color-primary);
  font-weight: 700;
}
.lp-shp__case-stamp {
  position: absolute;
  top: 14px;
  right: 14px;
  font-family: var(--font-mono);
  font-size: .58rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: var(--color-primary);
  border: 1.5px solid var(--color-primary);
  padding: 3px 6px;
  transform: rotate(6deg);
  opacity: 0.7;
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
.lp-shp__case-tag::before {
  content: 'INDUSTRY · ';
  color: var(--color-primary);
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
.lp-shp__case-meta {
  margin-top: auto;
  padding-top: 14px;
  border-top: 1px dashed var(--color-card-lv2);
  font-family: var(--font-mono);
  font-size: .72rem;
  letter-spacing: 1px;
  color: var(--color-text-dim);
}
.lp-shp__case-meta::before {
  content: 'SCOPE / ';
  color: var(--color-primary);
}
.lp-shp__case-meta strong { color: var(--color-text); font-weight: 600; }

/* ====== Security audit CLI ====== */

.lp-shp__audit {
  background: rgba(10, 10, 18, 0.85);
  border: var(--rule);
  font-family: var(--font-mono);
  font-size: .9rem;
  overflow: hidden;
}
.lp-shp__audit-bar {
  display: flex; justify-content: space-between; align-items: center;
  padding: 10px 16px;
  border-bottom: var(--rule);
  background: rgba(255,255,255,.02);
  font-size: .7rem;
  letter-spacing: 1.5px;
  color: var(--color-text-dim);
  text-transform: uppercase;
}
.lp-shp__audit-bar::before {
  content: '◇ ops@your-infra';
  color: var(--color-primary);
}
.lp-shp__audit-bar::after {
  content: '5 checks · 0 failures';
  color: #6BE19F;
}
.lp-shp__audit-prompt {
  padding: 16px 20px 8px;
  color: var(--color-text);
  border-bottom: 1px dashed var(--color-card-lv2);
  font-size: .9rem;
}
.lp-shp__audit-prompt::before {
  content: '$ ';
  color: var(--color-primary);
  font-weight: 700;
}
.lp-shp__audit-prompt em {
  font-style: normal;
  color: var(--color-text-dim);
}
.lp-shp__audit-row {
  border-bottom: 1px solid var(--color-card-lv2);
}
.lp-shp__audit-row:last-child { border-bottom: none; }
.lp-shp__audit-row[open] {
  background: rgba(248,183,109,.03);
}
.lp-shp__audit-row[open] summary { color: var(--color-primary); }
.lp-shp__audit-row summary {
  list-style: none;
  cursor: pointer;
  padding: 14px 20px;
  display: grid;
  grid-template-columns: 70px 1fr auto auto;
  gap: 18px;
  align-items: center;
  color: var(--color-text);
  font-size: .9rem;
  transition: background .12s, color .12s;
}
.lp-shp__audit-row summary::-webkit-details-marker { display: none; }
.lp-shp__audit-row summary:hover { background: rgba(248,183,109,.06); }
.lp-shp__audit-row summary .ok {
  color: #6BE19F;
  font-weight: 700;
}
.lp-shp__audit-row summary .ok::before {
  content: '[ ✓ ] ';
  letter-spacing: 0;
}
.lp-shp__audit-row summary .name {
  color: var(--color-text);
  letter-spacing: 0.3px;
}
.lp-shp__audit-row[open] summary .name { color: var(--color-primary); }
.lp-shp__audit-row summary .tier {
  font-size: .68rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  padding: 3px 10px;
  border: 1px solid;
}
.lp-shp__audit-row summary .tier--ee  { color: var(--color-primary); border-color: var(--color-primary); }
.lp-shp__audit-row summary .tier--all { color: #6BE19F; border-color: #6BE19F; }
.lp-shp__audit-row summary .chev {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 4px;
  border-left: 6px solid var(--color-text-dim);
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  transition: transform .15s ease, border-left-color .15s ease;
  text-indent: -9999px;
  overflow: hidden;
}
.lp-shp__audit-row[open] summary .chev {
  transform: rotate(90deg);
  border-left-color: var(--color-primary);
}
.lp-shp__audit-detail {
  padding: 4px 20px 22px 86px;
  font-family: var(--font-sans);
  font-size: .92rem;
  line-height: 1.6;
  color: var(--color-text-muted);
  border-top: 1px dashed var(--color-card-lv2);
}
.lp-shp__audit-detail::before {
  content: '↳ ';
  color: var(--color-primary);
  font-family: var(--font-mono);
  margin-right: 4px;
}
.lp-shp__audit-detail code {
  background: rgba(248,183,109,.1);
  color: var(--color-primary);
  padding: 1px 6px;
  font-family: var(--font-mono);
  font-size: .85em;
}
.lp-shp__audit-detail strong { color: var(--color-text); font-weight: 600; }
@media (max-width: 640px) {
  .lp-shp__audit-row summary {
    grid-template-columns: auto 1fr auto;
    gap: 12px;
    font-size: .82rem;
  }
  .lp-shp__audit-row summary .tier { display: none; }
  .lp-shp__audit-detail { padding-left: 60px; }
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
  display: flex;
  flex-wrap: wrap;
  gap: 18px;
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
  <section class="lp-shp__hero">
    <div class="container">
      <div class="lp-shp__hero-grid">
        <div>
          <h1 class="lp-shp__hero-title">
            BYO LLM code review.
          </h1>
          <p class="lp-shp__hero-sub">
            Open source AI code review without vendor lock-in. The first model-agnostic AI code review tool with predictable AI review costs. You bring the model, we never touch your bill. Pay your provider directly with zero markup on inference, switch models in one config line, see every cent the review costs.
          </p>

          <div class="lp-shp__hero-ctas">
            <a href="#byok-config" class="btn btn--primary" id="lpByoModelBtn">Pick your model</a>
            <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn--outline-light" id="lpByoPricingBtn">See pricing</a>
          </div>
          <p class="lp-shp__hero-foot">
            <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" id="lpByoInstallBtn">Install on a VM</a>
            <span>&middot;</span>
            <a href="https://github.com/kodustech/kodus-installer" target="_blank" rel="noopener" id="lpByoInstallerBtn">Get the installer</a>
          </p>
        </div>

        <div class="lp-byo__flow" role="presentation" aria-hidden="true">
          <div class="lp-byo__flow-bar">
            <span class="lp-byo__flow-bar-title">the money path</span>
            <span class="lp-byo__flow-bar-meta">// 50 devs, annual rates</span>
          </div>

          <div class="lp-byo__flow-body">

            <div class="lp-byo__flow-scenario lp-byo__flow-scenario--bad">
              <div class="lp-byo__flow-label">
                <span class="lp-byo__flow-tag lp-byo__flow-tag--bad">Bundled vendor</span>
              </div>
              <div class="lp-byo__flow-pipe">
                <span class="lp-byo__flow-node">YOU</span>
                <span class="lp-byo__flow-arrow lp-byo__flow-arrow--bad"><strong>$2,400</strong> <i>&rarr;</i></span>
                <span class="lp-byo__flow-node lp-byo__flow-node--vendor">VENDOR<em>keeps $1,500</em></span>
                <span class="lp-byo__flow-arrow"><strong>~$900</strong> <i>&rarr;</i></span>
                <span class="lp-byo__flow-node lp-byo__flow-node--model">MODEL</span>
              </div>
            </div>

            <div class="lp-byo__flow-scenario lp-byo__flow-scenario--good">
              <div class="lp-byo__flow-label">
                <span class="lp-byo__flow-tag lp-byo__flow-tag--good">Kodus BYO</span>
              </div>
              <div class="lp-byo__flow-pipe">
                <span class="lp-byo__flow-node">YOU</span>
                <span class="lp-byo__flow-arrow lp-byo__flow-arrow--good"><strong>$818</strong> <i>&rarr;</i></span>
                <span class="lp-byo__flow-node lp-byo__flow-node--model">MODEL</span>
              </div>
            </div>

            <div class="lp-byo__flow-orchestration">
              <span class="lp-byo__flow-kodus">KODUS</span>
              <span class="lp-byo__flow-kodus-note">orchestrates only, never in the money path</span>
            </div>

            <div class="lp-byo__flow-payoff">
              <span class="lp-byo__flow-payoff-amount">&minus; $1,582/mo</span>
              <span class="lp-byo__flow-payoff-meta">Same review. 66% less spend. Every line item visible.</span>
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
          <strong>BYO LLM code review</strong> is when an AI code reviewer runs on a model you own (your account, your API key, your pricing), instead of a model bundled by the review vendor. The vendor charges for orchestration. You pay the model provider directly for inference, with no markup in the middle.
        </p>
      </div>
    </div>
  </section>

  <!-- ========== WHY BYO MATTERS ========== -->
  <section class="lp-shp__section">
    <div class="container">
      <span class="lp-shp__eyebrow">Why this matters</span>
      <h2 class="lp-shp__title">Three things a bundled model <span class="highlight">decides for you.</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        SaaS code review vendors that lock the model are deciding three things on your behalf. Each one looks like a feature in the marketing page and shows up as a bill or a migration headache later.
      </p>

      <div class="lp-byo__risks">
        <div class="lp-byo__risk">
          <span class="lp-byo__risk-num">01</span>
          <h3>Vendor lock-in on the model contract</h3>
          <p>The model lives behind the vendor's account. When you outgrow them, switching is not "swap an env var", it is renegotiating the entire review pipeline. With BYO LLM, the agent is the thing you can swap. The model contract stays where it always was: with the provider.</p>
        </div>
        <div class="lp-byo__risk">
          <span class="lp-byo__risk-num">02</span>
          <h3>Cost opacity on inference</h3>
          <p>Bundled-vendor pricing rolls inference into a per-seat fee. You cannot tell what fraction is the model and what fraction is margin. When the bill grows, you have no levers (cheaper model, smaller context, fewer reviews) because you do not see the math. BYO LLM gives you two invoices and an audit trail per request.</p>
        </div>
        <div class="lp-byo__risk">
          <span class="lp-byo__risk-num">03</span>
          <h3>Model lifecycle traps</h3>
          <p>Provider deprecates the snapshot the vendor bundled. The vendor moves you to the next default without telling you. Your review behavior shifts overnight. With BYO LLM, you pin the snapshot, you run a regression set on the candidate before flipping, and the deprecation is your calendar event, not a surprise.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== GUARANTEES ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <span class="lp-shp__eyebrow">Your model, your bill</span>
      <h2 class="lp-shp__title">You bring it. <span class="highlight">You own it.</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Bundled vendors decide which model you use, which version you run, when it gets deprecated, and what the markup is. BYO LLM puts every one of those decisions back on your side of the contract. Four guarantees ship with Kodus by default.
      </p>

      <div class="lp-shp__bnd-grid">
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-key.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <span class="lp-shp__bnd-num">01 ━</span>
          <h3>You pick the provider</h3>
          <p>OpenAI, Anthropic, Google, Groq, Together, Fireworks, an internal vLLM, an open-weight model on Ollama. The call goes where you point it. Kodus stays out of the routing.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-config.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <span class="lp-shp__bnd-num">02 ━</span>
          <h3>You pin the model version</h3>
          <p>Lock to <code>claude-sonnet-4-6</code>, <code>gpt-5.1</code>, or any specific release. No silent upgrades. When the provider deprecates a snapshot you decide when the next one ships, not us.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-taxa.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <span class="lp-shp__bnd-num">03 ━</span>
          <h3>You see the full LLM bill</h3>
          <p>Inference invoices land on your provider account, line-item per request. No hidden inference cost rolled into a per-seat fee. The bill matches the work and the math is yours to audit.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-money.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <span class="lp-shp__bnd-num">04 ━</span>
          <h3>Zero markup on inference</h3>
          <p>We charge per seat for orchestration. The model spend is between you and the provider, with nothing skimmed in the middle. Same applies to the self-hosted edition (which is free).</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== COST COMPARISON ========== -->
  <section class="lp-shp__section">
    <div class="container">
      <span class="lp-shp__eyebrow">What the bill looks like</span>
      <h2 class="lp-shp__title">Two invoices. <span class="highlight">One difference.</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Bundled-vendor pricing hides what the inference actually costs. BYO LLM splits the bill cleanly: orchestration on one side, inference on the other, both audited by you. Example below uses a 50-developer team on annual rates, running ~30 PRs per developer per month on Claude Sonnet 4.6.
      </p>

      <div class="lp-byo__receipts">

        <div class="lp-byo__receipt lp-byo__receipt--bad">
          <div class="lp-byo__receipt-head">
            <span class="lp-byo__receipt-vendor">Bundled vendor</span>
            <span class="lp-byo__receipt-id">INV-2026-04 &middot; CodeRabbit Pro (annual)</span>
          </div>
          <div class="lp-byo__receipt-rows">
            <div class="lp-byo__receipt-row">
              <span class="lp-byo__receipt-line">50 seats &middot; Pro &middot; $48/dev</span>
              <span class="lp-byo__receipt-amount">$2,400.00</span>
            </div>
            <div class="lp-byo__receipt-row lp-byo__receipt-row--hidden">
              <span class="lp-byo__receipt-line">Inference (bundled)</span>
              <span class="lp-byo__receipt-amount lp-byo__receipt-amount--hidden">hidden in seat fee</span>
            </div>
            <div class="lp-byo__receipt-row lp-byo__receipt-row--hidden">
              <span class="lp-byo__receipt-line">Markup on inference</span>
              <span class="lp-byo__receipt-amount lp-byo__receipt-amount--hidden">unknown</span>
            </div>
          </div>
          <div class="lp-byo__receipt-total">
            <span>Monthly total</span>
            <strong>$2,400.00</strong>
          </div>
          <p class="lp-byo__receipt-note">Inference cost is folded into the per-seat price. You cannot tell what the model actually costs or what margin sits on top. Monthly billing pushes this to $3,000 ($60/dev).</p>
        </div>

        <div class="lp-byo__receipt lp-byo__receipt--good">
          <div class="lp-byo__receipt-head">
            <span class="lp-byo__receipt-vendor">Kodus BYO</span>
            <span class="lp-byo__receipt-id">INV-2026-04 &middot; Kodus + your Anthropic account</span>
          </div>
          <div class="lp-byo__receipt-rows">
            <div class="lp-byo__receipt-row">
              <span class="lp-byo__receipt-line">50 seats &middot; Teams &middot; $8/dev annual</span>
              <span class="lp-byo__receipt-amount">$400.00</span>
            </div>
            <div class="lp-byo__receipt-row">
              <span class="lp-byo__receipt-line">Inference (Anthropic, passthrough)</span>
              <span class="lp-byo__receipt-amount">$418.20</span>
            </div>
            <div class="lp-byo__receipt-row">
              <span class="lp-byo__receipt-line">Markup on inference</span>
              <span class="lp-byo__receipt-amount lp-byo__receipt-amount--zero">$0.00</span>
            </div>
          </div>
          <div class="lp-byo__receipt-total">
            <span>Monthly total</span>
            <strong>$818.20</strong>
          </div>
          <p class="lp-byo__receipt-note">Two invoices, two providers, two line items you can take to finance. The inference invoice comes from Anthropic with your seat count, your token usage, your spend cap.</p>
        </div>

      </div>

      <div class="lp-byo__savings">
        <span class="lp-byo__savings-label">Monthly delta in this example</span>
        <span class="lp-byo__savings-amount">&minus; $1,581.80</span>
        <span class="lp-byo__savings-meta">66% lower at annual rates, even bigger at monthly billing. And the inference number is yours to optimize (Haiku for triage, Sonnet for review, internal vLLM for the sensitive repos).</span>
      </div>

      <p class="lp-byo__disclaimer">
        Numbers above use public list pricing as of 2026-05 on annual prepay: CodeRabbit Pro at $48/dev/month (or $60/dev/month if billed monthly), Kodus Teams at $8/dev/month (or $10/dev/month if billed monthly), Anthropic Claude Sonnet 4.6 at list passthrough rates. Inference estimate assumes ~3.5k input + ~600 output tokens per PR review across 1,500 reviewed PRs/month. Your bill will vary with model choice, PR size, and rule depth. Talk to us for a real estimate against your repo history.
      </p>
    </div>
  </section>

  <!-- ========== CALCULATOR (3 scenarios) ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <span class="lp-shp__eyebrow">Cost calculator</span>
      <h2 class="lp-shp__title">Run the math on <span class="highlight">your team.</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Three pre-computed scenarios across team size and model class. Pick the one closest to your shape. Numbers use public list pricing on annual prepay for both vendors, with Anthropic passthrough rates for the inference side.
      </p>

      <div class="lp-byo__calc">
        <input type="radio" name="calc-scenario" id="calc-a">
        <input type="radio" name="calc-scenario" id="calc-b" checked>
        <input type="radio" name="calc-scenario" id="calc-c">

        <div class="lp-byo__calc-nav">
          <label for="calc-a">
            <strong>Cost-optimized</strong>
            <span>10 devs &middot; Haiku 4.5</span>
          </label>
          <label for="calc-b">
            <strong>Balanced</strong>
            <span>50 devs &middot; Sonnet 4.6</span>
          </label>
          <label for="calc-c">
            <strong>Scale</strong>
            <span>200 devs &middot; Sonnet 4.6</span>
          </label>
        </div>

        <div class="lp-byo__calc-panels">

          <div class="lp-byo__calc-panel" id="panel-calc-a">
            <div class="lp-byo__calc-grid">
              <div class="lp-byo__calc-cell lp-byo__calc-cell--bad">
                <span class="lp-byo__calc-cell-label">CodeRabbit Pro</span>
                <span class="lp-byo__calc-cell-amount">$480/mo</span>
                <span class="lp-byo__calc-cell-detail">10 seats &times; $48 (annual prepay)</span>
              </div>
              <div class="lp-byo__calc-cell lp-byo__calc-cell--good">
                <span class="lp-byo__calc-cell-label">Kodus BYO</span>
                <span class="lp-byo__calc-cell-amount">$102/mo</span>
                <span class="lp-byo__calc-cell-detail">$80 seats + $22 Haiku 4.5 inference</span>
              </div>
              <div class="lp-byo__calc-cell lp-byo__calc-cell--save">
                <span class="lp-byo__calc-cell-label">Monthly delta</span>
                <span class="lp-byo__calc-cell-amount">&minus; $378/mo</span>
                <span class="lp-byo__calc-cell-detail">79% lower &middot; ~$4.5k/yr saved</span>
              </div>
            </div>
            <p class="lp-byo__calc-note">Smaller team, fast triage on Haiku. Inference is so cheap it almost vanishes against seats.</p>
          </div>

          <div class="lp-byo__calc-panel" id="panel-calc-b">
            <div class="lp-byo__calc-grid">
              <div class="lp-byo__calc-cell lp-byo__calc-cell--bad">
                <span class="lp-byo__calc-cell-label">CodeRabbit Pro</span>
                <span class="lp-byo__calc-cell-amount">$2,400/mo</span>
                <span class="lp-byo__calc-cell-detail">50 seats &times; $48 (annual prepay)</span>
              </div>
              <div class="lp-byo__calc-cell lp-byo__calc-cell--good">
                <span class="lp-byo__calc-cell-label">Kodus BYO</span>
                <span class="lp-byo__calc-cell-amount">$818/mo</span>
                <span class="lp-byo__calc-cell-detail">$400 seats + $418 Sonnet 4.6 inference</span>
              </div>
              <div class="lp-byo__calc-cell lp-byo__calc-cell--save">
                <span class="lp-byo__calc-cell-label">Monthly delta</span>
                <span class="lp-byo__calc-cell-amount">&minus; $1,582/mo</span>
                <span class="lp-byo__calc-cell-detail">66% lower &middot; ~$19k/yr saved</span>
              </div>
            </div>
            <p class="lp-byo__calc-note">Mid-sized team on Sonnet for balanced reasoning depth. This is the receipt comparison shown above.</p>
          </div>

          <div class="lp-byo__calc-panel" id="panel-calc-c">
            <div class="lp-byo__calc-grid">
              <div class="lp-byo__calc-cell lp-byo__calc-cell--bad">
                <span class="lp-byo__calc-cell-label">CodeRabbit Pro</span>
                <span class="lp-byo__calc-cell-amount">$9,600/mo</span>
                <span class="lp-byo__calc-cell-detail">200 seats &times; $48 (annual prepay)</span>
              </div>
              <div class="lp-byo__calc-cell lp-byo__calc-cell--good">
                <span class="lp-byo__calc-cell-label">Kodus BYO</span>
                <span class="lp-byo__calc-cell-amount">$3,272/mo</span>
                <span class="lp-byo__calc-cell-detail">$1,600 seats + $1,672 Sonnet 4.6 inference</span>
              </div>
              <div class="lp-byo__calc-cell lp-byo__calc-cell--save">
                <span class="lp-byo__calc-cell-label">Monthly delta</span>
                <span class="lp-byo__calc-cell-amount">&minus; $6,328/mo</span>
                <span class="lp-byo__calc-cell-detail">66% lower &middot; ~$76k/yr saved</span>
              </div>
            </div>
            <p class="lp-byo__calc-note">Larger org. Same model class, 4x the PR volume. Annual savings buys a senior eng FTE.</p>
          </div>

        </div>
      </div>

      <p class="lp-byo__disclaimer" style="margin-top: 24px;">
        All scenarios assume ~30 PRs per developer per month with ~3.5k input + ~600 output tokens per PR review on Anthropic list pricing. CodeRabbit Pro at $48/dev/month annual prepay ($60/dev/month monthly). Kodus Teams at $8/dev/month annual prepay ($10/dev/month monthly). Real numbers will vary with model choice, PR size, and rule depth. Reach out for a quote based on your actual repo history.
      </p>
    </div>
  </section>

  <!-- ========== HOW KODY REVIEWS ========== -->
  <section class="lp-hk">
    <div class="container">
      <div class="lp-hk__head">
        <span class="lp-hk__eyebrow">how kody reviews</span>
        <h2 class="lp-hk__title">From PR opened to <em>inline comments</em>. Four stages, the model you brought.</h2>
        <p class="lp-hk__sub">Deterministic pipeline. Real components in the repo, no marketing-ware. Click any stage to read the source.</p>
      </div>

      <div class="lp-hk__steps">

        <!-- 01 -->
        <a href="https://github.com/kodustech/kodus-ai/tree/main/apps" target="_blank" rel="noopener" class="lp-hk__row lp-hk__row--peach">
          <div class="lp-hk__viz">
            <span class="lp-hk__viz-num"><strong>01</strong> / 04</span>
            <span class="lp-hk__pulse" aria-hidden="true"></span>
          </div>
          <div class="lp-hk__card">
            <span class="lp-hk__tag">intake</span>
            <h3 class="lp-hk__h">Trigger from your Git host or the CLI.</h3>
            <p class="lp-hk__p">Webhooks come in from GitHub, GitLab, Bitbucket, and Azure DevOps. Self-managed flavors work the same way: GitHub Enterprise Server, GitLab Self-Managed, Bitbucket Data Center. Or skip the Git host entirely and trigger reviews from the Kodus CLI in your dev loop or CI.</p>
            <div class="lp-hk__logos">
              <span class="lp-hk__logo" aria-label="GitHub · GitHub Enterprise Server" title="GitHub · GitHub Enterprise Server">
                <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
              </span>
              <span class="lp-hk__logo" aria-label="GitLab · GitLab Self-Managed" title="GitLab · GitLab Self-Managed">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M22.65 14.39L12 22.13 1.35 14.39a.84.84 0 01-.3-.94l1.22-3.78 2.44-7.51A.42.42 0 014.82 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.49h8.1l2.44-7.51A.42.42 0 0118.6 2a.43.43 0 01.58 0 .42.42 0 01.11.18l2.44 7.51L23 13.45a.84.84 0 01-.35.94z"/></svg>
              </span>
              <span class="lp-hk__logo" aria-label="Bitbucket · Bitbucket Data Center" title="Bitbucket · Bitbucket Data Center">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M2.65 3A1 1 0 001.66 4.18l2.75 17.63a1.36 1.36 0 001.33 1.14h12.9a1 1 0 001-.85l2.75-17.92A1 1 0 0021.35 3zm11.59 12.83H9.84L8.9 9.57h6.28z"/></svg>
              </span>
              <span class="lp-hk__logo" aria-label="Azure DevOps" title="Azure DevOps">
                <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M0 8.877L2.247 5.91l8.405-3.416V.022l7.37 5.393L2.966 8.338v8.225L0 15.707zm24-4.45v14.651l-5.753 4.9-9.303-3.057v3.056l-5.978-7.416 15.057 1.98V2.244z"/></svg>
              </span>
              <span class="lp-hk__logos-sep"></span>
              <span class="lp-hk__logos-ref">CLI · webhooks</span>
            </div>
          </div>
        </a>

        <!-- 02 -->
        <a href="https://github.com/kodustech/kodus-ai/tree/main/libs/code-review/pipeline/stages" target="_blank" rel="noopener" class="lp-hk__row lp-hk__row--amber">
          <div class="lp-hk__viz">
            <span class="lp-hk__viz-num"><strong>02</strong> / 04</span>
            <div class="lp-hk__triplet" aria-hidden="true">
              <span></span><span></span><span></span>
            </div>
          </div>
          <div class="lp-hk__card">
            <span class="lp-hk__tag">context</span>
            <h3 class="lp-hk__h">Kody builds the picture before it writes anything.</h3>
            <p class="lp-hk__p">A sandbox is provisioned for the review (local on your box, hosted on E2B, or skipped entirely if you don't want one). Kody reads the diff, walks the code structure, and pulls in your Kody Rules and linked tickets. Everything assembled, then it starts looking for problems.</p>
            <div class="lp-hk__chips">
              <span class="lp-hk__chip lp-hk__chip--accent">sandbox · your choice</span>
              <span class="lp-hk__chip lp-hk__chip--accent">code graph</span>
              <span class="lp-hk__chip lp-hk__chip--accent">your rules + tickets</span>
            </div>
          </div>
        </a>

        <!-- 03 -->
        <a href="https://github.com/kodustech/kodus-ai/tree/main/libs/code-review/infrastructure/agents" target="_blank" rel="noopener" class="lp-hk__row lp-hk__row--lilac">
          <div class="lp-hk__viz">
            <span class="lp-hk__viz-num"><strong>03</strong> / 04</span>
            <div class="lp-hk__quad" aria-hidden="true">
              <span></span><span></span><span></span><span></span>
            </div>
          </div>
          <div class="lp-hk__card">
            <span class="lp-hk__tag">review</span>
            <h3 class="lp-hk__h">One reviewer by default. Four specialists when you ask for it.</h3>
            <p class="lp-hk__p">In normal mode Kody runs as a single generalist reviewer that covers logic, security, and performance in one pass, plus your Kody Rules agent if you have rules configured. Switch the review to <code>deep</code> mode and three dedicated specialists go in parallel instead. Same model you brought, same sandbox.</p>

            <div class="lp-hk__agents">
              <div class="lp-hk__agent">
                <div class="lp-hk__agent-name">Generalist</div>
                <p class="lp-hk__agent-desc">default · logic, security, and performance in one agent</p>
              </div>
              <div class="lp-hk__agent">
                <div class="lp-hk__agent-name">KodyRules</div>
                <p class="lp-hk__agent-desc">enforces your team's custom rules and conventions</p>
              </div>
              <div class="lp-hk__agent">
                <div class="lp-hk__agent-name">Bug / Security / Performance</div>
                <p class="lp-hk__agent-desc">deep mode · three specialists run in parallel</p>
              </div>
              <div class="lp-hk__agent">
                <div class="lp-hk__agent-name">BYO LLM</div>
                <p class="lp-hk__agent-desc">every agent uses the provider you set in .env</p>
              </div>
            </div>

            <div class="lp-hk__agent-note">findings collapse by semantic similarity · ranked critical / high / medium / low</div>
          </div>
        </a>

        <!-- 04 -->
        <a href="https://github.com/kodustech/kodus-ai/tree/main/libs/code-review/pipeline/stages" target="_blank" rel="noopener" class="lp-hk__row lp-hk__row--peach">
          <div class="lp-hk__viz">
            <span class="lp-hk__viz-num"><strong>04</strong> / 04</span>
            <span class="lp-hk__type" aria-hidden="true">cross-tenant leak</span>
          </div>
          <div class="lp-hk__card">
            <span class="lp-hk__tag">output</span>
            <h3 class="lp-hk__h">Findings come back on the PR or in the CLI.</h3>
            <p class="lp-hk__p">When the review starts on a PR, Kody posts line-anchored inline comments and sets approve or request-changes status, right next to the rest of your CI. When it starts from the CLI, the same findings stream back to your terminal as structured output you can pipe, fail builds on, or feed into another tool.</p>

            <div class="lp-hk__pr" aria-hidden="true">
              <div class="lp-hk__pr-bar"></div>
              <div class="lp-hk__pr-diff">
                <span class="line line--ctx"><span class="gut">42</span>  function isTenantAllowed(req) {</span>
                <span class="line line--del"><span class="gut">43</span>    if (typeof req.query.orgId !== 'string') return false;</span>
                <span class="line line--add"><span class="gut">43</span>    const raw = req.query.orgId;</span>
                <span class="line line--add"><span class="gut">44</span>    if (typeof raw !== 'string' || !UUID.test(raw)) return false;</span>
                <span class="line line--ctx"><span class="gut">45</span>    return tenants.has(raw);</span>
                <span class="line line--ctx"><span class="gut">46</span>  }</span>
              </div>
              <div class="lp-hk__pr-comment">
                The original guard accepted any string-shaped <strong>orgId</strong> and let an unrelated tenant's UUID through. Narrow with the UUID regex before the lookup, otherwise the route leaks cross-tenant rows under <code>/api/cockpit?orgId=...</code>.
              </div>
            </div>
          </div>
        </a>

      </div>

    </div>
  </section>

  <!-- legacy markup retained but hidden -->
  <section class="lp-shp__section" style="display:none" aria-hidden="true">
    <div class="container">
      <span class="lp-shp__eyebrow">// HOW KODY REVIEWS</span>
      <h2 class="lp-shp__title">From PR to <span class="highlight">inline comments</span>.</h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Webhook lands, sandbox spins up, AST graph builds, context loads from your tools, four specialized agents review in parallel, dedup runs, comments post back. All inside your network. Reference: <code>libs/code-review/pipeline/</code>.
      </p>

      <div class="lp-shp__stack-layout">
        <div class="lp-shp__demo" tabindex="0">
          <div class="lp-shp__demo-bar">
            <span class="dot dot--r"></span>
            <span class="dot dot--y"></span>
            <span class="dot dot--g"></span>
            <span class="t">kody.engine · live review</span>
            <span class="status">RUNNING</span>
          </div>
          <div class="lp-shp__demo-body">
            <span class="lp-shp__demo-line" style="animation-delay: 0.2s">
              <span class="p">$</span>pr #1247 received <span class="dim">· branch feat/auth-guard-tier</span><span class="tag">github</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 1.0s">
              <span class="ok">✓</span>context pack assembled
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 1.6s">
              &nbsp;&nbsp;<span class="dim">├─</span> sandbox up <span class="tag">e2b</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 2.2s">
              &nbsp;&nbsp;<span class="dim">├─</span> ast graph built <span class="dim">(12 files)</span><span class="tag">kodus-graph</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 2.8s">
              &nbsp;&nbsp;<span class="dim">└─</span> context loaded <span class="dim">jira KOD-301 + 3 docs</span><span class="tag">pgvector</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 3.6s">
              <span class="p">$</span>dispatching 4 agents in parallel
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 4.2s">
              &nbsp;&nbsp;<span class="dim">├─</span> <span style="color:var(--color-secondary)">BugAgent</span>          investigating<span class="tag tag--llm">claude-sonnet-4.6</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 4.5s">
              &nbsp;&nbsp;<span class="dim">├─</span> <span style="color:var(--color-secondary)">SecurityAgent</span>     investigating<span class="tag tag--llm">claude-sonnet-4.6</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 4.8s">
              &nbsp;&nbsp;<span class="dim">├─</span> <span style="color:var(--color-secondary)">PerformanceAgent</span>  investigating<span class="tag tag--llm">claude-sonnet-4.6</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 5.1s">
              &nbsp;&nbsp;<span class="dim">└─</span> <span style="color:var(--color-secondary)">KodyRulesAgent</span>   investigating<span class="tag tag--llm">claude-sonnet-4.6</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 8.5s">
              <span class="ok">✓</span>23 raw findings <span class="dim">→</span> 18 after dedup
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 9.0s">
              &nbsp;&nbsp;<span class="dim">├─</span> <span class="crit">3 critical</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 9.3s">
              &nbsp;&nbsp;<span class="dim">├─</span> <span class="high">7 high</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 9.6s">
              &nbsp;&nbsp;<span class="dim">├─</span> <span class="med">6 medium</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 9.9s">
              &nbsp;&nbsp;<span class="dim">└─</span> <span class="low">2 low</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 10.8s">
              <span class="p">$</span>posting inline comments...
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 11.6s">
              <span class="ok">✓</span>6 comments posted <span class="dim">·</span> status <span class="tag tag--ok">REQUEST_CHANGES</span>
            </span>
            <span class="lp-shp__demo-line" style="animation-delay: 12.2s">
              <span class="dim">completed in 47s · all inside your network<span class="lp-shp__demo-cur"></span></span>
            </span>
          </div>
          <div class="lp-shp__demo-foot">
            <span class="hint">hover to pause · loops every 22s</span>
            <span>libs/code-review/pipeline/ · agents in libs/code-review/infrastructure/agents/</span>
          </div>
        </div>

        <!-- legacy blueprint markup, kept hidden -->
        <div style="display:none" aria-hidden="true">
          <div class="lp-shp__bp-body">
            <div class="lp-shp__bp-rail">
              <div class="lp-shp__bp-rail-mark lp-shp__bp-rail-mark--short">A</div>
              <div class="lp-shp__bp-rail-mark">B</div>
              <div class="lp-shp__bp-rail-mark">C</div>
              <div class="lp-shp__bp-rail-mark lp-shp__bp-rail-mark--short">D</div>
              <div class="lp-shp__bp-rail-mark lp-shp__bp-rail-mark--short">E</div>
            </div>

            <div>
              <!-- A · INTAKE -->
              <div class="lp-shp__bp-stage">
                <div class="lp-shp__bp-stage-head">
                  <span class="lp-shp__bp-stage-id">A · INTAKE</span>
                  <span class="lp-shp__bp-stage-name">pull request received</span>
                  <span class="lp-shp__bp-stage-dim"></span>
                  <span class="lp-shp__bp-stage-ref">apps/webhooks</span>
                </div>
                <div class="lp-shp__bp-row lp-shp__bp-row--1">
                  <div class="lp-shp__bp-node lp-shp__bp-node--end">
                    <h4>webhook</h4>
                    <p>github · gitlab · azure · bitbucket → enqueued on rabbitmq for the worker.</p>
                  </div>
                </div>
              </div>

              <!-- B · CONTEXT PACK -->
              <div class="lp-shp__bp-stage">
                <div class="lp-shp__bp-stage-head">
                  <span class="lp-shp__bp-stage-id">B · CONTEXT PACK</span>
                  <span class="lp-shp__bp-stage-name">facts assembled for review</span>
                  <span class="lp-shp__bp-stage-dim"></span>
                  <span class="lp-shp__bp-stage-ref">libs/code-review/pipeline/stages</span>
                </div>
                <div class="lp-shp__bp-row lp-shp__bp-row--3">
                  <div class="lp-shp__bp-node">
                    <h4>sandbox</h4>
                    <p>e2b vm spins up. readFile, listDir, bash, run-cmd. agents get a real shell, not a string buffer.</p>
                  </div>
                  <div class="lp-shp__bp-node">
                    <h4>ast graph</h4>
                    <p>kodus-graph parses changed files + their call graph. caller/callee relations emit as xml.</p>
                  </div>
                  <div class="lp-shp__bp-node">
                    <h4>context loader</h4>
                    <p>pgvector rag pulls kody rules, conventions, linked jira / linear / docs into the prompt.</p>
                  </div>
                </div>
                <div class="lp-shp__bp-annot">deterministic order · sandbox is reused across reviews via lease</div>
              </div>

              <!-- C · MULTI-AGENT -->
              <div class="lp-shp__bp-stage">
                <div class="lp-shp__bp-stage-head">
                  <span class="lp-shp__bp-stage-id">C · AGENTS · PARALLEL</span>
                  <span class="lp-shp__bp-stage-name">four specialists investigate</span>
                  <span class="lp-shp__bp-stage-dim"></span>
                  <span class="lp-shp__bp-stage-ref">infrastructure/agents</span>
                </div>
                <div class="lp-shp__bp-row lp-shp__bp-row--4">
                  <div class="lp-shp__bp-node lp-shp__bp-node--alt">
                    <h4>BugAgent</h4>
                    <p>logic · edge cases · null safety · race conditions</p>
                  </div>
                  <div class="lp-shp__bp-node lp-shp__bp-node--alt">
                    <h4>SecurityAgent</h4>
                    <p>authz · injection · secrets · xss · idor</p>
                  </div>
                  <div class="lp-shp__bp-node lp-shp__bp-node--alt">
                    <h4>PerformanceAgent</h4>
                    <p>n+1 · hot loops · allocations · algorithms</p>
                  </div>
                  <div class="lp-shp__bp-node lp-shp__bp-node--alt">
                    <h4>KodyRulesAgent</h4>
                    <p>your team rules · architecture · conventions</p>
                  </div>
                </div>
                <div class="lp-shp__bp-annot">each agent runs its own llm loop with sandbox tools · byo provider · openai / anthropic / google / groq / cerebras / any openai-compatible</div>
              </div>

              <!-- D · DEDUP -->
              <div class="lp-shp__bp-stage">
                <div class="lp-shp__bp-stage-head">
                  <span class="lp-shp__bp-stage-id">D · DEDUP + RANK</span>
                  <span class="lp-shp__bp-stage-name">noise out, signal ranked</span>
                  <span class="lp-shp__bp-stage-dim"></span>
                  <span class="lp-shp__bp-stage-ref">agent-review.stage.ts</span>
                </div>
                <div class="lp-shp__bp-row lp-shp__bp-row--1">
                  <div class="lp-shp__bp-node">
                    <h4>semantic dedup · severity rank</h4>
                    <p>findings from all four agents collapsed by similarity. coverage ledger forces every changed file to be touched. results graded critical · high · medium · low.</p>
                  </div>
                </div>
              </div>

              <!-- E · OUTPUT -->
              <div class="lp-shp__bp-stage">
                <div class="lp-shp__bp-stage-head">
                  <span class="lp-shp__bp-stage-id">E · OUTPUT</span>
                  <span class="lp-shp__bp-stage-name">comments back on the pr</span>
                  <span class="lp-shp__bp-stage-dim"></span>
                  <span class="lp-shp__bp-stage-ref">create-file-comments.stage.ts</span>
                </div>
                <div class="lp-shp__bp-row lp-shp__bp-row--1">
                  <div class="lp-shp__bp-node lp-shp__bp-node--end">
                    <h4>inline comments + pr status</h4>
                    <p>line-anchored comments via the git provider's native api. status: approve or request-changes. github checks line up next to your other ci.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="lp-shp__bp-footer">
            <span><strong>DRAFTED</strong> kody-eng</span>
            <span><strong>CHECKED</strong> security-review</span>
            <span><strong>STATUS</strong> production · v2.0</span>
          </div>

          <!-- spacer to preserve responsive svg-removed layout, kept blank -->
          <svg class="lp-shp__diagram" viewBox="0 0 600 700" xmlns="http://www.w3.org/2000/svg" style="display:none;" aria-hidden="true">
            <defs>
              <marker id="arr2" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                <path d="M 0 0 L 10 5 L 0 10 z" class="arrow"/>
              </marker>
              <marker id="arrh2" viewBox="0 0 10 10" refX="9" refY="5" markerWidth="6" markerHeight="6" orient="auto-start-reverse">
                <path d="M 0 0 L 10 5 L 0 10 z" class="arrow--hot"/>
              </marker>
            </defs>

            <!-- 01 · PR event -->
            <rect class="badge" x="20" y="20" width="120" height="18"/>
            <text class="badge-text" x="30" y="33">01 · PR EVENT</text>
            <g class="q">
              <rect x="180" y="50" width="240" height="60"/>
              <text class="name" x="196" y="78">PR opened / pushed</text>
              <text class="role" x="196" y="96">github · gitlab · azure · bitbucket</text>
            </g>
            <path class="edge edge--hot" d="M 300 110 L 300 145" marker-end="url(#arrh2)"/>

            <!-- 02 · Context pack -->
            <rect class="badge" x="20" y="155" width="160" height="18"/>
            <text class="badge-text" x="30" y="168">02 · CONTEXT PACK</text>
            <g class="svc">
              <rect x="40" y="190" width="170" height="70"/>
              <text class="name" x="56" y="214">sandbox</text>
              <text class="role" x="56" y="232">e2b · isolated exec</text>
              <text class="role" x="56" y="247">readFile · bash</text>
            </g>
            <g class="svc">
              <rect x="225" y="190" width="150" height="70"/>
              <text class="name" x="241" y="214">ast graph</text>
              <text class="role" x="241" y="232">kodus-graph</text>
              <text class="role" x="241" y="247">call graph + xml</text>
            </g>
            <g class="svc">
              <rect x="390" y="190" width="170" height="70"/>
              <text class="name" x="406" y="214">context loader</text>
              <text class="role" x="406" y="232">pgvector rag</text>
              <text class="role" x="406" y="247">jira · linear · docs</text>
            </g>
            <path class="edge edge--hot" d="M 300 260 L 300 300" marker-end="url(#arrh2)"/>

            <!-- 03 · Multi-agent review -->
            <rect class="badge" x="20" y="310" width="200" height="18"/>
            <text class="badge-text" x="30" y="323">03 · MULTI-AGENT REVIEW · PARALLEL</text>
            <g class="ag">
              <rect x="14" y="345" width="138" height="74"/>
              <text class="name" x="28" y="368">BugAgent</text>
              <text class="role" x="28" y="386">logic · edge cases</text>
              <text class="role" x="28" y="402">null-safety · races</text>
            </g>
            <g class="ag">
              <rect x="160" y="345" width="138" height="74"/>
              <text class="name" x="174" y="368">SecurityAgent</text>
              <text class="role" x="174" y="386">authz · injection</text>
              <text class="role" x="174" y="402">secrets · xss</text>
            </g>
            <g class="ag">
              <rect x="306" y="345" width="138" height="74"/>
              <text class="name" x="320" y="368">PerformanceAgent</text>
              <text class="role" x="320" y="386">n+1 · hot loops</text>
              <text class="role" x="320" y="402">memory · algos</text>
            </g>
            <g class="ag">
              <rect x="452" y="345" width="138" height="74"/>
              <text class="name" x="466" y="368">KodyRulesAgent</text>
              <text class="role" x="466" y="386">your team rules</text>
              <text class="role" x="466" y="402">conventions</text>
            </g>

            <!-- Branch from context pack to each agent -->
            <path class="edge" d="M 300 300 L 83 345" marker-end="url(#arr2)"/>
            <path class="edge" d="M 300 300 L 229 345" marker-end="url(#arr2)"/>
            <path class="edge" d="M 300 300 L 375 345" marker-end="url(#arr2)"/>
            <path class="edge" d="M 300 300 L 521 345" marker-end="url(#arr2)"/>

            <!-- BYO LLM strip below agents -->
            <rect class="badge" x="20" y="435" width="180" height="18"/>
            <text class="badge-text" x="30" y="448">EACH AGENT · BYO LLM LOOP</text>
            <g class="svc">
              <rect x="60" y="465" width="480" height="48"/>
              <text class="role" x="76" y="485" style="fill: var(--color-text); font-size: 11px;">agent loop · LLM reasoning + sandbox tool calls</text>
              <text class="port" x="76" y="502">OpenAI · Anthropic · Google · Groq · Cerebras · or any OpenAI-compatible</text>
            </g>
            <path class="edge" d="M 83 419 L 100 465" marker-end="url(#arr2)"/>
            <path class="edge" d="M 229 419 L 230 465" marker-end="url(#arr2)"/>
            <path class="edge" d="M 375 419 L 370 465" marker-end="url(#arr2)"/>
            <path class="edge" d="M 521 419 L 500 465" marker-end="url(#arr2)"/>
            <path class="edge edge--hot" d="M 300 513 L 300 545" marker-end="url(#arrh2)"/>

            <!-- 04 · Dedup -->
            <rect class="badge" x="20" y="555" width="140" height="18"/>
            <text class="badge-text" x="30" y="568">04 · DEDUP + RANK</text>
            <g class="svc">
              <rect x="180" y="585" width="240" height="50"/>
              <text class="name" x="196" y="608">semantic dedup · severity rank</text>
              <text class="role" x="196" y="623">coverage ledger · critical / high / medium / low</text>
            </g>
            <path class="edge edge--hot" d="M 300 635 L 300 660" marker-end="url(#arrh2)"/>

            <!-- 05 · Inline comments back -->
            <g class="end">
              <rect x="100" y="665" width="400" height="32"/>
              <text class="name" x="116" y="687">05 · inline comments + PR status posted back</text>
            </g>
          </svg>
        </div>

        <div class="lp-shp__spec">
          <div class="lp-shp__spec-row lp-shp__spec-row--head">
            <span class="lp-shp__spec-k">resource</span>
            <span class="lp-shp__spec-v">minimum</span>
            <span class="lp-shp__spec-r">recommended</span>
          </div>
          <div class="lp-shp__spec-row">
            <span class="lp-shp__spec-k">CPU</span>
            <span class="lp-shp__spec-v">2+ cores</span>
            <span class="lp-shp__spec-r">4+ for repos &gt;100k LOC</span>
          </div>
          <div class="lp-shp__spec-row">
            <span class="lp-shp__spec-k">RAM</span>
            <span class="lp-shp__spec-v">8 GB</span>
            <span class="lp-shp__spec-r">16 GB with local sandbox</span>
          </div>
          <div class="lp-shp__spec-row">
            <span class="lp-shp__spec-k">DISK</span>
            <span class="lp-shp__spec-v">60 GB</span>
            <span class="lp-shp__spec-r">grows with PR volume</span>
          </div>
          <div class="lp-shp__spec-row">
            <span class="lp-shp__spec-k">OS</span>
            <span class="lp-shp__spec-v">Any Docker host</span>
            <span class="lp-shp__spec-r">Linux preferred</span>
          </div>
          <div class="lp-shp__spec-row">
            <span class="lp-shp__spec-k">NET</span>
            <span class="lp-shp__spec-v">Domain or fixed IP</span>
            <span class="lp-shp__spec-r">for Git webhooks</span>
          </div>
          <div class="lp-shp__spec-row">
            <span class="lp-shp__spec-k">PHONE</span>
            <span class="lp-shp__spec-v">Anonymous heartbeat</span>
            <span class="lp-shp__spec-r">opt-out via env</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== SUPPORTED MODELS / BYOK CONFIG ========== -->
  <section class="lp-shp__section lp-shp__byok-section" id="byok-config">
    <div class="container">
      <div class="lp-shp__byok-grid">
        <div>
          <span class="lp-shp__eyebrow">Supported providers</span>
          <h2 class="lp-shp__title">14+ providers. <span class="highlight">One config shape.</span></h2>
          <p class="lp-shp__lede">
            Run code review with Claude Sonnet 4.6, GPT-5.1, Gemini 2.5 Pro, Llama 3.3, Kimi K2, GLM 4.6, or any OpenAI-compatible endpoint you operate. Three env vars and the agent talks to any of them. Frontier models, speed-tuned inference, open weights. Same code path on every side.
          </p>

          <div class="lp-shp__byo-tiers">
            <div class="lp-shp__byo-tier">
              <span class="lp-shp__byo-tier-label">Frontier</span>
              <span class="lp-shp__pill">claude-opus-4-7</span>
              <span class="lp-shp__pill">claude-sonnet-4-6</span>
              <span class="lp-shp__pill">gpt-5.1</span>
              <span class="lp-shp__pill">gemini-2.5-pro</span>
            </div>
            <div class="lp-shp__byo-tier">
              <span class="lp-shp__byo-tier-label">Speed / cost</span>
              <span class="lp-shp__pill">claude-haiku-4-5</span>
              <span class="lp-shp__pill">groq llama-3.3-70b</span>
              <span class="lp-shp__pill">cerebras qwen3-coder</span>
              <span class="lp-shp__pill">together-ai</span>
              <span class="lp-shp__pill">fireworks</span>
            </div>
            <div class="lp-shp__byo-tier">
              <span class="lp-shp__byo-tier-label">Open weights</span>
              <span class="lp-shp__pill">llama-3.3</span>
              <span class="lp-shp__pill">mistral-large</span>
              <span class="lp-shp__pill">kimi-k2</span>
              <span class="lp-shp__pill">glm-4.6</span>
              <span class="lp-shp__pill">deepseek-v3</span>
            </div>
            <div class="lp-shp__byo-tier">
              <span class="lp-shp__byo-tier-label">Local / self-hosted</span>
              <span class="lp-shp__pill">vLLM</span>
              <span class="lp-shp__pill">Ollama</span>
              <span class="lp-shp__pill">TGI</span>
              <span class="lp-shp__pill">LiteLLM gateway</span>
              <span class="lp-shp__pill lp-shp__pill--accent">+ any OpenAI-compatible</span>
            </div>
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
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">gpt-5.1</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-anthropic">
<pre><span class="c"># Anthropic exposes an OpenAI-compatible endpoint.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"https://api.anthropic.com/v1"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"sk-ant-..."</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">claude-sonnet-4-6</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-google">
<pre><span class="c"># Gemini exposes an OpenAI-compatible endpoint.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"https://generativelanguage.googleapis.com/v1beta/openai"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"..."</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">gemini-2.5-pro</span></pre>
            </div>

            <div class="lp-shp__tabs-panel" id="panel-byok-local">
<pre><span class="c"># Same 3 vars. Point at your own gateway.</span>
<span class="c"># vLLM, Ollama, LiteLLM, TGI, any OpenAI-compatible server.</span>
<span class="k">API_OPENAI_FORCE_BASE_URL</span>=<span class="s">"http://llm.internal.your-co/v1"</span>
<span class="k">API_OPEN_AI_API_KEY</span>=<span class="s">"sk-local-anything"</span>
<span class="k">API_LLM_PROVIDER_MODEL</span>=<span class="v">your-local-model</span></pre>
            </div>
          </div>

          <p class="lp-shp__tabs-note">One config shape. The base URL is the switch. Kody never knows which vendor is on the other end.</p>
        </div>
      </div>

      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-key.webp" alt="" class="lp-shp__byok-kody" loading="lazy">
    </div>
  </section>

  <!-- ========== COMPETITOR COMPARISON ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <span class="lp-shp__eyebrow">BYO LLM vs alternatives</span>
      <h2 class="lp-shp__title">Kodus is the BYO-friendly side. <span class="highlight">Everyone else bundles.</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Most AI code review vendors lock the model. The honest exception is PR-Agent, the open source agent Qodo donated to the community in late 2025 (now maintained at <code>the-PR-Agent/pr-agent</code>, distinct from Qodo's commercial Qodo Merge). Below: how Kodus, PR-Agent, and the bundled crowd stack on the eight things that matter for BYO LLM teams.
      </p>

      <div class="lp-shp__cmp-verdict">
        <div class="lp-shp__cmp-verdict-head">
          <span class="lp-shp__cmp-verdict-tag">Verdict</span>
          <h3 class="lp-shp__cmp-verdict-title">
            Only tool that ships <span class="highlight">all 8 properties</span> with a free hosted option.
          </h3>
        </div>
        <div class="lp-shp__cmp-verdict-bars">
          <div class="lp-shp__cmp-verdict-row lp-shp__cmp-verdict-row--kodus">
            <span class="lp-shp__cmp-verdict-name">Kodus</span>
            <span class="lp-shp__cmp-verdict-bar" style="--filled: 8;"></span>
            <span class="lp-shp__cmp-verdict-score">8 / 8</span>
          </div>
          <div class="lp-shp__cmp-verdict-row">
            <span class="lp-shp__cmp-verdict-name">PR-Agent (OSS)</span>
            <span class="lp-shp__cmp-verdict-bar" style="--filled: 7;"></span>
            <span class="lp-shp__cmp-verdict-score">7 / 8</span>
          </div>
          <div class="lp-shp__cmp-verdict-row">
            <span class="lp-shp__cmp-verdict-name">Sourcery</span>
            <span class="lp-shp__cmp-verdict-bar" style="--filled: 2;"></span>
            <span class="lp-shp__cmp-verdict-score">2 / 8</span>
          </div>
          <div class="lp-shp__cmp-verdict-row">
            <span class="lp-shp__cmp-verdict-name">CodeRabbit</span>
            <span class="lp-shp__cmp-verdict-bar" style="--filled: 1;"></span>
            <span class="lp-shp__cmp-verdict-score">1 / 8</span>
          </div>
          <div class="lp-shp__cmp-verdict-row">
            <span class="lp-shp__cmp-verdict-name">Greptile</span>
            <span class="lp-shp__cmp-verdict-bar" style="--filled: 1;"></span>
            <span class="lp-shp__cmp-verdict-score">1 / 8</span>
          </div>
        </div>
      </div>

      <div class="lp-shp__cmp-wrap">
        <table class="lp-shp__cmp" aria-label="BYO LLM code review tools comparison">
          <thead>
            <tr>
              <th style="width: 26%;">Capability</th>
              <th class="kodus" style="width: 19%;">
                <span class="lp-shp__cmp-brand">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kodus_dark.webp" class="lp-shp__cmp-logo" alt="">
                  Kodus
                </span>
              </th>
              <th style="width: 13.75%;">
                <span class="lp-shp__cmp-brand">
                  <span class="lp-shp__cmp-mono">PA</span>
                  PR-Agent
                </span>
              </th>
              <th style="width: 13.75%;">
                <span class="lp-shp__cmp-brand">
                  <span class="lp-shp__cmp-mono">SC</span>
                  Sourcery
                </span>
              </th>
              <th style="width: 13.75%;">
                <span class="lp-shp__cmp-brand">
                  <span class="lp-shp__cmp-mono">CR</span>
                  CodeRabbit
                </span>
              </th>
              <th style="width: 13.75%;">
                <span class="lp-shp__cmp-brand">
                  <span class="lp-shp__cmp-mono">GR</span>
                  Greptile
                </span>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="lp-shp__cmp-cat">
              <th colspan="6">Models &amp; providers</th>
            </tr>
            <tr>
              <td>Bring your own API key</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Enterprise only</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Bundled</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Bundled</span></td>
            </tr>
            <tr>
              <td>Multi-provider support</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">14+ providers</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">LiteLLM (many)</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Proprietary</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Internal routing</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Internal routing</span></td>
            </tr>
            <tr>
              <td>Pin specific model version</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
            </tr>
            <tr>
              <td>Local / open-weight models</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">vLLM, Ollama, TGI</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Ollama, vLLM</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
            </tr>

            <tr class="lp-shp__cmp-cat">
              <th colspan="6">Cost &amp; transparency</th>
            </tr>
            <tr>
              <td>Zero markup on inference</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes (OSS)</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Bundled</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Bundled</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Bundled</span></td>
            </tr>
            <tr>
              <td>Inference billed separately</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Opaque</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Opaque</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Opaque</span></td>
            </tr>

            <tr class="lp-shp__cmp-cat">
              <th colspan="6">Product &amp; access</th>
            </tr>
            <tr>
              <td>Free hosted Cloud option</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Yes</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">Self-host only</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Free for OSS</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Trial</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--part">Trial</span></td>
            </tr>
            <tr>
              <td>Open source agent</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">AGPLv3</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Apache 2.0</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ========== USE CASES ========== -->
  <section class="lp-shp__section">
    <div class="container">
      <span class="lp-shp__eyebrow">Where BYO LLM pays off</span>
      <h2 class="lp-shp__title">For teams whose AI bill <span class="highlight">should not be a mystery.</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        Cost-aware engineering orgs, multi-team companies juggling more than one model, and security teams that can't approve a black-box inference pipeline. BYO LLM gives all three the same thing: a model their finance, security, and platform people can actually reason about.
      </p>

      <div class="lp-shp__cases-grid">
        <div class="lp-shp__case">
          <span class="lp-shp__case-tab">File &middot; 01-COST</span>
          <span class="lp-shp__case-stamp">FINANCE</span>
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-money.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Cost-conscious teams</span>
          <h3>One bill per provider. No surprises.</h3>
          <p>The inference invoice comes from Anthropic or OpenAI with token-level detail. Finance can forecast spend by repo, model, or month. Hit a budget cap and your provider stops the bleed, not us.</p>
          <div class="lp-shp__case-meta"><strong>FinOps &middot; per-repo budgets &middot; token caps</strong></div>
        </div>
        <div class="lp-shp__case">
          <span class="lp-shp__case-tab">File &middot; 02-LIFECYCLE</span>
          <span class="lp-shp__case-stamp">PIN</span>
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-config.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Model lifecycle control</span>
          <h3>Upgrade on your schedule, not theirs.</h3>
          <p>Pin a snapshot the day it ships. Run a regression set against your real PR history before flipping the model env var. Deprecation timelines and behavior changes stop being an unannounced incident.</p>
          <div class="lp-shp__case-meta"><strong>Version pinning &middot; regression sets &middot; change windows</strong></div>
        </div>
        <div class="lp-shp__case">
          <span class="lp-shp__case-tab">File &middot; 03-MULTI</span>
          <span class="lp-shp__case-stamp">MIX</span>
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-team.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Multi-model orgs</span>
          <h3>Different repos, different models.</h3>
          <p>Backend on Sonnet for cross-file reasoning, frontend on Haiku for cost, an internal vLLM endpoint for the data-platform repo that can't call out. One agent, one config shape, three model routes.</p>
          <div class="lp-shp__case-meta"><strong>Per-repo routing &middot; cost-tier mixing &middot; internal endpoints</strong></div>
        </div>
        <div class="lp-shp__case">
          <span class="lp-shp__case-tab">File &middot; 04-OSS</span>
          <span class="lp-shp__case-stamp">OPEN</span>
          <img class="lp-shp__case-kody" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kody-mage.webp" alt="" loading="lazy">
          <span class="lp-shp__case-tag">Open-weight commitment</span>
          <h3>Run the review on a model you can read.</h3>
          <p>Llama, Mistral, Qwen, GLM, Kimi, DeepSeek. If your governance policy says no closed-weight models in the loop, point Kodus at an internal inference server and the agent never knows the difference.</p>
          <div class="lp-shp__case-meta"><strong>Open weights &middot; vLLM &middot; TGI &middot; Ollama</strong></div>
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
                <span class="faq__question-text">kodus --help "What does BYO LLM actually mean?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>It means the LLM provider is on your side of the contract. Your API key, your account, your usage caps, your invoice. Kodus orchestrates the review and sends the prompts, but the inference call hits your provider directly. There is no Kodus middleman in the request, the billing, or the rate limit. It is open source AI code review without vendor lock-in.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "Does Kodus charge any markup on inference?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>No. We charge per seat for the agent, orchestration, web UI, and the rule engine. Inference is billed by your provider at their list price. Self-hosted edition is free under AGPLv3 with the same model setup. The number on your seat invoice and the number on your Anthropic/OpenAI invoice are independent.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "Which providers are supported?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>OpenAI, Anthropic, Google Gemini, Google Vertex AI, Novita, Groq, Cerebras, Together AI, Fireworks, Chutes, Moonshot / Kimi, Synthetic, and Z.ai / GLM are wired in. Anything else with an OpenAI-compatible API works through <code>API_OPENAI_FORCE_BASE_URL</code>, including an internal vLLM, TGI, LiteLLM, or Ollama instance you operate. Three env vars cover every case.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "Can I use a local or open-weight model?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes. Point <code>API_OPENAI_FORCE_BASE_URL</code> at your internal inference endpoint (vLLM, TGI, Ollama, LiteLLM, or any OpenAI-compatible server). Set the model name in <code>API_LLM_PROVIDER_MODEL</code>. The agent does not need to know if Llama, Mistral, GLM, Kimi, DeepSeek, or anything else is on the other end of the wire.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "Can I pin a specific model version?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes. Use the exact snapshot string the provider exposes: <code>claude-sonnet-4-6</code>, <code>gpt-5.1-2026-04-15</code>, <code>gemini-2.5-pro</code>. Kodus does not pick a model behind your back. When the provider deprecates a snapshot, you decide when the next pin ships.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "Can I switch models per repo?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Yes. The agent reads model config per repository, so the backend repo can run on Sonnet 4.6 for cross-file reasoning while the frontend repo runs on Haiku 4.5 for cost. The internal data-platform repo can route to a local vLLM endpoint. Same agent binary, three different model paths.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "Is there a default model if I don't bring one?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>On Cloud, yes: a hosted default kicks in during trial so you can test without setup. On self-hosted, no, because there is no Kodus account to bill against. You must set <code>API_OPENAI_FORCE_BASE_URL</code>, <code>API_OPEN_AI_API_KEY</code>, and <code>API_LLM_PROVIDER_MODEL</code> in <code>.env</code> before the agent can call out.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "What happens when a model gets deprecated?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>The provider notifies you on their normal cadence. We do not silently swap the model. We maintain a regression test set of historical PRs and recommend running it against the candidate version before flipping the env var. That lets you measure the behavior delta on real diffs instead of trusting marketing copy.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "How do I compare costs across providers?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Two ways. Static: each review logs token counts and the provider invoice gives you cost per call, so you can rebuild the math in BigQuery or your data warehouse. Dynamic: run the same PR through two different model env vars and compare findings. Cheap models triage, expensive models go deep. Use the cheaper one until it misses something that matters.</p>
              </div>
            </div>

            <div class="faq__item">
              <button class="faq__question">
                <span class="faq__prompt">$</span>
                <span class="faq__question-text">kodus --help "How does Kodus compare to PR-Agent on BYO LLM?"</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>PR-Agent is the honest peer on BYO LLM mechanics. It is the open source agent Qodo donated to the community in late 2025, now maintained at <code>the-PR-Agent/pr-agent</code> (11k+ stars, active releases through 2026). It is a separate project from Qodo Merge, which is Qodo's commercial paid product with bundled models. Both Kodus and PR-Agent bring your key, pin model versions, support local models, and run open source. The difference is on the product side: Kodus ships a free hosted Cloud option (PR-Agent is self-host only), a polished web UI for review history and Kody Rules, and first-class integrations with GitHub Enterprise Server, GitLab Self-Managed, and Bitbucket Data Center. Pick PR-Agent if CLI-first OSS-only is your stance. Pick Kodus if you want the same BYO LLM mechanics plus a managed surface for the rest of the team.</p>
              </div>
            </div>

          </div>

          <div class="faq__man-footer">
            <span class="faq__man-section">Kodus v2.0</span>
            <span class="faq__man-center">2026-05-11</span>
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
          <span class="lp-shp__eyebrow">Ship it</span>
          <h2 class="lp-shp__final-title">
            Pick your model. <span class="highlight">Run the review.</span>
          </h2>
          <p class="lp-shp__final-sub">
            Three env vars and the agent talks to any OpenAI-compatible provider. Switch in one line. No markup, ever.
          </p>
          <div class="lp-shp__final-ctas">
            <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn--primary" id="lpByoFinalPricingBtn">See pricing</a>
            <a href="#byok-config" class="btn btn--outline-light" id="lpByoFinalConfigBtn">See the config</a>
          </div>
          <div class="lp-shp__final-aside">
            <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" id="lpByoFinalInstallBtn">Install on a VM</a>
            <a href="https://github.com/kodustech/kodus-ai" target="_blank" rel="noopener" id="lpByoFinalGithubBtn">Star kodus-ai on GitHub</a>
          </div>
        </div>

        <div class="lp-shp__final-terminal" aria-hidden="true">
          <div class="lp-shp__final-terminal-bar">
            <i></i><i></i><i></i>
            <span>your-laptop &middot; .env</span>
          </div>
          <div class="lp-shp__final-terminal-body">
<span class="lp-shp__final-terminal-line">API_OPENAI_FORCE_BASE_URL="https://api.anthropic.com/v1"</span>
<span class="lp-shp__final-terminal-line">API_OPEN_AI_API_KEY="sk-ant-..."</span>
<span class="lp-shp__final-terminal-line">API_LLM_PROVIDER_MODEL=claude-sonnet-4-6</span>
<span class="lp-shp__final-terminal-line lp-shp__final-terminal-line--ok">kody is reviewing PR #42 with Claude Sonnet 4.6</span>
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
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Kodus", "item": "https://kodus.io/"},
    {"@type": "ListItem", "position": 2, "name": "BYO LLM Code Review", "item": "https://kodus.io/byo-llm-code-review/"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "Kodus BYO LLM",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Web, Linux, Docker",
  "url": "https://kodus.io/byo-llm-code-review/",
  "description": "Open source AI code review without vendor lock-in. Bring your own LLM provider (OpenAI, Anthropic, Gemini, local vLLM, anything OpenAI-compatible). Zero markup on inference. AGPLv3 self-hosted edition.",
  "license": "https://www.gnu.org/licenses/agpl-3.0.html",
  "softwareVersion": "2.0",
  "downloadUrl": "https://github.com/kodustech/kodus-ai",
  "featureList": [
    "Bring your own LLM API key",
    "14+ supported providers via OpenAI-compatible interface",
    "Pin specific model versions",
    "Switch models per repository",
    "Zero markup on inference cost",
    "Local and open-weight model support (vLLM, Ollama, TGI)"
  ],
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
  "about": "Comparison of BYO LLM AI code review tools",
  "name": "Kodus BYO LLM vs PR-Agent, Sourcery, CodeRabbit, Greptile",
  "url": "https://kodus.io/byo-llm-code-review/#comparison",
  "isPartOf": {
    "@type": "WebPage",
    "url": "https://kodus.io/byo-llm-code-review/"
  },
  "mainEntity": [
    {"@type": "PropertyValue", "name": "Bring your own API key", "value": "Kodus: Yes; PR-Agent: Yes; Sourcery: Enterprise only; CodeRabbit: Bundled; Greptile: Bundled"},
    {"@type": "PropertyValue", "name": "Multi-provider support", "value": "Kodus: 14+ providers; PR-Agent: LiteLLM (many); Sourcery: Proprietary; CodeRabbit: Internal routing; Greptile: Internal routing"},
    {"@type": "PropertyValue", "name": "Pin specific model version", "value": "Kodus: Yes; PR-Agent: Yes; Sourcery: No; CodeRabbit: No; Greptile: No"},
    {"@type": "PropertyValue", "name": "Local / open-weight models", "value": "Kodus: vLLM, Ollama, TGI; PR-Agent: Ollama, vLLM; Sourcery: No; CodeRabbit: No; Greptile: No"},
    {"@type": "PropertyValue", "name": "Zero markup on inference", "value": "Kodus: Yes; PR-Agent: Yes (OSS); Sourcery: Bundled; CodeRabbit: Bundled; Greptile: Bundled"},
    {"@type": "PropertyValue", "name": "Inference billed separately", "value": "Kodus: Yes; PR-Agent: Yes; Sourcery: Opaque; CodeRabbit: Opaque; Greptile: Opaque"},
    {"@type": "PropertyValue", "name": "Free hosted Cloud option", "value": "Kodus: Yes; PR-Agent: Self-host only; Sourcery: Free for OSS; CodeRabbit: Trial; Greptile: Trial"},
    {"@type": "PropertyValue", "name": "Open source agent", "value": "Kodus: AGPLv3; PR-Agent: Apache 2.0; Sourcery: No; CodeRabbit: No; Greptile: No"}
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "@id": "https://kodus.io/byo-llm-code-review/#pr-agent",
  "name": "PR-Agent",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Linux, Docker",
  "url": "https://github.com/The-PR-Agent/pr-agent",
  "description": "Open source AI code review agent supporting bring-your-own-LLM via LiteLLM. Donated by Qodo to the community in late 2025. Apache 2.0.",
  "license": "https://www.apache.org/licenses/LICENSE-2.0",
  "downloadUrl": "https://github.com/The-PR-Agent/pr-agent",
  "offers": {"@type": "Offer", "price": "0", "priceCurrency": "USD", "description": "Open source, self-host only"}
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "@id": "https://kodus.io/byo-llm-code-review/#sourcery",
  "name": "Sourcery",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Web",
  "url": "https://sourcery.ai/",
  "description": "AI code review tool with proprietary models. BYO LLM endpoint is enterprise-tier only. Free tier covers open-source repos.",
  "offers": {"@type": "Offer", "price": "12", "priceCurrency": "USD", "description": "Pro plan starting at $12 per seat per month"}
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "@id": "https://kodus.io/byo-llm-code-review/#coderabbit",
  "name": "CodeRabbit",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Web",
  "url": "https://coderabbit.ai/",
  "description": "Cloud-only AI code review with bundled multi-LLM routing internal to the vendor. No bring-your-own-LLM option.",
  "offers": {"@type": "Offer", "price": "48", "priceCurrency": "USD", "description": "Pro plan at $48 per seat per month with annual prepay, $60 per seat per month if billed monthly"}
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "@id": "https://kodus.io/byo-llm-code-review/#greptile",
  "name": "Greptile",
  "applicationCategory": "DeveloperApplication",
  "operatingSystem": "Web",
  "url": "https://greptile.com/",
  "description": "AI code review with full-repo context. Bundled LLM, usage-based pricing. No bring-your-own-LLM by default. Self-hosting available on enterprise.",
  "offers": {"@type": "Offer", "priceCurrency": "USD", "description": "Usage-based billing, contact for enterprise self-hosted"}
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type": "Question", "name": "What does BYO LLM actually mean?", "acceptedAnswer": {"@type": "Answer", "text": "It means the LLM provider is on your side of the contract. Your API key, your account, your usage caps, your invoice. Kodus orchestrates the review and sends the prompts, but the inference call hits your provider directly. There is no Kodus middleman in the request, the billing, or the rate limit. It is open source AI code review without vendor lock-in."}},
    {"@type": "Question", "name": "Does Kodus charge any markup on inference?", "acceptedAnswer": {"@type": "Answer", "text": "No. We charge per seat for the agent, orchestration, web UI, and the rule engine. Inference is billed by your provider at their list price. Self-hosted edition is free under AGPLv3 with the same model setup."}},
    {"@type": "Question", "name": "Which providers are supported?", "acceptedAnswer": {"@type": "Answer", "text": "OpenAI, Anthropic, Google Gemini, Vertex AI, Novita, Groq, Cerebras, Together AI, Fireworks, Chutes, Moonshot/Kimi, Synthetic, and Z.ai/GLM are wired in. Anything else OpenAI-compatible works through API_OPENAI_FORCE_BASE_URL, including internal vLLM, TGI, LiteLLM, or Ollama."}},
    {"@type": "Question", "name": "Can I use a local or open-weight model?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Point API_OPENAI_FORCE_BASE_URL at your internal inference endpoint (vLLM, TGI, Ollama, LiteLLM). The agent does not know if Llama, Mistral, GLM, Kimi, or DeepSeek is on the other end."}},
    {"@type": "Question", "name": "Can I pin a specific model version?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. Use the exact snapshot string the provider exposes, like claude-sonnet-4-6 or gpt-5.1-2026-04-15. Kodus does not pick a model behind your back."}},
    {"@type": "Question", "name": "Can I switch models per repo?", "acceptedAnswer": {"@type": "Answer", "text": "Yes. The agent reads model config per repository, so backend can run on Sonnet 4.6 while frontend runs on Haiku 4.5 and the data-platform repo routes to a local vLLM."}},
    {"@type": "Question", "name": "Is there a default model if I do not bring one?", "acceptedAnswer": {"@type": "Answer", "text": "On Cloud, yes: a hosted default kicks in during trial. On self-hosted, no, you must set the three .env vars before the agent can call out."}},
    {"@type": "Question", "name": "What happens when a model gets deprecated?", "acceptedAnswer": {"@type": "Answer", "text": "The provider notifies you. We do not silently swap the model. We recommend running a regression set of historical PRs against the candidate version before flipping the env var."}},
    {"@type": "Question", "name": "How do I compare costs across providers?", "acceptedAnswer": {"@type": "Answer", "text": "Each review logs token counts and the provider invoice gives cost per call. You can rebuild the math in BigQuery or your data warehouse, or run the same PR through two model env vars and compare findings."}},
    {"@type": "Question", "name": "How does Kodus compare to PR-Agent on BYO LLM?", "acceptedAnswer": {"@type": "Answer", "text": "PR-Agent is the honest peer on BYO LLM mechanics. It is the open source agent Qodo donated to the community in late 2025, now maintained at the-PR-Agent/pr-agent, distinct from Qodo's commercial Qodo Merge. Both Kodus and PR-Agent bring your key, pin versions, support local models, run open source. The difference is on the product side: Kodus ships a free hosted Cloud option, polished web UI, and first-class GitHub Enterprise Server, GitLab Self-Managed, and Bitbucket Data Center integrations."}}
  ]
}
</script>

<?php get_footer('kodus'); ?>
