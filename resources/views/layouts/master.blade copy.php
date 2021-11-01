<!doctype html>
<html lang="en">

<head>

        <meta charset="utf-8" />
        <title>PayHelpa - Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="PayHelpa" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets_staging/images/favicon.ico">


        <!-- Bootstrap Css -->
        	<link rel="stylesheet" href="{{ asset('assets_staging/css/bootstrap.min.css')}}"> 
        <!-- Icons Css -->
        <link href="assets_staging/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets_staging/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    {{-- <span class="logo-sm">
                        <img src="assets_staging/images/logo-sm-dark.png" alt="" height="22">
                    </span> --}}
                    <div class="row logo-lg">
                     
						  <div class="col-xs-6">
							<img src="{{ asset('assets_staging/images/payhelpa_light-01dashboard.png')}}" alt="navbar brand" class="navbar-brand">
						  </div>
						  <div class="col">
							<button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
								<i class="mdi mdi-menu"></i>
							</button>
						</div>
					
					
						
                    </div>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets_staging/images/logo-sm-light.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets_staging/images/logo-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <!-- Menu Icon -->

            <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <!-- App Search -->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>

            <!-- Notification Dropdown -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="mdi mdi-bell"></i>
                    <span class="badge bg-info rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <h5 class="p-3 text-dark mb-0">Notifications (37)</h5>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">New Massage received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread message
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-flag"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">Your Order is placed</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">It will seem like simplified English
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex mt-3">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="mdi mdi-message"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-1">New Massage received</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">You have 87 unread message
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="p-2 d-grid">
                        <a class="font-size-14 text-center" href="javascript:void(0)">View all</a>
                    </div>
                </div>
            </div>

            <!-- User -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets_staging/images/users/avatar-4.jpg"
                        alt="Header Avatar">
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account-circle font-size-16 align-middle me-2 text-muted"></i>
                        <span>Profile</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-wallet font-size-16 align-middle text-muted me-2"></i>
                        <span>My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i
                            class="mdi mdi-wrench font-size-16 align-middle text-muted me-2"></i>
                        <span>Settings</span></a>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-lock-open-outline font-size-16 text-muted align-middle me-2"></i>
                        <span>Lock screen</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-primary" href="#"><i
                            class="mdi mdi-power font-size-16 align-middle me-2 text-primary"></i>
                        <span>Logout</span></a>
                </div>
            </div>

            <!-- Setting -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    <div class="user-details">
                        <div class="d-flex">
                            <div class="me-2">
                                <img src="assets_staging/images/users/avatar-4.jpg" alt="" class="avatar-md rounded-circle">
                            </div>
                            <div class="user-info w-100">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Donald Johnson
                                        <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-account-circle text-muted me-2"></i>
                                                Profile<div class="ripple-wrapper me-2"></div>
                                            </a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-cog text-muted me-2"></i>
                                                Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-lock-open-outline text-muted me-2"></i>
                                                Lock screen</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="mdi mdi-power text-muted me-2"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>

                                <p class="text-white-50 m-0">Administrator</p>
                            </div>
                        </div>
                    </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="mdi mdi-home"></i><span class="badge bg-primary float-end">3</span>
                                    <span>Dashboard</span>

                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-email"></i>
                                    <span>Email</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read Email</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-buffer"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-black-mesa"></i>
                                    <span>Components</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="components-lightbox.html">Lightbox</a></li>
                                    <li><a href="components-range-slider.html">Range Slider</a></li>
                                    <li><a href="components-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet-Alert</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-clipboard"></i>
                                    <span class="badge bg-success float-end">6</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-finance"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-c3.html">C3 Charts</a></li>
                                    <li><a href="charts-morris.html">Morris Charts</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-table-settings"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-album"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ion-icons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify-icons.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect">
                                    <i class="mdi mdi-calendar-check"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-google-maps"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li class="menu-title text-uppercase">Extras</li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="mdi mdi-page-layout-sidebar-left"></i>
                                    <span class="badge bg-warning float-end">New</span>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                            <li><a href="layouts-sidebar-user.html">Sidebar With User</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-page-title2.html">Page Title 2</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbarlight.html">Topbar Light</a></li>
                                            <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-document-multiple"></i>
                                    <span>Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-error404.html">Error 404</a></li>
                                    <li><a href="pages-error500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="mdi mdi-file-tree"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <div class="page-title">
                                        <h4 class="mb-0 font-size-18">Dashboard</h4>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item active">Welcome to Agroxa Dashboard</li>
                                        </ol>
                                    </div>

                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                            <div class="info">Balance $ 2,317</div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
                                            <div class="info">Item Sold 1230</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <!-- Start page content-wrapper -->
                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Orders
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Orders</h5>
                                                    <h3 class="mb-3 text-white">1,587</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info"> +11% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-cube-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Revenue
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Revenue</h5>
                                                    <h3 class="mb-3 text-white">$46,785</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-danger"> -29% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-buffer display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Av. Price
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Average Price
                                                    </h5>
                                                    <h3 class="mb-3 text-white">15.9</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-primary"> 0% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-tag-text-outline display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h5 class="text-uppercase verti-label font-size-16 text-white-50">Pr. Sold
                                                </h5>
                                                <div class="text-white">
                                                    <h5 class="text-uppercase font-size-16 text-white-50">Product Sold
                                                    </h5>
                                                    <h3 class="mb-3 text-white">1890</h3>
                                                    <div class="">
                                                        <span class="badge bg-light text-info"> +89% </span> <span
                                                            class="ms-2">From previous period</span>
                                                    </div>
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="mdi mdi-briefcase-check display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <div class="row">
                                <div class="col-xl-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-8 border-end">
                                                    <h4 class="card-title mb-4">Sales Report</h4>
                                                    <div id="morris-area-example" class="dashboard-charts morris-charts">
                                                    </div>
                                                </div>
                                                <!-- End Col -->

                                                <div class="col-xl-4">
                                                    <h4 class="card-title mb-4">Yearly Sales Report</h4>
                                                    <div class="p-3">
                                                        <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="pills-first-tab"
                                                                    data-bs-toggle="pill" href="#pills-first" role="tab"
                                                                    aria-controls="pills-first"
                                                                    aria-selected="true">2015</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-second-tab"
                                                                    data-bs-toggle="pill" href="#pills-second" role="tab"
                                                                    aria-controls="pills-second"
                                                                    aria-selected="false">2016</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="pills-third-tab"
                                                                    data-bs-toggle="pill" href="#pills-third" role="tab"
                                                                    aria-controls="pills-third"
                                                                    aria-selected="false">2017</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane show active" id="pills-first"
                                                                role="tabpanel" aria-labelledby="pills-first-tab">
                                                                <div class="p-3">
                                                                    <h2>$17562</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="pills-second" role="tabpanel"
                                                                aria-labelledby="pills-second-tab">
                                                                <div class="p-3">
                                                                    <h2>$18614</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="pills-third" role="tabpanel"
                                                                aria-labelledby="pills-third-tab">
                                                                <div class="p-3">
                                                                    <h2>$19752</h2>
                                                                    <p class="text-muted">Maecenas nec odio et ante
                                                                        tincidunt tempus. Donec vitae sapien ut libero
                                                                        venenatis faucibus Nullam quis ante.</p>
                                                                    <a href="#" class="text-primary">Read more...</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->

                                <div class="col-xl-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Sales Analytics</h4>
                                            <div id="morris-donut-example" class="dashboard-charts morris-charts"></div>
                                        </div>
                                    </div>
                                    <!-- End Card -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-3">Inbox</h4>
                                            <div data-simplebar style="max-height: 334px;">
                                                <div class="inbox-wid">
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets_staging/images/users/avatar-1.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Irene</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                                available...</p>
                                                            <p class="inbox-item-date text-muted">13:40 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets_staging/images/users/avatar-2.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Jennifer</h6>
                                                            <p class="inbox-item-text text-muted mb-0">I've finished it! See
                                                                you
                                                                so...</p>
                                                            <p class="inbox-item-date text-muted">13:34 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets_staging/images/users/avatar-3.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Richard</h6>
                                                            <p class="inbox-item-text text-muted mb-0">This theme is
                                                                awesome!
                                                            </p>
                                                            <p class="inbox-item-date text-muted">13:17 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets_staging/images/users/avatar-4.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Martin</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Nice to meet you</p>
                                                            <p class="inbox-item-date text-muted">12:20 PM</p>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="text-dark">
                                                        <div class="inbox-item">
                                                            <div class="inbox-item-img float-start me-3"><img
                                                                    src="assets_staging/images/users/avatar-5.jpg"
                                                                    class="avatar-md rounded-circle" alt=""></div>
                                                            <h6 class="inbox-item-author mb-1 text-dark">Sean</h6>
                                                            <p class="inbox-item-text text-muted mb-0">Hey! there I'm
                                                                available...</p>
                                                            <p class="inbox-item-date text-muted">11:47 AM</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-5 text-dark">Recent Activity Feed</h4>
                                            <div>
                                                <ul class="nav nav-pills nav-justified recent-activity-tab mb-4"
                                                    id="recent-activity-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="activity1-tab" data-bs-toggle="pill"
                                                            href="#activity1" role="tab" aria-controls="activity1"
                                                            aria-selected="true">21 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity2-tab" data-bs-toggle="pill"
                                                            href="#activity2" role="tab" aria-controls="activity2"
                                                            aria-selected="false">22 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity3-tab" data-bs-toggle="pill"
                                                            href="#activity3" role="tab" aria-controls="activity3"
                                                            aria-selected="false">23 Sep</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="activity4-tab" data-bs-toggle="pill"
                                                            href="#activity4" role="tab" aria-controls="activity4"
                                                            aria-selected="false">24 Sep</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane show active" id="activity1" role="tabpanel"
                                                        aria-labelledby="activity1-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>21 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Responded to need
                                                                    “Volunteer
                                                                    Activities”</h5>
                                                                <p>Aenean vulputate eleifend tellus</p>
                                                                <p>Maecenas nec odio et ante tincidunt tempus. Donec vitae
                                                                    sapien ut libero venenatis faucibus Nullam quis ante.
                                                                </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity2" role="tabpanel"
                                                        aria-labelledby="activity2-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>22 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Added an interest
                                                                    “Volunteer
                                                                    Activities”</h5>
                                                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit
                                                                    amet consectetur velit sed quia non tempora incidunt.
                                                                </p>
                                                                <p>Ut enim ad minima veniam quis nostrum</p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity3" role="tabpanel"
                                                        aria-labelledby="activity3-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>23 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Joined the group
                                                                    “Boardsmanship Forum”
                                                                </h5>
                                                                <p>Nemo enim voluptatem quia voluptas</p>
                                                                <p>Donec pede justo fringilla vel aliquet nec vulputate eget
                                                                    arcu. In enim justo rhoncus ut imperdiet a venenatis
                                                                    vitae. </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="activity4" role="tabpanel"
                                                        aria-labelledby="activity4-tab">
                                                        <div class="p-3">
                                                            <div class="text-muted">
                                                                <p>24 Sep, 2018</p>
                                                                <h5 class="text-dark font-size-16">Attending the event “Some
                                                                    New Event”
                                                                </h5>
                                                                <p>At vero eos et accusamus et iusto odio</p>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                                    voluptatem accusantium doloremque laudantium </p>
                                                                <a href="#" class="text-primary">Read More...</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Top product sales</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover align-middle mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Computers</h5>
                                                                <p class="text-muted mb-0">The languages only differ</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-pie"
                                                                        data-peity='{ "fill": ["#1b82ec", "#f2f2f2"]}'
                                                                        data-width="54" data-height="54">70/100</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">70%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Laptops</h5>
                                                                <p class="text-muted mb-0">Maecenas tempus tellus</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-donut"
                                                                        data-peity='{ "fill": ["#f5b225", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                        data-width="54" data-height="54">9,4</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">84%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Ipad</h5>
                                                                <p class="text-muted mb-0">Donec pede justo</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-pie"
                                                                        data-peity='{ "fill": ["#1b82ec", "#f2f2f2"]}'
                                                                        data-width="54" data-height="54">62/100</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">62%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h5 class="font-size-16">Mobile</h5>
                                                                <p class="text-muted mb-0">Aenean leo ligula</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <span class="peity-donut"
                                                                        data-peity='{ "fill": ["#f5b225", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'
                                                                        data-width="54" data-height="54">20,4</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="font-size-16">89%</h5>
                                                                <p class="text-muted mb-0">Sales</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Transaction</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">(#) Id</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col" colspan="2">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#15236</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-2.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Jeanette
                                                                    James
                                                                </div>
                                                            </td>
                                                            <td>14/8/2018</td>
                                                            <td>$104</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15237</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-3.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Christopher
                                                                    Taylor
                                                                </div>
                                                            </td>
                                                            <td>15/8/2018</td>
                                                            <td>$112</td>
                                                            <td><span class="badge bg-warning">Pending</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15238</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Edward
                                                                    Vazquez
                                                                </div>
                                                            </td>
                                                            <td>15/8/2018</td>
                                                            <td>$116</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15239</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Michael
                                                                    Flannery
                                                                </div>
                                                            </td>
                                                            <td>16/8/2018</td>
                                                            <td>$109</td>
                                                            <td><span class="badge bg-primary">Cancel</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#15240</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Jamie
                                                                    Fishbourne
                                                                </div>
                                                            </td>
                                                            <td>17/8/2018</td>
                                                            <td>$120</td>
                                                            <td><span class="badge bg-success">Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- End Cardbody -->
                                    </div>
                                    <!-- End card -->
                                </div>
                                <!-- End Col -->

                                <div class="col-xl-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title mb-4">Latest Order</h4>
                                            <div class="table-responsive order-table">
                                                <table class="table table-hover align-middle mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">(#) Id</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date/Time</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col" colspan="2">Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">#14562</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-4.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Matthew
                                                                    Drapeau
                                                                </div>
                                                            </td>
                                                            <td>17/8/2018
                                                                <p class="font-size-13 text-muted mb-0">8:26AM</p>
                                                            </td>
                                                            <td>$104</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14563</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-5.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Ralph Shockey
                                                                </div>
                                                            </td>
                                                            <td>18/8/2018
                                                                <p class="font-size-13 text-muted mb-0">10:18AM</p>
                                                            </td>
                                                            <td>$112</td>
                                                            <td><span class="badge bg-soft-warning rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                                    Pending</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14564</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-6.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Alexander
                                                                    Pierson
                                                                </div>
                                                            </td>
                                                            <td>18//8/2018
                                                                <p class="font-size-13 text-muted mb-0">12:36PM</p>
                                                            </td>
                                                            <td>$116</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14565</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-7.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Robert Rankin
                                                                </div>
                                                            </td>
                                                            <td>19/8/2018
                                                                <p class="font-size-13 text-muted mb-0">11:47AM</p>
                                                            </td>
                                                            <td>$109</td>
                                                            <td><span class="badge bg-soft-primary rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                                                    Cancel</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">#14566</th>
                                                            <td>
                                                                <div>
                                                                    <img src="assets_staging/images/users/avatar-8.jpg" alt=""
                                                                        class="avatar-md rounded-circle me-2"> Myrna Shields
                                                                </div>
                                                            </td>
                                                            <td>20/8/2018
                                                                <p class="font-size-13 text-muted mb-0">02:52PM</p>
                                                            </td>
                                                            <td>$120</td>
                                                            <td><span class="badge bg-soft-success rounded-pill"><i
                                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                                    Delivered</span></td>
                                                            <td>
                                                                <div>
                                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end page-content-wrapper-->

                    </div>
                    <!-- Container-fluid -->
                </div>
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                                    Themesbrand.</span>
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets_staging/images/layouts/layout-1.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets_staging/images/layouts/layout-2.png" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="assets_staging/css/bootstrap-dark.min.css" data-appStyle="assets_staging/css/app-dark.min.css" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets_staging/images/layouts/layout-3.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="assets_staging/css/app-rtl.min.css" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                </div>

            </div>
            <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets_staging_staging/libs/jquery/jquery.min.js')}}"></script>
        <script src="assets_staging/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets_staging/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets_staging/libs/simplebar/simplebar.min.js"></script>
        <script src="assets_staging/libs/node-waves/waves.min.js"></script>
        <script src="assets_staging/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="assets_staging/libs/peity/jquery.peity.min.js"></script>

        <script src="assets_staging/libs/morris.js/morris.min.js"></script>

        <script src="assets_staging/libs/raphael/raphael.min.js"></script>
        
        <!-- Dashboard init JS -->
        <script src="assets_staging/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets_staging/js/app.js"></script>

    </body>

</html>