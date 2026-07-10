@include('web/header')

<style>
/* ============================================================
   PRODUCT PAGE VARIABLES & FOUNDATION
   ============================================================ */
:root {
    --product-bg: #161616;
    --product-bg-card: #222222;
    --product-gold: #f5c542;
    --product-gold-hover: #E0A800;
    --product-text-main: #FFFFFF;
    --product-text-muted: rgba(255, 255, 255, 0.7);
    --product-border: rgba(255, 255, 255, 0.1);
    --product-font: 'Inter', sans-serif;
    --product-container-max: 1140px;
}

/* Fix autofill styles */
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active {
    -webkit-box-shadow: 0 0 0 30px #1e1e1e inset !important;
    -webkit-text-fill-color: white !important;
    transition: background-color 5000s ease-in-out 0s;
}

body {
    margin: 0;
    padding: 0;
    padding-top: 115px !important;
    background-color: var(--product-bg);
    color: var(--product-text-main);
    font-family: var(--product-font);
}

.product-wrapper { width: 100%; min-height: 100vh; background-color: #1a1a1a; overflow-x: hidden; }
.product-container { max-width: var(--product-container-max); margin: 0 auto; padding: 0 15px; }
h1,h2,h3,h4,h5,h6,p { margin: 0; padding: 0; }
ul { margin: 0; padding: 0; list-style: none; }
a { text-decoration: none; color: inherit; }

/* HERO */
.product-hero-section { padding: 33px 0; }
.product-hero-grid { display: grid; grid-template-columns: 0.9fr 1.15fr; gap: 40px; align-items: start; }

/* Breadcrumbs */
.product-breadcrumbs { display: flex; align-items: center; gap: 12.5px; flex-wrap: wrap; font-size: 16.2px; color: var(--product-text-muted); margin-bottom: 18px; }
.product-breadcrumbs a { color: var(--product-text-muted); transition: color 0.3s ease; }
.product-breadcrumbs a:first-of-type { color: var(--product-gold); }
.product-breadcrumbs a:hover { color: var(--product-gold); }
.product-bc-sep { font-size: 15px; }
.product-bc-active { color: var(--product-text-muted); }

/* Images */
.product-hero-images { display: flex; flex-direction: column; gap: 25px; min-width: 0; }
.product-main-img-wrap { width: 100%; max-width: calc(100% - 4px); margin: 0 auto; box-sizing: border-box; border-radius: 10px; overflow: hidden; background-color: var(--product-bg-card); aspect-ratio: 1 / 1; border: 1.5px solid var(--product-gold); }
.product-main-img { width: 100%; height: 100%; object-fit: cover; }
.product-thumbnails { display: flex; justify-content: center; gap: 18.8px; }
.product-thumb { width: 100px; height: 100px; border-radius: 10px; overflow: hidden; cursor: pointer; border: 2.5px solid transparent; transition: all 0.3s ease; }
.product-thumb.active, .product-thumb:hover { border-color: var(--product-gold); }
.product-thumb img { width: 100%; height: 100%; object-fit: cover; }

/* Trust Badges */
.product-reviews-badges { display: flex; justify-content: center; align-items: center; gap: 50px; margin-top: 25px; }
.product-review-item { display: flex; flex-direction: column; gap: 10px; }
.product-google-logo, .product-trustpilot-logo { display: flex; align-items: center; }
.product-stars-wrap { display: flex; align-items: center; gap: 10px; }
.product-rating-score { font-size: 17.5px; font-weight: 700; }
.product-stars-icons { color: var(--product-gold); font-size: 15px; display: flex; gap: 2.5px; }
.product-trustpilot-stars { display: flex; gap: 2.5px; }
.tp-star { background-color: #00b67a; color: #fff; font-size: 12.5px; width: 22.5px; height: 22.5px; display: flex; align-items: center; justify-content: center; }

/* Details */
.product-hero-details { display: flex; flex-direction: column; }
.product-title-row { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 5px; }
.product-title { font-size: 40px; font-weight: 700; }
.product-status-badge { color: var(--product-gold); font-size: 17.5px; font-weight: 600; margin-top: 12px; }
.product-desc { font-size: 17.5px; line-height: 1.6; color: rgba(255,255,255,0.85) !important; margin-bottom: 20px; }
.product-desc *, .product-desc p, .product-desc span, .product-desc li, .product-desc strong, .product-desc b { color: rgba(255,255,255,0.85) !important; }
.product-read-more { color: var(--product-gold) !important; font-weight: 600; text-decoration: none; }

/* Quote Box */
.product-quote-box { background-color: #202020; border-radius: 15px; padding: 25px 25px 18px 25px; }
.product-quote-title { text-align: center; font-size: 23px; font-weight: 600; margin-bottom: 15px; }

.pf-wrap { display: contents; }
.pf-mob-label { display: none; font-size: 13px; font-weight: 500; color: rgba(255,255,255,0.80); margin-bottom: 4px; }

.product-form-row { display: grid; gap: 14px; margin-bottom: 14px; }
.product-form-row-3 { grid-template-columns: repeat(3, 1fr); }
.product-form-row-4 { grid-template-columns: repeat(4, 1fr); }
.product-form-row-options { grid-template-columns: repeat(2, 1fr); }
.product-form-row-upload { grid-template-columns: 1fr 1.5fr; }
.product-form-row-upload .product-upload-group { display: flex; width: 100%; gap: 0; }
.product-form-row-upload .product-upload-group input { flex: 1; min-width: 0; }

.product-quote-form input,
.product-quote-form select,
.product-quote-form textarea {
    background-color: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.15);
    border-radius: 10px;
    padding: 12px 10px;
    color: var(--product-text-main);
    font-family: var(--product-font);
    font-size: 12px;
    outline: none;
    transition: border-color 0.3s ease;
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.product-quote-form input::placeholder,
.product-quote-form textarea::placeholder { color: rgba(255,255,255,0.4); font-size: 12px; }
.product-quote-form select {
    appearance: none;
    cursor: pointer;
    color: rgba(255,255,255,0.5);
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='rgba(255,255,255,0.5)' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 14px center;
    background-size: 16px;
    padding-right: 36px;
}
.product-quote-form select option { background-color: var(--product-bg-card); color: var(--product-text-main); }
.product-quote-form input:focus,
.product-quote-form select:focus,
.product-quote-form textarea:focus { border-color: var(--product-gold); color: #ffffff !important; }

input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active {
    transition: background-color 5000s ease-in-out 0s !important;
    -webkit-text-fill-color: #ffffff !important;
}

.product-upload-group { display: flex; gap: 0; width: 100%; }
.product-upload-group input { flex: 1; min-width: 0; border-radius: 10px 0 0 10px !important; }
.product-btn-upload { background-color: var(--product-gold); color: #111; border: none; border-radius: 0 10px 10px 0; padding: 0 22px; font-weight: 700; font-size: 15px; cursor: pointer; transition: background-color 0.3s ease; white-space: nowrap; flex-shrink: 0; outline: none; }
.product-btn-upload:focus, .product-btn-upload:active, .product-btn-upload:focus-visible { outline: none !important; box-shadow: none !important; }
/* removed hover: .product-btn-upload:hover { ... } */
.product-quote-form textarea { resize: vertical; min-height: 45px; white-space: normal; overflow: auto; }
.product-submit-wrap { display: flex; justify-content: center; margin-top: 18px; }
.product-btn-primary { background-color: var(--product-gold); color: #121212; border: none !important; border-radius: 50px; padding: 10px 20px; font-size: 15px; font-weight: 700; cursor: pointer; transition: background-color 0.3s ease; letter-spacing: 0px; outline: none !important; box-shadow: none !important; width: 298px; height: 42px; display: flex; justify-content: center; align-items: center; font-family: var(--font-heading), sans-serif; }
.product-btn-primary:focus, .product-btn-primary:active, .product-btn-primary:focus-visible { outline: none !important; box-shadow: none !important; border: none !important; }

/* INFO TABS */
.product-info-section { padding: 20px 0 40px; }
.product-tabs-wrapper { border-bottom: 1px solid var(--product-border); margin-bottom: 30px; overflow-x: auto; scrollbar-width: none; }
.product-tabs-wrapper::-webkit-scrollbar { display: none; }
.product-tabs-nav { display: flex; gap: 100px; white-space: nowrap; list-style: none; margin: 0; padding: 0; }
.product-tab-item { font-size: 20px; font-weight: 500; color: var(--product-text-muted); padding: 18.8px 0; cursor: pointer; position: relative; transition: color 0.3s ease; list-style: none; }
.product-tab-item:hover { color: var(--product-text-main); }
.product-tab-item.active { color: var(--product-gold); }
.product-tab-item.active::after { content: ''; position: absolute; bottom: -1px; left: 0; width: 100%; height: 2.5px; background-color: var(--product-gold); }
.product-tab-content { width: 100%; }
.product-info-heading { font-size: 30px; font-weight: 700; margin-bottom: 25px; }
.product-info-text { font-size: 16px; line-height: 1.8; color: rgba(255,255,255,0.85) !important; margin-bottom: 37.5px; font-family: inherit; }
.product-info-text * { color: rgba(255,255,255,0.85) !important; }
.product-info-text p { font-size: 16px; line-height: 1.8; color: rgba(255,255,255,0.85) !important; margin-bottom: 18px; }
.product-info-text strong, .product-info-text b, .product-info-text strong * { font-weight: 700; color: #fff !important; }
.product-info-text h1, .product-info-text h2, .product-info-text h3, .product-info-text h4, .product-info-text h1 *, .product-info-text h2 *, .product-info-text h3 *, .product-info-text h4 * { color: #ffffff !important; margin-bottom: 14px; margin-top: 24px; }
.product-info-text ul { list-style: disc; padding-left: 24px; }
.product-info-text ul li { font-size: 16px; color: rgba(255,255,255,0.85) !important; line-height: 1.7; margin-bottom: 8px; }
.product-info-text img { max-width: 100%; height: auto; }
.product-info-subheading { font-size: 25px; font-weight: 600; margin-bottom: 25px; }
.product-info-list { display: flex; flex-direction: column; gap: 18.8px; }
.product-info-list li { font-size: 20px; line-height: 1.6; color: var(--product-text-muted); position: relative; padding-left: 25px; }
.product-info-list li::before { content: '•'; color: var(--product-gold); position: absolute; left: 0; top: 0; }
.product-info-list li strong { color: var(--product-text-main); }

/* Specifications Table */
.product-specs-table { display: grid; grid-template-columns: 250px 1fr; font-size: 17.5px; }
.spec-label { border-right: 1px solid rgba(255,255,255,0.1); padding: 18.8px 25px 18.8px 0; font-weight: 600; color: var(--product-text-main); }
.spec-value { padding: 18.8px 0 18.8px 25px; color: var(--product-text-muted); }

/* RELATED PRODUCTS */
.product-related-section { padding: 0px 0 20px; }
.product-related-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; }
.product-related-card { display: flex; flex-direction: column; gap: 0px; text-decoration: none; }
/* removed hover: .product-related-card:hover { transform: translateY(-5px); } */
.product-related-img { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; background-color: var(--product-bg-card); border-radius: 10px; border: 1px solid rgba(212,175,55,0.45); }
/* removed hover: .product-related-card:hover .product-related-img { border-color: var(--product-gold); } */
.product-related-title { font-size: 17.5px; font-weight: 500; color: var(--product-text-main); text-align: center; }

/* ── FINAL QUOTE SECTION ── */
.product-final-quote-section { padding: 50px 0 10px; background-color: var(--product-bg); }
.product-final-quote-wrapper { display: grid; grid-template-columns: 1fr 323px; gap: 0; align-items: stretch; background-color: #1e1e1e; border-radius: 14px; overflow: hidden; border: 1px solid var(--product-border); }
.product-final-quote-form-area { padding: 24px; }
.product-final-quote-form-area .product-section-title { font-size: 20px; font-weight: 800; color: #fff; text-align: left; margin-bottom: 18px; line-height: 1.2; }
.product-form-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px 28px; margin-bottom: 0; }
.product-form-group { display: flex; flex-direction: column; gap: 5px; }
.product-form-group label { font-size: 11px; font-weight: 500; color: rgba(255,255,255,0.75); }
.product-form-group input,
.product-form-group select { background-color: #2a2a2a; border: 1px solid transparent; border-radius: 6px; padding: 12px 14px; color: #fff; font-family: var(--product-font); font-size: 13px; outline: none; transition: border-color 0.3s; }

/* ==================== CUSTOMIZE TABS ==================== */
.customize-tabs { display: flex; justify-content: center; gap: 10px; margin-bottom: 25px; flex-wrap: wrap; }
.cust-tab-btn { flex-shrink: 0; transition: all 0.3s; white-space: nowrap; outline: none !important; box-shadow: none !important; }
.cust-tab-btn:focus, .cust-tab-btn:active { outline: none !important; box-shadow: none !important; }

.cust-card-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; text-align: center; }
.cust-card-title { font-size: 16px !important; }
@media (max-width: 960px) { .cust-card-grid { grid-template-columns: repeat(3, 1fr); } }
@media (max-width: 768px) { .cust-card-grid { grid-template-columns: repeat(2, 1fr); gap: 15px; } }
@media (max-width: 480px) { .cust-card-grid { grid-template-columns: 1fr; } }

/* ==================== PFR SECTION ==================== */
.product-pfr-section { padding: 0px 0;  }
.pfr-wrapper { display: grid; grid-template-columns: 1.2fr 1fr; gap: 0px; align-items: start; }
.pfr-features { display: grid; grid-template-columns: 1fr 1fr; gap: 0px 30px; margin-top: 0; }
.pfr-feature { display: flex; flex-direction: column; align-items: flex-start; text-align: left; background-color: transparent; border: none; padding: 10px 0; gap: 8px; transition: transform 0.3s; }
/* removed hover animation */
.pfr-icon { color: var(--product-gold); display: flex; justify-content: flex-start; margin-bottom: 0; }
.pfr-icon img, .pfr-icon svg { width: 40px; height: 40px; }
.pfr-feature h4 { font-size: 17px; font-weight: 700; color: #fff; margin: 0 0 10px 0; }
.pfr-feature p { font-size: 14px !important; color: rgba(255,255,255,0.7); line-height: 1.6; margin: 0; }

.pfr-reviews { background-color: #202020; border-radius: 20px; padding: 45px 0px; display: flex; flex-direction: column; justify-content: center; position: relative; min-width: 0; width: 100%; box-sizing: border-box; }
.pfr-reviews-inner { display: flex; align-items: center; justify-content: center; position: relative; padding: 0 65px; width: 100%; box-sizing: border-box; }
.pfr-nav { position: absolute; top: calc(50% + 5px); transform: translateY(-50%); z-index: 10; background: #222; border: 1px solid rgba(255,255,255,0.15); width: 44px; height: 44px; border-radius: 50%; color: rgba(255,255,255,0.6); font-size: 24px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s; font-family: sans-serif; }
.pfr-nav.prev { left: 5px; }
.pfr-nav.next { right: 5px; }
.pfr-nav:hover, .pfr-nav:active, .pfr-nav:focus, .pfr-nav.active { border-color: rgba(255,255,255,0.4) !important; color: #fff !important; outline: none !important; box-shadow: none !important; background: #333; }
.pfr-slider-wrap { overflow: hidden; width: 100%; padding-top: 40px; margin-top: -40px; box-sizing: border-box; }
.pfr-slider { display: flex; width: 100%; transition: transform 0.5s ease; }
.pfr-slide { flex: 0 0 100%; width: 100%; background-color: #171717; border: 1px solid rgba(212, 175, 55, 0.25); border-radius: 18px; padding: 50px 25px 10px; text-align: center; position: relative; box-sizing: border-box; }
.pfr-avatar { width: 55px; height: 55px; border-radius: 50%; border: 3px solid #222; box-shadow: none; position: absolute; top: -27px; left: 50%; transform: translateX(-50%); overflow: hidden; background-color: #333; z-index: 2; }
.pfr-avatar img { width: 100%; height: 100%; object-fit: cover; }
.pfr-text { font-size: 14.5px; color: rgba(255,255,255,0.7); line-height: 1.6; margin-bottom: 20px; text-align: justify; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; }
.pfr-text.expanded { display: block; -webkit-line-clamp: unset; }
.pfr-read-more-btn { background: none; border: none; color: rgba(255,255,255,0.7); font-size: 0.85rem; cursor: pointer; margin-top: -15px; margin-bottom: 15px; padding: 0; text-decoration: none; display: inline-block; font-weight: 500; outline: none; }
.pfr-read-more-btn:focus, .pfr-read-more-btn:active { outline: none !important; box-shadow: none !important; }
.pfr-name { font-size: 1.25rem; font-weight: 500; color: var(--product-gold); margin: 0 0 4px 0; }
.pfr-title { font-size: 12px; color: rgba(255,255,255,0.5); text-transform: capitalize; letter-spacing: 0px; }
.pfr-dots { display: flex; justify-content: center; gap: 8px; margin-top: 30px; }
.pfr-dot { width: 35px; height: 4px; border: 1px solid rgba(255,255,255,0.4); background-color: transparent; border-radius: 4px; cursor: pointer; transition: 0.3s; }
.pfr-dot.active { background-color: var(--product-gold); border-color: var(--product-gold); }
.product-form-group select { background-color: #141414; border: 1px solid #333333; border-radius: 6px; padding: 7px 10px; color: #fff; font-family: var(--product-font); font-size: 11.5px; outline: none; transition: border-color 0.25s; width: 100%; appearance: none; -webkit-appearance: none; }
.product-form-group input::placeholder { color: #555; }
.product-form-group input:focus, .product-form-group select:focus { border-color: var(--product-gold); color: #ffffff !important; }
.product-form-group select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23c9a84c' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 12px center; padding-right: 34px; cursor: pointer; }
.product-form-group select option { background-color: #1e1e1e; color: #fff; }
.product-form-row-box-qty { display: grid; grid-template-columns: 1.2fr 1fr; gap: 10px 14px; margin-top: 12px; }
.product-form-group.span-2 { grid-column: span 2; }
.product-final-form textarea { width: 100%; max-width: 100%; background-color: #141414; border: 1px solid #333333; border-radius: 6px; padding: 7px 10px; color: #fff; font-family: var(--product-font); font-size: 11.5px; outline: none; resize: none; transition: border-color 0.25s; margin-bottom: 16px; box-sizing: border-box; }
.product-final-form textarea::placeholder { color: #555; }
.product-final-form textarea:focus { border-color: var(--product-gold); color: #ffffff !important; }
.product-submit-btn { display: block; margin: 0 auto; background-color: var(--product-gold); color: #111111; border: none; border-radius: 50px; padding: 13px 36px; font-size: 14px; font-weight: 700; cursor: pointer; font-family: var(--product-font); transition: background-color 0.25s, transform 0.2s; letter-spacing: 0.3px; min-width: 160px; }/* removed hover: .product-submit-btn:hover { ... } */
.product-final-quote-image { background-color: #1e1e1e; display: flex; align-items: center; justify-content: center; border-left: 1px solid var(--product-border); width: 323px; flex-shrink: 0; padding: 24px 32px; }
.product-placeholder-img { margin-left: -92px; width: 220px; height: 260px; background-color: #2a2a2a; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; color: rgba(255,255,255,0.25); font-weight: 500; flex-shrink: 0; overflow: hidden; }
.product-placeholder-img img { width: 100%; height: 100%; object-fit: cover; }

/* INSTANT QUOTE SECTION */
.instant-quote-section { padding: 30px 0 40px; }
.iq-card { background-color: #202020; border-radius: 12px; padding: 40px; display: grid; grid-template-columns: 1fr 280px; gap: 40px; align-items: start; max-width: 1200px; margin: 0 auto; box-sizing: border-box; }
.iq-content { flex: 1; }
.iq-title { font-size: 26px; font-weight: 700; color: #fff; margin-bottom: 25px; }
.iq-form { display: flex; flex-direction: column; gap: 18px; }
.iq-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
.iq-row-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 15px; }
.iq-group { display: flex; flex-direction: column; gap: 6px; }
.iq-group label { font-size: 11px; color: #fff; font-weight: 600; }
.iq-group input, .iq-group select, .iq-group textarea { background-color: #161616; border: 1px solid transparent; border-radius: 6px; padding: 12px 14px; color: #fff; font-size: 13px; font-family: var(--product-font); outline: none; transition: border-color 0.3s; width: 100%; box-sizing: border-box; }
.iq-group input:focus, .iq-group select:focus, .iq-group textarea:focus { border-color: var(--product-gold); }
.iq-group textarea { resize: vertical; min-height: 45px; }
.iq-submit { margin-top: 5px; display: flex; justify-content: center; }
.iq-btn { background-color: var(--product-gold); color: #121212; font-weight: 700; padding: 10px 20px; border-radius: 50px; border: none !important; font-size: 15px; cursor: pointer; transition: background-color 0.3s; width: 298px; max-width: 100%; height: 42px; text-align: center; display: flex; justify-content: center; align-items: center; outline: none !important; box-shadow: none !important; }
.iq-btn:focus, .iq-btn:active, .iq-btn:focus-visible { outline: none !important; box-shadow: none !important; border: none !important; }
.iq-image-wrap { background-color: #333333; border-radius: 8px; width: 100%; aspect-ratio: 1 / 1; display: flex; align-items: center; justify-content: center; color: #111; font-size: 24px; font-weight: 700; }

/* Section headings */
.product-section-title { font-size: 40px; font-weight: 700; margin-bottom: 18.8px; }
.product-sec-badge { display: inline-block; color: var(--product-gold); border: 1px solid var(--product-gold); padding: 6.2px 18.8px; border-radius: 62.5px; font-size: 15px; font-weight: 600; letter-spacing: 1px; margin-bottom: 25px; }

/* Dividers between spec rows */
.product-specs-table .spec-label,
.product-specs-table .spec-value { border-bottom: 1px solid rgba(255,255,255,0.05); }

/* ====== RESPONSIVE ====== */
@media (max-width: 1240px) {
    .product-container { padding: 0 24px; }
    .product-hero-grid { grid-template-columns: 1fr; }
    .product-related-grid { grid-template-columns: repeat(2, 1fr); }
    .product-final-quote-wrapper { grid-template-columns: 1fr; }
    .pfr-wrapper { grid-template-columns: 1fr; }
}

@media (max-width: 960px) {
    .product-tabs-nav { gap: 40px; }
    .product-form-row-3:not(.product-form-row-options) { grid-template-columns: 1fr; }
    .product-form-group.span-2 { grid-column: span 1; }
}

@media (max-width: 768px) {
    .product-container { padding: 0 4.5vw; }
    .product-hero-section { padding: 4vw 0; margin-top: 10px; }
    .product-hero-grid { grid-template-columns: 1fr; gap: 6vw; }
    .product-breadcrumbs { display: flex !important; font-size: 3.5vw; margin-bottom: 5vw; }
    .product-main-img-wrap { width: 100%; aspect-ratio: 4 / 3; }
    .product-thumbnails { gap: 3vw; }
    .product-thumb { width: 20vw; height: 20vw; }
    .product-reviews-badges { gap: 6vw; margin-top: 5vw; flex-wrap: wrap; }
    .product-title { font-size: 7vw; }
    .product-desc { font-size: 3.8vw; line-height: 1.75; }
    .product-quote-box { padding: 5vw 4.5vw; }
    .product-quote-title { font-size: 6vw; margin-bottom: 6vw; }
    .pf-mob-label { display: none !important; font-size: 3.5vw; font-weight: 600; margin-bottom: 1.5vw; color: rgba(255,255,255,0.85); }
    .pf-wrap { display: flex; flex-direction: column; width: 100%; }
    .pf-upload-wrap { width: 100%; }
    .product-form-row-3:not(.product-form-row-options) { grid-template-columns: 1fr; gap: 4vw; }
    .product-form-row-4 { grid-template-columns: 1fr 1fr !important; gap: 3.5vw 4vw; }
    .product-form-row-options { grid-template-columns: 1fr 1fr !important; gap: 3.5vw 4vw; }
    .product-form-row-upload { grid-template-columns: 1fr 1fr !important; gap: 3.5vw 4vw; }
    .product-form-row-upload .pf-upload-wrap { grid-column: 1 / -1; }
    .product-upload-group { display: flex; gap: 0; width: 100%; }
    .product-upload-group input { flex: 1; border-radius: 8px 0 0 8px !important; }
    .product-quote-form input, .product-quote-form select, .product-quote-form textarea { font-size: 3.8vw; padding: 3vw 3.5vw; border-radius: 8px; }
    .product-btn-upload { font-size: 3.8vw; padding: 3vw 5vw; border-radius: 0 8px 8px 0; }
    .product-btn-primary { font-size: 4.5vw; padding: 4vw 0; border-radius: 50px; width: 100%; }
    .product-final-quote-section { padding: 8vw 0; }
    .product-final-quote-wrapper { grid-template-columns: 1fr; border-radius: 12px; }
    .product-final-quote-image { display: none; }
    .product-final-quote-form-area { padding: 5vw; }

    /* Instant Quote Mobile Fixes */
    .iq-card { grid-template-columns: 1fr; padding: 6vw 5vw; gap: 6vw; }
    .iq-row { grid-template-columns: 1fr; gap: 4vw; }
    .iq-row-2 { grid-template-columns: 1fr 1fr; gap: 3vw; }
    .iq-title { font-size: 6.5vw; margin-bottom: 5vw; text-align: center; }
    .iq-btn { max-width: 100%; font-size: 4.5vw; padding: 3.5vw 0; }
    .iq-group label { font-size: 3.5vw; margin-bottom: 1.5vw; }
    .iq-group input, .iq-group select, .iq-group textarea { font-size: 3.8vw; padding: 3vw 3.5vw; }
    .iq-image-col { display: none; }
    .product-form-grid-3 { grid-template-columns: 1fr 1fr; gap: 3vw; }
    .product-form-group label { font-size: 3.5vw; }
    .product-form-group input, .product-form-group select { font-size: 3.8vw; padding: 2.5vw 3vw; }
    .product-final-form textarea { font-size: 3.8vw; padding: 2.5vw 3vw; }
    .product-submit-btn { font-size: 4vw; padding: 3.5vw 8vw; }

    .pfr-features { grid-template-columns: 1fr; gap: 0px; }
    .pfr-feature { align-items: center; text-align: center; }
    .pfr-icon { justify-content: center; }
    .pfr-reviews { padding: 30px 20px; margin-top: 20px; }
    .pfr-reviews-inner { padding: 0 0 70px 0; }
    .pfr-nav { top: auto; bottom: 0; transform: none; width: 45px; height: 45px; font-size: 20px; }
    .pfr-nav.prev { left: calc(50% - 55px); }
    .pfr-nav.next { right: auto; left: calc(50% + 10px); }
    .pfr-slide { padding: 10vw 4vw 6vw; }
    .product-tabs-wrapper { margin-left: -4.5vw; margin-right: -4.5vw; margin-bottom: 6vw; }
    .product-tabs-nav { gap: 3vw; overflow-x: auto; padding: 0 4.5vw; scroll-snap-type: x mandatory; }
    .product-tab-item { flex: 0 0 44vw; width: 44vw; font-size: 4vw; padding: 3.5vw 2vw; white-space: nowrap; text-align: center; scroll-snap-align: start; }
    .customize-tabs { justify-content: flex-start; flex-wrap: nowrap; overflow-x: auto; scrollbar-width: none; padding-bottom: 5px; -webkit-overflow-scrolling: touch; margin-left: -4.5vw; margin-right: -4.5vw; padding: 0 4.5vw; }
    .customize-tabs::-webkit-scrollbar { display: none; }
    .cust-card-grid { grid-template-columns: repeat(2, 1fr); gap: 10px; }
    .cust-card-img { height: 120px !important; }
    .cust-card-title { font-size: 10px !important; padding: 10px !important; }
    .product-info-heading { font-size: 6vw; margin-bottom: 4vw; }
    .product-info-text { font-size: 3.8vw; line-height: 1.8; }
    .product-info-text p { font-size: 3.8vw; }
    .product-info-subheading { font-size: 5vw; margin: 5vw 0 3vw; }
    .product-info-list li { font-size: 3.8vw; }
    .product-specs-table { grid-template-columns: 35vw 1fr; font-size: 3.5vw; }
    .spec-label, .spec-value { padding: 3vw; }
    .product-related-section { padding: 8vw 0; }
    .product-related-grid { display: flex; flex-wrap: nowrap; overflow-x: auto; gap: 4vw; margin-left: -4.5vw; margin-right: -4.5vw; padding: 0 4.5vw 2vw; scroll-snap-type: x mandatory; grid-template-columns: unset; }
    .product-related-card { flex: 0 0 44vw; width: 44vw; scroll-snap-align: start; }
    .product-related-title { font-size: 3.8vw; }
}

/* FAQ Accordion */
.faq-accordion { display: flex; flex-direction: column; gap: 15px; }
.faq-item { background-color: #222222; border-radius: 8px; overflow: hidden; transition: background-color 0.3s ease; }
.faq-question { width: 100%; text-align: left; background: none; border: none; padding: 20px 25px; font-size: 16px; font-family: var(--product-font); color: rgba(255,255,255,0.85); cursor: pointer; display: flex; justify-content: space-between; align-items: center; transition: color 0.3s ease; }
.faq-question:hover { color: #ffffff; background-color: rgba(255,255,255,0.02); }
.faq-icon { font-size: 20px; font-weight: 300; transition: transform 0.3s ease; color: rgba(255,255,255,0.85); }
.faq-item.active .faq-icon { transform: rotate(45deg); color: var(--product-gold); }
.faq-item.active .faq-question { color: var(--product-gold); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease; }
.faq-answer-content { padding: 20px 25px 20px; font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.6); }

@media (max-width: 768px) {
    .faq-question { padding: 4.5vw 5vw; font-size: 3.8vw; }
    .faq-answer-content { padding: 0 5vw 4.5vw; font-size: 3.5vw; }
}

/* Order Process */
.order-process-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
.op-card { background-color: #222222; border: 1px solid rgba(245, 197, 66, 0.2); border-radius: 8px; padding: 15px 15px; text-align: center; transition: transform 0.3s ease; cursor: pointer; }
/* removed hover animation */
.op-icon { font-size: 40px; color: var(--product-gold); margin-bottom: 12px; text-align: center; }
.op-title { font-size: 17px; font-weight: 700; color: #fff; margin-bottom: 10px; text-align: center; }
.op-desc { font-size: 13.5px; line-height: 1.5; color: rgba(255,255,255,0.7); text-align: center; }

@media (max-width: 960px) {
    .order-process-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 768px) {
    .order-process-grid { grid-template-columns: 1fr; gap: 4vw; }
    .op-card { padding: 6vw 5vw; }
    .op-icon { font-size: 8vw; margin-bottom: 4vw; }
    .op-title { font-size: 4.5vw; margin-bottom: 3vw; }
    .op-desc { font-size: 3.5vw; }
}

/* Review Form */
.review-form-container { background-color: #222222; border-radius: 8px; padding: 40px; max-width: 700px; }
.review-form-title { font-size: 20px; font-weight: 700; color: #fff; margin-bottom: 25px; }
.product-review-form { display: flex; flex-direction: column; gap: 20px; }
.review-rating-group label { display: block; font-size: 13px; font-weight: 600; color: #fff; margin-bottom: 8px; }
.review-stars-input { display: flex; gap: 4px; color: rgba(255,255,255,0.2); font-size: 16px; cursor: pointer; }
.review-stars-input i.active { color: var(--product-gold); }
.review-form-group { display: flex; flex-direction: column; gap: 8px; }
.review-form-group label { font-size: 13px; font-weight: 600; color: #fff; }
.review-form-group input, .review-form-group textarea { background-color: #161616; border: 1px solid transparent; border-radius: 6px; padding: 12px 15px; color: #fff; font-family: var(--product-font); font-size: 13px; outline: none; transition: border-color 0.3s ease; }
.review-form-group input::placeholder, .review-form-group textarea::placeholder { color: rgba(255,255,255,0.3); }
.review-form-group input:focus, .review-form-group textarea:focus { border-color: var(--product-gold); }
.review-form-group textarea { resize: vertical; min-height: 100px; }
.review-submit-wrap { display: flex; justify-content: center; margin-top: 10px; }
.review-submit-btn { background-color: #F8C346; color: #111; border: none; border-radius: 50px; padding: 12px 50px; font-size: 15px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s; min-width: 200px; }/* removed hover: .review-submit-btn:hover { ... } */

/* Review Layout & Cards */
.review-layout { display: grid; grid-template-columns: 1fr 1.2fr; gap: 60px; align-items: start; }
.review-form-container { width: 100%; max-width: 100%; box-sizing: border-box; }
.review-list-container { display: flex; flex-direction: column; align-items: center; gap: 30px; width: 100%; box-sizing: border-box; }
.review-slider-wrap { width: 100%; display: flex; flex-direction: column; gap: 20px; }
.review-card { position: relative; background-color: #222222; border: 1px solid rgba(255, 193, 7, 0.15); border-radius: 20px; padding: 50px 40px 30px; text-align: center; margin-top: 35px; transition: transform 0.3s ease; }
.review-card:hover { transform: translateY(-3px); }
.review-avatar { width: 70px; height: 70px; border-radius: 50%; border: 3px solid rgba(255, 193, 7, 0.4); position: absolute; top: -35px; left: 50%; transform: translateX(-50%); object-fit: cover; background-color: #333; }
.review-text { font-size: 14.5px; line-height: 1.6; color: rgba(255,255,255,0.75); margin-bottom: 20px; }
.review-author { font-size: 18px; font-weight: 700; color: var(--product-gold); margin-bottom: 5px; }
.review-title { font-size: 13px; color: rgba(255,255,255,0.5); }
.review-controls { display: flex; justify-content: center; gap: 15px; margin-top: 15px; }
.review-btn { width: 45px; height: 45px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.2); background: transparent; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; }/* removed hover: .review-btn:hover { ... } */

@media (max-width: 960px) {
    .review-layout { grid-template-columns: 1fr; gap: 80px; }
}

@media (max-width: 768px) {
    .review-form-container { padding: 6vw; }
    .review-form-title { font-size: 5vw; }
    .review-submit-btn { width: 100%; min-width: unset; }
    .review-card { padding: 12vw 6vw 6vw; }
}
/* --- Inline Human Verification (Inside Form) --- */
.human-verification-inline {
  width: 100%; margin-top: -5px; padding: 10px 15px;
  background-color: #1c1c1c; border: 1px solid rgba(255, 193, 7, 0.3);
  border-radius: 8px; box-sizing: border-box; display: flex; flex-direction: row; justify-content: space-between; align-items: center; gap: 10px; flex-wrap: wrap;
}
.human-verification-header { display: flex; flex-direction: column; gap: 2px; }
.human-verification-inline-title { color: #fff; font-size: 20px !important; font-weight: 800; margin: 0 !important; line-height: 1.2 !important; }
.human-verification-inline-copy { color: #ccc; font-size: 13px !important; margin: 0 !important; line-height: 1.4 !important; }
.human-verification-inline-control { display: flex; align-items: center; gap: 12px; margin-top: 0; }
.human-question { color: var(--product-gold); font-size: 16px !important; font-weight: 700; white-space: nowrap; }
.human-answer { width: 85px !important; max-width: 85px !important; flex: 0 0 85px; height: 38px !important; background-color: #111; border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 6px; color: #fff; font-size: 14px !important; text-align: center; outline: none; padding: 0 !important; }
.human-answer:focus { border-color: var(--product-gold); }
.human-check-btn { height: 38px !important; padding: 0 24px !important; background-color: var(--product-gold); color: #111; border: none !important; outline: none !important; box-shadow: none !important; border-radius: 50px; font-size: 14px !important; font-weight: 700; cursor: pointer; transition: all 0.2s; width: auto !important; }
.human-check-btn:hover { opacity: 0.9; }
.human-status { font-size: 13px !important; font-weight: 700; margin: 0 0 0 5px !important; width: auto; display: none; }
.human-status:not(:empty) { display: block; }
.human-status.is-success { color: #4caf50; display: block; }
.human-status.is-error { color: #f44336; display: block; }
</style>

<div class="product-wrapper">

    <!-- ==================== HERO ==================== -->
    <section class="product-hero-section">
        <div class="product-container">

            <!-- Breadcrumbs -->
            @include('web.components.breadcrumb', [
                'class' => 'product-breadcrumbs',
                'items' => array_filter([
                    isset($product_category) && $product_category ? ['label' => $product_category->name, 'url' => url($product_category->category_url)] : null,
                    ['label' => $product[0]->title]
                ])
            ])

            <div class="product-hero-grid">

                <!-- LEFT: Images & Trust Badges -->
                <div class="product-hero-images">
                    @foreach($product as $p)
                    @php $images = json_decode($p->images, true); @endphp
                    @if(is_array($images) && !empty($images))

                    <div class="product-main-img-wrap">
                        <img src="{{ url('images/'.$images[0]) }}" alt="{{ strtolower(str_replace('-', ' ', $p->title)) }}" class="product-main-img" id="productMainImg" title="{{ ucwords(strtolower(str_replace('-', ' ', $p->title))) }}">
                    </div>

                    @if(count($images) > 1)
                    <div class="product-thumbnails">
                        @foreach($images as $img)
                        <div class="product-thumb {{ $loop->first ? 'active' : '' }}" onclick="switchImg(this, '{{ url('images/'.$img) }}')">
                            <img src="{{ url('images/'.$img) }}" alt="{{ strtolower(str_replace('-', ' ', $p->title)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $p->title))) }}">
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @endif
                    @break
                    @endforeach

                    <!-- Trust Badges -->
                    <!-- Trust Badges replaced with Moving Logos -->
                    <style>
                    .pd-logos-wrap {
                        width: 100%;
                        overflow: hidden;
                        position: relative;
                        display: flex;
                        align-items: center;
                        gap: 35px;
                        margin-top: 5px;
                        height: 60px;
                        mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
                        -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
                    }
                    .pd-logos-track {
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        gap: 35px;
                        will-change: transform;
                        white-space: nowrap;
                        flex-wrap: nowrap;
                    }
                    .pd-logo {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        height: 42px;
                        flex-shrink: 0;
                        opacity: 0.6;
                        transition: opacity 0.3s ease;
                    }
                    .pd-logo:hover {
                        opacity: 1;
                    }
                    .pd-logo img {
                        display: block;
                        height: 100%;
                        object-fit: contain;
                        filter: grayscale(100%) brightness(0) invert(75%);
                    }
                    @media (max-width: 768px) {
                        .pd-logos-wrap {
                            display: none !important;
                        }
                    }
                    </style>

                    <div class="pd-logos-wrap" id="pdLogosWrap">
                        <div class="pd-logos-track" id="pdLogosTrack">
                            <div class="pd-logo"><img src="{{ asset('images/voli-logo.webp') }}" alt="voli" title="Voli"></div>
                            <div class="pd-logo"><img src="{{ asset('uploads/adidas-logo.png') }}" alt="adidas" title="Adidas"></div>
                            <div class="pd-logo"><img src="{{ asset('uploads/Google-logo.png') }}" alt="google" title="Google"></div>
                            <div class="pd-logo"><img src="{{ asset('uploads/hp-logo.png') }}" alt="hp" title="Hp"></div>
                            <div class="pd-logo"><img src="{{ asset('uploads/unilever-logo.webp') }}" alt="unilever" title="Unilever"></div>
                            <div class="pd-logo"><img src="{{ asset('uploads/Benefit-Logo.png') }}" alt="benefit" title="Benefit"></div>
                        </div>
                    </div>

                                                            <script>
                    document.addEventListener('DOMContentLoaded', function(){
                        var wrap  = document.getElementById('pdLogosWrap');
                        var track = document.getElementById('pdLogosTrack');
                        if(!wrap || !track) return;

                        for(var i=0; i<4; i++){
                            var clone = track.cloneNode(true);
                            clone.setAttribute('aria-hidden','true');
                            wrap.appendChild(clone);
                        }

                        var speed = 0.4;
                        var offset = 0;
                        
                        function animate(){
                            offset += speed;
                            if(offset >= track.scrollWidth + 30){
                                offset = 0;
                            }
                            wrap.scrollLeft = offset;
                            requestAnimationFrame(animate);
                        }
                        
                        animate();
                        animate();
                    });

                    document.addEventListener("DOMContentLoaded", function() {
                        const readMoreBtns = document.querySelectorAll('.pfr-read-more-btn');
                        
                        function collapseAllCards() {
                            document.querySelectorAll('.pfr-text.expanded').forEach(p => {
                                p.classList.remove('expanded');
                                if(p.nextElementSibling && p.nextElementSibling.classList.contains('pfr-read-more-btn')) {
                                    p.nextElementSibling.textContent = 'Read more';
                                }
                            });
                        }

                        readMoreBtns.forEach(btn => {
                            btn.addEventListener('click', function() {
                                const textPara = this.previousElementSibling;
                                const isExpanded = textPara.classList.contains('expanded');
                                
                                collapseAllCards();

                                if (!isExpanded) {
                                    textPara.classList.add('expanded');
                                    this.textContent = 'Read less';
                                }
                            });
                        });
                        
                        // Override movePfrSlide to collapse text when sliding
                        if(typeof window.movePfrSlide === 'function') {
                            const originalMove = window.movePfrSlide;
                            window.movePfrSlide = function(step) {
                                collapseAllCards();
                                originalMove(step);
                            }
                        }
                        if(typeof window.goToPfrSlide === 'function') {
                            const originalGoTo = window.goToPfrSlide;
                            window.goToPfrSlide = function(index) {
                                collapseAllCards();
                                originalGoTo(index);
                            }
                        }
                    });
                    </script>
                </div>

                <!-- RIGHT: Product Details + Quote Form -->
                <div class="product-hero-details">
                    @foreach($product as $p)

                    <div class="product-title-row">
                        <h1 class="product-title">{{ $p->title }}</h1>
                        <span class="product-status-badge" style="white-space: nowrap;">In Stock</span>
                    </div>

                    <div class="product-desc" style="font-size: 15px; line-height: 1.6; color: #b3b3b3; margin-top: 0px;">
                        @php
                            $clean_desc = strip_tags($p->description);
                        @endphp
                        @if(strlen($clean_desc) > 180)
                            <div id="desc-short" style="display: block;">
                                {{ Str::limit($clean_desc, 180, ' ....') }} 
                                <a onclick="document.getElementById('desc-short').style.display='none'; document.getElementById('desc-full').style.display='block';" style="color: #F5C542 !important; font-weight: 600; text-decoration: none; cursor: pointer; white-space: nowrap;">Read More</a>
                            </div>
                            <div id="desc-full" style="display: none;">
                                <style>
                                    #desc-full p:last-of-type { display: inline; margin-bottom: 0; }
                                </style>
                                {!! $p->description !!} 
                                &nbsp;<a onclick="document.getElementById('desc-full').style.display='none'; document.getElementById('desc-short').style.display='block';" style="color: #F5C542 !important; font-weight: 600; text-decoration: none; cursor: pointer; white-space: nowrap;">Show Less</a>
                            </div>
                        @else
                            {!! $p->description !!}
                        @endif
                    </div>

                    <!-- Quote Form -->
                    <div class="product-quote-box">
                        <h3 class="product-quote-title">Get Custom Quote</h3>
                        <form class="product-quote-form" id="quoteform" method="post" action="{{ url('product-mail') }}" enctype="multipart/form-data" spellcheck="false">
                            @csrf
                            <input type="hidden" name="p_boxname" value="{{ $p->title }}">
                            <input type="hidden" name="source" value="Product detail custom quote">
                            <input type="hidden" name="page_url" value="{{ url()->current() }}">

                            <!-- Row 1: Name | Email | Phone -->
                            <div class="product-form-row product-form-row-3">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Name *</label>
                                    <input type="text" name="p_first_name" placeholder="Name *" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                                    <input type="hidden" name="p_last_name" value="-">
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Email Address *</label>
                                    <input type="email" name="p_email" placeholder="Email *" required>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Phone *</label>
                                    <input type="tel" name="p_phone" placeholder="Phone number *" required oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
                                </div>
                            </div>

                            <!-- Row 2: Width | Length | Depth | Unit -->
                            <div class="product-form-row product-form-row-4">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Width *</label>
                                    <input type="text" name="p_width" placeholder="Width *" required oninput="this.value = this.value.replace(/[^0-9.]/g, '')">
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Length *</label>
                                    <input type="text" name="p_length" placeholder="Length *" required oninput="this.value = this.value.replace(/[^0-9.]/g, '')">
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Depth *</label>
                                    <input type="text" name="p_height" placeholder="Depth *" required oninput="this.value = this.value.replace(/[^0-9.]/g, '')">
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Units *</label>
                                    <select name="p_unit">
                                        <option value="mm">mm *</option>
                                        <option value="Inch">Inch</option>
                                        <option value="cm">cm</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 3: Material | Printing -->
                            <div class="product-form-row product-form-row-options">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Select Material</label>
                                    @php
                                        $parentCatMatQuote = \DB::table('add_category')->where('name', 'Box by Material')->first();
                                        $materialsQuote = $parentCatMatQuote ? \DB::table('add_category')->where('parent_category', $parentCatMatQuote->cat_id)->get() : [];
                                    @endphp
                                    <select name="p_material">
                                        <option value="">Select Material</option>
                                        @foreach($materialsQuote as $mat)
                                            <option value="{{ $mat->name }}">{{ $mat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Printing Options</label>
                                    <select name="p_color">
                                        <option value="">Printing Options</option>
                                        <option value="1 Color">1 Color</option>
                                        <option value="2 Color">2 Color</option>
                                        <option value="3 Color">3 Color</option>
                                        <option value="4 Color">4 Color</option>
                                        <option value="4/4 Color">4/4 Color</option>
                                        <option value="4 Color+PMS">4 Color + PMS</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 4: Finishing | Quantity -->
                            <div class="product-form-row product-form-row-options">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Finishing Options</label>
                                    <select name="p_finishing">
                                        <option value="">Finishing Options</option>
                                        <option value="Gloss">Gloss</option>
                                        <option value="Matte">Matte</option>
                                        <option value="UV">UV</option>
                                    </select>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Quantity *</label>
                                    <input type="text" name="p_qty1" placeholder="Quantity" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                </div>
                            </div>

                            <!-- Row 5: Upload -->
                            <div class="product-form-row">
                                <div class="pf-wrap pf-upload-wrap">
                                    <label class="pf-mob-label">Upload File Here</label>
                                    <div class="product-upload-group">
                                        <input type="text" placeholder="No file choosen" readonly id="uploadFileName">
                                        <input type="file" name="p_file" id="fileUploadInput" style="display:none" onchange="document.getElementById('uploadFileName').value = this.files[0]?.name || ''">
                                        <button type="button" class="product-btn-upload" onclick="document.getElementById('fileUploadInput').click()">Upload</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Row 6: Message -->
                            <div class="product-form-row">
                                <textarea name="message" placeholder="Enter your message" rows="3"></textarea>
                            </div>

                            <div class="product-form-row">
                                <div class="human-verification-inline">
                                    <div class="human-verification-header">
                                        <h3 class="human-verification-inline-title">Are you a human?</h3>
                                        <p class="human-verification-inline-copy">Solve this quick addition before continuing.</p>
                                    </div>
                                    <div class="human-verification-inline-control">
                                        <span class="human-question" id="prodHumanQuestion1">0 + 0 =</span>
                                        <input type="number" class="human-answer" id="prodHumanAnswer1" placeholder="Answer" aria-label="Human verification answer">
                                        <button type="button" class="human-check-btn" id="prodHumanCheckBtn1">Verify</button>
                                        <span class="human-status" id="prodHumanStatus1" aria-live="polite"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="product-submit-wrap">
                                <button type="submit" class="product-btn-primary">Send Instant Quote</button>
                            </div>
                            <div class="ajax-success-msg" id="quoteform-success" style="display: none; background-color: rgba(227, 176, 54, 0.15); border: 1px solid #e3b036; color: #e3b036; padding: 15px; border-radius: 8px; margin-top: 15px; text-align: center; font-weight: 600; font-size: 14px;">
                                Thank you for the inquiry, our sales representative will contact soon!
                            </div>
                        </form>
                    </div>

                    @break
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== FEATURES & REVIEWS ==================== -->
    <section class="product-pfr-section">
        <div class="product-container">
            <div class="pfr-wrapper">
                
                <!-- Left: Features -->
                <div class="pfr-features">
                    <div class="pfr-feature">
                        <div class="pfr-icon">
                            <img src="{{ asset('uploads/product/freedesign.svg') }}" alt="free design assistance" title="Free Design Assistance" width="32" height="32" >
                        </div>
                        <div class="pfr-content">
                            <h4>Free Design Assistance</h4>
                            <p>Our expert designers provide free guidance and mockups to create packaging that perfectly reflects your brand at no extra cost.</p>
                        </div>
                    </div>
                    
                    <div class="pfr-feature">
                        <div class="pfr-icon">
                            <img src="{{ asset('uploads/product/custom-size.svg') }}" alt="custom size" title="Custom Size" width="32" height="32" >
                        </div>
                        <div class="pfr-content">
                            <h4>Custom Size And Shape</h4>
                            <p>We create packaging tailored to your exact dimensions and style, ensuring a perfect fit and standout presentation for every product.</p>
                        </div>
                    </div>

                    <div class="pfr-feature">
                        <div class="pfr-icon">
                            <img src="{{ asset('uploads/product/price.svg') }}" alt="low price" title="Low Price" width="32" height="32" >
                        </div>
                        <div class="pfr-content">
                            <h4>Low Price</h4>
                            <p>We offer high-quality custom packaging at the most competitive rates, giving you premium results without exceeding your budget.</p>
                        </div>
                    </div>

                    <div class="pfr-feature">
                        <div class="pfr-icon">
                            <img src="{{ asset('uploads/product/shipping-fast.svg') }}" alt="free shipping" title="Free Shipping" width="32" height="32" >
                        </div>
                        <div class="pfr-content">
                            <h4>Free Shipping</h4>
                            <p>We offer free nationwide delivery on all custom packaging orders, ensuring you get premium boxes without extra costs or hidden fees.</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Reviews Slider -->
                <div class="pfr-reviews">
                    <div class="pfr-reviews-inner">
                        <button class="pfr-nav prev" onclick="movePfrSlide(-1)">&#8249;</button>
                        <div class="pfr-slider-wrap">
                            <div class="pfr-slider" id="pfrSlider">
                                @php
                                    if(!isset($testimonial)) {
                                        $testimonial = \DB::table('testimonila')->get();
                                    }
                                @endphp
                                @foreach($testimonial as $testi)
                                <div class="pfr-slide">
                                    <div class="pfr-avatar">
                                        <img src="{{ asset('images/' . $testi->image) }}" onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($testi->name) }}&background=random'" alt="{{ $testi->name }}" title="{{ $testi->name }}">
                                    </div>
                                    <p class="pfr-text">{{ $testi->comment }}</p>
                                    @if(strlen($testi->comment) > 130)
                                        <button class="pfr-read-more-btn">Read more</button>
                                    @endif
                                    <h5 class="pfr-name">{{ $testi->name }}</h5>
                                    <span class="pfr-title">{{ $testi->profile_link ?? 'Customer' }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <button class="pfr-nav next" onclick="movePfrSlide(1)">&#8250;</button>
                    </div>
                    <div class="pfr-dots" id="pfrDots">
                        @foreach($testimonial as $index => $testi)
                            <span class="pfr-dot {{ $index == 0 ? 'active' : '' }}" onclick="goToPfrSlide({{ $index }})"></span>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== INFO TABS ==================== -->
    <section class="product-info-section">
        <div class="product-container">

            <div class="product-tabs-wrapper">
                <ul class="product-tabs-nav">
                    <li class="product-tab-item active" data-tab="tab-description">Description</li>
                    <li class="product-tab-item" data-tab="tab-specs">Product Specifications</li>
                    @if(isset($product_faqs) && count($product_faqs) > 0)
                    <li class="product-tab-item" data-tab="tab-faqs">FAQs</li>
                    @endif
                    <li class="product-tab-item" data-tab="tab-order">Order Process</li>
                    <!-- <li class="product-tab-item" data-tab="tab-review">Review</li> -->
                </ul>
            </div>

            <!-- Description Tab -->
            <div class="product-tab-content" id="tab-description">
                <div class="product-info-text">
                    @foreach($product as $p)
                        {!! $p->long_description !!}
                    @break
                    @endforeach
                </div>
            </div>

            <!-- Specifications Tab -->
            <div class="product-tab-content" id="tab-specs" style="display:none">
                @if(isset($dimension) && count($dimension) > 0)
                <div class="product-specs-table">
                    @foreach($dimension as $dim)
                    <div class="spec-label">{{ $dim->title }}</div>
                    <div class="spec-value">{{ $dim->specification }}</div>
                    @endforeach
                </div>
                @else
                <p style="color:rgba(255,255,255,0.5)">No specifications available.</p>
                @endif
            </div>

            @if(isset($product_faqs) && count($product_faqs) > 0)
            <!-- FAQs Tab -->
            <div class="product-tab-content" id="tab-faqs" style="display:none">
                <div class="faq-accordion">
                    @foreach($product_faqs as $faq)
                    <div class="faq-item">
                        <button class="faq-question" onclick="toggleFaq(this)">{{ $faq->question }} <span class="faq-icon">+</span></button>
                        <div class="faq-answer">
                            <div class="faq-answer-content">{{ $faq->answer }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

            <!-- Order Process Tab -->
            <div class="product-tab-content" id="tab-order" style="display:none">
                <div class="order-process-grid">
                    <div class="op-card">
                        <div class="op-icon"><i class="far fa-paper-plane"></i></div>
                        <h4 class="op-title">Submit Your Brief</h4>
                        <p class="op-desc">Share your product dimensions, quantities, and vision. We respond within 24 hours with initial recommendations and a structural concept tailored to your needs.</p>
                    </div>
                    <div class="op-card">
                        <div class="op-icon">
                            <img src="{{ asset('uploads/design-code.svg') }}" style="width:1em; height:1em; display:inline-block;" alt="Design & Quote">
                        </div>
                        <h4 class="op-title">Design & Quote</h4>
                        <p class="op-desc">You receive a structural die line, finish spec sheet, and transparent pricing. Revisions are included at no extra cost &mdash; no surprises, no hidden fees.</p>
                    </div>
                    <div class="op-card">
                        <div class="op-icon"><i class="far fa-check-circle"></i></div>
                        <h4 class="op-title">Approve & Produce</h4>
                        <p class="op-desc">Once artwork is approved, production begins immediately in our certified manufacturing facility. Pre-production physical samples available before full run.</p>
                    </div>
                    <div class="op-card">
                        <div class="op-icon">
                            <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="1" y="3" width="15" height="13"></rect>
                                <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                <circle cx="18.5" cy="18.5" r="2.5"></circle>
                            </svg>
                        </div>
                        <h4 class="op-title">Ship & Arrive</h4>
                        <p class="op-desc">Your order ships with full tracking and quality documentation. Custom orders take approximately 15 days production, plus shipping.</p>
                    </div>
                </div>
            </div>

            {{--
            <!-- Review Tab -->
            <div class="product-tab-content" id="tab-review" style="display:none">
                <div class="review-layout">
                    <!-- Left: Form -->
                    <div class="review-form-container">
                        <h3 class="review-form-title">Add a Review</h3>
                        @if(session('review_success'))
                            <div style="padding: 15px; margin-bottom: 20px; border-radius: 4px; color: #155724; background-color: #d4edda; border-color: #c3e6cb;">
                                {{ session('review_success') }}
                            </div>
                        @endif
                        <form class="product-review-form" action="{{ url('submit-review') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$product[0]->product_id}}">
                            <div class="review-rating-group">
                                <label>Add Your Rating *</label>
                                <div class="review-stars-input" id="reviewStarRating">
                                    <i class="fas fa-star active" data-rating="1"></i>
                                    <i class="fas fa-star active" data-rating="2"></i>
                                    <i class="fas fa-star active" data-rating="3"></i>
                                    <i class="fas fa-star active" data-rating="4"></i>
                                    <i class="fas fa-star active" data-rating="5"></i>
                                </div>
                                <input type="hidden" name="rating" id="reviewRatingInput" value="5" required>
                            </div>
                            <div class="review-form-group">
                                <label>Name *</label>
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="review-form-group">
                                <label>Email Address *</label>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="review-form-group">
                                <label>Write Your Review *</label>
                                <textarea name="review_text" placeholder="Write here" rows="4" required></textarea>
                            </div>
                            <div class="review-submit-wrap">
                                <button type="submit" class="review-submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!-- Right: Review List -->
                    <div class="review-list-container">
                        
                                            <i class="far fa-star" style="color:rgba(255,255,255,0.2); font-size:12px;"></i>
                                        
                                    @endfor
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="review-controls">
                            <button class="review-btn" id="prevReviewBtn"><i class="fas fa-chevron-left"></i></button>
                            <button class="review-btn" id="nextReviewBtn"><i class="fas fa-chevron-right"></i></button>
                        </div>
                        @else
                        <div class="no-reviews" style="color: rgba(255,255,255,0.6); padding: 40px; text-align: center; border: 1px dashed rgba(255,255,255,0.2); border-radius: 8px;">
                            <i class="far fa-comment-dots" style="font-size: 3rem; margin-bottom: 15px; opacity: 0.5;"></i>
                            <p>No reviews yet. Be the first to write a review!</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            --}}

        </div>
    </section>

    <!-- ==================== CUSTOMIZE YOUR BOX ==================== -->
    <section class="product-customize-section" style="background-color: #1a1a1a; padding: 20px 0; text-align: center;">
        <div class="product-container">
            <!-- <span class="product-sec-badge" style="display:inline-block; border:1px solid #e3b036; color:#e3b036; padding:4px 12px; border-radius:20px; font-size:10px; font-weight:bold; letter-spacing:1px; margin-bottom:15px; text-transform:uppercase;">Options & Materials</span> -->
            <h2 style="color:#ffffff; font-size:28px; margin-bottom:10px;">Customize Your Box</h2>
            <p style="color:rgba(255,255,255,0.6); font-size:14px; margin-bottom:10px;">Choose materials, finishes, and add-ons to build your perfect rigid box.</p>

            <div class="customize-tabs" style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
                <button class="cust-tab-btn active" data-target="mat" style="flex: 0 0 200px; height: 58px; background-color:#e3b036; color:#000; border:1px solid #e3b036; padding:0; border-radius:6px; font-weight:600; cursor:pointer; display:flex; align-items:center; justify-content:center;">Materials</button>
                <button class="cust-tab-btn" data-target="print" style="flex: 0 0 200px; height: 58px; background-color:transparent; color:rgba(255,255,255,0.8); border:1px solid #e3b036; padding:0; border-radius:6px; font-weight:600; cursor:pointer; display:flex; align-items:center; justify-content:center;">Printing Options</button>
                <button class="cust-tab-btn" data-target="finish" style="flex: 0 0 200px; height: 58px; background-color:transparent; color:rgba(255,255,255,0.8); border:1px solid #e3b036; padding:0; border-radius:6px; font-weight:600; cursor:pointer; display:flex; align-items:center; justify-content:center;">Special Finishes</button>
                <button class="cust-tab-btn" data-target="coat" style="flex: 0 0 200px; height: 58px; background-color:transparent; color:rgba(255,255,255,0.8); border:1px solid #e3b036; padding:0; border-radius:6px; font-weight:600; cursor:pointer; display:flex; align-items:center; justify-content:center;">Coating & Laminations</button>
            </div>

<!-- Materials Content -->
            <div class="cust-tab-content active" id="cust-mat"><div class="cust-card-grid" style="margin-top:30px;">
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Paper Board/black-kraft.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="black kraft" title="Black Kraft"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Paper Board (Black Kraft)</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Corrugated/bleached-white-board-.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="bleached white board" title="Bleached White Board"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:14px; font-weight:600;">Corrugated</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Fluted Grades Images/A-flute.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="a flute" title="A Flute"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:14px; font-weight:600;">Fluted Grades</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Rigid Material/Duplex-Chipboard-.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="duplex chipboard" title="Duplex Chipboard"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:14px; font-weight:600;">Rigid Material</div>
    </div>
</div>
            </div>

            <!-- Other Tabs Content -->
            <div class="cust-tab-content" id="cust-print" style="display:none;">
<div class="cust-card-grid">
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/digital-print.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="digital print" title="Digital Print"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Digital Print</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/offset-print.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="offset print" title="Offset Print"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Offset Print</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/oil-based-Inks.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="oil based inks" title="Oil Based Inks"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Oil Based Inks</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/pantone-metallic.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="pantone metallic" title="Pantone Metallic"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Pantone Metallic</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/pantone.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="pantone" title="Pantone"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Pantone</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/soy-vegetable-based-Inks.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="soy vegetable based inks" title="Soy Vegetable Based Inks"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Soy Vegetable Based Inks</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/uv-print.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="uv print" title="Uv Print"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Uv Print</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Printing Options/water-based-Inks.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="water based inks" title="Water Based Inks"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Water Based Inks</div>
    </div>
</div>

            </div>
            <div class="cust-tab-content" id="cust-finish" style="display:none;">
<div class="cust-card-grid">
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/blind-debossing-.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="blind debossing " title="Blind Debossing "></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Blind Debossing </div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/blind-embossing.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="blind embossing" title="Blind Embossing"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Blind Embossing</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/cold-foil-printing.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="cold foil printing" title="Cold Foil Printing"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Cold Foil Printing</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/combination-embossing.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="combination embossing" title="Combination Embossing"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Combination Embossing</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/hot-foil-stamping.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="hot foil stamping" title="Hot Foil Stamping"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Hot Foil Stamping</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/registered-embossing-.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="registered embossing " title="Registered Embossing "></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Registered Embossing </div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/Special Finishes/window-patching.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="window patching" title="Window Patching"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Window Patching</div>
    </div>
</div>

            </div>
            <div class="cust-tab-content" id="cust-coat" style="display:none;">
<div class="cust-card-grid">
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Lamination.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="lamination" title="Lamination"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Lamination</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/UV Coating .webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="uv" title="Uv"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">UV</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Varnish .webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="varnish" title="Varnish"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Varnish</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Anti-scratch Lamination .webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="anti scratch lamination" title="Anti Scratch Lamination"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Anti Scratch Lamination</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Aqueous Coating .webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="aqueous coating " title="Aqueous Coating "></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Aqueous Coating </div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Soft Touch Coating.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="soft touch coating" title="Soft Touch Coating"></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Soft Touch Coating</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Soft Touch Silk Lamination .webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="soft touch silk lamination " title="Soft Touch Silk Lamination "></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Soft Touch Silk Lamination</div>
    </div>
    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
        <div class="cust-card-img" style="height:180px;"><img src="{{ asset('uploads/coating and lamination/Spot Gloss UV.webp') }}" style="width:100%; height:100%; object-fit:cover;" alt="spot gloss uv " title="Spot Gloss Uv "></div>
        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Spot Gloss UV </div>
    </div>
</div>

            </div>
        </div>
    </section>

    <!-- ==================== INSTANT QUOTE SECTION ==================== -->
    <section class="instant-quote-section">
        <div class="product-container">
            <div class="iq-card">
                <div class="iq-content">
                    <h2 class="iq-title">Order a Sample Kit</h2>
                    <form action="{{ url('submit-quote') }}" method="POST" class="iq-form" enctype="multipart/form-data" spellcheck="false">
                        @csrf
                        <input type="hidden" name="source" value="Product detail instant quote">
                        <input type="hidden" name="page_url" value="{{ url()->current() }}">
                        <div class="iq-row">
                            <div class="iq-group">
                                <input type="text" name="name" placeholder="Name" required oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')">
                            </div>
                            <div class="iq-group">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="iq-group">
                                <input type="text" name="phone" placeholder="Phone number" required oninput="this.value = this.value.replace(/[^0-9+\-\s]/g, '')">
                            </div>
                        </div>
                        <div class="iq-row">
                            <div class="iq-group">
                                <input type="text" name="company" placeholder="Company">
                            </div>
                            <div class="iq-group">
                                <input type="text" name="website" placeholder="Website">
                            </div>
                            <div class="iq-group">
                                <input type="text" name="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="iq-row-2">
                            <div class="iq-group">
                                <input type="text" name="product_name" value="{{ $p->title ?? '' }}" placeholder="Enter product name" required>
                            </div>
                            <div class="iq-group">
                                <input type="number" name="quantity" placeholder="Enter quantity" required min="1" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                        </div>
                        <div class="iq-group">
                            <textarea name="message" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="iq-group mt-3" style="margin-top: 15px;">
                            <div class="human-verification-inline">
                                <div class="human-verification-header">
                                    <h3 class="human-verification-inline-title">Are you a human?</h3>
                                    <p class="human-verification-inline-copy">Solve this quick addition before continuing.</p>
                                </div>
                                <div class="human-verification-inline-control">
                                    <span class="human-question" id="prodHumanQuestion2">0 + 0 =</span>
                                    <input type="number" class="human-answer" id="prodHumanAnswer2" placeholder="Answer" aria-label="Human verification answer">
                                    <button type="button" class="human-check-btn" id="prodHumanCheckBtn2">Verify</button>
                                    <span class="human-status" id="prodHumanStatus2" aria-live="polite"></span>
                                </div>
                            </div>
                        </div>
                        <div class="iq-submit">
                            <button type="submit" class="iq-btn">Send Instant Quote</button>
                        </div>
                        <div class="ajax-success-msg" id="iqform-success" style="display: none; background-color: rgba(227, 176, 54, 0.15); border: 1px solid #e3b036; color: #e3b036; padding: 15px; border-radius: 8px; margin-top: 15px; text-align: center; font-weight: 600; font-size: 14px;">
                            Thank you for the inquiry, our sales representative will contact soon!
                        </div>
                    </form>
                </div>
                <div class="iq-image-col">
                    <div class="iq-image-wrap" style="overflow: hidden;">
                        @php $iq_img_rendered = false; @endphp
                        @foreach($product as $p)
                            @php $iq_images = json_decode($p->images, true); @endphp
                            @if(is_array($iq_images) && !empty($iq_images))
                                <img src="{{ url('images/'.$iq_images[0]) }}" alt="{{ strtolower(str_replace('-', ' ', $p->title)) }}" style="width: 100%; height: 100%; object-fit: cover;" title="{{ ucwords(strtolower(str_replace('-', ' ', $p->title))) }}">
                                @php $iq_img_rendered = true; @endphp
                            @endif
                            @break
                        @endforeach
                        @if(!$iq_img_rendered)
                            Image
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== RELATED PRODUCTS ==================== -->
    @php
        $relatedExists = false;
        foreach($product as $p) {
            $temp = json_decode($p->related_product);
            if (!empty($temp)) $relatedExists = true;
            break;
        }
    @endphp

    @if($relatedExists)
    <section class="product-related-section">
        <div class="product-container">
            <!-- <span class="product-sec-badge">EXPLORE MORE</span> -->
            <h2 class="product-section-title" style="margin-bottom:20px">Related Products</h2>
            <div class="product-related-grid">
                @foreach($product as $p)
                @php $temp = json_decode($p->related_product); @endphp
                @if(!empty($temp) && !empty($all_product))
                @foreach($all_product as $rel)
                @foreach($temp as $tv)
                @if($tv == $rel->product_id)
                <a href="{{ url($rel->url) }}" class="product-related-card" style="text-decoration: none;">
                    <img src="{{ url('images/'.$rel->image) }}" alt="{{ strtolower(str_replace('-', ' ', $rel->title)) }}" class="product-related-img" title="{{ ucwords(strtolower(str_replace('-', ' ', $rel->title))) }}">
                    <span class="product-related-title" style="text-decoration: none !important; display: inline-block; margin-top: 15px;">{{ $rel->title }}</span>
                </a>
                @endif
                @endforeach
                @endforeach
                @endif
                @break
                @endforeach
            </div>
        </div>
    </section>
    @endif

</div>

<script>
// Thumbnail switcher
function switchImg(thumb, url) {
    document.querySelectorAll('.product-thumb').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
    document.getElementById('productMainImg').src = url;
}

// Tabs
document.querySelectorAll('.product-tab-item').forEach(function(tab) {
    tab.addEventListener('click', function() {
        document.querySelectorAll('.product-tab-item').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.product-tab-content').forEach(c => c.style.display = 'none');
        this.classList.add('active');
        let targetContent = document.getElementById(this.dataset.tab);
        if(targetContent) {
            targetContent.style.display = 'block';
        }
    });
});

// FAQs Accordion
function toggleFaq(btn) {
    const item = btn.closest('.faq-item');
    const answer = item.querySelector('.faq-answer');
    const isActive = item.classList.contains('active');
    
    // Close all FAQs
    document.querySelectorAll('.faq-item').forEach(faq => {
        faq.classList.remove('active');
        faq.querySelector('.faq-answer').style.maxHeight = null;
    });
    
    // Open clicked FAQ if it was not already active
    if (!isActive) {
        item.classList.add('active');
        answer.style.maxHeight = answer.scrollHeight + "px";
    }
}

// Fix CKEditor black text on dark background
document.querySelectorAll('.product-info-text *').forEach(el => {
    let color = window.getComputedStyle(el).color;
    // Check if color is black or very close to black
    if (color === 'rgb(0, 0, 0)' || color === 'rgba(0, 0, 0, 1)') {
        // We only want to remove inline styles if they are black
        if (el.style.color.includes('000') || el.style.color === 'black' || el.style.color === 'rgb(0, 0, 0)') {
            el.style.color = '';
        }
    }
});

// Review Star Rating
const starContainer = document.getElementById('reviewStarRating');
if (starContainer) {
    const stars = starContainer.querySelectorAll('i');
    const ratingInput = document.getElementById('reviewRatingInput');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const rating = parseInt(this.getAttribute('data-rating'));
            ratingInput.value = rating;
            
            stars.forEach(s => {
                if (parseInt(s.getAttribute('data-rating')) <= rating) {
                    s.classList.add('active');
                } else {
                    s.classList.remove('active');
                }
            });
        });
    });
}

// Review Pagination Logic
document.addEventListener('DOMContentLoaded', function() {
    const reviewCards = document.querySelectorAll('.review-card');
    if(reviewCards.length > 0) {
        let currentReviewPage = 0;
        const reviewsPerPage = 2;
        const totalPages = Math.ceil(reviewCards.length / reviewsPerPage);

        function showReviews(page) {
            reviewCards.forEach((card, index) => {
                if (index >= page * reviewsPerPage && index < (page + 1) * reviewsPerPage) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        showReviews(currentReviewPage);

        const prevBtn = document.getElementById('prevReviewBtn');
        const nextBtn = document.getElementById('nextReviewBtn');

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', function() {
                if (totalPages > 1) {
                    currentReviewPage = (currentReviewPage - 1 + totalPages) % totalPages;
                    showReviews(currentReviewPage);
                }
            });

            nextBtn.addEventListener('click', function() {
                if (totalPages > 1) {
                    currentReviewPage = (currentReviewPage + 1) % totalPages;
                    showReviews(currentReviewPage);
                }
            });
            
            // Hide buttons if 2 or fewer reviews
            if (reviewCards.length <= 2) {
                document.querySelector('.review-controls').style.display = 'none';
            }
        }
    }
});

// Customize Tabs Logic
document.querySelectorAll('.cust-tab-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.cust-tab-btn').forEach(b => {
            b.style.backgroundColor = 'transparent';
            b.style.color = 'rgba(255,255,255,0.8)';
            b.classList.remove('active');
        });
        this.style.backgroundColor = '#e3b036';
        this.style.color = '#000';
        this.classList.add('active');

        const target = this.getAttribute('data-target');
        document.querySelectorAll('.cust-tab-content').forEach(c => {
            c.style.display = 'none';
        });
        document.getElementById('cust-' + target).style.display = 'block';
    });
});

// ── PFR SLIDER ──
(function() {
    let pfrCurrentIndex = 0;
    const pfrSlider = document.getElementById('pfrSlider');
    const pfrDots = document.getElementById('pfrDots');
    let pfrSlides = [];
    let pfrDotElements = [];
    let pfrInterval;
    
    if(pfrSlider && pfrDots) {
        pfrSlides = pfrSlider.querySelectorAll('.pfr-slide');
        pfrDotElements = pfrDots.querySelectorAll('.pfr-dot');
        
        window.goToPfrSlide = function(index) {
            if(index < 0 || index >= pfrSlides.length) return;
            pfrCurrentIndex = index;
            pfrSlider.style.transform = `translateX(-${pfrCurrentIndex * 100}%)`;
            pfrDotElements.forEach((dot, i) => {
                dot.classList.toggle('active', i === pfrCurrentIndex);
            });
            resetPfrInterval();
        };
        
        window.movePfrSlide = function(step) {
            let nextIndex = pfrCurrentIndex + step;
            if(nextIndex < 0) nextIndex = pfrSlides.length - 1;
            if(nextIndex >= pfrSlides.length) nextIndex = 0;
            goToPfrSlide(nextIndex);
        };
        
        function resetPfrInterval() {
            clearInterval(pfrInterval);
            pfrInterval = setInterval(() => {
                movePfrSlide(1);
            }, 5000);
        }
        
        // Start auto-slide
        resetPfrInterval();
    }
})();
    // Math verification Form 1
    var hQ1 = document.getElementById('prodHumanQuestion1');
    var hA1 = document.getElementById('prodHumanAnswer1');
    var hB1 = document.getElementById('prodHumanCheckBtn1');
    var hS1 = document.getElementById('prodHumanStatus1');
    var hT1 = 0;
    var hV1 = false;
    function genQ1() {
        var a = Math.floor(Math.random() * 9) + 1;
        var b = Math.floor(Math.random() * 9) + 1;
        hT1 = a + b;
        if (hQ1) hQ1.textContent = a + ' + ' + b + ' =';
        if (hA1) { hA1.value = ''; hA1.style.border = ''; }
        if (hS1) { hS1.textContent = ''; hS1.className = 'human-status'; }
        hV1 = false;
    }
    if (hQ1 && hA1 && hB1) {
        genQ1();
        hB1.addEventListener('click', function() {
            var correct = hA1.value.trim() !== '' && Number(hA1.value.trim()) === hT1;
            if (correct) {
                hV1 = true;
                hA1.style.border = '';
                if (hS1) { hS1.textContent = 'Verified.'; hS1.className = 'human-status is-success'; }
            } else {
                hV1 = false;
                hA1.style.border = '1px solid red';
                if (hS1) { hS1.textContent = 'Please solve the addition correctly.'; hS1.className = 'human-status is-error'; }
                hA1.focus();
            }
        });
    }

    var form1 = document.getElementById('quoteform');
    if (form1) {
        form1.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!hV1) {
                alert('Please complete the human verification.');
                hA1.focus();
                return;
            }
            var formData = new FormData(form1);
            var submitBtn = form1.querySelector('.product-submit-btn') || form1.querySelector('button[type="submit"]');
            var origText = submitBtn ? submitBtn.textContent : 'Submit';
            if(submitBtn) submitBtn.textContent = 'Submitting...';
            
            fetch(form1.action, {
                method: form1.method,
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                var successMsg = document.getElementById('quoteform-success');
                if(successMsg) successMsg.style.display = 'block';
                form1.reset();
                genQ1();
                if(submitBtn) submitBtn.textContent = origText;
                setTimeout(() => { if(successMsg) successMsg.style.display = 'none'; }, 8000);
            })
            .catch(error => {
                alert('An error occurred. Please try again.');
                if(submitBtn) submitBtn.textContent = origText;
            });
        });
    }

    // Math verification Form 2
    var hQ2 = document.getElementById('prodHumanQuestion2');
    var hA2 = document.getElementById('prodHumanAnswer2');
    var hB2 = document.getElementById('prodHumanCheckBtn2');
    var hS2 = document.getElementById('prodHumanStatus2');
    var hT2 = 0;
    var hV2 = false;
    function genQ2() {
        var a = Math.floor(Math.random() * 9) + 1;
        var b = Math.floor(Math.random() * 9) + 1;
        hT2 = a + b;
        if (hQ2) hQ2.textContent = a + ' + ' + b + ' =';
        if (hA2) { hA2.value = ''; hA2.style.border = ''; }
        if (hS2) { hS2.textContent = ''; hS2.className = 'human-status'; }
        hV2 = false;
    }
    if (hQ2 && hA2 && hB2) {
        genQ2();
        hB2.addEventListener('click', function() {
            var correct = hA2.value.trim() !== '' && Number(hA2.value.trim()) === hT2;
            if (correct) {
                hV2 = true;
                hA2.style.border = '';
                if (hS2) { hS2.textContent = 'Verified.'; hS2.className = 'human-status is-success'; }
            } else {
                hV2 = false;
                hA2.style.border = '1px solid red';
                if (hS2) { hS2.textContent = 'Please solve the addition correctly.'; hS2.className = 'human-status is-error'; }
                hA2.focus();
            }
        });
    }

    var form2 = document.querySelector('.iq-form');
    if (form2) {
        form2.addEventListener('submit', function(e) {
            e.preventDefault();
            if (!hV2) {
                alert('Please complete the human verification.');
                hA2.focus();
                return;
            }
            var formData = new FormData(form2);
            var submitBtn = form2.querySelector('.iq-submit-btn') || form2.querySelector('button[type="submit"]');
            var origText = submitBtn ? submitBtn.textContent : 'Submit';
            if(submitBtn) submitBtn.textContent = 'Submitting...';
            
            fetch(form2.action, {
                method: form2.method,
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                var successMsg = document.getElementById('iqform-success');
                if(successMsg) successMsg.style.display = 'block';
                form2.reset();
                genQ2();
                if(submitBtn) submitBtn.textContent = origText;
                setTimeout(() => { if(successMsg) successMsg.style.display = 'none'; }, 8000);
            })
            .catch(error => {
                alert('An error occurred. Please try again.');
                if(submitBtn) submitBtn.textContent = origText;
            });
        });
    }
</script>

@include('web/footer')




