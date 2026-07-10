@include('web/header')

<style>
/* ============================================
   RESET & BASE
   ============================================ */

   *, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Segoe UI', Arial, sans-serif;
    background-color: #1a1a1a;
    color: #ffffff;
    overflow-x: hidden;
}

html {
    overflow-x: clip;
}

/* ============================================
   FAQ HERO BANNER
   ============================================ */
.faq-hero {
    position: relative;
    width: 100%;
    min-height: 340px;
    display: flex;
    justify-content: center;
    align-items: flex-end; /* content sits in lower half like figma */
    padding: 0;
    overflow: hidden;
    margin: 0;
    background-image: url('/uploads/box-packing.png');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

/* Dark overlay — top to bottom like figma */
.faq-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.50) 0%,
        rgba(0, 0, 0, 0.65) 60%,
        rgba(0, 0, 0, 0.80) 100%
    );
    z-index: 0;
    pointer-events: none;
}

/* All children above overlay */
.faq-hero > * {
    position: relative;
    z-index: 1;
}

/* Inner container — matches header/footer 1440px + 40px padding */
.faq-hero-inner {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    padding: 24px 40px 52px 90px; /* top spacing for breadcrumb */
    display: flex;
    flex-direction: column;
    align-items: center; /* centered like figma */
    text-align: center;
}

/* ============================================
   BREADCRUMB
   ============================================ */
.faq-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    color: #cccccc;
    margin-bottom: 66px;
    align-self: flex-start;
   
}

.faq-bc-home {
    font-size: 14px;
    color: #F5C542;
    line-height: 1;
    cursor: pointer;
    transition: color 0.25s ease;
    display: flex;
    align-items: center;
    flex-shrink: 0;
}

.faq-bc-home svg {
    width: 16px;
    height: 16px;
    display: block;
    flex-shrink: 0;
    stroke: #F5C542;
    transition: stroke 0.25s ease;
}

.faq-bc-home:hover { color: #f5c542; }
.faq-bc-home:hover svg { stroke: #fff; }

.faq-bc-sep {
    color: #C5C5C5;
    font-size: 13px;
    line-height: 1;
    line-height: 1;
    display: flex;
    align-items: center;
}

.faq-bc-current {

font-family: Inter;
font-weight: 400;
font-style: Regular;
font-size: 14px;
leading-trim: NONE;
line-height: 18px;
letter-spacing: 0%;
text-align: justify;
vertical-align: middle;
color: #C5C5C5;

}

.faq-bc-current:hover {
    color: #F5C542;
 }

/* ============================================
   HERO CONTENT WRAPPER
   ============================================ */
.faq-hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0;
    text-align: center;
    max-width: 560px;
}

/* ============================================
   BADGE
   ============================================ */
.faq-badge {
    display: inline-block;
    border: 1.5px solid #F5C542;
    color: #F5C542;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 6px 24px;
    border-radius: 50px;
    margin-bottom: 18px;
    background: transparent;
    cursor: default;
}

/* ============================================
   HEADING
   ============================================ */
.faq-heading {
width: 452;
height: 100;
top: 123px;
left: 494px;
angle: 0 deg;
opacity: 1;

font-family: Inter;
font-weight: 800;
font-style: Extra Bold;
font-size: 28px;
leading-trim: NONE;
line-height: 50px;
letter-spacing: 4%;
text-align: center;
vertical-align: middle;

}

.faq-heading-gold {
    color: #F5C542;
    display: block;
    font-family: Inter;
font-weight: 800;
font-style: Extra Bold;
font-size: 28px;
leading-trim: NONE;
line-height: 50px;
letter-spacing: 4%;
text-align: center;
vertical-align: middle;

}

/* ============================================
   SUBTEXT
   ============================================ */
.faq-subtext {
 width: 474;
height: 78;
top: 237px;
left: 483px;
angle: 0 deg;
opacity: 1;
font-family: Inter;
font-weight: 400;
font-style: Regular;
font-size: 16px;
leading-trim: NONE;
line-height: 26px;
letter-spacing: 2%;
text-align: center;
vertical-align: middle;
color: #C5C5C5;
}

/* ============================================
   FAQ FILTER BUTTONS
   ============================================ */
.faq-filters {
    background-color: #202020;
    position: sticky;
    top: 140px; /* offset below fixed navbar */
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 16px rgba(0, 0, 0, 0.7);
}

.faq-filters.stuck {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
}

/* Inner scroll wrapper — constrained to 1440px like header/footer */
.faq-filter-scroll {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    max-width: 1440px;
    margin: 0 auto;
    padding: 20px 40px;
    width: 100%;
}

.faq-filter-btn {
    padding: 11px 26px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    border: 0.2px solid #F5C542;
    background-color: transparent;
    color: #dddddd;
    letter-spacing: 0.3px;
    transition: background-color 0.25s ease, color 0.25s ease,
                border-color 0.25s ease, box-shadow 0.25s ease,
                transform 0.25s ease;
}

.faq-filter-btn:focus,
.faq-filter-btn:active {
    outline: none;
}
/* removed hover: .faq-filter-btn:hover { ... } */

.faq-filter-btn.active {
    background-color: #F5C542;
    color: #0d0d0d;
    border-color: #F5C542;
    box-shadow: 0 4px 16px rgba(201, 168, 76, 0.35);
}

/* ============================================
   FAQ MAIN CONTENT AREA
   ============================================ */
.faq-main {
    background-color: #1a1a1a;
    padding: 40px 40px 80px 90px; /* left: 90px aligns questions with header logo */
    max-width: 1440px;
    margin: 0 auto;
    width: 100%;
}

/* Spacer to compensate for fixed filter bar */
.faq-filters-spacer {
    height: 65px;
    display: none;
}

.faq-filters.visible ~ * .faq-filters-spacer,
body.filters-visible .faq-filters-spacer {
    display: block;
}

/* ============================================
   FAQ SECTION
   ============================================ */
.faq-section {
    margin-bottom: 28px;
    scroll-margin-top: 190px; /* navbar (~120px) + filter bar (~57px) + buffer */
}

.faq-section-title {
    position: relative;
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
    padding-left: 12px;
    line-height: 1.2;
    display: flex;
    align-items: center;
}

.faq-section-title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 4px;
    height: 18px;
    background-color: #F5C542;
}

/* ============================================
   FAQ ACCORDION ITEMS
   ============================================ */
.faq-list {
    display: flex;
    flex-direction: column;
    gap: 4px;
}

.faq-item {
    background-color: #242424;
    border-radius: 4px;
    overflow: hidden;
    transition: background-color 0.2s ease;
}

.faq-item:hover {
    background-color: #2a2a2a;
}

.faq-question {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 18px 20px;
    background: transparent;
    border: none;
    color: #b0b0b0;
    font-size: 15px;
    font-weight: 400;
    text-align: left;
    cursor: pointer;
    transition: color 0.2s ease;
    gap: 12px;
    margin: 0;
    line-height: normal;
}

.faq-question:hover {
    color: #ffffff;
}

.faq-icon {
    font-size: 18px;
    font-weight: 300;
    color: #e0e0e0;
    flex-shrink: 0;
    line-height: 1;
    transition: transform 0.3s ease;
}

/* Answer panel — hidden by default */
.faq-answer {
    overflow: hidden;
    height: 0;
    padding: 0 20px;
    opacity: 0;
    transition: height 0.35s ease, opacity 0.3s ease, padding 0.35s ease;
}

.faq-answer p {
    color: #ffffff;
    font-size: 16px;
    line-height: 1.75;
    padding-bottom: 16px;
    margin: 0;
    padding-top: 16px;
}

.faq-item.open .faq-question {
    color: #000000;
    background-color: #F5C542;
    border-radius: 4px 4px 0 0;
}

.faq-item.open .faq-icon {
    color: #000000;
}

.faq-item.open .faq-answer {
    opacity: 1;
    padding: 0 20px;
}

/* ============================================
   MOBILE RESPONSIVE — max 768px
   Header already adds body top spacing, so the
   hero must not add the header height again.
   ============================================ */
@media (max-width: 768px) {

    .faq-hero {
        min-height: auto;
        background-position: center center;
    }

    .faq-hero-inner {
        padding: 20px 16px 32px;
        align-items: center;
        text-align: center;
    }

    /* Breadcrumb: close to the top of the hero, like Figma */
    .faq-breadcrumb {
        align-self: flex-start;
        font-size: 12px;
        margin: 0 0 20px;
        gap: 7px;
    }

    .faq-bc-current {
        font-size: 12px;
        line-height: 18px;
    }

    .faq-bc-home,
    .faq-bc-home svg {
        width: 15px;
        height: 15px;
        font-size: 13px;
    }

    .faq-hero-content {
        width: 100%;
        max-width: 520px;
    }

    .faq-badge {
        font-size: 10px;
        padding: 5px 18px;
        letter-spacing: 0.35em;
        margin-bottom: 14px;
    }

    /* !important is required because header.blade.php has global h1 rules */
    .faq-heading {
        width: auto;
        height: auto;
        font-size: 28px !important;
        line-height: 1.2 !important;
        margin: 0 0 12px;
        font-weight: 800;
        letter-spacing: 0.02em;
    }

    .faq-heading-gold {
        font-size: 28px !important;
        line-height: 1.2 !important;
        letter-spacing: 0.02em;
    }

    /* Header has a global p font-size with !important */
    .faq-subtext {
        width: auto;
        height: auto;
        max-width: 100%;
        margin: 0;
        font-size: 13px !important;
        line-height: 1.7 !important;
        letter-spacing: 0.01em;
    }

    /* Sticky filter remains directly below the fixed header */
    .faq-filters {
        position: sticky;
        top: var(--faq-header-offset, 95px);
        box-shadow: 0 2px 16px rgba(0, 0, 0, 0.7);
    }

    .faq-filter-scroll {
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        padding: 12px 16px;
        justify-content: flex-start;
        gap: 10px;
        cursor: grab;
        user-select: none;
    }

    .faq-filter-scroll::-webkit-scrollbar,
    .faq-filters::-webkit-scrollbar {
        display: none;
    }

    .faq-filter-btn {
        padding: 9px 18px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 6px;
        flex: 0 0 auto;
        white-space: nowrap;
    }

    .faq-main {
        padding: 24px 16px 60px;
        max-width: 100%;
    }

    /* Header also has global h2/h3 rules with !important */
    .faq-section-title {
        font-size: 18px !important;
        line-height: 1.2 !important;
        margin-bottom: 14px;
    }

    .faq-section {
        margin-bottom: 36px;
        scroll-margin-top: calc(var(--faq-header-offset, 95px) + 75px);
    }

    .faq-item {
        border-radius: 8px;
    }

    .faq-question {
        font-size: 13px !important;
        line-height: 1.35 !important;
        padding: 14px 16px;
    }

    .faq-icon {
        font-size: 18px;
    }

    .faq-answer p {
        font-size: 13px !important;
        line-height: 1.7 !important;
        padding-top: 12px;
        padding-bottom: 12px;
    }

    .faq-list {
        gap: 6px;
    }
}

/* ============================================
   SMALL MOBILE — max 480px
   ============================================ */
@media (max-width: 480px) {

    .faq-hero {
        height: 398px;
        min-height: 398px;
        max-height: 398px;
        display: flex;
        align-items: stretch;
    }

    .faq-hero-inner {
        height: 100%;
        padding: 24px 16px 28px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    /* Keep breadcrumb near the top instead of pushing it to the bottom */
    .faq-breadcrumb {
        margin: 0 0 28px;
        align-self: flex-start;
    }

    .faq-hero-content {
        margin: 0 auto;
        width: 100%;
    }

    .faq-heading,
    .faq-heading-gold {
        font-size: 28px !important;
        line-height: 1.2 !important;
    }

    .faq-heading {
        margin-bottom: 10px;
    }

    .faq-subtext {
        font-size: 16px !important;
        line-height: 1.65 !important;
    }

    .faq-filter-scroll {
        padding: 12px;
    }

    .faq-filter-btn {
        padding: 8px 16px;
        font-size: 12px;
    }

    .faq-main {
        padding: 20px 12px 50px;
    }

    .faq-question {
        font-size: 13px !important;
        padding: 12px 14px;
    }
}

/* =========================================================
   FINAL MOBILE FIGMA OVERRIDES
   Keeps the hero at 398px and removes unwanted empty spaces.
   ========================================================= */
@media (max-width: 480px) {

    .faq-hero {
        width: 100%;
        height: 398px !important;
        min-height: 398px !important;
        max-height: 398px !important;
        display: block;
        position: relative;
        background-size: cover;
        background-position: center center;
        overflow: hidden;
    }

    .faq-hero-inner {
        width: 100%;
        height: 398px !important;
        min-height: 398px !important;
        max-height: 398px !important;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 52px 16px 22px !important;
        margin: 0;
        text-align: center;
    }

    /* Breadcrumb stays at the top and does not affect content centering */
    .faq-breadcrumb {
        position: absolute;
        top: 18px;
        left: 16px;
        right: auto;
        margin: 0 !important;
        padding: 0;
        align-self: auto;
        display: flex;
        align-items: center;
        gap: 7px;
        font-size: 12px;
        line-height: 1;
    }

    .faq-bc-home {
        width: auto !important;
        height: auto !important;
        font-size: 14px;
        line-height: 1;
    }

    .faq-bc-current {
        font-size: 12px;
        line-height: 16px;
    }

    .faq-hero-content {
        width: 100%;
        max-width: 380px;
        margin: 0 auto !important;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .faq-badge {
        margin: 0 0 12px;
        padding: 5px 17px;
        font-size: 9px;
        line-height: 1;
        letter-spacing: .28em;
    }

    .faq-heading {
        width: 100%;
        height: auto;
        margin: 0 0 12px !important;
        padding: 0;
        font-size: 28px !important;
        line-height: 1.18 !important;
        letter-spacing: 0 !important;
        text-align: center;
    }

    .faq-heading-gold {
        display: block;
        font-size: 28px !important;
        line-height: 1.18 !important;
        letter-spacing: 0 !important;
    }

    .faq-subtext {
        width: 100%;
        max-width: 350px;
        height: auto;
        margin: 0 !important;
        padding: 0;
        font-size: 16px !important;
        line-height: 1.55 !important;
        letter-spacing: 0 !important;
        text-align: center;
    }

    /* Filter bar must only be as tall as its buttons */
    .faq-filters {
        width: 100%;
        height: auto !important;
        min-height: 0 !important;
        max-height: none !important;
        margin: 0 !important;
        padding: 0 !important;
        position: sticky;
        top: var(--faq-header-offset, 95px);
        overflow: hidden;
        background: #202020;
    }

    .faq-filter-scroll {
        width: 100%;
        height: 64px !important;
        min-height: 64px !important;
        max-height: 64px !important;
        margin: 0 !important;
        padding: 10px 12px !important;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: nowrap;
        gap: 10px;
        overflow-x: auto;
        overflow-y: hidden;
    }

    .faq-filter-btn {
        height: 44px;
        min-height: 44px;
        padding: 0 18px !important;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        margin: 0 !important;
        font-size: 12px !important;
        line-height: 1;
        white-space: nowrap;
    }

    /* Main content starts immediately after filter bar */
    .faq-main {
        width: 100%;
        margin: 0 auto !important;
        padding: 28px 12px 50px !important;
    }

    .faq-section {
        margin: 0 0 34px !important;
    }

    .faq-section-title {
        margin: 0 0 14px !important;
        padding-left: 12px;
        font-size: 18px !important;
        line-height: 1.2 !important;
    }

    .faq-list {
        gap: 6px;
    }

    .faq-item {
        margin: 0;
        border-radius: 8px;
    }

    .faq-question {
        min-height: 50px;
        margin: 0 !important;
        padding: 13px 14px !important;
        font-size: 13px !important;
        line-height: 1.35 !important;
    }
}

</style>

<script>
    (function () {
        function setFaqHeaderOffset() {
            var header = document.getElementById('site-header');
            if (!header) return;
            var h = Math.ceil(header.getBoundingClientRect().height);
            // Inline style overrides any stylesheet !important rule
            document.body.style.setProperty('padding-top', h + 'px', 'important');
            document.documentElement.style.setProperty('--faq-header-offset', h + 'px');
        }
        setFaqHeaderOffset();
        window.addEventListener('load', setFaqHeaderOffset);
        window.addEventListener('resize', setFaqHeaderOffset);
    })();
</script>
@php
$html = $frequently_ask_question[0]->description ?? '';
$html = preg_replace('/<p>\s*&nbsp;\s*<\/p>/', '', $html);
$html = preg_replace('/<h4>\s*&nbsp;\s*<\/h4>/', '', $html);

// Split by <h4>
$parts = explode('<h4>', $html);
$faqs = [];
foreach($parts as $part) {
    if(strpos($part, '</h4>') !== false) {
        list($q, $a) = explode('</h4>', $part, 2);
        $faqs[] = ['question' => trim(strip_tags($q)), 'answer' => trim($a)];
    }
}
@endphp
    <!-- FAQ Hero Banner -->
    <section class="faq-hero">
        <div class="faq-hero-inner">
            <nav class="faq-breadcrumb">
                <a href="{{ url('/') }}" class="faq-bc-home">
                    <i class="fas fa-home"></i>
                </a>
                <i class="fas fa-chevron-right"></i>
                <span class="faq-bc-current">FAQs</span>
            </nav>
            <div class="faq-hero-content">
               
                <h1 class="faq-heading">
                    Answers to Every
                    <span class="faq-heading-gold">Packaging Question</span>
                </h1>
                <p class="faq-subtext">
                    Find clear guidance on custom rigid boxes, materials, finishes, pricing,
                    production timelines, and shipping all in one place.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Filter Buttons -->
    <section class="faq-filters">
        <div class="faq-filter-scroll">
            <button class="faq-filter-btn active" data-target="design">Design &amp; Artwork</button>
            <button class="faq-filter-btn" data-target="order">Order &amp; Prices</button>
            <button class="faq-filter-btn" data-target="sales">Sales</button>
            <button class="faq-filter-btn" data-target="shipping">Shipping</button>
            <button class="faq-filter-btn" data-target="support">Customer Support</button>
        </div>
    </section>

    <!-- FAQ Sections -->
    <main class="faq-main">

        <!-- Design & Artwork -->
        <section class="faq-section" id="design">
            <h2 class="faq-section-title">Design &amp; Artwork</h2>
            <div class="faq-list">
                @foreach($faqs as $faq)
                <div class="faq-item">
                    <h3 class="faq-question">{{ $faq['question'] }} <span class="faq-icon">+</span></h3>
                    <div class="faq-answer">{!! $faq['answer'] !!}</div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Order & Prices -->
        <section class="faq-section" id="order">
            <h2 class="faq-section-title">Order &amp; Prices</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing is ideal for small orders due to lower setup costs and faster turnaround times.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Do you offer free design support? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Yes, we offer free design support with every order to ensure your artwork meets print-ready specifications.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">What is the minimum order quantity? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Minimum order quantity is 50 units for most box styles. Custom sizes may have different minimums.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>For small orders, digital printing is the recommended method for cost and quality balance.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing remains the best choice for small runs offering flexibility and vibrant colors.</p></div>
                </div>
            </div>
        </section>

        <!-- Sales -->
        <section class="faq-section" id="sales">
            <h2 class="faq-section-title">Sales</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>For small orders, digital printing is typically the most cost-effective method as it requires no plate setup and allows for shorter runs with high quality results.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Do you offer free design support? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Yes, our in-house design team provides complimentary design assistance to help you create packaging that perfectly represents your brand.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">What is the minimum order quantity? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Our minimum order quantity starts at 50 units, though this may vary depending on the box style and customization options selected.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing works best for smaller quantities while offset printing becomes more economical at higher volumes.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing remains the best choice for small runs offering flexibility and vibrant colors at a lower entry cost.</p></div>
                </div>
            </div>
        </section>

        <!-- Shipping -->
        <section class="faq-section" id="shipping">
            <h2 class="faq-section-title">Shipping</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>For small orders, digital printing is typically the most cost-effective method as it requires no plate setup and allows for shorter runs.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Do you offer free design support? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Yes, we offer free design support with every order to ensure your artwork meets print-ready specifications.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">What is the minimum order quantity? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Minimum order quantity is 50 units for most box styles. Custom sizes may have different minimums.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>For small orders, digital printing is the recommended method for cost and quality balance.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing remains the best choice for small runs offering flexibility and vibrant colors.</p></div>
                </div>
            </div>
        </section>

        <!-- Customer Support -->
        <section class="faq-section" id="support">
            <h2 class="faq-section-title">Customer Support</h2>
            <div class="faq-list">
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>For small orders, digital printing is typically the most cost-effective method as it requires no plate setup.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Do you offer free design support? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Yes, our support team is available to guide you through the design process at no additional charge.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">What is the minimum order quantity? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Our minimum order quantity starts at 50 units. Reach out to support for exceptions on special orders.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing works best for smaller quantities while offset printing becomes more economical at higher volumes.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing is ideal for short runs with fast turnaround and no minimum plate costs.</p></div>
                </div>
            </div>
        </section>

    </main>

<script>
            // ============================================
        //  FILTER BUTTONS — smooth scroll to section
        // ============================================
        const filterBtns = document.querySelectorAll('.faq-filter-btn');
        const faqSections = document.querySelectorAll('.faq-section');
        const filtersBar = document.querySelector('.faq-filter-scroll') || document.querySelector('.faq-filters');

        // Make sure all sections are visible
        faqSections.forEach(section => {
            section.style.display = 'block';
        });

        // ============================================
        //  SCROLL FILTER BAR TO ACTIVE BUTTON
        // ============================================
        const scrollContainer = document.querySelector('.faq-filter-scroll');

        function setActiveBtn(sectionId) {
            filterBtns.forEach(btn => {
                btn.classList.remove('active');
                if (btn.getAttribute('data-target') === sectionId) {
                    btn.classList.add('active');

                    if (scrollContainer) {
                        const btnLeft = btn.offsetLeft;
                        const btnWidth = btn.offsetWidth;
                        const containerWidth = scrollContainer.offsetWidth;
                        scrollContainer.scrollTo({
                            left: btnLeft - (containerWidth / 2) + (btnWidth / 2),
                            behavior: 'smooth'
                        });
                    }
                }
            });
        }

        // ============================================
        //  FILTER BUTTON CLICK HANDLER
        // ============================================
        let isScrollingFromClick = false;

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-target');

                isScrollingFromClick = true;

                // Scroll filter bar to active button
                setActiveBtn(targetId);

                // Smooth scroll to the target section
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    const navbarHeight = document.getElementById('site-header')
                        ? document.getElementById('site-header').offsetHeight
                        : 120;
                    const filterBarHeight = document.querySelector('.faq-filters').offsetHeight;
                    const extraOffset = 16;
                    const totalOffset = navbarHeight + filterBarHeight + extraOffset;
                    const sectionTop = targetSection.getBoundingClientRect().top + window.scrollY - totalOffset;
                    window.scrollTo({ top: sectionTop, behavior: 'smooth' });

                    // Re-enable scroll spy after smooth scroll finishes
                    setTimeout(() => {
                        isScrollingFromClick = false;
                    }, 800);
                } else {
                    isScrollingFromClick = false;
                }
            });
        });

        // ============================================
        //  DRAG TO SCROLL — filter buttons bar
        // ============================================
        let isDown = false;
        let startX;
        let scrollLeftPos;

        filtersBar.addEventListener('mousedown', (e) => {
            isDown = true;
            filtersBar.style.cursor = 'grabbing';
            startX = e.pageX - filtersBar.offsetLeft;
            scrollLeftPos = filtersBar.scrollLeft;
        });

        filtersBar.addEventListener('mouseleave', () => {
            isDown = false;
            filtersBar.style.cursor = 'grab';
        });

        filtersBar.addEventListener('mouseup', () => {
            isDown = false;
            filtersBar.style.cursor = 'grab';
        });

        filtersBar.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - filtersBar.offsetLeft;
            const walk = (x - startX) * 1.5;
            filtersBar.scrollLeft = scrollLeftPos - walk;
        });

        // Touch support
        filtersBar.addEventListener('touchstart', (e) => {
            startX = e.touches[0].pageX - filtersBar.offsetLeft;
            scrollLeftPos = filtersBar.scrollLeft;
        }, { passive: true });

        filtersBar.addEventListener('touchmove', (e) => {
            const x = e.touches[0].pageX - filtersBar.offsetLeft;
            const walk = (x - startX) * 1.5;
            filtersBar.scrollLeft = scrollLeftPos - walk;
        }, { passive: true });

        // ============================================
        //  ✅ FIXED SCROLL SPY — accurate section detection
        // ============================================
        function getCurrentSection() {
            const navbarHeight = document.getElementById('site-header')
                ? document.getElementById('site-header').offsetHeight
                : 120;
            const filterBarHeight = document.querySelector('.faq-filters').offsetHeight;
            const triggerPoint = navbarHeight + filterBarHeight + 30; // Just below sticky filter bar

            let currentSection = null;
            let closestDistance = Infinity;

            faqSections.forEach(section => {
                const rect = section.getBoundingClientRect();
                const sectionTop = rect.top;

                // Find the section whose top is closest to trigger point (but above or at it)
                if (sectionTop <= triggerPoint) {
                    const distance = triggerPoint - sectionTop;
                    if (distance < closestDistance) {
                        closestDistance = distance;
                        currentSection = section;
                    }
                }
            });

            // If no section is above trigger point, use the first section
            if (!currentSection && faqSections.length > 0) {
                const firstRect = faqSections[0].getBoundingClientRect();
                if (firstRect.top <= window.innerHeight) {
                    currentSection = faqSections[0];
                }
            }

            return currentSection;
        }

        // Scroll event listener for scroll spy
        let scrollTicking = false;

        window.addEventListener('scroll', () => {
            if (isScrollingFromClick) return;

            if (!scrollTicking) {
                requestAnimationFrame(() => {
                    const currentSection = getCurrentSection();
                    if (currentSection) {
                        setActiveBtn(currentSection.getAttribute('id'));
                    }

                    // Page end pe last section active karo
                    const scrollY = window.scrollY;
                    const windowHeight = window.innerHeight;
                    const docHeight = document.documentElement.scrollHeight;
                    if (scrollY + windowHeight >= docHeight - 20) {
                        setActiveBtn(faqSections[faqSections.length - 1].getAttribute('id'));
                    }

                    scrollTicking = false;
                });
                scrollTicking = true;
            }
        });


        const faqQuestions = document.querySelectorAll('.faq-question');

        function openItem(item) {
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');

            item.classList.add('open');
            icon.textContent = '−';

            // Measure full height
            answer.style.height = 'auto';
            const fullHeight = answer.scrollHeight + 'px';
            answer.style.height = '0px';

            // Force reflow then animate
            answer.getBoundingClientRect();
            answer.style.height = fullHeight;

            // After transition ends, set to auto so it's responsive
            answer.addEventListener('transitionend', () => {
                if (item.classList.contains('open')) {
                    answer.style.height = 'auto';
                }
            }, { once: true });
        }

        function closeItem(item) {
            const answer = item.querySelector('.faq-answer');
            const icon = item.querySelector('.faq-icon');

            // Set explicit height before collapsing
            answer.style.height = answer.scrollHeight + 'px';
            answer.getBoundingClientRect();
            answer.style.height = '0px';

            item.classList.remove('open');
            icon.textContent = '+';
        }

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.closest('.faq-item');
                const isOpen = item.classList.contains('open');

                // Close all open items
                document.querySelectorAll('.faq-item.open').forEach(openItem => {
                    closeItem(openItem);
                });

                // If it wasn't open, open it
                if (!isOpen) {
                    openItem(item);
                }
            });
        });
        </script>

@include('web/components_cta_banner')

@include('web/footer')
