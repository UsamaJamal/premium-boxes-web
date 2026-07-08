<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="#"><b>Us-</b>Packaging</a> -->
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     <!-- <center> <img src="images/blacklogo.png"></center> -->
      <p class="login-box-msg" style="padding-top: 25px;padding-bottom: 25px;font-size: 17px;font-weight: 500;">Please enter your user information.</p>

      <form  action="{{url('admin/check_login')}}" method="post" enctype="multipart/form-data">
        @csrf
        @if(Session::has('error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name" name="adminuser">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="adminpassword">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <p class="mb-3">
        <!--<a href="{{url('admin/forget-password')}}">Forgot Password</a>-->
      </p>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-12">
           <center>
           	 <button style="background-color: #5c89b5;color: #ffff;" type="submit" name="submit" class="btn btn btn-block btn-flat">Login</button>
           </center>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
     

    
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->



