@include('web/header')

<style>
:root {
    --bp-max: 1380px;
    --bp-px: 15px;
    --bp-bg: #1a1a1a;
    --bp-gold: #f5c542;
    --bp-gold-dark: #c9a84c;
    --bp-heading: #ffffff;
    --bp-copy: #c5c5c5;
    --bp-muted: #9a9a9a;
    --bp-border: #3a3a3a;
    --bp-header-h: 124px; /* JS below keeps this equal to the real fixed header height */
}

*, *::before, *::after { box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    margin: 0;
    background: var(--bp-bg);
    color: var(--bp-heading);
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
}

body { padding-top: var(--bp-header-h) !important; }

.bp-container {
    width: 100%;
    max-width: var(--bp-max);
    margin: 0 auto;
    padding: 0 var(--bp-px);
}

/* =========================
   HERO / DESKTOP
   ========================= */
.bp-hero {
    width: 100%;
    padding: 24px 0 0;
    background: var(--bp-bg);
}

.bp-hero-grid {
    position: relative;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 320px);
    column-gap: 50px;
    align-items: stretch;
}

.bp-hero-left {
    min-width: 0;
    display: flex;
    flex-direction: column;
}

.bp-breadcrumb {
    margin: 0 0 24px;
}

.bp-title-row {
    position: static;
    margin: 0 0 10px;
}

.bp-title {
    max-width: 100%;
    margin: 0;
    color: var(--bp-heading);
    font-size: 36px;
    font-weight: 700;
    line-height: 1.32;
    letter-spacing: -0.35px;
}

.bp-desc {
    max-width: 100%;
    margin: 0 0 17px;
    color: var(--bp-copy);
    font-size: 16px;
    font-weight: 400;
    line-height: 1.65;
    text-align: left;
}

.bp-share-container {
    position: absolute;
    top: 78px;
    right: 0;
    z-index: 2;
    display: flex;
    align-items: center;
    gap: 14px;
    white-space: nowrap;
}

.bp-share-label {
    margin: 0;
    color: #f0f0f0;
    font-size: 13px;
    font-weight: 400;
}

.bp-share-icons {
    display: flex;
    align-items: center;
    gap: 18px;
}

.bp-share-btn {
    width: auto;
    height: auto;
    padding: 0;
    border: 0;
    border-radius: 0;
    background: transparent;
    color: #f2f2f2;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    line-height: 1;
    text-decoration: none;
    transition: color .2s ease, transform .2s ease;
}

.bp-share-btn:hover {
    color: var(--bp-gold);
    transform: translateY(-1px);
}

.bp-author {
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 0 0 36px;
    padding: 0;
}

.bp-author-avatar {
    width: 42px;
    height: 42px;
    min-width: 42px;
    margin: 0;
    overflow: hidden;
    border-radius: 0;
    background: #2a2a2a;
}

.bp-author-avatar img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.bp-author-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 4px;
    margin: 0;
}

.bp-author-name {
    color: var(--bp-copy);
    font-size: 13px;
    font-weight: 400;
    line-height: 1.2;
}

.bp-author-meta-row {
    display: flex;
    align-items: center;
    gap: 9px;
    flex-wrap: nowrap;
}

.bp-author-date,
.bp-author-read,
.bp-author-sep {
    color: #a6a6a6;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.2;
    white-space: nowrap;
}

.bp-author-sep { color: #777; }
.bp-author-read i { display: none; }

.bp-image {
    width: 100%;
    margin: 0;
    overflow: hidden;
    border: 0;
    border-radius: 0;
    background: #111;
    box-shadow: none;
    aspect-ratio: 16 / 9;
}

.bp-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.bp-hero-right {
    min-width: 0;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bp-spacer { display: none; }

/* =========================
   QUOTE CARD
   ========================= */
.bp-quote-widget {
    width: 100%;
    max-width: 100%;
    margin: 0;
    padding: 18px 15px 23px;
    border: 1px solid rgba(245, 197, 66, .45);
    border-radius: 10px;
    background: #202020;
    box-shadow: none;
}

.bp-quote-title {
    margin: 0 0 22px;
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    line-height: 1.2;
    text-align: center;
}

.bp-quote-form {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.bp-quote-row {
    width: 100%;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
    gap: 8px;
}

.bp-quote-row > * { min-width: 0; }

.bp-quote-input,
.bp-quote-textarea,
.bp-quote-select {
    width: 100%;
    height: 38px;
    min-width: 0;
    padding: 0 10px;
    border: 1px solid #4a4a4a;
    border-radius: 5px;
    outline: 0;
    background: transparent;
    color: #d0d0d0;
    font: inherit;
    font-size: 10px;
    transition: border-color .2s ease;
}

.bp-quote-input::placeholder,
.bp-quote-textarea::placeholder { color: #a2a2a2; opacity: 1; }

.bp-quote-input:focus,
.bp-quote-textarea:focus,
.bp-quote-select:focus { border-color: var(--bp-gold-dark); }

.bp-quote-textarea {
    height: 72px;
    min-height: 72px;
    padding: 11px 10px;
    resize: vertical;
}

.bp-quote-upload-wrapper {
    width: 100%;
    height: 38px;
    display: flex;
    align-items: stretch;
}

.bp-quote-upload-input {
    min-width: 0;
    flex: 1 1 auto;
    height: 38px;
    padding: 0 8px;
    border: 1px solid #4a4a4a;
    border-right: 0;
    border-radius: 5px 0 0 5px;
    background: transparent;
    color: #a2a2a2;
    font-size: 10px;
    line-height: 38px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    pointer-events: none;
}

.bp-quote-upload-btn {
    width: 42px;
    min-width: 42px;
    height: 38px;
    padding: 0 5px;
    border: 0;
    border-radius: 0 5px 5px 0;
    background: var(--bp-gold);
    color: #111;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10px;
    font-weight: 700;
    cursor: pointer;
}

.bp-quote-buttons {
    display: flex;
    gap: 8px;
    margin-top: 8px;
}

.bp-quote-btn {
    min-width: 0;
    flex: 1 1 0;
    height: 36px;
    padding: 0 12px;
    border-radius: 999px;
    font: inherit;
    font-size: 11px;
    font-weight: 700;
    cursor: pointer;
    transition: background-color .2s ease, color .2s ease, border-color .2s ease;
}

.bp-quote-btn:focus,
.bp-quote-btn:active {
    outline: none !important;
    box-shadow: none !important;
}

.bp-quote-submit {
    border: 1px solid var(--bp-gold);
    background: var(--bp-gold);
    color: #111;
}

.bp-quote-call {
    border: 1px solid var(--bp-gold);
    background: transparent;
    color: var(--bp-gold);
}

.bp-quote-submit:hover { background: #ffd45c; border-color: #ffd45c; }
.bp-quote-call:hover { background: var(--bp-gold); color: #111; }

.bp-form-status {
    display: none;
    margin-top: 14px;
    padding: 12px 16px;
    border-radius: 8px;
    background: rgba(245, 197, 66, 0.12);
    border: 1px solid rgba(245, 197, 66, 0.34);
    color: var(--bp-gold);
    font-size: 13px !important;
    font-weight: 600;
    line-height: 1.45;
    text-align: center;
}
.bp-form-status.is-error {
    background: rgba(255, 85, 85, 0.12);
    border-color: rgba(255, 85, 85, 0.34);
    color: #ff8b8b;
}

/* =========================
   ARTICLE BODY
   ========================= */
.bp-body {
    padding: 42px 0 30px;
    background: var(--bp-bg);
}

.bp-body-grid {
    grid-template-columns: minmax(0, 1fr) minmax(0, 320px);
    column-gap: 50px;
    align-items: start;
}

.bp-body-spacer { display: none; }

.bp-article {
    width: 100%;
    min-width: 0;
    padding: 0;
    border: 0;
}

.bp-article p {
    width: 100%;
    max-width: 100%;
    margin: 0 0 29px;
    color: #b8b8b8;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.85;
    text-align: justify;
    hyphens: none;
    overflow-wrap: break-word;
}

.bp-article p:last-child { margin-bottom: 0; }

.bp-article h1,
.bp-article h2,
.bp-article h3,
.bp-article h4,
.bp-article h5 {
    margin: 30px 0 15px;
    color: #fff;
    line-height: 1.3;
}

.bp-article ul,
.bp-article ol {
    margin: 0 0 29px;
    padding-left: 24px;
    color: #b8b8b8;
    font-size: 14px;
    line-height: 1.85;
}

.bp-sidebar {
    width: 100%;
    min-width: 0;
    margin: 0;
    padding: 0;
}

.bp-sidebar-sticky {
    position: sticky;
    top: 120px;
}

/* Keep the hero quote visible while the desktop article is being read. */
@media (min-width: 1080px) {
    .bp-quote-widget.bp-quote-is-following {
        position: fixed;
        z-index: 20;
        margin: 0;
    }
}

/* =========================
   AUTHOR PROFILE
   ========================= */
.bp-author-profile {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 20px;
    margin: 36px 0 0;
    padding: 26px 0 0;
    border: 0;
    border-top: 1px solid #333;
    background: transparent;
}

.bp-author-profile-image {
    width: 118px;
    height: 118px;
    min-width: 118px;
    overflow: hidden;
    border-radius: 50%;
    background: #2a2a2a;
}

.bp-author-profile-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.bp-author-profile-content {
    min-width: 0;
    flex: 1;
}

.bp-author-profile-heading {
    margin: 0 0 6px;
    color: #fff;
    font-size: 17px;
    line-height: 1.3;
}

.bp-author-profile-description {
    width: 100%;
    margin: 0 0 8px !important;
    color: #aaa !important;
    font-size: 13px !important;
    line-height: 1.65 !important;
    text-align: left !important;
}

.bp-author-profile-social {
    width: fit-content;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #fff;
    font-size: 13px;
    text-decoration: none;
}

.bp-author-profile-social i {
    width: 26px;
    height: 23px;
    border-radius: 2px;
    background: var(--bp-gold);
    color: #111;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

/* =========================
   RELATED POSTS
   ========================= */
.bp-related-posts {
    width: 100%;
    margin: 30px 0 0;
}

.bp-related-title {
    margin: 0 0 26px;
    color: #fff;
    font-size: 30px;
    line-height: 1.2;
}

.bp-related-grid {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
}

.bp-related-card {
    min-width: 0;
    overflow: hidden;
    border: 1px solid #2d2d2d;
    background: #1a1a1a;
}

.bp-related-link {
    display: block;
    color: inherit;
    text-decoration: none;
}

.bp-related-link:hover,
.bp-related-link:focus,
.bp-related-link:active {
    text-decoration: none !important;
    color: inherit !important;
}

.bp-related-link:hover * {
    text-decoration: none !important;
}

.bp-related-image {
    width: 100%;
    height: auto;
    aspect-ratio: 16 / 9;
    overflow: hidden;
    background: #111;
}

.bp-related-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform .25s ease;
}

.bp-related-card:hover .bp-related-image img { transform: scale(1.04); }

.bp-related-content { padding: 16px; }

.bp-related-meta {
    display: flex;
    align-items: center;
    gap: 7px;
    margin-bottom: 9px;
    color: #888;
    font-size: 10px;
}

.bp-related-author { color: #fff; font-weight: 600; }
.bp-related-date::before { content: '•'; margin-right: 7px; color: #555; }

.bp-related-card-title {
    margin: 0 0 9px;
    color: #fff;
    font-size: 15px;
    line-height: 1.4;
    min-height: 2.8em;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
}

.bp-related-excerpt {
    margin: 0 !important;
    color: #999 !important;
    font-size: 12px !important;
    line-height: 1.55 !important;
    text-align: left !important;
    min-height: 4.65em;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    overflow: hidden;
}

.bp-mobile { display: none; }
.bp-slider-dots { display: none; }

/* =========================
   FLUID DESKTOP / TABLET
   ========================= */
@media (min-width: 769px) {
    :root { --bp-px: 55px; }
}

@media (max-width: 1079px) and (min-width: 768px) {
    .bp-hero-grid,
    .bp-body-grid {
        grid-template-columns: minmax(0, 2.25fr) minmax(270px, 1fr);
        gap: 30px;
    }

    .bp-title { font-size: clamp(27px, 3.2vw, 32px); }
    .bp-share-container { right: 0; }
    .bp-quote-widget { width: 100%; }
}

/* =========================
   MOBILE — FIGMA MATCH
   ========================= */
@media (max-width: 767px) {
    :root { --bp-px: 15px; }

    html, body {
        width: 100%;
        margin: 0;
        padding-left: 0 !important;
        padding-right: 0 !important;
        background: var(--bp-bg);
    }

    body { padding-top: var(--bp-header-h) !important; }

    .bp-container {
        width: 100%;
        max-width: none;
        margin: 0;
        padding: 0 var(--bp-px);
    }

    .bp-hero {
        padding: 16px 0 0;
    }

    .bp-desktop-grid { display: none; }

    .bp-mobile {
        width: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }

    .bp-mobile .bp-breadcrumb {
        margin: 0 0 16px;
        font-size: 13px;
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        width: 100%;
        min-width: 0;
        overflow: hidden;
        white-space: nowrap;
    }

    .bp-mobile .bp-breadcrumb .gb-home,
    .bp-mobile .bp-breadcrumb .gb-sep,
    .bp-mobile .bp-breadcrumb .gb-link {
        flex: 0 0 auto;
    }

    .bp-mobile .bp-breadcrumb .gb-current {
        min-width: 0;
        flex: 1 1 auto;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .bp-mob-title {
        width: 100%;
        margin: 0 0 18px;
        color: #fff;
        font-size: clamp(27px, 7vw, 31px);
        font-weight: 700;
        line-height: 1.3;
        letter-spacing: -.35px;
        overflow-wrap: break-word;
    }

    .bp-mob-desc {
        width: 100%;
        margin: 0 0 18px;
        color: var(--bp-copy);
        font-size: clamp(16px, 4.2vw, 18px);
        font-weight: 400;
        line-height: 1.62;
        text-align: justify;
        overflow-wrap: break-word;
    }

    .bp-mob-meta-row {
        width: 100%;
        margin: 0 0 8px;
        display: flex;
        align-items: center;
    }

    .bp-mob-author {
        min-width: 0;
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .bp-mob-author-avatar {
        width: 45px;
        height: 45px;
        min-width: 45px;
        overflow: hidden;
        border-radius: 0;
        background: #2a2a2a;
    }

    .bp-mob-author-avatar img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bp-mob-author-text {
        min-width: 0;
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        gap: 7px;
        color: #d0d0d0;
        font-size: clamp(12px, 3.5vw, 16px);
        line-height: 1.25;
        white-space: nowrap;
    }

    .bp-mob-author-name,
    .bp-mob-date,
    .bp-mob-read,
    .bp-mob-sep {
        color: #d0d0d0;
        font-size: inherit;
        font-weight: 400;
        white-space: nowrap;
    }

    .bp-mob-sep { color: #8a8a8a; }
    .bp-mob-read i { display: none; }

    .bp-mob-share {
        width: 100%;
        margin: 0 0 34px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 14px;
    }

    .bp-mob-share-label {
        color: #f0f0f0;
        font-size: 15px;
        font-weight: 400;
    }

    .bp-mob-share-icons {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .bp-mob-share-btn {
        width: auto;
        height: auto;
        padding: 0;
        border: 0;
        border-radius: 0;
        background: transparent;
        color: #f2f2f2;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        line-height: 1;
        text-decoration: none;
    }

    .bp-mob-image {
        width: 100%;
        margin: 0;
        overflow: hidden;
        border: 0;
        border-radius: 0;
        background: #111;
        aspect-ratio: auto;
    }

    .bp-mob-image img {
        display: block;
        width: 100%;
        height: auto;
        object-fit: contain;
        object-position: center;
    }

    .bp-body {
        padding: 30px 0 24px;
    }

    .bp-body-grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr);
        gap: 0;
    }

    .bp-sidebar { display: none; }

    .bp-article {
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
        border: 0;
        overflow: visible;
    }

    .bp-article p {
        width: 100%;
        max-width: 100%;
        margin: 0 0 24px;
        padding: 0;
        color: var(--bp-copy);
        font-size: clamp(16px, 4.2vw, 18px);
        line-height: 1.62;
        text-align: justify;
        hyphens: none;
        word-break: normal;
        overflow-wrap: break-word;
    }

    .bp-article h1,
    .bp-article h2,
    .bp-article h3,
    .bp-article h4,
    .bp-article h5 {
        margin: 28px 0 14px;
        font-size: clamp(22px, 5.6vw, 28px);
    }

    .bp-article ul,
    .bp-article ol {
        margin-bottom: 24px;
        padding-left: 22px;
        color: var(--bp-copy);
        font-size: clamp(16px, 4.2vw, 18px);
        line-height: 1.62;
    }

    .bp-author-profile {
        width: 100%;
        margin: 30px 0 0;
        padding: 20px;
        display: flex;
        align-items: flex-start;
        gap: 15px;
        border: 1px solid #2d2d2d;
        border-radius: 12px;
    }

    .bp-author-profile-image {
        width: 72px;
        height: 72px;
        min-width: 72px;
    }

    .bp-author-profile-heading { font-size: 20px; }

    .bp-author-profile-description {
        font-size: 15px !important;
        line-height: 1.6 !important;
    }

    .bp-related-posts { margin-top: 34px; }
    .bp-related-title { margin-bottom: 18px; font-size: 25px; }

    .bp-related-grid {
        display: flex;
        gap: 16px;
        overflow-x: auto;
        overflow-y: hidden;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: thin;
        scrollbar-color: var(--bp-gold) #2a2a2a;
        padding-bottom: 12px;
    }

    .bp-related-card {
        flex: 0 0 86%;
        min-width: 86%;
        scroll-snap-align: start;
    }

    .bp-related-image { height: auto; }
    .bp-related-content { padding: 16px; }
    .bp-related-card-title { font-size: 17px; }
    .bp-related-excerpt { font-size: 14px !important; }
}

@media (max-width: 390px) {
    :root { --bp-px: 18px; }

    .bp-mob-author-text {
        gap: 5px;
        font-size: 12px;
    }

    .bp-mob-author-avatar {
        width: 41px;
        height: 41px;
        min-width: 41px;
    }
}
</style>

@php
    $post = $meta[0];
    $blog_title = $post->blog_title;
    $blog_image = asset('images/'.$post->image);
    $author_name = $post->author_name;
    $author_description = $post->author_description;
    $blog_date = date('F d, Y', strtotime($post->date));
    $blog_date_short = date('M d, Y', strtotime($post->date));
    $blog_desc = strip_tags(Str::limit($post->long_description, 200));
    $blog_url = url($post->blog_url);
    $long_desc = $post->long_description;
    $current_url = url()->current();
    $fb_share = 'https://www.facebook.com/sharer/sharer.php?u='.urlencode($current_url);
    $tw_share = 'https://twitter.com/intent/tweet?url='.urlencode($current_url).'&text='.urlencode($blog_title);
    $li_share = 'https://www.linkedin.com/sharing/share-offsite/?url='.urlencode($current_url);
@endphp

    <!-- POST HERO -->
     <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <article class="bp-hero">
        <div class="bp-container">

            <!-- DESKTOP HERO GRID -->
            <div class="bp-hero-grid bp-desktop-grid">

                <!-- LEFT COLUMN -->
                <div class="bp-hero-left">

@include('web.components.breadcrumb', [
    'class' => 'bp-breadcrumb',
    'items' => [
        ['label' => 'Blogs', 'url' => url('our-blog')],
        ['label' => 'Rigid Packaging Gluing ...']
    ]
])

                    <div class="bp-title-row">
                        <h1 class="bp-title">{{ $blog_title }}</h1>

                        <div class="bp-share-container">
                            <span class="bp-share-label">Share:</span>
                            <div class="bp-share-icons">
                                <a href="{{ $fb_share }}" target="_blank" class="bp-share-btn" aria-label="Share on Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{ $tw_share }}" target="_blank" class="bp-share-btn" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="{{ $li_share }}" target="_blank" class="bp-share-btn" aria-label="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <p class="bp-desc">The right box doesn't just hold your baked goods. It shows off your brand, sparks joy, and turns every treat into an experience. Get inspired by these designs that are as sweet the treats inside.</p>

                    <div class="bp-author">
                        <div class="bp-author-avatar">
                            <img src="{{ asset('images/1606478490.Adam_Smith.jpg') }}" alt="{{ strtolower(str_replace('-', ' ', $author_name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $author_name))) }}">
                        </div>
                        <div class="bp-author-info">
                            <span class="bp-author-name">By <a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                            <div class="bp-author-meta-row">
                                <span class="bp-author-date">{{ $blog_date }}</span>
                                <span class="bp-author-sep">|</span>
                                <span class="bp-author-read"><i class="far fa-clock"></i> 6 min read</span>
                            </div>
                        </div>
                    </div>

                    <figure class="bp-image">
                        <img src="{{ $blog_image }}" alt="{{ strtolower(str_replace('-', ' ', $post->alt_tag)) }}" loading="eager" title="{{ ucwords(strtolower(str_replace('-', ' ', $post->alt_tag))) }}">
                    </figure>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="bp-hero-right">
                    <div class="bp-spacer"></div>
                    
                    <!-- INSTANT QUOTE FORM -->
                    <div class="bp-quote-widget">
                        <h3 class="bp-quote-title">Instant Quote</h3>
                        <form id="bp-instant-quote-form" class="bp-quote-form" action="{{ url('submit-quote') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="source" value="Blog details quote form">
                            <input type="hidden" name="page_url" value="{{ url()->current() }}">
                            <div class="bp-quote-row">
                                <input type="text" name="name" class="bp-quote-input" placeholder="Enter your name" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
                                <input type="email" name="email" class="bp-quote-input" placeholder="Enter your email" required>
                            </div>
                            <div class="bp-quote-row">
                                <input type="text" name="company" class="bp-quote-input" placeholder="Company (optional)">
                                <div class="bp-quote-upload-wrapper">
                                    <input type="text" class="bp-quote-upload-input" value="No file chosen" readonly>
                                    <label class="bp-quote-upload-btn">
                                        Upload
                                        <input type="file" name="artwork" style="display: none;">
                                    </label>
                                </div>
                            </div>
                            <textarea name="message" class="bp-quote-textarea" placeholder="Project description" required></textarea>
                            <div class="bp-quote-buttons">
                                <button type="submit" class="bp-quote-btn bp-quote-submit">Get Quote</button>
                                <button type="button" class="bp-quote-btn bp-quote-call" >Live Chat</button>
                            </div>
                            <div id="bp-quote-success-msg" class="bp-form-status" style="{{ Session::has('success') ? 'display: block;' : '' }}">
                                {{ Session::has('success') ? Session::get('success') : 'Thank you for the inquiry, our sales representative will contact soon!' }}
                            </div>
                        </form>
                    </div>
                    
                    <div class="bp-spacer"></div>
                </div>

            </div>

            <!-- MOBILE HERO -->
            <div class="bp-mobile">

@include('web.components.breadcrumb', [
    'class' => 'bp-breadcrumb',
    'items' => [
        ['label' => 'Blogs', 'url' => url('our-blog')],
        ['label' => $blog_title]
    ]
])

                <h1 class="bp-mob-title">{{ $blog_title }}</h1>

                <p class="bp-mob-desc">The right box doesn't just hold your baked goods. It shows off your brand, sparks joy, and turns every treat into an experience. Get inspired by these designs that are as sweet the treats inside.</p>

                <div class="bp-mob-meta-row">
                    <div class="bp-mob-author">
                        <div class="bp-mob-author-avatar">
                            <img src="{{ asset('images/1606478490.Adam_Smith.jpg') }}" alt="{{ strtolower(str_replace('-', ' ', $author_name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $author_name))) }}">
                        </div>
                        <div class="bp-mob-author-text">
                            <span class="bp-mob-author-name">By <a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                            <span class="bp-mob-sep">|</span>
                            <span class="bp-mob-date">{{ $blog_date_short }}</span>
                            <span class="bp-mob-sep">|</span>
                            <span class="bp-mob-read"><i class="far fa-clock"></i> 6 min read</span>
                        </div>
                    </div>
                </div>

                <div class="bp-mob-share">
                    <span class="bp-mob-share-label">Share:</span>
                    <div class="bp-mob-share-icons">
                        <a href="{{ $fb_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Share on Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="{{ $tw_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="{{ $li_share }}" target="_blank" class="bp-mob-share-btn" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <figure class="bp-mob-image">
                    <img src="{{ $blog_image }}" alt="{{ strtolower(str_replace('-', ' ', $post->alt_tag)) }}" loading="eager" title="{{ ucwords(strtolower(str_replace('-', ' ', $post->alt_tag))) }}">
                </figure>

            </div>

        </div>
    </article>

    <!-- POST BODY -->
    <main class="bp-body">
        <div class="bp-container">
            <div class="bp-hero-grid bp-body-grid">

                <div class="bp-hero-left">
                    <div class="bp-article">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet sem ut dolor vulputate dignissim sit amet id dolor. Etiam viverra sem ac erat rutrum, id feugiat nisi porttitor. Phasellus volutpat, tortor nec cursus rhoncus, metus nulla lobortis urna, quis condimentum sapien magna sed erat. Suspendisse imperdiet orci sem, ut accumsan augue volutpat quis. Pellentesque feugiat rutrum venenatis. Cras sollicitudin vestibulum enim, vitae scelerisque orci placerat at. In hac habitasse platea dictumst. Sed ac tempor felis. Pellentesque dictum turpis a leo suscipit, nec ullamcorper magna tincidunt. Maecenas vel tellus non orci suscipit bibendum. Aenean porta purus turpis, a luctus nulla ultrices vitae. Nulla eleifend mollis libero, a pellentesque eros eleifend ut. Proin sodales felis sed tortor placerat, sed facilisis nisi vehicula.</p>

                        <p>Duis erat libero, elementum ac maximus a, pretium ac nibh. In vehicula posuere fermentum. Nullam condimentum sit amet ex eu eleifend. Pellentesque blandit scelerisque imperdiet. Nunc viverra nulla eu lectus feugiat, quis accumsan mauris vulputate. Aliquam porttitor ex id fermentum scelerisque. Quisque ac commodo turpis. Donec cursus, nisi vel rutrum lobortis, dolor mauris dapibus nunc, eget pellentesque sem enim a massa. Integer fringilla nulla elit, ut rhoncus metus rhoncus nec.</p>

                        <p>Nulla consectetur iaculis elementum. Praesent porttitor mattis turpis sed interdum. Vestibulum rhoncus lobortis erat, nec rhoncus orci euismod elementum. Mauris viverra ligula eget ex auctor, ut fringilla purus porttitor. Pellentesque egestas lectus id neque gravida porttitor. Suspendisse maximus erat in sapien laoreet ultricies. Etiam aliquam neque a purus sollicitudin varius. Praesent ac ante magna. Duis et consequat odio. Suspendisse nec purus libero. Cras non ante semper, vestibulum nulla non, condimentum erat. Sed faucibus, lorem in volutpat pharetra, urna sapien tincidunt orci, a aliquam risus nunc in ex. Integer vehicula, quam bibendum aliquam tristique, sapien ante tincidunt ipsum, volutpat rhoncus ligula odio in urna. Vivamus ac arcu non orci tempus tristique eu eget magna. Quisque quam elit, posuere id augue id, pretium varius enim. Donec neque arcu, maximus quis eros ac, suscipit luctus libero.</p>

                        <p>Cras consectetur suscipit tellus, et mollis nisi consectetur quis. Ut suscipit nisl mi, at pretium dui feugiat vitae. Fusce facilisis sem vel massa pretium tempor. Maecenas nec eros nibh. Nulla id orci laoreet, mollis erat in, posuere leo. Quisque sollicitudin, elit eget pharetra pretium, velit massa eleifend magna, ut iaculis tellus lorem ac tortor. Suspendisse tristique, dui non malesuada dignissim, sem erat vehicula nisi, nec dictum justo tortor et nulla. Suspendisse eu leo lacus. Sed elementum volutpat ipsum non efficitur. Aliquam a lobortis augue. Nullam turpis mi, imperdiet sit amet tincidunt vel, ultricies quis metus. Curabitur malesuada aliquet dui gravida placerat. Nam vel ultricies libero.</p>

                        <p>Sed neque est, interdum id convallis eleifend, dignissim sed lorem. Fusce vel malesuada enim. Aliquam erat volutpat. Nulla efficitur maximus sagittis. Integer non nisl vestibulum, posuere purus tristique, volutpat augue. Suspendisse eget felis suscipit purus laoreet egestas eget eget purus. Donec ac elementum risus. Sed semper massa risus, sed luctus risus fringilla commodo. Nulla sed sem nec massa tincidunt dictum. Duis ligula risus, pulvinar in consectetur quis, sagittis ac diam.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet sem ut dolor vulputate dignissim sit amet id dolor. Etiam viverra sem ac erat rutrum, id feugiat nisi porttitor. Phasellus volutpat, tortor nec cursus rhoncus, metus nulla lobortis urna, quis condimentum sapien magna sed erat. Suspendisse imperdiet orci sem, ut accumsan augue volutpat quis. Pellentesque feugiat rutrum venenatis. Cras sollicitudin vestibulum enim, vitae scelerisque orci placerat at. In hac habitasse platea dictumst. Sed ac tempor felis. Pellentesque dictum turpis a leo suscipit, nec ullamcorper magna tincidunt. Maecenas vel tellus non orci suscipit bibendum. Aenean porta purus turpis, a luctus nulla ultrices vitae. Nulla eleifend mollis libero, a pellentesque eros eleifend ut. Proin sodales felis sed tortor placerat, sed facilisis nisi vehicula.</p>
                        
                        {!! $long_desc !!}

                        <!-- Author Profile Section -->
                        <div class="bp-author-profile">
                            <div class="bp-author-profile-image">
                                <img src="{{ asset('images/1606478490.Adam_Smith.jpg') }}" alt="{{ strtolower(str_replace('-', ' ', $author_name)) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $author_name))) }}">
                            </div>
                            <div class="bp-author-profile-content">
                                <h3 class="bp-author-profile-heading">{{ $author_name }}</h3>
                                <p class="bp-author-profile-description">Written by the Rigid Box Pro Team, specialists in custom rigid boxes and luxury packaging solutions.<br>We share industry insights, design inspiration, and expert guidance to help brands create<br>packaging that leaves a lasting impression.</p>
                                <a href="#" class="bp-author-profile-social">
                                    <i class="fab fa-linkedin"></i> LinkedIn
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="bp-sidebar">
                    <div class="bp-sidebar-sticky">
                        <!-- Sidebar is now empty, form moved to right column -->
                    </div>
                </aside>

            </div>

            <!-- Related Posts Section -->
            <div class="bp-related-posts" style="margin-top: 60px;">
                <h2 class="bp-related-title">Related Posts</h2>
                
                <div class="bp-related-grid" id="bp-related-slider">
                    @foreach($related_blogs as $related)
                        @php
                            $relatedTitle = $related->blog_title;
                            $relatedAlt = $related->alt_tag ?: $relatedTitle;
                        @endphp
                        <article class="bp-related-card">
                            <a href="{{ url('blog/'.$related->blog_url) }}" class="bp-related-link">
                                <div class="bp-related-image">
                                    <img src="{{ asset('images/'.$related->image) }}" alt="{{ strtolower($relatedAlt) }}" title="{{ $relatedTitle }}" loading="lazy">
                                </div>
                                <div class="bp-related-content">
                                    <div class="bp-related-meta">
                                        <span class="bp-related-author">{{ $related->author_name }}</span>
                                        <span class="bp-related-date">{{ date('M d, Y', strtotime($related->date)) }}</span>
                                    </div>
                                    <h3 class="bp-related-card-title">{{ $relatedTitle }}</h3>
                                    <p class="bp-related-excerpt">{{ strip_tags(Str::limit($related->long_description, 150)) }}</p>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>
                
                <!-- Slider Dots (Mobile Only) -->
                <div class="bp-slider-dots" id="bp-slider-dots" style="display: none;">
                    <button class="bp-slider-dot active" data-slide="0"></button>
                    <button class="bp-slider-dot" data-slide="1"></button>
                    <button class="bp-slider-dot" data-slide="2"></button>
                </div>
            </div>
        </div>
    </main>


<script>
/* Keep the page exactly below the fixed header on desktop and mobile. */
(function () {
    const header = document.getElementById('site-header');
    if (!header) return;

    const syncHeaderHeight = function () {
        const height = Math.ceil(header.getBoundingClientRect().height);
        document.documentElement.style.setProperty('--bp-header-h', height + 'px');
    };

    syncHeaderHeight();
    window.addEventListener('load', syncHeaderHeight, { once: true });
    window.addEventListener('resize', syncHeaderHeight, { passive: true });

    if ('ResizeObserver' in window) {
        new ResizeObserver(syncHeaderHeight).observe(header);
    }
})();
</script>

<script>
/* Desktop quote card: follow the reader and stop before related posts. */
(function () {
    const quote = document.querySelector('.bp-hero-right > .bp-quote-widget');
    const relatedPosts = document.querySelector('.bp-related-posts');
    const desktop = window.matchMedia('(min-width: 1080px)');
    if (!quote || !relatedPosts) return;

    let startY = 0;
    let quoteWidth = 0;
    let ticking = false;

    function topOffset() {
        const headerHeight = parseFloat(getComputedStyle(document.documentElement)
            .getPropertyValue('--bp-header-h')) || 0;
        return headerHeight + 16;
    }

    function measure() {
        quote.classList.remove('bp-quote-is-following');
        quote.style.width = '';
        quote.style.left = '';
        quote.style.top = '';
        quote.style.transform = '';

        const rect = quote.getBoundingClientRect();
        startY = rect.top + window.scrollY;
        quoteWidth = rect.width;
        update();
    }

    function update() {
        ticking = false;

        if (!desktop.matches) {
            quote.classList.remove('bp-quote-is-following');
            quote.style.width = '';
            quote.style.left = '';
            quote.style.top = '';
            quote.style.transform = '';
            return;
        }

        const stickyTop = topOffset();
        if (window.scrollY + stickyTop < startY) {
            quote.classList.remove('bp-quote-is-following');
            quote.style.width = '';
            quote.style.left = '';
            quote.style.top = '';
            quote.style.transform = '';
            return;
        }

        const columnRect = quote.parentElement.getBoundingClientRect();
        const stopAt = relatedPosts.getBoundingClientRect().top - 24;
        const overlap = Math.min(0, stopAt - stickyTop - quote.offsetHeight);

        quote.classList.add('bp-quote-is-following');
        quote.style.width = quoteWidth + 'px';
        quote.style.left = columnRect.left + 'px';
        quote.style.top = stickyTop + 'px';
        quote.style.transform = 'translateY(' + overlap + 'px)';
    }

    function requestUpdate() {
        if (ticking) return;
        ticking = true;
        window.requestAnimationFrame(update);
    }

    window.addEventListener('scroll', requestUpdate, { passive: true });
    window.addEventListener('resize', measure, { passive: true });
    window.addEventListener('load', measure, { once: true });
    measure();
})();
</script>

<script>
(function () {
    const tocLinks = document.querySelectorAll('.bp-toc-item');
    if (!tocLinks.length) return;

    const sections = Array.from(tocLinks)
        .map(link => {
            const id = link.getAttribute('href').replace('#', '');
            return document.getElementById(id);
        })
        .filter(Boolean);

    if (!sections.length) return;

    function onScroll() {
        const scrollY = window.scrollY + 160;

        let current = sections[0];
        sections.forEach(sec => {
            if (sec.offsetTop <= scrollY) current = sec;
        });

        tocLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current.id) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
})();

// Related Posts Slider (Mobile Only - Manual Scroll)
(function() {
    // No automatic functionality - user scrolls manually
    // Pure CSS handles the horizontal scrolling
})();

// File input handler for visual feedback
(function() {
    const fileInput = document.querySelector('.bp-quote-form input[type="file"]');
    const uploadLabel = document.querySelector('.bp-quote-upload-input');
    if (fileInput && uploadLabel) {
        fileInput.addEventListener('change', function() {
            if (this.files.length > 0) {
                uploadLabel.value = this.files[0].name;
            } else {
                uploadLabel.value = 'No file chosen';
            }
        });
    }
})();

// AJAX Form Submission for Instant Quote
document.addEventListener('DOMContentLoaded', function() {
    const quoteForm = document.getElementById('bp-instant-quote-form');
    const successMsg = document.getElementById('bp-quote-success-msg');
    
    if (quoteForm) {
        quoteForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = quoteForm.querySelector('.bp-quote-submit');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            const formData = new FormData(quoteForm);
            
            fetch(quoteForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                successMsg.classList.remove('is-error');
                successMsg.textContent = 'Thank you for the inquiry, our sales representative will contact soon!';
                successMsg.style.display = 'block';
                quoteForm.reset();
                
                const uploadLabel = quoteForm.querySelector('.bp-quote-upload-input');
                if (uploadLabel) uploadLabel.value = 'No file chosen';
                
                setTimeout(() => {
                    successMsg.style.display = 'none';
                }, 5000);
            })
            .catch(error => {
                console.error('Error:', error);
                successMsg.classList.add('is-error');
                successMsg.textContent = 'Sorry, something went wrong. Please try again.';
                successMsg.style.display = 'block';
            })
            .finally(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }
});
</script>

@include('web/components_cta_banner')
@include('web/footer')
