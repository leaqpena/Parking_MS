@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Here!') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-8">
                                <div class="p-5">
                                     <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                         </div>
                                            <div class="form-group row">
                                              <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name"   placeholder="Name">
                                              @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{$message}}</strong>
                                                </span>
                                              @enderror
                                        
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user" name="email" id="exampleInputEmail"
                                                    placeholder="Email Address">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input type="password" name="password" class="form-control form-control-user"
                                                        id="exampleInputPassword" placeholder="Password">
                                                 @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                 @enderror
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="password" name="password_confirmation" class="form-control form-control-user"
                                                        id="exampleRepeatPassword"
                                                    placeholder="Confirm Password">
                                                </div>
                                                
                                            </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection
