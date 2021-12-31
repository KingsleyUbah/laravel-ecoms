@extends('layouts.appa')

@section('nav')
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="" class="nav-item nav-link active">Home</a>
                    <a href="" class="nav-item nav-link">Products</a>
                    <a href="" class="nav-item nav-link">Product Detail</a>
                    <a href="" class="nav-item nav-link">Cart</a>
                    <a href="" class="nav-item nav-link">Checkout</a>
                    <a href="" class="nav-item nav-link">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            @guest            
                            <a href="{{ route('login') }}" class="dropdown-item">Login & Register</a>                                
                            @endguest

                            @auth
                            <a href="" class="dropdown-item">Wishlist</a>
                            <a href="" class="dropdown-item">Logout</a>

                            @endauth                                    
                            <a href="" class="dropdown-item">Contact Us</
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Login</a>
                            <a href="#" class="dropdown-item">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection

@section('login')
<div class="login">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <label>E-mail / Username</label>
                                <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" placeholder="E-mail / Username" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">Keep me signed in</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn" type="submit">Submit</button>

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
    </div>
</div>
@endsection

