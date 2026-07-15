@include('web/header')

<style>
/* ── SEARCH PAGE BASE ─────────────────────── */
.search-page {
    background-color: #1a1a1a;
    color: #ffffff;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    padding: 180px 40px 60px; /* Increased top padding to clear fixed header */
    min-height: 100vh;
}

.result-section {
    max-width: 1200px;
    margin: 0 auto 40px;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 24px;
}

.section-title {
    font-size: 20px;
    font-weight: 700;
    color: #ffffff;
    margin: 0;
}

.highlight {
    color: #d0a64d; /* Gold */
}

.found-badge {
    border: 1px solid #333;
    background-color: #242424;
    color: #d0a64d;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 16px;
    border-radius: 50px;
}

.section-divider {
    border-bottom: 1px solid #333;
    margin-top: 40px;
}

/* ── GRID LAYOUTS ─────────────────────────── */
.grid-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}
.grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

/* ── CATEGORY CARDS ───────────────────────── */
.cat-card {
    text-align: center;
    display: block;
    text-decoration: none;
}
.cat-card:hover { text-decoration: none; }
.cat-card .card-img {
    background-color: #252525;
    border-radius: 12px;
    aspect-ratio: 4/5;
    margin-bottom: 12px;
}
.cat-card .card-label {
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    margin: 0;
    transition: color 0.3s;
}
.cat-card:hover .card-label {
    color: #d0a64d;
}

/* ── PRODUCT CARDS ────────────────────────── */
.prod-card {
    text-align: center;
    display: block;
    text-decoration: none;
}
.prod-card:hover { text-decoration: none; }
.prod-card .prod-img {
    background-color: #252525;
    border: 1px solid #4a3e20; /* Subtle gold border */
    border-radius: 12px;
    aspect-ratio: 1/1;
    margin-bottom: 12px;
    transition: border-color 0.3s;
}
.prod-card:hover .prod-img {
    border-color: #d0a64d;
}
.prod-card .prod-label {
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    margin: 0;
    transition: color 0.3s;
}
.prod-card:hover .prod-label {
    color: #d0a64d;
}

/* ── BLOG CARDS ───────────────────────────── */
.blog-card {
    display: flex;
    flex-direction: column;
    text-decoration: none;
    transition: transform 0.3s;
}
.blog-card:hover {
    text-decoration: none;
    transform: translateY(-4px);
}
.blog-card .blog-img {
    border-radius: 8px;
    aspect-ratio: 16/9;
    margin-bottom: 12px;
    background-color: #252525;
}
.blog-body {
    padding-top: 4px;
}
.blog-meta {
    display: flex;
    justify-content: space-between;
    font-size: 11px;
    color: #888;
    margin-bottom: 8px;
}
.blog-author { color: #c9a84c; }
.blog-title {
    font-size: 15px;
    font-weight: 700;
    color: #ffffff;
    margin: 0 0 8px 0;
    line-height: 1.4;
    transition: color 0.3s;
}
.blog-card:hover .blog-title {
    color: #d0a64d;
}
.blog-desc {
    font-size: 12px;
    color: #aaaaaa;
    line-height: 1.6;
    margin: 0;
}

.mob-only { display: none; }
.mob-br { display: none; }

/* ── MOBILE RESPONSIVE ────────────────────── */
@media (max-width: 768px) {
    .search-page { padding: 100px 20px 30px; }
    .section-title { font-size: 18px; line-height: 1.3; }
    .mob-br { display: inline; }
    .found-badge { font-size: 10px; padding: 4px 12px; }

    .grid-4, .grid-3 { grid-template-columns: repeat(2, 1fr); gap: 12px; }
    
    .mob-only { display: flex; }
}
</style>

<div class="search-page">
    <?php 
    $total_found = count($search_categories ?? []) + count($search_products ?? []) + count($search_blogs ?? []);
    if($total_found == 0){ 
    ?>
        <div class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">{{ $search_text }}</span>"</h1>
                <span class="found-badge">0 Found</span>
            </div>
            <p style="color: #aaaaaa; text-align: center; margin-top: 40px; font-size: 16px;">Sorry, we couldn't find any results matching your search.</p>
        </div>
    <?php } else { ?>
    
        <!-- CATEGORY SECTION -->
        <?php if(isset($search_categories) && count($search_categories) > 0){ ?>
        <section class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">{{ $search_text }}</span>" In Category</h1>
                <span class="found-badge" id="catBadge">{{ count($search_categories) }} Found</span>
            </div>
            <div class="grid-4">
                <?php foreach($search_categories as $products){ ?>
                <a href="{{ url($products->category_url ?? '') }}/" class="cat-card">
                    <div class="card-img" style="background-image: url('{{url('images/'.$products->image)}}'); background-size: cover; background-position: center;"></div>
                    <p class="card-label">{{ $products->name }}</p>
                </a>
                <?php } ?>
            </div>
            <div class="section-divider"></div>
        </section>
        <?php } ?>

        <!-- PRODUCTS SECTION -->
        <?php if(isset($search_products) && count($search_products) > 0){ ?>
        <section class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">{{ $search_text }}</span>" In Products</h1>
                <span class="found-badge" id="prodBadge">{{ count($search_products) }} Found</span>
            </div>
            <div class="grid-4" id="prodGrid">
                <?php foreach($search_products as $products){ ?>
                <a href="{{ url($products->url ?? '') }}/" class="prod-card">
                    <div class="prod-img" style="background-image: url('{{url('images/'.$products->image)}}'); background-size: cover; background-position: center;"></div>
                    <p class="prod-label">{{ $products->title }}</p>
                </a>
                <?php } ?>
            </div>
            <div class="section-divider"></div>
        </section>
        <?php } ?>
        
        <!-- BLOGS SECTION -->
        <?php if(isset($search_blogs) && count($search_blogs) > 0){ ?>
        <section class="result-section">
            <div class="section-header">
                <h1 class="section-title">Search Results For "<span class="highlight">{{ $search_text }}</span>" In Blogs</h1>
                <span class="found-badge" id="blogBadge">{{ count($search_blogs) }} Found</span>
            </div>
            <div class="grid-3" id="blogGrid">
                <?php foreach($search_blogs as $blog){ ?>
                <a href="{{ url('blog/'.($blog->blog_url ?? '')) }}" class="blog-card">
                    <div class="blog-img" style="background-image: url('{{url('images/'.$blog->image)}}'); background-size: cover; background-position: center;"></div>
                    <div class="blog-body">
                        <div class="blog-meta"><span class="blog-author">{{ $blog->author_name ?? 'Admin' }}</span><span class="blog-date">{{ isset($blog->date) ? date('M d, Y', strtotime($blog->date)) : '' }}</span></div>
                        <h3 class="blog-title">{{ $blog->blog_title }}</h3>
                        <p class="blog-desc">{{ strip_tags(Str::limit($blog->long_description ?? '', 120)) }}</p>
                    </div>
                </a>
                <?php } ?>
            </div>
        </section>
        <?php } ?>

    <?php } ?>
</div>

@include('web/footer')
