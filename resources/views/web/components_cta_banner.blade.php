<!-- ================================================
     REUSABLE CTA BANNER COMPONENT
     ================================================ -->
<style>
/* CSS Styles for the CTA Banner Component */
.cp-cta-banner-component {
    background: #1e1e1e;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 60px 80px;
    min-height: 280px;
    gap: 40px;
   
    width: 100%;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

.cp-cta-banner-comp-container {
    width: 100%;
    max-width: 1440px;
    margin: 0 auto;
    display: flex;
    align-items: inherit;
    justify-content: space-between;
    gap: inherit;
    flex-direction: inherit;
    position: relative;
}

.cp-cta-banner-comp-left {
    margin-left: 81px;
    flex: 1;
    max-width: 480px;
    display: flex;
    flex-direction: column;
    gap: 18px;
    position: relative;
    z-index: 2;
    text-align: left;
}

.cp-cta-banner-comp-heading {
    font-size: 30px;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.25;
    margin: 0;
}

.cp-cta-banner-comp-gold {
    color: #f5c542;
}

.cp-cta-banner-comp-text {
    font-size: 14px;
    color: rgba(255, 255, 255, 0.65);
    line-height: 1.75;
    margin: 0;
}

.cp-cta-banner-comp-btn {
    width: fit-content;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 32px;
    background: #FFC107;
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
    background: #e0a800;
    transform: translateY(-2px);
}

.cp-cta-banner-comp-imgs {
    position: relative;
    width: 460px;
    height: 280px;
    flex-shrink: 0;
    overflow: visible;
}

.cp-cta-comp-img {
    position: absolute;
    object-fit: cover;
    display: block;
}

.cp-cta-comp-img-1 {
    width: 283px;
    height: 329px;
    top: -130px;
    right: -37px;
    border-radius: 30px;
    transform: rotate(23.35deg);
    z-index: 3;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
}

.cp-cta-comp-img-2 {
    width: 157px;
    height: 172px;
    bottom: -94px;
    right: 217px;
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 2;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

.cp-cta-comp-img-3 {
    width: 155px;
    height: 170px;
    bottom: -161px;
    right: 51px;
    border-radius: 15px;
    transform: rotate(23.35deg);
    z-index: 1;
    box-shadow: 0 6px 24px rgba(0, 0, 0, 0.4);
}

/* Mobile responsive styles */
@media (max-width: 768px) {
    .cp-cta-banner-component {
        flex-direction: column-reverse;
        padding: 0 0 10vw 0;
        min-height: unset;
        gap: 0;
        overflow: hidden;
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
    }
    
    .cp-cta-comp-img-2,
    .cp-cta-comp-img-3 { 
        display: none; 
    }
    
    .cp-cta-comp-img-1 {
        width: 72vw;
        height: 80vw;
        top: -10vw;
        right: -10vw;
        border-radius: 6vw;
        transform: rotate(23.35deg);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
    }
}
</style>

<section class="cp-cta-banner-component">
    <div class="cp-cta-banner-comp-container">
        <div class="cp-cta-banner-comp-left">
            <h2 class="cp-cta-banner-comp-heading">
                Ready to Elevate Your <span class="cp-cta-banner-comp-gold">Packaging</span>?
            </h2>
            <p class="cp-cta-banner-comp-text">
                Let's bring your packaging vision to life. Our team of experts is ready to design and deliver rigid boxes that will make your brand unforgettable.
            </p>
            <a href="{{ url('request-quote') }}" class="cp-cta-banner-comp-btn">Get Your Free Quote Today</a>
        </div>

        <div class="cp-cta-banner-comp-imgs">
            <img src="{{ asset('uploads/cta-allcateagories.png') }}" alt="Rigid Inspiration" class="cp-cta-comp-img cp-cta-comp-img-1">
            <img src="{{ asset('uploads/cta-allcategories.png') }}" alt="Luxury Box Packaging" class="cp-cta-comp-img cp-cta-comp-img-2">
            <img src="{{ asset('uploads/cta-allcategories.png') }}" alt="Luxury Box Packaging" class="cp-cta-comp-img cp-cta-comp-img-3">
        </div>
    </div>
</section>
