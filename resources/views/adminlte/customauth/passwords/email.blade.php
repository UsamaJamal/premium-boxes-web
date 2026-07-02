@include('adminlte/header')
  @include('adminlte/sidebarlink')

     @if(Session::has('message'))
                    
                    <center>
                    
                    <div  class='alert alert-success'> {{ Session::get('message') }}</div>
                    </center>
                    
                    @endif
                    @if(Session::has('error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error') }}</div>
                    </center>
                    
                    @endif

@if(Session::has('email-error'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('email-error') }}</div>
                    </center>
                    
                    @endif
     

<div class="container" style="margin-top: 50px;">
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin:130px 0px 250px 0px !important;">
              <div class="card-header">Find Your Account</div>
                
               <div class="card-body">
                    @if (session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                   <form method="POST" action="{{url('admin/forget-password')}}">
                        @csrf
                        <p>
                        Please enter your email to search for your account.
                        </p>
                          <div class="form-group row">
                            <div class="col-md-8">
                                <input id="email" type="email" required class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   <div class="form-group row mb-0">
                         <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
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


@include('adminlte/footer')
 <script src="node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
    <script src="node_modules/@coreui/icons/js/svgxuse.min.js"></script>
    <!--<![endif]-->