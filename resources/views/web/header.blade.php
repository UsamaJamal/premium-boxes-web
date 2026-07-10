<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('uploads/Premium-boxes-logo.svg') }}">
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">-->
   <meta name="google-site-verification" content="A3bSQa3tVyx5ir7I28SH6t5khaTdf2o4yyIDxWfb2Jk" />
    <title>{{$meta_title}}</title>
    <meta name="description" content="<?php  echo $meta_description; ?>">
  <meta name="keywords" content="<?php echo $meta_tags; ?>">

	  @php
	      $currentUrl = request()->path();
	      $catRobots = \Schema::hasColumn('add_category', 'robots')
	          ? \DB::table('add_category')->where('category_url', $currentUrl)->value('robots')
	          : null;
	      $finalRobots = !empty($catRobots) ? $catRobots : 'index, follow';
	      if (isset($robots) && !empty($robots)) {
	          $finalRobots = $robots;
	      }
	  @endphp
  <meta name="robots" content="{{ $finalRobots }}">
  <link rel="canonical" href="{{ url()->current() }}" />
  
    <link rel="icon" href="{{url('web/img/favicon.png')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
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

    @if(isset($value) && count($value) > 0 && isset($value[0]->schema) && !empty($value[0]->schema))
    {!! $value[0]->schema !!}
    @endif

    <!--  -->
    
</head>

<style>
.carousel-indicators {
    bottom :-45px !important;
}
.carousel-indicators .active {
    background-color :#49d8f7 !important;
}
.carousel-indicators li {
    width :10px !important;
    height :10px !important;
    border-radius :50% !important;
}
form.example input:focus{
    outline: none;
}
form.example button:focus{
    outline: none;
}
form.example input[type=text] {
  padding: 5px;
  font-size: 17px;
  border: 1px solid #234376;
  float: left;
  width: 80%;
  background: #ffffff;
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}

form.example button {
  float: left;
  width: 15%;
  padding: 5px;
  background: #49d8f7;
  color: white;
  font-size: 17px;
  border: 1px solid #234376;
  cursor: pointer;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}





    .dropdown-toggle::after{
        display:none;
    }

   
    /*.top-header-frst{*/
    /*    max-width: 1020px;*/
    /*    width: 100%;*/
    /*    margin: 0 auto!important;*/
    /*}*/
    
/*    .arrowBtnRight,.arrowBtnLeft {*/
/*        position: fixed;*/
/*        display: block;*/
/*        bottom: 20.5%;*/
/*        z-index: 9999999;*/
/*        background-color: #49d8f7;*/
/*        padding: 4px;*/
/*        border: 2px solid #224375 !important;*/
/*        color: #234376;*/
/*    }*/

/*  .arrowBtnRight {*/
/*    right: 0;*/
/*}*/
/*.arrowBtnLeft {*/
/*   left: 0;*/
/*}*/
/*.textBtn {*/
/*    display: none;*/
/*    transition:all 500ms ease;*/
/*}*/

/*.animRotation {*/

/*  -webkit-animation-name: rotate;*/
/*  -webkit-animation-duration: 0.3s;*/
/*  transition: all 0.50s ease-in-out;*/
/*}*/



/* rotation animation */

/*@-webkit-keyframes rotate {*/
/*  0 {*/
/*    transform:  scale(0,0);*/
/*  }*/
/*  50% {*/
/*    transform: scale(1.1,1.1);*/
/*  }*/
  
/*   100% {*/
/*    transform: scale(1,1);*/
/*  }*/

/*}*/


/* ===========================
   GLOBAL RESPONSIVE TYPOGRAPHY
   =========================== */

/* Desktop (default) */
h1 { font-size: 48px !important; }
h2 { font-size: 36px !important; }
h3 { font-size: 28px !important; }
h4 { font-size: 22px !important; }
h5 { font-size: 20px !important; }
h6 { font-size: 18px !important; }
p  { font-size: 16px !important; }

/* Tablet (max-width: 1024px) */
@media (max-width: 1024px) {
    h1 { font-size: 40px !important; }
    h2 { font-size: 30px !important; }
    h3 { font-size: 24px !important; }
    h4 { font-size: 20px !important; }
    h5 { font-size: 18px !important; }
    h6 { font-size: 16px !important; }
    p  { font-size: 16px !important; }
}

/* Mobile (max-width: 768px) */
@media (max-width: 768px) {
    h1 { font-size: 32px !important; }
    h2 { font-size: 26px !important; }
    h3 { font-size: 22px !important; }
    h4 { font-size: 18px !important; }
    h5 { font-size: 16px !important; }
    h6 { font-size: 15px !important; }
    p  { font-size: 15px !important; }
}

</style>

<body>
   


   <!-- ====================== Header Start ======================  -->

             
           
                
             

               
               
               
               
               
               
<script>
//Get the button
// var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if ( var topUpBtn = document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      
//      if(topUpBtn = true ){
//           mybutton.style.display = "block";
//         } 
//      else {
//         mybutton.style.display = "none";
//       }
//   }




</script>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:999999999;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('callback')}}" method="Post" id="call">
             <input type="hidden" name="_token" value="{!! csrf_token() !!}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name:" required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '')">
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
<header id="site-header" class="w-full" style="background-color: #1a1a1a; position: fixed; top: 0; left: 0; width: 100%; z-index: 9999; box-shadow: 0 2px 20px rgba(0,0,0,0.5);">

    <!-- ===== TOP BAR ===== -->
    <div class="top-bar-container" style="background-color: #1a1a1a;">
        <div style="max-width: 1440px; margin: 0 auto; padding: 14px 40px; display: flex; align-items: center; justify-content: space-between;">

        <!-- Left Group: Logo + Search -->
        <div class="top-bar-left" style="display: flex; align-items: center; gap: 40px;">
            <!-- Logo -->
            <a href="/" class="header-logo-link" style="display: flex; align-items: center; text-decoration: none; flex-shrink: 0;">
                <img src="{{ asset('uploads/Premium-boxes-logo.svg') }}" alt="premium boxes logo" title="Premium Boxes Logo" style="height: 48px; width: auto; filter: var(--logo-filter, none);" />
            </a>

            <!-- Search Bar -->
            <div style="width: 260px;">
                <form action="{{ url('search') }}" method="POST" style="display: flex; align-items: center; background-color: #333333; border-radius: 50px; height: 38px; padding: 0 16px; gap: 8px; margin: 0;">
                    @csrf
                    <style>
                        input[type="search"]::-webkit-search-cancel-button {
                            -webkit-appearance: none;
                            height: 14px;
                            width: 14px;
                            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="%23f5c542" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>') no-repeat center center;
                            background-size: contain;
                            cursor: pointer;
                        }
                    </style>
                    <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer; display: flex; align-items: center; outline: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#f5c542" stroke-width="2">
                            <circle cx="11" cy="11" r="7"/><line x1="16.5" y1="16.5" x2="22" y2="22"/>
                        </svg>
                    </button>
                    <input type="search" name="query" placeholder="Search products..."
                        style="background: transparent; border: none; outline: none; color: #ffffff; font-size: 14px; width: 100%;"
                        onfocus="this.parentElement.style.boxShadow='0 0 0 1.5px #f5c542'"
                        onblur="this.parentElement.style.boxShadow='none'" required>
                </form>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="top-bar-contact" style="display: flex; align-items: center; gap: 28px; flex-shrink: 0;">
            <!-- Phone -->
            <a href="tel:18005189441" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: var(--text-muted-light);">
                <div style="width: 38px; height: 38px; border-radius: 50%; background-color: #333333; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#f5c542" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <span style="font-size: 14px; font-weight: 600; color: #ffffff;">1800-518-9441</span>
            </a>

            <!-- Email -->
            <a href="mailto:support@premiumboxes.com" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: var(--text-muted-light);">
                <div style="width: 38px; height: 38px; border-radius: 50%; background-color: #333333; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#f5c542" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <span style="font-size: 14px; font-weight: 600; color: #ffffff;">support@premiumboxes.com</span>
            </a>
        </div>
        </div>
    </div>

    <!-- ===== NAVBAR ===== -->
    <style>
        .header-logo-link {
            margin-left: 15px !important;
        }
        @media (min-width: 1200px) {
            .header-logo-link {
                margin-left: 20px !important;
            }
        }
        @media (min-width: 1440px) {
            .header-logo-link {
                margin-left: 40px !important;
            }
        }
        .nav-group {
            display: flex;
            align-items: stretch;
        }
        .mega-menu-content {
            display: none;
            position: absolute !important;
            left: 102px;
            top: 64px !important;
            width: max-content;
            min-width: 750px;
            background-color: #252525;
            z-index: 999;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7);
            border-top: 2px solid #f5c542;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            animation: megaSlideDown 0.2s ease;
        }
        @keyframes megaSlideDown {
            from { opacity: 0; transform: translateY(-8px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .nav-group:hover .mega-menu-content,
        .nav-group:hover .dropdown-menu-content {
            display: block !important;
        }
        .dropdown-menu-content {
            display: none;
            animation: megaSlideDown 0.2s ease;
        }
        .nav-group > a:hover {
            color: #f5c542 !important;
        }

        /* Mobile Header Adjustments */
        @media (max-width: 768px) {
            html, body {
                overflow-x: hidden;
                max-width: 100vw;
            }
            body { padding-top: 95px !important; }
            .top-bar-left { display: none !important; }
            .top-bar-container { display: block !important; }
            .top-bar-container > div { 
                padding: 10px !important; 
                justify-content: center !important; 
            }
            .top-bar-contact { 
                width: fit-content; 
                margin: 0 auto;
                flex-direction: column; 
                align-items: center !important;
                justify-content: center;
                gap: 10px !important;
            }
            .top-bar-contact a:nth-child(1) { display: none !important; } /* Hide phone */
            .top-bar-contact a:nth-child(2) { display: flex !important; } /* Show email */
            .main-nav-inner {
                padding: 0 15px !important;
                align-items: center !important;
                position: relative;
                justify-content: center !important;
            }
            .nav-links-container { display: none !important; }
            .mobile-menu-btn { 
                display: flex !important; 
                position: absolute;
                left: 15px;
            }
            .mobile-logo { 
                display: flex !important; 
                flex: 0 0 auto !important; 
            }
            .mobile-search-btn { display: flex !important; }
            /* Hide Get Instant Quote button on mobile */
            .nav-right-container > a { display: none !important; }
            .nav-right-container { 
                position: absolute;
                right: 15px;
                gap: 15px !important; 
                padding: 0 !important;
            }
            /* Mobile header height & logo size */
            #main-nav-inner {
                min-height: 70px !important;
            }
            .mobile-logo-img {
                height: 48px !important;
            }
        }
    </style>
    <nav style="background-color: #202020; border-top: 1px solid #333; position: relative; z-index: 100;">
        <div class="main-nav-inner" style="max-width: 1440px; margin: 0 auto; padding: 0 40px; display: flex; align-items: stretch; justify-content: space-between; min-height: 48px; width: 100%;" id="main-nav-inner">

        <!-- Mobile Hamburger (Hidden on Desktop) -->
        <div class="mobile-menu-btn" onclick="openMobileSidebar()" style="display: none; align-items: center; cursor: pointer;">
            <svg width="34" height="34" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </div>

        <!-- Mobile Logo (Hidden on Desktop) -->
        <a href="/" class="mobile-logo" style="display: none; align-items: center; justify-content: center; flex: 1;">
            <img src="{{ asset('uploads/Premium-boxes-logo.svg') }}" alt="premium boxes logo" title="Premium Boxes Logo" style="height: 36px; width: auto; filter: var(--logo-filter, none);" class="mobile-logo-img" />
        </a>

        <!-- Nav Links -->
        <div class="nav-links-container" style="display: flex; align-items: stretch; gap: 28px; flex: 1; justify-content: center; position: relative;">
            <a href="/" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#f5c542'" onmouseout="this.style.color='#ffffff'">Home</a>
            
            <!-- Box By Industry with Mega Menu -->
            <div class="nav-group">
                <a style="cursor: pointer; display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Boxes By Industry</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content">
                    <div style="padding: 14px 40px 16px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 20px; align-content: start;">
                                @php
                                $parentCat = \DB::table('add_category')->where('name', 'Box by Industry')->first();
                                $industries = $parentCat ? \DB::table('add_category')->where('parent_category', $parentCat->cat_id)->where('show_in_nav', 1)->get() : [];
                                @endphp
                                @foreach($industries as $industry)
                                <a href="{{ url($industry->category_url) }}" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#f5c542'" onmouseout="this.style.color='#cccccc'">
                                    @if(!empty($industry->icon))
                                        <img src="{{ asset('images/' . $industry->icon) }}" style="width: 20px; height: 20px; object-fit: contain;" alt="{{ strtolower(str_replace('-', ' ', $industry->name . ' icon')) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $industry->name . ' icon'))) }}">
                                    @else
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f5c542" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 2.5L11.5 7.5L16.5 9L11.5 10.5L10 15.5L8.5 10.5L3.5 9L8.5 7.5L10 2.5Z"></path>
                                            <path d="M19 14.5L19.5 16.5L21.5 17L19.5 17.5L19 19.5L18.5 17.5L16.5 17L18.5 16.5L19 14.5Z"></path>
                                            <path d="M19 3.5L19.5 5.5L21.5 6L19.5 6.5L19 8.5L18.5 6.5L16.5 6L18.5 5.5L19 3.5Z"></path>
                                        </svg>
                                    @endif
                                    {{ $industry->name }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #333; display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f5c542" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                </svg>
                                <div>
                                    <span style="font-weight: 600; color: #ffffff; margin-right: 8px;">Need a custom packaging solution?</span>
                                    <span style="color: #aaaaaa; font-size: 13px;">Get your custom packaging plan within 24 hours.</span>
                                </div>
                            </div>
                            <a href="/contact" style="background-color: #f5c542; color: #111; font-weight: 700; padding: 10px 28px; border-radius: 50px; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#d4891a'" onmouseout="this.style.backgroundColor='#f5c542'">Talk to us</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Box By Material with Mega Menu -->
            <div class="nav-group" style="position: relative;">
                <a style="cursor: pointer; display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Boxes By Material</a>
                
                <!-- Dropdown Container -->
                <div class="dropdown-menu-content" style="position: absolute; top: 100%; left: 10px; width: 260px; background-color: #252525; border-radius: 4px; box-shadow: 0 4px 15px rgba(0,0,0,0.5); border: 1px solid #333; border-top: 2px solid #f5c542; z-index: 999;">
                    <div style="padding: 10px 0;">
                        @php
                        $parentCatMat = \DB::table('add_category')->where('name', 'Box by Material')->first();
                        $materials = $parentCatMat ? \DB::table('add_category')->where('parent_category', $parentCatMat->cat_id)->where('show_in_nav', 1)->get() : [];
                        @endphp
                        @foreach($materials as $material)
                        <a href="{{ url($material->category_url) }}" style="display: flex; align-items: center; justify-content: space-between; padding: 10px 24px; color: #cccccc; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.2s;" onmouseover="this.style.color='#f5c542'; this.style.backgroundColor='#333333'" onmouseout="this.style.color='#cccccc'; this.style.backgroundColor='transparent'">
                            {{ $material->name }}
                        </a>
                        @endforeach
                    </div>

                </div>
            </div>

            <!-- Box By Style with Mega Menu -->
            <div class="nav-group">
                <a style="cursor: pointer; display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Boxes By Style</a>
                
                <!-- Mega Menu Container -->
                <div class="mega-menu-content">
                    <div style="padding: 14px 40px 16px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 20px; align-content: start;">
                                @php
                                $parentCatStyle = \DB::table('add_category')->where('name', 'Box by Style')->first();
                                $styles = $parentCatStyle ? \DB::table('add_category')->where('parent_category', $parentCatStyle->cat_id)->where('show_in_nav', 1)->get() : [];
                                @endphp
                                @foreach($styles as $style)
                                <a href="{{ url($style->category_url) }}" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#f5c542'" onmouseout="this.style.color='#cccccc'">
                                    @if(!empty($style->icon))
                                        <img src="{{ asset('images/' . $style->icon) }}" style="width: 20px; height: 20px; object-fit: contain;" alt="{{ strtolower(str_replace('-', ' ', $style->name . ' icon')) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $style->name . ' icon'))) }}">
                                    @else
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f5c542" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 2.5L11.5 7.5L16.5 9L11.5 10.5L10 15.5L8.5 10.5L3.5 9L8.5 7.5L10 2.5Z"></path>
                                            <path d="M19 14.5L19.5 16.5L21.5 17L19.5 17.5L19 19.5L18.5 17.5L16.5 17L18.5 16.5L19 14.5Z"></path>
                                            <path d="M19 3.5L19.5 5.5L21.5 6L19.5 6.5L19 8.5L18.5 6.5L16.5 6L18.5 5.5L19 3.5Z"></path>
                                        </svg>
                                    @endif
                                    {{ $style->name }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #333; display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f5c542" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                </svg>
                                <div>
                                    <span style="font-weight: 600; color: #ffffff; margin-right: 8px;">Need a custom packaging solution?</span>
                                    <span style="color: #aaaaaa; font-size: 13px;">Get your custom packaging plan within 24 hours.</span>
                                </div>
                            </div>
                            <a href="/contact" style="background-color: #f5c542; color: #111; font-weight: 700; padding: 10px 28px; border-radius: 50px; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#d4891a'" onmouseout="this.style.backgroundColor='#f5c542'">Talk to us</a>
                        </div>
                    </div>
                </div>
            </div>

                                                <!-- Promotional Products with Mega Menu -->
            @php
                $parentCatPromo = \DB::table('add_category')->where('name', 'Promotional Product')->first();
                $promoSubcats = [];
                if (false) { // Disabled for now 
}
@endphp
            <div class="nav-group">
                <a style="cursor: pointer; display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">Promotional Products</a>
                
                @if(count($promoSubcats) > 0)
                <div class="mega-menu-content">
                    <div style="padding: 14px 40px 16px;">
                        <div style="display: flex; gap: 40px;">
                            <div style="flex: 1; display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px 20px; align-content: start;">
                                @foreach($promoSubcats as $subcat)
                                <a href="{{ url($subcat->category_url) }}" style="display: flex; align-items: center; gap: 10px; color: #cccccc; text-decoration: none; font-size: 13px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#f5c542'" onmouseout="this.style.color='#cccccc'">
                                    @if(!empty($subcat->icon))
                                        <img src="{{ asset('images/' . $subcat->icon) }}" style="width: 20px; height: 20px; object-fit: contain;" alt="{{ strtolower(str_replace('-', ' ', $subcat->name . ' icon')) }}" title="{{ ucwords(strtolower(str_replace('-', ' ', $subcat->name . ' icon'))) }}">
                                    @else
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f5c542" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M10 2.5L11.5 7.5L16.5 9L11.5 10.5L10 15.5L8.5 10.5L3.5 9L8.5 7.5L10 2.5Z"></path>
                                            <path d="M19 14.5L19.5 16.5L21.5 17L19.5 17.5L19 19.5L18.5 17.5L16.5 17L18.5 16.5L19 14.5Z"></path>
                                            <path d="M19 3.5L19.5 5.5L21.5 6L19.5 6.5L19 8.5L18.5 6.5L16.5 6L18.5 5.5L19 3.5Z"></path>
                                        </svg>
                                    @endif
                                    {{ $subcat->name }}
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid #333; display: flex; align-items: center; justify-content: space-between;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#f5c542" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                    <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                                </svg>
                                <div>
                                    <span style="font-weight: 600; color: #ffffff; margin-right: 8px;">Need a custom packaging solution?</span>
                                    <span style="color: #aaaaaa; font-size: 13px;">Get your custom packaging plan within 24 hours.</span>
                                </div>
                            </div>
                            <a href="/contact" style="background-color: #f5c542; color: #111; font-weight: 700; padding: 10px 28px; border-radius: 50px; text-decoration: none; font-size: 14px; transition: background 0.2s;" onmouseover="this.style.backgroundColor='#d4891a'" onmouseout="this.style.backgroundColor='#f5c542'">Talk to us</a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!-- Dynamic Parent Categories -->
            @php
            $hardcodedParents = ['Box by Industry', 'Box by Material', 'Box by Style', 'Promotional Products', 'Promotional Product'];
            $otherParents = \DB::table('add_category')
                ->where(function($q) {
                    $q->where('parent_category', 0)->orWhere('parent_category', -1);
                })
                ->whereNotIn('name', $hardcodedParents)
                ->get();
            @endphp

            @foreach($otherParents as $otherParent)
            <div class="nav-group" style="position: relative;">
                <a href="{{ url($otherParent->category_url) }}" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s; padding: 0 10px;">{{ $otherParent->name }}</a>
                
                @php
                    $subCats = \DB::table('add_category')->where('parent_category', $otherParent->cat_id)->where('show_in_nav', 1)->get();
                @endphp
                
                @if(count($subCats) > 0)
                <!-- Dropdown Container -->
                <div class="dropdown-menu-content" style="position: absolute; top: 100%; left: 10px; width: 260px; background-color: #252525; border-radius: 4px; box-shadow: 0 4px 15px rgba(0,0,0,0.5); border: 1px solid #333; border-top: 2px solid #f5c542; z-index: 999;">
                    <div style="padding: 10px 0;">
                        @foreach($subCats as $subCat)
                        <a href="{{ url($subCat->category_url) }}" style="display: flex; align-items: center; justify-content: space-between; padding: 10px 24px; color: #cccccc; text-decoration: none; font-size: 14px; font-weight: 500; transition: all 0.2s;" onmouseover="this.style.color='#f5c542'; this.style.backgroundColor='#333333'" onmouseout="this.style.color='#cccccc'; this.style.backgroundColor='transparent'">
                            {{ $subCat->name }}
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </a>
                        @endforeach
                    </div>
                    <div style="border-top: 1px solid #333; padding: 12px 24px; background-color: #222222; border-radius: 0 0 4px 4px;">
                        <a href="{{ url($otherParent->category_url) }}" style="display: flex; align-items: center; gap: 8px; color: #aaaaaa; text-decoration: none; font-size: 14px; font-weight: 500; transition: color 0.2s;" onmouseover="this.style.color='#f5c542'" onmouseout="this.style.color='#aaaaaa'">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                            All {{ $otherParent->name }}
                        </a>
                    </div>
                </div>
                @endif
            </div>
            @endforeach

            <a href="{{ url('our-blog') }}" style="display: flex; align-items: center; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: 600; transition: color 0.2s;" onmouseover="this.style.color='#f5c542'" onmouseout="this.style.color='#ffffff'">Blogs</a>
        </div>

        <!-- Right: Toggle + CTA -->
        <div class="nav-right-container" style="display: flex; align-items: center; gap: 20px; flex-shrink: 0; padding: 10px 0;">

            <!-- Mobile Search Icon (Hidden on Desktop) -->
            <div class="mobile-search-btn" style="display: none; align-items: center; cursor: pointer;" onclick="toggleMobileSearch()">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="#ffffff" stroke-width="2">
                    <circle cx="11" cy="11" r="7"/><line x1="16.5" y1="16.5" x2="22" y2="22"/>
                </svg>
            </div>

            <!-- Toggle Switch -->
            <!-- <div id="theme-toggle" onclick="toggleTheme()"
                style="width: 44px; height: 22px; background-color: #ffffff; border-radius: 50px; display: flex; align-items: center; padding: 3px; cursor: pointer; transition: background 0.3s; position: relative;">
                <div id="toggle-knob"
                    style="width: 16px; height: 16px; background-color: #1a1a1a; border-radius: 50%; transition: transform 0.3s; transform: translateX(22px); display: flex; align-items: center; justify-content: center;">
                </div>
            </div> -->

            <!-- Get Instant Quote -->
            <a href="{{ url('request-quote') }}"
                style="background-color: #f5c542; color: #111; font-size: 14px; font-weight: 800; padding: 10px 22px; border-radius: 50px; text-decoration: none; white-space: nowrap; transition: background 0.2s;">
                Get Instant Quote
            </a>
        </div>
        </div>
    </nav>

    <!-- Mobile Search Dropdown -->
    <div id="mobile-search-dropdown" style="display: none; background-color: #252525; padding: 15px; position: absolute; top: 100%; left: 0; width: 100%; z-index: 99; border-top: 1px solid #333; box-shadow: 0 10px 20px rgba(0,0,0,0.5);">
        <form action="{{ url('search') }}" method="POST" style="display: flex; align-items: center; background-color: #1a1a1a; border-radius: 50px; height: 44px; padding: 0 16px; gap: 8px; margin: 0; border: 1px solid #444;">
            @csrf
            <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer; display: flex; align-items: center; outline: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#f5c542" stroke-width="2">
                    <circle cx="11" cy="11" r="7"/><line x1="16.5" y1="16.5" x2="22" y2="22"/>
                </svg>
            </button>
            <input type="search" name="query" placeholder="Search products..."
                style="background: transparent; border: none; outline: none; color: #ffffff; font-size: 14px; width: 100%;" required>
        </form>
    </div>
</header>

<script>
    function toggleMobileSearch() {
        const searchDropdown = document.getElementById('mobile-search-dropdown');
        if (searchDropdown.style.display === 'none' || searchDropdown.style.display === '') {
            searchDropdown.style.display = 'block';
            setTimeout(() => {
                const input = searchDropdown.querySelector('input');
                if (input) input.focus();
            }, 50);
        } else {
            searchDropdown.style.display = 'none';
        }
    }
</script>

<!-- Sidebar Overlay -->
<div id="mobile-sidebar-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: rgba(0,0,0,0.7); z-index: 99999;" onclick="closeMobileSidebar()"></div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar" style="position: fixed; top: 0; left: -100%; width: 300px; height: 100vh; background-color: #222222; z-index: 100000; transition: left 0.3s ease; overflow-y: auto; padding: 30px 20px; display: flex; flex-direction: column;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px;">
        <img src="{{ asset('uploads/Premium-boxes-logo.svg') }}" alt="logo" title="Logo" style="height: 30px; filter: var(--logo-filter, none);">
        <div onclick="closeMobileSidebar()" style="cursor: pointer;">
            <svg width="24" height="24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </div>
    </div>
    <div style="flex: 1; display: flex; flex-direction: column;">
        <a href="/" style="display: block; color: #cccccc; text-decoration: none; font-size: 16px; padding: 15px 0; border-bottom: 1px solid #333333;">Home</a>
        
        <div class="mobile-nav-group">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid #333333; cursor: pointer;" onclick="toggleMobileSubmenu(this)">
                <span style="color: #cccccc; font-size: 16px;">Box By Industry</span>
                <svg class="chevron-icon" width="16" height="16" fill="none" stroke="#cccccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
            <div class="mobile-submenu" style="display: none; padding-left: 15px; padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #333333; background-color: #1a1a1a;">
                @php
                $parentCat = \DB::table('add_category')->where('name', 'Box by Industry')->first();
                $industriesSidebar = $parentCat ? \DB::table('add_category')->where('parent_category', $parentCat->cat_id)->where('show_in_nav', 1)->get() : [];
                @endphp
                @foreach($industriesSidebar as $industry)
                    <a href="{{ url($industry->category_url) }}" style="display: block; color: #cccccc; text-decoration: none; font-size: 14px; padding: 8px 0;">{{ $industry->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="mobile-nav-group">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid #333333; cursor: pointer;" onclick="toggleMobileSubmenu(this)">
                <span style="color: #cccccc; font-size: 16px;">Box By Material</span>
                <svg class="chevron-icon" width="16" height="16" fill="none" stroke="#cccccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
            <div class="mobile-submenu" style="display: none; padding-left: 15px; padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #333333; background-color: #1a1a1a;">
                @php
                $parentCatMat = \DB::table('add_category')->where('name', 'Box by Material')->first();
                $materialsSidebar = $parentCatMat ? \DB::table('add_category')->where('parent_category', $parentCatMat->cat_id)->where('show_in_nav', 1)->get() : [];
                @endphp
                @foreach($materialsSidebar as $material)
                    <a href="{{ url($material->category_url) }}" style="display: block; color: #cccccc; text-decoration: none; font-size: 14px; padding: 8px 0;">{{ $material->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="mobile-nav-group">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid #333333; cursor: pointer;" onclick="toggleMobileSubmenu(this)">
                <span style="color: #cccccc; font-size: 16px;">Box By Style</span>
                <svg class="chevron-icon" width="16" height="16" fill="none" stroke="#cccccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </div>
            <div class="mobile-submenu" style="display: none; padding-left: 15px; padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #333333; background-color: #1a1a1a;">
                @php
                $parentCatStyle = \DB::table('add_category')->where('name', 'Box by Style')->first();
                $stylesSidebar = $parentCatStyle ? \DB::table('add_category')->where('parent_category', $parentCatStyle->cat_id)->where('show_in_nav', 1)->get() : [];
                @endphp
                @foreach($stylesSidebar as $style)
                    <a href="{{ url($style->category_url) }}" style="display: block; color: #cccccc; text-decoration: none; font-size: 14px; padding: 8px 0;">{{ $style->name }}</a>
                @endforeach
            </div>
        </div>

                        @php
        $parentCatPromoMobile = \DB::table('add_category')->where('name', 'Promotional Product')->first();
        $promoSidebar = [];
        if (false) { // Disabled for now 
}
@endphp
        
        <div class="mobile-nav-group">
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 15px 0; border-bottom: 1px solid #333333; cursor: pointer;" @if(count($promoSidebar) > 0) onclick="toggleMobileSubmenu(this)" @endif>
                <span style="color: #cccccc; font-size: 16px;">Promotional Products</span>
                @if(count($promoSidebar) > 0)
                <svg class="chevron-icon" width="16" height="16" fill="none" stroke="#cccccc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" style="transition: transform 0.3s;"><polyline points="6 9 12 15 18 9"></polyline></svg>
                @endif
            </div>
            
            @if(count($promoSidebar) > 0)
            <div class="mobile-submenu" style="display: none; padding-left: 15px; padding-top: 10px; padding-bottom: 10px; border-bottom: 1px solid #333333; background-color: #1a1a1a;">
                @foreach($promoSidebar as $promo)
                    <a href="{{ url($promo->category_url) }}" style="display: block; color: #cccccc; text-decoration: none; font-size: 14px; padding: 8px 0;">{{ $promo->name }}</a>
                @endforeach
            </div>
            @endif
        </div>

        <a href="{{ url('our-blog') }}" style="display: block; color: #cccccc; text-decoration: none; font-size: 16px; padding: 15px 0; border-bottom: 1px solid #333333;">Blogs</a>

        <div style="margin-top: auto; padding-top: 30px; padding-bottom: 20px;">
            <!-- Contact Info -->
            <div style="display: flex; flex-direction: column; gap: 15px; margin-bottom: 20px; border-bottom: 1px solid #333333; padding-bottom: 20px;">
                <a href="tel:18005189441" style="display: flex; align-items: center; gap: 10px; text-decoration: none; color: #ffffff;">
                    <div style="width: 32px; height: 32px; border-radius: 50%; background-color: #333333; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="#f5c542" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>
                    <span style="font-size: 15px; font-weight: 600;">1800-518-9441</span>
                </a>

            </div>

            <a href="{{ url('get-quote') }}" style="display: block; width: 100%; text-align: center; background-color: #f5c542; color: #1a1a1a; font-weight: 700; font-size: 16px; padding: 14px 0; border-radius: 50px; text-decoration: none; transition: opacity 0.2s;">
                Get Instant Quote
            </a>
        </div>
    </div>
</div>

<script>
function openMobileSidebar() {
    document.getElementById('mobile-sidebar').style.left = '0';
    document.getElementById('mobile-sidebar-overlay').style.display = 'block';
    document.body.style.overflow = 'hidden'; // prevent scrolling behind
}
function closeMobileSidebar() {
    document.getElementById('mobile-sidebar').style.left = '-100%';
    document.getElementById('mobile-sidebar-overlay').style.display = 'none';
    document.body.style.overflow = '';
}
function toggleMobileSubmenu(element) {
    const submenu = element.nextElementSibling;
    const chevron = element.querySelector('.chevron-icon');
    if (submenu.style.display === 'none' || submenu.style.display === '') {
        submenu.style.display = 'block';
        if (chevron) chevron.style.transform = 'rotate(180deg)';
    } else {
        submenu.style.display = 'none';
        if (chevron) chevron.style.transform = 'rotate(0deg)';
    }
}
</script>

<script>
    function toggleTheme() {
        const knob = document.getElementById('toggle-knob');
        const toggle = document.getElementById('theme-toggle');
        const isActive = knob.style.transform === 'translateX(22px)';
        
        // Toggle the class on body
        document.body.classList.toggle('light-theme');
        
        if (isActive) {
            knob.style.transform = 'translateX(0px)';
            toggle.style.backgroundColor = '#333333';
            knob.style.backgroundColor = '#ffffff';
        } else {
            knob.style.transform = 'translateX(22px)';
            toggle.style.backgroundColor = '#ffffff';
            knob.style.backgroundColor = '#1a1a1a';
        }
    }

    // Set mega menu top = bottom of header
    function setMegaMenuTop() {
        const header = document.getElementById('site-header');
        const menus = document.querySelectorAll('.mega-menu-content');
        if (header) {
            const bottom = header.getBoundingClientRect().bottom;
            menus.forEach(m => m.style.top = bottom + 'px');
        }
    }

    document.addEventListener('DOMContentLoaded', setMegaMenuTop);
    window.addEventListener('resize', setMegaMenuTop);
    window.addEventListener('scroll', setMegaMenuTop);
</script>
    <!--navbar-->
   

 @if(Session::has('success'))
    <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
        <div class="alert alert-success" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb; padding: 15px; border-radius: 8px; text-align: center; font-weight: 600; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
    <!-- ====================== cmb-Header End ======================  -->

<script>
    function toggleTheme() {
        const body = document.body;
        const isLightMode = body.classList.toggle('light-mode');
        
        // Update toggle knob UI
        updateToggleUI(isLightMode);
        
        // Save preference
        localStorage.setItem('theme', isLightMode ? 'light' : 'dark');
    }

    function updateToggleUI(isLightMode) {
        // Desktop toggle
        const knob = document.getElementById('toggle-knob');
        if (knob) {
            if (isLightMode) {
                knob.style.transform = 'translateX(0)';
                knob.style.backgroundColor = '#ffffff';
                knob.parentElement.style.backgroundColor = '#ccc';
            } else {
                knob.style.transform = 'translateX(22px)';
                knob.style.backgroundColor = '#1a1a1a';
                knob.parentElement.style.backgroundColor = '#ffffff';
            }
        }
    }

    // Apply theme on load — default is always DARK, only switch to light if user explicitly chose it
    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme');
        
        if (savedTheme === 'light') {
            document.body.classList.add('light-mode');
            updateToggleUI(true);
        } else {
            // Default: dark mode (ignore OS/browser preference)
            document.body.classList.remove('light-mode');
            updateToggleUI(false);
        }
    });
</script>

<style id="light-theme-overrides">
    /* Core Light Mode overrides with maximum specificity to override inline styles */
    body.light-mode {
        background-color: #f4f6f8 !important;
        color: #111111 !important;
    }
    
    /* Text Colors */
    body.light-mode h1, body.light-mode h2, body.light-mode h3, 
    body.light-mode h4, body.light-mode h5, body.light-mode h6,
    body.light-mode .section-title {
        color: #111111 !important;
    }
    body.light-mode p {
        color: #444444 !important;
    }
    
    /* Exceptions for dark background sections */
    body.light-mode .craftsmanship-text-overlay h2,
    body.light-mode .craftsmanship-text-overlay p {
        color: #ffffff !important;
    }
    
    /* Header & Navigation */
    body.light-mode .top-bar-container,
    body.light-mode nav[style*="202020"] {
        background-color: #ffffff !important;
        border-color: #dddddd !important;
        border-top: 1px solid #ddd !important;
    }
    body.light-mode .nav-links-container a,
    body.light-mode .top-bar-contact span,
    body.light-mode .nav-group > a,
    body.light-mode .mega-menu-content a {
        color: #333333 !important;
    }
    body.light-mode .nav-links-container a:hover,
    body.light-mode .nav-group > a:hover {
        color: #f5c542 !important;
    }
    
    /* Sections */
    body.light-mode section,
    body.light-mode .cp-hero,
    body.light-mode .box-by-industry,
    body.light-mode .styles-section,
    body.light-mode .cp-why,
    body.light-mode .premium-addons-section,
    body.light-mode .blog-section,
    body.light-mode .testimonials-section,
    body.light-mode .quote-process-section,
    body.light-mode .trust-bar-section,
    body.light-mode .extraordinary-cta-section {
        background-color: #fcfcfc !important;
    }
    
    /* Cards and boxes */
    body.light-mode .style-card,
    body.light-mode .industry-card,
    body.light-mode .sector-card,
    body.light-mode .why-card,
    body.light-mode .process-card,
    body.light-mode .product-material-card,
    body.light-mode .addon-card,
    body.light-mode .blog-card,
    body.light-mode .mega-menu-content,
    body.light-mode .cp-card,
    body.light-mode .card,
    body.light-mode .why-box,
    body.light-mode .testimonial-card,
    body.light-mode .step-item,
    body.light-mode .instant-quote-form,
    body.light-mode .premium-gallery-single,
    body.light-mode .pg-steps-box,
    body.light-mode .pg-accordion-item,
    body.light-mode .pg-accordion-body,
    body.light-mode .blog-main-card,
    body.light-mode .blog-side-card {
        background-color: #f0f0f0 !important;
        border: 1px solid #e4e4e4 !important;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05) !important;
    }
    body.light-mode .style-card h4 a,
    body.light-mode .industry-card h4 a,
    body.light-mode .sector-card h3 a,
    body.light-mode .product-material-card span,
    body.light-mode .cp-card-name,
    body.light-mode .card h3,
    body.light-mode .why-box h4,
    body.light-mode .testimonial-card h4,
    body.light-mode .step-item h3,
    body.light-mode .pg-steps-title,
    body.light-mode .pg-accordion-q,
    body.light-mode .blog-main-card h4,
    body.light-mode .blog-side-card h4 {
        color: #111111 !important;
    }
    body.light-mode .card p,
    body.light-mode .why-box p,
    body.light-mode .testimonial-card p,
    body.light-mode .step-item p,
    body.light-mode .blog-main-card p,
    body.light-mode .blog-side-card p {
        color: #444444 !important;
    }
    
    /* Input & Forms */
    body.light-mode .top-bar-container form,
    body.light-mode input[type="text"],
    body.light-mode input[type="email"] {
        background-color: #f1f1f1 !important;
        color: #111111 !important;
    }
    
    /* Footer */
    body.light-mode footer,
    body.light-mode .cp-footer,
    body.light-mode .cp-footer-bottom {
        background-color: #ffffff !important;
        border-top: 1px solid #eeeeee !important;
    }
    body.light-mode .cp-footer-title {
        color: #111111 !important;
    }
    body.light-mode .cp-footer-desc,
    body.light-mode .cp-footer-links a,
    body.light-mode .cp-footer-address,
    body.light-mode .cp-footer-bottom p {
        color: #555555 !important;
    }
    
    /* Breadcrumbs */
    body.light-mode .hero-breadcrumb span,
    body.light-mode .breadcrumb span,
    body.light-mode .hero-breadcrumb a,
    body.light-mode .breadcrumb a {
        color: #555555 !important;
    }
    body.light-mode .hero-breadcrumb svg,
    body.light-mode .breadcrumb svg {
        color: #555555 !important;
    }

/* =================================================
   GLOBAL BREADCRUMB SYSTEM
   ================================================= */
.hero-breadcrumb,
.faq-breadcrumb,
.blog-breadcrumb,
.au-breadcrumb,
.product-breadcrumbs,
.ab-us-breadcrumb,
.qu-breadcrumb,
.contact-breadcrumb,
.breadcrumbs {
    display: flex !important;
    align-items: center !important;
    gap: 12.5px !important;
    flex-wrap: wrap !important;
    list-style: none !important;
    background: transparent !important;
}

.hero-breadcrumb a,
.hero-breadcrumb span,
.faq-breadcrumb a,
.faq-breadcrumb span,
.blog-breadcrumb a,
.blog-breadcrumb span,
.au-breadcrumb a,
.au-breadcrumb span,
.product-breadcrumbs a,
.product-breadcrumbs span,
.ab-us-breadcrumb a,
.ab-us-breadcrumb span,
.qu-breadcrumb a,
.qu-breadcrumb span,
.contact-breadcrumb a,
.contact-breadcrumb span,
.breadcrumbs a,
.breadcrumbs span {
    display: inline-flex !important;
    align-items: center !important;
    font-size: 16px !important;
    font-weight: 500 !important;
    text-decoration: none !important;
    transition: color 0.3s ease !important;
}

/* Home Icon is always Gold */
.hero-breadcrumb a.breadcrumb-home i,
.hero-breadcrumb a:first-of-type i,
.faq-breadcrumb a.faq-bc-home i,
.blog-breadcrumb a.blog-bc-home i,
.au-breadcrumb a.au-bc-home i,
.product-breadcrumbs a:first-of-type i,
.ab-us-breadcrumb a.ab-us-bc-link i,
.qu-breadcrumb a.qu-bc-home i,
.contact-breadcrumb a.contact-bc-home i,
.breadcrumbs a:first-of-type i {
    color: #f5c542 !important;
    font-size: 16px !important;
}

/* Hover State is always Gold */
.hero-breadcrumb a:hover,
.faq-breadcrumb a:hover,
.blog-breadcrumb a:hover,
.au-breadcrumb a:hover,
.product-breadcrumbs a:hover,
.ab-us-breadcrumb a:hover,
.qu-breadcrumb a:hover,
.contact-breadcrumb a:hover,
.breadcrumbs a:hover {
    color: #f5c542 !important;
}

/* Inactive/Muted Link color */
.hero-breadcrumb a,
.faq-breadcrumb a,
.blog-breadcrumb a,
.au-breadcrumb a,
.product-breadcrumbs a,
.ab-us-breadcrumb a,
.qu-breadcrumb a,
.contact-breadcrumb a,
.breadcrumbs a {
    color: #a0a0a0 !important;
}

/* Active/Current page text is light gray */
.hero-breadcrumb span.breadcrumb-active,
.hero-breadcrumb span:last-child,
.faq-breadcrumb span:last-child,
.blog-breadcrumb span.blog-bc-current,
.au-breadcrumb span.au-bc-current,
.product-breadcrumbs .product-bc-active,
.ab-us-breadcrumb span.ab-us-bc-current,
.qu-breadcrumb span.qu-bc-current,
.contact-breadcrumb span.contact-bc-current,
.breadcrumbs span:last-child {
    color: #b3b3b3 !important;
}

/* Separator is always chevron-right, small and semitransparent */
.hero-breadcrumb i.fa-chevron-right,
.faq-breadcrumb i.fa-chevron-right,
.blog-breadcrumb i.fa-chevron-right,
.au-breadcrumb i.fa-chevron-right,
.product-breadcrumbs i.fa-chevron-right,
.ab-us-breadcrumb i.fa-chevron-right,
.qu-breadcrumb i.fa-chevron-right,
.contact-breadcrumb i.fa-chevron-right,
.breadcrumbs i.fa-chevron-right {
    font-size: 11px !important;
    color: rgba(255, 255, 255, 0.4) !important;
    margin: 0 4px !important;
    display: inline-flex !important;
    align-items: center !important;
}
</style>




