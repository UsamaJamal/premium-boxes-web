@include('web/header')

    <div class="hero-wrap" style="background-image: url('{{url('images/'.$category['0']->bimage)}}'); background-attachment: fixed;">
        <div class="overlay-masthead"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-left fadeInUp ftco-animated">
                    @include('web.components.breadcrumb', [
                        'items' => [
                            ['label' => 'Our Products']
                        ]
                    ])
                    <h1 class="mb-3 bread">Our Products</h1>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- ========================= Featured-product Area Start ========================= -->


    <!-- ========================= category start Area Start ========================= -->

   

    <div id="content" class="site-content py-sm-5 py-4">


        <div class="container">
            <div class="row">
                <header class="col-12">
                    <h3 class="page-title"><span>Our Products</span></h3>
                </header>
            </div>
            <div class="row blog">
                <div id="primary" class="newspaper-x-content pb-blogs-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <div class="row">
                            
                            @foreach($all_product as $products)
                            
                            <div class="col-md-3">
                                <article  class=" post     ">
                                    <header class="entry-header">
                                        <div class="blog-news-pic">
                                            <a href="{{ url($products->url)."/" }}" rel="bookmark">
                                                <img
                                                    
                                                    src="{{url('images/'.$products->image)}}"
                                                    class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                                    alt="{{ $products->altname }}"
                                                />
                                            </a>
                                        </div>
                                        <h4 class="entry-title"><a href="{{ url($products->url) }}" rel="bookmark">{{ $products->title }}</a></h4>
                                        <div class="pb-post-meta">
                                            <div>
                                                <span class="newspaper-x-category"> 
                                                    @foreach($category as $main)
                                                    @if($main->cat_id == $products->cat_id)
                                                    <a href="{{ url($main->category_url)."/" }}">{{ $main->name }}</a>
                                                    @endif
                                                    @endforeach
                                                </span><span class="pb-post-date">{{ $products->title }}</span>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="entry-content">
                                        <p>
                                            <?php echo $products->description; ?>
                                        </p>
                                    </div>
                                    <footer class="entry-footer"></footer>
                                </article>
                            </div>
                            
                            @endforeach
                            
                        </div>
                        <div class="row"></div>
                    </main>
                </div>
            </div>
            
        </div>
     
    </div>
    


    <!-- ========================= category start Area End ========================= -->
    
@include('web/footer')
