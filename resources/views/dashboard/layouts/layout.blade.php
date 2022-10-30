<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Car List App">
    <meta name="author" content="Coderthemes">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <title>Car List App</title>

    @include('dashboard.layouts.styles')

</head>

<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href=" " class="logo"><span>Car<span>List</span></span><i class="zmdi zmdi-layers"></i></a>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">Dashboard</h4>
                    </li>
                </ul>

            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}"
                         alt="user-img" title="{{auth()->user()->name}}"
                         class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline">
                        <i class="zmdi zmdi-dot-circle"></i></div>
                </div>
                <h5><a href="#">{{auth()->user()->name}}</a></h5>
                <ul class="list-inline">

                    <li>
                        <a href="{{ route('logout') }}" title="Logout"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power m-r-5"></i>   </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>

                    <li>
                        <a href="{{route('dashboard')}}" class="waves-effect">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            <span> Main </span> </a>
                    </li>

                    <li>
                        <a href="{{route('roles.index')}}" class="waves-effect">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            <span> Roles </span> </a>
                    </li>

                    <li>
                        <a href="{{route('users.index')}}" class="waves-effect">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            <span> Users </span> </a>
                    </li>

                    <li>
                        <a href="{{route('cars.index')}}" class="waves-effect">
                            <i class="zmdi zmdi-view-dashboard"></i>
                            <span> Cars </span> </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                @yield('content')

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            {{date('Y')}} © Car List.
        </footer>

    </div>

</div>
<!-- END wrapper -->
@include('dashboard.layouts.scripts')
@stack('scripts')
</body>
</html>
