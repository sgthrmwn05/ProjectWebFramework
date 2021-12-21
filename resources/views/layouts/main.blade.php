<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Futsal 88 - {{ $title }}</title>
  <!-- Bootstrap core CSS-->
  <link href="../../../css/bootstrap.min.css" rel="stylesheet">
  <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/">Selamat Datang, {{ auth()->user()->name }}</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My Post">
          <a class="nav-link" href="/dashboard/posts">
            <i class="fa fa-fw fa-th-list"></i>
            <span class="nav-link-text">My Post</span>
          </a>
        </li> --}}
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Daftar Penyewaan">
          <a class="nav-link" href="/dashboard/schedule">
            <i class="fa fa-fw fa-th-list"></i>
            <span class="nav-link-text">Daftar Penyewaan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tambah Sewa">
          <a class="nav-link" href="/dashboard/posts">
            <i class="fa fa-fw fa-plus-square"></i>
            <span class="nav-link-text">Tambah Sewa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rekapitulasi">
          <a class="nav-link" href="/dashboard/recap">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Rekapitulasi</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Cari...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> --}}
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="btn btn-dark"><i class="fa fa-fw fa-sign-out"></i>Logout</a></button>
            {{-- <a href="#" type="submit" class="nav-link">
              <i class="fa fa-fw fa-sign-out"></i>Logout</a> --}}
          </form>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">{{ $title }}</li>
      </ol>
      
      <div class="content">
        @yield('content')
      </div>

      <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Sistem Informasi Booking Lapangan Futsal</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>


      <!-- Bootstrap core JavaScript-->
      <script src="../../../vendor/jquery/jquery.min.js"></script>
      <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->
      <script src="../../../vendor/chart.js/Chart.min.js"></script>
      <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
      <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="../../../js/sb-admin.min.js"></script>
      <!-- Custom scripts for this page-->
      <script src="../../../js/sb-admin-datatables.min.js"></script>
      <script src="../../../js/sb-admin-charts.min.js"></script>

</body>

</html>
