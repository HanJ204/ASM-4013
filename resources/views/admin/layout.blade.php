<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin/images/favicon.ico">

    <!-- App css -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/icons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link href="/admin/css/metismenu.min.css" rel="stylesheet" type="text/css" />
    <link href="/admin/css/style.css" rel="stylesheet" type="text/css" />

    <script src="/admin/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Begin page -->
    <div id="wrapper">
        <div class="alerts-container">
            @foreach ($errors->all() as $error)
            <div class="alert">
                <span class="closebtn">&times;</span>
                <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {{ $error }}
            </div>
            @endforeach
        </div>
        <div class="alerts-container">
            @if(session()->has('alert'))
            <div class="alert">
                <span class="closebtn">&times;</span>
                <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('alert') !!}
            </div>
            @endif
            @if(session()->has('success'))
            <div class="alert success">
                <span class="closebtn">&times;</span>
                <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('success') !!}
            </div>
            @endif
            @if(session()->has('info'))
            <div class="alert info">
                <span class="closebtn">&times;</span>
                <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('info') !!}
            </div>
            @endif
            @if(session()->has('warning'))
            <div class="alert warning">
                <span class="closebtn">&times;</span>
                <strong><i class="fa-solid fa-circle-exclamation"></i></strong> {!! session('warning') !!}
            </div>
            @endif
        </div>


        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="/admin/dashboard" class="logo">
                    <span>
                        <img src="/admin/images/logo.png" alt="" height="16">
                    </span>
                    <i>
                        <img src="/admin/images/logo_sm.png" alt="" height="28">
                    </i>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-unstyled topbar-right-menu float-right mb-0">
                    <li class="dropdown notification-list hide-phone">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-earth"></i> Việt Nam <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                English
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Italian
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                French
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                Russian
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fi-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h6>
                            </div>

                            <div class="slimscroll" style="max-height: 190px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">3 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">7 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-custom"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">13 days ago</small></p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fi-speech-bubble noti-icon"></i>
                            <span class="badge badge-light badge-pill noti-icon-badge">6</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Chat</h6>
                            </div>

                            <div class="slimscroll" style="max-height: 190px;">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-3.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sam Garret</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Wow that's great</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-5.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Sherry Marshall</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Hi, How are you? What about our next meeting</p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="/admin/images/users/avatar-6.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                    <p class="notify-details">Shawn Millard</p>
                                    <p class="text-muted font-13 mb-0 user-msg">Yeah everything is fine</p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                View all <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    @if( Auth::guard('admin')->check()) 
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="/admin/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">{{Auth::guard('admin')->user()->name}} <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-head"></i> <span>Tài khoản của tôi</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-cog"></i> <span>Cài đặt</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fi-help"></i> <span>Hỗ trợ</span>
                            </a>

                            <!-- item-->
                            <a href="{{url('admin/exit')}}" class="dropdown-item notify-item">
                                <i class="fi-power"></i> <span>Đăng xuất</span>
                            </a>

                        </div>
                    </li>
                    @endif

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left waves-light waves-effect">
                            <i class="dripicons-menu"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" class="">
                            <input type="text" placeholder="Tìm kiếm..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            @include('admin.menu')
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            @yield('content')
            <!-- content -->

            <footer class="footer text-right">
                2017 - 2018 © Abstack. - Coderthemes.com
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->



    <!-- jQuery  -->
    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/popper.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/metisMenu.min.js"></script>
    <script src="/admin/js/waves.js"></script>
    <script src="/admin/js/jquery.slimscroll.js"></script>
    <script src="/admin/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="/admin/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Chart JS -->
    <script src="/admin/plugins/chart.js/chart.bundle.js"></script>

    <!-- init dashboard -->
    <script src="/admin/pages/jquery.dashboard.init.js"></script>

    <!-- App js -->
    <script src="/admin/js/jquery.core.js"></script>
    <script src="/admin/js/jquery.app.js"></script>
    <script src="/admin/js/main.js"></script>

</body>

</html>