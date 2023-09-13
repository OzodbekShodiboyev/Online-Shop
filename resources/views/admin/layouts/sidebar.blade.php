<ul class="navbar-nav sidebar sidebar-success accordion btn-success position-absolute§" style="background-color: rgb(22 163 74);"
    id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-icon">
                <img src="{{ asset('topes.png')}}" width="108px;"/>
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
        <a class="nav-link" href="{{url('/admin/orders')}}">
            <i style="color: black;" class="fas fa-fw fa-table"></i>
            <span style="color: black;">Buyurtmalar</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{url('/admin/users')}}">
            <i style="color: black;" class="fas fa-fw fa-users"></i>
            <span style="color: black;">Foydalanuvchilar</span></a>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/category') }}">
            <i style="color: black;" class="fas fa-fw fa-cog"></i>
            <span style="color: black;">Kategoriya</span></a>
    </li>
    <!-- Divider -->

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/brands') }}">
            <i class="fas fa-copyright" style="color: black;"></i>
            <span style="color: black;">Brend</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/colors') }}">
             <i class="fas fa-tint" style="color: black;"></i>
            <span style="color: black;">Rang</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/products') }}">
            <i style="color: black;" class="fas fa-fw fa-shopping-cart"></i>
            <span style="color: black;">Mahsulotlar</span></a>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/sldr') }}">
            <i style="color: black;" class='fas fa-sliders-h'></i>
            <span style="color: black;">Slayder</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->

</ul>
