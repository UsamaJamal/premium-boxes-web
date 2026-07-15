@include('web/header')
<style>
    #blah{
        display:none;
    }
</style>
<!-- ========================= Sign Up Form ========================= -->
<section class="singupsection">
    <div class="container">
        <div class="signup-form">
          <div class="form-width">
          <div class="row justify-content-center">
              <div class="col-md-4 col-width">
              @if(Session::has('error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif

                    @if(Session::has('success'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('success') }}</div>
                    </center>
                    
                    @endif
                  <div class="signup-heading">
                      <h3>Sign Up</h3>
                  </div>
              
                <form method="post" action="{{url('add_user')}}" enctype="multipart/form-data" id="registerform">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control form-inp-pad" placeholder="First Name" name="fname" required>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control form-inp-pad" placeholder="Last Name" name="lname"  required>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control form-inp-pad" placeholder="User Name" name="uname" required>
                      </div>

                    <div class="form-group">
                      <input type="email" class="form-control form-inp-pad" placeholder="Email" name="email" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-inp-pad" placeholder="Password" name="password" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-inp-pad" placeholder="Confirm Password" name="cpassword"  required>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control form-inp-pad" placeholder="Mobile Number"name="mnumber" required>
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control form-inp-pad"  name="image" id="exampleInputFile" placeholder="" required>
                      </div>

                      <div class="form-group">
                          <img src="#" id="blah" class="img-view" width="50" height="50">
                      </div>
                      <div class="form-group">
                          
                      </div>
                    <button type="submit" name="submit" class="btn registration-btn ">Create Account</button>
                    <div class="form-group">
                     <p style="font-size: 13px;width: 305px;text-align:center;">If You have already account please<a href="{{url('user-login')}}/"> Login Here</a></p>
                    </div>
                  </form>
              </div>
          </div>
          </div>
        </div>
    </div>
</section>



 <!-- ========================= Sign Up Form ========================= --> 
@include('web/footer')
<script type="text/javascript">
        function readURL(input) {
            var y = document.getElementById("blah");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
        
                reader.onload = function (e) {
                    y.style.display = "block";
                    $('#blah').attr('src', e.target.result);
                }
        
                reader.readAsDataURL(input.files[0]);
            }
            else{
                y.style.display = "none";
            }
        }
        
        $("#exampleInputFile").change(function(){
            readURL(this);
        });
                           
        </script>
