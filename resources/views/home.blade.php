<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu left-side-menu-light">

                <div class="slimscroll-menu">

                    <!-- LOGO -->
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg mt-3">
                            <!-- <img src="assets/images/logo1.png" alt="" height="80" width="200"> -->
                            <img src="assets/images/logo1.png" alt="" height="80" width="200">
                        </span>
                        <span class="logo-sm">
                            <!-- <img src="assets/images/logo_sm.png" alt="" height="16"> -->
                            <img src="assets/images/logo_sm.png" alt="" height="16">
                        </span>
                    </a>

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav side-nav-light mt-3">

                        <li class="side-nav-title side-nav-item">Menu</li>

                        <li class="side-nav-item">
                            <a href="index.html" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span class="badge badge-success float-right">7</span>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-view-apps"></i>
                                <span> Mantenimiento </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level" aria-expanded="false">
                                <li>
                                    <a href="apps-calendar.html">Calendario</a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Mantenimiento
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level" aria-expanded="false">
                                        <li>
                                            <a href="apps-projects-list.html">Tractores</a>
                                        </li>
                                        <li>
                                            <a href="apps-projects-details.html">Cajas</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
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
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Cristina Pride</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Hi, How are you? What about our next meeting</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">Caleb Flakelar commented on Admin
                                                <small class="text-muted">4 days ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon">
                                                <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                            <p class="notify-details">Karen Robinson</p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small>Wow ! this admin looks good and awesome design</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted">13 days ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Luis Salazar</span>
                                        <span class="account-position">Administrador</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-settings-variant"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Matenimiento</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Información de Cajas</h4>
                                        <p class="text-muted font-14 mb-4">
                                        </p>

                                        <div class="table-responsive-">
                                            <table class="table table-sm table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Remolque</th>
                                                        <th>Tipo</th>
                                                        <th>Placas</th>
                                                        <th>Origen</th>
                                                        <td width="15%"></td>
                                                        <th>Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>54149</td>
                                                        <td>Caja Seca</td>
                                                        <td>120C268</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>5430F</td>
                                                        <td>Caja Seca</td>
                                                        <td>2291 82D</td>
                                                        <td>Maine</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54109</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C606</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54118</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C270</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>5400F</td>
                                                        <td>Caja Seca</td>
                                                        <td>2291 86D</td>
                                                        <td>Main</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Matenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54146</td>
                                                        <td>Caja Seca</td>
                                                        <td>120C265</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>5360F</td>
                                                        <td>Caja Seca</td>
                                                        <td>2269 05A</td>
                                                        <td>Maine</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54114</td>
                                                        <td>Caja Seca</td>
                                                        <td>154c615</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54136</td>
                                                        <td>Caja Seca</td>
                                                        <td>120C260</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 40%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-warning"></i> Verificar</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>5420F</td>
                                                        <td>Caja Seca</td>
                                                        <td>2291 85D</td>
                                                        <td>Maine</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Matenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54121</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C612</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54108</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C272</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54135</td>
                                                        <td>Caja Seca</td>
                                                        <td>120C275</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54144</td>
                                                        <td>Caja Seca</td>
                                                        <td>120C263</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 20%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-warning"></i> Verificar</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54153</td>
                                                        <td>Caja Seca</td>
                                                        <td>120C272</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>5460F</td>
                                                        <td>Caja Seca</td>
                                                        <td>2477 97B</td>
                                                        <td>Maine</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54100</td>
                                                        <td>Caja Seca</td>
                                                        <td>A110 07A</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54113</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C269</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54111</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C273</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>5450F</td>
                                                        <td>Caja Seca</td>
                                                        <td>2333 29D</td>
                                                        <td>Maine</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54127</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C271</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-info"></i> Mantenimiento</td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>54122</td>
                                                        <td>Caja Seca</td>
                                                        <td>154C601</td>
                                                        <td>Texas</td>
                                                        <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>
                                                        <td><i class="mdi mdi-circle text-success"></i> Correcto</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                2019 © Transportes Sama
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-md-block">
                                    <!-- <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>
