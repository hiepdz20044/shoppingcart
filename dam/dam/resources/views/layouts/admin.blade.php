<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    {{-- Hàm asset() dùng để trỏ đường dẫn trong laravel --}}
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/admins/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admins/css/styles.min.css') }}">
    @yield('css')
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        {{-- sidebar --}}
        @include('admins.blocks.sidebar')
        @yield('sidebar')
        {{-- end sidebar --}}
        <!--  Main wrapper -->
        <div class="body-wrapper">
            {{-- header --}}
            @include('admins.blocks.header')
            @yield('header')
            {{-- end header --}}
            <div class="container-fluid">
                {{-- content --}}
                @yield('content')
                {{-- end content --}}
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admins/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admins/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/admins/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admins/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/admins/js/dashboard.js') }}"></script>
    @yield('js')
</body>

</html>
