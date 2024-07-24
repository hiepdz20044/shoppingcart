<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<!-- Mirrored from risingtheme.com/html/demo-suruchi-v1/suruchi/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 15:48:50 GMT -->
<head>
  <meta charset="utf-8">
  <title>Suruchi - Fashion eCommerce HTML Template</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/clients/img/favicon.ico') }}">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{ asset('assets/clients/css/plugins/swiper-bundle.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/clients/css/plugins/glightbox.min.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('assets/clients/css/vendor/bootstrap.min.css') }}">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('assets/clients/css/style.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
     <!-- Start header area -->
        @include('clients.blocks.header')
        @yield('header')
        <!-- End header area -->
        <main class="color-scheme-2 main__content_wrapper">
            @yield('content')
        </main>
    <!-- All Script JS Plugins here  -->
    <script src="{{ asset('assets/clients/js/vendor/popper.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/clients/js/vendor/bootstrap.min.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/clients/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/clients/js/plugins/glightbox.min.js') }}"></script>

    <!-- Customscript js -->
    <script src="{{ asset('assets/clients/js/script.js') }}"></script>
</body>

</html>
