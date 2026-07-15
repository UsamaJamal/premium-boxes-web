@include('web.header')

<style>
/* Sitemap Dark Theme Styles */
body {
    background-color: #121212;
    color: #f5f5f5;
    font-family: "Inter", sans-serif;
}

.sitemap-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 60px 20px;
}

.sitemap-main-title {
    text-align: center;
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 60px;
    color: #ffffff;
    font-family: "Outfit", sans-serif;
}

.sitemap-section {
    margin-bottom: 50px;
}

.sitemap-section-title {
    font-size: 22px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    font-family: "Outfit", sans-serif;
}

.sitemap-section-title::before {
    content: '';
    display: inline-block;
    width: 6px;
    height: 24px;
    background-color: #f5c542; /* Golden indicator */
    margin-right: 12px;
}

.sitemap-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.sitemap-grid-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.sitemap-grid-1 {
    display: grid;
    grid-template-columns: 1fr;
}

.sitemap-sub-title {
    font-size: 16px;
    font-weight: 700;
    color: #ffffff;
    margin-bottom: 15px;
    font-family: "Outfit", sans-serif;
}

.sitemap-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sitemap-list li {
    margin-bottom: 10px;
}

.sitemap-list a {
    color: #c5c5c5;
    text-decoration: none;
    font-size: 14px;
    transition: color 0.2s ease;
    display: inline-block;
}

.sitemap-list a:hover {
    color: #f5c542;
}

.sitemap-list a::before {
    content: '\203A'; /* right pointing single quotation mark */
    margin-right: 8px;
    color: #f5c542;
    font-weight: bold;
}

@media (max-width: 768px) {
    .sitemap-grid-3, .sitemap-grid-2 {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="sitemap-container">
    <h1 class="sitemap-main-title">Sitemap</h1>

    <!-- Pages Section -->
    <div class="sitemap-section">
        <h2 class="sitemap-section-title">Pages</h2>
        <div class="sitemap-grid-1">
            <ul class="sitemap-list">
                <li><a href="{{ url('/') }}/">Home</a></li>
                <li><a href="{{ url('/about-us') }}/">About Us</a></li>
                <li><a href="{{ url('/contact-us') }}/">Contact Us</a></li>
                @foreach($dynamic_pages as $page)
                    <li><a href="{{ url($page->page_url) }}/">{{ $page->page_title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Top Categories Section -->
    @foreach($top_categories as $top_cat)
    <div class="sitemap-section">
        <h2 class="sitemap-section-title">{{ $top_cat->name }}</h2>
        
        <div class="sitemap-grid-3">
            @if(isset($grouped_sub_cats[$top_cat->cat_id]))
                @foreach($grouped_sub_cats[$top_cat->cat_id] as $sub_cat)
                    <div>
                        <h3 class="sitemap-sub-title">{{ $sub_cat->name }}</h3>
                        @if(isset($grouped_prods[$sub_cat->cat_id]))
                            <ul class="sitemap-list">
                                @foreach($grouped_prods[$sub_cat->cat_id] as $prod)
                                    <li><a href="{{ url($prod->url) }}/">{{ $prod->title }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                @endforeach
            @else
                <!-- If top category has direct products -->
                @if(isset($grouped_prods[$top_cat->cat_id]))
                    <div>
                        <ul class="sitemap-list">
                            @foreach($grouped_prods[$top_cat->cat_id] as $prod)
                                <li><a href="{{ url($prod->url) }}/">{{ $prod->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            @endif
        </div>
    </div>
    @endforeach

    <!-- Blogs Section -->
    <div class="sitemap-section">
        <h2 class="sitemap-section-title">Blogs</h2>
        <div class="sitemap-grid-2">
            <!-- Split blogs into two columns manually or just let CSS grid handle it if we make it a list -->
            <!-- Actually, if we just output a single ul with CSS grid, or output two divs -->
            <ul class="sitemap-list" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px 30px;">
                @foreach($blogs as $blog)
                    <li><a href="{{ url('/blog/' . $blog->blog_url) }}/">{{ $blog->blog_title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@include('web.footer')
