<!DOCTYPE html>
<html>
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
            <img alt="image" src="<?php echo base_url('stisla-assets/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $admin['full_name']; ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="/admin">Jasa Sosmed ID</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="/admin">JSI</a>
          </div>
          <ul class="sidebar-menu">
              <li><a class="nav-link" href="/admin"><i class="fas fa-home"></i><span>Home</span></a></li>
              <li><a class="nav-link" href="/admin/users"><i class="fas fa-users"></i> <span>Manage Users</span></a></li>
              <li><a class="nav-link" href="/admin/orders"><i class="fas fa-shopping-cart"></i> <span>Manage Orders</span></a></li>
              <li><a class="nav-link" href="/admin/products"><i class="fas fa-store"></i> <span>Manage Products</span></a></li>
              <li><a class="nav-link" href="/admin/announcements"><i class="fas fa-bullhorn"></i><span>Manage Announcements</span></a></li>
            </ul>

            <!-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div> -->
        </aside>
      </div>
</html>