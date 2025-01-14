@extends('admin.layouts.auth')

@section('content')
    <div class="wrap-login100 p-6">

        <form class="login100-form validate-form" action="{{ route('register') }}" method="POST">
            @csrf
            <span class="login100-form-title">
                    Registration
                </span>
            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="mdi mdi-account" aria-hidden="true"></i>
                </a>
                <input class="input100 border-start-0 ms-0 form-control" type="text" placeholder="User name" name="name">
            </div>
            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                </a>
                <input class="input100 border-start-0 ms-0 form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                </a>
                <input class="input100 border-start-0 ms-0 form-control" type="password" placeholder="Password" name="password" required autocomplete="new-password">
            </div>
            <label class="custom-control custom-checkbox mt-4">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                </label>
            <div class="container-login100-form-btn">
                <a href="index.html" class="login100-form-btn btn-primary">
                        Register
                    </a>
            </div>
            <div class="text-center pt-3">
                <p class="text-dark mb-0 d-inline-flex">Already have account ?<a href="{{route('login')}}" class="text-primary ms-1">Sign In</a></p>
            </div>
            <!-- Register with Social -->
            <!--<label class="login-social-icon"><span>Register with Social</span></label>
            <div class="d-flex justify-content-center">
                <a href="javascript:void(0)">
                    <div class="social-login me-4 text-center">
                        <i class="fa fa-google"></i>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="social-login me-4 text-center">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
                <a href="javascript:void(0)">
                    <div class="social-login text-center">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
            </div>-->
            <!-- End Register with Social -->
        </form>

    </div>

@endsection
