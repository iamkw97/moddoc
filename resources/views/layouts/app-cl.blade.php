<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>MedDOC</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin-app/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-app/css/bootstrap.icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-app/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-app/css/quill.snow.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-app/css/quill.bubble.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-app/css/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-app/css/datatablesstyle.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admin-app/css/bootstrap-datepicker.min.css') }}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin-app/css/style.css') }}" rel="stylesheet" />
    {{-- jquery js --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="" />
                <span class="d-none d-lg-block">MedDOC</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        {{-- user welcome --}}
        <div class="head-title-bar mx-4 mt-2">
            <li class="nav-item font-weight-semibold d-none d-sm-block d-flex align-items-left">
                <h4 class="welcome-text"><span class="text-black fw-bold">{{ Auth::user()->name }}
                        -
                        {{ Auth::user()->branch }}</span></h4>

                {{-- <h5 class="welcome-sub-text">We are pleased to serve you.</h3> --}}
            </li>
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span> </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>
                    </ul>
                    <!-- End Notification Dropdown Items -->
                </li>
                <!-- End Notification Nav -->

                <li class="nav-item dropdown">
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span> </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle" />
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>
                                        Velit asperiores et ducimus soluta repudiandae labore
                                        officia est ut...
                                    </p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>
                    </ul>
                    <!-- End Messages Dropdown Items -->
                </li>
                <!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('img/profile.jpg') }}" alt="Profile" class="rounded-circle" />

                        <!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->name }}</h6>
                                <span>{{ Auth::user()->email }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                    <i class="bi bi-gear"></i>
                                    <span>Account Settings</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                    <i class="bi bi-question-circle"></i>
                                    <span>Need Help?</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-heading">Loan Details</li>

            {{-- loan cal --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-grid"></i>
                    <span>Loan Calculator</span>
                </a>
            </li>

            {{-- new loan --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-grid"></i>
                    <span>New Loan</span>
                </a>
            </li>
            {{-- end new loan ---------------------------------------------------------------- --}}
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Loan Status</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Requested Loans</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Approved Loans</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Rejected Loans</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Confirmed Loans</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Forms Nav -->
            <li class="nav-heading">Doctor Details</li>
            {{-- loan --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('start.register-doctor') }}">
                    <i class="bi bi-person-plus-fill"></i>
                    <span>New Doctor</span>
                </a>
            </li>
            {{-- end new loan ---------------------------------------------------------------- --}}
            {{-- loan --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('start.list-doctor') }}">
                    <i class="bi bi-people-fill"></i>
                    <span>Doctor Status</span>
                </a>
            </li>
            {{-- end new loan ---------------------------------------------------------------- --}}

            <li class="nav-heading">Sales</li>
            {{-- loan --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-grid"></i>
                    <span>Sale Status</span>
                </a>
            </li>
            {{-- end new loan ---------------------------------------------------------------- --}}
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin-app/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin-app/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin-app/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin-app/js/echarts.min.js') }}"></script>
    <script src="{{ asset('admin-app/js/quill.min.js') }}"></script>
    <script src="{{ asset('admin-app/js/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin-app/js/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin-app/js/validate.js') }}"></script>
    <script src="{{ asset('admin-app/css/bootstrap-datepicker.min.css') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin-app/js/main.js') }}"></script>
</body>

</html>
