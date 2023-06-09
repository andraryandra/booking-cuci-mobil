<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('landing-page/assets/css/style.css') }}">
</head>

<body class="full-wrapper">

    @stack('style')

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('landing-page/assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @include('layouts.component_landingpage.navbar')

    <main>
        @yield('contentLandingPage')
    </main>

    @include('layouts.component_landingpage.footer')
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    @stack('script')


    <script src="{{ asset('landing-page/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('landing-page/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('landing-page/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('landing-page/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('landing-page/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('landing-page/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('landing-page/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('landing-page/assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('landing-page/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('landing-page/assets/js/contact.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('landing-page/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('landing-page/assets/js/main.js') }}"></script>

</body>

</html>
