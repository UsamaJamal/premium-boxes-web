@include('web/header')
 <style>
/* Base Styles & Variables */
:root {
  --bg-dark: #121212;
  --bg-darker: #0a0a0a;
  --bg-card: #1a1a1a;
  --text-main: #f5f5f5;
  --text-muted: #c5c5c5;
  --accent-gold: #f5c542;
  --accent-gold-hover: #f5c542;
  --border-color: #333;

  --font-heading: "Outfit", sans-serif;
  --font-body: "Inter", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #1a1a1a;
  color: var(--text-main);
  font-family: var(--font-body);
  line-height: 1.6;
  overflow-x: hidden;
  justify-content: center;
  padding-top: 124px; /* Fixed header height (top bar + navbar) */
}

/* Keep the complete home-page canvas on one consistent background. */
body section {
  background-color: #1a1a1a !important;
}

body .sectors-section {
  background-color: #202020 !important;
}

body .testimonials-section {
  background-color: #202020 !important;
  padding-top: 25px !important;
  padding-bottom: 25px !important;
}



body .guide-section .pg-steps-box {
  background-color: #202020 !important;
}

@media (max-width: 768px) {
  body section {
    background-color: #1a1a1a !important;
  }

  body .sectors-section,
  body .testimonials-section {
    background-color: #202020 !important;
  }

  body .guide-section .pg-steps-box {
    background-color: #202020 !important;
  }

  body .sectors-section .sector-card,
  body .sectors-section .sector-info {
    background-color: #242424 !important;
  }

  body .sectors-section .sector-img-placeholder {
    background-color: #303030 !important;
  }

  body .guide-section .container,
  body .guide-section .guide-container,
  body .guide-section .guide-col-one,
  body .guide-section .guide-col-two {
    width: 100% !important;
    max-width: 100% !important;
    min-width: 0 !important;
    box-sizing: border-box !important;
  }

  body .guide-section .guide-container {
    grid-template-columns: minmax(0, 1fr) !important;
  }

  body .guide-section .guide-col-one {
    overflow-x: hidden !important;
  }

  body .guide-section .guide-col-one * {
    max-width: 100% !important;
    box-sizing: border-box !important;
    white-space: normal !important;
    overflow-wrap: anywhere !important;
    word-break: normal !important;
  }

  body .guide-section .guide-col-one img,
  body .guide-section .guide-col-one video,
  body .guide-section .guide-col-one iframe,
  body .guide-section .guide-col-one table {
    width: 100% !important;
    height: auto !important;
  }

  body .guide-section .pg-steps-box {
    padding: 24px 20px !important;
    border-radius: 12px !important;
    overflow: hidden;
  }

  body .guide-section .pg-steps-title {
    margin-bottom: 20px !important;
    font-size: 24px !important;
    line-height: 1.25 !important;
  }

  body .guide-section .pg-accordion-btn {
    align-items: flex-start !important;
    gap: 12px !important;
    padding: 18px 0 0 0 !important;
  }

  body .guide-section .pg-accordion-q {
    display: block !important;
    min-width: 0 !important;
    padding-right: 6px !important;
    font-size: 14px !important;
    line-height: 1.4 !important;
    white-space: normal !important;
    overflow: visible !important;
    text-overflow: clip !important;
    overflow-wrap: break-word !important;
  }

  body .guide-section .pg-accordion-icon {
    padding-top: 1px;
    font-size: 20px;
    line-height: 1.4;
  }

  body .guide-section .pg-step-item:last-child {
    border-bottom: 1px solid rgba(255, 255, 255, 0.16);
  }

  body .guide-section .pg-accordion-item:nth-of-type(n + 5) {
    display: none;
  }

  body .guide-section .pg-cta-box {
    width: 100%;
    padding: 22px 16px !important;
    box-sizing: border-box;
  }

  body .guide-section .pg-cta-btn {
    width: min(100%, 250px);
    box-sizing: border-box;
  }

  body {
    padding-top: 106px !important;
  }
}

@media (max-width: 390px) {
  body {
    padding-top: 106px !important;
  }
}

.container {
  width: 100%;
  max-width: 1380px;
  margin: 0 auto;
  padding: 0 55px;
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
  font-weight: 600;
  line-height: 1.2;
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
  border-radius: 50px;
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
  font-weight: 600;
  font-size: 0.9rem;
  transition: all 0.3s ease;
  cursor: pointer;
}

.btn-primary {
  background-color: var(--accent-gold);
  color: var(--bg-darker);
  border: none;
  outline: none;
  box-shadow: none;
  padding: 16px 40px;
  font-size: 1.1rem;
  font-weight: 700;
}
.hero-buttons a {
  border-radius: 50px;
}/* removed hover: .btn-primary:hover { ... } */

.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary:focus-visible {
  background-color: var(--accent-gold) !important;
  color: var(--bg-darker) !important;
  border: none !important;
  outline: none !important;
  box-shadow: none !important;
}

.brand-logos img {
  height: 40px; /* adjust as needed */
  width: auto;
  object-fit: contain;
  opacity: 0.7;
  transition: opacity 0.3s ease;
}

.brand-logos img:hover {
  opacity: 1;
}
/* Hero Section */
.hero-section {
  position: relative;
  padding: 40px 0;
  text-align: center;
  min-height: 400px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
}

.hero-bg-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(10, 10, 10, 0.85); /* Dark overlay */
  z-index: 1;
}

.hero-content {
  position: relative;
  z-index: 2;
}

.breadcrumb {
  font-size: 0.85rem;
  color: var(--text-muted);
  margin-bottom: 40px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  gap: 8px;
}

.breadcrumb a:hover {
  color: var(--accent-gold);
}

.breadcrumb span {
  color: var(--text-main);
}

.hero-text-container {
  max-width: 800px;
  margin: 0 auto;
}

.hero-text-container .section-badge {
  background-color: rgba(212, 175, 55, 0.1);
  color: var(--accent-gold);
  border: 1px solid var(--accent-gold);
}

.hero-text-container h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.hero-text-container p {
  font-size: 1.1rem;
  color: var(--text-muted);
  max-width: 600px;
  margin: 0 auto;
}

/* Our Story Section */
.our-story-section {
  padding: 40px 0;
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
  padding: 40px 0;
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
  padding: 40px 0;
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
  padding: 40px 0;
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
  background-color: var(--bg-card);
  border: 1px solid rgba(245, 197, 66, 0.4);
  border-radius: 12px;
  text-align: center;
  cursor: pointer;
  transition: border-color 0.3s ease;
}

.process-card:hover {
  border-color: var(--accent-gold);
}

/* CTA Section */
.cta-section {
  padding: 40px 0;
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

/* --- HOME PAGE STYLES --- */

/* Home Hero Section */
.home-hero {
  padding: 80px 0 24px;
  border-bottom: 1px solid var(--border-color);
  background: #1A1A1A;
}

.home-hero-content {
  display: flex;
  align-items: center;
  gap: 40px;
}

.home-hero-text {
  flex: 1;
}

.home-hero-text h1 {
  font-size: 3rem;
  margin-bottom: 20px;
}

.home-hero-text p, .home-hero-desc p {
  color: var(--text-muted);
  margin-bottom: 30px;
  font-size: 1.1rem;
  max-width: 600px;
  text-align: justify;
}

.hero-buttons {
  display: flex;
  gap: 20px;
}

.btn-outline {
  display: inline-block;
  padding: 10px 24px;
  border-radius: 4px;
  font-weight: 600;
  font-size: 0.9rem;
  border: 1px solid var(--accent-gold);
  color: var(--accent-gold);
  background: transparent;
  transition: all 0.3s ease;
  cursor: pointer;
}

.home-hero-images {
  flex: 1;
  display: flex;
  gap: 20px;
  height: 480px;
  margin-top: 15px;
}

.img-left {
  flex: 1;
  height: 100%;
}

.img-right {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 20px;
  height: 100%;
}

.img-placeholder {
  background-color: var(--bg-card);
  border-radius: 8px;
  width: 100%;
  border: 1px solid #333;
  overflow: hidden;
  position: relative;
}

.img-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.img-left .img-placeholder {
  height: 100%;
}

.img-right .img-placeholder.top {
  flex: 1;
}

.img-right .img-placeholder.bottom {
  flex: 1;
}

/* Reviews Strip */
.reviews-strip {
  border-bottom: 1px solid var(--border-color);
  padding: 20px 0;
  background-color: var(--bg-dark);
}

.reviews-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.reviews-rating {
  display: flex;
  align-items: center;
  gap: 15px;
}

.reviews-rating .stars {
  color: var(--accent-gold);
}
.reviews-link {
  font-family: Inter;
  font-weight: 500;
  font-style: Medium;
  font-size: 16px;
  padding-bottom: NONE;
  line-height: 24px;
  letter-spacing: 0%;
  text-align: justify;
  vertical-align: middle;
  text-decoration: underline;
  text-decoration-style: solid;
  text-decoration-inset: 0%;
  text-decoration-thickness: 0%;
  text-decoration-skip-ink: auto;
}

.brand-logos {
  display: flex;
  gap: 40px;
  font-size: 2rem;
  color: #555;
}

.brand-logos i:hover {
  color: #888;
}

/* Sectors Section */
.sectors-section {
  padding: 80px 0 40px;
  background-color: var(--bg-darker);
}

.sectors-header {
  text-align: center;
  margin-bottom: 25px;
}

.section-badge-text {
  color: var(--accent-gold);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin-bottom: 10px;
  display: block;
}

.sectors-header h2 {
  font-size: 2.5rem;
  margin-bottom: 15px;
}

.sectors-header p {
  color: var(--text-muted);
  margin-bottom: 0;
}

.sectors-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 28px;
}

.sector-card {
  background-color: #161616;
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.08);
  overflow: hidden;
  position: relative;
  cursor: pointer;
  transition: border-color 0.3s ease;
}



.sector-img-placeholder {
  width: 100%;
  aspect-ratio: 1 / 1;
  background-color: #292929;
  border-radius: 0;
  overflow: hidden;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}

.sector-img-placeholder a {
  display: block;
  width: 100%;
  height: 100%;
}

.sector-img-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: relative;
}

.sector-info {
  min-height: 103px;
  padding: 16px;
  text-align: left;
  background-color: #242424;
}

.sector-info h3 {
  font-size: 1.15rem !important;
  font-weight: 700;
  color: #ffffff;
  margin-bottom: 8px;
  line-height: 1.2;
}

.sector-info h3 a {
  color: inherit;
  text-decoration: none;
}

.sector-info p {
  font-family: var(--font-body);
  font-size: 1rem;
  color: #c7c7c7;
  line-height: 1.45;
  font-weight: 400;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}

.sectors-action {
  text-align: center;
}
.sectors-action .btn-primary {
  border-radius: 50px;
}
/* Discount CTA Banner */
.discount-cta {
  padding: 40px 0 80px;
  background: var(--bg-dark);
}

.discount-cta-box {
  text-align: center;
  padding: 50px 30px;
  border-radius: 16px;
  background: linear-gradient(
    180deg,
    rgba(35, 35, 35, 0.95) 0%,
    rgba(20, 20, 20, 1) 100%
  );
  border-top: 1px solid rgba(212, 175, 55, 0.15);
  border-bottom: 1px solid rgba(212, 175, 55, 0.08);
}

.discount-cta-box h2 {
  color: var(--accent-gold);
  font-size: 2rem;
  margin: 0;
}

.discount-cta-box p {
  color: var(--text-muted);
  max-width: 700px;
  margin: 0 auto 25px;
  font-size: 0.95rem;
}

.discount-btn {
  border-radius: 50px;
  padding: 12px 30px;
}

@media (max-width: 768px) {
  .discount-cta-box {
    padding: 35px 20px;
  }

  .discount-cta-box h2 {
    font-size: 1.5rem;
  }
}
/* Premium Addons Section */
.premium-addons-section {
  padding: 0 0 40px !important;
  background: var(--bg-dark);
}

.premium-header {
  text-align: center;
  margin-bottom: 25px;
}

.premium-header h2 {
  font-size: 2.5rem;
  margin: 15px 0;
}

.premium-header p {
  color: var(--text-muted);
}

.premium-gallery {
  position: relative;
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1fr 0.8fr 1fr;
  grid-template-rows: 220px 220px;
  gap: 20px;
}

.premium-item {
  overflow: hidden;
  border-radius: 24px;
  background: #1a1a1a;
}

.premium-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Layout matching Figma */
.large {
  grid-row: span 1;
}

.small-top {
  height: 150px;
}

.small-bottom {
  height: 150px;
  align-self: end;
}

.large-bottom {
  grid-column: 2 / 4;
}

.premium-center-circle {
  position: absolute;
  width: 170px;
  height: 170px;
  background: #19194b;
  border-radius: 50%;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 20px;
  border: 6px solid #121212;
}

.premium-center-circle h3 {
  font-size: 1.5rem;
  line-height: 1.3;
  color: #fff;
}

@media (max-width: 768px) {
  .premium-gallery {
    display: flex;
    flex-direction: column;
  }

  .premium-center-circle {
    position: relative;
    top: auto;
    left: auto;
    transform: none;
    margin: 20px auto;
  }

  .premium-item {
    height: 250px;
  }
}

@media (max-width: 992px) {
  .home-hero-content {
    flex-direction: column;
  }
  .sectors-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .reviews-content {
    flex-direction: column;
    gap: 20px;
  }
  .brand-logos {
    flex-wrap: wrap;
    justify-content: center;
  }
  .sectors-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Craftsmanship Section */
.craftsmanship-section {
  padding: 40px 0;
  background-color: var(--bg-darker);
}

.craftsmanship-wrapper {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  display: flex;
  align-items: center;
  min-height: 480px;
  background-image: url("{{asset('uploads/luxury-pakaging.webp')}}");
  background-size: cover;
  background-position: right center;
  background-repeat: no-repeat;
}

.craftsmanship-wrapper::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(
    to right,
    rgba(15, 15, 15, 0.95) 0%,
    rgba(15, 15, 15, 0.7) 45%,
    rgba(0, 0, 0, 0) 100%
  );
  z-index: 1;
}

.craftsmanship-text-overlay {
  position: relative;
  z-index: 2;
  width: 55%;
  padding: 60px;
}

.craftsmanship-text-overlay h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  line-height: 1.2;
}

.craftsmanship-text-overlay p {
  color: #ccc;
  font-size: 0.95rem;
  line-height: 1.6;
}

@media (max-width: 992px) {
  .craftsmanship-text-overlay {
    width: 80%;
  }
}

@media (max-width: 768px) {
  .craftsmanship-text-overlay {
    width: 100%;
    padding: 30px;
  }
  .craftsmanship-wrapper::after {
    background: linear-gradient(
      to right,
      rgba(15, 15, 15, 0.95) 0%,
      rgba(15, 15, 15, 0.8) 100%
    );
  }
}

/* Box By Style Section */
.styles-section {
  padding: 40px 0;
}

.sectors-header,
.premium-header,
.testimonials-header .blog-header {
  text-align: center;
}
.section-badge-text {
  display: inline-flex;
  align-items: center;
  justify-content: center;

  padding: 8px 16px;
  border: 1px solid var(--accent-gold);
  border-radius: 50px;

  color: var(--accent-gold);
  font-size: 0.85rem;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.styles-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
  margin-bottom: 25px;
}

.style-card {
  text-align: center;
}

.style-img-placeholder {
  background-color: #1a1a1a;
  border-radius: 12px;
  aspect-ratio: 1 / 1.1;
  margin-bottom: 15px;
  position: relative;
  overflow: hidden;
}

.style-img-placeholder img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
}

.style-card h4 {
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--text-main);
  margin: 0;
}

@media (max-width: 992px) {
  .styles-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .styles-grid {
    grid-template-columns: 1fr;
  }
}
/* WHY CHOOSE US */
.why-home-section {
  padding: 36px 0 52px !important;
  background: #181818;
}

.why-home-section .container {
  max-width: 1380px;
  padding: 0 55px;
}

.why-title {
  margin-bottom: 28px;
  font-size: 1.9rem;
  line-height: 1.2;
  text-align: left;
}

.why-home-wrapper {
  display: grid;
  grid-template-columns: minmax(0, 680px) minmax(0, 1fr);
  gap: 48px;
  align-items: center;
}

.why-cards-grid {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 28px 27px;
}

.why-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  gap: 12px;
  min-height: 134px;
  padding: 26px 18px 22px;
  background: #242424;
  border-radius: 8px;
}

.why-box i {
  display: grid;
  place-items: center;
  align-self: center;
  width: 45px;
  height: 45px;
  color: #ffc928;
  background: #181818;
  border-radius: 6px;
  font-size: 1.35rem;
}

.why-box h4 {
  margin: 0;
  font-size: 0.91rem;
  line-height: 1.35;
  font-weight: 700;
}

.why-box p {
  margin: 0;
  color: #bcbcbc;
  font-size: 0.84rem;
  line-height: 1.55;
  text-align: center;
}

.why-image {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 0;
}

.why-image img {
  display: block;
  width: min(100%, 420px);
  height: 420px;
  object-fit: cover;
  object-position: center 50%;
  mix-blend-mode: normal;
  filter: brightness(1.08) contrast(1.04) saturate(1.08);
  opacity: 1;
}

@media (max-width: 992px) {
  .why-home-wrapper {
    grid-template-columns: 1fr;
    gap: 32px;
  }

  .why-cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .why-image img {
    height: min(520px, 70vw);
  }
}

@media (max-width: 640px) {
  .why-home-section {
    padding: 32px 0 40px !important;
  }

  .why-title {
    margin-bottom: 22px;
    font-size: 1.75rem;
  }

  .why-cards-grid {
    grid-template-columns: 1fr;
    gap: 16px;
  }

  .why-box {
    min-height: 0;
    padding: 20px 16px;
  }

  .why-box p {
    text-align: center;
  }

  .why-image img {
    width: min(100%, 390px);
    height: min(470px, 112vw);
  }
}

/* ==========================================================================
   OUR EASY ORDER PROCESS SECTION
   ========================================================================== */
.order-process-section {
  padding: 40px 0;
  background: #1A1A1A1A;
}

.order-process-header {
  text-align: center;
  margin-bottom: 25px;
}

.order-process-header h2 {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 9px;
  color: #ffffff;
}

.order-process-header p {
  color: #999999;
  font-size: 1.05rem;
}

.order-process-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
  align-items: stretch;
}

.process-card {
  width: 100%;
  height: 100%;
  max-width: 330px;
  background: #1a1a1a;
  border: 1px solid rgba(255, 193, 7, 0.5);
  border-radius: 8px;
  padding: 18px 15px;
  text-align: center;
  transition: all 0.3s ease;
  cursor: pointer;
  margin: 0 auto;
  box-sizing: border-box;
}

.process-card:hover {
  background: #222;
  border-color: rgba(255, 193, 7, 1);
  transform: translateY(-5px);
}

.process-icon {
  width: 45px;
  height: 45px;
  margin: 0 auto 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
}

.process-icon img {
  width: 38px;
  height: 38px;
  object-fit: contain;
}

.process-card h3 {
  font-size: 1.05rem !important;
  font-weight: 700;
  margin-bottom: 8px;
  color: #ffffff;
}

.process-card p {
  color: rgba(255, 255, 255, 0.75);
  font-size: 0.9rem;
  line-height: 1.5;
  margin-bottom: 0;
}

/* Responsive */
@media (max-width: 992px) {
  .order-process-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
  }
}

@media (max-width: 768px) {
  .order-process-section {
    padding: 50px 0;
  }

  .order-process-header h2 {
    font-size: 2rem;
  }

  .order-process-grid {
    grid-template-columns: 1fr;
    gap: 20px;
  }

  .process-card {
    padding: 30px 20px;
  }
}

.guide-sidebar {
  background: #181818;
  padding: 30px;
  border-radius: 12px;
  display: flex;
  flex-direction: column;
}

.guide-sidebar hr {
  border: none;
  height: 1px;
  background: rgba(255, 255, 255, 0.08);
  margin: 25px 0;
}

.sidebar-block h3 {
  margin-bottom: 15px;
  font-size: 1.1rem;
}

.sidebar-block p,
.sidebar-block li {
  color: var(--text-muted);
  font-size: 0.9rem;
  line-height: 1.7;
}

.sidebar-btn {
  margin-top: 25px;
  align-self: flex-start;
  border-radius: 40px;
  padding: 12px 25px;
}

.custom-box-section {
  padding: 60px 20px;
}
.custom-box {
  width: 100%;
  display: flex;
  justify-content: center;
  padding: 0 20px; /* spacing from screen edges */
  box-sizing: border-box;
}

.custom-box-img {
  width: 100%;
  max-width: 1200px;
}

.custom-box img {
  display: block;
  width: 100%;
  height: auto;
  margin: 0 auto;
}
/* ==========================================================================
   BLOG SECTION (Figma Exact Match)
   ========================================================================== */

.blog-section {
  padding: 0 0 40px;
  background: #111111; /* Matches dark context theme background */
}

.blog-header {
  text-align: center;
  margin-bottom: 25px;
}

.blog-header h2 {
  font-size: 2.5rem;
  margin: 15px 0;
  font-family: var(--font-heading);
}

.blog-header p {
  color: var(--text-muted);
  font-family: var(--font-body);
}

/* 2-Column Responsive Grid Layout */
.blog-grid {
  display: grid;
  grid-template-columns: 1.15fr 0.85fr;
  gap: 50px;
  align-items: start;
}

/* --- Left Side: Featured Card --- */
.blog-main-card {
  display: flex;
  flex-direction: column;
}

.main-image-wrapper {
  width: 100%;
  height: 312px;
  background: #d9d9d9;
  border-radius: 10px;
  border: 1px solid #000000;
  overflow: hidden;
  margin-bottom: 15px;
}

.main-image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.blog-main-card h4 {
  font-family: var(--font-heading);
  font-size: 1.5rem;
  font-weight: 600;
  margin: 10px 0;
  line-height: 1.3;
}

.blog-main-card p {
  color: var(--text-muted);
  font-family: var(--font-body);
  font-size: 0.95rem;
  line-height: 1.6;
}

/* Shared Meta Data Styling (Author & Date) */
.card-meta {
  display: flex;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 4px;
}

.card-meta .author,
.card-meta .date {
  font-family: var(--font-body);
  font-weight: 400;
  font-size: 14px;
  color: var(--text-muted);
  line-height: 28px;
}

/* --- Right Side: Sidebar List Stack --- */
.blog-sidebar-list {
  display: flex;
  flex-direction: column;
  gap: 30px;
}

.blog-side-card {
  display: flex;
  gap: 20px;
  align-items: flex-start;
}

/* Exact dimensions & parameters from Rectangle 8222 inspection panel */
.side-card-img {
  width: 139px;
  height: 140px;
  background: #d9d9d9;
  border-radius: 10px;
  border: 0.5px solid #000000;
  object-fit: cover;
  flex-shrink: 0;
}

.side-card-content {
  flex-grow: 1;
}

.side-card-content h4 {
  font-family: var(--font-heading);
  font-size: 1rem !important;
  font-weight: 600;
  line-height: 1.4;
  margin: 4px 0 6px 0;
  color: var(--text-main);
}

.side-card-content p {
  color: var(--text-muted);
  font-family: var(--font-body);
  font-size: 0.85rem;
  line-height: 1.5;
}

/* Right-aligned "View All" matching link styling */
.view-all-wrapper {
  text-align: right;
  margin-top: 5px;
}

.view-all-link {
  color: var(--accent-gold);
  font-family: var(--font-body);
  font-weight: 600;
  font-size: 0.9rem;
  display: inline-flex;
  align-items: center;
  gap: 5px;
}

.view-all-link:hover {
  color: #ffffff;
}

/* Mobile & Tablet Responsiveness */
@media (max-width: 992px) {
  #desktop-blog-grid {
    display: none !important;
  }
  #mobile-blog-grid {
    display: block !important;
    white-space: nowrap !important;
    overflow-x: auto !important;
    overflow-y: hidden !important;
    scroll-snap-type: x mandatory;
    padding-bottom: 15px !important;
    scrollbar-width: none;
    -webkit-overflow-scrolling: touch !important;
    width: 100% !important;
    font-size: 0; /* Remove inline-block spaces */
  }
  #mobile-blog-grid::-webkit-scrollbar {
    display: none;
  }
  .blog-card-mobile {
    display: inline-block !important;
    vertical-align: top;
    white-space: normal !important;
    width: 85vw !important;
    max-width: 85vw !important;
    scroll-snap-align: start;
    margin-right: 15px;
    font-size: 1rem; /* Reset font size */
  }
  /* Remove right margin from the last card */
  .blog-card-mobile:last-child {
    margin-right: 0;
  }
  .blog-card-mobile .mobile-image-wrapper {
    width: 100%;
    height: 220px;
    background: #d9d9d9;
    border-radius: 10px;
    border: 1px solid #000;
    overflow: hidden;
    margin-bottom: 15px;
  }
  .blog-card-mobile img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .blog-card-mobile h4 {
    font-family: var(--font-heading);
    font-size: 1.3rem;
    font-weight: 600;
    margin: 10px 0;
  }
  .blog-card-mobile h4 a,
  .blog-card-mobile h4 a:hover {
    color: inherit !important;
    text-decoration: none !important;
  }
  .blog-card-mobile p {
    color: var(--text-muted);
    font-family: var(--font-body);
    font-size: 0.95rem;
    line-height: 1.6;
  }
  .blog-mobile-action {
    display: block;
    text-align: center;
    margin-top: 15px;
  }
}

@media (max-width: 576px) {
  .blog-card-mobile {
    width: 90vw !important;
    max-width: 90vw !important;
  }
}
@media (min-width: 993px) {
  #mobile-blog-grid {
    display: none !important;
  }
}
/* ==========================================================================
   EXTRAORDINARY CTA SECTION (Figma Exact Match)
   ========================================================================== */

.extraordinary-cta-section {
  position: relative;
  padding: 40px 0;
  background-color: #141414; /* Dark gray tint base */

  /* Stacks your dark radial lighting gradient, an 85% opacity dimming overlay, and the box image together */
  background:
    radial-gradient(
      circle at center,
      rgba(30, 30, 30, 0.85) 0%,
      rgba(13, 13, 13, 0.85) 100%
    ),
    url("{{asset('images/home/cta-section-img.svg')}}");

  /* Keeps the rigid box centered, uncropped, and prevents it from duplicating */
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;

  text-align: center;
  border-top: 1px solid rgba(255, 255, 255, 0.03);
}

.extraordinary-content {
  max-width: 850px;
  margin: 0 auto;
}

.extraordinary-content h2 {
  font-family: var(--font-heading);
  font-size: 2.5rem;
  font-weight: 600;
  margin-bottom: 20px;
  letter-spacing: -0.5px;
}

.extraordinary-content p {
  color: var(--text-muted);
  font-family: var(--font-body);
  font-size: 1.05rem;
  line-height: 1.6;
  max-width: 680px;
  margin: 0 auto 45px auto;
}

/* Feature Icons Row Grid */
.extraordinary-features {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 50px;
  margin-bottom: 25px;
  flex-wrap: wrap;
}

.ex-feature-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-family: var(--font-body);
  font-size: 0.95rem;
  color: var(--text-main);
  font-weight: 500;
}

.ex-icon {
  color: var(--accent-gold);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 32px;
  height: 32px;
  background-color: rgba(245, 197, 66, 0.08); /* Transparent gold tint */
  border-radius: 50%;
  padding: 6px;
}

.ex-icon svg {
  width: 100%;
  height: 100%;
}

/* Yellow Quote Button Custom Parameters */
.extraordinary-btn {
  border-radius: 50px;
  font-size: 1rem;
  padding: 14px 36px;
  letter-spacing: 0.2px;
  box-shadow: 0 10px 25px rgba(245, 197, 66, 0.15);
  background-color: var(--accent-gold);
  color: #000000;
  font-weight: 600;
}/* removed hover: .extraordinary-btn:hover { ... } */

/* Responsive adjustments */
@media (max-width: 768px) {
  .extraordinary-cta-section {
    padding: 70px 0;
  }

  .extraordinary-content h2 {

    font-size: 2rem;
  }

  .extraordinary-features {
    flex-direction: column;
    gap: 25px;
    align-items: flex-start;
    max-width: 280px;
    margin: 0 auto 40px auto;
  }
}
/* Compact section spacing */
section {
  padding-top: 35px !important;
  padding-bottom: 35px !important;
}

/* Remove large gaps between consecutive sections */
section + section {
  margin-top: 0px;
}
@media (max-width: 576px) {
  .brand-logos {
    gap: 15px;
    justify-content: center;
  }

  .brand-logos img {
    height: 28px;
  }
}
/* ===================================
   MOBILE HERO FIX
   =================================== */

@media screen and (max-width: 576px) {
  .home-hero {
    padding: 30px 0;
  }

  .home-hero-content {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .home-hero-text {
    width: 100%;
  }

  .home-hero-text h1 {
    font-size: 2.4rem;
    line-height: 1.15;
    word-break: break-word;
  }

  .home-hero-text p, .home-hero-desc p {
    font-size: 1rem;
    max-width: 100%;
  }

  .hero-buttons {
    flex-direction: column;
    width: 100%;
  }

  .hero-buttons .btn {
    width: 100%;
    text-align: center;
  }

  /* Images stack vertically */
  .home-hero-images {
    width: 100%;
    height: auto;
    flex-direction: column;
    gap: 15px;
  }

  .img-left,
  .img-right {
    width: 100%;
  }

  .img-right {
    flex-direction: column;
  }

  .img-placeholder {
    height: 220px;
    position: relative;
  }

  .img-left .img-placeholder {
    height: 280px;
  }

  .img-placeholder img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}

/* Mobile Responsive Styles for Premium Addons Section */
@media (max-width: 768px) {
  /* Reduce padding for smaller screens */
  .premium-addons-section {
    padding: 40px 0;
  }

  /* Change the 3-column grid to a clean 2-column layout */
  .premium-gallery {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 15px !important;
    position: relative;
  }

  /* Reset tracks to let them flow naturally in the 2-column layout */
  .premium-item.track-1,
  .premium-item.track-2,
  .premium-item.track-3,
  .premium-item.track-4,
  .premium-item.track-5,
  .premium-item.track-6 {
    grid-column: auto !important;
    grid-row: auto !important;
    height: 200px; /* Adjust height for mobile view cards */
  }

  /* Handle the center circle badge so it doesn't overlap images awkwardly */
  .premium-center-circle {
    grid-column: span 2 !important; /* Make it take full width of the mobile grid */
    grid-row: auto !important;
    position: static !important; /* Remove absolute centering */
    transform: none !important;
    margin: 15px auto;
    width: 100% !important;
    max-width: 280px;
    height: auto !important;
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    padding: 20px;
    box-sizing: border-box;
  }
}

/* Extra small devices (phones down to 480px) */
@media (max-width: 480px) {
  .premium-gallery {
    grid-template-columns: 1fr !important; /* Stack images in a single column */
  }

  .premium-center-circle {
    grid-column: span 1 !important;
  }
}
/* ==========================================================================
   MASTER MOBILE & TABLET RESPONSIVENESS (Agressive Cut-Off Fix)
   ========================================================================== */

/* 1. Global Reset Safety Measures for All Screen Sizes */
@media (max-width: 992px) {
  html,
  body {
    width: 100% !important;
    max-width: 100% !important;
    overflow-x: hidden !important;
    position: relative;
  }

  /* Force everything to wrap text naturally instead of forcing horizontal clips */
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  span,
  a,
  div {
    white-space: normal !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
  }

  .container {
    width: 100% !important;
    max-width: 100% !important;
    padding-left: 20px !important;
    padding-right: 20px !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
  }
}

/* 2. Tablet Viewports (max-width: 992px) */
@media (max-width: 992px) {
  /* Break all horizontal layouts into clean vertical rows */
  .our-story-content,
  .why-choose-us-grid,
  .numbers-header,
  .process-cards,
  .cta-content,
  .home-hero-content,
  .why-home-wrapper,
  .quote-process-grid,
  .packaging-guide {
    flex-direction: column !important;
    display: flex !important;
    width: 100% !important;
  }

  /* Convert grids to standard vertical flow blocks */
  .sectors-grid,
  .styles-grid {
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 20px !important;
    width: 100% !important;
  }



  .why-cards-grid,
  .form-grid,
  .dimension-grid,
  .testimonial-grid {
    grid-template-columns: 1fr !important;
    width: 100% !important;
  }

  .sector-info {
    padding: 12px !important;
  }
  .sector-title {
    font-size: 13px !important;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 6px !important;
  }
  .sector-info p {
    font-size: 11px !important;
    line-height: 1.4 !important;
    display: -webkit-box !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    margin-bottom: 0 !important;
  }

  .sectors-section .sector-card {
    border-radius: 22px !important;
    background: #161616 !important;
  }

  .sectors-section .sector-img-placeholder {
    aspect-ratio: 1 / 1.02 !important;
    background: #292929 !important;
    padding: 14px !important;
  }

  .sectors-section .sector-info {
    min-height: 158px !important;
    padding: 28px 24px 32px !important;
    background: #151515 !important;
  }

  .sectors-section .sector-title {
    font-size: 20px !important;
    line-height: 1.15 !important;
    margin-bottom: 14px !important;
    white-space: normal !important;
    overflow: visible !important;
    text-overflow: clip !important;
  }

  .sectors-section .sector-info p {
    font-size: 16px !important;
    line-height: 1.42 !important;
    color: #c7c7c7 !important;
    display: block !important;
    overflow: visible !important;
    text-overflow: clip !important;
  }

  /* Content Structural Tweaks */
  .premium-addons-section {
    display: none !important;
  }
  .cta-text {
    text-align: center;
    padding-bottom: 40px;
  }

  .why-image-container,
  .why-image,
  .why-image img {
    display: none !important;
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
    display: none !important; /* Prevents rogue absolute borders from clipping edges */
  }

  .craftsmanship-text-overlay {
    width: 100% !important;
    padding: 40px 20px !important;
  }
}

/* 3. Mobile Viewports (max-width: 768px) */
@media (max-width: 768px) {
  .reviews-content {
    flex-direction: column !important;
    gap: 20px;
    text-align: center;
  }

  .brand-logos {
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px !important;
  }

  .order-process-section,
  .premium-addons-section,
  .craftsmanship-section,
  .faq-section,
  .discount-cta,
  .styles-section {
    padding-top: 2px !important;
    padding-bottom: 40px !important;
  }

  .sectors-grid,
  .styles-grid {
    grid-template-columns: repeat(2, 1fr) !important;
  }

  .craftsmanship-wrapper {
    background-position: center !important;
    min-height: auto !important;
  }

  .craftsmanship-wrapper::after {
    background: rgba(15, 15, 15, 0.85) !important;
  }

  /* Fixes the overlap/cut off in Premium Addons Gallery */
  .premium-gallery {
    display: flex !important;
    flex-direction: column !important;
    gap: 15px !important;
    height: auto !important; /* Overrides any desktop height limits */
  }

  .premium-item {
    height: 200px !important;
    width: 100% !important;
  }

  .premium-center-circle {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    transform: none !important;
    margin: 20px auto !important;
    width: 150px !important;
    height: 150px !important;
  }

  /* Fixes the multi-layered stacked images layout in CTA section */
  .cta-images-composition {
    display: flex !important;
    flex-direction: column !important;
    gap: 15px !important;
    width: 100% !important;
    height: auto !important; /* Crucial: kills the static desktop layout canvas */
  }

  .cta-img-main,
  .cta-img-left,
  .cta-img-right {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    right: auto !important;
    bottom: auto !important;
    transform: none !important;
    width: 100% !important;
    height: auto !important;
    border-radius: 12px !important;
  }

  .extraordinary-cta-section {
    padding: 60px 0;
  }

  .extraordinary-content h2 {
    font-size: 1.8rem;
  }

  .extraordinary-features {
    flex-direction: column;
    gap: 20px;
    align-items: center;
    width: 100%;
  }
}

/* 4. Small Devices / Phone Views (max-width: 576px) */
@media screen and (max-width: 576px) {
  .home-hero {
    padding: 30px 0;
  }

  /* Shrink text sizing down so words don't overflow viewport boundaries */
  .home-hero-text h1,
  .hero-text-container h1,
  .story-text h2,
  .why-text h2,
  .premium-header h2,
  .blog-header h2 {
    font-size: 2rem !important;
    line-height: 1.2 !important;
  }

  .sectors-header h2 {
    font-size: 1.5rem !important;
    line-height: 1.25 !important;
    white-space: nowrap;
    margin: 0;
  }

  .sectors-header p {
    max-width: 320px;
    margin: 0 auto;
    font-size: 0.85rem;
    line-height: 1.6;
  }

  .sectors-header br {
    display: none;
  }

  .sectors-section {
    padding: 40px 0 !important;
  }

  .sectors-section .container {
    padding-right: 16px !important;
    padding-left: 16px !important;
  }

  .sectors-section .sectors-header {
    margin-bottom: 24px !important;
  }

  .sectors-section .sectors-grid {
    display: grid !important;
    grid-template-columns: repeat(2, 1fr) !important;
    gap: 14px !important;
    width: 100% !important;
    padding: 0 !important;
  }

  .sectors-section .sector-card {
    flex: none !important;
    width: 100% !important;
    min-width: 0 !important;
    border-radius: 12px !important;
    background: #161616 !important;
  }

  .sectors-section .sector-img-placeholder {
    width: 100% !important;
    aspect-ratio: 1 / 1 !important;
    padding: 0 !important;
  }

  .sectors-section .sector-img-placeholder img {
    object-fit: cover !important;
    padding: 0 !important;
  }

  .sectors-section .sector-info {
    padding: 12px !important;
    background: #151515 !important;
    min-height: auto !important;
  }

  .sectors-section .sector-info h3 {
    font-size: 1rem !important;
    margin-bottom: 6px !important;
    line-height: 1.2 !important;
  }

  .sectors-section .sector-info p {
    font-size: 0.8rem !important;
    line-height: 1.35 !important;
    display: -webkit-box !important;
    -webkit-line-clamp: 2 !important;
    -webkit-box-orient: vertical !important;
    overflow: hidden !important;
  }

  .hero-buttons {
    flex-direction: column;
    width: 100% !important;
    gap: 12px;
  }

  .hero-buttons .btn,
  .cta-btn,
  .discount-btn,
  .quote-btn {
    width: 100% !important;
    text-align: center;
    box-sizing: border-box;
  }

  /* Fixes Home Page multi-image placeholder container cut-offs */
  .home-hero-images {
    width: 100% !important;
    height: auto !important;
    flex-direction: column !important;
    gap: 15px;
  }

  .img-left,
  .img-right {
    width: 100% !important;
    height: auto !important;
    flex-direction: column !important;
  }

  .img-placeholder {
    height: 200px !important;
    position: relative !important;
  }

  .img-placeholder img {
    position: absolute !important;
  }

  /* Make sure side blogs stack elegantly */
  .blog-side-card {
    flex-direction: column !important;
    align-items: stretch !important;
    gap: 12px;
  }

  .side-card-img {
    width: 100% !important;
    height: 180px !important;
  }

  .brand-logos img {
    height: 24px !important;
  }

  /* Stop custom box image row from getting weird margins */
  .custom-box-section,
  .custom-box {
    padding: 20px 0 !important;
    margin: 0 !important;
  }
}

/* Keep the Why Choose Us layout intact after the global responsive overrides. */
@media (min-width: 641px) and (max-width: 992px) {
  .why-cards-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
  }

  .why-image img {
    display: none !important;
  }
}

@media (max-width: 640px) {
  .why-cards-grid {
    grid-template-columns: 1fr !important;
  }

  .why-image img {
    display: none !important;
  }
}

/* Home hero: single image first on tablet and mobile */
@media (min-width: 577px) and (max-width: 992px) {
  .home-hero-content {
    display: flex !important;
    flex-direction: column-reverse !important;
    gap: 34px !important;
  }

  .home-hero-images {
    display: block !important;
    width: 100% !important;
    height: clamp(320px, 52vw, 430px) !important;
  }

  .home-hero-images .img-left,
  .home-hero-images .img-left .img-placeholder {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
  }

  .home-hero-images .img-right {
    display: none !important;
  }

  .home-hero-images .img-left img {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    object-position: center 72%;
  }

  .home-hero-text {
  }
}

/* Home hero: mobile composition */
@media (max-width: 576px) {
  .home-hero {
    padding: 32px 0 24px !important;
    background: #171717;
    border-bottom: 0;
  }

  .home-hero .container {
    padding-right: 30px !important;
    padding-left: 30px !important;
  }

  .home-hero-content {
    display: flex !important;
    flex-direction: column-reverse !important;
    gap: 30px !important;
  }

  .home-hero-images {
    display: block !important;
    width: 100% !important;
    height: 318px !important;
  }

  .home-hero-images .img-left {
    display: block !important;
    width: 100% !important;
    height: 100% !important;
  }

  .home-hero-images .img-right {
    display: none !important;
  }

  .home-hero-images .img-placeholder,
  .home-hero-images .img-left .img-placeholder,
  .home-hero-images .img-right .img-placeholder {
    width: 100% !important;
    height: 100% !important;
    min-height: 0;
    border: 0;
    border-radius: 6px;
  }

  .home-hero-images .img-placeholder img {
    inset: 0;
    display: block;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover;
    object-position: center 72%;
  }

  .home-hero-text {
    width: 100%;
    text-align: center;
  }

  .home-hero-text h1 {
    max-width: 420px;
    margin: 0 auto 18px;
    font-size: 1.92rem !important;
    line-height: 1.2 !important;
  }

.home-hero-text p, .home-hero-desc p {
    max-width: 100%;
    margin: 0 0 24px;
    color: #c5c5c5;
    font-size: 0.97rem;
    line-height: 1.65;
    text-align: justify;
  }

  .home-hero .hero-buttons {
    display: flex;
    flex-direction: row;
    justify-content: center;
    gap: 12px;
    width: 100% !important;
  }

  .home-hero .hero-buttons .btn {
    flex: 0 1 auto;
    width: auto !important;
    min-width: 200px;
    max-width: 80%;
    padding: 10px 20px;
    border-radius: 50px;
    font-size: 0.85rem;
    line-height: 1.2;
    white-space: nowrap !important;
    text-align: center;
    margin: 0 auto;
  }

  .reviews-strip {
    padding: 20px 0 40px !important;
    background: transparent !important;
  }

  .reviews-strip .reviews-rating {
    display: none !important;
  }

  .reviews-strip .reviews-content {
    display: block !important;
  }

  .reviews-strip .brand-logos {
    display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    gap: 20px !important;
    width: 100%;
    align-items: center;
  }

  .reviews-strip .brand-logos img {
    width: 100%;
    max-width: 62px;
    height: 42px !important;
    margin: 0 auto;
    object-fit: contain;
    opacity: 0.82;
  }

  .reviews-strip .brand-logos img:nth-child(n + 5) {
    display: none !important;
  }
}

@media (max-width: 390px) {
  .home-hero .container {
    padding-right: 20px !important;
    padding-left: 20px !important;
  }

  .home-hero-images {
    height: 280px !important;
  }

  .home-hero-text h1 {
    font-size: 1.7rem !important;
  }

  .home-hero {
    padding-top: 100px;
    padding-bottom: 20px;
  }
}

/* Box By Style: Figma mobile layout */
@media (max-width: 768px) {
  .styles-section {
    padding: 30px 0 50px !important;
    background: #202020;
  }

  .styles-section .container {
    padding-right: 20px !important;
    padding-left: 20px !important;
  }

  .styles-section .sectors-header,
  .sectors-section .sectors-header {
    margin-bottom: 46px;
  }

  .styles-section .section-badge-text,
  .sectors-section .section-badge-text {
    min-width: 148px;
    margin-bottom: 16px;
    padding: 8px 16px;
    font-size: 0.75rem;
    line-height: 1.4;
  }

  .styles-section .sectors-header h2,
  .sectors-section .sectors-header h2 {
    margin: 0;
    font-size: 1.5rem !important;
    line-height: 1.25 !important;
    white-space: nowrap;
  }

  .styles-section .sectors-header p,
  .sectors-section .sectors-header p {
    max-width: 320px;
    margin: 0 auto;
    color: #c5c5c5;
    font-size: 0.85rem;
    line-height: 1.6;
  }

  .sectors-header p br {
    display: none;
  }

  .styles-section .styles-grid {
    display: grid !important;
    grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
    gap: 32px 18px !important;
    width: 100% !important;
    margin-bottom: 48px;
  }

  .styles-section .style-card {
    min-width: 0;
  }

  .styles-section .style-img-placeholder {
    width: 100%;
    aspect-ratio: 1 / 1;
    margin-bottom: 14px;
    background: #242424;
    border: 1px solid #2d2b24;
    border-radius: 16px;
  }

  .styles-section .style-img-placeholder img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .styles-section .style-card h4 {
    font-size: 0.98rem;
    line-height: 1.35;
    font-weight: 700;
  }

  .styles-section .sectors-action .btn {
    padding: 12px 28px;
    border-radius: 999px;
  }
}

@media (max-width: 390px) {
  .styles-section .styles-grid {
    gap: 26px 14px !important;
  }

  .styles-section .style-card h4 {
    font-size: 0.86rem;
  }

  .styles-section .sectors-header p,
  .sectors-section .sectors-header p {
    font-size: 0.78rem;
    max-width: 100%;
    padding: 0 5px;
  }
}

/* Craftsmanship: Figma mobile layout */
@media (max-width: 768px) {
  .craftsmanship-section {
    padding: 64px 0 0 !important;
    background: #1b1b1b;
  }

  .craftsmanship-section .container {
    padding-right: 0 !important;
    padding-left: 0 !important;
    overflow: visible !important;
  }

  .craftsmanship-wrapper {
    min-height: 656px !important;
    border-radius: 0;
    align-items: center;
    background-size: cover;
    background-position: center center !important;
  }

  .craftsmanship-wrapper::after {
    background: linear-gradient(
      90deg,
      rgba(12, 12, 12, 0.78) 0%,
      rgba(12, 12, 12, 0.62) 58%,
      rgba(12, 12, 12, 0.5) 100%
    ) !important;
  }

  .craftsmanship-text-overlay {
    width: 100% !important;
    padding: 0 20px !important;
    text-align: left;
  }

  .craftsmanship-text-overlay .section-badge-text {
    margin-bottom: 16px;
    padding: 8px 16px;
    font-size: 0.73rem;
    line-height: 1.35;
    display: inline-block;
  }

  .craftsmanship-text-overlay h2 {
    margin-bottom: 14px;
    font-size: 1.65rem !important;
    line-height: 1.25 !important;
  }

  .craftsmanship-text-overlay p {
    margin: 0;
    color: #d0d0d0;
    font-size: 0.95rem;
    line-height: 1.6;
    text-align: left;
  }
}

@media (max-width: 390px) {
  .craftsmanship-wrapper {
    min-height: 610px !important;
  }

  .craftsmanship-text-overlay {
    padding: 0 18px !important;
    text-align: left;
  }

  .craftsmanship-text-overlay h2 {
    font-size: 1.35rem !important;
  }

  .craftsmanship-text-overlay p {
    font-size: 0.9rem;
    line-height: 1.65;
    text-align: left;
  }
}

/* Explore categories button: Figma mobile sizing */
@media (max-width: 768px) {
  .sectors-section .sectors-action .btn {
    width: 268px;
    max-width: 100%;
    min-height: 52px;
    padding: 14px 24px;
    border-radius: 999px;
    font-size: 1rem;
    line-height: 1.45;
    text-align: center;
  }

  .premium-center-circle {
    display: none !important;
  }
}


/* Packaging guide: Figma mobile layout */
@media (max-width: 768px) {
  .quote-process-section .packaging-guide {
    display: flex !important;
    flex-direction: column !important;
    gap: 44px;
    width: auto !important;
    margin: 0 28px;
  }

  .guide-content {
    padding: 0;
    background: transparent;
    border-radius: 0;
  }

  .guide-badge {
    margin-bottom: 34px;
    padding: 10px 26px;
    border-radius: 999px;
    font-size: 0.78rem;
    line-height: 1.4;
  }

  .guide-content h2 {
    margin-bottom: 4px;
    font-size: 1.65rem;
    line-height: 1.85;
  }

  .guide-content p {
    margin: 0;
    color: #c9c9c9;
    font-size: 1rem;
    line-height: 1.75;
    text-align: justify;
  }

  .guide-content p + p {
    margin-top: 4px;
  }

  .guide-content > h3,
  .guide-content > ul {
    display: none;
  }

  .guide-sidebar {
    gap: 22px;
    padding: 26px;
    background: #202020;
    border-radius: 8px;
  }

  .guide-faq h3 {
    margin-bottom: 10px !important;
    font-size: 1.2rem !important;
    line-height: 1.35 !important;
  }

  .guide-faq ol {
    margin: 0;
    padding: 0;
    list-style: none;
    counter-reset: guide-faq;
  }

  .guide-faq li {
    counter-increment: guide-faq;
    display: grid;
    grid-template-columns: auto minmax(0, 1fr) auto;
    gap: 10px;
    align-items: center;
    min-height: 56px;
    padding: 10px 0;
    color: #c9c9c9;
    border-bottom: 1px solid #404040;
    font-size: 0.94rem;
    line-height: 1.4;
  }

  .guide-faq li::before {
    content: counter(guide-faq) ".";
    color: var(--accent-gold);
    font-weight: 700;
  }

  .guide-faq .faq-plus {
    color: #d8d8d8;
    font-size: 1.15rem;
  }

  .guide-help {
    padding: 16px 14px 14px;
    text-align: center;
    background: #181818;
    border-radius: 8px;
  }

  .guide-help h3 {
    margin: 0 0 2px;
    font-size: 1.1rem;
    font-weight: 500;
  }

  .guide-help p {
    margin: 0;
    color: #bdbdbd;
    font-size: 0.72rem;
    line-height: 1.4;
  }

  .guide-help .sidebar-btn {
    align-self: auto;
    display: block;
    width: min(230px, 100%);
    margin: 10px auto 0;
    padding: 10px 20px;
    border-radius: 999px;
    font-size: 0.86rem;
    line-height: 1.35;
  }
}

@media (max-width: 390px) {
  .quote-process-section .packaging-guide {
    margin-right: 18px;
    margin-left: 18px;
  }

  .guide-sidebar {
    padding: 20px 16px;
  }

  .guide-content h2 {
    font-size: 1.45rem;
  }

  .guide-content p {
    font-size: 0.92rem;
  }

  .guide-faq li {
    gap: 7px;
    font-size: 0.84rem;
  }
}

/* Blog: show one featured article on mobile */
@media (max-width: 768px) {
  .blog-section {
    padding: 15px 0 60px !important;
    background: #181818;
  }

  .blog-section .container {
    padding-right: 20px !important;
    padding-left: 20px !important;
  }

  .blog-header {
    margin-bottom: 34px;
  }

  .blog-header .section-badge-text {
    margin-bottom: 14px;
    padding: 8px 22px;
    font-size: 0.75rem;
  }

  .blog-header h2 {
    margin: 0 0 12px;
    font-size: 1.75rem !important;
    line-height: 1.25 !important;
  }

  .blog-header p {
    max-width: 410px;
    margin: 0 auto;
    font-size: 0.94rem;
    line-height: 1.65;
  }

  .blog-grid {
    display: block !important;
  }

  .blog-sidebar-list {
    display: none !important;
  }

  .blog-main-card {
    width: 100%;
  }

  .main-image-wrapper {
    width: 100%;
    height: auto;
    aspect-ratio: 16 / 10;
    border-radius: 8px;
  }

  .blog-main-card .card-meta {
    margin-top: 13px;
    margin-bottom: 2px;
  }

  .blog-main-card .card-meta span {
    font-size: 0.78rem;
    line-height: 1.5;
  }

  .blog-main-card h4 {
    margin: 8px 0;
    font-size: 1.25rem;
    line-height: 1.35;
  }

  .blog-main-card p {
    font-size: 0.9rem;
    line-height: 1.65;
  }
}

/* Quote process: Figma desktop layout */
@media (min-width: 993px) {
  .quote-process-section {
    padding: 28px 0 60px !important;
    background: #181818;
  }

  .quote-process-section > .container {
    max-width: 1056px;
  }

  .quote-process-grid {
    display: grid;
    grid-template-columns: 310px minmax(0, 664px);
    gap: 50px;
    align-items: start;
    margin-bottom: 80px;
  }

  .steps-column h2 {
    margin-bottom: 30px;
    font-size: 1.75rem;
    line-height: 1.25;
  }

  .step-item {
    gap: 14px;
    margin-bottom: 54px;
  }

  .step-number {
    min-width: 32px;
    font-size: 1.45rem;
    line-height: 1.2;
  }

  .step-item h4 {
    margin-bottom: 6px;
    font-size: 0.78rem;
    line-height: 1.35;
  }

  .step-item p {
    color: #c5c5c5;
    font-size: 0.77rem;
    line-height: 1.45;
    text-align: justify;
  }

  .quote-form-wrapper {
    width: 100%;
    padding: 30px 46px 24px;
    background: #202020;
    border-radius: 8px;
  }

  .quote-form-wrapper h2 {
    margin-bottom: 24px;
    font-size: 1.75rem;
    line-height: 1.25;
    text-align: center;
  }

  .quote-full-fields {
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 10px;
    margin-bottom: 10px;
  }

  .quote-dimensions {
    grid-template-columns: repeat(4, minmax(0, 1fr));
  }

  .quote-options {
    grid-template-columns: repeat(3, minmax(0, 1fr));
  }

  .quote-order-fields {
    grid-template-columns: 1.15fr 0.85fr;
  }

  .quote-field-pair {
    gap: 10px;
    margin-bottom: 10px;
  }

  .quote-turnaround-field {
    display: none;
  }

  .quote-field {
    gap: 6px;
  }

  .quote-field label {
    font-size: 0.7rem;
    line-height: 1.25;
  }

  .quote-form input,
  .quote-form select,
  .quote-form textarea {
    min-width: 0;
    min-height: 41px;
    padding: 10px 16px;
    background: #181818;
    border: 1px solid #343434;
    border-radius: 6px;
    font-family: var(--font-body);
    font-size: 0.72rem;
  }

  .quote-form textarea {
    height: 90px;
  }

  .upload-control {
    min-height: 41px;
    background: #181818;
    border-color: #343434;
  }

  .upload-control span {
    padding: 0 16px;
    font-size: 0.72rem;
  }

  .upload-control strong {
    min-width: 76px;
    font-size: 0.72rem;
  }

  .quote-form .quote-btn {
    width: 246px;
    min-height: 41px;
    margin: 24px auto 0;
    padding: 10px 22px;
    border: 0;
    border-radius: 999px;
    font-size: 0.78rem;
  }
}

@media (max-width: 768px) {
  .quote-addons-field {
    display: none;
  }

  .quote-dimensions,
  .quote-options,
  .quote-order-fields {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  .quote-upload-field {
    grid-column: 1 / -1;
  }
}

/* Hero trust strip: matching icons on desktop and mobile */
.reviews-strip {
  padding: 18px 0;
  background: #181818;
}

.reviews-content {
  gap: 42px;
}

.reviews-rating {
  flex: 0 0 auto;
}

.reviews-rating .stars {
  display: flex;
  gap: 4px;
  font-size: 1.35rem;
}

.brand-logos {
  flex: 1;
  display: grid;
  grid-template-columns: repeat(5, minmax(70px, 1fr));
  gap: 34px;
  align-items: center;
}

.brand-logos img {
  display: block;
  width: 100%;
  max-width: 92px;
  height: 48px;
  margin: 0 auto;
  object-fit: contain;
  filter: grayscale(1);
  opacity: 0.72;
}

@media (max-width: 768px) {
  .reviews-strip {
    padding: 24px 0 !important;
  }

  .reviews-strip .reviews-content {
    display: flex !important;
    flex-direction: column !important;
    gap: 24px;
  }

  .reviews-strip .reviews-rating {
    display: flex;
    justify-content: center;
    gap: 12px;
  }

  .reviews-rating .stars {
    font-size: 1rem;
  }

  .reviews-link {
    font-size: 0.86rem;
  }

  .reviews-strip .brand-logos {
    display: grid;
    grid-template-columns: repeat(5, minmax(0, 1fr));
    gap: 14px !important;
    width: 100%;
  }

  .reviews-strip .brand-logos img,
  .reviews-strip .brand-logos img:nth-child(n + 5) {
    display: block;
    width: 100%;
    max-width: 58px;
    height: 36px !important;
    object-fit: contain;
  }
}

.blog-mobile-action {
  display: none;
}

@media (max-width: 768px) {
  .blog-section {
    padding-top: 0 !important;
    padding-bottom: 64px !important;
  }

  .blog-header {
    margin-bottom: 44px;
  }

  .blog-header .section-badge-text {
    min-width: 84px;
    border-radius: 999px;
  }

  .main-image-wrapper {
    aspect-ratio: 5 / 3;
    border-radius: 8px;
  }

  .blog-main-card .card-meta {
    margin-top: 12px;
  }

  .blog-main-card .card-meta span {
    font-size: 0.88rem;
  }

  .blog-main-card h4 {
    margin: 12px 0 10px;
    font-size: 1.18rem;
  }

  .blog-main-card p {
    display: -webkit-box;
    overflow: hidden;
    font-size: 0.92rem;
    line-height: 1.65;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
  }

  .blog-mobile-action {
    display: flex;
    justify-content: center;
    margin-top: 15px;
  }

  .blog-mobile-action .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    width: 180px !important;
    max-width: 100%;
    min-height: 46px;
    padding: 10px 20px;
    border-radius: 999px;
    font-size: 0.9rem;
    line-height: 1.4;
  }

  .blog-mobile-action .btn span {
    font-size: 1.2rem;
    line-height: 1;
  }
}

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
    font-size: 15px !important;
    line-height: 1.65 !important;
    color: #ffffff !important;
    font-weight: 600 !important;
    flex: 1;
    margin: 0 !important;
    padding: 0 !important;
    text-align: left;
    white-space: nowrap !important;
    overflow: hidden !important;
    text-overflow: ellipsis !important;
    display: flex;
    align-items: center;
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
    color: #f5c542;
}
.pg-accordion-body {
    display: none;
    padding: 0 0 16px 0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out, padding 0.3s ease-out;
}
.pg-accordion-body p {
    font-size: 13px;
    line-height: 1.65;
    color: rgba(255, 255, 255, 0.65);
    margin: 0;
    padding-top: 8px;
}
.pg-accordion-item.open .pg-accordion-body {
    display: block;
    max-height: 500px;
    padding: 8px 0 16px 0;
}

/* CTA box inside FAQs */
.pg-cta-box {
    background: #1e1e1e;
    border-radius: 12px;
    padding: 28px 24px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    gap: 8px;
    margin-top: 20px;
}

.pg-cta-title {
    font-size: 18px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.pg-cta-sub {
    font-size: 13px;
    color: rgba(255, 255, 255, 0.55);
    margin: 0 0 8px 0;
}

.pg-cta-btn {
    display: inline-block;
    background: #f5c542;
    color: #111;
    font-size: 14px;
    font-weight: 700;
    padding: 12px 32px;
    border-radius: 50px;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}/* removed hover: .pg-cta-btn:hover { ... } */


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
.step-item .step-num {
  width: 45px;
  height: 30px;
  font-family: var(--font-heading), sans-serif;
  font-weight: 700;
  font-size: 26px;
  line-height: 22px;
  letter-spacing: 0.04em;
  color: var(--accent-gold);
  display: inline-flex;
  align-items: center;
}
.step-item .step-title {
  font-family: var(--font-heading), sans-serif;
  font-size: 18px;
  font-weight: 700;
  color: var(--text-main);
  margin: 0;
  display: block;
}
.step-item p {
  font-size: 13.5px;
  line-height: 1.6;
  color: var(--text-muted);
  margin: 0;
}
/* Remove hover effects from blog titles */
.blog-main-card h4 a:hover,
.blog-side-card h4 a:hover {
  color: inherit !important;
  text-decoration: none !important;
}
@media (max-width: 768px) {
  .order-process-section {
    padding-bottom: 15px !important;
  }
  .why-home-section {
    padding-top: 15px !important;
  }
}

/* Tailored For Every Sector — desktop Figma layout */
@media (min-width: 993px) {
  .sectors-section {
    padding: 18px 0 40px;
    background: #202020;
  }

  .sectors-section .sectors-header {
    margin-bottom: 46px;
  }

  .sectors-section .sectors-header h2 {
    margin-bottom: 14px;
    font-size: 32px;
    line-height: 1.2;
  }

  .sectors-section .sectors-header p {
    color: #bdbdbd;
    font-size: 16px;
    line-height: 1.65;
  }

  .sectors-section .sectors-grid {
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 42px 22px;
  }

  .sectors-section .sector-card {
    background: #242424;
    border: 1px solid rgba(245, 197, 66, 0.1);
    border-radius: 12px;
  }

  .sectors-section .sector-img-placeholder {
    aspect-ratio: 0.9 / 1;
    background: #303030;
    padding: 12px;
  }

  .sectors-section .sector-img-placeholder img {
    object-fit: contain;
    object-position: center;
  }

  .sectors-section .sector-info {
    min-height: 105px;
    padding: 16px 13px;
    background: #242424;
  }

  .sectors-section .sector-info h3 {
    margin-bottom: 8px;
    font-size: 16px !important;
    line-height: 1.25;
  }

  .sectors-section .sector-info p {
    margin: 0;
    color: #c7c7c7;
    font-size: 14px;
    line-height: 1.45;
    -webkit-line-clamp: 2;
  }
}
 </style>
    <section class="home-hero">
        <div class="container home-hero-content">
            <div class="home-hero-text">
                <h1>{!! (isset($home_banner[0]) && !empty($home_banner[0]->heading_1)) ? $home_banner[0]->heading_1 : 'Premium <span class="highlight">Rigid Boxes</span><br>That Elevate Your Brand' !!}</h1>
                <div class="home-hero-desc" style="margin-bottom: 24px;">{!! (isset($home_banner[0]) && !empty($home_banner[0]->description)) ? $home_banner[0]->description : '<p>We create custom rigid packaging solutions designed to protect your products while delivering a premium luxury experience. Our boxes combine durability with elegant, high-quality presentation to strengthen your brand identity and leave a lasting impression worldwide.</p>' !!}</div>
                <div class="hero-buttons">
                    <a href="{{ url('request-quote') }}" class="btn btn-yellow" style="padding: 14px 36px; font-size: 16px; font-family: Inter, sans-serif; font-weight: 600; background-color: #FFC542; color: #000000; border: none; border-radius: 50px; display: inline-flex; justify-content: center; align-items: center; text-decoration: none;">Design Custom Boxes</a>

                </div>
            </div>
            <div class="home-hero-images">
                <img src="{{ (isset($home_banner[0]) && !empty($home_banner[0]->image)) ? asset('images/' . $home_banner[0]->image) : asset('images/home/home-hero.svg') }}" alt="{{ strtolower(str_replace('-', ' ', (isset($home_banner[0]) && !empty($home_banner[0]->image_tag)) ? $home_banner[0]->image_tag : 'Premium Box')) }}" style="width: 100%; height: 100%; display: block; border-radius: 12px; object-fit: contain;" title="{{ ucwords(strtolower(str_replace('-', ' ', (isset($home_banner[0]) && !empty($home_banner[0]->image_tag)) ? $home_banner[0]->image_tag : 'Premium Box'))) }}">
            </div>
        </div>
    </section>

    @include('web.trustbar')

    <section class="sectors-section">
        <div class="container">
            <div class="sectors-header">

                <h2>Our Custom Packaging Boxes for Every Business Need</h2>
                <p>PremiumBoxes offer a variety of Custom Packaging.
                    Whether you belong to food industry, pharmaceutical, 
                    cosmetic,<br/> gifting, apparel or jewelry, we have covered you.
                     Either you need quality or quantity; you have us on your back.
</p>
            </div>
            <div class="sectors-grid">
                @foreach($industry_products as $product)
                <a href="{{ url($product->category_url) }}" class="sector-card" style="display: block; text-decoration: none; color: inherit;">
                    <div class="sector-img-placeholder">
                        <img src="{{ asset('images/'.($product->feature_product ? $product->feature_product : ($product->image ? $product->image : $product->bimage))) }}" onerror="this.src='./assets/jewellry and watch.jfif'; this.onerror=null;" alt="{{ strtolower(str_replace('-', ' ', $product->name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $product->name))) }}">
                        @if(!empty($product->image_badge))
                            <span class="image-badge-overlay">{{ $product->image_badge }}</span>
                        @endif
                    </div>
                    <div class="sector-info">
                        <h3 class="sector-title">{{ $product->feature_title ? $product->feature_title : $product->name }}</h3>
                        @if($product->feature_description)
                            <p>{{ $product->feature_description }}</p>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
            <div class="sectors-action">
                <!-- <a href="{{ url('box-by-industry') }}" class="btn btn-primary">Explore All Products</a> -->
            </div>
        </div>
    </section>

    <!-- Our Easy Order Process Section -->
    <section class="order-process-section">
        <div class="container">
            <div class="order-process-header">
                <h2>How Our Custom Box Ordering Process Works</h2>
                <p>Our process of ordering custom Premium Boxes is quite efficient and easy. All you have to do is:
</p>
            </div>

            <div class="order-process-grid">
                <!-- Step 1 -->
                <div class="process-card">
                    <div class="process-icon">
                        <img src="{{ asset('images/icons/customize-icon.svg') }}" alt="customize icon" title="Customize Icon">
                    </div>
                    <h3 class="step-title">Tell Us About Your Product and Packaging Goals
</h3>
                    <p>Let us know about your product and the end-goal. Our expert designers will reach out to you and further guide you.</p>
                </div>

                <!-- Step 2 -->
                <div class="process-card">
                    <div class="process-icon">
                        <img src="{{ asset('images/icons/quote-icon.svg') }}" alt="quote icon" title="Quote Icon">
                    </div>
                    <h3 class="step-title">Request a Free Quote for Custom Boxes</h3>
                    <p>If you are interested in getting Customized Packaging with high quality finishes, you are at the right platform. Contact us right now and get a free quote for Custom Boxes.</p>
                </div>

                <!-- Step 3 -->
                <div class="process-card">
                    <div class="process-icon">
                        <img src="{{ asset('images/icons/consultation-icon.svg') }}" alt="consultation icon" title="Consultation Icon">
                    </div>
                    <h3 class="step-title">Get Expert Help Choosing the Right Box Style</h3>
                    <p>Confused about the right box style? No worries, we are here to guide you. You can get our expert’s help for choosing the right style without any extra charges.</p>
                </div>

                <!-- Step 4 -->
                <div class="process-card">
                    <div class="process-icon">
                        <img src="{{ asset('images/icons/delivery-icon.svg') }}" alt="delivery icon" title="Delivery Icon">
                    </div>
                    <h3 class="step-title">Commitment to Quality Manufacturing And Delivery</h3>
                    <p>Every Box is designed with product safety in Mind. As soon as you final the design, we forward it to manufacturing unit. No need to worry, you will get your products on time.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="premium-addons-section">
        <div class="container">

            <div class="premium-header">
                <!-- <span class="section-badge-text">PREMIUM ADDONS</span> -->
                <h2>Premium And Thoughtful Finishing Options</h2>
                <p>To take your Custom packaging on another level, choose your finishing style carefully. You will have <br/>
                 extensive range of finishing. Choose your required finishing option.</p>
            </div>

            <div class="premium-gallery-single" style="width: 100%; margin: 0 auto; overflow: hidden; border-radius: 24px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
                <img src="{{asset('uploads/preium-addons.webp')}}" alt="premium addons" title="Premium Addons" style="width: 100%; height: auto; display: block;">
            </div>

        </div>
    </section>

    <section class="why-home-section">
        <div class="container">
            <h2 class="why-title">Why Choose PremiumBoxes for Custom Packaging?</h2>

            <div class="why-home-wrapper">

                <div class="why-cards-grid">

                    <div class="why-box">
                        <i class="fas fa-user-tie"></i>
                        <h4>Packaging Experts With Product-Specific Guidance</h4>
                        <p>If you want to work with a professional manufacturer, then your first stop is Premium Packaging. With the help of experts who understand the market trends and new technologies, we guide our customers for best solutions.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-medal"></i>
                        <h4>High-Quality Materials and Reliable Manufacturing</h4>
                        <p>Every business wants high-quality packaging for their products. Many manufacturers claim it so why us? We use high-quality materials and have transparent and reliable manufacturing process.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-shapes"></i>
                        <h4>Custom Sizes, Shapes, Styles, and Finishes</h4>
                        <p>You can get customization in size, shape, style, finishes and printing styles. We listen to our customers, validate their opinion and give them best suggestions for their benefits.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-palette"></i>
                        <h4>Design Support From Concept to Final Box</h4>
                        <p>At PremiumBoxes, we have a design team. The team is specially created for our customers to understand their design requirements and help them to choose the best design.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-rocket"></i>
                        <h4>Flexible Packaging Solutions for New Brands</h4>
                        <p>At PremiumBoxes, we offer you flexible packaging solutions. You can get Premium Boxes that are cost efficient and in your budget.</p>
                    </div>

                    <div class="why-box">
                        <i class="fas fa-boxes"></i>
                        <h4>Custom Boxes with No Minimum Rule</h4>
                        <p>We have rule of “Custom Boxes with No Minimum” quantity. We won’t cost your arm and leg just to provide customized packaging boxes for your brand.</p>
                    </div>

                </div>

                <div class="why-image">
                    <img src="{{asset('uploads/why-choise-us.webp')}}" alt="luxury box" title="Luxury Box">
                </div>

            </div>
        </div>
    </section>
    @include('web.components.testimonials')


    @include('web.components.quote-form', ['source' => 'Home Page Quote Form'])

<script>
(function() {
    // File upload
    var homeFileInput     = document.getElementById('homeFileInput');
    var homeFileNameField = document.getElementById('homeFileNameField');
    if (homeFileInput && homeFileNameField) {
        homeFileInput.addEventListener('change', function() {
            homeFileNameField.value = homeFileInput.files.length > 0
                ? homeFileInput.files[0].name
                : 'No file chosen';
        });
    }

    // Human verification
    var hQuestion = document.getElementById('homeHumanQuestion');
    var hAnswer   = document.getElementById('homeHumanAnswer');
    var hBtn      = document.getElementById('homeHumanCheckBtn');
    var hStatus   = document.getElementById('homeHumanStatus');
    var hTotal    = 0;
    var hVerified = false;

    function genQuestion() {
        var a = Math.floor(Math.random() * 9) + 1;
        var b = Math.floor(Math.random() * 9) + 1;
        hTotal = a + b;
        if (hQuestion) hQuestion.textContent = a + ' + ' + b + ' =';
        if (hAnswer)   { hAnswer.value = ''; hAnswer.style.border = ''; }
        if (hStatus)   { hStatus.textContent = ''; hStatus.className = 'human-status'; }
        hVerified = false;
    }

    if (hQuestion && hAnswer && hBtn) {
        genQuestion();
        hBtn.addEventListener('click', function() {
            var correct = hAnswer.value.trim() !== '' && Number(hAnswer.value.trim()) === hTotal;
            if (correct) {
                hVerified = true;
                hAnswer.style.border = '';
                if (hStatus) { hStatus.textContent = 'Verified.'; hStatus.className = 'human-status is-success'; }
            } else {
                hVerified = false;
                hAnswer.style.border = '1px solid red';
                if (hStatus) { hStatus.textContent = 'Please solve the addition correctly.'; hStatus.className = 'human-status is-error'; }
                hAnswer.focus();
            }
        });
    }

    // Form submit validation
    var homeForm = document.getElementById('homeQuoteForm');
    if (homeForm) {
        homeForm.setAttribute('novalidate', true);
        homeForm.addEventListener('submit', function(e) {
            e.preventDefault();
            var isValid = true;
            var firstInvalid = null;
            homeForm.querySelectorAll('[required]').forEach(function(field) {
                var val = field.value.trim();
                var valid = !!val;
                if (valid && field.type === 'email') {
                    valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(val);
                }
                if (valid && field.type === 'tel') {
                    valid = /^\+?[\d\s\-(^)]{7,20}$/.test(val);
                }
                if (!valid) {
                    isValid = false;
                    field.style.border = '1px solid red';
                    if (!firstInvalid) firstInvalid = field;
                } else {
                    field.style.border = '';
                }
            });
            if (!isValid) { if (firstInvalid) firstInvalid.focus(); return; }
            if (!hVerified) {
                if (hStatus) { hStatus.textContent = 'Please verify you are human first.'; hStatus.className = 'human-status is-error'; }
                if (hAnswer) hAnswer.focus();
                return;
            }
            homeForm.submit();
        });
    }
})();
</script>

    <!-- Content and FAQs Section (Packaging Guide Layout) -->
    <section class="guide-section" style="padding: 0; background: var(--bg-main);">
        <div class="container">
            <!-- <div class="guide-badge" style="display: inline-block; border: 1px solid var(--accent-gold); color: var(--accent-gold); padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 600; letter-spacing: 1px; margin-bottom: 30px;">PACKAGING GUIDE</div> -->

            <div class="guide-container">
                <!-- Left Column: Content -->
                <div class="guide-col-one guide-content">
                    <style>
                        .guide-container {
                            display: grid;
                            grid-template-columns: 1.2fr 1fr;
                            gap: 60px;
                            align-items: start;
                        }
                        .guide-col-one.guide-content {
                            color: #fff;
                            max-height: 600px;
                            overflow-y: auto;
                            padding-right: 20px;
                        }
                        @media (max-width: 991px) {
                            .guide-container {
                                grid-template-columns: 1fr;
                                gap: 40px;
                            }
                            .guide-col-one.guide-content {
                                max-height: 400px;
                                overflow-y: auto;
                                padding-right: 12px;
                                padding-left: 0;
                            }
                        }
                        .guide-col-one.guide-content * {
                            color: #ffffff !important;
                        }
                        .guide-col-one.guide-content h1 { font-size: 2.2rem !important; margin-bottom: 15px !important; font-weight: 700; line-height: 1.3; text-align: left !important; }
                        .guide-col-one.guide-content h2 { font-size: 1.8rem !important; margin-bottom: 15px !important; font-weight: 700; line-height: 1.4; text-align: left !important; }
                        .guide-col-one.guide-content h3 { font-size: 1.5rem !important; margin-bottom: 12px !important; font-weight: 600; line-height: 1.4; text-align: left !important; }
                        .guide-col-one.guide-content h4 { font-size: 1.25rem !important; margin-bottom: 10px !important; font-weight: 600; line-height: 1.4; text-align: left !important; }
                        .guide-col-one.guide-content p { font-size: 15px !important; line-height: 1.8 !important; margin-bottom: 15px !important; font-weight: 400; text-align: left !important; }
                        .guide-col-one.guide-content ul { margin-bottom: 15px !important; padding-left: 20px !important; }
                        .guide-col-one.guide-content li { margin-bottom: 8px !important; font-size: 15px !important; line-height: 1.7 !important; }

                        /* Custom Scrollbar for guide content */
                        .guide-col-one::-webkit-scrollbar {
                            width: 6px;
                        }
                        .guide-col-one::-webkit-scrollbar-track {
                            background: rgba(255, 255, 255, 0.05);
                            border-radius: 10px;
                        }
                        .guide-col-one::-webkit-scrollbar-thumb {
                            background: var(--accent-gold);
                            border-radius: 10px;
                        }
                        .guide-col-one::-webkit-scrollbar-thumb:hover {
                            background: #d4af37;
                        }
                        /* FAQ styling fixes */
                        .pg-accordion-btn {
                            padding: 15px 0 0px 0 !important;
                        }
                        .pg-accordion-body {
                            padding-top: 0 !important;
                            padding-left: 22px !important;
                        }
                        .pg-accordion-body p {
                            margin-top: 0 !important;
                            padding-top: 0 !important;
                            margin-bottom: 10px !important;
                            font-size: 14px !important;
                            color: rgba(255, 255, 255, 0.7) !important;
                        }
                        .pg-accordion-body *:first-child {
                            margin-top: 0 !important;
                        }
                        /* Hide empty tags that CKEditor might generate */
                        .pg-accordion-body p:empty {
                            display: none !important;
                        }
                        .pg-accordion-body br:first-child {
                            display: none !important;
                        }
                    </style>
                    @if(isset($viewonweb) && count($viewonweb) > 0)
                        {!! $viewonweb[0]->description ?? '' !!}
                    @endif
                </div>

                <!-- Right Column: FAQs / Steps -->
                <div class="guide-col-two">
                    <div class="pg-steps-box" style="background: #1a1a1a; border-radius: 12px; padding: 30px;">
                        <h2 class="pg-steps-title" style="color: #ffffff; font-size: 20px; font-weight: 700; margin-bottom: 24px; font-family: var(--font-heading), sans-serif;">Frequently Asked Questions</h2>

                        @if(isset($home_faqs) && count($home_faqs) > 0)
                            @foreach($home_faqs as $faq)
                            <div class="pg-step-item pg-accordion-item">
                                <button class="pg-accordion-btn">
                                    <h3 class="pg-accordion-q"><span style="color: var(--accent-gold); margin-right: 8px;">{{ $loop->iteration }}.</span> {{ strip_tags($faq->question) }}</h3>
                                    <span class="pg-accordion-icon">+</span>
                                </button>
                                <div class="pg-accordion-body">
                                    {!! $faq->answer !!}
                                </div>
                            </div>
                            @endforeach
                        @endif

                        <!-- Help box -->
                        <div class="pg-cta-box" style="background-color: var(--bg-darker); border-radius: 8px; padding: 24px; text-align: center; margin-top: 30px; border: 1px solid rgba(255,255,255,0.05);">
                            <h4 class="pg-cta-title" style="color: #ffffff; font-size: 18px; font-weight: 700; margin-bottom: 8px; font-family: var(--font-heading), sans-serif;">Need help choosing?</h4>
                            <p class="pg-cta-sub" style="color: rgba(255, 255, 255, 0.8); font-size: 13px; margin-bottom: 20px;">Our team responds within 2 hours</p>
                            <a href="{{ url('contact-us') }}" class="pg-cta-btn" style="display: inline-block; background-color: var(--accent-gold); color: #000000; font-weight: 600; font-size: 14px; padding: 12px 24px; border-radius: 40px; text-decoration: none; transition: background-color 0.2s;">Chat with an expert</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="custom-box-section">
        <div class="container">
            <div class="custom-box">
                <div class="custom-box-img">
                    <img src="{{asset('uploads/rigid-cta.png')}}" alt="rigid box" title="Rigid Box">
                </div>
            </div>
        </div>
    </section> -->

    @if(isset($home_blogs) && count($home_blogs) > 0)
    <section class="blog-section" style="margin-top: -40px;">
        <div class="container">

            <div class="blog-header" style="margin-top: 0; padding-top: 10px;">
                <!-- <span class="section-badge-text">BLOG</span> -->
                <h2>Insights & Inspiration</h2>
                <p>Stay updated with the latest trends, tips, and insights in the world of custom packaging.</p>
            </div>

            <div class="blog-grid" id="desktop-blog-grid">

                @php $main_blog = $home_blogs[0]; @endphp
                <div class="blog-main-card" onclick="window.location.href='{{ url('blog/'.$main_blog->blog_url) }}'" style="cursor: pointer;">
                    <div class="main-image-wrapper">
                        <img src="{{ asset('images/'.$main_blog->image) }}" alt="{{ strtolower(str_replace('-', ' ', $main_blog->alt_tag)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $main_blog->alt_tag))) }}">
                    </div>
                    <div class="card-meta">
                        <span class="author">{{ $main_blog->author_name }}</span>
                        <span class="date">{{ date('M d, Y', strtotime($main_blog->date)) }}</span>
                    </div>
                    <h4><a href="{{ url('blog/'.$main_blog->blog_url) }}">{{ $main_blog->blog_title }}</a></h4>
                    <p>{!! strip_tags(Str::limit($main_blog->long_description, 150)) !!}</p>
                </div>

                @if(count($home_blogs) > 1)
                <div class="blog-sidebar-list">

                    @foreach($home_blogs->slice(1, 3) as $side_blog)
                    <div class="blog-side-card" onclick="window.location.href='{{ url('blog/'.$side_blog->blog_url) }}'" style="cursor: pointer;">
                        <img src="{{ asset('images/'.$side_blog->image) }}" alt="{{ strtolower(str_replace('-', ' ', $side_blog->alt_tag)) }}" class="side-card-img" title="{{ ucwords(strtolower(str_replace('-', ' ', $side_blog->alt_tag))) }}">
                        <div class="side-card-content">
                            <div class="card-meta">
                                <span class="author">{{ $side_blog->author_name }}</span>
                                <span class="date">{{ date('M d, Y', strtotime($side_blog->date)) }}</span>
                            </div>
                            <h4><a href="{{ url('blog/'.$side_blog->blog_url) }}">{{ $side_blog->blog_title }}</a></h4>
                            <p>{!! strip_tags(Str::limit($side_blog->long_description, 80)) !!}</p>
                        </div>
                    </div>
                    @endforeach

                    <div class="view-all-wrapper">
                        <a href="{{ url('our-blog') }}" class="view-all-link">View All &rarr;</a>
                    </div>

                </div>
                @endif

            </div>

            <!-- Mobile Only Blog Grid -->
            <div id="mobile-blog-grid">
                @foreach($home_blogs->take(4) as $blog)
                <div class="blog-card-mobile" onclick="window.location.href='{{ url('blog/'.$blog->blog_url) }}'" style="cursor: pointer;">
                    <div class="mobile-image-wrapper">
                        <img src="{{ asset('images/'.$blog->image) }}" alt="{{ strtolower(str_replace('-', ' ', $blog->alt_tag)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $blog->alt_tag))) }}">
                    </div>
                    <div class="card-meta">
                        <span class="author">{{ $blog->author_name }}</span>
                        <span class="date">{{ date('M d, Y', strtotime($blog->date)) }}</span>
                    </div>
                    <h4><a href="{{ url('blog/'.$blog->blog_url) }}">{{ $blog->blog_title }}</a></h4>
                    <p>{!! strip_tags(Str::limit($blog->long_description, 100)) !!}</p>
                </div>
                @endforeach
            </div>

            @if(count($home_blogs) > 1)
            <div class="blog-mobile-action">
                <a href="{{ url('our-blog') }}" class="btn btn-primary" style="width: 100%;">View All <span aria-hidden="true">&rarr;</span></a>
            </div>
            @endif

        </div>
    </section>
    @endif
    <!-- <section class="extraordinary-cta-section">
        <div class="container">
            <div class="extraordinary-content">

                <h2>Ready to Create Something <span class="highlight">Extraordinary?</span></h2>
                <p>Let's bring your packaging vision to life. Our team of experts is ready to design and deliver rigid
                    boxes that will make your brand unforgettable.</p>

                <div class="extraordinary-features">
                    <div class="ex-feature-item">
                        <span class="ex-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                    /path>
                                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                        </span>
                        <span>End-To-End Services</span>
                    </div>

                    <div class="ex-feature-item">
                        <span class="ex-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="8" r="7"></circle>
                                <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                            </svg>
                        </span>
                        <span>Premium Quality</span>
                    </div>

                    <div class="ex-feature-item">
                        <span class="ex-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path>
                            </svg>
                        </span>
                        <span>Circular Packaging Solutions</span>
                    </div>
                </div>

                <div class="extraordinary-action">
                    <a href="#" class="btn btn-primary extraordinary-btn">Get Your Free Quote Today</a>
                </div>

            </div>
        </div>
    </section> -->



<script>
document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".testimonial-card");
    const prevBtn = document.querySelector(".testimonial-nav button:first-child");
    const nextBtn = document.querySelector(".testimonial-nav button:last-child");

    let current = 0;

    function showCard(index) {
        cards.forEach(card => card.style.display = "none");
        cards[index].style.display = "block";
    }

    if (window.innerWidth <= 768 && cards.length && nextBtn && prevBtn) {
        showCard(current);

        nextBtn.addEventListener("click", () => {
            current = (current + 1) % cards.length;
            showCard(current);
        });

        prevBtn.addEventListener("click", () => {
            current = (current - 1 + cards.length) % cards.length;
            showCard(current);
        });
    }
});

//file upload
const fileInput = document.getElementById("quote-file");
const fileText = document.querySelector(".upload-control span");

if (fileInput) {
    fileInput.addEventListener("change", () => {
        if (fileInput.files.length > 0) {
            fileText.textContent = fileInput.files[0].name;
        } else {
            fileText.textContent = "No file chosen";
        }
    });
}
//form submission
    const quoteFileInput = document.querySelector('input[type="file"]');
    const fileNameField = document.querySelector(
        ".file-upload-wrapper input[type='text']"
    );

    if (quoteFileInput && fileNameField) {
        quoteFileInput.addEventListener("change", () => {
            if (quoteFileInput.files.length > 0) {
                fileNameField.value = quoteFileInput.files[0].name;
            } else {
                fileNameField.value = "No file chosen";
            }
        });
    }

    const quoteForm = document.querySelector(".instant-quote-form:not([data-ajax-managed='true'])");

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
            quoteForm.submit();
        });
    }
//smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function (e) {

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if (target) {
            target.scrollIntoView({
                behavior: "smooth"
            });
        }

    });

});

// --- FAQ Accordion ---
(function() {
    let initialized = false;
    function initAccordion() {
        if (initialized) return;
        initialized = true;

        const accordionButtons = document.querySelectorAll('.pg-accordion-btn');

        if (accordionButtons.length === 0) {
            console.log('No accordion buttons found');
            return;
        }

        console.log('Found ' + accordionButtons.length + ' accordion buttons');

        accordionButtons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                console.log('Accordion button clicked');

                const item = btn.closest('.pg-accordion-item');
                if (!item) {
                    console.log('No parent item found');
                    return;
                }

                const isOpen = item.classList.contains('open');
                console.log('Item is currently ' + (isOpen ? 'open' : 'closed'));

                // Close all items first
                document.querySelectorAll('.pg-accordion-item').forEach(function(i) {
                    i.classList.remove('open');
                    const icon = i.querySelector('.pg-accordion-icon');
                    if (icon) {
                        icon.textContent = '+';
                        icon.style.color = 'rgba(255,255,255,0.6)';
                    }
                });

                // If it was closed, open it
                if (!isOpen) {
                    item.classList.add('open');
                    const icon = btn.querySelector('.pg-accordion-icon');
                    if (icon) {
                        icon.textContent = '−';
                        icon.style.color = '#f5c542';
                    }
                    console.log('Item opened');
                }
            });
        });
    }

    // Try multiple initialization methods
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAccordion);
    } else {
        initAccordion();
    }

    // Fallback initialization
    setTimeout(initAccordion, 1000);
})();
</script>

@include('web.footer')
</body>
