<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width" />
  <title>E-Sides - Pilih Surat</title>
  <link rel="icon" href="assets/img/office-material.svg">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body style="background-color: #0079a7;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="assets/img/office-material.svg" width="40" height="30" alt="">
        E-Sides
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Data
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="p_data_surat.php">Data Surat</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_pegawai.php">Data Pegawai</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_penduduk.php">Data Penduduk</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data_chart.php">Statistik Surat</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Hello, <?=$_SESSION['user']?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="about.php">About</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    <!-- Container -->

    <div class="container-fluid">
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
              <a href="#" data-toggle="modal" data-target="#sm" class="btn btn-primary">Pilih!</a>
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
              <a href="p_s_keluar.php" class="btn btn-primary">Pilih!</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="sm" tabindex="-1" role="dialog" aria-labelledby="Title1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Surat Masuk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="mx-3" method="POST" action="a_sum.php" enctype="multipart/form-data">
              <input type="hidden" name="jenis_sp" value="Surat Masuk">
              <div class="form-group row">
                <label for="Asal" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Asal" name="asal">
                </div>
              </div>
              <div class="form-group row">
                <label for="nos" class="col-sm-2 col-form-label">No.Surat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nos" name="nosu">
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal" name="t_sur">
                </div>
              </div>
              <div class="form-group row">
                <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Alamat" name="alamat">
                </div>
              </div>
              <div class="form-group row">
                <label for="Indeks" class="col-sm-2 col-form-label">Indeks</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="Indeks" name="indeks">
                </div>
              </div>
              <div class="form-group row">
                <label for="peri" class="col-sm-2 col-form-label">Perihal</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="peri" name="perihal">
                </div>
              </div>
              <div class="form-group row">
                <label for="isir" class="col-sm-2 col-form-label">Isi Ringkasan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="isir" name="isri">
                </div>
              </div>
              <div class="form-group row">
                <label for="Laci" class="col-sm-2 col-form-label">Laci</label>
                <div class="col-sm-10">
                  <select class="form-control" id="Laci" name="laci">
                    <option value="Surat Dinas">Dinas</option>
                    <option value="Surat Umum">Umum</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="Guide" class="col-sm-2 col-form-label">Guide</label>
                <div class="col-sm-10">
                  <select class="form-control" id="Guide" name="guide">
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="File" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                  <input type="file" name="file">
                </div>
              </div>
              <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
          $("#Laci").change(function () {
              var val = $(this).val();
              if (val == "Surat Dinas") {
                  $("#Guide").html("<option>Undangan Dinas</option><option>Tugas Dinas</option>");
              } 
              else if (val == "Surat Umum") {
                  $("#Guide").html("<option>Pengantar</option>");
              }
          });
      });
    </script>
  </body>
</html>