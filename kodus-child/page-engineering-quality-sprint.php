<?php
/*
 * Template Name: Kodus Engineering Quality Sprint
 * Template Post Type: page
 */
?>
<?php get_header('kodus'); ?>

<style>
/* Hallmark · redesign · macrostructure: Workbench (engineering spec sheet)
 * tone: technical / operational · brand: Kodus dark + orange(primary)/purple(secondary)
 * pre-emit critique: P5 H5 E4 S5 R4 V4
 * Keeps copy + section order; rebuilds the visual layer only. Reuses theme tokens. */

.eqs{ --sec: var(--color-primary); position: relative; }
.eqs::before{
  content: ''; position: fixed; inset: 0; z-index: 0; pointer-events: none;
  background-image:
    linear-gradient(to right, rgba(123,123,170,.05) 1px, transparent 1px),
    linear-gradient(to bottom, rgba(123,123,170,.05) 1px, transparent 1px);
  background-size: 56px 56px;
  -webkit-mask-image: radial-gradient(130% 85% at 50% 0%, #000 0%, rgba(0,0,0,.4) 42%, transparent 80%);
  mask-image: radial-gradient(130% 85% at 50% 0%, #000 0%, rgba(0,0,0,.4) 42%, transparent 80%);
}
.eqs > *{ position: relative; z-index: 1; }

/* ---- section shell + per-section accent ---- */
.eqs__section{ padding: 92px 0; }
.eqs__section--tint{ background: rgba(24,24,37,.45); }
.eqs__section--orange{ --sec: var(--color-primary); }
.eqs__section--purple{ --sec: var(--color-secondary); }
.eqs__section--danger{ --sec: var(--color-danger); }
.eqs__section--green{ --sec: var(--color-success); }

/* ---- technical divider header ---- */
.eqs__rule{ display: flex; align-items: center; gap: 14px; margin-bottom: 30px; }
.eqs__rule-id{ font-family: var(--font-mono); font-size: .8rem; font-weight: 700; letter-spacing: 1px; color: var(--sec); }
.eqs__rule-label{ font-family: var(--font-mono); font-size: .72rem; letter-spacing: 2.5px; text-transform: uppercase; color: var(--color-text-dim); white-space: nowrap; }
.eqs__rule-line{ flex: 1; height: 1px; background: linear-gradient(90deg, color-mix(in srgb, var(--sec) 55%, transparent), transparent); }

.eqs__h2{
  font-family: var(--font-mono); font-weight: 700; font-size: clamp(1.5rem, 3vw, 2.35rem);
  line-height: 1.16; letter-spacing: -.6px; color: var(--color-text); margin: 0 0 18px; max-width: 24ch;
  overflow-wrap: anywhere; text-wrap: balance;
}
.eqs__h2--wide{ max-width: 30ch; }
.eqs__lede{ font-size: 1.02rem; line-height: 1.72; color: var(--color-text-muted); max-width: 64ch; margin: 0; }
.eqs__lede + .eqs__lede{ margin-top: 16px; }
.eqs__head{ margin-bottom: 44px; }

/* ========== HERO ========== */
.eqs__hero{ padding: 122px 0 76px; }
.eqs__hero-grid2{ display: grid; grid-template-columns: minmax(0, 1fr) 264px; gap: 52px; align-items: center; }
.eqs__hero-lead{ max-width: none; }
/* ---- hero transformation (problem → sprint → operating model) ---- */
.eqs__xform{ display: flex; flex-direction: column; gap: 6px; }
.eqs__xform-node{ background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-radius: var(--border-radius-sm); padding: 16px 18px; }
.eqs__xform-node--in{ border-left: 2px solid var(--color-danger); }
.eqs__xform-node--out{ border-left: 2px solid var(--color-success); }
.eqs__xform-lbl{ display: block; font-family: var(--font-mono); font-size: .6rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); margin-bottom: 8px; }
.eqs__xform-node strong{ display: block; font-family: var(--font-mono); font-size: .92rem; font-weight: 600; color: var(--color-text); line-height: 1.35; }
.eqs__xform-node--sprint{ border-color: var(--color-primary); background: var(--color-primary-dark); animation: eqs-xform-pulse 3s ease-in-out infinite; }
.eqs__xform-node--sprint .eqs__xform-lbl{ color: var(--color-primary); }
.eqs__xform-node--sprint strong{ color: var(--color-primary); font-size: .82rem; }
@keyframes eqs-xform-pulse{ 0%,100%{ box-shadow: 0 0 16px rgba(248,183,109,.12); } 50%{ box-shadow: 0 0 30px rgba(248,183,109,.26); } }
.eqs__xform-arrow{ text-align: center; color: var(--color-primary); font-size: .95rem; opacity: .4; line-height: 1; animation: eqs-arrowflow 4s ease-in-out infinite; }
.eqs__xform-dots{ display: flex; gap: 9px; margin-top: 12px; height: 16px; align-items: center; }
.eqs__xform-dots i{ width: 8px; height: 8px; border-radius: 50%; background: var(--color-text-dim); flex-shrink: 0; }
.eqs__xform-dots--scatter i{ transform: translateY(var(--y, 0)); animation: eqs-jitter 2.6s ease-in-out infinite; }
.eqs__xform-dots--scatter i.d-red{ background: var(--color-danger); }
.eqs__xform-dots--aligned i{ background: var(--color-primary); opacity: .22; transform-origin: center; animation: eqs-assemble 4s ease-in-out infinite; }
.eqs__xform-dots--aligned i:nth-child(1){ animation-delay: 1.9s; }
.eqs__xform-dots--aligned i:nth-child(2){ animation-delay: 2.05s; }
.eqs__xform-dots--aligned i:nth-child(3){ animation-delay: 2.2s; }
.eqs__xform-dots--aligned i:nth-child(4){ animation-delay: 2.35s; }
.eqs__xform-dots--aligned i:nth-child(5){ animation-delay: 2.5s; }
.eqs__xform-dots--aligned i:nth-child(6){ animation-delay: 2.65s; }
.eqs__xform-dots--aligned i:nth-child(7){ animation-delay: 2.8s; }
@keyframes eqs-jitter{ 0%,100%{ transform: translateY(var(--y, 0)); } 50%{ transform: translateY(calc(var(--y, 0) * -0.5)); } }
@keyframes eqs-arrowflow{ 0%,100%{ opacity: .28; transform: translateY(0); } 50%{ opacity: .8; transform: translateY(2px); } }
@keyframes eqs-assemble{ 0%,45%{ opacity: .18; transform: scale(.65); } 58%{ opacity: 1; transform: scale(1); } 90%{ opacity: 1; transform: scale(1); } 100%{ opacity: .18; transform: scale(.65); } }
@media (prefers-reduced-motion: reduce){
  .eqs__xform-node--sprint, .eqs__xform-arrow, .eqs__xform-dots--scatter i, .eqs__xform-dots--aligned i{ animation: none; }
  .eqs__xform-dots--aligned i{ opacity: 1; }
}
.eqs__kicker{ display: inline-flex; align-items: center; gap: 11px; font-family: var(--font-mono); font-size: .72rem; letter-spacing: 2.5px; text-transform: uppercase; color: var(--color-primary); margin-bottom: 26px; }
.eqs__kicker::before{ content: ''; width: 26px; height: 1px; background: var(--color-primary); }
.eqs__hero-h1{
  font-family: var(--font-mono); font-weight: 700; font-size: clamp(2.3rem, 4.7vw, 3.7rem);
  line-height: 1.08; letter-spacing: -1px; color: var(--color-text); margin: 0 0 26px; overflow-wrap: anywhere; text-wrap: balance;
}
.eqs__hero-h1 .highlight{ color: var(--color-primary); }
.eqs__hero-sub{ font-size: 1.05rem; line-height: 1.72; color: var(--color-text-muted); margin: 0 0 16px; max-width: 58ch; }
.eqs__hero-sub--tight{ margin-bottom: 30px; }
.eqs__cta-row{ display: flex; flex-wrap: wrap; gap: 14px; align-items: center; margin-bottom: 26px; }
.eqs__proof{ display: flex; align-items: center; gap: 9px; font-family: var(--font-mono); font-size: .78rem; color: var(--color-text-dim); line-height: 1.5; }
.eqs__proof svg{ width: 15px; height: 15px; color: var(--color-primary); flex-shrink: 0; }
/* ---- trust logos ---- */
.eqs__logos{ padding: 40px 0 48px; }
.eqs__logos-label{ text-align: center; font-family: var(--font-mono); font-size: .72rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); margin: 0 0 28px; }

/* ---- pipeline band ---- */
.eqs__flow{
  position: relative; display: flex; align-items: stretch; gap: 8px; margin-top: 64px;
  padding: 22px; background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3);
  border-radius: var(--border-radius-sm); overflow: hidden;
}
.eqs__flow::before{ content: 'PIPELINE WE INSPECT'; position: absolute; top: 10px; right: 16px; font-family: var(--font-mono); font-size: .56rem; letter-spacing: 2px; color: var(--color-text-dim); }
.eqs__flow::after{ content: ''; position: absolute; left: 0; bottom: 0; height: 2px; width: 100%; background: linear-gradient(90deg, transparent, var(--color-primary), transparent); background-size: 38% 100%; background-repeat: no-repeat; animation: eqs-sweep 4.2s linear infinite; }
@keyframes eqs-sweep{ 0%{ background-position: -40% 0; } 100%{ background-position: 140% 0; } }
.eqs__flow-step{ flex: 1 1 0; min-width: 88px; display: flex; flex-direction: column; gap: 5px; padding: 16px 13px; background: var(--color-card-lv2); border: 1px solid var(--color-card-lv3); border-radius: var(--border-radius-xs); transition: transform .15s ease; }
.eqs__flow-step:hover{ transform: translateY(-2px); }
.eqs__flow-step i{ font-style: normal; font-family: var(--font-mono); font-size: .58rem; color: var(--color-text-dim); letter-spacing: 1px; }
.eqs__flow-step span{ font-family: var(--font-mono); font-size: .62rem; color: var(--color-text-dim); text-transform: uppercase; letter-spacing: .5px; }
.eqs__flow-step strong{ font-family: var(--font-mono); font-size: .84rem; color: var(--color-text); font-weight: 600; }
.eqs__flow-step--accent{ border-color: var(--color-primary); background: var(--color-primary-dark); box-shadow: 0 0 18px rgba(248,183,109,.18); }
.eqs__flow-step--accent i, .eqs__flow-step--accent strong{ color: var(--color-primary); }
.eqs__flow-arrow{ display: flex; align-items: center; color: var(--color-primary); font-size: .9rem; opacity: .5; flex-shrink: 0; }

/* vertical pipeline (hero) */
.eqs__flow--v{ flex-direction: column; margin-top: 0; gap: 3px; padding: 28px 15px 15px; align-self: center; }
.eqs__flow--v .eqs__flow-step{ flex: 0 0 auto; padding: 10px 14px; gap: 2px; }
.eqs__flow--v .eqs__flow-step i{ font-size: .54rem; }
.eqs__flow--v .eqs__flow-step span{ font-size: .57rem; }
.eqs__flow--v .eqs__flow-step strong{ font-size: .8rem; }
.eqs__flow--v .eqs__flow-arrow{ transform: rotate(90deg); align-self: center; font-size: .7rem; margin: -2px 0; }
.eqs__flow--v::before{ top: 11px; left: 15px; right: auto; }
.eqs__flow--v::after{ left: 0; top: 0; bottom: 0; width: 2px; height: auto; background: linear-gradient(180deg, transparent, var(--color-primary), transparent); background-size: 100% 38%; background-repeat: no-repeat; animation: eqs-sweep-v 4.2s linear infinite; }
@keyframes eqs-sweep-v{ 0%{ background-position: 0 -40%; } 100%{ background-position: 0 140%; } }
.eqs__flow-step{ cursor: default; }
.eqs__flow-detail{ display: block; font-family: var(--font-mono); font-size: .6rem; color: var(--color-text-muted); line-height: 1.4; max-height: 0; opacity: 0; overflow: hidden; transition: max-height .3s ease, opacity .25s ease, margin-top .3s ease; }
.eqs__flow--v .eqs__flow-step.is-active, .eqs__flow--v .eqs__flow-step:hover{ border-color: var(--color-primary); background: var(--color-primary-dark); box-shadow: 0 0 18px rgba(248,183,109,.2); }
.eqs__flow--v .eqs__flow-step.is-active i, .eqs__flow--v .eqs__flow-step.is-active strong,
.eqs__flow--v .eqs__flow-step:hover i, .eqs__flow--v .eqs__flow-step:hover strong{ color: var(--color-primary); }
.eqs__flow--v .eqs__flow-step.is-active .eqs__flow-detail, .eqs__flow--v .eqs__flow-step:hover .eqs__flow-detail{ max-height: 40px; opacity: 1; margin-top: 5px; }

/* ========== PROBLEM — failure log ========== */
.eqs__log{ list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: 1fr 1fr; gap: 0 32px; }
.eqs__log li{ font-family: var(--font-mono); font-size: .9rem; line-height: 1.5; color: var(--color-text-muted); padding: 14px 0 14px 30px; border-top: 1px solid var(--color-card-lv2); position: relative; }
.eqs__log li::before{ content: '!'; position: absolute; left: 7px; top: 14px; color: var(--color-danger); font-family: var(--font-mono); font-weight: 700; }
.eqs__note{ margin-top: 34px; padding: 20px 22px; border-left: 3px solid var(--sec); background: var(--color-card-lv1); border-radius: 0 var(--border-radius-xs) var(--border-radius-xs) 0; font-size: .98rem; line-height: 1.7; color: var(--color-text); max-width: 72ch; }

/* ---- problem section layout ---- */
.eqs__head--tight{ margin-bottom: 22px; }
.eqs__prob-split{ display: grid; grid-template-columns: minmax(0, .9fr) minmax(0, 1.05fr); gap: 48px; align-items: start; margin-top: 8px; }
.eqs__prob-lead .eqs__note{ margin-top: 24px; }
.eqs__log--single{ grid-template-columns: 1fr; gap: 0; }
.eqs__log--single li{ border-bottom: none; }

/* ---- bottleneck funnel ---- */
.eqs__funnel{ margin: 4px 0 44px; cursor: ew-resize; }
.eqs__funnel svg{ width: 100%; height: auto; display: block; overflow: visible; }
.ef-pipe, .ef-gate, .ef-caption{ transition: none; }
.ef-hint{ font-family: var(--font-mono); font-size: 11px; letter-spacing: 1px; fill: var(--color-text-dim); }
.ef-pipe{ fill: none; stroke: var(--color-card-lv3); stroke-width: 1.5; }
.ef-tick{ stroke: var(--color-card-lv3); stroke-width: 1; stroke-dasharray: 2 4; }
.ef-label{ font-family: var(--font-mono); font-size: 15px; letter-spacing: 2px; text-transform: uppercase; fill: var(--color-text-dim); }
.ef-label--hot{ fill: var(--color-danger); }
.ef-gate{ stroke: var(--color-danger); stroke-width: 1.5; stroke-dasharray: 4 5; animation: ef-pulse 2.6s ease-in-out infinite; }
@keyframes ef-pulse{ 0%,100%{ opacity: .35; } 50%{ opacity: .85; } }
.ef-caption{ font-family: var(--font-mono); font-size: 12px; letter-spacing: 1px; fill: var(--color-danger); }
.ef-dots circle{ opacity: .92; }
.ef-dots .d1{ fill: var(--color-primary); }
.ef-dots .d2{ fill: var(--color-secondary); }
.ef-dots .d3{ fill: var(--color-tertiary); }
.ef-dots .d4{ fill: var(--color-danger); }
@media (prefers-reduced-motion: reduce){ .ef-gate{ animation: none; } }

/* ========== OFFER ========== */
.eqs__split{ display: grid; grid-template-columns: minmax(0, 1.25fr) minmax(0, .75fr); gap: 48px; align-items: start; }
.eqs__roles{ display: flex; flex-direction: column; gap: 10px; }
.eqs__roles-label{ font-family: var(--font-mono); font-size: .64rem; letter-spacing: 1.5px; text-transform: uppercase; color: var(--color-text-dim); margin-bottom: 6px; }
.eqs__role{ font-family: var(--font-mono); font-size: .82rem; color: var(--color-text); background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-left: 2px solid var(--sec); border-radius: var(--border-radius-xs); padding: 12px 15px; }

/* ========== CARDS ========== */
.eqs__cards{ display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; }
.eqs__card{ background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-top: 2px solid var(--color-card-lv3); border-radius: var(--border-radius-sm); padding: 26px 24px; transition: border-color .15s ease, transform .15s ease, box-shadow .15s ease; }
.eqs__card:hover{ border-color: var(--sec); border-top-color: var(--sec); transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,.42); }
.eqs__card-icon{ width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; background: var(--color-card-lv3); border-radius: var(--border-radius-xs); color: var(--sec); margin-bottom: 18px; transition: background .15s ease, color .15s ease; }
.eqs__card:hover .eqs__card-icon{ background: var(--sec); color: var(--color-bg); }
.eqs__card-icon svg{ width: 21px; height: 21px; }
.eqs__card h3{ font-family: var(--font-mono); font-size: 1rem; color: var(--color-text); margin: 0 0 11px; }
.eqs__card p{ font-size: .9rem; line-height: 1.62; color: var(--color-text-muted); margin: 0; }

/* ========== DELIVERABLES — numbered manifest ========== */
.eqs__manifest{ list-style: none; margin: 0; padding: 0; counter-reset: man; border-top: 1px solid var(--color-card-lv2); }
.eqs__manifest li{ counter-increment: man; display: grid; grid-template-columns: 46px 1fr; gap: 18px; align-items: baseline; padding: 17px 6px; border-bottom: 1px solid var(--color-card-lv2); font-size: 1rem; line-height: 1.5; color: var(--color-text); transition: background .15s ease, padding-left .15s ease; }
.eqs__manifest li::before{ content: counter(man, decimal-leading-zero); font-family: var(--font-mono); font-size: .8rem; font-weight: 700; color: var(--sec); }
.eqs__manifest li:hover{ background: var(--color-card-lv1); }

/* ========== OUTCOMES — operating-model catalog ========== */
.eqs__model{ display: grid; grid-template-columns: 1fr 1fr; gap: 0 48px; }
.eqs__model-item{ display: grid; grid-template-columns: 116px 1fr; gap: 18px; align-items: baseline; padding: 18px 0; border-top: 1px solid var(--color-card-lv2); }
.eqs__model-tag{ font-family: var(--font-mono); font-size: .8rem; letter-spacing: .3px; color: var(--sec); }
.eqs__model-item p{ margin: 0; font-size: .92rem; line-height: 1.55; color: var(--color-text-muted); }

/* ========== TIMELINE — connected stepper ========== */
.eqs__weeks{ position: relative; display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 20px; }
.eqs__weeks::before{ content: ''; position: absolute; top: 17px; left: 12.5%; right: 12.5%; height: 2px; background: linear-gradient(90deg, var(--color-primary), var(--color-secondary)); opacity: .45; }
.eqs__week{ position: relative; }
.eqs__week-node{ width: 36px; height: 36px; border-radius: 50%; margin: 0 auto 22px; background: var(--color-bg); border: 2px solid var(--color-primary); color: var(--color-primary); font-family: var(--font-mono); font-weight: 700; font-size: .84rem; display: flex; align-items: center; justify-content: center; position: relative; z-index: 1; box-shadow: 0 0 0 7px var(--color-bg); }
.eqs__week-card{ background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-radius: var(--border-radius-sm); padding: 22px 20px; height: calc(100% - 58px); transition: transform .15s ease, box-shadow .15s ease; }
.eqs__week:hover .eqs__week-card{ transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,.42); }
.eqs__week-name{ font-family: var(--font-mono); font-size: 1.08rem; color: var(--color-primary); margin-bottom: 12px; }
.eqs__week-card > p{ font-size: .88rem; line-height: 1.6; color: var(--color-text-muted); margin: 0 0 16px; }
.eqs__week-out{ font-family: var(--font-mono); font-size: .64rem; letter-spacing: 1px; text-transform: uppercase; color: var(--color-text-dim); margin-bottom: 9px; padding-top: 14px; border-top: 1px solid var(--color-card-lv2); }
.eqs__week-card ul{ list-style: none; margin: 0; padding: 0; display: grid; gap: 7px; }
.eqs__week-card li{ font-family: var(--font-mono); font-size: .8rem; color: var(--color-text-muted); padding-left: 15px; position: relative; }
.eqs__week-card li::before{ content: '→'; position: absolute; left: 0; color: var(--color-primary); }

/* ========== FIT ========== */
.eqs__fit{ display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.eqs__fit-col{ background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-radius: var(--border-radius-sm); padding: 28px 26px; }
.eqs__fit-col--good{ border-top: 3px solid var(--color-success); }
.eqs__fit-col--poor{ border-top: 3px solid var(--color-card-lv3); }
.eqs__fit-col h3{ font-family: var(--font-mono); font-size: 1rem; margin: 0 0 8px; color: var(--color-text); display: flex; align-items: center; gap: 9px; }
.eqs__fit-col--good h3::before{ content: 'GOOD'; font-size: .58rem; letter-spacing: 1px; color: var(--color-bg); background: var(--color-success); padding: 3px 7px; border-radius: 3px; }
.eqs__fit-col--poor h3::before{ content: 'SKIP'; font-size: .58rem; letter-spacing: 1px; color: var(--color-text-muted); background: var(--color-card-lv3); padding: 3px 7px; border-radius: 3px; }
.eqs__fit-col ul{ list-style: none; margin: 18px 0 0; padding: 0; display: grid; gap: 12px; }
.eqs__fit-col li{ position: relative; padding-left: 26px; font-size: .92rem; line-height: 1.5; color: var(--color-text-muted); }
.eqs__fit-col--good li::before{ content: '✓'; position: absolute; left: 0; color: var(--color-success); font-weight: 700; }
.eqs__fit-col--poor li::before{ content: '✕'; position: absolute; left: 0; color: var(--color-text-dim); font-weight: 700; }

/* ========== WHY — statement ========== */
.eqs__statement{ border-left: 3px solid var(--sec); padding-left: 30px; max-width: 70ch; }
.eqs__statement .eqs__lede{ font-size: 1.12rem; color: var(--color-text); }
.eqs__statement .eqs__lede + .eqs__lede{ color: var(--color-text-muted); }

/* ========== CTA ========== */
.eqs__cta-block{ text-align: center; max-width: 800px; margin: 0 auto; padding: 56px 46px; background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-top: 2px solid var(--color-primary); border-radius: var(--border-radius); box-shadow: 0 28px 66px rgba(0,0,0,.55); position: relative; overflow: hidden; }
.eqs__cta-block::before{ content: ''; position: absolute; inset: -40% 30% auto; height: 200px; background: radial-gradient(closest-side, rgba(248,183,109,.16), transparent); pointer-events: none; }
.eqs__cta-block > *{ position: relative; }
.eqs__cta-block .eqs__h2{ margin: 0 auto 18px; max-width: 28ch; }
.eqs__cta-block .eqs__lede{ margin: 0 auto; }
.eqs__cta-block .eqs__cta-row{ justify-content: center; margin-top: 34px; margin-bottom: 0; position: relative; }
.eqs__cta-glow{ position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 260px; height: 110px; background: radial-gradient(closest-side, rgba(248,183,109,.4), transparent 75%); filter: blur(20px); pointer-events: none; z-index: 0; animation: eqs-cta-glow 2.8s ease-in-out infinite; }
@keyframes eqs-cta-glow{ 0%,100%{ opacity: .35; } 50%{ opacity: .8; } }
.eqs__cta-btn{ position: relative; z-index: 1; font-size: 1rem; padding: 17px 34px; gap: 12px; letter-spacing: .5px; }
.eqs__cta-btn svg{ width: 18px; height: 18px; flex-shrink: 0; }
.eqs__cta-cal{ opacity: .8; }
.eqs__cta-arrow{ transition: transform .18s ease; }
.eqs__cta-btn:hover .eqs__cta-arrow{ transform: translateX(5px); }
@media (prefers-reduced-motion: reduce){ .eqs__cta-glow{ animation: none; } .eqs__cta-arrow{ transition: none; } }
.eqs__form-note{ font-family: var(--font-mono); font-size: .78rem; color: var(--color-text-dim); text-align: center; margin-top: 20px; }

/* ========== FAQ ========== */
.eqs__faq-title{ font-family: var(--font-mono); font-weight: 700; font-size: clamp(1.5rem, 3vw, 2.1rem); letter-spacing: -.5px; color: var(--color-text); margin: 0 0 36px; }

/* ========== RESPONSIVE ========== */
@media (max-width: 980px){
  .eqs__hero-grid2{ grid-template-columns: 1fr; gap: 44px; }
  .eqs__flow--v{ flex-direction: row; padding-top: 22px; }
  .eqs__flow--v .eqs__flow-arrow{ transform: none; }
  .eqs__flow-detail{ display: none; }
  .eqs__flow--v::before{ top: 10px; right: 16px; left: auto; }
  .eqs__flow--v::after{ left: 0; top: auto; bottom: 0; width: 100%; height: 2px; background: linear-gradient(90deg, transparent, var(--color-primary), transparent); background-size: 38% 100%; animation: eqs-sweep 4.2s linear infinite; }
  .eqs__split{ grid-template-columns: 1fr; gap: 32px; }
  .eqs__cards{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .eqs__weeks{ grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .eqs__weeks::before{ display: none; }
  .eqs__week-node{ margin-left: 0; }
}
@media (max-width: 760px){
  .eqs__section{ padding: 68px 0; }
  .eqs__log{ grid-template-columns: 1fr; }
  .eqs__prob-split{ grid-template-columns: 1fr; gap: 28px; }
  .eqs__model{ grid-template-columns: 1fr; }
  .eqs__fit{ grid-template-columns: 1fr; }
}
@media (max-width: 600px){
  .eqs__cards{ grid-template-columns: 1fr; }
  .eqs__weeks{ grid-template-columns: 1fr; }
  .eqs__flow{ flex-direction: column; }
  .eqs__flow-arrow{ transform: rotate(90deg); }
  .eqs__manifest li{ grid-template-columns: 34px 1fr; gap: 12px; }
}
@media (prefers-reduced-motion: reduce){
  .eqs__flow::after{ animation: none; opacity: .5; }
  .eqs__card, .eqs__week-card, .eqs__flow-step, .eqs__card-icon, .eqs__tag{ transition: none; }
}

/* ========== SCROLL REVEAL (only active when JS adds .eqs--anim) ========== */
.eqs--anim :is(.eqs__kicker,.eqs__hero-h1,.eqs__hero-sub,.eqs__cta-row,.eqs__proof,.eqs__rule,.eqs__head,.eqs__xform,.eqs__card,.eqs__manifest li,.eqs__model-item,.eqs__tag,.eqs__role,.eqs__week,.eqs__fit-col,.eqs__log li,.eqs__statement,.eqs__cta-block){
  opacity: 0; transform: translateY(20px);
  transition: opacity .6s cubic-bezier(.16,1,.3,1), transform .6s cubic-bezier(.16,1,.3,1);
}
.eqs--anim .is-in{ opacity: 1 !important; transform: none !important; }
.eqs--anim .eqs__weeks::before{ transform: scaleX(0); transform-origin: left; transition: transform .9s cubic-bezier(.16,1,.3,1) .15s; }
.eqs--anim .eqs__weeks.is-in::before{ transform: scaleX(1); }
@media (prefers-reduced-motion: reduce){
  .eqs--anim :is(.eqs__kicker,.eqs__hero-h1,.eqs__hero-sub,.eqs__cta-row,.eqs__proof,.eqs__rule,.eqs__head,.eqs__xform,.eqs__card,.eqs__manifest li,.eqs__model-item,.eqs__tag,.eqs__role,.eqs__week,.eqs__fit-col,.eqs__log li,.eqs__statement,.eqs__cta-block){ opacity: 1; transform: none; }
  .eqs--anim .eqs__weeks::before{ transform: scaleX(1); }
}
</style>

<main class="eqs">
  <script>document.currentScript.parentNode.classList.add('eqs--anim');</script>

  <!-- ===================== HERO ===================== -->
  <section class="eqs__section eqs__hero eqs__section--orange">
    <div class="container">
      <div class="eqs__hero-grid2">
      <div class="eqs__hero-lead">
        <span class="eqs__kicker">4-Week Engineering Sprint</span>
        <h1 class="eqs__hero-h1">Scale AI-assisted development without losing control of engineering <span class="highlight">quality</span>.</h1>
        <p class="eqs__hero-sub">AI coding tools help teams produce code faster. The harder part is keeping standards, validation, ownership, metrics and rollout consistent as usage spreads across teams.</p>
        <p class="eqs__hero-sub eqs__hero-sub--tight">Kodus works hands-on with your engineering team for 4 weeks to find where quality breaks down, improve one or two concrete bottlenecks, and leave you with a model you can reuse across more repos.</p>
        <div class="eqs__cta-row">
          <button type="button" class="btn btn--primary" data-cal-link="gabrielmalinosqui/quality-sprint" data-cal-config='{"layout":"month_view"}'>Talk to a founder</button>
          <a href="#how" class="btn btn--outline-light">See how the sprint works</a>
        </div>
        <p class="eqs__proof">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 7.7 8 9 4.6-1.3 8-4 8-9V5z"/></svg>
          Founder-led, one company per segment &mdash; from the team behind open source AI code review without vendor lock-in.
        </p>
      </div>
      <div class="eqs__xform" aria-hidden="true">
        <div class="eqs__xform-node eqs__xform-node--in">
          <span class="eqs__xform-lbl">You bring</span>
          <strong>One messy quality problem</strong>
          <div class="eqs__xform-dots eqs__xform-dots--scatter">
            <i style="--y:6px"></i><i class="d-red" style="--y:-4px"></i><i style="--y:9px"></i><i style="--y:-2px"></i><i class="d-red" style="--y:5px"></i><i style="--y:-6px"></i><i style="--y:2px"></i>
          </div>
        </div>
        <div class="eqs__xform-arrow">&#8595;</div>
        <div class="eqs__xform-node eqs__xform-node--sprint">
          <span class="eqs__xform-lbl">4-week sprint</span>
          <strong>Diagnose &rarr; Design &rarr; Improve &rarr; Package</strong>
        </div>
        <div class="eqs__xform-arrow">&#8595;</div>
        <div class="eqs__xform-node eqs__xform-node--out">
          <span class="eqs__xform-lbl">You leave with</span>
          <strong>A reusable operating model</strong>
          <div class="eqs__xform-dots eqs__xform-dots--aligned">
            <i></i><i></i><i></i><i></i><i></i><i></i><i></i>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- ===================== TRUST LOGOS ===================== -->
  <section class="eqs__section eqs__logos">
    <div class="container">
      <p class="eqs__logos-label">Engineering teams that trust Kodus</p>
      <?php kodus_render_trusted_logo_carousel(); ?>
    </div>
  </section>

  <!-- ===================== PROBLEM ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--danger">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">01</span><span class="eqs__rule-label">The problem</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head eqs__head--tight">
        <h2 class="eqs__h2 eqs__h2--wide">AI adoption puts pressure on the whole engineering workflow.</h2>
      </div>

      <figure class="eqs__funnel" aria-hidden="true">
        <svg viewBox="0 0 1000 240" preserveAspectRatio="xMidYMid meet">
          <!-- stage labels + ticks -->
          <g class="ef-labels">
            <text class="ef-label" x="160" y="26" text-anchor="middle">Code</text>
            <line class="ef-tick" x1="160" y1="36" x2="160" y2="58"/>
            <text class="ef-label ef-label--hot" x="400" y="26" text-anchor="middle">Review · CI</text>
            <text class="ef-label" x="660" y="26" text-anchor="middle">Test</text>
            <line class="ef-tick" x1="660" y1="36" x2="660" y2="70"/>
            <text class="ef-label" x="880" y="26" text-anchor="middle">Merge</text>
            <line class="ef-tick" x1="880" y1="36" x2="880" y2="58"/>
          </g>
          <!-- pipe -->
          <path class="ef-pipe" d="M0 60 C 280 60, 320 104, 400 104 C 480 104, 520 60, 1000 60"/>
          <path class="ef-pipe" d="M0 180 C 280 180, 320 136, 400 136 C 480 136, 520 180, 1000 180"/>
          <!-- bottleneck gate -->
          <line class="ef-gate" x1="400" y1="40" x2="400" y2="200"/>
          <!-- flowing work items -->
          <g class="ef-dots">
            <circle class="d1" cx="60"  cy="118" r="8"/>
            <circle class="d3" cx="92"  cy="140" r="8"/>
            <circle class="d2" cx="112" cy="100" r="8"/>
            <circle class="d1" cx="142" cy="132" r="8"/>
            <circle class="d4" cx="152" cy="110" r="8"/>
            <circle class="d2" cx="178" cy="126" r="8"/>
            <circle class="d1" cx="202" cy="116" r="8"/>
            <circle class="d3" cx="214" cy="142" r="8"/>
            <circle class="d2" cx="236" cy="106" r="8"/>
            <circle class="d1" cx="258" cy="128" r="8"/>
            <circle class="d4" cx="282" cy="120" r="8"/>
            <circle class="d2" cx="302" cy="110" r="8"/>
            <circle class="d3" cx="322" cy="132" r="8"/>
            <circle class="d1" cx="346" cy="122" r="8"/>
            <circle class="d2" cx="366" cy="114" r="8"/>
            <circle class="d1" cx="474" cy="120" r="8"/>
            <circle class="d3" cx="566" cy="110" r="8"/>
            <circle class="d2" cx="648" cy="128" r="8"/>
            <circle class="d4" cx="726" cy="118" r="8"/>
            <circle class="d1" cx="806" cy="122" r="8"/>
            <circle class="d2" cx="884" cy="114" r="8"/>
            <circle class="d3" cx="946" cy="124" r="8"/>
          </g>
        </svg>
      </figure>

      <div class="eqs__prob-split">
        <div class="eqs__prob-lead">
          <p class="eqs__lede">Most AI coding adoption starts with individual developers. Someone uses Cursor. Someone else uses Copilot. A team experiments with Claude Code, Codex, Devin or an internal agent. The early win is obvious: code gets produced faster. The operational problems show up after that:</p>
          <p class="eqs__note">Buying another tool does not fix the workflow by itself. The team needs to understand where quality breaks down in practice, then turn that into a repeatable way of working.</p>
        </div>
        <ul class="eqs__log eqs__log--single">
          <li>Standards become harder to enforce across repos.</li>
          <li>AI-generated code has unclear ownership.</li>
          <li>CI and tests carry more risk than before.</li>
          <li>Review expectations stay tribal.</li>
          <li>Automation creates noise developers stop trusting.</li>
          <li>Leadership cannot tell whether AI adoption is improving quality.</li>
          <li>Rollout depends on one internal champion.</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ===================== OFFER ===================== -->
  <section class="eqs__section eqs__section--orange">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">02</span><span class="eqs__rule-label">The offer</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__split">
        <div>
          <h2 class="eqs__h2 eqs__h2--wide">A 4-week sprint to find and fix the quality bottlenecks created by AI adoption.</h2>
          <p class="eqs__lede">We work with engineering leadership, Platform or DevEx owners, repo owners and developers to inspect the real workflow: code changes, standards, review, CI, tests, ownership, metrics and AI usage.</p>
          <p class="eqs__lede">Then we choose one or two bottlenecks to improve during the sprint. You leave with a diagnosis, implemented changes in the selected scope and a rollout model for the next teams or repos.</p>
        </div>
        <div class="eqs__roles">
          <div class="eqs__roles-label">Who we work with</div>
          <div class="eqs__role">Engineering <span>leadership</span></div>
          <div class="eqs__role">Platform / <span>DevEx</span> owners</div>
          <div class="eqs__role">Repo <span>owners</span></div>
          <div class="eqs__role">Developers <span>in the loop</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHAT WE LOOK AT ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--purple">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">03</span><span class="eqs__rule-label">What we look at</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">We inspect the engineering quality system AI now depends on.</h2>
        <p class="eqs__lede">AI adoption touches standards, ownership, validation, metrics, and rollout. The sprint shows where those pieces are clear, where they are implicit, and what needs to change before AI scales across the team.</p>
      </div>
      <div class="eqs__cards">
        <div class="eqs__card">
          <div class="eqs__card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 16 4-4-4-4"/><path d="m6 8-4 4 4 4"/><path d="m14.5 4-5 16"/></svg></div>
          <h3>AI-assisted development</h3>
          <p>How engineers use AI coding tools today, where usage is official or informal, and which kinds of AI-generated changes need clearer rules.</p>
        </div>
        <div class="eqs__card">
          <div class="eqs__card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 17 2 2 4-4"/><path d="m3 7 2 2 4-4"/><path d="M13 6h8"/><path d="M13 12h8"/><path d="M13 18h8"/></svg></div>
          <h3>Engineering standards</h3>
          <p>Which expectations are documented, which live in senior engineers' heads, and where standards differ by team, repo or folder.</p>
        </div>
        <div class="eqs__card">
          <div class="eqs__card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/><path d="M7 21h10"/><path d="M12 3v18"/><path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/></svg></div>
          <h3>Ownership and decision rights</h3>
          <p>Who owns AI-generated changes, who decides what is safe to merge, and where accountability gets blurry as more code is machine-written.</p>
        </div>
        <div class="eqs__card">
          <div class="eqs__card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2v6.5a2 2 0 0 0 .3 1.05l4.4 7.35A2 2 0 0 1 17 20H7a2 2 0 0 1-1.7-3.1l4.4-7.35A2 2 0 0 0 10 8.5V2"/><path d="M8.5 2h7"/><path d="M7 16h10"/></svg></div>
          <h3>Validation system</h3>
          <p>Which checks give engineers confidence, which ones are ignored, and where AI-generated changes need stronger validation.</p>
        </div>
        <div class="eqs__card">
          <div class="eqs__card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg></div>
          <h3>Quality metrics</h3>
          <p>What leadership wants to understand, what the team can measure today, and which metrics would create better decisions.</p>
        </div>
        <div class="eqs__card">
          <div class="eqs__card-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6m0 8v6M2 12h6m8 0h6"/><circle cx="12" cy="12" r="3"/></svg></div>
          <h3>Rollout governance</h3>
          <p>Which repos should go first, who needs to buy in, how exceptions work, and how the model expands without relying on one champion.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHAT YOU GET ===================== -->
  <section class="eqs__section eqs__section--orange">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">04</span><span class="eqs__rule-label">What you get</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">What comes out of the sprint</h2>
        <p class="eqs__lede">The sprint is scoped around one or two concrete improvements. The exact focus depends on what we find during diagnosis.</p>
      </div>
      <ul class="eqs__manifest">
        <li>Engineering quality diagnosis for the selected scope.</li>
        <li>Bottleneck map across standards, review, CI, tests, ownership, tools, metrics and AI usage.</li>
        <li>AI adoption risk map.</li>
        <li>Baseline quality metrics.</li>
        <li>Recommended operating model for the selected team or repos.</li>
        <li>One or two implemented workflow improvements.</li>
        <li>Rollout recommendation for more repos or teams.</li>
        <li>Final leadership report with what should become product, process or policy.</li>
      </ul>
    </div>
  </section>

  <!-- ===================== EXAMPLE OUTCOMES ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--purple">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">05</span><span class="eqs__rule-label">Example outcomes</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">The operating model you walk away with</h2>
        <p class="eqs__lede">Each sprint turns one messy engineering quality problem into a concrete operating model your team can use.</p>
      </div>
      <div class="eqs__model">
        <div class="eqs__model-item"><span class="eqs__model-tag">Baseline</span><p>A clear quality baseline across repos, teams, and AI workflows.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Risk map</span><p>A map of where AI-generated code creates risk in your delivery process.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Standards</span><p>Written engineering standards that humans and tools can both enforce.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Ownership</span><p>An ownership model for AI-assisted changes before and after merge.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Rollout</span><p>A rollout plan for which teams, repos, and workflows are ready for AI adoption.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Backlog</span><p>A prioritized backlog separating tooling gaps, process gaps, and product work.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Governance</span><p>A governance model for when AI can assist, when humans must decide, and who signs off.</p></div>
        <div class="eqs__model-item"><span class="eqs__model-tag">Metrics</span><p>Metrics to tell whether AI is improving engineering quality or just moving review work around.</p></div>
      </div>
    </div>
  </section>

  <!-- ===================== HOW IT WORKS ===================== -->
  <section class="eqs__section eqs__section--orange" id="how">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">06</span><span class="eqs__rule-label">How the sprint works</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">Four weeks, fixed scope, real repos</h2>
      </div>
      <div class="eqs__weeks">
        <div class="eqs__week">
          <div class="eqs__week-node">1</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Diagnose</div>
            <p>We inspect selected repos, recent changes, review behavior, current rules, CI signals, tooling and AI usage.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Baseline diagnosis</li><li>Top bottlenecks</li><li>Agreed sprint focus</li></ul>
          </div>
        </div>
        <div class="eqs__week">
          <div class="eqs__week-node">2</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Design</div>
            <p>We define the target operating model for the selected scope.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Workflow proposal</li><li>Measurement plan</li><li>Owner responsibilities</li><li>Rollout plan</li></ul>
          </div>
        </div>
        <div class="eqs__week">
          <div class="eqs__week-node">3</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Improve</div>
            <p>We help change one or two concrete parts of the workflow: rules, review policy, reports, CI signal, AI usage guidelines or Kodus configuration.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Implemented changes</li><li>First usage readout</li><li>Repo-owner feedback</li></ul>
          </div>
        </div>
        <div class="eqs__week">
          <div class="eqs__week-node">4</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Package</div>
            <p>We measure early signal, review feedback, classify what should become product or process, and prepare the expansion plan.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Final report</li><li>Rollout recommendation</li><li>Next-step plan</li></ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHO IT'S FOR ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--green">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">07</span><span class="eqs__rule-label">Who it is for</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">Built for engineering teams where AI usage is becoming an operating question.</h2>
      </div>
      <div class="eqs__fit">
        <div class="eqs__fit-col eqs__fit-col--good">
          <h3>Good fit</h3>
          <ul>
            <li>50+ engineers.</li>
            <li>Multiple teams or repositories.</li>
            <li>Active use or evaluation of Cursor, Copilot, Claude Code, Codex, Devin or internal agents.</li>
            <li>Platform, DevEx or Engineering Excellence owner.</li>
            <li>Visible quality, CI, standards or rollout problems.</li>
            <li>Leadership wants to scale AI usage with more control.</li>
          </ul>
        </div>
        <div class="eqs__fit-col eqs__fit-col--poor">
          <h3>Poor fit</h3>
          <ul>
            <li>Very small teams.</li>
            <li>Teams with no engineering leadership sponsor.</li>
            <li>Companies looking for cheap implementation labor.</li>
            <li>Buyers who only want Kodus onboarding.</li>
            <li>Teams expecting AI adoption to be solved by buying one more tool.</li>
            <li>Organizations that want fully autonomous merge decisions.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHY KODUS ===================== -->
  <section class="eqs__section eqs__section--purple">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">08</span><span class="eqs__rule-label">Why Kodus</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__statement">
        <h2 class="eqs__h2 eqs__h2--wide">Kodus works close to where quality decisions happen.</h2>
        <p class="eqs__lede">Kodus is open source AI code review without vendor lock-in. That matters here because the pull request is one of the places where AI adoption becomes visible. Code has changed. Reviewers need to decide what is safe. CI either gives confidence or it does not. Standards either show up in the workflow or stay in someone's head.</p>
        <p class="eqs__lede">The sprint uses that practical signal to help your team improve the broader engineering quality workflow. Treat it as field work around real repositories, real review behavior and the quality systems your engineers already use.</p>
      </div>
    </div>
  </section>

  <!-- ===================== CTA ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--orange">
    <div class="container">
      <div class="eqs__cta-block">
        <span class="eqs__kicker" style="justify-content:center;">Get started</span>
        <h2 class="eqs__h2">Want to understand where AI is stressing your engineering workflow?</h2>
        <p class="eqs__lede">Bring one team or 3 to 5 repositories. We will help you diagnose where quality breaks down, improve one or two concrete bottlenecks, and leave with a model you can reuse.</p>
        <div class="eqs__cta-row">
          <span class="eqs__cta-glow" aria-hidden="true"></span>
          <button type="button" class="btn btn--primary eqs__cta-btn" data-cal-link="gabrielmalinosqui/quality-sprint" data-cal-config='{"layout":"month_view"}'>
            <svg class="eqs__cta-cal" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg>
            Talk to a founder
            <svg class="eqs__cta-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </button>
        </div>
        <p class="eqs__form-note">Founder-led &middot; one company per segment &middot; we reply within one business day.</p>
      </div>
    </div>
  </section>

  <!-- ===================== FAQ ===================== -->
  <section class="eqs__section faq" id="faq">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">09</span><span class="eqs__rule-label">FAQ</span><span class="eqs__rule-line"></span></div>
      <h2 class="eqs__faq-title">Questions before you bring a team in</h2>

      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Is this only for teams already using Kodus?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>No. Kodus may be part of the solution, but the sprint starts with the workflow. We look at how quality works today across standards, review, CI, tests, ownership, metrics and AI usage.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Is this a code review audit?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>No. Review is one area we may inspect, but the sprint is broader than review comments. The goal is to understand and improve the engineering quality workflow around AI-assisted development.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">How many repos are included?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>The recommended scope is one engineering team, one business unit or 3 to 5 repositories.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">What happens after the sprint?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>You leave with the final report, implemented changes in the selected scope and a recommendation for the next rollout. If there is a strong fit, the sprint can lead into a broader Kodus rollout or a managed engineering quality program.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Do you build custom software during the sprint?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>No open-ended custom development. If a need repeats across customers, we classify it as product, playbook, configuration, integration, customer-specific customization or not worth doing.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">What does it cost?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>Initial pricing hypothesis: Brazil R$40k–R$80k for 4 weeks; US &amp; EU US$10k–US$25k for 4 weeks. Recommended starting anchors: R$50k (Brazil) and US$15k (US &amp; EU).</p></div>
      </div>
    </div>
  </section>

</main>

<script>
(function(){
  var root = document.querySelector('.eqs');
  if(!root) return;
  var sel = '.eqs__kicker,.eqs__hero-h1,.eqs__hero-sub,.eqs__cta-row,.eqs__proof,.eqs__rule,.eqs__head,.eqs__xform,.eqs__card,.eqs__manifest li,.eqs__model-item,.eqs__tag,.eqs__role,.eqs__week,.eqs__fit-col,.eqs__log li,.eqs__statement,.eqs__cta-block';
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var els = Array.prototype.slice.call(root.querySelectorAll(sel));
  var weeks = root.querySelector('.eqs__weeks');
  if(reduce || !('IntersectionObserver' in window)){
    els.forEach(function(el){ el.classList.add('is-in'); });
    if(weeks) weeks.classList.add('is-in');
    return;
  }
  els.forEach(function(el){
    var idx = 0, sib = el.previousElementSibling;
    while(sib){ if(sib.matches(sel)) idx++; sib = sib.previousElementSibling; }
    el._rvi = idx > 8 ? 8 : idx;
  });
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(!e.isIntersecting) return;
      var el = e.target;
      if(el._rvi){ el.style.transitionDelay = (el._rvi * 0.06) + 's'; }
      el.classList.add('is-in');
      io.unobserve(el);
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -7% 0px' });
  els.forEach(function(el){ io.observe(el); });
  if(weeks){
    var io2 = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('is-in'); io2.unobserve(e.target); } });
    }, { threshold: 0.2 });
    io2.observe(weeks);
  }
})();
</script>

<script>
(function(){
  var flow = document.getElementById('eqsFlow');
  if(!flow) return;
  var steps = flow.querySelectorAll('.eqs__flow-step');
  if(!steps.length) return;
  if(window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var i = 0, paused = false;
  function setActive(n){ for(var k=0;k<steps.length;k++){ steps[k].classList.toggle('is-active', k===n); } }
  setActive(0); i = 1;
  var timer = setInterval(function(){ if(paused) return; setActive(i); i = (i+1) % steps.length; }, 1500);
  flow.addEventListener('mouseenter', function(){ paused = true; for(var k=0;k<steps.length;k++){ steps[k].classList.remove('is-active'); } });
  flow.addEventListener('mouseleave', function(){ paused = false; });
})();
</script>

<script>
(function(){
  var fig = document.querySelector('.eqs__funnel');
  if(!fig) return;
  var svg = fig.querySelector('svg');
  var pipes = fig.querySelectorAll('.ef-pipe');
  var gate = fig.querySelector('.ef-gate');
  var cap = fig.querySelector('.ef-caption');
  var dots = fig.querySelectorAll('.ef-dots circle');
  var labels = fig.querySelectorAll('.ef-label');
  if(pipes.length < 2 || !gate || !dots.length) return;
  var CY = 120, H0 = 60, PIN = 16, DEF = 400;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var lx = []; for(var j=0;j<labels.length;j++){ lx.push(+labels[j].getAttribute('x')); }
  function halfAt(x, px){ var t = 1 - Math.abs(x-px)/175; if(t<0) t=0; t = t*t*(3-2*t); return H0 - (H0-PIN)*t; }
  function chrome(px){
    pipes[0].setAttribute('d', 'M0 60 C '+(px-120)+' 60, '+(px-80)+' 104, '+px+' 104 C '+(px+80)+' 104, '+(px+120)+' 60, 1000 60');
    pipes[1].setAttribute('d', 'M0 180 C '+(px-120)+' 180, '+(px-80)+' 136, '+px+' 136 C '+(px+80)+' 136, '+(px+120)+' 180, 1000 180');
    gate.setAttribute('x1', px); gate.setAttribute('x2', px);
    if(cap) cap.setAttribute('x', px);
    var best=0, bd=1e9;
    for(var j=0;j<lx.length;j++){ var d=Math.abs(lx[j]-px); if(d<bd){ bd=d; best=j; } }
    for(var j=0;j<labels.length;j++){ labels[j].classList.toggle('ef-label--hot', j===best); }
  }
  var st = [];
  for(var i=0;i<dots.length;i++){ st.push({ el:dots[i], x:+dots[i].getAttribute('cx'), o:(+dots[i].getAttribute('cy'))-CY, sp:0.55+Math.random()*0.75 }); }
  function place(d, px){ d.el.setAttribute('cx', d.x.toFixed(1)); d.el.setAttribute('cy', (CY + d.o*(halfAt(d.x, px)/H0)).toFixed(1)); }
  var target = DEF, px = DEF;
  function toX(clientX){ var r = svg.getBoundingClientRect(); var x = (clientX-r.left)/r.width*1000; return Math.max(150, Math.min(850, x)); }
  function paintAll(p){ chrome(p); for(var i=0;i<st.length;i++) place(st[i], p); }
  fig.addEventListener('pointermove', function(e){ target = toX(e.clientX); if(reduce){ px = target; paintAll(px); } });
  fig.addEventListener('pointerleave', function(){ target = DEF; if(reduce){ px = DEF; paintAll(px); } });
  paintAll(DEF);
  if(reduce) return;
  var raf = null, running = false;
  function frame(){
    px += (target - px) * 0.14;
    for(var i=0;i<st.length;i++){
      var d = st[i];
      var slow = (d.x > px-95 && d.x < px+12) ? 0.16 : 1;   // congest before / crawl through the gate
      d.x += d.sp * slow;
      if(d.x > 1016){ d.x = -16 - Math.random()*46; d.sp = 0.55 + Math.random()*0.75; }
      place(d, px);
    }
    chrome(px);
    raf = requestAnimationFrame(frame);
  }
  function start(){ if(running) return; running = true; frame(); }
  function stop(){ running = false; if(raf) cancelAnimationFrame(raf); raf = null; }
  if('IntersectionObserver' in window){
    new IntersectionObserver(function(es){ es.forEach(function(e){ e.isIntersecting ? start() : stop(); }); }, { threshold: 0 }).observe(fig);
  } else { start(); }
})();
</script>

<!-- Cal.com embed loader (self-contained; guarded so it's safe if a global loader also exists) -->
<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://cal.com"});
</script>

<?php get_footer('kodus'); ?>
