<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="{{ URL::to('build/assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/css/bootstrap-datetimepicker.min.cs') }}s">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/simple-calendar/simple-calendar.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('build/assets/css/style.css') }}">
	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('build/assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('build/assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('build/assets/js/toastr.min.js') }}"></script>
</head>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ URL::to('build/assets/img/adam.png') }}" alt="Logo">
                </a>
                <a href="{{ route('dashboard') }}" class="logo logo-small">
                    <img src="{{ URL::to('build/assets/img/logo-mini.svg') }}" alt="Logo" width="30" height="30">
                </a>
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
                <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="build/assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-kh me-2"></i>Khmer</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="build/assets/img/icons/header-icon-05.svg" alt="">
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="build/assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="build/assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="build/assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="build/assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="build/assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li>

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="/images/{{ Session::get('avatar') }}" width="31"alt="{{ Session::get('name') }}">
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/images/{{ Session::get('avatar') }}" alt="{{ Session::get('name') }}" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>{{ Session::get('name') }}</h6>
                                <p class="text-muted mb-0">{{ Session::get('role_name') }}</p>
                            </div>
                        </div>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                              <button type="submit" class="dropdown-item justify-content-start"><i
                                      class="bi bi-box-arrow-right me-2 fs-4 "></i>Logout</button>
                          </form>
                    </div>
                </li>
            </ul>
        </div>
		{{-- side bar --}}
		@include('dashboard.components.sidebar.sidebar')
		{{-- content page --}}
        @yield('content')
        <footer>
            <p>Copyright © 2022 Soeng Souy.</p>
        </footer>

    </div>

    <script src="{{ URL::to('build/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/feather.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/apexchart/chart-data.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/simple-calendar/jquery.simple-calendar.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/calander.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/circle-progress.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/vendor/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::to('build/assets/js/script.js') }}"></script>
    @yield('script')
</body>
</html>
