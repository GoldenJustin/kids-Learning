<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Admin Templates & Dashboard UI Kits">
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="img/favicon.svg" />

    <!-- Title -->
    <title>Bootstrap Admin Dashboard - Dashboard</title>


    <!-- *************
   ************ Common Css Files *************
  ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">

    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/fonts/style.css') }}">
    @yield('puzzlestyle')

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/main.min.css') }}">


    <!-- **** Vendor Css Files **** -->
    <!-- DateRange css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/daterange/daterange.css') }}" />

    <!-- Chartist css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/chartist/css/chartist.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/chartist/css/chartist-custom.css') }}" />

</head>

<body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

        <!-- Sidebar wrapper start -->
        <nav id="sidebar" class="sidebar-wrapper">
            <!-- Sidebar brand start  -->
            <div class="sidebar-brand">
                <a href="index.html" class="logo">
                    <img src="{{ asset('assets/admin/img/logo.svg') }}" alt="Bootstrap Admin Dashboard" />
                </a>
                <a href="index.html" class="logo-sm">
                    <img src="{{ asset('assets/admin/img/logo-sm.svg') }}" alt="Bootstrap Admin Dashboard" />
                </a>
            </div>
            <!-- Sidebar brand end  -->

            <!-- Sidebar content start -->
            <div class="sidebar-content">

                <!-- sidebar menu start -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="sidebar active">
                            <a href="{{ URL::TO('/dashboard') }}">
                                <i class="icon-devices_other"></i>
                                <span class="menu-text">Dashboard</span>
                            </a>

                        </li>

                        @auth
                            @if (auth()->user()->hasRole('student'))
                                <li>
                                    <a href="{{ URL::TO('profile') }}">
                                        <i class="icon-user1"></i>
                                        <span class="menu-text">Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar">
                                    <a href="{{ URL::TO('lessons/create') }}">
                                        <i class="icon-layout"></i>
                                        <span class="menu-text">Lessons</span>
                                    </a>

                                </li>
                                <li class="sidebar">
                                    <a href="{{route('admin.student.score')}}">
                                        <i class="icon-book-open"></i>
                                        <span class="menu-text">Scores</span>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ URL::to('users') }}">
                                        <i class="icon-documents"></i>
                                        <span class="menu-text">Users</span>
                                    </a>
                                </li>

                                <li class="sidebar">
                                    <a href="{{ URL::TO('lessons/create') }}">
                                        <i class="icon-layout"></i>
                                        <span class="menu-text">Lessons</span>
                                    </a>

                                </li>
                                <li class="sidebar">
                                    <a href="{{route('admin.student.score')}}">
                                        <i class="icon-book-open"></i>
                                        <span class="menu-text">Scores</span>
                                    </a>
                                </li>
                            @endif
                        @endauth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();"><i
                                        class="icon-log-out1"></i>
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </li>

                    </ul>
                </div>
                <!-- sidebar menu end -->

            </div>
            <!-- Sidebar content end -->
        </nav>
        <!-- Sidebar wrapper end -->

        <!-- Page content start  -->
        <div class="page-content">

            <!-- Header start -->
            <header class="header">
                <div class="toggle-btns">
                    <a id="toggle-sidebar" href="#">
                        <i class="icon-list"></i>
                    </a>
                    <a id="pin-sidebar" href="#">
                        <i class="icon-list"></i>
                    </a>
                </div>
                <div class="header-items">
                    <!-- Custom search start -->
                    <div class="custom-search">
                        <input type="text" class="search-query" placeholder="Search here ...">
                        <i class="icon-search1"></i>
                    </div>
                    <!-- Custom search end -->

                    <!-- Header actions start -->
                    <ul class="header-actions">


                        <li class="dropdown">
                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                aria-haspopup="true">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="avatar">ZF<span class="status busy"></span></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                                <div class="header-profile-actions">
                                    <div class="header-user-profile">

                                        <h5>{{ Auth::user()->name }}</h5>


                                    </div>
                                    <a>
                                        <x-dropdown-link :href="route('profile.edit')">
                                            <i class="icon-user1"> </i> My Profile
                                        </x-dropdown-link>
                                    </a>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();"><i
                                                class="icon-log-out1"></i>
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                    {{-- </a> --}}
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Header actions end -->
                </div>
            </header>
            <!-- Header end -->

            <div class="container mt-5">
                <br>
            </div>
            @yield('content')


        </div>
        <!-- Page content end -->

    </div>
    <!-- Page wrapper end -->

    <!--**************************
   **************************
    **************************
       Required JavaScript Files
    **************************
   **************************
  **************************-->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    @yield('results')
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/moment.js') }}"></script>


    <!-- *************
   ************ Vendor Js Files *************
  ************* -->
    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/admin/vendor/slimscroll/slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/slimscroll/custom-scrollbar.js') }}"></script>

    <!-- Daterange -->
    <script src="{{ asset('assets/admin/vendor/daterange/daterange.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/daterange/custom-daterange.js') }}"></script>

    <!-- Chartist JS -->
    <script src="{{ asset('assets/admin/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chartist/js/chartist-tooltip.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chartist/js/custom/threshold/threshold.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chartist/js/custom/bar/bar-chart-orders.js') }}"></script>

    <!-- jVector Maps -->
    <script src="{{ asset('assets/admin/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/gdp-data.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jvectormap/custom/world-map-markers2.js') }}"></script>

    <!-- Rating JS -->
    <script src="{{ asset('assets/admin/vendor/rating/raty.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/rating/raty-custom.js') }}"></script>


    <!-- Main JS -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>

</body>

</html>
