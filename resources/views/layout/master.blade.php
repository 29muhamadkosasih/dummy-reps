<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    {{-- <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title> --}}
    <title>REQUEST FUND </title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/icons8-x-men-48.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">

    <!-- END: Vendor CSS-->
    <!-- END: Vendor CSS-->

    {{-- LTE --}}

    <link href="{{ asset('plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/modal-create-app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/authentication.css') }}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                                data-feather="menu"></i></a></li>
                </ul>
            </div>
            <ul class="nav navbar-nav bookmark-icons">
                <h3 style="color:black) ;padding-top:9px"><b>FUND REQUEST FORM </b></h3>
            </ul>
            <ul class="nav navbar-nav align-items-center ms-auto">

                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                            data-feather="moon"></i></a></li>
                <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                            data-feather="search"></i></a>
                    <div class="search-input">
                        <div class="search-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                            data-search="search">
                        <div class="search-input-close"><i data-feather="x"></i></div>
                        <ul class="search-list search-list-main"></ul>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                        id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ Auth::user()->name
                                }}</span><span class="user-status">{{ Auth::user()->email }}</span></div><span
                            class="avatar">
                            <img class="round"
                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}?background=0D8ABC&color=fff"
                                alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                        <a class="dropdown-item" href="{{ url('logout') }}"><i class="me-50" data-feather="power">
                            </i> Logout</a>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('dashboard.index') }}"><span
                            class="brand-logo">
                            <img alt="svgImg"
                                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iOTYiIGhlaWdodD0iOTYiCnZpZXdCb3g9IjAgMCA0OCA0OCIKc3R5bGU9IiBmaWxsOiMwMDAwMDA7Ij48cmVjdCB3aWR0aD0iNS45OTkiIGhlaWdodD0iMzYuMDYyIiB4PSIyMC43NSIgeT0iNS43MTkiIGZpbGw9IiM2YzE5ZmYiIHRyYW5zZm9ybT0icm90YXRlKC00NS4wMDEgMjMuNzUgMjMuNzUpIj48L3JlY3Q+PHJlY3Qgd2lkdGg9IjM1LjM1NSIgaGVpZ2h0PSI1Ljk5OSIgeD0iNi4zMjIiIHk9IjIxIiBmaWxsPSIjNmMxOWZmIiB0cmFuc2Zvcm09InJvdGF0ZSgtNDUuMDAxIDI0IDI0KSI+PC9yZWN0PjxyZWN0IHdpZHRoPSI1Ljk5OSIgaGVpZ2h0PSI1Ljk5OSIgeD0iMjEiIHk9IjIxIiBmaWxsPSIjMjEwMGM0IiB0cmFuc2Zvcm09InJvdGF0ZSgtNDUuMDAxIDI0IDI0KSI+PC9yZWN0PjxwYXRoIGZpbGw9IiM2YzE5ZmYiIGQ9Ik0yNCw0QzEyLjk1NCw0LDQsMTIuOTU0LDQsMjRjMCwxMS4wNDYsOC45NTQsMjAsMjAsMjBzMjAtOC45NTQsMjAtMjBDNDQsMTIuOTU0LDM1LjA0Niw0LDI0LDR6IE0yNCwzOGMtNy43MzIsMC0xNC02LjI2OC0xNC0xNGMwLTcuNzMyLDYuMjY4LTE0LDE0LTE0czE0LDYuMjY4LDE0LDE0QzM4LDMxLjczMiwzMS43MzIsMzgsMjQsMzh6Ij48L3BhdGg+PGc+PHBhdGggZmlsbD0iIzIxMDBjNCIgZD0iTTM1Ljc4MywzMS41NDFjLTEuMDkyLDEuNzAzLTIuNTQsMy4xNS00LjI0Miw0LjI0Mmw0LjMwNSw0LjMwNSBjMS42MTktMS4xOTQsMy4wNDgtMi42MjMsNC4yNDItNC4yNDJMMzUuNzgzLDMxLjU0MXoiPjwvcGF0aD48cGF0aCBmaWxsPSIjMjEwMGM0IiBkPSJNMTIuMjE3LDMxLjU0MWwtNC4zMDUsNC4zMDVjMS4xOTQsMS42MTksMi42MjMsMy4wNDgsNC4yNDIsNC4yNDJsNC4zMDUtNC4zMDUgQzE0Ljc1NiwzNC42OTEsMTMuMzA5LDMzLjI0NCwxMi4yMTcsMzEuNTQxeiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMyMTAwYzQiIGQ9Ik0zNS43ODMsMTYuNDU5bDQuMzA1LTQuMzA1Yy0xLjE5NC0xLjYxOS0yLjYyMy0zLjA0OC00LjI0Mi00LjI0MmwtNC4zMDUsNC4zMDUgQzMzLjI0NCwxMy4zMDksMzQuNjkxLDE0Ljc1NiwzNS43ODMsMTYuNDU5eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiMyMTAwYzQiIGQ9Ik0xMi4yMTcsMTYuNDU5YzEuMDkyLTEuNzAzLDIuNTQtMy4xNSw0LjI0Mi00LjI0MmwtNC4zMDUtNC4zMDUgYy0xLjYxOSwxLjE5NC0zLjA0OCwyLjYyMy00LjI0Miw0LjI0MkwxMi4yMTcsMTYuNDU5eiI+PC9wYXRoPjwvZz48L3N2Zz4=" />
                        </span>
                        <h2 class="brand-text">REQUEST FUND</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                @if ( auth()->user()->jabatan_id == 1 )

                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('dashboard.index') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">Index</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item {{ (request()->is('me')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('me.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Profile</span></a>
                </li>

                <li class=" nav-item {{ (request()->is('form')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('form.index') }}"><i data-feather='folder'></i><span
                            class="menu-title text-truncate" data-i18n="Kanban">Form Request</span></a>
                </li>

                @elseif( auth()->user()->jabatan_id == 2)
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('dashboard-checked')) ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('dashboard.checked') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">Index</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item {{ (request()->is('me')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('me.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Profile</span></a>
                </li>

                <li class=" nav-item {{ (request()->is('form-checked')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('form-checked.index') }}"><i
                            data-feather='eye'></i><span class="menu-title text-truncate" data-i18n="Kanban">
                            Form Request
                        </span></a>
                </li>
                @elseif( auth()->user()->jabatan_id == 3)
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('dashboard-checked')) ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('dashboard.checked') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">Index</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item {{ (request()->is('me')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('me.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Profile</span></a>
                </li>

                <li class=" nav-item {{ (request()->is('form-checked')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('form-checked.index') }}"><i
                            data-feather='eye'></i><span class="menu-title text-truncate" data-i18n="Kanban">
                            Form Request
                        </span></a>
                </li>
                @elseif( auth()->user()->jabatan_id == 4)

                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('dashboard-approve')) ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('dashboard.approve') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">Index</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item {{ (request()->is('me')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('me.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Profile</span></a>
                </li>

                <li
                    class=" nav-item {{ (request()->is('form-approve', 'form-approve.edit', 'form-approve.show','form-approve.approve')) ? 'active' : '' }}">
                    <a class="d-flex align-items-center" href="{{ route('form-approve.index') }}"><i
                            data-feather='check-circle'></i><span class="menu-title text-truncate" data-i18n="Kanban">
                            Form Request
                        </span></a>
                </li>
                @else
                <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboard</span><span
                            class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
                    <ul class="menu-content">
                        <li class="{{ (request()->is('dashboard-general')) ? 'active' : '' }}"><a
                                class="d-flex align-items-center" href="{{ route('dashboard.general') }}"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="eCommerce">Index</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item {{ (request()->is('me')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('me.index') }}"><i data-feather="user"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Profile</span></a>
                </li>

                <li class=" nav-item {{ (request()->is('form-list')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('form-list.index') }}"><i
                            data-feather='list'></i><span class="menu-title text-truncate" data-i18n="Kanban">
                            Form Request
                        </span></a>
                </li>

                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Settings</span><i
                        data-feather="more-horizontal"></i>
                </li>

                <li class=" nav-item {{ (request()->is('user')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('user.index') }}"><i data-feather="users"></i><span
                            class="menu-title text-truncate" data-i18n="Kanban">Users</span></a>
                </li>

                <li class=" nav-item {{ (request()->is('norek')) ? 'active' : '' }}"><a
                        class="d-flex align-items-center" href="{{ route('norek.index') }}"><i
                            data-feather="send"></i><span class="menu-title text-truncate"
                            data-i18n="Kanban">Rekening</span></a>
                </li>
                <li class=" nav-item {{ (request()->is('bank')) ? 'active' : '' }}"><a class="d-flex align-items-center"
                        href="{{ route('bank.index') }}"><i data-feather="database"></i><span
                            class="menu-title text-truncate" data-i18n="Kanban">Bank</span></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>

            @yield('content')
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy;
                2029<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio"
                    target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights
                    Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i
                    data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/jszip.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/components/components-modals.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/cleave/cleave.min.js')}}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.j')}}s"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-select2.js') }}"></script>

    <!-- END: Page Vendor JS-->


    {{-- LTE --}}
    <script src="{{ asset('plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('plugins/js/custom.min.js') }}"></script>
    <script src="{{ asset('plugins/js/settings.js') }}"></script>
    <script src="{{ asset('plugins/js/gleek.js') }}"></script>
    <script src="{{ asset('plugins/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>


    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}"></script>

    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/tables/table-datatables-basic.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/modal-add-new-cc.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/modal-add-new-address.js') }}"></script>

    <script src="{{ asset('app-assets/js/scripts/pages/page-pricing.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/modal-create-app.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/modal-two-factor-auth.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/modal-edit-user.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/modal-share-project.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/pages/auth-login.js') }}"></script>
    <script src="{{ asset('app-assets/js/scripts/forms/form-number-input.js') }}"></script>


    <!-- END: Page JS-->

    <script src="{{ asset('app-assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{ asset('app-assets/demo/chart-bar-demo.js')}}"></script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })

        @if(Session::has('success'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.success("{{ session('success') }}");
        @endif

        @if(Session::has('error'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options = {
            "closeButton": true,
        }
        toastr.warning("{{ session('warning') }}");
        @endif
    </script>
</body>
<!-- END: Body-->

</html>