<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Cybill Admin | Dashboard</title>
        <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
        <link rel="icon" href="{{ asset('assets/img/favicon.png')}}" type="image/x-icon"/>

        <!-- This is a link to font awesome icons that I have downloaded locally and they are in Our
        public directory -->
        <link href="{{ asset('assets/css/fontawesome_css/all.min.css') }}" rel="stylesheet">

        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard_css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard_css/plugins.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard_css/kaiadmin.min.css')}}" />
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar section -->
            <div class="sidebar" data-background-color="dark">
                <div class="sidebar-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="{{ route('app.index') }}" class="logo">
                        <img src="{{ asset('assets/img/cybillogo.png')}}" alt="navbar brand" class="navbar-brand" height="20"/>
                        </a>
                        <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                        </div>
                        <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <ul class="nav nav-secondary">
                            <li class="nav-item active dashboard">
                                <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">M-tambo</h4>
                            </li>
                            <li class="nav-item clients">
                                <a data-bs-toggle="collapse" href="#base">
                                    <i class="fa-solid fa-users"></i>
                                    <p>Job Management</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="base">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="components/kaspersky.html">
                                                <span class="sub-item">Kaspersky clients</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="components/bitdefender.html">
                                                <span class="sub-item">Bitdefender clients</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item partners">
                                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                    <i class="fa-regular fa-handshake"></i>
                                    <p>Partners</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="partners.html">
                                            <span class="sub-item">All partners</span>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="nav-item orders">
                                <a data-bs-toggle="collapse" href="#forms">
                                    <i class="fa-solid fa-box"></i>
                                    <p>Orders</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="forms">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="forms/forms.html">
                                                <span class="sub-item">Completed</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="forms/forms.html">
                                                <span class="sub-item">Not Completed</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section product_management_section">
                                <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Products Management</h4>
                            </li>
                            <li class="nav-item Categories">
                                <a data-bs-toggle="collapse" href="#tables">
                                    <i class="fa-solid fa-layer-group"></i>
                                    <p>Categories</p>
                                </a>
                            </li>
                            <li class="nav-item products">
                                <a data-bs-toggle="collapse" href="#charts">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <p>Products</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="charts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="charts/charts.html">
                                            <span class="sub-item">Kaspersky</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="charts/sparkline.html">
                                            <span class="sub-item">Bitdefender</span>
                                        </a>
                                    </li>
                                </ul>
                                </div>
                            </li>
                            <li class="nav-item product_keys">
                                <a data-bs-toggle="collapse" href="#maps">
                                    <i class="fa-solid fa-key"></i>
                                    <p>Product keys</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="maps">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="maps/googlemaps.html">
                                                <span class="sub-item">Kaspersky keys</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="maps/jsvectormap.html">
                                                <span class="sub-item">Bitdefender Keys</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section transactions_section">
                                <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                                </span>
                                <h4 class="text-section">Transactions</h4>
                            </li>
                            <li class="nav-item transaction_history">
                                <a data-bs-toggle="collapse" href="#maps">
                                    <i class="fa-solid fa-money-check"></i>
                                    <p>Transaction history</p>
                                </a>
                            </li>
                            <li class="nav-item sales">
                                <a data-bs-toggle="collapse" href="#maps">
                                    <i class="fa-solid fa-money-check"></i>
                                    <p>Sales</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="maps">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="maps/googlemaps.html">
                                                <span class="sub-item">Kaspersky sales</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="maps/jsvectormap.html">
                                                <span class="sub-item">Bitdefender sales</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar section-->

            <!-- Main panel section starts here -->
            <div class="main-panel">
                <div class="main-header">
                    <div class="main-header-logo">
                        <!-- Logo Header -->
                        <div class="logo-header" data-background-color="dark">
                            <a href="index.html" class="logo">
                                <img
                                src="{{asset('assets/img/cybillogo.png')}}"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20"
                                />
                            </a>
                            <div class="nav-toggle">
                                <button class="btn btn-toggle toggle-sidebar">
                                    <i class="gg-menu-right"></i>
                                </button>
                                <button class="btn btn-toggle sidenav-toggler">
                                    <i class="gg-menu-left"></i>
                                </button>
                            </div>
                            <button class="topbar-toggler more">
                                <i class="gg-more-vertical-alt"></i>
                            </button>
                        </div>
                        <!-- End Logo Header -->
                    </div>
                    <!-- Navbar Header section for Mobile screen and smaller -->
                    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                        <div class="container-fluid">
                            <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                                <div class="input-group search_bar">
                                    <div class="input-group-prepend">
                                        <button type="submit" class="btn btn-search pe-1">
                                            <i class="fa fa-search search-icon"></i>
                                        </button>
                                    </div>
                                    <input
                                        type="text"
                                        placeholder="Search ..."
                                        class="form-control"
                                    />
                                </div>
                            </nav>
                            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                                <li class="nav-item topbar-user dropdown hidden-caret">
                                    <a
                                        class="dropdown-toggle profile-pic"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        aria-expanded="false"
                                    >
                                        <div class="avatar-sm">
                                            <img
                                                src="{{ asset('assets/img/anime.jpg') }}"
                                                alt="..."
                                                class="avatar-img rounded-circle"
                                            />
                                        </div>
                                        <span class="profile-username">
                                            <span class="op-7">Hi,</span>
                                            <span class="fw-bold">Gitau</span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                            <li>
                                                <div class="user-box">
                                                    <div class="avatar-lg">
                                                        <img
                                                            src="{{ asset('assets/img/anime.jpg') }}"
                                                            alt="image profile"
                                                            class="avatar-img rounded"
                                                        />
                                                    </div>
                                                    <div class="u-text">
                                                        <h4>Gitau</h4>
                                                        <p class="text-muted">kgitau3@example.com</p>
                                                        <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">
                                                            View Profile
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Account Setting</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Logout</a>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
                <div class="container">
                    <div class="page-inner">
                        <div class="page-header">
                        <h4 class="page-title">Dashboard</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                            <a href="#">
                                <i class="icon-home"></i>
                            </a>
                            </li>
                            <li class="separator">
                            <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                            <a href="#">Pages</a>
                            </li>
                            <li class="separator">
                            <i class="icon-arrow-right"></i>
                            </li>
                            <li class="nav-item">
                            <a href="#">Starter Page</a>
                            </li>
                        </ul>
                        </div>
                        <div class="page-category">Inner page content goes here</div>
                    </div>
                </div>

                <!-- Footer section starts here -->
                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> Help </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright">
                            2024, made with <i class="fa fa-heart heart text-danger"></i> by
                            <a href="http://www.themekita.com">Cybill Team</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/dashboard_js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/dashboard_js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/dashboard_js/bootstrap.min.js') }}"></script>

        <!-- Kaiadmin JS -->
        <script src="{{ asset('assets/js/dashboard_js/kaiadmin.min.js') }}"></script>
        <!-- jQuery Scrollbar -->
        <script src="{{ asset('assets/js/dashboard_js/jquery.scrollbar.min.js') }}"></script>

        <!-- Chart JS -->
        <script src="assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="assets/js/plugin/datatables/datatables.min.js"></script>


        <!-- Google Maps Plugin -->
        <script src="assets/js/plugin/gmaps/gmaps.js"></script>
    </body>
</html>