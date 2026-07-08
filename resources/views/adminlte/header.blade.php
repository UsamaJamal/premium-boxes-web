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
            /* PREMIUM CUSTOM CSS START */
            body, .content-wrapper { background-color: #f8f9fc !important; }
            
            /* Sidebar Styling */
            .main-sidebar {
                background: linear-gradient(180deg, #234376 0%, #172b4d 100%) !important;
                box-shadow: 4px 0 15px rgba(0,0,0,0.1) !important;
            }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
                background-color: #49d8f7 !important;
                color: #234376 !important;
                font-weight: 600;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(73, 216, 247, 0.4);
            }
            .nav-sidebar > .nav-item { margin-bottom: 4px; }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link {
                border-radius: 8px;
                transition: all 0.3s ease;
            }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover {
                background-color: rgba(73, 216, 247, 0.2) !important;
                color: #49d8f7 !important;
                transform: translateX(4px);
            }
            
            /* Top Navbar Styling */
            .main-header {
                background-color: #ffffff !important;
                border-bottom: 1px solid #e3e6f0;
                box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15) !important;
            }
            .main-header .nav-link { color: #234376 !important; }
            
            /* Cards Styling */
            .card {
                border: none !important;
                border-radius: 12px !important;
                box-shadow: 0 5px 15px rgba(0,0,0,0.05) !important;
                transition: transform 0.2s ease;
            }
            .card:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(0,0,0,0.08) !important; }
            .card-header, .header-2 {
                background: linear-gradient(135deg, #234376 0%, #3660a1 100%) !important;
                color: #ffffff !important;
                border-top-left-radius: 12px !important;
                border-top-right-radius: 12px !important;
                border-bottom: none;
                padding: 15px 20px;
            }
            .card-header h5 { color: #ffffff !important; font-weight: 600; }
            
            /* Buttons and Inputs */
            .form-control {
                border-radius: 6px !important;
                border: 1px solid #d1d3e2 !important;
                padding: 10px 15px;
            }
            .form-control:focus {
                border-color: #49d8f7 !important;
                box-shadow: 0 0 0 0.2rem rgba(73, 216, 247, 0.25) !important;
            }
            .save, .btn-primary {
                background: linear-gradient(135deg, #49d8f7 0%, #234376 100%) !important;
                border: none !important;
                border-radius: 8px !important;
                box-shadow: 0 4px 10px rgba(35, 67, 118, 0.3) !important;
                transition: all 0.3s ease;
            }
            .save:hover, .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 15px rgba(35, 67, 118, 0.4) !important;
                background: linear-gradient(135deg, #3bbde0 0%, #1e3a68 100%) !important;
            }
            .btn-danger {
                border-radius: 8px !important;
                background: linear-gradient(135deg, #ff4328 0%, #d4220b 100%) !important;
                border: none !important;
                box-shadow: 0 4px 10px rgba(255, 67, 40, 0.3) !important;
            }
            .btn-danger:hover {
                box-shadow: 0 6px 15px rgba(255, 67, 40, 0.4) !important;
                transform: translateY(-2px);
            }
            
            /* Dashboard Specific Widgets */
            .small-box {
                border-radius: 12px !important;
                border: none !important;
                box-shadow: 0 5px 15px rgba(0,0,0,0.08) !important;
                transition: transform 0.3s ease;
                overflow: hidden;
            }
            .small-box:hover { transform: translateY(-5px); box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important; }
            .small-box .icon > i { transition: transform .3s linear; }
            .small-box:hover .icon > i { transform: scale(1.1); }
            
            /* Custom Colors for Small Boxes */
            .bg-info { background: linear-gradient(135deg, #49d8f7 0%, #234376 100%) !important; }
            .bg-success { background: linear-gradient(135deg, #1cc88a 0%, #13855c 100%) !important; }
            .bg-warning { background: linear-gradient(135deg, #f6c23e 0%, #dda20a 100%) !important; }
            .bg-danger { background: linear-gradient(135deg, #ff4328 0%, #c42611 100%) !important; }
            
            /* Typography & Layout */
            h1, h2, h3, h4, h5, h6 { font-weight: 700; color: #234376; }
            .col-form-label { color: #4a5568; font-weight: 600; }
            .content-header h1 { font-weight: 700; color: #234376; font-size: 28px; }
            .breadcrumb-item a { color: #49d8f7 !important; font-weight: 500; }
            .breadcrumb-item.active { color: #858796 !important; }
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