<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8" />
        <title>Admin Panel</title>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/favicon.ico">
        <link rel="stylesheet"  href="{{asset('contents/admin')}}/assets/css/vendor/jquery-jvectormap-1.2.2.css"  />
        <link rel="stylesheet"  href="{{asset('contents/admin')}}/assets/css/icons.min.css"  />
        <link rel="stylesheet"  href="{{asset('contents/admin')}}/assets/css/app.min.css"   />
            <link rel="stylesheet"  href="{{asset('contents/admin')}}/assets/css/style.css"   />

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <div class="wrapper">

            <div class="leftside-menu">
                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('contents/admin')}}/assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('contents/admin')}}/assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('contents/admin')}}/assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('contents/admin')}}/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar>
                  <ul class="side-nav">
                       <li class="side-nav-title side-nav-item">Navigation</li>
                       <li class="side-nav-item"><a href="{{url('dashboard')}}" class="side-nav-link"><i class="uil-home-alt"></i><span> Dashboard </span></a></li>
                       <li class="side-nav-item">
                           <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link"><i class="uil-table"></i><span> Users </span><span class="menu-arrow"></span></a>
                           <div class="collapse" id="sidebarTables">
                               <ul class="side-nav-second-level">
                                   <li><a href="{{url('dashboard/user')}}">All User</a></li>
                                   <li><a href="{{url('dashboard/user/add')}}">Add User</a></li>
                                   <li><a href="#">All Role</a></li>
                               </ul>
                           </div>
                       </li>
                       <li class="side-nav-item">
                           <a data-bs-toggle="collapse" href="#incomeTables" aria-expanded="false" aria-controls="incomeTables" class="side-nav-link"><i class="uil-wallet"></i><span> Income </span><span class="menu-arrow"></span></a>
                           <div class="collapse" id="incomeTables">
                               <ul class="side-nav-second-level">
                                   <li><a href="{{url('dashboard/income/category')}}">All Income</a></li>
                                   <li><a href="{{url('dashboard/income/category/add')}}">Add Income</a></li>
                                   <li><a href="{{url('dashboard/income/category')}}">Income Category</a></li>
                               </ul>
                           </div>
                       </li>
                       <li class="side-nav-item">
                           <a data-bs-toggle="collapse" href="#expenseTables" aria-expanded="false" aria-controls="expenseTables" class="side-nav-link"><i class="uil-coins"></i><span> Expense </span><span class="menu-arrow"></span></a>
                           <div class="collapse" id="expenseTables">
                               <ul class="side-nav-second-level">
                                   <li><a href="{{url('dashboard/expense/category')}}">All Expense</a></li>
                                   <li><a href="{{url('dashboard/expense/category/add')}}">Add Expense</a></li>
                                   <li><a href="{{url('dashboard/expense/category')}}">Expense Category</a></li>
                               </ul>
                           </div>
                       </li>
                       <li class="side-nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="side-nav-link"><i class="uil-exit"></i><span> Logout </span></a></li>
                   </ul>
                    <!-- Help Box -->
                    <div class="help-box text-white text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-white">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{asset('contents/admin')}}/assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>


            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>


                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div style="max-height: 230px;" data-simplebar>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->

                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{asset('contents/admin')}}/assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{Auth::user()->name}}</span>
                                        <span class="account-position">{{Auth::user()->email}}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->


                                    <!-- item-->
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                           <i class="mdi mdi-logout me-1"></i>
                                           <span>Logout</span>
                                       </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">Found <span class="text-danger">1</span> results</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="uil-notes font-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>



                                <div class="notification-list">
                                    <!-- item-->


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">















                        @yield('content')














                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- Authentication -->
            <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
              @csrf
            </form>
        </div>

        <script src="{{asset('contents/admin')}}/assets/js/vendor.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/app.min.js"></script>

        <script src="{{asset('contents/admin')}}/assets/js/vendor/apexcharts.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>

        <script src="{{asset('contents/admin')}}/assets/js/pages/demo.dashboard.js"></script>
        <script src="{{asset('contents/admin')}}/assets/js/pages/custom.js"></script>
    </body>
</html>
