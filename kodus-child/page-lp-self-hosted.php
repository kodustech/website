<?php
/*
 * Template Name: Kodus LP Self-Hosted (Ads)
 * Template Post Type: page
 *
 * Google Ads landing page. Noindex and out of the sitemap (see functions.php).
 */
?>
<?php get_header('kodus-lp', ['actions' => <<<'HTML'
<a href="https://github.com/kodustech/kodus-ai" target="_blank" rel="noopener noreferrer" class="btn btn--github" id="navGithubStarsBtn">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"/></svg>
          <span id="ghStars">--</span>
        </a>
        <a href="https://app.kodus.io/sign-up" class="btn btn--outline-light" id="lpShNavTryCloudBtn">Try in the cloud</a>
        <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--primary" id="lpShNavInstallBtn">Install on a VM</a>
HTML
]); ?>
<style>.lp-shp__hero-alt{margin:20px 0 0;font-family:var(--font-mono);font-size:.8rem;color:var(--color-text-muted)}.lp-shp__hero-alt a{color:var(--color-primary);text-decoration:underline;text-underline-offset:3px}</style>
<style>@media (max-width:768px){.hero__clients{margin-top:96px}.hero__kody-paws{width:96px;left:8px;margin-bottom:-10px}}@media (max-width:480px){.hero__clients{margin-top:88px}.hero__kody-paws{width:86px;margin-bottom:-14px}}.hero__clients{max-width:700px;margin:80px auto 0;position:relative}.hero__kody-paws{position:absolute;bottom:100%;left:0;width:110px;margin-bottom:-8px;z-index:2}.retro-window{border:2px solid var(--color-card-lv3);background:var(--color-card-lv1);overflow:hidden}.retro-window__bar{display:flex;align-items:center;justify-content:space-between;padding:6px 10px;background:linear-gradient(180deg,var(--color-card-lv3) 0,var(--color-card-lv2) 100%);border-bottom:2px solid var(--color-card-lv3)}.retro-window__bar-title{font-family:var(--font-mono);font-size:.7rem;color:var(--color-text-muted);letter-spacing:.5px}.retro-window__bar-btns{display:flex;gap:2px}.retro-window__bar-btn{display:flex;align-items:center;justify-content:center;width:22px;height:22px;font-size:.8rem;color:var(--color-text-dim);border:1px solid var(--color-card-lv3);background:var(--color-card-lv2);line-height:1}.retro-window__body{padding:24px 0;overflow:hidden}.logo-carousel{--logo-gap:48px;--logo-duration:32s;--logo-group-width:0px;overflow:hidden;contain:layout paint;mask-image:linear-gradient(90deg,transparent,#000 10%,#000 90%,transparent);-webkit-mask-image:linear-gradient(90deg,transparent,#000 10%,#000 90%,transparent)}.logo-carousel__track{display:flex;align-items:center;gap:var(--logo-gap);width:max-content;will-change:transform;transform:translate3d(0,0,0);backface-visibility:hidden;animation:logo-carousel-scroll var(--logo-duration) linear infinite;animation-play-state:paused}.logo-carousel.is-ready .logo-carousel__track{animation-play-state:running}.logo-carousel__group{display:flex;align-items:center;gap:var(--logo-gap);min-width:max-content;flex-shrink:0}.logo-carousel__img{height:45px;width:auto;max-width:none;opacity:.82;flex-shrink:0;object-fit:contain;backface-visibility:hidden;transform:translateZ(0)}.logo-carousel__img--lerian{height:40px}.logo-carousel__img--clickbus{filter:brightness(0) invert(1);height:46px}.logo-carousel__img--quintoandar{height:42px}.logo-carousel__img--notificacoes{height:48px}@media (max-width:768px){.logo-carousel{--logo-gap:30px}.logo-carousel__img{height:38px}.logo-carousel__img--lerian{height:34px}.logo-carousel__img--quintoandar{height:36px}.logo-carousel__img--clickbus{height:39px}.logo-carousel__img--notificacoes{height:40px}}@media (max-width:480px){.logo-carousel{--logo-gap:22px}.logo-carousel__img{height:32px}.logo-carousel__img--lerian{height:29px}.logo-carousel__img--quintoandar{height:31px}.logo-carousel__img--clickbus{height:33px}.logo-carousel__img--notificacoes{height:34px}}@media (prefers-reduced-motion:reduce){.logo-carousel__track{animation:none;transform:none}.logo-carousel__group[aria-hidden=true]{display:none}}@media (max-width:768px){.hero__clients{margin-top:96px}.hero__kody-paws{width:96px;left:8px;margin-bottom:-10px}}@media (max-width:480px){.hero__clients{margin-top:88px}.hero__kody-paws{width:86px;margin-bottom:-14px}}.hero__kody-paws{width:96px;height:auto;aspect-ratio:256/215;object-fit:contain;image-rendering:pixelated}.hero__clients{
    margin-top: 130px !important;
  }@media (max-width: 768px){.hero__clients{
      margin-top: 90px !important;
    }}
html body .lp-shp__hero--scene{min-height:0;padding:168px 0 72px}
html body .lp-shp__hero--scene::before{display:none}
html body .lp-shp__hero--scene .lp-shp__hero-grid{grid-template-columns:minmax(0,960px);justify-content:center;text-align:center}
html body .lp-shp__hero--scene .lp-shp__hero-title{margin-bottom:28px}
html body .lp-shp__hero--scene .lp-shp__hero-sub{margin-left:auto;margin-right:auto;max-width:46ch}
html body .lp-shp__hero--scene .lp-shp__hero-ctas{justify-content:center}
html body .lp-shp__hero--scene .hero__clients{margin-top:96px;text-align:left}
@media (max-width:768px){html body .lp-shp__hero--scene{padding:120px 0 56px}html body .lp-shp__hero--scene .lp-shp__hero-title{font-size:clamp(1.4rem,6.6vw,2.4rem)}}
</style>
<style>.section-title{font-family:var(--font-pixel);font-size:clamp(1.5rem,4vw,2.5rem);text-align:center;margin-bottom:60px;letter-spacing:-.5px;line-height:1.3}.sgraph{width:100%;max-width:284px;height:auto;overflow:visible;font-family:var(--font-mono)}.sg-col{font-size:7px;letter-spacing:.08em;text-transform:uppercase;fill:var(--color-text-muted);text-anchor:middle;opacity:.8}.sgc text{font-size:7px;text-anchor:middle;fill:var(--color-text-muted)}.sgc--n rect,.sgc--t rect{fill:var(--color-card-lv1);stroke:var(--color-card-lv3)}.sgc--n,.sgc--t{opacity:.35;animation:sg-node 6s infinite}.sgc--core rect{fill:var(--color-primary-dark);stroke:var(--color-primary)}.sgc--core text{fill:var(--color-primary);font-size:8px;font-weight:700}.sgc--core{animation:sg-core 6s infinite;transform-box:fill-box;transform-origin:center}.sgc--t rect{stroke-dasharray:3 3}.sg-e{stroke:var(--color-primary);stroke-width:1.3;stroke-dasharray:1;stroke-dashoffset:1;animation:sg-draw 6s infinite}.sg-e--test{stroke:var(--color-secondary);stroke-dasharray:1}.sg-e1{animation-name:sg-draw1}.sg-e2{animation-name:sg-draw2}.sg-e3{animation-name:sg-draw3}.sg-e4{animation-name:sg-draw4}.sg-e5{animation-name:sg-draw5}.sgc-1,.sgc-2{animation-name:sg-node12}.sgc-3,.sgc-4{animation-name:sg-node34}.sgc-5{animation-name:sg-node5}.sg-risk{font-size:7.5px;fill:var(--color-primary);opacity:0;animation:sg-risk 6s infinite}.sg-risk--r{text-anchor:end;fill:var(--color-text)}.sg-risk__k{fill:var(--color-text-muted)}@keyframes sg-core{0%{opacity:0;transform:scale(.8)}6%{opacity:1;transform:scale(1.08)}10%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0}}@keyframes sg-draw1{0%,10%{stroke-dashoffset:1;opacity:1}20%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}@keyframes sg-draw2{0%,14%{stroke-dashoffset:1;opacity:1}24%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}@keyframes sg-draw3{0%,26%{stroke-dashoffset:1;opacity:1}36%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}@keyframes sg-draw4{0%,30%{stroke-dashoffset:1;opacity:1}40%,92%{stroke-dashoffset:0;opacity:.7}98%,100%{stroke-dashoffset:0;opacity:0}}@keyframes sg-draw5{0%,44%{stroke-dashoffset:1;opacity:1}54%,92%{stroke-dashoffset:0;opacity:.8}98%,100%{stroke-dashoffset:0;opacity:0}}@keyframes sg-node12{0%,18%{opacity:.35}24%,92%{opacity:1}98%,100%{opacity:.35}}@keyframes sg-node34{0%,34%{opacity:.35}40%,92%{opacity:1}98%,100%{opacity:.35}}@keyframes sg-node5{0%,52%{opacity:.35}58%,92%{opacity:1}98%,100%{opacity:.35}}@keyframes sg-risk{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}@media(prefers-reduced-motion:reduce){.sg-e{animation:none;stroke-dashoffset:0;opacity:.7}.sgc--n,.sgc--t,.sgc--core,.sg-risk{animation:none;opacity:1}}.bval,.tdebt,.cock,.kchat{width:100%;max-width:286px;font-family:var(--font-mono)}.bval__card,.tdebt__card,.cock__card,.kchat__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px}.bval__h{font-size:0.7rem;font-weight:700;color:var(--color-text)}.bval__meta{display:flex;align-items:flex-end;justify-content:space-between;margin-top:9px;font-size:0.64rem;color:var(--color-text)}.bval__meta em{display:block;font-style:normal;font-size:0.56rem;color:var(--color-text-muted);margin-bottom:2px}.bval__src{font-size:0.54rem;color:var(--color-secondary);border:1px solid var(--color-secondary-dark);border-radius:3px;padding:1px 5px}.bval__acs{list-style:none;margin:11px 0 0;padding:10px 0 0;border-top:1px solid var(--color-card-lv3);display:grid;gap:7px}.bval__ac{display:flex;align-items:center;gap:7px;font-size:0.6rem;color:var(--color-text-muted)}.bval__ac span{flex:1;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.bval__ac b{font-weight:400;color:var(--color-text-muted);opacity:.7}.bval__ac i{flex-shrink:0;width:13px;height:13px;border-radius:3px;border:1px solid var(--color-card-lv3);display:grid;place-items:center;color:var(--color-success)}.bval__ac i svg{width:9px;height:9px;opacity:0;animation:6s infinite}.bval__ac--1 i svg{animation-name:bval-c1}.bval__ac--2 i svg{animation-name:bval-c2}.bval__fix{display:flex;align-items:center;gap:8px;margin-top:9px;padding:6px 8px;border-radius:3px;background:rgba(250,88,103,0.08);box-shadow:inset 0 0 0 1px rgba(250,88,103,0.35);font-size:0.62rem;color:var(--color-text);opacity:0;animation:bval-fix 6s infinite}.bval__lvl{font-size:0.54rem;font-weight:700;color:var(--color-danger)}.bval__status{margin-top:10px;font-size:0.6rem;color:var(--color-text-muted);opacity:0;animation:bval-st 6s infinite}.bval__status b{color:var(--color-danger)}@keyframes bval-c1{0%,16%{opacity:0;transform:scale(.4)}22%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes bval-c2{0%,30%{opacity:0;transform:scale(.4)}36%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes bval-fix{0%,46%{opacity:0;transform:translateY(4px)}54%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes bval-st{0%,62%{opacity:0}70%,92%{opacity:1}98%,100%{opacity:0}}.tdebt__head{display:flex;align-items:center;justify-content:space-between;font-size:0.7rem;font-weight:700;color:var(--color-text)}.tdebt__auto{display:flex;align-items:center;gap:6px;font-size:0.56rem;font-weight:400;color:var(--color-text-muted)}.tdebt__switch{position:relative;width:22px;height:12px;border-radius:6px;background:var(--color-primary)}.tdebt__switch::after{content:'';position:absolute;top:2px;left:12px;width:8px;height:8px;border-radius:50%;background:#fff}.tdebt__event{margin-top:10px;padding:6px 8px;border-radius:3px;background:var(--color-card-lv2);font-size:0.56rem;color:var(--color-text-muted);opacity:0;animation:tdebt-ev 6s infinite}.tdebt__list{list-style:none;margin:10px 0 0;padding:0;display:grid;grid-template-columns:minmax(0,1fr);gap:6px}.tdebt__row{min-width:0;display:flex;align-items:flex-start;gap:6px;opacity:0;animation:6s infinite}.tdebt__row--1{animation-name:tdebt-r1}.tdebt__row--2{animation-name:tdebt-r2}.tdebt__row--3{animation-name:tdebt-r3}.tdebt__st,.tdebt__sev{flex-shrink:0;font-size:0.5rem;font-weight:700;border-radius:3px;padding:2px 4px;margin-top:1px}.tdebt__st{color:var(--color-text);background:var(--color-card-lv3)}.tdebt__sev--crit{color:var(--color-danger);box-shadow:inset 0 0 0 1px var(--color-danger)}.tdebt__sev--high{color:var(--color-warning);box-shadow:inset 0 0 0 1px var(--color-warning)}.tdebt__sev--med{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}.tdebt__t{min-width:0;font-size:0.6rem;color:var(--color-text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.tdebt__t small{display:block;font-size:0.52rem;color:var(--color-text-muted);margin-top:1px}@keyframes tdebt-ev{0%,4%{opacity:0}10%,92%{opacity:1}98%,100%{opacity:0}}@keyframes tdebt-r1{0%,18%{opacity:0;transform:translateX(-6px)}25%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes tdebt-r2{0%,30%{opacity:0;transform:translateX(-6px)}37%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes tdebt-r3{0%,42%{opacity:0;transform:translateX(-6px)}49%,92%{opacity:1;transform:none}98%,100%{opacity:0}}.cock__head{display:flex;justify-content:space-between;font-size:0.68rem;font-weight:700;color:var(--color-text);padding-bottom:10px}.cock__range{font-weight:400;font-size:0.56rem;color:var(--color-text-muted)}.cock__grid{display:grid;grid-template-columns:1fr 1fr;gap:6px}.cock__tile{background:var(--color-card-lv2);border-radius:3px;padding:8px 9px;display:flex;flex-direction:column;gap:4px;opacity:0;animation:6s infinite}.cock__tile--1{animation-name:cock-t1}.cock__tile--2{animation-name:cock-t2}.cock__tile--3{animation-name:cock-t3}.cock__tile--4{animation-name:cock-t4}.cock__k{font-size:0.5rem;color:var(--color-text-muted);white-space:nowrap}.cock__v{font-size:0.95rem;font-weight:700;color:var(--color-text)}.cock__v small{font-size:0.52rem;font-weight:400;color:var(--color-text-muted);margin-left:2px}.cock__band{align-self:flex-start;font-size:0.5rem;font-weight:700;border-radius:3px;padding:1px 5px}.cock__band--elite{color:var(--color-success);box-shadow:inset 0 0 0 1px var(--color-success)}.cock__band--high{color:var(--color-info);box-shadow:inset 0 0 0 1px var(--color-info)}.cock__band--fair{color:var(--color-alert);box-shadow:inset 0 0 0 1px var(--color-alert)}@keyframes cock-t1{0%,6%{opacity:0;transform:translateY(5px)}14%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes cock-t2{0%,16%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes cock-t3{0%,26%{opacity:0;transform:translateY(5px)}34%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes cock-t4{0%,36%{opacity:0;transform:translateY(5px)}44%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@media(prefers-reduced-motion:reduce){.kchat__msg,.kchat__save,.bval__fix,.bval__status,.bval__ac i svg,.tdebt__event,.tdebt__row,.cock__tile{animation:none;opacity:1;transform:none}}.kchat__card{display:grid;gap:9px}.kchat__msg{display:grid;grid-template-columns:34px 1fr;gap:6px;align-items:start;font-size:0.62rem;color:var(--color-text);opacity:0;animation:6s infinite}.kchat__msg p{margin:0;line-height:1.5;background:var(--color-card-lv2);border-radius:3px;padding:5px 8px}.kchat__msg--kody p{background:rgba(201,187,242,0.08);box-shadow:inset 0 0 0 1px var(--color-secondary-dark)}.kchat__msg b{color:var(--color-secondary);font-weight:700}.kchat__msg code{font-family:inherit;color:var(--color-primary)}.kchat__who{font-size:0.52rem;color:var(--color-text-muted);padding-top:5px}.kchat__msg--kody .kchat__who{color:var(--color-secondary)}.kchat__save{grid-column:2;justify-self:start;margin-top:5px;font-size:0.54rem;font-weight:700;color:var(--color-bg);background:var(--color-secondary);border-radius:3px;padding:3px 7px;opacity:0;animation:kchat-save 6s infinite}.kchat__msg--1{animation-name:kchat-m1}.kchat__msg--2{animation-name:kchat-m2}.kchat__msg--3{animation-name:kchat-m3}.kchat__msg--4{animation-name:kchat-m4}@keyframes kchat-m1{0%,4%{opacity:0;transform:translateY(5px)}10%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes kchat-m2{0%,18%{opacity:0;transform:translateY(5px)}24%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes kchat-m3{0%,36%{opacity:0;transform:translateY(5px)}42%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes kchat-m4{0%,52%{opacity:0;transform:translateY(5px)}58%,92%{opacity:1;transform:none}98%,100%{opacity:0}}@keyframes kchat-save{0%,66%{opacity:0;transform:scale(.8)}72%{opacity:1;transform:scale(1.08)}76%,92%{opacity:1;transform:none}98%,100%{opacity:0}}.sgc--x rect{stroke:var(--color-info);stroke-dasharray:3 2}.sgc--x text{fill:var(--color-info)}.sgc .sgc__repo{font-size:6px;text-anchor:start;fill:var(--color-info);opacity:.85}.srules{width:100%;max-width:286px;font-family:var(--font-mono)}.srules__card{background:var(--color-card-lv1);border:1px solid var(--color-card-lv3);border-radius:var(--border-radius-xs);box-shadow:0 12px 40px rgba(0,0,0,0.4);padding:14px 15px 15px}.srules__head{display:flex;align-items:flex-start;justify-content:space-between;gap:10px;min-height:32px}.srules__title{font-size:0.74rem;font-weight:700;color:var(--color-text);line-height:1.35}.srules__sev{flex-shrink:0;font-size:0.56rem;font-weight:700;letter-spacing:0.08em;color:var(--color-warning);border:1px solid var(--color-warning);border-radius:3px;padding:2px 5px;opacity:0;transform:scale(0.6);animation:srules-pop 6s infinite}.srules__meta{display:flex;gap:22px;margin-top:12px;font-size:0.66rem;color:var(--color-text);opacity:0;animation:srules-meta 6s infinite}.srules__meta em,.srules__ins em{display:block;font-style:normal;font-size:0.58rem;color:var(--color-text-muted);margin-bottom:3px}.srules__ins{margin-top:12px;padding-top:11px;border-top:1px solid var(--color-card-lv3);font-size:0.66rem;color:var(--color-text-muted);line-height:1.6}.srules__type{display:block;overflow:hidden;white-space:nowrap;width:0}.srules__t1{animation:srules-t1 6s infinite}.srules__t2{animation:srules-t2 6s infinite}.srules__l1{animation:srules-l1 6s infinite}.srules__l2{animation:srules-l2 6s infinite}.srules__l2::after{content:'';display:inline-block;width:6px;height:0.9em;margin-left:2px;vertical-align:-1px;background:var(--color-secondary);animation:srules-caret 0.8s step-end infinite}@keyframes srules-t1{0%{width:0;animation-timing-function:steps(20,end)}15%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}@keyframes srules-t2{0%,15%{width:0;animation-timing-function:steps(13,end)}25%{width:13ch}92%{width:13ch;opacity:1}98%,100%{width:13ch;opacity:0}}@keyframes srules-pop{0%,28%{opacity:0;transform:scale(0.6)}32%{opacity:1;transform:scale(1.15)}35%,92%{opacity:1;transform:scale(1)}98%,100%{opacity:0;transform:scale(1)}}@keyframes srules-meta{0%,36%{opacity:0}42%,92%{opacity:1}98%,100%{opacity:0}}@keyframes srules-l1{0%,44%{width:0;animation-timing-function:steps(33,end)}62%{width:33ch}92%{width:33ch;opacity:1}98%,100%{width:33ch;opacity:0}}@keyframes srules-l2{0%,63%{width:0;animation-timing-function:steps(19,end)}74%{width:20ch}92%{width:20ch;opacity:1}98%,100%{width:20ch;opacity:0}}@keyframes srules-caret{50%{opacity:0}}@media(prefers-reduced-motion:reduce){.srules__type{width:auto!important;animation:none!important}.srules__sev,.srules__meta{opacity:1;transform:none;animation:none}.srules__l2::after{display:none}}.feat-grid{padding:var(--section-padding) 0;position:relative;z-index:1}.feat-grid__grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));max-width:1180px;margin:0 auto;border-top:1px solid var(--color-card-lv2);border-left:1px solid var(--color-card-lv2)}.feat-cell{border-right:1px solid var(--color-card-lv2);border-bottom:1px solid var(--color-card-lv2);padding:38px 34px 34px;display:flex;flex-direction:column}.feat-cell__art{height:240px;display:flex;align-items:center;justify-content:center;margin-bottom:28px}.feat-cell__art > *{max-width:100%}.feat-cell__title{font-family:var(--font-mono);font-size:1.3rem;color:var(--color-text);margin-bottom:14px;line-height:1.3}.feat-cell__desc{font-size:0.85rem;color:var(--color-text-muted);line-height:1.7}@media(max-width:980px){.feat-grid__grid{grid-template-columns:repeat(2,minmax(0,1fr))}}@media(max-width:640px){.feat-grid__grid{grid-template-columns:minmax(0,1fr)}.feat-cell{padding:32px 20px 30px}}</style>
<style>.cartridges{padding:var(--section-padding) 0;background:linear-gradient(to bottom,transparent,rgba(24,24,37,.85) 20%,rgba(24,24,37,.85) 80%,transparent)}@media (max-width:768px){.cartridges .container{padding-left:14px;padding-right:14px}}@media (max-width:480px){.cartridges .container{padding-left:10px;padding-right:10px}}.cartridge__desc{
    display: block;
    margin-top: 12px;
    padding: 0 6px;
    font-size: 0.78rem;
    line-height: 1.55;
    color: var(--color-text-muted);
    text-align: center;
  }.cartridge__screen-body--nolimit{position:relative;overflow:hidden;background:#101019;height:110px;display:flex;align-items:stretch;gap:8px;padding:0 10px;font-family:var(--font-mono)}.nolimit__log{flex:1;min-width:0;overflow:hidden;-webkit-mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent);mask-image:linear-gradient(180deg,transparent,#000 22%,#000 78%,transparent)}.nolimit__track{display:flex;flex-direction:column;gap:6px;padding-top:6px;animation:nolimit-scroll 7s linear infinite}.nolimit__line{display:flex;gap:6px;font-size:8.5px;white-space:nowrap;color:var(--color-text-muted)}.nolimit__line i{font-style:normal;color:var(--color-text);min-width:52px}.nolimit__line em{font-style:normal;opacity:.6}.nolimit__line b{font-weight:400;color:var(--color-success);margin-left:auto}.nolimit__rate{flex-shrink:0;display:flex;flex-direction:column;align-items:center;justify-content:center;padding-left:8px;border-left:1px solid var(--color-card-lv3)}.nolimit__rate b{font-size:1.6rem;line-height:1;color:var(--color-primary)}.nolimit__rate span{font-size:7px;color:var(--color-text-muted);margin-top:4px}@keyframes nolimit-scroll{to{transform:translateY(-50%)}}@media(prefers-reduced-motion:reduce){.nolimit__track{animation:none}}.cartridge__models{position:absolute;top:8px;left:0;width:100%;height:36px;overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent);mask-image:linear-gradient(90deg,transparent,#000 15%,#000 85%,transparent)}.cartridge__models .track-icon{width:26px !important;height:26px !important;opacity:.7}.cartridge__models .model-track{gap:22px}.cartridge__screen-body--tax .kody-taxa{width:92px !important}</style>
<style>.site-bugs{position:absolute;top:0;left:0;width:100%;height:100%;z-index:0;overflow:hidden}.site-bug{position:absolute;color:var(--color-card-lv3);will-change:transform}.hero-circuit{position:absolute;left:50%;top:64px;transform:translateX(-50%);width:min(100%,1600px);height:auto;pointer-events:none;z-index:0;display:none}@media(min-width:1200px){.hero-circuit{display:block}}.hc-trace{fill:none;stroke:var(--color-card-lv3);stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round;stroke-dasharray:0 9}.hc-sq{fill:none;stroke:var(--color-card-lv3);stroke-width:2}.hc-dot{fill:var(--color-primary);opacity:.85;animation:hc-blink 4s ease-in-out infinite}.hc-dot--1{animation-delay:-1s}.hc-dot--2{animation-delay:-2s}.hc-dot--3{animation-delay:-3s}@keyframes hc-blink{0%,100%{opacity:.35}50%{opacity:.9}}.hc-bubble rect:first-child{fill:none;stroke:var(--color-card-lv3);stroke-width:2}.hc-bubble path{fill:none;stroke:var(--color-card-lv3);stroke-width:2;stroke-linejoin:round}.hc-bubble-dot{fill:var(--color-primary);opacity:.7;animation:hc-typing 1.6s steps(1) infinite}.hc-bubble-dot:nth-of-type(3){animation-delay:.2s}.hc-bubble-dot:nth-of-type(4){animation-delay:.4s}@keyframes hc-typing{0%,60%{opacity:.25}30%{opacity:.8}}@media(prefers-reduced-motion:reduce){.hc-dot,.hc-bubble-dot{animation:none}}body{position:relative}</style>
<style>@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}}@media (max-width:480px){.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}.pricing__trial-note{font-size:.62rem;letter-spacing:.3px;margin-bottom:16px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}.pricing__trial-note{font-size:.64rem;letter-spacing:.35px}.pricing__feature{font-size:.82rem;line-height:1.5;overflow-wrap:anywhere}}@media (max-width:480px){.pricing__card-body{padding:24px 16px}.pricing__plan-kody--team{width:146px}.pricing__toggle{flex-wrap:wrap;gap:12px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}}.pricing{padding:var(--section-padding) 0;min-height:100vh}.pricing__subtitle{text-align:center;color:var(--color-text-muted);font-size:1rem;line-height:1.65;max-width:780px;margin-left:auto;margin-right:auto;margin-top:-40px;margin-bottom:48px}.pricing__toggle{display:flex;align-items:center;justify-content:center;gap:16px;margin-bottom:56px}.pricing__toggle-label{font-family:var(--font-mono);font-size:.85rem;color:var(--color-text-dim)}.pricing__toggle-label--active{color:var(--color-text)}.pricing__switch{width:52px;height:28px;border-radius:14px;background:var(--color-card-lv2);border:2px solid var(--color-card-lv3);position:relative;padding:0}.pricing__switch-knob{position:absolute;top:3px;left:3px;width:18px;height:18px;border-radius:50%;background:var(--color-text-muted)}.pricing__save-badge{font-family:var(--font-mono);font-size:.65rem;font-weight:700;color:var(--color-bg);background:var(--color-success);padding:3px 8px;border-radius:4px;letter-spacing:.5px;text-transform:uppercase}.pricing__grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;align-items:stretch}.pricing__card{display:flex;flex-direction:column;height:100%;border:2px solid #3a3a4f;border-radius:10px 10px 6px 6px;background:linear-gradient(180deg,#3a3a4f 0,#2a2a3c 52%,#223 100%);overflow:hidden;position:relative;box-shadow:inset 0 1px 0 rgba(255,255,255,.06),0 6px 18px rgba(0,0,0,.42)}.pricing__card::before{content:"";position:absolute;top:0;left:50%;width:42%;height:7px;transform:translateX(-50%);background:#2a2a3c;border:1px solid #3a3a4f;border-top:none;border-radius:0 0 4px 4px;z-index:2}.pricing__card::after{content:none}.pricing__card--recommended{border-color:#c89558;box-shadow:inset 0 1px 0 rgba(255,255,255,.08),0 0 0 1px rgba(248,183,109,.12),0 7px 18px rgba(0,0,0,.44)}.pricing__recommended-tag{display:flex;align-items:center;justify-content:center;gap:8px;padding:8px 14px;background:linear-gradient(180deg,#4a3728 0,#35271d 100%);border-bottom:1px solid #7a5a3f;font-family:var(--font-mono);font-size:.66rem;font-weight:700;color:var(--color-primary);letter-spacing:1.6px;text-transform:uppercase;text-shadow:0 0 5px rgba(248,183,109,.25)}.pricing__recommended-led{width:8px;height:8px;border-radius:50%;background:var(--color-primary);box-shadow:0 0 6px rgba(248,183,109,.8);animation:2s ease-in-out infinite pricing-led-pulse}@keyframes pricing-led-pulse{0%,100%{opacity:1;box-shadow:0 0 6px var(--color-primary)}50%{opacity:.5;box-shadow:0 0 2px var(--color-primary)}}.pricing__card-bar{display:flex;align-items:center;justify-content:space-between;gap:10px;padding:6px 10px;margin:12px 10px 0;background:var(--color-card-lv1);border:1px solid var(--color-card-lv2);border-radius:4px 4px 0 0;border-bottom:none}.pricing__card-dots{display:none}.pricing__card-dot{display:none}.pricing__card-dot:first-child{background:var(--color-danger)}.pricing__card-dot:nth-child(2){background:var(--color-alert)}.pricing__card-dot:nth-child(3){background:var(--color-success)}.pricing__card-bar-title{font-family:var(--font-mono);font-size:.56rem;color:var(--color-text-dim);letter-spacing:1.3px;text-transform:uppercase;text-align:left;flex:1}.pricing__card-badge{font-family:var(--font-mono);font-size:.52rem;font-weight:700;color:var(--color-text-dim);background:var(--color-card-lv2);border:1px solid var(--color-card-lv3);padding:2px 6px;border-radius:3px;letter-spacing:.7px;text-transform:uppercase}.pricing__card-body{display:flex;flex-direction:column;flex:1;margin:0 10px 10px;padding:26px 20px 24px;position:relative;background:var(--color-bg);border:1px solid var(--color-card-lv2);border-top:none;border-radius:0 0 4px 4px;z-index:1}.pricing__card-scanlines{position:absolute;inset:0;background:repeating-linear-gradient(0deg,transparent,transparent 2px,rgba(0,0,0,.03) 2px,rgba(0,0,0,.03) 4px);z-index:1}.pricing__plan-name{font-family:var(--font-mono);font-size:.9rem;text-transform:uppercase;letter-spacing:1px;margin-bottom:8px;position:relative;z-index:2}.pricing__plan-kody{display:block;width:172px;height:auto;max-height:132px;object-fit:contain;max-width:100%;margin:0 auto 12px;image-rendering:pixelated;position:relative;z-index:2}.pricing__plan-kody--community{width:172px}.pricing__plan-kody--team{width:172px}.pricing__plan-kody--enterprise{width:172px}.pricing__plan-desc{font-size:.85rem;color:var(--color-text-muted);line-height:1.5;margin-bottom:24px;min-height:2.5em;position:relative;z-index:2}.pricing__price{display:flex;align-items:baseline;gap:2px;margin-bottom:8px;position:relative;z-index:2}.pricing__price-currency{font-family:var(--font-mono);font-size:1.2rem;color:var(--color-text)}.pricing__price-value{font-family:var(--font-mono);font-size:2rem;color:var(--color-text)}.pricing__price-value--dynamic{font-family:var(--font-mono);font-size:2.35rem;font-weight:400;line-height:1.15;letter-spacing:0;min-width:2ch;text-shadow:0 2px 0 rgba(0,0,0,.35);-webkit-font-smoothing:none;font-smooth:never}.pricing__price-period{font-family:var(--font-mono);font-size:.75rem;color:var(--color-text-dim);margin-left:4px}.pricing__price-note{font-family:var(--font-mono);font-size:.75rem;color:var(--color-text-muted);margin-bottom:4px;position:relative;z-index:2}.pricing__price-detail{font-size:.75rem;color:var(--color-text-dim);margin-bottom:24px;line-height:1.4;position:relative;z-index:2}.pricing__cta{display:block;text-align:center;width:100%;margin-bottom:24px;position:relative;z-index:2}.pricing__card--teams .pricing__cta{margin-bottom:10px}.pricing__trial-note{font-family:var(--font-mono);font-size:.68rem;letter-spacing:.4px;line-height:1.45;color:var(--color-text-muted);text-align:center;margin-bottom:18px;position:relative;z-index:2}.pricing__divider{border-top:2px dashed var(--color-card-lv3);margin-bottom:24px;position:relative;z-index:2}.pricing__features{list-style:none;display:flex;flex-direction:column;gap:12px;position:relative;z-index:2}.pricing__feature{display:flex;align-items:flex-start;gap:10px;font-size:.85rem;color:var(--color-text-muted);line-height:1.4}.pricing__check{color:var(--color-success);font-size:.8rem;flex-shrink:0;margin-top:1px}.pricing__feature--highlight{color:var(--color-text)}@media (max-width:1024px){.pricing__grid{grid-template-columns:1fr;max-width:480px;margin:0 auto}.pricing__card--recommended{order:-1}}@media (max-width:480px){.pricing__card-body{padding:24px 16px}.pricing__plan-kody--community{width:146px}.pricing__plan-kody--team{width:146px}.pricing__plan-kody--enterprise{width:146px}.pricing__toggle{flex-wrap:wrap;gap:12px}}@media (max-width:768px){.pricing .container{padding-left:16px;padding-right:16px}.pricing__subtitle{margin-top:-20px;margin-bottom:32px;padding:0 6px;font-size:.94rem;line-height:1.55}.pricing__toggle{gap:12px;margin-bottom:40px}.pricing__toggle-label{display:inline-flex;align-items:center;min-height:44px;font-size:.8rem}.pricing__switch{width:60px;height:34px;border-radius:17px}.pricing__switch-knob{width:24px;height:24px}.pricing__save-badge{display:inline-flex;align-items:center;min-height:24px}.pricing__plan-desc{min-height:0}.pricing__price{flex-wrap:wrap;row-gap:2px}.pricing__price-period{margin-left:0}.pricing__cta{min-height:44px;display:inline-flex;align-items:center;justify-content:center}.pricing__trial-note{font-size:.64rem;letter-spacing:.35px}.pricing__feature{font-size:.82rem;line-height:1.5;overflow-wrap:anywhere}}@media (max-width:480px){.pricing .container{padding-left:12px;padding-right:12px}.pricing__subtitle{margin-top:-12px;margin-bottom:26px;font-size:.88rem}.pricing__toggle{gap:10px;margin-bottom:34px}.pricing__toggle-label{font-size:.74rem}.pricing__switch{width:56px;height:32px}.pricing__switch-knob{top:3px;left:3px;width:22px;height:22px}.pricing__save-badge{font-size:.58rem}.pricing__card-body{padding:22px 14px}.pricing__price-value{font-size:1.75rem}.pricing__price-value--dynamic{font-size:2rem}.pricing__price-period{font-size:.68rem;line-height:1.2}.pricing__trial-note{font-size:.62rem;letter-spacing:.3px;margin-bottom:16px}}html body .lp-plans .pricing__grid{grid-template-columns:repeat(2,minmax(0,400px));justify-content:center}html body .lp-plans{padding:96px 0}@media (max-width:768px){html body .lp-plans .pricing__grid{grid-template-columns:minmax(0,1fr)}}</style>


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

<div class="site-bugs" aria-hidden="true">
    <!-- Hero bugs (moved from hero section) -->
    <svg class="site-bug" data-speed="0.3" style="top: 8%; left: 5%; width: 50px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.5" style="top: 15%; right: 8%; width: 35px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    <svg class="site-bug" data-speed="0.2" style="top: 40%; left: 3%; width: 42px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.6" style="top: 550px; right: 4%; width: 55px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    
    <!-- New Hero bugs (Right side - Absolute pixels to ensure Hero placement) -->
    <svg class="site-bug" data-speed="0.4" style="top: 250px; right: 15%; width: 25px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    <!-- Removed bug at top: 700px; right: 10% -->
    
    <!-- New bugs distributed across other sections -->
    <!-- Around Why Different section (~800px - 1400px) -->
    <svg class="site-bug" data-speed="0.4" style="top: 900px; left: 15%; width: 30px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <!-- Removed bugs on the right side here -->
    
    <!-- Around Basics section (~1600px - 2200px) -->
    <svg class="site-bug" data-speed="0.2" style="top: 2200px; left: 8%; width: 45px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
    <svg class="site-bug" data-speed="0.45" style="top: 2500px; right: 5%; width: 32px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>

    <!-- Around Testimonials section (~2800px - 3400px) -->
    <svg class="site-bug" data-speed="0.3" style="top: 3000px; left: 10%; width: 35px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.6" style="top: 3300px; right: 8%; width: 50px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>

    <!-- Around FAQ section (~3600px+) -->
    <svg class="site-bug" data-speed="0.25" style="top: 3800px; left: 4%; width: 30px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape"/></svg>
    <svg class="site-bug" data-speed="0.4" style="top: 4100px; right: 8%; width: 42px;" viewBox="0 0 11 8" shape-rendering="crispEdges"><use href="#bug-shape" transform="translate(11,0) scale(-1,1)"/></svg>
  </div>

  <main class="lp-shp">

  <!-- ========== HERO ========== -->
  <section class="lp-shp__hero lp-shp__hero--scene"><svg class="hero-circuit" viewBox="0 0 1440 780" preserveAspectRatio="xMidYMin meet" aria-hidden="true" focusable="false">
        <path class="hc-trace" d="M84 79 L84 127 L250 138"/><path class="hc-trace" d="M1227 122 L1240 138 L1343 149 L1346 181"/><path class="hc-trace" d="M1382 406 L1382 474 L1309 476"/><path class="hc-trace" d="M60 604 L60 641 L138 653"/><path class="hc-trace" d="M1211 691 L1266 672 L1309 633"/>
        <rect class="hc-sq" x="78" y="66" width="12" height="12" rx="1"/><rect class="hc-sq" x="238" y="155" width="12" height="12" rx="1"/><rect class="hc-sq" x="1376" y="393" width="12" height="12" rx="1"/><rect class="hc-sq" x="54" y="592" width="12" height="12" rx="1"/><rect class="hc-sq" x="1198" y="685" width="12" height="12" rx="1"/>
        <rect class="hc-dot hc-dot--0" x="182" y="135" width="6" height="6"/><rect class="hc-dot hc-dot--1" x="1282" y="146" width="6" height="6"/><rect class="hc-dot hc-dot--2" x="108" y="650" width="6" height="6"/><rect class="hc-dot hc-dot--3" x="1241" y="667" width="6" height="6"/>
        <g class="hc-bubble" transform="translate(1207 97)"><rect width="38" height="24" rx="3"/><path d="M8 24 l4 5 l4 -5"/><rect class="hc-bubble-dot" x="9" y="10" width="4" height="4"/><rect class="hc-bubble-dot" x="17" y="10" width="4" height="4"/><rect class="hc-bubble-dot" x="25" y="10" width="4" height="4"/></g>
      </svg>
    
    <div class="container">
      <div class="lp-shp__hero-grid">
        <div>
          <h1 class="lp-shp__hero-title">Self-hosted<br>AI code review</h1>
          <p class="lp-shp__hero-sub">
            Open source AI code review without vendor lock&#8209;in. Runs on your infrastructure, with the LLM you choose.
          </p>

          <div class="lp-shp__hero-ctas">
            <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--primary" id="lpShHeroInstallBtn">Install on a VM</a>
            <a href="https://github.com/kodustech/kodus-installer" target="_blank" rel="noopener" class="btn btn--outline-light" id="lpShHeroInstallerBtn">Get the installer</a>
          </div><p class="lp-shp__hero-alt">Want to see a review first? <a href="https://app.kodus.io/sign-up" id="lpShHeroTryCloudLink">Try it in the cloud on a test repo</a></p>
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
          <p class="hero__trusted">Trusted by <strong>5,000+ teams</strong> in 66 countries</p></div>
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
                <img loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kodus-mark.webp" alt="" width="28" height="28">
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
<section class="cartridges" id="different">
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
    </section>
<div class="cartridge-details" hidden>
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
            <div style="display: flex; justify-content: center; margin-top: -8px;"><img width="3072" height="3072" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/plaquinha.webp" style="width: 140px; height: auto; image-rendering: pixelated;"></div>
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
              <p class="feat-cell__desc">Write review rules in plain language. Kody also reads the CLAUDE.md, AGENTS.md and .cursorrules your team already keeps.</p>
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
              <p class="feat-cell__desc">Kody pulls requirements from Jira, Linear and Notion, then checks every PR against them, and flags what breaks.</p>
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
              <h3 class="feat-cell__title">Talk to Kody in the PR</h3>
              <p class="feat-cell__desc">Ask why something was flagged, or push back. When you correct Kody, it offers to save that as a memory for the next reviews.</p>
            </div>
            <div class="feat-cell">
              <div class="feat-cell__art">
                <div class="tdebt" aria-hidden="true">
                  <div class="tdebt__card">
                    <div class="tdebt__head"><span class="tdebt__title">Issues</span><span class="tdebt__auto">Auto-create issues <i class="tdebt__switch"></i></span></div>
                    <div class="tdebt__event">PR #322 closed · 3 suggestions not implemented</div>
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
                    <div class="cock__tile cock__tile--2"><span class="cock__k">PR Cycle Time (p75)</span><span class="cock__v">26<small>h</small></span><span class="cock__band cock__band--elite">Elite</span></div>
                    <div class="cock__tile cock__tile--3"><span class="cock__k">Bug Ratio</span><span class="cock__v">12<small>%</small></span><span class="cock__band cock__band--fair">Fair</span></div>
                    <div class="cock__tile cock__tile--4"><span class="cock__k">PR Size (p75)</span><span class="cock__v">214<small>lines</small></span><span class="cock__band cock__band--elite">Elite</span></div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="feat-cell__title">Accelerate your delivery</h3>
              <p class="feat-cell__desc">Deploy frequency, cycle time, bug ratio and PR size in one dashboard, all trending the right way.</p>
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
    </section>

  <!-- ========== DEFINITION (AI Mode snippet) ========== -->
  

  <!-- ========== BOUNDARY ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">What stays on your infrastructure when you <span class="highlight">self-host Kodus</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        When you self-host Kodus, the web app, API, worker, webhooks and databases all run on your servers. The only code that leaves is what you send to your LLM provider, and that provider can be a model running inside your network.
      </p>

      <div class="lp-shp__bnd-grid">
        <div class="lp-shp__bnd-card">
          <img width="1254" height="1254" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-sovereignty.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>Your repos and review data stay on your servers</h3>
          <p>Webhooks arrive on your domain and Kodus reads diffs straight from your Git host. Review history and embeddings are stored in your own Postgres and MongoDB. Kodus, the company, never gets a copy.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img width="2700" height="2700" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-painel.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>You choose where LLM calls go</h3>
          <p>Use OpenAI, Anthropic, Google or Groq with your own API key, or an OpenAI-compatible model you run yourself with vLLM, Ollama, TGI or LiteLLM. Kodus doesn't proxy those calls.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img width="256" height="256" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-taxa.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
          <h3>Logs stay in your stack</h3>
          <p>The containers running on your servers write the logs, so they go wherever you already collect container logs. Retention and access follow your own policy.</p>
        </div>
        <div class="lp-shp__bnd-card">
          <img width="256" height="256" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kody-config.webp" alt="" class="lp-shp__bnd-kody" loading="lazy">
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
        <img class="lp-hw__tower" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/how-it-works-tower.webp" width="1024" height="1536" alt="A pixel-art machine with four floors: trigger, context, review and output, with Kody working on each floor." loading="lazy" decoding="async">
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
              <img width="2700" height="2700" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/openai.webp" alt="" loading="lazy">
              <span>OpenAI</span>
            </label>
            <label for="byok-anthropic">
              <img width="407" height="407" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/anthropic.webp" alt="" loading="lazy">
              <span>Anthropic</span>
            </label>
            <label for="byok-google">
              <img width="437" height="407" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/gemini.webp" alt="" loading="lazy">
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
              <th class="kodus"><span class="lp-shp__cmp-brand"><img width="244" height="84" loading="lazy" src="https://kodus.io/wp-content/themes/kodus-child/assets/img/kodus_dark.webp" class="lp-shp__cmp-logo" alt="Kodus"></span></th>
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
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">All editions</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--no">No</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Team and Enterprise plans</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Enterprise</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">Admin and member roles</span></td>
              <td><span class="lp-shp__mk lp-shp__mk--yes">All editions</span></td>
            </tr>
            <tr>
              <td>Audit logs</td>
              <td class="kodus"><span class="lp-shp__mk lp-shp__mk--yes">Enterprise (activity logs)</span></td>
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
  

  <!-- ========== SECURITY ========== -->
  <section class="lp-shp__section lp-shp__section--tinted">
    <div class="container">
      <h2 class="lp-shp__title">Security controls in <span class="highlight">self-hosted Kodus</span></h2>
      <p class="lp-shp__lede" style="margin-bottom: 36px;">
        The Community edition (AGPLv3) and Enterprise run on the same Docker stack. Enterprise adds SSO, activity logs and Cockpit analytics. The <a href="https://docs.kodus.io/how_to_use/en/security/sso" style="color: var(--color-primary);">security docs</a> and the <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/telemetry" style="color: var(--color-primary);">telemetry policy</a> have the details.
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
          <li><h3>Activity logs</h3><p>Workspace actions are recorded with who did what and when, for your security reviews.</p></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== FAQ (theme classes) ========== -->
  <section class="pricing lp-plans"><div class="container">
<h2 class="section-title">Choose your <span class="highlight">plan</span></h2>
<div class="pricing__grid"><!-- Card 1: Community -->
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

              <a href="https://docs.kodus.io/how_to_deploy/en/deploy_kodus/generic_vm" class="btn btn--primary pricing__cta">Install on a VM</a>

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
          </div><!-- Card 3: Enterprise -->
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

              <a href="https://cal.com/gabrielmalinosqui/30min" target="_blank" rel="noopener" class="btn btn--outline-light pricing__cta">Contact Sales</a>

              <div class="pricing__divider"></div>

              <ul class="pricing__features">
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Self Hosted or Hosted by Kodus</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> SSO</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited PRs using your own API key</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Unlimited users</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use unlimited Kody Rules</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Use unlimited active plugins</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Priority queue for Kody Agents</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Custom Agents</li> <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Linked repositories, for bugs across repos</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Engineering Metrics / Cockpit</li>
                <li class="pricing__feature pricing__feature--highlight"><span class="pricing__check">&#10003;</span> Activity logs</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> SOC 2</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Up to 5 hours month dedicated support with personalized onboarding</li>
                <li class="pricing__feature"><span class="pricing__check">&#10003;</span> Private Discord Channel and Email Support</li>
              </ul>
            </div>
          </div></div></div></section>
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
                <span class="faq__question-text">Which Git platforms does self-hosted Kodus work with?</span>
                <span class="faq__toggle">+</span>
              </button>
              <div class="faq__answer">
                <p>Kodus supports GitHub Enterprise Server, GitLab Self-Managed and Bitbucket Data Center, as well as GitHub, GitLab, Bitbucket and Azure DevOps in the cloud, and Forgejo. GitHub Enterprise Server support is in beta and Bitbucket Data Center in alpha. Self-managed hosts use the same webhook signing and OAuth flows, so if your Git host is internal, the whole review runs inside your network.</p>
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






  <!-- ========== FOOTER ========== -->
  
<?php get_footer('kodus-lp'); ?>
