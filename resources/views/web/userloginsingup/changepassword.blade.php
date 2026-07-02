@include('web/layout/header')

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Change Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
    @if(Session::has('error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif
                    
            <!-- login area start -->
            <div class="login-register-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4>Change Password</h4>
                                    </a>
                                
                                </div>
                                <input type="hidden" name="email" value="{{ Session::get('email') }}">
                                <?php
$email =  Session::get('email');
?>
                                <div class="tab-content">
                                    <div id="lg3" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-register-form">
                                            <form method="post" action="{{url('updatepassword'.'/'.$email)}}">
                                                @csrf
                                                
                                                    <input type="password" name="oldpassword" placeholder="Old Password" />
                                                    <input type="password" name="newpassword" placeholder="New Password" />
                                                    
                                                    <div class="button-box">
                                                        
                                                        <button type="submit"><span>Update</span></button>
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
            </div>
           
       
@include('web/layout/footer') 