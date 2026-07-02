@include('web/header')

   <div class="hero-wrap" >
        <div class="overlay-masthead" style="background-image: url('{{url('uploads/'.$meta['0']->image)}}'); background-position: center center;
    background-size: 100% 100%;"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-start justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-left fadeInUp ftco-animated">
                    <p class="breadcrumbs">
                       
                    </p>
                     
                </div>
            </div>
        </div>
    </div>
 <!-- ====================== About Us ======================  -->
 <section class="pad-t-b-50">
     <div class="container-fluid p-0">
         <div class="about-padd">
         <div class="row m-0">
            
             <!-- ====================== About Us Infor ======================  -->
             <div class="col-md-12 p-0 align-self-center">
                <div class="about-para">
                    <div class="para-pad">
                        <p style="text-align:justify; font-size: 19px;">
                                <?php echo $meta['0']->long_desc; ?>
                            </p>
                    </div>
                </div>

            </div>
            <!-- ====================== About Us Infor ======================  -->
         </div>
     </div>
    </div>
 </section>
  <!-- ====================== About Us ======================  -->

@include('web/footer')
