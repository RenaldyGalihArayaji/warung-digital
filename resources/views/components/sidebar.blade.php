
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Warung Digital</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item">
        <a class="nav-link collapsed" href="/slider"  aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-pip"></i>
            <span>Slider</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-bucket-fill"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Product:</h6>
                <a class="collapse-item" href="/daftar-product">Daftar Product</a>
                <a class="collapse-item" href="/category-product">Category Product</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="bi bi-people-fill"></i>
            <span>Pengguna</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Pengguna:</h6>
                <a class="collapse-item" href="/daftar_pengguna">Daftar Pengguna</a>
                <a class="collapse-item" href="/group_pengguna">Group Pengguna</a>
            </div>
        </div>
    </li>

     <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
        <form action="">
            <a class="nav-link collapsed" href="#" >
                <i class="bi bi-box-arrow-right "></i>
                <span>Logout</span>
            </a>
        </form>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->