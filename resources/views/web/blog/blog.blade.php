@include('web/header')

<style>
*, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

html, body {
    width: 100%;
    min-height: 100%;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background-color: #1a1a1a;
    color: #ffffff;
    -webkit-font-smoothing: antialiased;
}

body {
    padding-top: 115px !important;
}


.blog-hero {
    position: relative;
    width: 100%;
    min-height: 360px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 72px 40px 56px;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
.blog-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.65);
    z-index: 0;
}
.blog-hero > * { position: relative; z-index: 1; }

/* Breadcrumb wrapper */
.blog-hero-wrap {
    position: absolute;
    top: 24px;
    left: 50%;
    transform: translateX(-50%);
    width: 100%;
    max-width: 1400px;
    padding: 0 48px;
    z-index: 2;
}

.blog-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 14px;
    color: #cccccc;
}
.blog-bc-home {
    font-size: 14px;
    color: #c9a84c;
    cursor: pointer;
    line-height: 1;
    display: flex;
    align-items: center;
    transition: color .25s;
}
.blog-bc-home:hover { color: #fff; }
.blog-bc-sep     { color: #888; font-size: 14px; line-height: 1; display: flex; align-items: center; }
.blog-bc-current { color: #ddd; font-weight: 500; cursor: pointer; font-size: 14px; line-height: 1; display: flex; align-items: center; }

.blog-hero-content { display: flex; flex-direction: column; align-items: center; }

.blog-hero-badge {
    border: 1.5px solid #c9a84c;
    color: #c9a84c;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 6px 24px;
    border-radius: 50px;
    margin-bottom: 20px;
    background: transparent;
    cursor: pointer;
    transition: background-color .25s, color .25s, box-shadow .25s;
}
.blog-hero-badge:hover {
    background-color: #c9a84c;
    color: #000;
    box-shadow: 0 0 14px rgba(201,168,76,.5);
}

.blog-hero-heading {
    font-size: clamp(28px, 3.5vw, 48px);
    font-weight: 800;
    line-height: 1.2;
    color: #ffffff;
    margin-bottom: 16px;
}
.blog-hero-gold { color: #F5C542; }

.blog-hero-subtext {
    font-size: 16px;
    color: #C5C5C5;
    line-height: 1.75;
    max-width: 580px;
}


.blog-layout {
    max-width: 1400px;
    margin: 0 auto;
    padding: 52px 48px 100px;
}


.blog-section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 36px;
    gap: 20px;
}

.blog-section-title {
    font-size: 24px;
    font-weight: 800;
    color: #fff;
    padding-bottom: 8px;
    border-bottom: 3px solid #c9a84c;
    display: inline-block;
}

.blog-search-wrap {
    display: flex;
    align-items: center;
    gap: 10px;
    background-color: #242424;
    border: 1px solid #333;
    border-radius: 8px;
    padding: 10px 18px;
    transition: border-color .25s;
}
.blog-search-wrap:focus-within { border-color: #c9a84c; }
.blog-search-wrap i { color: #c9a84c; font-size: 14px; }
.blog-search-wrap input {
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    font-size: 14px;
    font-family: inherit;
    width: 220px;
}
.blog-search-wrap input::placeholder { color: #555; }


.blog-post-img {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-color: #242424;
    border-radius: 10px;
}


.blog-top-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    margin-bottom: 48px;
    align-items: stretch;
}

.blog-post-large { display: flex; flex-direction: column; gap: 14px; cursor: pointer; }
.blog-post-large-img { width: 100%; flex: 1; min-height: 300px; }
.blog-post-large-body { display: flex; flex-direction: column; gap: 8px; }
.blog-post-large-title { font-size: 20px; font-weight: 800; color: #fff; line-height: 1.4; }

.blog-post-small-stack {
    display: flex;
    flex-direction: column;
    gap: 20px;
    height: 100%;
    justify-content: flex-start;
}
.blog-post-small { display: flex; gap: 16px; cursor: pointer; align-items: flex-start; }
.blog-post-small-img { width: 170px; min-width: 170px; height: 150px; flex-shrink: 0; }
.blog-post-small-body { display: flex; flex-direction: column; gap: 7px; }
.blog-post-small-title { font-size: 14px; font-weight: 700; color: #fff; line-height: 1.4; }

.blog-post-meta   { display: flex; align-items: center; gap: 14px; flex-wrap: wrap; }
.blog-post-author { font-size: 12px; color: #c9a84c; font-weight: 600; }
.blog-post-date   { font-size: 12px; color: #666; }
.blog-post-desc   { font-size: 13px; color: #aaa; line-height: 1.7; }


.blog-sidebar-row {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 36px;
    align-items: start;
    margin-top: 48px;
}


.blog-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 36px 28px;
}

.blog-card {
    display: flex;
    flex-direction: column;
    gap: 12px;
    cursor: pointer;
    transition: transform .25s;
}
.blog-card:hover { transform: translateY(-4px); }

.blog-card-img {
    width: 100%;
    aspect-ratio: 16 / 9;
}

.blog-card-body { display: flex; flex-direction: column; gap: 8px; }
.blog-card-title { font-size: 16px; font-weight: 700; color: #fff; line-height: 1.4; }


.blog-sidebar { display: flex; flex-direction: column; gap: 24px; align-self: start; }

.blog-sidebar-widget {
    margin-top: 18px;
    background-color: #202020;
    border-radius: 12px;
    padding: 22px;
    border: 1px solid #2e2e2e;
}
.blog-sidebar-widget:first-child {
    margin-top: -4px;
    height: 375px;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.blog-widget-title {
    font-size: 15px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 18px;
    display: flex;
    align-items: center;
    gap: 10px;
}
.blog-widget-title i { color: #c9a84c; }

.blog-cat-list { list-style: none; display: flex; flex-direction: column; gap: 40px; }
.blog-cat-item {
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 14px;
    color: #cccccc;
    cursor: pointer;
    transition: color .25s;
}
.blog-cat-item:hover { color: #c9a84c; }
.blog-cat-dot {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #5E5E5E;
    border: 1.5px solid #555;
    flex-shrink: 0;
}

/* Instant Quote form */
.blog-quote-form { display: flex; flex-direction: column; gap: 12px; }
.blog-quote-form input,
.blog-quote-form textarea {
    background-color: #1a1a1a;
    border: 1px solid #333;
    border-radius: 10px;
    color: #fff;
    font-size: 13px;
    padding: 18px 16px;
    outline: none;
    font-family: inherit;
    transition: border-color .25s;
    width: 100%;
    resize: none;
}
.blog-quote-form input::placeholder,
.blog-quote-form textarea::placeholder { color: #666; }
.blog-quote-form input:focus,
.blog-quote-form textarea:focus { border-color: #c9a84c; }
.blog-quote-form textarea { height: 110px; line-height: 1.5; }

.blog-quote-btns { display: flex; gap: 10px; margin-top: 6px; }
.blog-quote-btn {
    flex: 1;
    background-color: #F5C542;
    color: #000;
    border: none;
    padding: 16px 0;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    font-family: inherit;
    transition: background-color .25s;
}
.blog-quote-btn:hover { background-color: #e0bc60; }
.blog-quote-cancel {
    flex: 1;
    background-color: transparent;
    color: #F5C542;
    border: 1.5px solid #F5C542;
    padding: 16px 0;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    cursor: pointer;
    font-family: inherit;
    transition: background-color .25s, color .25s;
}
.blog-quote-cancel:hover { background-color: #F5C542; color: #000; }


.blog-pagination {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 52px;
    flex-wrap: wrap;
}
.blog-page-btn {
    background-color: transparent;
    border: 1px solid #333;
    color: #aaa;
    padding: 10px 20px;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    font-family: inherit;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: border-color .25s, color .25s;
}
.blog-page-btn:hover { border-color: #F5C542; color: #F5C542; }

.blog-page-numbers { display: flex; align-items: center; gap: 8px; }
.blog-page-num {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: transparent;
    border: 1px solid #333;
    border-radius: 8px;
    color: #aaa;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    font-family: inherit;
    transition: background-color .25s, color .25s, border-color .25s;
}
.blog-page-num:hover { border-color: #F5C542; color: #F5C542; }
.blog-page-num.active { background-color: #F5C542; color: #000; border-color: #F5C542; }
.blog-page-dots { color: #555; font-size: 14px; padding: 0 4px; }


@media (max-width: 1100px) {
    .blog-layout        { padding: 40px 32px 80px; }
    .blog-sidebar-row   { grid-template-columns: 1fr 260px; gap: 28px; }
    .blog-post-small-img { width: 140px; min-width: 140px; height: 130px; }
}


@media (max-width: 768px) {
    .blog-hero      { min-height: unset; padding: 10vw 5vw 9vw; }
    .blog-hero-wrap { display: none; }

    .blog-hero-content  { padding: 0 2vw; }
    .blog-hero-badge    { display: none; }
    .blog-hero-heading  { font-size: 7.5vw; line-height: 1.25; text-align: center; }
    .blog-hero-subtext  { font-size: 3.8vw; line-height: 1.75; text-align: center; max-width: 85vw; margin: 0 auto; }

    .blog-layout { padding: 6vw 4vw 15vw; }

    .blog-section-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 3.5vw;
        margin-bottom: 5vw;
    }
    .blog-section-title  { font-size: 5vw; }
    .blog-search-wrap    { width: 100%; border-radius: 50px; padding: 3vw 5vw; }
    .blog-search-wrap input { width: 100%; font-size: 3.8vw; }

    .blog-top-row           { grid-template-columns: 1fr; gap: 5vw; margin-bottom: 7vw; }
    .blog-post-small-stack  { display: none; }
    .blog-post-large-img    { min-height: 50vw; }
    .blog-post-large-title  { font-size: 5vw; }
    .blog-post-desc         { font-size: 3.5vw; }
    .blog-post-author, .blog-post-date { font-size: 3vw; }

    .blog-sidebar-row { grid-template-columns: 1fr; gap: 6vw; margin-top: 7vw; }
    .blog-sidebar     { order: 2; }
    .blog-grid        { grid-template-columns: 1fr; gap: 5vw; }
    .blog-card-title  { font-size: 4vw; }

    .blog-pagination  { margin-top: 9vw; gap: 2.5vw; }
    .blog-page-btn    { font-size: 3.5vw; padding: 2.5vw 5vw; }
    .blog-page-num    { width: 10vw; height: 10vw; font-size: 3.5vw; }
}



</style>

    <!-- Hero -->
    <section class="blog-hero" style="background-image: url('{{ isset($blog_main_banner[0]) ? asset('images/'.$blog_main_banner[0]->image) : asset('uploads/why-choise-us.png') }}');">
        <div class="blog-hero-wrap">
            <nav class="blog-breadcrumb">
                <span class="blog-bc-home" onclick="window.location.href='{{ url('/') }}'">&#8962;</span>
                <span class="blog-bc-sep">&#187;</span>
                <span class="blog-bc-current">Blog</span>
            </nav>
        </div>
        <div class="blog-hero-content">
            <button class="blog-hero-badge">BLOG</button>
            <h1 class="blog-hero-heading">Insights, <span class="blog-hero-gold">Trends</span> &amp;<br><span class="blog-hero-gold">Packaging</span> Inspiration</h1>
            <p class="blog-hero-subtext">Explore expert insights, industry trends, and packaging ideas to help your brand create memorable customer experiences and stay ahead of the competition.</p>
        </div>
    </section>

    <!-- Main Layout -->
    <div class="blog-layout">

        <main class="blog-content">

            <!-- Section Header -->
            <div class="blog-section-header">
                <h2 class="blog-section-title">Our Blogs</h2>
                <div class="blog-search-wrap">
                    <i class="fas fa-search"></i>
                    <input type="text" id="blogSearch" placeholder="Search blogs">
                </div>
            </div>

            <!-- Top Row -->
            @if(isset($top_blog) && count($top_blog) > 0)
            <div class="blog-top-row">
                @php $featured = $top_blog[0]; @endphp
                <article class="blog-post-large" onclick="window.location.href='{{ url('blog/'.$featured->blog_url).'/' }}'">
                    <div class="blog-post-img blog-post-large-img" style="background-image:url('{{ asset('images/'.$featured->image) }}');"></div>
                    <div class="blog-post-large-body">
                        <div class="blog-post-meta">
                            <span class="blog-post-author"><a href="{{ url('author/'.urlencode($featured->author_name)) }}" onclick="event.stopPropagation();" style="color:inherit; text-decoration:none;">{{ $featured->author_name }}</a></span>
                            <span class="blog-post-date">{{ date('M d, Y', strtotime($featured->date)) }}</span>
                        </div>
                        <h3 class="blog-post-large-title">{{ $featured->blog_title }}</h3>
                        <p class="blog-post-desc">{!! strip_tags(Str::limit($featured->long_description, 150)) !!}</p>
                    </div>
                </article>

                @if(count($top_blog) > 1)
                <div class="blog-post-small-stack">
                    @foreach($top_blog->slice(1, 2) as $side)
                    <article class="blog-post-small" onclick="window.location.href='{{ url('blog/'.$side->blog_url).'/' }}'">
                        <div class="blog-post-img blog-post-small-img" style="background-image:url('{{ asset('images/'.$side->image) }}');"></div>
                        <div class="blog-post-small-body">
                            <div class="blog-post-meta">
                                <span class="blog-post-author"><a href="{{ url('author/'.urlencode($side->author_name)) }}" onclick="event.stopPropagation();" style="color:inherit; text-decoration:none;">{{ $side->author_name }}</a></span>
                                <span class="blog-post-date">{{ date('M d, Y', strtotime($side->date)) }}</span>
                            </div>
                            <h3 class="blog-post-small-title">{{ $side->blog_title }}</h3>
                            <p class="blog-post-desc">{!! strip_tags(Str::limit($side->long_description, 80)) !!}</p>
                        </div>
                    </article>
                    @endforeach
                </div>
                @endif
            </div>
            @endif

            <!-- Blog Grid + Sidebar -->
            <div class="blog-sidebar-row">

                <div class="blog-grid" id="blogGrid">
                    @if(isset($all_blog) && count($all_blog) > 0)
                        @foreach($all_blog as $blog_item)
                        <article class="blog-card" onclick="window.location.href='{{ url('blog/'.$blog_item->blog_url).'/' }}'">
                            <div class="blog-post-img blog-card-img" style="background-image:url('{{ asset('images/'.$blog_item->image) }}');"></div>
                            <div class="blog-card-body">
                                <div class="blog-post-meta">
                                    <span class="blog-post-author"><a href="{{ url('author/'.urlencode($blog_item->author_name)) }}" onclick="event.stopPropagation();" style="color:inherit; text-decoration:none;">{{ $blog_item->author_name }}</a></span>
                                    <span class="blog-post-date">{{ date('M d, Y', strtotime($blog_item->date)) }}</span>
                                </div>
                                <h3 class="blog-card-title">{{ $blog_item->blog_title }}</h3>
                                <p class="blog-post-desc">{!! strip_tags(Str::limit($blog_item->long_description, 150)) !!}</p>
                            </div>
                        </article>
                        @endforeach
                    @endif
                </div>

                <!-- Sidebar -->
                <aside class="blog-sidebar">
                    @if(isset($all_category) && count($all_category) > 0)
                    <div class="blog-sidebar-widget">
                        <h3 class="blog-widget-title"><i class="fas fa-layer-group"></i> Popular Categories</h3>
                        <ul class="blog-cat-list">
                            @foreach($all_category as $cat)
                            <li class="blog-cat-item" onclick="window.location.href='{{ url('category/'.$cat->category_url).'/' }}'">
                                <span class="blog-cat-dot"></span> {{ $cat->name }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    <div class="blog-sidebar-widget">
                        <h3 class="blog-widget-title"><i class="fas fa-bolt"></i> Instant Quote</h3>
                        <form class="blog-quote-form">
                            <input type="email" placeholder="Email" required>
                            <input type="tel" placeholder="Phone number" required>
                            <textarea placeholder="Message" required></textarea>
                            <div class="blog-quote-btns">
                                <button type="submit" class="blog-quote-btn">Get a Quote</button>
                                <button type="button" class="blog-quote-cancel" onclick="window.location.href='tel:18005189441'">Call Us</button>
                            </div>
                        </form>
                    </div>
                </aside>

            </div>

            @if(isset($all_blog) && count($all_blog) > 6)
            <div class="blog-pagination">
                <button class="blog-page-btn" id="prevBtn"><i class="fas fa-chevron-left"></i> Previous</button>
                <div class="blog-page-numbers">
                    <button class="blog-page-num active">1</button>
                    <button class="blog-page-num">2</button>
                    <button class="blog-page-num">3</button>
                    <span class="blog-page-dots">...</span>
                </div>
                <button class="blog-page-btn" id="nextBtn">Next <i class="fas fa-chevron-right"></i></button>
            </div>
            @endif
  

        </main>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var searchInput = document.getElementById('blogSearch');
    var cards = document.querySelectorAll('.blog-card');

    if (searchInput) {
        searchInput.addEventListener('input', function () {
            var query = this.value.trim().toLowerCase();
            cards.forEach(function (card) {
                var title = card.querySelector('.blog-card-title').textContent.toLowerCase();
                var desc = card.querySelector('.blog-post-desc') ? card.querySelector('.blog-post-desc').textContent.toLowerCase() : '';
                card.style.display = (!query || title.includes(query) || desc.includes(query)) ? '' : 'none';
            });
        });
    }

    var pageNums = document.querySelectorAll('.blog-page-num');
    var prevBtn = document.getElementById('prevBtn');
    var nextBtn = document.getElementById('nextBtn');
    var currentPage = 1;

    pageNums.forEach(function (btn, i) {
        btn.addEventListener('click', function () {
            pageNums.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');
            currentPage = parseInt(btn.textContent) || (i + 1);
        });
    });

    if (prevBtn) {
        prevBtn.addEventListener('click', function () {
            if (currentPage > 1) {
                currentPage--;
                updateActive();
            }
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            if (currentPage < pageNums.length) {
                currentPage++;
                updateActive();
            }
        });
    }

    function updateActive() {
        pageNums.forEach(function (btn) {
            btn.classList.remove('active');
            if (parseInt(btn.textContent) === currentPage) {
                btn.classList.add('active');
            }
        });
    }

    // Sidebar quote form submit alert
    const sidebarQuoteForm = document.querySelector(".blog-quote-form");
    if (sidebarQuoteForm) {
        sidebarQuoteForm.addEventListener("submit", function(e) {
            e.preventDefault();
            alert("Thank you! Your quote request has been submitted.");
            this.reset();
        });
    }
});

</script>

@include('web/footer')

