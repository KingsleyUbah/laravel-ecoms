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
                        <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            @guest            
                            <a href="{{ route('login') }}" class="dropdown-item">Login & Register</a>                                
                            @endguest

                            @auth
                            <a href="" class="dropdown-item">Wishlist</a>
                            <a href="" class="dropdown-item">Logout</a>

                            @endauth                                    
                            <a href="" class="dropdown-item active">Contact Us</
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

@section('contact-page')
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Products</a></li>
            <li class="breadcrumb-item active">Contact</li>
        </ul>
    </div>
</div>
<!-- Breadcrumb End -->
        
<!-- Contact Start -->
<div class="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-info">
                    <h2>Our Office</h2>
                    <h3><i class="fa fa-map-marker"></i>123 Office, Los Angeles, CA, USA</h3>
                    <h3><i class="fa fa-envelope"></i>office@example.com</h3>
                    <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <h2>Our Store</h2>
                    <h3><i class="fa fa-map-marker"></i>123 Store, Los Angeles, CA, USA</h3>
                    <h3><i class="fa fa-envelope"></i>store@example.com</h3>
                    <h3><i class="fa fa-phone"></i>+123-456-7890</h3>
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div><button class="btn" type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.733248043701!2d-118.24532098539802!3d34.05071312525937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c648fa1d4803%3A0xdec27bf11f9fd336!2s123%20S%20Los%20Angeles%20St%2C%20Los%20Angeles%2C%20CA%2090012%2C%20USA!5e0!3m2!1sen!2sbd!4v1585634930544!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection