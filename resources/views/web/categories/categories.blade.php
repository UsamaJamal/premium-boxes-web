@include('web/header')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hepta+Slab:wght@700&display=swap" rel="stylesheet">

<style>
/* ================================================
   CATEGORY PAGE — Reset & Variables
   ================================================ */
*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:root {
    --bg: #1a1a1a;
    --bg2: #111111;
    --card: #222222;
    --gold: #FFC107;
    --gold2: #e0a800;
    --white: #ffffff;
    --muted: rgba(255, 255, 255, 0.62);
    --bdr: rgba(255, 255, 255, 0.10);
    --font: 'Inter', sans-serif;
    --max: 1400px;

    /* Added from allcategories */
    --bg-dark: #202020;
    --bg-darker: #1a1a1a;
    --bg-card: #242424;
    --text-main: #f5f5f5;
    --text-muted: #c5c5c5;
    --accent-gold: #f5c542;
    --accent-gold-hover: #f5c542;
    --border-color: #333;
    --font-heading: "Inter", sans-serif;
    --font-body: "Inter", sans-serif;
}

*,
*::before,
*::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background: var(--bg);
    color: var(--white);
    font-family: var(--font);
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    padding-top: 130px; /* Fixed header height — top bar ~82px + nav ~48px */
}

a {
    text-decoration: none;
    color: inherit;
}

img {
    display: block;
    max-width: 100%;
}

/* ── Max-width wrapper ── */
.cp-wrap {
    max-width: var(--max);
    margin: 0 auto;
    padding: 0 60px;
}

/* ── Gold pill button ── */
.cp-cta {
    display: inline-flex;
    align-items: center;
    padding: 14px 32px;
    background: var(--gold);
    color: #111 !important;
    text-decoration: none !important;
    font-family: var(--font);
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: background .25s, transform .2s;
    white-space: nowrap;
}

.cp-cta:hover {
    background: var(--gold2);
    transform: translateY(-2px);
    color: #111 !important;
    text-decoration: none !important;
}

/* ── Section badge ── */
.cp-badge {
    display: inline-block;
    border: 1px solid var(--gold);
    color: var(--gold);
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    margin-bottom: 16px;
}

/* ================================================
   HERO
   ================================================ */
.cp-hero {
    background: var(--bg);
    padding: 130px 0 0; /* Adjusted padding to clear fixed header */
}

/* Breadcrumb */
.cp-bc {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: var(--muted);
    margin-bottom: 36px;
}

.cp-bc a {
    color: var(--muted);
    transition: color .2s;
}

.cp-bc a:first-child {
    color: var(--gold);
}

.cp-bc a:hover {
    color: var(--gold);
}

.cp-bc-sep {
    opacity: .5;
}

/* Two-column grid */
.cp-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 48px;
    margin-bottom: -79px;
}

/* LEFT — text */
.cp-hero-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.cp-h1 {
    font-family: var(--font);
    font-size: 42px;
    font-weight: 800;
    line-height: 50px;
    letter-spacing: 0.04em;
    color: #FFFFFF;
    margin-bottom: 20px;
}

.cp-yellow {
    color: var(--gold);
}

.cp-desc {
    font-family: var(--font);
    font-size: 16px;
    font-weight: 400;
    line-height: 30px;
    letter-spacing: 0;
    color: #C5C5C5;
    margin-bottom: 32px;
    text-align: justify;
}

/* RIGHT — image */
.cp-hero-img {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    overflow: visible;
}

.cp-hero-photo {
    width: auto;
    max-width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
}

/* Bottom bar */
.cp-hero-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* padding: 14px 0; */
    border-top: 1px solid var(--bdr);
    /* border-bottom: 1px solid var(--bdr); */
    background: #111111;
    gap: 24px;
    flex-wrap: nowrap;
    margin-left: -60px;
    margin-right: -60px;
    padding-left: 60px;
    padding-right: 60px;
}

.cp-stars-group {
    display: flex;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
    white-space: nowrap;
}

.cp-stars {
    display: flex;
    gap: 3px;
    color: var(--gold);
    font-size: 16px;
}

.cp-rating-link {
    font-size: 13px;
    font-weight: 600;
    color: var(--gold);
    text-decoration: underline;
    white-space: nowrap;
}

/* ── Logo strip — scroll right to left, loop back to start ── */
.cp-logos {
    flex: 1;
    overflow: hidden;
}

.cp-logos-inner {
    display: flex;
    align-items: center;
    gap: 60px;
    animation: cp-rtl 16s linear infinite;
    width: max-content;
}

.cp-logos-inner:hover {
    animation-play-state: paused;
}

.cp-logo-img {
    height: 48px;
    width: auto;
    max-width: 110px;
    object-fit: contain;
    opacity: 0.85;
    transition: opacity 0.2s;
    flex-shrink: 0;
}

.cp-logo-img:hover {
    opacity: 1;
}

/* Scroll from right side → left, loop */
@keyframes cp-rtl {
    0% {
        transform: translateX(100%);
    }

    100% {
        transform: translateX(-100%);
    }
}

/* ================================================
   PRODUCTS
   ================================================ */
.cp-products {
    background: var(--bg);
    padding: 30px 0;
    overflow: hidden;
}

.gift-boxes-page + .cp-products {
    margin-top: 3px;
    padding: 30px 0 48px;
}

.gift-boxes-page + .cp-products .cp-sec-head {
    display: none;
}

.gift-boxes-page + .cp-products .cp-grid {
    margin-bottom: 18px;
}

.gift-boxes-page + .cp-products + .customize-section + .cp-why,
.gift-boxes-page ~ .testimonials-section {
    margin-top: 3px;
    padding-top: 20px;
    padding-bottom: 60px;
}

.gift-boxes-page ~ .quote-section {
    margin-top: 3px;
    padding-top: 58px;
    padding-bottom: 58px;
}

.gift-boxes-page + .cp-products + .customize-section + .cp-why .cp-why-title {
    margin-top: 0;
}

.gift-boxes-page ~ .product-testimonials-section .product-testimonials-header {
    margin-bottom: 32px;
}

.gift-boxes-addons-section {
    background: var(--bg);
    color: var(--white);
    margin-top: 3px;
    padding: 58px 0;
}

.gift-boxes-addons-wrap {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 16px;
    text-align: center;
}


.gift-boxes-addons-title {
    color: var(--white);
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    margin: 0 0 14px;
}

.gift-boxes-addons-subtitle {
    color: var(--muted);
    font-size: 16px;
    line-height: 1.6;
    margin: 0 0 34px;
}

.gift-boxes-addons-image {
    max-width: 900px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.18);
}

.gift-boxes-addons-image img {
    display: block;
    width: 100%;
    height: auto;
}

/* ================================================
   HOW IT WORKS SECTION
   ================================================ */
.hiw-section {
    background: #202020;
    padding: 30px 0 60px;
}

.hiw-wrap {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 60px;
}

.hiw-header {
    text-align: center;
    margin-bottom: 52px;
}

.hiw-title {
    font-family: 'Inter', sans-serif;
    font-size: 32px;
    font-weight: 800;
    color: #ffffff;
    margin: 0 0 14px;
}

.hiw-subtitle {
    font-family: 'Inter', sans-serif;
    font-size: 15px;
    font-weight: 400;
    color: rgba(255, 255, 255, 0.55);
    line-height: 1.65;
    max-width: 440px;
    margin: 0 auto;
}

/* 3-column grid */
.hiw-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0 32px;
    align-items: end;
}

/*
 * Each step is a relative container.
 * The ghost number sits via a ::before pseudo-element
 * anchored to the top-left, so content flows naturally below it.
 */
.hiw-step {
    position: relative;
    padding-top: 120px; /* space for ghost number to peek behind */
}

/* Ghost number rendered as ::before — top-left, huge, very faint */
.hiw-step::before {
    content: attr(data-num);
    font-family: 'Hepta Slab', serif;
    font-size: 190px;
    font-weight: 700;
    line-height: 1;
    color: rgba(255, 255, 255, 0.055);
    position: absolute;
    top: 0;
    left: -8px;
    z-index: 0;
    user-select: none;
    pointer-events: none;
}

/* Hide the inline span — we use ::before now */
.hiw-num {
    display: none;
}

/* Content sits on top of the ghost number */
.hiw-step-body {
    position: absolute;
    top: 97px;
    left: 75px;
    right: 0;
    z-index: 1;
    display: flex;
    flex-direction: column;
    gap: 9px;
    padding-right: 15px;
}

.hiw-step-title {
    font-family: 'Inter', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
    display: block;
}

.hiw-step-text {
    font-family: 'Inter', sans-serif;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.7;
    color: rgba(255, 255, 255, 0.55);
    margin: 0;
}

.hiw-step-text strong {
    color: #ffffff;
    font-weight: 700;
}

/* Tablet */
@media (max-width: 1024px) {
    .hiw-wrap        { padding: 0 30px; }
    .hiw-step        { padding-top: 90px; }
    .hiw-step::before{ font-size: 140px; }
}

/* Mobile */
@media (max-width: 768px) {
    .hiw-section  { padding: 40px 0 32px; background: #202020; }
    .hiw-wrap     { padding: 0 20px; }
    .hiw-header   { margin-bottom: 28px; }
    .hiw-title    { font-size: 22px; font-weight: 800; }
    .hiw-subtitle { font-size: 13px; max-width: 100%; }

    .hiw-grid {
        grid-template-columns: 1fr;
        gap: 0;
    }

    /* Each step: no absolute positioning on mobile */
    .hiw-step {
        position: relative;
        padding: 24px 0 24px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        min-height: unset;
        overflow: hidden; /* clip ghost number */
    }

    .hiw-step:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    /* Ghost number — faint behind content */
    .hiw-step::before {
        font-size: 100px;
        left: -6px;
        top: -10px;
        color: rgba(255, 255, 255, 0.05);
    }

    /* Body — normal flow, no absolute */
    .hiw-step-body {
        position: relative;
        top: auto;
        left: 0 !important;
        right: 0 !important;
        width: 100%;
        max-width: 100%;
        padding: 0;
        padding-left: 16px;
        z-index: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .hiw-step-title {
        font-size: 15px;
        font-weight: 700;
        color: #fff;
    }
    .hiw-step-text  {
        font-size: 13px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.6);
    }
}

/* ==========================================
   CUSTOMIZE YOUR BOX SECTION
========================================== */
.customize-section {
  max-width: 1242px;
  margin: 0 auto;
  padding: 40px 5%;
}

.customize-header {
  text-align: center;
  margin-bottom: 50px;
}

.badge-center {
  margin: 0 auto 24px;
}

.customize-header h2 {
  font-family: "Inter", sans-serif;
  font-size: 32px;
  font-weight: 700;
  line-height: 30px;
  letter-spacing: 0.04em;
  color: #fff;
  margin-bottom: 20px;
}

.customize-header p {
  width: 560px;
  max-width: 100%;
  margin: 0 auto;
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  letter-spacing: 0.02em;
  color: var(--muted);
}

/* FILTER BUTTONS */
.filter-buttons {
  display: flex;
  gap: 10px;
  flex-wrap: nowrap;        /* one line on desktop — all buttons stay in row */
  justify-content: center;
  margin: 50px 0;
}

.filter-btn {
  height: 58px;
  flex: 1 1 0;              /* all buttons share space equally */
  min-width: 0;             /* allow shrinking below content size */
  max-width: 160px;
  border: 1px solid #FFC107;
  border-radius: 8px;
  background: transparent;
  color: #fff;
  font-family: "Inter", sans-serif;
  font-size: 13px;
  font-weight: 500;
  cursor: pointer;
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0 8px;
  white-space: nowrap;
  overflow: hidden;
}

/* When viewport is too narrow, allow wrapping */
@media (max-width: 900px) {
  .filter-buttons {
    flex-wrap: wrap;
  }
  .filter-btn {
    flex: 1 1 130px;
    max-width: 200px;
  }
}

.filter-btn:hover {
  background: #FFC107;
  color: #111;
}

.filter-btn.active {
  background: #FFC107;
  color: #111;
}

/* GRID */
.customize-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  max-width: 1110px;
  margin: 0 auto;
  gap: 24px;
  width: 100%;
  box-sizing: border-box;
}

/* CARD */
.customize-card {
  width: 100%;
  background: #1a1a1a;
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.3s ease;
  box-sizing: border-box;
}

.customize-card:hover {
  transform: translateY(-5px);
}

.card-image-area {
  width: 100%;
  height: 200px;
  background: #363636;
  border-radius: 8px 8px 0 0;
  overflow: hidden;
  position: relative;
  display: flex;
}

.card-image-area img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.card-content {
  padding: 18px 17px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}

.card-content .card-title {
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 120%;
  color: #fff;
  margin: 0 0 12px 0;
}

.card-content p {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 22px;
  text-align: justify;
  color: rgba(255,255,255,0.65);
  margin: 0 0 16px 0;
  flex-grow: 1;
}

.card-icons {
  display: flex;
  gap: 8px;
  margin-top: auto;
}

/* MOBILE */
@media (max-width: 768px) {

  /* ── Fix whole-page unequal spacing ── */
  .customize-section {
    padding: 40px 0;
    overflow: hidden;
    width: 100%;
    box-sizing: border-box;
  }

  .customize-header {
    padding: 0 16px;
    margin-bottom: 20px;
  }

  .customize-header h2 {
    font-size: 20px;
    line-height: 1.3;
    margin-bottom: 8px;
  }

  .customize-header p {
    width: 100%;
    font-size: 13px;
    line-height: 20px;
  }

  /* ── Filter buttons: show exactly 2 at a time, scroll horizontally ── */
  .filter-buttons {
    display: flex !important;
    flex-wrap: nowrap !important;
    justify-content: flex-start !important;
    overflow-x: auto !important;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    gap: 8px !important;
    padding: 0 16px 10px 16px;
    margin: 0 0 20px 0 !important;
    scrollbar-width: none;
    -ms-overflow-style: none;
    box-sizing: border-box;
    width: 100%;
  }

  .filter-buttons::-webkit-scrollbar {
    display: none;
  }

  /*
   * Each button = half the viewport minus:
   *   16px left pad + 16px right pad = 32px total padding
   *   8px gap / 2 = 4px per button
   *   = calc(50vw - 20px)
   * This guarantees exactly 2 visible on any phone screen.
   */
  .filter-btn {
    flex: 0 0 calc(50vw - 20px) !important;
    width: calc(50vw - 20px) !important;
    max-width: none !important;
    min-width: 0;
    height: 44px !important;
    font-size: 12px;
    white-space: nowrap;
    padding: 0 8px !important;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
  }

  /* ── Card grid: contained with equal 16px padding ── */
  .tab-contents-container {
    padding: 0 16px;
    box-sizing: border-box;
    width: 100%;
    overflow: hidden;
  }

  .customize-grid {
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    width: 100%;
    box-sizing: border-box;
    margin: 0;
  }

  .customize-card {
    width: 100%;
    min-width: 0;
    max-width: 100%;
    height: auto;
    margin: 0;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 8px;
  }

  .card-image-area {
    height: 140px;
    width: 100%;
    border-radius: 8px 8px 0 0;
  }

  .card-image-area img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .card-content {
    padding: 10px 10px 12px;
  }

  .card-content .card-title {
    font-size: 13px;
    font-weight: 700;
    margin-bottom: 6px;
    line-height: 1.3;
  }

  .card-content p {
    font-size: 11px;
    line-height: 16px;
    margin-bottom: 8px;
  }

  .card-icons {
    gap: 4px;
  }
}

.cp-sec-head {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 52px;
}

.cp-sec-title {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 14px;
}

.cp-sec-sub {
    font-size: 16px;
    color: var(--muted);
    max-width: 460px;
    line-height: 1.75;
}

.cp-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-bottom: 52px;
}

.cp-card {
    display: flex;
    flex-direction: column;
    gap: 14px;
    cursor: pointer;
}

.cp-card:hover .cp-card-img {
    border-color: var(--gold);
}

.cp-card-img {
    width: 100%;
    aspect-ratio: 1 / 1;
    background: var(--card);
    border-radius: 12px;
    border: 1px solid rgba(212, 175, 55, 0.30);
    transition: border-color .25s;
}

.cp-card-name {
    font-size: 15px;
    font-weight: 500;
    color: var(--white);
    text-align: center;
}

.cp-center {
    display: flex;
    justify-content: center;
}

/* ================================================
   WHY CHOOSE
   ================================================ */
.cp-why {
    background: var(--bg2);
    padding: 40px 0;
}

.cp-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.cp-why-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.cp-why-title {
    font-size: 36px;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 22px;
}

.cp-why-para {
    font-size: 15px;
    line-height: 1.85;
    color: var(--muted);
    margin-bottom: 16px;
}

.cp-why-photo-wrap {
    width: 100%;
    overflow: hidden;
    aspect-ratio: 4/3;
    background: var(--card);
    border-radius: 12px;
    min-height: 200px;
}

.cp-why-img {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.cp-why-photo {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Why choose quote button — hidden on desktop, shown on mobile */
.cp-why-quote-btn {
    display: none;
}


================================================*/ @media (max-width: 1100px) {
    .cp-wrap {
        padding: 0 36px;
    }

    .cp-h1 {
        font-size: 36px;
    }

    .cp-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .cp-why-grid {
        gap: 48px;
    }

    .cp-trust-row {
        gap: 28px;
    }
}

/* ================================================
   RESPONSIVE — MOBILE ≤ 768px
   ================================================ */
@media (max-width: 768px) {
    /* ── Global equal spacing fix ── */
    .cp-wrap {
        padding: 0 16px;
        box-sizing: border-box;
        width: 100%;
        overflow: visible; /* hidden was cutting why-choose section */
    }

    /* Hero */
    .cp-hero {
        padding: 0;
    }

    .cp-bc {
        display: none;
    }

    .cp-hero-grid {
        grid-template-columns: 1fr;
        gap: 0;
        margin-bottom: 5vw;
    }

    .cp-hero-img {
        order: -1;
        margin-top: 36vw;
        margin-bottom: -77px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 8vw;
    }

    .cp-hero-photo {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
    }

    .cp-hero-text {
        padding-top: 5vw;
    }

    .cp-h1 {
        font-size: 7.5vw;
        margin-bottom: 4vw;
        line-height: 1.2;
    }

    .cp-desc {
        font-size: 3.8vw;
        margin-bottom: 6vw;
    }

    .cp-cta {
        font-size: 4.5vw;
        padding: 3.5vw 8vw;
        display: block;
        width: fit-content;
        margin: 0 auto;
        text-align: center;
    }

    .cp-hero-bar {
        padding: 5vw;
        gap: 0;
        justify-content: space-between;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin-left: 0;
        margin-right: 0;
    }

    .cp-stars-group {
        display: none;
    }

    .cp-logos {
        flex: unset;
        width: 100%;
        justify-content: space-evenly;
    }

    .cp-logo-img {
        height: 10vw;
        max-width: 18vw;
    }

    /* ── Products section: fix cards being cut off ── */
    .cp-products {
        padding: 10vw 0;
    }

    .cp-products .cp-wrap {
        padding: 0 16px;
        overflow: hidden;
    }

    .gift-boxes-page + .cp-products {
        padding: 4vw 0 6vw;
    }

    .gift-boxes-page + .cp-products + .customize-section + .cp-why,
    .gift-boxes-page ~ .testimonials-section {
        padding-top: 6vw;
        padding-bottom: 6vw;
    }

    .customize-section {
        padding: 8vw 0;
    }

    .cp-sec-head {
        padding: 0 16px;
    }

    .cp-sec-title {
        font-size: 6vw;
    }

    .cp-sec-sub {
        font-size: 3.8vw;
    }

    /* ── Product card grid: 2 columns, no overflow ── */
    .cp-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
        margin-bottom: 7vw;
        width: 100%;
        box-sizing: border-box;
    }

    .cp-card {
        min-width: 0;
        width: 100%;
    }

    .cp-card-img {
        width: 100%;
        aspect-ratio: 1 / 1;
    }

    .cp-card-name {
        font-size: 3.5vw;
    }

    /* Why choose */
    .cp-why {
        padding: 40px 0;
    }

    .cp-why-grid {
        grid-template-columns: 1fr;
        gap: 28px;
    }

    /* Text block */
    .cp-why-text {
        padding: 0 16px;
        margin-bottom: 0;
    }

    .cp-why-title {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 14px;
        line-height: 1.3;
    }

    .cp-why-para {
        font-size: 14px;
        line-height: 1.75;
    }

    /* Image + button column */
    .cp-why-img {
        width: 100%;
        padding: 0 16px;
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }

    /* Image: Figma specs — 371×295, radius 12px, fills container */
    .cp-why-photo-wrap {
        width: 100%;
        height: 295px;
        min-height: unset;
        overflow: hidden;
        border-radius: 12px;
        aspect-ratio: unset;
        flex-shrink: 0;
        background: var(--card);
    }

    .cp-why-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* Get a Quote button — below image */
    .cp-why-quote-btn {
        display: inline-flex !important;
        width: fit-content;
        margin-left: 0;
        font-size: 15px;
        padding: 14px 36px;
        border-radius: 50px;
    }
}

/* ================================================
   TESTIMONIALS SECTION
   ================================================ */
.cp-testi {
    background: var(--bg2);
    padding: 40px 0;
}

.cp-testi-head {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 60px;
}

.cp-testi-title {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 12px;
    color: var(--white);
}

.cp-testi-sub {
    font-size: 15px;
    color: var(--muted);
    max-width: 420px;
    line-height: 1.7;
}

/* Slider wrapper — clips the track, 3 cards visible */
.cp-testi-slider {
    overflow: hidden;
    margin-bottom: 40px;
    padding-top: 40px;
}

/* Track — all cards in ONE horizontal row, no wrap */
.cp-testi-track {
    display: flex;
    flex-wrap: nowrap;
    gap: 24px;
    transition: transform 0.4s ease;
    will-change: transform;
    width: max-content;
}

/* Card — fixed width so 3 fit in the container */
.cp-testi-card {
    flex: 0 0 calc((min(100vw, 1400px) - 120px - 48px) / 3);
    width: calc((min(100vw, 1400px) - 120px - 48px) / 3);
    background: #1e1e1e;
    border: 1px solid rgba(212, 175, 55, 0.25);
    border-radius: 16px;
    padding: 60px 28px 32px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
}

/* Avatar — sits on top of card, overlapping border */
.cp-testi-avatar-wrap {
    position: absolute;
    top: -36px;
    left: 50%;
    transform: translateX(-50%);
    width: 72px;
    height: 72px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid #1e1e1e;
    background: #333;
}

.cp-testi-avatar {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.cp-testi-text {
    font-size: 14px;
    line-height: 1.75;
    color: var(--muted);
    margin-bottom: 20px;
}

.cp-testi-name {
    font-size: 16px;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 4px;
}

.cp-testi-role {
    font-size: 13px;
    color: var(--muted);
}

/* Nav buttons */
.cp-testi-nav {
    display: flex;
    justify-content: center;
    gap: 16px;
}

.cp-testi-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: var(--white);
    font-size: 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: border-color 0.2s, color 0.2s;
}

.cp-testi-btn:hover {
    border-color: var(--gold);
    color: var(--gold);
}

/* Responsive */
@media (max-width: 1024px) {
    .cp-testi-card {
        flex: 0 0 calc(50% - 12px);
    }
}

@media (max-width: 768px) {
    .cp-testi {
        padding: 10vw 0;
    }

    .cp-testi-title {
        font-size: 6vw;
    }

    .cp-testi-sub {
        font-size: 3.8vw;
    }

    .cp-testi-card {
        flex: 0 0 80vw;
    }

    .cp-testi-slider {
        gap: 4vw;
    }
}

/* ================================================
   TESTIMONIALS SECTION
   ================================================ */
.cp-testi {
    background: var(--bg2);
    padding: 40px 0;
}

.cp-testi-head {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 70px;
}

.cp-testi-title {
    font-size: 36px;
    font-weight: 800;
    color: var(--white);
    margin-bottom: 12px;
}

.cp-testi-sub {
    font-size: 15px;
    color: var(--muted);
    line-height: 1.7;
}

/* Viewport — clips to show exactly 3 cards */
.cp-testi-viewport {
    overflow: hidden;
    padding-top: 44px;
    margin-bottom: 40px;
    width: 100%;
}

/* Track — single horizontal row */
.cp-testi-track {
    display: flex;
    flex-wrap: nowrap;
    gap: 24px;
    transition: transform 0.45s ease;
    will-change: transform;
}

/* Card — exactly 1/3 of the wrap container */
.cp-testi-card {
    flex: 0 0 calc((var(--cp-max) - 120px - 48px) / 3);
    width: calc((var(--cp-max) - 120px - 48px) / 3);
    min-width: 0;
    background: #1e1e1e;
    border: 1px solid rgba(212, 175, 55, 0.22);
    border-radius: 16px;
    padding: 56px 24px 28px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
}

/* Override card width at smaller screens */
@media (max-width: 1400px) {
    .cp-testi-card {
        flex: 0 0 calc((100vw - 120px - 48px) / 3);
        width: calc((100vw - 120px - 48px) / 3);
    }
}

/* Avatar circle — centered on top edge of card */
.cp-testi-av {
    position: absolute;
    top: -36px;
    left: 50%;
    transform: translateX(-50%);
    width: 72px;
    height: 72px;
    border-radius: 50%;
    overflow: hidden;
    border: 3px solid var(--bg2);
    flex-shrink: 0;
}

.cp-testi-av img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.cp-testi-txt {
    font-size: 14px;
    line-height: 1.75;
    color: var(--muted);
    margin-bottom: 18px;
}

.cp-testi-name {
    font-size: 16px;
    font-weight: 700;
    color: var(--gold);
    margin-bottom: 4px;
}

.cp-testi-role {
    font-size: 13px;
    color: var(--muted);
}

/* Prev / Next nav */
.cp-testi-nav {
    display: flex;
    justify-content: center;
    gap: 16px;
}

.cp-testi-btn {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: var(--white);
    font-size: 15px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: border-color 0.2s, color 0.2s;
}

.cp-testi-btn:hover {
    border-color: var(--gold);
    color: var(--gold);
}

/* Responsive */
@media (max-width: 900px) {
    .cp-testi-card {
        flex: 0 0 calc((100% - 24px) / 2);
    }
}

@media (max-width: 600px) {
    .cp-testi-card {
        flex: 0 0 100%;
    }

    .cp-testi-title {
        font-size: 6vw;
    }

    .cp-testi-sub {
        font-size: 3.8vw;
    }
}

/* ================================================
   PRODUCT-PAGE VARIABLES (for shared components)
   ================================================ */
:root {
    --product-bg: #161616;
    --product-bg-card: #222222;
    --product-gold: #FFC107;
    --product-gold-hover: #E0A800;
    --product-text-main: #FFFFFF;
    --product-text-muted: rgba(255, 255, 255, 0.7);
    --product-border: rgba(255, 255, 255, 0.1);
    --product-font: 'Inter', sans-serif;
}

/* ================================================
   CUSTOMIZE YOUR BOX SECTION
   ================================================ */
.product-customize-section {
    padding: 40px 0;
}

.product-customize-header {
    text-align: center;
    margin-bottom: 50px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.product-outline-badge {
    display: inline-block;
    border: 1px solid var(--product-gold);
    color: var(--product-gold);
    padding: 8px 20px;
    border-radius: 62.5px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 20px;
    transition: all 0.3s ease;
    cursor: default;
}

.product-outline-badge:hover {
    background-color: var(--product-gold);
    color: #111;
}

.product-section-title {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 18px;
}

.product-section-subtitle {
    font-size: 20px;
    color: var(--product-text-muted);
}

.product-customize-filters {
    display: flex;
    justify-content: center;
    gap: 18px;
    margin-bottom: 50px;
    flex-wrap: wrap;
}

.product-filter-btn {
    background-color: transparent;
    border: 1px solid var(--product-border);
    color: var(--product-text-main);
    padding: 15px 0;
    width: 240px;
    text-align: center;
    border-radius: 6px;
    font-size: 17px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-filter-btn:hover,
.product-filter-btn.active {
    background-color: var(--product-gold);
    color: #111;
    border-color: var(--product-gold);
}

.product-materials-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.product-material-card {
    background-color: #1a1a1a;
    border-radius: 8px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    border: 1px solid transparent;
    transition: transform 0.3s ease, border-color 0.3s ease;
    cursor: pointer;
    aspect-ratio: 4 / 5;
}

.product-material-card:hover {
    transform: translateY(-6px);
    border-color: var(--product-gold);
}

.material-img-placeholder {
    flex: 1;
    background-color: #2a2a2a;
}

.material-title-bar {
    padding: 15px 10px;
    text-align: center;
    font-size: 15px;
    font-weight: 600;
    color: #fff;
}

/* ================================================
   TESTIMONIALS SECTION
   ================================================ */
.product-testimonials-section {
    padding: 40px 0;
    background-color: #111111;
}

.product-testimonials-header {
    text-align: center;
    margin-bottom: 87px;
}

.product-sec-badge {
    display: inline-block;
    color: var(--product-gold);
    border: 1px solid var(--product-gold);
    padding: 6px 18px;
    border-radius: 62.5px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 25px;
}

.product-testimonials-grid {
    display: flex;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scrollbar-width: none;
    gap: 30px;
    margin-bottom: 50px;
    padding-top: 55px;
    padding-bottom: 10px;
    position: relative;
}

.product-testimonials-grid::-webkit-scrollbar {
    display: none;
}

.product-testimonial-card {
    background-color: var(--product-bg-card);
    border-radius: 15px;
    padding: 62px 37px 50px;
    text-align: center;
    position: relative;
    margin-top: 0;
    border: 1px solid rgba(255, 193, 7, 0.3);
    flex: 0 0 calc(33.333% - 20px);
    scroll-snap-align: start;
    min-width: 0;
}

.product-avatar-wrap {
    width: 87px;
    height: 87px;
    border-radius: 50%;
    overflow: hidden;
    position: absolute;
    top: -44px;
    left: 50%;
    transform: translateX(-50%);
    border: 4px solid var(--product-bg-card);
}

.product-avatar {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-testimonial-text {
    font-size: 18px;
    line-height: 1.8;
    color: var(--product-text-muted);
    font-style: italic;
    margin-bottom: 25px;
}

.product-stars {
    color: var(--product-gold);
    font-size: 17px;
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    gap: 6px;
}

.product-testimonial-name {
    font-size: 22px;
    font-weight: 700;
    color: var(--product-gold);
    margin-bottom: 6px;
}

.product-testimonial-role {
    font-size: 17px;
    color: rgba(255, 255, 255, 0.4);
}

.product-slider-nav {
    display: flex;
    justify-content: center;
    gap: 18px;
}

.product-nav-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: transparent;
    border: 1px solid var(--product-border);
    color: var(--product-text-main);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-nav-btn:hover:not(:disabled) {
    border-color: var(--product-gold);
    color: var(--product-gold);
}

.product-nav-btn:disabled {
    opacity: 0.45;
    cursor: not-allowed;
}

/* product-container reuse */
.product-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 50px;
}

/* Testimonials viewport wrapper */
.product-testi-viewport {
    overflow: hidden;
    padding-top: 55px;
}

/* ================================================
   HOME-STYLE TESTIMONIALS SECTION (From home page)
   ================================================ */
.testimonials-section {
    padding: 40px 0;
    background: #161616;
}

.testimonials-header {
    text-align: center;
    margin-bottom: 50px;
}

.testimonials-header h2 {
    margin: 15px 0;
    font-size: 2.4rem;
}

.testimonials-header p {
    color: var(--text-muted);
}

.testimonial-grid {
    display: flex;
    overflow-x: hidden;
    gap: 25px;
    scroll-behavior: smooth;
    scroll-snap-type: x mandatory;
    padding-top: 35px;
    align-items: flex-start;
}

.testimonial-card {
    position: relative;
    background: #171717;
    border: 1px solid rgba(212, 175, 55, 0.25);
    border-radius: 18px;
    padding: 50px 25px 25px;
    text-align: center;
    flex: 0 0 calc((100% - 50px) / 3);
    scroll-snap-align: start;
}

.testimonial-card img {
    width: 55px;
    height: 55px;
    border-radius: 50%;
    object-fit: cover;
    position: absolute;
    top: -27px;
    left: 50%;
    transform: translateX(-50%);
    border: 3px solid #222;
}

.testimonial-card p {
    color: var(--text-muted);
    font-size: 0.9rem;
    margin-bottom: 20px;
    text-align: justify;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.testimonial-card p.expanded {
    display: block;
    -webkit-line-clamp: unset;
}

.read-more-btn {
    background: none;
    border: none;
    color: #F5A623;
    font-size: 0.85rem;
    cursor: pointer;
    margin-top: -10px;
    margin-bottom: 15px;
    padding: 0;
    text-decoration: underline;
    display: inline-block;
}

.testimonial-card .testi-name {
    color: var(--accent-gold);
    display: block;
    font-size: 1.25rem;
    font-weight: 500;
    margin-bottom: 0.5rem;
    margin-top: 0;
}

.testimonial-card span {
    font-size: 0.8rem;
    color: var(--text-muted);
}

.testimonial-nav {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 35px;
}

.testimonial-nav button {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: transparent;
    border: 1px solid #333;
    color: white;
    cursor: pointer;
    transition: border-color 0.2s, color 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
}

.testimonial-nav button:hover {
    border-color: var(--accent-gold);
    color: var(--accent-gold);
}

@media (max-width: 992px) {
    .testimonial-grid {
        display: flex;
        overflow-x: auto;
        overflow-y: hidden;
        gap: 0;
        padding-top: 30px;
        scroll-snap-type: x mandatory;
    }

    .testimonial-card {
        flex: 0 0 100%;
        min-width: 100%;
        scroll-snap-align: start;
    }
    .testimonial-grid::-webkit-scrollbar {
        height: 6px;
    }

    .testimonial-grid::-webkit-scrollbar-thumb {
        background: var(--accent-gold);
        border-radius: 10px;
    }
}

/* ================================================
   REQUEST A FREE QUOTE SECTION
   ================================================ */
.cq-section {
    background: #161616;
    padding: 40px 0;
}

.cq-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 60px;
    display: grid;
    grid-template-columns: 1fr 1.6fr;
    gap: 60px;
    align-items: stretch;
}

/* Steps */
.cq-steps {
    display: flex;
    flex-direction: column;
    gap: 46px;
}

.cq-step {
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.cq-num {
    font-size: 18px;
    font-weight: 800;
    color: #FFC107;
    flex-shrink: 0;
    min-width: 36px;
}

.cq-step-title {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 8px;
}

.cq-step-text {
    font-size: 13px;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.6);
    text-align: justify;
}

/* Form box */
.cq-form-box {
    background: #1e1e1e;
    border-radius: 14px;
    padding: 24px 32px;
    height: 100%;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

.cq-form-title {
    font-size: 22px;
    font-weight: 800;
    color: #ffffff;
    text-align: center;
    margin-bottom: 10px;
}

.cq-form {
    display: flex;
    flex-direction: column;
    gap: 8px;
    flex: 1;
}

.cq-row {
    display: grid;
    gap: 10px;
}

.cq-row-2 {
    grid-template-columns: 1fr 1fr;
}

.cq-row-3 {
    grid-template-columns: 1fr 1fr 1fr;
}

.cq-row-mat-col {
    grid-template-columns: 1fr 1fr;
}

.cq-row-addon-qty {
    grid-template-columns: 1fr 1fr;
}

.cq-row-upload-full {
    grid-template-columns: 1fr;
}

.cq-row-4 {
    grid-template-columns: 1fr 1fr 1fr 1fr;
}

.cq-field {
    display: flex;
    flex-direction: column;
    gap: 3px;
}

.cq-field label {
    font-size: 12px;
    font-weight: 500;
    color: rgba(255, 255, 255, 0.75);
}

.cq-field input,
.cq-field select,
.cq-field textarea {
    background: #141414;
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: 8px;
    padding: 5px 12px;
    color: #ffffff;
    font-size: 13px;
    font-family: 'Inter', sans-serif;
    outline: none;
    transition: border-color 0.2s;
    width: 100%;
    box-sizing: border-box;
}

.cq-field input::placeholder,
.cq-field textarea::placeholder {
    color: rgba(255, 255, 255, 0.35);
}

.cq-field input:focus,
.cq-field select:focus,
.cq-field textarea:focus {
    border-color: #FFC107;
}

.cq-field select {
    appearance: none;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23FFC107' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    padding-right: 32px;
}

.cq-upload {
    display: flex;
    gap: 0;
}

.cq-upload input {
    flex: 1;
    border-radius: 8px 0 0 8px;
}

.cq-upload-btn {
    background: #FFC107;
    color: #111;
    border: none;
    border-radius: 0 8px 8px 0;
    padding: 0 18px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s;
    flex-shrink: 0;
}

.cq-upload-btn:hover {
    background: #e0a800;
}

.cq-field textarea {
    resize: none;
}

.cq-submit-wrap {
    display: flex;
    justify-content: center;
    margin-top: 8px;
}

.cq-submit-btn {
    background: #FFC107;
    color: #111;
    border: none;
    border-radius: 50px;
    padding: 14px 60px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    font-family: 'Inter', sans-serif;
}

.cq-submit-btn:hover {
    background: #e0a800;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 1024px) {
    .cq-wrap {
        grid-template-columns: 1fr;
        gap: 40px;
        padding: 0 30px;
    }

    .cq-row-4 {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 768px) {
    .cq-section {
        padding: 10vw 0;
    }

    .cq-wrap {
        padding: 0 5vw;
    }

    .cq-row-2,
    .cq-row-3,
    .cq-row-4 {
        grid-template-columns: 1fr;
    }

    .cq-form-title {
        font-size: 6vw;
    }

    .cq-step-title {
        font-size: 4vw;
    }

    .cq-step-text {
        font-size: 3.5vw;
    }
}

/* ================================================
   PACKAGING GUIDE SECTION
   ================================================ */
.pg-section {
    background: #161616;
    padding: 40px 0;
}

.pg-wrap {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 60px;
    display: grid;
    grid-template-columns: 1.3fr 1fr;
    gap: 60px;
    align-items: start;
}

/* Left */
.pg-left {
    display: flex;
    flex-direction: column;
    gap: 18px;
    max-height: 613px;
    overflow-y: auto;
    padding-right: 15px; /* space for scrollbar */
    color: #f1f1f1;
}

.pg-left p, .pg-left span, .pg-left li, .pg-left h1, .pg-left h2, .pg-left h3, .pg-left h4, .pg-left h5, .pg-left h6, .pg-left strong, .pg-left b {
    color: #f1f1f1 !important;
}

/* Custom Scrollbar for pg-left */
.pg-left::-webkit-scrollbar {
    width: 6px;
}
.pg-left::-webkit-scrollbar-track {
    background: #2a2a2a;
    border-radius: 10px;
}
.pg-left::-webkit-scrollbar-thumb {
    background: var(--gold);
    border-radius: 10px;
}
.pg-left::-webkit-scrollbar-thumb:hover {
    background: #e6b13c;
}

.pg-badge {
    display: inline-block;
    border: 1px solid #FFC107;
    color: #FFC107;
    padding: 5px 16px;
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.2px;
    text-transform: uppercase;
    width: fit-content;
}

.pg-title {
    font-size: 26px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.3;
}

.pg-text {
    font-size: 14px;
    line-height: 1.85;
    color: rgba(255, 255, 255, 0.6);
    text-align: justify;
}

.pg-subtitle {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    text-align: justify;
}

.pg-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
    padding-left: 20px;
    list-style: disc;
}

.pg-list li {
    font-size: 13px;
    line-height: 1.75;
    color: rgba(255, 255, 255, 0.6);
    text-align: justify;
}

.pg-list li strong {
    color: #ffffff;
}

/* Right */
.pg-right {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.pg-steps-box {
    background: #1e1e1e;
    border-radius: 12px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    gap: 0;
}

.pg-steps-title {
    font-size: 17px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
}

.pg-step-item {
    display: flex;
    flex-direction: column;
    padding: 14px 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
}

.pg-step-item:last-child {
    border-bottom: none;
}

.pg-step-num {
    font-size: 14px;
    font-weight: 700;
    color: #FFC107;
    flex-shrink: 0;
    min-width: 20px;
}

.pg-step-item p {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.65);
}

/* CTA box */
.pg-cta-box {
    background: #1e1e1e;
    border-radius: 12px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 8px;
}

.pg-cta-title {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
}

.pg-cta-sub {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.55);
    margin-bottom: 8px;
}

.pg-cta-btn {
    display: inline-block;
    background: #FFC107;
    color: #111;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 32px;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}

.pg-cta-btn:hover {
    background: #e0a800;
    transform: translateY(-2px);
    color: #111 !important;
    text-decoration: none !important;
}

/* Responsive */
@media (max-width: 1024px) {
    .pg-wrap {
        grid-template-columns: 1fr;
        padding: 0 30px;
        gap: 40px;
    }
}

@media (max-width: 768px) {
    .pg-section {
        padding: 40px 0;
    }

    .pg-wrap {
        padding: 0 20px;
    }

    .pg-title {
        font-size: 20px;
    }

    .pg-text,
    .pg-list li,
    .pg-step-item p {
        font-size: 14px;
    }

    .pg-subtitle {
        font-size: 16px;
    }
}

/* ================================================
   MOBILE TESTIMONIALS — 1 card at a time
   ================================================ */
@media (max-width: 768px) {
    .product-testimonials-section {
        padding: 10vw 0;
    }

    /* Wrapper clips the sliding track */
    .testi-slider-wrap {
        overflow: hidden;
        width: 100%;
        padding-top: 55px;
        margin-bottom: 8vw;
    }

    /* Bleed container padding for testimonials */
    .product-testimonials-section .product-container {
        padding: 0 4vw;
    }

    .product-testimonials-section .product-testimonials-header {
        padding: 0;
    }

    .product-testimonials-section .product-slider-nav {
        padding: 0;
    }

    /* Track slides horizontally */
    .product-testimonials-grid {
        display: flex;
        flex-wrap: nowrap;
        gap: 4vw;
        overflow: visible;
        scroll-snap-type: none;
        padding-top: 0;
        padding-bottom: 0;
        margin-bottom: 0;
        padding-left: 0;
        transition: transform 0.4s ease;
        will-change: transform;
    }

    .product-testimonial-card {
        flex: 0 0 100%;
        width: 100%;
        padding: 12vw 5vw 4vw;
        margin-top: 0;
        max-height: none;
        border-radius: 6vw;
    }

    .product-testimonial-text {
        font-size: 4vw;
    }

    .product-testimonial-name {
        font-size: 5vw;
    }

    .product-testimonial-role {
        font-size: 3.5vw;
    }

    .product-section-title {
        font-size: 6vw;
    }

    .product-section-subtitle {
        font-size: 3.8vw;
    }
}

/* ================================================
   MOBILE FORM (cq-section) — vw based like product-page
   ================================================ */
@media (max-width: 768px) {
    .cq-section {
        padding: 10vw 0;
    }

    .cq-wrap {
        grid-template-columns: 1fr;
        padding: 0 4.5vw;
        gap: 8vw;
    }

    /* Steps */
    .cq-step-title {
        font-size: 4.5vw;
        font-weight: 700;
    }

    .cq-step-text {
        font-size: 3.8vw;
        line-height: 1.8;
    }

    .cq-num {
        font-size: 4.5vw;
    }

    .cq-steps {
        gap: 7vw;
    }

    /* Form box */
    .cq-form-box {
        padding: 6vw 4.5vw;
        border-radius: 12px;
    }

    .cq-form-title {
        font-size: 6vw;
        font-weight: 800;
        margin-bottom: 6vw;
    }

    /* Default rows — single column */
    .cq-row-2,
    .cq-row-3 {
        grid-template-columns: 1fr;
        gap: 4vw;
    }

    /* Width / Length / Depth / Units — keep 2 columns */
    .cq-row-4 {
        grid-template-columns: 1fr 1fr;
        gap: 3.5vw 4vw;
    }

    /* Material + Color Options — 2 columns */
    .cq-row-mat-col {
        grid-template-columns: 1fr 1fr !important;
        gap: 3.5vw 4vw;
    }

    /* Addons + Quantity — 2 columns */
    .cq-row-addon-qty {
        grid-template-columns: 1fr 1fr !important;
        gap: 3.5vw 4vw;
    }

    /* Upload — full width */
    .cq-row-upload-full {
        grid-template-columns: 1fr;
        gap: 4vw;
    }

    /* Labels */
    .cq-field label {
        font-size: 3.5vw;
        font-weight: 600;
        color: rgba(255, 255, 255, 0.85);
        margin-bottom: 1.5vw;
    }

    /* Inputs / Selects / Textarea */
    .cq-field input,
    .cq-field select,
    .cq-field textarea {
        font-size: 3.8vw;
        padding: 3vw 3.5vw;
        border-radius: 8px;
    }

    /* Upload button */
    .cq-upload-btn {
        font-size: 3.8vw;
        padding: 3vw 5vw;
        font-weight: 700;
    }

    /* Submit */
    .cq-submit-btn {
        font-size: 4.5vw;
        padding: 4vw 0;
        width: 100%;
        border-radius: 50px;
        font-weight: 700;
    }
}

/* ================================================
   STEPS ACCORDION — mobile only
   ================================================ */

.pg-step-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 0;
    display: flex;
    flex-direction: column;
}

.pg-step-item:last-child {
    border-bottom: none;
}

.pg-accordion-btn {
    pointer-events: all;
    cursor: pointer;
    padding: 18px 0;
    gap: 12px;
    display: flex;
    align-items: center;
    width: 100%;
    background: none;
    border: none;
    color: inherit;
    font-family: inherit;
    text-align: left;
}

.pg-accordion-q {
    font-size: 14px;
    line-height: 1.65;
    color: #ffffff;
    font-weight: 500;
    flex: 1;
}

.pg-accordion-btn:focus {
    outline: none;
}

.pg-accordion-icon {
    display: block;
    font-size: 18px;
    color: rgba(255, 255, 255, 0.6);
    margin-left: auto;
    flex-shrink: 0;
    transition: color 0.25s;
}

.pg-accordion-item.open .pg-accordion-icon {
    color: #FFC107;
}

.pg-accordion-body {
    display: none;
    padding: 0 0 16px 0;
}

.pg-accordion-body p {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.65);
    margin: 0;
}

.pg-accordion-item.open .pg-accordion-body {
    display: block;
}

/* Mobile accordion */
@media (max-width: 768px) {
    .pg-section {
        display: block !important;
        padding: 10vw 0;
    }

    .pg-wrap {
        grid-template-columns: 1fr;
        padding: 0 4.5vw;
        gap: 8vw;
    }

    .pg-left {
        display: none;
    }

    /* hide article text on mobile */

    .pg-steps-box {
        padding: 5vw 4vw;
        border-radius: 12px;
    }

    .pg-steps-title {
        font-size: 5vw;
        font-weight: 800;
        margin-bottom: 4vw;
    }

    .pg-step-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 0;
        display: flex;
        flex-direction: column;
    }

    .pg-step-item:last-child {
        border-bottom: none;
    }

    .pg-accordion-btn {
        pointer-events: all;
        cursor: pointer;
        padding: 4vw 0;
        gap: 3vw;
        display: flex;
        align-items: center;
        width: 100%;

    }

    .pg-step-num {
        font-size: 4vw;
        font-weight: 700;
        color: #FFC107;
        flex-shrink: 0;
    }

    .pg-accordion-q {
        font-size: 4vw;
        color: #ffffff;
        font-weight: 500;
        flex: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
    }

    .pg-accordion-item.open .pg-accordion-icon {
        color: #FFC107;
    }

    .pg-accordion-icon {
        display: block;
        font-size: 5vw;
        color: rgba(255, 255, 255, 0.6);
        margin-left: auto;
        flex-shrink: 0;
        transition: color 0.25s;
    }

    .pg-accordion-body {
        display: none;
        padding: 0 0 4vw 7vw;
    }

    .pg-accordion-body p {
        font-size: 3.8vw;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.6);
        margin-top: 0;
    }

    .pg-accordion-item.open .pg-accordion-body {
        display: block;
    }

    /* CTA box */
    .pg-cta-box {
        padding: 5vw;
        border-radius: 12px;
    }

    .pg-cta-title {
        font-size: 5vw;
    }

    .pg-cta-sub {
        font-size: 3.8vw;
    }

    .pg-cta-btn {
        font-size: 4vw;
        padding: 3vw 7vw;
    }
}

/* ================================================
   CTA BANNER SECTION
   ================================================ */
.cp-cta-banner {
    background: #1e1e1e;
    position: relative;
    overflow: visible;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px 80px;
    min-height: 280px;
    gap: 40px;
}

/* LEFT — text + button */
.cp-cta-banner-left {
    margin-left: 81px;
    flex: 1;
    max-width: 480px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: relative;
    z-index: 2;
}

.cp-cta-banner-heading {
    font-size: 30px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    white-space: nowrap;
}

.cp-cta-banner-gold {
    color: #FFC107;
}

.cp-cta-banner-text {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.65);
    line-height: 1.75;
    max-width: 487px;
}

.cp-cta-banner-btn {
    width: fit-content;
}

/* RIGHT — 3 images overlapping */
.cp-cta-banner-imgs {
    position: relative;
    width: 460px;
    height: 280px;
    flex-shrink: 0;
    overflow: visible;
}

.cp-cta-img {
    position: absolute;
    object-fit: cover;
    display: block;
}

/* Image 1 — large, right side, +23.35deg */
.cp-cta-img-1 {
    width: 283px;
    height: 329px;
    top: -130px;
    right: -37px;
    border-radius: 30px;
    transform: rotate(23.35deg);
    z-index: 3;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
}

/* Image 2 — bottom-left, +23.35deg */
.cp-cta-img-2 {
    width: 157px;
    height: 172px;
    bottom: -94px;
    right: 217px;
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 2;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

/* Image 3 — bottom-right, +23.35deg */
/* ================================================
   CTA BANNER SECTION
   ================================================ */
.cp-cta-banner {
    background: #1e1e1e;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px 80px;
    min-height: 280px;
    gap: 40px;
}

/* LEFT — text + button */
.cp-cta-banner-left {
    margin-left: 81px;
    flex: 1;
    max-width: 480px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: relative;
    z-index: 2;
}

.cp-cta-banner-heading {
    font-size: 30px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    white-space: nowrap;
}

.cp-cta-banner-gold {
    color: #FFC107;
}

.cp-cta-banner-text {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.65);
    line-height: 1.75;
    max-width: 487px;
}

.cp-cta-banner-btn {
    width: fit-content;
}

/* RIGHT — 3 images overlapping */
.cp-cta-banner-imgs {
    position: relative;
    width: 460px;
    height: 280px;
    flex-shrink: 0;
    overflow: visible;
}

.cp-cta-img {
    position: absolute;
    object-fit: cover;
    display: block;
}

/* Image 1 — large, right side, +23.35deg */
.cp-cta-img-1 {
    width: 283px;
    height: 329px;
    top: -130px;
    right: -37px;
    border-radius: 30px;
    transform: rotate(23.35deg);
    z-index: 3;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
}

/* Image 2 — bottom-left, +23.35deg */
.cp-cta-img-2 {
    width: 157px;
    height: 172px;
    bottom: -94px;
    right: 217px;
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 2;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

/* Image 3 — bottom-right, +23.35deg */
.cp-cta-img-3 {
    width: 155px;
    height: 170px;
    bottom: -161px;
    right: 51px;
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 1;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

/* Mobile */
@media (max-width: 768px) {
    .cp-cta-banner {
        flex-direction: column-reverse;
        padding: 0 0 10vw 0;
        min-height: unset;
        gap: 0;
        overflow: hidden;
    }
    .cp-cta-banner-left {
        max-width: 100%;
        padding: 4vw 5vw 4vw 5vw;
        align-items: flex-start;
        text-align: left;
        margin-left: 0;
    }
    .cp-cta-banner-heading {
        font-size: 8vw;
        white-space: normal;
        margin-bottom: 2vw;
        text-align: left;
    }
    .cp-cta-banner-text {
        font-size: 4.2vw;
        max-width: 100%;
        line-height: 1.8;
        margin-bottom: 6vw;
        text-align: left;
    }
    .cp-cta-banner-btn {
        width: 100%;
        text-align: center;
        justify-content: center;
        font-size: 4.5vw;
        padding: 4vw 0;
    }

    .cp-cta-banner-imgs {
        width: 100%;
        height: 70vw;
        position: relative;
        flex-shrink: 0;
    }
    .cp-cta-img-2 { display: none; }
    .cp-cta-img-3 { display: none; }
    .cp-cta-img-1 {
        width: 72vw;
        height: 80vw;
        top: -10vw;
        right: -10vw;
        border-radius: 6vw;
        transform: rotate(23.35deg);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
    }
}


/* ================================================
   FOOTER SECTION
   ================================================ */
.cp-footer {
    background-color: var(--bg2);
    color: var(--muted);
    padding: 80px 0 30px;
    font-family: var(--font);
    font-size: 14px;
}

.cp-footer-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 40px;
    margin-bottom: 60px;
}

.cp-footer-col {
    flex: 1;
    min-width: 150px;
}

.cp-footer-col-1 {
    min-width: 250px;
    flex: 1.5;
    display: flex;
    flex-direction: column;
}

.cp-footer-social {
    margin-top: auto;
}

.cp-footer-col-5 {
    min-width: 250px;
    flex: 1.5;
    display: flex;
    flex-direction: column;
}

.cp-footer-newsletter-section {
    margin-top: auto;
}

.cp-footer-logo {
    margin-bottom: 30px;
}

.cp-footer-logo-icon {
    display: flex;
    align-items: center;
}

.cp-footer-title {
    color: var(--white);
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 24px;
}

.cp-social-icons {
    display: flex;
    gap: 15px;
}

.cp-social-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background-color: var(--white);
    color: var(--accent_gold);
    text-decoration: none;
    transition: background-color 0.3s, opacity 0.3s;
}

.cp-social-icons a:hover {
    background-color: var(--gold);
    opacity: 0.9;
}

.cp-footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.cp-footer-links li {
    margin-bottom: 15px;
}

.cp-footer-links a {
    color: var(--muted);
    text-decoration: none;
    transition: color 0.3s;
}

.cp-footer-links a:hover {
    color: var(--white);
}

.cp-footer-address {
    margin-bottom: 30px;
    line-height: 1.6;
}

.cp-newsletter-title {
    margin-bottom: 16px;
}

.cp-newsletter-form {
    display: flex;
    margin-bottom: 30px;
}

.cp-newsletter-form input {
    flex: 1;
    padding: 12px 16px;
    background-color: transparent;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 4px 0 0 4px;
    color: var(--white);
    outline: none;
}

.cp-newsletter-form button {
    padding: 12px 24px;
    background-color: var(--gold);
    color: #F5C542;
    border: none;
    border-radius: 0 4px 4px 0;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
}

.cp-newsletter-form button:hover {
    background-color: var(--gold2);
}

.cp-payment-methods {
    display: flex;
    gap: 10px;
    font-size: 24px;
    color: var(--white);
}

.cp-footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 30px;
    text-align: center;
    font-size: 13px;
}

@media (max-width: 992px) {
    .cp-footer-top {
        grid-template-columns: repeat(2, 1fr);
        display: grid;
    }

    .cp-footer-col-1,
    .cp-footer-col-5 {
        grid-column: span 2;
    }
}

@media (max-width: 576px) {
    .cp-footer-top {
        grid-template-columns: 1fr;
    }

    .cp-footer-col-1,
    .cp-footer-col-5 {
        grid-column: span 1;
    }
}

/* ================================================
   FOOTER — MOBILE VW
   ================================================ */
@media (max-width: 768px) {
    .cp-footer { padding: 8vw 5vw 5vw; }

    .cp-footer-top {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    /* Col 1 — logo + description + social */
    .cp-footer-col-1 {
        grid-column: unset;
        min-width: unset;
        margin-bottom: 6vw;
    }
    .cp-footer-logo { margin-bottom: 4vw; }
    .cp-footer-logo-icon i  { font-size: 7vw !important; }
    .cp-footer-logo-icon span { font-size: 6vw !important; }

    /* Col 1 description */
    .cp-footer-col-1 > p {
        font-size: 3.8vw;
        line-height: 1.8;
        color: rgba(255,255,255,0.6);
        margin-bottom: 5vw;
    }

    /* Social icons */
    .cp-footer-social { margin-top: 0; margin-bottom: 6vw; }
    .cp-footer-title  { font-size: 4.5vw; margin-bottom: 3vw; }
    .cp-social-icons a {
        width: 10vw;
        height: 10vw;
        font-size: 4vw;
        border-radius: 50%;
        background: #fff;
        color: #111;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 2vw;
        text-decoration: none;
    }

    /* Accordion columns — Col 2,3,4,5 */
    .cp-footer-col:not(.cp-footer-col-1) {
        border-top: 1px solid rgba(255,255,255,0.1);
        min-width: unset;
        grid-column: unset;
    }
    .cp-footer-col-5 {
        border-top: 1px solid rgba(255,255,255,0.1);
        grid-column: unset;
        min-width: unset;
    }

    /* Accordion header */
    .cp-footer-col:not(.cp-footer-col-1) .cp-footer-title,
    .cp-footer-col-5 .cp-footer-title:first-child {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 4vw 0;
        cursor: pointer;
        font-size: 4.5vw;
        color: #fff;
        margin-bottom: 0;
    }
    .cp-footer-col:not(.cp-footer-col-1) .cp-footer-title::after,
    .cp-footer-col-5 .cp-footer-title:first-child::after {
        content: '+';
        font-size: 5vw;
        color: rgba(255,255,255,0.6);
        transition: transform 0.25s;
    }
    .cp-footer-col.open .cp-footer-title::after,
    .cp-footer-col-5.open .cp-footer-title:first-child::after {
        content: '−';
        color: #FFC107;
    }

    /* Accordion body — hidden by default */
    .cp-footer-col:not(.cp-footer-col-1) .cp-footer-links,
    .cp-footer-col-5 .cp-footer-address,
    .cp-footer-col-5 .cp-footer-newsletter-section {
        display: none;
        padding-bottom: 4vw;
    }
    .cp-footer-col.open .cp-footer-links,
    .cp-footer-col-5.open .cp-footer-address,
    .cp-footer-col-5.open .cp-footer-newsletter-section {
        display: block;
    }

    /* Links font size */
    .cp-footer-links li { margin-bottom: 3vw; }
    .cp-footer-links a  { font-size: 3.8vw; }
    .cp-footer-address  { font-size: 3.8vw; line-height: 1.7; }

    /* Newsletter */
    .cp-newsletter-title { font-size: 4.5vw !important; margin-top: 4vw; cursor: default !important; }
    .cp-newsletter-title::after { display: none !important; }
    .cp-newsletter-form { display: flex; gap: 0; margin-bottom: 4vw; }
    .cp-newsletter-form input  { font-size: 3.8vw; padding: 3vw 4vw; flex: 1; }
    .cp-newsletter-form button { font-size: 3.5vw; padding: 3vw 5vw; border-radius: 0 50px 50px 0; }

    /* Payment icons */
    .cp-payment-methods { display: flex; gap: 2vw; flex-wrap: wrap; }
    .cp-payment-methods img { height: 6vw !important; }
    .cp-payment-methods .fab { font-size: 6vw; color: #fff; }

    /* Footer bottom */
    .cp-footer-bottom { padding-top: 5vw; text-align: center; font-size: 3.5vw; }
}

/* Payment outside — desktop hide, mobile show */
.cp-payment-outside {
    display: none;
}

@media (max-width: 768px) {
    .cp-payment-outside {
        display: flex;
        justify-content: center;
        gap: 2vw;
        flex-wrap: wrap;
        padding: 5vw 5vw 0;
    }
    .cp-payment-outside img { height: 6vw !important; }
    .cp-payment-outside .fab { font-size: 6vw; color: #fff; }
}

/* Newsletter + Payment outside block */
.cp-footer-outside {
    display: none; /* desktop pe hidden — desktop mein col-5 mein already hai */
}

@media (max-width: 768px) {
    .cp-footer-outside {
        display: block;
        padding: 5vw 5vw 0;
        border-top: 1px solid rgba(255,255,255,0.1);
    }
    .cp-footer-outside .cp-newsletter-title {
        font-size: 4.5vw;
        color: #fff;
        margin-bottom: 3vw;
        cursor: default;
    }
    .cp-footer-outside .cp-newsletter-form {
        display: flex;
        gap: 0;
        margin-bottom: 5vw;
    }
    .cp-footer-outside .cp-newsletter-form input {
        flex: 1;
        font-size: 3.8vw;
        padding: 3vw 4vw;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(255,255,255,0.3);
        color: #fff;
        outline: none;
    }
    .cp-footer-outside .cp-newsletter-form button {
        font-size: 3.5vw;
        padding: 3vw 5vw;
        border-radius: 50px;
        background: #FFC107;
        color: #111;
        border: none;
        font-weight: 700;
        cursor: pointer;
        flex-shrink: 0;
    }
    .cp-footer-outside .cp-payment-outside {
        display: flex;
        justify-content: center;
        gap: 2vw;
        flex-wrap: wrap;
        padding: 0;
    }
    .cp-footer-outside .cp-payment-outside img { height: 6vw !important; }
    .cp-footer-outside .cp-payment-outside .fab { font-size: 6vw; color: #fff; }
}

/* ================================================
   NEW HERO CSS (Copied from allcategories)
   ================================================ */
.box-by-industry {
  position: relative;
  padding-top: 0;
  padding-bottom: 0;
  margin-bottom: 0;
  display: block;
  overflow: visible;
}
/* Breadcrumb — always pinned at top of section, independent of grid */
.box-by-industry > .hero-breadcrumb {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 6px;
  padding: 40px 40px 0 90px;
  color: #a0a0a0;
  font-size: 0.85rem;
  line-height: 1.5;
  overflow: visible;
  white-space: normal;
  margin-bottom: 0;
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 1440px;
  box-sizing: border-box;
  margin-left: auto;
  margin-right: auto;
}
.box-by-industry > .hero-breadcrumb a,
.box-by-industry > .hero-breadcrumb span {
  display: inline-flex;
  align-items: center;
  color: #a0a0a0;
  text-decoration: none;
  white-space: nowrap;
}
.box-by-industry > .hero-breadcrumb a.breadcrumb-home {
  color: var(--accent-gold);
}
.box-by-industry > .hero-breadcrumb span:last-child {
  color: #ffffff;
}
/* Desktop only — hide on mobile */
.hero-breadcrumb-desktop {
  display: flex;
}
@media (max-width: 768px) {
  .hero-breadcrumb-desktop {
    display: none !important;
  }
}
.industry-hero-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: start;
  gap: 60px;
  padding: 10px 40px 0 90px;
  margin-bottom: 0;
  max-width: 1440px;
  margin-left: auto;
  margin-right: auto;
  min-height: 0;
}
.industry-hero-left {
  min-width: 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  padding-top: 0;
}
.industry-hero-left .hero-breadcrumb a,
.industry-hero-left .hero-breadcrumb span {
  display: inline-flex;
  align-items: center;
  color: #a0a0a0;
  text-decoration: none;
  white-space: nowrap;
}
.industry-hero-left .hero-breadcrumb a.breadcrumb-home {
  color: var(--accent-gold);
}
.industry-hero-left .hero-breadcrumb span:last-child {
  color: #ffffff;
}
.industry-hero-left h1 {
  font-size: 2.75rem;
  font-family: var(--font-heading);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 14px;
  margin-top: 0;
  padding: 0;
}
.highlight-yellow {
  color: var(--accent-gold);
}
.industry-hero-left p {
  color: #a0a0a0;
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-size: 15px;
  line-height: 1.7;
  text-align: justify;
  margin-bottom: 20px;
}
.btn-yellow {
  background-color: #ffc542;
  color: #000;
  padding: 12px 28px;
  border-radius: 30px;
  font-weight: 600;
  font-family: var(--font-body);
  display: inline-block;
  transition: transform 0.3s ease;
  text-decoration: none;
  width: fit-content;
  flex-shrink: 0;
  margin-bottom: 0;
}
.btn-yellow:hover {
  transform: translateY(-2px);
  color: #000;
}
.industry-hero-right {
  min-width: 0;
  display: flex;
  justify-content: flex-end;
  align-items: flex-start;
  padding-top: 0;
  padding-bottom: 0;
  margin-bottom: 0;
}
.hero-image-wrapper {
  position: relative;
  width: 100%;
  max-width: 680px;
  display: flex;
  justify-content: center;
  margin-bottom: 0;
  padding-bottom: 0;
}
.hero-main-img {
  width: 100%;
  max-width: 100%;
  height: auto;
  object-fit: contain;
  display: block;
  max-height: 340px;
  vertical-align: bottom;
  margin-bottom: 0;
}

@media (max-width: 768px) {
  body {
    padding-top: 130px;
  }

  /* ── Hero Section ── */
  .box-by-industry {
    padding-top: 0;
    padding-bottom: 0;
    background: #1a1a1a;
  }

  /* Breadcrumb — hidden on mobile */
  .box-by-industry > .hero-breadcrumb {
    display: none !important;
  }

  /* Grid → single column stack */
  .industry-hero-content {
    display: flex !important;
    flex-direction: column !important;
    gap: 0 !important;
    padding: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 !important;
  }

  /* IMAGE — order 1, on top, full bleed */
  .industry-hero-right {
    order: 1;
    width: 100% !important;
    max-width: 100% !important;
    display: flex !important;
    justify-content: center;
    align-items: flex-end;
    padding: 0 !important;
    margin: 0 !important;
    background: #1a1a1a;
    overflow: hidden;
  }
  .hero-image-wrapper {
    width: 100% !important;
    max-width: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
    display: flex;
    justify-content: center;
  }
  .hero-main-img {
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
    max-height: none !important;
    display: block;
    object-fit: contain;
    vertical-align: bottom;
  }

  /* TEXT — order 2, below image */
  .industry-hero-left {
    order: 2;
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    padding: 20px 20px 28px 20px !important;
    background: #1a1a1a;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }

  .industry-hero-left h1 {
    font-size: 28px;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 14px;
    margin-top: 0;
    word-break: break-word;
    text-align: left;
    color: #ffffff;
  }

  .industry-hero-left p {
    font-size: 14px;
    line-height: 1.75;
    color: #a0a0a0;
    margin-bottom: 24px;
    text-align: left;
    width: 100%;
  }

  /* Button — left aligned like figma */
  .btn-yellow {
    display: inline-block !important;
    width: auto !important;
    margin: 0 !important;
    text-align: center;
    padding: 13px 32px;
    font-size: 15px;
    font-weight: 700;
    border-radius: 50px;
    background-color: #ffc542;
    color: #000;
  }
}

/* Trust Bar / Logos */
.trust-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 1440px;
  height: 90px;
  margin: 0 auto 0;
  padding: 0 60px;
  box-sizing: border-box;
  gap: 40px;
  border-top: 1px solid rgba(245, 197, 66, 0.24);
  border-bottom: 1px solid rgba(245, 197, 66, 0.24);
}

/* .trust-bar {
    overflow: hidden;
} */

.trust-logos {
    display: flex;
    align-items: center;
    gap: 70px;
    width: max-content;
    animation: marquee 25s linear infinite;
}
.trust-logos-wrapper{
    flex:1;
    overflow:hidden;
}
.logo-item {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

.logo-item img {
    max-height: 45px;
    width: auto;
    display: block;
    transition: transform .3s ease;
}

.logo-item:hover img {
    transform: scale(1.08);
}

@keyframes marquee {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(-50%);
    }
}


.trust-reviews {
  display: flex;
  align-items: center;
  gap: 15px;
  flex: 0 0 auto;
  padding-right: 38px;
  border-right: 1px solid rgba(245, 197, 66, 0.35);
}
.trust-reviews .stars {
  color: var(--accent-gold);
  font-size: 1.2rem;
  display: flex;
  gap: 5px;
}
.review-link {
  color: #a0a0a0;
  font-size: 0.9rem;
  text-decoration: underline;
  white-space: nowrap;
}
.logo-item {
  display: flex;
  align-items: center;
  justify-content: center;
  flex: 0 0 112px;
  width: 112px;
  height: 42px;
  opacity: 1;
  scroll-snap-align: start;
  transition: opacity 0.3s ease, filter 0.3s ease;
}
.logo-item img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  filter: brightness(0) invert(77%);
}
.logo-item:hover img {
  filter: grayscale(0%);
}
@media (max-width: 768px) {
  .trust-bar {
    height: auto;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    padding: 16px 0;
    gap: 0;
    border-top: 1px solid rgba(245, 197, 66, 0.24);
    border-bottom: 1px solid rgba(245, 197, 66, 0.24);
    overflow: hidden;
  }
  .trust-reviews {
    display: none;
    border-right: 0;
    padding-right: 0;
  }
  .trust-logos-wrapper {
    flex: 1;
    overflow: hidden;
    width: 100%;
  }
  .trust-logos {
    display: flex !important;
    flex-direction: row;
    align-items: center;
    flex-wrap: nowrap;
    width: max-content;
    gap: 40px;
    animation: marquee 18s linear infinite;
    overflow: visible;
  }
  .logo-item {
    flex: 0 0 80px;
    width: 80px;
    height: 32px;
    opacity: 0.85;
  }
  .logo-item img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    filter: brightness(0) invert(77%);
  }
}


/* --- Base Section & Background Floors --- */
.quote-section {
  width: 100%;
  padding: 30px 5%;
  box-sizing: border-box;
  background-color: #151515; /* Layout background floor */
  font-family: var(--font-body), sans-serif;
}

.quote-container {
  width: 100%;
  max-width: 1239px;
  margin: 0 auto;
  border-radius: 8px;
  display: flex;
  align-items: stretch;
  justify-content: center;
  gap: 0;
  overflow: hidden;
  box-sizing: border-box;
}

/* --- Column 1 Layout (Image Panel) --- */
.quote-steps-col {
  width: 368px;
  background-color: var(--bg-darker);
  padding: 0;
  box-sizing: border-box;
  display: flex;
  align-items: stretch;
  justify-content: center;
  overflow: hidden;
  align-self: stretch;
}

.quote-side-image {
  width: 100%;
  height: 100%;
  display: flex;
  flex: 1;
}

.quote-side-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center top;
  display: block;
  flex: 1;
}

/* --- Column 2 Layout (Request Free Quote Form Container) --- */
.quote-form-col {
  flex: 1;
  background-color: var(--bg-dark);
  border-radius: 0 8px 8px 0;
  padding: 25px 45px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
}

/* Main Form Heading */
.quote-form-col h2 {
  width: 400px;
  height: 44px;
  font-family: var(--font-heading), sans-serif;
  font-weight: 700;
  font-size: 28px;
  line-height: 44px;
  color: var(--text-main);
  margin: 0 auto 20px auto;
  text-align: center;
}

.instant-quote-form {
  width: 100%;
  display: flex;
  flex-direction: column;
  
}

/* --- Structural Form Grids --- */
.form-row {
  display: grid;
  gap: 10px;
  width: 100%;
}

/* Double input fields: Name, Email, Phone, Address */
.dual-grid {
  grid-template-columns: calc(50% - 6px) calc(50% - 6px);
}

/* Dimensions Row: Width, Length, Depth, Unit */
.dimensions-grid {
  grid-template-columns: repeat(4, 1fr);
  max-width: 693px;
}

/* Dropdown selections: Material, Colors, Addons */
.options-grid-custom {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 12px;
  width: 100%;
}
.options-grid-custom > .form-group:nth-child(1),
.options-grid-custom > .form-group:nth-child(2),
.options-grid-custom > .form-group:nth-child(3) {
  grid-column: span 2;
}
.options-grid-custom > .form-group:nth-child(4),
.options-grid-custom > .form-group:nth-child(5) {
  grid-column: span 3;
}

.triple-grid {
  grid-template-columns: repeat(3, 1fr);
  max-width: 692px;
}

.quantity-upload-grid {
  grid-template-columns: repeat(2, 1fr);
  max-width: 691.13px;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 0px;
  height: 38px; /* Fit perfectly to input height */
}

.form-group.textarea-group {
  height: auto;
  min-height: 70px;
  width: 100%;
}

.form-group > label {
  display: none; /* Hide labels above inputs */
  font-size: 13px;
  color: #ffffff; /* Updated: Changed labels to clean white color */
  font-weight: 300;
}

/* --- Component Fields Controls --- */
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  height: 38px;
  background-color: var(--bg-darker); /* Keeping dark theme inputs */
  border: 0.2px solid #727272; /* Required layout boundary rules */
  border-radius: 6px;
  padding: 8px 12px;
  color: var(--text-main);
  font-size: 13px;
  box-sizing: border-box;
  outline: none;
}

.form-group textarea {
  height: 70px;
  resize: none;
}

/* File Upload Wrapper Styling */
/* File Upload Wrapper Styling */
.file-upload-wrapper {
  display: flex;
  border: 0.2px solid #727272;
  border-radius: 6px;
  background-color: var(--bg-darker);
  overflow: hidden;
  height: 38px;
  box-sizing: border-box;
}

.file-upload-wrapper input[type="text"],
.file-upload-wrapper input:not([type="submit"]):not([type="button"]) {
  border: none;
  height: 100%;
  background: transparent;
  color: #fff;
  padding: 0 12px;
  outline: none;
}

/* --- BULLETPROOF UPLOAD BUTTON --- */
.upload-btn {
  background-color: var(--accent-gold) !important; /* Force gold bg */
  color: var(--bg-darker) !important; /* Force dark text color override */

  /* Kill native element defaults (links, buttons, labels) */
  border: none;
  outline: none;
  text-decoration: none;
  -webkit-appearance: none;
  appearance: none;

  font-weight: 700;
  padding: 0 16px;

  display: flex;
  align-items: center;
  justify-content: center; /* Centers text/icons horizontally */
  align-self: stretch; /* Stretches the button to perfectly fill the parent height */
  height: 100%; /* Fallback vertical height alignment */

  gap: 8px;
  cursor: pointer;
  font-size: 16px;
  white-space: nowrap; /* Prevents button text from breaking into two lines */
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}

/* Special target fix if the button tag is a native browser input/button element */
.upload-btn::-webkit-file-upload-button {
  color: var(--bg-darker) !important;
  font-weight: 700 !important;
}
/* --- Submit Action Button Design --- */
.submit-quote-btn {
  width: 298px;
  height: 42px;
  background-color: var(--accent-gold);
  color: var(--bg-dark);
  font-family: var(--font-heading), sans-serif;
  font-size: 15px;
  font-weight: 700;
  border: none;
  border-radius: 40px;
  padding: 10px 20px;
  gap: 10px;
  cursor: pointer;
  margin: 15px auto 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.2s;
}

.submit-quote-btn:hover {
  background-color: var(--accent-gold-hover);
}

/* --- Inline Human Verification (Inside Form) --- */
.human-verification-inline {
  width: 100%;
  margin-top: 8px;
  padding: 12px 20px;
  background-color: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 193, 7, 0.2);
  border-radius: 8px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.human-verification-header {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.human-verification-inline-title {
  color: var(--text-main);
  font-size: 15px;
  font-weight: 700;
  margin: 0;
}

.human-verification-inline-copy {
  color: var(--text-muted);
  font-size: 13px;
  margin: 0;
}

.human-verification-inline-control {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

.human-question {
  color: var(--accent-gold);
  font-weight: 700;
  white-space: nowrap;
  font-size: 15px;
}

.human-answer {
  width: 110px;
  height: 44px;
  background-color: var(--bg-darker);
  border: 0.2px solid #727272;
  border-radius: 8px;
  color: var(--text-main);
  text-align: center;
  outline: none;
  padding: 0 12px;
  font-size: 14px;
}

.human-check-btn {
  height: 44px;
  border: 0;
  border-radius: 999px;
  background-color: var(--accent-gold);
  color: var(--bg-dark);
  font-weight: 700;
  padding: 0 24px;
  cursor: pointer;
  transition: background-color 0.2s;
  font-size: 14px;
}

.human-check-btn:hover {
  background-color: var(--accent-gold-hover);
}

.human-status {
  color: var(--text-muted);
  font-size: 13px;
  margin: 0;
  min-height: 18px;
}

.human-status.is-error {
  color: #ff6b6b;
}

.human-status.is-success {
  color: #72d17f;
}

@media (max-width: 768px) {
  .human-verification-inline {
    padding: 18px 16px;
  }

  .human-verification-inline-title {
    font-size: 14px;
  }

  .human-verification-inline-copy {
    font-size: 12px;
  }

  .human-verification-inline-control {
    width: 100%;
  }

  .human-answer {
    flex: 1 1 90px;
    min-width: 90px;
  }

  .human-status {
    width: 100%;
  }s
}
/* --- Responsive Adaptations --- */
@media (max-width: 992px) {
  .quote-container {
    flex-direction: column;
    height: auto;
  }
  .quote-steps-col,
  .quote-form-col {
    width: 100%;
    max-width: 100%;
  }
  .quote-steps-col {
    display: block;
  }

  .quote-side-image,
  .quote-side-image img {
    min-height: 360px;
  }
}
@media (max-width: 768px) {
  .quote-form-col h2 {
    font-family: "Inter", sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 1.3; /* Allows the height to scale naturally if it wraps */
    letter-spacing: 0%;

    /* Fixes */
    padding-bottom: 0; /* Changed 'NONE' to 0 */
    margin-left: 0; /* Reset any hardcoded left margins */
    left: auto; /* Reset absolute positioning if applied */
    text-align: center; /* Centers the heading nicely on mobile view */
    width: 100%; /* Forces it to use the available container width */
  }

  /* ... rest of your mobile styles ... */
}
@media (max-width: 768px) {
  .quote-steps-col {
    grid-template-columns: 1fr;
    padding: 40px 20px;
  }
  .quote-form-col {
    padding: 35px 20px;
  }

  /* First 4 fields (Name, Email, Phone, Physical Address) - Full width in mobile */
  .instant-quote-form > .form-row.dual-grid:nth-child(1),
  .instant-quote-form > .form-row.dual-grid:nth-child(2) {
    grid-template-columns: 1fr !important;
  }

  /* All standalone form-groups stay full width */
  .instant-quote-form > .form-group {
    width: 100%;
  }

  /* All other dual-grid rows stay 2x2 */
  .form-row.dual-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
  }

  .triple-grid,
  .quantity-upload-grid {
    grid-template-columns: 1fr;
  }
  .dimensions-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .options-grid-custom {
    grid-template-columns: repeat(2, 1fr);
  }
  /* Reset the span overrides from desktop so all 4 items show 2x2 */
  .options-grid-custom > .form-group:nth-child(1),
  .options-grid-custom > .form-group:nth-child(2),
  .options-grid-custom > .form-group:nth-child(3),
  .options-grid-custom > .form-group:nth-child(4) {
    grid-column: span 1;
  }
  /* Upload (5th item) spans both columns */
  .options-grid-custom > .form-group:nth-child(5) {
    grid-column: span 2;
  }
  .form-group,
  .form-row,
  .form-group.textarea-group {
    max-width: 100%;
    height: auto;
  }
  .form-group input,
  .form-group select {
    height: 46px;
  }
}

/* --- CTA Main Container Block --- */

</style>
@php
    $isGiftBoxesPage = ($slug ?? '') === 'gift-boxes';
@endphp
<!-- ================================================
     HERO SECTION
     ================================================ -->
        <!-- Box By Industry Section -->
        <section class="box-by-industry{{ $isGiftBoxesPage ? ' gift-boxes-page' : '' }}">

            {{-- Breadcrumb — outside grid, always at top --}}
            <div class="hero-breadcrumb hero-breadcrumb-desktop">
                <a href="{{ url('/') }}" class="breadcrumb-home">
                    <img src="{{ asset('uploads/house-chimney 1.svg') }}" alt="Home" style="width: 16px; height: 16px;">
                </a>
                @if(isset($parent_cat) && !empty($parent_cat))
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16" style="margin: 0 8px; color: #a0a0a0;">
                          <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                          <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                        <a href="{{ url($parent_cat->category_url) }}" style="color: #a0a0a0; text-decoration: none;">
                            {{ $parent_cat->name }}
                        </a>
                    </span>
                @endif
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16" style="margin: 0 8px; color: #a0a0a0;">
                      <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                      <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                    {{ !empty($value) && count($value) > 0 ? $value[0]->name : 'Category' }}
                </span>
            </div>

            <div class="industry-hero-content">
                <div class="industry-hero-left">
                    <h1>
                        @if(!empty($value[0]->hero_title))
                            {{ $value[0]->hero_title }}
                        @else
                            {{ !empty($value) && count($value) > 0 ? $value[0]->name : 'Rigid Boxes' }}
                        @endif
                    </h1>

                    <p>
                        @if(!empty($value[0]->hero_desc))
                            {{ $value[0]->hero_desc }}
                        @elseif(!empty($value[0]->description))
                            {{ Str::limit(strip_tags($value[0]->description), 300) }}
                        @else
                            Tailor-made packaging solutions designed to reflect the unique demands of your industry. From opulent jewellery boxes and luxury retail packaging to sleek tech solutions, we combine premium craftsmanship, functionality, and attention to detail to elevate your brand and create a memorable unboxing experience.
                        @endif
                    </p>

                    <a href="{{ url('request-quote') }}" class="btn btn-yellow">Design Custom Boxes</a>
                </div>

                <div class="industry-hero-right">
                    <div class="hero-image-wrapper">
                        <img src="{{ !empty($value[0]->hero_image) ? (file_exists(public_path('uploads/'.$value[0]->hero_image)) ? asset('uploads/'.$value[0]->hero_image) : asset('images/'.$value[0]->hero_image)) : './assets/Box packing home banner.png' }}" alt="{{ !empty($value[0]->hero_title) ? $value[0]->hero_title : 'Premium packaging boxes' }}"
                            class="hero-main-img">
                    </div>
                </div>
            </div>
        </section>

        @include('web.trustbar')

<!-- ================================================
     PRODUCTS SECTION
     ================================================ -->
<section class="cp-products">
    <div class="cp-wrap">

        @unless($isGiftBoxesPage)
        <div class="cp-sec-head">
            <!-- <span class="cp-badge">OUR PRODUCTS</span> -->
            <h2 class="cp-sec-title">Lid & Base Boxes Collection</h2>
            <p class="cp-sec-sub">Browse our ready-to-order lid and base rigid boxes, fully customizable to your brand.</p>
        </div>
        @endunless

        <div class="cp-grid">
            @if(isset($sub_product) && count($sub_product) > 0)
                @foreach($sub_product->take(8) as $product)
                <a href="{{ url($product->url) }}" style="text-decoration: none; color: inherit;">
                    <div class="cp-card">
                        <div class="cp-card-img" style="background-image: url('{{ asset('images/'.$product->image) }}'); background-size: cover; background-position: center;"></div>
                        <p class="cp-card-name">{{ $product->title }}</p>
                    </div>
                </a>
                @endforeach
            @else
                <p style="text-align:center; width:100%; color: #fff;">No products found in this category.</p>
            @endif
        </div>

        @unless($isGiftBoxesPage)
        <div class="cp-center">
            <!-- <a href="#" class="cp-cta">Explore All Products</a> -->
        </div>
        @endunless

    </div>
</section>

<!-- ================================================
     WHY CHOOSE SECTION
     ================================================ -->
<?php
    $whyTitle = trim(strip_tags($value[0]->why_choose_title ?? ''));
    // Remove common empty tags like <p><br></p>, etc.
    $whyDescHtml = $value[0]->why_choose_desc ?? '';
    $whyDescClean = trim(strip_tags(str_replace(['&nbsp;', '<br>', '<br/>'], '', $whyDescHtml)));
    $whyImg = $value[0]->why_choose_img ?? '';
    
    $hasWhyChoose = !empty($whyTitle) || !empty($whyDescClean) || !empty($whyImg);
?>
@if($hasWhyChoose)
<section class="cp-why">
    <div class="cp-wrap">
        <div class="cp-why-grid">

            <div class="cp-why-text">
                <span class="cp-badge">OVERVIEW</span>
                <h2 class="cp-why-title">{{ $value[0]->why_choose_title }}</h2>
                <div class="cp-why-para" style="color: #cccccc;">
                    {!! $value[0]->why_choose_desc !!}
                </div>
            </div>

            <div class="cp-why-img">
                <div class="cp-why-photo-wrap">
                    @if(!empty($value[0]->why_choose_img))
                        <img src="{{ asset('images/' . $value[0]->why_choose_img) }}" alt="{{ $value[0]->why_choose_title }}" class="cp-why-photo">
                    @else
                        <img src="{{ asset('assets/images/default.jpg') }}" alt="Why Choose" class="cp-why-photo">
                    @endif
                </div>
                <a href="{{ url('request-quote') }}" class="cp-cta cp-why-quote-btn">Get a Quote</a>
            </div>

        </div>
    </div>
</section>
@endif

<!-- ================================================
     HOW IT WORKS SECTION
     ================================================ -->
<section class="hiw-section">
    <div class="hiw-wrap">

        <div class="hiw-header">
            <h2 class="hiw-title">How it Works</h2>
            <p class="hiw-subtitle">Follow our simple step-by-step process to bring your custom packaging to life.</p>
        </div>

        <div class="hiw-grid">

            <div class="hiw-step" data-num="1">
                <div class="hiw-step-body">
                    <span class="hiw-step-title">Share Your Idea</span>
                    <p class="hiw-step-text">Send us your design, logo, or packaging request.</p>
                </div>
            </div>

            <div class="hiw-step" data-num="2">
                <div class="hiw-step-body">
                    <span class="hiw-step-title">Get Your Free Quote &amp; Mockup</span>
                    <p class="hiw-step-text">We'll provide a custom price and a visual preview of your box.</p>
                </div>
            </div>

            <div class="hiw-step" data-num="3">
                <div class="hiw-step-body">
                    <span class="hiw-step-title">Approve &amp; Receive</span>
                    <p class="hiw-step-text">Once approved, we produce and deliver your premium packaging with <strong>free shipping.</strong></p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="customize-section">
    <div class="customize-header">
        <h2>Customize Your Box</h2>
        <p>Choose materials, finishes, and add-ons to build your perfect rigid box.</p>
    </div>

    <div class="filter-buttons">
        <button class="filter-btn active">Coating & Laminations</button>
        <button class="filter-btn">Printing Options</button>
        <button class="filter-btn">Special Finishes</button>
        <button class="filter-btn">Paperboard</button>
        <button class="filter-btn">Corrugated</button>
        <button class="filter-btn">Fluted Grades</button>
        <button class="filter-btn">Rigid Materials</button>
    </div>

    <div class="tab-contents-container">
        <!-- Coating & Laminations -->
        <div class="customize-grid" id="cat-tab-coating-and-laminations" style="display: grid;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/Lamination.webp') }}" alt="Lamination"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Lamination</span><p>Laminated protective film that adheres to the surface of packaging materials to maximize durability.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/UV.webp') }}" alt="UV"></div>
                <div class="card-content"><span class="card-title" style="display: block;">UV</span><p>Fast-drying coating cured with ultraviolet light. Available in gloss or matte finish.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/Varnish.webp') }}" alt="Varnish"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Varnish</span><p>Clear coating applied using the CMYK printing method. Available in gloss, satin, or matte.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/anti-scratch-lamination.webp') }}" alt="Anti Scratch Lamination"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Anti Scratch Lamination</span><p>Laminated BOPP film that is scratch, scuff, and fingerprint resistant. Cost-effective option.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/aqueous-coating-.webp') }}" alt="Aqueous Coating"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Aqueous Coating</span><p>Clear, fast-drying, water-based, and eco-friendly coating. Available in gloss or matte finish.</p><div class="card-icons"><span class="icon-circle">♻️</span><span class="icon-circle">🍃</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/soft-touch-coating.webp') }}" alt="Soft Touch Coating"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Soft Touch Coating</span><p>Soft to the touch coating that creates a velvety texture for a more tactile appeal.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/soft-touch-silk-lamination-.webp') }}" alt="Soft Touch Silk Lamination"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Soft Touch Silk Lamination</span><p>Soft to the touch lamination similar to peach skin. Available in a satin or matte finish.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Coating %26 Laminations/spot-gloss-uV-.webp') }}" alt="Spot Gloss UV"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Spot Gloss UV</span><p>UV coating that is applied to a specified area and cured using ultraviolet light.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
        </div>

        <!-- Printing Options -->
        <div class="customize-grid" id="cat-tab-printing-options" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/digital-print.webp') }}" alt="Digital Print"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Digital Print</span><p>Fast and cost-effective printing with sharp, high-quality colors ideal for shorter runs and quick turnaround times.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/offset-print.webp') }}" alt="Offset Print"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Offset Print</span><p>The industry standard for high-volume printing, offering unparalleled color accuracy and premium finish quality.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/oil-based-Inks.webp') }}" alt="Oil Based Inks"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Oil Based Inks</span><p>Traditional inks that deliver rich, vibrant colors with a smooth, glossy finish for high-impact designs.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/pantone-metallic.webp') }}" alt="Pantone Metallic"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Pantone Metallic</span><p>Premium inks blended with metallic particles to give your packaging a luxurious, eye-catching shine.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/pantone.webp') }}" alt="Pantone"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Pantone</span><p>Standardized color matching system ensuring absolute consistency for your brand colors across all prints.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/soy-vegetable-based-Inks.webp') }}" alt="Soy Vegetable Based Inks"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Soy Vegetable Based Inks</span><p>Eco-friendly, sustainable inks that produce bright colors while minimizing environmental impact.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/uv-print.webp') }}" alt="UV Print"></div>
                <div class="card-content"><span class="card-title" style="display: block;">UV Print</span><p>Ultra-violet cured printing that dries instantly, offering superior durability, scuff-resistance, and sharp details.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/water-based-Inks.webp') }}" alt="Water Based Inks"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Water Based Inks</span><p>Non-toxic and environmentally safe inks that provide a soft, natural finish perfect for sustainable packaging.</p></div>
            </div>
        </div>

        <!-- Special Finishes -->
        <div class="customize-grid" id="cat-tab-special-finishes" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/blind-debossing-.webp') }}" alt="Blind Debossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Blind Debossing</span><p>A classic technique that presses your design down into the material, creating a subtle, indented texture.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/blind-embossing.webp') }}" alt="Blind Embossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Blind Embossing</span><p>Elevates your design by raising it above the material surface, adding a tactile, premium 3D effect.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/cold-foil-printing.webp') }}" alt="Cold Foil Printing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Cold Foil Printing</span><p>A fast inline process that applies metallic foil to your packaging for a striking, reflective finish.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/combination-embossing.webp') }}" alt="Combination Embossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Combination Embossing</span><p>Combines foil stamping with embossing to create a stunning, raised metallic design that stands out.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/hot-foil-stamping.webp') }}" alt="Hot Foil Stamping"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Hot Foil Stamping</span><p>Uses heat and pressure to apply metallic or pigmented foil, adding a luxurious, high-end feel.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/registered-embossing-.webp') }}" alt="Registered Embossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Registered Embossing</span><p>Precisely aligns the embossed texture with printed ink, creating a detailed and highly tactile design element.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/window-patching.webp') }}" alt="Window Patching"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Window Patching</span><p>Adds a transparent film window to your box, allowing customers to view the product inside securely.</p></div>
            </div>
        </div>

        <!-- Paperboard -->
        <div class="customize-grid" id="cat-tab-paperboard" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/sbs-c1s.webp') }}" alt="SBS C1S"></div>
                <div class="card-content"><span class="card-title" style="display: block;">SBS C1S</span><p>Solid Bleached Sulfate coated on one side, offering excellent printability and a clean white interior.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/sbs-c2s.webp') }}" alt="SBS C2S"></div>
                <div class="card-content"><span class="card-title" style="display: block;">SBS C2S</span><p>Solid Bleached Sulfate coated on both sides, providing a smooth surface for high-quality printing inside and out.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/ccnb.webp') }}" alt="CCNB"></div>
                <div class="card-content"><span class="card-title" style="display: block;">CCNB</span><p>Clay Coated News Back board made from recycled materials, offering a cost-effective solution with good print quality.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/fully-recycled-ccnb.webp') }}" alt="Fully Recycled CCNB"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Fully Recycled CCNB</span><p>100% recycled paperboard with a clay coating, perfect for eco-conscious brands needing vibrant prints.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/natural-brown-kraft.webp') }}" alt="Natural Brown Kraft"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Natural Brown Kraft</span><p>Unbleached, durable kraft board that gives your packaging a rustic, organic, and eco-friendly aesthetic.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/white-kraft.webp') }}" alt="White Kraft"></div>
                <div class="card-content"><span class="card-title" style="display: block;">White Kraft</span><p>Bleached kraft board combining the strength of kraft with a clean, white surface for excellent print contrast.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/black-kraft.webp') }}" alt="Black Kraft"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Black Kraft</span><p>Solid black throughout the board, providing a sleek, modern, and premium look without edge whitening.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/uncoated-unbleached-kraft-(uuk).webp') }}" alt="Uncoated Unbleached Kraft (UUK)"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Uncoated Unbleached Kraft (UUK)</span><p>A raw, natural texture that maximizes sustainability and provides an earthy, minimalist vibe.</p></div>
            </div>
        </div>

        <!-- Corrugated -->
        <div class="customize-grid" id="cat-tab-corrugated" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/bleached-white-board-.webp') }}" alt="Bleached White Board"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Bleached White Board</span><p>A strong corrugated material with a bright white outer layer, ensuring vibrant and accurate color printing.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/kemi-white-board-.webp') }}" alt="Kemi White Board"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Kemi White Board</span><p>Premium coated corrugated board offering superior ink holdout for high-resolution, photographic prints.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/natural-brown-kraft-linerboard-.webp') }}" alt="Natural Brown Kraft Linerboard"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Natural Brown Kraft Linerboard</span><p>Standard unbleached corrugated board offering maximum strength and a classic, eco-friendly appearance.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/oyster-white-board-.webp') }}" alt="Oyster White Board"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Oyster White Board</span><p>A mottled white corrugated board that provides a clean background while maintaining structural integrity.</p></div>
            </div>
        </div>

        <!-- Fluted Grades -->
        <div class="customize-grid" id="cat-tab-fluted-grades" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/A-flute.webp') }}" alt="A Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">A Flute</span><p>The thickest flute profile (1/4"), providing maximum cushioning and stacking strength for fragile items.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/b-flute.webp') }}" alt="B Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">B Flute</span><p>A versatile profile (1/8") offering excellent crush resistance and a smooth surface for high-quality printing.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/c-flute.webp') }}" alt="C Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">C Flute</span><p>The most common corrugated flute (3/16"), offering an ideal balance of cushioning and compression strength.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/Double-Wall.webp') }}" alt="Double Wall"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Double Wall</span><p>Combines two flute layers for exceptional durability and protection, ideal for heavy or bulk shipping.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/e-flute.webp') }}" alt="E Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">E Flute</span><p>A very thin profile (1/16") that provides excellent printability and a sleek, retail-ready appearance.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/f-flute.webp') }}" alt="F Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">F Flute</span><p>Ultra-thin micro-flute (1/32") offering premium structural rigidity for small, high-end retail boxes.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/Triple-Wall.webp') }}" alt="Triple Wall"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Triple Wall</span><p>Three layers of fluting providing industrial-grade strength, often used as a lightweight alternative to wood.</p></div>
            </div>
        </div>

        <!-- Rigid Materials -->
        <div class="customize-grid" id="cat-tab-rigid-materials" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Rigid Material/Duplex-Chipboard-.webp') }}" alt="Duplex Chipboard"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Duplex Chipboard</span><p>A sturdy, rigid board with a white coated exterior and grey interior, perfect for premium setup boxes.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Rigid Material/grey-chipboard-cardboard.webp') }}" alt="Grey Chipboard Cardboard"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Grey Chipboard Cardboard</span><p>Thick, recycled rigid board that serves as the strong foundational core for luxury wrapped boxes.</p></div>
            </div>
        </div>
    </div><!-- /.tab-contents-container -->

    <script>
    (function() {
        var filterBtns = document.querySelectorAll('.customize-section .filter-btn');
        var grids = document.querySelectorAll('.customize-section .customize-grid');

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                filterBtns.forEach(function(b) { b.classList.remove('active'); });
                btn.classList.add('active');

                grids.forEach(function(grid) { grid.style.display = 'none'; });

                var tabName = btn.textContent.trim().toLowerCase().replace(/&/g, 'and').replace(/\s+/g, '-');
                var targetGrid = document.getElementById('cat-tab-' + tabName);
                if (targetGrid) {
                    targetGrid.style.display = 'grid';
                }
            });
        });
    })();
    </script>
</section>
        <!-- ==========================================
             TESTIMONIALS SECTION
        =========================================== -->
        <section class="testimonials-section">
            <div class="container">

                <div class="testimonials-header">
                    <!-- <span class="section-badge-text">TESTIMONIALS</span> -->
                    <h2>What Our Customers Say</h2>
                    <p>Hear from brands who trust us with their packaging needs.</p>
                </div>

                <div class="testimonial-grid">
                    @foreach($testimonial as $testi)
                    <div class="testimonial-card">
                        <img src="{{ asset('images/' . $testi->image) }}" alt="{{ $testi->name }}" class="avatar-img">
                        <p class="testimonial-text">
                            {{ $testi->comment }}
                        </p>
                        @if(strlen($testi->comment) > 130)
                        <button class="read-more-btn">Read more</button>
                        @endif

                        <span class="testi-name">{{ $testi->name }}</span>
                        <span>{{ $testi->profile_link }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="testimonial-nav">
                    <button class="testimonial-prev-btn"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg></button>
                    <button class="testimonial-next-btn"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg></button>
                </div>

            </div>
        </section>

        <!-- Testimonials Navigation Script -->
        <script>
        (function() {
            const grid = document.querySelector('.testimonial-grid');
            const prevBtn = document.querySelector('.testimonial-prev-btn');
            const nextBtn = document.querySelector('.testimonial-next-btn');

            // Read More Logic
            const readMoreBtns = document.querySelectorAll('.read-more-btn');
            readMoreBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const textPara = this.previousElementSibling;
                    if(textPara) {
                        textPara.classList.toggle('expanded');
                        if (textPara.classList.contains('expanded')) {
                            this.textContent = 'Read less';
                        } else {
                            this.textContent = 'Read more';
                        }
                    }
                });
            });

            if (!grid || !prevBtn || !nextBtn) return;

            let currentIndex = 0;
            const cards = grid.querySelectorAll('.testimonial-card');
            const totalCards = cards.length;

            function scrollToCard(index) {
                const visibleCards = window.innerWidth > 992 ? 3 : 1;
                const maxIndex = totalCards - visibleCards;

                if (index < 0) index = 0;
                if (index > maxIndex) index = maxIndex;

                currentIndex = index;
                const gap = window.innerWidth > 992 ? 25 : 0;
                const cardWidth = cards[0].offsetWidth + gap;
                grid.scrollTo({
                    left: cardWidth * index,
                    behavior: 'smooth'
                });
            }

            prevBtn.onclick = function() {
                scrollToCard(currentIndex - 1);
            };

            nextBtn.onclick = function() {
                scrollToCard(currentIndex + 1);
            };

            // Track scroll position
            grid.addEventListener('scroll', function() {
                const gap = window.innerWidth > 992 ? 25 : 0;
                const cardWidth = cards[0].offsetWidth + gap;
                currentIndex = Math.round(grid.scrollLeft / cardWidth);
            });
        })();
        </script>

<!-- ================================================
     REQUEST A FREE QUOTE SECTION
     ================================================ -->
<section class="quote-section">
            <div class="quote-container">

                <div class="quote-steps-col">
                    <div class="quote-side-image">
                        <img src="{{ asset('uploads/frame-81.webp') }}" alt="Custom packaging quote">
                    </div>
                </div>
                <div class="quote-form-col">
                    <h2>Request a Free Quote</h2>

                    @if(Session::has('success'))
                        <div class="alert alert-success" style="background: #28a745; color: white; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; font-weight: 600; text-align: center;">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form class="instant-quote-form" action="{{ url('submit-quote') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="source" value="Categories quote form">
                        <input type="hidden" name="page_url" value="{{ url()->current() }}">
                        <div class="form-row dual-grid">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="form-row dual-grid">
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="tel" name="phone" placeholder="Enter your number" required>
                            </div>
                            <div class="form-group">
                                <label>Physical Address</label>
                                <input type="text" name="address" placeholder="Enter your address">
                            </div>
                        </div>

                        <div class="form-row dimensions-grid">
                            <div class="form-group">
                                <label>Width *</label>
                                <input type="text" name="width" placeholder="Width" required>
                            </div>
                            <div class="form-group">
                                <label>Length *</label>
                                <input type="text" name="length" placeholder="Length" required>
                            </div>
                            <div class="form-group">
                                <label>Depth *</label>
                                <input type="text" name="depth" placeholder="Depth" required>
                            </div>
                            <div class="form-group">
                                <label>Units *</label>
                                <select name="unit" required>
                                    <option value="mm">mm</option>
                                    <option value="cm">cm</option>
                                    <option value="inch">inch</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row options-grid-custom">
                            <div class="form-group">
                                <label>Select Material</label>
                                @php
                                    $materialCategory = DB::table('add_category')->where('name', 'Box by Material')->first();
                                    $materials = $materialCategory ? DB::table('add_category')->where('parent_category', $materialCategory->cat_id)->where('status', 1)->get() : collect([]);
                                @endphp
                                <select name="material">
                                    <option value="">Select Material</option>
                                    @foreach($materials as $material)
                                        <option value="{{ $material->name }}">{{ $material->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Color Options</label>
                                <select name="color_options">
                                    <option value="">Color Options</option>
                                    <option value="1 Color">1 Color</option>
                                    <option value="2 Colors">2 Colors</option>
                                    <option value="3 Colors">3 Colors</option>
                                    <option value="Full Color">Full Color</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Product Name</label>
                                <input type="text" name="product_name" placeholder="Enter product name">
                            </div>
                            <div class="form-group">
                                <label>Quantity *</label>
                                <input type="number" name="quantity" placeholder="Enter quantity" required>
                            </div>
                            <div class="form-group upload-group">
                                <label>Upload File Here</label>
                                <div class="file-upload-wrapper">
                                    <input type="text" placeholder="No file choosen" readonly>
                                    <label class="upload-btn">Upload <input type="file" name="artwork" style="display:none;"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group textarea-group">
                            <label>Message</label>
                            <textarea name="message" placeholder="Enter your message" rows="4"></textarea>
                        </div>

                        <!-- ================================================
                             HUMAN VERIFICATION INLINE
                             ================================================ -->
                        <div class="human-verification-inline">
                            <div class="human-verification-header">
                                <h3 class="human-verification-inline-title">Are you a human?</h3>
                                <p class="human-verification-inline-copy">Solve this quick addition before continuing.</p>
                            </div>
                            <div class="human-verification-inline-control">
                                <span class="human-question" id="humanQuestion">0 + 0 =</span>
                                <input type="number" class="human-answer" id="humanAnswer" placeholder="Answer" aria-label="Human verification answer">
                                <button type="button" class="human-check-btn" id="humanCheckBtn">Verify</button>
                            </div>
                            <span class="human-status" id="humanStatus" aria-live="polite"></span>
                        </div>

                        <button type="submit" class="submit-quote-btn">Instant Quote</button>
                    </form>
                </div>

            </div>

        </section>


<!-- ================================================
     PACKAGING GUIDE SECTION
     ================================================ -->
<section class="pg-section">
    <div class="pg-wrap">

        <!-- Left: article content -->
        <div class="pg-left">
            @if(!empty($value[0]->description))
                {!! $value[0]->description !!}
            @else
                <span class="pg-badge">PACKAGING GUIDE</span>
                <h2 class="pg-title">Everything you need to know about custom boxes</h2>
                <p class="pg-text">Custom packaging is one of the most powerful tools a brand can use to create a lasting impression. Research shows that 72% of consumers say that packaging design influences their purchase decision, and 40% share photos of exciting unboxing experiences on social media.</p>
                <p class="pg-text">At KayPackaging, we believe every business — no matter the size — deserves packaging that reflects the quality of what's inside. Whether you're a solo founder shipping your first 10 orders or a growing brand sending thousands of packages per week, our custom box solutions are built to scale with you.</p>

                <h3 class="pg-subtitle">What to consider when choosing custom packaging:</h3>
                <ul class="pg-list">
                    <li><strong>Box style</strong> — mailer, rigid, folding carton, or corrugated shipping box depending on product type and fragility</li>
                    <li><strong>Size</strong> — always measure your product first, then add 1–2cm clearance on each side for a snug fit</li>
                    <li><strong>Material</strong> — E-flute corrugated for mailers, SBS paperboard for cosmetics, kraft for eco-friendly positioning</li>
                    <li><strong>Finish</strong> — matte gives a premium feel, gloss increases vibrancy, soft touch adds texture, foil elevates luxury perception</li>
                    <li><strong>Quantity</strong> — higher quantities dramatically reduce per-unit cost; order samples first to validate quality</li>
                </ul>
            @endif
        </div>

        <!-- Right: FAQs + CTA -->
        <div class="pg-right">
            <div class="pg-steps-box">
                <h2 class="pg-steps-title">Frequently Asked Questions</h2>

                @if(isset($faqs) && count($faqs) > 0)
                    @foreach($faqs as $faq)
                    <div class="pg-step-item pg-accordion-item">
                        <button class="pg-accordion-btn">
                            <span class="pg-accordion-q">{{$faq->question}}</span>
                            <span class="pg-accordion-icon">+</span>
                        </button>
                        <div class="pg-accordion-body">
                            <p>{{$faq->answer}}</p>
                        </div>
                    </div>
                    @endforeach
                @endif

                <!-- Help box -->
                <div class="pg-cta-box">
                    <h4 class="pg-cta-title">Need help choosing?</h4>
                    <p class="pg-cta-sub">Our team responds within 2 hours</p>
                    <a href="#" class="pg-cta-btn">Chat with an expert</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ================================================
     CTA BANNER SECTION
     ================================================ -->
<section class="cp-cta-banner" style="justify-content: center;">
    <div style="width: 100%; max-width: 1440px; margin: 0 auto; display: flex; align-items: inherit; justify-content: space-between; gap: inherit; flex-direction: inherit; position: relative;">
        <div class="cp-cta-banner-left">
        <h2 class="cp-cta-banner-heading">
            Ready to Elevate Your <span class="cp-cta-banner-gold">Packaging</span>?
        </h2>
        <p class="cp-cta-banner-text">
            Let's bring your packaging vision to life. Our team of experts is ready to<br>
            design and deliver rigid boxes that will make your brand unforgettable.
        </p>
        <a href="{{ url('request-quote') }}" class="cp-cta cp-cta-banner-btn">Get Your Free Quote Today</a>
    </div>

    <div class="cp-cta-banner-imgs">
        <!-- Image 1 — large, top, -23.35deg -->
        <img
            src="{{ asset('uploads/cta-allcateagories.png') }}"
            alt="Rigid Inspiration"
            class="cp-cta-img cp-cta-img-1"
        >
        <!-- Image 2 — medium, bottom-left, -23.35deg -->
        <img
            src="{{ asset('uploads/cta-allcategories.png') }}"
            alt="Luxury Box Packaging"
            class="cp-cta-img cp-cta-img-2"
        >
        <!-- Image 3 — medium, bottom-right, -23.35deg -->
        <img
            src="{{ asset('uploads/cta-allcategories.png') }}"
            alt="Luxury Box Packaging"
            class="cp-cta-img cp-cta-img-3"
        >
    </div>
    </div>
</section>

<!-- ================================================
     FOOTER SECTION
     ================================================ -->
@include('web.footer')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── Product cards ──
    const cpCards = document.querySelectorAll('.cp-card');
    cpCards.forEach(function (card) {
        card.addEventListener('click', function () {
            window.location.href = 'product-page.html';
        });
    });

    // ── Testimonials slider — desktop: scroll-based | mobile: 1-card JS ──
    const testimonialsGrid = document.getElementById('testimonialsGrid');
    const prevTestimonialBtn = document.getElementById('prevTestimonialBtn');
    const nextTestimonialBtn = document.getElementById('nextTestimonialBtn');

    if (testimonialsGrid && prevTestimonialBtn && nextTestimonialBtn) {
        let currentIdx = 0;

        function isMobile() {
            return window.innerWidth <= 768;
        }

        function getCards() {
            return testimonialsGrid.querySelectorAll('.product-testimonial-card');
        }

        function slideTo(idx) {
            const cards = getCards();
            if (!cards.length) return;
            currentIdx = Math.max(0, Math.min(idx, cards.length - 1));
            const cardWidth = cards[0].offsetWidth;
            const gap = window.innerWidth * 0.04; // 4vw
            testimonialsGrid.style.transform = 'translateX(-' + (currentIdx * (cardWidth + gap)) + 'px)';
        }

        prevTestimonialBtn.addEventListener('click', function () {
            if (isMobile()) {
                slideTo(currentIdx - 1);
            } else {
                const card = testimonialsGrid.querySelector('.product-testimonial-card');
                const scrollAmount = card ? (card.offsetWidth + 30) : 300;
                testimonialsGrid.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            }
        });

        nextTestimonialBtn.addEventListener('click', function () {
            if (isMobile()) {
                slideTo(currentIdx + 1);
            } else {
                const card = testimonialsGrid.querySelector('.product-testimonial-card');
                const scrollAmount = card ? (card.offsetWidth + 30) : 300;
                testimonialsGrid.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        });

        window.addEventListener('resize', function () {
            if (!isMobile()) {
                currentIdx = 0;
                testimonialsGrid.style.transform = '';
            }
        });
    }

    // ── cp-testi section (if present) ──
    const cpTrack  = document.getElementById('cpTestiTrack');
    const cpPrev   = document.getElementById('cpTestiPrev');
    const cpNext   = document.getElementById('cpTestiNext');

    if (cpTrack && cpPrev && cpNext) {
        const cards  = cpTrack.querySelectorAll('.cp-testi-card');
        const total  = cards.length;
        let idx = 0;

        function updateSlide() {
            const cardW = cards[0].getBoundingClientRect().width + 24;
            cpTrack.style.transform = 'translateX(-' + (idx * cardW) + 'px)';
        }

        cpNext.addEventListener('click', function () {
            if (idx < total - 3) { idx++; updateSlide(); }
        });
        cpPrev.addEventListener('click', function () {
            if (idx > 0) { idx--; updateSlide(); }
        });
    }

    // ── Steps Accordion (mobile only) ──
    document.addEventListener('click', function(e) {
        var btn = e.target.closest('.pg-accordion-btn');
        if (!btn) return;
        
        var item = btn.closest('.pg-accordion-item');
        if (!item) return;
        
        var isOpen = item.classList.contains('open');

        // close all, reset icons to +
        document.querySelectorAll('.pg-accordion-item').forEach(function(i) {
            i.classList.remove('open');
            var icon = i.querySelector('.pg-accordion-icon');
            if (icon) {
                icon.innerHTML = '+';
                icon.style.color = 'rgba(255,255,255,0.6)';
            }
        });

        // if it was closed, open it and show -
        if (!isOpen) {
            item.classList.add('open');
            var icon = btn.querySelector('.pg-accordion-icon');
            if (icon) {
                icon.innerHTML = '&#8722;';
                icon.style.color = '#FFC107';
            }
        }
    });

    // ── CTA Banner Button ──
    const ctaBannerBtn = document.querySelector('.cp-cta-banner-btn');
    if (ctaBannerBtn) {
        ctaBannerBtn.addEventListener('click', function(e) {
            // let the href handle it, or we can explicitly set it here
            // e.preventDefault();
            // window.location.href = "{{ url('request-quote') }}";
        });
    }



    // ── FILE UPLOAD ──
    const fileInput = document.querySelector('input[type="file"]');
    const fileNameField = document.querySelector(".file-upload-wrapper input[type='text']");

    if (fileInput && fileNameField) {
        fileInput.addEventListener("change", () => {
            if (fileInput.files.length > 0) {
                fileNameField.value = fileInput.files[0].name;
            } else {
                fileNameField.value = "No file chosen";
            }
        });
    }

    // Standalone human verification section
    const humanQuestion = document.getElementById('humanQuestion');
    const humanAnswer = document.getElementById('humanAnswer');
    const humanCheckBtn = document.getElementById('humanCheckBtn');
    const humanStatus = document.getElementById('humanStatus');
    let humanTotal = 0;

    function generateHumanQuestion() {
        const firstNumber = Math.floor(Math.random() * 9) + 1;
        const secondNumber = Math.floor(Math.random() * 9) + 1;
        humanTotal = firstNumber + secondNumber;
        if (humanQuestion) humanQuestion.textContent = firstNumber + ' + ' + secondNumber + ' =';
        if (humanAnswer) {
            humanAnswer.value = '';
            humanAnswer.style.border = '';
        }
        if (humanStatus) {
            humanStatus.textContent = '';
            humanStatus.classList.remove('is-error', 'is-success');
        }
    }

    if (humanQuestion && humanAnswer && humanCheckBtn) {
        generateHumanQuestion();
        humanCheckBtn.addEventListener('click', function () {
            const isCorrect = humanAnswer.value.trim() !== '' && Number(humanAnswer.value.trim()) === humanTotal;
            if (isCorrect) {
                humanAnswer.style.border = '';
                if (humanStatus) {
                    humanStatus.textContent = 'Verified.';
                    humanStatus.classList.remove('is-error');
                    humanStatus.classList.add('is-success');
                }
            } else {
                humanAnswer.style.border = '1px solid red';
                if (humanStatus) {
                    humanStatus.textContent = 'Please solve the addition correctly.';
                    humanStatus.classList.remove('is-success');
                    humanStatus.classList.add('is-error');
                }
                humanAnswer.focus();
            }
        });
    }
    // ── QUOTE FORM VALIDATION ──
    const quoteForm = document.querySelector(".instant-quote-form");

    if (quoteForm) {
        // Disable default HTML5 validation tooltips to use custom logic
        quoteForm.setAttribute('novalidate', true);

        quoteForm.addEventListener("submit", (e) => {
            e.preventDefault();

            let isValid = true;
            let firstInvalidField = null;

            // Check all required fields in the form
            const requiredFields = quoteForm.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                let valid = true;
                const val = field.value.trim();

                if (!val) {
                    valid = false;
                } else if (field.type === 'email') {
                    // Simple email validation regex
                    const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
                    if (!emailRegex.test(val)) valid = false;
                } else if (field.type === 'tel') {
                    // Simple phone validation (at least 7 digits/characters like + - spaces)
                    const phoneRegex = /^\\+?[\\d\\s\\-\\(^\\)]{7,20}$/;
                    if (!phoneRegex.test(val)) valid = false;
                }

                if (!valid) {
                    isValid = false;
                    field.style.border = "1px solid red";
                    if (!firstInvalidField) {
                        firstInvalidField = field;
                    }
                } else {
                    field.style.border = ""; // reset border if valid
                }
            });

            // Human verification captcha check
            let isVerified = false;
            if (humanAnswer && humanStatus) {
                isVerified = humanStatus.classList.contains('is-success') || (humanAnswer.value.trim() !== '' && Number(humanAnswer.value.trim()) === humanTotal);
                if (isVerified) {
                    humanAnswer.style.border = '';
                    humanStatus.textContent = 'Verified.';
                    humanStatus.classList.remove('is-error');
                    humanStatus.classList.add('is-success');
                } else {
                    isValid = false;
                    humanAnswer.style.border = '1px solid red';
                    humanStatus.textContent = 'Please solve the addition correctly.';
                    humanStatus.classList.remove('is-success');
                    humanStatus.classList.add('is-error');
                    if (!firstInvalidField) {
                        firstInvalidField = humanAnswer;
                    }
                }
            }

            if (!isValid) {
                if (firstInvalidField) firstInvalidField.focus();
                return;
            }

            quoteForm.submit();
        });
    }
});
</script>
</body>
</html>

