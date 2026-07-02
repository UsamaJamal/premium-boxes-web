@include('web/header')


    <div id="pb-carousel-view" class="carousel slide" data-ride="carousel" data-interval="4000">
        <div class="carousel-inner">
            <?php $temp=0 ?>
            @foreach($home_banner as $banner)
            <?php $temp++; ?>
            <div class="carousel-item @if($temp==1) <?php echo "active" ?> @endif">
                <img class="d-block w-100" src="{{url('images/'.$banner->image)}}" alt="{{ $banner->image_tag }}" />
            </div>
            @endforeach
           
        </div>
        <a class="carousel-control-prev pre-arrow" href="#pb-carousel-view" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
        <a class="carousel-control-next next-arrow" href="#pb-carousel-view" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
    </div>
    
    
    <!-- ========================= Featured-product Area Start ========================= -->

     <!-- ========================= pb_shortRun_segment Area Start ========================= -->

    <section id="pb_shortRun_segment" class="py-sm-5 py-4">
        <div class="mainparagraph">
            <div class="container">
                <div class="col-md-12">
                    <div class=" text-center cmb_heading  head-3 pb-sm-2 pb-3">
                        <h1 class="text-center" >{{$home_content['0']->heading1}} </h1>
                     </div>
                    <p class="font-size-txt-center">
                        {{$home_content['0']->text}}
                    </p>
                    <img src="{{url('web/ourprocess.gif')}}" class="img-fluid"  />
                </div>
            </div>
        </div>
    </section>    

    <!-- ========================= pb_shortRun_segment Area Start ========================= -->

    <!-- ========================= Portfolio Area Start ========================= -->

    <section id="pb-portfolio-segment" class="py-sm-5 pt-4 text-center">
        <div class="container">

            <div class=" text-center cmb_heading  head-3 pb-sm-2 pb-3">
                <h1 class="text-center" >{{$home_content['0']->heading2}} </h1>
             </div>

            <div class="row mt-sm-4">
                <div class="col-md-6 col-sm-12">
                    <figure class="mx-auto d-block img-fluid portfolio-img mb-0 ">
                        <img  src="{{url('images/'.$show_home_1['0']->image)}}" class="img-fluid portfolio-lg-pic" alt="{{ $show_home_1['0']->image_tag}}" class="image" />
                        <div class="overlay">
                            <div class="text">
                                <div class="lightBlur-line"></div>
                                <h2 class="mob_fsiz-12">{{ $show_home_1['0']->name }}</h2>
                                <a href="{{url($show_home_1['0']->link)}}" class="btn hover-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10 ">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </figure>
                </div>
                
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="row">
                        <div class="col-6 p-right">
                            <figure class="img-fluid portfolio-img mb-md-0 mb-sm-3   mb-0  mb-0">
                                <img  src="{{url('images/'.$show_home_1['0']->image2)}}" class="img-fluid portfolio-md-pic" alt="{{ $show_home_1['0']->image_tag2 }}" />
                                <div class="overlay">
                                    <div class="text">
                                        <div class="lightBlur-line"></div>
                                        <h3 class="mb-0 mob_fsiz-12">{{ $show_home_1['0']->name2 }}</h3>
                                        <a href="{{url($show_home_1['0']->link2)}}" class="btn hover-btn small-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-6 p-left">
                            <figure class="img-fluid portfolio-img mb-md-0 mb-sm-3   mb-0">
                                <img  src="{{url('images/'.$show_home_1['0']->image3)}}" class="img-fluid portfolio-md-pic" alt="{{ $show_home_1['0']->image_tag3 }}" />
                                <div class="overlay">
                                    <div class="text">
                                        <div class="lightBlur-line"></div>
                                        <h3 class="mb-0 mob_fsiz-12">{{ $show_home_1['0']->name3 }}</h3>
                                        <a href="{{url($show_home_1['0']->link3)}}" class="btn hover-btn small-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <div class="spacer-20"></div>
                    <figure class="mx-auto d-block portfolio-img img-fluid  mb-0">
                        <img  src="{{url('images/'.$show_home_1['0']->image4)}}" class="img-fluid portfolio-md-pic" alt="{{ $show_home_1['0']->image_tag4 }}" />
                        <div class="overlay">
                            <div class="text">
                                <div class="lightBlur-line"></div>
                                <h2 class="mob_fsiz-12">{{ $show_home_1['0']->name4 }}</h2>
                                <a href="{{url($show_home_1['0']->link4)}}" class="btn hover-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
        <div class="container pt-sm-3">
            <!--<div class="text-center mt-sm-4 mt-3 mb-sm-0 mb-3">-->
            <!--    <a href="{{url('our-products')}}">-->
            <!--    <button   type="button"  class="btn-View-All"  >View all</button></a>-->
            <!--</div>-->
        </div>
    </section>

      <!-- ========================= Portfolio Area End ========================= -->

      
    <!-- ========================= Portfolio Area Start ========================= -->

    <section id="pb-portfolio-segment" class=" pt-sm-0 pt-3  text-center">
        <div class="container ">

            <div class=" text-center cmb_heading  head-3 pb-sm-2 pb-3">
                <h1 class="text-center" >{{$home_content['0']->heading3}} </h1>
             </div>

            <div class="row mt-sm-4">
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="row">
                        <div class="col-6 p-right">
                            <figure class="img-fluid portfolio-img mb-md-0 mb-sm-3   mb-3 ">
                                <img src="{{url('images/'.$show_home_2['0']->image)}}" class="img-fluid portfolio-md-pic" alt="{{ $show_home_2['0']->image_tag }}" />
                                <div class="overlay">
                                    <div class="text">
                                        <div class="lightBlur-line"></div>
                                        <h3 class="mb-0 mob_fsiz-12">{{ $show_home_2['0']->name }}</h3>
                                        <a href="{{ url($show_home_2['0']->link) }}" class="btn hover-btn small-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-6 p-left">
                            <figure class="img-fluid portfolio-img mb-md-0 mb-sm-3   mb-3">
                                <img  src="{{url('images/'.$show_home_2['0']->image2)}}" class="img-fluid portfolio-md-pic" alt="{{ $show_home_2['0']->image_tag2 }}" />
                                <div class="overlay">
                                    <div class="text">
                                        <div class="lightBlur-line"></div>
                                        <h3 class="mb-0 mob_fsiz-12">{{ $show_home_2['0']->name2 }}</h3>
                                        <a href="{{ url($show_home_2['0']->link2) }}" class="btn hover-btn small-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="spacer-20"></div>
                <div class="col-md-6 col-sm-12 ">
                    <figure class="mx-auto d-block portfolio-img img-fluid mb-md-0 mb-sm-3  mb-0">
                        <img  src="{{url('images/'.$show_home_2['0']->image3)}}" class="img-fluid portfolio-md-pic" alt="{{ $show_home_2['0']->image_tag3 }}" />
                        <div class="overlay">
                            <div class="text">
                                <div class="lightBlur-line"></div>
                                <h2 class="mob_fsiz-12">{{ $show_home_2['0']->name3 }}</h2>
                                <a href="{{ url($show_home_2['0']->link3) }}" class="btn hover-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                            </div>
                        </div>
                    </figure>
                </div>
            
            </div>
        </div>
        <div class="container pt-sm-3">
            <!--<div class=" text-center mt-sm-4 mt-3 mb-sm-0 mb-3">-->
            <!--    <a href="{{url('categories')}}">-->
            <!--    <button   type="button"  class="btn-View-All"  >View all</button></a>-->
            <!--</div>-->
        </div>
    </section>

      <!-- ========================= Portfolio Area End ========================= -->
    
    
	<div id="pb-testimonial-segment" class="pb-testimonial-segment  py-sm-5 py-4">
		<div class="container  pb-sm-4 pb-sm-0" style="max-width: 1140px; margin:  0 auto;">

            <div class=" text-center pb_heading  head-3 pb-sm-5 pb-3">
                <h1 class="text-left" >{{$home_content['0']->heading4}} </h1>
            </div>

             <div class="owl-carousel pb-relatedProd-slider">
               @foreach($products as $product)
               
                
               

                
                            
               <div class="item">
                    <div class="parent-card portfolio-img" style="position:relative">
                        <div class="img-wrapper">
                            <a href="{{url($product->url)}}"><img src="{{url('images/'.$product->image)}}" class="img-fluid" alt="{{ $product->altname }}" /></a>
                        </div>
                       
                        <div class="overlay ">
                            <div class="text">
                                <div class="lightBlur-line"></div>
                                <h2 class="mx-5 mob_fsiz-12">{{ $product->title }}</h2>
                                <a href="{{ $product->url }}" class="btn hover-btn service-btn Portfolio-btn portfolio-border-hover mob_fsize-10">LEARN MORE <i class="fas fa-angle-right"></i> </a>
                            </div>
                        </div>
                         <div class="product-name text-center remove-it">
                            <a href="{{ $product->url }}"><span>{{ $product->title }}</span></a>
                        </div>
                    </div>
                </div>
            
                  @endforeach
                
            </div>
		</div>
	</div>
    <!-- ========================= Featured-product Area Start ========================= -->

   
    
     <!-- ========================= Featured-product Area End ========================= -->
<div class="container" style="background-color: #efefef;">
    <div class="scroll_id" style="overflow:auto;width:100%;height:500px;padding: 15px 10px 15px 10px;">
         <?php echo $viewonweb[0]->description; ?>
    </div>
    <style>
    .scroll_id::-webkit-scrollbar {
  width: 10px;
}
 .scroll_id::-webkit-scrollbar-thumb {
  background: #49d8f7; 
  border-radius: 10px;
}
    </style>
</div>
    <!-- ========================= pb-testimonial-segment Area Start ========================= -->



	<div id="pb-testimonial-segment" class="pb-testimonial-segment  pb-sm-5 pb-5">
		<div class="container  pb-sm-4 pb-sm-0 max-wid-margin">


                <div class=" text-center cmb_heading  head-3 pb-sm-5 pb-3">
                   <h1 class="text-center" >Our Testimonial </h1>
                </div>
		
            <div class="owl-carousel pb-feedback-slider">
                @foreach($testimonial as $testimonials)
                <div class="item">
                    <div class="testimonial-block">
                        <i class="fas fa-quote-right fa-2x"></i>
                        <!--blockquote-->
                        <blockquote class="fixedtext"
 style="">{{$testimonials->comment}}
 <p class="color"><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span></p>
<span class="morecontent">&nbsp;</span>
<span class="moreellipses"><span>
</span>
&nbsp;&nbsp;
<a href="" class="morelink" style="color:#ff9800; display:none;">Show More</a></span>
              
              </blockquote>
              
              <style>
              .checked {
  color: orange;
}
                    .moreellipses {
    color:#234376 !important !important;
    font-size:16px !important;
}
.morecontent span {
    color:#234376 !important;
    font-size:16px !important;
}
#text{
display:none;
}
              </style>
                        <!--blockquote-->
                        <!--<blockquote>-->
                        <!--    <p class="px-sm-4 px-3">{{ $testimonials->comment }} </p>-->
                        <!--    <p class="color"><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span><span><i class="icon-star3"></i></span></p>-->
                        <!--</blockquote>-->
                    </div>
                    <div class="testimonial-box">
                        <div class="testimony-inner-part mt-sm-4 mt-3">
                            <span class="img-user" style="background-image: url('{{url('images/'.$testimonials->image)}}');"></span>
                        </div>
                        <div class="testimonial-inner-box-2">
                             <?php 
                                    if ($testimonials->star_rating == 1) { ?>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                               <?php } ?>
                                 <?php 
                                    if ($testimonials->star_rating == 2) { ?>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                               <?php } ?>
                                 <?php 
                                    if ($testimonials->star_rating == 3) { ?>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i><i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                               <?php } ?>
                                 <?php 
                                    if ($testimonials->star_rating == 4) { ?>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                               <?php } ?>
                                 <?php 
                                    if ($testimonials->star_rating == 5) { ?>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                                    <i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i><i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i><i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i><i class="fa fa-star" style="color: #f69b0f;" aria-hidden="true"></i>
                               <?php } ?>
                            <a href="#" class="d-block"><span>- {{ $testimonials->name }} </span></a>
                            <em class="user">{{ $testimonials->profile_link }}</em>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
		</div>
	</div>


    <!-- ========================= pb-testimonial-segment  Area End ========================= -->

    <!-- ========================= cmb_partners_area Area Start ========================= -->
           
        <div class="cmb_partners_area pb-sm-5 pt-sm-4 pb-4">
            <div class="text-center cmb_heading head-3 pb-sm-5 pb-3">
                <h1 class="text-center">Our Star Customers</h1>
            </div>
            <div class="container p-last">
                <div class="our-partners-logo">
                    <div class="owl-carousel owl-theme pb-customer-slider">
                          @foreach ($brand as $key) 
                        <div class="item">
                            <a href="{{url($key->url)}}"><img src="{{url('images/'.$key->image)}}" alt="" /></a>
                        </div>
                         @endforeach
                    
                    </div>
                </div>
            </div>
        </div>

  
    <!-- ========================= cmb_partners_area Area End ========================= -->


@include('web/footer')
 <script type="text/javascript">
    $(document).ready(function() {
// Configure/customize these variables.

var words = 250;  // How many characters are shown by default
var dots = "...";
var buttonmore = "Show More...";
var buttonless = "Show Less";
$('.fixedtext').each(function() {
var text = $(this).html();
if(text.length > words) {
var getfixedword = text.substr(0, words);
var showfixedword = text.substr(words, text.length - words);
var html = getfixedword + '<span class="moreellipses">' + dots+ '&nbsp;</span><span class="morecontent"><span style="display:none;">' +   showfixedword  + '</span> &nbsp;&nbsp;<a href="" class="morelink" style="color:#ffff;font-size: 12px;font-weight:700;padding: 6px 5px 6px 5px;background: #234376;text-decoration:none;">' + buttonmore + '</a></span>';
$(this).html(html);
}
});
$(".morelink").click(function(){
if($(this).hasClass("less")) {
$(this).removeClass("less");
$(this).html(buttonmore);
} else {
$(this).addClass("less");
$(this).html(buttonless);
}
$(this).parent().prev().toggle();
$(this).prev().toggle();
return false;
});
});
  </script>
    