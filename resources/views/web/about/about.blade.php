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
    aspect-ratio: 1 / 1;
}

.ab-us-gold-accent {
    position: absolute;
    left: -10px;
    bottom: -10px;
    width: calc(100% - 8px);
    height: calc(100% - 8px);
    z-index: 1;
    border-radius: 2px;
    background: var(--about-gold);
}

.ab-us-story-img {
    position: absolute;
    inset: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    border-radius: 2px;
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
    padding-block: 44px 56px;
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
    min-width: 0;
    min-height: 300px;
    padding: 34px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 14px;
}

.ab-us-process-icon {
    width: 58px;
    height: 58px;
}

.ab-us-process-icon img {
    width: 46px !important;
    height: 46px !important;
    object-fit: contain;
}

.ab-us-process-title {
    margin: 0;
    color: #fff;
    font-size: clamp(15px, 1vw, 18px) !important;
    font-weight: 700;
    line-height: 1.3;
}

.ab-us-process-text {
    max-width: 240px;
    margin: 0;
    color: rgba(255,255,255,.64);
    font-size: clamp(16px, .82vw, 14px) !important;
    line-height: 1.55;
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

    .ab-us-story-container { gap: 40px; }
    .ab-us-story-img-wrap { width: calc(100% - 50px); max-width: 520px; margin-left: 30px; margin-right: 20px; margin-bottom: 20px; }
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

    .ab-us-inner { min-height: 320px; padding-block: 14px 34px; }

    .ab-us-hero-heading { font-size: 26px !important; }
    .ab-us-hero-heading br { display: none; }
    .ab-us-hero-para { font-size: 13px; }

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
    .ab-us-process-cards { grid-template-columns: 1fr; }

    .ab-us-why-card,
    .ab-us-why-feature-img { min-height: 230px; }
    .ab-us-why-feature-img { display: none; }

    .ab-us-numbers-stats { gap: 24px 0; }
    .ab-us-numbers-stat { padding-inline: 12px; }
    .ab-us-numbers-stat::after { height: 42px !important; }
    .ab-us-stat-lbl { font-size: 11px; }

    .ab-us-process-card { min-height: 260px; }
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
                    Crafting <span class="ab-us-gold">Premium Packaging</span><br>
                    That Tells Your Story
                </h1>
                <p class="ab-us-hero-para">
                    We are more than a box manufacturer — we are your brand's silent ambassador.
                    Every rigid box we create is a fusion of art, engineering, and passion.
                </p>
            </div>
        </div>
    </section>

    <!-- OUR STORY SECTION -->
    <section class="ab-us-story">
        <div class="ab-us-story-container">
            <div class="ab-us-story-img-wrap">
                <div class="ab-us-gold-accent" aria-hidden="true"></div>
                <img
                    src="{{ url('images/about/our-story.jpg') }}"
                    alt="premium rigid packaging boxes" title="Premium Rigid Packaging Boxes"
                    class="ab-us-story-img"
                >
            </div>
            <div class="ab-us-story-content">
               
                <h2 class="ab-us-story-heading">
                    Built on Quality, Driven by Innovation
                </h2>
                <p class="ab-us-story-para">
                    We specialize in creating premium custom rigid boxes and luxury packaging
                    solutions for brands that value quality, presentation, and customer experience.
                    From apparel and cosmetics to jewelry and gift packaging, we help businesses
                    elevate their products through innovative designs, exceptional craftsmanship,
                    and fully customized packaging solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION -->
    <section class="ab-us-why">
        <div class="ab-us-why-inner">

            <div class="ab-us-why-left">
                <div class="ab-us-why-copy">
                
                    <h2 class="ab-us-why-title">Packaging Excellence You Can Trust</h2>
                    <p class="ab-us-why-desc">
                        We craft premium custom packaging that elevates your brand and
                        delivers a flawless unboxing experience.
                    </p>
                </div>
                <div class="ab-us-why-cards-row">
                    <div class="ab-us-why-card">
                        <div class="ab-us-why-icon"><img src="{{ url('images/about/circular- packaging -solutions.svg') }}" style="width:24px; height:24px;"></div>
                        <h3>Circular Packaging Solutions</h3>
                        <p>We offer sustainable circular packaging solutions designed to reduce waste while maintaining premium quality and structural strength standards.</p>
                    </div>
                    <div class="ab-us-why-card">
                        <div class="ab-us-why-icon"><img src="{{ url('images/about/price.svg') }}" style="width:24px; height:24px;"></div>
                        <h3>Competitive Prices</h3>
                        <p>We deliver high quality packaging solutions at competitive prices ensuring value for money without compromising design or durability.</p>
                    </div>
                </div>
            </div>

            <div class="ab-us-why-right">
                <div class="ab-us-why-cards-row">
                    <div class="ab-us-why-card">
                        <div class="ab-us-why-icon"><img src="{{ url('images/about/Premium-quality.svg') }}" style="width:24px; height:24px;"></div>
                        <h3>Premium Quality</h3>
                        <p>We use high-quality materials and precision craftsmanship to deliver packaging that reflects your brand's value.</p>
                    </div>
                    <div class="ab-us-why-card">
                        <div class="ab-us-why-icon"><img src="{{ url('images/about/end-toend-service.svg') }}" style="width:24px; height:24px;"></div>
                        <h3>End To End Service</h3>
                        <p>We provide complete end to end packaging solutions from concept design to production and final delivery support.</p>
                    </div>
                </div>
                <div class="ab-us-why-feature-img">
                    <img src="{{ url('images/about/packaging-excellence.jpg') }}" alt="luxury packaging" title="Luxury Packaging">
                </div>
            </div>

        </div>
    </section>

    <!-- NUMBERS SECTION -->
    <section class="ab-us-numbers">
        <div class="ab-us-numbers-inner">
            <div class="ab-us-numbers-left">
               
                <h2 class="ab-us-numbers-heading">Numbers That Define<br>Our Excellence</h2>
            </div>
            <div class="ab-us-numbers-right">
                <p class="ab-us-numbers-para">We take pride in delivering premium packaging solutions backed by years of experience and expertise. Our portfolio includes thousands of successfully completed projects across multiple industries worldwide. We serve clients in over 30 countries with reliable and consistent service standards. Our focus is on maintaining exceptional quality in every packaging solution we create.</p>
            </div>
        </div>

        <div class="ab-us-numbers-stats">
            <div class="ab-us-numbers-stat ab-us-stat-sep">
                <span class="ab-us-stat-num">10+</span>
                <span class="ab-us-stat-lbl">Years Experience</span>
            </div>
            <div class="ab-us-numbers-stat ab-us-stat-sep">
                <span class="ab-us-stat-num">500+</span>
                <span class="ab-us-stat-lbl">Projects</span>
            </div>
            <div class="ab-us-numbers-stat ab-us-stat-sep">
                <span class="ab-us-stat-num">30+</span>
                <span class="ab-us-stat-lbl">Countries Serve</span>
            </div>
            <div class="ab-us-numbers-stat">
                <span class="ab-us-stat-num">98%</span>
                <span class="ab-us-stat-lbl">Satisfaction</span>
            </div>
        </div>
    </section>

    <!-- OUR PROCESS SECTION -->
    <section class="ab-us-process">
        <div class="ab-us-process-inner">
       
        <h2 class="ab-us-process-heading">From Concept to Creation</h2>
        <p class="ab-us-process-sub">
            We follow a simple process that turns your ideas into premium packaging through
            design, production, and delivery.
        </p>
        <div class="ab-us-process-cards">
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('images/about/sumbit.svg') }}" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Submit Your Brief</h3>
                <p class="ab-us-process-text">Share your product dimensions, quantities, and vision. We respond within 24 hours with initial recommendations and a structural concept tailored to your needs.</p>
            </div>
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('images/about/design.svg') }}" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Design &amp; Quote</h3>
                <p class="ab-us-process-text">You receive a structural die line, finish spec sheet, and transparent pricing. Revisions are included at no extra cost — no surprises, no hidden fees.</p>
            </div>
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('images/about/approve.svg') }}" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Approve &amp; Produce</h3>
                <p class="ab-us-process-text">Once artwork is approved, production begins immediately in our certified manufacturing facility. Pre-production physical samples available before full run.</p>
            </div>
            <div class="ab-us-process-card">
                <div class="ab-us-process-icon"><img src="{{ url('images/about/shipping.svg') }}" style="width:28px; height:28px;"></div>
                <h3 class="ab-us-process-title">Ship &amp; Arrive</h3>
                <p class="ab-us-process-text">Your order ships with full tracking and quality documentation. Custom orders take approximately 15 days production, plus shipping.</p>
            </div>
        </div>
        </div>
    </section>

@include('web/components_cta_banner')

@include('web/footer')
