@include('web/header')

<style>
/* =========================================================
   BLOG PAGE — FIGMA MATCHED / RESPONSIVE
   ========================================================= */

*, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html,
body {
    width: 100%;
    min-height: 100%;
    overflow-x: hidden;
}

body {
    background: #1a1a1a;
    color: #fff;
    font-family: Inter, "Segoe UI", Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
}

/* Header file already controls body top offset on mobile.
   This script below sets the correct value dynamically. */

/* =========================
   HERO
   ========================= */

.blog-hero {
    position: relative;
    width: 100%;
    height: 340px;
    min-height: 340px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.blog-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            to bottom,
            rgba(0,0,0,.38) 0%,
            rgba(0,0,0,.54) 55%,
            rgba(0,0,0,.82) 100%
        );
    z-index: 0;
}

.blog-hero-inner {
    position: relative;
    z-index: 1;
    width: 100%;
    max-width: 1380px;
    height: 100%;
    margin: 0 auto;
    padding: 34px 55px;
    display: flex;
    flex-direction: column;
}

.blog-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 13px;
    color: #cccccc;
    margin-bottom: 66px;
    align-self: flex-start;
}



.blog-hero-content {
    flex: 1;
    width: 100%;
    max-width: 650px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding-bottom: 5px;
}

.blog-hero-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #f5c542;
    border-radius: 999px;
    padding: 6px 20px;
    margin-bottom: 14px;
    color: #f5c542;
    font-size: 10px;
    font-weight: 700;
    line-height: 1;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.blog-hero-heading {
    margin: 0 0 12px;
    color: #fff;
    font-size: 42px !important;
    font-weight: 800;
    line-height: 1.16 !important;
    letter-spacing: 0;
    text-align: center;
}

.blog-hero-gold {
    color: #f5c542;
}

.blog-hero-subtext {
    max-width: 590px;
    margin: 0;
    color: #c5c5c5;
    font-size: 16px !important;
    line-height: 1.65 !important;
    text-align: center;
}

/* =========================
   MAIN CONTAINER
   ========================= */

.blog-layout {
    width: 100%;
    max-width: 1380px;
    margin: 0 auto;
    padding: 48px 55px 70px;
}

.blog-section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 24px;
    margin-bottom: 32px;
}

.blog-section-title {
    position: relative;
    margin: 0;
    padding-bottom: 9px;
    color: #fff;
    font-size: 24px !important;
    font-weight: 800;
    line-height: 1.2 !important;
}

.blog-section-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 82px;
    height: 3px;
    background: #f5c542;
}

.blog-search-wrap {
    width: 320px;
    max-width: 100%;
    height: 42px;
    padding: 0 16px;
    border: 1px solid #303030;
    border-radius: 999px;
    background: #242424;
    display: flex;
    align-items: center;
    gap: 10px;
}

.blog-search-wrap i {
    color: #f5c542;
    font-size: 13px;
}

.blog-search-wrap input {
    width: 100%;
    min-width: 0;
    border: 0;
    outline: 0;
    background: transparent;
    color: #fff;
    font: inherit;
    font-size: 13px;
}

.blog-search-wrap input::placeholder {
    color: #777;
}

/* =========================
   POST COMMON
   ========================= */

.blog-post-img {
    width: 100%;
    overflow: hidden;
    border-radius: 8px;
    background-color: #242424;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.blog-post-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    width: 100%;
}

.blog-post-author,
.blog-post-date {
    color: #a7a7a7;
    font-size: 11px;
    line-height: 1.3;
}

.blog-post-author a {
    color: inherit;
    text-decoration: none;
}

.blog-post-desc {
    display: -webkit-box;
    overflow: hidden;
    color: #a8a8a8;
    font-size: 13px !important;
    line-height: 1.65 !important;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}

/* =========================
   TOP FEATURED ROW
   ========================= */

.blog-top-row {
    display: grid;
    grid-template-columns: minmax(0, 1.08fr) minmax(0, .92fr);
    gap: 28px;
    margin-bottom: 42px;
}

.blog-post-large {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 12px;
    cursor: pointer;
}

.blog-post-large-img {
    aspect-ratio: 16 / 9;
    min-height: 0;
}

.blog-post-large-body {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.blog-post-large-title {
    margin: 0;
    color: #fff;
    font-size: 20px !important;
    font-weight: 800;
    line-height: 1.35 !important;
}

.blog-post-small-stack {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.blog-post-small {
    min-width: 0;
    display: grid;
    grid-template-columns: 44% minmax(0, 1fr);
    gap: 16px;
    align-items: center;
    cursor: pointer;
}

.blog-post-small-img {
    aspect-ratio: 1.38 / 1;
    height: auto;
}

.blog-post-small-body {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 7px;
}

.blog-post-small-title {
    margin: 0;
    color: #fff;
    font-size: 15px !important;
    font-weight: 700;
    line-height: 1.42 !important;
}

/* =========================
   GRID + SIDEBAR
   ========================= */

.blog-sidebar-row {
    display: grid;
    grid-template-columns: minmax(0, 1fr) 300px;
    gap: 34px;
    align-items: start;
}

.blog-grid {
    min-width: 0;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 34px 28px;
}

.blog-card {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 11px;
    cursor: pointer;
    transition: transform .25s ease;
}

.blog-card:hover {
    transform: translateY(-3px);
}

.blog-card-img {
    aspect-ratio: 16 / 9;
}

.blog-card-body {
    display: flex;
    flex-direction: column;
    gap: 7px;
}

.blog-card-title {
    margin: 0;
    color: #fff;
    font-size: 16px !important;
    font-weight: 700;
    line-height: 1.4 !important;
}

/* =========================
   SIDEBAR
   ========================= */

.blog-sidebar {
    min-width: 0;
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.blog-sidebar-widget {
    width: 100%;
    padding: 20px;
    border: 1px solid rgba(245,197,66,.25);
    border-radius: 9px;
    background: #222;
}

.blog-widget-title {
    margin: 0 0 16px;
    display: flex;
    align-items: center;
    gap: 9px;
    color: #fff;
    font-size: 15px !important;
    font-weight: 700;
    line-height: 1.2 !important;
}

.blog-widget-title i {
    color: #f5c542;
}

.blog-cat-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.blog-cat-item {
    display: flex;
    align-items: center;
    gap: 12px;
    color: #d0d0d0;
    font-size: 13px;
    cursor: pointer;
}

.blog-cat-dot {
    width: 36px;
    height: 36px;
    flex: 0 0 36px;
    border-radius: 50%;
    background: #666;
}

.blog-quote-form {
    display: flex;
    flex-direction: column;
    gap: 9px;
}

.blog-quote-form input,
.blog-quote-form textarea {
    width: 100%;
    border: 1px solid #333;
    border-radius: 6px;
    outline: 0;
    background: #1a1a1a;
    color: #fff;
    padding: 11px 12px;
    font: inherit;
    font-size: 12px;
}

.blog-quote-form input:-webkit-autofill,
.blog-quote-form input:-webkit-autofill:hover,
.blog-quote-form input:-webkit-autofill:focus,
.blog-quote-form textarea:-webkit-autofill,
.blog-quote-form textarea:-webkit-autofill:hover,
.blog-quote-form textarea:-webkit-autofill:focus {
    -webkit-text-fill-color: #fff;
    -webkit-box-shadow: 0 0 0px 1000px #1a1a1a inset;
    transition: background-color 5000s ease-in-out 0s;
}

.blog-quote-form textarea {
    min-height: 76px;
    resize: vertical;
}

.blog-quote-form input:focus,
.blog-quote-form textarea:focus {
    border-color: #f5c542;
}

.blog-quote-btns {
    display: flex;
    gap: 8px;
    margin-top: 2px;
}

.blog-quote-btn,
.blog-quote-cancel {
    flex: 1;
    min-height: 38px;
    border-radius: 999px;
    font: inherit;
    font-size: 11px;
    font-weight: 700;
    cursor: pointer;
}

.blog-quote-btn:focus,
.blog-quote-cancel:focus {
    outline: none;
}

.blog-quote-btn {
    border: 1px solid #f5c542;
    background: #f5c542;
    color: #111;
}

.blog-quote-cancel {
    border: 1px solid #f5c542;
    background: transparent;
    color: #f5c542;
}

/* =========================
   PAGINATION
   ========================= */

.blog-pagination {
    margin-top: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    flex-wrap: wrap;
}

.blog-page-btn,
.blog-page-num {
    border: 1px solid #333;
    border-radius: 6px;
    background: #242424;
    color: #aaa;
    font: inherit;
    font-size: 12px;
    font-weight: 600;
    cursor: pointer;
}

.blog-page-btn {
    min-height: 36px;
    padding: 0 14px;
    display: inline-flex;
    align-items: center;
    gap: 7px;
}

.blog-page-numbers {
    display: flex;
    align-items: center;
    gap: 7px;
}

.blog-page-num {
    width: 36px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.blog-page-num.active {
    border-color: #f5c542;
    background: #f5c542;
    color: #111;
}

.blog-page-dots {
    color: #666;
    font-size: 12px;
}

/* =========================
   TABLET
   ========================= */

@media (max-width: 1100px) {
    .blog-layout {
        padding-inline: 28px;
    }

    .blog-hero-inner {
        padding-inline: 28px;
    }

    .blog-sidebar-row {
        grid-template-columns: minmax(0, 1fr) 260px;
        gap: 26px;
    }

    .blog-post-small {
        grid-template-columns: 42% minmax(0, 1fr);
    }
}

/* =========================
   MOBILE — FIGMA MATCH
   ========================= */

@media (max-width: 768px) {
    .blog-layout,
    .blog-content,
    .blog-top-row,
    .blog-post-large,
    .blog-post-large-body,
    .blog-sidebar-row,
    .blog-grid,
    .blog-card,
    .blog-card-body {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
    }

    .blog-layout {
        margin: 0 !important;
        overflow: hidden;
    }

    .blog-post-img,
    .blog-post-large-img,
    .blog-card-img {
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0 !important;
    }

    .blog-post-large-title,
    .blog-card-title,
    .blog-post-desc {
        max-width: 100% !important;
        white-space: normal !important;
        overflow-wrap: anywhere !important;
    }

    .blog-hero {
        height: 340px;
        min-height: 340px;
        background-position: center center;
    }

    .blog-hero-inner {
        height: 100%;
        padding: 18px 16px 26px;
    }

    .blog-breadcrumb {
        align-self: flex-start;
        font-size: 12px;
        margin: 0 0 20px;
        gap: 7px;
    }

    .blog-bc-current {
        font-size: 12px;
        line-height: 18px;
    }

    .blog-bc-home,
    .blog-bc-home svg {
        width: 15px;
        height: 15px;
        font-size: 13px;
    }

    .blog-hero-content {
        max-width: 390px;
        padding: 18px 0 0;
    }

    .blog-hero-badge {
        padding: 5px 15px;
        margin-bottom: 10px;
        font-size: 9px;
        letter-spacing: 1.6px;
    }

    .blog-hero-heading {
        margin-bottom: 10px;
        font-size: 24px !important;
        line-height: 1.18 !important;
    }

    .blog-hero-subtext {
        max-width: 340px;
        font-size: 13px !important;
        line-height: 1.55 !important;
    }

    .blog-layout {
        padding: 24px 12px 40px;
    }

    .blog-section-header {
        margin-bottom: 22px;
        flex-direction: column;
        align-items: stretch;
        gap: 14px;
    }

    .blog-section-title {
        align-self: flex-start;
        font-size: 18px !important;
        padding-bottom: 8px;
    }

    .blog-section-title::after {
        width: 64px;
        height: 2px;
    }

    .blog-search-wrap {
        width: 100%;
        height: 46px;
        padding-inline: 15px;
    }

    .blog-search-wrap input {
        font-size: 13px;
    }

    .blog-top-row {
        display: block;
        margin-bottom: 24px;
    }

    .blog-post-large {
        gap: 9px;
    }

    .blog-post-large-img {
        aspect-ratio: 16 / 9.5;
    }

    .blog-post-large-title {
        font-size: 15px !important;
        line-height: 1.4 !important;
    }

    .blog-post-small-stack {
        display: none;
    }

    .blog-sidebar-row {
        display: block;
        margin: 0;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 22px;
    }

    .blog-card {
        gap: 9px;
    }

    .blog-card-img {
        aspect-ratio: 16 / 9.5;
    }

    .blog-card-title {
        font-size: 15px !important;
        line-height: 1.4 !important;
    }

    .blog-post-desc {
        font-size: 12px !important;
        line-height: 1.55 !important;
        -webkit-line-clamp: 2;
    }

    .blog-post-author,
    .blog-post-date {
        font-size: 10px;
    }

    .blog-sidebar {
        display: none;
    }

    .blog-pagination {
        margin-top: 28px;
        gap: 6px;
        flex-wrap: nowrap;
        justify-content: center;
    }

    .blog-page-btn {
        min-height: 32px;
        padding: 0 8px;
        border: 0;
        background: transparent;
        font-size: 10px;
        white-space: nowrap;
    }

    .blog-page-numbers {
        gap: 5px;
    }

    .blog-page-num {
        width: 30px;
        height: 30px;
        font-size: 10px;
    }

    .blog-page-dots {
        padding-inline: 2px;
        font-size: 10px;
    }
}

@media (max-width: 390px) {
    .blog-hero {
        height: 330px;
        min-height: 330px;
    }

    .blog-hero-heading {
        font-size: 22px !important;
    }

    .blog-layout {
        padding-inline: 10px;
    }

    .blog-pagination {
        transform: scale(.96);
        transform-origin: center;
    }
}
</style>

<script>
(function () {
    function setBlogHeaderOffset() {
        var header = document.getElementById('site-header');
        if (!header) return;

        var height = Math.ceil(header.getBoundingClientRect().height);
        document.body.style.setProperty('padding-top', height + 'px', 'important');
    }

    setBlogHeaderOffset();
    window.addEventListener('load', setBlogHeaderOffset);
    window.addEventListener('resize', setBlogHeaderOffset);
})();
</script>

<section
    class="blog-hero"
    style="background-image:url('{{ asset('uploads/box-packing.png') }}');"
>
    <div class="blog-hero-inner">
        @include('web.components.breadcrumb', [
            'class' => 'blog-breadcrumb',
            'items' => [
                ['label' => 'Blogs']
            ]
        ])

        <div class="blog-hero-content">
           

            <h1 class="blog-hero-heading">
                Insights, <span class="blog-hero-gold">Trends</span> &amp;<br>
                <span class="blog-hero-gold">Packaging</span> Inspiration
            </h1>

            <p class="blog-hero-subtext">
                Explore expert insights, industry trends, and packaging ideas to help your brand
                create memorable customer experiences and stay ahead of the competition.
            </p>
        </div>
    </div>
</section>

<div class="blog-layout">
    <main class="blog-content">

        <div class="blog-section-header">
            <h2 class="blog-section-title">Our Blogs</h2>

            <label class="blog-search-wrap" for="blogSearch">
                <i class="fas fa-search"></i>
                <input type="search" id="blogSearch" placeholder="Search blogs">
            </label>
        </div>

        @if(isset($top_blog) && count($top_blog) > 0)
            <div class="blog-top-row">
                @php $featured = $top_blog[0]; @endphp

                <article
                    class="blog-post-large"
                    onclick="window.location.href='{{ url('blog/'.$featured->blog_url) }}'"
                >
                    <div
                        class="blog-post-img blog-post-large-img"
                        style="background-image:url('{{ asset('images/'.$featured->image) }}');"
                    ></div>

                    <div class="blog-post-large-body">
                        <div class="blog-post-meta">
                            <span class="blog-post-author">
                                <a
                                    href="{{ url('author/'.urlencode($featured->author_name)) }}"
                                    onclick="event.stopPropagation();"
                                >
                                    {{ $featured->author_name }}
                                </a>
                            </span>

                            <span class="blog-post-date">
                                {{ date('M d, Y', strtotime($featured->date)) }}
                            </span>
                        </div>

                        <h3 class="blog-post-large-title">
                            {{ $featured->blog_title }}
                        </h3>

                        <p class="blog-post-desc">
                            {!! strip_tags(Str::limit($featured->long_description, 150)) !!}
                        </p>
                    </div>
                </article>

                @if(count($top_blog) > 1)
                    <div class="blog-post-small-stack">
                        @foreach($top_blog->slice(1, 2) as $side)
                            <article
                                class="blog-post-small"
                                onclick="window.location.href='{{ url('blog/'.$side->blog_url) }}'"
                            >
                                <div
                                    class="blog-post-img blog-post-small-img"
                                    style="background-image:url('{{ asset('images/'.$side->image) }}');"
                                ></div>

                                <div class="blog-post-small-body">
                                    <div class="blog-post-meta">
                                        <span class="blog-post-author">
                                            <a
                                                href="{{ url('author/'.urlencode($side->author_name)) }}"
                                                onclick="event.stopPropagation();"
                                            >
                                                {{ $side->author_name }}
                                            </a>
                                        </span>

                                        <span class="blog-post-date">
                                            {{ date('M d, Y', strtotime($side->date)) }}
                                        </span>
                                    </div>

                                    <h3 class="blog-post-small-title">
                                        {{ $side->blog_title }}
                                    </h3>

                                    <p class="blog-post-desc">
                                        {!! strip_tags(Str::limit($side->long_description, 90)) !!}
                                    </p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif
            </div>
        @endif

        <div class="blog-sidebar-row">

            <div class="blog-grid" id="blogGrid">
                @if(isset($all_blog) && count($all_blog) > 0)
                    @foreach($all_blog as $blog_item)
                        <article
                            class="blog-card"
                            onclick="window.location.href='{{ url('blog/'.$blog_item->blog_url) }}'"
                        >
                            <div
                                class="blog-post-img blog-card-img"
                                style="background-image:url('{{ asset('images/'.$blog_item->image) }}');"
                            ></div>

                            <div class="blog-card-body">
                                <div class="blog-post-meta">
                                    <span class="blog-post-author">
                                        <a
                                            href="{{ url('author/'.urlencode($blog_item->author_name)) }}"
                                            onclick="event.stopPropagation();"
                                        >
                                            {{ $blog_item->author_name }}
                                        </a>
                                    </span>

                                    <span class="blog-post-date">
                                        {{ date('M d, Y', strtotime($blog_item->date)) }}
                                    </span>
                                </div>

                                <h3 class="blog-card-title">
                                    {{ $blog_item->blog_title }}
                                </h3>

                                <p class="blog-post-desc">
                                    {!! strip_tags(Str::limit($blog_item->long_description, 150)) !!}
                                </p>
                            </div>
                        </article>
                    @endforeach
                @endif
            </div>

            <aside class="blog-sidebar">

            
                <div class="blog-sidebar-widget">
                    <h3 class="blog-widget-title">
                        <i class="fas fa-bolt"></i>
                        Instant Quote
                    </h3>

                    @if(Session::has('success'))
                        <div style="background:#28a745;color:#fff;padding:10px 12px;border-radius:6px;margin-bottom:10px;font-size:12px;">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form class="blog-quote-form" id="sidebarQuoteForm" action="{{ url('submit-quote') }}" method="POST">
                        @csrf

                        <input type="hidden" name="source" value="Blog sidebar quote form">
                        <input type="hidden" name="page_url" value="{{ url()->current() }}">

                        <input type="text" name="name" placeholder="Name" required>
                        <input type="email" name="email" placeholder="Email" required>
                        <input type="tel" name="phone" placeholder="Phone number" required>
                        <textarea name="message" placeholder="Message" required></textarea>

                        <div class="blog-quote-btns">
                            <button type="submit" class="blog-quote-btn">Get a Quote</button>
                            <button
                                type="button"
                                class="blog-quote-cancel"
                                onclick="window.location.href='tel:18005189441'"
                            >
                                Call Us
                            </button>
                        </div>
                        <div id="sidebarQuoteStatus" style="display:none; margin-top:10px; padding:10px; border-radius:6px; font-size:12px; text-align:center;"></div>
                    </form>
                </div>

            </aside>
        </div>

        @if(isset($all_blog) && count($all_blog) > 6)
            <div class="blog-pagination">
                <button class="blog-page-btn" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                    Previous
                </button>

                <div class="blog-page-numbers">
                    <button class="blog-page-num active">1</button>
                    <button class="blog-page-num">2</button>
                    <button class="blog-page-num">3</button>
                    <span class="blog-page-dots">...</span>
                    <button class="blog-page-num">9</button>
                    <button class="blog-page-num">10</button>
                </div>

                <button class="blog-page-btn" id="nextBtn">
                    Next
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        @endif

    </main>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var searchInput = document.getElementById('blogSearch');
    var searchablePosts = document.querySelectorAll('.blog-card, .blog-post-large, .blog-post-small');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            var query = this.value.trim().toLowerCase();

            searchablePosts.forEach(function (post) {
                var titleNode = post.querySelector(
                    '.blog-card-title, .blog-post-large-title, .blog-post-small-title'
                );

                var descNode = post.querySelector('.blog-post-desc');
                var title = titleNode ? titleNode.textContent.toLowerCase() : '';
                var desc = descNode ? descNode.textContent.toLowerCase() : '';

                post.style.display =
                    !query || title.includes(query) || desc.includes(query)
                        ? ''
                        : 'none';
            });
        });
    }

    var pageNums = Array.from(document.querySelectorAll('.blog-page-num'));
    var prevBtn = document.getElementById('prevBtn');
    var nextBtn = document.getElementById('nextBtn');
    var currentIndex = 0;

    function setActive(index) {
        if (!pageNums.length) return;

        currentIndex = Math.max(0, Math.min(index, pageNums.length - 1));

        pageNums.forEach(function (button, buttonIndex) {
            button.classList.toggle('active', buttonIndex === currentIndex);
        });
    }

    pageNums.forEach(function (button, index) {
        button.addEventListener('click', function () {
            setActive(index);
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            setActive(currentIndex - 1);
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            setActive(currentIndex + 1);
        });
    }

    const sidebarQuoteForm = document.getElementById('sidebarQuoteForm');
    const sidebarQuoteStatus = document.getElementById('sidebarQuoteStatus');

    if (sidebarQuoteForm) {
        sidebarQuoteForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = sidebarQuoteForm.querySelector('.blog-quote-btn');
            const originalBtnText = submitBtn ? submitBtn.textContent : '';

            if (sidebarQuoteStatus) {
                sidebarQuoteStatus.style.display = 'none';
                sidebarQuoteStatus.style.background = 'transparent';
                sidebarQuoteStatus.style.border = 'none';
                sidebarQuoteStatus.style.color = '#fff';
                sidebarQuoteStatus.textContent = '';
            }

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Submitting...';
            }

            try {
                const response = await fetch(sidebarQuoteForm.action, {
                    method: 'POST',
                    body: new FormData(sidebarQuoteForm),
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                if (!response.ok) {
                    throw new Error('Unable to submit quote');
                }

                const result = await response.json();
                sidebarQuoteForm.reset();

                if (sidebarQuoteStatus) {
                    sidebarQuoteStatus.textContent = result.message || 'Thank you! Your quote request has been submitted.';
                    sidebarQuoteStatus.style.background = 'rgba(245, 197, 66, 0.12)';
                    sidebarQuoteStatus.style.border = '1px solid rgba(245, 197, 66, 0.34)';
                    sidebarQuoteStatus.style.color = '#f5c542';
                    sidebarQuoteStatus.style.display = 'block';
                }
            } catch (error) {
                if (sidebarQuoteStatus) {
                    sidebarQuoteStatus.textContent = 'Sorry, something went wrong. Please try again.';
                    sidebarQuoteStatus.style.background = 'rgba(255, 85, 85, 0.12)';
                    sidebarQuoteStatus.style.border = '1px solid rgba(255, 85, 85, 0.34)';
                    sidebarQuoteStatus.style.color = '#ff8b8b';
                    sidebarQuoteStatus.style.display = 'block';
                }
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalBtnText;
                }
            }
        });
    }
});
</script>
@include('web/components_cta_banner')

@include('web/footer')
