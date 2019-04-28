<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  $a = $_GET['nip'];

  $sql = "SELECT * FROM pegawai WHERE nip = " . $a;
  $result = $conn->query($sql);
  $data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Sip - Edit Data</title>
  <link rel="icon" href="assets/img/office-material.svg">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body style="background-color: #3B3B3B;">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="assets/img/office-material.svg" width="40" height="30" alt="">
        E-Sip
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="pilih_surat.php">Tambah Surat</a>
          </li>
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
              <a class="dropdown-item" href="#">About</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log Out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-12">
          <div class="judul m-3">Edit Data Pegawai</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="data_edit_action_pegawai.php">
                <div class="form-group row">
                  <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
                  <div class="col-sm-4">
                    <input type="hidden" name="nipas" value="<?=$data['nip']?>">
                    <input type="text" class="form-control" id="NIP" name="nip" value="<?=$data['nip']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Nama" name="nama" value="<?=$data['nama']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Alamat" name="alamat" value="<?=$data['alamat']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Jabatan" name="jabatan" value="<?=$data['jabatan']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                      <a href="data_pegawai.php" class="btn btn-primary">Back</a>
                      <input type="submit" value="Edit" class="btn btn-primary float-right">
                  </div>
                </div>
              </form>
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