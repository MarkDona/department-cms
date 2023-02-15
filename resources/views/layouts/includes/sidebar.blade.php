<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{route('home')}}"><span class="brand-logo">
                            <img src="{{asset('donatus/logos/csdlogo.png')}}"></span>
                    <h2 class="brand-text">CS-DMS</h2>
                </a></li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item active"><a class="d-flex align-items-center" href="{{route('home')}}"><i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='user'></i>
                    <span class="menu-title text-truncate" data-i18n="Email">Bio Data</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather="message-square"></i>
                    <span class="menu-title text-truncate" data-i18n="Chat">Announcements</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='dollar-sign'></i>
                    <span class="menu-title text-truncate" data-i18n="Todo">Payments</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='activity'></i>
                    <span class="menu-title text-truncate" data-i18n="Calendar">Activity Logs</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href=""><i data-feather='paperclip'></i>
                    <span class="menu-title text-truncate" data-i18n="Kanban">Reset Password</span></a>
            </li>
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
        <div class="content-body">
