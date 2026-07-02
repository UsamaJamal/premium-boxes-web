
@include('web/layout/header')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Manage Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
   
            <!-- login area start -->
            <div class="login-register-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a data-toggle="" href="#">
                                        <h4>Update Your Profile</h4>
                                    </a>
                                </div>
                               
                                <input type="hidden" name="email" value="{{ Session::get('email') }}">
                         
                                <?php
$email =  Session::get('email');

?>
                                    <div id="" class="tab-pane">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                                <form id="basic-form" method="post" action="{{url('user_info_update'.'/'.$email)}}">
                                                @csrf
                                                @if(Session::has('user-name'))
                    
                                                <input type="text" id="first_name" name="first_name" value="{{ Session::get('fname') }}" placeholder="First Name" required/>
                                                <input type="text" id="last_name" name="last_name" value="{{ Session::get('lname') }}" placeholder="Last Name" required/>
                                                    <input type="text" id="user_name" name="user_name" value="{{ Session::get('user-name') }}" placeholder="Username" required/>
                                                    <input type="password" id="user_password" name="user_password" value="{{ Session::get('password') }}" placeholder="Password" required/>
                                                    <input type="text" id="phone" name="phone" value="{{ Session::get('num') }}" placeholder="Number" required/>
                                                    <input name="user_email" id="user_email" value="{{ Session::get('email') }}" placeholder="Email" type="email" required/>
                   
                                               
                                                    @endif
                                                    <div class="button-box">
                                                        <button type="submit" name="submit"><span>Update</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
$(document).ready(function() {
$("#basic-form").validate();
});
</script>
@include('web/layout/footer') 