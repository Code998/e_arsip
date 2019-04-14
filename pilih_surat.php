<?php  
  session_start();
  include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Homepage</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="assets/img/office-material.svg" width="40" height="30" alt="">
        E-Arsip
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="p_data_surat.php">Data Surat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Hello, <?=$_SESSION['user']?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </nav>
    
    <!-- Container -->

    <div class="container-fluid bckgrnd">
          <div class="row">
            <div class="col-sm-12">
              <div class="judul m-3">Pilih Surat</div>
            </div>
          </div>
          <div class="row mt-3 ml-3">
            <div class="col-md-3 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Masuk
                </div>
                <img class="card-img-top mt-3" src="assets/img/message.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Semua surat yang diterima oleh suatu perusahaan atau organisasi yang berasal dari pihak lain, baik itu perorangan maupun perusahaan/ organisasi.</p>
                  <a href="#" data-toggle="modal" data-target="#suma" class="btn btn-primary">Pilih!</a>
                </div>
              </div>
            </div> 
            <div class="col-sm-3 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Keluar
                </div>
                <img class="card-img-top mt-3" src="assets/img/newsletter.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Semua surat yang dikeluarkan oleh suatu perusahaan atau organisasi untuk diberikan kepada pihak perorangan maupun perusahaan/ organisasi.</p>
                  <a class="btn btn-primary" href="p_s_keluar.php">Pilih!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>