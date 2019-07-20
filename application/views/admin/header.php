<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1" />
  <meta name="msapplication-tap-highlight" content="no">

  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Milestone">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Milestone">

  <meta name="theme-color" content="#4C7FF0">

  <title>Milestone - Bootstrap 4 Dashboard Template</title>

  <!-- page stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/bower-jvectormap/jquery-jvectormap-1.2.2.css')?>" />
  <!-- end page stylesheets -->

  <!-- build:css({.tmp,app}) styles/app.min.css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/bootstrap/dist/css/bootstrap.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/pace/themes/blue/pace-theme-minimal.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/font-awesome/css/font-awesome.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/animate.css/animate.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/styles/app.css')?>" id="load_styles_before')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/styles/app.skins.css')?>" />
  <!-- endbuild -->
</head>
<body>
<div class="app expanding">
<div class="sidebar-panel">
      <div class="brand">
        <!-- toggle offscreen menu -->
        <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen hidden-lg-up">
          <i class="material-icons">menu</i>
        </a>
        <!-- /toggle offscreen menu -->
        <!-- logo -->
        <a class="brand-logo">
          
        </a>
        <!-- /logo -->
      </div>
      <div class="nav-profile dropdown">
        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
          <div class="user-image">
            <img src="<?php echo base_url('assets/admin/images/avatar.jpg')?>" class="avatar img-circle" alt="user" title="user" />
          </div>
          <div class="user-info expanding-hidden">
            Admin
            <small class="bold">Administrator</small>
          </div>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="javascript:;">Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('user/logout')?>">Logout</a>
        </div>
      </div>
      <!-- main navigation -->
      <nav>
        <p class="nav-title">NAVIGATION</p>
        <ul class="nav">
          <!-- dashboard -->
          <li>
            <a href="<?php echo base_url('admin')?>">
              <i class="material-icons text-primary">home</i>
              <span>Home</span>
            </a>
          </li>
          <!-- /dashboard -->
          <!-- apps -->
          <li>
            <a href="javascript:;">
              <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
              </span>
              <i class="material-icons text-success"> airport_shuttle</i>
              <span>Transportasi</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="<?php echo base_url('admin/transportasi')?>">
                  <span>Tambah/Edit Transportasi</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /apps -->
          <!-- ui -->
          <li>
            <a href="javascript:;">
              <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
              </span>
              <i class="material-icons text-secondary">person</i>
              <span>Pelanggan</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="<?php echo base_url('admin/pelanggan')?>">
                  <span>Tambah/Edit Pelanggan</span>
                </a>
              </li>
            </ul>
          <li>
            <a href="javascript:;">
              <span class="menu-caret">
                <i class="material-icons">arrow_drop_down</i>
              </span>
              <i class="material-icons text-danger">view_list</i>
              <span>Pesanan</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="<?php echo base_url('admin/user')?>">
                  <span>Konfirmasi Pesanan</span>
                </a>
              </li>
            </ul>
      </nav>
      <!-- /main navigation -->
    </div>
      <!-- /top header -->
      
  <script type="text/javascript">
    window.paceOptions = {
      document: true,
      eventLag: true,
      restartOnPushState: true,
      restartOnRequestAfter: true,
      ajax: {
        trackMethods: ['POST', 'GET']
      }
    };
  </script>

  <!-- build:js({.tmp,app}) scripts/app.min.js -->


  <!-- end page scripts -->

  <!-- initialize page scripts -->

  <!-- end initialize page scripts -->
  <script>
  
  </script>
</body>
</html>