@extends('frontend.layout')

@section('content')
<div class="login-register-area section-space">

</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 login-register-border">
            <div class="login-register-content">
                <div class="login-register-title mb-30">
                    <h3>Login</h3>
                    <p>Welcome back! Please enter your username and password to login. </p>
                </div>
                <div class="login-register-style login-register-pr">
                    <form action="#" method="post">
                        <div class="login-register-input">
                            <input type="text" name="user-name" placeholder="Username or email address">
                        </div>
                        <div class="login-register-input">
                            <input type="password" name="user-password" placeholder="Password">
                            <div class="forgot">
                                <a href="login-register.html">Forgot?</a>
                            </div>
                        </div>
                        <div class="remember-me-btn">
                            <input id="remember-me-checkbox" type="checkbox">
                            <label for="remember-me-checkbox">Remember me</label>
                        </div>
                        <div class="btn-register">
                            <a class="btn-register-now" href="account.html">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                @if (Session::has('error'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
