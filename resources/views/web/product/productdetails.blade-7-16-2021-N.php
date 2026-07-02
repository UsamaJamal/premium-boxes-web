@include('web/header')
   

    <style>
 

    </style>


   <!-- ========================= banner page Area Start ========================= -->

    <!-- <div class="hero-wrap" style="background-image: url('img/bg_6.jpg.webp'); background-attachment: fixed;">
        <div class="overlay-masthead"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-left fadeInUp ftco-animated">
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="{{url('/')}}">Home</a></span> <span>product page</span>
                    </p>
                    <h1 class="mb-3 bread">product page</h1>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- ========================= banner page Area End ========================= -->

     <!--================main wrapper =================-->

     <main id="pb-wrapper overflow-x-hidden">

    <!-- ========================= Product-info-features Area Start ========================= -->

        <section id="Product-info-features" class=" text-center">
             <div class="container">
                 <div class="row">

                    <div class="col-lg-6  text-center">
                        <div class="pb-prod-detail">
                            <div class="prod-items">
                              @foreach ($product as $user)
                       @php $images = json_decode($user->images,true); @endphp
                       @if(is_array($images) && !empty($images))
                       
                                <img class="prod-items-pic img-fluid" src="{{url('images/'.$images['0'])}}" alt="">
                       
                       @endif                           
                       @endforeach  
                            </div>
                            <div class="prod-sm-items owl-carousel">
                              @foreach ($product as $user)
                              @php $images = json_decode($user->images,true); @endphp
                                             @if(is_array($images) && !empty($images))
                                             @foreach ($images as $image)
                                <img  class="img-fluid" data-imgbigurl="{{url('images/'.$image)}}"
                                    src="{{url('images/'.$image)}}" alt="">
                                    @endforeach
                              @endif                           
                              @endforeach 
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 pb-prod-detail">
                        <h1 class="get-quote-title-2 text-left px-3">{{ $product['0']->title }}</h1>

                        <div class="qoute-innner">
                            <h2>{{ $product['0']->title }}</h2>
                            <p>
                                <?php echo $product['0']->description; ?>
                            </p>
                        </div>
                        
                        <div class="text-left">
                            <h1 class="get-quote-title"> GET A QUOTE</h1>
                            <form class="pb-formProd_style" id="quoteform" method="post" action="{{url('product-mail')}}">
                                @csrf
                                <div class="container-fluid">
                                     <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label for="">Name<span class="required">*</span></label><input type="text" name="p_name" value="" placeholder="Your Name *" required="" class="form-control product-form-inputs" />
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label for="">Email <span class="required">*</span></label>
                                            <input type="email" name="p_email" value="" placeholder="Your Email *" required="" style="border: 2px solid #000;"  class="form-control product-form-inputs" />
                                        </div>
                                        <div class="form-group col-md-12 col-12">
                                            <label for="">Stock <span class="required">*</span></label>
                                            <select class="form-control product-form-inputs" name="p_stock" required="" style="border: 2px solid #000;" >
                                                <option value="12pt Cardboard Stock">12pt Cardboard Stock</option>
                                                <option value="14pt Cardboard Stock">14pt Cardboard Stock</option>
                                                <option value="16pt Cardboard Stock">16pt Cardboard Stock</option>
                                                <option value="18pt Cardboard Stock">18pt Cardboard Stock</option>
                                                <option value="20pt Cardboard Stock">20pt Cardboard Stock</option>
                                                <option value="22pt Cardboard Stock">22pt Cardboard Stock</option>
                                                <option value="24pt Cardboard Stock">24pt Cardboard Stock</option>
                                                <option value="Kraft Stock">Kraft Stock</option>
                                                <option value="Recycled BuxBoard">Recycled BuxBoard</option>
                                                <option value="Corrugated Stock">Corrugated Stock</option>
                                                <option value="No Printing Required">No Printing Required</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label for="">Contact no<span class="required">*</span></label>
                                            <input type="text" name="p_phone" value="" placeholder="Contact no *" required="" style="border: 2px solid #000; color: #000;"  class="form-control product-form-inputs" />
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label for="">Box style <span class="required">*</span></label>
                                            <input type="text" name="p_boxname" value="{{ $product['0']->title }}" placeholder="Box Style" required="" class="form-control product-form-inputs" readonly="" />
                                        </div>
                                    
                                        <div class="clearfix"></div>
                                        <div class="form-group col-md-6 col-12">
                                            <label for="">color <span class="required">*</span></label>
                                            <select name="p_color" required="" class="form-control product-form-inputs">
                                                <option value="1 Color">1 Color</option>
                                                <option value="2 Color">2 Color</option>
                                                <option value="3 Color">3 Color</option>
                                                <option value="4 Color">4 Color</option>
                                                <option value="4/1 Color">4/1 Color</option>
                                                <option value="4/2 Color">4/2 Color</option>
                                                <option value="4/3 Color">4/3 Color</option>
                                                <option value="4/4 Color">4/4 Color</option>
                                                <option value="4 Color+PMS">4 Color+PMS</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label for="">type <span class="required">*</span></label>
                                            <select required="" name="p_type" class="form-control product-form-inputs">
                                                <option value="Get Quote">Get Quote</option>
                                                <option value="Get Template">Get Template</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 pr-lg-2 col-12">
                                            <label for="">Length<span class="required">*</span></label><input type="text" name="p_length" value="" placeholder="length *" required="" class="form-control product-form-inputs" />
                                        </div>
                                        <div class="form-group col-md-3 pr-lg-2 pl-lg-2 col-12">
                                            <label for="">width<span class="required">*</span></label><input type="text" name="p_width" value="" placeholder="width *" required="" class="form-control product-form-inputs" />
                                        </div>
                                        <div class="form-group col-md-3  pr-lg-2 pl-lg-2 col-12">
                                            <label for="">height<span class="required">*</span></label><input type="text" name="p_height" value="" placeholder="height *" required="" class="form-control product-form-inputs" />
                                        </div>
                                        <div class="form-group col-md-3 pl-lg-2 col-12">
                                            <label for="">Unit<span class="required">*</span></label>
                                            <select name="p_unit" class="form-control product-form-inputs">
                                                <option value="Inch">inch</option>
                                                <option value="cm">cm</option>
                                                <option value="mm">mm</option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                        <input type="hidden" name="pid" value="13" />
                                        <div class="col-md-4 col-sm-4 col-12 form-group">
                                            <label for="">Quantity<span class="required">*</span></label>
                                            <input type="text" name="p_qty1" id="qty" value="" placeholder="QTY1 Required" required="" class="form-control product-form-inputs" />
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-12 form-group">
                                            <label for="">Quantity1</label>
                                            <input type="text" name="p_qty2" id="qty" value="" placeholder="QTY2" class="form-control product-form-inputs" required/>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-12 form-group">
                                            <label for="">Quantity2</label>
                                            <input  type="text" name="p_qty3" id="qty" value="" placeholder="QTY3" class="form-control product-form-inputs" required/>
                                        </div>

                                        <!-- <div class="col-md-12 col-sm-12 col-12 " >
                                            <label for="" style="color: #000; display: inline-block;">Message</label>
                                     
                                            <textarea name="message" rows="4" cols="" class="h-auto form-control product-form-inputs ">Message</textarea>
                                            
                                        </div>
                                         -->
                                         
                                        
                                        <!-- <input type="submit" name="btnSubmit" value="Submit" class="d-block form-control block-level-btn" /> -->
                                        <div class="col-md-12 text-center  mb-4">
                                            <div class="col-md-6 form-group align-self-center">
                                            <!-- <center> -->
                                            
                                                <div class="g-recaptcha" id="recapchaheader"></div>
                                                    
                                                 
                                            <!-- </center> -->
                                        </div>
                                            <div class="text-center mt-sm-4 mt-3 mb-sm-0 mb-3">
                                                <button   type="submit"  class="btn-View-All"  >Submit</button>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                          </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 hidden-sm pro-icons text-center mt-sm-5 mt-4 mb-sm-4 ">
                        <div class="row">
                            <div class="col-6 col-sm-4 col-md-2 col-lg-2 pro-item">
                                <img src="{{url('web/img/icons/no-charges.png')}}" alt="Box Packaging" />
                                <p>
                                    <span class="blue-color"><strong>No</strong></span> die &amp;<br />
                                    Plate <span class="blue-color"><strong>Charges</strong></span>
                                </p>
                            </div>
                            <div class="pro-item col-6 col-sm-4  col-md-2 col-lg-2">
                                <img src="{{url('web/img/icons/quick-turnarround.png')}}" alt="Box Packaging" />
                                <p>
                                    Quick <span class="blue-color"><strong>Turnaround</strong></span> <br />
                                    Time
                                </p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2 pro-item col-lg-2">
                                <img src="{{url('web/img/icons/free-shipping.png')}}" alt="Box Packaging" />
                        
                                <p>
                                    <span class="blue-color"><strong>Free</strong></span><br />
                                    Shipping
                                </p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2 pro-item  col-lg-2">
                                <img src="{{url('web/img/icons/no-minimum-order.png')}}" alt="Box Packaging" />
                                <p>
                                    No <span class="blue-color"><strong> Minimum</strong></span> <br />
                                    <span class="blue-color"><strong>Order</strong></span>  Required
                                </p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2 pro-item col-lg-2">
                                <img src="{{url('web/img/icons/custom-size.png')}}" alt="Box Packaging" />
                                <p>
                                    Custom <span class="blue-color"><strong>Size </strong></span> <br />
                                    <span class="blue-color"><strong>&amp; </strong></span>  Style
                                </p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-2 pro-item col-lg-2">
                                <img src="{{url('web/img/icons/free-design.png')}}" alt="Box Packaging" />
                                <p>
                                    <span class="blue-color"><strong>Free</strong></span> Graphic<br />
                                    Designing
                                </p>
                            </div>
                        </div>
                    </div>
                     
                 </div>
             </div>
         </section>

    <!-- ========================= Product-info-features Area End ========================= -->

    <!-- ========================= Tabs Area Start ========================= -->


<div class="container">
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'Paris1')" id="defaultOpen1">Product Description</button>
  <button class="tablinks" onclick="openCity(event, 'London1')" >Product Specification</button>
  
</div>
</div>


    <section id="London1" class="pb-sm-5 pb-4 tabcontent" style="border:none;margin-top:20px;">
            <div class="container">
           
            <table class="table table-sm table-bordered table-striped">
                <tbody>
                  @foreach($dimension as $dimensions)
                    <tr>
                        <td>{{ $dimensions->title }}</td>
                        <td>{{ $dimensions->specification }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </section>



   <section id="Paris1" class="pb-sm-5 pb-4 tabcontent" style="border:none;margin-top:20px;">
            <div class="container">
                
                  <?php echo $product[0]->long_description; ?>
                  
              
            </div>
        </section>



    <!-- ========================= Tabs Area End ========================= -->

    <!-- ========================= pb-product-form Area Start ========================= -->
    

   <div class="" style="overflow: hidden;">
        <div class="prod-img-view" style="background-image: url('{{url('web/img/bg_6.jpg(1).webp')}}'); background-attachment: fixed;">
            <div class=" banner-form"></div>
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 offset-lg-5 col-md-12 align-self-center">
                        <form role="form " id="contactform" method="post" class="form-height" action="{{url('contact-mail')}}">
                            @csrf
                             <div class="delivery-free d-sm-block d-none">
                                  <img src="img/free-delivery.png"  class="img-fluid" alt="">
                             </div>


                             <div class=" pb_heading-form  head-3 pb-sm-4 pb-3">
                                <h1 class="text-left">Contact Us </h1>
                                <p class="text-left">Fill in the form below and we will get back to you ASAP </p>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only">Name</label> 
                                        <input type="text" name="name" required="" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Contact Number</label> 
                                        <input type="text" name="phone" required="" class="form-control" placeholder="Contact Number" />
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only">Email address</label> 
                                        <input type="email" name="email" required="" class="form-control" placeholder="Your email" />
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Company</label>
                                         <input type="text" name="company" required="" class="form-control" placeholder="Company" />
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-12">
                                    <label label class="sr-only">Message</label> 
                                    <textarea name="message" placeholder="Your Message" class="form-control" style="height: 245px; width: 100%;"></textarea>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 form-group align-self-center mt-2">
                                            
                                            
                                                <div class="g-recaptcha" id="recapchaheadercall"></div>
                                                    
                                             </div>    
                                             
                                        </div>
                             <div class="col-lg-10 col-md-12">
                                <div class="text-center mt-sm-4 mt-3 mb-sm-0 mb-3">
                                    <button   type="submit"  class="btn-View-All"  >Send</button>
                               </div>
                            </div>
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
   </div>
    


    <!-- =========================  pb-product-form Area End ========================= -->

    <!-- ========================= pb-testimonial-segment Area Start ========================= -->



	<div id="pb-testimonial-segment" class="pb-testimonial-segment  py-sm-5 py-4">
		<div class="container  pb-sm-4 pb-sm-0" style="max-width: 1140px; margin:  0 auto;">

            <div class=" text-center pb_heading  head-3 pb-sm-5 pb-3">
                <h1 class="text-left" >Related Product </h1>
            </div>

             <div class="owl-carousel pb-relatedProd-slider">
               @foreach($product as $i)
                <?php  $temp = json_decode($i->related_product); ?>
                
                <?php if(!empty($all_product)){ foreach ($all_product as $index){?>

                <?php if(!empty($temp)){foreach ($temp as $key => $keyvalue) {
                            if($keyvalue==$index->product_id){?>
               <div class="item">
                    <div class="parent-card">
                        <div class="img-wrapper">
                            <a href="{{url($index->url)}}"><img src="{{url('images/'.$index->image)}}" class="img-fluid" /></a>
                        </div>
                        <div class="product-name text-center">
                            <a href="{{url($index->url)}}"><span>{{$index->title}}</span></a>
                        </div>
                    </div>
                </div>
                <?php }}}}} ?>
                  @endforeach
                
            </div>
		</div>
	</div>


    <!-- ========================= pb-testimonial-segment  Area End ========================= -->
     </main>




     <!--================== End wrapper ================== -->
    
    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen1").click();
</script>
    
    
    
@include('web/footer')