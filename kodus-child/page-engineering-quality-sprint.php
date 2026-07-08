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
.eqs__hero{ min-height: 100vh; display: flex; align-items: center; padding: 104px 0 64px; }
.eqs__hero-grid2{ display: grid; grid-template-columns: minmax(0, 1fr) 264px; gap: 52px; align-items: center; width: 100%; }
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
  line-height: 1.08; letter-spacing: -1px; color: var(--color-text); margin: 0 0 32px; overflow-wrap: anywhere; text-wrap: balance;
}
.eqs__hero-h1 .highlight{ color: var(--color-primary); }
.eqs__hero-sub{ font-size: 1.05rem; line-height: 1.72; color: var(--color-text-muted); margin: 0 0 34px; max-width: 58ch; }
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
.eqs__note--center{ max-width: none; text-align: center; border-left: none; border-top: 1px solid var(--color-card-lv3); background: transparent; border-radius: 0; padding: 22px 0 0; font-size: .92rem; color: var(--color-text-muted); }
.eqs__log--single{ grid-template-columns: 1fr; gap: 0; }
.eqs__log--single li{ border-bottom: none; }

/* ========== PROBLEM — self-check ========== */
.eqs__check-prompt{ font-family: var(--font-mono); font-size: .74rem; letter-spacing: 1px; text-transform: uppercase; color: var(--color-text-dim); margin: 0 0 4px; }
.eqs__check{ list-style: none; margin: 0; padding: 0; }
.eqs__check li{ border-top: 1px solid var(--color-card-lv2); }
.eqs__check label{ display: flex; gap: 12px; align-items: baseline; font-family: var(--font-mono); font-size: .9rem; line-height: 1.5; color: var(--color-text-muted); padding: 13px 6px; cursor: pointer; transition: background .15s ease, color .15s ease; }
.eqs__check label:hover{ background: var(--color-card-lv1); }
.eqs__check input{ position: absolute; opacity: 0; pointer-events: none; }
.eqs__check .cb{ flex: 0 0 auto; color: var(--color-text-dim); }
.eqs__check .cb::before{ content: '[ ]'; }
.eqs__check input:checked ~ .cb{ color: var(--color-danger); }
.eqs__check input:checked ~ .cb::before{ content: '[x]'; }
.eqs__check input:checked ~ .ct{ color: var(--color-text); }
.eqs__check input:focus-visible ~ .cb{ outline: 1px solid var(--color-primary); outline-offset: 3px; }
.eqs__check-result{ display: flex; gap: 12px; align-items: baseline; border-top: 1px solid var(--color-card-lv2); padding: 15px 6px 0; font-family: var(--font-mono); font-size: .9rem; margin: 0; }
.eqs__check-result b{ color: var(--color-text-dim); font-weight: 700; white-space: nowrap; }
.eqs__check-result span{ color: var(--color-text-muted); }
.eqs__check-result.lvl1 b{ color: var(--color-primary); }
.eqs__check-result.lvl2 b{ color: var(--color-danger); }

/* ---- leaky-checkpoint flow ---- */
.eqs__funnel{ margin: 4px 0 44px; }
.eqs__funnel svg{ width: 100%; height: auto; display: block; overflow: visible; }
.ef-pipe{ fill: none; stroke: var(--color-card-lv2); stroke-width: 1.5; }
.ef-tick{ stroke: var(--color-card-lv3); stroke-width: 1; stroke-dasharray: 2 4; }
.ef-label{ font-family: var(--font-mono); font-size: 15px; letter-spacing: 2px; text-transform: uppercase; fill: var(--color-text-dim); }
.ef-label--hot{ fill: var(--color-danger); }
.ef-gate{ stroke: var(--color-text-muted); stroke-width: 1.5; stroke-dasharray: 5 5; opacity: .5; animation: ef-pulse 2.6s ease-in-out infinite; }
.ef-gate-cap{ font-family: var(--font-mono); font-size: 11px; letter-spacing: 1px; fill: var(--color-text-dim); }
@keyframes ef-pulse{ 0%,100%{ opacity: .35; } 50%{ opacity: .7; } }
.ef-dot{ opacity: .9; }
.ef-dot.d1{ fill: var(--color-primary); }
.ef-dot.d2{ fill: var(--color-secondary); }
.ef-dot.d3{ fill: var(--color-tertiary); }
.ef-dot.d4{ fill: var(--color-danger); }
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

/* ========== DELIVERABLES — artifact previews ========== */
.eqs__artifacts{ display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; margin: 0 0 36px; }
.eqs__artifact{ background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-radius: var(--border-radius-sm); overflow: hidden; }
.eqs__artifact-bar{ display: flex; align-items: center; gap: 6px; padding: 9px 13px; background: var(--color-card-lv2); border-bottom: 1px solid var(--color-card-lv3); font-family: var(--font-mono); font-size: .68rem; color: var(--color-text-dim); }
.eqs__artifact-bar i{ width: 7px; height: 7px; border-radius: 50%; background: var(--color-card-lv3); }
.eqs__artifact-bar i:first-child{ margin-right: -2px; }
.eqs__artifact-bar span{ margin-left: 6px; }
.eqs__artifact-body{ padding: 16px 14px; display: grid; gap: 9px; align-content: start; min-height: 122px; }
.eqs__artifact-caption{ font-size: .84rem; line-height: 1.5; color: var(--color-text-muted); padding: 0 14px 16px; margin: 0; }
.eqs__artifact-caption em{ display: block; font-family: var(--font-mono); font-size: .62rem; font-style: normal; letter-spacing: 1px; text-transform: uppercase; color: var(--color-text-dim); margin-bottom: 5px; }
.eqs__artifact-caption em .anchor{ color: var(--color-primary); }
.eqs__artifact-caption b{ display: block; font-family: var(--font-mono); font-size: .9rem; font-weight: 600; color: var(--color-text); margin-bottom: 3px; }
.eqs__artifact .df{ display: flex; align-items: center; gap: 9px; font-family: var(--font-mono); font-size: .72rem; line-height: 1; }
.eqs__artifact .df::before{ content: '·'; color: var(--color-text-dim); width: 8px; }
.eqs__artifact .df--add::before{ content: '+'; color: var(--color-success); }
.eqs__artifact .df--del::before{ content: '-'; color: var(--color-danger); }
.eqs__artifact .ln{ height: 8px; border-radius: 3px; background: var(--color-card-lv3); }
.eqs__artifact .df--add .ln{ background: var(--color-success); opacity: .45; }
.eqs__artifact .df--del .ln{ background: var(--color-danger); opacity: .4; }
.eqs__artifact .mt{ display: grid; grid-template-columns: 56px 1fr; gap: 10px; align-items: center; }
.eqs__artifact .mt .ln{ height: 7px; }
.eqs__artifact .mt-track{ height: 9px; border-radius: 3px; background: var(--color-card-lv2); overflow: hidden; }
.eqs__artifact .mt-fill{ display: block; height: 100%; border-radius: 3px; background: var(--color-primary); opacity: .75; }
.eqs__artifact .mt-fill--sec{ background: var(--color-secondary); }
.eqs__artifact .mt-fill--danger{ background: var(--color-danger); opacity: .55; }
.eqs__artifact .doc-h{ height: 11px; border-radius: 3px; background: var(--color-card-lv3); width: 62%; }
.eqs__artifact .doc-b{ display: flex; align-items: center; gap: 8px; font-family: var(--font-mono); font-size: .72rem; line-height: 1; }
.eqs__artifact .doc-b::before{ content: '→'; color: var(--color-primary); }

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
.eqs__week-name{ font-family: var(--font-mono); font-size: 1.08rem; color: var(--color-primary); margin-bottom: 4px; }
.eqs__week-meta{ font-family: var(--font-mono); font-size: .7rem; letter-spacing: .5px; color: var(--color-secondary); margin: 0 0 12px; }
.eqs__week-card > p{ font-size: .88rem; line-height: 1.6; color: var(--color-text-muted); margin: 0 0 16px; }
.eqs__week-out{ font-family: var(--font-mono); font-size: .64rem; letter-spacing: 1px; text-transform: uppercase; color: var(--color-text-dim); margin-bottom: 9px; padding-top: 14px; border-top: 1px solid var(--color-card-lv2); }
.eqs__week-card ul{ list-style: none; margin: 0; padding: 0; display: grid; gap: 7px; }
.eqs__week-card li{ font-family: var(--font-mono); font-size: .8rem; color: var(--color-text-muted); padding-left: 15px; position: relative; }
.eqs__week-card li::before{ content: '→'; position: absolute; left: 0; color: var(--color-primary); }
.eqs__weeks-progress{ position: absolute; top: 17px; left: 12.5%; height: 2px; width: 75%; background: var(--color-primary); z-index: 1; box-shadow: 0 0 8px var(--color-primary); transform: scaleX(0); transform-origin: left; transition: transform .55s cubic-bezier(.16,1,.3,1); }
.eqs__week-node{ transition: background .3s ease, color .3s ease, box-shadow .3s ease; }
.eqs__week.is-active .eqs__week-node{ background: var(--color-primary); color: var(--color-bg); box-shadow: 0 0 0 7px var(--color-bg), 0 0 18px rgba(248,183,109,.55); }
.eqs__week.is-active .eqs__week-card{ border-color: var(--color-primary); transform: translateY(-4px); box-shadow: 0 16px 40px rgba(0,0,0,.42); }

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
.eqs__why{ display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 46px; align-items: start; }
.eqs__why .eqs__statement{ max-width: none; }
.eqs__why-panel{ display: grid; gap: 14px; align-content: start; }
.eqs__why-card{ border: 1px solid var(--color-card-lv3); border-left: 3px solid var(--sec); border-radius: var(--border-radius-sm); background: var(--color-card-lv1); padding: 20px 22px; }
.eqs__why-card h3{ font-family: var(--font-mono); font-size: .98rem; color: var(--color-text); margin: 0 0 6px; line-height: 1.3; }
.eqs__why-card h3 .k{ color: var(--sec); }
.eqs__why-card p{ font-size: .9rem; line-height: 1.55; color: var(--color-text-muted); margin: 0; }
@media (max-width: 860px){ .eqs__why{ grid-template-columns: 1fr; gap: 30px; } }

/* ========== CTA ========== */
.eqs__cta-block{ text-align: center; max-width: 800px; margin: 0 auto; padding: 56px 46px; background: var(--color-card-lv1); border: 1px solid var(--color-card-lv3); border-top: 2px solid var(--color-primary); border-radius: var(--border-radius); box-shadow: 0 28px 66px rgba(0,0,0,.55); position: relative; overflow: hidden; }
.eqs__cta-block::before{ content: ''; position: absolute; inset: -40% 30% auto; height: 200px; background: radial-gradient(closest-side, rgba(248,183,109,.16), transparent); pointer-events: none; }
.eqs__cta-block > *{ position: relative; }
.eqs__cta-block .eqs__h2{ margin: 0 auto 18px; max-width: 28ch; overflow-wrap: anywhere; }
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
.eqs__founder{ display: inline-flex; align-items: center; gap: 12px; margin: 6px auto 0; text-align: left; }
.eqs__founder-avatar{ width: 52px; height: 52px; border-radius: 50%; border: 1px solid var(--color-card-lv3); object-fit: cover; flex-shrink: 0; }
.eqs__founder-meta{ display: flex; flex-direction: column; }
.eqs__founder-name{ font-family: var(--font-mono); font-size: .9rem; color: var(--color-text); }
.eqs__founder-role{ font-family: var(--font-mono); font-size: .72rem; color: var(--color-text-dim); margin-top: 2px; }

/* ========== FAQ ========== */
.eqs__faq-title{ font-family: var(--font-mono); font-weight: 700; font-size: clamp(1.5rem, 3vw, 2.1rem); letter-spacing: -.5px; color: var(--color-text); margin: 0 0 36px; }

/* ========== RESPONSIVE ========== */
@media (max-width: 980px){
  .eqs__hero{ min-height: auto; display: block; padding: 96px 0 56px; }
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
  .eqs__weeks-progress{ display: none; }
  .eqs__week-node{ margin-left: 0; }
}
@media (max-width: 760px){
  .eqs__section{ padding: 68px 0; }
  .eqs__log{ grid-template-columns: 1fr; }
  .eqs__artifacts{ grid-template-columns: 1fr; }
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
.eqs--anim :is(.eqs__kicker,.eqs__hero-h1,.eqs__hero-sub,.eqs__cta-row,.eqs__proof,.eqs__rule,.eqs__head,.eqs__xform,.eqs__card,.eqs__manifest li,.eqs__model-item,.eqs__tag,.eqs__role,.eqs__week,.eqs__fit-col,.eqs__log li,.eqs__statement,.eqs__cta-block,.eqs__why-card){
  opacity: 0; transform: translateY(20px);
  transition: opacity .6s cubic-bezier(.16,1,.3,1), transform .6s cubic-bezier(.16,1,.3,1);
}
.eqs--anim .is-in{ opacity: 1 !important; transform: none !important; }
.eqs--anim .eqs__weeks::before{ transform: scaleX(0); transform-origin: left; transition: transform .9s cubic-bezier(.16,1,.3,1) .15s; }
.eqs--anim .eqs__weeks.is-in::before{ transform: scaleX(1); }
@media (prefers-reduced-motion: reduce){
  .eqs--anim :is(.eqs__kicker,.eqs__hero-h1,.eqs__hero-sub,.eqs__cta-row,.eqs__proof,.eqs__rule,.eqs__head,.eqs__xform,.eqs__card,.eqs__manifest li,.eqs__model-item,.eqs__tag,.eqs__role,.eqs__week,.eqs__fit-col,.eqs__log li,.eqs__statement,.eqs__cta-block,.eqs__why-card){ opacity: 1; transform: none; }
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
        <span class="eqs__kicker">4-Week Embedded Sprint</span>
        <h1 class="eqs__hero-h1">AI is shipping bugs straight to <span class="highlight">production</span>.</h1>
        <p class="eqs__hero-sub">A 4-week embedded sprint. We work in your repos, find why the bugs get through, and build the safety net that stops them. All measured.</p>
        <div class="eqs__cta-row">
          <button type="button" class="btn btn--primary" data-cal-link="gabrielmalinosqui/quality-sprint" data-cal-config='{"layout":"month_view"}'>Talk to a founder</button>
          <a href="#how" class="btn btn--outline-light">See how the sprint works</a>
        </div>
        <p class="eqs__proof">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 4 5v6c0 5 3.4 7.7 8 9 4.6-1.3 8-4 8-9V5z"/></svg>
          Founder-led &middot; one company per segment &middot; by the team behind Kodus open source
        </p>
      </div>
      <div class="eqs__xform" aria-hidden="true">
        <div class="eqs__xform-node eqs__xform-node--in">
          <span class="eqs__xform-lbl">You bring</span>
          <strong>AI bugs reaching production</strong>
          <div class="eqs__xform-dots eqs__xform-dots--scatter">
            <i style="--y:6px"></i><i class="d-red" style="--y:-4px"></i><i style="--y:9px"></i><i style="--y:-2px"></i><i class="d-red" style="--y:5px"></i><i style="--y:-6px"></i><i style="--y:2px"></i>
          </div>
        </div>
        <div class="eqs__xform-arrow">&#8595;</div>
        <div class="eqs__xform-node eqs__xform-node--sprint">
          <span class="eqs__xform-lbl">4-week sprint</span>
          <strong>Diagnose &rarr; Build the net &rarr; Ship &rarr; Prove</strong>
        </div>
        <div class="eqs__xform-arrow">&#8595;</div>
        <div class="eqs__xform-node eqs__xform-node--out">
          <span class="eqs__xform-lbl">You leave with</span>
          <strong>Fewer bugs in production</strong>
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
        <h2 class="eqs__h2 eqs__h2--wide">The bugs are getting past your checks.</h2>
      </div>

      <figure class="eqs__funnel" aria-hidden="true">
        <svg viewBox="0 0 1000 240" preserveAspectRatio="xMidYMid meet">
          <g class="ef-labels">
            <text class="ef-label" x="110" y="26" text-anchor="middle">Prompt</text>
            <line class="ef-tick" x1="110" y1="36" x2="110" y2="70"/>
            <text class="ef-label" x="370" y="26" text-anchor="middle">Generate</text>
            <line class="ef-tick" x1="370" y1="36" x2="370" y2="70"/>
            <text class="ef-label ef-label--hot" x="660" y="26" text-anchor="middle">Merge</text>
            <line class="ef-tick" x1="660" y1="36" x2="660" y2="66"/>
            <text class="ef-label" x="905" y="26" text-anchor="middle">Production</text>
            <line class="ef-tick" x1="905" y1="36" x2="905" y2="70"/>
          </g>
          <!-- straight channel -->
          <line class="ef-pipe" x1="0" y1="82" x2="1000" y2="82"/>
          <line class="ef-pipe" x1="0" y1="198" x2="1000" y2="198"/>
          <!-- the checkpoint that leaks -->
          <line class="ef-gate" x1="660" y1="72" x2="660" y2="208"/>
          <text class="ef-gate-cap" x="660" y="228" text-anchor="middle">checks</text>
          <!-- dots injected by JS -->
          <g class="ef-dots"></g>
        </svg>
      </figure>

      <div class="eqs__prob-split">
        <div class="eqs__prob-lead">
          <p class="eqs__lede">Code ships faster. Then it breaks in prod. 81% of engineering leaders report more production incidents from AI code, even after it passed every check.</p>
          <p class="eqs__note">The bug doesn't show up in review. It shows up in prod.</p>
        </div>
        <div>
          <p class="eqs__check-prompt">// is AI breaking prod? check what's true</p>
          <ul class="eqs__check" data-check>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">Bugs that used to get caught now reach production.</span></label></li>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">"It passed CI," and it still broke.</span></label></li>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">Incidents are up since AI usage grew.</span></label></li>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">You're not sure the tests cover the risky paths.</span></label></li>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">The same class of bug keeps coming back.</span></label></li>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">Rollbacks and hotfixes got more frequent.</span></label></li>
            <li><label><input type="checkbox"><span class="cb" aria-hidden="true"></span><span class="ct">You can't tell which AI changes are safe to ship.</span></label></li>
          </ul>
          <p class="eqs__check-result" data-check-result aria-live="polite"><b>0/7</b><span>&mdash;</span></p>
        </div>
      </div>
      <script>
      (function(){
        var box = document.querySelector('[data-check]');
        var res = document.querySelector('[data-check-result]');
        if(!box || !res) return;
        var cnt = res.querySelector('b'), msg = res.querySelector('span');
        box.addEventListener('change', function(){
          var n = box.querySelectorAll('input:checked').length;
          cnt.textContent = n + '/7';
          res.classList.remove('lvl1','lvl2');
          if(n === 0){ msg.textContent = '—'; }
          else if(n < 3){ res.classList.add('lvl1'); msg.textContent = 'A few cracks. Cheaper to seal now than after an incident.'; }
          else { res.classList.add('lvl2'); msg.textContent = 'Your safety net is not keeping up. That is exactly the sprint.'; }
        });
      })();
      </script>
    </div>
  </section>

  <!-- ===================== OFFER ===================== -->
  <section class="eqs__section eqs__section--orange">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">02</span><span class="eqs__rule-label">The offer</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__split">
        <div>
          <h2 class="eqs__h2 eqs__h2--wide">A 4-week embedded sprint to stop AI bugs reaching production.</h2>
          <p class="eqs__lede">We embed in the repos where AI writes most, find what breaks, and build the safety net that stops it, with your team. Shipped and measured.</p>
        </div>
        <div class="eqs__roles">
          <div class="eqs__roles-label">Who we work with</div>
          <div class="eqs__role">Engineering <span>leadership</span></div>
          <div class="eqs__role">QA / <span>SRE</span> owners</div>
          <div class="eqs__role">Repo <span>owners</span></div>
          <div class="eqs__role">Developers <span>in the loop</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHAT YOU GET ===================== -->
  <section class="eqs__section eqs__section--orange">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">03</span><span class="eqs__rule-label">What you get</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">Fewer bugs in production, shipped and measured.</h2>
        <p class="eqs__lede">One outcome: fewer AI bugs reaching prod. Whatever gets there ships in your repos, measured. Every engagement leaves the same three proofs.</p>
      </div>
      <div class="eqs__artifacts">
        <div class="eqs__artifact">
          <div class="eqs__artifact-bar" aria-hidden="true"><i></i><i></i><i></i><span>fix/safety-net &middot; merged</span></div>
          <div class="eqs__artifact-body" aria-hidden="true">
            <div class="df"><span class="ln" style="width:52%"></span></div>
            <div class="df df--add"><span class="ln" style="width:78%"></span></div>
            <div class="df df--add"><span class="ln" style="width:64%"></span></div>
            <div class="df df--del"><span class="ln" style="width:40%"></span></div>
            <div class="df df--add"><span class="ln" style="width:70%"></span></div>
            <div class="df"><span class="ln" style="width:34%"></span></div>
          </div>
          <p class="eqs__artifact-caption"><em>It ships as code</em><b>The gap is closed</b>Whatever the diagnosis finds, we build it with your team and merge it into your repos.</p>
        </div>
        <div class="eqs__artifact">
          <div class="eqs__artifact-bar" aria-hidden="true"><i></i><i></i><i></i><span>escaped-defects &middot; week 1 &rarr; week 4</span></div>
          <div class="eqs__artifact-body" aria-hidden="true">
            <div class="mt"><span class="ln" style="width:80%"></span><span class="mt-track"><span class="mt-fill" style="width:72%"></span></span></div>
            <div class="mt"><span class="ln" style="width:60%"></span><span class="mt-track"><span class="mt-fill mt-fill--sec" style="width:46%"></span></span></div>
            <div class="mt"><span class="ln" style="width:88%"></span><span class="mt-track"><span class="mt-fill mt-fill--danger" style="width:28%"></span></span></div>
            <div class="mt"><span class="ln" style="width:68%"></span><span class="mt-track"><span class="mt-fill" style="width:58%"></span></span></div>
          </div>
          <p class="eqs__artifact-caption"><em>It's measured</em><b>The number that moved</b>A baseline in week 1 and the delta in week 4: escaped bugs, change-failure, incident rate.</p>
        </div>
        <div class="eqs__artifact">
          <div class="eqs__artifact-bar" aria-hidden="true"><i></i><i></i><i></i><span>handoff &middot; exec readout &amp; next scope</span></div>
          <div class="eqs__artifact-body" aria-hidden="true">
            <div class="doc-h"></div>
            <div class="df"><span class="ln" style="width:86%"></span></div>
            <div class="df"><span class="ln" style="width:74%"></span></div>
            <div class="doc-b"><span class="ln" style="width:56%"></span></div>
            <div class="doc-b"><span class="ln" style="width:44%"></span></div>
          </div>
          <p class="eqs__artifact-caption"><em>It outlives us</em><b>Your team runs it</b>The safety net is theirs to keep catching bugs, with a leadership readout and the plan for the next team or repos.</p>
        </div>
      </div>
      <p class="eqs__note eqs__note--center">What we build is set in week 1. It's usually one or two of: tests on the risky paths &middot; e2e on critical flows &middot; CI gates that catch real defects &middot; review tuned to real bugs &middot; ownership of AI changes. One or two, done deep.</p>
    </div>
  </section>

  <!-- ===================== HOW IT WORKS ===================== -->
  <section class="eqs__section eqs__section--orange" id="how">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">04</span><span class="eqs__rule-label">How the sprint works</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">Exactly what the 4 weeks look like</h2>
      </div>
      <div class="eqs__weeks">
        <span class="eqs__weeks-progress" aria-hidden="true"></span>
        <div class="eqs__week">
          <div class="eqs__week-node">1</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Diagnose</div>
            <p class="eqs__week-meta">kickoff &middot; repo access &middot; incident review</p>
            <p>We read the selected repos (recent PRs, incidents, bugs, test signal, CI behavior) and interview the team on what keeps breaking.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Escaped-bug baseline</li><li>Top safety-net gaps</li><li>Agreed sprint focus</li></ul>
          </div>
        </div>
        <div class="eqs__week">
          <div class="eqs__week-node">2</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Design</div>
            <p class="eqs__week-meta">2 working sessions &middot; your owners in the room</p>
            <p>Together we design the safety net for the chosen gap: what to add, who owns it, how it gets measured.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Safety-net proposal</li><li>Measurement plan</li><li>Owner responsibilities</li><li>Rollout plan</li></ul>
          </div>
        </div>
        <div class="eqs__week">
          <div class="eqs__week-node">3</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Build</div>
            <p class="eqs__week-meta">hands-on &middot; shipped in your repos</p>
            <p>We build it with the team (tests, e2e, CI gates, review, ownership), whatever the diagnosis called for.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Safety net shipped</li><li>First signal readout</li><li>Team-owner feedback</li></ul>
          </div>
        </div>
        <div class="eqs__week">
          <div class="eqs__week-node">4</div>
          <div class="eqs__week-card">
            <div class="eqs__week-name">Prove</div>
            <p class="eqs__week-meta">exec readout &middot; rollout plan</p>
            <p>We measure the delta and present the leadership readout: what moved, what becomes product or process, where to roll out next.</p>
            <div class="eqs__week-out">Output</div>
            <ul><li>Before/after readout</li><li>Rollout recommendation</li><li>Next-step plan</li></ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHO IT'S FOR ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--green">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">05</span><span class="eqs__rule-label">Who it is for</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__head">
        <h2 class="eqs__h2 eqs__h2--wide">Built for teams where AI is starting to break production.</h2>
      </div>
      <div class="eqs__fit">
        <div class="eqs__fit-col eqs__fit-col--good">
          <h3>Good fit</h3>
          <ul>
            <li>30+ engineers, or a high-throughput product team.</li>
            <li>Multiple teams or repositories.</li>
            <li>Active use of Cursor, Copilot, Claude Code, Codex, Devin or internal agents.</li>
            <li>More incidents, escaped bugs or hotfixes since AI usage grew.</li>
            <li>An engineering leader who owns delivery quality.</li>
          </ul>
        </div>
        <div class="eqs__fit-col eqs__fit-col--poor">
          <h3>Poor fit</h3>
          <ul>
            <li>Very small teams.</li>
            <li>Teams with no engineering leadership sponsor.</li>
            <li>Companies looking for cheap implementation labor.</li>
            <li>Buyers who only want a tool installed.</li>
            <li>Teams wanting fully autonomous merge with no humans.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== WHY KODUS ===================== -->
  <section class="eqs__section eqs__section--purple">
    <div class="container">
      <div class="eqs__rule"><span class="eqs__rule-id">06</span><span class="eqs__rule-label">Why Kodus</span><span class="eqs__rule-line"></span></div>
      <div class="eqs__why">
        <div class="eqs__statement">
          <h2 class="eqs__h2 eqs__h2--wide">We work where AI bugs slip through.</h2>
          <p class="eqs__lede">We build Kodus, open source AI code review, so we see where bad AI code slips past teams every day. The sprint puts that on your safety net. No workshop, no product to buy.</p>
        </div>
        <div class="eqs__why-panel">
          <div class="eqs__why-card">
            <h3>No tool to buy</h3>
            <p>The outcome is fewer bugs in prod, not a license. If our review layer helps, good. It's one lever, never the pitch.</p>
          </div>
          <div class="eqs__why-card">
            <h3><span class="k">15+ years</span> in the room</h3>
            <p>Building software and advising engineering teams, combined across the founders.</p>
          </div>
          <div class="eqs__why-card">
            <h3>Benchmark-grade agents</h3>
            <p>The review agents we build rank near the top of public code-quality benchmarks.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== CTA ===================== -->
  <section class="eqs__section eqs__section--tint eqs__section--orange">
    <div class="container">
      <div class="eqs__cta-block">
        <span class="eqs__kicker" style="justify-content:center;">Get started</span>
        <h2 class="eqs__h2">Bring the repos where AI keeps breaking things.</h2>
        <p class="eqs__lede">One team or 3 to 5 repositories. We'll find why the bugs get through, build the safety net that stops them, and leave you the before-and-after.</p>
        <div class="eqs__founder">
          <img class="eqs__founder-avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gabriel.png" alt="Gabriel Malinosqui" width="52" height="52" loading="lazy">
          <span class="eqs__founder-meta">
            <span class="eqs__founder-name">Gabriel Malinosqui</span>
            <span class="eqs__founder-role">Co-founder, Kodus</span>
          </span>
        </div>
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
      <div class="eqs__rule"><span class="eqs__rule-id">07</span><span class="eqs__rule-label">FAQ</span><span class="eqs__rule-line"></span></div>
      <h2 class="eqs__faq-title">Questions before you bring a team in</h2>

      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Do you just install a tool?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>No. The sprint starts from your repos and your incidents. The fix might be tests, CI gates, e2e, review or ownership. Whatever week 1 shows is letting bugs through. A tool is at most one lever.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Is this a Kodus product in disguise?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>No. We build Kodus, but the sprint sells an outcome (fewer bugs in production), not a product. Sometimes our review layer is one of the levers; often it isn't the main one. Nothing here locks you into buying anything.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">How many repos are included?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>The recommended scope is one engineering team, one business unit or 3 to 5 repositories.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">What can you really move in 4 weeks?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>A real before/after on escaped defects, change-failure or incident rate in the selected scope, plus the safety net shipped and owned by your team. We agree the exact metric in week 1.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">What happens after the sprint?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>You keep the safety net and the measurement, running in your repos. If it's a fit, we scope the next team or repositories.</p></div>
      </div>
      <div class="faq__item">
        <button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">What does it cost?</span><span class="faq__toggle">+</span></button>
        <div class="faq__answer"><p>It's a fixed-price sprint, scoped to one team or up to 5 repositories. We share the number on the first call, once we know what you are dealing with.</p></div>
      </div>
    </div>
  </section>

</main>

<script>
(function(){
  var root = document.querySelector('.eqs');
  if(!root) return;
  var sel = '.eqs__kicker,.eqs__hero-h1,.eqs__hero-sub,.eqs__cta-row,.eqs__proof,.eqs__rule,.eqs__head,.eqs__xform,.eqs__card,.eqs__manifest li,.eqs__model-item,.eqs__tag,.eqs__role,.eqs__week,.eqs__fit-col,.eqs__log li,.eqs__statement,.eqs__cta-block,.eqs__why-card';
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
  var g = fig.querySelector('.ef-dots');
  var NS = 'http://www.w3.org/2000/svg';
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var GATE = 660, END = 952, GOOD = ['d1','d2','d3'];
  var dots = [];
  function make(bug){
    var c = document.createElementNS(NS,'circle');
    c.setAttribute('r', bug ? 7 : 6);
    c.setAttribute('class', 'ef-dot ' + (bug ? 'd4' : GOOD[(Math.random()*GOOD.length)|0]));
    var y = 96 + Math.random()*88;
    c.setAttribute('cx', -12); c.setAttribute('cy', y.toFixed(1));
    g.appendChild(c);
    return { el:c, x:-12, sp:0.9+Math.random()*0.9, bug:bug, state:'flow', fade:1 };
  }
  if(reduce){
    for(var i=0;i<12;i++){ var bug=Math.random()<0.3; var d=make(bug); d.x = bug ? (690+Math.random()*230) : (90+Math.random()*500); d.el.setAttribute('cx', d.x.toFixed(1)); }
    return;
  }
  var raf=null, running=false, last=0, acc=0;
  function step(t){
    if(!last) last=t; var dt=Math.min(50, t-last); last=t;
    acc += dt;
    if(acc > 360){ acc=0; if(dots.length < 30) dots.push(make(Math.random()<0.28)); }
    for(var i=dots.length-1;i>=0;i--){
      var d=dots[i];
      if(d.state==='flow'){
        d.x += d.sp * dt/16;
        if(!d.bug && d.x >= GATE){ d.state='caught'; d.x=GATE; }
        else if(d.x >= END){ d.state='land'; d.x=END; }
        d.el.setAttribute('cx', d.x.toFixed(1));
      } else {
        d.fade -= dt/(d.state==='caught' ? 620 : 1300);
        if(d.fade <= 0){ if(d.el.parentNode) g.removeChild(d.el); dots.splice(i,1); continue; }
        d.el.setAttribute('opacity', Math.max(0,d.fade).toFixed(2));
      }
    }
    raf = requestAnimationFrame(step);
  }
  function start(){ if(running) return; running=true; last=0; raf=requestAnimationFrame(step); }
  function stop(){ running=false; if(raf) cancelAnimationFrame(raf); raf=null; }
  if('IntersectionObserver' in window){
    new IntersectionObserver(function(es){ es.forEach(function(e){ e.isIntersecting ? start() : stop(); }); }, { threshold: 0 }).observe(fig);
  } else { start(); }
})();
</script>

<script>
(function(){
  var wrap = document.querySelector('.eqs__weeks');
  if(!wrap) return;
  var weeks = Array.prototype.slice.call(wrap.querySelectorAll('.eqs__week'));
  var prog = wrap.querySelector('.eqs__weeks-progress');
  if(!weeks.length) return;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var i = 0, timer = null;
  function setActive(n){
    i = n;
    weeks.forEach(function(w, idx){ w.classList.toggle('is-active', idx === n); });
    if(prog) prog.style.transform = 'scaleX(' + (n / (weeks.length - 1)) + ')';
  }
  function next(){ setActive((i + 1) % weeks.length); }
  function stop(){ if(timer){ clearInterval(timer); timer = null; } }
  function start(){ if(reduce) return; stop(); timer = setInterval(next, 2200); }
  weeks.forEach(function(w, idx){
    w.addEventListener('mouseenter', function(){ stop(); setActive(idx); });
    w.addEventListener('mouseleave', start);
  });
  setActive(0);
  if(!reduce && 'IntersectionObserver' in window){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){ if(e.isIntersecting){ start(); } else { stop(); } });
    }, { threshold: 0.3 });
    io.observe(wrap);
  } else if(!reduce){ start(); }
})();
</script>

<!-- Cal.com embed loader (self-contained; guarded so it's safe if a global loader also exists) -->
<script type="text/javascript">
(function (C, A, L) { let p = function (a, ar) { a.q.push(ar); }; let d = C.document; C.Cal = C.Cal || function () { let cal = C.Cal; let ar = arguments; if (!cal.loaded) { cal.ns = {}; cal.q = cal.q || []; d.head.appendChild(d.createElement("script")).src = A; cal.loaded = true; } if (ar[0] === L) { const api = function () { p(api, arguments); }; const namespace = ar[1]; api.q = api.q || []; if(typeof namespace === "string"){cal.ns[namespace] = cal.ns[namespace] || api;p(cal.ns[namespace], ar);p(cal, ["initNamespace", namespace]);} else p(cal, ar); return;} p(cal, ar); }; })(window, "https://app.cal.com/embed/embed.js", "init");
Cal("init", {origin:"https://cal.com"});
</script>

<?php get_footer('kodus'); ?>
