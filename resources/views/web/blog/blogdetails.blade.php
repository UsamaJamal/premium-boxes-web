@include('web/header')

<style>
:root {
    --bp-max         : 1400px;
    --bp-px          : 48px;
    --bp-sp-bc       : 28px;
    --bp-sp-td       : 22px;
    --bp-sp-di       : 44px;
    --bp-bg          : #111111;
    --bp-surface     : #181818;
    --bp-card        : #1a1a1a;
    --bp-gold        : #c9a84c;
    --bp-gold-hov    : #e0bc60;
    --bp-text-head   : #ffffff;
    --bp-text-body   : #cccccc;
    --bp-text-meta   : #888888;
    --bp-border      : #2a2a2a;
    --bp-radius      : 12px;
}

*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: var(--bp-bg);
    color: var(--bp-text-head);
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
}

body { padding-top: 115px !important; }

.bp-container {
    width: 100%;
    max-width: var(--bp-max);
    margin-inline: auto;
    padding-inline: var(--bp-px);
}

.bp-hero {
    width: 100%;
    background-color: var(--bp-bg);
    padding-top: 52px;
    padding-bottom: 72px;
}

/* BREADCRUMB */
.bp-breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: var(--bp-text-meta);
    white-space: nowrap;
    margin-bottom: var(--bp-sp-bc);
}
.bp-bc-home { color: var(--bp-gold); font-size: 14px; text-decoration: none; line-height: 1; transition: color 0.2s; }
.bp-bc-home:hover { color: #fff; }
.bp-bc-sep  { color: #444; font-size: 10px; display: flex; align-items: center; }
.bp-bc-link { color: var(--bp-text-meta); text-decoration: none; font-size: 13px; transition: color 0.2s; }
.bp-bc-link:hover { color: var(--bp-gold); }
.bp-bc-current { color: #555; font-size: 13px; overflow: hidden; text-overflow: ellipsis; }

/* TWO-COLUMN HERO GRID */
.bp-hero-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    align-items: stretch;
}

/* LEFT COLUMN */
.bp-hero-left { display: flex; flex-direction: column; }

.bp-title {
    font-size: 38px;
    font-weight: 700;
    line-height: 1.1;
    color: var(--bp-text-head);
    letter-spacing: -0.5px;
    margin-bottom: var(--bp-sp-td);
}

.bp-desc {
    font-size: 16px;
    font-weight: 400;
    line-height: 1.8;
    color: var(--bp-text-body);
    margin-bottom: var(--bp-sp-di);
    max-width: 640px;
}

.bp-image {
    width: 100%;
    border-radius: var(--bp-radius);
    overflow: hidden;
    background-color: var(--bp-surface);
    border: 1px solid var(--bp-border);
    box-shadow: 0 12px 40px rgba(0,0,0,0.5);
}
.bp-image img {
    display: block;
    width: 100%;
    height: 420px;
    object-fit: cover;
    object-position: center;
}

/* RIGHT COLUMN */
.bp-hero-right {
    display: flex;
    flex-direction: column;
    height: 100%;
    align-items: flex-start;
}

.bp-spacer { flex: 1; }

.bp-share {
    margin-left: 200px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    gap: 12px;
    margin-top: 48px;
    margin-bottom: 0;
}
.bp-share-label {
    font-size: 13px;
    font-weight: 600;
    color: var(--bp-text-meta);
    letter-spacing: 0.4px;
    white-space: nowrap;
}
.bp-share-icons { display: flex; align-items: center; gap: 8px; }
.bp-share-btn {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background-color: #1e1e1e;
    border: 1px solid var(--bp-border);
    color: var(--bp-text-meta);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    text-decoration: none;
    transition: background-color 0.2s, border-color 0.2s, color 0.2s, transform 0.2s;
    flex-shrink: 0;
}
.bp-share-btn:hover {
    background-color: var(--bp-gold);
    border-color: var(--bp-gold);
    color: #000;
    transform: translateY(-2px);
}

.bp-author {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-left: -35px;
    border-radius: 10px;
    padding: 16px;
}
.bp-author-info { display: flex; flex-direction: column; gap: 5px; justify-content: center; }
.bp-author-name { font-size: 14px; font-weight: 700; color: var(--bp-text-head); }
.bp-author-meta-row { display: flex; align-items: center; gap: 8px; flex-wrap: nowrap; }
.bp-author-date { font-size: 12px; color: var(--bp-text-meta); white-space: nowrap; }
.bp-author-sep  { color: #444; font-size: 11px; }
.bp-author-read { font-size: 12px; color: var(--bp-text-meta); display: flex; align-items: center; gap: 4px; white-space: nowrap; }
.bp-author-read i { font-size: 11px; }

.bp-body { padding-bottom: 80px; }
.bp-body-grid { align-items: start; }
.bp-body-spacer { display: none; }

/* ARTICLE CONTENT */
.bp-article {
    padding-top: 40px;
    border-top: 1px solid var(--bp-border);
    width: 100%;
}
.bp-article p {
    font-size: 14px;
    font-weight: 400;
    line-height: 1.8;
    color: #999999;
    margin-bottom: 28px;
    text-align: justify;
    hyphens: auto;
    -webkit-hyphens: auto;
}
.bp-article p:last-child { margin-bottom: 0; }
.bp-article h1,.bp-article h2,.bp-article h3,.bp-article h4,.bp-article h5 {
    color: #fff;
    margin-bottom: 16px;
    margin-top: 28px;
    line-height: 1.3;
}
.bp-article ul, .bp-article ol {
    color: #999999;
    font-size: 14px;
    line-height: 1.8;
    margin-bottom: 28px;
    padding-left: 24px;
}

/* AUTHOR BIO */
.bp-bio {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    margin-top: 56px;
    padding-top: 40px;
    border-top: 1px solid #222222;
    width: 100%;
}
.bp-bio-avatar {
    width: 100px;
    height: 100px;
    min-width: 100px;
    border-radius: 50%;
    overflow: hidden;
    flex-shrink: 0;
    background: #2a2a2a;
    display: flex;
    align-items: center;
    justify-content: center;
}
.bp-bio-avatar i { font-size: 40px; color: var(--bp-gold); }
.bp-bio-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }
.bp-bio-content { display: flex; flex-direction: column; }
.bp-bio-name { font-size: 16px; font-weight: 700; color: #ffffff; display: block; margin-bottom: 10px; }
.bp-bio-text {
    font-size: 13px;
    color: #888888;
    line-height: 1.7;
    text-align: left;
    margin-bottom: 12px;
}

/* STICKY SIDEBAR */
.bp-sidebar { padding-top: 80px; margin-left: 100px; }
.bp-sidebar-sticky {
    position: sticky;
    top: 140px;
    display: flex;
    flex-direction: column;
    gap: 24px;
}
.bp-sidebar-widget {
    background-color: #161616;
    border: 1px solid var(--bp-border);
    border-radius: 12px;
    padding: 20px;
}
.bp-widget-title {
    font-size: 13px;
    font-weight: 700;
    color: var(--bp-text-head);
    letter-spacing: 0.3px;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 8px;
    padding-bottom: 12px;
    border-bottom: 1px solid var(--bp-border);
}
.bp-widget-title i { color: var(--bp-gold); font-size: 12px; }

/* TABLE OF CONTENTS */
.bp-toc-widget {
    background: none;
    border: none;
    border-radius: 0;
    padding: 0 0 0 16px;
    border-left: 2px solid #2e2e2e;
}
.bp-toc-heading {
    font-size: 22px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 0;
    line-height: 1.2;
}
.bp-toc-heading::after {
    content: '';
    display: block;
    width: 100%;
    height: 1px;
    background-color: #2e2e2e;
    margin-top: 16px;
    margin-bottom: 8px;
}
.bp-toc-list { display: flex; flex-direction: column; gap: 0; margin-top: 4px; }
.bp-toc-item {
    display: block;
    font-size: 14px;
    font-weight: 500;
    color: #777777;
    text-decoration: none;
    padding: 11px 0;
    line-height: 1.45;
    background: none;
    border: none;
    border-radius: 0;
    transition: color 0.2s;
}
.bp-toc-item:hover { color: #bbbbbb; }
.bp-toc-item.active { color: var(--bp-gold); }

/* POPULAR POSTS */
.bp-popular-widget {
    background: none;
    border: none;
    border-radius: 0;
    padding: 0;
    margin-top: 8px;
}
.bp-popular-widget .bp-widget-title {
    font-size: 22px;
    font-weight: 800;
    color: #ffffff;
    margin-bottom: 20px;
    display: block;
    border-bottom: none;
    padding-bottom: 0;
}
.bp-popular-widget .bp-widget-title i { display: none; }
.bp-popular-list { display: flex; flex-direction: column; gap: 0; }
.bp-popular-item {
    display: flex;
    align-items: center;
    gap: 16px;
    text-decoration: none;
    padding: 20px 0;
    border-bottom: 1px solid #222222;
    transition: opacity 0.2s;
}
.bp-popular-item:hover { opacity: 0.8; }
.bp-popular-item:first-child { padding-top: 0; }
.bp-popular-item:last-child  { border-bottom: none; padding-bottom: 0; }
.bp-popular-thumb {
    width: 80px;
    height: 80px;
    min-width: 80px;
    border-radius: 5px;
    background-size: cover;
    background-position: center;
    background-color: #1e1e1e;
    flex-shrink: 0;
}
.bp-popular-meta { display: flex; flex-direction: column; justify-content: center; overflow: hidden; gap: 6px; }
.bp-popular-title {
    font-size: 13.5px;
    font-weight: 500;
    color: #ffffff;
    line-height: 1.5;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.bp-popular-date { font-size: 11px; color: var(--bp-text-meta); }

.bp-mobile { display: none; }

@media (max-width: 960px) {
    :root { --bp-px: 32px; }
    .bp-hero-grid { grid-template-columns: 2fr 1fr; gap: 28px; }
    .bp-title { font-size: clamp(22px, 3.2vw, 34px); }
    .bp-image img { height: 340px; }
    .bp-sidebar { margin-left: 20px; }
    .bp-share { margin-left: 20px; }
}

@media (max-width: 680px) {
    :root { --bp-px: 5vw; --bp-sp-bc: 4.5vw; }
    .bp-hero { padding-top: 6vw; padding-bottom: 8vw; }
    .bp-desktop-grid { display: none; }
    .bp-mobile {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }
    .bp-mob-title {
        font-size: 6.5vw;
        font-weight: 800;
        line-height: 1.15;
        color: #ffffff;
        letter-spacing: -0.3px;
        margin-bottom: 4vw;
    }
    .bp-mob-desc {
        font-size: 3.8vw;
        line-height: 1.8;
        color: #cccccc;
        margin-bottom: 5vw;
        max-width: 85vw;
    }
    .bp-mob-meta-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 3vw;
        width: 100%;
        margin-bottom: 6vw;
    }
    .bp-mob-author { display: flex; align-items: center; gap: 2.5vw; flex-wrap: nowrap; flex-shrink: 1; min-width: 0; }
    .bp-mob-author-text { display: flex; align-items: center; flex-wrap: wrap; gap: 1.5vw; font-size: 3vw; color: #888888; line-height: 1; }
    .bp-mob-author-name { color: #ffffff; font-weight: 600; font-size: 3vw; }
    .bp-mob-sep  { color: #444; font-size: 2.8vw; }
    .bp-mob-date, .bp-mob-read { color: #888888; font-size: 3vw; }
    .bp-mob-share { display: flex; align-items: center; gap: 2vw; flex-shrink: 0; }
    .bp-mob-share-label { font-size: 3.3vw; font-weight: 600; color: #888888; white-space: nowrap; }
    .bp-mob-share-icons { display: flex; align-items: center; gap: 2vw; }
    .bp-mob-share-btn {
        width: 7.5vw;
        height: 7.5vw;
        border-radius: 50%;
        background-color: #1e1e1e;
        border: 1px solid #2a2a2a;
        color: #888888;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.8vw;
        text-decoration: none;
    }
    .bp-mob-image { width: 100%; border-radius: 2.5vw; overflow: hidden; margin: 0; border: 1px solid #2a2a2a; }
    .bp-mob-image img { display: block; width: 100%; height: 55vw; object-fit: cover; object-position: center; }
    .bp-body-grid { grid-template-columns: 1fr; }
    .bp-sidebar   { display: none; }
    .bp-spacer    { display: none; }
    .bp-article p { font-size: 3.8vw; }
    .bp-bio { flex-direction: column; align-items: flex-start; gap: 2.5vw; margin-top: 10vw; padding-top: 8vw; }
    .bp-bio-avatar { width: 20vw; height: 20vw; min-width: unset; }
    .bp-bio-name { font-size: 4.5vw; }
    .bp-bio-text { font-size: 3.8vw; line-height: 1.8; }
}

/* RELATED POSTS */
.bp-related-section {
    padding: 0 0 80px;
    background-color: var(--bp-bg);
}
.bp-related-heading {
    font-size: 20px;
    font-weight: 700;
    color: var(--bp-text-head);
    margin-bottom: 28px;
}
.bp-related-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    align-items: start;
}
.bp-related-card {
    display: flex;
    flex-direction: column;
    cursor: pointer;
    text-decoration: none;
    transition: transform 0.2s;
}
.bp-related-card:hover { transform: translateY(-3px); }
.bp-related-img {
    width: 100%;
    height: 200px;
    border-radius: 8px;
    background-size: cover;
    background-position: center;
    background-color: #1e1e1e;
    flex-shrink: 0;
    margin-bottom: 14px;
}
.bp-related-body { display: flex; flex-direction: column; gap: 8px; }
.bp-related-meta { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
.bp-related-author { font-size: 11px; color: var(--bp-text-meta); font-weight: 500; }
.bp-related-date   { font-size: 11px; color: var(--bp-text-meta); }
.bp-related-title {
    font-size: 14px;
    font-weight: 700;
    color: var(--bp-text-head);
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.bp-related-desc {
    font-size: 12px;
    color: var(--bp-text-meta);
    line-height: 1.65;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

@media (max-width: 768px) {
    .bp-related-section { padding: 10vw 0 15vw; }
    .bp-related-section .bp-container { padding-inline: 0; }
    .bp-related-heading { padding-inline: 5vw; font-size: 5vw; }
    .bp-related-grid {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        overflow-x: auto;
        gap: 4vw;
        padding: 1vw 5vw 5vw;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }
    .bp-related-grid::-webkit-scrollbar { display: none; }
    .bp-related-card { flex: 0 0 calc(100vw - 10vw); max-width: calc(100vw - 10vw); scroll-snap-align: start; }
    .bp-related-img   { height: 50vw; }
    .bp-related-title { font-size: 4vw; }
    .bp-related-desc  { font-size: 3.5vw; }
}

@media (min-width: 769px) and (max-width: 960px) {
    .bp-related-grid { grid-template-columns: repeat(2, 1fr); }
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
    <article class="bp-hero">
        <div class="bp-container">

            <!-- DESKTOP HERO GRID -->
            <div class="bp-hero-grid bp-desktop-grid">

                <!-- LEFT COLUMN -->
                <div class="bp-hero-left">

                    <nav class="bp-breadcrumb" aria-label="Breadcrumb">
                        <a href="{{ url('/') }}" class="bp-bc-home" aria-label="Home">
                            <i class="fas fa-house"></i>
                        </a>
                        <span class="bp-bc-sep"><i class="fas fa-chevron-right"></i></span>
                        <a href="{{ url('our-blog') }}" class="bp-bc-link">Blogs</a>
                        <span class="bp-bc-sep"><i class="fas fa-chevron-right"></i></span>
                        <span class="bp-bc-current">{{ Str::limit($blog_title, 50) }}</span>
                    </nav>

                    <h1 class="bp-title">{{ $blog_title }}</h1>

                    <p class="bp-desc">{{ $blog_desc }}</p>

                    <figure class="bp-image">
                        <img src="{{ $blog_image }}" alt="{{ $post->alt_tag }}" loading="eager">
                    </figure>

                </div>

                <!-- RIGHT COLUMN -->
                <div class="bp-hero-right">
                    <div class="bp-share">
                        <span class="bp-share-label">Share:</span>
                        <div class="bp-share-icons">
                            <a href="{{ $fb_share }}" target="_blank" class="bp-share-btn" aria-label="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $tw_share }}" target="_blank" class="bp-share-btn" aria-label="Share on Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $li_share }}" target="_blank" class="bp-share-btn" aria-label="Share on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="bp-spacer"></div>
                    <div class="bp-author">
                        <div class="bp-author-info">
                            <span class="bp-author-name">By <a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                            <div class="bp-author-meta-row">
                                <span class="bp-author-date">{{ $blog_date }}</span>
                                <span class="bp-author-sep">|</span>
                                <span class="bp-author-read"><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                        </div>
                    </div>
                    <div class="bp-spacer"></div>
                </div>

            </div>

            <!-- MOBILE HERO -->
            <div class="bp-mobile">

                <h1 class="bp-mob-title">{{ $blog_title }}</h1>

                <p class="bp-mob-desc">{{ $blog_desc }}</p>

                <div class="bp-mob-meta-row">
                    <div class="bp-mob-author">
                        <div class="bp-mob-author-text">
                            <span class="bp-mob-author-name">By <a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                            <span class="bp-mob-sep">|</span>
                            <span class="bp-mob-date">{{ $blog_date_short }}</span>
                            <span class="bp-mob-sep">|</span>
                            <span class="bp-mob-read"><i class="far fa-clock"></i> 5 min read</span>
                        </div>
                    </div>
                    <div class="bp-mob-share">
                        <span class="bp-mob-share-label">Share:</span>
                        <div class="bp-mob-share-icons">
                            <a href="{{ $fb_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $tw_share }}" target="_blank" class="bp-mob-share-btn" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="{{ $li_share }}" target="_blank" class="bp-mob-share-btn" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <figure class="bp-mob-image">
                    <img src="{{ $blog_image }}" alt="{{ $post->alt_tag }}" loading="eager">
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
                        {!! $long_desc !!}

                        <!-- AUTHOR BIO -->
                        <div class="bp-bio">
                            <div class="bp-bio-avatar">
                                <i class="fas fa-user-circle"></i>
                            </div>
                            <div class="bp-bio-content">
                                <span class="bp-bio-name"><a href="{{ url('author/'.urlencode($author_name)) }}" style="color:inherit; text-decoration:none;">{{ $author_name }}</a></span>
                                <p class="bp-bio-text">{{ $author_description }}</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="bp-sidebar">
                    <div class="bp-sidebar-sticky">

                        <!-- POPULAR POSTS -->
                        @if(isset($blog) && count($blog) > 0)
                        <div class="bp-sidebar-widget bp-popular-widget">
                            <h3 class="bp-widget-title">
                                <i class="fas fa-fire"></i> Popular Posts
                            </h3>
                            <div class="bp-popular-list">
                                @foreach($blog as $recent)
                                <a href="{{ url('blog/'.$recent->blog_url) }}" class="bp-popular-item">
                                    <div class="bp-popular-thumb" style="background-image:url('{{ asset('images/'.$recent->image) }}')"></div>
                                    <div class="bp-popular-meta">
                                        <span class="bp-popular-title">{{ $recent->blog_title }}</span>
                                        <span class="bp-popular-date">{{ date('M d, Y', strtotime($recent->date)) }}</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif

                    </div>
                </aside>

            </div>
        </div>
    </main>

    <!-- RELATED POSTS -->
    @if(isset($blog) && count($blog) > 0)
    <section class="bp-related-section">
        <div class="bp-container">
            <h2 class="bp-related-heading">Related Posts</h2>
            <div class="bp-related-grid">
                @foreach($blog->take(3) as $related)
                <article class="bp-related-card" onclick="window.location.href='{{ url('blog/'.$related->blog_url) }}'">
                    <div class="bp-related-img" style="background-image:url('{{ asset('images/'.$related->image) }}')"></div>
                    <div class="bp-related-body">
                        <div class="bp-related-meta">
                            <span class="bp-related-author"><a href="{{ url('author/'.urlencode($related->author_name)) }}" style="color:inherit; text-decoration:none;">{{ $related->author_name }}</a></span>
                            <span class="bp-related-date">{{ date('M d, Y', strtotime($related->date)) }}</span>
                        </div>
                        <h3 class="bp-related-title">{{ $related->blog_title }}</h3>
                        <p class="bp-related-desc">{!! strip_tags(Str::limit($related->long_description, 150)) !!}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif

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
</script>

@include('web/footer')