<!-- TOP BAR -->
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger material-shadow-none" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- App Search-->
                <!-- <form class="app-search d-none d-md-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="">
                        <span class="mdi mdi-magnify search-widget-icon"></span>
                        <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
                    </div>
                </form> -->
            </div>

            <div class="d-flex align-items-center">
                <div class="dropdown ms-1 topbar-head-dropdown header-item">
                    <!-- <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                            <i class='bx bx-fullscreen fs-22'></i>
                        </button>
                    </div> -->

                    <div class="ms-1 header-item d-none d-sm-flex">
                        <button type="button" class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                            <i class='bx bx-moon fs-22'></i>
                        </button>
                    </div>

                    <div class="dropdown ms-sm-3 header-item topbar-user">
                        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-center">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"> Acerca de... </span>
                            </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profile"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                            <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>

<!-- MENUBAR -->
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">

    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/umg.png" alt="" height="35">
            </span>
            <span class="logo-lg">
                <img src="assets/images/umg-logo.jpg" alt="" height="50" width="125">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="#" class="logo logo-light">
            <!-- <span class="logo-sm">
                <img src="assets/images/umg.png" alt="" height="35">
            </span> -->
            <span class="logo-lg">
                <img src="assets/images/gauss.png" alt="" height="50" width="175">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="home.php">
                        <i class="bx bxs-bar-chart-alt-2"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="proyectos.php">
                        <i class="bx bx-male-female"></i> <span data-key="t-widgets">Proyectos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="materiales.php">
                        <i class=" bx bx-cog"></i><span data-key="t-widgets">Materiales</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="tareas.php">
                        <i class="bx bx-edit"></i> <span data-key="t-widgets">Tareas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="empleados.php">
                        <i class="bx bx-user"></i> <span data-key="t-widgets">Empleados</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarconfiguration" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarconfiguration">
                        <i class="ri-rocket-line"></i> <span data-key="t-configuration">Configuración</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarconfiguration">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="usuarios.php" class="nav-link" data-key="t-usuarios"> Usuarios </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="roles.php" class="nav-link" data-key="t-roles"> Roles </a>
                            </li> -->
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->