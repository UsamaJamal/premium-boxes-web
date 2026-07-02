@include('web/header')

     @if(Session::has('message'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('message') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('error'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif

  @if(Session::has('email not found'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('email not found') }}</div>
                    </center>
                    
                    @endif
                        @if(Session::has('error rand code'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error rand code') }}</div>
                    </center>
                    
                    @endif

<div class="container" style="margin-top: 50px;margin-bottom: 50px;">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header" style="background-color: rgb(34 67 117);color:#fff;">Find Your Account</div>
                
               <div class="card-body">
                
                  
                   <form method="POST" action="{{url('user/forget-password').'/'}}">
                        @csrf
                        <p>
                        Please enter your email to search for your account.
                        </p>
                          <div class="form-group row">
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   <div class="form-group row mb-0">
                         <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="background-color: #224375;border-color: #224375;border-radius:0px;">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




    <!--<![endif]-->
@include('web/footer')
 <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="node_modules/@coreui/icons/js/svgxuse.min.js"></script>