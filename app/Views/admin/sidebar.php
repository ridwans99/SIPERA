<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Hi, Admin</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Logged in 5 min ago</div>
                        <a href="features-profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <img src="<?= base_url('assets-admin') ?>/assets/img/logo.png" alt="Sipera" width="30px">
                    <a href="index.html">SIPERA</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html">SIPERA</a>
                </div>
                <ul class="sidebar-menu">
                    <li class="menu-header">Dashboard</li>
                    <a href="<?= base_url('Admin/index') ?>" class="nav-link"><i class="fas fa-tachometer-alt"></i><span> Dashboard</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showRuangan') ?>"><i class="fas fa-home"></i> <span> Daftar Ruangan</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showBarang') ?>"><i class="fas fa-hammer"></i> <span> Daftar Barang</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showUsers') ?>"><i class="fas fa-graduation-cap"></i> <span> Daftar Mahasiswa</span></a>
                    <a class="nav-link has-dropdown" href="<?= base_url('Admin/Transaksi') ?>" data-toggle="dropdown"><i class="fas fa-retweet"></i> <span> Daftar Transaksi</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('Admin/showTransaksiRuangan') ?>"> Transaksi Ruangan</a></li>
                        <li><a class="nav-link" href="<?= base_url('Admin/showTransaksiBarang') ?>">Transaksi Barang</a></li>
                    </ul>
                    <a class="nav-link" href="<?= base_url('Admin/showInputData') ?>"><i class="fas fa-pencil-alt"></i> <span> Input Data</span>
                    </a>
                    <a class="nav-link" href="<?= base_url('Admin/showDay1') ?>"><i class="fas fa-calendar-week" aria-hidden="true"></i> <span> Senin</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showDay2') ?>"><i class="fas fa-calendar-week" aria-hidden="true"></i> <span> Selasa</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showDay3') ?>"><i class="fas fa-calendar-week" aria-hidden="true"></i> <span> Rabu</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showDay4') ?>"><i class="fas fa-calendar-week" aria-hidden="true"></i> <span> Kamis</span></a>
                    <a class="nav-link" href="<?= base_url('Admin/showDay5') ?>"><i class="fas fa-calendar-week" aria-hidden="true"></i> <span> Jumat</span></a>
                </ul>
            </aside>
        </div>