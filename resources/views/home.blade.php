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
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                    <a href="" class="nav-item nav-link">Products</a>
                    <a href="" class="nav-item nav-link">Product Detail</a>
                    <a href="" class="nav-item nav-link">Cart</a>
                    <a href="" class="nav-item nav-link">Checkout</a>
                    <a href="" class="nav-item nav-link">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            @guest            
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Register</a> 
                            @endguest

                            @auth
                            <a href="{{ route('wishlist') }}" class="dropdown-item">Wishlist</a>
                            <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                            </form>

                            @endauth                                    
                            <a href="" class="dropdown-item">Contact Us</
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                            <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
@endsection

@section('header')
<div>
    <products-view />
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

@section('newsletter')
@include('layouts.partials.newsletter')
@endsection

@section('review')
@include('layouts.partials.review')
@endsection

@section('styles')
<style>
    .pagination {
        display: inline-block;
    }

    .pagination ul {
        display: flex;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .pagination .ivu-page-item-active a {
        background-color: red;
        color: white;
    }

    .pagination a:hover {
        background-color: #ddd;
    }
</style>
@endsection

