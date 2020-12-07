<?php 
      session_start();
      ob_start();

      include "koneksi.php";

      if(empty($_SESSION['username']) or empty($_SESSION['password'])){
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
      }else {
        define('INDEX', true);
      }
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Akademik SMP Muara Ilmu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">SMP Muara Ilmu</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="?content/dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?gu=read_guru">
              <span data-feather="file"></span>
                Data Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?sis=read_siswa">
              <span data-feather="users"></span>
              Data Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?pel=read_pelajaran">
              <span data-feather="book"></span>
              Data Pelajaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?tn=read_nilai">
              <span data-feather="bar-chart-2"></span>
              Transaksi Nilai
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?tj=read_jadwal">
              <span data-feather="layers"></span>
              Transaksi Jadwal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cj=read">
              <span data-feather="bar-chart-2"></span>
              Cetak Data Pelajaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cn=read">
              <span data-feather="bar-chart-2"></span>
              Cetak Nilai Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cg=read">
              <span data-feather="bar-chart-2"></span>
              Cetak Data Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cs=read">
              <span data-feather="bar-chart-2"></span>
              Cetak Data Siswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?cjp=read">
              <span data-feather="bar-chart-2"></span>
              Cetak Jadwal Pelajaran
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <!-- <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
      </div> -->
      <section class="content">
            <?php include "content.php"; ?>
      </section>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>
