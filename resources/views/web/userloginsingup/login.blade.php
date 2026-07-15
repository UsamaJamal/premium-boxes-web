@include('web/header')
@if(Session::has('infoupdate'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('infoupdate') }}</div>
                    </center>
                    
                    @endif

@if(Session::has('Password update msg'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('Password update msg') }}</div>
                    </center>
                    
                    @endif

                    @if(Session::has('error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif
<!-- ====================== Login Page ======================  -->
<img class="wave" src="{{url('web\assets\img\wave.png')}}">
<div class="container1">
    <div class="img1">
        <img src="{{url('web\assets\img\img.svg')}}">
    </div>
    <div class="login-content1">
        <form class="form1" method="post" action="{{url('user_login')}}" id="loginform">
            @csrf
            <img src="{{url('web\assets\img\avatar.svg')}}">
            <h2 class="title">Welcome</h2>
               <div class="input-div1 one">
                  <div class="i1">
                          <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                          <h5>Username</h5>
                          <input type="text" class="input" name="name-user" required>
                  </div>
               </div>
               <div class="input-div1 pass">
                  <div class="i1"> 
                       <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                       <h5>Password</h5>
                       <input type="password" class="input"  name="password-user" required>
               </div>
               
            </div>
             <div class="div">
               
               </div>
            <span><a class="a" href="{{url('user-register')}}/">Register Now</a></span>
                 <span><a class="a" href="{{url('user/forget-password')}}/">Forgot Password?</a></span>
            <input type="submit" class="btn registration-btn" value="Login" style="margin: 1rem 0;">
        </form>
    </div>
</div>
<!-- ====================== Login Page ======================  -->
@include('web/footer')
