@include('adminlte/header')
  @include('adminlte/sidebarlink')

<div class="container" style="margin-top: 50px;">
     <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card" style="margin:130px 0px 250px 0px !important;">
                 <div class="card-header">Verify Code via Email</div>
                      <div class="card-body">
                          <form method="POST" action={{url('admin/verify-code')}}>
                           @csrf
                           <input type="hidden" name="token" value="">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Verfication Code</label>
                          <div class="col-md-6">
                                <input id="random" required type="text" class="form-control @error('random') is-invalid @enderror" name="random" value="{{ $email ?? old('random') }}" autocomplete="random" autofocus>

                                @error('random')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div> -->


                     <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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
@include('adminlte/footer')