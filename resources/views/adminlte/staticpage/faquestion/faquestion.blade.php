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
    height: 320px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 0 20px;
    overflow: hidden;
    border-radius: 0;
    margin: 0;

    background-image: url('./hero-bg.png');
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
}

/* Dark overlay */
.faq-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.45) 0%,
        rgba(0, 0, 0, 0.65) 50%,
        rgba(0, 0, 0, 0.80) 100%
    );
    z-index: 0;
}

/* All children above overlay */
.faq-hero > * {
    position: relative;
    z-index: 1;
}

/* ============================================
   BREADCRUMB
   ============================================ */
.faq-breadcrumb {
    position: absolute;
    top: 20px;
    left: 50%;
    transform: translateX(-440px);
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    color: #cccccc;
}

.faq-bc-home {
    font-size: 14px;
    color: #c9a84c;
    line-height: 1;
    cursor: pointer;
    transition: color 0.25s ease;
    display: flex;
    align-items: center;
}

.faq-bc-home:hover { color: #ffffff; }

.faq-bc-sep {
    color: #888888;
    font-size: 13px;
    line-height: 1;
    display: flex;
    align-items: center;
}

.faq-bc-current {
    color: #dddddd;
    font-weight: 500;
    font-size: 13px;
    line-height: 1;
    letter-spacing: 0.3px;
    cursor: pointer;
    transition: color 0.25s ease;
    display: flex;
    align-items: center;
}

.faq-bc-current:hover { color: #c9a84c; }

/* ============================================
   HERO CONTENT WRAPPER
   ============================================ */
.faq-hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0;
}

/* ============================================
   BADGE
   ============================================ */
.faq-badge {
    display: inline-block;
    border: 1.5px solid #3a3a3a;
    color: #ffffff;
    font-size: 10.5px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 5px 22px;
    border-radius: 6px;
    margin-bottom: 22px;
    background: transparent;
    cursor: pointer;
    transition: background-color 0.25s ease, color 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
}

.faq-badge:hover {
    background-color: rgb(201, 168, 76);
    color: #0d0d0d;
    border-color: rgb(201, 168, 76);
    box-shadow: 0 0 14px rgba(201, 168, 76, 0.5);
}

/* ============================================
   HEADING
   ============================================ */
.faq-heading {
    font-size: clamp(24px, 3.5vw, 42px);
    font-weight: 800;
    line-height: 1.2;
    color: #ffffff;
    margin-bottom: 14px;
    text-shadow: 0 2px 12px rgba(0,0,0,0.5);
}

.faq-heading-gold {
    color: #c9a84c;
    display: block;
}

/* ============================================
   SUBTEXT
   ============================================ */
.faq-subtext {
    font-size: clamp(12px, 1.3vw, 14.5px);
    font-weight: 400;
    line-height: 1.8;
    color: #cccccc;
    max-width: 460px;
    margin: 0 auto;
    text-shadow: 0 1px 6px rgba(0,0,0,0.6);
}

/* ============================================
   FAQ FILTER BUTTONS
   ============================================ */
.faq-filters {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 12px;
    padding: 16px 20px;
    background-color: #1a1a1a;
    position: sticky;
    top: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 16px rgba(0, 0, 0, 0.7);
}

.faq-filters.stuck {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
}

/* Inner scroll wrapper for buttons */
.faq-filter-scroll {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 100%;
}

.faq-filter-btn {
    padding: 11px 26px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    border: 1.5px solid #3a3a3a;
    background-color: transparent;
    color: #dddddd;
    letter-spacing: 0.3px;
    transition: background-color 0.25s ease, color 0.25s ease,
                border-color 0.25s ease, box-shadow 0.25s ease,
                transform 0.25s ease;
}/* removed hover: .faq-filter-btn:hover { ... } */

.faq-filter-btn.active {
    background-color: #c9a84c;
    color: #0d0d0d;
    border-color: #c9a84c;
    box-shadow: 0 4px 16px rgba(201, 168, 76, 0.35);
}

/* ============================================
   FAQ MAIN CONTENT AREA
   ============================================ */
.faq-main {
    background-color: #1a1a1a;
    padding: 40px 60px 80px;
    max-width: 1000px;
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
    scroll-margin-top: 70px;
}

.faq-section-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 20px;
    padding-left: 14px;
    border-left: 4px solid #c9a84c;
    line-height: 1.2;
}

/* ============================================
   FAQ ACCORDION ITEMS
   ============================================ */
.faq-list {
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.faq-item {
    background-color: #242424;
    border-radius: 6px;
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
    padding: 16px 20px;
    background: transparent;
    border: none;
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 500;
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
    font-size: 20px;
    font-weight: 300;
    color: #c9a84c;
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
    font-size: 1rem;
    line-height: 1.75;
    padding-bottom: 16px;
    margin: 0;
    padding-top: 16px;
}

.faq-item.open .faq-question {
    color: #000000;
    background-color: #c9a84c;
    border-radius: 6px 6px 0 0;
}

.faq-item.open .faq-answer {
    opacity: 1;
    padding: 0 20px;
}

/* ============================================
   MOBILE RESPONSIVE — max 768px
   ============================================ */
@media (max-width: 768px) {

    /* Hero — square on mobile */
    .faq-hero {
        height: 100vw;
        min-height: 100vw;
        max-height: 520px;
        width: 100%;
        margin: 0;
        border-radius: 0;
    }

    /* FAQS badge — dark background, gold border pill */
    .faq-badge {
        font-size: 2.8vw;
        padding: 1.5vw 6vw;
        letter-spacing: 0.4em;
        margin-bottom: 4vw;
        border-radius: 50px;
        border: 1.5px solid rgb(201, 168, 76);
        color: rgb(201, 168, 76);
        background: rgba(0, 0, 0, 0.6);
    }

    .faq-heading {
        font-size: 7.5vw;
        margin-bottom: 4vw;
        line-height: 1.15;
        font-weight: 900;
    }

    .faq-subtext {
        font-size: 3.8vw;
        line-height: 1.9;
        max-width: 95%;
        color: #cccccc;
    }

    /* Breadcrumb */
    .faq-breadcrumb {
        top: 3vw;
        left: 3.5vw;
        transform: none;
        font-size: 3vw;
    }

    /* Filter buttons — sticky + horizontally scrollable inner */
    .faq-filters {
        padding: 3.5vw 0;
        gap: 0;
        flex-wrap: nowrap;
        overflow-x: visible;
        position: sticky;
        top: 0;
        width: 100%;
        box-sizing: border-box;
        cursor: default;
    }

    .faq-filters::-webkit-scrollbar { display: none; }

    .faq-filter-scroll {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        gap: 2.5vw;
        padding: 0 3.5vw;
        width: 100%;
        cursor: grab;
        user-select: none;
        justify-content: flex-start;
    }

    .faq-filter-scroll::-webkit-scrollbar { display: none; }

    .faq-filter-btn {
        padding: 3vw 0;
        font-size: 3.3vw;
        font-weight: 600;
        border-radius: 6px;
        flex: 0 0 42%;
        width: 42%;
        min-width: 42%;
        white-space: nowrap;
        text-align: center;
    }

    /* FAQ Main */
    .faq-main {
        padding: 6vw 3.5vw 15vw;
        max-width: 100%;
    }

    /* Section title */
    .faq-section-title {
        font-size: 4.5vw;
        margin-bottom: 3.5vw;
    }

    .faq-section {
        margin-bottom: 9vw;
        scroll-margin-top: 80px;
    }

    /* Accordion */
    .faq-item {
        border-radius: 8px;
    }

    .faq-question {
        font-size: 3.3vw;
        padding: 3.5vw;
    }

    .faq-icon {
        font-size: 4.5vw;
    }

    .faq-answer p {
        font-size: 3.2vw;
        padding-bottom: 3vw;
    }

    .faq-list {
        gap: 1.5vw;
    }
}

/* ============================================
   SMALL MOBILE — max 480px
   ============================================ */
@media (max-width: 480px) {

    .faq-hero {
        height: 100vw;
        min-height: 100vw;
        max-height: 480px;
    }

    .faq-heading {
        font-size: 8vw;
    }

    .faq-subtext {
        font-size: 4vw;
    }

    .filter-btn {
        padding: 3vw 0;
        font-size: 3.2vw;
        flex: 0 0 42%;
        min-width: 42%;
        white-space: nowrap;
        text-align: center;
        max-width: none;
    }

    .faq-main {
        padding: 5vw 3vw 12vw;
    }

    .faq-question {
        font-size: 3.2vw;
        padding: 3vw;
    }
}
    <!-- FAQ Hero Banner -->
    <section class="faq-hero">
        <nav class="faq-breadcrumb">
            <span class="faq-bc-home">&#8962;</span>
            <span class="faq-bc-sep">&#187;</span>
            <span class="faq-bc-current">FAQs</span>
        </nav>
        <div class="faq-hero-content">
            <button class="faq-badge">FAQS</button>
            <h1 class="faq-heading">
                Answers to Every
                <span class="faq-heading-gold">Packaging Question</span>
            </h1>
            <p class="faq-subtext">
                Find clear guidance on custom rigid boxes, materials, finishes, pricing, production timelines, and shipping all in one place.
            </p>
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
                    <div class="faq-answer"><p>For small orders, digital printing is typically the most cost-effective method as it requires no plate setup and allows for shorter runs.</p></div>
                </div>
                <div class="faq-item">
                    <h3 class="faq-question">Which printing method is best for small orders? <span class="faq-icon">+</span></h3>
                    <div class="faq-answer"><p>Digital printing works best for smaller quantities while offset printing becomes more economical at higher volumes.</p></div>
                </div>
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
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const targetId = btn.getAttribute('data-target');

                // Turant filter bar scroll karo
                setActiveBtn(targetId);

                // Smooth scroll to the target section
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    const filterBarHeight = document.querySelector('.faq-filters').offsetHeight;
                    const extraOffset = 20;
                    const sectionTop = targetSection.getBoundingClientRect().top + window.scrollY - filterBarHeight - extraOffset;
                    window.scrollTo({ top: sectionTop, behavior: 'smooth' });
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
            const filterBarHeight = document.querySelector('.faq-filters').offsetHeight;
            const triggerPoint = filterBarHeight + 30; // Just below sticky filter bar

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