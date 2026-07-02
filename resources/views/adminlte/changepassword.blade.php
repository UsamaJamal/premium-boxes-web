@include('adminlte/header')
  @include('adminlte/sidebarlink')
  @if(Session::has('password_update'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('password_update') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('password_error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('password_error') }}</div>
                    </center>
                    
                    @endif
<div class="login-box" style="margin: 100px 550px 170px 550px;">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Change your Password</p>

      <form id="basic-form" action="{{url('admin/updatepassword').'/'}}" method="post">
        @csrf
        <div class="form-group">
                    <label for="oldpassword" style="color: #5c89b5;">Old Password</label>
                    <input id="oldpassword" type="password" class="form-control"placeholder="OldPassword" name="oldpassword" required>
                  </div>

                  <div class="form-group">
                    <label for="newpassword" style="color: #5c89b5;">New Password</label>
                    <input id="newpassword" type="password" class="form-control"placeholder="NewPassword" name="newpassword" required>
                  </div>
       
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Save Password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        
      </div>
      <!-- /.social-auth-links -->

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
$("#basic-form").validate();
});
</script>
@include('adminlte/footer')