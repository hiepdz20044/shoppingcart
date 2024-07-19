@section('header')
    <div class="header3-top d-none d-lg-block">
        <div class="container header-container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <!-- Placeholder for search or other content -->
                </div>
                <div class="col-lg-4">
                    <div class="header-logo header3-logo text-center">
                        <a href="{{ url('/') }}" class="logo-bl">
                            <img width="150px" src="{{ asset('assets/clients/img/logo/GroupThree.png') }}" alt="logo-img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-end">
                    <!-- Action list moved to the right -->
                    <div class="action-list action-list-header3">
                        @if (Route::has('login'))
                            @auth
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0)" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('profile') }}">User Profile</a></li>
                                    @if (Auth::user()->role == 0)
                                    <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                                    @endif
                                    <li><a href="{{ url('edit_taikhoan') }}">Update Account</a></li>
                                    <li><a href="{{ url('mybill') }}">My Orders</a></li>
                                    <li><a href="{{ url('logout') }}">Logout</a></li>
                                    <li><a href="{{ url('edit_taikhoan') }}">Edit Account</a></li>
                                    <li><a href="{{ url('mybill') }}">Order History</a></li>
                                </ul>
                            </li>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="header-sticky" class="header-main header-main3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-main-content-wrapper">
                        <!-- Header logo for mobile view -->
                        <div class="header-logo header3-logo d-lg-none text-center">
                            <a href="{{ url('/') }}" class="logo-bl">
                                <img width="150px" src="{{ asset('assets/clients/img/logo/GroupThree.png') }}" alt="logo-img">
                            </a>
                        </div>

                        <!-- Main menu for large screens -->
                        <div class="main-menu main-menu3 d-none d-lg-block">
                            <nav id="mobile-menu">
                                <ul class="menu-list">
                                    <li><a href="{{ url('shops') }}">Shop</a></li>
                                    <!-- Option Menu -->
                                </ul>
                            </nav>
                        </div>

                        <!-- Mobile menu toggle button -->
                        <div class="menu-bar d-lg-none ml-20">
                            <a class="side-toggle" href="javascript:void(0)">
                                <div class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection