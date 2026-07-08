<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
 

  <link rel="stylesheet" href="{{URL::asset('admin/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('admin/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/summernote/summernote-bs4.css')}}">
   <!-- DataTables -->
   <link rel="stylesheet" href="{{URL::asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{URL::asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    
  
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@8/dist/sweetalert2.min.css" rel="stylesheet" type="text/css">

  <style type="text/css">
      .primary
      {
        border-radius: 5px;
        width: 180px;
        padding: 10px;
        margin: 10px;
        border: none;
        background-color: #3399ff;
        color: #fff;
      }
      .col-form-label
      {
        color: grey;
        font-size: 19px;
        font-family: arial;
        font-weight: bold;
        margin-left: 15px;
      }
      .form-control
      {
        margin-left: 15px;
        height: 40px;
        color: grey;
        width: 100%;
        font-size: 15px;
        border: 1px solid #71748d;
      }
      .radio
      {
        margin-left: 15px;
        color: grey;
        border: 1px solid #71748d;
      }
      .offers
      {
        border-radius: 5px;
        width: 140px;
        height: 50px;
        padding: 10px;
        margin: 30px;
        border: none;
        background-color: #5969ff;
        color: #fff;
        font-weight: bold;
      }
      .save
      {
        /*background-color: #014421;*/
        background-color: #234376;
        width: auto;
        border:none;
        height: auto;
        color: #fff;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 25px;
        padding-left: 25px;
        font-size: 17px;
        border-radius: 5px;
        margin-left: 15px;
      }
      form
      {
        width: 100%;
      }
      .fa-angle-down
      {
        float: right;
      }
      .btn
      {
        width: 100%;
        height: 50px;
        border:none;
        float: left;
        flex-wrap: wrap;
        font-weight: 400;
        display: list-item;
        text-align: -webkit-match-parent;
        align-content: left;
      }
      .sidebar-dark
      {
        background-color:#8f90c4;
      }
      .sidebar-dark-primary .nav-header
      {
        color: #fff;
      }
      .sidebar-dark-primary .sidebar a
      {
        color: #fff;
      }
      h5
      {
        color: #49d8f7;
      }
      .content-header h1
      {
        color: #234376;
      }
      .active
      {
        color: #653818;
      }
      .dropdown-item:hover
      {
        /*transition-duration: 0.5s;*/
        /*transition-delay: 1s;*/
        /*font-weight: bold;*/
        color: #565783;
      }
            /* PREMIUM CUSTOM CSS START - DARK & GOLD THEME */
            body, .content-wrapper { background-color: #f4f6f9 !important; }
            
            /* Sidebar Styling */
            .main-sidebar {
                background: #111111 !important; /* Deep dark background matching website */
                box-shadow: 4px 0 15px rgba(0,0,0,0.2) !important;
                border-right: 1px solid #2a2a2a;
            }
            .sidebar-dark-primary .brand-link {
                border-bottom: 1px solid #2a2a2a !important;
                color: #f3c623 !important; /* Gold text */
            }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
                background-color: #f3c623 !important; /* Gold background */
                color: #111111 !important; /* Dark text */
                font-weight: 700;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(243, 198, 35, 0.4);
            }
            .nav-sidebar > .nav-item { margin-bottom: 4px; }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link {
                border-radius: 8px;
                color: #cccccc !important;
                transition: all 0.3s ease;
            }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover {
                background-color: rgba(243, 198, 35, 0.15) !important;
                color: #f3c623 !important;
                transform: translateX(4px);
            }
            .nav-header { color: #888888 !important; text-transform: uppercase; font-size: 11px; letter-spacing: 1px;}
            
            /* Top Navbar Styling */
            .main-header {
                background-color: #1a1a1a !important;
                border-bottom: 1px solid #2a2a2a;
                box-shadow: 0 .15rem 1.75rem 0 rgba(0,0,0,.15) !important;
            }
            .main-header .nav-link { color: #f3c623 !important; }
            
            /* Cards Styling */
            .card {
                border: 1px solid #e0e0e0 !important;
                border-radius: 12px !important;
                box-shadow: 0 8px 20px rgba(0,0,0,0.03) !important;
                transition: transform 0.2s ease;
                background-color: #ffffff;
            }
            .card:hover { box-shadow: 0 10px 25px rgba(0,0,0,0.08) !important; }
            .card-header, .header-2 {
                background: #111111 !important;
                color: #f3c623 !important;
                border-top-left-radius: 12px !important;
                border-top-right-radius: 12px !important;
                border-bottom: 3px solid #f3c623 !important;
                padding: 15px 20px;
            }
            .card-header h5 { color: #f3c623 !important; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;}
            
            /* Buttons and Inputs */
            .form-control {
                border-radius: 6px !important;
                border: 1px solid #d1d3e2 !important;
                padding: 10px 15px;
            }
            .form-control:focus {
                border-color: #f3c623 !important;
                box-shadow: 0 0 0 0.2rem rgba(243, 198, 35, 0.25) !important;
            }
            .save, .btn-primary {
                background: #f3c623 !important;
                color: #111111 !important;
                border: none !important;
                border-radius: 8px !important;
                box-shadow: 0 4px 10px rgba(243, 198, 35, 0.3) !important;
                transition: all 0.3s ease;
                font-weight: 700;
            }
            .save:hover, .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 15px rgba(243, 198, 35, 0.5) !important;
                background: #d4a919 !important;
            }
            .btn-danger {
                border-radius: 8px !important;
                background: #e74a3b !important;
                border: none !important;
            }
            
            /* Dashboard Specific Widgets */
            .small-box {
                border-radius: 12px !important;
                border: none !important;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05) !important;
                transition: transform 0.3s ease;
                overflow: hidden;
            }
            .small-box:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important; }
            .small-box .inner h3 { font-weight: 800; color: #ffffff !important; }
            .small-box .inner p { color: #cccccc !important; font-size: 16px; }
            .small-box .icon > i { transition: transform .3s linear; color: rgba(255,255,255,0.08) !important; }
            .small-box:hover .icon > i { transform: scale(1.1); }
            
            /* Custom Colors for Small Boxes - Sleek Dark Palette */
            .bg-info { background: linear-gradient(135deg, #2b2b2b 0%, #1a1a1a 100%) !important; border-bottom: 4px solid #f3c623 !important; }
            .bg-info .inner h3 { color: #f3c623 !important; }
            .bg-success { background: linear-gradient(135deg, #2b2b2b 0%, #1a1a1a 100%) !important; border-bottom: 4px solid #1cc88a !important; }
            .bg-warning { background: linear-gradient(135deg, #2b2b2b 0%, #1a1a1a 100%) !important; border-bottom: 4px solid #f6c23e !important; }
            .bg-danger { background: linear-gradient(135deg, #2b2b2b 0%, #1a1a1a 100%) !important; border-bottom: 4px solid #e74a3b !important; }
            
            .bg-info .small-box-footer, .bg-success .small-box-footer, .bg-warning .small-box-footer, .bg-danger .small-box-footer {
                background: rgba(0,0,0,0.3) !important;
                color: #aaaaaa !important;
                border-top: 1px solid #333333;
            }
            .bg-info .small-box-footer:hover { color: #f3c623 !important; }
            
            /* Typography & Layout */
            h1, h2, h3, h4, h5, h6 { font-weight: 700; color: #333333; }
            .content-header h1 { font-weight: 800; color: #111111; font-size: 28px; }
            .breadcrumb-item a { color: #111111 !important; font-weight: 600; }
            .breadcrumb-item.active { color: #888888 !important; }
            
            /* Table Styling */
            .table-hover tbody tr:hover { background-color: rgba(243, 198, 35, 0.05); }
            .table thead th { border-bottom: 2px solid #e0e0e0; color: #111111; text-transform: uppercase; font-size: 12px;}
            /* PREMIUM CUSTOM CSS END */
    </style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#234376;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="color:white;"></i></a>
      </li> 
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user" style="color:white;"></i>
          <!-- <span class="badge badge-danger navbar-badge">3</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <a href="{{url('dlogout')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
            
              <div class="media-body">
                <h3 class="dropdown-item-title" style="font-size: 20px;">
                 LogOut
                 
                </h3>
                
              </div>
            </div>
            <!-- Message End -->
          </a>
           <div class="dropdown-divider"></div>
          <a href="{{url('changepassword')}}" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
             
              <div class="media-body">
                <h3 class="dropdown-item-title" style="font-size: 20px;">
                ChangePassword
                 
                </h3>
               
            </div>
            <!-- Message End -->
          </a>
   
        </div>

      </li>
      <!-- Notifications Dropdown Menu -->
    
     
    </ul>
  </nav>