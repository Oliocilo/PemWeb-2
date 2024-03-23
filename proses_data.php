<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    // Ambil data dari formulir popup
    $nomorPolisi = $_POST['NomorPolisi'];
    $merk = $_POST['Merk'];
    $pemilik = $_POST['Pemilik'];
    $status = $_POST['Status'];

    // Sekarang Anda dapat menggunakan variabel-variabel ini untuk menyimpan data ke dalam database atau melakukan tindakan lainnya
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIPAK | Data Kendaraan</title>
  <link rel="icon" href="assets/img/SIPAK.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="assets/css/popUp.css">  
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="dashboard.html" class="brand-link">
        <img src="assets/img/SIPAK.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 bg-yellow"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Sipak</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/img/olic.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin Kholiq</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="dashboard.html" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="fa fa-motorcycle"></i>
                <p>
                  Kendaraan
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Kendaraan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Parkir</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <hr class="border-white">
              <a href="#" class="nav-link">
                <i class="far fa-building"></i>
                <p>
                  Gedung
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="areaparkir.html" class="nav-link">
                <i class="far fas fa-parking"></i>
                <p>
                  Area Parkir
                </p>
              </a>
            </li>
            <li class="nav-item">
              <hr class="border-white">
              <a href="login.html" class="nav-link">
                <i class="nav-icon fas fa-check"></i>
                <p>
                  log out
                  <i class="right far fa-angle-left"></i>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1>Data Kendaran</h1>
          </div>

          <div class="col">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
              <li class="breadcrumb-item active">Data Kendaraan</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <table>
              <tr>
                <td>
                  <h5>Jenis kendaraan :</h5>
                </td>
                <td>
                  <a href="#" style="color: black;">
                    <i class="fas fa-circle"></i>
                    Mobil
                  </a>
                </td>
                <td>
                  <a href="datamotor.html" style="color: black;">
                    <i class="far fa-circle nav-icon"></i>
                    Motor
                  </a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <table class="table mt-5">
  <thead>
    <tr>
    <th>No</th>
    <th>Merk</th>
    <th>Pemilik</th>
    <th>Status</th>
    <th>Nomor Polisi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $merk ?></td>
      <td><?= $pemilik ?></td>
      <td><?= $status ?></td>
      <td><?= $nomorPolisi ?></td>
    </tr>
</tbody>
</table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer bg-dark">
    <!-- To the right -->
    <div class="float-md-right">
        <ul class="d-flex nav justify-content-center text-center">
            <li>
              <a href="#"><i class="bi bi-instagram m-1"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-github m-1"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-linkedin m-1"></i></a>
            </li>
          </ul>
    </div>
    <!-- Default to the left -->
      <p class="text-center text-md-left m-0">
        <strong>Copyright &copy; 2023 <span><a href="index.html">SIPAK STT Nurul Fikri</a></span>.</strong> All rights reserved.
      </p>
  </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <!--areaparkir pop up Custom Script for Edit and Delete-->
  <script src="assets/js/dataKendaraan.js"></script>
  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.js"></script>
  <!-- AdminLTE App -->
  <script src="assets/js/adminlte.min.js"></script>
</body>

</html>
