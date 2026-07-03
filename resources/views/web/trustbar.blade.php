<style>
/* --- TRUST BAR --- */
.trust-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  max-width: 1440px;
  height: 60px;
  margin: 0 auto;
  padding: 0 60px;
  box-sizing: border-box;
  gap: 60px;
}
.trust-reviews {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-shrink: 0;
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
.trust-logos {
  display: flex;
  align-items: center;
  width: auto;
  max-width: 850px;
  height: 100%;
  overflow: hidden;
  position: relative;
  flex: 1;
  padding: 0 20px;
}
@keyframes scroll-logos {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}
.trust-logos-track {
  display: flex;
  gap: 50px;
  animation: scroll-logos 30s linear infinite;
  will-change: transform;
  padding-left: 0;
}
.trust-logos-track:hover {
  animation-play-state: paused;
}
.logo-item {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 100px;
  width: 100px;
  height: 40px;
  opacity: 0.8;
  transition: opacity 0.3s ease, transform 0.3s ease;
  flex-shrink: 0;
}
.logo-item img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  filter: grayscale(100%) brightness(0) invert(77%);
}
.logo-item:hover {
  opacity: 1;
  transform: scale(1.05);
}
@media (max-width: 768px) {
  .trust-bar {
    height: auto;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px 12px;
    gap: 16px;
  }
  .trust-reviews {
    justify-content: center;
    width: 100%;
    gap: 8px;
  }
  .trust-logos {
    display: flex !important;
    width: 100%;
    overflow: hidden;
  }
  .trust-logos-track {
    display: flex;
    gap: 30px;
    animation: scroll-logos 25s linear infinite;
  }
  .logo-item {
    flex: 0 0 auto;
    width: 75px;
    height: 30px;
    opacity: 0.8;
  }
}
</style>

<section class="trust-bar-section" style="background-color: var(--bg-darker); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); width: 100%;">
    <div class="trust-bar">
        <div class="trust-reviews">
            <div class="stars">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <a href="#" class="review-link">5.0 Google Reviews</a>
        </div>
        <div class="trust-logos">
            <div class="trust-logos-track">
                <div class="logo-item">
                    <img src="{{ asset('uploads/adidas-logo.png') }}" alt="Adidas Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/Google-logo.png') }}" alt="Google Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/hp-logo.png') }}" alt="HP Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/unilever-logo.webp') }}" alt="Unilever Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/Benefit-Logo.png') }}" alt="Benefit Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/flowgardens-logo.webp') }}" alt="Flow Gardens Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/her-piece-peace-logo.webp') }}" alt="Her Piece Peace Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/neat-logo.webp') }}" alt="Neat Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/red-bull-logo.png') }}" alt="Red Bull Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/springtastic-logo.webp') }}" alt="Springtastic Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/voli-logo.webp') }}" alt="Voli Logo">
                </div>

                <!-- Duplicate set 1 -->
                <div class="logo-item">
                    <img src="{{ asset('uploads/adidas-logo.png') }}" alt="Adidas Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/Google-logo.png') }}" alt="Google Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/hp-logo.png') }}" alt="HP Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/unilever-logo.webp') }}" alt="Unilever Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/Benefit-Logo.png') }}" alt="Benefit Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/flowgardens-logo.webp') }}" alt="Flow Gardens Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/her-piece-peace-logo.webp') }}" alt="Her Piece Peace Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/neat-logo.webp') }}" alt="Neat Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/red-bull-logo.png') }}" alt="Red Bull Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/springtastic-logo.webp') }}" alt="Springtastic Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/voli-logo.webp') }}" alt="Voli Logo">
                </div>

                <!-- Duplicate set 2 for extra smooth loop -->
                <div class="logo-item">
                    <img src="{{ asset('uploads/adidas-logo.png') }}" alt="Adidas Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/Google-logo.png') }}" alt="Google Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/hp-logo.png') }}" alt="HP Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/unilever-logo.webp') }}" alt="Unilever Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('uploads/Benefit-Logo.png') }}" alt="Benefit Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/flowgardens-logo.webp') }}" alt="Flow Gardens Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/her-piece-peace-logo.webp') }}" alt="Her Piece Peace Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/neat-logo.webp') }}" alt="Neat Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/red-bull-logo.png') }}" alt="Red Bull Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/springtastic-logo.webp') }}" alt="Springtastic Logo">
                </div>
                <div class="logo-item">
                    <img src="{{ asset('images/voli-logo.webp') }}" alt="Voli Logo">
                </div>
            </div>
        </div>
    </div>
</section>
