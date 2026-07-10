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
    --gold: #f5c542;
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
    color: #c5c5c5 !important;
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
    padding-bottom: 60px; /* prevent text spilling out */
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

    /* Each step: flex layout on mobile */
    .hiw-step {
        position: relative;
        display: flex;
        align-items: flex-start;
        gap: 20px;
        padding: 24px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        min-height: unset;
        overflow: visible;
    }

    .hiw-step:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    /* Ghost number — faint on the left */
    .hiw-step::before {
        content: attr(data-num);
        font-family: 'Hepta Slab', serif;
        font-size: 80px;
        font-weight: 700;
        line-height: 0.9;
        color: rgba(255, 255, 255, 0.15);
        position: static;
        flex-shrink: 0;
        top: auto;
        left: auto;
    }

    /* Body — next to the number */
    .hiw-step-body {
        position: static;
        width: 100%;
        max-width: 100%;
        padding: 0;
        z-index: 1;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .hiw-step-title {
        font-size: 18px;
        font-weight: 700;
        color: #fff;
    }
    .hiw-step-text  {
        font-size: 14px;
        line-height: 1.5;
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
  border: 1px solid #3a3a3a;
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
  outline: none;
}

.filter-btn:focus,
.filter-btn:focus-visible,
.filter-btn:active {
  outline: none !important;
  box-shadow: none !important;
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
}/* removed hover: .filter-btn:hover { ... } */

.filter-btn.active {
  background: #f5c542;
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
  color: #c5c5c5 !important;
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

  /* ── Customize Your Box section ── */
  .customize-section {
    padding: 48px 0;
    overflow: hidden;
    width: 100%;
    box-sizing: border-box;
    background: #1e1e1e; /* From Figma background */
  }

  .customize-header {
    padding: 0 16px;
    margin-bottom: 24px;
    text-align: center;
  }

  .customize-header h2 {
    font-size: 24px;
    font-weight: 800;
    line-height: 1.25;
    margin-bottom: 12px;
    color: #ffffff;
  }

  .customize-header p {
    width: 100%;
    font-size: 13px;
    line-height: 1.6;
    color: #b0b0b0;
    margin: 0 auto;
    max-width: 320px;
  }

  /* ── Filter buttons: horizontal scroll exactly like Figma ── */
  .filter-buttons {
    display: flex !important;
    flex-wrap: nowrap !important;
    justify-content: flex-start !important;
    overflow-x: auto !important;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    gap: 8px !important;
    padding: 0 4px 8px 4px;
    margin: 0 0 24px 0 !important;
    scrollbar-width: none;
    -ms-overflow-style: none;
    box-sizing: border-box;
    width: 100%;
  }

  .filter-buttons::-webkit-scrollbar {
    display: none;
  }

  .filter-btn {
    flex: 0 0 auto !important;
    width: auto !important;
    max-width: none !important;
    min-width: 0;
    height: 38px !important;
    font-size: 13px;
    font-weight: 600;
    white-space: nowrap;
    padding: 0 20px !important;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-sizing: border-box;
    border: 1px solid #4a4a4a;
  }
  
  .filter-btn.active {
    background: #f5c542;
    color: #000;
    border-color: #f5c542;
  }

  /* ── Card grid: exactly 2 columns, specific colors ── */
  .tab-contents-container {
    padding: 0 4px;
    box-sizing: border-box;
    width: 100%;
    overflow: hidden;
  }

  .customize-grid {
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    width: 100%;
    box-sizing: border-box;
    margin: 0;
  }

  .customize-card {
    width: 100%;
    background: #232323; /* Darker than background */
    border: 1px solid #2d2d2d;
    min-width: 0;
    max-width: 100%;
    height: auto;
    margin: 0;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
  }

  .card-image-area {
    height: 140px;
    width: 100%;
    background: #2d2d2d; /* Lighter placeholder color */
    border-radius: 8px 8px 0 0;
  }

  .card-image-area img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    opacity: 0.95;
  }

  .card-content {
    padding: 14px 12px 16px;
    display: flex;
    flex-direction: column;
    flex: 1;
  }

  .card-content .card-title {
    font-size: 13px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 6px;
    line-height: 1.35;
  }

  .card-content p {
    font-size: 11px;
    line-height: 1.55;
    color: #c5c5c5 !important;
    margin-bottom: 0;
  }

  .card-icons {
    display: none; /* Hide icons to match Figma */
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
    html, body {
        overflow-x: hidden;
        width: 100%;
        max-width: 100vw;
    }

    body {
        padding-top: 70px; /* Match mobile header height */
    }

    .cp-wrap {
        padding: 0 16px;
        box-sizing: border-box;
        width: 100%;
        overflow: visible; /* hidden was cutting why-choose section */
    }

    /* Hero */
    .cp-hero {
        padding: 0;
        background: #0d0d0d;
    }

    .cp-bc {
        display: none;
    }

    .cp-hero-grid {
        grid-template-columns: 1fr;
        gap: 0;
        margin-bottom: 0;
    }

    /* Image comes first on mobile */
    .cp-hero-img {
        order: -1;
        margin-top: 0;
        margin-bottom: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 24px 20px 0;
        background: #0d0d0d;
    }

    .cp-hero-photo {
        width: 100%;
        height: auto;
        display: block;
        object-fit: contain;
        max-height: 280px;
    }

    /* Text block */
    .cp-hero-text {
        padding: 24px 20px 28px;
        align-items: center;
        text-align: center;
        background: #0d0d0d;
    }

    .cp-h1 {
        font-size: 28px;
        margin-bottom: 16px;
        line-height: 1.3;
        text-align: center;
    }

    .cp-desc {
        font-size: 15px;
        line-height: 1.75;
        margin-bottom: 24px;
        text-align: justify;
        text-align-last: center;
    }

    .cp-cta {
        font-size: 15px;
        padding: 14px 32px;
        display: block;
        width: fit-content;
        margin: 0 auto;
        text-align: center;
        border-radius: 50px;
    }

    .cp-hero-bar {
        padding: 16px 20px;
        gap: 0;
        justify-content: space-evenly;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin-left: 0;
        margin-right: 0;
        background: #0d0d0d;
    }

    .cp-stars-group {
        display: none;
    }

    .cp-logos {
        flex: unset;
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        overflow: hidden;
    }

    .cp-logos-inner {
        justify-content: space-evenly;
        gap: 24px;
    }

    .cp-logo-img {
        height: 40px;
        max-width: 70px;
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
}/* removed hover: .cp-testi-btn:hover { ... } */

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
}/* removed hover: .cp-testi-btn:hover { ... } */

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
    --product-gold: #f5c542;
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
}/* removed hover: .product-filter-btn:hover,
.product-filter-btn.active { ... } */

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
}/* removed hover: .product-nav-btn:hover:not(:disabled) { ... } */

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
    color: #f5c542;
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
@media (max-width: 768px) {
    .testimonial-nav {
        margin-top: 15px;
    }
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
    outline: none;
}/* removed hover: .testimonial-nav button:hover { ... } */

.testimonial-nav button:focus,
.testimonial-nav button:focus-visible,
.testimonial-nav button:active {
    outline: none !important;
    box-shadow: none !important;
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
    color: #f5c542;
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
    border-color: #f5c542;
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
    background: #f5c542;
    color: #111;
    border: none;
    border-radius: 0 8px 8px 0;
    padding: 0 18px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s;
    flex-shrink: 0;
}/* removed hover: .cq-upload-btn:hover { ... } */

.cq-field textarea {
    resize: none;
}

.cq-submit-wrap {
    display: flex;
    justify-content: center;
    margin-top: 8px;
}

.cq-submit-btn {
    background: #f5c542;
    color: #111;
    border: none;
    border-radius: 50px;
    padding: 14px 60px;
    font-size: 16px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s, transform 0.2s;
    font-family: 'Inter', sans-serif;
}/* removed hover: .cq-submit-btn:hover { ... } */

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
    border: 1px solid #f5c542;
    color: #f5c542;
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
    color: #f5c542;
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
    background: #f5c542;
    color: #111 !important;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 32px;
    border-radius: 50px;
    text-decoration: none !important;
    transition: background 0.2s, transform 0.2s;
}

.pg-cta-btn:hover,
.pg-cta-btn:focus,
.pg-cta-btn:active {
    text-decoration: none !important;
    color: #111 !important;
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
    font-size: 14px !important;
    line-height: 1.65 !important;
    color: #ffffff !important;
    font-weight: 500 !important;
    margin: 0 !important;
    padding: 0 !important;
    flex: 1;
}

.pg-accordion-btn:focus,
.pg-accordion-btn:focus-visible,
.pg-accordion-btn:active {
    outline: none !important;
    box-shadow: none !important;
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
    color: #f5c542;
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
        color: #f5c542;
        flex-shrink: 0;
    }

    .pg-accordion-q {
        font-size: 4vw !important;
        color: #ffffff !important;
        font-weight: 500 !important;
        flex: 1;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: left;
        margin: 0 !important;
        padding: 0 !important;
    }

    .pg-accordion-item.open .pg-accordion-icon {
        color: #f5c542;
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
/* Desktop only — hide on mobile */
.hero-breadcrumb-desktop {
  display: flex;
  padding-top: 40px;
}
@media (max-width: 768px) {
  .hero-breadcrumb-desktop {
    display: flex !important;
    padding-top: 18vw;
  }
}
.industry-hero-content {
  display: grid;
  grid-template-columns: 1fr 1fr;
  align-items: center;
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

.industry-hero-left h1 {
  font-size: 2.75rem;
  font-family: var(--font-heading);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 14px;
  margin-top: 0;
  padding: 0;
  color: #ffffff;
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
.btn-yellow:hover, .btn-yellow:focus {
  color: #000 !important;
  text-decoration: none !important;
  transform: translateY(-2px);
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
  max-height: 400px;
  vertical-align: bottom;
  margin-bottom: 0;
  margin-top: -50px;
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

  /* Breadcrumb — hidden on mobile removed */

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
    margin: 80px 0 0 0 !important;
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
    transform: scale(1.15); /* Make the image visually larger to fill side space */
  }

  /* TEXT — order 2, below image */
  .industry-hero-left {
    order: 2;
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    padding: 24px 10px 32px 10px !important; /* Very small side padding */
    background: #1a1a1a;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    box-sizing: border-box !important;
  }

  .industry-hero-left h1 {
    font-size: 1.92rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 14px;
    margin-top: 0;
    word-break: break-word;
    text-align: center;
    color: #ffffff;
    width: 100%;
  }

  .industry-hero-left p {
    font-size: 16px;
    line-height: 1.65;
    color: #c5c5c5;
    margin-bottom: 24px;
    text-align: justify;
    text-align-last: center;
    width: 100%;
  }

  /* Button — centered on mobile */
  .btn-yellow {
    display: table !important;
    width: auto !important;
    margin: 0 auto !important;
    text-align: center;
    padding: 14px 36px;
    font-size: 16px;
    font-weight: 800;
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
  padding: 15px 5%;
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
  position: relative;
  display: flex;
  flex: 1;
}

.quote-side-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  object-position: center top;
  display: block;
}

/* --- Column 2 Layout (Request Free Quote Form Container) --- */
.quote-form-col {
  flex: 1;
  background-color: var(--bg-dark);
  border-radius: 0 8px 8px 0;
  padding: 15px 45px;
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
  gap: 12px;
}

/* --- Structural Form Grids --- */
.form-row {
  display: grid;
  gap: 12px;
  width: 100%;
  box-sizing: border-box;
}

/* Double input fields: Name, Email, Phone, Address */
.dual-grid {
  grid-template-columns: repeat(2, 1fr);
}

/* Dimensions Row: Width, Length, Depth, Unit */
.dimensions-grid {
  grid-template-columns: repeat(4, 1fr);
  width: 100%;
}

/* Dropdown selections: Material, Colors, Addons */
.options-grid-custom {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
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
  width: 100%;
}

.quantity-upload-grid {
  grid-template-columns: repeat(2, 1fr);
  width: 100%;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 0px;
  height: 38px;
}

.form-group.textarea-group {
  height: auto;
  min-height: 70px;
  width: 100%;
}

.form-group > label {
  display: none;
  font-size: 13px;
  color: #ffffff;
  font-weight: 500;
  margin-bottom: 5px;
}

/* --- Component Fields Controls --- */
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  height: 38px;
  background-color: #1a1a1a; /* Keeping dark theme inputs */
  border: 1px solid #333; /* Exact border color from Figma */
  border-radius: 6px;
  padding: 8px 12px;
  color: var(--text-main);
  font-size: 13px;
  box-sizing: border-box;
  outline: none;
}

/* Dropdown - custom arrow with proper right spacing */
.form-group select {
  padding-right: 36px !important;
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  appearance: none !important;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23aaa' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 12px center !important;
  background-size: 12px 8px !important;
}

.form-group textarea {
  height: 70px;
  resize: none;
}

/* File Upload Wrapper Styling */
/* File Upload Wrapper Styling */
.file-upload-wrapper {
  display: flex;
  border: 1px solid #333;
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
}/* removed hover: .submit-quote-btn:hover { ... } */

/* --- Inline Human Verification (Inside Form) --- */
.human-verification-inline {
  width: 100%;
  padding: 12px 20px;
  background-color: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 193, 7, 0.2);
  border-radius: 8px;
  box-sizing: border-box;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 15px;
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
}/* removed hover: .human-check-btn:hover { ... } */

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
@media (max-width: 1200px) {
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
    display: none !important;
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
    display: none !important;
  }
  .quote-form-col {
    padding: 35px 16px;
    border-radius: 0;
  }

  /* First 4 fields (Name, Email, Phone, Physical Address) - Full width in mobile */
  .instant-quote-form > .form-row.dual-grid {
    grid-template-columns: 1fr !important;
  }

  /* All standalone form-groups stay full width */
  .instant-quote-form > .form-group {
    width: 100%;
  }

  /* Redefine grid for other rows to ensure they stay as intended */
  .form-row {
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
  .submit-quote-btn {
    width: 100%;
    margin-top: 10px;
  }
}

/* --- CTA Main Container Block --- */

/* Reduce gap above How it Works (Desktop) */
.cp-products, .box-by-industry, .cp-why {
  padding-bottom: 20px !important;
}
.hiw-section {
  padding-top: 20px !important;
}

/* Reduce gap between Customize, Testimonials, Quote section, and FAQs (Desktop) */
.customize-section {
  padding-bottom: 15px !important;
}
.testimonials-section {
  padding-top: 15px !important;
  padding-bottom: 20px !important;
  margin-bottom: 0 !important;
}
.testimonials-header {
  margin-bottom: 20px !important;
}
.testimonials-header h2 {
  margin-top: 0 !important;
  margin-bottom: 10px !important;
}
.quote-section {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
.pg-section {
  padding-top: 20px !important;
  margin-top: 0 !important;
}

@media (max-width: 768px) {
  /* Reduce gap above How it Works */
  .cp-products, .box-by-industry, .cp-why {
    padding-bottom: 10px !important;
  }
  .hiw-section {
    padding-top: 10px !important;
  }

  /* Reduce gap between Testimonials and Quote section */
  .testimonials-section {
    padding-bottom: 10px !important;
    margin-bottom: 0 !important;
  }
  .quote-section {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  
  /* Reduce gap between Quote section and FAQs */
  .pg-section {
    padding-top: 10px !important;
    margin-top: 0 !important;
  }
}
/* Standardize all wrappers to align with header logo (responsive spacing) */
.cp-wrap, 
.hiw-wrap, 
.pg-wrap, 
.product-container,
.industry-hero-content,
.hero-breadcrumb-desktop,
.customize-section,
.testimonials-wrap,
.tb-inner {
    max-width: 1440px !important;
    width: 100% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 55px !important; /* Default padding for laptop screens (aligns with 15px logo margin) */
    padding-right: 55px !important;
    box-sizing: border-box !important;
}

.customize-section {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
}

@media (min-width: 1200px) {
    .cp-wrap, 
    .hiw-wrap, 
    .pg-wrap, 
    .product-container,
    .industry-hero-content,
    .hero-breadcrumb-desktop,
    .customize-section,
    .testimonials-wrap,
    .tb-inner {
        padding-left: 60px !important; /* Aligns with 20px logo margin */
        padding-right: 60px !important;
    }
}

@media (min-width: 1440px) {
    .cp-wrap, 
    .hiw-wrap, 
    .pg-wrap, 
    .product-container,
    .industry-hero-content,
    .hero-breadcrumb-desktop,
    .customize-section,
    .testimonials-wrap,
    .tb-inner {
        padding-left: 80px !important; /* Aligns with 40px logo margin */
        padding-right: 80px !important;
    }
}

@media (max-width: 768px) {
    .cp-wrap, 
    .hiw-wrap, 
    .pg-wrap, 
    .product-container,
    .industry-hero-content,
    .hero-breadcrumb-desktop,
    .customize-section,
    .testimonials-wrap,
    .tb-inner {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
}

/* Quote section alignment overrides */
/* Quote section alignment overrides to align exactly under the main container grid */
@media (min-width: 769px) {
    .quote-section {
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-top: 30px !important;
        padding-bottom: 30px !important;
        box-sizing: border-box !important;
    }
}
.quote-container {
    width: 100% !important;
    max-width: calc(100% - 110px) !important; /* Aligns with 55px left/right margins on laptop screens */
    margin: 0 auto !important;
}

@media (min-width: 1200px) {
    .quote-container {
        max-width: calc(100% - 120px) !important; /* Aligns with 60px left/right margins */
    }
}

@media (min-width: 1440px) {
    .quote-container {
        max-width: 1280px !important; /* Aligns with 1440px main container (minus 80px padding on each side) */
    }
}

@media (max-width: 768px) {
    .quote-container {
        max-width: 100% !important; /* Full width on mobile */
        border-radius: 0 !important;
    }
}

/* Allow Customize Your Box grid to span 100% width of the 1440px container */
.customize-grid {
    max-width: 100% !important;
}

/* Make customize section buttons and active states use primary yellow */
.filter-btn {
    border-color: #F8CB54 !important;
}
.filter-btn.active {
    background-color: #F8CB54 !important;
    border-color: #F8CB54 !important;
}

/* Reduce gap between customize header subtitle and filter buttons */
.customize-header {
    margin-bottom: 20px !important;
}
.filter-buttons {
    margin: 25px 0 !important;
}

/* Quote form styling overrides: autofill, placeholder, invalid states */
.quote-section input:-webkit-autofill,
.quote-section input:-webkit-autofill:hover, 
.quote-section input:-webkit-autofill:focus, 
.quote-section input:-webkit-autofill:active,
.quote-section select:-webkit-autofill,
.quote-section textarea:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px #171717 inset !important;
    -webkit-text-fill-color: #ffffff !important;
    transition: background-color 5000s ease-in-out 0s;
}

.quote-section input::placeholder,
.quote-section select::placeholder,
.quote-section textarea::placeholder {
    color: #ffffff !important;
    opacity: 1 !important;
}

.quote-section input:invalid,
.quote-section select:invalid,
.quote-section textarea:invalid,
.quote-section input:-moz-ui-invalid,
.quote-section input:valid {
    box-shadow: none !important;
    border-color: #333 !important;
    outline: none !important;
}

.quote-section input:focus,
.quote-section select:focus,
.quote-section textarea:focus {
    border-color: var(--accent-gold) !important;
}

/* Testimonial card internal spacing and button overrides */
.testimonial-card p {
    margin-bottom: 12px !important;
}
.read-more-btn {
    margin-bottom: 8px !important;
    text-decoration: none !important;
    outline: none !important;
    border: none !important;
    box-shadow: none !important;
    background: none !important;
    color: var(--text-muted) !important;
}
.read-more-btn:focus,
.read-more-btn:active,
.read-more-btn:hover {
    text-decoration: none !important;
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
    background: none !important;
}

/* Remove default focus outlines for buttons on click */
.human-check-btn:focus,
.human-check-btn:active,
.human-check-btn:focus-visible,
.submit-quote-btn:focus,
.submit-quote-btn:active,
.submit-quote-btn:focus-visible,
.cq-submit-btn:focus,
.cq-submit-btn:active,
.cq-submit-btn:focus-visible {
    outline: none !important;
    box-shadow: none !important;
}
.testimonial-card .testi-name {
    margin-bottom: 3px !important;
    line-height: 1.2 !important;
}
.testimonial-card span {
    display: block !important;
    margin-top: 0px !important;
    line-height: 1.2 !important;
}

/* Customize section cards UI & background overrides to match Figma */
.customize-card {
    background: #242424 !important;
    border: 1px solid #2d2d2d !important;
    border-radius: 12px !important;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25) !important;
}
.card-image-area {
    border-radius: 12px 12px 0 0 !important;
    background: #252525 !important;
    height: 160px !important; /* Shorter card height */
}
.card-content {
    padding: 14px 15px !important;
}
.card-content .card-title {
    margin-bottom: 8px !important;
}
.card-content p {
    font-size: 13px !important;
    line-height: 19px !important;
    margin-bottom: 12px !important;
}
.icon-circle {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;
    width: 28px !important;
    height: 28px !important;
    border-radius: 50% !important;
    font-size: 13px !important;
    line-height: 1 !important;
    user-select: none !important;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2) !important;
}
.icon-circle:first-child {
    background-color: #5c67f2 !important; /* Premium purple-blue background */
    color: #fff !important;
}
.icon-circle:nth-child(2) {
    background-color: #c4b097 !important; /* Premium beige/tan background */
}

/* Reduce spacing between products and How it Works section */
.cp-products {
    padding-bottom: 0px !important;
}
.cp-grid {
    margin-bottom: 10px !important;
}
.hiw-section {
    padding-top: 15px !important;
}

/* Spacing overrides for How it Works section to make it compact */
.hiw-header {
    margin-bottom: 25px !important;
}
@media (min-width: 769px) {
    .hiw-step {
        padding-top: 85px !important;
        padding-bottom: 30px !important;
    }
    .hiw-step::before {
        top: -15px;
    }
    .hiw-step-body {
        top: 50px !important;
    }
}


</style>
@php
    $isGiftBoxesPage = ($slug ?? '') === 'gift-boxes';
@endphp
<!-- ================================================
     HERO SECTION
     ================================================ -->
        <!-- Box By Industry Section -->
        <section class="box-by-industry{{ $isGiftBoxesPage ? ' gift-boxes-page' : '' }}">

            {{-- Breadcrumb --}}
            @include('web.components.breadcrumb', [
                'class' => 'hero-breadcrumb-desktop',
                'items' => [
                    ['label' => !empty($value) && count($value) > 0 ? $value[0]->name : 'Category']
                ]
            ])

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
                        <img src="{{ !empty($value[0]->hero_image) ? (file_exists(public_path('uploads/'.$value[0]->hero_image)) ? asset('uploads/'.$value[0]->hero_image) : asset('images/'.$value[0]->hero_image)) : './assets/Box packing home banner.png' }}" alt="{{ strtolower(str_replace('-', ' ', !empty($value[0]->hero_title) ? $value[0]->hero_title : 'Premium packaging boxes')) }}"
                            class="hero-main-img" title="{{ ucwords(strtolower(str_replace('-', ' ', !empty($value[0]->hero_title) ? $value[0]->hero_title : 'Premium packaging boxes'))) }}">
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
                        <img src="{{ asset('images/' . $value[0]->why_choose_img) }}" alt="{{ strtolower(str_replace('-', ' ', $value[0]->why_choose_title)) }}" class="cp-why-photo" title="{{ ucwords(strtolower(str_replace('-', ' ', $value[0]->why_choose_title))) }}">
                    @else
                        <img src="{{ asset('assets/images/default.jpg') }}" alt="why choose" title="Why Choose" class="cp-why-photo">
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
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Lamination.webp') }}" alt="lamination" title="Lamination"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Lamination</span><p>Laminated protective film that adheres to the surface of packaging materials to maximize durability.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/UV Coating .webp') }}" alt="uv" title="Uv"></div>
                <div class="card-content"><span class="card-title" style="display: block;">UV</span><p>Fast-drying coating cured with ultraviolet light. Available in gloss or matte finish.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Varnish .webp') }}" alt="varnish" title="Varnish"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Varnish</span><p>Clear coating applied using the CMYK printing method. Available in gloss, satin, or matte.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Anti-scratch Lamination .webp') }}" alt="anti scratch lamination" title="Anti Scratch Lamination"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Anti Scratch Lamination</span><p>Laminated BOPP film that is scratch, scuff, and fingerprint resistant. Cost-effective option.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Aqueous Coating .webp') }}" alt="aqueous coating" title="Aqueous Coating"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Aqueous Coating</span><p>Clear, fast-drying, water-based, and eco-friendly coating. Available in gloss or matte finish.</p><div class="card-icons"><span class="icon-circle">♻️</span><span class="icon-circle">🍃</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Soft Touch Coating.webp') }}" alt="soft touch coating" title="Soft Touch Coating"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Soft Touch Coating</span><p>Soft to the touch coating that creates a velvety texture for a more tactile appeal.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Soft Touch Silk Lamination .webp') }}" alt="soft touch silk lamination" title="Soft Touch Silk Lamination"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Soft Touch Silk Lamination</span><p>Soft to the touch lamination similar to peach skin. Available in a satin or matte finish.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/coating and lamination/Spot Gloss UV.webp') }}" alt="spot gloss uv" title="Spot Gloss Uv"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Spot Gloss UV</span><p>UV coating that is applied to a specified area and cured using ultraviolet light.</p><div class="card-icons"><span class="icon-circle">♻️</span></div></div>
            </div>
        </div>

        <!-- Printing Options -->
        <div class="customize-grid" id="cat-tab-printing-options" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/digital-print.webp') }}" alt="digital print" title="Digital Print"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Digital Print</span><p>Fast and cost-effective printing with sharp, high-quality colors ideal for shorter runs and quick turnaround times.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/offset-print.webp') }}" alt="offset print" title="Offset Print"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Offset Print</span><p>The industry standard for high-volume printing, offering unparalleled color accuracy and premium finish quality.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/oil-based-Inks.webp') }}" alt="oil based inks" title="Oil Based Inks"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Oil Based Inks</span><p>Traditional inks that deliver rich, vibrant colors with a smooth, glossy finish for high-impact designs.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/pantone-metallic.webp') }}" alt="pantone metallic" title="Pantone Metallic"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Pantone Metallic</span><p>Premium inks blended with metallic particles to give your packaging a luxurious, eye-catching shine.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/pantone.webp') }}" alt="pantone" title="Pantone"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Pantone</span><p>Standardized color matching system ensuring absolute consistency for your brand colors across all prints.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/soy-vegetable-based-Inks.webp') }}" alt="soy vegetable based inks" title="Soy Vegetable Based Inks"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Soy Vegetable Based Inks</span><p>Eco-friendly, sustainable inks that produce bright colors while minimizing environmental impact.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/uv-print.webp') }}" alt="uv print" title="Uv Print"></div>
                <div class="card-content"><span class="card-title" style="display: block;">UV Print</span><p>Ultra-violet cured printing that dries instantly, offering superior durability, scuff-resistance, and sharp details.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Printing Options/water-based-Inks.webp') }}" alt="water based inks" title="Water Based Inks"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Water Based Inks</span><p>Non-toxic and environmentally safe inks that provide a soft, natural finish perfect for sustainable packaging.</p></div>
            </div>
        </div>

        <!-- Special Finishes -->
        <div class="customize-grid" id="cat-tab-special-finishes" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/blind-debossing-.webp') }}" alt="blind debossing" title="Blind Debossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Blind Debossing</span><p>A classic technique that presses your design down into the material, creating a subtle, indented texture.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/blind-embossing.webp') }}" alt="blind embossing" title="Blind Embossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Blind Embossing</span><p>Elevates your design by raising it above the material surface, adding a tactile, premium 3D effect.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/cold-foil-printing.webp') }}" alt="cold foil printing" title="Cold Foil Printing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Cold Foil Printing</span><p>A fast inline process that applies metallic foil to your packaging for a striking, reflective finish.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/combination-embossing.webp') }}" alt="combination embossing" title="Combination Embossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Combination Embossing</span><p>Combines foil stamping with embossing to create a stunning, raised metallic design that stands out.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/hot-foil-stamping.webp') }}" alt="hot foil stamping" title="Hot Foil Stamping"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Hot Foil Stamping</span><p>Uses heat and pressure to apply metallic or pigmented foil, adding a luxurious, high-end feel.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/registered-embossing-.webp') }}" alt="registered embossing" title="Registered Embossing"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Registered Embossing</span><p>Precisely aligns the embossed texture with printed ink, creating a detailed and highly tactile design element.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Special Finishes/window-patching.webp') }}" alt="window patching" title="Window Patching"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Window Patching</span><p>Adds a transparent film window to your box, allowing customers to view the product inside securely.</p></div>
            </div>
        </div>

        <!-- Paperboard -->
        <div class="customize-grid" id="cat-tab-paperboard" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/sbs-c1s.webp') }}" alt="sbs c1s" title="Sbs C1s"></div>
                <div class="card-content"><span class="card-title" style="display: block;">SBS C1S</span><p>Solid Bleached Sulfate coated on one side, offering excellent printability and a clean white interior.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/sbs-c2s.webp') }}" alt="sbs c2s" title="Sbs C2s"></div>
                <div class="card-content"><span class="card-title" style="display: block;">SBS C2S</span><p>Solid Bleached Sulfate coated on both sides, providing a smooth surface for high-quality printing inside and out.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/ccnb.webp') }}" alt="ccnb" title="Ccnb"></div>
                <div class="card-content"><span class="card-title" style="display: block;">CCNB</span><p>Clay Coated News Back board made from recycled materials, offering a cost-effective solution with good print quality.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/fully-recycled-ccnb.webp') }}" alt="fully recycled ccnb" title="Fully Recycled Ccnb"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Fully Recycled CCNB</span><p>100% recycled paperboard with a clay coating, perfect for eco-conscious brands needing vibrant prints.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/natural-brown-kraft.webp') }}" alt="natural brown kraft" title="Natural Brown Kraft"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Natural Brown Kraft</span><p>Unbleached, durable kraft board that gives your packaging a rustic, organic, and eco-friendly aesthetic.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/white-kraft.webp') }}" alt="white kraft" title="White Kraft"></div>
                <div class="card-content"><span class="card-title" style="display: block;">White Kraft</span><p>Bleached kraft board combining the strength of kraft with a clean, white surface for excellent print contrast.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/black-kraft.webp') }}" alt="black kraft" title="Black Kraft"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Black Kraft</span><p>Solid black throughout the board, providing a sleek, modern, and premium look without edge whitening.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Paper Board/uncoated-unbleached-kraft-(uuk).webp') }}" alt="uncoated unbleached kraft (uuk)" title="Uncoated Unbleached Kraft (uuk)"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Uncoated Unbleached Kraft (UUK)</span><p>A raw, natural texture that maximizes sustainability and provides an earthy, minimalist vibe.</p></div>
            </div>
        </div>

        <!-- Corrugated -->
        <div class="customize-grid" id="cat-tab-corrugated" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/bleached-white-board-.webp') }}" alt="bleached white board" title="Bleached White Board"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Bleached White Board</span><p>A strong corrugated material with a bright white outer layer, ensuring vibrant and accurate color printing.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/kemi-white-board-.webp') }}" alt="kemi white board" title="Kemi White Board"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Kemi White Board</span><p>Premium coated corrugated board offering superior ink holdout for high-resolution, photographic prints.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/natural-brown-kraft-linerboard-.webp') }}" alt="natural brown kraft linerboard" title="Natural Brown Kraft Linerboard"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Natural Brown Kraft Linerboard</span><p>Standard unbleached corrugated board offering maximum strength and a classic, eco-friendly appearance.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Corrugated/oyster-white-board-.webp') }}" alt="oyster white board" title="Oyster White Board"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Oyster White Board</span><p>A mottled white corrugated board that provides a clean background while maintaining structural integrity.</p></div>
            </div>
        </div>

        <!-- Fluted Grades -->
        <div class="customize-grid" id="cat-tab-fluted-grades" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/A-flute.webp') }}" alt="a flute" title="A Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">A Flute</span><p>The thickest flute profile (1/4"), providing maximum cushioning and stacking strength for fragile items.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/b-flute.webp') }}" alt="b flute" title="B Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">B Flute</span><p>A versatile profile (1/8") offering excellent crush resistance and a smooth surface for high-quality printing.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/c-flute.webp') }}" alt="c flute" title="C Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">C Flute</span><p>The most common corrugated flute (3/16"), offering an ideal balance of cushioning and compression strength.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/Double-Wall.webp') }}" alt="double wall" title="Double Wall"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Double Wall</span><p>Combines two flute layers for exceptional durability and protection, ideal for heavy or bulk shipping.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/e-flute.webp') }}" alt="e flute" title="E Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">E Flute</span><p>A very thin profile (1/16") that provides excellent printability and a sleek, retail-ready appearance.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/f-flute.webp') }}" alt="f flute" title="F Flute"></div>
                <div class="card-content"><span class="card-title" style="display: block;">F Flute</span><p>Ultra-thin micro-flute (1/32") offering premium structural rigidity for small, high-end retail boxes.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Fluted Grades Images/Triple-Wall.webp') }}" alt="triple wall" title="Triple Wall"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Triple Wall</span><p>Three layers of fluting providing industrial-grade strength, often used as a lightweight alternative to wood.</p></div>
            </div>
        </div>

        <!-- Rigid Materials -->
        <div class="customize-grid" id="cat-tab-rigid-materials" style="display: none;">
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Rigid Material/Duplex-Chipboard-.webp') }}" alt="duplex chipboard" title="Duplex Chipboard"></div>
                <div class="card-content"><span class="card-title" style="display: block;">Duplex Chipboard</span><p>A sturdy, rigid board with a white coated exterior and grey interior, perfect for premium setup boxes.</p></div>
            </div>
            <div class="customize-card">
                <div class="card-image-area"><img src="{{ asset('uploads/Rigid Material/grey-chipboard-cardboard.webp') }}" alt="grey chipboard cardboard" title="Grey Chipboard Cardboard"></div>
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
@include('web.components.testimonials')

<!-- ================================================
     REQUEST A FREE QUOTE SECTION
     ================================================ -->
@include('web.components.quote-form', ['source' => 'Category Page Quote Form'])
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
                            <h3 class="pg-accordion-q">{{$faq->question}}</h3>
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
                    <a href="{{ url('contact-us') }}" class="pg-cta-btn">Chat with an expert</a>
                </div>
            </div>
        </div>

    </div>
</section>

@include('web.components_cta_banner')

<!-- ================================================
     FOOTER SECTION
     ================================================ -->

@include('web.footer')
<script>
document.addEventListener('DOMContentLoaded', function () {


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
                icon.style.color = '#f5c542';
            }
        }
    });

    // ── CTA Banner Button ──
    const ctaBannerBtn = document.querySelector('.cp-cta-banner-comp-btn');
    if (ctaBannerBtn) {
        ctaBannerBtn.addEventListener('click', function(e) {
            // let the href handle it, or we can explicitly set it here
            // e.preventDefault();
            // window.location.href = "{{ url('request-quote') }}";
        });
    }



});
</script>


<!-- Dynamic padding adjustment for fixed header (zoom fix) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('site-header');
    const mainContent = document.getElementById('main-content');
    if (header && mainContent) {
        const adjustPadding = () => {
            mainContent.style.paddingTop = header.offsetHeight + 'px';
        };
        adjustPadding();
        window.addEventListener('resize', adjustPadding);
        if (window.ResizeObserver) {
            new ResizeObserver(adjustPadding).observe(header);
        }
        // Fallback for fonts or images loading late in header
        setTimeout(adjustPadding, 500);
    }
});
</script>
</body>
</html>
