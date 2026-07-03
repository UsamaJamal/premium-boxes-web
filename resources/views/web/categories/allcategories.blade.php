@include('web/header')
<style>
/* Base Styles & Variables */
:root {
  --bg-dark: #202020;
  --bg-darker: #1a1a1a;
  --bg-card: #242424;
  --text-main: #f5f5f5;
  --text-muted: #c5c5c5;
  --accent-gold: #f5c542;
  --accent-gold-hover: #f5c542;
  --border-color: #333;

  --font-heading: "Inter", sans-serif;
  --font-body: "Inter", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: var(--bg-dark);
  color: var(--text-main);
  font-family: var(--font-body);
  line-height: 1.6;
  overflow-x: hidden;
  padding-top: 115px; /* Fixed header height (top bar + navbar) */
}

.container {
  max-width: 1440px;
  margin: 0 auto;
  padding: 0 20px;
}

a {
  text-decoration: none;
  color: inherit;
  transition: color 0.3s ease;
}

/* Typography */
h1,
h2,
h3 {
  font-family: var(--font-heading);
  font-family: Inter;
  font-weight: 800;
  font-style: Extra Bold;
  font-size: 42px;
  padding-bottom: NONE;
  line-height: 50px;
  letter-spacing: 4%;
  vertical-align: middle;
}

.highlight {
  color: var(--accent-gold);
}

.section-badge {
  display: inline-block;
  padding: 6px 12px;
  font-size: 0.75rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  border-radius: 4px;
  margin-bottom: 20px;
}

.section-badge.outline {
  border: 1px solid var(--accent-gold);
  color: var(--accent-gold);
}

/* Buttons */
.btn {
  display: inline-block;
  padding: 10px 24px;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.9rem;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-primary {
  background-color: var(--accent-gold);
  color: var(--bg-darker);
}

.btn-primary:hover {
  background-color: var(--accent-gold-hover);
  transform: translateY(-2px);
}

Top Bar .top-bar {
  background-color: var(--bg-darker);
  border-bottom: 1px solid var(--border-color);
  padding: 10px 0;
  font-size: 0.85rem;
  color: var(--text-muted);
}

.top-bar-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.top-bar-right {
  display: flex;
  align-items: center;
  gap: 30px;
}

.contact-info {
  display: flex;
  gap: 20px;
}

.contact-info i {
  color: var(--accent-gold);
  margin-right: 5px;
}

.top-bar-actions {
  display: flex;
  align-items: center;
  gap: 20px;
}

.toggle-switch {
  width: 40px;
  height: 20px;
  background-color: #333;
  border-radius: 10px;
  position: relative;
  cursor: pointer;
}

.toggle-switch::after {
  content: "";
  position: absolute;
  top: 2px;
  left: 2px;
  width: 16px;
  height: 16px;
  background-color: white;
  border-radius: 50%;
  transition: transform 0.3s ease;
}

/* Navbar */
.navbar {
  background-color: var(--bg-darker);
  padding: 20px 0;
}

.navbar-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  display: flex;
  align-items: center;
  gap: 10px;
}

.logo-icon {
  font-size: 2rem;
  color: var(--accent-gold);
}

.logo-text {
  display: flex;
  flex-direction: column;
  line-height: 1;
}

.logo-title {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 700;
}

.logo-subtitle {
  font-size: 0.8rem;
  color: var(--accent-gold);
  letter-spacing: 2px;
  text-transform: uppercase;
}

.search-bar {
  position: relative;
  width: 300px;
}

.search-bar input {
  width: 100%;
  padding: 10px 40px 10px 15px;
  background-color: transparent;
  border: 1px solid var(--border-color);
  border-radius: 4px;
  color: var(--text-main);
  font-family: var(--font-body);
}

.search-bar input:focus {
  outline: none;
  border-color: var(--accent-gold);
}

.search-icon {
  position: absolute;
  right: 15px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--text-muted);
}

/* Main Nav Links */
.main-nav-links {
  background-color: var(--bg-darker);
  border-top: 1px solid var(--border-color);
  padding: 15px 0;
}

.main-nav-links ul {
  list-style: none;
  display: flex;
  justify-content: center;
  gap: 40px;
}

.main-nav-links a {
  font-size: 0.9rem;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.main-nav-links a:hover {
  color: var(--accent-gold);
}

/* --- Desktop Layout (Laptops & Desktops) --- */
.box-by-industry {
  background-color: #202020; /* Matches your theme background */
  padding: 0px 100px;
}

.industry-hero-content {
  display: flex;
  flex-direction: row-reverse; /* Puts image container on the right, text container on the left */
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  max-width: 1240px;
  margin: 0 auto;
  
}

/* Base side configurations for laptop */
.industry-hero-left {
  flex: 1;
  text-align: left; /* Left-aligned for professional desktop reading */
  min-width: 0;
}

.industry-hero-right {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  min-width: 0;
}

.hero-image-wrapper {
  width: 100%;
  max-width: 500px; /* Limits image stretch on ultra-wide screens */
}

.hero-main-img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 12px;
}

/* Breadcrumb styling for desktop */
.industry-hero-left .breadcrumb {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin-bottom: 20px;
  font-size: 0.85rem;
  background: transparent !important;
  padding: 0 !important;
  border-radius: 0 !important;
  flex-wrap: wrap;
}

/* --- Mobile & Tablet Layout (Screens smaller than 992px) --- */
@media (max-width: 992px) {
  .box-by-industry {
    padding: 40px 20px;
  }

  .industry-hero-content {
    flex-direction: column; /* Stacks vertically */
    text-align: center; /* Centers all headings/paragraphs */
    gap: 30px;
  }

  /* Moves image container back to the absolute top visually */
  .industry-hero-right {
    order: 1;
    width: 100%;
    justify-content: center;
  }

  /* Moves text block to sit under the image container */
  .industry-hero-left {
    order: 2;
    width: 100%;
  }

  /* Hides the breadcrumb wrapper completely */
  .industry-hero-left .breadcrumb {
    display: flex !important;
    justify-content: center;
    flex-wrap: wrap;
  }
  .industry-hero-left h1 {
    font-size: 28px;
    line-height: 36px;
    text-align: center;
    vertical-align: middle;
    margin-bottom: 20px;
    word-break: break-word;
  }
  .industry-hero-left h1 span {
    font-size: 28px;
    line-height: 36px;
    text-align: center;
    vertical-align: middle;
  }
}

/*Browse by industry*/

/* Our Story Section */
.our-story-section {
  padding: 100px 0;
}

.our-story-content {
  display: flex;
  align-items: center;
  gap: 60px;
}

.story-image-container {
  flex: 1;
  position: relative;
}

.image-accent-border {
  position: absolute;
  top: -20px;
  left: -20px;
  width: 100%;
  height: 100%;
  border: 2px solid var(--accent-gold);
  z-index: 0;
}

.story-image {
  position: relative;
  z-index: 1;
  width: 100%;
  height: auto;
  border-radius: 4px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
}

.story-text {
  flex: 1;
}

.story-text h2 {
  font-size: 2.5rem;
  margin-bottom: 30px;
}

.story-text p {
  color: var(--text-muted);
  margin-bottom: 20px;
  font-size: 1.05rem;
}

/* Why Choose Us Section */
.why-choose-us-section {
  padding: 80px 0;
}

.why-choose-us-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  align-items: stretch;
}

.why-text {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding-right: 40px;
}

.why-text h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.why-text p {
  color: var(--text-muted);
  font-size: 1.1rem;
}

.why-cards-row {
  display: flex;
  gap: 30px;
}

.why-image-container {
  height: 100%;
  width: 100%;
  overflow: hidden;
  border-radius: 8px;
  border: 1px solid rgba(255, 255, 255, 0.05);
}

.why-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.card {
  background-color: var(--bg-card);
  padding: 40px 30px;
  border-radius: 8px;
  border: 1px solid rgba(255, 255, 255, 0.05);
  flex: 1;
  transition:
    transform 0.3s ease,
    border-color 0.3s ease;
  text-align: center;
}

.card:hover {
  transform: translateY(-10px);
  border-color: var(--accent-gold);
}

.card-icon {
  font-size: 2.5rem;
  color: var(--accent-gold);
  margin-bottom: 20px;
}

.card h3 {
  font-size: 1.2rem;
  margin-bottom: 15px;
}

.card p {
  color: var(--text-muted);
  font-size: 0.9rem;
}

/* Numbers Section */
.numbers-section {
  padding: 80px 0;
  background-color: var(--bg-darker);
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.numbers-header {
  display: flex;
  justify-content: space-between;
  gap: 60px;
  margin-bottom: 60px;
}

.numbers-title {
  flex: 1;
}

.numbers-title h2 {
  font-size: 2.5rem;
}

.numbers-desc {
  flex: 1;
  color: var(--text-muted);
  font-size: 1rem;
  display: flex;
  align-items: center;
}

.stats-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 20px;
}

.stat-item {
  text-align: center;
  flex: 1;
}

.stat-item h3 {
  font-size: 3rem;
  color: var(--accent-gold);
  margin-bottom: 10px;
}

.stat-item p {
  font-size: 1rem;
  font-weight: 500;
  color: var(--text-main);
}

.stat-divider {
  width: 1px;
  height: 60px;
  background-color: rgba(255, 255, 255, 0.1);
}

/* Our Process Section */
.process-section {
  padding: 100px 0;
  background-color: var(--bg-dark);
}

.process-header {
  text-align: center;
  max-width: 700px;
  margin: 0 auto 60px auto;
}

.process-header h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.process-header p {
  color: var(--text-muted);
  font-size: 1.1rem;
}

.process-cards {
  display: flex;
  gap: 30px;
}

.process-card {
  padding: 40px 20px;
}

/* CTA Section */
.cta-section {
  padding: 100px 0;
  background-color: var(--bg-dark);
  border-top: 1px solid rgba(255, 255, 255, 0.05);
  overflow: hidden;
}

.cta-content {
  display: flex;
  align-items: center;
  gap: 60px;
}

.cta-text {
  flex: 1;
}

.cta-text h2 {
  font-size: 32px;
  margin-bottom: 20px;
}

.cta-text p {
  color: var(--text-muted);
  font-size: 16px;
  margin-bottom: 30px;
}

.cta-btn {
  font-size: 1rem;
  width: 270px;
  height: 50px;
  padding: 12px 30px;
  border-radius: 50px;
}
.cta-image-container {
  flex: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;
}

.cta-images-composition {
  position: relative;
  width: 430px;
  height: 320px;
}

/* Main Pink Box */
.cta-img-main {
  position: absolute;
  width: 260px;
  height: auto;
  top: -170px;
  right: 40px;
  transform: rotate(18deg);
  z-index: 3;
  border-radius: 20px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.45);
}

/* Left Small Image */
.cta-img-left {
  position: absolute;
  width: 150px;
  height: 110px;
  top: 180px;
  bottom: 20px;
  left: 0px;
  transform: rotate(23deg);
  border-radius: 12px;
  object-fit: cover;
  z-index: 1;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

/* Right Small Image */
.cta-img-right {
  position: absolute;
  width: 150px;
  height: 110px;
  top: 200px;
  bottom: 5px;
  left: 200px;
  transform: rotate(23deg);
  border-radius: 12px;
  object-fit: cover;
  z-index: 2;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

/* Responsive adjustments */
@media (max-width: 992px) {
  .our-story-content,
  .why-choose-us-grid,
  .numbers-header,
  .process-cards,
  .cta-content {
    flex-direction: column;
  }

  .cta-text {
    text-align: center;
    padding-bottom: 40px;
  }

  .why-choose-us-grid {
    display: flex;
  }

  .why-cards-row {
    flex-direction: column;
  }

  .why-image-container {
    height: 300px;
  }

  .stats-row {
    flex-wrap: wrap;
    gap: 40px;
  }

  .stat-divider {
    display: none;
  }

  .stat-item {
    flex: 1 1 40%;
  }

  .image-accent-border {
    display: none;
  }
}

/* Categories Page */
.category-hero {
  min-height: 300px;
  padding: 60px 0;
}

.categories-section {
  padding: 80px 0;
  background-color: var(--bg-dark);
}

.categories-filter {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 15px;
  margin-bottom: 50px;
}

.filter-btn {
  background-color: transparent;
  color: var(--text-main);
  border: 1px solid var(--border-color);
  padding: 10px 24px;
  border-radius: 50px;
  font-family: var(--font-body);
  font-weight: 500;
  font-size: 0.95rem;
  cursor: pointer;
  transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
  background-color: var(--accent-gold);
  color: var(--bg-darker);
  border-color: var(--accent-gold);
}

.categories-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  gap: 30px;
  margin-bottom: 60px;
}

.category-card {
  background-color: var(--bg-card);
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid rgba(255, 255, 255, 0.05);
  transition:
    transform 0.3s ease,
    border-color 0.3s ease;
}

.category-card:hover {
  transform: translateY(-10px);
  border-color: var(--accent-gold);
}

.category-img-container {
  position: relative;
  height: 240px;
  overflow: hidden;
}

.category-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.category-card:hover .category-img {
  transform: scale(1.05);
}

.category-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(10, 10, 10, 0.7);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.category-card:hover .category-overlay {
  opacity: 1;
}

.category-info {
  padding: 25px 20px;
  text-align: center;
}

.category-info h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
  color: var(--text-main);
}

.category-info p {
  color: var(--text-muted);
  font-size: 0.95rem;
  line-height: 1.5;
}

/* Pagination */
.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
}

.page-btn {
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  border: 1px solid var(--border-color);
  color: var(--text-main);
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: var(--font-heading);
  font-weight: 500;
}

.page-btn:hover,
.page-btn.active {
  background-color: var(--accent-gold);
  color: var(--bg-darker);
  border-color: var(--accent-gold);
}

/* Box By Industry Section */
.main-container {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
  background-color: (var(--bg-darker));
  color: #fff;
  font-family: var(--font-body);
}

body {
  padding-top: 125px; /* Pushes content down below the fixed navbar */
}

.box-by-industry {
  position: relative;
}

.industry-hero-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 19px 0px;
  margin-bottom: 40px;
}

.industry-hero-left {
  flex: 1;
  max-width: 600px;
  min-width: 0;
}

.industry-hero-left .breadcrumb {
  color: #a0a0a0;
  font-size: 0.85rem;
  margin-bottom: 30px;
  display: flex;
  align-items: center;
}

.industry-hero-left h1 {
  font-size: 3rem;
  font-family: var(--font-heading);
  font-weight: 700;
  line-height: 1.2;
  margin-bottom: 20px;
}

.highlight-yellow {
  color: var(--accent-gold);
}

.industry-hero-left p {
  color: #a0a0a0;
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 16px;
  line-height: 30px;
  letter-spacing: 0;
  text-align: justify;
  vertical-align: middle;
  margin-bottom: 30px;
}

.btn-yellow {
  background-color: #ffc542;
  color: #000;
  padding: 12px 28px;
  border-radius: 30px;
  font-weight: 600;
  font-family: var(--font-body);
  display: inline-block;
  transition: transform 0.3s ease;
}

.btn-yellow:hover {
  transform: translateY(-2px);
  color: #000;
}

.industry-hero-right {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  min-width: 0;
}

.hero-image-wrapper {
  position: relative;
  width: 100%;
  max-width: 600px;
}

.hero-main-img {
  width: 100%;
  height: auto;
  object-fit: contain;
}


/* Browse By Industry Section */
.browse-industry-section {
  background-color: #121212;
  padding: 40px 5%;
  text-align: center;
  position: relative;
  width: 100%;
}

.browse-header {
  margin-bottom: 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.badge-yellow {
  border: 1px solid #ffc542 !important;
  color: #ffc542 !important;
  border-radius: 50px !important;
  padding: 6px 20px !important;
}

.browse-header h2 {
  font-size: 2.5rem;
  margin-bottom: 15px;
  font-family: var(--font-heading);
  font-weight: 600;
}

.browse-header p {
  color: #a0a0a0;
  font-size: 1rem;
  max-width: 600px;
  margin: 0 auto;
  font-family: var(--font-body);
}

.browse-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 42px 24px;
  max-width: 1240px;
  margin: 0 auto 60px auto;
}
.browse-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
}

.browse-card {
  width: 100%;
  aspect-ratio: 292 / 380;
  background-color: #1a1a1a;
  border-radius: 16px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);

  overflow: hidden;
  display: flex;
}

.browse-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  transition: transform 0.4s ease;
}

.browse-item:hover .browse-card img {
  transform: scale(1.05);
}
.browse-item h3 {
  font-size: 1.1rem;
  font-weight: 600;
  color: #fff;
  font-family: var(--font-body);
}

.browse-footer {
  margin-top: 40px;
  padding-bottom: 40px;
  display: flex;
  justify-content: center;
}
@media (max-width: 768px) {
  .browse-industry-section {
    padding: 60px 20px;
  }

  .browse-header h2 {
    font-size: 24px;
  }

  .browse-header p {
    font-size: 15px;
    line-height: 25px;
    max-width: 370px;
  }

  .browse-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px 20px;
  }

  .browse-card {
    width: 100%;
    height: 213px;
  }

  .browse-item h3 {
    font-size: 16px;
  }
}
/* Our Commitment Section */
.commitment-section {
  background-color: #121212;
  padding: 20px 100px;
  width: 100%;
  min-height: 476px;
  box-sizing: border-box;
}

.commitment-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 60px;
}

.commitment-left {
  flex: 1;
  max-width: 614px;
}

.commitment-badge {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 184px;
  height: 38px;
  border-radius: 20px;
  color: #f5c542;
  border: 1px solid #f5c542;
  font-family: var(--font-body);
  font-weight: 600;
  font-size: 0.8rem;
  margin-bottom: 30px;
  letter-spacing: 1px;
}

.commitment-left h2 {
  max-width: 614px;
  font-family: "Inter", sans-serif;
  font-weight: 700;
  font-style: normal;
  font-size: 32px;
  line-height: 44px;
  letter-spacing: 0.04em;
  vertical-align: middle;
  margin-bottom: 20px;
}

.commitment-left p {
  max-width: 614px;
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: 16px;
  line-height: 26px;
  letter-spacing: 0.02em;
  text-align: justify;
  vertical-align: middle;
  color: #a0a0a0;
  margin-bottom: 40px;
}

.btn-gold {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 163px;
  height: 50px;
  background-color: #f5c542;
  color: #000;
  border-radius: 40px;
  padding: 12px 20px;
  gap: 10px;
  font-family: var(--font-body);
  font-weight: 600;
  transition: transform 0.3s ease;
}

.btn-gold:hover {
  transform: translateY(-2px);
  color: #000;
}

.commitment-right {
  flex: 1;
  display: flex;
  justify-content: flex-end;
}

.badge-grid {
  display: grid;
  grid-template-columns: repeat(2, 160px);
  gap: 20px;
}

.badge-card {
  width: 160px;
  height: 160px;
  background-color: #323232;
  border-radius: 4px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #fff;
  font-family: var(--font-body);
  font-weight: 600;
}
/* --- CRITICAL IMAGE ALIGNMENT FIX --- */
.badge-card img {
  width: 100%;
  height: 100%;
  /* Use 'contain' so badge icons display fully without awkward crops */
  object-fit: contain;
  /* Safe fallback padding so images don't touch the container edges */
  padding: 15px;
  box-sizing: border-box;
}
/* --- Mobile Responsiveness (For 360px & 390px screens) --- */

@media (max-width: 768px) {
  /* Box By Industry Hero */
  .industry-hero-content {
    flex-direction: column;
    padding: 0 20px;
    text-align: center;
  }
  .industry-hero-left .breadcrumb {
    justify-content: center;
  }
  .industry-hero-left h1 {
    font-size: 2.2rem;
  }
  .hero-image-wrapper {
    margin-top: 40px;
  }

  /* Trust Bar */
  .trust-bar {
    flex-direction: column;
    padding: 30px 20px;
    gap: 20px;
  }
  .trust-logos {
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  /* Browse By Industry */
  .browse-industry-section {
    padding: 40px 20px;
  }
  .browse-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
  }
  .browse-card {
    width: 100%;
    max-width: 292px;
    height: auto;
    aspect-ratio: 292 / 380;
  }

  /* Commitment Section */
  .commitment-section {
    padding: 40px 20px;
    min-height: auto;
  }
  .commitment-content {
    flex-direction: column;
    gap: 40px;
  }
  .commitment-left {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .commitment-left h2 {
    font-size: 2rem;
    line-height: 1.4;
  }
  .commitment-left p {
    text-align: center;
  }
  .commitment-right {
    justify-content: center;
    width: 100%;
  }
  .badge-grid {
    grid-template-columns: repeat(2, 1fr);
    width: 100%;
    max-width: 340px;
  }
  .badge-card {
    width: 100%;
    height: auto;
    aspect-ratio: 1 / 1;
  }
}

/* Strict Mobile for 360px / 390px widths */
@media (max-width: 480px) {
  /* Stack cards in Browse section 1 per row for very small screens */
  .browse-grid {
    grid-template-columns: 1fr;
  }

  .industry-hero-left h1 {
    font-size: 1.8rem;
  }

  .commitment-left h2 {
    font-size: 1.5rem;
    line-height: 1.4;
  }

  .commitment-left p {
    font-size: 0.9rem;
    line-height: 1.5;
  }

  .badge-grid {
    gap: 10px;
  }
}

/* Fix Global/Legacy Mobile Overflows */
@media (max-width: 768px) {
  /* Navbar & Search */
  .navbar-content {
    flex-direction: column;
    gap: 20px;
  }
  .search-bar {
    width: 100%;
    max-width: 100%;
  }

  /* Nav Links */
  .main-nav-links ul {
    flex-wrap: wrap;
    gap: 15px;
    padding: 0 10px;
  }

  /* CTA Images Composition Overflow */
  .cta-images-composition {
    width: 100%;
    max-width: 300px; /* Shrink to fit mobile */
    height: 250px;
    transform: scale(0.8);
    transform-origin: center;
    margin: 0 auto;
  }

  /* Ensure no container pushes past 100vw */
  html,
  body {
    overflow-x: hidden;
    width: 100%;
  }

  .container {
    padding: 0 15px;
    width: 100%;
    overflow-x: hidden;
  }
}

/* Critical Fix for 360px Screen Overflow */
@media (max-width: 480px) {
  .commitment-section,
  .browse-industry-section {
    padding: 40px 15px !important;
    width: 100vw !important;
    box-sizing: border-box !important;
    overflow-x: hidden !important;
  }
  .main-container {
    width: 100vw !important;
    overflow-x: hidden !important;
  }
  .badge-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    max-width: 100% !important;
    gap: 15px !important;
    width: 100% !important;
  }
  .badge-card {
    width: 100% !important;
    height: auto !important;
    aspect-ratio: 1 / 1 !important;
    min-width: 0 !important;
  }
  .commitment-left p {
    word-wrap: break-word !important;
    hyphens: auto !important;
    width: 100% !important;
    padding: 0 !important;
  }
  .industry-hero-content {
    padding: 0 15px !important;
    width: 100% !important;
    box-sizing: border-box !important;
  }
  .browse-card {
    min-width: 0 !important;
  }
}

/* ==========================================
   CUSTOMIZE YOUR BOX SECTION
========================================== */

.customize-section {
  max-width: 1242px;
  margin: 0 auto;
  padding: 40px 5%;
}

.customize-header {
  text-align: center;
  margin-bottom: 50px;
}

.badge-center {
  margin: 0 auto 24px;
}

.customize-header h2 {
  font-family: "Inter", sans-serif;
  font-size: 32px;
  font-weight: 700;
  line-height: 30px;
  letter-spacing: 0.04em;
  color: #fff;
  margin-bottom: 20px;
}

.customize-header p {
  width: 560px;
  max-width: 100%;
  margin: 0 auto;

  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  letter-spacing: 0.02em;
  color: var(--text-muted);
}

/* FILTER BUTTONS */

.filter-buttons {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  justify-content: center;
  margin: 50px 0;
}

.filter-btn {
  height: 58px;
  width: 150px;
  border: 1px solid var(--accent-gold);
  border-radius: 8px;
  background: transparent;
  color: #fff;

  font-family: "Inter", sans-serif;
  font-size: 13px;
  font-weight: 500;

  cursor: pointer;
  transition: all 0.3s ease;
  
  /* Ensure wrapped text centers properly */
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 0 4px;
}

.filter-btn:hover {
  background: var(--accent-gold);
  color: var(--bg-darker);
}

.filter-btn.active {
  background: var(--accent-gold);
  color: var(--bg-darker);
}



/* GRID */

/* .customize-grid {
  display: grid;
  grid-template-columns: repeat(4, 292px);
  gap: 24px;
  justify-content: center;
} */
/* GRID - Fluid Layout Architecture */
.customize-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr); 
  max-width: 1110px; /* Matches the exact width of the 7 filter buttons */
  margin: 0 auto;
  gap: 24px;
  width: 100%;
  box-sizing: border-box;
}

/* CARD - Height Fixed via Content Flex instead of hard pixel restrictions */
.customize-card {
  width: 100%; 
  background: var(--bg-card);
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column; 
  transition: transform 0.3s ease;
  box-sizing: border-box;
}

.customize-card:hover {
  transform: translateY(-5px);
}

/* IMAGE BOUNDS - Keeps frames perfectly locked and scalable */
.card-image-area {
  width: 100%;
  height: 200px;
  background: #363636;
  border-radius: 8px 8px 0 0;
  overflow: hidden;
  position: relative;
  display: flex; /* Ensures empty containers still retain area shape frameworks */
}

/* NEW: Enforces the clean look of your first item image on all cards */
.card-image-area img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Spans across bounds beautifully without squishing proportions */
  object-position: center;
}

/* CARD INTERNAL CONTENT FRAMEWORK */
.card-content {
  padding: 18px 17px;
  display: flex;
  flex-direction: column;
  flex-grow: 1; /* Pushes content down proportionately */
}

.card-content h3 {
  font-family: "Inter", sans-serif;
  font-size: 16px;
  font-weight: 700;
  line-height: 120%; /* Expanded from 100% to stop typography baseline crops */
  color: #fff;
  margin: 0 0 12px 0;
}

.card-content p {
  font-family: "Inter", sans-serif;
  font-size: 14px;
  font-weight: 400;
  line-height: 22px;
  text-align: justify;
  color: var(--text-muted);
  margin: 0 0 16px 0;
  flex-grow: 1; /* Pushes icons to absolute bottom regardless of line count variants */
}

.card-icons {
  display: flex;
  gap: 8px;
  margin-top: auto; /* Locks down alignment baseline rules across your elements row */
}


/* --- Testimonal Section Container --- */
/* .testimonial-section {
  width: 100%;
  max-width: 1440px;
  min-height: 581px;
  background-color: var(--bg-dark);
  margin: 0 auto;
  padding: 42px 100px 60px 100px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-family: "Inter", sans-serif;
} */

/* --- Header Layout --- */
/* .testimonial-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-bottom: 44px;
}

.testimonial-badge {
  width: 150px;
  height: 38px;
  border: 1px solid var(--accent-gold);
  border-radius: 20px;
  color: var(--accent-gold);
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 21px;
}

.testimonial-header h2 {
  max-width: 396px;
  font-size: 32px;
  font-weight: 700;
  line-height: 30px;
  color: var(--text-main);
  margin: 0 0 19px 0;
}

.testimonial-header .subtitle {
  max-width: 445px;
  font-size: 16px;
  font-weight: 400;
  line-height: 19.54px;
  color: var(--text-muted);
  margin: 0;
} */

/* --- Cards Layout Grid (Desktop) --- */
/* .testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 387.5px);
  gap: 37.4px;
  width: 100%;
  justify-content: center;
}

.testimonial-card {
  width: 387.5px;
  height: 229.8px;
  border: 1px solid rgba(245, 197, 66, 0.2);
  border-radius: 20px;
  background-color: rgba(255, 255, 255, 0.02);
  position: relative;
  box-sizing: border-box;
  padding: 50px 45px 30px 45px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
} */

/* --- Avatar Setup --- */
/* .avatar-wrapper {
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: var(--bg-dark);
  padding: 4px;
  box-sizing: border-box;
}

.avatar-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #ffffff;
} */

/* --- Typography Content Inside Cards --- */
/* .testimonial-text {
  font-size: 14px;
  font-weight: 400;
  line-height: 20px;
  color: var(--text-muted);
  margin: 0 0 16px 0;
  height: 80px;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.client-name {
  font-size: 18px;
  font-weight: 600;
  line-height: 17.5px;
  color: var(--accent-gold);
  margin: 0 0 6px 0;
}

.client-role {
  font-family: "Montserrat", sans-serif;
  font-size: 12px;
  font-weight: 400;
  line-height: 17.5px;
  color: var(--text-muted);
} */
/* ==========================================================================
   1. GLOBAL & DESKTOP TESTIMONIAL LAYOUT (Your exact 1440px Specs)
   ========================================================================== */

/* --- Testimonial Section Container --- */
.testimonial-section {
  width: 100%;
  max-width: 1440px;
  min-height: 520px;
  background-color: var(--bg-dark);
  margin: 0 auto;
  padding: 42px 100px 60px 100px;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
  font-family: "Inter", sans-serif;
}

/* --- Header Layout --- */
.testimonial-header {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  margin-bottom: 44px;
}

.testimonial-badge {
  width: 150px;
  height: 38px;
  border: 1px solid var(--accent-gold);
  border-radius: 20px;
  color: var(--accent-gold);
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 21px;
}

.testimonial-header h2 {
  max-width: 396px;
  font-size: 32px;
  font-weight: 700;
  line-height: 30px;
  color: var(--text-main);
  margin: 0 0 19px 0;
}

.testimonial-header .subtitle {
  max-width: 445px;
  font-size: 16px;
  font-weight: 400;
  line-height: 19.54px;
  color: var(--text-muted);
  margin: 0;
}

/* --- Cards Layout Grid (Desktop) --- */
.testimonial-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
  width: 100%;
  max-width: 1242px;
  margin: 0 auto;
}

.testimonial-card {
  width: 100%;
  height: 229.8px;
  border: 1px solid rgba(245, 197, 66, 0.2);
  border-radius: 20px;
  background-color: rgba(255, 255, 255, 0.02);
  position: relative;
  box-sizing: border-box;
  padding: 50px 45px 30px 45px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
}

/* --- Avatar Setup --- */
.avatar-wrapper {
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: var(--bg-dark);
  padding: 4px;
  box-sizing: border-box;
}

.avatar-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #ffffff;
}

/* --- Typography Content Inside Cards --- */
.testimonial-text {
  font-size: 14px;
  font-weight: 400;
  line-height: 20px;
  color: var(--text-muted);
  margin: 0 0 16px 0;
  height: 80px;
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.client-name {
  font-size: 18px;
  font-weight: 600;
  line-height: 17.5px;
  color: var(--accent-gold);
  margin: 0 0 6px 0;
}

.client-role {
  font-family: "Montserrat", sans-serif;
  font-size: 12px;
  font-weight: 400;
  line-height: 17.5px;
  color: var(--text-muted);
}

/* --- Arrow Navigation Controls Layout (Global & Desktop) --- */
.testimonial-nav {
  display: flex; /* Visible globally now */
  justify-content: center;
  align-items: center;
  gap: 16px; /* Clean spacing separating buttons */
  margin-top: 40px; /* Separator space beneath the grid track */
  width: 100%;
}

.nav-btn {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  border: 1px solid #c5c5c5; /* Faded accent gold border outline */
  background: transparent;
  color: var(--text-muted);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.2s ease;
  padding: 0;
}

/* Hover effects for interacting with arrows on Desktop viewports */
.nav-btn:hover {
  background: rgba(245, 197, 66, 0.1);
  border-color: var(--accent-gold);
}

.nav-btn:active {
  background: var(--text-muted);
  color: var(--bg-darker);
  border-color: var(--accent-gold);
}

/* ==========================================================================
   2. MOBILE OVERRIDES (Your Exact Phone Layout Measurements)
   ========================================================================== */
@media (max-width: 768px) {
  /* Section Phone Layout Container */
  .testimonial-section {
    max-width: 412px;
    height: 539px; /* Hard matches exact phone specifications */
    min-height: 539px;
    padding: 30px 16px;
    justify-content: flex-start;
  }

  /* Header Container Adjustments */
  .testimonial-header {
    margin-bottom: 24px;
  }

  .testimonial-badge {
    margin-bottom: 12px;
  }

  /* "What Our Customers Say" Heading Mobile Spec Lock */
  .testimonial-header h2 {
    width: 297px;
    height: 30px;
    font-family: "Inter", sans-serif;
    font-weight: 700;
    font-size: 24px;
    line-height: 30px;
    text-align: center;
    color: var(--text-main);
    margin: 0 auto 10px auto;
    font-family: Inter;
    font-weight: 700;
    font-style: Bold;
    font-size: 24px;
    padding-bottom: NONE;
    line-height: 30px;
    letter-spacing: 0%;
    text-align: center;
  }

  .testimonial-header .subtitle {
    max-width: 320px;
    font-size: 14px;
    line-height: 18px;
  }

  /* Grid Layout Slider Transformation for Mobile Viewports */
  .testimonial-grid {
    display: flex !important;
    flex-wrap: nowrap !important;
    overflow-x: auto !important; /* Permits native mobile thumb swipe actions */
    overflow-y: hidden !important;
    gap: 20px !important;
    justify-content: flex-start !important;
    width: 100% !important;
    padding: 40px 20px 10px 20px !important; /* Protects avatar absolute offsets */
    box-sizing: border-box !important;
    scrollbar-width: none !important; /* Hides default native scrollbars */
    -ms-overflow-style: none !important;
  }

  .testimonial-grid::-webkit-scrollbar {
    display: none !important;
  }

  /* Mobile Individual Card Dimension Optimization */
  .testimonial-card {
    flex-shrink: 0 !important;
    width: 320px !important; /* Sized perfectly for 412px device viewport screens */
    height: auto !important;
    min-height: 220px !important;
    padding: 45px 24px 24px 24px !important;
  }

  .testimonial-text {
    height: auto;
    -webkit-line-clamp: 3;
    font-size: 13px;
    line-height: 18px;
    margin-bottom: 12px;
  }

  /* Slider Navigation Position Matching Phone Layouts */
  .testimonial-nav {
    margin-top: 20px;
  }
}
/* --- Core Structural Layout Floor --- */
.guide-section {
  width: 100%;
  max-width: 1440px;
  min-height: 762px;
  background-color: var(
    --bg-darker
  ); /* Specified section container background */
  padding: 44px 100px 60px 100px; /* Top layout positioning offset mapping */
  box-sizing: border-box;
  font-family: "Inter", sans-serif;
  position: relative;
}

/* --- Section Badge Heading Tag --- */
.guide-badge {
  width: 174px;
  height: 38px;
  border: 1px solid var(--accent-gold);
  border-radius: 20px;
  color: var(--accent-gold);
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 18px; /* Offset spacing to sit cleanly above column rows */
}

/* Layout Grid Container Split */
.guide-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  gap: 46px;
  width: 100%;
  margin-top: 20px;
}

/* --- Column One Layout (Text Framework) --- */
.guide-col-one {
  flex: 1.2;
  min-width: 0; /* Prevent flex overflow */
  min-height: 613px;
  max-height: 613px;
  overflow-y: auto;
  box-sizing: border-box;
  color: var(--text-main);
  padding-right: 15px;
}

/* Custom Scrollbar for guide-col-one */
.guide-col-one::-webkit-scrollbar {
  width: 6px;
}
.guide-col-one::-webkit-scrollbar-track {
  background: #242424; 
  border-radius: 10px;
}
.guide-col-one::-webkit-scrollbar-thumb {
  background: var(--accent-gold); 
  border-radius: 10px;
}
.guide-col-one::-webkit-scrollbar-thumb:hover {
  background: var(--accent-gold-hover); 
}

.guide-col-one h2 {
  font-size: 32px;
  font-weight: 700;
  line-height: 42px;
  margin: 0 0 20px 0;
}

.guide-col-one h3 {
  font-size: 24px;
  font-weight: 700;
  line-height: 40px;
  letter-spacing: 0.06em; /* 6% layout spec */
  text-align: justify;
  margin: 35px 0 15px 0;
}

.guide-col-one p {
  font-size: 15px;
  line-height: 1.6;
  color: var(--text-muted);
  margin: 0 0 18px 0;
  text-align: justify;
}

.guide-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.guide-list li {
  font-size: 14px;
  line-height: 1.6;
  color: var(--text-muted);
  margin-bottom: 12px;
  position: relative;
  padding-left: 15px;
}

.guide-list li::before {
  content: "•";
  position: absolute;
  left: 0;
  color: var(--accent-gold);
}

/* --- Column Two Layout (Step Dashboard) --- */
.guide-col-two {
  flex: 0.8;
  min-width: 0; /* Prevent flex overflow */
  min-height: 483px;
  background-color: var(--bg-card); /* Defined column 2 card panel surface */
  border-radius: 12px;
  padding: 26px 30px; /* Perfectly aligns content blocks horizontally to left: 30px rules */
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
}

.steps-main-title {
  font-size: 18px;
  font-weight: 700;
  color: var(--text-main);
  margin: 0 0 24px 0;
  width: 249px;
  height: 25px;
}

.steps-container {
  display: flex;
  flex-direction: column;
  width: 100%;
}

.step-row {
  width: 100%;
  border-bottom: 0.5px solid rgba(255, 255, 255, 0.25); /* #FFFFFF40 border definition line rule */
  padding: 16px 0;
  box-sizing: border-box;
}

.step-row:first-of-type {
  padding-top: 0;
}

.step-row p {
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-size: 14px;
  line-height: 1.4;
  letter-spacing: 0%;
  text-align: justify;
  color: #c5c5c5;
  margin: 0;
  padding-left: 19px; /* Aligns textual components to the left: 49px layout rules */
}

.step-num-highlight {
  color: var(--accent-gold);
  font-weight: 700;
  margin-right: 4px;
}

/* --- Nested Help Call-to-Action Box Block --- */
.help-box {
  width: 460px;
  min-height: 125px;
  background-color: var(--bg-darker);
  border-radius: 12px;
  margin-top: 30px; /* Offset space beneath final horizontal dividing marker line */
  padding: 16px 0;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.help-box h5 {
  width: 195px;
  height: 23px;
  font-family: "Plus Jakarta Sans", sans-serif;
  font-weight: 500;
  font-size: 18px;
  line-height: 100%;
  letter-spacing: 0.04em; /* 4% spacing rule */
  text-align: center;
  color: #ffffff;
  margin: 0 0 6px 0;
}

.help-subtitle {
  width: 224px;
  height: 17px;
  font-family: "Inter", sans-serif;
  font-weight: 400;
  font-size: 14px;
  line-height: 100%;
  text-align: center;
  color: #c5c5c5;
  margin: 0 0 16px 0;
}

/* Chat Action Button Core Configuration */
.chat-expert-btn {
  width: 260px;
  height: 36px;
  background-color: var(--accent-gold);
  color: var(--bg-darker); /* Assigned target button inverse typography tone */
  border-radius: 20px;
  font-size: 14px;
  font-weight: 600;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  box-sizing: border-box;
  gap: 10px;
  transition: opacity 0.2s;
}

.chat-expert-btn:hover {
  opacity: 0.9;
}

/* --- Responsive Media Viewport Parameters --- */
@media (max-width: 1200px) {
  .guide-section {
    padding: 40px 40px;
  }
}

@media (max-width: 600px) {
  .guide-section {
    padding: 30px 20px;
  }
  .help-box {
    width: 100%;
  }
  .guide-col-one h2 {
    font-size: 26px;
    line-height: 34px;
  }
}
/* --- Responsive Layout Configurations --- */

@media (max-width: 1280px) {
  .testimonial-section {
    padding: 0px 40px;
    height: auto;
  }
}

/* Mobile Changes: Triggers scrollbar and snaps 1 card at a time */
@media (max-width: 850px) {
  .testimonial-section {
    padding: 40px 0px 60px 0px; /* Removed side padding so cards can slide edge-to-edge */
    overflow: hidden;
  }

  .testimonial-header {
    padding: 0 20px; /* Keeps text away from the screen edge */
  }

  .testimonial-grid {
    display: grid;
    grid-auto-flow: column; /* Forces items to align horizontally */
    grid-auto-columns: calc(
      100% - 40px
    ); /* Makes 1 card fill the width, leaving a 20px peak for the next card */
    gap: 20px;
    justify-content: flex-start;

    /* Scroll Properties */
    overflow-x: auto;
    scroll-snap-type: x mandatory; /* Smoothly snaps directly to the active card */
    padding: 40px 20px 20px 20px; /* Added top padding to prevent avatar clipping */
    box-sizing: border-box;

    /* Hides default native scrollbars for a cleaner UI if desired */
    -webkit-overflow-scrolling: touch;
  }

  .testimonial-card {
    width: 100%; /* Adapts dynamically to the container sizing */
    scroll-snap-align: center; /* Snaps card cleanly into the center of the mobile viewport */
  }
}
/* --- Base Section & Background Floors --- */
.quote-section {
  width: 100%;
  padding: 30px 5%;
  box-sizing: border-box;
  background-color: #151515; /* Layout background floor */
  font-family: var(--font-body), sans-serif;
}

.quote-container {
  width: 100%;
  max-width: 1239px;
  min-height: 789px;
  margin: 0 auto;
  border-radius: 8px;
  display: flex;
  overflow: hidden;
  box-sizing: border-box;
}

/* --- Column 1 Layout (Process Steps) --- */
.quote-steps-col {
  width: 368px; /* Precise Figma layout specification */
  background-color: var(--bg-darker);
  padding: 58px 35px; /* Offset to mirror Figma top position coordinates */
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.step-item {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.step-item .step-header {
  display: flex;
  align-items: center;
  gap: 12px;
}

/* Step Numbers Spec (01, 02, etc.) */
.step-item .step-num {
  width: 45px;
  height: 30px;
  font-family: var(--font-heading), sans-serif;
  font-weight: 700;
  font-size: 26px;
  line-height: 22px;
  letter-spacing: 0.04em; /* 4% spacing */
  text-align: justify;
  color: var(--accent-gold);
  display: inline-flex;
  align-items: center;
}

/* Step Titles */
.step-item h3 {
  font-family: var(--font-heading), sans-serif;
  font-size: 18px;
  font-weight: 700;
  color: var(--text-main);
  margin: 0;
}

.step-item p {
  font-size: 13.5px;
  line-height: 1.6;
  color: var(--text-muted);
  margin: 0;
}

/* --- Column 2 Layout (Request Free Quote Form Container) --- */
.quote-form-col {
  width: 802px; /* Precise Figma layout specification */
  min-height: 789px;
  background-color: var(--bg-dark);
  border-radius: 8px;
  padding: 35px 55px; /* Maps exactly to left: 55px, top: 35px padding specs */
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
  font-size: 32px;
  line-height: 44px;
  color: var(--text-main);
  margin: 0 auto 35px auto;
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
}

/* Double input fields: Name, Email, Phone, Address */
.dual-grid {
  grid-template-columns: calc(50% - 6px) calc(50% - 6px);
}

/* Dimensions Row: Width, Length, Depth, Unit */
.dimensions-grid {
  grid-template-columns: repeat(4, 1fr);
  max-width: 693px;
}

/* Dropdown selections: Material, Colors, Addons */
.triple-grid {
  grid-template-columns: repeat(3, 1fr);
  max-width: 692px;
}

.quantity-upload-grid {
  grid-template-columns: repeat(2, 1fr);
  max-width: 691.13px;
}

.form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
  height: 76px; /* Explicit height specification constraints */
}

.form-group.textarea-group {
  height: auto; /* Let it grow naturally with the textarea and label */
  min-height: 135px;
  width: 100%;
}

.form-group label {
  font-size: 15px;
  color: #ffffff; /* Updated: Changed labels to clean white color */
  font-weight: 300;
}

/* --- Component Fields Controls --- */
.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  height: 46px;
  background-color: var(--bg-darker); /* Keeping dark theme inputs */
  border: 0.2px solid #727272; /* Required layout boundary rules */
  border-radius: 8px;
  padding: 12px 16px;
  color: var(--text-main);
  font-size: 14px;
  box-sizing: border-box;
  outline: none;
}

.form-group textarea {
  height: 105px;
  resize: none;
}

/* File Upload Wrapper Styling */
/* File Upload Wrapper Styling */
.file-upload-wrapper {
  display: flex;
  border: 0.2px solid #727272;
  border-radius: 8px;
  background-color: var(--bg-darker);
  overflow: hidden;
  height: 46px;
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
  padding: 0 20px;

  display: flex;
  align-items: center;
  justify-content: center; /* Centers text/icons horizontally */
  align-self: stretch; /* Stretches the button to perfectly fill the 46px parent height */
  height: 100%; /* Fallback vertical height alignment */

  gap: 10px;
  cursor: pointer;
  font-size: 24px;
  white-space: nowrap; /* Prevents button text from breaking into two lines */
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
}

/* Special target fix if the button tag is a native browser input/button element */
.upload-btn::-webkit-file-upload-button {
  color: var(--bg-darker) !important;
  font-weight: 700 !important;
}
/* --- Submit Action Button Design --- */
.submit-quote-btn {
  width: 298px;
  height: 48px;
  background-color: var(--accent-gold);
  color: var(--bg-dark);
  font-family: var(--font-heading), sans-serif;
  font-size: 16px;
  font-weight: 700;
  border: none;
  border-radius: 40px;
  padding: 12px 20px;
  gap: 10px;
  cursor: pointer;
  margin: 30px auto 0 auto;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background-color 0.2s;
}

.submit-quote-btn:hover {
  background-color: var(--accent-gold-hover);
}

/* --- Responsive Adaptations --- */
@media (max-width: 992px) {
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
    display: grid;
    grid-template-columns: repeat(2, 1fr);
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
    grid-template-columns: 1fr;
    padding: 40px 20px;
  }
  .quote-form-col {
    padding: 35px 20px;
  }

  .dual-grid,
  .triple-grid,
  .dimensions-grid,
  .quantity-upload-grid {
    grid-template-columns: 1fr;
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
}

/* --- CTA Main Container Block --- */
.elevate-section {
  width: 100%;
  background-color: var(--bg-dark);
  padding: 45px 20px;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
}

.elevate-container {
  width: 100%;
  max-width: 1440px;
  margin: 0 auto;
  min-height: 438px;
  display: flex;

  /* PERFECT CHOICE: Flips layout on desktop so image goes right, text goes left */
  flex-direction: row-reverse;

  align-items: center;
  justify-content: space-between;
  padding: 0 101px;
  box-sizing: border-box;
  gap: 40px;
}

/* --- Content Column (Displays Left on Desktop) --- */
.elevate-content-col {
  width: 568px;
  display: flex;
  flex-direction: column;
}

.elevate-content-col h2 {
  font-family: var(--font-heading), sans-serif;
  font-weight: 700;
  font-size: 32px;
  line-height: 30px;
  letter-spacing: 0.04em;
  color: var(--text-main);
  margin: 0 0 20px 0;
}

.elevate-content-col h2 .gold-text {
  color: var(--accent-gold);
}

.elevate-content-col p {
  font-family: var(--font-body), sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 26px;
  letter-spacing: 0.02em;
  color: #c5c5c5;
  margin: 0 0 37px 0;
}

/* Button CTA Configuration */
.elevate-quote-btn {
  width: 270px;
  height: 50px;
  background-color: var(--accent-gold);
  color: #000000;
  border-radius: 40px;
  font-family: var(--font-heading), sans-serif;
  font-size: 15px;
  font-weight: 700;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 12px 20px;
  box-sizing: border-box;
  transition: background-color 0.2s;
}

.elevate-quote-btn:hover {
  background-color: var(--accent-gold-hover);
}

/* --- Image Column (Displays Right on Desktop) --- */
.elevate-image-col {
  width: 567px;
  height: 347px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.elevate-main-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

/* --- Responsive Layout Parameters (Mobile & Tablets) --- */
@media (max-width: 1024px) {
  .elevate-container {
    padding: 40px 30px;

    /* Falls back to regular vertical flow (Image at top, text at bottom) */
    flex-direction: column;

    height: auto;
    min-height: auto;
    gap: 35px;
  }

  .elevate-image-col {
    width: 100%;
    max-width: 500px;
    height: auto;
  }

  .elevate-main-img {
    height: auto;
  }

  .elevate-content-col {
    width: 100%;
    align-items: center;
    text-align: center;
  }

  .elevate-content-col h2 {
    width: 370;
    height: 60;
    top: 8628px;
    left: 22px;
    range: 0 deg;
    opacity: 1;
    font-family: Inter;
    font-weight: 700;
    font-style: Bold;
    font-size: 24px;
    padding-bottom: NONE;
    line-height: 30px;
    letter-spacing: 4%;
    text-align: center;
    vertical-align: middle;
  }
  .elevate-content-col p {
    width: 366;
    height: 75;
    top: 8704px;
    left: 23px;
    range: 0 deg;
    opacity: 1;
    font-family: Inter;
    font-weight: 400;
    font-style: Regular;
    font-size: 15px;
    padding-bottom: NONE;
    line-height: 25px;
    letter-spacing: 2%;
    text-align: center;
    vertical-align: middle;
  }
}
@media (max-width: 768px) {
  .filter-buttons {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: hidden;
    overflow-y: hidden;
    justify-content: flex-start;
    gap: 10px;

    width: 100%;
    padding: 0 0 10px 0;

    scrollbar-width: none;
    -ms-overflow-style: none;
  }

  .filter-buttons::-webkit-scrollbar {
    display: none;
  }

  .filter-btn {
    flex-shrink: 0;
  }
}

/* --- Tablet & Mobile Viewports --- */
@media (max-width: 768px) {
  .browse-industry-section {
    /* Prevents heavy horizontal desktop padding from crushing the mobile workspace */
    padding: 60px 24px;
    box-sizing: border-box;
  }

  .browse-grid {
    /* Locks down exactly two equal columns inside the mobile container boundaries */
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
    margin-bottom: 40px;
    width: 100%;
    box-sizing: border-box;
  }

  .browse-item {
    width: 100%;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .browse-card {
    /* REMOVES fixed width constraints so cards fit smoothly inside the grid columns */
    width: 100%;

    /* REMOVES fixed height constraints and enforces a perfect square look like boxes.png */
    height: auto;
    aspect-ratio: 1 / 1;

    box-sizing: border-box;
    overflow: hidden;
  }

  .browse-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .browse-item h3 {
    font-size: 0.9rem;
    font-weight: 700;
    text-align: center;
    margin-top: 12px;
    width: 100%;

    /* Gracefully wraps long titles onto a new line so they don't break the layout walls */
    white-space: normal;
    word-wrap: break-word;
  }
}

/* --- Base Styles (Mobile & Tablet) --- */
/* By default, this applies to everything up to 1024px (Mobile and Tablets) */
/* MOBILE ONLY */
@media (max-width: 768px) {
  .customize-section {
    padding: 70px 20px;
  }

  .customize-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
  }

  .customize-card {
    width: 100%;
    max-width: 100%;
    height: auto;
    margin: 0;
  }

  .filter-buttons {
    justify-content: center;
    gap: 8px;
  }
  .filter-btn {
    flex-shrink: 0;
  }

  .customize-header h2 {
    font-size: 24px;
  }

  .customize-header p {
    width: 100%;
    font-size: 15px;
    line-height: 25px;
  }

  .card-image-area {
    height: 120px;
  }

  .card-content {
    padding: 12px;
  }

  .card-content h3 {
    font-size: 14px;
  }

  .card-content p {
    font-size: 12px;
    line-height: 18px;
  }
}
@media (max-width: 768px) {
  .filter-buttons {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    overflow-y: hidden;
    gap: 5px;
    justify-content: flex-start;

    scrollbar-width: none;
    -ms-overflow-style: none;
  }

  .filter-buttons::-webkit-scrollbar {
    display: none;
  }

  .filter-btn {
    flex-shrink: 0;
    height: 50px;
  }

  .filter-btn:nth-child(1) {
    width: 155px !important;
  }

  .filter-btn:nth-child(2) {
    width: 160px !important;
  }
}

/* --- Laptop / Desktop Styles --- */
/* Applies to screens 1025px and wider */
@media (min-width: 1025px) {
  .customize-grid {
    grid-template-columns: repeat(4, 1fr); /* 4 cards per row */
  }
}

/* ================================================
   STEPS ACCORDION
   ================================================ */

.pg-step-item {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding: 0;
    display: flex;
    flex-direction: column;
}

.pg-step-item:last-child {
    border-bottom: none;
}

.pg-accordion-btn {
    pointer-events: all;
    cursor: pointer;
    padding: 18px 0;
    gap: 12px;
    display: flex;
    align-items: center;
    width: 100%;
    background: none;
    border: none;
    color: inherit;
    font-family: inherit;
    text-align: left;
}

.pg-accordion-q {
    font-size: 14px;
    line-height: 1.65;
    color: #ffffff;
    font-weight: 500;
    flex: 1;
}

.pg-accordion-btn:focus {
    outline: none;
}

.pg-accordion-icon {
    display: block;
    font-size: 18px;
    color: rgba(255, 255, 255, 0.6);
    margin-left: auto;
    flex-shrink: 0;
    transition: color 0.25s;
}

.pg-accordion-item.open .pg-accordion-icon {
    color: #FFC107;
}

.pg-accordion-body {
    display: none;
    padding: 0 0 16px 0;
}

.pg-accordion-body p {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.65);
    margin: 0;
}

.pg-accordion-item.open .pg-accordion-body {
    display: block;
}

@media (max-width: 768px) {
    .guide-container {
        flex-direction: column !important;
        gap: 20px !important;
    }
    .guide-col-one, .guide-col-two {
        width: 100% !important;
        max-width: 100% !important;
        flex: unset !important;
        min-height: unset !important;
        max-height: unset !important;
        padding-right: 0 !important;
    }
    .guide-col-two {
        padding: 20px !important;
    }
}
/* White Mode Fixes for dark theme components */
.step-item { background-color: transparent !important; }
.step-item h3 { color: var(--text-main) !important; }
.step-item p { color: var(--text-muted) !important; }
.instant-quote-form input, .instant-quote-form select, .instant-quote-form textarea, .file-upload-wrapper, .file-upload-wrapper input {
  background-color: var(--bg-darker) !important;
  color: var(--text-main) !important;
}
.instant-quote-form label { color: #ffffff !important; }
.guide-col-one, .guide-col-one p, .guide-col-one span, .guide-col-one div, .guide-col-one li {
  color: var(--text-muted) !important;
  background-color: transparent !important;
}
.guide-col-one h1, .guide-col-one h2, .guide-col-one h3, .guide-col-one h4, .guide-col-one h5, .guide-col-one h6, .guide-col-one strong, .guide-col-one b {
  color: var(--text-main) !important;
  background-color: transparent !important;
}
.pg-accordion-item {
  background-color: transparent !important;
}
.pg-accordion-q, .pg-accordion-btn {
  color: var(--text-main) !important;
  background-color: transparent !important;
}
.pg-accordion-body p {
  color: var(--text-muted) !important;
}
</style>

<body>

    <!-- Assuming header goes here eventually, but putting main-container as requested -->
    <div class="main-container">
        <!-- Box By Industry Section -->
        <section class="box-by-industry">
            <div class="industry-hero-content">
                <div class="industry-hero-right">
                    <div class="hero-image-wrapper">
                        <img src="{{ !empty($value[0]->hero_image) ? asset('images/'.$value[0]->hero_image) : './assets/Box packing home banner.png' }}" alt="{{ !empty($value[0]->hero_title) ? $value[0]->hero_title : 'Premium packaging boxes' }}"
                            class="hero-main-img">
                    </div>
                </div>

                <div class="industry-hero-left">
                    <div class="breadcrumb">
                        <a href="{{ url('/') }}" class="breadcrumb-home">
                            <img src="{{ asset('uploads/house-chimney 1.svg') }}" alt="Home" style="width: 16px; height: 16px;">
                        </a>
                        @if(isset($parent_cat) && !empty($parent_cat))
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16" style="margin: 0 8px; color: #a0a0a0;">
                                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                                </svg>
                                <a href="{{ url($parent_cat->category_url) }}" style="color: #a0a0a0; text-decoration: none;">
                                    {{ $parent_cat->name }}
                                </a>
                            </span>
                        @endif
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16" style="margin: 0 8px; color: #a0a0a0;">
                              <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                              <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            {{ !empty($value) && count($value) > 0 ? $value[0]->name : 'Box By Industry' }}
                        </span>
                    </div>

                    @if(!empty($value[0]->hero_title))
                        <h1>{{ $value[0]->hero_title }}</h1>
                    @else
                        <h1>{{ $heroTitle ?? 'Rigid Boxes for Every' }} <span class="highlight-yellow">{{ $heroHighlight ?? 'Industry' }}</span></h1>
                    @endif

                    @if(!empty($value[0]->hero_desc))
                        <p>{{ $value[0]->hero_desc }}</p>
                    @elseif(!empty($value[0]->description))
                        <p>{!! strip_tags($value[0]->description) !!}</p>
                    @else
                        <p>{{ $heroDesc ?? 'Tailor-made packaging solutions designed to reflect the unique demands of your industry. From opulent jewellery boxes and luxury retail packaging to sleek tech solutions, we combine premium craftsmanship, functionality, and attention to detail to elevate your brand and create a memorable unboxing experience.' }}</p>
                    @endif

                    <a href="#" class="btn btn-yellow">Design Custom Boxes</a>
                </div>
            </div>

    @include('web.trustbar')
        </section>
        <!-- Browse by Industry Section -->
        <section class="browse-industry-section">
            <div class="browse-header">
                <span class="section-badge outline badge-yellow">CATEGORIES</span>
                <h2>Browse {{ !empty($value) && count($value) > 0 ? $value[0]->name : 'Categories' }}</h2>
                <p>{{ $browseSectionDesc ?? 'Click on any category to explore rigid box designs tailored to its unique packaging needs and brand requirements.' }}</p>
            </div>

            @php
                $currentCategoryId = !empty($value) && count($value) > 0 ? $value[0]->cat_id : 0;
                $subCategories = \DB::table('add_category')->where('parent_category', $currentCategoryId)->where('status', 1)->take(8)->get();
                
                $customImages = [
                    'Gift Boxes' => 'gift_boxes.png',
                    'Retail Boxes' => 'retail_boxes.png',
                    'Cosmetic Boxes' => 'cosmetic_boxes.png',
                    'Eco Friendly Boxes' => 'eco_friendly_boxes.png',
                    'Metalized Boxes' => 'metalized_boxes.png',
                    'Display Packaging' => 'display_packaging.png',
                    'Food Boxes' => 'food_boxes.png',
                    'Luxury Boxes' => 'luxury_boxes.png'
                ];
            @endphp

            <div class="browse-grid">
                @if(count($subCategories) > 0)
                    @foreach($subCategories as $subCategory)
                    @php
                        $imgFile = asset('assets/lid and base box.jfif'); // fallback
                        if (isset($customImages[$subCategory->name])) {
                            $imgFile = asset('uploads/' . $customImages[$subCategory->name]);
                        } elseif (!empty($subCategory->bimage)) {
                            $imgFile = asset('images/' . $subCategory->bimage);
                        } elseif (!empty($subCategory->image)) {
                            $imgFile = asset('images/' . $subCategory->image);
                        }
                    @endphp
                    <div class="browse-item">
                        <div class="browse-card">
                            <a href="{{ url($subCategory->category_url) }}" style="display: block; width: 100%; height: 100%;">
                                <img src="{{ $imgFile }}" alt="{{ $subCategory->name }}">
                            </a>
                        </div>
                        <h3>{{ $subCategory->name }}</h3>
                    </div>
                    @endforeach
                @else
                    <p style="color: #a0a0a0; grid-column: 1 / -1;">No subcategories available.</p>
                @endif
            </div>

            <div class="browse-footer">
                <a href="#" class="btn btn-yellow">Explore All Categories</a>
            </div>
        </section>

        <!-- Our Commitment Section -->
        <section class="commitment-section">
            <div class="commitment-content">
                <div class="commitment-left">
                    <span class="commitment-badge">OUR COMMITMENT</span>
                    <h2>Our Commitment to Eco Friendly for Custom Packaging</h2>
                    <p>We are dedicated to creating custom packaging solutions that balance premium quality with
                        environmental responsibility. By using eco-friendly materials and sustainable production
                        practices, we help protect products while reducing environmental impact. Our approach
                        minimizes waste, optimizes resources, and supports brands in building a stronger, more
                        responsible reputation.</p>
                    <a href="#" class="btn btn-gold">Get a Quote</a>
                </div>
                <div class="commitment-right">
                    <div class="badge-grid">
                        <div class="badge-card">
                            <img src="{{ asset('uploads/Eco-frndly.webp') }}" alt="Biodegradable badge">
                        </div>
                        <div class="badge-card">
                            <img src="{{ asset('uploads/Recycle.webp') }}" alt="FCS badge">
                        </div>
                        <div class="badge-card">
                            <img src="{{ asset('uploads/Biodegradable.webp') }}" alt="Eco-friendly badge">
                        </div>
                        <div class="badge-card">
                            <img src="{{ asset('uploads/FCS.webp') }}" alt="Recycle badge">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Customize Box Section -->
        <section class="customize-section">
            <div class="customize-header">
                <span class="commitment-badge badge-center">OPTIONS & MATERIALS</span>
                <h2>Customize Your Box</h2>
                <p>Choose materials, finishes, and add-ons to build your perfect rigid box.</p>
            </div>

            <div class="filter-buttons">
                <button class="filter-btn active">Coating & Laminations</button>
                <button class="filter-btn">Printing Options</button>
                <button class="filter-btn">Special Finishes</button>
                <button class="filter-btn">Paperboard</button>
                <button class="filter-btn">Corrugated</button>
                <button class="filter-btn">Fluted Grades</button>
                <button class="filter-btn">Rigid Materials</button>
            </div>

<div class="tab-contents-container">
            <div class="customize-grid" id="tab-coating-and-laminations" style="display: grid;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/Lamination.webp') }}" alt="Lamination">
                    </div>
                    <div class="card-content">
                        <h3>Lamination</h3>
                        <p>Laminated protective film that adheres to the surface of packaging materials to maximize durability.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/UV.webp') }}" alt="UV">
                    </div>
                    <div class="card-content">
                        <h3>UV</h3>
                        <p>Fast-drying coating cured with ultraviolet light. Available in gloss or matte finish.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/Varnish.webp') }}" alt="Varnish">
                    </div>
                    <div class="card-content">
                        <h3>Varnish</h3>
                        <p>Clear coating applied using the CMYK printing method. Available in gloss, satin, or matte.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/anti-scratch-lamination.webp') }}" alt="Anti Scratch Lamination">
                    </div>
                    <div class="card-content">
                        <h3>Anti Scratch Lamination</h3>
                        <p>Laminated BOPP film that is scratch, scuff, and fingerprint resistant. Cost-effective option.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/aqueous-coating-.webp') }}" alt="Aqueous Coating">
                    </div>
                    <div class="card-content">
                        <h3>Aqueous Coating</h3>
                        <p>Clear, fast-drying, water-based, and eco-friendly coating. Available in gloss or matte finish.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                            <span class="icon-circle">🍃</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/soft-touch-coating.webp') }}" alt="Soft Touch Coating">
                    </div>
                    <div class="card-content">
                        <h3>Soft Touch Coating</h3>
                        <p>Soft to the touch coating that creates a velvety texture for a more tactile appeal.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/soft-touch-silk-lamination-.webp') }}" alt="Soft Touch Silk Lamination">
                    </div>
                    <div class="card-content">
                        <h3>Soft Touch Silk Lamination</h3>
                        <p>Soft to the touch lamination similar to peach skin. Available in a satin or matte finish.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Coating %26 Laminations/spot-gloss-uV-.webp') }}" alt="Spot Gloss UV">
                    </div>
                    <div class="card-content">
                        <h3>Spot Gloss UV</h3>
                        <p>UV coating that is applied to a specified area and cured using ultraviolet light.</p>
                        <div class="card-icons">
                            <span class="icon-circle">♻️</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customize-grid" id="tab-printing-options" style="display: none;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/digital-print.webp') }}" alt="Digital Print">
                    </div>
                    <div class="card-content">
                        <h3>Digital Print</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/offset-print.webp') }}" alt="Offset Print">
                    </div>
                    <div class="card-content">
                        <h3>Offset Print</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/oil-based-Inks.webp') }}" alt="Oil Based Inks">
                    </div>
                    <div class="card-content">
                        <h3>Oil Based Inks</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/pantone-metallic.webp') }}" alt="Pantone Metallic">
                    </div>
                    <div class="card-content">
                        <h3>Pantone Metallic</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/pantone.webp') }}" alt="Pantone">
                    </div>
                    <div class="card-content">
                        <h3>Pantone</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/soy-vegetable-based-Inks.webp') }}" alt="Soy Vegetable Based Inks">
                    </div>
                    <div class="card-content">
                        <h3>Soy Vegetable Based Inks</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/uv-print.webp') }}" alt="Uv Print">
                    </div>
                    <div class="card-content">
                        <h3>Uv Print</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Printing Options/water-based-Inks.webp') }}" alt="Water Based Inks">
                    </div>
                    <div class="card-content">
                        <h3>Water Based Inks</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
            </div>
            <div class="customize-grid" id="tab-special-finishes" style="display: none;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/blind-debossing-.webp') }}" alt="Blind Debossing">
                    </div>
                    <div class="card-content">
                        <h3>Blind Debossing</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/blind-embossing.webp') }}" alt="Blind Embossing">
                    </div>
                    <div class="card-content">
                        <h3>Blind Embossing</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/cold-foil-printing.webp') }}" alt="Cold Foil Printing">
                    </div>
                    <div class="card-content">
                        <h3>Cold Foil Printing</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/combination-embossing.webp') }}" alt="Combination Embossing">
                    </div>
                    <div class="card-content">
                        <h3>Combination Embossing</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/hot-foil-stamping.webp') }}" alt="Hot Foil Stamping">
                    </div>
                    <div class="card-content">
                        <h3>Hot Foil Stamping</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/registered-embossing-.webp') }}" alt="Registered Embossing">
                    </div>
                    <div class="card-content">
                        <h3>Registered Embossing</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Special Finishes/window-patching.webp') }}" alt="Window Patching">
                    </div>
                    <div class="card-content">
                        <h3>Window Patching</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
            </div>
            <div class="customize-grid" id="tab-paperboard" style="display: none;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/sbs-c1s.webp') }}" alt="SBS C1S">
                    </div>
                    <div class="card-content">
                        <h3>SBS C1S</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/sbs-c2s.webp') }}" alt="SBS C2S">
                    </div>
                    <div class="card-content">
                        <h3>SBS C2S</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/ccnb.webp') }}" alt="CCNB">
                    </div>
                    <div class="card-content">
                        <h3>CCNB</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/fully-recycled-ccnb.webp') }}" alt="Fully Recycled CCNB">
                    </div>
                    <div class="card-content">
                        <h3>Fully Recycled CCNB</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/natural-brown-kraft.webp') }}" alt="Natural Brown Kraft">
                    </div>
                    <div class="card-content">
                        <h3>Natural Brown Kraft</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/white-kraft.webp') }}" alt="White Kraft">
                    </div>
                    <div class="card-content">
                        <h3>White Kraft</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/black-kraft.webp') }}" alt="Black Kraft">
                    </div>
                    <div class="card-content">
                        <h3>Black Kraft</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Paper Board/uncoated-unbleached-kraft-(uuk).webp') }}" alt="Uncoated Unbleached Kraft (UUK)">
                    </div>
                    <div class="card-content">
                        <h3>Uncoated Unbleached Kraft (UUK)</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
            </div>
            <div class="customize-grid" id="tab-corrugated" style="display: none;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Corrugated/bleached-white-board-.webp') }}" alt="Bleached White Board">
                    </div>
                    <div class="card-content">
                        <h3>Bleached White Board</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Corrugated/kemi-white-board-.webp') }}" alt="Kemi White Board">
                    </div>
                    <div class="card-content">
                        <h3>Kemi White Board</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Corrugated/natural-brown-kraft-linerboard-.webp') }}" alt="Natural Brown Kraft Linerboard">
                    </div>
                    <div class="card-content">
                        <h3>Natural Brown Kraft Linerboard</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Corrugated/oyster-white-board-.webp') }}" alt="Oyster White Board">
                    </div>
                    <div class="card-content">
                        <h3>Oyster White Board</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
            </div>
            <div class="customize-grid" id="tab-fluted-grades" style="display: none;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/a-flute.webp') }}" alt="A Flute">
                    </div>
                    <div class="card-content">
                        <h3>A Flute</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/b-flute.webp') }}" alt="B Flute">
                    </div>
                    <div class="card-content">
                        <h3>B Flute</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/c-flute.webp') }}" alt="C Flute">
                    </div>
                    <div class="card-content">
                        <h3>C Flute</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/double-wall.webp') }}" alt="Double Wall">
                    </div>
                    <div class="card-content">
                        <h3>Double Wall</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/e-flute.webp') }}" alt="E Flute">
                    </div>
                    <div class="card-content">
                        <h3>E Flute</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/f-flute.webp') }}" alt="F Flute">
                    </div>
                    <div class="card-content">
                        <h3>F Flute</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Fluted Grades/triple-Wall.webp') }}" alt="Triple Wall">
                    </div>
                    <div class="card-content">
                        <h3>Triple Wall</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
            </div>
            <div class="customize-grid" id="tab-rigid-materials" style="display: none;">
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Rigid Material/Duplex-Chipboard-.webp') }}" alt="Duplex Chipboard">
                    </div>
                    <div class="card-content">
                        <h3>Duplex Chipboard</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
                <div class="customize-card">
                    <div class="card-image-area">
                        <img src="{{ asset('uploads/Rigid Material/grey-chipboard-cardboard.webp') }}" alt="Grey Chipboard Cardboard">
                    </div>
                    <div class="card-content">
                        <h3>Grey Chipboard Cardboard</h3>
                        <p>Premium packaging option to elevate your brand.</p>
                    </div>
                </div>
            </div>
        </div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const filterBtns = document.querySelectorAll(".filter-btn");
    const grids = document.querySelectorAll(".customize-grid");
    
    filterBtns.forEach(btn => {
        btn.addEventListener("click", function() {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove("active"));
            this.classList.add("active");
            
            // Hide all grids
            grids.forEach(grid => grid.style.display = "none");
            
            // Show corresponding grid
            const tabName = this.innerText.trim().toLowerCase().replace(/ /g, "-").replace(/&/g, "and");
            const targetGrid = document.getElementById("tab-" + tabName);
            if(targetGrid) {
                targetGrid.style.display = "grid";
            }
        });
    });
});
</script>

        </section>
        <!-- testimonal  -->
        <!-- testimonial -->
        <section class="testimonial-section">
            <div class="testimonial-header">
                <div class="testimonial-badge">TESTIMONIALS</div>
                <h2>What Our Customers Say</h2>
                <p class="subtitle">Hear from brands who trust us with their packaging needs.</p>
            </div>

            <div class="testimonial-grid">
                <!-- Card 1 -->
                <div class="testimonial-card">
                    <div class="avatar-wrapper">
                        <img src="{{ asset('images/avatar_1.png') }}" alt="Mike Torello" class="avatar-img">
                    </div>
                    <p class="testimonial-text">
                        "We've been working with RigidBox Pro for 3 years now. Their consistency, attention to detail,
                        and timely delivery make them our go-to packaging partner."
                    </p>
                    <h4 class="client-name">Mike Torello</h4>
                    <span class="client-role">CEO, Jewels Co.</span>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card">
                    <div class="avatar-wrapper">
                        <img src="{{ asset('images/avatar_2.png') }}" alt="Mike Torello" class="avatar-img">
                    </div>
                    <p class="testimonial-text">
                        "We've been working with RigidBox Pro for 3 years now. Their consistency, attention to detail,
                        and timely delivery make them our go-to packaging partner."
                    </p>
                    <h4 class="client-name">Mike Torello</h4>
                    <span class="client-role">CEO, Jewels Co.</span>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card">
                    <div class="avatar-wrapper">
                        <img src="{{ asset('images/avatar_3.png') }}" alt="Mike Torello" class="avatar-img">
                    </div>
                    <p class="testimonial-text">
                        "We've been working with RigidBox Pro for 3 years now. Their consistency, attention to detail,
                        and timely delivery make them our go-to packaging partner."
                    </p>
                    <h4 class="client-name">Mike Torello</h4>
                    <span class="client-role">CEO, Jewels Co.</span>
                </div>
            </div>

            <!-- NEW: Mobile Slider Arrow Navigation Controls -->
            <div class="testimonial-nav">
                <button class="nav-btn prev-btn" aria-label="Previous slide">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button class="nav-btn next-btn" aria-label="Next slide">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </section>
        <!--get instant quote-->
        <section class="quote-section">
            <div class="quote-container">

                <div class="quote-steps-col">
                    <div class="step-item">
                        <div class="step-header">
                            <span class="step-num">01.</span>
                            <h3>Submit Your Brief</h3>
                        </div>
                        <p>Share your product dimensions, quantities, and vision. We respond within 24 hours with
                            initial recommendations and a structural concept tailored to your needs.</p>
                    </div>

                    <div class="step-item">
                        <div class="step-header">
                            <span class="step-num">02.</span>
                            <h3>Design & Quote</h3>
                        </div>
                        <p>You receive a structural die line, finish spec sheet, and transparent pricing. Revisions are
                            included at no extra cost — no surprises, no hidden fees.</p>
                    </div>

                    <div class="step-item">
                        <div class="step-header">
                            <span class="step-num">03.</span>
                            <h3>Approve & Produce</h3>
                        </div>
                        <p>Once artwork is approved, production begins immediately in our certified manufacturing
                            facility. Pre-production physical samples available before full run.</p>
                    </div>

                    <div class="step-item">
                        <div class="step-header">
                            <span class="step-num">04.</span>
                            <h3>Ship & Arrive</h3>
                        </div>
                        <p>Your order ships with full tracking and quality documentation. Custom orders take
                            approximately 15 days production, plus shipping.</p>
                    </div>
                </div>

                <div class="quote-form-col">
                    <h2>Request a Free Quote</h2>

                    <form class="instant-quote-form">
                        <div class="form-row dual-grid">
                            <div class="form-group">
                                <label>Name *</label>
                                <input type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address *</label>
                                <input type="email" placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="form-row dual-grid">
                            <div class="form-group">
                                <label>Phone *</label>
                                <input type="tel" placeholder="Enter your number" required>
                            </div>
                            <div class="form-group">
                                <label>Physical Address</label>
                                <input type="text" placeholder="Enter your address">
                            </div>
                        </div>

                        <div class="form-row dimensions-grid">
                            <div class="form-group">
                                <label>Width *</label>
                                <input type="text" placeholder="Width" required>
                            </div>
                            <div class="form-group">
                                <label>Length *</label>
                                <input type="text" placeholder="Length" required>
                            </div>
                            <div class="form-group">
                                <label>Depth *</label>
                                <input type="text" placeholder="Depth" required>
                            </div>
                            <div class="form-group">
                                <label>Units *</label>
                                <select required>
                                    <option value="mm">mm</option>
                                    <option value="cm">cm</option>
                                    <option value="inch">inch</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row triple-grid">
                            <div class="form-group">
                                <label>Select Material</label>
                                <select>
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Color Options</label>
                                <select>
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Product Name</label>
                                <select>
                                    <option value="">Choose option</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row dual-grid align-end">
                            <div class="form-group">
                                <label>Quantity *</label>
                                <input type="number" placeholder="Enter quantity" required>
                            </div>
                            <div class="form-group">
                                <label>Upload File Here</label>
                                <div class="file-upload-wrapper">
                                    <input type="text" placeholder="No file choosen" readonly>
                                    <label class="upload-btn">Upload <input type="file" style="display:none;"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group textarea-group">
                            <label>Message</label>
                            <textarea placeholder="Enter your message" rows="4"></textarea>
                        </div>

                        <button type="submit" class="submit-quote-btn">Instant Quote</button>
                    </form>
                </div>

            </div>
        </section>

        <!-- Packing guide -->
        <section class="guide-section">
            <div class="guide-badge">PACKAGING GUIDE</div>

            <div class="guide-container">
                <div class="guide-col-one">
                    {!! !empty($value) && count($value) > 0 ? $value[0]->description : '' !!}
                </div>

                <div class="guide-col-two">
                    <div class="pg-steps-box">
                        <h3 class="pg-steps-title" style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 24px; font-family: var(--font-heading), sans-serif;">Frequently Asked Questions</h3>

                        @if(isset($faqs) && count($faqs) > 0)
                            @foreach($faqs as $faq)
                            <div class="pg-step-item pg-accordion-item">
                                <button class="pg-accordion-btn">
                                    <span class="pg-accordion-q"><span style="color: var(--accent-gold); font-weight: 700;">{{ $loop->iteration }}.</span> {{$faq->question}}</span>
                                    <span class="pg-accordion-icon">+</span>
                                </button>
                                <div class="pg-accordion-body">
                                    <p>{{$faq->answer}}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                        
                        <!-- Help box -->
                        <div class="pg-cta-box" style="background-color: var(--bg-darker); border-radius: 8px; padding: 24px; text-align: center; margin-top: 30px;">
                            <h4 class="pg-cta-title" style="color: #ffffff; font-size: 18px; font-weight: 700; margin-bottom: 8px; font-family: var(--font-heading), sans-serif;">Need help choosing?</h4>
                            <p class="pg-cta-sub" style="color: rgba(255, 255, 255, 0.8); font-size: 13px; margin-bottom: 20px;">Our team responds within 2 hours</p>
                            <a href="#" class="pg-cta-btn" style="display: block; background-color: var(--accent-gold); color: #000000; font-weight: 600; font-size: 14px; padding: 12px; border-radius: 40px; text-decoration: none; transition: background-color 0.2s;">Chat with an expert</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Elevate -->
        <section class="elevate-section">
            <div class="elevate-container">

                <div class="elevate-image-col">
                    <img src="{{ asset('uploads/category-cta.png') }}" alt="Custom colorful design boxes" class="elevate-main-img">
                </div>

                <div class="elevate-content-col">
                    <h2>Ready to Elevate Your <span class="gold-text">Packaging</span>?</h2>
                    <p>Let's bring your packaging vision to life. Our team of experts is ready to design and deliver
                        rigid boxes that will make your brand unforgettable.</p>
                    <a href="#" class="elevate-quote-btn">Get Your Free Quote Today</a>
                </div>

            </div>
        </section>




    </div>


<script>
document.addEventListener("DOMContentLoaded", () => {

    /* =========================
       FILTER BUTTONS
    ========================= */
    const filterButtons = document.querySelectorAll(".filter-btn");

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {

            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            // Later you can filter cards based on category here
            console.log("Selected:", button.textContent);
        });
    });


    /* =========================
       TESTIMONIAL SLIDER
    ========================= */
    const testimonialCards = document.querySelectorAll(".testimonial-card");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    let currentIndex = 0;

    function showTestimonial(index) {

        testimonialCards.forEach(card => {
            card.style.display = "none";
        });

        testimonialCards[index].style.display = "block";
    }

    if (window.innerWidth <= 768 && testimonialCards.length > 0) {

        showTestimonial(currentIndex);

        nextBtn?.addEventListener("click", () => {
            currentIndex++;

            if (currentIndex >= testimonialCards.length) {
                currentIndex = 0;
            }

            showTestimonial(currentIndex);
        });

        prevBtn?.addEventListener("click", () => {
            currentIndex--;

            if (currentIndex < 0) {
                currentIndex = testimonialCards.length - 1;
            }

            showTestimonial(currentIndex);
        });
    }


    /* =========================
       FILE UPLOAD
    ========================= */
    const fileInput = document.querySelector('input[type="file"]');
    const fileNameField = document.querySelector(
        ".file-upload-wrapper input[type='text']"
    );

    if (fileInput && fileNameField) {

        fileInput.addEventListener("change", () => {

            if (fileInput.files.length > 0) {
                fileNameField.value = fileInput.files[0].name;
            } else {
                fileNameField.value = "No file chosen";
            }

        });
    }


    /* =========================
       QUOTE FORM
    ========================= */
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
                    const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
                    if (!emailRegex.test(val)) valid = false;
                } else if (field.type === 'tel') {
                    // Simple phone validation (at least 7 digits/characters like + - spaces)
                    const phoneRegex = /^\\+?[\\d\\s\\-\\(^\\)]{7,20}$/;
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

            if (!isValid) {
                if (firstInvalidField) firstInvalidField.focus();
                return;
            }

            // Success state - you can add custom success message UI here if needed
            
            quoteForm.reset();
            requiredFields.forEach(field => field.style.border = ""); // reset borders

            if (typeof fileNameField !== 'undefined' && fileNameField) {
                fileNameField.value = "No file chosen";
            }
        });
    }
    
    // --- FAQ Accordion ---
    document.querySelectorAll('.pg-accordion-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = btn.closest('.pg-accordion-item');
            var isOpen = item.classList.contains('open');

            // close all, reset icons to +
            document.querySelectorAll('.pg-accordion-item').forEach(function(i) {
                i.classList.remove('open');
                var icon = i.querySelector('.pg-accordion-icon');
                if (icon) {
                    icon.innerHTML = '+';
                    icon.style.color = 'rgba(255,255,255,0.6)';
                }
            });

            // if it was closed, open it and show -
            if (!isOpen) {
                item.classList.add('open');
                var icon = btn.querySelector('.pg-accordion-icon');
                if (icon) {
                    icon.innerHTML = '&#8722;';
                    icon.style.color = '#FFC107';
                }
            }
        });
        <section class="elevate-section">
            <div class="elevate-container">

                <div class="elevate-image-col">
                    <img src="{{ asset('uploads/category-cta.png') }}" alt="Custom colorful design boxes" class="elevate-main-img">
                </div>

                <div class="elevate-content-col">
                    <h2>Ready to Elevate Your <span class="gold-text">Packaging</span>?</h2>
                    <p>Let's bring your packaging vision to life. Our team of experts is ready to design and deliver
                        rigid boxes that will make your brand unforgettable.</p>
                    <a href="#" class="elevate-quote-btn">Get Your Free Quote Today</a>
                </div>

            </div>
        </section>




    </div>


<script>
document.addEventListener("DOMContentLoaded", () => {

    /* =========================
       FILTER BUTTONS
    ========================= */
    const filterButtons = document.querySelectorAll(".filter-btn");

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {

            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            // Later you can filter cards based on category here
            console.log("Selected:", button.textContent);
        });
    });


    /* =========================
       TESTIMONIAL SLIDER
    ========================= */
    const testimonialCards = document.querySelectorAll(".testimonial-card");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    let currentIndex = 0;

    function showTestimonial(index) {

        testimonialCards.forEach(card => {
            card.style.display = "none";
        });

        testimonialCards[index].style.display = "block";
    }

    if (window.innerWidth <= 768 && testimonialCards.length > 0) {

        showTestimonial(currentIndex);

        nextBtn?.addEventListener("click", () => {
            currentIndex++;

            if (currentIndex >= testimonialCards.length) {
                currentIndex = 0;
            }

            showTestimonial(currentIndex);
        });

        prevBtn?.addEventListener("click", () => {
            currentIndex--;

            if (currentIndex < 0) {
                currentIndex = testimonialCards.length - 1;
            }

            showTestimonial(currentIndex);
        });
    }


    /* =========================
       FILE UPLOAD
    ========================= */
    const fileInput = document.querySelector('input[type="file"]');
    const fileNameField = document.querySelector(
        ".file-upload-wrapper input[type='text']"
    );

    if (fileInput && fileNameField) {

        fileInput.addEventListener("change", () => {

            if (fileInput.files.length > 0) {
                fileNameField.value = fileInput.files[0].name;
            } else {
                fileNameField.value = "No file chosen";
            }

        });
    }


    /* =========================
       QUOTE FORM
    ========================= */
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
                    const emailRegex = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
                    if (!emailRegex.test(val)) valid = false;
                } else if (field.type === 'tel') {
                    // Simple phone validation (at least 7 digits/characters like + - spaces)
                    const phoneRegex = /^\\+?[\\d\\s\\-\\(^\\)]{7,20}$/;
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

            if (!isValid) {
                if (firstInvalidField) firstInvalidField.focus();
                return;
            }

            // Success state - you can add custom success message UI here if needed
            
            quoteForm.reset();
            requiredFields.forEach(field => field.style.border = ""); // reset borders

            if (typeof fileNameField !== 'undefined' && fileNameField) {
                fileNameField.value = "No file chosen";
            }
        });
    }
    
    // --- FAQ Accordion ---
    document.querySelectorAll('.pg-accordion-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = btn.closest('.pg-accordion-item');
            var isOpen = item.classList.contains('open');

            // close all, reset icons to +
            document.querySelectorAll('.pg-accordion-item').forEach(function(i) {
                i.classList.remove('open');
                var icon = i.querySelector('.pg-accordion-icon');
                if (icon) {
                    icon.innerHTML = '+';
                    icon.style.color = 'rgba(255,255,255,0.6)';
                }
            });

            // if it was closed, open it and show -
            if (!isOpen) {
                item.classList.add('open');
                var icon = btn.querySelector('.pg-accordion-icon');
                if (icon) {
                    icon.innerHTML = '&#8722;';
                    icon.style.color = '#FFC107';
                }
            }
        });
    });

});
</script>

@include('web.footer')
