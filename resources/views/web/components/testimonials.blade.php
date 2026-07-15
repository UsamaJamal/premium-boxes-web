<style>
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

.testimonials-header h2,
.testimonials-header .testimonials-title {
    display: block;
    font-family: var(--font-heading);
    font-weight: 600;
    line-height: 1.2;
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

/* Reduce gap between Testimonials and Quote section */
  .testimonials-section {
    padding-bottom: 10px !important;
    margin-bottom: 0 !important;
  }

</style>
<!-- ==========================================
             TESTIMONIALS SECTION
        =========================================== -->
        <section class="testimonials-section">
            <div class="testimonials-wrap">

                <div class="testimonials-header">
                    <!-- <span class="section-badge-text">TESTIMONIALS</span> -->
                    <span class="testimonials-title" style="display: block;">Hear from Our Happy Customers</span>
                    <p> Let’s hear from our customers, what they say about our services.</p>
                </div>

                <div class="testimonial-grid">
                    @foreach($testimonial as $testi)
                    <div class="testimonial-card">
                        <img src="{{ asset('images/' . $testi->image) }}" alt="{{ strtolower(str_replace('-', ' ', $testi->name)) }}" class="avatar-img" title="{{ ucwords(strtolower(str_replace('-', ' ', $testi->name))) }}">
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
            
            function collapseAllCards() {
                document.querySelectorAll('.testimonial-text.expanded').forEach(p => {
                    p.classList.remove('expanded');
                    if(p.nextElementSibling && p.nextElementSibling.classList.contains('read-more-btn')) {
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

            // Collapse cards when swiping/scrolling the grid
            if (grid) {
                let scrollTimeout;
                grid.addEventListener('scroll', function() {
                    clearTimeout(scrollTimeout);
                    scrollTimeout = setTimeout(collapseAllCards, 150);
                });
            }

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
                stopAutoScroll();
                scrollToCard(currentIndex - 1);
                startAutoScroll();
            };

            nextBtn.onclick = function() {
                stopAutoScroll();
                scrollToCard(currentIndex + 1);
                startAutoScroll();
            };

            // Track scroll position
            grid.addEventListener('scroll', function() {
                const gap = window.innerWidth > 992 ? 25 : 0;
                const cardWidth = cards[0].offsetWidth + gap;
                currentIndex = Math.round(grid.scrollLeft / cardWidth);
            });

            // Auto Scroll Logic
            let autoScrollInterval;
            function startAutoScroll() {
                autoScrollInterval = setInterval(function() {
                    const visibleCards = window.innerWidth > 992 ? 3 : 1;
                    const maxIndex = totalCards - visibleCards;
                    let nextIndex = currentIndex + 1;
                    if (nextIndex > maxIndex) {
                        nextIndex = 0; // Loop back to start
                    }
                    scrollToCard(nextIndex);
                }, 4000); // Scroll every 4 seconds
            }

            function stopAutoScroll() {
                clearInterval(autoScrollInterval);
            }

            startAutoScroll();

            // Pause auto scroll when user hovers or touches
            grid.addEventListener('mouseenter', stopAutoScroll);
            grid.addEventListener('mouseleave', startAutoScroll);
            grid.addEventListener('touchstart', stopAutoScroll);
            grid.addEventListener('touchend', startAutoScroll);
        })();
        </script>