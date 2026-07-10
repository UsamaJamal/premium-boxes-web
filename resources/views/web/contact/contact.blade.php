@include('web/header')



<style>
:root {
    --contact-max       : 1400px;
    --contact-px        : 48px;
    --contact-gap       : 60px;
    --contact-radius    : 12px;

    --contact-gold      : #f0c040;
    --contact-gold-hov  : #f5cc55;

    --contact-bg        : #1a1a1a;
    --contact-bg-card   : #2c2c2c;
    --contact-bg-info   : #1e1e1e;

    --contact-text      : #ffffff;
    --contact-muted     : #888888;
    --contact-subtle    : #cccccc;

    --contact-border    : #383838;
    --contact-input-bdr : #444444;
}

/*
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: var(--contact-bg);
    color: var(--contact-text);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
} */


.contact-container {
    background: #1A1A1A;
    width: 100%;
    max-width: var(--contact-max);
    margin-inline: auto;
    padding-inline: var(--contact-px);
    box-sizing: border-box;
}

.contact-hero,
.contact-hero *,
.contact-section,
.contact-section *,
.contact-map-section,
.contact-map-section * {
    box-sizing: border-box;
}


.contact-toast {
    position: fixed;
    top: 24px;
    right: 24px;
    z-index: 9999;
    background: #2c2c2c;
    border: 1px solid #444;
    border-left: 4px solid var(--contact-gold);
    color: var(--contact-text);
    padding: 14px 20px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.9rem;
    font-weight: 500;
    box-shadow: 0 4px 20px rgba(0,0,0,0.5);
    transform: translateX(calc(100% + 40px));
    opacity: 0;
    transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), opacity 0.4s ease;
    max-width: 340px;
}
.contact-toast.show { transform: translateX(0); opacity: 1; }
.contact-toast i    { color: var(--contact-gold); font-size: 1.1rem; flex-shrink: 0; }


.contact-hero {
    position: relative;
    width: 100%;
    padding-top: 210px;
    padding-bottom: 90px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    background-image: url('{{ asset("uploads/box-packing.png") }}');
    background-size: cover;
    background-position: center;
}

.contact-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to bottom,
        rgba(0,0,0,0.45) 0%,
        rgba(0,0,0,0.65) 50%,
        rgba(0,0,0,0.85) 100%
    );
    z-index: 0;
}

.contact-hero-wrap {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 48px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: transparent;
}


.contact-breadcrumb {
    position: absolute;
    top: 155px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    max-width: 1400px;
    padding: 0 48px;
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    gap: 8px;
    font-size: 16px;
    color: #999;
    white-space: nowrap;
    z-index: 2;
}
.contact-bc-home {
    font-size: 18px;
    color: var(--contact-gold);
    text-decoration: none;
    line-height: 1;
    transition: color 0.2s;
}
.contact-bc-home:hover { color: #fff; }
.contact-bc-sep        { color: #555; font-size: 12px; }
.contact-bc-current    { color: #bbb; font-weight: 500; }

.contact-hero-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 100%;
    margin-top: 0;
}

.contact-hero-badge {
    display: inline-flex;
    align-items: center;
    border: 1.5px solid var(--contact-gold);
    color: var(--contact-gold);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 4px;
    text-transform: uppercase;
    padding: 6px 26px;
    border-radius: 6px;
    margin-bottom: 22px;
    background: transparent;
}

.contact-hero-heading {
    padding-top: 0px;
    font-size: 42px;
    font-weight: 800;
    line-height: 50px;
    color: #fff;
    margin-bottom: 14px;
    text-shadow: 0 2px 16px rgba(0,0,0,0.6);
}
.contact-hero-gold { color: #f5c542; display: block; }

.contact-hero-subtext {
    /* font-size: 16px;
    font-weight: 400;
    line-height: 26px;
    color: #b0b0b0;
    max-width: 480px; */
    width: 100%;
    max-width: 561px;
    height: auto;
    margin-inline: auto;
    top: 257px;
    left: 440px;
    angle: 0 deg;
    opacity: 1;

    font-family: Inter;
    font-weight: 400;
    font-style: Regular;
    font-size: 18px;
    leading-trim: NONE;
    line-height: 26px;
    letter-spacing: 2%;
    text-align: center;
    vertical-align: middle;
    color:#C5C5C5;
}


.contact-section {
    background-color: var(--contact-bg);
    padding-top: var(--contact-gap);
    padding-bottom: var(--contact-gap);
}

.contact-wrapper {
    max-width: 1374px;
    margin: 0 auto;
    background: #202020;
    border-radius: 15px;
    padding: 20px;
    display: flex;
    gap: 30px;
}

/* ── FORM SIDE ── */
.contact-form {
    flex: 1;
    padding: 40px 20px 20px;
    display: flex;
    flex-direction: column;
    position: relative;
}

.contact-form-row {
    display: flex;
    gap: 40px;
    margin-bottom: 30px;
}

.contact-input-group { flex: 1; }

.contact-input-group label,
.contact-message-group label {
    display: block;
    color: #fff;
    font-size: 14px;
    margin-bottom: 10px;
    font-family: 'Inter', Arial, sans-serif;
}

.contact-info-item p {
    font-size: 14px;
    margin: 0;
    line-height: 1.5;
    font-family: 'Inter', Arial, sans-serif;
}

.contact-info-item a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info-item a:hover {
    color: #f3c63f;
}

.contact-input-group input {
    width: 100%;
    background: none;
    border: none;
    border-bottom: 1px solid #555;
    padding: 10px 0;
    color: #fff;
    outline: none;
    font-family: inherit;
    font-size: 14px;
    transition: border-color 0.2s;
}
.contact-input-group input::placeholder { color: #aaa; }
.contact-input-group input:focus { border-bottom-color: #f3c63f; }

.contact-input-group input:-webkit-autofill,
.contact-input-group input:-webkit-autofill:hover, 
.contact-input-group input:-webkit-autofill:focus, 
.contact-message-group textarea:-webkit-autofill,
.contact-message-group textarea:-webkit-autofill:hover,
.contact-message-group textarea:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0 30px #202020 inset !important;
    -webkit-text-fill-color: white !important;
}

.contact-message-group { margin-bottom: 30px; }

.contact-message-group textarea {
    width: 100%;
    min-height: 52px;
    padding: 10px 0;
    background: none;
    border: none;
    border-bottom: 1px solid #555;
    color: #fff;
    resize: none;
    overflow: hidden;
    outline: none;
    font-family: inherit;
    font-size: 14px;
    transition: border-color 0.2s;
}
.contact-message-group textarea::placeholder { color: #aaa; }
.contact-message-group textarea:focus { border-bottom-color: #f3c63f; }

.contact-send-btn {
    background: #f3c63f;
    color: #111;
    padding: 15px 40px;
    border: none;
    border-radius: 30px;
    font-weight: 600;
    font-size: 15px;
    cursor: pointer;
    align-self: flex-end;
    transition: background 0.2s, transform 0.15s;
    font-family: inherit;
}/* removed hover: .contact-send-btn:hover { ... } */



/* ── CONTACT INFO SIDE ── */
.contact-info {
    width: 350px;
    background: #1A1A1A;
    border-radius: 12px;
    padding: 40px 30px;
    position: relative;
    overflow: hidden;
    flex-shrink: 0;
    display: flex;
    flex-direction: column;
}

.contact-info h2 {
    color: #fff;
    font-size: 28px;
    margin-bottom: 10px;
    font-family: 'Inter', Arial, sans-serif;
}

.contact-info > p {
    color: #888;
    font-size: 14px;
    margin-bottom: 50px;
}

.contact-info-item {
    color: #fff;
    font-size: 14px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 18px;
    line-height: 1.6;
    position: relative;
    z-index: 2;
}

.contact-info-item i {
    color: #f3c63f;
    font-size: 24px;
    flex-shrink: 0;
    min-width: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 900;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.contact-info-item .fa-phone {
    transform: rotate(104deg);
}

.contact-info-item span,
.contact-info-item div {
    flex: 1;
    word-break: break-word;
    line-height: 1.6;
}

.contact-location {
    align-items: flex-start;
}

.contact-location i {
    margin-top: 3px;
}

.contact-social {
    display: flex;
    gap: 10px;
    margin-top: auto;
    position: relative;
    z-index: 2;
}

.contact-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    background: #f3c63f;
    color: #111;
    border-radius: 50%;
    text-decoration: none;
    font-size: 14px;
    transition: transform 0.2s, background 0.2s;
}

.contact-social a:hover {
    transform: translateY(-2px);
    background: #e5b630;
}

.contact-social span {
    width: 35px;
    height: 35px;
    background: #f3c63f;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #111;
    cursor: pointer;
    font-size: 13px;
    transition: background 0.2s, transform 0.2s;
}
.contact-social span:hover { background: #f5cc55; transform: translateY(-2px); }

.contact-circle-big {
    position: absolute;
    width: 150px;
    height: 180px;
    bottom: -40px;
    right: -40px;
    pointer-events: none;
    z-index: 0;
}
.contact-circle-big img {
    width: 100%; height: 100%;
    object-fit: contain; display: block;
}

.contact-circle-small {
    position: absolute;
    width: 100px;
    height: 120px;
    bottom: 50px;
    right: 15px;
    pointer-events: none;
    z-index: 0;
}
.contact-circle-small img {
    width: 100%; height: 100%;
    object-fit: contain; display: block;
}


.contact-map-section {
    padding-top: 40px;
    padding-bottom: var(--contact-gap);
    background: #1A1A1A;
}

.contact-map-shell {
    border-radius: var(--contact-radius);
    border: 1px solid var(--contact-border);
    box-shadow: 0 4px 20px rgba(0,0,0,0.35);
    overflow: hidden;
}

.contact-map-wrapper {
    border-radius: var(--contact-radius);
    overflow: hidden;
}

.contact-map-wrapper iframe {
    display: block;
    width: 100%;
    height: 420px;
}


@media (max-width: 1100px) {
    :root { --contact-px: 32px; --contact-gap: 48px; }
    .contact-hero-heading { font-size: 36px; line-height: 46px; }
}


@media (max-width: 992px) {
    .contact-wrapper     { flex-direction: column; }
    .contact-info        { width: 100%; }
    .contact-form-row    { flex-direction: column; gap: 20px; }
    .contact-send-btn    { width: 100%; }
}


@media (max-width: 768px) {
    :root {
        --contact-px: 4.5vw;
        --contact-gap: 8vw;
    }

    .contact-hero         { min-height: auto; padding-top: 100px; padding-bottom: 18px; width: 100%; max-width: 100%; }
    .contact-hero-wrap    { padding-inline: 5vw; }
    .contact-breadcrumb   { position: absolute; top: -10px; left: 0; transform: none; width: 100%; padding: 0 5vw; font-size: 14px; }
    .contact-hero-heading { font-size: 22px; line-height: 1.3; }
    .contact-hero-subtext { font-size: 13px; line-height: 1.8; }
    .contact-hero-badge   { font-size: 2.6vw; padding: 1.5vw 5vw; letter-spacing: 0.4em; border-radius: 50px; }

    .contact-section {
        padding-top: 3vw;
    }

    .contact-wrapper {
        flex-direction: column;
        padding: 3.5vw;
        gap: 3.5vw;
        border-radius: 12px;
    }

    .contact-info {
        width: 100%;
        border-radius: 12px;
        padding: 7vw 6vw 6vw;
        position: relative;
        overflow: hidden;
        min-height: 72vw;
    }

    .contact-info h2      { font-size: 6vw; font-weight: 700; margin-bottom: 1.5vw; }
    .contact-info > p     { font-size: 3.5vw; color: #888; margin-bottom: 7vw; }

    .contact-info-item    {
        font-size: 3.8vw;
        gap: 4vw;
        margin-bottom: 6vw;
        line-height: 1.6;
        display: flex;
        align-items: center;
    }
    .contact-info-item i  {
        font-size: 6vw;
        min-width: 7vw;
        color: #f3c63f;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .contact-info-item > span,
    .contact-info-item > div {
        flex: 1;
        word-break: break-word;
        line-height: 1.6;
    }
    .contact-location {
        align-items: flex-start;
    }
    .contact-location i {
        margin-top: 1vw;
    }

    .contact-social       { margin-top: 8vw; gap: 2.5vw; position: relative; z-index: 2; }
    .contact-social span  { width: 10vw; height: 10vw; font-size: 4vw; }

    .contact-circle-big   { width: 32vw; height: 52vw; right: -10vw; bottom: -10vw; }
    .contact-circle-small { width: 16vw; height: 21vw; right: 8vw; bottom: 12vw; }

    .contact-form         { padding: 4vw 4vw 2vw; }
    .contact-form-row     { flex-direction: column; gap: 5vw; margin-bottom: 5vw; }
    .contact-message-group { margin-bottom: 5vw; }

    .contact-input-group label,
    .contact-message-group label { font-size: 3.8vw; margin-bottom: 2vw; }

    .contact-input-group input,
    .contact-message-group textarea { font-size: 3.8vw; padding: 2.5vw 0; }
    .contact-message-group textarea { min-height: 14vw; }

    .contact-send-btn {
        width: 100%; font-size: 4vw;
        padding: 4vw 0; border-radius: 50px; align-self: center;
    }

    .contact-form-img     { justify-content: center; }
    .contact-form-img img {
        width: 55vw;
        height: auto;
        margin-top: 9vw;
        margin-right: 147px;
    }

    .contact-map-section  { padding-top: 0; }
    .contact-map-wrapper iframe { height: 55vw; }
}


@media (max-width: 480px) {
    .contact-hero         { padding-bottom: 10px; }
    .contact-section      { padding-top: 0; }
    .contact-breadcrumb   { top: 50px; font-size: 13px; }
    .contact-hero-heading { font-size: 18px; line-height: 1.4; }
    .contact-hero-subtext { font-size: 13px; }
    .contact-message-group textarea { min-height: 50px; }

    .contact-info         { min-height: 80vw; }
    .contact-info h2      { font-size: 7vw; }

    .contact-info-item    {
        font-size: 4vw;
        gap: 4.5vw;
        margin-bottom: 6.5vw;
        line-height: 1.6;
        align-items: center;
    }
    .contact-info-item i  {
        font-size: 6.5vw;
        min-width: 7.5vw;
    }
    .contact-location {
        align-items: flex-start;
    }
    .contact-location i {
        margin-top: 1.2vw;
    }

    .contact-social span  { width: 11vw; height: 11vw; font-size: 4.5vw; }

    .contact-toast {
        top: auto;
        bottom: 4vw;
        right: 4.5vw;
        left: 4.5vw;
        max-width: unset;
        font-size: 3.8vw;
    }
}

</style>

    <!-- Toast -->
    <div class="contact-toast" id="toast" role="status" aria-live="polite">
        <i class="fas fa-check-circle"></i>
        <span>Message sent! We'll get back to you soon.</span>
    </div>

    <!-- HERO BANNER -->
    <section class="contact-hero">
        <!-- Breadcrumb positioned at top of hero -->
        <nav class="contact-breadcrumb" aria-label="Breadcrumb">
            <a href="{{ url('/') }}" class="contact-bc-home">
                <i class="fas fa-home"></i>
            </a>
            <i class="fas fa-chevron-right"></i>
            <span class="contact-bc-current">Contact Us</span>
        </nav>
        <div class="contact-container contact-hero-wrap">
            <div class="contact-hero-content">
                <h1 class="contact-hero-heading">
                    Let's Talk About Your
                    <span class="contact-hero-gold">Packaging Vision</span>
                </h1>
                <p class="contact-hero-subtext">
                    We're here to answer your questions, provide quotes,
                    and help you create unforgettable rigid boxes.
                </p>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-section">
        <div class="contact-container">

            <div class="contact-wrapper">

                <!-- Contact Info Side -->
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p>Say something to start a live chat!</p>
                    <div class="contact-info-item">
                    <i class="fas fa-phone-alt contact-icon"></i>
                    <a href="tel:18005189441"><p>1800-518-9441</p></a>
                </div>

                <div class="contact-info-item">
                    <i class="fas fa-envelope contact-icon"></i>
                    <a href="mailto:support@myboxpackaging.com"><p>support@myboxpackaging.com</p></a>
                </div>

                <div class="contact-info-item">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <a href="https://maps.google.com/?q=132+Dartmouth+Street+Boston,+Massachusetts+02156+United+States" target="_blank">
                        <p>132 Dartmouth Street Boston, <br>Massachusetts 02156 United States</p>
                    </a>
                </div>

                @php
                    $socialLinks = \Illuminate\Support\Facades\DB::table('footer_settings')->first();
                @endphp
                <div class="contact-social">
                    <a href="{{ $socialLinks->facebook_url ?? '#' }}" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ $socialLinks->twitter_url ?? '#' }}" target="_blank" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="{{ $socialLinks->instagram_url ?? '#' }}" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="{{ $socialLinks->youtube_url ?? '#' }}" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
                    <div class="contact-circle-big" aria-hidden="true">
                        <img src="{{ asset('images/contactus/Ellipse 793.png') }}" alt="" title="">
                    </div>
                    <div class="contact-circle-small" aria-hidden="true">
                        <img src="{{ asset('images/contactus/Ellipse 794.png') }}" alt="" title="">
                    </div>
                </div>

                <!-- Form Side -->
                <form class="contact-form" id="contactForm">
                    <div class="contact-form-row">
                        <div class="contact-input-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="Name" required>
                        </div>
                        <div class="contact-input-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="contact-form-row">
                        <div class="contact-input-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                        </div>
                        <div class="contact-input-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" placeholder="Number" required oninput="this.value = this.value.replace(/[^0-9+]/g, '');">
                        </div>
                    </div>
                    <div class="contact-message-group">
                        <label>Message</label>
                        <textarea name="message" placeholder="Write your message..."></textarea>
                    </div>
                    <button class="contact-send-btn" id="sendBtn" type="submit">Send Message</button>
                    <div id="formStatus" style="margin-top: 15px; font-size: 14px; text-align: center; display: none;"></div>
            </form>

            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section class="contact-map-section" aria-label="Our location on map">
        <div class="contact-container">
            <div class="contact-map-shell">
                <div class="contact-map-wrapper">
                    <iframe
                        title="Premium Boxes — 9931 Franklin Ave Suite 1-A Franklin Park, IL"
                        src="https://maps.google.com/maps?q=9931%20Franklin%20Ave%20Suite%201-A%20Franklin%20Park%2C%20IL%2060131%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        width="100%" height="420" style="border:0;"
                        allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const btn  = document.getElementById('sendBtn');

    if (!form || !btn) return;

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const originalText = btn.textContent;
        btn.textContent = 'Sending...';
        btn.disabled = true;

        const formData = new FormData(form);
        formData.append('_token', '{{ csrf_token() }}');

        fetch('{{ url("contact-mail") }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.text().then(text => { throw new Error(text) });
            }
            return response.json();
        })
        .then(data => {
            const statusDiv = document.getElementById('formStatus');
            statusDiv.textContent = data.message || 'Thank you for your inquiry, we will contact you soon!';
            statusDiv.style.color = '#4caf50';
            statusDiv.style.display = 'block';

            btn.textContent        = 'Sent';
            btn.style.background   = '#4caf50';
            btn.style.color        = '#fff';

            setTimeout(() => {
                btn.textContent      = originalText;
                btn.style.background = '';
                btn.style.color      = '';
                btn.disabled         = false;
                statusDiv.style.display = 'none';
                form.reset();
            }, 5000);
        })
        .catch(error => {
            console.error('Error:', error);
            const statusDiv = document.getElementById('formStatus');
            statusDiv.textContent = 'Error! Try Again';
            statusDiv.style.color = '#ff5252';
            statusDiv.style.display = 'block';
            
            btn.textContent = 'Error!';
            setTimeout(() => {
                btn.textContent = originalText;
                btn.disabled = false;
                statusDiv.style.display = 'none';
            }, 4000);
        });
    });
});
</script>

<!-- ========================= contact form and location ========================= -->

@include('web/components_cta_banner')

@include('web/footer')
