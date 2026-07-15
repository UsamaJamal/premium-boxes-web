@include('web/header')

    <!--  -->

    <style>



    </style>


<style>

.page-title>span {
    padding-left: 18px;
    background-color: #fff;
    z-index: 1;
    
    position: relative;
    padding-right: 18px;
    color: #001936;
    font-size: 24px;
    font-weight: 900;
}
    

.page-title{
    padding: 2px 0;
    font-weight: 700;
    
    font-size: 24px;
    border-left: 5px solid #0f5fa3;
    position: relative;
    text-transform: uppercase;
    margin-bottom: 25px;
    margin-top: 65px;
    line-height: 26px;
}
.page-title {
    margin-top: 15px;
}


.page-title:after{
    content: '';
    width: 100%;
    height: 0;
    border-bottom: 1px dotted #b7b7b7;
    position: absolute;
    display: block;
    top: 12px;
    right: 0;
}


h4.entry-title {
    font-size: 22px;
    line-height: 24px;
    clear: both;
    word-wrap: break-word;
    color: #333;
    font-weight: 700;
    margin-top: 10px;
    margin-bottom: 10px;
}
.pb-blogs-page .post {
    margin-bottom: 25px;
}
.blog-news-pic {
    overflow: hidden;
    display: block;
}

.blog-news-pic>a>img {
    transition: all .3s;
    transform: scale(1);
    width: 100%;
}
.pb-blogs-page .post .entry-title a{
    text-transform: uppercase;
    font-size: 17px;
    font-weight: 700;
    color: #001936;
}
.pb-blogs-page .post .entry-title a:hover{
    color: #0e649b;
}
.blog-news-pic:hover>a>img{
    transform: scale(1.1);
}
.pb-blogs-page .pb-post-meta .newspaper-x-category {
    padding: 3px 7px 3px 10px;
    line-height: 25px;
    font-weight: 400;
    background: #0a396d;
}
 .pb-blogs-page .pb-post-meta .pb-post-date {
    line-height: 25px;
    font-weight: 400;
    margin-left: 13px;
    font-size: 12px;
    
    color: #bfbfbf;
}
.pb-blogs-page .pb-post-meta .newspaper-x-category a {
    color: #fff;
    font-size: 13px;
}
article.post p {
    font-size: 15px;
    overflow: hidden;
    color: #8b8d91;
    font-weight: 400;
    line-height: 25px;
    margin-top: 10px;
}
.pb-blogs-page .pb-post-meta .newspaper-x-category:hover {
    background: #0e649b;
    text-decoration: none;
}
</style>
    
</head>

<body>
   




    
    <!-- ========================= Featured-product Area Start ========================= -->


    <!-- ========================= category start Area Start ========================= -->

   

    <div id="content" class="site-content py-sm-5 py-4">


        <div class="container">
            <div class="row">
                <header class="col-12">
                    <h3 class="page-title"><span>Blogs</span></h3>
                </header>
            </div>
            <div class="row blog">
                <div id="primary" class="newspaper-x-content pb-blogs-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <main id="main" class="site-main" role="main">
                        <div class="row">
                            <?php if(count($searchblog)<1){ ?>
                            		<div class="col-lg-4 col-md-4 px-1"></div>
                            		<div class="col-lg-4 col-md-4 px-1 pd-50">
                            			<center><h3>No Results Found!!</h3></center>
                            		</div>
                            		<div class="col-lg-4 col-md-4 px-1"></div>
                            	<?php } ?>
                            @foreach($searchblog as $blogs)
                            <div class="col-md-6">
                                <article  class=" post     ">
                                    <header class="entry-header">
                                        <div class="blog-news-pic">
                                            <a href="{{url($blogs->blog_url). "/"}}" rel="bookmark">
                                                <img
                                                    
                                                    src="{{url('images/'.$blogs->image)}}"
                                                    class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                                    alt=""
                                                />
                                            </a>
                                        </div>
                                        <?php 
                                                $str2 = $blogs->blog_title; 
                                                $str2 = wordwrap($str2, 70); 
                                                $str2 = explode("\n", $str2); 
                                                $str2 = $str2[0] ; 
                                            ?>
                                                
                                        <h4 class="entry-title"><a href="{{url($blogs->blog_url)}}/" rel="bookmark"><?php 
                                                echo substr($str2, 0, 50). '....'; 
                                               ?></a></h4>
                                        <div class="pb-post-meta">
                                            <div>
                                                <span class="newspaper-x-category"> <a href="#">{{ $blogs->author_name }}</a></span><span class="pb-post-date">{{ $blogs->date }} </span>
                                            </div>
                                        </div>
                                    </header>
                                    <div class="entry-content">
                                        <?php 
                                                $str2 = $blogs->long_description; 
                                                $str2 = wordwrap($str2, 200); 
                                                $str2 = explode("\n", $str2); 
                                                $str2 = $str2[0] ; 
                                            ?>
                                                
                                        <p>
                                            <?php 
                                                echo substr($str2, 0, 200). '....'; 
                                               ?>
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
