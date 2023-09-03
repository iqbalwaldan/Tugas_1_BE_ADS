<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Report List -->
    <li class="nav-item {{ Request::is('dashboard/report') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/report">
            <i class="fa-solid fa-file"></i>
            <span>Report List</span></a>
    </li>

    <!-- Nav Item - Report Tracker -->
    <li class="nav-item {{ Request::is('dashboard/report-tracker') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/report-tracker">
            <i class="fa-brands fa-stack-overflow"></i>
            <span>Report Tracker</span></a>
    </li>

    <!-- Nav Item - Log Activity -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fa-solid fa-signs-post"></i>
            <span>Log Activity</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}

</ul>
<!-- End of Sidebar -->