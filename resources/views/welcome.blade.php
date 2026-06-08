<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ester Aprilianevi — Desain Grafis</title>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<style>
/* ══════════════════════════════════
   ROOT — LUXURY GRADIENT PALETTE
══════════════════════════════════ */
:root{
  --v1:#7c2d9e;--v2:#5b21b6;--v3:#3730a3;
  --rose:#e879a0;--gold:#f0b429;--teal:#0d9488;
  --bg:#08071a;--bg2:#0d0c24;--bg3:#100d2a;
  --glass:rgba(255,255,255,.04);--glass-b:rgba(255,255,255,.08);
  --white:#fff;--off:#e8e0ff;--muted:#9585b8;
  --grd-a:linear-gradient(135deg,#7c2d9e 0%,#5b21b6 40%,#3730a3 100%);
  --grd-b:linear-gradient(135deg,#e879a0 0%,#a855f7 50%,#6366f1 100%);
  --grd-c:linear-gradient(135deg,#f0b429 0%,#e879a0 50%,#a855f7 100%);
  --grd-text:linear-gradient(120deg,#f0b429 0%,#e879a0 40%,#a78bfa 80%);
  --shadow-v:0 20px 80px rgba(124,45,158,.35);
  --r:20px;
}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--white);overflow-x:hidden;-webkit-font-smoothing:antialiased;cursor:none}

/* ─── CUSTOM CURSOR ─── */
#cur{position:fixed;width:10px;height:10px;border-radius:50%;background:var(--grd-b);background:linear-gradient(135deg,#e879a0,#a855f7);pointer-events:none;z-index:9999;transform:translate(-50%,-50%);transition:transform .1s}
#cur2{position:fixed;width:34px;height:34px;border-radius:50%;border:1.5px solid rgba(168,85,247,.5);pointer-events:none;z-index:9998;transform:translate(-50%,-50%);transition:left .12s ease,top .12s ease,width .25s,height .25s,border-color .25s}
#cur2.big{width:52px;height:52px;border-color:#e879a0}

/* ─── GRADIENT BG ORBS ─── */
.orb{position:fixed;border-radius:50%;filter:blur(110px);pointer-events:none;z-index:0;animation:orbDrift 18s ease-in-out infinite}
.orb1{width:700px;height:700px;background:radial-gradient(circle,rgba(91,33,182,.28) 0%,transparent 65%);top:-200px;right:-150px;animation-delay:0s}
.orb2{width:500px;height:500px;background:radial-gradient(circle,rgba(232,121,160,.18) 0%,transparent 65%);bottom:-100px;left:-100px;animation-delay:-6s}
.orb3{width:400px;height:400px;background:radial-gradient(circle,rgba(55,48,163,.22) 0%,transparent 65%);top:40%;left:40%;animation-delay:-12s}
@keyframes orbDrift{0%,100%{transform:translate(0,0) scale(1)}33%{transform:translate(40px,-30px) scale(1.06)}66%{transform:translate(-30px,25px) scale(.96)}}

/* ─── NOISE GRAIN ─── */
body::after{content:'';position:fixed;inset:0;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.75' numOctaves='4'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23n)' opacity='.03'/%3E%3C/svg%3E");pointer-events:none;z-index:0;opacity:.5}

/* ─── GLASS UTILITY ─── */
.glass{background:rgba(255,255,255,.035);backdrop-filter:blur(22px);-webkit-backdrop-filter:blur(22px);border:1px solid rgba(255,255,255,.07)}
.glass-bright{background:rgba(255,255,255,.06);backdrop-filter:blur(28px);-webkit-backdrop-filter:blur(28px);border:1px solid rgba(255,255,255,.12)}

/* ─── GRADIENT TEXT ─── */
.g-text{background:var(--grd-text);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.g-text2{background:var(--grd-b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}

/* ─── FADE UP ─── */
@keyframes fadeUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:none}}

/* ─── REVEAL ─── */
.reveal{opacity:0;transform:translateY(32px);transition:opacity .8s cubic-bezier(.16,1,.3,1),transform .8s cubic-bezier(.16,1,.3,1)}
.reveal.from-l{transform:translateX(-40px)}
.reveal.from-r{transform:translateX(40px)}
.reveal.visible{opacity:1;transform:none}
.d1{transition-delay:.1s}.d2{transition-delay:.2s}.d3{transition-delay:.3s}.d4{transition-delay:.4s}.d5{transition-delay:.5s}

/* ═══════════ NAV ═══════════ */
nav{
  position:fixed;top:18px;left:50%;transform:translateX(-50%);
  display:flex;align-items:center;gap:2px;
  padding:8px 8px 8px 22px;
  border-radius:60px;z-index:900;
  background:rgba(8,7,26,.75);
  backdrop-filter:blur(30px);
  border:1px solid rgba(255,255,255,.09);
  box-shadow:0 8px 48px rgba(91,33,182,.28),inset 0 1px 0 rgba(255,255,255,.07);
  white-space:nowrap;
}
.nav-item{position:relative}
.nav-item>a{
  color:rgba(255,255,255,.55);font-size:.8rem;font-weight:500;
  text-decoration:none;padding:7px 15px;border-radius:24px;
  display:flex;align-items:center;gap:4px;cursor:none;
  transition:color .25s,background .25s;
}
.nav-item>a .arrow{font-size:.58rem;opacity:.6;transition:transform .25s}
.nav-item:hover>a .arrow{transform:rotate(180deg)}
.nav-item>a:hover{color:#fff;background:rgba(255,255,255,.06)}
.nav-item>a.active{color:#fff}
.nav-item>a.active span:first-child{background:var(--grd-b);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.submenu{
  display:none;position:absolute;top:calc(100% + 12px);left:50%;
  transform:translateX(-50%);
  background:rgba(13,12,36,.95);backdrop-filter:blur(30px);
  border:1px solid rgba(255,255,255,.09);border-radius:18px;
  padding:8px;min-width:190px;
  box-shadow:0 20px 60px rgba(0,0,0,.5),0 0 0 1px rgba(168,85,247,.08);
  z-index:1000;
}
.nav-item:hover .submenu{display:block;animation:subIn .2s ease both}
@keyframes subIn{from{opacity:0;transform:translateX(-50%) translateY(-10px)}to{opacity:1;transform:translateX(-50%) translateY(0)}}
.submenu a{display:block;color:rgba(255,255,255,.58);font-size:.78rem;font-weight:500;padding:9px 15px;border-radius:11px;text-decoration:none;cursor:none;transition:background .2s,color .2s}
.submenu a:hover{background:rgba(168,85,247,.15);color:#fff}
.submenu-divider{height:1px;background:rgba(255,255,255,.06);margin:5px 0}
.nav-hire{
  background:var(--grd-b);color:#fff;border:none;
  padding:9px 22px;border-radius:50px;
  font-family:'DM Sans',sans-serif;font-size:.82rem;font-weight:600;cursor:none;
  transition:opacity .2s,transform .2s,box-shadow .2s;
  box-shadow:0 4px 20px rgba(168,85,247,.35);margin-left:6px;
}
.nav-hire:hover{opacity:.88;transform:scale(1.03);box-shadow:0 6px 28px rgba(168,85,247,.5)}

/* ─── TOAST ─── */
.toast{
  position:fixed;bottom:28px;left:50%;
  transform:translateX(-50%) translateY(80px);
  padding:13px 28px;border-radius:50px;font-size:.85rem;
  z-index:9999;opacity:0;transition:opacity .4s,transform .4s;pointer-events:none;
  background:rgba(13,12,36,.95);border:1px solid rgba(168,85,247,.3);
  box-shadow:0 8px 40px rgba(91,33,182,.3);color:#fff;
}
.toast.show{opacity:1;transform:translateX(-50%) translateY(0)}

/* ═══════════ BTN ═══════════ */
.btn-grad{
  background:var(--grd-b);color:#fff;
  padding:13px 30px;border-radius:50px;
  font-size:.88rem;font-weight:600;font-family:inherit;
  text-decoration:none;display:inline-flex;align-items:center;gap:7px;
  border:none;cursor:none;
  box-shadow:0 6px 28px rgba(168,85,247,.4);
  transition:transform .25s,box-shadow .25s,opacity .25s;
  position:relative;overflow:hidden;
}
.btn-grad::before{content:'';position:absolute;inset:0;background:linear-gradient(135deg,#f0b429,#e879a0,#a855f7);opacity:0;transition:opacity .3s}
.btn-grad:hover{transform:translateY(-3px);box-shadow:0 12px 40px rgba(168,85,247,.55)}
.btn-grad:hover::before{opacity:1}
.btn-grad>*{position:relative;z-index:1}
.btn-ghost{
  border:1.5px solid rgba(255,255,255,.15);color:rgba(255,255,255,.8);
  padding:12px 30px;border-radius:50px;
  font-size:.88rem;font-weight:600;font-family:inherit;
  text-decoration:none;display:inline-flex;align-items:center;gap:7px;
  cursor:none;background:rgba(255,255,255,.04);
  backdrop-filter:blur(10px);
  transition:all .25s;
}
.btn-ghost:hover{border-color:rgba(168,85,247,.6);color:#fff;background:rgba(168,85,247,.12);transform:translateY(-3px)}
.snav-btn{
  display:inline-flex;align-items:center;gap:7px;
  border:1px solid rgba(255,255,255,.1);
  color:rgba(255,255,255,.55);padding:9px 20px;border-radius:50px;
  font-size:.8rem;font-weight:500;font-family:inherit;
  cursor:none;background:rgba(255,255,255,.03);
  backdrop-filter:blur(12px);transition:all .25s;text-decoration:none;
}
.snav-btn:hover{border-color:rgba(168,85,247,.45);color:#fff;background:rgba(168,85,247,.1)}
.section-nav{display:flex;justify-content:center;gap:12px;padding-top:52px}

/* ═══════════ SECTION COMMON ═══════════ */
section{position:relative;z-index:2}
.s-label{
  display:inline-flex;align-items:center;gap:8px;
  font-size:.72rem;font-weight:600;letter-spacing:.2em;text-transform:uppercase;
  color:rgba(168,85,247,.9);margin-bottom:14px;
}
.s-label::before{content:'';width:28px;height:1.5px;background:var(--grd-b);border-radius:2px}
.s-title{font-family:'Playfair Display',serif;font-size:clamp(2rem,3.8vw,3.2rem);font-weight:900;line-height:1.1;letter-spacing:-.02em}

/* ═══════════ HERO ═══════════ */
.hero{
  min-height:100vh;display:grid;grid-template-columns:1fr 1fr;
  align-items:center;padding:140px 8% 80px;
  position:relative;overflow:hidden;
}
/* animated grid */
.hero-grid{
  position:absolute;inset:0;
  background-image:linear-gradient(rgba(168,85,247,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(168,85,247,.04) 1px,transparent 1px);
  background-size:60px 60px;
  mask-image:radial-gradient(ellipse 80% 80% at 50% 50%,black 0%,transparent 100%);
  pointer-events:none;
}
.hero-text{z-index:2}
.hero-badge{
  display:inline-flex;align-items:center;gap:9px;
  background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);
  backdrop-filter:blur(14px);padding:8px 18px;border-radius:40px;
  font-size:.8rem;font-weight:500;color:rgba(255,255,255,.75);
  margin-bottom:24px;animation:fadeUp .9s ease both;
}
.hero-badge .dot{width:7px;height:7px;border-radius:50%;background:linear-gradient(135deg,#4ade80,#34d399);animation:pulse 2s infinite}
@keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(1.4)}}
.hero h1{
  font-family:'Playfair Display',serif;
  font-size:clamp(3rem,6vw,5.2rem);font-weight:900;line-height:1.04;
  letter-spacing:-.03em;margin-bottom:20px;
  animation:fadeUp .95s .08s ease both;
}
.hero-sub{font-size:1rem;color:var(--muted);line-height:1.75;max-width:400px;margin-bottom:32px;animation:fadeUp 1s .18s ease both}
.hero-btns{display:flex;gap:14px;flex-wrap:wrap;animation:fadeUp 1s .28s ease both}
.hero-stats{display:flex;gap:0;margin-top:48px;animation:fadeUp 1s .38s ease both}
.hero-stat{
  padding:16px 28px;border-right:1px solid rgba(255,255,255,.07);
  display:flex;flex-direction:column;
}
.hero-stat:first-child{padding-left:0}
.hero-stat:last-child{border-right:none}
.stat-n{font-family:'Playfair Display',serif;font-size:2.1rem;font-weight:900;line-height:1;background:var(--grd-text);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.stat-l{font-size:.75rem;color:var(--muted);margin-top:3px;font-weight:400}
@keyframes fadeUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:none}}

.hero-img{display:flex;justify-content:center;align-items:center;z-index:2;animation:fadeUp 1.1s .12s ease both}
.img-frame{
  position:relative;width:360px;
}
.img-ring{
  position:absolute;inset:-16px;border-radius:50%;
  border:1.5px solid transparent;
  background:linear-gradient(var(--bg),var(--bg)) padding-box,var(--grd-b) border-box;
  animation:spin 14s linear infinite;
}
.img-ring::before{content:'◆';position:absolute;top:0;left:50%;transform:translateX(-50%) translateY(-50%);font-size:.65rem;color:#e879a0}
@keyframes spin{to{transform:rotate(360deg)}}
.img-shape{
  width:360px;height:440px;
  border-radius:55% 45% 48% 52% / 52% 48% 52% 48%;
  overflow:hidden;
  background:linear-gradient(160deg,rgba(91,33,182,.8) 0%,rgba(55,48,163,.8) 100%);
  position:relative;
  box-shadow:0 30px 100px rgba(91,33,182,.45),0 0 0 1px rgba(168,85,247,.2);
  animation:morph 12s ease-in-out infinite;
}
@keyframes morph{
  0%,100%{border-radius:55% 45% 48% 52% / 52% 48% 52% 48%}
  33%{border-radius:45% 55% 55% 45% / 48% 52% 48% 52%}
  66%{border-radius:52% 48% 45% 55% / 55% 45% 52% 48%}
}
.img-shape img{width:100%;height:100%;object-fit:cover;object-position:top center;mix-blend-mode:luminosity;opacity:.85}
.float-card{
  position:absolute;
  background:rgba(13,12,36,.85);backdrop-filter:blur(24px);
  border:1px solid rgba(255,255,255,.1);border-radius:18px;
  padding:12px 16px;display:flex;align-items:center;gap:10px;
  box-shadow:0 10px 40px rgba(0,0,0,.4);
  animation:floatY 5s ease-in-out infinite;
}
.float-card:nth-child(3){animation-delay:-2.5s}
.float-card.fc1{top:20px;right:-30px}
.float-card.fc2{bottom:50px;left:-40px}
@keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-10px)}}
.fc-icon{font-size:1.5rem}
.fc-text strong{display:block;font-size:.85rem;color:#fff;font-weight:600}
.fc-text small{font-size:.72rem;color:var(--muted)}

/* ═══════════ TICKER ═══════════ */
.ticker-wrap{
  overflow:hidden;padding:18px 0;position:relative;z-index:2;
  background:linear-gradient(135deg,rgba(91,33,182,.6) 0%,rgba(55,48,163,.6) 100%);
  border-top:1px solid rgba(255,255,255,.07);
  border-bottom:1px solid rgba(255,255,255,.07);
}
.ticker{display:inline-flex;animation:tickerRun 22s linear infinite;white-space:nowrap}
.ticker:hover{animation-play-state:paused}
.ticker-item{display:inline-flex;align-items:center;gap:14px;font-size:.82rem;font-weight:600;letter-spacing:.07em;color:#fff;opacity:.9;padding:0 30px}
.ticker-gem{font-size:.55rem;color:#f0b429}
@keyframes tickerRun{0%{transform:translateX(0)}100%{transform:translateX(-50%)}}

/* ═══════════ ABOUT ═══════════ */
.about{
  background:var(--bg2);padding:110px 8%;
  display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;
}
.about-img-wrap{position:relative;display:flex;justify-content:center}
.about-img-shape{
  width:320px;height:400px;
  border-radius:55% 45% 48% 52% / 52% 48% 52% 48%;
  overflow:hidden;
  background:linear-gradient(160deg,rgba(232,121,160,.6) 0%,rgba(91,33,182,.6) 100%);
  box-shadow:0 24px 80px rgba(232,121,160,.25);
  animation:morph 14s 2s ease-in-out infinite;
}
.about-img-shape img{width:100%;height:100%;object-fit:cover;object-position:top center;mix-blend-mode:luminosity;opacity:.8}
.about-badge{
  position:absolute;bottom:0;right:10px;
  background:rgba(13,12,36,.9);backdrop-filter:blur(24px);
  border:1px solid rgba(255,255,255,.1);border-radius:20px;
  padding:18px 22px;text-align:center;
  box-shadow:0 10px 40px rgba(0,0,0,.4);
}
.about-badge .b-num{font-family:'Playfair Display',serif;font-size:2.8rem;font-weight:900;background:var(--grd-c);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;line-height:1}
.about-badge .b-lbl{font-size:.72rem;color:var(--muted);margin-top:3px}
.about-text .s-title{margin-bottom:18px}
.about-text p{color:var(--muted);line-height:1.8;font-size:.92rem;margin-bottom:14px}
.skill-chips{display:flex;flex-wrap:wrap;gap:8px;margin:18px 0 28px}
.chip{
  background:rgba(168,85,247,.1);
  border:1px solid rgba(168,85,247,.2);
  color:rgba(232,180,255,.85);
  padding:5px 16px;border-radius:50px;font-size:.78rem;font-weight:500;
  transition:background .2s,border-color .2s;cursor:default;
}
.chip:hover{background:rgba(168,85,247,.25);border-color:rgba(168,85,247,.5)}
.org-list{list-style:none;display:flex;flex-direction:column;gap:10px}
.org-item{
  display:flex;gap:12px;align-items:flex-start;
  padding:14px 16px;border-radius:16px;
  background:rgba(255,255,255,.03);
  border:1px solid rgba(255,255,255,.06);
  transition:border-color .25s,background .25s,transform .25s;
}
.org-item:hover{background:rgba(168,85,247,.08);border-color:rgba(168,85,247,.25);transform:translateX(6px)}
.org-gem{
  width:8px;height:8px;border-radius:50%;flex-shrink:0;margin-top:5px;
  background:var(--grd-b);box-shadow:0 0 8px rgba(168,85,247,.5);
}
.org-item strong{display:block;font-size:.88rem;color:#fff;font-weight:600;margin-bottom:3px}
.org-item small{font-size:.76rem;color:var(--muted)}

/* ═══════════ SERVICES ═══════════ */
.services{background:var(--bg3);padding:110px 8%}
.services-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:56px;flex-wrap:wrap;gap:20px}
.services-header p{color:var(--muted);font-size:.9rem;line-height:1.7;max-width:320px}
.services-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:22px}
.srv-card{
  border-radius:24px;overflow:hidden;
  background:rgba(255,255,255,.03);
  border:1px solid rgba(255,255,255,.07);
  position:relative;cursor:none;
  transition:transform .4s cubic-bezier(.16,1,.3,1),border-color .3s,box-shadow .4s;
}
.srv-card::before{
  content:'';position:absolute;inset:0;
  background:var(--grd-b);opacity:0;transition:opacity .35s;z-index:0;
}
.srv-card:hover{transform:translateY(-10px);border-color:rgba(168,85,247,.4);box-shadow:0 24px 70px rgba(91,33,182,.3)}
.srv-card:hover::before{opacity:.06}
.srv-thumb{height:190px;overflow:hidden;position:relative;background:linear-gradient(135deg,rgba(91,33,182,.4),rgba(55,48,163,.4))}
.srv-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .6s;filter:saturate(.8) brightness(.85)}
.srv-card:hover .srv-thumb img{transform:scale(1.08);filter:saturate(1.1) brightness(.9)}
.srv-thumb-emo{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:3.8rem;background:linear-gradient(135deg,rgba(91,33,182,.5),rgba(168,85,247,.2))}
.srv-body{padding:20px 22px 58px;position:relative;z-index:1}
.srv-body h4{font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:#fff;margin-bottom:5px}
.srv-body p{font-size:.8rem;color:var(--muted);line-height:1.55}
.srv-arrow{
  position:absolute;bottom:20px;right:20px;width:36px;height:36px;
  border-radius:50%;background:rgba(168,85,247,.2);border:1px solid rgba(168,85,247,.3);
  display:flex;align-items:center;justify-content:center;color:rgba(168,85,247,.9);font-size:.95rem;
  transition:background .25s,transform .25s,box-shadow .25s;z-index:1;
}
.srv-card:hover .srv-arrow{background:var(--grd-b);border-color:transparent;color:#fff;transform:rotate(45deg);box-shadow:0 4px 16px rgba(168,85,247,.5)}

/* ═══════════ WHYME ═══════════ */
.whyme{
  padding:110px 8%;
  display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center;
  background:var(--bg2);
}
.why-img-wrap{display:flex;justify-content:center;align-items:center;position:relative}
.why-ring{
  position:absolute;inset:-24px;border-radius:50%;
  background:conic-gradient(from 0deg,transparent 0%,rgba(168,85,247,.4) 25%,transparent 50%,rgba(232,121,160,.3) 75%,transparent 100%);
  animation:spin 10s linear infinite;filter:blur(8px);
}
.why-img-blob{
  width:300px;height:360px;
  border-radius:55% 45% 48% 52% / 52% 48% 52% 48%;
  overflow:hidden;
  background:linear-gradient(160deg,rgba(91,33,182,.7) 0%,rgba(232,121,160,.4) 100%);
  box-shadow:0 24px 80px rgba(91,33,182,.4);
  animation:morph 11s 1s ease-in-out infinite;position:relative;z-index:1;
}
.why-img-blob img{width:100%;height:100%;object-fit:cover;object-position:top center;mix-blend-mode:luminosity;opacity:.85}
.why-text .s-title{margin-bottom:14px}
.why-sub{color:var(--muted);font-size:.92rem;line-height:1.75;margin-bottom:36px}
.count-row{display:flex;align-items:baseline;gap:12px;margin-bottom:36px}
.count-num{font-family:'Playfair Display',serif;font-size:5rem;font-weight:900;line-height:1;background:var(--grd-c);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.count-label{font-size:.88rem;color:var(--muted);line-height:1.45;max-width:110px}

/* ═══════════ PORTFOLIO ═══════════ */
.portfolio{background:var(--bg3);padding:110px 8%}
.port-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:28px;flex-wrap:wrap;gap:16px}
.port-filters{display:flex;gap:8px;flex-wrap:wrap;margin-bottom:36px}
.pf{
  padding:7px 20px;border-radius:50px;
  font-size:.8rem;font-weight:500;font-family:inherit;
  border:1px solid rgba(255,255,255,.1);
  background:rgba(255,255,255,.04);color:rgba(255,255,255,.55);
  cursor:none;transition:all .25s;
}
.pf.active,.pf:hover{background:var(--grd-b);border-color:transparent;color:#fff;box-shadow:0 4px 20px rgba(168,85,247,.3)}
.port-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.port-card{
  border-radius:22px;overflow:hidden;cursor:none;
  background:rgba(255,255,255,.03);
  border:1px solid rgba(255,255,255,.07);
  transition:transform .4s cubic-bezier(.16,1,.3,1),box-shadow .4s,border-color .3s;
  position:relative;
}
.port-card:hover{transform:translateY(-8px) scale(1.01);box-shadow:0 28px 80px rgba(91,33,182,.32);border-color:rgba(168,85,247,.3)}
.pc-img{height:210px;overflow:hidden;position:relative;background:linear-gradient(135deg,rgba(91,33,182,.4),rgba(168,85,247,.2))}
.pc-img img{width:100%;height:100%;object-fit:cover;transition:transform .6s;filter:saturate(.8)}
.port-card:hover .pc-img img{transform:scale(1.08);filter:saturate(1.1)}
.pc-img-emo{width:100%;height:100%;display:flex;align-items:center;justify-content:center;font-size:4rem}
.pc-overlay{
  position:absolute;inset:0;background:linear-gradient(135deg,rgba(91,33,182,.7),rgba(232,121,160,.5));
  display:flex;align-items:center;justify-content:center;
  font-size:1.8rem;opacity:0;transition:opacity .3s;
  backdrop-filter:blur(4px);
}
.port-card:hover .pc-overlay{opacity:1}
.pc-body{padding:18px 20px 22px}
.pc-tag{display:inline-block;font-size:.7rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;background:rgba(168,85,247,.15);color:rgba(200,160,255,.9);border-radius:50px;padding:3px 12px;margin-bottom:8px}
.pc-body h4{font-family:'Playfair Display',serif;font-size:.95rem;font-weight:700;color:#fff;margin-bottom:5px}
.pc-body p{font-size:.78rem;color:var(--muted);line-height:1.5}
.pc-link{display:inline-flex;align-items:center;gap:5px;font-size:.78rem;font-weight:600;color:rgba(168,85,247,.9);margin-top:10px;text-decoration:none;transition:gap .2s,color .2s}
.pc-link:hover{gap:9px;color:#e879a0}

/* ═══════════ CONTACT ═══════════ */
.contact{background:var(--bg);padding:110px 8%}
.contact-card{
  max-width:860px;margin:0 auto;
  background:rgba(255,255,255,.03);backdrop-filter:blur(28px);
  border:1px solid rgba(255,255,255,.08);border-radius:36px;
  padding:72px;text-align:center;position:relative;overflow:hidden;
  box-shadow:0 40px 120px rgba(91,33,182,.2);
}
.contact-card::before{
  content:'';position:absolute;
  width:600px;height:600px;border-radius:50%;
  background:radial-gradient(circle,rgba(91,33,182,.2) 0%,transparent 65%);
  top:-200px;left:50%;transform:translateX(-50%);pointer-events:none;
}
.contact-card::after{
  content:'';position:absolute;inset:0;border-radius:36px;
  background:linear-gradient(135deg,rgba(168,85,247,.04) 0%,rgba(232,121,160,.03) 100%);
  pointer-events:none;
}
.contact-card>*{position:relative;z-index:1}
.contact-card h2{font-family:'Playfair Display',serif;font-size:clamp(2rem,4vw,3.4rem);font-weight:900;letter-spacing:-.03em;margin-bottom:12px}
.contact-card p{color:var(--muted);margin-bottom:36px;font-size:.95rem}
.email-row{display:flex;gap:10px;max-width:480px;margin:0 auto 36px}
.email-row input{
  flex:1;background:rgba(255,255,255,.06);
  border:1px solid rgba(255,255,255,.1);border-radius:50px;
  padding:14px 22px;color:#fff;font-family:inherit;font-size:.88rem;outline:none;
  transition:border-color .2s,background .2s;
  backdrop-filter:blur(10px);
}
.email-row input::placeholder{color:var(--muted)}
.email-row input:focus{border-color:rgba(168,85,247,.5);background:rgba(255,255,255,.08)}
.email-row button{
  background:var(--grd-b);color:#fff;border:none;
  padding:14px 26px;border-radius:50px;
  font-family:inherit;font-size:.88rem;font-weight:600;cursor:none;
  transition:opacity .2s,transform .2s,box-shadow .2s;
  box-shadow:0 4px 20px rgba(168,85,247,.4);
}
.email-row button:hover{opacity:.88;transform:scale(1.04);box-shadow:0 8px 32px rgba(168,85,247,.55)}
.contact-links{display:flex;justify-content:center;gap:24px;flex-wrap:wrap}
.clink{display:flex;align-items:center;gap:8px;color:var(--muted);text-decoration:none;font-size:.88rem;transition:color .2s}
.clink:hover{color:#e879a0}
.clink-icon{
  width:34px;height:34px;border-radius:50%;
  background:rgba(168,85,247,.1);border:1px solid rgba(168,85,247,.2);
  display:flex;align-items:center;justify-content:center;font-size:.9rem;
  transition:background .2s;
}
.clink:hover .clink-icon{background:rgba(232,121,160,.2);border-color:rgba(232,121,160,.4)}
.contact-stats{display:flex;justify-content:center;gap:48px;flex-wrap:wrap;margin-top:36px;padding-top:36px;border-top:1px solid rgba(255,255,255,.07)}
.cstat{text-align:center}
.cstat-v{font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:900;background:var(--grd-c);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.cstat-l{font-size:.73rem;color:var(--muted);margin-top:2px}

/* ═══════════ FOOTER ═══════════ */
footer{background:#050414;padding:72px 8% 36px;position:relative;z-index:2}
footer::before{
  content:'';position:absolute;top:0;left:0;right:0;height:1px;
  background:linear-gradient(90deg,transparent,rgba(168,85,247,.4),rgba(232,121,160,.3),transparent);
}
.footer-top{display:grid;grid-template-columns:1.6fr 1fr 1fr 1fr;gap:48px;margin-bottom:52px;padding-bottom:52px;border-bottom:1px solid rgba(255,255,255,.06)}
.f-logo{font-family:'Playfair Display',serif;font-size:1.9rem;font-weight:900;background:var(--grd-text);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;margin-bottom:14px}
.f-brand p{color:rgba(255,255,255,.38);font-size:.82rem;line-height:1.7;max-width:260px;margin-bottom:20px}
.f-contacts{display:flex;flex-direction:column;gap:8px}
.f-contacts a{display:flex;align-items:center;gap:8px;color:rgba(255,255,255,.4);font-size:.82rem;text-decoration:none;transition:color .2s}
.f-contacts a:hover{color:rgba(168,85,247,.9)}
.f-col h4{font-size:.72rem;font-weight:700;text-transform:uppercase;letter-spacing:.15em;color:rgba(255,255,255,.3);margin-bottom:18px}
.f-col ul{list-style:none;display:flex;flex-direction:column;gap:10px}
.f-col ul a{color:rgba(255,255,255,.45);font-size:.85rem;text-decoration:none;cursor:none;transition:color .2s,padding-left .2s;display:block}
.f-col ul a:hover{color:#fff;padding-left:5px}
.f-nl input{
  width:100%;background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.08);border-radius:12px;
  padding:11px 16px;color:#fff;font-family:inherit;font-size:.82rem;
  outline:none;margin-bottom:10px;transition:border-color .2s;
}
.f-nl input:focus{border-color:rgba(168,85,247,.4)}
.f-nl input::placeholder{color:rgba(255,255,255,.25)}
.f-nl button{
  width:100%;background:var(--grd-b);color:#fff;border:none;
  border-radius:12px;padding:11px;font-family:inherit;font-size:.82rem;
  font-weight:600;cursor:none;transition:opacity .2s;
}
.f-nl button:hover{opacity:.85}
.footer-bottom{display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:16px}
.footer-bottom p{color:rgba(255,255,255,.25);font-size:.78rem}
.social-row{display:flex;gap:10px}
.social-row a{
  width:38px;height:38px;border-radius:50%;
  background:rgba(255,255,255,.05);
  border:1px solid rgba(255,255,255,.08);
  display:flex;align-items:center;justify-content:center;
  color:rgba(255,255,255,.5);font-size:1.1rem;text-decoration:none;
  transition:transform .25s,background .25s,border-color .25s,color .25s;
}
.social-row a:hover{transform:translateY(-4px)}
.social-row a.ig:hover{background:linear-gradient(135deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);border-color:transparent;color:#fff}
.social-row a.tt:hover{background:#010101;border-color:#69C9D0;color:#69C9D0}
.social-row a.yt:hover{background:#FF0000;border-color:transparent;color:#fff}
.social-row a.fb:hover{background:#1877F2;border-color:transparent;color:#fff}
.social-row a.li:hover{background:#0077B5;border-color:transparent;color:#fff}
.f-hire{
  background:var(--grd-b);color:#fff;border:none;
  padding:10px 24px;border-radius:50px;font-family:inherit;
  font-size:.82rem;font-weight:600;cursor:none;
  transition:opacity .2s,box-shadow .2s;
  box-shadow:0 4px 20px rgba(168,85,247,.3);
}
.f-hire:hover{opacity:.85;box-shadow:0 8px 30px rgba(168,85,247,.45)}

/* ═══════════ RESPONSIVE ═══════════ */
@media(max-width:960px){
  .hero,.about,.whyme{grid-template-columns:1fr;text-align:center}
  .hero-sub{margin:18px auto 32px}
  .hero-btns{justify-content:center}
  .hero-stats{justify-content:center}
  .hero-img{margin-top:52px}
  .float-card{display:none}
  .about-img-wrap,.why-img-wrap{margin-bottom:32px}
  .services-grid,.port-grid{grid-template-columns:repeat(2,1fr)}
  .footer-top{grid-template-columns:1fr 1fr}
  .contact-card{padding:48px 32px}
}
@media(max-width:600px){
  nav{top:10px;padding:6px 6px 6px 14px}
  .nav-item>a{font-size:.7rem;padding:5px 9px}
  .services-grid,.port-grid{grid-template-columns:1fr}
  .footer-top{grid-template-columns:1fr}
  .email-row{flex-direction:column}
  .email-row button{border-radius:50px}
  .contact-stats{gap:24px}
  .footer-bottom{flex-direction:column;align-items:flex-start;gap:20px}
}
</style>
</head>
<body>

<!-- AMBIENT ORBS -->
<div class="orb orb1"></div>
<div class="orb orb2"></div>
<div class="orb orb3"></div>

<!-- CURSOR -->
<div id="cur"></div>
<div id="cur2"></div>

<!-- TOAST -->
<div class="toast" id="toast"></div>

<!-- ═══════════════════════════════
     NAVBAR
═══════════════════════════════ -->
<nav id="nav">
  <div class="nav-item">
    <a class="active" onclick="goTo('home',this)"><span>Home</span></a>
  </div>
  <div class="nav-item">
    <a onclick="goTo('about',this)"><span>About</span> <span class="arrow">▾</span></a>
    <div class="submenu">
      <a onclick="goTo('about',null)">Tentang Saya</a>
      <a onclick="goTo('about',null);setTimeout(()=>document.querySelector('.skill-chips').scrollIntoView({behavior:'smooth'}),500)">Skills & Tools</a>
      <a onclick="goTo('about',null)">Pengalaman Org</a>
    </div>
  </div>
  <div class="nav-item">
    <a onclick="goTo('services',this)"><span>Service</span> <span class="arrow">▾</span></a>
    <div class="submenu">
      <a onclick="goTo('services',null)">Feed Instagram</a>
      <a onclick="goTo('services',null)">Poster A3/A4</a>
      <a onclick="goTo('services',null)">Model Photoshoot</a>
      <div class="submenu-divider"></div>
      <a onclick="goTo('services',null)">Konten Kreator</a>
      <a onclick="goTo('services',null)">Desain Stiker</a>
      <a onclick="goTo('services',null)">Majalah Digital</a>
    </div>
  </div>
  <div class="nav-item">
    <a onclick="goTo('resume',this)"><span>Resume</span> <span class="arrow">▾</span></a>
    <div class="submenu">
      <a onclick="goTo('resume',null)">Pengalaman Org</a>
      <a onclick="goTo('whyme',null)">Kenapa Saya?</a>
    </div>
  </div>
  <div class="nav-item">
    <a onclick="goTo('portfolio',this)"><span>Portfolio</span> <span class="arrow">▾</span></a>
    <div class="submenu">
      <a onclick="filterPort('All')">Semua Karya</a>
      <a onclick="filterPort('Design')">Desain</a>
      <a onclick="filterPort('Photo')">Foto</a>
      <a onclick="filterPort('Art')">Art</a>
    </div>
  </div>
  <div class="nav-item">
    <a onclick="goTo('contact',this)"><span>Contact</span></a>
  </div>
  <button class="nav-hire" onclick="goTo('contact',null)">Hire me ✦</button>
</nav>

<!-- ═══════════ HERO ═══════════ -->
<section id="home" class="hero">
  <div class="hero-grid"></div>
  <div class="hero-text">
    <div class="hero-badge">
      <span class="dot"></span>
      Available for projects
    </div>
    <h1>Saya <span class="g-text">Ester<br>Aprilianevi</span>,<br><em>Desain Grafis</em></h1>
    <p class="hero-sub">Saya seorang desain grafis, melakukan beberapa project desain dan mengelola berbagai sosial media.</p>
    <div class="hero-btns">
      <a onclick="goTo('portfolio',null)" class="btn-grad"><span>Portfolio</span><span>↗</span></a>
      <a onclick="goTo('contact',null)" class="btn-ghost">Hire me →</a>
    </div>
    <div class="hero-stats">
      <div class="hero-stat">
        <div class="stat-n" id="sn1">4</div>
        <div class="stat-l">Tahun Pengalaman</div>
      </div>
      <div class="hero-stat">
        <div class="stat-n" id="sn2">30+</div>
        <div class="stat-l">Projek Selesai</div>
      </div>
      <div class="hero-stat">
        <div class="stat-n">4.9★</div>
        <div class="stat-l">Average Rating</div>
      </div>
    </div>
  </div>
  <div class="hero-img">
    <div class="img-frame">
      <div class="img-ring"></div>
      <div class="img-shape">
        <!-- ▼ GANTI src FOTO HERO ▼ -->
        <<img src="img/esta.png" alt="Ester Aprilianevi">
      </div>
      <div class="float-card fc1">
        <div class="fc-icon">🎨</div>
        <div class="fc-text"><strong>Desain Grafis</strong><small>4+ Tahun Exp</small></div>
      </div>
      <div class="float-card fc2">
        <div class="fc-icon">⭐</div>
        <div class="fc-text"><strong>4.9 / 5 Rating</strong><small>25+ Awards Won</small></div>
      </div>
    </div>
  </div>
  <div style="position:absolute;bottom:36px;left:50%;transform:translateX(-50%);z-index:3">
    <div class="section-nav" style="padding-top:0">
      <button class="snav-btn" onclick="goTo('about',null)">Tentang Saya →</button>
      <button class="snav-btn" onclick="goTo('services',null)">Lihat Services →</button>
    </div>
  </div>
</section>

<!-- TICKER -->
<div class="ticker-wrap">
  <div class="ticker">
    <span class="ticker-item"><span class="ticker-gem">◆</span>Feed Instagram</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Poster A3/A4</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Model Photoshoot</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Konten Kreator</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Desain Stiker</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Majalah Digital</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>UX Design</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>App Design</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Branding</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Feed Instagram</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Poster A3/A4</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Model Photoshoot</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Konten Kreator</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Desain Stiker</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Majalah Digital</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>UX Design</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>App Design</span>
    <span class="ticker-item"><span class="ticker-gem">◆</span>Branding</span>
  </div>
</div>

<!-- ═══════════ ABOUT ═══════════ -->
<section id="about" class="about">
  <div class="about-img-wrap reveal from-l">
    <div class="about-img-shape">
      <!-- ▼ GANTI src FOTO ABOUT ▼ -->
      <<img src="img/estaaa.png" alt="Ester Aprilianevi"> 
    </div>
    <div class="about-badge">
      <div class="b-num">4+</div>
      <div class="b-lbl">Tahun Pengalaman</div>
    </div>
  </div>
  <div class="about-text reveal from-r">
    <div class="s-label">Tentang Saya</div>
    <h2 class="s-title">Siapa <span class="g-text">Saya?</span></h2>
    <br>
    <p>Saya adalah <strong style="color:#fff">Ester Aprilianevi</strong>, mahasiswa Teknologi Multimedia Broadcasting yang passionate terhadap desain grafis, branding visual, dan manajemen sosial media.</p>
    <p>Dengan pengalaman lebih dari <strong style="color:#fff">4 tahun</strong>, saya telah menyelesaikan lebih dari <strong style="color:#fff">30+ proyek</strong> — dari identitas brand, konten media sosial, majalah digital, hingga model photoshoot.</p>
    <div class="skill-chips">
      <span class="chip">Adobe Photoshop</span>
      <span class="chip">Illustrator</span>
      <span class="chip">Figma</span>
      <span class="chip">Canva Pro</span>
      <span class="chip">Premiere Pro</span>
      <span class="chip">Social Media</span>
      <span class="chip">Branding</span>
      <span class="chip">UI/UX</span>
    </div>
    <ul class="org-list" id="resume">
      <li class="org-item">
        <div class="org-gem"></div>
        <div>
          <strong>Organisasi Siswa Intra Sekolah</strong>
          <small>Agustus 2022 – Agustus 2023 · Koordinator SekBid 5</small>
        </div>
      </li>
      <li class="org-item">
        <div class="org-gem"></div>
        <div>
          <strong>Insan GenRe (Generasi Remaja) Ponorogo</strong>
          <small>Juli 2023 – Agustus 2024 · Media Informasi & Instagram</small>
        </div>
      </li>
      <li class="org-item">
        <div class="org-gem"></div>
        <div>
          <strong>Eepis Network Team</strong>
          <small>Agustus 2024 – Sekarang · PIC Desain Grafis</small>
        </div>
      </li>
    </ul>
  </div>
  <div style="grid-column:1/-1">
    <div class="section-nav">
      <button class="snav-btn" onclick="goTo('home',null)">← Home</button>
      <button class="snav-btn" onclick="goTo('services',null)">Services →</button>
    </div>
  </div>
</section>

<!-- ═══════════ SERVICES ═══════════ -->
<section id="services" class="services">
  <div class="services-header reveal">
    <div>
      <div class="s-label">What I Offer</div>
      <h2 class="s-title">My <span class="g-text2">Services</span></h2>
    </div>
    <p>Saya mahasiswa Teknologi Multimedia Broadcasting yang tertarik pada desain visual, branding, dan sosial media.</p>
  </div>
  <div class="services-grid">
    <div class="srv-card reveal d1">
      <div class="srv-thumb"><img src="img/yey.png" alt="Feed Instagram"></div>
      <div class="srv-body"><h4>Feed Instagram</h4><p>Desain feed estetis, konsisten, dan menarik untuk meningkatkan engagement.</p></div>
      <div class="srv-arrow">↗</div>
    </div>
    <div class="srv-card reveal d2">
      <div class="srv-thumb"><img src="img/A3 POSTER.png" alt="Poster A3/A4"></div>
      <div class="srv-body"><h4>Poster A3/A4</h4><p>Desain poster cetak berkualitas tinggi untuk event dan promosi.</p></div>
      <div class="srv-arrow">↗</div>
    </div>
    <div class="srv-card reveal d3">
      <div class="srv-thumb"><img src="img/model.jpg" alt="Model Photoshoot"></div>
      <div class="srv-body"><h4>Model Photoshoot</h4><p>Konsep dan arahan kreatif untuk pemotretan produk & personal branding.</p></div>
      <div class="srv-arrow">↗</div>
    </div>
    <div class="srv-card reveal d2">
      <div class="srv-thumb"><img src="img/konten.png" alt="Konten Kreator"></div>
      <div class="srv-body"><h4>Konten Kreator</h4><p>Pembuatan konten kreatif yang engaging untuk berbagai platform.</p></div>
      <div class="srv-arrow">↗</div>
    </div>
    <div class="srv-card reveal d3">
      <div class="srv-thumb"><img src="img/stiker.png" alt="Desain Stiker"></div>
      <div class="srv-body"><h4>Desain Stiker</h4><p>Stiker unik dan ekspresif untuk WA, Telegram, dan merchandise.</p></div>
      <div class="srv-arrow">↗</div>
    </div>
    <div class="srv-card reveal d4">
      <div class="srv-thumb"><img src="img/majalah.png" alt="Majalah Digital"></div>
      <div class="srv-body"><h4>Majalah Digital</h4><p>Layout majalah digital modern dan profesional untuk semua perangkat.</p></div>
      <div class="srv-arrow">↗</div>
    </div>
  </div>
  <div class="section-nav">
    <button class="snav-btn" onclick="goTo('about',null)">← About</button>
    <button class="snav-btn" onclick="goTo('whyme',null)">Why Me →</button>
  </div>
</section>

<!-- ═══════════ WHY ME ═══════════ -->
<section id="whyme" class="whyme">
  <div class="why-img-wrap reveal from-l">
    <div class="why-ring"></div>
    <div class="why-img-blob">
      <!-- ▼ GANTI src FOTO WHY ME ▼ -->
      <<img src="img/IMG-20250415-WA0029.jpg"> alt="Why Choose Me">
    </div>
  </div>
  <div class="why-text reveal from-r">
    <div class="s-label">Kenapa Saya</div>
    <h2 class="s-title">Kenapa Pilih <span class="g-text">Saya?</span></h2>
    <br>
    <p class="why-sub">Banyak hal yang telah saya kerjakan dalam 4 tahun terakhir ini. Komitmen terhadap kualitas, kreativitas, dan ketepatan waktu.</p>
    <div class="count-row">
      <span class="count-num" id="countNum">0</span>
      <span class="count-label">Projek telah dikerjakan</span>
    </div>
    <a onclick="goTo('contact',null)" class="btn-grad"><span>Hire me</span><span>✦</span></a>
  </div>
</section>

<!-- ═══════════ PORTFOLIO ═══════════ -->
<section id="portfolio" class="portfolio">
  <div class="port-header reveal">
    <div>
      <div class="s-label">My Work</div>
      <h2 class="s-title">Lets have a look at my <span class="g-text2">Portfolio</span></h2>
    </div>
    <!-- ▼ GANTI href LINK GOOGLE DRIVE ▼ -->
    <a href="https://drive.google.com/file/d/1245FQdXZnu90StMiO5aCQ7z4749lEzV8/view?usp=drive_link" target="_blank" class="btn-grad" style="font-size:.82rem;padding:11px 24px"><span>See All</span><span>↗</span></a>
  </div>
  <div class="port-filters reveal d1">
    <button class="pf active" onclick="filterPort('All')">All</button>
    <button class="pf" onclick="filterPort('Design')">🖌 Design</button>
    <button class="pf" onclick="filterPort('Photo')">📷 Photo</button>
    <button class="pf" onclick="filterPort('Art')">✦ Art</button>
  </div>
  <div class="port-grid" id="portGrid">
    <div class="port-card reveal d1" data-cat="Design">
      <div class="pc-img"><img src="img/RPL SPE.png" alt="Poster"><div class="pc-overlay">👁️ View</div></div>
      <div class="pc-body"><span class="pc-tag">Design</span><h4>Poster Event Kampus</h4><p>Desain poster untuk event tahunan dengan bold typography.</p><a href="https://drive.google.com/drive/folders/GANTI_ID" target="_blank" class="pc-link">Lihat detail →</a></div>
    </div>
    <div class="port-card reveal d2" data-cat="Photo">
      <div class="pc-img"><img src="img/modell.png" alt="Photo"><div class="pc-overlay">👁️ View</div></div>
      <div class="pc-body"><span class="pc-tag">Photo</span><h4>Model Photoshoot Vol.1</h4><p>Sesi foto model urban fashion, Surabaya.</p><a href="https://www.instagram.com/aprilia_esterr/" target="_blank" class="pc-link">Lihat detail →</a></div>
    </div>
    <div class="port-card reveal d3" data-cat="Design">
      <div class="pc-img"><img src="img/feed.png" alt="Instagram"><div class="pc-overlay">👁️ View</div></div>
      <div class="pc-body"><span class="pc-tag">Design</span><h4>Instagram Feed Branding</h4><p>Feed konsisten untuk brand lokal, palet purple & earth tone.</p><a href="https://www.instagram.com/genreponorogo/" target="_blank" class="pc-link">Lihat detail →</a></div>
    </div>
    <div class="port-card reveal d2" data-cat="Art">
      <div class="pc-img"><img src="img/majalah.png" alt="Majalah"><div class="pc-overlay">👁️ View</div></div>
      <div class="pc-body"><span class="pc-tag">Art</span><h4>Majalah Digital Edisi 1</h4><p>Layout editorial 24 halaman untuk komunitas pemuda Ponorogo.</p><a href="https://l.instagram.com/?u=https%3A%2F%2Fonline.fliphtml5.com%2Fvsway%2Fqxyb%2F%3Futm_source%3Dig%26utm_medium%3Dsocial%26utm_content%3Dlink_in_bio%26fbclid%3DPAZXh0bgNhZW0CMTEAc3J0YwZhcHBfaWQPOTM2NjE5NzQzMzkyNDU5AAGn_8VHz9pKKVM03Ikop2OogNnyvwv0awT7PXzR9mFitdX9YGvc193uNxxsYV0_aem_pprOoYsSjhsy_SMm35p1Lg&e=AUChEVA7-rR4dTtP5Gh7t-riAgSaxHcoHUzBnwfWxAuOyIPLPCKxNGcKlnvmuxWu-QeCvMccIMgnFtBOkkSwf6dtc8hgAYpqW7F0fDDmkQwKTlF2zYAw0hpsd_PjoQu8CUAeMd8" target="_blank" class="pc-link">Lihat detail →</a></div>
    </div>
    <div class="port-card reveal d3" data-cat="Design">
      <div class="pc-img"><img src="img/stiker.png" alt="Stiker"><div class="pc-overlay">👁️ View</div></div>
      <div class="pc-body"><span class="pc-tag">Design</span><h4>Stiker Pack</h4><p>Set 12 stiker ilustrasi original untuk keperluan OSIS.</p><a href="https://drive.google.com/drive/folders/1CH_qlFcxhCKAP8YeShDFylmsp4P_bQCo?usp=drive_link" target="_blank" class="pc-link">Lihat detail →</a></div>
    </div>
    <div class="port-card reveal d4" data-cat="Photo">
      <div class="pc-img"><img src="img/konten.png" alt="Konten"><div class="pc-overlay">👁️ View</div></div>
      <div class="pc-body"><span class="pc-tag">Photo</span><h4>Konten Kreator Wedding</h4><p>Produksi konten foto & video.</p><a href="https://www.instagram.com/reel/DWb1GvNkueV/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==D" target="_blank" class="pc-link">Lihat detail →</a></div>
    </div>
  </div>
  <div class="section-nav">
    <button class="snav-btn" onclick="goTo('whyme',null)">← Why Me</button>
    <button class="snav-btn" onclick="goTo('contact',null)">Contact →</button>
  </div>
</section>

<!-- ═══════════ CONTACT ═══════════ -->
<section id="contact" class="contact">
  <div class="contact-card reveal">
    <div class="s-label" style="justify-content:center">Let's Talk</div>
    <h2>Punya projek yang menarik?<br><span class="g-text">Mari berdiskusi!</span></h2>
    <p>Hubungi saya dan kita wujudkan ide kreatif bersama 🚀</p>
    <div class="email-row">
      <input type="email" id="emailInput" placeholder="Enter Email Address">
      <button onclick="sendEmail()">Send →</button>
    </div>
    <div class="contact-links">
      <a href="tel:+6281337604497" class="clink"><div class="clink-icon">📞</div>(62) 81337604497</a>
      <a href="mailto:apriliaester534@gmail.com" class="clink"><div class="clink-icon">✉️</div>apriliaester534@gmail.com</a>
    </div>
    <div class="contact-stats">
      <div class="cstat"><div class="cstat-v">★ 4.9/5</div><div class="cstat-l">Average Ratings</div></div>
      <div class="cstat"><div class="cstat-v">25+</div><div class="cstat-l">Winning Awards</div></div>
      <div class="cstat"><div class="cstat-v">30+</div><div class="cstat-l">Projek Selesai</div></div>
      <div class="cstat"><div class="cstat-v">✅</div><div class="cstat-l">Certified Designer</div></div>
    </div>
  </div>
  <div class="section-nav">
    <button class="snav-btn" onclick="goTo('portfolio',null)">← Portfolio</button>
    <button class="snav-btn" onclick="goTo('home',null)">↑ Kembali ke Atas</button>
  </div>
</section>

<!-- ═══════════ FOOTER ═══════════ -->
<footer>
  <div class="footer-top">
    <div class="f-brand reveal">
      <div class="f-logo">Esta.</div>
      <p>Mahasiswa Teknologi Multimedia dan Broadcasting yang tertarik pada desain visual, branding, dan pengembangan website modern.</p>
      <div class="f-contacts">
        <a href="tel:+6281337604497">📞 (62) 81337604497</a>
        <a href="mailto:apriliaester534@gmail.com">✉️ apriliaester534@gmail.com</a>
      </div>
    </div>
    <div class="f-col reveal d1">
      <h4>Navigation</h4>
      <ul>
        <li><a onclick="goTo('home',null)">Home</a></li>
        <li><a onclick="goTo('about',null)">About Us</a></li>
        <li><a onclick="goTo('services',null)">Service</a></li>
        <li><a onclick="goTo('resume',null)">Resume</a></li>
        <li><a onclick="goTo('portfolio',null)">Portfolio</a></li>
        <li><a onclick="goTo('contact',null)">Contact</a></li>
      </ul>
    </div>
    <div class="f-col reveal d2">
      <h4>Contact</h4>
      <ul>
        <li><a href="tel:+6281337604497">(62) 81337604497</a></li>
        <li><a href="mailto:apriliaester534@gmail.com">apriliaester534@gmail.com</a></li>
      </ul>
    </div>
    <div class="f-col reveal d3">
      <h4>Newsletter</h4>
      <div class="f-nl">
        <input type="email" id="nlEmail" placeholder="Email Address">
        <button onclick="subscribeNl()">Subscribe</button>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p>Copyright © 2026 Esta. All Rights Reserved.</p>
    <div class="social-row">
      <!-- ▼ GANTI href LINK SOSMED ▼ -->
      <a href="https://instagram.com" target="_blank" class="ig" title="Instagram"><i class='bx bxl-instagram'></i></a>
      <a href="https://tiktok.com" target="_blank" class="tt" title="TikTok"><i class='bx bxl-tiktok'></i></a>
      <a href="https://youtube.com" target="_blank" class="yt" title="YouTube"><i class='bx bxl-youtube'></i></a>
      <a href="https://facebook.com" target="_blank" class="fb" title="Facebook"><i class='bx bxl-facebook'></i></a>
      <a href="https://linkedin.com" target="_blank" class="li" title="LinkedIn"><i class='bx bxl-linkedin'></i></a>
    </div>
    <button class="f-hire" onclick="goTo('contact',null)">Hire me ✦</button>
  </div>
</footer>

<script>
/* ─── CURSOR ─── */
var c=document.getElementById('cur'),c2=document.getElementById('cur2');
var mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove',function(e){
  mx=e.clientX;my=e.clientY;
  c.style.left=mx+'px';c.style.top=my+'px';
});
(function loop(){
  rx+=(mx-rx)*.13;ry+=(my-ry)*.13;
  c2.style.left=rx+'px';c2.style.top=ry+'px';
  requestAnimationFrame(loop);
})();
document.querySelectorAll('a,button,.srv-card,.port-card,.chip,.pf,.snav-btn,.social-row a,.org-item').forEach(function(el){
  el.addEventListener('mouseenter',function(){c2.classList.add('big')});
  el.addEventListener('mouseleave',function(){c2.classList.remove('big')});
});

/* ─── TOAST ─── */
function showToast(m){var t=document.getElementById('toast');t.textContent=m;t.classList.add('show');setTimeout(function(){t.classList.remove('show')},3200)}

/* ─── SECTION ORDER ─── */
var order=['home','about','services','whyme','portfolio','contact'];

/* ─── GOTO ─── */
function goTo(id,el){
  var s=document.getElementById(id);
  if(s) s.scrollIntoView({behavior:'smooth',block:'start'});
  if(el) setActive(el);
}
function setActive(el){
  document.querySelectorAll('.nav-item>a').forEach(function(a){a.classList.remove('active')});
  if(el) el.classList.add('active');
}

/* ─── NAV HIGHLIGHT ON SCROLL ─── */
window.addEventListener('scroll',function(){
  var cur='';
  order.forEach(function(id){
    var s=document.getElementById(id);
    if(s&&window.scrollY>=s.offsetTop-180) cur=id;
  });
  document.querySelectorAll('.nav-item>a').forEach(function(a,i){
    a.classList.remove('active');
    if(order[i]===cur) a.classList.add('active');
  });
});

/* ─── REVEAL ─── */
var ro=new IntersectionObserver(function(entries){
  entries.forEach(function(e){
    if(e.isIntersecting){e.target.classList.add('visible');ro.unobserve(e.target)}
  });
},{threshold:0.05});
document.querySelectorAll('.reveal').forEach(function(el){ro.observe(el)});
// Fallback: force all reveals visible after 600ms if observer didn't fire
setTimeout(function(){
  document.querySelectorAll('.reveal').forEach(function(el){el.classList.add('visible')});
},600);

/* ─── COUNTER ─── */
var counted=false;
var co=new IntersectionObserver(function(entries){
  entries.forEach(function(e){
    if(e.isIntersecting&&!counted){
      counted=true;
      var el=document.getElementById('countNum');
      var t=0;
      var iv=setInterval(function(){
        t++;el.textContent=t+'+';
        if(t>=30) clearInterval(iv);
      },55);
    }
  });
},{threshold:0.4});
var cn=document.getElementById('countNum');
if(cn) co.observe(cn);

/* ─── PORTFOLIO FILTER ─── */
function filterPort(cat){
  document.querySelectorAll('.pf').forEach(function(b){b.classList.remove('active')});
  document.querySelectorAll('.pf').forEach(function(b){
    var t=b.textContent.trim();
    if((cat==='All'&&t==='All')||(cat!=='All'&&t.includes(cat))) b.classList.add('active');
  });
  document.querySelectorAll('.port-card').forEach(function(c){
    if(cat==='All'||c.dataset.cat===cat){
      c.style.display='';
      c.style.animation='none';
      setTimeout(function(){c.style.animation='fadeUp .5s ease both'},10);
    } else {
      c.style.display='none';
    }
  });
  goTo('portfolio',null);
}

/* ─── SEND EMAIL ─── */
function sendEmail(){
  var em=document.getElementById('emailInput').value.trim();
  if(!em||!em.includes('@')){showToast('⚠️ Masukkan email yang valid');return}
  var sub=encodeURIComponent('Halo Ester! Saya ingin berdiskusi tentang proyek desain');
  var bod=encodeURIComponent('Halo Ester,\n\nSaya menemukan portofolio Anda dan tertarik untuk berdiskusi.\n\nEmail saya: '+em+'\n\nSalam,');
  window.open('mailto:apriliaester534@gmail.com?subject='+sub+'&body='+bod);
  showToast('📧 Gmail dibuka — siap kirim!');
  document.getElementById('emailInput').value='';
}

/* ─── NEWSLETTER ─── */
function subscribeNl(){
  var v=document.getElementById('nlEmail').value.trim();
  if(!v||!v.includes('@')){showToast('⚠️ Masukkan email yang valid');return}
  showToast('✅ Subscribe berhasil, terima kasih '+v+'!');
  document.getElementById('nlEmail').value='';
}
</script>
</body>
</html>