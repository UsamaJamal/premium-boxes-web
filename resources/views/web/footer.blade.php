<style>
/* ================================================
   FOOTER SECTION
   ================================================ */
.cp-footer {
    background-color: var(--bg2, #111111);
    color: var(--muted, rgba(255, 255, 255, 0.62));
    padding: 50px 0 20px;
    font-family: var(--font, 'Inter', sans-serif);
    font-size: 14px;
}

.cp-wrap {
    max-width: var(--max, 1400px);
    margin: 0 auto;
    padding: 0 60px;
}

.cp-footer-top {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    margin-bottom: 30px;
}

.cp-footer-col {
    flex: 1;
    min-width: 150px;
}

.cp-footer-col-1 {
    min-width: 250px;
    flex: 1.5;
    display: flex;
    flex-direction: column;
}

.cp-footer-social {
    margin-top: 20px;
}

.cp-footer-col-5 {
    min-width: 250px;
    flex: 1.5;
    display: flex;
    flex-direction: column;
}

.cp-footer-newsletter-section {
    margin-top: 20px;
}

.cp-footer-logo {
    margin-bottom: 20px;
}

.cp-footer-logo-icon {
    display: flex;
    align-items: center;
}

.cp-footer-title {
    color: var(--white);
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 16px;
}

.cp-social-icons {
    display: flex;
    gap: 15px;
}

.cp-social-icons a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background-color: var(--white);
    color: #111;
    text-decoration: none;
    transition: background-color 0.3s, opacity 0.3s;
}

.cp-social-icons a:hover {
    background-color: #FFC107;
    color: #fff;
    opacity: 0.9;
}

.cp-footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.cp-footer-links li {
    margin-bottom: 10px;
    font-size: 13px;
}

.cp-footer-links a {
    color: var(--muted);
    text-decoration: none;
    transition: color 0.3s;
}

.cp-footer-links a:hover {
    color: var(--white);
}

.cp-footer-address {
    margin-bottom: 15px;
    line-height: 1.6;
    font-size: 13px;
}

.cp-newsletter-title {
    margin-bottom: 12px;
}

.cp-newsletter-form {
    display: flex;
    margin-bottom: 20px;
    align-items: center;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding-bottom: 10px;
    gap: 10px;
}

.cp-newsletter-form input {
    flex: 1;
    padding: 12px 0;
    background-color: transparent;
    border: none;
    color: var(--white);
    outline: none;
}

.cp-newsletter-form button {
    padding: 10px 24px;
    background-color: #F8CB54;
    color: #111;
    border: none;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s;
}

.cp-newsletter-form button:hover {
    background-color: var(--gold2);
}

.cp-payment-methods {
    display: flex;
    gap: 10px;
    font-size: 24px;
    color: var(--white);
}

.cp-footer-bottom {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 20px;
    text-align: center;
    font-size: 12px;
}

@media (max-width: 992px) {
    .cp-footer-top {
        grid-template-columns: repeat(2, 1fr);
        display: grid;
    }

    .cp-footer-col-1,
    .cp-footer-col-5 {
        grid-column: span 2;
    }
}

@media (max-width: 576px) {
    .cp-footer-top {
        grid-template-columns: 1fr;
    }

    .cp-footer-col-1,
    .cp-footer-col-5 {
        grid-column: span 1;
    }
}

/* ================================================
   FOOTER — MOBILE VW
   ================================================ */
@media (max-width: 768px) {
    .cp-footer { padding: 8vw 5vw 5vw; }

    .cp-footer-top {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    /* Col 1 — logo + description + social */
    .cp-footer-col-1 {
        grid-column: unset;
        min-width: unset;
        margin-bottom: 6vw;
    }
    .cp-footer-logo { margin-bottom: 4vw; }
    .cp-footer-logo-icon i  { font-size: 7vw !important; }
    .cp-footer-logo-icon span { font-size: 6vw !important; }

    /* Col 1 description */
    .cp-footer-col-1 > p {
        font-size: 3.8vw;
        line-height: 1.8;
        color: rgba(255,255,255,0.6);
        margin-bottom: 5vw;
    }

    /* Social icons */
    .cp-footer-social { margin-top: 0; margin-bottom: 6vw; }
    .cp-footer-title  { font-size: 4.5vw; margin-bottom: 3vw; }
    .cp-social-icons a {
        width: 10vw;
        height: 10vw;
        font-size: 4vw;
        border-radius: 50%;
        background: #fff;
        color: #111;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-right: 2vw;
        text-decoration: none;
    }

    /* Accordion columns — Col 2,3,4,5 */
    .cp-footer-col:not(.cp-footer-col-1) {
        border-top: 1px solid rgba(255,255,255,0.1);
        min-width: unset;
        grid-column: unset;
    }
    .cp-footer-col-5 {
        border-top: 1px solid rgba(255,255,255,0.1);
        grid-column: unset;
        min-width: unset;
    }

    /* Accordion header */
    .cp-footer-col:not(.cp-footer-col-1) .cp-footer-title,
    .cp-footer-col-5 .cp-footer-title:first-child {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 4vw 0;
        cursor: pointer;
        font-size: 4.5vw;
        color: #fff;
        margin-bottom: 0;
    }
    .cp-footer-col:not(.cp-footer-col-1) .cp-footer-title::after,
    .cp-footer-col-5 .cp-footer-title:first-child::after {
        content: '+';
        font-size: 5vw;
        color: rgba(255,255,255,0.6);
        transition: transform 0.25s;
    }
    .cp-footer-col.open .cp-footer-title::after,
    .cp-footer-col-5.open .cp-footer-title:first-child::after {
        content: '−';
        color: #FFC107;
    }

    /* Accordion body — hidden by default */
    .cp-footer-col:not(.cp-footer-col-1) .cp-footer-links,
    .cp-footer-col-5 .cp-footer-address,
    .cp-footer-col-5 .cp-footer-newsletter-section {
        display: none;
        padding-bottom: 4vw;
    }
    .cp-footer-col.open .cp-footer-links,
    .cp-footer-col-5.open .cp-footer-address,
    .cp-footer-col-5.open .cp-footer-newsletter-section {
        display: block;
    }

    /* Links font size */
    .cp-footer-links li { margin-bottom: 3vw; }
    .cp-footer-links a  { font-size: 3.8vw; }
    .cp-footer-address  { font-size: 3.8vw; line-height: 1.7; }

    /* Newsletter */
    .cp-newsletter-title { font-size: 4.5vw !important; margin-top: 4vw; cursor: default !important; }
    .cp-newsletter-title::after { display: none !important; }
    .cp-newsletter-form { display: flex; gap: 0; margin-bottom: 4vw; }
    .cp-newsletter-form input  { font-size: 3.8vw; padding: 3vw 4vw; flex: 1; }
    .cp-newsletter-form button { font-size: 3.5vw; padding: 3vw 5vw; border-radius: 0 50px 50px 0; }

    /* Payment icons */
    .cp-payment-methods { display: flex; gap: 2vw; flex-wrap: wrap; }
    .cp-payment-methods img { height: 6vw !important; }
    .cp-payment-methods .fab { font-size: 6vw; color: #fff; }

    /* Footer bottom */
    .cp-footer-bottom { padding-top: 5vw; text-align: center; font-size: 3.5vw; }
}

/* Payment outside — desktop hide, mobile show */
.cp-payment-outside {
    display: none;
}

@media (max-width: 768px) {
    .cp-payment-outside {
        display: flex;
        justify-content: center;
        gap: 2vw;
        flex-wrap: wrap;
        padding: 5vw 5vw 0;
    }
    .cp-payment-outside img { height: 6vw !important; }
    .cp-payment-outside .fab { font-size: 6vw; color: #fff; }
}

/* Newsletter + Payment outside block */
.cp-footer-outside {
    display: none; /* desktop pe hidden — desktop mein col-5 mein already hai */
}

@media (max-width: 768px) {
    .cp-footer-outside {
        display: block;
        padding: 5vw 5vw 0;
        border-top: 1px solid rgba(255,255,255,0.1);
    }
    .cp-footer-outside .cp-newsletter-title {
        font-size: 4.5vw;
        color: #fff;
        margin-bottom: 3vw;
        cursor: default;
    }
    .cp-footer-outside .cp-newsletter-form {
        display: flex;
        gap: 10px;
        align-items: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        padding-bottom: 3vw;
        margin-bottom: 5vw;
    }
    .cp-footer-outside .cp-newsletter-form input {
        flex: 1;
        font-size: 3.8vw;
        padding: 2vw 0;
        background: transparent;
        border: none;
        color: #fff;
        outline: none;
    }
    .cp-footer-outside .cp-newsletter-form button {
        font-size: 3.5vw;
        padding: 3vw 5vw;
        border-radius: 50px;
        background: #F8CB54;
        color: #111;
        border: none;
        font-weight: 700;
        cursor: pointer;
        flex-shrink: 0;
    }
    .cp-footer-outside .cp-payment-outside {
        display: flex;
        justify-content: flex-start;
        gap: 2vw;
        flex-wrap: wrap;
        padding: 0;
    }
    .cp-footer-outside .cp-payment-outside img { height: auto !important; max-width: 45px; border-radius: 3px; }
}

</style>

<!-- ================================================
     FOOTER SECTION
     ================================================ -->
@php
    $footerSettings = \Illuminate\Support\Facades\DB::table('footer_settings')->first();
    $f_categories = [];
    $f_products = [];
    if ($footerSettings) {
        $hot_cats = !empty($footerSettings->hot_categories) ? json_decode($footerSettings->hot_categories, true) : [];
        if (!empty($hot_cats)) {
            $f_categories = \Illuminate\Support\Facades\DB::table('add_category')->whereIn('cat_id', $hot_cats)->get();
        }
        
        $foot_prods = !empty($footerSettings->footer_products) ? json_decode($footerSettings->footer_products, true) : [];
        if (!empty($foot_prods)) {
            $f_products = \Illuminate\Support\Facades\DB::table('product')->whereIn('product_id', $foot_prods)->get();
        }
    }
@endphp
<footer class="cp-footer">
    <div class="cp-wrap">
        <div class="cp-footer-top">
            
            <!-- Column 1: Logo & Socials -->
            <div class="cp-footer-col cp-footer-col-1">
                <div class="cp-footer-logo">
                    <div class="cp-footer-logo-icon">
                        @if($footerSettings && !empty($footerSettings->logo))
                            <img src="{{ asset($footerSettings->logo) }}" alt="Premium Boxes Logo" style="max-height: 40px;">
                        @else
                            <i class="fas fa-box-open" style="color: var(--gold); font-size: 32px; margin-right: 10px;"></i>
                            <span style="font-size: 24px; font-weight: 800; line-height: 1.1; color: var(--gold);">Premium<br><span style="color: white;">Boxes</span></span>
                        @endif
                    </div>
                </div>
                <div class="cp-footer-social">
                    <h4 class="cp-footer-title">Follow us</h4>
                    <div class="cp-social-icons">
                        <a href="{{ $footerSettings->facebook_url ?? '#' }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $footerSettings->twitter_url ?? '#' }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ $footerSettings->instagram_url ?? '#' }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $footerSettings->pinterest_url ?? '#' }}"><i class="fab fa-pinterest-p"></i></a>
                        <a href="{{ $footerSettings->linkedin_url ?? '#' }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <!-- Column 2: Hot Categories -->
            <div class="cp-footer-col">
                <h4 class="cp-footer-title">Hot Categories</h4>
                <ul class="cp-footer-links">
                    @if(count($f_categories) > 0)
                        @foreach($f_categories as $cat)
                            <li><a href="{{ url($cat->category_url) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#">Glass Jar & Bottles</a></li>
                        <li><a href="#">Rigid Boxes</a></li>
                        <li><a href="#">Mylar boxes</a></li>
                        <li><a href="#">Showcase Carton</a></li>
                        <li><a href="#">Rectangular</a></li>
                        <li><a href="#">Fold & Assemble</a></li>
                        <li><a href="#">Top Closure</a></li>
                        <li><a href="#">Figure & Pattern</a></li>
                    @endif
                </ul>
            </div>

            <!-- Column 3: Products -->
            <div class="cp-footer-col">
                <h4 class="cp-footer-title">Products</h4>
                <ul class="cp-footer-links">
                    @if(count($f_products) > 0)
                        @foreach($f_products as $prod)
                            <li><a href="{{ url('/'.$prod->url) }}">{{ $prod->title }}</a></li>
                        @endforeach
                    @else
                        <li><a href="#">Custom Boxes</a></li>
                        <li><a href="#">Blank Boxes</a></li>
                        <li><a href="#">Pillow Boxes</a></li>
                        <li><a href="#">Custom Product Boxes</a></li>
                        <li><a href="#">Pyramid Boxes</a></li>
                        <li><a href="#">Wine Boxes</a></li>
                        <li><a href="#">CBD Boxes</a></li>
                        <li><a href="#">CBD Oil Packaging</a></li>
                        <li><a href="#">E Cigarette Boxes</a></li>
                    @endif
                </ul>
            </div>

            <!-- Column 4: Company -->
            <div class="cp-footer-col">
                <h4 class="cp-footer-title">Company</h4>
                <ul class="cp-footer-links">
                    <li><a href="{{ url('beat-my-price') }}">Beat My Price</a></li>
                    <li><a href="{{ url('request-quote') }}">Get a Quote</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                    <li><a href="{{ url('return-policy') }}">Return Policy</a></li>
                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('terms-services') }}">Terms & Services</a></li>
                    <li><a href="{{ url('sitemap.xml') }}">Site Map</a></li>
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('sitemap.xml') }}">Sitemap</a></li>
                </ul>
            </div>

            <!-- Column 5: Office & Newsletter -->
            <div class="cp-footer-col cp-footer-col-5">
                <h4 class="cp-footer-title">Office</h4>
                <p class="cp-footer-address">4000 W Montrose Ave 559,<br>Chicago, IL 60641</p>
                
                <h4 class="cp-footer-title cp-newsletter-title" style="margin-top: 10px;">News letter</h4>
                <form class="cp-newsletter-form">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
                <div class="cp-payment-methods">
                    <img src="{{ asset('uploads/visa 1.png') }}" alt="Visa" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                    <img src="{{ asset('uploads/master-card 1.png') }}" alt="Mastercard" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                    <img src="{{ asset('uploads/paypal.png') }}" alt="Paypal" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                    <img src="{{ asset('uploads/americanexpress.png') }}" alt="American Express" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                    <img src="{{ asset('uploads/discover.png') }}" alt="Discover" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                </div>
            </div>
            
        </div>

        <!-- Newsletter + Payment — outside accordion, always visible on mobile -->
        <div class="cp-footer-outside">
            <h4 class="cp-footer-title cp-newsletter-title">News letter</h4>
            <form class="cp-newsletter-form">
                <input type="email" placeholder="Enter your email" required>
                <button type="submit">Subscribe</button>
            </form>
            <div class="cp-payment-methods cp-payment-outside">
                <img src="{{ asset('uploads/visa 1.png') }}" alt="Visa" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                <img src="{{ asset('uploads/master-card 1.png') }}" alt="Mastercard" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                <img src="{{ asset('uploads/paypal.png') }}" alt="Paypal" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                <img src="{{ asset('uploads/americanexpress.png') }}" alt="American Express" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
                <img src="{{ asset('uploads/discover.png') }}" alt="Discover" style="max-height: 28px; width: auto; background-color: white; padding: 2px; border-radius: 3px;">
            </div>
        </div>

        <div class="cp-footer-bottom">
            <p>© 2025 Premium Packaging. All rights Reserved.</p>
        </div>
    </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // ── Footer Accordion (mobile only) ──
    document.querySelectorAll('.cp-footer-col:not(.cp-footer-col-1), .cp-footer-col-5').forEach(function(col) {
        var title = col.querySelector('.cp-footer-title');
        if (!title) return;
        // Skip newsletter title inside col-5
        if (title.classList.contains('cp-newsletter-title')) return;

        title.addEventListener('click', function() {
            if (window.innerWidth > 768) return;
            col.classList.toggle('open');
        });
    });

    // ── Footer Newsletter Form ──
    const newsletterForm = document.querySelector('.cp-newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const input = newsletterForm.querySelector('input[type="email"]');
            const btn   = newsletterForm.querySelector('button[type="submit"]');
            if (!input || !input.value.trim()) return;

            const original = btn.textContent;
            btn.textContent = '✓ Subscribed!';
            btn.style.background = '#4caf50';
            btn.disabled = true;
            input.disabled = true;

            setTimeout(function() {
                btn.textContent = original;
                btn.style.background = '';
                btn.disabled = false;
                input.disabled = false;
                input.value = '';
            }, 3000);
        });
    }


});
</script>

<!-- ========================= Footer Area End ========================= -->


    <script src="{{url('web/assets/js/js/main.js')}}"></script>
    <script src="{{url('web/assets/js/jquery.min.js')}}"></script>
    <script src="{{url('web/assets/js/popper.min.js')}}"></script>
    <script src="{{url('web/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('web/assets/js/owl.carousel.min.js')}}"></script>
   
    <script src="{{url('web/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{url('web/assets/js/jquery.smartmenus.js')}}"></script>
    <script type="text/javascript" src="{{url('web/assets/js/jquery.smartmenus.bootstrap-4.js')}}"></script>
    
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-218080239-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-218080239-1');
</script>





         <script>
    var contactid = "";
    var recid = "";
    var headerid = "";
    var onloadCallback = function ()
    {
    headerid = grecaptcha.render('headercaptcha', {
    'sitekey':'6LePsD8bAAAAACWospU_SOX7EMi5ZAZrlYE4LG8H'
    });
    contactid = grecaptcha.render('recapchaheader', {
    'sitekey':'6LePsD8bAAAAACWospU_SOX7EMi5ZAZrlYE4LG8H'
    });
    recid = grecaptcha.render('recapchaheader2', {
    'sitekey':'6LePsD8bAAAAACWospU_SOX7EMi5ZAZrlYE4LG8H'
    });
 
   
    };
    </script>
    
    
    
    
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
           <!--  <script>
            document.getElementById("call").addEventListener("submit",function(evt)
    {
    	  var response = grecaptcha.getResponse(headerid);
	 	 if(response.length == 0){
	 	     alert('Please Fill the Required Fields For Send Message');
	 	     evt.preventDefault();
	 	 	 return false;
	 	 }else{
	 	 	 
	 	     return false;
    
	 	 }
    });
    </script> 

<script>
            document.getElementById("quoteform").addEventListener("submit",function(evt)
    {
    	  var response = grecaptcha.getResponse(contactid);
	 	 if(response.length == 0){
	 	     alert('Please Fill the Required Fields For Send Message');
	 	     evt.preventDefault();
	 	 	 return false;
	 	 }else{
	 	 	 
	 	     return false;
    
	 	 }
    });
    </script>

    <script>
            document.getElementById("contactform").addEventListener("submit",function(evt)
    {
    	  var response = grecaptcha.getResponse(recid);
	 	 if(response.length == 0){
	 	     alert('Please Fill the Required Fields For Send Message');
	 	     evt.preventDefault();
	 	 	 return false;
	 	 }else{
	 	 	 
	 	     return false;
    
	 	 }
    });
    </script>
<script>
            document.getElementById("loginform").addEventListener("submit",function(evt)
    {
    	  var response = grecaptcha.getResponse(contactid);
	 	 if(response.length == 0){
	 	     alert('Please Fill the RECAPTCHA For Send Message');
	 	     evt.preventDefault();
	 	 	 return false;
	 	 }else{
	 	 	 
	 	     return false;
    
	 	 }
    });
    </script>
    <script>
            document.getElementById("registerform").addEventListener("submit",function(evt)
    {
    	  var response = grecaptcha.getResponse(contactid);
	 	 if(response.length == 0){
	 	     alert('Please Fill the RECAPTCHA For Send Message');
	 	     evt.preventDefault();
	 	 	 return false;
	 	 }else{
	 	 	 
	 	     return false;
    
	 	 }
    });
    </script>
        <script>
            document.getElementById("promotionform").addEventListener("submit",function(evt)
    {
    	  var response = grecaptcha.getResponse(contactid);
	 	 if(response.length == 0){
	 	     alert('Please Fill the RECAPTCHA For Send Message');
	 	     evt.preventDefault();
	 	 	 return false;
	 	 }else{
	 	 	 
	 	     return false;
    
	 	 }
    });
    </script> -->
    

         
</body>

</html>