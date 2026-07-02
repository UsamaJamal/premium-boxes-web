<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <META NAME=ROBOTS CONTENT="NOINDEX, NOFOLLOW">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  
    <title>{{$meta_title}}</title>
    <meta name="description" content="<?php  echo $meta_description; ?>">
  <meta name="keywords" content="<?php echo $meta_tags; ?>">

  
    <link rel="icon" href="{{url('web/img/favicon.png')}}">

    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" href="css/animate.css"> -->


    <link rel="stylesheet" href="{{url('web/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('web/assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{url('web/assets/css/owl.theme.default.min.css')}}" />
    <!-- <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/blogs.css" />
    <link rel="stylesheet" href="assets/css/progress.css" /> -->

    <link href="{{url('web/assets/css/styles.css')}}" rel="stylesheet" />
    <link href="{{url('web/assets/css/jquery.smartmenus.bootstrap-4.css')}}" rel="stylesheet" />

    <!--  -->
    
</head>

<style>
    .dropdown-toggle::after{
        display:none;
    }
    .carousel-control-prev-icon{
        background-color:#49d8f7 !important;
    }
    .carousel-control-next-icon{
        background-color:#49d8f7 !important;
    }
</style>

<body>
   


   <!-- ====================== Header Start ======================  -->
             <button id="myBtn" class="btn btn-lg modal-btns fixe fixed-btn" data-toggle="modal" data-target="#myModal">
                Request a Call Back
             </button>
               <a class="" href="{{url('request-quote').'/'}}">
                        <button class="btn btn-lg fixe fixed-btn-left">
                           Get A Quote
                        </button>
               </a>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  }
  else {
    mybutton.style.display = "none";
  }
}

</script>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:999999999;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
Get A Call In A Min !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('callback').'/'}}" method="Post" id="call">
             <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name:" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Contact Number:</label>
              <input type="text" name="number" class="form-control" placeholder="Enter your Contact Number:" required>
          </div>
          
           <div class="g-recaptcha" id="headercaptcha"></div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" style="background-color: #8dc63e;">Call Me</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--side bar button-->
   <div id="top_header_area" class="px-2">
        <div class="container-fluid pl-lg-5 pr-lg-5">
            <div class="row flex-wrap">
                <!-- <div class="col-lx-3 col-lg-3 col-md-4 col-sm-4 pr-0 top-col-one">
                    <a class="coustom-fonts" href="mailto:support@myboxpackaging.co.uk"> <i class="fas fa-envelope" aria-hidden="true"></i> support@myboxpackaging.co.uk </a>
                </div>
                <div class="col-lx-3 col-lg-3 col-md-3 col-sm-3 pr-0 align-self-center top-col-two">
                    <a class="coustom-fonts" href="tel:442033182130">
                        <i style="transform: rotate(90deg);" class="fas fa-phone rotate-y" aria-hidden="true"></i>
                        44-20-3318-2130
                    </a>
                </div> -->
                <div class="col-lx-6 col-lg-6 col-md-5 col-sm-6 align-self-center text-sm-left text-center">
                    <div class="">
                        <ul class="header_list mob_txt-cent">
                            <!--<li>-->
                            <!--    <a href="{{url('about-us')}}"><i class="ti-mobile"></i><span>About Us</span></a>-->
                            <!--</li>-->
                            <!--<li><span>|</span></li>-->
                            <!--<li>-->
                            <!--    <a href="{{url('frequently-asked-questions')}}"><span>FAQ</span></a>-->
                            <!--</li>-->
                            <!--<li><span>|</span></li>-->
                            <!--<li>-->
                            <!--    <a href="{{url('track-your-order')}}"><i class="ti-user"></i><span>Track Shipment </span></a>-->
                            <!--</li>-->
                           
                        </ul>
                    </div>
                </div>
                
                <div class="col-lx-3 col-lg-6 col-md-7 col-sm-6 align-self-center top-col-three px-sm-0 px-md-3">
                    <ul class="list-unstyled list-inline myBox_nav text-md-right mob_txt-cent">
                        @if(!Session::has('web-user-name'))
                        <li>
                                <a style="text-decoration:none;" href="{{url('track-your-order')}}"><i class="ti-user"></i><span style="color:#234376;">Track your order </span></a>
                            </li>
                        <!--<li><a class="global-plan-trigger-top global-plan-trigger" href="{{url('user-login')}}" title="">Login</a></li>-->

                        <li><a class="global-plan-trigger-top global-plan-trigger" href="{{url('user-register')}}" title="">Register</a></li>
                        <li><a class="global-plan-trigger-top global-plan-trigger active" href="{{url('contact-us')}}" title="">Contact us</a></li>
                        @endif
                        @if(Session::has('web-user-name'))
                        <li><a class="global-plan-trigger-top global-plan-trigger" href="{{url('user-dashboard')}}" title="">Dashboard</a></li>

                        <li><a class="global-plan-trigger-top global-plan-trigger" href="{{url('userlogout')}}" title="">Logout</a></li>
                        <li><a class="global-plan-trigger-top global-plan-trigger active" href="{{url('contact-us')}}" title="">Contact us</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 ftco-navbar-light">
        <div class="container-fluid pl-lg-5 pr-lg-5">
            <div class="row d-flex align-items-start align-items-center px-3 px-md-0">
                <div class="col-xl-4 col-md-6 d-xl-flex mb-2 mb-md-0 justify-content-center d-none  ">
                    <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                        <img src="{{url('uploads/'.$contact['0']->image)}}" class="img-fluid pb-hf-logo d-block mx-auto" alt="{{ $contact['0']->alt }}">
                    </a>
                </div>
                <div class="col-xl-2  col-md-4  d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon mob_num_email d-flex justify-content-center align-items-center">
                        <span class="fa fa-phone" style="transform: rotate(90deg);"></span>
                    </div>
                    <div class="pr-md-3 pl-md-3 pl-3 header-text">
                         <h3>Call Us Now</h3>
                         <a href="tel:{{ $contact['0']->phone }}">
                        <p class="con">{{ $contact['0']->phone }}</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4    d-flex topper mb-md-0 mb-2 align-items-center">
                    <div class="icon mob_num_email d-flex justify-content-center align-items-center">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="pr-md-4 pl-md-3 pl-3 header-text"> 
                        <h3>Email Us</h3>
                        <a href="mailto:{{ $contact['0']->email }}">
                        <p class="con">{{ $contact['0']->email }}</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3  col-md-4 d-flex topper mb-md-0 mb-2 align-items-center search-md-column text-xl-right">
                     <form action="{{url('search')}}" method="get" class="form-inline justify-content-xl-end">
                            <div class="input-group Ai_searchbar">
                                <input type="text" name="query" class="form-control" placeholder="Search Here" id="search" autocomplete="off" required/>
                                <div class="input-group-append">
                                    <button class="btn-secondary" for="mainsearhbar" type="submit"><i class="fa fa-search" style="transform: rotate(-270deg);" aria-hidden="true"></i></button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--navbar-->
 <header  id="pb-sticky-wrapper"  class="pb-sticky-wrapper" >
        <div  id="pb" class="header-body border-top-0">
            <div class="header-container" id="sticky-header">
                <div class="container">
                    <!-- Navbar -->
                    <nav id="unique-bg" class="p-0 navbar navbar-expand-xl jcb_navigationWrap ">
                        <div class="container">
                            <!-- <a class="navbar-brand" href="#">Navbar</a> -->

                            <div class="header-logo d-block d-sm-block d-md-block d-lg-block d-xl-none">
                                <a href="{{url('/')}}">
                                    <img class="mob_logo pb-hf-logo" alt="tcb" src="{{url('uploads/'.$contact['0']->image)}}" alt="{{ $contact['0']->alt }}" />
                                </a>
                            </div> 
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/') }}" style="display: inline;display: inline;
    color: #234376;
    font-weight: 600;
    padding: 6px 11px;
    text-transform: capitalize;
    font-size: 18px;
    
}
">Home</a>
                                <!-- Left nav -->
                                <?php $chk1=0;?>
 @foreach($all_category as $main_category)   
<?php $chk1++; if($chk1==1){?>
                                <ul class="nav navbar-nav uniq---ul">
                                    <?php } ?>





                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="{{url($main_category->category_url).'/'}}">{{ $main_category->name }}</a>
                                        <?php $chk2=0;?>
                                        @foreach($sub_category_link as $sub_category)
        
        @if($main_category->cat_id == $sub_category->parent_category)
        <?php $chk2++; if($chk2==1){ ?>
                                        <ul class="dropdown-menu">
                                            <?php } ?>
                                            
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="{{ url($sub_category->category_url).'/' }}">{{ $sub_category->name }}</a>
                                                <?php $chk3=0; ?>
                                                 @foreach($all_product as $products)
               
                @if($products->cat_id == $sub_category->cat_id)
                <?php $chk3++; if($chk3==1){ ?>
                                                <ul class="dropdown-menu mega-dropdown-2">
                                                    <?php } ?>
                                                   <?php 
                                                   $in = $products->title; 
                                                   $out = strlen($in) > 17 ? substr($in,0,17)."..." :  $in ;
                                                   ?>
                                                   
                                                    <li class="mega-dropdown-items"><a class="dropdown-item" href="{{ url($products->url).'/' }}"><?php echo $out;?></a></li>
                                                @endif
                @endforeach
                <?php if($chk3>0){ ?>
                                                </ul>
                                                <?php } ?>
                                            </li>
                                            @endif
            @endforeach
            <?php if($chk2>0){ ?>
                                        </ul>
                                        <?php } ?>
                                    </li>
                                     @endforeach
 <?php if($chk1>0){ ?>
                                </ul>
                                <?php } ?>
                                
                                
                                        <li class="nav-item dropdown" style="list-style-type:none;">
                                     <a class="nav-link dropdown-toggle" href="{{ url('our-blog') }}" style="display: inline;display: inline;
    color: #234376;
    font-weight: 600;
    padding: 6px 11px;
    text-transform: capitalize;
    font-size: 18px;
    
}
">Blog</a>
                           </li>
                                                
                            </div>

                            <!-- <ul class="navbar-nav attr-nav align-items-center">
                                <li>
                                    <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                                    <div class="search_wrap">
                                        <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                        <form action="https://www.justcustomboxes.com/search" method="get">
                                            <input type="text" placeholder="Search" name="keyword" class="form-control" id="search_input" /> <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                    <div class="search_overlay"></div>
                                    <div class="search_overlay"></div>
                                    <div class="search_overlay"></div>
                                </li>
                            </ul> -->
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header> 
    <!--navbar-->
   

 @if(Session::has('success'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('success') }}</div>
                    </center>
                    
                    @endif
    <!-- ====================== cmb-Header End ======================  -->

    