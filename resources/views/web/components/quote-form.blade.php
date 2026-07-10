<style>
.quote-section {
  width: 100%;
  padding: 15px 5%;
  box-sizing: border-box;
  background-color: #151515; /* Layout background floor */
  font-family: var(--font-body), sans-serif;
}

.quote-container {
  width: 100%;
  max-width: 1239px;
  margin: 0 auto;
  border-radius: 8px;
  display: flex;
  align-items: stretch;
  justify-content: center;
  gap: 0;
  overflow: hidden;
  box-sizing: border-box;
}

/* --- Column 1 Layout (Image Panel) --- */
.quote-steps-col {
  width: 368px;
  background-color: var(--bg-darker);
  padding: 0;
  box-sizing: border-box;
  display: flex;
  align-items: stretch;
  justify-content: center;
  overflow: hidden;
  align-self: stretch;
}

.quote-side-image {
  width: 100%;
  height: 100%;
  position: relative;
  display: flex;
  flex: 1;
}

.quote-side-image img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain;
  object-position: center top;
  display: block;
}

/* --- Column 2 Layout (Request Free Quote Form Container) --- */
.quote-form-col {
  flex: 1;
  background-color: var(--bg-dark);
  border-radius: 0 8px 8px 0;
  padding: 15px 45px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
}

/* Main Form Heading */
.quote-form-col h2 {
  width: 400px;
  height: 44px;
  font-family: var(--font-heading), sans-serif;
  font-weight: 700;
  font-size: 28px;
  line-height: 44px;
  color: var(--text-main);
  margin: 0 auto 20px auto;
  text-align: center;
}

.instant-quote-form {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

/* --- Structural Form Grids --- */
.form-row {
  display: grid;
  gap: 12px;
  width: 100%;
  box-sizing: border-box;
}

/* Double input fields: Name, Email, Phone, Address */
.dual-grid {
  grid-template-columns: repeat(2, 1fr);
}

/* Dimensions Row: Width, Length, Depth, Unit */
.dimensions-grid {
  grid-template-columns: repeat(4, 1fr);
  width: 100%;
}

/* Dropdown selections: Material, Colors, Addons */
.options-grid-custom {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  width: 100%;
}
.options-grid-custom > .form-group:nth-child(1),
.options-grid-custom > .form-group:nth-child(2),
.options-grid-custom > .form-group:nth-child(3) {
  grid-column: span 2;
}
.options-grid-custom > .form-group:nth-child(4),
.options-grid-custom > .form-group:nth-child(5) {
  grid-column: span 3;
}

.triple-grid {
  grid-template-columns: repeat(3, 1fr);
  width: 100%;
}

.quantity-upload-grid {
  grid-template-columns: repeat(2, 1fr);
  width: 100%;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 0px;
  height: 38px;
}

.form-group.textarea-group {
  height: auto;
  min-height: 70px;
  width: 100%;
}

.form-group > label {
  display: none;
  font-size: 13px;
  color: #ffffff;
  font-weight: 500;
  margin-bottom: 5px;
}

/* --- Component Fields Controls --- */
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  height: 38px;
  background-color: #1a1a1a; /* Keeping dark theme inputs */
  border: 1px solid #333; /* Exact border color from Figma */
  border-radius: 6px;
  padding: 8px 12px;
  color: var(--text-main);
  font-size: 13px;
  box-sizing: border-box;
  outline: none;
}

/* Dropdown - custom arrow with proper right spacing */
.form-group select {
  padding-right: 36px !important;
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  appearance: none !important;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23aaa' stroke-width='1.5' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E") !important;
  background-repeat: no-repeat !important;
  background-position: right 12px center !important;
  background-size: 12px 8px !important;
}

.form-group textarea {
  height: 70px;
  resize: none;
}

/* File Upload Wrapper Styling */
/* File Upload Wrapper Styling */
.file-upload-wrapper {
  display: flex;
  border: 1px solid #333;
  border-radius: 6px;
  background-color: var(--bg-darker);
  overflow: hidden;
  height: 38px;
  box-sizing: border-box;
}

.file-upload-wrapper input[type="text"],
.file-upload-wrapper input:not([type="submit"]):not([type="button"]) {
  border: none;
  height: 100%;
  background: transparent;
  color: #fff;
  padding: 0 12px;
  outline: none;
}

/* --- BULLETPROOF UPLOAD BUTTON --- */
.upload-btn {
  background-color: var(--accent-gold) !important; /* Force gold bg */
  color: var(--bg-darker) !important; /* Force dark text color override */

  /* Kill native element defaults (links, buttons, labels) */
  border: none;
  outline: none;
  text-decoration: none;
  -webkit-appearance: none;
  appearance: none;

  font-weight: 700;
  padding: 0 16px;

  display: flex;
  align-items: center;
  justify-content: center; /* Centers text/icons horizontally */
  align-self: stretch; /* Stretches the button to perfectly fill the parent height */
  height: 100%; /* Fallback vertical height alignment */

  gap: 8px;
  cursor: pointer;
  font-size: 16px;
  white-space: nowrap; /* Prevents button text from breaking into two lines */
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}

/* Special target fix if the button tag is a native browser input/button element */
.upload-btn::-webkit-file-upload-button {
  color: var(--bg-darker) !important;
  font-weight: 700 !important;
}
/* --- Submit Action Button Design --- */
.submit-quote-btn {
  width: 298px;
  height: 42px;
  background-color: var(--accent-gold);
  color: var(--bg-dark);
  font-family: var(--font-heading), sans-serif;
  font-size: 15px;
  font-weight: 700;
  border: none;
  border-radius: 40px;
  padding: 10px 20px;
  gap: 10px;
  cursor: pointer;
  margin: 15px auto 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.2s;
}/* removed hover: .submit-quote-btn:hover { ... } */

/* --- Inline Human Verification (Inside Form) --- */
.human-verification-inline {
  width: 100%;
  padding: 12px 20px;
  background-color: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 193, 7, 0.2);
  border-radius: 8px;
  box-sizing: border-box;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 15px;
}

.human-verification-header {
  display: flex;
  flex-direction: column;
  gap: 2px;
}

.human-verification-inline-title {
  color: var(--text-main);
  font-size: 15px;
  font-weight: 700;
  margin: 0;
}

.human-verification-inline-copy {
  color: var(--text-muted);
  font-size: 13px;
  margin: 0;
}

.human-verification-inline-control {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-wrap: wrap;
}

.human-question {
  color: var(--accent-gold);
  font-weight: 700;
  white-space: nowrap;
  font-size: 15px;
}

.human-answer {
  width: 110px;
  height: 44px;
  background-color: var(--bg-darker);
  border: 0.2px solid #727272;
  border-radius: 8px;
  color: var(--text-main);
  text-align: center;
  outline: none;
  padding: 0 12px;
  font-size: 14px;
}

.human-check-btn {
  height: 44px;
  border: 0;
  border-radius: 999px;
  background-color: var(--accent-gold);
  color: var(--bg-dark);
  font-weight: 700;
  padding: 0 24px;
  cursor: pointer;
  transition: background-color 0.2s;
  font-size: 14px;
}/* removed hover: .human-check-btn:hover { ... } */

.human-status {
  color: var(--text-muted);
  font-size: 13px;
  margin: 0;
  min-height: 18px;
}

.human-status.is-error {
  color: #ff6b6b;
}

.human-status.is-success {
  color: #72d17f;
}

@media (max-width: 768px) {
  .human-verification-inline {
    padding: 18px 16px;
  }

  .human-verification-inline-title {
    font-size: 14px;
  }

  .human-verification-inline-copy {
    font-size: 12px;
  }

  .human-verification-inline-control {
    width: 100%;
  }

  .human-answer {
    flex: 1 1 90px;
    min-width: 90px;
  }

  .human-status {
    width: 100%;
  }s
}
/* --- Responsive Adaptations --- */
@media (max-width: 1200px) {
  .quote-container {
    flex-direction: column;
    height: auto;
  }
  .quote-steps-col,
  .quote-form-col {
    width: 100%;
    max-width: 100%;
  }
  .quote-steps-col {
    display: none !important;
  }

  .quote-side-image,
  .quote-side-image img {
    min-height: 360px;
  }
}
@media (max-width: 768px) {
  .quote-form-col h2 {
    font-family: "Inter", sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 1.3; /* Allows the height to scale naturally if it wraps */
    letter-spacing: 0%;

    /* Fixes */
    padding-bottom: 0; /* Changed 'NONE' to 0 */
    margin-left: 0; /* Reset any hardcoded left margins */
    left: auto; /* Reset absolute positioning if applied */
    text-align: center; /* Centers the heading nicely on mobile view */
    width: 100%; /* Forces it to use the available container width */
  }

  /* ... rest of your mobile styles ... */
}
@media (max-width: 768px) {
  .quote-steps-col {
    display: none !important;
  }
  .quote-form-col {
    padding: 35px 16px;
    border-radius: 0;
  }

  /* First 4 fields (Name, Email, Phone, Physical Address) - Full width in mobile */
  .instant-quote-form > .form-row.dual-grid {
    grid-template-columns: 1fr !important;
  }

  /* All standalone form-groups stay full width */
  .instant-quote-form > .form-group {
    width: 100%;
  }

  /* Redefine grid for other rows to ensure they stay as intended */
  .form-row {
    gap: 12px;
  }

  .triple-grid,
  .quantity-upload-grid {
    grid-template-columns: 1fr;
  }
  .dimensions-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  .options-grid-custom {
    grid-template-columns: repeat(2, 1fr);
  }
  /* Reset the span overrides from desktop so all 4 items show 2x2 */
  .options-grid-custom > .form-group:nth-child(1),
  .options-grid-custom > .form-group:nth-child(2),
  .options-grid-custom > .form-group:nth-child(3),
  .options-grid-custom > .form-group:nth-child(4) {
    grid-column: span 1;
  }
  /* Upload (5th item) spans both columns */
  .options-grid-custom > .form-group:nth-child(5) {
    grid-column: span 2;
  }
  .form-group,
  .form-row,
  .form-group.textarea-group {
    max-width: 100%;
    height: auto;
  }
  .form-group input,
  .form-group select {
    height: 46px;
  }
  .submit-quote-btn {
    width: 100%;
    margin-top: 10px;
  }
}


/* --- CTA Main Container Block --- */

/* Reduce gap above How it Works (Desktop) */
.cp-products, .box-by-industry, .cp-why {
  padding-bottom: 20px !important;
}
.hiw-section {
  padding-top: 20px !important;
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
.testimonials-header h2 {
  margin-top: 0 !important;
  margin-bottom: 10px !important;
}
.quote-section {
  padding-top: 20px !important;
  padding-bottom: 20px !important;
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
.pg-section {
  padding-top: 20px !important;
  margin-top: 0 !important;
}

@media (max-width: 768px) {
  /* Reduce gap above How it Works */
  .cp-products, .box-by-industry, .cp-why {
    padding-bottom: 10px !important;
  }
  .hiw-section {
    padding-top: 10px !important;
  }

  /* Reduce gap between Testimonials and Quote section */
  .testimonials-section {
    padding-bottom: 10px !important;
    margin-bottom: 0 !important;
  }
  .quote-section {
    padding-top: 10px !important;
    padding-bottom: 10px !important;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  
  /* Reduce gap between Quote section and FAQs */
  .pg-section {
    padding-top: 10px !important;
    margin-top: 0 !important;
  }
}
/* Standardize all wrappers to align with header logo (responsive spacing) */
.cp-wrap, 
.hiw-wrap, 
.pg-wrap, 
.product-container,
.industry-hero-content,
.hero-breadcrumb-desktop,
.customize-section,
.testimonials-wrap,
.tb-inner {
    max-width: 1440px !important;
    width: 100% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding-left: 55px !important; /* Default padding for laptop screens (aligns with 15px logo margin) */
    padding-right: 55px !important;
    box-sizing: border-box !important;
}

.customize-section {
    padding-top: 40px !important;
    padding-bottom: 40px !important;
}

@media (min-width: 1200px) {
    .cp-wrap, 
    .hiw-wrap, 
    .pg-wrap, 
    .product-container,
    .industry-hero-content,
    .hero-breadcrumb-desktop,
    .customize-section,
    .testimonials-wrap,
    .tb-inner {
        padding-left: 60px !important; /* Aligns with 20px logo margin */
        padding-right: 60px !important;
    }
}

@media (min-width: 1440px) {
    .cp-wrap, 
    .hiw-wrap, 
    .pg-wrap, 
    .product-container,
    .industry-hero-content,
    .hero-breadcrumb-desktop,
    .customize-section,
    .testimonials-wrap,
    .tb-inner {
        padding-left: 80px !important; /* Aligns with 40px logo margin */
        padding-right: 80px !important;
    }
}

@media (max-width: 768px) {
    .cp-wrap, 
    .hiw-wrap, 
    .pg-wrap, 
    .product-container,
    .industry-hero-content,
    .hero-breadcrumb-desktop,
    .customize-section,
    .testimonials-wrap,
    .tb-inner {
        padding-left: 20px !important;
        padding-right: 20px !important;
    }
}

/* Quote section alignment overrides */
/* Quote section alignment overrides to align exactly under the main container grid */
@media (min-width: 769px) {
    .quote-section {
        padding-left: 0 !important;
        padding-right: 0 !important;
        padding-top: 30px !important;
        padding-bottom: 30px !important;
        box-sizing: border-box !important;
    }
}
.quote-container {
    width: 100% !important;
    max-width: calc(100% - 110px) !important; /* Aligns with 55px left/right margins on laptop screens */
    margin: 0 auto !important;
}

@media (min-width: 1200px) {
    .quote-container {
        max-width: calc(100% - 120px) !important; /* Aligns with 60px left/right margins */
    }
}

@media (min-width: 1440px) {
    .quote-container {
        max-width: 1280px !important; /* Aligns with 1440px main container (minus 80px padding on each side) */
    }
}

@media (max-width: 768px) {
    .quote-container {
        max-width: 100% !important; /* Full width on mobile */
        border-radius: 0 !important;
    }
}

/* Allow Customize Your Box grid to span 100% width of the 1440px container */
.customize-grid {
    max-width: 100% !important;
}

/* Make customize section buttons and active states use primary yellow */
.filter-btn {
    border-color: #F8CB54 !important;
}
.filter-btn.active {
    background-color: #F8CB54 !important;
    border-color: #F8CB54 !important;
}

/* Reduce gap between customize header subtitle and filter buttons */
.customize-header {
    margin-bottom: 20px !important;
}
.filter-buttons {
    margin: 25px 0 !important;
}

/* Quote form styling overrides: autofill, placeholder, invalid states */
.quote-section input:-webkit-autofill,
.quote-section input:-webkit-autofill:hover, 
.quote-section input:-webkit-autofill:focus, 
.quote-section input:-webkit-autofill:active,
.quote-section select:-webkit-autofill,
.quote-section textarea:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px #171717 inset !important;
    -webkit-text-fill-color: #ffffff !important;
    transition: background-color 5000s ease-in-out 0s;
}

.quote-section input::placeholder,
.quote-section select::placeholder,
.quote-section textarea::placeholder {
    color: #ffffff !important;
    opacity: 1 !important;
}

.quote-section input:invalid,
.quote-section select:invalid,
.quote-section textarea:invalid,
.quote-section input:-moz-ui-invalid,
.quote-section input:valid {
    box-shadow: none !important;
    border-color: #333 !important;
    outline: none !important;
}

.quote-section input:focus,
.quote-section select:focus,
.quote-section textarea:focus {
    border-color: var(--accent-gold) !important;
}

/* Testimonial card internal spacing and button overrides */
.testimonial-card p {
    margin-bottom: 12px !important;
}
.read-more-btn {
    margin-bottom: 8px !important;
    text-decoration: none !important;
    outline: none !important;
    border: none !important;
    box-shadow: none !important;
    background: none !important;
    color: var(--text-muted) !important;
}
.read-more-btn:focus,
.read-more-btn:active,
.read-more-btn:hover {
    text-decoration: none !important;
    outline: none !important;
    box-shadow: none !important;
    border: none !important;
    background: none !important;
}

/* Remove default focus outlines for buttons on click */
.human-check-btn:focus,
.human-check-btn:active,
.human-check-btn:focus-visible,
.submit-quote-btn:focus,
.submit-quote-btn:active,
.submit-quote-btn:focus-visible,
.cq-submit-btn:focus,
.cq-submit-btn:active,
.cq-submit-btn:focus-visible {
    outline: none !important;
    box-shadow: none !important;
}
.testimonial-card .testi-name {
    margin-bottom: 3px !important;
    line-height: 1.2 !important;
}
.testimonial-card span {
    display: block !important;
    margin-top: 0px !important;
    line-height: 1.2 !important;
}


</style>
<!-- ================================================
     REQUEST A FREE QUOTE SECTION
     ================================================ -->
<section class="quote-section">
            <div class="quote-container">

                <div class="quote-steps-col">
                    <div class="quote-side-image">
                        <img src="{{ asset('uploads/form-cta.webp') }}" alt="custom packaging quote" title="Custom Packaging Quote">
                    </div>
                </div>
                <div class="quote-form-col">
                    <h2>Request a Free Quote</h2>

                    @if(Session::has('success'))
                        <div class="alert alert-success" style="background: #28a745; color: white; padding: 12px 20px; border-radius: 8px; margin-bottom: 20px; font-weight: 600; text-align: center;">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div id="ajax-quote-success" class="alert alert-success" style="display: none; background: rgba(245, 197, 66, 0.14); color: #f5c542; border: 1px solid rgba(245, 197, 66, 0.55); padding: 18px 24px; border-radius: 12px; margin-bottom: 20px; font-weight: 700; text-align: center; font-size: 18px; line-height: 1.45;">
                        Thank you for the inquiry, our sales representative will contact soon!
                    </div>

                    <form class="instant-quote-form" data-ajax-managed="true" action="{{ url('submit-quote') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="source" value="{{ $source ?? 'Instant Quote Form' }}">
                        <input type="hidden" name="page_url" value="{{ url()->current() }}">
                        <div class="form-row dual-grid">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" name="name" placeholder="Enter your name" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                            </div>
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="email" name="email" placeholder="Enter your email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                            </div>
                        </div>

                        <div class="form-row dual-grid">
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="tel" name="phone" placeholder="Enter your number" required oninput="this.value = this.value.replace(/[^0-9+]/g, '')">
                            </div>
                            <div class="form-group">
                                <label>Physical Address</label>
                                <input type="text" name="address" placeholder="Enter your address">
                            </div>
                        </div>

                        <div class="form-row dimensions-grid">
                            <div class="form-group">
                                <label>Width *</label>
                                <input type="text" name="width" placeholder="Width" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                            </div>
                            <div class="form-group">
                                <label>Length *</label>
                                <input type="text" name="length" placeholder="Length" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                            </div>
                            <div class="form-group">
                                <label>Depth *</label>
                                <input type="text" name="depth" placeholder="Depth" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')">
                            </div>
                            <div class="form-group">
                                <label>Units *</label>
                                <select name="unit" required>
                                    <option value="mm">mm</option>
                                    <option value="cm">cm</option>
                                    <option value="inch">inch</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row options-grid-custom">
                            <div class="form-group">
                                <label>Select Material</label>
                                @php
                                    $materialCategory = DB::table('add_category')->where('name', 'Box by Material')->first();
                                    $materials = $materialCategory ? DB::table('add_category')->where('parent_category', $materialCategory->cat_id)->where('status', 1)->get() : collect([]);
                                @endphp
                                <select name="material">
                                    <option value="">Select Material</option>
                                    @foreach($materials as $material)
                                        <option value="{{ $material->name }}">{{ $material->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Color Options</label>
                                <select name="color_options">
                                    <option value="">Color Options</option>
                                    <option value="1 Color">1 Color</option>
                                    <option value="2 Colors">2 Colors</option>
                                    <option value="3 Colors">3 Colors</option>
                                    <option value="Full Color">Full Color</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Product Name</label>
                                <input type="text" name="product_name" placeholder="Enter product name" oninput="this.value = this.value.replace(/[0-9]/g, '')">
                            </div>
                            <div class="form-group">
                                <label>Quantity *</label>
                                <input type="number" name="quantity" placeholder="Enter quantity" required oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>
                            <div class="form-group upload-group">
                                <label>Upload File Here</label>
                                <div class="file-upload-wrapper">
                                    <input type="text" placeholder="No file choosen" readonly>
                                    <label class="upload-btn">Upload <input type="file" name="artwork" style="display:none;"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group textarea-group">
                            <label>Message</label>
                            <textarea name="message" placeholder="Enter your message" rows="4"></textarea>
                        </div>

                        <!-- ================================================
                             HUMAN VERIFICATION INLINE
                             ================================================ -->
                        <div class="human-verification-inline">
                            <div class="human-verification-header">
                                <h3 class="human-verification-inline-title">Are you a human?</h3>
                                <p class="human-verification-inline-copy">Solve this quick addition before continuing.</p>
                            </div>
                            <div class="human-verification-inline-control">
                                <span class="human-question" id="humanQuestion">0 + 0 =</span>
                                <input type="number" class="human-answer" id="humanAnswer" placeholder="Answer" aria-label="Human verification answer">
                                <button type="button" class="human-check-btn" id="humanCheckBtn">Verify</button>
                                <span class="human-status" id="humanStatus" aria-live="polite"></span>
                            </div>
                        </div>

                        <button type="submit" class="submit-quote-btn">Instant Quote</button>
                    </form>
                </div>

            </div>

        </section>


<script>
document.addEventListener('DOMContentLoaded', function () {

    // ── FILE UPLOAD ──
    const fileInput = document.querySelector('input[type="file"]');
    const fileNameField = document.querySelector(".file-upload-wrapper input[type='text']");

    if (fileInput && fileNameField) {
        fileInput.addEventListener("change", () => {
            if (fileInput.files.length > 0) {
                fileNameField.value = fileInput.files[0].name;
            } else {
                fileNameField.value = "No file chosen";
            }
        });
    }

    // Standalone human verification section
    const humanQuestion = document.getElementById('humanQuestion');
    const humanAnswer = document.getElementById('humanAnswer');
    const humanCheckBtn = document.getElementById('humanCheckBtn');
    const humanStatus = document.getElementById('humanStatus');
    let humanTotal = 0;

    function generateHumanQuestion() {
        const firstNumber = Math.floor(Math.random() * 9) + 1;
        const secondNumber = Math.floor(Math.random() * 9) + 1;
        humanTotal = firstNumber + secondNumber;
        if (humanQuestion) humanQuestion.textContent = firstNumber + ' + ' + secondNumber + ' =';
        if (humanAnswer) {
            humanAnswer.value = '';
            humanAnswer.style.border = '';
        }
        if (humanStatus) {
            humanStatus.textContent = '';
            humanStatus.classList.remove('is-error', 'is-success');
        }
    }

    if (humanQuestion && humanAnswer && humanCheckBtn) {
        generateHumanQuestion();
        humanCheckBtn.addEventListener('click', function () {
            const isCorrect = humanAnswer.value.trim() !== '' && Number(humanAnswer.value.trim()) === humanTotal;
            if (isCorrect) {
                humanAnswer.style.border = '';
                if (humanStatus) {
                    humanStatus.textContent = 'Verified.';
                    humanStatus.classList.remove('is-error');
                    humanStatus.classList.add('is-success');
                }
            } else {
                humanAnswer.style.border = '1px solid red';
                if (humanStatus) {
                    humanStatus.textContent = 'Please solve the addition correctly.';
                    humanStatus.classList.remove('is-success');
                    humanStatus.classList.add('is-error');
                }
                humanAnswer.focus();
            }
        });
    }
    // ── QUOTE FORM VALIDATION ──
    const quoteForm = document.querySelector(".instant-quote-form");

    if (quoteForm) {
        // Disable default HTML5 validation tooltips to use custom logic
        quoteForm.setAttribute('novalidate', true);

        quoteForm.addEventListener("submit", (e) => {
            e.preventDefault();

            let isValid = true;
            let firstInvalidField = null;

    // Check all required fields in the form
            const requiredFields = quoteForm.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                let valid = true;
                const val = field.value.trim();

                if (!val) {
                    valid = false;
                } else if (field.type === 'email') {
                    // Simple email validation regex
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(val)) valid = false;
                } else if (field.type === 'tel') {
                    // Simple phone validation (at least 7 digits/characters like + - spaces)
                    const phoneRegex = /^\+?[\d\s\-\(\)]{7,20}$/;
                    if (!phoneRegex.test(val)) valid = false;
                }

                if (!valid) {
                    isValid = false;
                    field.style.border = "1px solid red";
                    if (!firstInvalidField) {
                        firstInvalidField = field;
                    }
                } else {
                    field.style.border = ""; // reset border if valid
                }
            });

            // Clear red border on input
            requiredFields.forEach(field => {
                field.addEventListener('input', function() {
                    this.style.border = "";
                }, { once: true });
            });

            // Human verification captcha check
            let isVerified = false;
            if (humanAnswer && humanStatus) {
                isVerified = humanStatus.classList.contains('is-success') || (humanAnswer.value.trim() !== '' && Number(humanAnswer.value.trim()) === humanTotal);
                if (isVerified) {
                    humanAnswer.style.border = '';
                    humanStatus.textContent = 'Verified.';
                    humanStatus.classList.remove('is-error');
                    humanStatus.classList.add('is-success');
                } else {
                    isValid = false;
                    humanAnswer.style.border = '1px solid red';
                    humanStatus.textContent = 'Please solve the addition correctly.';
                    humanStatus.classList.remove('is-success');
                    humanStatus.classList.add('is-error');
                    if (!firstInvalidField) {
                        firstInvalidField = humanAnswer;
                    }
                }
            }

            if (!isValid) {
                if (firstInvalidField) firstInvalidField.focus();
                return;
            }

            // Instead of normal submit, we do an AJAX fetch request
            const submitBtn = quoteForm.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = 'Sending...';
            submitBtn.disabled = true;

            const formData = new FormData(quoteForm);

            fetch(quoteForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (response.headers.get("content-type")?.includes("application/json")) {
                    return response.json();
                }
                return response.text().then(text => ({ success: response.ok }));
            })
            .then(data => {
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                
                if (data.success || data.success === undefined) {
                    quoteForm.reset();
                    
                    const successMsg = document.getElementById('ajax-quote-success');
                    if (successMsg) {
                        successMsg.style.display = 'block';
                        // Scroll to the message smoothly
                        successMsg.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    
                    // Reset human verification
                    if (typeof generateHumanQuestion === 'function') generateHumanQuestion();
                }
            })
            .catch(error => {
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
                console.error(error);
            });
        });
    }
});
</script>
