<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>E Store - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>

    <body>
        <div id="app">
        <!-- Top bar Start -->
        @include('layouts.partials.contact-bar')
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        @yield('nav')
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        @include('layouts.partials.logo-bar')
        <!-- Bottom Bar End --> 
        
        <!-- For login Page -->
        @yield('login')
        <!-- End Login -->

        <!-- For register page -->
        @yield('register')
        <!-- End register -->

        <!-- Cart page -->
        @yield('cart-page')
        <!-- End Cart page -->

        <!-- Cart page -->
        @yield('wishlist-page')
        <!-- End Cart page -->

        <!-- Cart page -->
        @yield('checkout-page')
        <!-- End Cart page -->

        <!-- Cart page -->
        @yield('contact-page')
        <!-- End Cart page -->
        
        <!-- Main Slider Start -->
        @yield('header')
        <!-- Main Slider End -->      
        
        <!-- Brand Start -->
        @yield('brand')
        
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        @yield('feature')
        
        <!-- Feature End-->      
        
        <!-- Category Start-->
        @yield('showcase')
        
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        @yield('cta')
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        @yield('featured')
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        @yield('newsletter')
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        @yield('recent')
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        @yield('review')
        <!-- Review End -->        
        
        <!-- Footer Start -->
        @include('layouts.partials.footer')
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        @include('layouts.partials.copyright')
        <!-- Footer Bottom End -->       
        
            <!-- Back to Top -->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>


        <script src="{{ asset('js/app.js') }}" defer></script>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
