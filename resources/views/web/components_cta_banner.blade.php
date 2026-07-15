<!-- ================================================
     REUSABLE CTA BANNER COMPONENT
     ================================================ -->
<style>
/* CSS Styles for the CTA Banner Component */
.cp-cta-banner-component {
    background: #202020;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: clamp(44px, 5vw, 64px) 0;
    min-height: clamp(360px, 30vw, 460px);
    width: 100%;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

.cp-cta-banner-comp-container {
    width: 100%;
    max-width: 1380px;
    margin: 0 auto;
    padding-left: 55px;
    padding-right: 55px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: clamp(28px, 4vw, 64px);
    position: relative;
}

@media (min-width: 769px) {
    .cp-cta-banner-comp-container {
        position: static !important;
    }
}

@media (max-width: 768px) {
    .cp-cta-banner-comp-container {
        padding-left: 20px;
        padding-right: 20px;
    }
}

.cp-cta-banner-comp-left {
    flex: 1;
    max-width: 620px;
    margin-left: 0;
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: relative;
    z-index: 2;
    text-align: left;
}

.cp-cta-banner-comp-heading {
    display: block;
    font-size: clamp(30px, 3vw, 56px);
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    margin: 0;
}

.cp-cta-banner-comp-gold {
    color: #F8CB54;
}

.cp-cta-banner-comp-text {
    font-size: clamp(14px, 1.3vw, 18px);
    color: rgba(255, 255, 255, 0.65);
    line-height: 1.75;
    margin: 0;
    max-width: 560px;
}

.cp-cta-banner-comp-btn {
    width: fit-content;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 32px;
    background: #F8CB54;
    color: #111 !important;
    text-decoration: none !important;
    font-size: 16px;
    font-weight: 700;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    transition: background .25s, transform .2s;
    white-space: nowrap;
}

.cp-cta-banner-comp-btn:hover {
    background: #e5b63d;
    transform: translateY(-2px);
}

.cp-cta-banner-comp-imgs {
    position: relative;
    width: min(42vw, 520px);
    height: clamp(280px, 24vw, 380px);
    flex-shrink: 0;
    overflow: hidden;
}

@media (min-width: 769px) {
    .cp-cta-banner-comp-imgs {
        position: absolute !important;
        top: 0 !important;
        bottom: 0 !important;
        right: 55px !important;
        height: auto !important;
        overflow: visible !important;
    }
}

@media (min-width: 1200px) {
    .cp-cta-banner-comp-imgs {
        right: 60px !important;
    }
}

@media (min-width: 1440px) {
    .cp-cta-banner-comp-imgs {
        right: calc((100% - 1440px) / 2 + 80px) !important;
    }
}

.cp-cta-comp-img {
    position: absolute;
    object-fit: cover;
    display: block;
}

.cp-cta-comp-img-1 {
    width: clamp(230px, 23vw, 340px);
    height: clamp(270px, 27vw, 395px);
    top: clamp(-82px, -6vw, -40px);
    right: clamp(18px, 2vw, 34px);
    border-radius: 30px;
    transform: rotate(23.35deg);
    z-index: 3;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
}

.cp-cta-comp-img-2 {
    width: clamp(135px, 12vw, 180px);
    height: clamp(148px, 13vw, 198px);
    bottom: clamp(-58px, -4vw, -30px);
    right: clamp(210px, 20vw, 300px);
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 2;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

.cp-cta-comp-img-3 {
    width: clamp(130px, 12vw, 178px);
    height: clamp(145px, 13vw, 196px);
    bottom: clamp(-94px, -7vw, -54px);
    right: clamp(42px, 7vw, 110px);
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 1;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

/* Mobile responsive styles */
@media (max-width: 768px) {
    .cp-cta-banner-component {
        padding: 0 0 10vw 0;
        min-height: unset;
        overflow: hidden;
    }

    .cp-cta-banner-comp-container {
        flex-direction: column-reverse;
        gap: 0;
    }
    
    .cp-cta-banner-comp-left {
        max-width: 100%;
        padding: 4vw 5vw 4vw 5vw;
        align-items: flex-start;
        text-align: left;
        margin-left: 0;
    }
    
    .cp-cta-banner-comp-heading {
        font-size: 8vw;
        margin-bottom: 2vw;
    }
    
    .cp-cta-banner-comp-text {
        font-size: 4.2vw;
        max-width: 100%;
        line-height: 1.8;
        margin-bottom: 6vw;
    }
    
    .cp-cta-banner-comp-btn {
        width: 100%;
        text-align: center;
        justify-content: center;
        font-size: 4.5vw;
        padding: 4vw 0;
    }

    .cp-cta-banner-comp-imgs {
        width: 100%;
        height: 70vw;
        position: relative;
        flex-shrink: 0;
        overflow: hidden;
    }
    
    .cp-cta-comp-img-2,
    .cp-cta-comp-img-3 { 
        display: none; 
    }
    
    .cp-cta-comp-img-1 {
        width: 72vw;
        height: 80vw;
        top: -10vw;
        right: 0;
        border-radius: 6vw;
        transform: rotate(23.35deg);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
    }
}
</style>

<section class="cp-cta-banner-component">
    <div class="cp-cta-banner-comp-container">
        <div class="cp-cta-banner-comp-left">
            <span class="cp-cta-banner-comp-heading">
                Ready to Elevate Your <span class="cp-cta-banner-comp-gold">Packaging</span>?
            </span>
            <p class="cp-cta-banner-comp-text">
                Let's bring your packaging vision to life. Our team of experts is ready to design and deliver rigid boxes that will make your brand unforgettable.
            </p>
            <a href="{{ url('request-quote') }}/" class="cp-cta-banner-comp-btn">Get Your Free Quote Today</a>
        </div>

        <div class="cp-cta-banner-comp-imgs">
            <img src="{{ asset('uploads/cta-allcateagories.png') }}" alt="rigid inspiration" title="Rigid Inspiration" class="cp-cta-comp-img cp-cta-comp-img-1">
            <img src="{{ asset('uploads/cta-allcategories.png') }}" alt="luxury box packaging" title="Luxury Box Packaging" class="cp-cta-comp-img cp-cta-comp-img-2">
            <img src="{{ asset('uploads/cta-allcategories.png') }}" alt="luxury box packaging" title="Luxury Box Packaging" class="cp-cta-comp-img cp-cta-comp-img-3">
        </div>
    </div>
</section>
