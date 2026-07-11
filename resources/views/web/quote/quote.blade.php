
@include('web/header')
<style>
*, *::before, *::after { box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    background-color: #1a1a1a;
    color: #ffffff;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

.qu-breadcrumb {
    width: calc(100% - 192px);
    max-width: 1856px;
    margin: 0 auto 10px;
    display: flex !important;
    align-items: center;
    gap: 18px;
    color: #9a9a9a;
    font-size: 15px !important;
    font-weight: 500;
    line-height: 1;
    text-align: left;
}


.qu-hero {
    width: 100%;
    background: #1a1a1a;
    text-align: center;
    padding: 158px 0 38px;
}
.qu-hero-content {
    max-width: 560px;
    margin: 0 auto;
    padding: 0 24px;
}
.qu-hero-heading {
    margin: 0 0 12px;
    color: #ffffff;
    font-size: 30px !important;
    font-weight: 800;
    line-height: 1.12;
    letter-spacing: 0;
}
.qu-hero-gold {
    color: #f5c542;
}
.qu-hero-subtext {
    margin: 0 auto;
    max-width: 470px;
    color: #b8b8b8;
    font-size: 13px !important;
    font-weight: 400;
    line-height: 1.45;
    letter-spacing: 0.02em;
    text-align: center;
}

.qu-form-section {
    width: min(100% - 48px, 760px);
    margin: 0 auto;
    padding: 0;
    background: #202020;
    border: 1px solid #f5c542;
    border-radius: 18px;
}
.qu-form-wrapper {
    padding: 34px 72px 32px;
}
.qu-form-title {
    width: fit-content;
    margin: 0 auto 24px;
    padding: 0 0 12px;
    color: #ffffff;
    border-bottom: 3px solid #f5c542;
    font-size: 23px !important;
    font-weight: 800;
    line-height: 1.15;
    text-align: center;
}
.qu-form {
    display: flex;
    flex-direction: column;
    gap: 18px;
}
.qu-row {
    display: grid;
    gap: 18px;
    align-items: start;
}
.qu-row-d2,
.qu-row-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}
.qu-row-3 {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}
.qu-row-4 {
    grid-template-columns: 1.15fr 1.15fr 1.15fr 0.75fr;
}
.qu-row-qty-upload {
    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
}
.qu-field {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.qu-field label {
    margin: 0;
    color: #ededed;
    font-size: 11px !important;
    font-weight: 500;
    line-height: 1.2;
}
.qu-req { color: #ffffff; }
.qu-field input,
.qu-field select,
.qu-field textarea {
    width: 100%;
    min-width: 0;
    height: 40px;
    margin: 0;
    padding: 0 16px;
    background-color: #1a1a1a;
    border: 1px solid #414141;
    border-radius: 6px;
    color: #ffffff;
    outline: none;
    font-family: inherit;
    font-size: 12px !important;
    line-height: 1.2;
    appearance: none;
    -webkit-appearance: none;
    transition: border-color .2s, box-shadow .2s;
}
.qu-field input::placeholder,
.qu-field textarea::placeholder {
    color: #6e6e6e;
}
.qu-field input:-webkit-autofill,
.qu-field input:-webkit-autofill:hover,
.qu-field input:-webkit-autofill:focus,
.qu-field textarea:-webkit-autofill,
.qu-field textarea:-webkit-autofill:hover,
.qu-field textarea:-webkit-autofill:focus,
.qu-field select:-webkit-autofill,
.qu-field select:-webkit-autofill:hover,
.qu-field select:-webkit-autofill:focus {
    -webkit-box-shadow: 0 0 0 1000px #1a1a1a inset !important;
    -webkit-text-fill-color: #ffffff !important;
    caret-color: #ffffff;
    border-color: #f5c542;
}
.qu-field input[type="number"]::-webkit-outer-spin-button,
.qu-field input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.qu-field input[type="number"] {
    -moz-appearance: textfield;
}
.qu-field input:focus,
.qu-field select:focus,
.qu-field textarea:focus,
.qu-upload-wrap:focus-within {
    border-color: #f5c542;
    box-shadow: 0 0 0 1px rgba(245, 197, 66, 0.16);
}
.qu-field select {
    padding-right: 38px;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23bdbdbd' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 14px center;
}
.qu-field select option {
    background-color: #202020;
    color: #ffffff;
}
.qu-field textarea {
    height: 84px;
    padding-top: 14px;
    padding-bottom: 14px;
    resize: none;
    line-height: 1.45;
}
.qu-upload-wrap {
    display: flex;
    min-width: 0;
    height: 40px;
    overflow: hidden;
    background-color: #1a1a1a;
    border: 1px solid #414141;
    border-radius: 6px;
    transition: border-color .2s, box-shadow .2s;
}
.qu-file-name {
    flex: 1;
    min-width: 0;
    padding: 0 16px;
    color: #6e6e6e;
    font-size: 12px !important;
    line-height: 40px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.qu-upload-btn {
    width: 76px;
    flex: 0 0 76px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #f5c542;
    color: #000000 !important;
    cursor: pointer;
    font-family: inherit;
    font-size: 11px !important;
    font-weight: 900 !important;
    line-height: 1;
}
.qu-submit-row {
    display: flex;
    justify-content: center;
    margin-top: 12px;
}
.qu-btn {
    width: 100%;
    height: 40px;
    border: 0;
    border-radius: 999px;
    background-color: #f5c542;
    color: #000000;
    cursor: pointer;
    font-family: inherit;
    font-size: 13px !important;
    font-weight: 800;
    line-height: 1;
}
.qu-form-status {
    display: none;
    margin-top: 14px;
    padding: 12px 16px;
    border-radius: 8px;
    background: rgba(245, 197, 66, 0.12);
    border: 1px solid rgba(245, 197, 66, 0.34);
    color: #f5c542;
    font-size: 13px !important;
    font-weight: 600;
    line-height: 1.45;
    text-align: center;
}
.qu-form-status.is-error {
    background: rgba(255, 85, 85, 0.12);
    border-color: rgba(255, 85, 85, 0.34);
    color: #ff8b8b;
}

.qu-why-section {
    width: 100%;
    max-width: none;
    margin: 0 auto;
    padding: 46px 0 54px;
    background: #1a1a1a;
    text-align: center;
    scroll-margin-top: 170px;
}
.qu-why-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 28px;
    margin: 0 0 18px;
    padding: 0 18px;
    border: 1px solid rgba(245, 197, 66, 0.8);
    border-radius: 999px;
    color: #f5c542;
    font-size: 10px !important;
    font-weight: 700;
    letter-spacing: 0.14em;
    text-transform: uppercase;
}
.qu-why-heading {
    margin: 0 0 12px;
    color: #ffffff;
    font-size: 24px !important;
    font-weight: 800;
    line-height: 1.2;
}
.qu-why-subtext {
    max-width: 520px;
    margin: 0 auto 34px;
    color: #bdbdbd;
    font-size: 13px !important;
    line-height: 1.65;
}
.qu-why-cards {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 20px;
    width: calc(100% - 192px);
    max-width: 1856px;
    margin: 0 auto;
}
.qu-why-card {
    min-height: 178px;
    padding: 28px 22px 24px;
    background-color: #242424;
    border: 1px solid rgba(245, 197, 66, 0.34);
    border-radius: 4px;
    text-align: center;
}
.qu-why-icon {
    width: 34px;
    height: 34px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.qu-why-icon img {
    width: 34px !important;
    height: 34px !important;
    object-fit: contain;
}
.qu-why-card h3 {
    margin: 0 0 12px;
    color: #ffffff;
    font-size: 14px !important;
    font-weight: 800;
    line-height: 1.25;
}
.qu-why-card p {
    margin: 0;
    color: #b8b8b8;
    font-size: 13px !important;
    line-height: 1.55;
}
.qu-mob-br,
.qu-mob-break { display: none; }

/* Match all desktop page content to the shared header grid. */
@media (min-width: 901px) {
    .qu-breadcrumb,
    .qu-why-cards {
        width: 100%;
        max-width: 1380px;
        padding-left: 55px;
        padding-right: 55px;
    }
}

@media (max-width: 900px) {
    .qu-form-section { width: min(100% - 32px, 760px); }
    .qu-form-wrapper { padding: 30px 34px; }
    .qu-why-cards { width: calc(100% - 32px); grid-template-columns: repeat(2, minmax(0, 1fr)); }
    .qu-why-card { min-height: 190px; padding: 28px 22px; }
    .qu-breadcrumb { width: calc(100% - 32px); }
}

@media (max-width: 640px) {
    .qu-hero { padding: 46px 0 28px; }
    .qu-breadcrumb {
        width: calc(100% - 32px);
        gap: 10px;
        margin-bottom: 20px;
        font-size: 13px !important;
    }
    .qu-hero-heading { font-size: 27px !important; }
    .qu-hero-subtext { font-size: 12px !important; }
    .qu-form-section {
        width: calc(100% - 24px);
        border-radius: 14px;
    }
    .qu-form-wrapper { padding: 24px 18px; }
    .qu-form-title { font-size: 22px !important; margin-bottom: 22px; }
    .qu-form { gap: 16px; }
    .qu-row,
    .qu-row-d2,
    .qu-row-2,
    .qu-row-3,
    .qu-row-4,
    .qu-row-qty-upload {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    .qu-field input,
    .qu-field select,
    .qu-field textarea,
    .qu-upload-wrap,
    .qu-btn {
        height: 42px;
    }
    .qu-field textarea { height: 86px; }
    .qu-file-name { line-height: 42px; }
    .qu-why-section { padding: 28px 12px 28px; scroll-margin-top: 120px; }
    .qu-why-badge { font-size: 9px !important; }
    .qu-why-heading { font-size: 23px !important; }
    .qu-why-subtext { font-size: 12px !important; }
    .qu-why-cards { grid-template-columns: 1fr; }
    .qu-why-card { min-height: auto; padding: 28px 22px; }
    .qu-why-card h3 { font-size: 16px !important; }
    .qu-why-card p { font-size: 14px !important; }
}
</style>

    <!-- Hero Section -->
    <section class="qu-hero">
        @include('web.components.breadcrumb', [
            'class' => 'qu-breadcrumb',
            'items' => [
                ['label' => 'Get Instant Quote']
            ]
        ])
        <div class="qu-hero-content">
            <!-- <button class="qu-hero-badge">GET QUOTE</button> -->
            <h1 class="qu-hero-heading">
                Request An <span class="qu-hero-gold">Instant Quote</span>
            </h1>
            <p class="qu-hero-subtext">
                Fill in the details below and receive a tailored estimate within minutes. No steps, just straightforward.
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
                        <input type="text" name="name" placeholder="Enter your name" required spellcheck="false" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                    </div>
                    <div class="qu-field">
                        <label>Email Address <span class="qu-req">*</span></label>
                        <input type="email" name="email" placeholder="Enter your email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                    </div>
                </div>

                <!-- Phone + Physical Address -->
                <div class="qu-row qu-row-d2">
                    <div class="qu-field">
                        <label>Phone <span class="qu-req">*</span></label>
                        <input type="tel" name="phone" placeholder="Enter your number" required oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
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
                        <input type="number" name="width" placeholder="Width" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                    </div>
                    <div class="qu-field">
                        <label>Length <span class="qu-req">*</span></label>
                        <input type="number" name="length" placeholder="Length" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                    </div>
                    <div class="qu-field">
                        <label>Depth <span class="qu-req">*</span></label>
                        <input type="number" name="depth" placeholder="Depth" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
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
                        <select name="material">
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
                        <label>Addons</label>
                        <select name="product_name">
                            <option value="">Choose option</option>
                            <option>Embossing</option>
                            <option>Debossing</option>
                            <option>Foil Stamping</option>
                            <option>Spot UV</option>
                            <option>Window Patching</option>
                        </select>
                    </div>
                </div>

                <!-- Quantity + Upload -->
                <div class="qu-row qu-row-qty-upload">
                    <div class="qu-field">
                        <label>Quantity <span class="qu-req">*</span></label>
                        <input type="number" name="quantity" placeholder="Enter quantity" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                    </div>
                    <div class="qu-field">
                        <label>Upload File Here</label>
                        <div class="qu-upload-wrap">
                            <span class="qu-file-name" id="fileName">No file chosen</span>
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
                <div class="qu-form-status" id="quoteFormStatus" role="status" aria-live="polite"></div>

            </form>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="qu-why-section">
      
        <h2 class="qu-why-heading">Packaging Excellence<span class="qu-mob-br"><br></span> You Can Trust</h2>
        <p class="qu-why-subtext">
            We craft premium custom packaging that<br class="qu-mob-break">
            elevates your brand and delivers a flawless<br class="qu-mob-break">
            unboxing experience.
        </p>
        <div class="qu-why-cards">
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/circular- packaging -solutions.svg') }}" alt="circular packaging solutions" title="Circular Packaging Solutions" style="width: 24px; height: auto;"></div>
                <h3>Circular Packaging Solutions</h3>
                <p>We offer sustainable circular packaging solutions designed to reduce waste while maintaining premium quality and structural strength standards.</p>
            </div>
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/price.svg') }}" alt="competitive prices" title="Competitive Prices" style="width: 24px; height: auto;"></div>
                <h3>Competitive Prices</h3>
                <p>We deliver high-quality packaging solutions at competitive prices ensuring value for money without compromising design or durability.</p>
            </div>
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/Premium-quality.svg') }}" alt="premium quality" title="Premium Quality" style="width: 24px; height: auto;"></div>
                <h3>Premium Quality</h3>
                <p>We use high-quality materials and precision craftsmanship to deliver packaging that reflects your brand's value.</p>
            </div>
            <div class="qu-why-card">
                <div class="qu-why-icon"><img src="{{ asset('images/about/end-toend-service.svg') }}" alt="end to end service" title="End To End Service" style="width: 24px; height: auto;"></div>
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
const quoteFormStatus = document.getElementById('quoteFormStatus');

if (quoteForm) {
    quoteForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const submitBtn = quoteForm.querySelector('.qu-btn');
        const originalBtnText = submitBtn ? submitBtn.textContent : '';

        if (quoteFormStatus) {
            quoteFormStatus.style.display = 'none';
            quoteFormStatus.classList.remove('is-error');
            quoteFormStatus.textContent = '';
        }

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';
        }

        try {
            const response = await fetch(quoteForm.action, {
                method: 'POST',
                body: new FormData(quoteForm),
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error('Unable to submit quote');
            }

            const result = await response.json();
            quoteForm.reset();

            if (fileName) {
                fileName.textContent = 'No file chosen';
                fileName.style.color = '#555555';
            }

            if (quoteFormStatus) {
                quoteFormStatus.textContent = result.message || 'Thank you for the inquiry, our sales representative will contact soon!';
                quoteFormStatus.style.display = 'block';
            }
        } catch (error) {
            if (quoteFormStatus) {
                quoteFormStatus.textContent = 'Sorry, something went wrong. Please try again.';
                quoteFormStatus.classList.add('is-error');
                quoteFormStatus.style.display = 'block';
            }
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = originalBtnText;
            }
        }
    });
}

</script>
@include('web/components_cta_banner')
@include('web/footer')
