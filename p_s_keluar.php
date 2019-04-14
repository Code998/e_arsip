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
            <a class="nav-link" href="pilih_surat.php">Pilih Surat</a>
          </li>
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
              <div class="judul m-3">Pilih Surat Keluar</div>
            </div>
          </div>
          <div class="row mt-3 ml-3">
            <div class="col-md-3 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Pengantar
                </div>
                <img class="card-img-top mt-3" src="assets/img/message.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Surat yang dibuat dan dialamatkan  kepada seseorang atau pejabat yang berguna untuk mengantarkan surat, dokumen, barang, dan lain sebagainya.</p>
                  <a href="#" data-toggle="modal" data-target="#spen" class="btn btn-primary">Pilih!</a>
                </div>
              </div>
            </div> 
            <div class="col-sm-3 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Keterangan
                </div>
                <img class="card-img-top mt-3" src="assets/img/newsletter.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Surat yang isinya menerangkan seseorang atau suatu hal. Surat ini termasuk jenis surat yang banyak di buat karena isi surat ini umumnya menyangkut aktivitas manusia.</p>
                  <a href="#" data-toggle="modal" data-target="#sket" class="btn btn-primary">Pilih!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="spen" tabindex="-1" role="dialog" aria-labelledby="Title1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Pengantar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_suratp.php">
                  <input type="hidden" name="jenis_sp" value="Surat Keluar">
                  <input type="hidden" name="lacip" value="Surat Pengantar">
                  <div class="form-group row">
                    <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="NIK" name="nik">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaKet" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namaKet" name="namaket">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="jenis" name="jenisP">
                        <option>KK</option>
                        <option>KTP</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Keterangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_suratk.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_sk" value="Surat Keluar">
                  <input type="hidden" name="laci" value="Surat Keterangan">
                    <label for="NIKp" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="NIKp" name="nikp">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="NAMA" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="NAMA" name="namap">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="Guide" class="col-sm-2 col-form-label">Guide</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="Guide" name="guide">
                        <option>SKCK</option>
                        <option>Domisili</option>
                      </select>
                    </div>
                  </div>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>


    <!-- JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>