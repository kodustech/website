<?php
/*
 * Template Name: Kodus LP GitLab (Ads)
 * Template Post Type: page
 *
 * Google Ads landing page. Noindex and out of the sitemap (see functions.php).
 */
?>
<?php get_header('kodus-lp', ['actions' => <<<'HTML'
<a href="https://github.com/kodustech/kodus-ai" target="_blank" rel="noopener noreferrer" class="btn btn--github" id="navGithubStarsBtn">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
          <span id="ghStars">--</span>
        </a><a href="https://app.kodus.io/sign-up" class="btn btn--primary" id="lpGlNavStartFreeBtn">Start free</a>
HTML
]); ?>
<style>
/* kodus navbar */	
.navbar {
	width: 100% !important;
	overflow: visible;
}
	
.nav-link .elementor-button-text:hover{
    text-shadow: 0px 4px 20px rgba(255, 255, 255, 0.4);
}

.hamburger-menu.active {
    filter: brightness(1.2);
}

@media (max-width: 1024px) {
    .menu-items {
        position: fixed;
        left: -250px;
        max-width: max-content;
        overflow: hidden;
        z-index: 999;
        background: var(--e-global-color-f6c172a);
        transition: all 300ms ease-in-out;
    }
    
    .menu-items.active {
        display: flex;
        left: 0px;
        max-width: max-content !important;
    }
    
    .menu-items .elementor-widget-wrap {
        display: flex;
        overflow: auto;
        width: 250px;
				height: 100vh;
        justify-content: flex-start !important;
        align-items: flex-start !important;
        align-content: flex-start !important;
        padding: 10px 25px 30px 25px !important;
				gap: 20px;
    }
    
    .menu-items .elementor-widget-wrap .elementor-widget:not(.kbutton) {
        width: 100%;
    }
    
    .menu-items .elementor-widget-theme-site-logo {
        overflow: hidden;
    }
    
    .menu-items .elementor-widget-theme-site-logo .elementor-widget-container {
        margin-left: -15px;
    }
    
    .menu-items .nav-link a {
        padding: 15px 5px;
        width: 100% !important;
        text-align: start;
    }
}
/* kodus navbar - End */	
</style>
<style>
  /* Hallmark · component: hero-cta · genre: playful-retro (inherited) · theme: kodus-retro (project system)
   * states: default · hover · focus-visible · active (disabled/loading/error/success n/a: nav links)
   * contrast: pass */
  .hero__ctas {
    max-width: none !important;
    background: transparent !important;
    border: none !important;
    border-radius: 0 !important;
    overflow: visible !important;
    gap: 18px;
    margin-bottom: 26px;
  }

  .hero__cta-row {
    display: flex;
    align-items: stretch;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
  }

  .hero__cta-row .btn {
    min-width: 190px;
    justify-content: center;
    padding: 13px 30px;
  }

  .hero__ctas .btn:focus-visible {
    outline: 2px solid var(--color-primary);
    outline-offset: 3px;
  }

  .hero__ctas .hero__disclaimer {
    margin: 0;
  }

  .hero__providers {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
  }

  .hero__providers .hero__git-providers {
    margin-bottom: 0;
    gap: 16px;
  }

  .hero__providers-label {
    font-family: var(--font-mono);
    font-size: 0.68rem;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: var(--color-text-dim);
  }

  .hero__clients {
    margin-top: 130px !important;
  }

  @media (max-width: 768px) {
    .hero__clients {
      margin-top: 90px !important;
    }
  }

  .cartridge__desc {
    display: block;
    margin-top: 12px;
    padding: 0 6px;
    font-size: 0.78rem;
    line-height: 1.55;
    color: var(--color-text-muted);
    text-align: center;
  }

  @media (max-width: 480px) {
    .hero__cta-row {
      flex-direction: column;
      align-items: stretch;
    }
    .hero__cta-row .btn {
      width: 100%;
      min-width: 0;
    }
  }
</style>
<style>
.anim-test{padding:60px 0}
      .anim-test__flag{text-align:center;font-family:var(--font-mono);font-size:0.72rem;color:var(--color-text-dim);letter-spacing:0.5px;margin-bottom:24px}
      .anim-test__cell{max-width:440px;margin:0 auto;padding:48px 40px}
      .anim-test__art{height:300px;display:flex;align-items:center;justify-content:center;margin-bottom:36px}
      .anim-test__title{font-family:var(--font-mono);font-size:1.5rem;color:var(--color-text);margin-bottom:10px;line-height:1.2}
      .anim-test__desc{font-size:0.95rem;color:var(--color-text-muted);line-height:1.65;max-width:360px}
      .sgraph{width:100%;max-width:284px;height:auto;overflow:visible;font-family:var(--font-mono)}
      /* context: the call graph kodus-graph builds around a changed function */
      .sg-col{font-size:7px;letter-spacing:.08em;text-transform:uppercase;fill:var(--color-text-muted);text-anchor:middle;opacity:.8}
      .sgc text{font-size:7px;text-anchor:middle;fill:var(--color-text-muted)}
      .sgc--n rect,.sgc--t rect{fill:var(--color-card-lv1);stroke:var(--color-card-lv3)}
      .sgc--n,.sgc--t{opacity:.35;animation:sg-node 6s infinite}
      .sgc--core rect{fill:var(--color-primary-dark);stroke:var(--color-primary)}
      .sgc--core text{fill:var(--color-primary);font-size:8px;font-weight:700}
      .sgc--core{animation:sg-core 6s infinite;transform-box:fill-box;transform-origin:center}
      .sgc--t rect{stroke-dasharray:3 3}
      .sg-e{stroke:var(--color-primary);stroke-width:1.3;stroke-dasharray:1;stroke-dashoffset:1;animation:sg-draw 6s infinite}
      .sg-e--test{stroke:var(--color-secondary);stroke-dasharray:1}
      .sg-e1{animation-name:sg-draw1}.sg-e2{animation-name:sg-draw2}.sg-e3{animation-name:sg-draw3}.sg-e4{animation-name:sg-draw4}.sg-e5{animation-name:sg-draw5}
      .sgc-1,.sgc-2{animation-name:sg-node12}.sgc-3,.sgc-4{animation-name:sg-node34}.sgc-5{animation-name:sg-node5}
      .sg-risk{font-size:7.5px;fill:var(--color-primary);opacity:0;animation:sg-risk 6s infinite}
      .sg-risk--r{text-anchor:end;fill:var(--color-text)}
      .sg-risk__k{fill:var(--color-text-muted)}
      @keyframes sg-core{0%{opacity:0;transform:scale(.8)}6%{opacity:1;transform:scale(1.08)}10%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0}}
      @keyframes sg-draw1{0%,10%{stroke-dashoffset:1;opacity:1}20%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw2{0%,14%{stroke-dashoffset:1;opacity:1}24%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw3{0%,26%{stroke-dashoffset:1;opacity:1}36%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw4{0%,30%{stroke-dashoffset:1;opacity:1}40%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw5{0%,44%{stroke-dashoffset:1;opacity:1}54%,92%{stroke-dashoffset:0;opacity:.8}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-node12{0%,18%{opacity:.35}24%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-node34{0%,34%{opacity:.35}40%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-node5{0%,52%{opacity:.35}58%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-risk{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.sg-e{animation:none;stroke-dashoffset:0;opacity:.7}.sgc--n,.sgc--t,.sgc--core,.sg-risk{animation:none;opacity:1}}
      /* shared shell for the text-card motifs */
      .bval,.tdebt,.cock,.kchat{width:100%;max-width:286px;font-family:var(--font-mono)}
      .bval__card,.tdebt__card,.cock__card,.kchat__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px}
      /* business rules: the "Business Rules Validation" comment Kody posts on the PR */
      .bval__h{font-size:0.7rem;font-weight:700;color:var(--color-text)}
      .bval__meta{display:flex;align-items:flex-end;justify-content:space-between;margin-top:9px;font-size:0.64rem;color:var(--color-text)}
      .bval__meta em{display:block;font-style:normal;font-size:0.56rem;color:var(--color-text-muted);margin-bottom:2px}
      .bval__src{font-size:0.54rem;color:var(--color-secondary);border:1px solid var(--color-secondary-dark);border-radius:3px;padding:1px 5px}
      .bval__acs{list-style:none;margin:11px 0 0;padding:10px 0 0;border-top:1px solid var(--color-card-lv3);display:grid;gap:7px}
      .bval__ac{display:flex;align-items:center;gap:7px;font-size:0.6rem;color:var(--color-text-muted)}
      .bval__ac span{flex:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
      .bval__ac b{font-weight:400;color:var(--color-text-muted);opacity:.7}
      .bval__ac i{flex-shrink:0;width:13px;height:13px;border-radius:3px;border:1px solid var(--color-card-lv3);display:grid;place-items:center;color:var(--color-success)}
      .bval__ac i svg{width:9px;height:9px;opacity:0;animation:6s infinite}
      .bval__ac--1 i svg{animation-name:bval-c1}.bval__ac--2 i svg{animation-name:bval-c2}
      .bval__fix{display:flex;align-items:center;gap:8px;margin-top:9px;padding:6px 8px;border-radius:3px;background:rgba(250,88,103,0.08);box-shadow:inset 0 0 0 1px rgba(250,88,103,0.35);font-size:0.62rem;color:var(--color-text);opacity:0;animation:bval-fix 6s infinite}
      .bval__lvl{font-size:0.54rem;font-weight:700;color:var(--color-danger)}
      .bval__status{margin-top:10px;font-size:0.6rem;color:var(--color-text-muted);opacity:0;animation:bval-st 6s infinite}
      .bval__status b{color:var(--color-danger)}
      @keyframes bval-c1{0%,16%{opacity:0;transform:scale(.4)}22%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-c2{0%,30%{opacity:0;transform:scale(.4)}36%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-fix{0%,46%{opacity:0;transform:translateY(4px)}54%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-st{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}
      /* tech_debt: suggestions left unimplemented become rows on the Issues page when the PR closes */
      .tdebt__head{display:flex;align-items:center;justify-content:space-between;font-size:0.7rem;font-weight:700;color:var(--color-text)}
      .tdebt__auto{display:flex;align-items:center;gap:6px;font-size:0.56rem;font-weight:400;color:var(--color-text-muted)}
      .tdebt__switch{position:relative;width:22px;height:12px;border-radius:6px;background:var(--color-primary)}
      .tdebt__switch::after{content:'';position:absolute;top:2px;left:12px;width:8px;height:8px;border-radius:50%;background:#fff}
      .tdebt__event{margin-top:10px;padding:6px 8px;border-radius:3px;background:var(--color-card-lv2);font-size:0.56rem;color:var(--color-text-muted);opacity:0;animation:tdebt-ev 6s infinite}
      .tdebt__list{list-style:none;margin:10px 0 0;padding:0;display:grid;grid-template-columns:minmax(0,1fr);gap:6px}
      .tdebt__row{min-width:0;display:flex;align-items:flex-start;gap:6px;opacity:0;animation:6s infinite}
      .tdebt__row--1{animation-name:tdebt-r1}.tdebt__row--2{animation-name:tdebt-r2}.tdebt__row--3{animation-name:tdebt-r3}
      .tdebt__st,.tdebt__sev{flex-shrink:0;font-size:0.5rem;font-weight:700;border-radius:3px;padding:2px 4px;margin-top:1px}
      .tdebt__st{color:var(--color-text);background:var(--color-card-lv3)}
      .tdebt__sev--crit{color:var(--color-danger);box-shadow:inset 0 0 0 1px var(--color-danger)}
      .tdebt__sev--high{color:var(--color-warning);box-shadow:inset 0 0 0 1px var(--color-warning)}
      .tdebt__sev--med{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}
      .tdebt__t{min-width:0;font-size:0.6rem;color:var(--color-text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
      .tdebt__t small{display:block;font-size:0.52rem;color:var(--color-text-muted);margin-top:1px}
      @keyframes tdebt-ev{0%,4%{opacity:0}10%,92%{opacity:1}98%,100%{opacity:0}}
      @keyframes tdebt-r1{0%,18%{opacity:0;transform:translateX(-6px)}25%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes tdebt-r2{0%,30%{opacity:0;transform:translateX(-6px)}37%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes tdebt-r3{0%,42%{opacity:0;transform:translateX(-6px)}49%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      /* cockpit: the Productivity tab, with the app's own bands (Elite / High / Fair / Need focus) */
      .cock__head{display:flex;justify-content:space-between;font-size:0.68rem;font-weight:700;color:var(--color-text);padding-bottom:10px}
      .cock__range{font-weight:400;font-size:0.56rem;color:var(--color-text-muted)}
      .cock__grid{display:grid;grid-template-columns:1fr 1fr;gap:6px}
      .cock__tile{background:var(--color-card-lv2);border-radius:3px;padding:8px 9px;display:flex;flex-direction:column;gap:4px;opacity:0;animation:6s infinite}
      .cock__tile--1{animation-name:cock-t1}.cock__tile--2{animation-name:cock-t2}.cock__tile--3{animation-name:cock-t3}.cock__tile--4{animation-name:cock-t4}
      .cock__k{font-size:0.5rem;color:var(--color-text-muted);white-space:nowrap}
      .cock__v{font-size:0.95rem;font-weight:700;color:var(--color-text)}
      .cock__v small{font-size:0.52rem;font-weight:400;color:var(--color-text-muted);margin-left:2px}
      .cock__band{align-self:flex-start;font-size:0.5rem;font-weight:700;border-radius:3px;padding:1px 5px}
      .cock__band--elite{color:var(--color-success);box-shadow:inset 0 0 0 1px var(--color-success)}
      .cock__band--high{color:var(--color-info);box-shadow:inset 0 0 0 1px var(--color-info)}
      .cock__band--fair{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}
      @keyframes cock-t1{0%,6%{opacity:0;transform:translateY(5px)}14%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t2{0%,16%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t3{0%,26%{opacity:0;transform:translateY(5px)}34%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t4{0%,36%{opacity:0;transform:translateY(5px)}44%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.kchat__msg,.kchat__save,.bval__fix,.bval__status,.bval__ac i svg,.tdebt__event,.tdebt__row,.cock__tile{animation:none;opacity:1;transform:none}}
      /* @kody in the PR: a short thread that ends with Kody offering to save a memory */
      .kchat__card{display:grid;gap:9px}
      .kchat__msg{display:grid;grid-template-columns:34px 1fr;gap:6px;align-items:start;font-size:0.62rem;color:var(--color-text);opacity:0;animation:6s infinite}
      .kchat__msg p{margin:0;line-height:1.5;background:var(--color-card-lv2);border-radius:3px;padding:5px 8px}
      .kchat__msg--kody p{background:rgba(201,187,242,0.08);box-shadow:inset 0 0 0 1px var(--color-secondary-dark)}
      .kchat__msg b{color:var(--color-secondary);font-weight:700}
      .kchat__msg code{font-family:inherit;color:var(--color-primary)}
      .kchat__who{font-size:0.52rem;color:var(--color-text-muted);padding-top:5px}
      .kchat__msg--kody .kchat__who{color:var(--color-secondary)}
      .kchat__save{grid-column:2;justify-self:start;margin-top:5px;font-size:0.54rem;font-weight:700;color:var(--color-bg);background:var(--color-secondary);border-radius:3px;padding:3px 7px;opacity:0;animation:kchat-save 6s infinite}
      .kchat__msg--1{animation-name:kchat-m1}.kchat__msg--2{animation-name:kchat-m2}.kchat__msg--3{animation-name:kchat-m3}.kchat__msg--4{animation-name:kchat-m4}
      @keyframes kchat-m1{0%,4%{opacity:0;transform:translateY(5px)}10%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m2{0%,18%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m3{0%,36%{opacity:0;transform:translateY(5px)}42%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m4{0%,52%{opacity:0;transform:translateY(5px)}58%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-save{0%,66%{opacity:0;transform:scale(.8)}72%{opacity:1;transform:scale(1.08)}76%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      /* context: a caller that lives in another, linked repository */
      .sgc--x rect{stroke:var(--color-info);stroke-dasharray:3 2}
      .sgc--x text{fill:var(--color-info)}
      .sgc .sgc__repo{font-size:6px;text-anchor:start;fill:var(--color-info);opacity:.85}
      /* cartridge 4: pushes keep getting reviewed, no hourly cap */
      .cartridge__screen-body--nolimit{position:relative;overflow:hidden;background:#101019;height:110px;display:flex;align-items:stretch;gap:8px;padding:0 10px;font-family:var(--font-mono)}
      .nolimit__log{flex:1;min-width:0;overflow:hidden;-webkit-mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent);mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent)}
      .nolimit__track{display:flex;flex-direction:column;gap:6px;padding-top:6px;animation:nolimit-scroll 7s linear infinite}
      .nolimit__line{display:flex;gap:6px;font-size:8.5px;white-space:nowrap;color:var(--color-text-muted)}
      .nolimit__line i{font-style:normal;color:var(--color-text);min-width:52px}
      .nolimit__line em{font-style:normal;opacity:.6}
      .nolimit__line b{font-weight:400;color:var(--color-success);margin-left:auto}
      .nolimit__rate{flex-shrink:0;display:flex;flex-direction:column;align-items:center;justify-content:center;padding-left:8px;border-left:1px solid var(--color-card-lv3)}
      .nolimit__rate b{font-size:1.6rem;line-height:1;color:var(--color-primary)}
      .nolimit__rate span{font-size:7px;color:var(--color-text-muted);margin-top:4px}
      @keyframes nolimit-scroll{to{transform:translateY(-50%)}}
      @media(prefers-reduced-motion:reduce){.nolimit__track{animation:none}}
      /* cartridge 3: model logos drifting above the accountant Kody */
      .cartridge__models{position:absolute;top:8px;left:0;width:100%;height:36px;overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent);mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent)}
      .cartridge__models .track-icon{width:26px !important;height:26px !important;opacity:.7}
      .cartridge__models .model-track{gap:22px}
      .cartridge__screen-body--tax .kody-taxa{width:92px !important}
      /* Hero background: quiet corner traces */
      .hero{position:relative}
      .hero-circuit{position:absolute;left:50%;top:64px;transform:translateX(-50%);width:min(100%,1600px);height:auto;pointer-events:none;z-index:0;display:none}
      @media(min-width:1200px){.hero-circuit{display:block}}
      .hc-trace{fill:none;stroke:var(--color-card-lv3);stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0 9}
      .hc-sq{fill:none;stroke:var(--color-card-lv3);stroke-width:2}
      .hc-dot{fill:var(--color-primary);opacity:.85;animation:hc-blink 4s ease-in-out infinite}
      .hc-dot--1{animation-delay:-1s}.hc-dot--2{animation-delay:-2s}.hc-dot--3{animation-delay:-3s}
      @keyframes hc-blink{0%,100%{opacity:.35}50%{opacity:.9}}
      .hc-bubble rect:first-child{fill:none;stroke:var(--color-card-lv3);stroke-width:2}
      .hc-bubble path{fill:none;stroke:var(--color-card-lv3);stroke-width:2;stroke-linejoin:round}
      .hc-bubble-dot{fill:var(--color-primary);opacity:.7;animation:hc-typing 1.6s steps(1) infinite}
      .hc-bubble-dot:nth-of-type(3){animation-delay:.2s}.hc-bubble-dot:nth-of-type(4){animation-delay:.4s}
      @keyframes hc-typing{0%,60%{opacity:.25}30%{opacity:.8}}
      @media(prefers-reduced-motion:reduce){.hc-dot,.hc-bubble-dot{animation:none}}
      /* set_rules: a Kody Rule card (same fields as the app) being written */
      .srules{width:100%;max-width:286px;font-family:var(--font-mono)}
      .srules__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px 15px}
      .srules__head{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;min-height:32px}
      .srules__title{font-size:0.74rem;font-weight:700;color:var(--color-text);line-height:1.35}
      .srules__sev{flex-shrink:0;font-size:0.56rem;font-weight:700;letter-spacing:0.08em;color:var(--color-warning);border:1px solid var(--color-warning);border-radius:3px;padding:2px 5px;opacity:0;transform:scale(0.6);animation:srules-pop 6s infinite}
      .srules__meta{display:flex;gap:22px;margin-top:12px;font-size:0.66rem;color:var(--color-text);opacity:0;animation:srules-meta 6s infinite}
      .srules__meta em,.srules__ins em{display:block;font-style:normal;font-size:0.58rem;color:var(--color-text-muted);margin-bottom:3px}
      .srules__ins{margin-top:12px;padding-top:11px;border-top:1px solid var(--color-card-lv3);font-size:0.66rem;color:var(--color-text-muted);line-height:1.6}
      .srules__type{display:block;overflow:hidden;white-space:nowrap;width:0}
      .srules__t1{animation:srules-t1 6s infinite}
      .srules__t2{animation:srules-t2 6s infinite}
      .srules__l1{animation:srules-l1 6s infinite}
      .srules__l2{animation:srules-l2 6s infinite}
      .srules__l2::after{content:'';display:inline-block;width:6px;height:0.9em;margin-left:2px;vertical-align:-1px;background:var(--color-secondary);animation:srules-caret 0.8s step-end infinite}
      @keyframes srules-t1{0%{width:0;animation-timing-function:steps(20,end)}15%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}
      @keyframes srules-t2{0%,15%{width:0;animation-timing-function:steps(13,end)}25%{width:13ch}92%{width:13ch;opacity:1}98%,100%{width:13ch;opacity:0}}
      @keyframes srules-pop{0%,28%{opacity:0;transform:scale(0.6)}32%{opacity:1;transform:scale(1.15)}35%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0;transform:scale(1)}}
      @keyframes srules-meta{0%,36%{opacity:0}42%,92%{opacity:1}98%,100%{opacity:0}}
      @keyframes srules-l1{0%,44%{width:0;animation-timing-function:steps(33,end)}62%{width:33ch}92%{width:33ch;opacity:1}98%,100%{width:33ch;opacity:0}}
      @keyframes srules-l2{0%,63%{width:0;animation-timing-function:steps(19,end)}74%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}
      @keyframes srules-caret{50%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.srules__type{width:auto!important;animation:none!important}.srules__sev,.srules__meta{opacity:1;transform:none;animation:none}.srules__l2::after{display:none}}

      .feat-grid{padding:var(--section-padding) 0;position:relative;z-index:1}
      .feat-grid__grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));max-width:1180px;margin:0 auto;border-top:1px solid var(--color-card-lv2);border-left:1px solid var(--color-card-lv2)}
      .feat-cell{border-right:1px solid var(--color-card-lv2);border-bottom:1px solid var(--color-card-lv2);padding:38px 34px 34px;display:flex;flex-direction:column}
      .feat-cell__art{height:240px;display:flex;align-items:center;justify-content:center;margin-bottom:28px}
      .feat-cell__art > *{max-width:100%}
      .feat-cell__title{font-family:var(--font-mono);font-size:1.3rem;color:var(--color-text);margin-bottom:14px;line-height:1.3}
      .feat-cell__desc{font-size:0.85rem;color:var(--color-text-muted);line-height:1.7}
      @media(max-width:980px){.feat-grid__grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
      @media(max-width:640px){.feat-grid__grid{grid-template-columns:minmax(0,1fr)}.feat-cell{padding:32px 20px 30px}}
      </style>
<style>
      .home-security{padding:60px 0}
      .home-security__inner{position:relative;display:grid;grid-template-columns:0.85fr 1.15fr;gap:40px;align-items:center;background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-left:3px solid var(--color-success);border-radius:var(--border-radius);padding:40px 44px;overflow:hidden}
      .home-security__art{position:relative;min-height:260px;display:flex;justify-content:center;align-items:flex-end}
      .home-security__castle{width:240px;height:auto;image-rendering:pixelated;position:relative;z-index:1;filter:drop-shadow(0 10px 20px rgba(0,0,0,0.6))}
      .home-security__guard{width:110px;height:auto;image-rendering:pixelated;position:absolute;left:50%;bottom:-6px;transform:translateX(-50%);z-index:2;filter:drop-shadow(0 5px 15px rgba(0,0,0,0.8))}
      .home-security__eyebrow{display:block;font-family:var(--font-mono);font-size:0.78rem;color:var(--color-success);letter-spacing:0.5px;margin-bottom:12px}
      .home-security__title{font-family:var(--font-mono);font-size:1.9rem;color:var(--color-text);margin-bottom:14px;line-height:1.2}
      .home-security__desc{font-size:0.95rem;color:var(--color-text-muted);line-height:1.7;max-width:560px}
      .home-security__chips{display:flex;flex-wrap:wrap;gap:10px;margin-top:22px}
      .home-security__chips li{display:flex;align-items:center;gap:7px;font-family:var(--font-mono);font-size:0.75rem;color:var(--color-text);background:var(--color-card-lv2);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);padding:7px 13px}
      .home-security__chips li::before{content:"\2713";color:var(--color-success);font-weight:700}
      @media(max-width:880px){.home-security__inner{grid-template-columns:1fr;gap:24px;padding:32px 24px}.home-security__art{min-height:220px;order:2}.home-security__title{font-size:1.6rem}}
      </style>
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
<style>.gl-chips{display:flex;gap:10px;flex-wrap:wrap;justify-content:center;margin-top:0}.gl-chip{display:inline-flex;align-items:center;gap:8px;border:1px solid var(--color-card-lv3);background:var(--color-card-lv1);padding:6px 12px;border-radius:6px;font-family:var(--font-mono);font-size:13px;color:var(--color-text-muted)}.gl-chip svg{width:16px;height:16px;color:#FC6D26}.hero__title .highlight{white-space:nowrap}@media (max-width:480px){html body .hero__providers{flex-wrap:nowrap;gap:8px}html body .hero__providers .hero__provider svg{width:20px;height:20px}html body .hero__providers-label{font-size:.6rem;white-space:nowrap}}html body .lp-shp__section{padding:110px 0}html body .lp-shp__section .lp-shp__title{font-size:clamp(1.5rem,4vw,2.5rem);line-height:1.3;text-align:center;max-width:820px;margin-left:auto;margin-right:auto}html body .lp-shp__section .lp-shp__lede{text-align:center;max-width:62ch;margin-left:auto;margin-right:auto}@media (max-width:768px){html body .lp-shp__section{padding:72px 0}}</style>
<style>@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}}@media (max-width:480px){.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}.pricing__trial-note{font-size:.62rem;letter-spacing:.3px;margin-bottom:16px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}.pricing__trial-note{font-size:.64rem;letter-spacing:.35px}.pricing__feature{font-size:.82rem;line-height:1.5;overflow-wrap:anywhere}}@media (max-width:480px){.pricing__card-body{padding:24px 16px}.pricing__plan-kody--team{width:146px}.pricing__toggle{flex-wrap:wrap;gap:12px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}}.pricing{padding:var(--section-padding) 0;min-height:100vh}.pricing__subtitle{text-align:center;color:var(--color-text-muted);font-size:1rem;line-height:1.65;max-width:780px;margin-left:auto;margin-right:auto;margin-top:-40px;margin-bottom:48px}.pricing__toggle{display:flex;align-items:center;justify-content:center;gap:16px;margin-bottom:56px}.pricing__toggle-label{font-family:var(--font-mono);font-size:.85rem;color:var(--color-text-dim)}.pricing__toggle-label--active{color:var(--color-text)}.pricing__switch{width:52px;height:28px;border-radius:14px;background:var(--color-card-lv2);border:2px solid var(--color-card-lv3);position:relative;padding:0}.pricing__switch-knob{position:absolute;top:3px;left:3px;width:18px;height:18px;border-radius:50%;background:var(--color-text-muted)}.pricing__save-badge{font-family:var(--font-mono);font-size:.65rem;font-weight:700;color:var(--color-bg);background:var(--color-success);padding:3px 8px;border-radius:4px;letter-spacing:.5px;text-transform:uppercase}.pricing__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;align-items:stretch}.pricing__card{display:flex;flex-direction:column;height:100%;border:2px solid #3a3a4f;border-radius:10px 10px 6px 6px;background:linear-gradient(180deg,#3a3a4f 0,#2a2a3c 52%,#223 100%);overflow:hidden;position:relative;box-shadow:inset 0 1px 0 rgba(255,255,255,.06),0 6px 18px rgba(0,0,0,.42)}.pricing__card::before{content:"";position:absolute;top:0;left:50%;width:42%;height:7px;transform:translateX(-50%);background:#2a2a3c;border:1px solid #3a3a4f;border-top:none;border-radius:0 0 4px 4px;z-index:2}.pricing__card::after{content:none}.pricing__card--recommended{border-color:#c89558;box-shadow:inset 0 1px 0 rgba(255,255,255,.08),0 0 0 1px rgba(248,183,109,.12),0 7px 18px rgba(0,0,0,.44)}.pricing__recommended-tag{display:flex;align-items:center;justify-content:center;gap:8px;padding:8px 14px;background:linear-gradient(180deg,#4a3728 0,#35271d 100%);border-bottom:1px solid #7a5a3f;font-family:var(--font-mono);font-size:.66rem;font-weight:700;color:var(--color-primary);letter-spacing:1.6px;text-transform:uppercase;text-shadow:0 0 5px rgba(248,183,109,.25)}.pricing__recommended-led{width:8px;height:8px;border-radius:50%;background:var(--color-primary);box-shadow:0 0 6px rgba(248,183,109,.8);animation:2s ease-in-out infinite pricing-led-pulse}@keyframes pricing-led-pulse{0%,100%{opacity:1;box-shadow:0 0 6px var(--color-primary)}50%{opacity:.5;box-shadow:0 0 2px var(--color-primary)}}.pricing__card-bar{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:6px 10px;margin:12px 10px 0;background:var(--color-card-lv1);border:1px solid var(--color-card-lv2);border-radius:4px 4px 0 0;border-bottom:none}.pricing__card-dots{display:none}.pricing__card-dot{display:none}.pricing__card-dot:first-child{background:var(--color-danger)}.pricing__card-dot:nth-child(2){background:var(--color-alert)}.pricing__card-dot:nth-child(3){background:var(--color-success)}.pricing__card-bar-title{font-family:var(--font-mono);font-size:.56rem;color:var(--color-text-dim);letter-spacing:1.3px;text-transform:uppercase;text-align:left;flex:1}.pricing__card-badge{font-family:var(--font-mono);font-size:.52rem;font-weight:700;color:var(--color-text-dim);background:var(--color-card-lv2);border:1px solid var(--color-card-lv3);padding:2px 6px;border-radius:3px;letter-spacing:.7px;text-transform:uppercase}.pricing__card-body{display:flex;flex-direction:column;flex:1;margin:0 10px 10px;padding:26px 20px 24px;position:relative;background:var(--color-bg);border:1px solid var(--color-card-lv2);border-top:none;border-radius:0 0 4px 4px;z-index:1}.pricing__card-scanlines{position:absolute;inset:0;background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,.03) 2px,rgba(0,0,0,.03) 4px);z-index:1}.pricing__plan-name{font-family:var(--font-mono);font-size:.9rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;position:relative;z-index:2}.pricing__plan-kody{display:block;width:172px;height:auto;max-height:132px;object-fit:contain;max-width:100%;margin:0 auto 12px;image-rendering:pixelated;position:relative;z-index:2}.pricing__plan-kody--community{width:172px}.pricing__plan-kody--team{width:172px}.pricing__plan-kody--enterprise{width:172px}.pricing__plan-desc{font-size:.85rem;color:var(--color-text-muted);line-height:1.5;margin-bottom:24px;min-height:2.5em;position:relative;z-index:2}.pricing__price{display:flex;align-items:baseline;gap:2px;margin-bottom:8px;position:relative;z-index:2}.pricing__price-currency{font-family:var(--font-mono);font-size:1.2rem;color:var(--color-text)}.pricing__price-value{font-family:var(--font-mono);font-size:2rem;color:var(--color-text)}.pricing__price-value--dynamic{font-family:var(--font-mono);font-size:2.35rem;font-weight:400;line-height:1.15;letter-spacing:0;min-width:2ch;text-shadow:0 2px 0 rgba(0,0,0,.35);-webkit-font-smoothing:none;font-smooth:never}.pricing__price-period{font-family:var(--font-mono);font-size:.75rem;color:var(--color-text-dim);margin-left:4px}.pricing__price-note{font-family:var(--font-mono);font-size:.75rem;color:var(--color-text-muted);margin-bottom:4px;position:relative;z-index:2}.pricing__price-detail{font-size:.75rem;color:var(--color-text-dim);margin-bottom:24px;line-height:1.4;position:relative;z-index:2}.pricing__cta{display:block;text-align:center;width:100%;margin-bottom:24px;position:relative;z-index:2}.pricing__card--teams .pricing__cta{margin-bottom:10px}.pricing__trial-note{font-family:var(--font-mono);font-size:.68rem;letter-spacing:.4px;line-height:1.45;color:var(--color-text-muted);text-align:center;margin-bottom:18px;position:relative;z-index:2}.pricing__divider{border-top:2px dashed var(--color-card-lv3);margin-bottom:24px;position:relative;z-index:2}.pricing__features{list-style:none;display:flex;flex-direction:column;gap:12px;position:relative;z-index:2}.pricing__feature{display:flex;align-items:flex-start;gap:10px;font-size:.85rem;color:var(--color-text-muted);line-height:1.4}.pricing__check{color:var(--color-success);font-size:.8rem;flex-shrink:0;margin-top:1px}.pricing__feature--highlight{color:var(--color-text)}@media (max-width:1024px){.pricing__grid{grid-template-columns:1fr;max-width:480px;margin:0 auto}.pricing__card--recommended{order:-1}}@media (max-width:480px){.pricing__card-body{padding:24px 16px}.pricing__plan-kody--community{width:146px}.pricing__plan-kody--team{width:146px}.pricing__plan-kody--enterprise{width:146px}.pricing__toggle{flex-wrap:wrap;gap:12px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}.pricing__trial-note{font-size:.64rem;letter-spacing:.35px}.pricing__feature{font-size:.82rem;line-height:1.5;overflow-wrap:anywhere}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}.pricing__trial-note{font-size:.62rem;letter-spacing:.3px;margin-bottom:16px}}</style>
<main><section class="hero">
      <!-- Hero background: quiet corner traces (decorative only) -->
      <svg class="hero-circuit" viewBox="0 0 1440 780" preserveAspectRatio="xMidYMin meet" aria-hidden="true" focusable="false">
        <path class="hc-trace" d="M84 79 L84 127 L250 138"/><path class="hc-trace" d="M1227 122 L1240 138 L1343 149 L1346 181"/><path class="hc-trace" d="M1382 406 L1382 474 L1309 476"/><path class="hc-trace" d="M60 604 L60 641 L138 653"/><path class="hc-trace" d="M1211 691 L1266 672 L1309 633"/>
        <rect class="hc-sq" x="78" y="66" width="12" height="12" rx="1"/><rect class="hc-sq" x="238" y="155" width="12" height="12" rx="1"/><rect class="hc-sq" x="1376" y="393" width="12" height="12" rx="1"/><rect class="hc-sq" x="54" y="592" width="12" height="12" rx="1"/><rect class="hc-sq" x="1198" y="685" width="12" height="12" rx="1"/>
        <rect class="hc-dot hc-dot--0" x="182" y="135" width="6" height="6"/><rect class="hc-dot hc-dot--1" x="1282" y="146" width="6" height="6"/><rect class="hc-dot hc-dot--2" x="108" y="650" width="6" height="6"/><rect class="hc-dot hc-dot--3" x="1241" y="667" width="6" height="6"/>
        <g class="hc-bubble" transform="translate(1207 97)"><rect width="38" height="24" rx="3"/><path d="M8 24 l4 5 l4 -5"/><rect class="hc-bubble-dot" x="9" y="10" width="4" height="4"/><rect class="hc-bubble-dot" x="17" y="10" width="4" height="4"/><rect class="hc-bubble-dot" x="25" y="10" width="4" height="4"/></g>
      </svg>
      <!-- Scattered bugs removed from here and moved to global container -->


      <div class="container hero__container">
        <h1 class="hero__title">AI code review<br><span style="white-space:nowrap">for <span class="highlight">GitLab</span></span></h1>
        <p class="hero__subtitle">Open source AI code review with the model you choose.<br>Reviews every merge request on GitLab Cloud and Self-Managed.</p>

        <div class="hero__ctas">
          <div class="hero__cta-row"><a href="https://app.kodus.io/sign-up" class="btn btn--primary hero__cta-btn" id="lpGlHeroStartFreeBtn">Start free</a><a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--outline-light hero__cta-btn" id="lpGlHeroSelfHostBtn">Self-host setup</a></div>
          <p class="hero__disclaimer">14-day free trial &bull; no credit card required</p>
          
        </div>

        <!-- Retro OS window — client logos -->
        <div class="hero__clients">
          <img width="256" height="215" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-paws.webp" alt="" class="hero__kody-paws fade-in">
          <div class="retro-window">
            <div class="retro-window__bar">
              <span class="retro-window__bar-title">trusted_by.exe</span>
              <div class="retro-window__bar-btns">
                <span class="retro-window__bar-btn">&#9472;</span>
                <span class="retro-window__bar-btn">&#9633;</span>
                <span class="retro-window__bar-btn">&times;</span>
              </div>
            </div>
            <div class="retro-window__body">
              <div class="logo-carousel" data-logo-carousel><div class="logo-carousel__track"><div class="logo-carousel__group"><img width="900" height="450" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/clickbus.png" alt="ClickBus" class="logo-carousel__img logo-carousel__img--clickbus" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_19.webp" alt="SaaSJet" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_8.webp" alt="Asksuite" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/ikatec.webp" alt="Ikatec" class="logo-carousel__img" decoding="async"><img width="480" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/brendi_v2.webp" alt="Brendi" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/maino.webp" alt="Mainô" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/purple_metrics.webp" alt="Purple Metrics" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_16.webp" alt="Sommus Sistemas" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/cred.webp" alt="Cred Aluga" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_17.webp" alt="Up Estate" class="logo-carousel__img" decoding="async"><img width="100" height="36" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/capim.svg" alt="Capim" class="logo-carousel__img logo-carousel__img--capim" decoding="async"><img width="172" height="26" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/scorpion.svg" alt="Scorpion" class="logo-carousel__img logo-carousel__img--scorpion" decoding="async"><img width="166" height="30" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/covergenius.svg" alt="Cover Genius" class="logo-carousel__img logo-carousel__img--covergenius" decoding="async"></div><div class="logo-carousel__group" aria-hidden="true"><img width="900" height="450" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/clickbus.png" alt="ClickBus" class="logo-carousel__img logo-carousel__img--clickbus" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_19.webp" alt="SaaSJet" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_8.webp" alt="Asksuite" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/ikatec.webp" alt="Ikatec" class="logo-carousel__img" decoding="async"><img width="480" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/brendi_v2.webp" alt="Brendi" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/maino.webp" alt="Mainô" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/purple_metrics.webp" alt="Purple Metrics" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_16.webp" alt="Sommus Sistemas" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/cred.webp" alt="Cred Aluga" class="logo-carousel__img" decoding="async"><img width="479" height="240" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/frame_17.webp" alt="Up Estate" class="logo-carousel__img" decoding="async"><img width="100" height="36" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/capim.svg" alt="Capim" class="logo-carousel__img logo-carousel__img--capim" decoding="async"><img width="172" height="26" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/scorpion.svg" alt="Scorpion" class="logo-carousel__img logo-carousel__img--scorpion" decoding="async"><img width="166" height="30" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/logos_new/covergenius.svg" alt="Cover Genius" class="logo-carousel__img logo-carousel__img--covergenius" decoding="async"></div></div></div>            </div>
          </div>
          
        </div>
      </div>
    </section><section class="cartridges" id="different">
      <div class="container">
        <h2 class="section-title">Why teams choose Kodus</h2>

        <div class="cartridges__grid">

          <!-- Cartridge 1: Free Tier -->
          <button class="cartridge" data-modal="modal-free-tier">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--green"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--love">
                  <img width="256" height="256" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-love.webp" alt="Kody Love" class="kody-love">
                  <img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" alt="" class="pixel-heart heart-1">
                  <img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" alt="" class="pixel-heart heart-2">
                  <img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" alt="" class="pixel-heart heart-3">
                  <img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" alt="" class="pixel-heart heart-4">
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">Open source<br>core</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">AGPL licensed. Read the code, run it on your own infra.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 4: Extensible Configs -->
          <button class="cartridge" data-modal="modal-configs">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--blue"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--config">
                  <img width="256" height="256" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-config.webp" alt="Kody Configs" class="kody-config">
                  <svg class="pixel-gear gear-1" viewBox="0 0 24 24" fill="#30304B"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                  <svg class="pixel-gear gear-2" viewBox="0 0 24 24" fill="#30304B"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                  <svg class="pixel-gear gear-3" viewBox="0 0 24 24" fill="#30304B"><path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58a.49.49 0 0 0 .12-.61l-1.92-3.32a.488.488 0 0 0-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54a.484.484 0 0 0-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58a.49.49 0 0 0-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"/></svg>
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">Self-host,<br>no sales call</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">No seat minimums. Deploy with Docker Compose or Helm.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 3: Zero Markup -->
          <button class="cartridge" data-modal="modal-zero-markup">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--red"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--tax">
                  <div class="model-track-wrapper cartridge__models" aria-hidden="true">
                    <div class="model-track move-right"><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/anthropic.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/open-ai.webp" class="track-icon" alt=""><img width="437" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/gemini.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/deepsek.webp" class="track-icon" alt=""><img width="128" height="128" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/zai.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/meta.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/grok.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/claude-ai.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/anthropic.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/open-ai.webp" class="track-icon" alt=""><img width="437" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/gemini.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/deepsek.webp" class="track-icon" alt=""><img width="128" height="128" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/zai.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/meta.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/grok.webp" class="track-icon" alt=""><img width="407" height="407" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/claude-ai.webp" class="track-icon" alt=""></div>
                  </div>
                  <img width="256" height="256" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-taxa.webp" alt="Kody Zero Markup" class="kody-taxa">
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">Any model,<br>zero markup</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">Bring any model with your own key, on every plan. You pay the provider at list price.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

          <!-- Cartridge 4: No PR rate limits -->
          <button class="cartridge" data-modal="modal-no-limits">
            <div class="cartridge__shell">
              <div class="cartridge__notch"></div>
              <div class="cartridge__screen">
                <div class="cartridge__screen-bar">
                  <span class="cartridge__screen-label">DEV_MODULE_V2</span>
                  <span class="cartridge__led cartridge__led--green"></span>
                </div>
                <div class="cartridge__screen-body cartridge__screen-body--nolimit" aria-hidden="true">
                  <div class="nolimit__log"><div class="nolimit__track"><span class="nolimit__line"><i>push</i><em>a1f3c9</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>7be04d</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>rebase</i><em>c92e11</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>force-push</i><em>3fd8a0</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>e41b7c</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>09ac5e</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>a1f3c9</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>7be04d</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>rebase</i><em>c92e11</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>force-push</i><em>3fd8a0</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>e41b7c</em><b>&#10003; reviewed</b></span><span class="nolimit__line"><i>push</i><em>09ac5e</em><b>&#10003; reviewed</b></span></div></div>
                  <div class="nolimit__rate"><b>&infin;</b><span>reviews/h</span></div>
                </div>
              </div>
              <div class="cartridge__title-area">
                <p class="cartridge__title">No PR<br>rate limits</p>
              </div>
              <div class="cartridge__insert">
                <span class="cartridge__arrow">&#9650;</span>
                <span class="cartridge__insert-text">Insert</span>
              </div>
            </div>
            <span class="cartridge__desc">Every push gets reviewed. Unlimited PRs on every plan with your own key.</span>
            <span class="cartridge__cta">Learn more</span>
          </button>

        </div>
      </div>
    </section><div class="cartridge-details" hidden>
          <article class="cartridge-detail" id="modal-free-tier-content">
            <h3>Open source core</h3>
            <div class="cartridge-detail__body">
            <p>The Kodus core is open source under the AGPL license.</p>
            <p>You can read the review logic, audit what touches your code, and run it on your own infrastructure with Docker Compose or Helm.</p>
            <ul><li>Public repository on GitHub</li><li>Community plan self-hosts for free</li><li>Commercial license available for enterprise needs</li></ul>
            <p>No black box between your code and production.</p><div style="display: flex; gap: 12px; margin-top: 24px; justify-content: center;"><img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"><img width="88" height="88" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/coracao.webp" style="width: 24px; height: 24px; image-rendering: pixelated;"></div>
            </div>
          </article>
          <article class="cartridge-detail" id="modal-no-limits-content">
            <h3>No PR rate limits</h3>
            <div class="cartridge-detail__body">
            <p>Kodus doesn’t cap how many reviews you get per hour.</p>
            <p>With your own API key, every plan reviews unlimited PRs. Push, rebase or force-push as often as you need, and each change gets reviewed.</p>
            <ul><li>No reviews-per-hour quota</li><li>No waiting for a limit to reset</li><li>The only ceiling is your LLM provider’s rate limit on your key</li></ul>
            </div>
          </article>
          <article class="cartridge-detail" id="modal-zero-markup-content">
            <h3>Any model, zero markup</h3>
            <div class="cartridge-detail__body">
            <p>Bring your own API keys on every plan, cloud included. Use any provider with an OpenAI-compatible API, pick a different model per repository, and set a fallback model. You pay for tokens directly to your provider, at list price.</p>
            <ul><li>No hidden fees</li><li>No token limits</li><li>No billing surprises</li></ul>
            <p>On the Teams plan, the $10 per user is strictly for platform infrastructure. Your model spend stays on your own bill, with the provider you choose.</p><div style="display: flex; justify-content: center; margin-top: -8px;"><img width="3072" height="3072" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/plaquinha.webp" style="width: 140px; height: auto; image-rendering: pixelated;"></div>
            </div>
          </article>
          <article class="cartridge-detail" id="modal-configs-content">
            <h3>Self-host, no sales call</h3>
            <div class="cartridge-detail__body">
            <p>Run Kodus on your own infrastructure without an enterprise contract.</p>
            <p>Clone the repository and deploy with Docker Compose on a VM, or with Helm on Kubernetes. Point it at your Git provider and your model keys, and reviews stay inside your network.</p>
            <p>Self-hosting is available on the free Community plan. Enterprise adds SSO, activity logs and dedicated support when you need them.</p>
            </div>
          </article>
    </div>

    <!-- ========== CARTRIDGE MODALS ========== -->
    <div class="modal-overlay" id="modalOverlay" aria-hidden="true" hidden inert>
      <div class="modal" id="modalContent" role="dialog" aria-modal="true" aria-labelledby="modalTitle" tabindex="-1">
        <button class="modal__close" id="modalClose" aria-label="Close modal">&times;</button>
        <div class="modal__header">
          <p class="modal__title" id="modalTitle"></p>
        </div>
        <div class="modal__desc" id="modalDesc"></div>
      </div>
    </div>

    <section class="feat-grid" id="basics">
      <div class="container">
        <h2 class="section-title">The basics, done <span class="highlight">right</span></h2>
        <div class="feat-grid__grid">
            <div class="feat-cell">
              <div class="feat-cell__art">
                <svg class="sgraph" viewBox="0 0 284 206" fill="none" aria-hidden="true">
                  <text class="sg-col" x="46" y="40">callers</text>
                  <text class="sg-col" x="238" y="40">callees</text>
                  <path class="sg-e sg-e1" d="M92 60 C104 60 104 92 106 92" pathLength="1"/>
                  <path class="sg-e sg-e2" d="M92 124 C104 124 104 92 106 92" pathLength="1"/>
                  <path class="sg-e sg-e3" d="M178 92 C180 92 180 60 192 60" pathLength="1"/>
                  <path class="sg-e sg-e4" d="M178 92 C180 92 180 124 192 124" pathLength="1"/>
                  <path class="sg-e sg-e5 sg-e--test" d="M142 104 V148" pathLength="1"/>
                  <g class="sgc sgc--n sgc-1"><rect x="2" y="50" width="90" height="20" rx="4"/><text x="47.0" y="63.5">login()</text></g>
                  <g class="sgc sgc--n sgc--x sgc-2"><rect x="2" y="114" width="90" height="20" rx="4"/><text x="47.0" y="127.5">chargeCard()</text><text class="sgc__repo" x="4" y="145">billing-api · linked repo</text></g>
                  <g class="sgc sgc--core"><rect x="106" y="80" width="72" height="24" rx="5"/><text x="142" y="96">verifyToken()</text></g>
                  <g class="sgc sgc--n sgc-3"><rect x="192" y="50" width="90" height="20" rx="4"/><text x="237.0" y="63.5">db.findUser()</text></g>
                  <g class="sgc sgc--n sgc-4"><rect x="192" y="114" width="90" height="20" rx="4"/><text x="237.0" y="127.5">crypto.hash()</text></g>
                  <g class="sgc sgc--t sgc-5"><rect x="100" y="148" width="84" height="20" rx="4"/><text x="142.0" y="161.5">auth.test.ts</text></g>
                  <text class="sg-risk" x="2" y="200"><tspan class="sg-risk__k">Risk</tspan> MEDIUM (0.45)</text>
                  <text class="sg-risk sg-risk--r" x="282" y="200"><tspan class="sg-risk__k">Blast radius</tspan> 12 fns · 5 files</text>
                </svg>
              </div>
              <h3 class="feat-cell__title">Catches bugs across files and repos</h3>
              <p class="feat-cell__desc">Kody maps the callers, callees and tests around every change, including code in the other repos you link.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="srules" aria-hidden="true">
                  <div class="srules__card">
                    <div class="srules__head">
                      <span class="srules__title"><span class="srules__type srules__t1">Never expose secrets</span><span class="srules__type srules__t2">to the client</span></span>
                      <span class="srules__sev">HIGH</span>
                    </div>
                    <div class="srules__meta">
                      <span><em>Path</em>**/*.tsx</span>
                      <span><em>Scope</em>File</span>
                    </div>
                    <div class="srules__ins">
                      <em>Instructions</em>
                      <span class="srules__type srules__l1">Flag client components that read</span>
                      <span class="srules__type srules__l2">API keys or tokens.</span>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Enforces your team's rules</h3>
              <p class="feat-cell__desc">Write review rules in plain language, or import the ones you already keep in .cursorrules, CLAUDE.md or AGENTS.md.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="bval" aria-hidden="true">
                  <div class="bval__card">
                    <div class="bval__h">## Business Rules Validation</div>
                    <div class="bval__meta"><span><em>Task</em>LIN-482 · Refund flow</span><span class="bval__src">Linear</span></div>
                    <ul class="bval__acs">
                      <li class="bval__ac bval__ac--1"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l4 4 10-10"/></svg></i><span>AC #1 amount within limit</span><b>refund.ts:42</b></li>
                      <li class="bval__ac bval__ac--2"><i><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l4 4 10-10"/></svg></i><span>AC #2 audit log written</span><b>audit.ts:18</b></li>
                    </ul>
                    <div class="bval__fix"><span class="bval__lvl">MUST_FIX</span><span>Refund needs a reason</span></div>
                    <div class="bval__status">Status: <b>Issues Found</b></div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Validates your business rules</h3>
              <p class="feat-cell__desc">Kody pulls requirements from Jira, Linear and Notion, then checks each merge request against them, and flags what is missing. GitLab issues work too.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="kchat" aria-hidden="true">
                  <div class="kchat__card">
                    <div class="kchat__msg kchat__msg--1"><span class="kchat__who">you</span><p><b>@kody</b> why is this flagged?</p></div>
                    <div class="kchat__msg kchat__msg--2 kchat__msg--kody"><span class="kchat__who">kody</span><p>After logout <code>session.user</code> is null, so <code>findUser()</code> throws.</p></div>
                    <div class="kchat__msg kchat__msg--3"><span class="kchat__who">you</span><p>We already guard that in the auth middleware.</p></div>
                    <div class="kchat__msg kchat__msg--4 kchat__msg--kody"><span class="kchat__who">kody</span><p>Got it. Save this as a memory for future reviews?</p><span class="kchat__save">Save memory</span></div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Talk to Kody in the merge request</h3>
              <p class="feat-cell__desc">Ask why something was flagged, or push back. When you correct Kody, it offers to save that as a memory for the next reviews.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="tdebt" aria-hidden="true">
                  <div class="tdebt__card">
                    <div class="tdebt__head"><span class="tdebt__title">Issues</span><span class="tdebt__auto">Auto-create issues <i class="tdebt__switch"></i></span></div>
                    <div class="tdebt__event">MR !322 merged · 3 suggestions not implemented</div>
                    <ul class="tdebt__list">
                    <li class="tdebt__row tdebt__row--1"><span class="tdebt__st">OPEN</span><span class="tdebt__sev tdebt__sev--high">HIGH</span><span class="tdebt__t">Inject service via DI token<small>kody rules · session.ts</small></span></li>
                    <li class="tdebt__row tdebt__row--2"><span class="tdebt__st">OPEN</span><span class="tdebt__sev tdebt__sev--crit">CRITICAL</span><span class="tdebt__t">Token logged in error handler<small>security · auth.ts</small></span></li>
                    <li class="tdebt__row tdebt__row--3"><span class="tdebt__st">OPEN</span><span class="tdebt__sev tdebt__sev--med">MEDIUM</span><span class="tdebt__t">Handle missing user in refund<small>bug · refund.ts</small></span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Track technical debt</h3>
              <p class="feat-cell__desc">Unimplemented suggestions become issues automatically, so debt stays visible and shrinks over time.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="cock" aria-hidden="true">
                  <div class="cock__card">
                    <div class="cock__head"><span>Productivity</span><span class="cock__range">Last 15 days</span></div>
                    <div class="cock__grid">
                    <div class="cock__tile cock__tile--1"><span class="cock__k">Deploy Frequency</span><span class="cock__v">4.2<small>/week</small></span><span class="cock__band cock__band--high">High</span></div>
                    <div class="cock__tile cock__tile--2"><span class="cock__k">MR Cycle Time (p75)</span><span class="cock__v">26<small>h</small></span><span class="cock__band cock__band--elite">Elite</span></div>
                    <div class="cock__tile cock__tile--3"><span class="cock__k">Bug Ratio</span><span class="cock__v">12<small>%</small></span><span class="cock__band cock__band--fair">Fair</span></div>
                    <div class="cock__tile cock__tile--4"><span class="cock__k">MR Size (p75)</span><span class="cock__v">214<small>lines</small></span><span class="cock__band cock__band--elite">Elite</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">See how review is going</h3>
              <p class="feat-cell__desc">Deploy frequency, cycle time, bug ratio and merge request size in one dashboard, on the Teams plan.</p>
            </div>
        </div>
      </div>
      <style>
.anim-test{padding:60px 0}
      .anim-test__flag{text-align:center;font-family:var(--font-mono);font-size:0.72rem;color:var(--color-text-dim);letter-spacing:0.5px;margin-bottom:24px}
      .anim-test__cell{max-width:440px;margin:0 auto;padding:48px 40px}
      .anim-test__art{height:300px;display:flex;align-items:center;justify-content:center;margin-bottom:36px}
      .anim-test__title{font-family:var(--font-mono);font-size:1.5rem;color:var(--color-text);margin-bottom:10px;line-height:1.2}
      .anim-test__desc{font-size:0.95rem;color:var(--color-text-muted);line-height:1.65;max-width:360px}
      .sgraph{width:100%;max-width:284px;height:auto;overflow:visible;font-family:var(--font-mono)}
      /* context: the call graph kodus-graph builds around a changed function */
      .sg-col{font-size:7px;letter-spacing:.08em;text-transform:uppercase;fill:var(--color-text-muted);text-anchor:middle;opacity:.8}
      .sgc text{font-size:7px;text-anchor:middle;fill:var(--color-text-muted)}
      .sgc--n rect,.sgc--t rect{fill:var(--color-card-lv1);stroke:var(--color-card-lv3)}
      .sgc--n,.sgc--t{opacity:.35;animation:sg-node 6s infinite}
      .sgc--core rect{fill:var(--color-primary-dark);stroke:var(--color-primary)}
      .sgc--core text{fill:var(--color-primary);font-size:8px;font-weight:700}
      .sgc--core{animation:sg-core 6s infinite;transform-box:fill-box;transform-origin:center}
      .sgc--t rect{stroke-dasharray:3 3}
      .sg-e{stroke:var(--color-primary);stroke-width:1.3;stroke-dasharray:1;stroke-dashoffset:1;animation:sg-draw 6s infinite}
      .sg-e--test{stroke:var(--color-secondary);stroke-dasharray:1}
      .sg-e1{animation-name:sg-draw1}.sg-e2{animation-name:sg-draw2}.sg-e3{animation-name:sg-draw3}.sg-e4{animation-name:sg-draw4}.sg-e5{animation-name:sg-draw5}
      .sgc-1,.sgc-2{animation-name:sg-node12}.sgc-3,.sgc-4{animation-name:sg-node34}.sgc-5{animation-name:sg-node5}
      .sg-risk{font-size:7.5px;fill:var(--color-primary);opacity:0;animation:sg-risk 6s infinite}
      .sg-risk--r{text-anchor:end;fill:var(--color-text)}
      .sg-risk__k{fill:var(--color-text-muted)}
      @keyframes sg-core{0%{opacity:0;transform:scale(.8)}6%{opacity:1;transform:scale(1.08)}10%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0}}
      @keyframes sg-draw1{0%,10%{stroke-dashoffset:1;opacity:1}20%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw2{0%,14%{stroke-dashoffset:1;opacity:1}24%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw3{0%,26%{stroke-dashoffset:1;opacity:1}36%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw4{0%,30%{stroke-dashoffset:1;opacity:1}40%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-draw5{0%,44%{stroke-dashoffset:1;opacity:1}54%,92%{stroke-dashoffset:0;opacity:.8}98%,100%{stroke-dashoffset:0;opacity:0}}
      @keyframes sg-node12{0%,18%{opacity:.35}24%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-node34{0%,34%{opacity:.35}40%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-node5{0%,52%{opacity:.35}58%,92%{opacity:1}98%,100%{opacity:.35}}
      @keyframes sg-risk{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.sg-e{animation:none;stroke-dashoffset:0;opacity:.7}.sgc--n,.sgc--t,.sgc--core,.sg-risk{animation:none;opacity:1}}
      /* shared shell for the text-card motifs */
      .bval,.tdebt,.cock,.kchat{width:100%;max-width:286px;font-family:var(--font-mono)}
      .bval__card,.tdebt__card,.cock__card,.kchat__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px}
      /* business rules: the "Business Rules Validation" comment Kody posts on the PR */
      .bval__h{font-size:0.7rem;font-weight:700;color:var(--color-text)}
      .bval__meta{display:flex;align-items:flex-end;justify-content:space-between;margin-top:9px;font-size:0.64rem;color:var(--color-text)}
      .bval__meta em{display:block;font-style:normal;font-size:0.56rem;color:var(--color-text-muted);margin-bottom:2px}
      .bval__src{font-size:0.54rem;color:var(--color-secondary);border:1px solid var(--color-secondary-dark);border-radius:3px;padding:1px 5px}
      .bval__acs{list-style:none;margin:11px 0 0;padding:10px 0 0;border-top:1px solid var(--color-card-lv3);display:grid;gap:7px}
      .bval__ac{display:flex;align-items:center;gap:7px;font-size:0.6rem;color:var(--color-text-muted)}
      .bval__ac span{flex:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
      .bval__ac b{font-weight:400;color:var(--color-text-muted);opacity:.7}
      .bval__ac i{flex-shrink:0;width:13px;height:13px;border-radius:3px;border:1px solid var(--color-card-lv3);display:grid;place-items:center;color:var(--color-success)}
      .bval__ac i svg{width:9px;height:9px;opacity:0;animation:6s infinite}
      .bval__ac--1 i svg{animation-name:bval-c1}.bval__ac--2 i svg{animation-name:bval-c2}
      .bval__fix{display:flex;align-items:center;gap:8px;margin-top:9px;padding:6px 8px;border-radius:3px;background:rgba(250,88,103,0.08);box-shadow:inset 0 0 0 1px rgba(250,88,103,0.35);font-size:0.62rem;color:var(--color-text);opacity:0;animation:bval-fix 6s infinite}
      .bval__lvl{font-size:0.54rem;font-weight:700;color:var(--color-danger)}
      .bval__status{margin-top:10px;font-size:0.6rem;color:var(--color-text-muted);opacity:0;animation:bval-st 6s infinite}
      .bval__status b{color:var(--color-danger)}
      @keyframes bval-c1{0%,16%{opacity:0;transform:scale(.4)}22%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-c2{0%,30%{opacity:0;transform:scale(.4)}36%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-fix{0%,46%{opacity:0;transform:translateY(4px)}54%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes bval-st{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}
      /* tech_debt: suggestions left unimplemented become rows on the Issues page when the PR closes */
      .tdebt__head{display:flex;align-items:center;justify-content:space-between;font-size:0.7rem;font-weight:700;color:var(--color-text)}
      .tdebt__auto{display:flex;align-items:center;gap:6px;font-size:0.56rem;font-weight:400;color:var(--color-text-muted)}
      .tdebt__switch{position:relative;width:22px;height:12px;border-radius:6px;background:var(--color-primary)}
      .tdebt__switch::after{content:'';position:absolute;top:2px;left:12px;width:8px;height:8px;border-radius:50%;background:#fff}
      .tdebt__event{margin-top:10px;padding:6px 8px;border-radius:3px;background:var(--color-card-lv2);font-size:0.56rem;color:var(--color-text-muted);opacity:0;animation:tdebt-ev 6s infinite}
      .tdebt__list{list-style:none;margin:10px 0 0;padding:0;display:grid;grid-template-columns:minmax(0,1fr);gap:6px}
      .tdebt__row{min-width:0;display:flex;align-items:flex-start;gap:6px;opacity:0;animation:6s infinite}
      .tdebt__row--1{animation-name:tdebt-r1}.tdebt__row--2{animation-name:tdebt-r2}.tdebt__row--3{animation-name:tdebt-r3}
      .tdebt__st,.tdebt__sev{flex-shrink:0;font-size:0.5rem;font-weight:700;border-radius:3px;padding:2px 4px;margin-top:1px}
      .tdebt__st{color:var(--color-text);background:var(--color-card-lv3)}
      .tdebt__sev--crit{color:var(--color-danger);box-shadow:inset 0 0 0 1px var(--color-danger)}
      .tdebt__sev--high{color:var(--color-warning);box-shadow:inset 0 0 0 1px var(--color-warning)}
      .tdebt__sev--med{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}
      .tdebt__t{min-width:0;font-size:0.6rem;color:var(--color-text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
      .tdebt__t small{display:block;font-size:0.52rem;color:var(--color-text-muted);margin-top:1px}
      @keyframes tdebt-ev{0%,4%{opacity:0}10%,92%{opacity:1}98%,100%{opacity:0}}
      @keyframes tdebt-r1{0%,18%{opacity:0;transform:translateX(-6px)}25%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes tdebt-r2{0%,30%{opacity:0;transform:translateX(-6px)}37%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes tdebt-r3{0%,42%{opacity:0;transform:translateX(-6px)}49%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      /* cockpit: the Productivity tab, with the app's own bands (Elite / High / Fair / Need focus) */
      .cock__head{display:flex;justify-content:space-between;font-size:0.68rem;font-weight:700;color:var(--color-text);padding-bottom:10px}
      .cock__range{font-weight:400;font-size:0.56rem;color:var(--color-text-muted)}
      .cock__grid{display:grid;grid-template-columns:1fr 1fr;gap:6px}
      .cock__tile{background:var(--color-card-lv2);border-radius:3px;padding:8px 9px;display:flex;flex-direction:column;gap:4px;opacity:0;animation:6s infinite}
      .cock__tile--1{animation-name:cock-t1}.cock__tile--2{animation-name:cock-t2}.cock__tile--3{animation-name:cock-t3}.cock__tile--4{animation-name:cock-t4}
      .cock__k{font-size:0.5rem;color:var(--color-text-muted);white-space:nowrap}
      .cock__v{font-size:0.95rem;font-weight:700;color:var(--color-text)}
      .cock__v small{font-size:0.52rem;font-weight:400;color:var(--color-text-muted);margin-left:2px}
      .cock__band{align-self:flex-start;font-size:0.5rem;font-weight:700;border-radius:3px;padding:1px 5px}
      .cock__band--elite{color:var(--color-success);box-shadow:inset 0 0 0 1px var(--color-success)}
      .cock__band--high{color:var(--color-info);box-shadow:inset 0 0 0 1px var(--color-info)}
      .cock__band--fair{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}
      @keyframes cock-t1{0%,6%{opacity:0;transform:translateY(5px)}14%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t2{0%,16%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t3{0%,26%{opacity:0;transform:translateY(5px)}34%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes cock-t4{0%,36%{opacity:0;transform:translateY(5px)}44%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.kchat__msg,.kchat__save,.bval__fix,.bval__status,.bval__ac i svg,.tdebt__event,.tdebt__row,.cock__tile{animation:none;opacity:1;transform:none}}
      /* @kody in the PR: a short thread that ends with Kody offering to save a memory */
      .kchat__card{display:grid;gap:9px}
      .kchat__msg{display:grid;grid-template-columns:34px 1fr;gap:6px;align-items:start;font-size:0.62rem;color:var(--color-text);opacity:0;animation:6s infinite}
      .kchat__msg p{margin:0;line-height:1.5;background:var(--color-card-lv2);border-radius:3px;padding:5px 8px}
      .kchat__msg--kody p{background:rgba(201,187,242,0.08);box-shadow:inset 0 0 0 1px var(--color-secondary-dark)}
      .kchat__msg b{color:var(--color-secondary);font-weight:700}
      .kchat__msg code{font-family:inherit;color:var(--color-primary)}
      .kchat__who{font-size:0.52rem;color:var(--color-text-muted);padding-top:5px}
      .kchat__msg--kody .kchat__who{color:var(--color-secondary)}
      .kchat__save{grid-column:2;justify-self:start;margin-top:5px;font-size:0.54rem;font-weight:700;color:var(--color-bg);background:var(--color-secondary);border-radius:3px;padding:3px 7px;opacity:0;animation:kchat-save 6s infinite}
      .kchat__msg--1{animation-name:kchat-m1}.kchat__msg--2{animation-name:kchat-m2}.kchat__msg--3{animation-name:kchat-m3}.kchat__msg--4{animation-name:kchat-m4}
      @keyframes kchat-m1{0%,4%{opacity:0;transform:translateY(5px)}10%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m2{0%,18%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m3{0%,36%{opacity:0;transform:translateY(5px)}42%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-m4{0%,52%{opacity:0;transform:translateY(5px)}58%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      @keyframes kchat-save{0%,66%{opacity:0;transform:scale(.8)}72%{opacity:1;transform:scale(1.08)}76%,92%{opacity:1;transform:none}98%,100%{opacity:0}}
      /* context: a caller that lives in another, linked repository */
      .sgc--x rect{stroke:var(--color-info);stroke-dasharray:3 2}
      .sgc--x text{fill:var(--color-info)}
      .sgc .sgc__repo{font-size:6px;text-anchor:start;fill:var(--color-info);opacity:.85}
      /* cartridge 4: pushes keep getting reviewed, no hourly cap */
      .cartridge__screen-body--nolimit{position:relative;overflow:hidden;background:#101019;height:110px;display:flex;align-items:stretch;gap:8px;padding:0 10px;font-family:var(--font-mono)}
      .nolimit__log{flex:1;min-width:0;overflow:hidden;-webkit-mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent);mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent)}
      .nolimit__track{display:flex;flex-direction:column;gap:6px;padding-top:6px;animation:nolimit-scroll 7s linear infinite}
      .nolimit__line{display:flex;gap:6px;font-size:8.5px;white-space:nowrap;color:var(--color-text-muted)}
      .nolimit__line i{font-style:normal;color:var(--color-text);min-width:52px}
      .nolimit__line em{font-style:normal;opacity:.6}
      .nolimit__line b{font-weight:400;color:var(--color-success);margin-left:auto}
      .nolimit__rate{flex-shrink:0;display:flex;flex-direction:column;align-items:center;justify-content:center;padding-left:8px;border-left:1px solid var(--color-card-lv3)}
      .nolimit__rate b{font-size:1.6rem;line-height:1;color:var(--color-primary)}
      .nolimit__rate span{font-size:7px;color:var(--color-text-muted);margin-top:4px}
      @keyframes nolimit-scroll{to{transform:translateY(-50%)}}
      @media(prefers-reduced-motion:reduce){.nolimit__track{animation:none}}
      /* cartridge 3: model logos drifting above the accountant Kody */
      .cartridge__models{position:absolute;top:8px;left:0;width:100%;height:36px;overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent);mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent)}
      .cartridge__models .track-icon{width:26px !important;height:26px !important;opacity:.7}
      .cartridge__models .model-track{gap:22px}
      .cartridge__screen-body--tax .kody-taxa{width:92px !important}
      /* Hero background: quiet corner traces */
      .hero{position:relative}
      .hero-circuit{position:absolute;left:50%;top:64px;transform:translateX(-50%);width:min(100%,1600px);height:auto;pointer-events:none;z-index:0;display:none}
      @media(min-width:1200px){.hero-circuit{display:block}}
      .hc-trace{fill:none;stroke:var(--color-card-lv3);stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0 9}
      .hc-sq{fill:none;stroke:var(--color-card-lv3);stroke-width:2}
      .hc-dot{fill:var(--color-primary);opacity:.85;animation:hc-blink 4s ease-in-out infinite}
      .hc-dot--1{animation-delay:-1s}.hc-dot--2{animation-delay:-2s}.hc-dot--3{animation-delay:-3s}
      @keyframes hc-blink{0%,100%{opacity:.35}50%{opacity:.9}}
      .hc-bubble rect:first-child{fill:none;stroke:var(--color-card-lv3);stroke-width:2}
      .hc-bubble path{fill:none;stroke:var(--color-card-lv3);stroke-width:2;stroke-linejoin:round}
      .hc-bubble-dot{fill:var(--color-primary);opacity:.7;animation:hc-typing 1.6s steps(1) infinite}
      .hc-bubble-dot:nth-of-type(3){animation-delay:.2s}.hc-bubble-dot:nth-of-type(4){animation-delay:.4s}
      @keyframes hc-typing{0%,60%{opacity:.25}30%{opacity:.8}}
      @media(prefers-reduced-motion:reduce){.hc-dot,.hc-bubble-dot{animation:none}}
      /* set_rules: a Kody Rule card (same fields as the app) being written */
      .srules{width:100%;max-width:286px;font-family:var(--font-mono)}
      .srules__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px 15px}
      .srules__head{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;min-height:32px}
      .srules__title{font-size:0.74rem;font-weight:700;color:var(--color-text);line-height:1.35}
      .srules__sev{flex-shrink:0;font-size:0.56rem;font-weight:700;letter-spacing:0.08em;color:var(--color-warning);border:1px solid var(--color-warning);border-radius:3px;padding:2px 5px;opacity:0;transform:scale(0.6);animation:srules-pop 6s infinite}
      .srules__meta{display:flex;gap:22px;margin-top:12px;font-size:0.66rem;color:var(--color-text);opacity:0;animation:srules-meta 6s infinite}
      .srules__meta em,.srules__ins em{display:block;font-style:normal;font-size:0.58rem;color:var(--color-text-muted);margin-bottom:3px}
      .srules__ins{margin-top:12px;padding-top:11px;border-top:1px solid var(--color-card-lv3);font-size:0.66rem;color:var(--color-text-muted);line-height:1.6}
      .srules__type{display:block;overflow:hidden;white-space:nowrap;width:0}
      .srules__t1{animation:srules-t1 6s infinite}
      .srules__t2{animation:srules-t2 6s infinite}
      .srules__l1{animation:srules-l1 6s infinite}
      .srules__l2{animation:srules-l2 6s infinite}
      .srules__l2::after{content:'';display:inline-block;width:6px;height:0.9em;margin-left:2px;vertical-align:-1px;background:var(--color-secondary);animation:srules-caret 0.8s step-end infinite}
      @keyframes srules-t1{0%{width:0;animation-timing-function:steps(20,end)}15%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}
      @keyframes srules-t2{0%,15%{width:0;animation-timing-function:steps(13,end)}25%{width:13ch}92%{width:13ch;opacity:1}98%,100%{width:13ch;opacity:0}}
      @keyframes srules-pop{0%,28%{opacity:0;transform:scale(0.6)}32%{opacity:1;transform:scale(1.15)}35%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0;transform:scale(1)}}
      @keyframes srules-meta{0%,36%{opacity:0}42%,92%{opacity:1}98%,100%{opacity:0}}
      @keyframes srules-l1{0%,44%{width:0;animation-timing-function:steps(33,end)}62%{width:33ch}92%{width:33ch;opacity:1}98%,100%{width:33ch;opacity:0}}
      @keyframes srules-l2{0%,63%{width:0;animation-timing-function:steps(19,end)}74%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}
      @keyframes srules-caret{50%{opacity:0}}
      @media(prefers-reduced-motion:reduce){.srules__type{width:auto!important;animation:none!important}.srules__sev,.srules__meta{opacity:1;transform:none;animation:none}.srules__l2::after{display:none}}

      .feat-grid{padding:var(--section-padding) 0;position:relative;z-index:1}
      .feat-grid__grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));max-width:1180px;margin:0 auto;border-top:1px solid var(--color-card-lv2);border-left:1px solid var(--color-card-lv2)}
      .feat-cell{border-right:1px solid var(--color-card-lv2);border-bottom:1px solid var(--color-card-lv2);padding:38px 34px 34px;display:flex;flex-direction:column}
      .feat-cell__art{height:240px;display:flex;align-items:center;justify-content:center;margin-bottom:28px}
      .feat-cell__art > *{max-width:100%}
      .feat-cell__title{font-family:var(--font-mono);font-size:1.3rem;color:var(--color-text);margin-bottom:14px;line-height:1.3}
      .feat-cell__desc{font-size:0.85rem;color:var(--color-text-muted);line-height:1.7}
      @media(max-width:980px){.feat-grid__grid{grid-template-columns:repeat(2,minmax(0,1fr))}}
      @media(max-width:640px){.feat-grid__grid{grid-template-columns:minmax(0,1fr)}.feat-cell{padding:32px 20px 30px}}
      </style>
    </section><section class="lp-shp__section lp-shp__section--tinted"><div class="container">
<h2 class="lp-shp__title">Your model, <span class="highlight">your key</span></h2>
<p class="lp-shp__lede" style="margin-bottom: 36px;">Connect your own provider account on any plan. The provider charges that account for the tokens at its list price, and Kodus adds no markup.</p>
<div class="lp-shp__bnd-grid">
<div class="lp-shp__bnd-card"><img width="2700" height="2700" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-key.webp" alt="" class="lp-shp__bnd-kody" loading="lazy"><h3>The provider and the key</h3><p>Connect OpenAI, Anthropic, Google, OpenRouter and other providers with an API key, or use Amazon Bedrock, Azure OpenAI, Vertex AI or any OpenAI-compatible endpoint. Your key is stored encrypted and never shown again.</p></div>
<div class="lp-shp__bnd-card"><img width="256" height="256" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-config.webp" alt="" class="lp-shp__bnd-kody" loading="lazy"><h3>Which model runs where</h3><p>Pick a default model and a model per task. Override it for a repository or a directory when one codebase needs something different.</p></div>
<div class="lp-shp__bnd-card"><img width="2700" height="2700" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-painel.webp" alt="" class="lp-shp__bnd-kody" loading="lazy"><h3>What happens when a provider fails</h3><p>Add a fallback model on another provider. When a call fails because of a bad key, no credit, denied access or a provider outage, Kody runs it again once on the fallback.</p></div>
<div class="lp-shp__bnd-card"><img width="256" height="256" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-taxa.webp" alt="" class="lp-shp__bnd-kody" loading="lazy"><h3>What each review costs</h3><p>Token usage shows tokens and estimated cost by day, merge request, review, developer and model. Set a monthly budget and get alerts at 50, 75, 90 and 100 percent.</p></div>
</div></div></section>
<section class="home-security" id="security">
      <div class="container">
        <div class="home-security__inner">
          <div class="home-security__art">
            <div class="pixel-cloud" style="top:15%;left:12%;--s:1.5;animation:float-cloud 30s linear infinite"></div>
            <div class="pixel-cloud" style="top:30%;left:72%;--s:1.2;opacity:0.5;animation:float-cloud 45s linear infinite reverse"></div>
            <div class="pixel-cloud" style="top:8%;left:50%;--s:1;opacity:0.4;animation:float-cloud 60s linear infinite"></div>
            <img width="3072" height="3072" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/castle.webp" alt="Castle" class="home-security__castle">
            <img width="3072" height="3072" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-guard.webp" alt="Kody Guard" class="home-security__guard">
          </div>
          <div class="home-security__copy">
            <span class="home-security__eyebrow">// privacy_security.mod</span>
            <h2 class="home-security__title">Private by default</h2>
            <p class="home-security__desc">Your source code is never stored and never used to train models. All data is encrypted in transit and at rest, and self-hosted runners keep your IP entirely inside your own infrastructure.</p>
            <ul class="home-security__chips">
              <li>SOC 2</li>
              <li>Self-hosted runners</li>
              <li>Encrypted in transit &amp; at rest</li>
              <li>Never trained on your code</li>
            </ul>
          </div>
        </div>
      </div>

      <style>
      .home-security{padding:60px 0}
      .home-security__inner{position:relative;display:grid;grid-template-columns:0.85fr 1.15fr;gap:40px;align-items:center;background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-left:3px solid var(--color-success);border-radius:var(--border-radius);padding:40px 44px;overflow:hidden}
      .home-security__art{position:relative;min-height:260px;display:flex;justify-content:center;align-items:flex-end}
      .home-security__castle{width:240px;height:auto;image-rendering:pixelated;position:relative;z-index:1;filter:drop-shadow(0 10px 20px rgba(0,0,0,0.6))}
      .home-security__guard{width:110px;height:auto;image-rendering:pixelated;position:absolute;left:50%;bottom:-6px;transform:translateX(-50%);z-index:2;filter:drop-shadow(0 5px 15px rgba(0,0,0,0.8))}
      .home-security__eyebrow{display:block;font-family:var(--font-mono);font-size:0.78rem;color:var(--color-success);letter-spacing:0.5px;margin-bottom:12px}
      .home-security__title{font-family:var(--font-mono);font-size:1.9rem;color:var(--color-text);margin-bottom:14px;line-height:1.2}
      .home-security__desc{font-size:0.95rem;color:var(--color-text-muted);line-height:1.7;max-width:560px}
      .home-security__chips{display:flex;flex-wrap:wrap;gap:10px;margin-top:22px}
      .home-security__chips li{display:flex;align-items:center;gap:7px;font-family:var(--font-mono);font-size:0.75rem;color:var(--color-text);background:var(--color-card-lv2);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);padding:7px 13px}
      .home-security__chips li::before{content:"\2713";color:var(--color-success);font-weight:700}
      @media(max-width:880px){.home-security__inner{grid-template-columns:1fr;gap:24px;padding:32px 24px}.home-security__art{min-height:220px;order:2}.home-security__title{font-size:1.6rem}}
      </style>
    </section><section class="lp-shp__section lp-shp__section--tinted" id="setup"><div class="container">
<h2 class="lp-shp__title">Try it on your own <span class="highlight">merge requests</span> first</h2>
<p class="lp-shp__lede" style="margin-bottom: 36px;">Kody starts on the merge requests you open. Turn it on for the whole team when you're ready.</p>
<ol class="lp-shp__steps">
<li><h3>Sign in with GitLab</h3><p>Use GitLab OAuth, or a personal access token if you prefer.</p></li>
<li><h3>Pick the projects</h3><p>Choose the projects, and whether Kody reviews only your merge requests or the team's. Kodus registers the webhooks.</p></li>
<li><h3>Open a merge request</h3><p>Kody reviews it, and reviews again every time new commits land.</p></li>
</ol>
<p class="lp-shp__lede" style="margin-top: 28px;">On Self-Managed, connect with a token and your GitLab URL.</p>
</div></section>
<style>#setup .lp-shp__steps{grid-template-columns:repeat(3,minmax(0,1fr))}@media (max-width:768px){#setup .lp-shp__steps{grid-template-columns:1fr}}</style><section class="pricing" id="plans">
      <div class="container">
        <h2 class="section-title">Choose your plan</h2>
        <p class="pricing__subtitle">Open source, model-agnostic. Bring your own API keys like OpenAI, Anthropic, and Gemini, and pay providers directly. Zero markup on AI costs.</p>

        <!-- Toggle Monthly / Annual -->
        <div class="pricing__toggle">
          <span class="pricing__toggle-label pricing__toggle-label--active" data-period="monthly">Monthly</span>
          <button class="pricing__switch" id="pricingSwitch" aria-label="Toggle billing period">
            <span class="pricing__switch-knob"></span>
          </button>
          <span class="pricing__toggle-label" data-period="annual">Annual</span>
          <span class="pricing__save-badge">SAVE 20%</span>
        </div>

        <!-- Pricing grid -->
        <div class="pricing__grid">

          <!-- Card 1: Community -->
          <div class="pricing__card pricing__card--community">
            <div class="pricing__card-bar">
              <div class="pricing__card-dots">
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
              </div>
              <span class="pricing__card-bar-title">community.exe</span>
              <span class="pricing__card-badge">BYOK</span>
            </div>
            <div class="pricing__card-body">
              <div class="pricing__card-scanlines"></div>

              <img width="2853" height="2049" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-community2.webp" alt="Kody Community" class="pricing__plan-kody pricing__plan-kody--community">
              <h3 class="pricing__plan-name">Community</h3>
              <p class="pricing__plan-desc">For indie devs, students and small teams getting started.</p>

              <div class="pricing__price">
                <span class="pricing__price-value">Free</span>
              </div>

              <a href="https://app.kodus.io/sign-up" class="btn btn--outline-light pricing__cta" id="lpGlPlanCommunityBtn">Start Free</a>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Self Hosted or Hosted by Kodus</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited PRs using your own API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited issues on Quality Radar</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use up to 10 Kody Rules</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use up to 3 active plugins</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Kody Learnings and Memory</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Discord Community Support</li>
              </ul>
            </div>
          </div>

          <!-- Card 2: Teams (Recommended) -->
          <div class="pricing__card pricing__card--teams pricing__card--recommended">
            <div class="pricing__recommended-tag">
              <span class="pricing__recommended-led"></span>
              RECOMMENDED
            </div>
            <div class="pricing__card-bar">
              <div class="pricing__card-dots">
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
              </div>
              <span class="pricing__card-bar-title">teams.exe</span>
              <span class="pricing__card-badge">BYOK</span>
            </div>
            <div class="pricing__card-body">
              <div class="pricing__card-scanlines"></div>

              <img width="2853" height="2049" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-team.webp" alt="Kody Team" class="pricing__plan-kody pricing__plan-kody--team">
              <h3 class="pricing__plan-name">Teams</h3>
              <p class="pricing__plan-desc">For growing teams that need advanced features and priority support.</p>

              <div class="pricing__price">
                <span class="pricing__price-currency">$</span>
                <span class="pricing__price-value pricing__price-value--dynamic" data-monthly="10" data-annual="8">10</span>
                <span class="pricing__price-period">/mo per dev</span>
              </div>
              <p class="pricing__price-note">+ Tokens per dev</p>
              <ul class="pricing__billing">
                <li class="pricing__billing-opt pricing__billing-opt--active" data-period="monthly">Monthly: $10 per developer per month + tokens, billed monthly.</li>
                <li class="pricing__billing-opt" data-period="annual">Annual: $8 per developer per month + tokens, billed annually.</li>
              </ul>
              <p class="pricing__price-detail">Tokens included during the free trial. No API key required.</p>

              <a href="https://app.kodus.io/sign-up" class="btn btn--primary pricing__cta" id="lpGlPlanTeamsBtn">Start Free Trial</a>
              <p class="pricing__trial-note">14-day trial &bull; up to 35 PR reviews</p>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Hosted by Kodus</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited PRs using your own API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Use unlimited Kody Rules</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Use unlimited active plugins</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Priority queue for Kody Agents</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Custom Agents</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Engineering Metrics / Cockpit</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Discord Community and Email Support</li>
              </ul>
            </div>
          </div>

          <!-- Card 3: Enterprise -->
          <div class="pricing__card pricing__card--enterprise">
            <div class="pricing__card-bar">
              <div class="pricing__card-dots">
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
                <span class="pricing__card-dot"></span>
              </div>
              <span class="pricing__card-bar-title">enterprise.exe</span>
              <span class="pricing__card-badge">Custom setup</span>
            </div>
            <div class="pricing__card-body">
              <div class="pricing__card-scanlines"></div>

              <img width="2853" height="2049" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-enterprise.webp" alt="Kody Enterprise" class="pricing__plan-kody pricing__plan-kody--enterprise">
              <h3 class="pricing__plan-name">Enterprise</h3>
              <p class="pricing__plan-desc">For organizations that need SSO, compliance and dedicated support.</p>

              <div class="pricing__price">
                <span class="pricing__price-value">Custom</span>
              </div>

              <a href="https://cal.com/gabrielmalinosqui/30min" target="_blank" rel="noopener" class="btn btn--outline-light pricing__cta" id="lpGlPlanEnterpriseBtn">Contact Sales</a>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Self Hosted or Hosted by Kodus</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> SSO</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited PRs using your own API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use unlimited Kody Rules</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use unlimited active plugins</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Priority queue for Kody Agents</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Custom Agents</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Engineering Metrics / Cockpit</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> RBAC + Audit logs and analytics</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> SOC 2</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Up to 5 hours month dedicated support with personalized onboarding</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Private Discord Channel and Email Support</li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section><section class="vhs-section" id="testimonials">
      <div class="container">
        <h2 class="section-title">What teams say about Kody</h2>

        <!-- Shelf wrapper -->
        <div class="vhs__shelf-wrapper">
          <!-- Nav arrows -->
          <button class="vhs__nav vhs__nav--prev" id="vhsPrev" aria-label="Previous">
            <span class="vhs__nav-icon">&#9664;&#9664;</span>
            <span class="vhs__nav-label">REW</span>
          </button>

          <div class="vhs__shelf-track" id="vhsTrack">
            <div class="vhs__shelf" id="vhsShelf"><div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-info);">
                  <span class="vhs__spine-title">SAASJET_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-info);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img width="400" height="400" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/Oleksandr%20Kuchma.jpeg" alt="Oleksandr Kuchma" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Oleksandr Kuchma</p>
                    <p class="vhs__role">@SaaSJet</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">We love what Kodus does. It has dramatically reduced our PR review time, and <span style="color: #339966;"><b>our developers no longer want to review a PR without Kodus running first.</b></span> The accuracy is very good: it catches many of the small issues that are easy to miss, allowing our developers to focus on the architectural decisions that truly require human judgment.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div><div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-success);">
                  <span class="vhs__spine-title">ICATEC_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-success);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <img width="150" height="150" loading="lazy" src="https://kodus.io/wp-content/uploads/2025/10/ricardo-ikatec-150x150-1.jpg" alt="Ricardo" class="vhs__avatar-img">
                    </div>
                    <p class="vhs__name">Ricardo</p>
                    <p class="vhs__role">@Ikatec</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Since we started using Kody, the dev experience has improved a lot. <span style="color: #339966;"><b>Time spent on code reviews dropped by around 30%</b></span>, and the AI brings valuable insights on performance, security, and code optimization. One of the best parts is that we can tailor how it works for each project.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div><div class="vhs">
                <div class="vhs__spine" style="--vhs-accent: var(--color-secondary);">
                  <span class="vhs__spine-title">BRENDI_01</span>
                </div>
                <div class="vhs__cover">
                  <div class="vhs__cover-top" style="--vhs-accent: var(--color-secondary);">
                    <span class="vhs__rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                  </div>
                  <div class="vhs__cover-body">
                    <div class="vhs__avatar">
                      <picture loading="lazy" class="vhs__avatar-img">
<source type="image/webp" srcset="https://kodus.io/wp-content/uploads/2025/04/andre.jpg.webp"/>
<img loading="lazy" src="https://kodus.io/wp-content/uploads/2025/04/andre.jpg" alt="André Diogo"/>
</picture>

                    </div>
                    <p class="vhs__name">André Diogo</p>
                    <p class="vhs__role">@Brendi</p>
                  </div>
                  <div class="vhs__synopsis">
                    <p class="vhs__quote">Kodus fit like a glove for me. Before, I was buried in slow code reviews. Now, <span style="color: #339966;"><b>feedback happens way faster</b></span>, and I can actually focus on other things.</p>
                  </div>
                  <div class="vhs__cover-bottom">
                    <span class="vhs__tape-label">&#9654; PLAY</span>
                    <span class="vhs__runtime">REC 2026</span>
                    <span class="vhs__format">VHS Hi-Fi</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <button class="vhs__nav vhs__nav--next" id="vhsNext" aria-label="Next">
            <span class="vhs__nav-icon">&#9654;&#9654;</span>
            <span class="vhs__nav-label">FF</span>
          </button>
        </div>

        <!-- Tape counter -->
        <div class="vhs__counter" id="vhsCounter">
          <span class="vhs__counter-label">TAPE</span>
          <span class="vhs__counter-current" id="vhsCounterCurrent">001</span>
          <span class="vhs__counter-sep">/</span>
          <span class="vhs__counter-total" id="vhsCounterTotal">009</span>
        </div>

      </div>
    </section><section class="faq" id="faq">
      <div class="container">
        <h2 class="section-title">FAQ</h2>

        <div class="faq__terminal">
          <!-- Terminal bar -->
          <div class="faq__bar">
            <div class="faq__bar-dots">
              <span class="faq__dot faq__dot--red"></span>
              <span class="faq__dot faq__dot--yellow"></span>
              <span class="faq__dot faq__dot--green"></span>
            </div>
            <span class="faq__bar-title">kodus-faq(1)</span>
            <span class="faq__bar-status">bash</span>
          </div>

          <!-- Man page header -->
          <div class="faq__body">
            <div class="faq__man-header">
              <span class="faq__man-section">KODUS-FAQ(1)</span>
              <span class="faq__man-center">Kodus Manual</span>
              <span class="faq__man-section">KODUS-FAQ(1)</span>
            </div>

            <div class="faq__man-block">
              <p class="faq__man-heading">NAME</p>
              <p class="faq__man-indent">kodus-faq &mdash; frequently asked questions about Kodus</p>
            </div>

            <div class="faq__man-block">
              <p class="faq__man-heading">SYNOPSIS</p>
              <p class="faq__man-indent"><span class="faq__man-cmd">kodus</span> --help [topic]</p>
            </div>

            <!-- FAQ items -->
            <div class="faq__list"><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Does Kodus work with GitLab Self-Managed?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>Yes. Connect Kodus Cloud with a token and your GitLab URL, and allow the Kodus IP in your firewall. If the code cannot leave your network, run Kodus self-hosted next to GitLab.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Do I need my own API key to try it?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>No. During the 14-day trial, Kodus covers the tokens for your first reviews. Connect your own key to keep reviewing, with no review limit.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Which AI models are supported?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>Kodus is model agnostic. You can use Claude, GPT, Gemini, Llama or any OpenAI-compatible endpoint, including self-hosted models.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Do you store my source code?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>No, Kodus does not store your source code. All processing happens in real-time, and no part of your repository is saved on our servers.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Does Kodus train models on my code?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>No. Source code is not used to train models, and data is encrypted in transit and at rest.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Will I be charged for all developers in my organization?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>No, you decide who is included in the Kodus team and will only be charged for those users. You have full control over team management and billing.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Does Kodus limit how many merge requests it reviews per hour?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>No. With your own API key, every plan reviews unlimited merge requests, and each push, rebase or force-push gets reviewed. The only limit is the rate limit your LLM provider sets on your key.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Can I use Kodus alongside GitLab Duo?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>Yes. Kodus posts its own comments on the merge request and does not change how GitLab Duo works.</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">Who posts the review comments?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>The GitLab user who connected Kodus, or the owner of the token. To post as a bot user, connect with a group access token (on GitLab.com that needs Premium or Ultimate).</p></div></div><div class="faq__item"><button class="faq__question"><span class="faq__prompt">$</span><span class="faq__question-text">What works differently on GitLab?</span><span class="faq__toggle">+</span></button><div class="faq__answer"><p>Request changes on critical findings and one-click committable suggestions are GitHub-only today. Inline comments, the summary, approvals, reactions and <code>@kody</code> commands all work on GitLab.</p></div></div></div>
            <div class="faq__man-footer">
              <span class="faq__man-section">Kodus v2.0</span>
              <span class="faq__man-center">2026-01-01</span>
              <span class="faq__man-section">KODUS-FAQ(1)</span>
            </div>
          </div>
        </div>
      </div>
    </section><section class="roi-cta">
      <div class="container">
        <div class="pixel-cta">
          <div class="pixel-cta__window">
            <div class="pixel-cta__bar">
              <span class="pixel-cta__bar-text">GITLAB_REVIEW.EXE</span>
            </div>
            <div class="pixel-cta__content">
              <div class="pixel-cta__media">
                <img width="2658" height="2070" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-review.png" alt="Kody Review" class="pixel-cta__kody">
              </div>
              <div class="pixel-cta__copy">
                <h2 class="pixel-cta__title">Let Kody review your<br>next merge request.</h2>
                <p class="pixel-cta__desc">Connect GitLab, pick a project and run the first review on a real merge request.</p>
                <div class="pixel-cta__actions"><a href="https://app.kodus.io/sign-up" class="btn btn--primary pixel-cta__btn" id="lpGlFinalStartFreeBtn">Start free</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section></main>
<?php get_footer('kodus-lp'); ?>
