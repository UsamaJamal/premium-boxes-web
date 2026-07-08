@include('web/header')

<style>
/* { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: #111111;
    color: #ffffff;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
} */

.ab-us-hero {
    margin-bottom: 0px; 
    position: relative;
    width: 100%;
    height: 410px;
    display: flex;
    align-items: stretch;
    overflow: hidden;
    background-image: url("{{ asset('images/about/packaging-excellence.jpg') }}");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.ab-us-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.75);
    z-index: 0;
}

.ab-us-inner {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1400px;
    margin-inline: auto;
    padding: 60px 60px 80px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 640px;
}

.ab-us-breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #D4AF37;
    white-space: nowrap;
    margin-bottom: auto;
    align-self: flex-start;
}
.ab-us-bc-icon  { font-size: 13px; color: #D4AF37; }
.ab-us-bc-link  { color: #D4AF37; text-decoration: none; transition: opacity 0.2s; }
.ab-us-bc-link:hover { opacity: 0.75; }
.ab-us-bc-sep   { color: #D4AF37; font-size: 11px; }
.ab-us-bc-current { color: #D4AF37; font-weight: 500; }

.ab-us-hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    max-width: 900px;
    margin-inline: auto;
    flex: 1;
    justify-content: center;
    padding-top: 24px;
    gap: 0;
}

.ab-us-hero-badge {
    margin-top: 91px;
    display: inline-flex;
    border: 1px solid #D4AF37;
    color: #D4AF37;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 9px 28px;
    border-radius: 30px;
    background: transparent;
    margin-bottom: 28px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}
.ab-us-hero-badge:hover { background: #D4AF37; color: #111111; }

.ab-us-hero-heading {
    margin-top: -66px;
    font-size: 42px;
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: 0.04em;
    color: #ffffff;
    margin-bottom: 24px;
    text-align: center;
}
.ab-us-hero-heading br { display: inline; }
.ab-us-gold { color: #F5C542; }

.ab-us-hero-para {
    font-size: clamp(14px, 1.2vw, 18px);
    font-weight: 400;
    line-height: 1.75;
    color: #C5C5C5;
    max-width: 620px;
    text-align: center;
}

@media (max-width: 1024px) {
    .ab-us-hero-heading { font-size: 36px; line-height: 44px; }
    .ab-us-hero-para    { font-size: 16px; }
    .ab-us-inner        { padding: 48px 40px 64px; }
}

@media (max-width: 680px) {
    .ab-us-hero { height: auto; min-height: 90vw; }
    .ab-us-overlay { background: linear-gradient(to bottom, rgba(0,0,0,0.78) 0%, rgba(0,0,0,0.65) 100%); }
    .ab-us-inner { padding: 18vw 5vw 10vw; min-height: unset; justify-content: flex-start; }
    .ab-us-breadcrumb { display: none; }
    .ab-us-hero-badge { font-size: 3vw; padding: 2vw 8vw; margin-bottom: 5vw; letter-spacing: 0.3em; border-radius: 50px; }
    .ab-us-hero-content { justify-content: center; padding-top: 0; align-items: center; text-align: center; }
    .ab-us-hero-heading { margin-top: 100px; font-size: 9.5vw; line-height: 1.25; margin-bottom: 4vw; }
    .ab-us-hero-heading br { display: none; }
    .ab-us-hero-para { margin-bottom: 83px; font-size: 4vw; line-height: 1.8; max-width: 100%; }
}

.ab-us-story {
    margin-bottom: -21px;
    width: 100%;
    background-color: #111111;
    padding: 20px 48px 20px 48px;
}

.ab-us-story-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 70px;
    max-width: 1200px;
    margin-inline: auto;
}

.ab-us-story-img-wrap {
    position: relative;
    flex-shrink: 0;
    width: 440px;
    height: 440px;
}

.ab-us-gold-accent {
    position: absolute;
    bottom: 0;
    left: 0;
    width: calc(100% - 18px);
    height: calc(100% - 18px);
    background: #D4AF37;
    z-index: 1;
    border-radius: 4px;
}

.ab-us-story-img {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 2;
    width: calc(100% - 18px);
    height: calc(100% - 18px);
    object-fit: cover;
    display: block;
    border-radius: 4px;
}

.ab-us-story-content {
    width: 600px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.ab-us-story-badge {
    display: inline-flex;
    align-items: center;
    height: 36px;
    padding: 0 18px;
    border: 1.5px solid #D4AF37;
    color: #D4AF37;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    border-radius: 50px;
    background: transparent;
    margin-bottom: 24px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}
.ab-us-story-badge:hover { background: #D4AF37; color: #111111; }

.ab-us-story-heading {
    font-size: 32px;
    font-weight: 700;
    line-height: 1.2;
    color: #ffffff;
    margin-bottom: 20px;
    letter-spacing: -0.3px;
}

.ab-us-story-para {
    font-size: 13px;
    font-weight: 400;
    line-height: 1.9;
    color: #C5C5C5;
    max-width: 590px;
    text-align: left;
    margin-top: 20px;
}

@media (max-width: 1100px) {
    .ab-us-story-container { gap: 48px; }
    .ab-us-story-img-wrap  { width: 380px; height: 380px; }
    .ab-us-story-heading   { font-size: 28px; }
    .ab-us-story-content   { width: auto; flex: 1; }
}

@media (max-width: 768px) {
    .ab-us-story { margin-bottom: -78px; padding: 8vw 5vw 10vw; }
    .ab-us-story-container { flex-direction: column; gap: 8vw; align-items: flex-start; }
    .ab-us-story-img-wrap  { width: 100%; height: 76vw; }
    .ab-us-gold-accent     { width: calc(100% - 4vw); height: calc(100% - 4vw); border-radius: 6px; }
    .ab-us-story-img       { width: calc(100% - 4vw); height: calc(100% - 4vw); border-radius: 6px; }
    .ab-us-story-content   { width: 100%; }
    .ab-us-story-heading   { font-size: 6.5vw; }
    .ab-us-story-badge     { font-size: 2.8vw; height: auto; padding: 1.5vw 4vw; }
    .ab-us-story-para      { font-size: 4.2vw; line-height: 1.85; text-align: justify; max-width: 100%; }
}

.ab-us-why {
    width: 100%;
    background-color: #111111;
    padding: 20px 48px 20px 48px;
}

.ab-us-why-inner {
    max-width: 1200px;
    margin-inline: auto;
    display: flex;
    gap: 52px;
    align-items: stretch;
}

.ab-us-why-left {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    gap: 16px;
}
.ab-us-why-left .ab-us-why-cards-row { margin-top: 8px; width: 100%; }

.ab-us-why-badge {
    display: inline-flex;
    align-items: center;
    height: 34px;
    padding: 0 16px;
    border: 1px solid #D4AF37;
    color: #D4AF37;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    border-radius: 50px;
    background: transparent;
    margin-bottom: 16px;
    width: fit-content;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}
.ab-us-why-badge:hover { background: #D4AF37; color: #111111; }

.ab-us-why-title {
     font-size: 32px; font-weight: 700; line-height: 1.25; color: #ffffff; margin-bottom: 12px; }
.ab-us-why-desc  { font-size: 14px; line-height: 1.75; color: rgba(255,255,255,0.65); margin-bottom: 0; }

.ab-us-why-right {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.ab-us-why-cards-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
    align-items: stretch;
}

.ab-us-why-card {
    background-color: #1e1e1e;
    border: 1px solid #2a2a2a;
    border-radius: 12px;
    padding: 28px 22px;
    display: flex;
    flex-direction: column;
    gap: 14px;
    align-items: center;
    text-align: center;
    transition: border-color 0.2s;
    overflow: hidden;
}
.ab-us-why-card:hover { border-color: #D4AF37; }

.ab-us-why-icon {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    border: 1.5px solid #D4AF37;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #D4AF37;
    font-size: 17px;
}
.ab-us-why-card h3 { font-size: 14px; font-weight: 700; color: #ffffff; line-height: 1.3; }
.ab-us-why-card p  { font-size: 12.5px; color: rgba(255,255,255,0.55); line-height: 1.7; }

.ab-us-why-feature-img {
    border-radius: 12px;
    overflow: hidden;
    flex: 1;
    min-height: 200px;
}
.ab-us-why-feature-img img { width: 100%; height: 100%; object-fit: cover; display: block; }

@media (max-width: 1024px) {
    .ab-us-why-inner { flex-direction: column; gap: 16px; }
    .ab-us-why-cards-row { grid-template-columns: 1fr 1fr; }
}

@media (max-width: 600px) {
    .ab-us-why { padding: 10vw 5vw; }
    .ab-us-why-inner { flex-direction: column; gap: 0; width: 100%; }
    .ab-us-why-left  { align-items: center; text-align: center; gap: 3vw; margin-bottom: 6vw; }
    .ab-us-why-badge { font-size: 3vw; padding: 1.8vw 6vw; letter-spacing: 0.3em; }
    .ab-us-why-title { font-size: 7.5vw; line-height: 1.2; text-align: center; font-weight: 800; }
    .ab-us-why-desc  { font-size: 4vw; line-height: 1.75; text-align: center; }
    .ab-us-why-cards-row { grid-template-columns: 1fr; gap: 4vw; }
    .ab-us-why-card  { padding: 7vw 6vw; gap: 3vw; }
    .ab-us-why-icon  { width: 13vw; height: 13vw; font-size: 5.5vw; }
    .ab-us-why-card h3 { font-size: 4.5vw; }
    .ab-us-why-card p  { font-size: 3.8vw; line-height: 1.75; }
    .ab-us-why-right { gap: 4vw; }
    .ab-us-why-feature-img { display: none; }
}

.ab-us-numbers {
    margin-top: -19px;
    width: 100%;
    background-color: #161616;
    padding: 20px 48px 20px 48px;
}

.ab-us-numbers-inner {
    max-width: 1200px;
    margin: 0 auto 48px;
    display: flex;
    align-items: center;
    gap: 60px;
}

.ab-us-numbers-left {
    flex: 0 0 320px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 16px;
}

.ab-us-numbers-badge {
    display: inline-flex;
    align-items: center;
    height: 30px;
    padding: 0 16px;
    border: 1px solid #D4AF37;
    color: #D4AF37;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    border-radius: 50px;
    background: transparent;
    width: fit-content;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}
.ab-us-numbers-badge:hover { background: #D4AF37; color: #111111; }

.ab-us-numbers-heading { font-size: 30px; font-weight: 700; color: #ffffff; line-height: 1.3; margin: 0; }

.ab-us-numbers-right {
    flex: 1;
    display: flex;
    align-items: center;
}

.ab-us-numbers-para {
    margin-left: 152px;
    font-size: 13.5px;
    line-height: 1.85;
    color: rgba(255,255,255,0.58);
    max-width: 580px;
}

.ab-us-numbers-stats {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
}

.ab-us-numbers-stat {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 8px;
    padding: 0 32px;
}
.ab-us-numbers-stat:first-child { padding-left: 0; }

.ab-us-stat-sep { border-right: 1px solid rgba(212,175,55,0.45); }
.ab-us-stat-num { font-size: 36px; font-weight: 700; color: #D4AF37; line-height: 1; }
.ab-us-stat-lbl { font-size: 13px; color: rgba(255,255,255,0.58); }

@media (max-width: 900px) {
    .ab-us-numbers { padding: 10vw 5vw; }
    .ab-us-numbers-inner  { flex-direction: column; align-items: flex-start; gap: 5vw; }
    .ab-us-numbers-left   { flex: none; width: 100%; }
    .ab-us-numbers-right  { width: 100%; }
    .ab-us-numbers-para   { margin-left: 0; font-size: 3.6vw; line-height: 1.75; text-align: justify; max-width: 100%; }
    .ab-us-numbers-stats  { flex-wrap: wrap; gap: 6vw; }
    .ab-us-stat-sep       { border-right: none; }
    .ab-us-numbers-stat   { flex: 0 0 45%; padding: 0; }
    .ab-us-numbers-heading { font-size: 6vw; }
    .ab-us-numbers-badge  { font-size: 2.8vw; padding: 1.5vw 4vw; }
    .ab-us-stat-num       { font-size: 7vw; }
    .ab-us-stat-lbl       { font-size: 3.5vw; }
}
@media (max-width: 500px) {
    .ab-us-numbers-heading { font-size: 7vw; }
    .ab-us-stat-num        { font-size: 8vw; }
    .ab-us-numbers-para    { font-size: 4.2vw; }
}

.ab-us-process {
    width: 100%;
    background-color: #111111;
    padding: 20px 48px 40px 48px;
    text-align: center;
}

.ab-us-process-pill {
    display: inline-flex;
    align-items: center;
    height: 30px;
    padding: 0 18px;
    border: 1px solid #D4AF37;
    color: #D4AF37;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    border-radius: 50px;
    background: transparent;
    margin-bottom: 20px;
    cursor: pointer;
    transition: background 0.3s, color 0.3s;
}
.ab-us-process-pill:hover { background: #D4AF37; color: #111111; }

.ab-us-process-heading {
    font-family: 'Inter', sans-serif;
    font-size: 32px;
    font-weight: 700;
    color: #ffffff;
    line-height: 1.2;
    margin-bottom: 16px;
}

.ab-us-process-sub {
    font-size: 14px;
    color: rgba(255,255,255,0.58);
    line-height: 1.8;
    max-width: 560px;
    margin: 0 auto 48px;
}

.ab-us-process-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.ab-us-process-card {
    background-color: #1a1a1a;
    border: 1px solid rgba(212,175,55,0.5);
    border-radius: 12px;
    padding: 36px 24px;
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 16px;
    transition: border-color 0.25s, transform 0.25s;
}
.ab-us-process-card:hover { border-color: #D4AF37; transform: translateY(-4px); }

.ab-us-process-icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    border: 1.5px solid #D4AF37;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #D4AF37;
    font-size: 20px;
    flex-shrink: 0;
}

.ab-us-process-title { font-size: 15px; font-weight: 700; color: #ffffff; line-height: 1.3; text-align: center; }
.ab-us-process-text  { font-size: 13px; color: rgba(255,255,255,0.55); line-height: 1.8; margin: 0; }

@media (max-width: 1024px) {
    .ab-us-process-cards { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 600px) {
    .ab-us-process { margin-top: -50px; padding: 10vw 5vw; }
    .ab-us-process-cards   { grid-template-columns: 1fr; }
    .ab-us-process-heading { font-size: 6.5vw; }
    .ab-us-process-sub     { font-size: 3.8vw; }
    .ab-us-process-pill    { font-size: 2.8vw; padding: 1.5vw 4vw; }
    .ab-us-process-title   { font-size: 4vw; }
    .ab-us-process-text    { font-size: 3.5vw; }
}
</style>

    <!-- HERO SECTION -->
    <section class="ab-us-hero">
        <div class="ab-us-overlay"></div>
        <div class="ab-us-inner">
            <nav class="ab-us-breadcrumb" aria-label="Breadcrumb">
                <i class="fas fa-house ab-us-bc-icon"></i>
                <a href="premiumboxes.html" class="ab-us-bc-link">Home</a>
                <span class="ab-us-bc-sep">&#62;&#62;</span>
                <span class="ab-us-bc-current">About Us</span>
            </nav>
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
                    alt="Premium rigid packaging boxes"
                    class="ab-us-story-img"
                >
            </div>
            <div class="ab-us-story-content">
                <div class="ab-us-story-badge">OUR STORY</div>
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
               
                <h2 class="ab-us-why-title">Packaging Excellence You Can Trust</h2>
                <p class="ab-us-why-desc">
                    We craft premium custom packaging that elevates your brand and
                    delivers a flawless unboxing experience.
                </p>
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
                    <img src="{{ url('images/about/packaging-excellence.jpg') }}" alt="Luxury Packaging">
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
    </section>

    
    

@include('web/footer')
