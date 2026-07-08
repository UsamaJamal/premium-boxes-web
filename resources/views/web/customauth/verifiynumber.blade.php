@include('web/header')

  @if(Session::has('error rand code'))
                    
                    <center>
                    
                    <div  class='alert alert-danger'> {{ Session::get('error rand code') }}</div>
                    </center>
                    
                    @endif
<div class="container" style="margin-top: 50px;margin-bottom: 50px;">
     <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
                 <div class="card-header" style="background-color: rgb(34 67 117);color:#fff;">Verify Code via Email</div>
                      <div class="card-body">
                          <form method="POST" action="{{url('/verify-code')}}">
                           @csrf
                           <input type="hidden" name="token" value="">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Verfication Code</label>
                          <div class="col-md-6">
                                <input id="random" type="text" class="form-control @error('random') is-invalid @enderror" name="random" value="{{ $email ?? old('random') }}" autocomplete="random" autofocus>

                               
                            </div>
                        </div>
    
                  

 <!--@error('random')-->
 <!--                                   <span class="invalid-feedback" role="alert">-->
 <!--                                       <strong>{{ $message }}</strong>-->
 <!--                                   </span>-->
 <!--                               @enderror-->
                     <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #224375;border-color: #224375;border-radius:0px;">
                                   Verify
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('web/footer')
