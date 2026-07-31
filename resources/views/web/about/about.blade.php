@include('web/header')

<style>
:root {
    --about-gold: #f5c542;
    --about-gold-dark: #d4af37;
    --about-bg: #161616;
    --about-bg-alt: #1b1b1b;
    --about-card: #242424;
    --about-text: #ffffff;
    --about-muted: rgba(255, 255, 255, 0.68);
    --about-border: rgba(212, 175, 55, 0.40);
    --about-container: 1380px;
    --about-radius: 7px;
}

html,
body {
    overflow-x: hidden;
}

body {
    background: var(--about-bg);
    color: var(--about-text);
}

/* Justify all long paragraphs on desktop */
@media (min-width: 861px) {
    .ab-us-hero-text,
    .ab-us-story-para,
    .ab-us-why-para,
    .ab-us-process-text,
    .ab-us-quality-sub,
    .ab-quality-card-content p,
    .ab-worldwide-para {
        text-align: justify;
    }
}

.ab-us-hero,
.ab-us-story,
.ab-us-why,
.ab-us-numbers,
.ab-us-process,
.ab-us-hero *,
.ab-us-story *,
.ab-us-why *,
.ab-us-numbers *,
.ab-us-process * {
    box-sizing: border-box;
}

.ab-us-inner,
.ab-us-story-container,
.ab-us-why-inner,
.ab-us-numbers-inner,
.ab-us-numbers-stats,
.ab-us-process-inner {
    width: min(100% - 40px, var(--about-container));
    margin-inline: auto;
}

/* Match every desktop section to the shared header grid. */
@media (min-width: 821px) {
    .ab-us-inner,
    .ab-us-story-container,
    .ab-us-why-inner,
    .ab-us-numbers-inner,
    .ab-us-numbers-stats,
    .ab-us-process-inner {
        width: 100%;
        max-width: 1380px;
        padding-left: 55px;
        padding-right: 55px;
        box-sizing: border-box;
    }
}

/* Shared section labels */
.ab-us-hero-badge,
.ab-us-story-badge,
.ab-us-why-badge,
.ab-us-numbers-badge,
.ab-us-process-pill {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 30px;
    padding: 7px 18px;
    border: 1px solid var(--about-gold-dark);
    border-radius: 999px;
    color: var(--about-gold);
    background: transparent;
    font-size: 10px;
    font-weight: 700;
    line-height: 1;
    letter-spacing: 1.3px;
    text-transform: uppercase;
    white-space: nowrap;
}

/* Hero */
.ab-us-hero {
    position: relative;
    width: 100%;
    min-height: 340px;
    overflow: hidden;
    background-image: url("{{ asset('images/about/packaging-excellence.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.ab-us-overlay {
    position: absolute;
    inset: 0;
    z-index: 0;
    background: linear-gradient(90deg, rgba(0,0,0,.75), rgba(0,0,0,.60), rgba(0,0,0,.78));
}

.ab-us-inner {
    position: relative;
    z-index: 1;
    min-height: 340px;
    padding-block: 18px 48px;
    display: flex;
    flex-direction: column;
}



.ab-us-hero-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 850px;
    margin-inline: auto;
    padding-top: 8px;
    text-align: center;
}

.ab-us-hero-badge { margin-bottom: 18px; }

.ab-us-hero-heading {
    max-width: 780px;
    margin: 0 0 12px;
    color: #fff;
    font-size: clamp(34px, 3.25vw, 48px) !important;
    font-weight: 800;
    line-height: 1.35 !important;
    letter-spacing: -.6px;
    text-wrap: balance;
}

.ab-us-gold { color: var(--about-gold); }

.ab-us-hero-para {
    max-width: 650px;
    margin: 0;
    color: rgba(255,255,255,.66);
    font-size: 14px;
    line-height: 1.65;
    text-wrap: balance;
}

/* Our story */
.ab-us-story {
    width: 100%;
    padding-block: 34px;
    background: var(--about-bg);
    overflow: hidden;
}

.ab-us-story-container {
    display: grid;
    grid-template-columns: minmax(320px, 470px) minmax(0, 1fr);
    align-items: center;
    gap: clamp(50px, 7vw, 110px);
}

.ab-us-story-img-wrap {
    position: relative;
    width: 100%;
    max-width: 427px;
    aspect-ratio: 427 / 408;
}

.ab-us-story-img {
    position: absolute;
    inset: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    border-radius: 10px;
}

.ab-us-story-content {
    min-width: 0;
    max-width: 650px;
}

.ab-us-story-badge { margin-bottom: 18px; }

.ab-us-story-heading {
    margin: 0 0 14px;
    color: #fff;
    font-size: clamp(27px, 2.2vw, 36px);
    font-weight: 750;
    line-height: 1.2;
    letter-spacing: -.25px;
}

.ab-us-story-para {
    max-width: 620px;
    margin: 0;
    color: var(--about-muted);
    font-size: 14px;
    line-height: 1.85;
}

.ab-us-accessible { background: transparent; }
.ab-us-accessible-container { grid-template-columns: minmax(0, 1fr) minmax(320px, 470px); }

/* Why choose us */
.ab-us-why {
    width: 100%;
    padding-block: 38px;
    background: var(--about-bg-alt);
}

.ab-us-why-inner {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
    align-items: stretch;
}

.ab-us-why-left,
.ab-us-why-right {
    min-width: 0;
    display: grid;
    gap: 18px;
}

.ab-us-why-left { grid-template-rows: 1fr 270px; }
.ab-us-why-right { grid-template-rows: 270px 270px; }

.ab-us-why-copy {
    min-height: 270px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-right: 40px;
}

.ab-us-why-badge {
    width: fit-content;
    margin-bottom: 18px;
}

.ab-us-why-title {
    max-width: 620px;
    margin: 0 0 14px;
    color: #fff;
    font-size: clamp(28px, 2.2vw, 40px) !important;
    font-weight: 750;
    line-height: 1.16;
    letter-spacing: -.25px;
}

.ab-us-why-desc {
    max-width: 620px;
    margin: 0;
    color: var(--about-muted);
    font-size: clamp(14px, 1vw, 17px) !important;
    line-height: 1.7;
}

.ab-us-why-cards-row {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 18px;
}

.ab-us-why-card,
.ab-us-process-card {
    position: relative;
    overflow: hidden;
    background: linear-gradient(145deg, #262626, #222222);
    border: 1px solid var(--about-border);
    border-radius: var(--about-radius);
    transition: transform .3s ease, border-color .3s ease, box-shadow .3s ease;
}

.ab-us-why-card {
    min-width: 0;
    height: 270px;
    padding: 28px 26px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 12px;
    text-align: center;
}

.ab-us-why-card:hover,
.ab-us-process-card:hover {
    transform: translateY(-5px);
    border-color: var(--about-gold-dark);
    box-shadow: 0 18px 42px rgba(0,0,0,.30);
}

.ab-us-why-icon,
.ab-us-process-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 0 0 auto;
}

.ab-us-why-icon {
    width: 46px;
    height: 46px;
}

.ab-us-why-icon img {
    width: 36px !important;
    height: 36px !important;
    object-fit: contain;
}

.ab-us-why-card h3 {
    margin: 0;
    color: #fff;
    font-size: clamp(15px, 1vw, 18px) !important;
    font-weight: 700;
    line-height: 1.3;
}

.ab-us-why-card p {
    max-width: 260px;
    margin: 0;
    color: rgba(255,255,255,.64);
    font-size: clamp(12px, .82vw, 14px) !important;
    line-height: 1.55;
}

.ab-us-why-feature-img {
    height: 270px;
    overflow: hidden;
    border-radius: var(--about-radius);
}

.ab-us-why-feature-img img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
}

/* Numbers */
.ab-us-numbers {
    width: 100%;
    padding-block: 34px 40px;
    background: #202020;
}

.ab-us-numbers-inner {
    display: grid;
    grid-template-columns: minmax(260px, 380px) minmax(0, 1fr);
    align-items: center;
    gap: clamp(50px, 8vw, 130px);
    margin-bottom: 34px;
}

.ab-us-numbers-left,
.ab-us-numbers-right { min-width: 0; }

.ab-us-numbers-badge { margin-bottom: 18px; }

.ab-us-numbers-heading {
    margin: 0;
    color: #fff;
    font-size: clamp(28px, 2vw, 36px);
    font-weight: 750;
    line-height: 1.23;
}

.ab-us-numbers-para {
    max-width: 720px;
    margin: 0;
    color: rgba(255,255,255,.62);
    font-size: 14px;
    line-height: 1.8;
}

.ab-us-numbers-stats {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
}

.ab-us-numbers-stat {
    position: relative;
    min-width: 0;
    padding: 4px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 7px;
    text-align: center;
}

.ab-us-numbers-stat:not(:last-child)::after {
    content: '';
    position: absolute;
    top: 8px;
    right: 0;
    width: 1px;
    height: 46px;
    background: rgba(212,175,55,.35);
}

.ab-us-stat-num {
    color: var(--about-gold);
    font-size: clamp(28px, 2.2vw, 38px);
    font-weight: 800;
    line-height: 1;
}

.ab-us-stat-lbl {
    color: rgba(255,255,255,.66);
    font-size: 12px;
    letter-spacing: .4px;
}

/* Process */
.ab-us-process {
    width: 100%;
    padding-block: 20px 20px;
    background: var(--about-bg);
    text-align: center;
}

.ab-us-process-pill { margin-bottom: 18px; }

.ab-us-process-heading {
    margin: 0 0 12px;
    color: #fff;
    font-size: clamp(28px, 2.3vw, 40px) !important;
    font-weight: 750;
    line-height: 1.2;
}

.ab-us-process-sub {
    max-width: 720px;
    margin: 0 auto 34px;
    color: var(--about-muted);
    font-size: clamp(14px, 1vw, 16px) !important;
    line-height: 1.65;
}

.ab-us-process-cards {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
}

.ab-us-process-card {
    width: 100%;
    max-width: 222px;
    height: 258px;
    margin: 0 auto;
    border-radius: 6px;
    border-width: 0.3px;
    padding: 20px 16px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.ab-us-process-icon {
    width: 44px;
    height: 44px;
}

.ab-us-process-icon img {
    width: 32px !important;
    height: 32px !important;
    object-fit: contain;
}

.ab-us-process-title {
    margin: 0;
    color: #fff;
    font-size: 14px !important;
    font-weight: 700;
    line-height: 1.3;
}

.ab-us-process-text {
    max-width: 240px;
    margin: 0;
    color: rgba(255,255,255,.64);
    font-size: 12px !important;
    line-height: 1.5;
}

@media (max-width: 1100px) {
    .ab-us-story-container {
        grid-template-columns: minmax(300px, 400px) minmax(0, 1fr);
        gap: 48px;
    }

    .ab-us-why-left { grid-template-rows: auto 250px; }
    .ab-us-why-right { grid-template-rows: 250px 250px; }
    .ab-us-why-card,
    .ab-us-why-feature-img { height: 250px; }

    .ab-us-process-cards {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 820px) {

    #site-header .container,
    #site-header .container-fluid,
    #site-header .header-container,
    #site-header .topbar-container,
    #site-header .navbar-container,
    #site-header .nav-container,
    .ab-us-inner,
    .ab-us-story-container,
    .ab-us-why-inner,
    .ab-us-numbers-inner,
    .ab-us-numbers-stats,
    .ab-us-process-inner {
        width: min(100% - 32px, var(--about-container));
    }

    .ab-us-story-container,
    .ab-us-why-inner,
    .ab-us-numbers-inner {
        grid-template-columns: 1fr;
    }

    .ab-us-accessible-img-wrap {
        order: -1;
    }

    .ab-us-story-container { gap: 40px; }
    .ab-us-story-img-wrap { width: calc(100% - 50px); max-width: 520px; margin-left: 30px; margin-right: 20px; margin-bottom: 0px; }
    .ab-us-story-content { max-width: 100%; padding-inline: 16px; }

    .ab-us-why-left,
    .ab-us-why-right { grid-template-rows: auto; }
    .ab-us-why-copy { min-height: 0; padding: 0 16px 12px; }
    .ab-us-why-card,
    .ab-us-why-feature-img { height: auto; min-height: 250px; }
    .ab-us-why-card { margin-inline: 16px; }

    .ab-us-numbers-inner { gap: 26px; }
    .ab-us-numbers-left,
    .ab-us-numbers-right { padding-inline: 16px; }
    .ab-us-numbers-stats { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 28px 0; }
    .ab-us-numbers-stat:nth-child(2)::after { display: none; }

    .ab-us-process-inner { padding-inline: 16px; }
    .ab-us-process-card { margin-inline: 16px; }
}

@media (max-width: 560px) {
    .ab-us-inner,
    .ab-us-story-container,
    .ab-us-why-inner,
    .ab-us-numbers-inner,
    .ab-us-numbers-stats,
    .ab-us-process-inner {
        width: min(100% - 28px, var(--about-container));
    }

    .ab-us-inner { min-height: 320px; padding-block: 14px 20px; }

    .ab-us-hero-heading { font-size: 26px !important; }
    .ab-us-hero-heading br { display: none; }
    .ab-us-hero-para { font-size: 13px; }

    .ab-us-story-para { text-align: justify; }

    .ab-us-story,
    .ab-us-why,
    .ab-us-numbers,
    .ab-us-process { padding-block: 38px; }

    .ab-us-story-container { gap: 34px; }
    .ab-us-story-heading,
    .ab-us-why-title,
    .ab-us-numbers-heading,
    .ab-us-process-heading { font-size: 27px !important; }

    .ab-us-why-cards-row,
    .ab-us-process-cards { 
        grid-template-columns: 1fr; 
        justify-items: center;
    }

    .ab-us-why-card,
    .ab-us-why-feature-img { min-height: 230px; }
    .ab-us-why-feature-img { display: none; }

    .ab-us-numbers-stats { gap: 24px 0; }
    .ab-us-numbers-stat { padding-inline: 12px; }
    .ab-us-numbers-stat::after { height: 42px !important; }
    .ab-us-stat-lbl { font-size: 11px; }

    .ab-us-process-card { min-height: 260px; max-width: 100%; }
    .ab-us-process-text { max-width: 100%; }
}

@media (max-width: 400px) {
    .ab-us-hero-heading { font-size: 22px !important; }
}
</style>


<script>
    (function () {
        function setAboutHeaderOffset() {
            var header = document.getElementById('site-header');
            if (!header) return;

            var h = Math.ceil(header.getBoundingClientRect().height);
            // Use inline style so it overrides any stylesheet !important rule
            document.body.style.setProperty('padding-top', h + 'px', 'important');
        }

        setAboutHeaderOffset();
        window.addEventListener('load', setAboutHeaderOffset);
        window.addEventListener('resize', setAboutHeaderOffset);
    })();
</script>

    <!-- HERO SECTION -->
    <section class="ab-us-hero">
        <div class="ab-us-overlay"></div>
        <div class="ab-us-inner">
            @include('web.components.breadcrumb', [
                'class' => 'ab-us-breadcrumb',
                'items' => [
                    ['label' => 'About Us']
                ]
            ])
            <div class="ab-us-hero-content">
            
                <h1 class="ab-us-hero-heading">
                    ABOUT US
                </h1>
                <p class="ab-us-hero-para">
                    We are a leading packaging manufacturer committed to providing premium, reliable, <br>and customized packaging solutions
                </p>
            </div>
        </div>
    </section>

    <!-- OUR PURPOSE SECTION -->
    <section class="ab-us-story">
        <div class="ab-us-story-container">
            <div class="ab-us-story-img-wrap">
                <img
                    src="{{ url('uploads/our-purpose.png') }}"
                    alt="Our Purpose" title="Our Purpose"
                    class="ab-us-story-img"
                >
            </div>
            <div class="ab-us-story-content">
               
                <h2 class="ab-us-story-heading" style="color: var(--about-text);">
                    Our Purpose
                </h2>
                <p class="ab-us-story-para">
                    Premiumboxes was started with a clear purpose. We want to manufacture custom packaging boxes that are accessible from big brands to growing businesses. We aim to create packaging that is not only high-quality, low costly but also adds value to your branding. Our focus is to create thoughtful designs that are aesthetically pleasing, satisfy branding and have practical use.
                    <br>
                    As a direct manufacturer, we ought to help customers. We manufacture packaging with customized size, material, structure, printing, and finishing.  We believe in quality over everything; hence we make boxes that represent your brand at its best. From sample to bulk orders, our packaging has one purpose to take your brand to highest level.
                </p>
            </div>
        </div>
    </section>

    <!-- ACCESSIBLE PACKAGING SECTION -->
    <section class="ab-us-story ab-us-accessible">
        <div class="ab-us-story-container ab-us-accessible-container">
            <div class="ab-us-story-content">
                <h2 class="ab-us-story-heading" style="color: var(--about-text);">
                    Packaging Made Accessible Since 2016
                </h2>
                <p class="ab-us-story-para">
                    PremiumBoxes is started in 2016 with a straightforward goal. We want to make boxes that do not cost businesses an arm and a leg. We removed the restriction that customers will get customization only on bulk orders. Now you can buy customized packaging boxes as many as you want. With 10 years of experience, we have finest design team, dedicated customer support and high-quality manufacturing process. As a direct manufacturer we operate our own production facility. Therefore, proudly we can say that we have complete control over quality, materials, designs and finishing.
                </p>
            </div>
            <div class="ab-us-story-img-wrap ab-us-accessible-img-wrap">
                <img
                    src="{{ url('uploads/packing-made-accessible.png') }}"
                    alt="packaging made accessible" title="Packaging Made Accessible"
                    class="ab-us-story-img"
                >
            </div>
        </div>
    </section>

    <!-- MADE IN OUR OWN FACILITY SECTION -->
    <style>
        .facility-checkboxes {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            margin-top: 24px;
        }
        .facility-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            background: var(--about-card);
            border: 1px solid rgba(255,255,255,0.05);
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            color: var(--about-text);
        }
        .ab-us-facility-img-wrap {
            width: 100%;
            height: 100%;
            display: flex;
        }
        .ab-us-facility-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            border-radius: 20px;
        }
        @media (max-width: 860px) {
            .facility-checkbox {
                padding: 10px 10px;
                font-size: 11px;
                gap: 6px;
            }
            .facility-checkbox img {
                width: 14px !important;
                height: 14px !important;
            }
            .ab-us-facility-img-wrap img {
                height: auto;
                object-fit: contain;
            }
        }
    </style>
    <section class="ab-us-story" style="background: #202020;">
        <div class="ab-us-story-container" style="align-items: stretch;">
            <div class="ab-us-facility-img-wrap">
                <img
                    src="{{ url('uploads/made-in-our-own-facility.webp') }}"
                    alt="made in our own facility"
                    title="Made in Our Own Facility"
                >   
            </div>
            <div class="ab-us-story-content" style="display: flex; flex-direction: column; justify-content: center; padding: 20px 0;">
                <h2 class="ab-us-story-heading" style="color: var(--about-text);">
                    Made in Our Own Facility
                </h2>
                <p class="ab-us-story-para">
                    We own and operate our packaging production facility in USA. As we are direct manufacturer, our team is involved from the first step to end product. Our design team is available for assistance regarding design, right material, size, structure, printing, finishing and add-ons. As we own production facility, our dedicated team keeps involved until the boxes have shipped to customers. We keep in touch with businesses until they get final product.
                </p>
                <div class="facility-checkboxes">
                    <div class="facility-checkbox">
                        <img src="{{ url('uploads/tick-check.svg') }}" alt="Tick" style="width: 16px; height: 16px;">
                        <span>Material selection</span>
                    </div>
                    <div class="facility-checkbox">
                        <img src="{{ url('uploads/tick-check.svg') }}" alt="Tick" style="width: 16px; height: 16px;">
                        <span>Structural design</span>
                    </div>
                    <div class="facility-checkbox">
                        <img src="{{ url('uploads/tick-check.svg') }}" alt="Tick" style="width: 16px; height: 16px;">
                        <span>Printing methods</span>
                    </div>
                    <div class="facility-checkbox">
                        <img src="{{ url('uploads/tick-check.svg') }}" alt="Tick" style="width: 16px; height: 16px;">
                        <span>Finishes and add-ons</span>
                    </div>
                    <div class="facility-checkbox">
                        <img src="{{ url('uploads/tick-check.svg') }}" alt="Tick" style="width: 16px; height: 16px;">
                        <span>Production checks</span>
                    </div>
                    <div class="facility-checkbox">
                        <img src="{{ url('uploads/tick-check.svg') }}" alt="Tick" style="width: 16px; height: 16px;">
                        <span>Shipping coordination</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- OUR PROCESS SECTION -->
    <section class="ab-us-process">
        <div class="ab-us-process-inner">
       
        <h2 class="ab-us-process-heading">How We Produce Your Boxes</h2>
        <p class="ab-us-process-sub">
            We follow a simple process that turns your ideas into premium packaging through
            design, production, and delivery.
        </p>
        <div class="ab-us-process-cards">
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('uploads/share-your-vision.svg') }}" alt="share your vision" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Share Your Vision</h3>
                <p class="ab-us-process-text">First of all, we ask our customers to share their vision, references, artwork, box dimensions, style, quantity, product weight, presentation goals, material, printing requirements, and delivery destination.</p>
            </div>
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('uploads/planning-and-analysis.svg') }}" alt="planning and analysis" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Planning &amp; Analysis</h3>
                <p class="ab-us-process-text">We carefully review every project instead of using standard box sizes. Our team analyzes dimensions, product weight, material, printing, quantity, and delivery requirements to create packaging that perfectly fits your needs.</p>
            </div>
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('uploads/dieline-and-prototype.svg') }}" alt="dieline and prototype" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Dieline &amp; Prototype</h3>
                <p class="ab-us-process-text">With all of these details, we create a prototype. Our dieline includes cut lines, folds, flaps, glue areas, and printable panels to ensure the box is production-ready.</p>
            </div>
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('uploads/sample-and-production.svg') }}" alt="sample and production" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Sample &amp; Production</h3>
                <p class="ab-us-process-text">After this, we create a physical sample. As soon as we receive your approval, we begin the full production process while maintaining strict quality standards.</p>
            </div>
        </div>
        </div>
    </section>

    <!-- QUALITY CHECK SECTION -->
    <style>
        .ab-us-quality {
            padding: 20px 0;
            background: var(--about-bg);
        }
        .ab-us-quality-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            text-align: center;
        }
        .ab-us-quality-heading {
            color: var(--about-text);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .ab-us-quality-sub {
            color: var(--about-text-muted);
            font-size: 16px;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 50px;
            text-align: center;
        }
        .ab-us-quality-grid {
            display: flex;
            align-items: stretch;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }
        .ab-us-quality-col {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .ab-quality-card {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            text-align: left;
            background: #E8E8E81A;
            border: 1px solid #7E757633;
            border-radius: 12px;
        }
        .ab-quality-card img {
            width: 24px;
            height: 24px;
        }
        .ab-quality-card-content .ab-quality-title {
            color: var(--about-text);
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 17px;
            line-height: 1.4;
            letter-spacing: 0.5px;
            margin: 0 0 0;
            display: block;
        }
        .ab-quality-card-content p:not(.ab-quality-title) {
            color: var(--about-text-muted);
            font-size: 16px;
            margin: 0;
        }
        .ab-us-quality-image {
            flex: 1;
            min-width: 300px;
            text-align: center;
            display: flex;
        }
        .ab-us-quality-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            max-width: 400px;
            border-radius: 16px;
            display: block;
            margin: 0 auto;
            box-shadow: 0 0 40px rgba(245, 197, 66, 0.18);
        }

        @media (max-width: 860px) {
            .ab-us-quality-image {
                display: none;
            }
            .ab-us-quality-grid {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 15px;
            }
            .ab-us-quality-col {
                display: contents;
            }
            .ab-quality-card {
                flex-direction: column;
                justify-content: center;
                text-align: center;
                padding: 15px 10px;
            }
            .ab-quality-card-content .ab-quality-title {
                font-size: 15px;
                line-height: 1.3;
                letter-spacing: 0.3px;
                font-weight: 700;
                margin-bottom: 4px;
            }
            .ab-quality-card-content p:not(.ab-quality-title) {
                font-size: 12px;
                line-height: 1.4;
            }
        }
    </style>
    <section class="ab-us-quality">
        <div class="ab-us-quality-inner">
            <h2 class="ab-us-quality-heading">Quality Is Checked in Stages</h2>
            <p class="ab-us-quality-sub">
                We just don't check the quality after the final product is created. We have complete control over the quality from first step to final product. We have dedicated quality check team that makes sure from the beginning that every step is going in right direction.
            </p>
            
            <div class="ab-us-quality-grid">
                
                <!-- Left Cards -->
                <div class="ab-us-quality-col">
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/box-dimensions.svg') }}" alt="box dimensions">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Box Dimensions</p>
                            <p>Micrometer precision for snug fits.</p>
                        </div>
                    </div>
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/text-alignment.svg') }}" alt="text alignment">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Text Alignment</p>
                            <p>Clear and accurate positioning.</p>
                        </div>
                    </div>
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/print-and-color.svg') }}" alt="print and color">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Print &amp; Color</p>
                            <p>Consistent colors in every batch.</p>
                        </div>
                    </div>
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/foil-and-laminations.svg') }}" alt="foil and laminations">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Foil &amp; Lamination</p>
                            <p>Flawless premium finish applied.</p>
                        </div>
                    </div>
                </div>

                <!-- Center Image -->
                <div class="ab-us-quality-image">
                    <img src="{{ url('uploads/quality-check.png') }}" alt="quality check">
                </div>

                <!-- Right Cards -->
                <div class="ab-us-quality-col">
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/structure-check.svg') }}" alt="structure check">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Structure Check</p>
                            <p>Engineered for lasting strength.</p>
                        </div>
                    </div>
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/artwork-placement.svg') }}" alt="artwork placement">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Artwork Placement</p>
                            <p>Perfectly aligned visual elements.</p>
                        </div>
                    </div>
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/assembly-and-closure.svg') }}" alt="assembly and closure">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Assembly &amp; Closure</p>
                            <p>Secure folds and reliable closure.</p>
                        </div>
                    </div>
                    <div class="ab-quality-card">
                        <img src="{{ url('uploads/packing-and-quality.svg') }}" alt="packing and quality">
                        <div class="ab-quality-card-content">
                            <p class="ab-quality-title">Packing &amp; Quantity</p>
                            <p>Accurate counts, safely packed.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- MEET THE TEAM SECTION -->
    <!-- <style>
        .ab-us-team {
            padding: 20px 0;
            background: var(--about-bg);
            text-align: center;
        }
        .ab-us-team-heading {
            color: var(--about-text);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 40px;
            font-family: 'Inter', sans-serif;
        }
        .ab-us-team-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            flex-wrap: nowrap;
        }
        .ab-team-card {
            flex: 1;
            min-width: 200px;
            text-align: left;
        }
        .ab-team-img-wrap {
            position: relative;
            margin-bottom: 15px;
        }
        .ab-team-img-wrap > img {
            width: 100%;
            aspect-ratio: 228.66 / 342.2;
            object-fit: cover;
            border-radius: 12px;
            display: block;
        }
        .ab-team-linkedin {
            position: absolute;
            bottom: 12px;
            right: 12px;
            width: 34px;
            height: 34px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .ab-team-linkedin img {
            width: 18px !important;
            height: 18px !important;
            filter: brightness(0);
            border-radius: 0;
            aspect-ratio: auto;
        }
        .ab-team-card h3 {
            color: var(--about-text);
            font-size: 16px;
            font-weight: 700;
            margin: 0 0 5px;
            font-family: 'Inter', sans-serif;
        }
        .ab-team-card p {
            color: var(--about-text-muted);
            font-size: 13px;
            margin: 0;
        }

        @media (max-width: 860px) {
            .ab-us-team-grid {
                justify-content: flex-start;
                overflow-x: auto;
                padding-bottom: 20px;
                scrollbar-width: none;
                -ms-overflow-style: none;
            }
            .ab-us-team-grid::-webkit-scrollbar {
                display: none;
            }
            .ab-team-card {
                flex: 0 0 75%;
                max-width: 300px;
            }
        }
    </style>
    <section class="ab-us-team">
        <h2 class="ab-us-team-heading">Meet the People Behind Your Packaging</h2>
        <div class="ab-us-team-grid">
            <div class="ab-team-card">
                <div class="ab-team-img-wrap">
                    <img src="{{ url('uploads/marcus-vance.jpg') }}" alt="marcus vance">
                    <a href="#" class="ab-team-linkedin">
                        <img src="{{ url('uploads/linkedin.svg') }}" alt="linkedin">
                    </a>
                </div>
                <h3>Marcus Vance</h3>
                <p>Founder and Managing Director</p>
            </div>
            <div class="ab-team-card">
                <div class="ab-team-img-wrap">
                    <img src="{{ url('uploads/elena-rossi.jpg') }}" alt="elena rossi">
                    <a href="#" class="ab-team-linkedin">
                        <img src="{{ url('uploads/linkedin.svg') }}" alt="linkedin">
                    </a>
                </div>
                <h3>Elena Rossi</h3>
                <p>Production Manager</p>
            </div>
            <div class="ab-team-card">
                <div class="ab-team-img-wrap">
                    <img src="{{ url('uploads/simon-chen.jpg') }}" alt="simon chen">
                    <a href="#" class="ab-team-linkedin">
                        <img src="{{ url('uploads/linkedin.svg') }}" alt="linkedin">
                    </a>
                </div>
                <h3>Simon Chen</h3>
                <p>Structural Packaging Designer</p>
            </div>
            <div class="ab-team-card">
                <div class="ab-team-img-wrap">
                    <img src="{{ url('uploads/sarah-jenkins.jpg') }}" alt="sarah jenkins">
                    <a href="#" class="ab-team-linkedin">
                        <img src="{{ url('uploads/linkedin.svg') }}" alt="linkedin">
                    </a>
                </div>
                <h3>Sarah Jenkins</h3>
                <p>Quality Control Manager</p>
            </div>
            <div class="ab-team-card">
                <div class="ab-team-img-wrap">
                    <img src="{{ url('uploads/julian-throne.jpg') }}" alt="julian thorne">
                    <a href="#" class="ab-team-linkedin">
                        <img src="{{ url('uploads/linkedin.svg') }}" alt="linkedin">
                    </a>
                </div>
                <h3>Julian Thorne</h3>
                <p>Customer Project Manager</p>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const teamGrid = document.querySelector('.ab-us-team-grid');
            if (window.innerWidth <= 860 && teamGrid) {
                let scrollStep = 0.5; 
                let isHovered = false;

                teamGrid.addEventListener('mouseenter', () => isHovered = true);
                teamGrid.addEventListener('mouseleave', () => isHovered = false);
                teamGrid.addEventListener('touchstart', () => isHovered = true);
                teamGrid.addEventListener('touchend', () => {
                    setTimeout(() => isHovered = false, 2000);
                });

                function autoScroll() {
                    if (!isHovered) {
                        teamGrid.scrollLeft += scrollStep;
                        if (teamGrid.scrollLeft >= (teamGrid.scrollWidth - teamGrid.clientWidth - 1)) {
                            scrollStep = -0.5;
                        } else if (teamGrid.scrollLeft <= 0) {
                            scrollStep = 0.5;
                        }
                    }
                    requestAnimationFrame(autoScroll);
                }
                requestAnimationFrame(autoScroll);
            }
        });
    </script> -->

    <!-- WORLDWIDE SUPPORT SECTION -->
    <style>
        .ab-us-worldwide {
            padding: 20px 0;
            background: var(--about-bg);
        }
        .ab-worldwide-inner {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            display: flex;
            align-items: center;
            gap: 40px;
        }
        .ab-worldwide-text {
            flex: 1;
        }
        .ab-worldwide-heading {
            color: var(--about-text);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            font-family: 'Inter', sans-serif;
        }
        .ab-worldwide-para {
            color: var(--about-text-muted);
            font-size: 15px;
            line-height: 1.8;
            margin-bottom: 30px;
            text-align: justify;
        }
        .ab-worldwide-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .ab-worldwide-btn {
            background: #232222;
            color: #fff;
            border: 1px solid #333;
            padding: 10px 30px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 700;
            font-family: 'Inter', sans-serif;
            text-transform: uppercase;
        }
        .ab-worldwide-map-container {
            flex: 1.2;
            position: relative;
        }
        .ab-worldwide-map-bg {
            width: 100%;
            display: block;
            border-radius: 24px;
            box-shadow: 0 0 45px rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        .ab-map-wrapper {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 85%;
        }
        .ab-worldwide-map-img {
            width: 100%;
            height: auto;
            opacity: 0.82;
            display: block;
        }
        .ab-map-dot {
            position: absolute;
            width: 12px;
            height: 12px;
            background-color: #F5C541;
            border-radius: 50%;
            box-shadow: 0 0 28px 0 rgba(245, 197, 65, 0.55), 0 0 0 7px rgba(245, 197, 65, 0.15);
            transform: translate(-50%, -50%);
            z-index: 2;
        }
        @media (max-width: 860px) {
            .ab-worldwide-inner {
                flex-direction: column-reverse;
            }
            .ab-worldwide-map-container {
                width: 100%;
                margin-top: 0;
                margin-bottom: 30px;
            }
            .ab-worldwide-buttons {
                flex-wrap: nowrap;
                gap: 10px;
            }
            .ab-worldwide-btn {
                flex: 1;
                padding: 10px 5px;
                text-align: center;
                font-size: 12px;
            }
        }
    </style>
    <section class="ab-us-worldwide">
        <div class="ab-worldwide-inner">
            <div class="ab-worldwide-text">
                <h2 class="ab-worldwide-heading">Worldwide Packaging Support</h2>
                <p class="ab-worldwide-para">
                    PremiumBoxes have customers worldwide, therefore, we ship our orders to all the corners of the world. To make the shipping process authentic, easier, and trustworthy, we use trusted, reliable and established carriers. For shipping, we use the services of UPS, FedEx, and DHL. Cost depends on several factors. It can be varying to destination country, package size, and delivery requirements. International orders cost extra charges because of taxes and import restrictions.
                </p>
                <div class="ab-worldwide-buttons">
                    <div class="ab-worldwide-btn">UPS</div>
                    <div class="ab-worldwide-btn">FedEx</div>
                    <div class="ab-worldwide-btn">DHL</div>
                </div>
            </div>
            <div class="ab-worldwide-map-container">
                <img src="{{ url('uploads/world-map-background.png') }}" class="ab-worldwide-map-bg" alt="world map background">
                <div class="ab-map-wrapper">
                    <img src="{{ url('uploads/world-map.png') }}" class="ab-worldwide-map-img" alt="world map">
                    <!-- Dots -->
                    <div class="ab-map-dot" style="top: 37%; left: 20%;"></div>
                    <div class="ab-map-dot" style="top: 80%; left: 38%;"></div>
                    <div class="ab-map-dot" style="top: 30%; left: 45%;"></div>
                    <div class="ab-map-dot" style="top: 45%; left: 70%;"></div>
                    <div class="ab-map-dot" style="top: 78%; left: 81%;"></div>
                </div>
            </div>
        </div>
    </section>

@include('web/footer')
