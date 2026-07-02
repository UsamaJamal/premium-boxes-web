@include('web/header')

<style>
/* ============================================================
   PRODUCT PAGE VARIABLES & FOUNDATION
   ============================================================ */
:root {
    --product-bg: #161616;
    --product-bg-card: #222222;
    --product-gold: #FFC107;
    --product-gold-hover: #E0A800;
    --product-text-main: #FFFFFF;
    --product-text-muted: rgba(255, 255, 255, 0.7);
    --product-border: rgba(255, 255, 255, 0.1);
    --product-font: 'Inter', sans-serif;
    --product-container-max: 1200px;
}

body {
    margin: 0;
    padding: 0;
    padding-top: 115px !important;
    background-color: var(--product-bg);
    color: var(--product-text-main);
    font-family: var(--product-font);
}

.product-wrapper { width: 100%; min-height: 100vh; background-color: var(--product-bg); overflow-x: hidden; }
.product-container { max-width: var(--product-container-max); margin: 0 auto; padding: 0 50px; }
h1,h2,h3,h4,h5,h6,p { margin: 0; padding: 0; }
ul { margin: 0; padding: 0; list-style: none; }
a { text-decoration: none; color: inherit; }

/* HERO */
.product-hero-section { padding: 75px 0; }
.product-hero-grid { display: grid; grid-template-columns: 1.1fr 0.9fr; gap: 62.5px; align-items: start; }

/* Breadcrumbs */
.product-breadcrumbs { display: flex; align-items: center; gap: 12.5px; font-size: 16.2px; color: var(--product-text-muted); margin-bottom: 50px; }
.product-breadcrumbs a { color: var(--product-text-muted); transition: color 0.3s ease; }
.product-breadcrumbs a:first-of-type { color: var(--product-gold); }
.product-breadcrumbs a:hover { color: var(--product-gold); }
.product-bc-sep { font-size: 15px; }
.product-bc-active { color: var(--product-text-muted); }

/* Images */
.product-hero-images { display: flex; flex-direction: column; gap: 25px; }
.product-main-img-wrap { width: 92%; margin: 0 auto; border-radius: 10px; overflow: hidden; background-color: var(--product-bg-card); aspect-ratio: 5 / 4; }
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
.product-title-row { display: flex; align-items: center; justify-content: space-between; margin-bottom: 18.8px; }
.product-title { font-size: 40px; font-weight: 700; }
.product-status-badge { color: var(--product-gold); font-size: 17.5px; font-weight: 600; }
.product-desc { font-size: 17.5px; line-height: 1.6; color: rgba(255,255,255,0.85) !important; margin-bottom: 50px; }
.product-desc *, .product-desc p, .product-desc span, .product-desc li, .product-desc strong, .product-desc b { color: rgba(255,255,255,0.85) !important; }
.product-read-more { color: var(--product-gold) !important; font-weight: 600; text-decoration: none; }

/* Quote Box */
.product-quote-box { background-color: var(--product-bg-card); border-radius: 15px; padding: 25px 25px 18px 25px; }
.product-quote-title { text-align: center; font-size: 23px; font-weight: 600; margin-bottom: 15px; }

.pf-wrap { display: contents; }
.pf-mob-label { display: none; font-size: 13px; font-weight: 500; color: rgba(255,255,255,0.80); margin-bottom: 4px; }

.product-form-row { display: grid; gap: 14px; margin-bottom: 14px; }
.product-form-row-3 { grid-template-columns: repeat(3, 1fr); }
.product-form-row-4 { grid-template-columns: repeat(4, 1fr); }
.product-form-row-options { grid-template-columns: repeat(2, 1fr); }
.product-form-row-upload { grid-template-columns: 1fr 1fr 1.5fr; }
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
.product-quote-form textarea:focus { border-color: var(--product-gold); }

.product-upload-group { display: flex; gap: 0; width: 100%; }
.product-upload-group input { flex: 1; min-width: 0; border-radius: 10px 0 0 10px !important; }
.product-btn-upload { background-color: var(--product-gold); color: #111; border: none; border-radius: 0 10px 10px 0; padding: 0 22px; font-weight: 700; font-size: 15px; cursor: pointer; transition: background-color 0.3s ease; white-space: nowrap; flex-shrink: 0; }
.product-btn-upload:hover { background-color: var(--product-gold-hover); }
.product-quote-form textarea { resize: vertical; min-height: 100px; white-space: normal; overflow: auto; }
.product-submit-wrap { display: flex; justify-content: center; margin-top: 18px; }
.product-btn-primary { width: 100%; background-color: var(--product-gold); color: #111; border: none; border-radius: 62.5px; padding: 18.8px 37.5px; font-size: 20px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease; }
.product-btn-primary:hover { background-color: var(--product-gold-hover); }

/* INFO TABS */
.product-info-section { padding: 25px 0 75px; }
.product-tabs-wrapper { border-bottom: 1px solid var(--product-border); margin-bottom: 50px; overflow-x: auto; scrollbar-width: none; }
.product-tabs-wrapper::-webkit-scrollbar { display: none; }
.product-tabs-nav { display: flex; gap: 100px; white-space: nowrap; list-style: none; margin: 0; padding: 0; }
.product-tab-item { font-size: 20px; font-weight: 500; color: var(--product-text-muted); padding: 18.8px 0; cursor: pointer; position: relative; transition: color 0.3s ease; list-style: none; }
.product-tab-item:hover { color: var(--product-text-main); }
.product-tab-item.active { color: var(--product-gold); }
.product-tab-item.active::after { content: ''; position: absolute; bottom: -1px; left: 0; width: 100%; height: 2.5px; background-color: var(--product-gold); }
.product-tab-content { width: 100%; }
.product-info-heading { font-size: 30px; font-weight: 700; margin-bottom: 25px; }
.product-info-text { font-size: 16px; line-height: 1.8; color: rgba(255,255,255,0.85); margin-bottom: 37.5px; font-family: inherit; }
.product-info-text p { font-size: 16px; line-height: 1.8; color: #fff; margin-bottom: 18px; }
.product-info-text strong, .product-info-text b { font-weight: 700; color: #fff; }
.product-info-text h1, .product-info-text h2, .product-info-text h3, .product-info-text h4 { color: #ffffff; margin-bottom: 14px; margin-top: 24px; }
.product-info-text ul { list-style: disc; padding-left: 24px; }
.product-info-text ul li { font-size: 16px; color: rgba(255,255,255,0.85); line-height: 1.7; margin-bottom: 8px; }
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
.product-related-section { padding: 60px 0; }
.product-related-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; }
.product-related-card { display: flex; flex-direction: column; gap: 18.8px; text-decoration: none; transition: transform 0.3s ease; }
.product-related-card:hover { transform: translateY(-5px); }
.product-related-img { width: 100%; aspect-ratio: 1 / 1; object-fit: cover; background-color: var(--product-bg-card); border-radius: 10px; border: 1px solid rgba(212,175,55,0.45); transition: border-color 0.25s; }
.product-related-card:hover .product-related-img { border-color: var(--product-gold); }
.product-related-title { font-size: 17.5px; font-weight: 500; color: var(--product-text-main); text-align: center; }

/* ── FINAL QUOTE SECTION ── */
.product-final-quote-section { padding: 80px 0; background-color: var(--product-bg); }
.product-final-quote-wrapper { display: grid; grid-template-columns: 1fr 323px; gap: 0; align-items: stretch; background-color: #1e1e1e; border-radius: 14px; overflow: hidden; border: 1px solid var(--product-border); }
.product-final-quote-form-area { padding: 24px; }
.product-final-quote-form-area .product-section-title { font-size: 20px; font-weight: 800; color: #fff; text-align: left; margin-bottom: 18px; line-height: 1.2; }
.product-form-grid-3 { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px 28px; margin-bottom: 0; }
.product-form-group { display: flex; flex-direction: column; gap: 5px; }
.product-form-group label { font-size: 11px; font-weight: 500; color: rgba(255,255,255,0.75); }
.product-form-group input,
.product-form-group select { background-color: #141414; border: 1px solid #333333; border-radius: 6px; padding: 7px 10px; color: #fff; font-family: var(--product-font); font-size: 11.5px; outline: none; transition: border-color 0.25s; width: 100%; appearance: none; -webkit-appearance: none; }
.product-form-group input::placeholder { color: #555; }
.product-form-group input:focus, .product-form-group select:focus { border-color: var(--product-gold); }
.product-form-group select { background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23c9a84c' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 12px center; padding-right: 34px; cursor: pointer; }
.product-form-group select option { background-color: #1e1e1e; color: #fff; }
.product-form-row-box-qty { display: grid; grid-template-columns: 1.2fr 1fr; gap: 10px 14px; margin-top: 12px; }
.product-form-group.span-2 { grid-column: span 2; }
.product-final-form textarea { width: 100%; max-width: 100%; background-color: #141414; border: 1px solid #333333; border-radius: 6px; padding: 7px 10px; color: #fff; font-family: var(--product-font); font-size: 11.5px; outline: none; resize: none; transition: border-color 0.25s; margin-bottom: 16px; box-sizing: border-box; }
.product-final-form textarea::placeholder { color: #555; }
.product-final-form textarea:focus { border-color: var(--product-gold); }
.product-submit-btn { display: block; margin: 0 auto; background-color: var(--product-gold); color: #111111; border: none; border-radius: 50px; padding: 13px 36px; font-size: 14px; font-weight: 700; cursor: pointer; font-family: var(--product-font); transition: background-color 0.25s, transform 0.2s; letter-spacing: 0.3px; min-width: 160px; }
.product-submit-btn:hover { background-color: #e0bc60; transform: translateY(-2px); }
.product-final-quote-image { background-color: #1e1e1e; display: flex; align-items: center; justify-content: center; border-left: 1px solid var(--product-border); width: 323px; flex-shrink: 0; padding: 24px 32px; }
.product-placeholder-img { margin-left: -92px; width: 220px; height: 260px; background-color: #2a2a2a; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; color: rgba(255,255,255,0.25); font-weight: 500; flex-shrink: 0; overflow: hidden; }
.product-placeholder-img img { width: 100%; height: 100%; object-fit: cover; }

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
}

@media (max-width: 960px) {
    .product-tabs-nav { gap: 40px; }
    .product-form-row-3:not(.product-form-row-options) { grid-template-columns: 1fr; }
    .product-form-group.span-2 { grid-column: span 1; }
}

@media (max-width: 768px) {
    .product-container { padding: 0 4.5vw; }
    .product-hero-section { padding: 6vw 0; }
    .product-hero-grid { grid-template-columns: 1fr; gap: 6vw; }
    .product-breadcrumbs { display: none; }
    .product-main-img-wrap { width: 100%; aspect-ratio: 4 / 3; }
    .product-thumbnails { gap: 3vw; }
    .product-thumb { width: 20vw; height: 20vw; }
    .product-reviews-badges { gap: 6vw; margin-top: 5vw; flex-wrap: wrap; }
    .product-title { font-size: 7vw; }
    .product-desc { font-size: 3.8vw; line-height: 1.75; }
    .product-quote-box { padding: 5vw 4.5vw; }
    .product-quote-title { font-size: 6vw; margin-bottom: 6vw; }
    .pf-mob-label { display: block; font-size: 3.5vw; font-weight: 600; margin-bottom: 1.5vw; color: rgba(255,255,255,0.85); }
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
    .product-form-grid-3 { grid-template-columns: 1fr 1fr; gap: 3vw; }
    .product-form-group label { font-size: 3.5vw; }
    .product-form-group input, .product-form-group select { font-size: 3.8vw; padding: 2.5vw 3vw; }
    .product-final-form textarea { font-size: 3.8vw; padding: 2.5vw 3vw; }
    .product-submit-btn { font-size: 4vw; padding: 3.5vw 8vw; }
    .product-tabs-wrapper { margin-left: -4.5vw; margin-right: -4.5vw; margin-bottom: 6vw; }
    .product-tabs-nav { gap: 3vw; overflow-x: auto; padding: 0 4.5vw; scroll-snap-type: x mandatory; }
    .product-tab-item { flex: 0 0 44vw; width: 44vw; font-size: 4vw; padding: 3.5vw 2vw; white-space: nowrap; text-align: center; scroll-snap-align: start; }
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
.op-card { background-color: #222222; border: 1px solid rgba(255, 193, 7, 0.2); border-radius: 8px; padding: 30px 20px; text-align: center; transition: transform 0.3s ease, border-color 0.3s ease; }
.op-card:hover { transform: translateY(-5px); border-color: rgba(255, 193, 7, 0.5); }
.op-icon { font-size: 35px; color: var(--product-gold); margin-bottom: 20px; }
.op-title { font-size: 17px; font-weight: 600; color: #fff; margin-bottom: 15px; }
.op-desc { font-size: 14px; line-height: 1.6; color: rgba(255,255,255,0.6); }

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
.review-submit-btn { background-color: #F8C346; color: #111; border: none; border-radius: 50px; padding: 12px 50px; font-size: 15px; font-weight: 600; cursor: pointer; transition: background-color 0.3s ease, transform 0.2s; min-width: 200px; }
.review-submit-btn:hover { background-color: #e3b036; transform: translateY(-2px); }

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
.review-btn { width: 45px; height: 45px; border-radius: 50%; border: 1px solid rgba(255,255,255,0.2); background: transparent; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: all 0.3s ease; }
.review-btn:hover { border-color: var(--product-gold); color: var(--product-gold); }

@media (max-width: 960px) {
    .review-layout { grid-template-columns: 1fr; gap: 80px; }
}

@media (max-width: 768px) {
    .review-form-container { padding: 6vw; }
    .review-form-title { font-size: 5vw; }
    .review-submit-btn { width: 100%; min-width: unset; }
    .review-card { padding: 12vw 6vw 6vw; }
}
</style>

<div class="product-wrapper">

    <!-- ==================== HERO ==================== -->
    <section class="product-hero-section">
        <div class="product-container">

            <!-- Breadcrumbs -->
            <div class="product-breadcrumbs">
                <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
                <span class="product-bc-sep">&raquo;</span>
                @foreach($product as $p)
                <span class="product-bc-active">{{ $p->title }}</span>
                @break
                @endforeach
            </div>

            <div class="product-hero-grid">

                <!-- LEFT: Images & Trust Badges -->
                <div class="product-hero-images">
                    @foreach($product as $p)
                    @php $images = json_decode($p->images, true); @endphp
                    @if(is_array($images) && !empty($images))

                    <div class="product-main-img-wrap">
                        <img src="{{ url('images/'.$images[0]) }}" alt="{{ $p->title }}" class="product-main-img" id="productMainImg">
                    </div>

                    @if(count($images) > 1)
                    <div class="product-thumbnails">
                        @foreach($images as $img)
                        <div class="product-thumb {{ $loop->first ? 'active' : '' }}" onclick="switchImg(this, '{{ url('images/'.$img) }}')">
                            <img src="{{ url('images/'.$img) }}" alt="{{ $p->title }}">
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @endif
                    @break
                    @endforeach

                    <!-- Trust Badges -->
                    <div class="product-reviews-badges">
                        <div class="product-review-item">
                            <div class="product-google-logo">
                                <svg viewBox="0 0 24 24" width="26" height="26" style="margin-right:6px">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                </svg>
                                <span style="font-size:14px;font-weight:500">Business Reviews</span>
                            </div>
                            <div class="product-stars-wrap">
                                <span class="product-rating-score">5.0</span>
                                <div class="product-stars-icons">
                                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-review-item">
                            <div class="product-trustpilot-logo">
                                <i class="fas fa-star" style="color:#00b67a;font-size:20px;margin-right:6px"></i>
                                <span style="font-size:16px;font-weight:700">Trustpilot</span>
                            </div>
                            <div class="product-trustpilot-stars">
                                <div class="tp-star"><i class="fas fa-star"></i></div>
                                <div class="tp-star"><i class="fas fa-star"></i></div>
                                <div class="tp-star"><i class="fas fa-star"></i></div>
                                <div class="tp-star"><i class="fas fa-star"></i></div>
                                <div class="tp-star" style="background:linear-gradient(to right,#00b67a 50%,#dcdce6 50%);color:#fff"><i class="fas fa-star"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Product Details + Quote Form -->
                <div class="product-hero-details">
                    @foreach($product as $p)

                    <div class="product-title-row">
                        <h1 class="product-title">{{ $p->title }}</h1>
                        <span class="product-status-badge">In Stock</span>
                    </div>

                    <div class="product-desc">
                        {!! $p->description !!}
                    </div>

                    <!-- Quote Form -->
                    <div class="product-quote-box">
                        <h3 class="product-quote-title">Get Custom Quote</h3>
                        <form class="product-quote-form" id="quoteform" method="post" action="{{ url('product-mail') . '/' }}">
                            @csrf
                            <input type="hidden" name="p_boxname" value="{{ $p->title }}">

                            <!-- Row 1: Name | Email | Phone -->
                            <div class="product-form-row product-form-row-3">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Name *</label>
                                    <input type="text" name="p_name" placeholder="Enter your name" required>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Email Address *</label>
                                    <input type="email" name="p_email" placeholder="Enter your email" required>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Phone *</label>
                                    <input type="tel" name="p_phone" placeholder="Enter your number" required>
                                </div>
                            </div>

                            <!-- Row 2: Width | Length | Height | Unit -->
                            <div class="product-form-row product-form-row-4">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Width *</label>
                                    <input type="text" name="p_width" placeholder="Width" required>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Length *</label>
                                    <input type="text" name="p_length" placeholder="Length" required>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Height *</label>
                                    <input type="text" name="p_height" placeholder="Height" required>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Units *</label>
                                    <select name="p_unit">
                                        <option value="Inch">Inch</option>
                                        <option value="cm">cm</option>
                                        <option value="mm">mm</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Row 3: Material | Printing -->
                            <div class="product-form-row product-form-row-options">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Select Stock</label>
                                    <select name="p_stock">
                                        <option value="">Select Stock</option>
                                        <option value="12pt Cardboard Stock">12pt Cardboard Stock</option>
                                        <option value="14pt Cardboard Stock">14pt Cardboard Stock</option>
                                        <option value="16pt Cardboard Stock">16pt Cardboard Stock</option>
                                        <option value="18pt Cardboard Stock">18pt Cardboard Stock</option>
                                        <option value="20pt Cardboard Stock">20pt Cardboard Stock</option>
                                        <option value="Kraft Stock">Kraft Stock</option>
                                        <option value="Corrugated Stock">Corrugated Stock</option>
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

                            <!-- Row 4: Finishing | Quantity | Upload -->
                            <div class="product-form-row product-form-row-upload">
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Finishing Options</label>
                                    <select name="p_type">
                                        <option value="">Finishing Options</option>
                                        <option value="Gloss Lamination">Gloss Lamination</option>
                                        <option value="Matte Lamination">Matte Lamination</option>
                                        <option value="Spot UV">Spot UV</option>
                                        <option value="Foil Stamping">Foil Stamping</option>
                                        <option value="Embossing">Embossing</option>
                                        <option value="Get Quote">Get Quote</option>
                                    </select>
                                </div>
                                <div class="pf-wrap">
                                    <label class="pf-mob-label">Quantity *</label>
                                    <input type="text" name="p_qty1" placeholder="Enter quantity" required>
                                </div>
                                <div class="pf-wrap pf-upload-wrap">
                                    <label class="pf-mob-label">Upload File Here</label>
                                    <div class="product-upload-group">
                                        <input type="text" placeholder="No file chosen" readonly id="uploadFileName">
                                        <input type="file" name="p_file" id="fileUploadInput" style="display:none" onchange="document.getElementById('uploadFileName').value = this.files[0]?.name || ''">
                                        <button type="button" class="product-btn-upload" onclick="document.getElementById('fileUploadInput').click()">Upload</button>
                                    </div>
                                </div>
                            </div>

                            <div class="product-form-row">
                                <textarea name="message" placeholder="Enter your message" rows="3"></textarea>
                            </div>

                            <div class="product-submit-wrap">
                                <button type="submit" class="product-btn-primary">Send Instant Quote</button>
                            </div>
                        </form>
                    </div>

                    @break
                    @endforeach
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
                    <li class="product-tab-item" data-tab="tab-review">Review</li>
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
                            <svg width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 19l7-7 3 3-7 7-3-3z"></path>
                                <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path>
                                <path d="M2 2l7.586 7.586"></path>
                                <circle cx="11" cy="11" r="2"></circle>
                            </svg>
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
                        @if(isset($reviews) && count($reviews) > 0)
                        <div class="review-slider-wrap">
                            @foreach($reviews as $review)
                            <div class="review-card">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($review->name) }}&background=random&color=fff" alt="{{ $review->name }}" class="review-avatar">
                                <p class="review-text">"{{ $review->review_text }}"</p>
                                <div class="review-author">{{ $review->name }}</div>
                                <div class="review-rating" style="margin-top:5px;">
                                    @for($i=1; $i<=5; $i++)
                                        @if($i <= $review->rating)
                                            <i class="fas fa-star" style="color:#e3b036; font-size:12px;"></i>
                                        @else
                                            <i class="far fa-star" style="color:rgba(255,255,255,0.2); font-size:12px;"></i>
                                        @endif
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

        </div>
    </section>

    <!-- ==================== CUSTOMIZE YOUR BOX ==================== -->
    <section class="product-customize-section" style="background-color: #1a1a1a; padding: 60px 0; border-top: 1px solid rgba(255,255,255,0.05); text-align: center;">
        <div class="product-container">
            <span class="product-sec-badge" style="display:inline-block; border:1px solid #e3b036; color:#e3b036; padding:4px 12px; border-radius:20px; font-size:10px; font-weight:bold; letter-spacing:1px; margin-bottom:15px; text-transform:uppercase;">Options & Materials</span>
            <h2 style="color:#ffffff; font-size:28px; margin-bottom:10px;">Customize Your Box</h2>
            <p style="color:rgba(255,255,255,0.6); font-size:14px; margin-bottom:40px;">Choose materials, finishes, and add-ons to build your perfect rigid box.</p>

            <div class="customize-tabs" style="display:flex; justify-content:center; gap:10px; margin-bottom:40px; flex-wrap:wrap;">
                <button class="cust-tab-btn active" data-target="mat" style="background-color:#e3b036; color:#000; border:none; padding:10px 25px; border-radius:4px; font-weight:600; cursor:pointer;">Materials</button>
                <button class="cust-tab-btn" data-target="print" style="background-color:transparent; color:rgba(255,255,255,0.8); border:1px solid rgba(255,255,255,0.2); padding:10px 25px; border-radius:4px; font-weight:600; cursor:pointer;">Printing Options</button>
                <button class="cust-tab-btn" data-target="finish" style="background-color:transparent; color:rgba(255,255,255,0.8); border:1px solid rgba(255,255,255,0.2); padding:10px 25px; border-radius:4px; font-weight:600; cursor:pointer;">Special Finishes</button>
                <button class="cust-tab-btn" data-target="coat" style="background-color:transparent; color:rgba(255,255,255,0.8); border:1px solid rgba(255,255,255,0.2); padding:10px 25px; border-radius:4px; font-weight:600; cursor:pointer;">Coating & Laminations</button>
            </div>

            <!-- Materials Content -->
            <div class="cust-tab-content active" id="cust-mat">
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:20px; text-align:center;">
                    
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">SBS C1S</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">SBS C2S</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">CCNB</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Fully Recycled CCNB</div>
                    </div>
                    
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Natural Brown Kraft</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">White Kraft</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Black Kraft</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Uncoated Unbleached Kraft</div>
                    </div>

                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Clay-Coated Kraft Back</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Clay Natural Kraft</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Metallic</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Holographic</div>
                    </div>

                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Natural Kraft Board</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Oyster White Board</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Kemi White Board</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Bleached White Board</div>
                    </div>

                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Grey Chipboard</div>
                    </div>
                    <div class="cust-card" style="background:#1f1f1f; border-radius:8px; overflow:hidden;">
                        <div class="cust-card-img" style="background:#2a2a2a; height:180px;"></div>
                        <div class="cust-card-title" style="color:#fff; padding:15px; font-size:12px; font-weight:600;">Duplex Chipboard</div>
                    </div>
                </div>
            </div>

            <!-- Other Tabs Content -->
            <div class="cust-tab-content" id="cust-print" style="display:none; padding:40px; border:1px dashed rgba(255,255,255,0.2); border-radius:8px;">
                <p style="color:rgba(255,255,255,0.6)">Printing Options content will be displayed here.</p>
            </div>
            <div class="cust-tab-content" id="cust-finish" style="display:none; padding:40px; border:1px dashed rgba(255,255,255,0.2); border-radius:8px;">
                <p style="color:rgba(255,255,255,0.6)">Special Finishes content will be displayed here.</p>
            </div>
            <div class="cust-tab-content" id="cust-coat" style="display:none; padding:40px; border:1px dashed rgba(255,255,255,0.2); border-radius:8px;">
                <p style="color:rgba(255,255,255,0.6)">Coating & Laminations content will be displayed here.</p>
            </div>
        </div>
    </section>

    <!-- ==================== FINAL CTA QUOTE ==================== -->
    <section class="product-final-quote-section">
        <div class="product-container">
            <div class="product-final-quote-wrapper">

                <!-- Form Area -->
                <div class="product-final-quote-form-area">
                    <p class="product-section-title">Get a Custom Packaging Quote</p>
                    <form class="product-final-form" method="post" action="{{ url('contact-mail') . '/' }}">
                        @csrf
                        <div class="product-form-grid-3">
                            <div class="product-form-group">
                                <label>Your Name *</label>
                                <input type="text" name="name" placeholder="Full name" required>
                            </div>
                            <div class="product-form-group">
                                <label>Email Address *</label>
                                <input type="email" name="email" placeholder="Your email" required>
                            </div>
                            <div class="product-form-group">
                                <label>Phone Number *</label>
                                <input type="text" name="phone" placeholder="Your number" required>
                            </div>
                            <div class="product-form-group">
                                <label>Width</label>
                                <input type="text" name="width" placeholder="Width">
                            </div>
                            <div class="product-form-group">
                                <label>Length</label>
                                <input type="text" name="length" placeholder="Length">
                            </div>
                            <div class="product-form-group">
                                <label>Height</label>
                                <input type="text" name="height" placeholder="Height">
                            </div>
                        </div>
                        <div class="product-form-row-box-qty" style="margin-bottom:12px">
                            <div class="product-form-group">
                                <label>Box Style</label>
                                @foreach($product as $p)
                                <input type="text" name="company" value="{{ $p->title }}" readonly>
                                @break
                                @endforeach
                            </div>
                            <div class="product-form-group">
                                <label>Quantity</label>
                                <input type="text" name="quantity" placeholder="Qty">
                            </div>
                        </div>
                        <textarea name="message" rows="3" placeholder="Additional message or requirements..."></textarea>
                        <button type="submit" class="product-submit-btn">Send Instant Quote</button>
                    </form>
                </div>

                <!-- Image Panel -->
                <div class="product-final-quote-image">
                    @foreach($product as $p)
                    @php $imgs = json_decode($p->images, true); @endphp
                    <div class="product-placeholder-img">
                        @if(is_array($imgs) && !empty($imgs))
                        <img src="{{ url('images/'.$imgs[0]) }}" alt="{{ $p->title }}">
                        @else
                        <span>No Image</span>
                        @endif
                    </div>
                    @break
                    @endforeach
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
            <span class="product-sec-badge">EXPLORE MORE</span>
            <h2 class="product-section-title" style="margin-bottom:40px">Related Products</h2>
            <div class="product-related-grid">
                @foreach($product as $p)
                @php $temp = json_decode($p->related_product); @endphp
                @if(!empty($temp) && !empty($all_product))
                @foreach($all_product as $rel)
                @foreach($temp as $tv)
                @if($tv == $rel->product_id)
                <a href="{{ url($rel->url) . '/' }}" class="product-related-card">
                    <img src="{{ url('images/'.$rel->image) }}" alt="{{ $rel->title }}" class="product-related-img">
                    <span class="product-related-title">{{ $rel->title }}</span>
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
        document.getElementById(this.dataset.tab).style.display = 'block';
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
</script>

@include('web/footer')