<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebardark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a style="color:#ffffff;" class="sidebar-brand d-flex align-items-center
justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pustaka
            Booking</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Looping Menu-->
    <div class="sidebar-heading">
        <span style="color:#ffffff">Home</span>
    </div>
    <li class="nav-item">
        <!--Nav Item - Dashboard-->
        <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span style="color:#ffffff">Dashboard</span></a>
    </li>
    <hr class="sidebar-divider mt-3">
    <!-- Heading -->
    <div class="sidebar-heading">
        <span style="color:#ffffff">Master Data</span>
    </div>
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('kategori'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span style="color:#ffffff">Kategori buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('buku'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span style="color:#ffffff">Data Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link pb-0" href="<?=
                                        base_url('user/anggota'); ?>">
            <i class="fa fa-fw fa book"></i>
            <span style="color:#ffffff">Data Anggota</span></a>
    </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -- > 