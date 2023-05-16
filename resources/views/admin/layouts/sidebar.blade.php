<ul class="navbar-nav sidebar sidebar-success accordion btn-success" style="background-color: rgb(22 163 74) ;"
    id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center m-1 justify-content-center" href="{{ url('/admin/dashboard') }}">
        <div class="sidebar-brand-icon">
            <h3>👨‍💻</h3>
        </div>
        <div class="sidebar-brand-text" style="color: black; font-weight: 600; margin-left:10px">Admin
            <sup>1</sup>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item text-dark">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i style="color: black;" class="fas fa-fw fa-tachometer-alt"></i>
            <span style="color: black;">Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/category') }}">
            <i style="color: black;" class="fas fa-fw fa-cog"></i>
            <span style="color: black;">Categoriya</span></a>
    </li>
    <!-- Divider -->

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/brands') }}">
            <i class="fab fa-bandcamp" style="color: black;"></i>
            <span style="color: black;">Brand</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/colors') }}">
            <i class="fab fa-bandcamp" style="color: black;"></i>
            <span style="color: black;">Color</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/products') }}">
            <i style="color: black;" class="fas fa-fw fa-shopping-cart"></i>
            <span style="color: black;">Products</span></a>
    </li>

    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link" href="Royxat.html">
            <i style="color: black;" class="fas fa-fw fa-users"></i>
            <span style="color: black;">Admins</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i style="color: black;" class="fas fa-fw fa-chart-area"></i>
            <span style="color: black;">Statistika</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="">
            <i style="color: black;" class="fas fa-fw fa-table"></i>
            <span style="color: black;">Buyurtmalar</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/sldr') }}">
            <i style="color: black;" class="fas fa-fw fa-shopping-cart"></i>
            <span style="color: black;">Slider</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>
