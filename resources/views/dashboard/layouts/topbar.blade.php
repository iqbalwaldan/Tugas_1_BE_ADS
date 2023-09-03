<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    {{-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button> --}}

    <!-- Topbar Search -->
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        {{-- <div class="input-group">
            <input type="text" class="form-control bg-light border-0" placeholder="Search for..."
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div> --}}
    </form>

    <!-- Topbar Navbar -->
    {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

    <!-- Nav Item - User Information -->
    <div class="dropdown mr-5 me-1">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-lg-inline text-gray-600 small mr-2">Welcome, {{ auth()->user()->name }}</span>
            <img class="img-profile rounded-circle mr-2" style="max-width: 30px" src="img/undraw_profile.svg">
        </a>
        <ul class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
            <li>
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>

</nav>
<!-- End of Topbar -->