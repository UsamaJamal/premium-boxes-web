<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="icon" href="{{ asset('uploads/Premium-boxes.webp') }}?v=2">
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
            /* PREMIUM CUSTOM CSS START - MODERN LIGHT THEME */
            body, .content-wrapper { background-color: #f4f7fe !important; font-family: 'Inter', sans-serif; }
            
            /* Sidebar Styling */
            .main-sidebar {
                background: #121625 !important; /* Deep dark blue/black */
                box-shadow: 4px 0 15px rgba(0,0,0,0.05) !important;
                border-right: none;
            }
            .sidebar-dark-primary .brand-link {
                border-bottom: 1px solid rgba(255,255,255,0.05) !important;
                color: #ffffff !important;
                padding: 1.25rem 1rem;
            }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active {
                background-color: transparent !important;
                color: #ffb800 !important; /* Yellow text */
                font-weight: 600;
                border-radius: 0;
                box-shadow: none;
                border-left: 4px solid #ffb800; /* Yellow left border */
            }
            .nav-sidebar > .nav-item { margin-bottom: 8px; }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link {
                border-radius: 0;
                color: #a0aec0 !important;
                transition: all 0.2s ease;
                padding-left: 1.25rem;
            }
            .sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link:hover {
                background-color: rgba(255,255,255,0.03) !important;
                color: #ffffff !important;
            }
            .nav-header { color: #4a5568 !important; text-transform: uppercase; font-size: 11px; font-weight: 700; letter-spacing: 1px;}
            
            /* Top Navbar Styling */
            .main-header {
                background-color: #ffffff !important;
                border-bottom: none !important;
                box-shadow: 0 4px 20px rgba(0,0,0,0.02) !important;
                padding: 10px 0;
            }
            .main-header .nav-link { color: #4a5568 !important; font-size: 18px; }
            
            /* Cards Styling */
            .card {
                border: none !important;
                border-radius: 16px !important;
                box-shadow: 0 4px 20px rgba(0,0,0,0.03) !important;
                transition: transform 0.2s ease;
                background-color: #ffffff;
                margin-bottom: 24px;
            }
            .card-header, .header-2 {
                background: #ffffff !important;
                color: #1a202c !important;
                border-top-left-radius: 16px !important;
                border-top-right-radius: 16px !important;
                border-bottom: 1px solid #f1f5f9 !important;
                padding: 20px 24px;
            }
            .card-header h5, .card-title { color: #1a202c !important; font-weight: 700; font-size: 16px; margin:0; float: none !important; }
            
            /* Buttons and Inputs */
            .form-control, .search-control {
                border-radius: 8px !important;
                border: 1px solid #e2e8f0 !important;
                background-color: #f8fafc !important;
                padding: 10px 15px;
                color: #4a5568;
            }
            .form-control:focus, .search-control:focus {
                border-color: #cbd5e1 !important;
                box-shadow: none !important;
                background-color: #ffffff !important;
            }
            .btn-warning-custom {
                background: #ffb800 !important;
                color: #ffffff !important;
                border: none !important;
                border-radius: 8px !important;
                font-weight: 600;
                padding: 8px 16px;
                box-shadow: 0 4px 10px rgba(255, 184, 0, 0.2) !important;
            }
            .btn-warning-custom:hover { background: #e6a600 !important; }
            
            /* Dashboard Stat Boxes (New Style) */
            .stat-box {
                background: #ffffff;
                border-radius: 16px;
                padding: 20px;
                display: flex;
                flex-direction: column;
                box-shadow: 0 4px 20px rgba(0,0,0,0.03);
                height: 100%;
            }
            .stat-box .stat-top { display: flex; align-items: center; margin-bottom: 15px; }
            .stat-box .stat-icon {
                width: 48px; height: 48px; border-radius: 12px;
                display: flex; align-items: center; justify-content: center;
                font-size: 20px; margin-right: 15px;
            }
            .stat-box.blue .stat-icon { background: #e0e7ff; color: #4f46e5; }
            .stat-box.green .stat-icon { background: #dcfce7; color: #16a34a; }
            .stat-box.purple .stat-icon { background: #f3e8ff; color: #9333ea; }
            .stat-box.orange .stat-icon { background: #ffedd5; color: #ea580c; }
            
            .stat-box .stat-info h4 { font-size: 13px; color: #64748b; font-weight: 600; margin-bottom: 4px; text-transform: uppercase; letter-spacing: 0.5px;}
            .stat-box .stat-info h2 { font-size: 24px; color: #1e293b; font-weight: 800; margin: 0; }
            
            .stat-box .stat-bottom { display: flex; justify-content: space-between; align-items: flex-end; margin-top: auto; }
            .stat-box .stat-trend { font-size: 13px; font-weight: 600; }
            .stat-box .stat-trend.up { color: #10b981; }
            .stat-box .stat-trend span { color: #94a3b8; font-weight: 400; display: block; font-size: 11px; margin-top: 2px;}
            .stat-box .stat-chart { width: 60px; height: 30px; }
            
            /* Typography & Layout */
            h1, h2, h3, h4, h5, h6 { font-weight: 700; color: #1e293b; }
            .page-title { font-size: 24px; font-weight: 700; color: #0f172a; margin: 0;}
            .page-subtitle { font-size: 14px; color: #64748b; margin-top: 5px;}
            
            /* Table Styling */
            .table-modern { width: 100%; margin-bottom: 0; color: #475569; }
            .table-modern th { border-top: none !important; border-bottom: 1px solid #f1f5f9 !important; font-size: 12px; font-weight: 600; color: #64748b; padding: 16px 20px; text-transform: none; }
            .table-modern td { border-top: 1px solid #f1f5f9 !important; padding: 16px 20px; vertical-align: middle; font-size: 14px; font-weight: 500; color: #1e293b; }
            .table-modern tbody tr:hover { background-color: #f8fafc; }
            
            /* Badges */
            .badge-modern { padding: 6px 12px; border-radius: 6px; font-weight: 600; font-size: 12px; }
            .badge-modern.success { background-color: #dcfce7; color: #16a34a; }
            .badge-modern.warning { background-color: #fef3c7; color: #d97706; }
            .badge-modern.danger { background-color: #fee2e2; color: #dc2626; }
            
            /* Progress Bars */
            .progress-modern { height: 6px; border-radius: 3px; background-color: #f1f5f9; box-shadow: none; margin-top: 8px;}
            .progress-modern .progress-bar { border-radius: 3px; background-color: #ffb800; }
            
            /* Quick Actions */
            .quick-action-btn { display: flex; align-items: center; width: 100%; padding: 12px 16px; border-radius: 8px; margin-bottom: 12px; text-decoration: none !important; font-weight: 600; font-size: 14px; transition: all 0.2s;}
            .qa-add-product { background-color: #fffbeb; color: #d97706; }
            .qa-create-cat { background-color: #eff6ff; color: #2563eb; }
            .qa-add-brand { background-color: #f0fdf4; color: #16a34a; }
            .qa-create-coupon { background-color: #faf5ff; color: #9333ea; }
            .qa-add-blog { background-color: #fff7ed; color: #ea580c; }
            .quick-action-btn i { margin-right: 12px; font-size: 18px; }
            
            /* Timeline */
            .timeline-modern { position: relative; padding-left: 30px; margin: 0; list-style: none; }
            .timeline-modern::before { content: ''; position: absolute; top: 0; bottom: 0; left: 15px; width: 2px; background: #e2e8f0; }
            .timeline-modern li { position: relative; margin-bottom: 24px; }
            .timeline-modern li::before { content: ''; position: absolute; left: -21px; top: 4px; width: 14px; height: 14px; border-radius: 50%; background: #ffffff; border: 2px solid #3b82f6; z-index: 1;}
            .timeline-modern li.blue::before { border-color: #3b82f6; }
            .timeline-modern li.green::before { border-color: #10b981; }
            .timeline-modern li.purple::before { border-color: #8b5cf6; }
            .timeline-modern li.yellow::before { border-color: #f59e0b; }
            .timeline-modern p { margin: 0; font-size: 14px; color: #334155; font-weight: 500; }
            .timeline-modern span { font-size: 12px; color: #94a3b8; }
            /* PREMIUM CUSTOM CSS END */
    </style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav align-items-center">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ml-3">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-transparent border-right-0" style="border: 1px solid #e2e8f0; border-radius: 8px 0 0 8px;"><i class="fas fa-search text-muted"></i></span>
            </div>
            <input class="form-control search-control border-left-0" type="search" placeholder="Search products, orders, customers..." aria-label="Search" style="width: 300px; border-radius: 0 8px 8px 0 !important; background: transparent !important;">
        </div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item mr-4">
          <button class="btn btn-warning-custom"><i class="fas fa-plus mr-2"></i> Add Product</button>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item mr-3">
        <a class="nav-link position-relative" href="#">
          <i class="far fa-bell text-dark" style="font-size: 20px;"></i>
          <span class="badge badge-warning navbar-badge" style="border-radius: 50%; padding: 4px 5px; right: 0px; top: 0px;">5</span>
        </a>
      </li>
      <li class="nav-item mr-4">
        <a class="nav-link position-relative" href="#">
          <i class="far fa-comment-dots text-dark" style="font-size: 20px;"></i>
          <span class="badge badge-warning navbar-badge" style="border-radius: 50%; padding: 4px 5px; right: 0px; top: 0px;">3</span>
        </a>
      </li>
      
      <!-- User Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#">
          <img src="{{url('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-1 mr-2" alt="User Image" style="width: 35px; height: 35px;">
          <div class="d-none d-md-block text-left">
            <span class="d-block font-weight-bold text-dark" style="font-size: 14px; line-height: 1;">Admin</span>
            <small class="text-muted" style="font-size: 11px;">Super Admin</small>
          </div>
          <i class="fas fa-chevron-down ml-2 text-muted" style="font-size: 10px;"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right mt-2 border-0 shadow-sm" style="border-radius: 12px;">
          <a href="{{url('changepassword')}}" class="dropdown-item py-3">
            <i class="fas fa-key mr-2 text-muted"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{url('dlogout')}}" class="dropdown-item py-3 text-danger">
            <i class="fas fa-sign-out-alt mr-2"></i> Log Out
          </a>
        </div>
      </li>
    </ul>
  </nav>