
@include('web/header')
<style>*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: #1a1a1a;
    color: #ffffff;
    -webkit-font-smoothing: antialiased;
}

/* ── HERO ─────────────────────────────────── */
.qu-hero {
    position: relative;
    width: 100%;
    min-height: 320px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 190px 40px 60px;
    overflow: hidden;
    background: #1a1a1a;
}
.qu-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: #1a1a1a;
    z-index: 0;
}
.qu-hero > * { position: relative; z-index: 1; }

.qu-breadcrumb {
    position: absolute;
    top: 150px;
    left: 48px;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #c5c5c5;

}
.qu-bc-home {
    font-size: 18px;
    color: #F5C542;
    cursor: pointer;
    transition: color .25s;
}
.qu-bc-home:hover { color: #f5c542}
.qu-bc-sep { color: #C5C5C5; font-size: 14px; }
.qu-bc-current {
    color: #ddd;
    font-weight: 500;
    cursor: pointer;
    transition: color .25s;
}
.qu-bc-current:hover { color: #c9a84c; }

.qu-hero-content { display: flex; flex-direction: column; align-items: center; }

.qu-hero-badge {
    border: 1px solid #f5c542;
    color: #f5c542;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 6px 24px;
    border-radius: 50px;
    margin-bottom: 22px;
    background: transparent;
    cursor: pointer;
    transition: background-color .25s, color .25s, box-shadow .25s;






}
.qu-hero-badge:hover {
    background-color: #c9a84c;
    color: #000;
    box-shadow: 0 0 14px rgba(201,168,76,.5);
}

.qu-hero-heading {
    /* font-size: clamp(28px, 3.5vw, 48px);
    font-weight: 800;
    line-height: 1.2;
    color: #fff;
    margin-bottom: 16px;
    border: 1px solid #c9a84c; */
width: 576;
height: 50;
top: 321px;
left: 432px;
angle: 0 deg;
opacity: 1;
font-family: Inter;
font-weight: 800;
font-style: Extra Bold;
font-size: 42px;
leading-trim: NONE;
line-height: 50px;
letter-spacing: 4%;
text-align: center;
vertical-align: middle;
text-transform: capitalize;
color: #FFFFFF;
}
.qu-hero-gold {
    color: #f5c542;
    font-family: Inter;
font-weight: 800;
font-style: Extra Bold;
font-size: 42px;
leading-trim: NONE;
line-height: 50px;
letter-spacing: 4%;
text-align: center;
vertical-align: middle;
text-transform: capitalize;


    display: inline;





}

.qu-hero-subtext {
    /* font-size: 16px;
    font-weight: 400;
    line-height: 28px;
    color: #C5C5C5;
    max-width: 520px; */
 color: #C5C5C5;
font-family: Inter;
font-weight: 400;
font-style: Regular;
font-size: 18px;
leading-trim: NONE;
line-height: 26px;
letter-spacing: 2%;
text-align: center;
vertical-align: middle;
}

/* ── FORM SECTION ─────────────────────────── */
.qu-form-section {
    padding: 0 48px 48px;
    max-width: 1200px;
    margin: 0 auto;
    background-color: #202020;
    border-radius: 10px;
    border-left: 1px solid #2e2e2e;
    border-right: 1px solid #2e2e2e;
    border-bottom: 1px solid #2e2e2e;
    border-top: none;
}

.qu-form-wrapper {
    background-color: #202020;
    border-radius: 10px;
    padding: 40px 48px 40px;
    border: none;
}

.qu-form-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: #fff;
    text-align: center;
    padding-bottom: 14px;
    border-bottom: 3px solid #f5c542;
    display: table;
    margin: 0 auto 32px;
}

/* ── FORM LAYOUT ─────────────────────────── */
.qu-form {
    display: flex;
    flex-direction: column;
    gap: 22px;
}

.qu-row {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}
.qu-row .qu-field { flex: 1; }

.qu-row-2 { display: flex; gap: 20px; align-items: flex-start; }
.qu-row-2 .qu-field { flex: 1; }

.qu-row-d2 { display: flex; gap: 20px; align-items: flex-start; }
.qu-row-d2 .qu-field { flex: 1; }

.qu-row-3 { display: flex; gap: 20px; align-items: flex-start; }
.qu-row-3 .qu-field { flex: 1; }

.qu-row-4 { display: flex; gap: 20px; align-items: flex-start; }
.qu-row-4 .qu-field { flex: 1; }

.qu-field {
    display: flex;
    flex-direction: column;
    gap: 9px;
}

.qu-field label {
    font-size: 15px;
    font-weight: 500;
    color: #ffffff;
    letter-spacing: 0;
    line-height: 1;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
}

.qu-req {
    color: #f5c542; }

/* ── INPUTS ──────────────────────────────── */
.qu-field input,
.qu-field select,
.qu-field textarea {
    background-color: #1a1a1a;
    border: 1px solid #333;
    border-radius: 8px;
    color: #fff;
    font-size: 14px;
    padding: 11px 14px;
    outline: none;
    font-family: inherit;
    transition: border-color .25s;
    width: 100%;
    appearance: none;
    -webkit-appearance: none;
}
.qu-field input::placeholder,
.qu-field textarea::placeholder { color: #555; }
.qu-field input:focus,
.qu-field select:focus,
.qu-field textarea:focus { border-color: #c9a84c; }

.qu-field select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23c9a84c' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
    padding-right: 36px;
    cursor: pointer;
}
.qu-field select option { background-color: #242424; color: #fff; }
.qu-field textarea { resize: none; height: 120px; line-height: 1.6; }

/* ── FILE UPLOAD ─────────────────────────── */
.qu-upload-wrap {
    display: flex;
    align-items: center;
    background-color: #1a1a1a;
    border: 1px solid #333;
    border-radius: 8px;
    overflow: hidden;
    transition: border-color .25s;
}
.qu-upload-wrap:focus-within {
    border-color: #c5c5c5;



}
.qu-file-name {
    flex: 1;
    padding: 11px 14px;
    font-size: 14px;
    color: #555;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.qu-upload-btn {
    background-color: #f5c542;
    color: #000000 !important;
    font-size: 14px;
    font-weight: 700;
    padding: 11px 24px;
    display: flex;
    align-items: center;
    cursor: pointer;
    white-space: nowrap;
    transition: background-color .25s;
    font-family: inherit;
}
.qu-upload-btn:hover { background-color: #e0bc60; }

/* ── SUBMIT BUTTON ───────────────────────── */
.qu-submit-row { display: flex; justify-content: center; margin-top: 10px; }

.qu-btn {
    background-color: #f5c542;
    color: #000;
    border: none;
    padding: 17px 0;
    width: 100%;
    border-radius: 50px;
    font-size: 1.05rem;
    font-weight: 700;
    cursor: pointer;
    font-family: inherit;
    letter-spacing: .5px;
    transition: background-color .25s, transform .25s, box-shadow .25s;
}
.qu-btn:hover {
    background-color: #e0bc60;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(201,168,76,.4);
}

/* ── WHY CHOOSE US ────────────────────────── */
.qu-why-section {
    padding: 52px 48px 64px;
    max-width: 1400px;
    margin: 0 auto;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.qu-why-badge {
    border: 0.5px solid #f5c542;
    color: #f5c542;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 6px 24px;
    border-radius: 50px;
    margin-bottom: 18px;
    background: transparent;
    cursor: pointer;
    transition: background-color 0.25s, color 0.25s, box-shadow 0.25s;
}
.qu-why-badge:hover {
    background-color: #f5c542;
    color: #000000;
    box-shadow: 0 0 14px rgba(245, 197, 66, 0.5);
}

.qu-why-heading {
    font-size: clamp(22px, 2.8vw, 36px);
    font-weight: 800;
    color: #fff;
    margin-bottom: 12px;
    line-height: 1.2;
}
.qu-why-subtext {
    font-size: 15px;
    color: #C5C5C5;
    line-height: 26px;
    margin-bottom: 36px;
    max-width: 560px;
}

.qu-why-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    width: 100%;
}
.qu-why-card {
    background-color: #242424;
    border-radius: 14px;
    padding: 28px 20px;
    text-align: center;
    border: 0.3px solid #F5C542;
    transition: transform .25s, box-shadow .25s;
}
.qu-why-card:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,.4); }

.qu-why-icon {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    border: 2px solid #f5c542;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
    color: #f5c542;
    font-size: 20px;
}
.qu-why-card h3 { font-size: 14px; font-weight: 700; color: #fff; margin-bottom: 12px; line-height: 1.4; }
.qu-why-card p  { font-size: 13px; color: #aaa; line-height: 1.65; }

/* Mobile-only line break */
.qu-mob-br    { display: none; }
.qu-mob-break { display: none; }

/* ── TABLET  ≤ 1100px ────────────────────── */
@media (max-width: 1100px) {
    .qu-form-section  { max-width: 1000px; padding: 0 36px 40px; }
    .qu-form-wrapper  { padding: 36px 36px; }
    .qu-why-section   { padding: 44px 36px 56px; }
    .qu-why-cards     { gap: 16px; }
}

/* ── MOBILE  ≤ 768px ─────────────────────── */
@media (max-width: 768px) {
    .qu-mob-br    { display: inline; }
    .qu-mob-break { display: block; }

    .qu-hero {
        min-height: unset;
        padding: 25vw 6vw 10vw;
    }
    .qu-breadcrumb { top: 18vw; left: 4vw; font-size: 3.5vw; }

    .qu-hero-badge {
        font-size: 2.8vw;
        padding: 1.5vw 6vw;
        letter-spacing: 0.4em;
        margin-bottom: 4vw;
    }
    .qu-hero-heading {
        font-size: 6.5vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1vw;
    }
    .qu-hero-gold { display: block; }
    .qu-hero-subtext { font-size: 3.8vw; line-height: 1.75; }

    .qu-form-section  { max-width: 100%; padding: 0 4vw 8vw; }
    .qu-form-wrapper  { padding: 7vw 4vw; }
    .qu-form-title    { font-size: 5vw; }

    .qu-field label { font-size: 3.8vw; }
    .qu-field input,
    .qu-field select,
    .qu-field textarea { font-size: 3.8vw; padding: 3vw 3.5vw; }

    .qu-row-d2 { flex-direction: column; gap: 5vw; }
    .qu-row-d2 .qu-field { flex: 1 1 100%; width: 100%; }

    .qu-row-4 { flex-wrap: wrap; gap: 3vw; }
    .qu-row-4 .qu-field { flex: 0 0 calc(50% - 1.5vw); }

    .qu-row-3 { flex-wrap: wrap; gap: 3vw; }
    .qu-row-3 .qu-field { flex: 0 0 calc(50% - 1.5vw); }

    .qu-row-2 { gap: 3vw; }

    .qu-upload-btn { font-size: 3.8vw; padding: 3vw 6vw; }
    .qu-file-name  { font-size: 3.8vw; }

    .qu-btn { font-size: 4.5vw; padding: 4.5vw 0; }

    .qu-why-section { padding: 10vw 4vw 14vw; }
    .qu-why-heading { font-size: 6.5vw; }
    .qu-why-badge   { font-size: 2.8vw; padding: 1.5vw 6vw; letter-spacing: 0.4em; }
    .qu-why-subtext { font-size: 3.8vw; }
    .qu-why-cards   { grid-template-columns: repeat(2, 1fr); gap: 3.5vw; }
    .qu-why-card    { padding: 5.5vw 3.5vw; }
    .qu-why-card h3 { font-size: 3.8vw; }
    .qu-why-card p  { font-size: 3.5vw; }
}

@media (max-width: 480px) {
    .qu-hero-heading { font-size: 7.5vw; }
    .qu-why-cards    { grid-template-columns: 1fr; }
}
</style>

    <!-- Hero Section -->
    <section class="qu-hero">
        <nav class="qu-breadcrumb">
            <span class="qu-bc-home">&#8962;</span>
            <span class="qu-bc-sep">&#187;</span>
            <span class="qu-bc-current">Get Instant Quote</span>
        </nav>
        <div class="qu-hero-content">
            <!-- <button class="qu-hero-badge">GET QUOTE</button> -->
            <h1 class="qu-hero-heading">
                Request An <span class="qu-hero-gold">Instant Quote</span>
            </h1>
            <p class="qu-hero-subtext">
                Fill in the details below and receive a tailored<br>
                estimate within minutes. No steps, just<br>
                straightforward.
            </p>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section class="qu-form-section">
        <div class="qu-form-wrapper">
            <h2 class="qu-form-title">Tell Us About Your Project</h2>

            <form class="qu-form" id="quoteForm" action="{{ url('submit-quote') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="source" value="Request quote page">
                <input type="hidden" name="page_url" value="{{ url()->current() }}">

                <!-- Name + Email -->
                <div class="qu-row qu-row-d2">
                    <div class="qu-field">
                        <label>Name <span class="qu-req">*</span></label>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="qu-field">
                        <label>Email Address <span class="qu-req">*</span></label>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <!-- Phone + Physical Address -->
                <div class="qu-row qu-row-d2">
                    <div class="qu-field">
                        <label>Phone <span class="qu-req">*</span></label>
                        <input type="tel" name="phone" placeholder="Enter your number" required>
                    </div>
                    <div class="qu-field">
                        <label>Physical Address</label>
                        <input type="text" name="address" placeholder="Enter your address">
                    </div>
                </div>

                <!-- Width + Length + Depth + Units -->
                <div class="qu-row qu-row-4">
                    <div class="qu-field">
                        <label>Width <span class="qu-req">*</span></label>
                        <input type="number" name="width" placeholder="Width" required>
                    </div>
                    <div class="qu-field">
                        <label>Length <span class="qu-req">*</span></label>
                        <input type="number" name="length" placeholder="Length" required>
                    </div>
                    <div class="qu-field">
                        <label>Depth <span class="qu-req">*</span></label>
                        <input type="number" name="depth" placeholder="Depth" required>
                    </div>
                    <div class="qu-field">
                        <label>Units <span class="qu-req">*</span></label>
                        <select name="unit" required>
                            <option>Inch</option>
                            <option>cm</option>
                            <option selected>mm</option>
                        </select>
                    </div>
                </div>

                <!-- Material + Color + Addons -->
                <div class="qu-row qu-row-3">
                    <div class="qu-field">
                        <label>Select Material</label>
                        @php
                            $materialCategory = DB::table('add_category')->where('name', 'Box by Material')->first();
                            $materials = $materialCategory ? DB::table('add_category')->where('parent_category', $materialCategory->cat_id)->where('status', 1)->get() : collect([]);
                        @endphp
                        <select name="material" class="form-control" style="background: #111; color: white; border: 1px solid #222;">
                            <option value="">Choose option</option>
                            @foreach($materials as $material)
                                <option value="{{ $material->name }}">{{ $material->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="qu-field">
                        <label>Color Options</label>
                        <select name="color_options">
                            <option value="">Choose option</option>
                            <option>CMYK</option>
                            <option>PMS</option>
                            <option>No Print</option>
                        </select>
                    </div>
                    <div class="qu-field">
                        <label>Select Product Name</label>
                        <select name="product_name">
                            <option value="">Choose option</option>
                            <option>Foil Stamping</option>
                            <option>Embossing</option>
                            <option>UV Coating</option>
                            <option>Matte Lamination</option>
                        </select>
                    </div>
                </div>

                <!-- Quantity + Upload -->
                <div class="qu-row qu-row-2">
                    <div class="qu-field">
                        <label>Quantity <span class="qu-req">*</span></label>
                        <input type="number" name="quantity" placeholder="Enter quantity" required>
                    </div>
                    <div class="qu-field">
                        <label>Upload File Here</label>
                        <div class="qu-upload-wrap">
                            <span class="qu-file-name" id="fileName">No file choosen</span>
                            <label for="fileInput" class="qu-upload-btn">Upload</label>
                            <input type="file" name="artwork" id="fileInput" hidden>
                        </div>
                    </div>
                </div>

                <!-- Message -->
                <div class="qu-field">
                    <label>Message</label>
                    <textarea name="message" placeholder="Enter your message"></textarea>
                </div>

                <div class="qu-submit-row">
                    <button type="submit" class="qu-btn">Instant Quote</button>
                </div>

            </form>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="qu-why-section">
        <button class="qu-why-badge">WHY CHOOSE US</button>
        <h2 class="qu-why-heading">Packaging Excellence<span class="qu-mob-br"><br></span> You Can Trust</h2>
        <p class="qu-why-subtext">
            We craft premium custom packaging that<br class="qu-mob-break">
            elevates your brand and delivers a flawless<br class="qu-mob-break">
            unboxing experience.
        </p>
        <div class="qu-why-cards">
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/circular- packaging -solutions.svg') }}" alt="Circular Packaging Solutions" style="width: 24px; height: auto;"></div>
                <h3>Circular Packaging Solutions</h3>
                <p>We offer sustainable circular packaging solutions designed to reduce waste while maintaining premium quality and structural strength standards.</p>
            </div>
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/price.svg') }}" alt="Competitive Prices" style="width: 24px; height: auto;"></div>
                <h3>Competitive Prices</h3>
                <p>We deliver high-quality packaging solutions at competitive prices ensuring value for money without compromising design or durability.</p>
            </div>
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/Premium-quality.svg') }}" alt="Premium Quality" style="width: 24px; height: auto;"></div>
                <h3>Premium Quality</h3>
                <p>We use high-quality materials and precision craftsmanship to deliver packaging that reflects your brand's value.</p>
            </div>
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/end-toend-service.svg') }}" alt="End To End Service" style="width: 24px; height: auto;"></div>
                <h3>End To End Service</h3>
                <p>We provide complete end to end packaging solutions from concept design to production and final delivery support.</p>
            </div>
        </div>
    </section>










<script>
    // ============================================
//  FORM TITLE LINE — title width ke barabar
// ============================================
window.addEventListener('DOMContentLoaded', () => {
    const title = document.querySelector('.qu-form-title');
    const line = document.querySelector('.qu-form-title-line');
    if (title && line) {
        line.style.width = title.offsetWidth + 'px';
    }
});

// ============================================
//  FILE UPLOAD — filename show karo
// ============================================
const fileInput = document.getElementById('fileInput');
const fileName = document.getElementById('fileName');

if (fileInput) {
    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            fileName.textContent = fileInput.files[0].name;
            fileName.style.color = '#ffffff';
        } else {
            fileName.textContent = 'No file chosen';
            fileName.style.color = '#555555';
        }
    });
}

// ============================================
//  QUOTE FORM — submit handler
// ============================================
const quoteForm = document.getElementById('quoteForm');

if (quoteForm) {
    quoteForm.addEventListener('submit', (e) => {
        e.preventDefault();

        quoteForm.submit();
    });
}

</script>
@include('web/footer')
