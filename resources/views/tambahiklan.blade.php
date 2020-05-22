<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Admin &mdash; Gethevent</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="asset/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="asset/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="asset/modules/weather-icon/css/weather-icons.min.css">
  <link rel="stylesheet" href="asset/modules/weather-icon/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="asset/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            </div>
          </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="asset/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Rizka Dwi</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="{{ url('/profile') }}" class="dropdown-item has-icon">
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
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="{{ url('/adminevent') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Kelola Data</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Master</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ url('/dataadmin') }}">Data Admin</a></li>
                <li><a class="nav-link" href="{{ url('/datatransaksi') }}">Data Transaksi</a></li>
                <li><a class="nav-link" href="{{ url('/dataiklan') }}">Data Iklan</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="laporan.html"><i class="far fa-square"></i> <span>Laporan</span></a></li>
            
            
            </li>           
              
            </li>
            
            
            
            

          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>        </aside>
      </div>

      <!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Iklan</h1>
            <div class="section-header-breadcrumb">
              
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Tambah Data Iklan</h2>
            
           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Iklan</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Iklan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pihak Pemberi Iklan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Detail Iklan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>


  <!-- General JS Scripts -->
  <script src="asset/modules/jquery.min.js"></script>
  <script src="asset/modules/popper.js"></script>
  <script src="asset/modules/tooltip.js"></script>
  <script src="asset/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="asset/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="asset/modules/moment.min.js"></script>
  <script src="asset/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="asset/modules/simple-weather/jquery.simpleWeather.min.js"></script>
  <script src="asset/modules/chart.min.js"></script>
  <script src="asset/modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="asset/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="asset/modules/summernote/summernote-bs4.js"></script>
  <script src="asset/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="asset/js/page/index-0.js"></script>
  
  <!-- Template JS File -->
  <script src="asset/js/scripts.js"></script>
  <script src="asset/js/custom.js"></script>
</body>
</html>