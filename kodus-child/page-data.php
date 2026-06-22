<?php
/*
 * Template Name: Kodus Data Report
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<style>
/* ============================================================
   STATE OF AI CODE REVIEW 2026 — data report (/data)
   Lean: minimal chrome, minimal copy. Data is the hero.
   Prefix: .soc
   ============================================================ */
.soc {
  --rule: 1px solid var(--color-card-lv2);
  --good: #6FBF73;
  --bad: #E07A7A;
  --peach: var(--color-tertiary, #FDBFBF);
  --color-text-dim: #9AA0B6; /* lift faint text on the report (was 50%-alpha white) */
  overflow-x: clip;
}

/* ===================== HERO — Stat-Led "the climb" ===================== */
.soc__hero { padding: 104px 0 96px; }
.soc__hero-tag {
  display: inline-flex; align-items: center; gap: 9px;
  font-family: var(--font-mono); font-size: .72rem; letter-spacing: 1.8px; font-weight: 500;
  text-transform: uppercase; color: var(--color-text-muted);
  background: var(--color-card-lv1);
  border: 1px solid var(--color-card-lv3); padding: 7px 14px; border-radius: 999px; margin-bottom: 40px;
}
.soc__hero-tag i { width: 7px; height: 7px; background: var(--good); border-radius: 50%; display: inline-block; }
.soc__hero-title {
  font-family: var(--font-pixel); font-size: clamp(1.6rem, 4vw, 2.9rem);
  line-height: 1.32; margin: 0 0 28px; color: var(--color-text); letter-spacing: 0;
  max-width: 17ch; text-wrap: balance;
}
.soc__hero-title .highlight { color: var(--color-primary); }
.soc__hero-lede {
  font-family: var(--font-mono); font-size: clamp(1.02rem, 1.5vw, 1.18rem);
  line-height: 1.85; color: var(--color-text-muted); margin: 0; max-width: 50ch;
}
.soc__hero-lede strong { color: var(--color-primary); font-weight: 700; }
.soc__hero-kicker { font-family: var(--font-mono); font-size: .82rem; letter-spacing: 2.5px; text-transform: uppercase; color: var(--color-secondary); margin: 0 0 20px; }
.soc__hero-proof { font-family: var(--font-mono); font-size: .82rem; color: var(--color-text-dim); margin: 20px 0 0; }
.soc__hero-proof b { color: var(--color-text-muted); font-weight: 700; }

/* The climb — signature centerpiece: line rises toward the big number */
.soc__climb { display: flex; align-items: stretch; gap: 28px; margin: 28px 0 26px; }
.soc__climb-chartwrap { position: relative; flex: 1; min-width: 0; height: 300px; }
.soc__climb-chart { position: absolute; inset: 0; }
.soc__climb-start { position: absolute; left: 2px; bottom: 22px; z-index: 2; pointer-events: none; font-family: var(--font-mono); font-size: .68rem; line-height: 1.4; color: var(--color-text-dim); letter-spacing: 1px; }
.soc__climb-start b { color: var(--color-text-muted); font-weight: 700; font-size: .95rem; }
.soc__climb-end { flex-shrink: 0; align-self: center; max-width: 36%; }
.soc__climb-end b { display: block; font-family: var(--font-pixel); font-size: clamp(2.6rem, 6.5vw, 4.6rem); color: var(--color-primary); line-height: .95; letter-spacing: -1px; }
.soc__climb-end b svg { width: .5em; height: .5em; vertical-align: .04em; margin-left: .06em; }
.soc__climb-end span { display: block; margin-top: 10px; font-family: var(--font-mono); font-size: .68rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); }
@media (max-width: 700px) {
  .soc__climb { flex-direction: column; align-items: flex-start; gap: 8px; margin: 20px 0; }
  .soc__climb-chartwrap { flex: 0 0 auto; width: 100%; height: 190px; order: 2; }
  .soc__climb-end { align-self: flex-start; max-width: none; order: 1; }
  .soc__climb-end b { font-size: 3rem; }
  .soc__climb-start { display: none; }
}

/* hero foot — credibility strip + CTAs + secondary pull */
.soc__hero-foot { display: flex; flex-wrap: wrap; align-items: center; gap: 16px 26px; }
.soc__score { display: flex; border: 1px solid var(--color-card-lv2); border-radius: 5px; overflow: hidden; }
.soc__score-item { padding: 11px 18px; border-right: 1px solid var(--color-card-lv2); }
.soc__score-item:last-child { border-right: none; }
.soc__score-n { display: block; font-family: var(--font-mono); font-size: 1rem; font-weight: 700; color: var(--color-primary); line-height: 1; margin-bottom: 4px; }
.soc__score-l { font-family: var(--font-mono); font-size: .56rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); }
.soc__hero-ctas { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 40px; }
.soc__hero-meta { font-family: var(--font-mono); font-size: .76rem; color: var(--color-text-dim); letter-spacing: .3px; margin: 28px 0 0; }
.soc__hero-pull { width: 100%; margin: 2px 0 0; font-family: var(--font-mono); font-size: .76rem; color: var(--color-text-dim); letter-spacing: .3px; }
.soc__hero-pull b { color: var(--color-secondary); font-weight: 700; }
@media (max-width: 520px) { .soc__score { width: 100%; } .soc__score-item { flex: 1; text-align: center; } }

/* ===================== TOC ===================== */
.soc__toc { padding: 48px 0; border-top: var(--rule); border-bottom: var(--rule); background: rgba(24,24,37,.4); }
.soc__toc-eyebrow { font-family: var(--font-mono); font-size: .66rem; letter-spacing: 3px; text-transform: uppercase; color: var(--color-primary); }
.soc__toc-title { font-family: var(--font-pixel); font-size: clamp(1rem, 1.8vw, 1.4rem); color: var(--color-text); margin: 10px 0 28px; letter-spacing: -0.3px; }
.soc__toc-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: var(--color-card-lv2); border: 1px solid var(--color-card-lv2); border-radius: 6px; overflow: hidden; }
@media (max-width: 720px) { .soc__toc-grid { grid-template-columns: 1fr 1fr; } }
.soc__toc-item { background: var(--color-card-lv1); padding: 16px 18px; display: flex; align-items: baseline; gap: 12px; text-decoration: none; transition: background .15s ease; }
.soc__toc-item:hover { background: var(--color-card-lv2); }
.soc__toc-num { font-family: var(--font-pixel); font-size: .72rem; color: var(--color-text-dim); }
.soc__toc-item:hover .soc__toc-num { color: var(--color-primary); }
.soc__toc-name { font-family: var(--font-mono); font-size: .9rem; font-weight: 600; color: var(--color-text); }

/* ===================== SECTION DIVIDER ===================== */
.soc__divider { padding: 68px 0 6px; text-align: center; }
.soc__divider-num { font-family: var(--font-mono); font-size: .7rem; letter-spacing: 3px; text-transform: uppercase; color: var(--color-primary); }
.soc__divider-h { font-family: var(--font-pixel); font-size: clamp(1.4rem, 2.6vw, 2rem); color: var(--color-text); margin: 14px auto 0; letter-spacing: -0.4px; line-height: 1.2; }
.soc__section { padding: 30px 0 52px; }
.soc__section--tinted { background: linear-gradient(to bottom, transparent, rgba(24,24,37,.55) 12%, rgba(24,24,37,.55) 88%, transparent); }

/* ===================== CHAPTER RAIL (left, scrollspy) ===================== */
.soc__rail { position: fixed; left: 22px; top: 50%; transform: translateY(-50%); z-index: 40; display: none; flex-direction: column; gap: 3px; }
@media (min-width: 1320px) { .soc__rail { display: flex; } }
.soc__rail a { position: relative; display: flex; align-items: center; height: 26px; text-decoration: none; }
.soc__rail a::before { content: ''; position: absolute; left: -10px; top: 4px; bottom: 4px; width: 2px; background: var(--color-primary); transform: scaleY(0); transform-origin: center; transition: transform .2s ease; }
.soc__rail a i { font-family: var(--font-pixel); font-style: normal; font-size: .56rem; width: 26px; text-align: center; color: var(--color-text-dim); transition: color .15s ease; }
.soc__rail a span {
  position: absolute; left: 32px; white-space: nowrap;
  font-family: var(--font-mono); font-size: .68rem; color: var(--color-text);
  background: var(--color-card-lv2); border: 1px solid var(--color-card-lv3);
  padding: 4px 9px; border-radius: 3px; opacity: 0; transform: translateX(-4px);
  pointer-events: none; transition: opacity .15s ease, transform .15s ease;
}
.soc__rail a:hover i { color: var(--color-text-muted); }
.soc__rail a:hover span { opacity: 1; transform: translateX(0); }
.soc__rail a.is-active i { color: var(--color-primary); }
.soc__rail a.is-active::before { transform: scaleY(1); }

/* progress pill (tablet/mobile) */
.soc__railbar { position: fixed; left: 50%; bottom: 16px; transform: translateX(-50%); z-index: 39; display: none; align-items: center; gap: 11px; padding: 8px 14px; background: rgba(16,16,25,.95); border: 1px solid var(--color-card-lv2); border-radius: 999px; box-shadow: 0 8px 24px rgba(0,0,0,.45); max-width: calc(100vw - 80px); }
@media (max-width: 1319px) { .soc__railbar { display: flex; } }
.soc__railbar-name { font-family: var(--font-mono); font-size: .7rem; color: var(--color-text); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.soc__railbar-name b { color: var(--color-primary); }
.soc__railbar-track { width: 70px; height: 3px; background: var(--color-card-lv3); border-radius: 2px; overflow: hidden; flex-shrink: 0; }
.soc__railbar-fill { display: block; height: 100%; width: 11%; background: var(--color-primary); transition: width .25s ease; }

/* ===================== SECTION OPENER (bold) ===================== */
.soc__open { padding: 88px 0 8px; scroll-margin-top: 90px; }
.soc__open-grid { display: flex; align-items: center; gap: 26px; padding-bottom: 24px; border-bottom: 1px solid var(--color-card-lv2); }
.soc__open-num { font-family: var(--font-pixel); font-size: clamp(2rem, 5vw, 3.6rem); color: var(--color-card-lv3); line-height: 1; letter-spacing: -1px; flex-shrink: 0; }
.soc__open-lead { flex: 1; min-width: 0; }
.soc__open-h { font-family: var(--font-pixel); font-size: clamp(1.3rem, 2.6vw, 2rem); color: var(--color-text); margin: 0 0 9px; letter-spacing: -0.4px; line-height: 1.15; overflow-wrap: anywhere; }
.soc__open-q { font-family: var(--font-mono); font-size: .92rem; color: var(--color-text-muted); margin: 0; line-height: 1.45; }
.soc__open-stat { flex-shrink: 0; text-align: right; }
.soc__open-stat b { display: block; font-family: var(--font-pixel); font-size: clamp(1.5rem, 3vw, 2.5rem); color: var(--color-primary); line-height: 1; letter-spacing: -1px; }
.soc__open-stat span { display: block; margin-top: 9px; font-family: var(--font-mono); font-size: .58rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); }
@media (max-width: 720px) {
  .soc__open { padding: 60px 0 6px; }
  .soc__open-grid { flex-wrap: wrap; gap: 10px 16px; }
  .soc__open-num { font-size: 1.7rem; }
  .soc__open-h { font-size: 1.05rem; }
  .soc__open-stat { width: 100%; text-align: left; order: 3; }
  .soc__open-stat b { font-size: 1.7rem; }
  .soc__open-stat span { margin-top: 4px; }
}

/* ===================== CHART CARD ===================== */
.soc__chart-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
@media (max-width: 880px) { .soc__chart-grid { grid-template-columns: 1fr; } }
.soc__chart { background: var(--color-card-lv1); border: 1px solid var(--color-card-lv2); border-radius: 7px; padding: 20px 20px 16px; display: flex; flex-direction: column; margin: 0; min-width: 0; }
.soc__chart--span2 { grid-column: span 2; }
@media (max-width: 880px) { .soc__chart--span2 { grid-column: auto; } }
.soc__chart-head { display: flex; align-items: baseline; gap: 10px; margin-bottom: 14px; }
.soc__chart-num { font-family: var(--font-mono); font-size: .6rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); flex-shrink: 0; }
.soc__chart-h { font-family: var(--font-mono); font-size: .98rem; font-weight: 700; color: var(--color-text); margin: 0; line-height: 1.3; }
.soc__chart-take { font-family: var(--font-sans); font-size: .88rem; line-height: 1.45; color: var(--color-text-muted); margin: 0 0 18px; }
.soc__chart-take strong { color: var(--color-primary); font-weight: 600; }
.soc__bottomline { margin: 44px 0 0; padding: 20px 24px; border-left: 3px solid var(--color-primary); background: var(--color-card-lv1); border-radius: 0 6px 6px 0; }
.soc__bottomline-label { display: block; font-family: var(--font-mono); font-size: .6rem; letter-spacing: 2.5px; text-transform: uppercase; color: var(--color-primary); margin: 0 0 8px; }
.soc__bottomline-text { font-family: var(--font-sans); font-size: 1.02rem; line-height: 1.55; color: var(--color-text); margin: 0; max-width: 66ch; }
.soc__chart-body { flex: 1; min-width: 0; }
.soc__chart-foot { font-family: var(--font-mono); font-size: .64rem; color: var(--color-text-dim); margin-top: 16px; }

/* Donut */
.soc__donut-wrap { display: flex; align-items: center; gap: 24px; flex-wrap: wrap; }
.soc__donut { width: 160px; height: 160px; border-radius: 50%; flex-shrink: 0; position: relative; background: conic-gradient(var(--good) 0 17.2%, var(--peach) 17.2% 33.3%, var(--color-card-lv3) 33.3% 100%); }
.soc__donut::after { content: ''; position: absolute; inset: 23%; background: var(--color-card-lv1); border-radius: 50%; z-index: 1; }
.soc__donut-center { position: absolute; inset: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; z-index: 2; }
.soc__donut-center b { font-family: var(--font-mono); font-size: 1.15rem; font-weight: 700; color: var(--color-primary); letter-spacing: -0.5px; line-height: 1; }
.soc__donut-center span { font-family: var(--font-mono); font-size: .52rem; letter-spacing: 1px; text-transform: uppercase; color: var(--color-text-dim); margin-top: 3px; }
.soc__donut-legend { display: flex; flex-direction: column; gap: 10px; flex: 1; min-width: 170px; }
.soc__dl { display: flex; align-items: center; gap: 9px; font-family: var(--font-mono); font-size: .8rem; color: var(--color-text-muted); }
.soc__dl i { width: 10px; height: 10px; border-radius: 2px; flex-shrink: 0; }
.soc__dl i.full { background: var(--good); }
.soc__dl i.adapted { background: var(--peach); }
.soc__dl i.ignored { background: var(--color-card-lv3); }
.soc__dl b { margin-left: auto; color: var(--color-text); font-weight: 700; }

/* Bars */
.soc__bars { display: flex; flex-direction: column; gap: 10px; }
.soc__bar { display: grid; grid-template-columns: 110px 1fr 50px; align-items: center; gap: 12px; }
@media (max-width: 600px) { .soc__bar { grid-template-columns: 88px 1fr 44px; gap: 8px; } }
.soc__bar-label { font-family: var(--font-mono); font-size: .8rem; color: var(--color-text); text-align: right; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
.soc__bar-track { height: 20px; background: var(--color-bg); border: 1px solid var(--color-card-lv2); border-radius: 3px; overflow: hidden; }
.soc__bar-fill { display: block; height: 100%; background: var(--color-primary); }
.soc__bar-fill--lilac { background: var(--color-secondary); }
.soc__bar-fill--dim { background: var(--color-card-lv3); }
.soc__bar-val { font-family: var(--font-mono); font-size: .8rem; font-weight: 600; color: var(--color-text); text-align: right; }
.soc__bar--hi .soc__bar-label { color: var(--color-primary); font-weight: 600; }

/* Line chart */
.soc__line { width: 100%; height: auto; display: block; font-family: var(--font-mono); }
.soc__line .grid { stroke: var(--color-card-lv2); stroke-width: 1; }
.soc__line .area { fill: rgba(248,183,109,.1); }
.soc__line .ln { fill: none; stroke: var(--color-primary); stroke-width: 2.5; stroke-linejoin: round; stroke-linecap: round; }
.soc__line .dot { fill: var(--color-bg); stroke: var(--color-primary); stroke-width: 2.5; }
.soc__line .lbl { fill: var(--color-text-dim); font-size: 9px; }
.soc__line .val { fill: var(--color-primary); font-size: 10px; font-weight: 700; }

/* ApexCharts containers */
.soc__apex { width: 100%; max-width: 100%; }
.soc__apex .apexcharts-tooltip { font-family: var(--font-mono) !important; }

/* Stat callouts */
.soc__stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px; }
.soc__stats--2 { grid-template-columns: repeat(2, 1fr); }
@media (max-width: 880px) { .soc__stats { grid-template-columns: 1fr 1fr; } }
.soc__stat { background: var(--color-bg); border: var(--rule); border-radius: 5px; padding: 18px 16px; }
.soc__stat--accent { border-left: 3px solid var(--color-primary); }
.soc__stat-n { display: block; font-family: var(--font-pixel); font-size: clamp(1.1rem, 2vw, 1.5rem); color: var(--color-text); letter-spacing: -0.5px; line-height: 1; margin-bottom: 8px; }
.soc__stat--accent .soc__stat-n { color: var(--color-primary); }
.soc__stat-l { font-family: var(--font-sans); font-size: .8rem; line-height: 1.4; color: var(--color-text-muted); }

/* Table */
.soc__tablewrap { overflow-x: auto; }
/* two-column rank list */
.soc__ranks { display: grid; grid-template-columns: 1fr 1fr; gap: 0 32px; }
@media (max-width: 700px) { .soc__ranks { grid-template-columns: 1fr; } }
.soc__ranks .soc__table { min-width: 0; }
.soc__table { width: 100%; border-collapse: collapse; font-family: var(--font-mono); font-size: .84rem; min-width: 480px; }
.soc__table thead th { color: var(--color-text-dim); font-size: .62rem; letter-spacing: 1.2px; text-transform: uppercase; font-weight: 700; text-align: left; padding: 0 14px 10px; white-space: nowrap; border-bottom: 1px solid var(--color-card-lv2); }
.soc__table th.num, .soc__table td.num { text-align: right; }
.soc__table tbody td { padding: 10px 14px; border-top: 1px solid var(--color-card-lv2); color: var(--color-text-muted); vertical-align: top; }
.soc__table tbody tr:hover { background: rgba(248,183,109,.03); }
.soc__table td.lead { color: var(--color-text); font-weight: 600; }
.soc__table td .hi { color: var(--color-primary); font-weight: 700; }
.soc__table td .sev { font-family: var(--font-mono); font-size: .58rem; letter-spacing: 1px; text-transform: uppercase; padding: 2px 6px; border-radius: 2px; white-space: nowrap; }
.soc__table td .sev--critical { color: var(--bad); border: 1px solid rgba(224,122,122,.5); }
.soc__table td .sev--high { color: var(--color-primary); border: 1px solid rgba(248,183,109,.5); }
.soc__table td .sev--medium { color: var(--color-secondary); border: 1px solid rgba(201,187,242,.5); }
.soc__table td .tag-new { font-family: var(--font-mono); font-size: .54rem; letter-spacing: 1px; text-transform: uppercase; color: var(--good); border: 1px solid rgba(111,191,115,.5); padding: 1px 5px; border-radius: 2px; margin-left: 6px; }
/* scannability: zebra + filled severity badges + per-row severity stripe (:has, no markup change) */
.soc__table tbody tr:nth-child(even) { background: rgba(255,255,255,.018); }
.soc__table td .sev--critical { background: rgba(224,122,122,.14); }
.soc__table td .sev--high { background: rgba(248,183,109,.14); }
.soc__table td .sev--medium { background: rgba(201,187,242,.14); }
.soc__table tbody tr:has(.sev--critical) td:first-child { box-shadow: inset 3px 0 0 var(--bad); }
.soc__table tbody tr:has(.sev--high) td:first-child { box-shadow: inset 3px 0 0 var(--color-primary); }
.soc__table tbody tr:has(.sev--medium) td:first-child { box-shadow: inset 3px 0 0 var(--color-secondary); }

/* AI assistant share (logos + animated bars) */
.soc__asst { display: flex; flex-direction: column; gap: 13px; }
.soc__asst-row { display: grid; grid-template-columns: 142px 1fr 50px; align-items: center; gap: 14px; }
@media (max-width: 600px) { .soc__asst-row { grid-template-columns: 108px 1fr 44px; gap: 10px; } }
.soc__asst-name { display: flex; align-items: center; gap: 9px; font-family: var(--font-mono); font-size: .84rem; color: var(--color-text); min-width: 0; }
.soc__asst-name svg { width: 16px; height: 16px; flex-shrink: 0; color: var(--color-text-muted); }
.soc__asst-name span { overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
.soc__asst-track { height: 22px; background: var(--color-bg); border: 1px solid var(--color-card-lv2); border-radius: 3px; overflow: hidden; }
.soc__asst-fill { display: block; height: 100%; width: 0; min-width: 2px; background: var(--color-secondary); border-radius: 0 2px 2px 0; transition: width .9s cubic-bezier(.22,.61,.36,1); }
.soc__asst.is-in .soc__asst-fill { width: var(--w); }
.soc__asst-val { font-family: var(--font-mono); font-size: .82rem; font-weight: 700; color: var(--color-text); text-align: right; }

/* input:output proportion bar */
.soc__split { margin-bottom: 18px; }
.soc__split-bar { display: flex; height: 32px; border: 1px solid var(--color-card-lv2); border-radius: 4px; overflow: hidden; }
.soc__split-seg { width: 0; display: flex; align-items: center; padding: 0 12px; font-family: var(--font-mono); font-size: .68rem; font-weight: 700; color: var(--color-bg); white-space: nowrap; overflow: hidden; transition: width .9s cubic-bezier(.22,.61,.36,1); }
.soc__split.is-in .soc__split-seg { width: var(--w); }
.soc__split-seg--in { background: var(--color-primary); }
.soc__split-seg--out { background: var(--color-secondary); }
.soc__split-legend { display: flex; flex-wrap: wrap; gap: 8px 18px; margin-top: 10px; font-family: var(--font-mono); font-size: .74rem; color: var(--color-text-muted); }
.soc__split-legend i { width: 10px; height: 10px; border-radius: 2px; display: inline-block; margin-right: 6px; vertical-align: middle; }
.soc__split-legend b { color: var(--color-primary); font-weight: 700; }

/* scroll-in reveal */
.soc__reveal { opacity: 0; transform: translateY(12px); transition: opacity .6s cubic-bezier(.22,.61,.36,1), transform .6s cubic-bezier(.22,.61,.36,1); }
.soc__reveal.is-in { opacity: 1; transform: none; }
@media (prefers-reduced-motion: reduce) { .soc__asst-fill { transition: none; } .soc__reveal { opacity: 1; transform: none; transition: none; } }

/* Compare cards */
.soc__compare { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
@media (max-width: 700px) { .soc__compare { grid-template-columns: 1fr; } }
.soc__cc { background: var(--color-bg); border: var(--rule); border-radius: 6px; padding: 18px 18px 14px; }
.soc__cc--a { border-left: 3px solid var(--color-secondary); }
.soc__cc--b { border-left: 3px solid var(--color-card-lv3); }
.soc__cc-h { font-family: var(--font-mono); font-size: .64rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); margin-bottom: 10px; }
.soc__cc--a .soc__cc-h { color: var(--color-secondary); }
.soc__cc-row { display: flex; justify-content: space-between; align-items: baseline; gap: 12px; padding: 7px 0; border-top: 1px dashed var(--color-card-lv2); font-family: var(--font-mono); font-size: .82rem; }
.soc__cc-row:first-of-type { border-top: none; }
.soc__cc-row span { color: var(--color-text-muted); }
.soc__cc-row strong { color: var(--color-text); font-weight: 700; }
.soc__cc--a .soc__cc-row strong { color: var(--color-secondary); }

/* Final / citation */
.soc__final { padding: 76px 0 88px; border-top: var(--rule); }
.soc__final-title { font-family: var(--font-pixel); font-size: clamp(1.3rem, 2.4vw, 1.9rem); line-height: 1.2; margin: 14px 0 16px; color: var(--color-text); letter-spacing: -0.4px; max-width: 22ch; }
.soc__final-title .highlight { color: var(--color-primary); }
.soc__final-sub { font-family: var(--font-mono); font-size: .98rem; line-height: 1.55; color: var(--color-text-muted); max-width: 48ch; margin: 0 0 28px; }
.soc__final-ctas { display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 30px; }
.soc__cite { font-family: var(--font-mono); font-size: .78rem; line-height: 1.6; color: var(--color-text-dim); max-width: 70ch; }
.soc__cite a { color: var(--color-primary); text-decoration: none; }
.soc__cite a:hover { text-decoration: underline; }
</style>

<main class="soc">

  <!-- ===================== CHAPTER RAIL ===================== -->
  <nav class="soc__rail" aria-label="Report sections">
    <a href="#s1"><i>01</i><span>Implementation</span></a>
    <a href="#s2"><i>02</i><span>Bugs</span></a>
    <a href="#s3"><i>03</i><span>Vulnerabilities</span></a>
    <a href="#s4"><i>04</i><span>Rules</span></a>
    <a href="#s5"><i>05</i><span>Models</span></a>
    <a href="#s6"><i>06</i><span>Adoption wave</span></a>
    <a href="#s7"><i>07</i><span>AI-authored code</span></a>
    <a href="#s8"><i>08</i><span>Merged anyway</span></a>
    <a href="#s9"><i>09</i><span>Economics</span></a>
  </nav>
  <div class="soc__railbar" aria-hidden="true">
    <span class="soc__railbar-name"><b>01</b> Implementation</span>
    <span class="soc__railbar-track"><span class="soc__railbar-fill"></span></span>
  </div>

  <!-- ===================== HERO ===================== -->
  <section class="soc__hero">
    <div class="container">
      <span class="soc__hero-tag"><i></i> State of AI Code Review 2026 &middot; Kodus Research</span>
      <h1 class="soc__hero-title">AI writes <span class="highlight">1.6&times; more bugs</span> than humans.</h1>
      <p class="soc__hero-lede">Per pull request, AI-authored code draws 1.6&times; more review findings &mdash; and breaks <strong>2.1&times; more of the team's own rules</strong>.</p>

      <div class="soc__hero-ctas">
        <a href="#toc" class="btn btn--primary">Read the findings</a>
        <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn--outline-light">Try Kodus</a>
      </div>
      <p class="soc__hero-meta">Across 22,743 AI PRs &middot; measured from the diff, not benchmarks</p>
    </div>
  </section>

  <!-- ===================== TOC ===================== -->
  <section class="soc__toc" id="toc">
    <div class="container">
      <span class="soc__toc-eyebrow">Contents</span>
      <h2 class="soc__toc-title">Navigate the Report</h2>
      <div class="soc__toc-grid">
        <a class="soc__toc-item" href="#s1"><span class="soc__toc-num">01</span><span class="soc__toc-name">Implementation</span></a>
        <a class="soc__toc-item" href="#s2"><span class="soc__toc-num">02</span><span class="soc__toc-name">Bugs</span></a>
        <a class="soc__toc-item" href="#s3"><span class="soc__toc-num">03</span><span class="soc__toc-name">Vulnerabilities</span></a>
        <a class="soc__toc-item" href="#s4"><span class="soc__toc-num">04</span><span class="soc__toc-name">Rules</span></a>
        <a class="soc__toc-item" href="#s5"><span class="soc__toc-num">05</span><span class="soc__toc-name">Models</span></a>
        <a class="soc__toc-item" href="#s6"><span class="soc__toc-num">06</span><span class="soc__toc-name">Adoption wave</span></a>
        <a class="soc__toc-item" href="#s7"><span class="soc__toc-num">07</span><span class="soc__toc-name">AI-authored code</span></a>
        <a class="soc__toc-item" href="#s8"><span class="soc__toc-num">08</span><span class="soc__toc-name">Merged anyway</span></a>
        <a class="soc__toc-item" href="#s9"><span class="soc__toc-num">09</span><span class="soc__toc-name">Economics</span></a>
      </div>
    </div>
  </section>

  <!-- ===================== 01 IMPLEMENTATION ===================== -->
  <header class="soc__open" id="s1"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">01</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Implementation</h2><p class="soc__open-q">What happens to a delivered suggestion.</p></div>
    <div class="soc__open-stat"><b>33%</b><span>became code</span></div>
  </div></div></header>
  <section class="soc__section">
    <div class="container">
      <div class="soc__chart-grid">

        <figure class="soc__chart soc__chart--span2">
          <div class="soc__chart-head"><span class="soc__chart-num">1.1</span><h3 class="soc__chart-h">Implementation rate over time</h3></div>
          <p class="soc__chart-take">The 33% is a blended average &mdash; it has <strong>nearly doubled</strong>: 25% &rarr; 48% in eight months.</p>
          <div class="soc__chart-body"><div id="ch-trend" class="soc__apex"></div></div>
          <figcaption class="soc__chart-foot">"Any implementation" by PR-created month &middot; recent months are right-censored (biased low) &middot; June partial, excluded</figcaption>
        </figure>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">1.2</span><h3 class="soc__chart-h">Outcome of every suggestion</h3></div>
          <p class="soc__chart-take">Across the full window, <strong>1 in 3</strong> becomes code.</p>
          <div class="soc__chart-body"><div id="ch-outcome" class="soc__apex"></div></div>
          <figcaption class="soc__chart-foot">n = 180,739</figcaption>
        </figure>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">1.3</span><h3 class="soc__chart-h">By finding class</h3></div>
          <p class="soc__chart-take">Type barely moves the rate &mdash; a <strong>7-point spread</strong>.</p>
          <div class="soc__chart-body">
            <div class="soc__tablewrap">
              <table class="soc__table">
                <thead><tr><th>Class</th><th class="num">Delivered</th><th class="num">Impl/adapt</th></tr></thead>
                <tbody>
                  <tr><td class="lead">Performance</td><td class="num">4,713</td><td class="num"><span class="hi">38.2%</span></td></tr>
                  <tr><td class="lead">Bugs</td><td class="num">100,014</td><td class="num"><span class="hi">34.5%</span></td></tr>
                  <tr><td class="lead">Custom rules</td><td class="num">68,603</td><td class="num"><span class="hi">31.3%</span></td></tr>
                  <tr><td class="lead">Security</td><td class="num">7,409</td><td class="num"><span class="hi">31.2%</span></td></tr>
                </tbody>
              </table>
            </div>
          </div>
        </figure>

        <figure class="soc__chart soc__chart--span2">
          <div class="soc__chart-head"><span class="soc__chart-num">1.4</span><h3 class="soc__chart-h">By language</h3></div>
          <p class="soc__chart-take">The language sets the ceiling: Rust <strong>60%</strong>, TypeScript <strong>34%</strong>.</p>
          <div class="soc__chart-body"><div id="ch-lang" class="soc__apex"></div></div>
          <figcaption class="soc__chart-foot">≥ 200 suggestions, ≥ 5 orgs &middot; scaled to leader</figcaption>
        </figure>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">1.5</span><h3 class="soc__chart-h">By severity</h3></div>
          <p class="soc__chart-take">It runs backwards &mdash; <strong>critical</strong> is fixed least.</p>
          <div class="soc__chart-body"><div id="ch-sev" class="soc__apex"></div></div>
        </figure>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">1.6</span><h3 class="soc__chart-h">By PR size</h3></div>
          <p class="soc__chart-take"><strong>Small PRs</strong> get ignored most, not large ones.</p>
          <div class="soc__chart-body"><div id="ch-prsize" class="soc__apex"></div></div>
        </figure>

      </div>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">What becomes code depends more on context &mdash; language and PR size &mdash; than on what the finding is. And the rate isn't static: it nearly doubled in eight months.</p></div>
    </div>
  </section>

  <!-- ===================== 02 BUGS ===================== -->
  <header class="soc__open" id="s2"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">02</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Bugs</h2><p class="soc__open-q">The ten classes Kody catches most.</p></div>
    <div class="soc__open-stat"><b>34.5%</b><span>of bugs fixed</span></div>
  </div></div></header>
  <section class="soc__section soc__section--tinted">
    <div class="container">
      <figure class="soc__chart">
        <div class="soc__chart-head"><span class="soc__chart-num">2.1</span><h3 class="soc__chart-h">Top 10 bug classes</h3></div>
        <div class="soc__chart-body">
          <div class="soc__tablewrap">
            <table class="soc__table">
              <thead><tr><th class="num">#</th><th>Class</th><th>Severity</th><th>What it is</th></tr></thead>
              <tbody>
                <tr><td class="num">01</td><td class="lead">Null access on optional fields</td><td><span class="sev sev--high">high</span></td><td>A nested field that may not exist &mdash; often a column added in a migration older records still have null.</td></tr>
                <tr><td class="num">02</td><td class="lead">Race conditions</td><td><span class="sev sev--critical">critical</span></td><td>Two requests for the same resource arrive at once and both think they're first.</td></tr>
                <tr><td class="num">03</td><td class="lead">Schema drift, create vs update</td><td><span class="sev sev--high">high</span></td><td>Two validators describe the same record but disagree on what's required.</td></tr>
                <tr><td class="num">04</td><td class="lead">Critical logic commented out</td><td><span class="sev sev--critical">critical</span></td><td>A worker, cron, or middleware disabled during a refactor that never came back.</td></tr>
                <tr><td class="num">05</td><td class="lead">Async / await abuse</td><td><span class="sev sev--high">high</span></td><td>Async called from sync, transactions committed twice, or blocking IO in an async function.</td></tr>
                <tr><td class="num">06</td><td class="lead">Inverted boolean / off-by-one</td><td><span class="sev sev--high">high</span></td><td>A condition that evaluates the opposite of what was meant, common after an operator flip.</td></tr>
                <tr><td class="num">07</td><td class="lead">Hardcoded where dynamic required</td><td><span class="sev sev--medium">medium</span></td><td>A session ID, model name, or environment value committed as a string literal.</td></tr>
                <tr><td class="num">08</td><td class="lead">Downstream breakage from schema change</td><td><span class="sev sev--high">high</span></td><td>Dropping a column or renaming a field while other code still expects the old shape.</td></tr>
                <tr><td class="num">09</td><td class="lead">Resource leaks</td><td><span class="sev sev--medium">medium</span></td><td>Memory, file handles, timers, or listeners allocated and never released.</td></tr>
                <tr><td class="num">10</td><td class="lead">Database edge cases</td><td><span class="sev sev--medium">medium</span></td><td>Queries that assume well-formed data: no duplicates, never empty, fits one row.</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        <figcaption class="soc__chart-foot">n = 100,014 across 497 orgs &middot; 34.5% fixed</figcaption>
      </figure>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">The same ten classes recur everywhere &mdash; and about a third get fixed. Catching bugs is pattern-matching, not detective work.</p></div>
    </div>
  </section>

  <!-- ===================== 03 VULNERABILITIES ===================== -->
  <header class="soc__open" id="s3"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">03</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Vulnerabilities</h2><p class="soc__open-q">The security landscape, by frequency.</p></div>
    <div class="soc__open-stat"><b>#1</b><span>SQL injection</span></div>
  </div></div></header>
  <section class="soc__section">
    <div class="container">
      <figure class="soc__chart">
        <div class="soc__chart-head"><span class="soc__chart-num">3.1</span><h3 class="soc__chart-h">Top 12 vulnerability classes</h3></div>
        <p class="soc__chart-take">SQL injection still <strong>#1</strong>; prompt injection is new in 2026.</p>
        <div class="soc__chart-body">
          <div class="soc__tablewrap">
            <table class="soc__table">
              <thead><tr><th class="num">#</th><th>Class</th><th>Severity</th><th>What it is</th></tr></thead>
              <tbody>
                <tr><td class="num">01</td><td class="lead">SQL injection</td><td><span class="sev sev--critical">critical</span></td><td>Still the most common. User input concatenated straight into SQL strings.</td></tr>
                <tr><td class="num">02</td><td class="lead">Path traversal</td><td><span class="sev sev--critical">critical</span></td><td>Unsanitized URL parameters used to construct file paths.</td></tr>
                <tr><td class="num">03</td><td class="lead">Missing authorization</td><td><span class="sev sev--critical">critical</span></td><td>Endpoints that lost their auth dependency during a refactor.</td></tr>
                <tr><td class="num">04</td><td class="lead">XSS via unescaped attributes</td><td><span class="sev sev--high">high</span></td><td>User-controlled values written into HTML attributes without escaping.</td></tr>
                <tr><td class="num">05</td><td class="lead">SSRF</td><td><span class="sev sev--high">high</span></td><td>URL parameters fed straight into outbound HTTP requests.</td></tr>
                <tr><td class="num">06</td><td class="lead">Hardcoded secrets in source</td><td><span class="sev sev--critical">critical</span></td><td>Tokens, API keys, and credentials committed alongside code.</td></tr>
                <tr><td class="num">07</td><td class="lead">Open redirect</td><td><span class="sev sev--medium">medium</span></td><td>Redirect helpers that block obvious schemes but miss protocol-relative URLs.</td></tr>
                <tr><td class="num">08</td><td class="lead">Sensitive data in logs</td><td><span class="sev sev--high">high</span></td><td>Raw error objects, internal IDs, or full payloads logged unsanitized.</td></tr>
                <tr><td class="num">09</td><td class="lead">Prompt injection <span class="tag-new">new</span></td><td><span class="sev sev--critical">critical</span></td><td>System prompts that concatenate user-controlled strings without delimiters.</td></tr>
                <tr><td class="num">10</td><td class="lead">Default credentials</td><td><span class="sev sev--high">high</span></td><td>Services deployed with well-known default username/password.</td></tr>
                <tr><td class="num">11</td><td class="lead">Command injection</td><td><span class="sev sev--critical">critical</span></td><td>User input passed unsanitized into shell commands.</td></tr>
                <tr><td class="num">12</td><td class="lead">PostMessage origin not validated</td><td><span class="sev sev--high">high</span></td><td>Window message listeners that process events from any origin.</td></tr>
              </tbody>
            </table>
          </div>
        </div>
        <figcaption class="soc__chart-foot">n = 7,409 across 352 orgs &middot; 31.2% fixed</figcaption>
      </figure>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">The classics &mdash; SQL injection, leaked secrets &mdash; still dominate, but AI pushed a brand-new class into the top tier: prompt injection.</p></div>
    </div>
  </section>

  <!-- ===================== 04 RULES ===================== -->
  <header class="soc__open" id="s4"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">04</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Rules</h2><p class="soc__open-q">What teams codify &mdash; and how often it lands.</p></div>
    <div class="soc__open-stat"><b>9,916</b><span>team rules</span></div>
  </div></div></header>
  <section class="soc__section soc__section--tinted">
    <div class="container">
      <div style="display:flex;flex-direction:column;gap:20px;">
        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">4.1</span><h3 class="soc__chart-h">20 most adopted custom rules</h3></div>
          <p class="soc__chart-take">By distinct organizations adopting them.</p>
          <div class="soc__chart-body">
            <div class="soc__ranks">
              <table class="soc__table">
                <thead><tr><th class="num">#</th><th>Rule</th><th class="num">Orgs</th></tr></thead>
                <tbody>
                  <tr><td class="num">1</td><td class="lead">Write a clear, scoped PR title</td><td class="num">55</td></tr>
                  <tr><td class="num">2</td><td class="lead">Prohibit hardcoded secrets</td><td class="num">41</td></tr>
                  <tr><td class="num">3</td><td class="lead">Always sanitize user inputs</td><td class="num">36</td></tr>
                  <tr><td class="num">4</td><td class="lead">Prevent hardcoded secrets</td><td class="num">34</td></tr>
                  <tr><td class="num">5</td><td class="lead">Avoid equality operators in loop termination</td><td class="num">30</td></tr>
                  <tr><td class="num">6</td><td class="lead">Avoid using eval</td><td class="num">30</td></tr>
                  <tr><td class="num">7</td><td class="lead">Enforce TypeScript strict mode</td><td class="num">30</td></tr>
                  <tr><td class="num">8</td><td class="lead">Always validate JSON parsing</td><td class="num">28</td></tr>
                  <tr><td class="num">9</td><td class="lead">Enforce strict TypeScript configuration</td><td class="num">28</td></tr>
                  <tr><td class="num">10</td><td class="lead">Prevent SQL injection in queries</td><td class="num">26</td></tr>
                </tbody>
              </table>
              <table class="soc__table">
                <thead><tr><th class="num">#</th><th>Rule</th><th class="num">Orgs</th></tr></thead>
                <tbody>
                  <tr><td class="num">11</td><td class="lead">Avoid async operations in constructors</td><td class="num">25</td></tr>
                  <tr><td class="num">12</td><td class="lead">Mark unchanged variables as const</td><td class="num">25</td></tr>
                  <tr><td class="num">13</td><td class="lead">Ensure React list keys are stable</td><td class="num">24</td></tr>
                  <tr><td class="num">14</td><td class="lead">Do not nest React components</td><td class="num">23</td></tr>
                  <tr><td class="num">15</td><td class="lead">Enable TypeScript strict mode</td><td class="num">22</td></tr>
                  <tr><td class="num">16</td><td class="lead">Do not export mutable variables</td><td class="num">21</td></tr>
                  <tr><td class="num">17</td><td class="lead">Do not ignore exceptions</td><td class="num">21</td></tr>
                  <tr><td class="num">18</td><td class="lead">Prevent SQL injection via concatenation</td><td class="num">21</td></tr>
                  <tr><td class="num">19</td><td class="lead">React children not passed as props</td><td class="num">20</td></tr>
                  <tr><td class="num">20</td><td class="lead">Avoid building commands from user input</td><td class="num">19</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <figcaption class="soc__chart-foot">Distinct orgs, not instances &middot; 9,916 rules by 717 orgs</figcaption>
        </figure>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">4.2</span><h3 class="soc__chart-h">Rules vs other signal</h3></div>
          <p class="soc__chart-take">Custom rules land <strong>on par with bugs</strong>.</p>
          <div class="soc__chart-body"><div id="ch-rules" class="soc__apex"></div></div>
          <figcaption class="soc__chart-foot">68,603 rule-driven suggestions</figcaption>
        </figure>
      </div>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">Beyond bugs, teams codify their own standards &mdash; nearly 10,000 rules &mdash; and those land at the same rate bug fixes do.</p></div>
    </div>
  </section>

  <!-- ===================== 05 MODELS ===================== -->
  <header class="soc__open" id="s5"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">05</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Models</h2><p class="soc__open-q">Acceptance by the model that ran the review.</p></div>
    <div class="soc__open-stat"><b>41%</b><span>Gemini, most volume</span></div>
  </div></div></header>
  <section class="soc__section">
    <div class="container">
      <figure class="soc__chart">
        <div class="soc__chart-head"><span class="soc__chart-num">5.1</span><h3 class="soc__chart-h">By model family</h3></div>
        <p class="soc__chart-take">Gemini carries most of the volume (41%). Read the gap as a <strong>team signal</strong>, not a model verdict.</p>
        <div class="soc__chart-body"><div id="ch-models" class="soc__apex"></div></div>
        <figcaption class="soc__chart-foot">By the model that ran the review &middot; Gemini 44,324, others 358&ndash;980</figcaption>
      </figure>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">Switching the reviewer model barely moves the outcome &mdash; what drives acceptance is the team, not the model.</p></div>
    </div>
  </section>

  <!-- ===================== 06 ADOPTION ===================== -->
  <header class="soc__open" id="s6"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">06</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">The adoption wave</h2><p class="soc__open-q">Who's adopting AI review &mdash; and how it ships.</p></div>
    <div class="soc__open-stat"><b>&times;17</b><span>more teams / month</span></div>
  </div></div></header>
  <section class="soc__section soc__section--tinted">
    <div class="container">
      <div style="display:flex;flex-direction:column;gap:20px;">
        <div class="soc__chart-grid">
          <figure class="soc__chart">
            <div class="soc__chart-head"><span class="soc__chart-num">6.1</span><h3 class="soc__chart-h">Median PR size, by month</h3></div>
            <p class="soc__chart-take">Platform-wide, PR size <strong>more than doubled</strong>: 73 &rarr; 157 lines.</p>
            <div class="soc__chart-body"><div id="ch-prsize-time" class="soc__apex"></div></div>
            <figcaption class="soc__chart-foot">Jan 2025 &ndash; May 2026 &middot; all orgs &middot; median lines changed</figcaption>
          </figure>
          <figure class="soc__chart">
            <div class="soc__chart-head"><span class="soc__chart-num">6.2</span><h3 class="soc__chart-h">Median time to merge, by month</h3></div>
            <p class="soc__chart-take">And merge time <strong>collapsed</strong>: 18.9h &rarr; 1.7h.</p>
            <div class="soc__chart-body"><div id="ch-merge-time" class="soc__apex"></div></div>
            <figcaption class="soc__chart-foot">open &rarr; close, merged PRs &middot; median hours</figcaption>
          </figure>
        </div>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">6.3</span><h3 class="soc__chart-h">Composition, not behavior</h3></div>
          <p class="soc__chart-take">Hold the same teams fixed and both trends vanish &mdash; the curve is <strong>who showed up</strong>, not how teams ship.</p>
          <div class="soc__chart-body">
            <div class="soc__compare">
              <div class="soc__cc soc__cc--a">
                <div class="soc__cc-h">All teams (platform)</div>
                <div class="soc__cc-row"><span>PR size</span><strong>+115%</strong></div>
                <div class="soc__cc-row"><span>Time to merge</span><strong>&minus;91%</strong></div>
                <div class="soc__cc-row"><span>Active orgs / mo</span><strong>~17&times;</strong></div>
              </div>
              <div class="soc__cc soc__cc--b">
                <div class="soc__cc-h">Same 24 teams (balanced)</div>
                <div class="soc__cc-row"><span>PR size</span><strong>&times;1.13 &middot; 13&uarr;/11&darr;</strong></div>
                <div class="soc__cc-row"><span>Time to merge</span><strong>&times;1.05 &middot; 13&uarr;/11&darr;</strong></div>
                <div class="soc__cc-row"><span>Verdict</span><strong>coin flip</strong></div>
              </div>
            </div>
          </div>
          <figcaption class="soc__chart-foot">Balanced panel: orgs with ≥ 10 PRs/quarter at both ends &middot; Q3 2025 vs Q2 2026</figcaption>
        </figure>
      </div>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">PRs doubled and merge time fell from 18.9h to 1.7h &mdash; but not because existing teams changed. A new generation is arriving that already ships small and fast by default. The shift is generational, not behavioral.</p></div>
    </div>
  </section>

  <!-- ===================== 07 AI-AUTHORED ===================== -->
  <header class="soc__open" id="s7"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">07</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">AI-authored code</h2><p class="soc__open-q">When the author is a machine.</p></div>
    <div class="soc__open-stat"><b>1.6&times;</b><span>more findings</span></div>
  </div></div></header>
  <section class="soc__section">
    <div class="container">
      <div class="soc__chart-grid">

        <figure class="soc__chart soc__chart--span2">
          <div class="soc__chart-head"><span class="soc__chart-num">7.1</span><h3 class="soc__chart-h">Declared AI-coauthored share</h3></div>
          <p class="soc__chart-take">From <strong>0.8% to 30%</strong> in eight months &mdash; and that's a floor.</p>
          <div class="soc__chart-body"><div id="ch-adopt" class="soc__apex"></div></div>
          <figcaption class="soc__chart-foot">Share of all PRs by month opened</figcaption>
        </figure>

        <figure class="soc__chart soc__chart--span2">
          <div class="soc__chart-head"><span class="soc__chart-num">7.2</span><h3 class="soc__chart-h">Which assistant wrote it</h3></div>
          <p class="soc__chart-take"><strong>Claude</strong> is behind 85% of declared AI-coauthored PRs.</p>
          <div class="soc__chart-body">
            <div class="soc__asst">
              <div class="soc__asst-row">
                <span class="soc__asst-name"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="m4.7144 15.9555 4.7174-2.6471.079-.2307-.079-.1275h-.2307l-.7893-.0486-2.6956-.0729-2.3375-.0971-2.2646-.1214-.5707-.1215-.5343-.7042.0546-.3522.4797-.3218.686.0608 1.5179.1032 2.2767.1578 1.6514.0972 2.4468.255h.3886l.0546-.1579-.1336-.0971-.1032-.0972L6.973 9.8356l-2.55-1.6879-1.3356-.9714-.7225-.4918-.3643-.4614-.1578-1.0078.6557-.7225.8803.0607.2246.0607.8925.686 1.9064 1.4754 2.4893 1.8336.3643.3035.1457-.1032.0182-.0728-.164-.2733-1.3539-2.4467-1.445-2.4893-.6435-1.032-.17-.6194c-.0607-.255-.1032-.4674-.1032-.7285L6.287.1335 6.6997 0l.9957.1336.419.3642.6192 1.4147 1.0018 2.2282 1.5543 3.0296.4553.8985.2429.8318.091.255h.1579v-.1457l.1275-1.706.2368-2.0947.2307-2.6957.0789-.7589.3764-.9107.7468-.4918.5828.2793.4797.686-.0668.4433-.2853 1.8517-.5586 2.9021-.3643 1.9429h.2125l.2429-.2429.9835-1.3053 1.6514-2.0643.7286-.8196.85-.9046.5464-.4311h1.0321l.759 1.1293-.34 1.1657-1.0625 1.3478-.8804 1.1414-1.2628 1.7-.7893 1.36.0729.1093.1882-.0183 2.8535-.607 1.5421-.2794 1.8396-.3157.8318.3886.091.3946-.3278.8075-1.967.4857-2.3072.4614-3.4364.8136-.0425.0304.0486.0607 1.5482.1457.6618.0364h1.621l3.0175.2247.7892.522.4736.6376-.079.4857-1.2142.6193-1.6393-.3886-3.825-.9107-1.3113-.3279h-.1822v.1093l1.0929 1.0686 2.0035 1.8092 2.5075 2.3314.1275.5768-.3218.4554-.34-.0486-2.2039-1.6575-.85-.7468-1.9246-1.621h-.1275v.17l.4432.6496 2.3436 3.5214.1214 1.0807-.17.3521-.6071.2125-.6679-.1214-1.3721-1.9246L14.38 17.959l-1.1414-1.9428-.1397.079-.674 7.2552-.3156.3703-.7286.2793-.6071-.4614-.3218-.7468.3218-1.4753.3886-1.9246.3157-1.53.2853-1.9004.17-.6314-.0121-.0425-.1397.0182-1.4328 1.9672-2.1796 2.9446-1.7243 1.8456-.4128.164-.7164-.3704.0667-.6618.4008-.5889 2.386-3.0357 1.4389-1.882.929-1.0868-.0062-.1579h-.0546l-6.3385 4.1164-1.1293.1457-.4857-.4554.0608-.7467.2307-.2429 1.9064-1.3114Z"/></svg><span>Claude</span></span>
                <span class="soc__asst-track"><span class="soc__asst-fill" style="--w:85%"></span></span>
                <span class="soc__asst-val">85%</span>
              </div>
              <div class="soc__asst-row">
                <span class="soc__asst-name"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.503.131 1.891 5.678a.84.84 0 0 0-.42.726v11.188c0 .3.162.575.42.724l9.609 5.55a1 1 0 0 0 .998 0l9.61-5.55a.84.84 0 0 0 .42-.724V6.404a.84.84 0 0 0-.42-.726L12.497.131a1.01 1.01 0 0 0-.996 0M2.657 6.338h18.55c.263 0 .43.287.297.515L12.23 22.918c-.062.107-.229.064-.229-.06V12.335a.59.59 0 0 0-.295-.51l-9.11-5.257c-.109-.063-.064-.23.061-.23"/></svg><span>Cursor</span></span>
                <span class="soc__asst-track"><span class="soc__asst-fill" style="--w:13%"></span></span>
                <span class="soc__asst-val">13%</span>
              </div>
              <div class="soc__asst-row">
                <span class="soc__asst-name"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.922 16.997C23.061 18.492 18.063 22.02 12 22.02 5.937 22.02.939 18.492.078 16.997A.641.641 0 0 1 0 16.741v-2.869a.883.883 0 0 1 .053-.22c.372-.935 1.347-2.292 2.605-2.656.167-.429.414-1.055.644-1.517a10.098 10.098 0 0 1-.052-1.086c0-1.331.282-2.499 1.132-3.368.397-.406.89-.717 1.474-.952C7.255 2.937 9.248 1.98 11.978 1.98c2.731 0 4.767.957 6.166 2.093.584.235 1.077.546 1.474.952.85.869 1.132 2.037 1.132 3.368 0 .368-.014.733-.052 1.086.23.462.477 1.088.644 1.517 1.258.364 2.233 1.721 2.605 2.656a.841.841 0 0 1 .053.22v2.869a.641.641 0 0 1-.078.256Zm-11.75-5.992h-.344a4.359 4.359 0 0 1-.355.508c-.77.947-1.918 1.492-3.508 1.492-1.725 0-2.989-.359-3.782-1.259a2.137 2.137 0 0 1-.085-.104L4 11.746v6.585c1.435.779 4.514 2.179 8 2.179 3.486 0 6.565-1.4 8-2.179v-6.585l-.098-.104s-.033.045-.085.104c-.793.9-2.057 1.259-3.782 1.259-1.59 0-2.738-.545-3.508-1.492a4.359 4.359 0 0 1-.355-.508Zm2.328 3.25c.549 0 1 .451 1 1v2c0 .549-.451 1-1 1-.549 0-1-.451-1-1v-2c0-.549.451-1 1-1Zm-5 0c.549 0 1 .451 1 1v2c0 .549-.451 1-1 1-.549 0-1-.451-1-1v-2c0-.549.451-1 1-1Zm3.313-6.185c.136 1.057.403 1.913.878 2.497.442.544 1.134.938 2.344.938 1.573 0 2.292-.337 2.657-.751.384-.435.558-1.15.558-2.361 0-1.14-.243-1.847-.705-2.319-.477-.488-1.319-.862-2.824-1.025-1.487-.161-2.192.138-2.533.529-.269.307-.437.808-.438 1.578v.021c0 .265.021.562.063.893Zm-1.626 0c.042-.331.063-.628.063-.894v-.02c-.001-.77-.169-1.271-.438-1.578-.341-.391-1.046-.69-2.533-.529-1.505.163-2.347.537-2.824 1.025-.462.472-.705 1.179-.705 2.319 0 1.211.175 1.926.558 2.361.365.414 1.084.751 2.657.751 1.21 0 1.902-.394 2.344-.938.475-.584.742-1.44.878-2.497Z"/></svg><span>Copilot</span></span>
                <span class="soc__asst-track"><span class="soc__asst-fill" style="--w:3.6%"></span></span>
                <span class="soc__asst-val">3.6%</span>
              </div>
              <div class="soc__asst-row">
                <span class="soc__asst-name"><span style="width:16px;flex-shrink:0;display:inline-block"></span><span>Devin / Codex</span></span>
                <span class="soc__asst-track"><span class="soc__asst-fill" style="--w:0.3%"></span></span>
                <span class="soc__asst-val">0.3%</span>
              </div>
            </div>
          </div>
          <figcaption class="soc__chart-foot">Shares sum &gt; 100% &mdash; a few PRs carry more than one assistant's trailer</figcaption>
        </figure>

        <figure class="soc__chart soc__chart--span2">
          <div class="soc__chart-head"><span class="soc__chart-num">7.3</span><h3 class="soc__chart-h">AI vs human-only</h3></div>
          <p class="soc__chart-take"><strong>2.6&times; larger</strong> &mdash; and fixed more often.</p>
          <div class="soc__chart-body">
            <div class="soc__compare soc__reveal">
              <div class="soc__cc soc__cc--a">
                <div class="soc__cc-h">AI</div>
                <div class="soc__cc-row"><span>PR size</span><strong>275</strong></div>
                <div class="soc__cc-row"><span>Findings/PR</span><strong>~2.0</strong></div>
                <div class="soc__cc-row"><span>Implemented</span><strong>42.3%</strong></div>
              </div>
              <div class="soc__cc soc__cc--b">
                <div class="soc__cc-h">Human</div>
                <div class="soc__cc-row"><span>PR size</span><strong>107</strong></div>
                <div class="soc__cc-row"><span>Findings/PR</span><strong>~1.3</strong></div>
                <div class="soc__cc-row"><span>Implemented</span><strong>31.1%</strong></div>
              </div>
            </div>
          </div>
          <figcaption class="soc__chart-foot">Median PR 2.6&times; larger on AI-coauthored code</figcaption>
        </figure>

        <figure class="soc__chart soc__chart--span2">
          <div class="soc__chart-head"><span class="soc__chart-num">7.4</span><h3 class="soc__chart-h">By finding class &mdash; AI vs human</h3></div>
          <p class="soc__chart-take">More findings, fixed more &mdash; <strong>every class</strong>. Widest gap: rules, 2.1&times;.</p>
          <div class="soc__chart-body">
            <div class="soc__tablewrap">
              <table class="soc__table">
                <thead><tr><th>Class</th><th class="num">Per 100 PRs (AI/human)</th><th class="num">Implemented (AI/human)</th></tr></thead>
                <tbody>
                  <tr><td class="lead">Bugs</td><td class="num">95 / 72</td><td class="num"><span class="hi">44.2%</span> / 32.5%</td></tr>
                  <tr><td class="lead">Custom rules</td><td class="num">95 / 45</td><td class="num"><span class="hi">40.1%</span> / 28.5%</td></tr>
                  <tr><td class="lead">Security</td><td class="num">7.1 / 5.2</td><td class="num"><span class="hi">42.3%</span> / 29.4%</td></tr>
                  <tr><td class="lead">Performance</td><td class="num">4.9 / 3.3</td><td class="num"><span class="hi">47.7%</span> / 36.1%</td></tr>
                </tbody>
              </table>
            </div>
          </div>
          <figcaption class="soc__chart-foot">Declared via commit trailer &middot; a conservative floor</figcaption>
        </figure>

      </div>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">AI already writes a third of the code we see &mdash; in bigger PRs that draw more of every kind of finding, broken team rules most of all.</p></div>
    </div>
  </section>

  <!-- ===================== 08 MERGED ANYWAY ===================== -->
  <header class="soc__open" id="s8"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">08</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Merged anyway</h2><p class="soc__open-q">Critical flags that ship unaddressed.</p></div>
    <div class="soc__open-stat"><b>71.8%</b><span>shipped open</span></div>
  </div></div></header>
  <section class="soc__section soc__section--tinted">
    <div class="container">
      <figure class="soc__chart">
        <div class="soc__chart-head"><span class="soc__chart-num">8.1</span><h3 class="soc__chart-h">Flags shipped unaddressed</h3></div>
        <p class="soc__chart-take"><strong>71.8%</strong> of flagged merged PRs ship with one still open.</p>
        <div class="soc__chart-body">
          <div class="soc__stats">
            <div class="soc__stat soc__stat--accent"><span class="soc__stat-n">71.8%</span><span class="soc__stat-l">flagged PRs ship with ≥1 open</span></div>
            <div class="soc__stat"><span class="soc__stat-n">60%</span><span class="soc__stat-l">security flags unaddressed</span></div>
            <div class="soc__stat"><span class="soc__stat-n">64%</span><span class="soc__stat-l">critical flags unaddressed</span></div>
            <div class="soc__stat"><span class="soc__stat-n">58% / 74%</span><span class="soc__stat-l">AI vs human-written code</span></div>
          </div>
        </div>
        <figcaption class="soc__chart-foot">n = 13,609 flagged merged PRs &middot; folds in false positives &amp; accepted risk</figcaption>
      </figure>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">Flagging isn't a gate: 7 in 10 critical flags get merged anyway. Without something that blocks the merge, review is just advice.</p></div>
    </div>
  </section>

  <!-- ===================== 09 ECONOMICS ===================== -->
  <header class="soc__open" id="s9"><div class="container"><div class="soc__open-grid">
    <span class="soc__open-num">09</span>
    <div class="soc__open-lead"><h2 class="soc__open-h">Economics</h2><p class="soc__open-q">What it costs to run the reviewer.</p></div>
    <div class="soc__open-stat"><b>$1.50</b><span>per PR reviewed</span></div>
  </div></div></header>
  <section class="soc__section">
    <div class="container">
      <div class="soc__chart-grid">
        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">9.1</span><h3 class="soc__chart-h">Volume &amp; latency</h3></div>
          <p class="soc__chart-take">Input-heavy &mdash; <strong>~14:1</strong>, ~2.4 min per review.</p>
          <div class="soc__chart-body">
            <div class="soc__split">
              <div class="soc__split-bar">
                <span class="soc__split-seg soc__split-seg--in" style="--w:93.4%">14.3B input</span>
                <span class="soc__split-seg soc__split-seg--out" style="--w:6.6%"></span>
              </div>
              <div class="soc__split-legend">
                <span><i style="background:var(--color-primary)"></i>Input 14.3B</span>
                <span><i style="background:var(--color-secondary)"></i>Output 1.0B</span>
                <span><b>~14:1</b> &mdash; re-reads the whole file every call</span>
              </div>
            </div>
            <div class="soc__stats soc__stats--2">
              <div class="soc__stat"><span class="soc__stat-n">211,892</span><span class="soc__stat-l">LLM calls</span></div>
              <div class="soc__stat"><span class="soc__stat-n">~470K</span><span class="soc__stat-l">input tokens / PR</span></div>
            </div>
          </div>
          <figcaption class="soc__chart-foot">May 2026 &middot; median call 13.3s, p95 66.5s, full review ~2.4 min</figcaption>
        </figure>

        <figure class="soc__chart">
          <div class="soc__chart-head"><span class="soc__chart-num">9.2</span><h3 class="soc__chart-h">Cost per PR, by model</h3></div>
          <p class="soc__chart-take">Same workload, each model's list price &mdash; <strong>$0.10</strong> to <strong>$3.75</strong> per PR (~38&times;).</p>
          <div class="soc__chart-body"><div id="ch-cost" class="soc__apex"></div></div>
          <figcaption class="soc__chart-foot">Same May-2026 workload (14.3B in / 1.0B out) at each model's list price, sourced Jun 2026 &middot; ~2.75&times; for a landed fix</figcaption>
        </figure>
      </div>
      <div class="soc__bottomline"><span class="soc__bottomline-label">Bottom line</span><p class="soc__bottomline-text">Reviewing a PR is cheap and input-bound &mdash; but model choice swings the bill ~38&times;. The lever is which model, not whether to review.</p></div>
    </div>
  </section>

  <!-- ===================== METHODOLOGY ===================== -->
  <div class="soc__divider"><div class="container"><span class="soc__divider-num">Appendix</span><h2 class="soc__divider-h">Methodology</h2></div></div>
  <section class="soc__section soc__section--tinted">
    <div class="container">
      <figure class="soc__chart">
        <div class="soc__chart-body">
          <div class="soc__tablewrap">
            <table class="soc__table">
              <tbody>
                <tr><td class="lead" style="white-space:nowrap;">Source</td><td>Kodus production pipeline &mdash; GitHub, GitLab, Bitbucket, Azure DevOps.</td></tr>
                <tr><td class="lead" style="white-space:nowrap;">Window</td><td>PRs created 2025-09-01 onward, through the 2026-06-08 snapshot.</td></tr>
                <tr><td class="lead" style="white-space:nowrap;">Scope</td><td>Bugs, security, performance, custom rules. Deprecated categories excluded.</td></tr>
                <tr><td class="lead" style="white-space:nowrap;">"Implemented"</td><td>Flagged lines changed on a later commit. Measured from the diff &mdash; silent ignores counted.</td></tr>
                <tr><td class="lead" style="white-space:nowrap;">Privacy</td><td>No slice under 50 suggestions. No org, repo, or PR identifiers exposed.</td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </figure>
    </div>
  </section>

  <!-- ===================== FINAL ===================== -->
  <section class="soc__final">
    <div class="container">
      <span class="soc__divider-num" style="display:block;text-align:left;">Run it on your PRs</span>
      <h2 class="soc__final-title">See what gets caught <span class="highlight">in your code.</span></h2>
      <p class="soc__final-sub">Open source AI code review that learns your team's rules. This is what it does in production.</p>
      <div class="soc__final-ctas">
        <a href="<?php echo esc_url(home_url('/pricing/')); ?>" class="btn btn--primary">Try Kodus free</a>
        <a href="https://github.com/kodustech/kodus-ai" target="_blank" rel="noopener" class="btn btn--outline-light">Star on GitHub</a>
      </div>
      <p class="soc__cite">State of AI Code Review (2026-Q2) &middot; Research by Kodus &middot; <a href="<?php echo esc_url(home_url('/data/')); ?>">kodus.io/data</a> &middot; <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="noopener">CC BY 4.0</a></p>
    </div>
  </section>

</main>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Kodus", "item": "https://kodus.io/"},
    {"@type": "ListItem", "position": 2, "name": "State of AI Code Review 2026", "item": "https://kodus.io/data/"}
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Dataset",
  "name": "State of AI Code Review 2026",
  "alternateName": "State of AI Code Review (2026-Q2)",
  "description": "What happens after an AI leaves a review comment on a pull request. 180,739 suggestions delivered to 530 organizations across 140,662 reviewed PRs; 33.2% became code. Kodus production pipeline, Sep 2025 to Jun 2026.",
  "url": "https://kodus.io/data/",
  "license": "https://creativecommons.org/licenses/by/4.0/",
  "creator": {"@type": "Organization", "name": "Kodus", "url": "https://kodus.io/"},
  "temporalCoverage": "2025-09-01/2026-06-08",
  "keywords": ["AI code review", "pull requests", "code review acceptance rate", "software security", "LLM"]
}
</script>

<script>
(function () {
  var els = document.querySelectorAll('[data-soc-count]');
  if (!els.length) return;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  function fmt(n, type) {
    if (type === 'pct') return n.toFixed(1) + '%';
    if (type === 'x') return n.toFixed(1) + '×';
    return Math.round(n).toLocaleString('en-US');
  }
  function run(el) {
    if (el.dataset.socDone) return;
    el.dataset.socDone = '1';
    var target = parseFloat(el.dataset.socCount);
    var type = el.dataset.socFormat || 'int';
    if (reduce || !isFinite(target)) { el.textContent = fmt(target, type); return; }
    var dur = 1100, t0 = performance.now();
    function tick(now) {
      var p = Math.min((now - t0) / dur, 1);
      var eased = 1 - Math.pow(1 - p, 3);
      el.textContent = fmt(target * eased, type);
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }
  if (!('IntersectionObserver' in window)) { els.forEach(run); return; }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { run(e.target); io.unobserve(e.target); } });
  }, { threshold: 0.4 });
  els.forEach(function (el) { io.observe(el); });
})();
</script>

<script src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/js/apexcharts.min.js?v=3.54.1'); ?>"></script>
<script>
(function () {
  function init() {
    if (typeof ApexCharts === 'undefined') return;
    var FONT = "'JetBrains Mono', 'Fira Code', monospace";
    var C = { primary:'#F8B76D', secondary:'#C9BBF2', good:'#6FBF73', peach:'#FDBFBF', dim:'#30304B', grid:'#202032', text:'#CDCDDF', muted:'#8A8AA0', bg:'#101019' };
    var base = function (type, height) {
      return {
        chart: { type: type, height: height, background: 'transparent', fontFamily: FONT, foreColor: C.text, toolbar: { show: false }, animations: { enabled: true, speed: 700 }, parentHeightOffset: 0 },
        grid: { borderColor: C.grid, strokeDashArray: 3 },
        tooltip: { theme: 'dark' },
        dataLabels: { enabled: false }
      };
    };
    function pct(v) { return v + '%'; }

    function hbar(sel, cats, vals, o) {
      o = o || {};
      var el = document.querySelector(sel); if (!el) return;
      var opt = base('bar', o.height || 300);
      opt.series = [{ name: o.name || 'rate', data: vals }];
      opt.colors = o.colors || [C.primary];
      opt.plotOptions = { bar: { horizontal: true, borderRadius: 3, barHeight: '60%', distributed: !!o.colors, dataLabels: { position: 'top' } } };
      opt.legend = { show: false };
      opt.dataLabels = { enabled: true, textAnchor: 'start', offsetX: 8, formatter: function (v) { return v + (o.suffix || '%'); }, style: { fontSize: '12px', fontWeight: 700, colors: ['#F3F3F7'], fontFamily: FONT } };
      opt.xaxis = { categories: cats, min: 0, max: o.max, tickAmount: o.ticks || 5, labels: { style: { colors: C.muted, fontSize: '11px', fontFamily: FONT }, formatter: function (v) { return Math.round(v) + (o.suffix || '%'); } }, axisBorder: { show: false }, axisTicks: { show: false } };
      opt.yaxis = { labels: { style: { colors: C.text, fontSize: '12px', fontFamily: FONT } } };
      opt.grid.xaxis = { lines: { show: true } }; opt.grid.yaxis = { lines: { show: false } };
      opt.tooltip.y = { formatter: function (v) { return v + (o.suffix || '%'); } };
      new ApexCharts(el, opt).render();
    }

    function area(sel, cats, vals, o) {
      o = o || {};
      var el = document.querySelector(sel); if (!el) return;
      var unit = o.unit !== undefined ? o.unit : '%';
      var opt = base('area', o.height || 300);
      opt.series = [{ name: o.name || 'rate', data: vals }];
      opt.colors = [C.primary];
      opt.stroke = { curve: 'smooth', width: 3 };
      opt.fill = { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.04, stops: [0, 100] } };
      opt.markers = { size: 4, colors: [C.bg], strokeColors: C.primary, strokeWidth: 2, hover: { size: 6 } };
      opt.xaxis = { categories: cats, tickAmount: o.xticks, labels: { hideOverlappingLabels: true, style: { colors: C.muted, fontSize: '11px', fontFamily: FONT } }, axisBorder: { show: false }, axisTicks: { show: false }, tooltip: { enabled: false } };
      opt.yaxis = { min: 0, max: o.max, labels: { style: { colors: C.muted, fontSize: '11px', fontFamily: FONT }, formatter: function (v) { return Math.round(v) + unit; } } };
      opt.tooltip.y = { formatter: function (v) { return v + unit; } };
      new ApexCharts(el, opt).render();
    }

    // Hero "the climb" — implementation rate, big, line rising toward 47.5%
    (function () {
      var el = document.querySelector('#ch-hero-climb'); if (!el) return;
      new ApexCharts(el, {
        chart: { type: 'area', height: '100%', width: '100%', sparkline: { enabled: true }, animations: { enabled: true, speed: 1200, easing: 'easeinout' } },
        series: [{ name: 'become code', data: [25.1,27.8,22.0,28.2,29.3,36.5,37.0,36.2,47.5] }],
        colors: ['#F8B76D'],
        stroke: { curve: 'smooth', width: 4, lineCap: 'round' },
        fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.42, opacityTo: 0.02, stops: [0, 100] } },
        markers: { size: 0, discrete: [{ seriesIndex: 0, dataPointIndex: 8, fillColor: '#101019', strokeColor: '#F8B76D', size: 7, strokeWidth: 3 }], hover: { sizeOffset: 2 } },
        tooltip: { enabled: false }
      }).render();
    })();

    // 1.1 — implementation rate over time
    area('#ch-trend',
      ["Sep '25","Oct","Nov","Dec","Jan '26","Feb","Mar","Apr","May '26"],
      [25.1,27.8,22.0,28.2,29.3,36.5,37.0,36.2,47.5],
      { height: 300, max: 55, name: 'Any implementation' });

    // 1.2 — outcome donut
    (function () {
      var el = document.querySelector('#ch-outcome'); if (!el) return;
      var opt = base('donut', 280);
      opt.series = [17.2, 16.1, 66.8];
      opt.labels = ['Applied exactly', 'Adapted to fit', 'Ignored'];
      opt.colors = [C.good, C.peach, C.dim];
      opt.stroke = { colors: ['#181825'], width: 2 };
      opt.legend = { position: 'right', fontSize: '13px', fontFamily: FONT, labels: { colors: C.text }, itemMargin: { vertical: 4 }, formatter: function (name, w) { return name + '  ' + w.w.globals.series[w.seriesIndex] + '%'; } };
      opt.plotOptions = { pie: { donut: { size: '64%', labels: { show: true, value: { color: C.primary, fontSize: '20px', fontFamily: FONT, fontWeight: 700, formatter: function (v) { return v + '%'; } }, total: { show: true, label: 'fixed', color: C.muted, fontSize: '11px', fontFamily: FONT, formatter: function () { return '33.2%'; } } } } } };
      opt.tooltip.y = { formatter: pct };
      opt.responsive = [{ breakpoint: 600, options: { legend: { position: 'bottom' } } }];
      new ApexCharts(el, opt).render();
    })();

    // 1.4 — by language
    hbar('#ch-lang',
      ['Rust','Elixir','Go','Vue','Python','PHP','Ruby','TypeScript','JavaScript'],
      [59.7,46.8,45.4,43.7,39.9,36.2,35.5,33.8,33.4],
      { height: 360, max: 66 });

    // 1.5 — by severity (Critical dimmed)
    hbar('#ch-sev', ['Low','High','Medium','Critical'], [35.2,34.4,33.9,30.1],
      { height: 200, max: 40, colors: [C.primary, C.primary, C.primary, C.dim] });

    // 1.6 — by PR size (XS dimmed)
    hbar('#ch-prsize', ['XS ≤50','S 51-200','M 201-500','L 501-1k','XL 1k+'], [24.3,30.5,35.7,36.6,33.6],
      { height: 230, max: 42, colors: [C.dim, C.primary, C.primary, C.primary, C.primary] });

    // 4.2 — rules vs other signal
    hbar('#ch-rules', ['Performance','Bugs','Custom rules','Security'], [38.2,34.5,31.3,31.2],
      { height: 200, max: 42 });

    // 5.1 — by model family (lilac = swapped-in, orange = Gemini volume leader, dim = low)
    hbar('#ch-models', ['GLM','GPT','DeepSeek','Claude','Gemini','MiniMax','Kimi'], [60,55,54,52,41,32,30],
      { height: 300, max: 66, colors: [C.secondary, C.secondary, C.secondary, C.secondary, C.primary, C.dim, C.dim] });

    // 6.1 / 6.2 — PR velocity over time (full platform, monthly)
    var MONTHS17 = ["Jan '25","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec","Jan '26","Feb","Mar","Apr","May '26"];
    area('#ch-prsize-time', MONTHS17,
      [73,67,62,74,63,68,71,85,89,106,107,87,111,131,146,141,157],
      { height: 280, max: 175, unit: '', xticks: 5, name: 'Median PR size' });
    area('#ch-merge-time', MONTHS17,
      [18.9,16.6,17.9,10,7.1,6.6,3.4,4.9,6.9,6.4,4.3,2.6,2.3,2.4,2.7,2,1.7],
      { height: 280, max: 20, unit: 'h', xticks: 5, name: 'Median merge time' });

    // 9.2 — cost per PR by model (real list prices, same May-2026 workload)
    (function () {
      var el = document.querySelector('#ch-cost'); if (!el) return;
      var rows = [
        { m: 'Gemini Flash',      v: 0.10 },
        { m: 'GLM-4.7',           v: 0.40 },
        { m: 'Kimi K2.7',         v: 0.65 },
        { m: 'Gemini 2.5 Pro',    v: 1.03 },
        { m: 'DeepSeek V4 Pro',   v: 1.04 },
        { m: 'Gemini 3.1 Pro',    v: 1.50 },
        { m: 'GPT-5.4',           v: 1.87 },
        { m: 'Claude Sonnet 4.6', v: 2.14 },
        { m: 'Claude Opus 4.8',   v: 3.56 },
        { m: 'GPT-5.5',           v: 3.75 }
      ];
      var opt = base('bar', 380);
      opt.series = [{ name: 'Per PR', data: rows.map(function (r) { return r.v; }) }];
      opt.colors = rows.map(function (r) { return r.hi ? C.primary : C.secondary; });
      opt.plotOptions = { bar: { horizontal: true, borderRadius: 3, barHeight: '66%', distributed: true, dataLabels: { position: 'top' } } };
      opt.legend = { show: false };
      opt.dataLabels = { enabled: true, textAnchor: 'start', offsetX: 8, formatter: function (v) { return '$' + v.toFixed(2); }, style: { fontSize: '11px', fontWeight: 700, colors: ['#F3F3F7'], fontFamily: FONT } };
      opt.xaxis = { categories: rows.map(function (r) { return r.m; }), min: 0, max: 4.3, tickAmount: 4, labels: { style: { colors: C.muted, fontSize: '11px', fontFamily: FONT }, formatter: function (v) { return '$' + v; } }, axisBorder: { show: false }, axisTicks: { show: false } };
      opt.yaxis = { labels: { style: { colors: C.text, fontSize: '12px', fontFamily: FONT } } };
      opt.grid.xaxis = { lines: { show: true } }; opt.grid.yaxis = { lines: { show: false } };
      opt.tooltip.y = { formatter: function (v) { return '$' + v.toFixed(2) + ' per PR  ·  ~$' + (v * 2.75).toFixed(2) + ' per landed fix'; } };
      new ApexCharts(el, opt).render();
    })();

    // 7.1 — AI-coauthored share over time
    area('#ch-adopt',
      ["Sep '25","Dec '25","Feb '26","Mar '26","Apr '26","May '26"],
      [0.8,4.3,10.1,17.1,21.2,29.9],
      { height: 300, max: 35, name: 'AI-coauthored share' });

    // ApexCharts can capture a stale parent width at init; nudge it to refit once layout settles.
    function refit() { try { window.dispatchEvent(new Event('resize')); } catch (e) {} }
    requestAnimationFrame(function () { requestAnimationFrame(refit); });
    setTimeout(refit, 300);
    if (document.readyState !== 'complete') window.addEventListener('load', refit);
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
</script>

<script>
(function () {
  var els = document.querySelectorAll('.soc__asst, .soc__reveal, .soc__split');
  if (!els.length) return;
  if (!('IntersectionObserver' in window)) { els.forEach(function (e) { e.classList.add('is-in'); }); return; }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); } });
  }, { threshold: 0.25 });
  els.forEach(function (e) { io.observe(e); });
})();
(function () {
  var SECS = ['Implementation','Bugs','Vulnerabilities','Rules','Models','Adoption wave','AI-authored code','Merged anyway','Economics'];
  var opens = [];
  for (var i = 1; i <= 9; i++) { var el = document.getElementById('s' + i); if (el) opens.push(el); }
  if (!opens.length) return;
  var links = document.querySelectorAll('.soc__rail a');
  var barName = document.querySelector('.soc__railbar-name');
  var barFill = document.querySelector('.soc__railbar-fill');
  var active = -1, ticking = false;
  function top(el) { return el.getBoundingClientRect().top + window.scrollY; }
  function pad(n) { return (n < 10 ? '0' : '') + n; }
  function setActive(idx) {
    if (idx === active) return; active = idx;
    for (var k = 0; k < links.length; k++) links[k].classList.toggle('is-active', k === idx);
    if (barName) barName.innerHTML = '<b>' + pad(idx + 1) + '</b> ' + SECS[idx];
    if (barFill) barFill.style.width = ((idx + 1) / SECS.length * 100) + '%';
  }
  function update() {
    ticking = false;
    var y = window.scrollY + 150, idx = 0;
    for (var i = 0; i < opens.length; i++) { if (top(opens[i]) <= y) idx = i; }
    setActive(idx);
  }
  window.addEventListener('scroll', function () { if (!ticking) { ticking = true; requestAnimationFrame(update); } }, { passive: true });
  window.addEventListener('resize', update, { passive: true });
  update();
})();
</script>

<?php get_footer('kodus'); ?>
