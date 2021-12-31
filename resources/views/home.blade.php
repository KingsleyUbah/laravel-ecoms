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

@section('header')
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <nav class="navbar bg-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>New Arrivals</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-female"></i>Fashion & Beauty</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-child"></i>Kids & Babies Clothes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Men & Women Clothes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronics & Accessories</a>
                        </li>
                    </ul>
                </nav>
            </div>
            @include('layouts.partials.dynamic-sidebar')
            @include('layouts.partials.static-sidebar')           
        </div>
    </div>
</div>
@endsection

@section('brand')
@include('layouts.partials.brand')
@endsection

@section('feature')
@include('layouts.partials.features')
@endsection

@section('showcase')
@include('layouts.partials.showcase')
@endsection

@section('cta')
@include('layouts.partials.cta')
@endsection

@section('featured')
@include('layouts.partials.featured')
@endsection

@section('newsletter')
@include('layouts.partials.newsletter')
@endsection

@section('recent')
@include('layouts.partials.recent')
@endsection

@section('review')
@include('layouts.partials.newsletter')
@endsection


