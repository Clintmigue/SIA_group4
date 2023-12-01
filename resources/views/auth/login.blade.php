@extends('layouts.auth')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
       <h4></h4>
             
        <div class="card">
            <div class="card-header bg-primary ">Sign in to continue.</div>
            <div class="card-body ">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control input-sm @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn bg-primary" value="Login">
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    <i class="input-helper"></i></label>
                  </div>
                  <a href="" class="auth-link text-black">Forgot password?</a>
                </div>
                </div>
                <!-- <div class="text-center mt-4 font-weight-light">
                  Don't have an account?  <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Create an account</a>
                </div> -->
              </form>
            </div>
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection
