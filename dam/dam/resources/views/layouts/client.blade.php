<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from wphix.com/html/ecomart-prev/ecomart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 14:03:36 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/clients/img/favicon.png') }}">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/clients/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/ui-range-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/fontAwesome5Pro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
</head>

<body>
    <header class="header3">
        @include('clients.blocks.header')
        @yield('header')
    </header>
    <!-- header area end -->
    <main>
        @include('clients.blocks.sidebar')
        @yield('sidebar')
        {{-- banner --}}
        @yield('content')

    </main>
    @include('clients.blocks.footer')
    @yield('footer')
    <!-- JS here -->
    <script src="{{ asset('assets/clients/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/clients/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/clients/js/jquery-ui-slider-range.js') }}"></script>
    <script src="{{ asset('assets/clients/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/clients/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/main.js') }}"></script>
    <script src="{{ asset('assets/clients/js/validate.js') }}"></script>
</body>
<!-- Mirrored from wphix.com/html/ecomart-prev/ecomart/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 14:04:01 GMT -->

</html>
