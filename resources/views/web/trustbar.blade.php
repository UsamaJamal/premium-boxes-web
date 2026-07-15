<style>
/* ============================================
   TRUST BAR — Clean Rewrite (no conflicts)
   ============================================ */
.tb-section {
    width: 100%;
    background-color: #1a1a1a;
    border-top: 1px solid #333;
    border-bottom: 1px solid #333;
    overflow: hidden;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
}
.tb-inner {
    display: flex;
    flex-direction: row;
    align-items: center;
    width: 100%;
    max-width: 1440px;
    height: 70px;
    margin: 0 auto;
    padding: 0 60px;
    box-sizing: border-box;
    overflow: hidden;
}
.tb-reviews {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
    flex-shrink: 0;
    white-space: nowrap;
}
.tb-stars {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 3px;
}
.tb-stars svg {
    width: 17px;
    height: 17px;
    display: block;
    flex-shrink: 0;
}
.tb-review-link {
    color: #a0a0a0;
    font-size: 0.85rem;
    text-decoration: none;
    white-space: nowrap;
    font-family: 'Inter', sans-serif;
    transition: color 0.3s ease;
}
.tb-review-link:hover {
    color: #f5c542;
    text-decoration: none;
}
.tb-sep {
    width: 1px;
    height: 28px;
    background-color: rgba(255,255,255,0.2);
    margin: 0 24px;
    flex-shrink: 0;
}
.tb-logos-wrap {
    flex: 1;
    min-width: 0;
    overflow: hidden;
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
}
.tb-logos-track {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 55px;
    will-change: transform;
    white-space: nowrap;
    flex-wrap: nowrap;
}
.tb-logo {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 90px;
    height: 36px;
    flex-shrink: 0;
    opacity: 0.75;
    transition: opacity 0.3s ease, transform 0.3s ease;
}
.tb-logo img {
    display: block;
    width: 100%;
    height: 100%;
    max-height: 36px;
    object-fit: contain;
    filter: grayscale(100%) brightness(0) invert(75%);
}
.tb-logo:hover {
    opacity: 1;
    transform: scale(1.06);
}
@media (max-width: 768px) {
    .tb-inner {
        flex-direction: column;
        height: auto;
        padding: 10px 16px;
        gap: 10px;
    }
    .tb-sep {
        display: none;
    }
    .tb-reviews {
        display: none;
    }
    .tb-stars svg {
        width: 14px;
        height: 14px;
    }
    .tb-review-link {
        font-size: 0.75rem;
    }
    .tb-logos-wrap {
        width: 100%;
    }
    .tb-logos-track {
        gap: 20px;
    }
    .tb-logo {
        width: 75px;
        height: 32px;
    }
    .tb-logo img {
        max-height: 26px;
    }
}
@media (max-width: 480px) {
    .tb-logos-track {
        gap: 14px;
    }
    .tb-logo {
        width: 65px;
        height: 28px;
    }
    .tb-logo img {
        max-height: 22px;
    }
}
</style>

<section class="tb-section">
    <div class="tb-inner">

        {{-- Reviews --}}
        <div class="tb-reviews">
            <div class="tb-stars">
                <svg viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                <svg viewBox="0 0 24 24" fill="#f5c542" xmlns="http://www.w3.org/2000/svg"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            </div>
            <a href="#" class="tb-review-link">5.0 Google Reviews</a>
        </div>

        {{-- Divider --}}
        <div class="tb-sep"></div>

        {{-- Logos --}}
        <div class="tb-logos-wrap" id="tbLogosWrap">
            <div class="tb-logos-track" id="tbLogosTrack">
                <div class="tb-logo"><img src="{{ asset('images/voli-logo.webp') }}" alt="voli" title="Voli"></div>
                <div class="tb-logo"><img src="{{ asset('uploads/adidas-logo.png') }}" alt="adidas" title="Adidas"></div>
                <div class="tb-logo"><img src="{{ asset('uploads/Google-logo.png') }}" alt="google" title="Google"></div>
                <div class="tb-logo"><img src="{{ asset('uploads/hp-logo.png') }}" alt="hp" title="Hp"></div>
                <div class="tb-logo"><img src="{{ asset('uploads/unilever-logo.webp') }}" alt="unilever" title="Unilever"></div>
                <div class="tb-logo"><img src="{{ asset('uploads/Benefit-Logo.png') }}" alt="benefit" title="Benefit"></div>
                <div class="tb-logo"><img src="{{ asset('images/flowgardens-logo.webp') }}" alt="flow gardens" title="Flow Gardens"></div>
                <div class="tb-logo"><img src="{{ asset('images/her-piece-peace-logo.webp') }}" alt="her piece peace" title="Her Piece Peace"></div>
                <div class="tb-logo"><img src="{{ asset('images/neat-logo.webp') }}" alt="neat" title="Neat"></div>
                <div class="tb-logo"><img src="{{ asset('images/red-bull-logo.png') }}" alt="red bull" title="Red Bull"></div>
                <div class="tb-logo"><img src="{{ asset('images/springtastic-logo.webp') }}" alt="springtastic" title="Springtastic"></div>
            </div>
        </div>

    </div>
</section>

<script>
(function(){
    var wrap  = document.getElementById('tbLogosWrap');
    var track = document.getElementById('tbLogosTrack');
    if(!wrap || !track) return;

    // Clone once so scroll is seamless
    var clone = track.cloneNode(true);
    clone.setAttribute('aria-hidden','true');
    wrap.appendChild(clone);

    var speed = 0.5; // px per frame
    var offset = 0;
    var paused = false;
    var trackW = track.scrollWidth;

    wrap.addEventListener('mouseenter', function(){ paused = true; });
    wrap.addEventListener('mouseleave', function(){ paused = false; });

    function animate(){
        if(!paused){
            offset += speed;
            // Reset when first set fully scrolled
            if(offset >= trackW + 55){ // 55 = gap
                offset = 0;
            }
            wrap.scrollLeft = offset;
        }
        requestAnimationFrame(animate);
    }
    animate();
})();
</script>
