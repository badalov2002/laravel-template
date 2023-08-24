<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center bg-black-10">
            <!-- Logo -->
            <div>
              <span class="smini-visible fw-bold tracking-wide fs-lg">
                c<span class="text-primary">b</span>
              </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  <span class="fs-4 text-dual">code</span><span class="fs-4 text-primary">base</span>
                </span>
                </a>
            </div>
            <!-- END Logo -->

            <!-- Options -->
            <div>
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-fw fa-times"></i>
                </button>
                <!-- END Close Sidebar -->
            </div>
            <!-- END Options -->
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Main Navigation -->
            <div class="content-side content-side-full">
                <!--
                Mobile navigation, desktop navigation can be found in #page-header

                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                -->
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="db_corporate.html">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-cog"></i>
                            <span class="nav-main-link-name">Settings</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-layer-group"></i>
                            <span class="nav-main-link-name">Features</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Backend</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Frontend</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <span class="nav-main-link-name">More</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="">
                                            <span class="nav-main-link-name">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="">
                                            <span class="nav-main-link-name">Resources</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Main Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
</nav>

<!-- Header -->
<header id="page-header" class="bg-dark">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center space-x-3">
            <!-- Logo -->
            <a class="link-fx fw-semibold" href="index.html">
                <span class="text-dual">Clinic</span><span class="text-primary">Up</span>
            </a>
            <!-- END Logo -->

            <!-- Header Navigation -->
            <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
            <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="db_corporate.html">
                        <i class="nav-main-link-icon fa fa-rocket"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="">
                        <i class="nav-main-link-icon fa fa-cog"></i>
                        <span class="nav-main-link-name">Settings</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-layer-group"></i>
                        <span class="nav-main-link-name">Features</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Backend</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="">
                                <span class="nav-main-link-name">Frontend</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <span class="nav-main-link-name">More</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="">
                                        <span class="nav-main-link-name">Resources</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END Header Navigation -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="space-x-1">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

</header>
