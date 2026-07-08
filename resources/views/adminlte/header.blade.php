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
      ::-webkit-scrollbar 
            {
              /*width: 10px;*/
              /*color: #241d6b;*/
              /*height: 150px;*/
            }
            
            /* Track */
            ::-webkit-scrollbar-track 
            {
              /*box-shadow: inset 0 0 2px #565783; 
              border-radius: 5px;*/
            }
             
            /* Handle */
            ::-webkit-scrollbar-thumb 
            {
              /*background: #241d6b; */
              /*border-radius: 5px;*/
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover 
            {
              /*background: #241d6b; */
            }
            .card-header
            {
              background-color: #234376;
              color: #49d8f7;
            }
            .header-2
            {
              background-color: #234376;
              color: #49d8f7;
            }
            .col-form-label
            {
              color: #234376;
              margin-left: 0px;
              font-size: 14px;
            }
            label
            {
              color: #653818;
            }
            .img-view
            {
              margin-left: 15px;
              margin-top: 15px;
            }
            .form-control
            {
              border-color: #c9c9c9;
            }
            .top-header-button
            {
              float: right;
            }
            .btn-top
            {
              font-size: 12px;
              padding: 0px 6px;
              border-radius: 5px;    
              height: 32px;
              border: none;
              background-color: #241d6b;
              color: #fff;
            }/* removed hover: .btn-top:hover { ... } */
            .card-header h5
            {
              float: left;
            }
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