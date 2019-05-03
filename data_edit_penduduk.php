<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  $a = $_GET['nik'];

  $sql = "SELECT * FROM penduduk WHERE nik = " . $a;
  $result = $conn->query($sql);
  $data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Sides - Edit Data</title>
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
              <a class="dropdown-item" href="about.php">About</a>
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
          <div class="judul m-3">Edit Data Penduduk</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="data_action_eit_penduduk.php">
                <div class="form-group row">
                  <label for="nik" class="col-sm-2 col-form-label">nik</label>
                  <div class="col-sm-4">
                    <input type="hidden" name="nikas" value="<?=$data['nik']?>">
                    <input type="text" class="form-control" id="nik" name="anik" value="<?=$data['nik']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="no_k" class="col-sm-2 col-form-label">No KK</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="no_k" name="no_kk" value="<?=$data['no_kk']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="namA" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="namA" name="nama" value="<?=$data['nama']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Tempat_Lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Tempat_Lahir" name="tempat_lahir" value="<?=$data['tempat_lahir']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Tanngal_Lahir" class="col-sm-2 col-form-label">Tangal Lahir</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="Tanngal_Lahir" name="tanggal_lahir" value="<?=$data['tanggal_lahir']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Usia" class="col-sm-2 col-form-label">Usia</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="Usia" name="usia" value="<?=$data['usia']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="JenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="jk" name="jenis_kelamin">
                      <option <?php if($options=="Laki-Laki") echo 'selected="selected"'; ?>>Laki-Laki</option>
                      <option <?php if($options=="Perempuan") echo 'selected="selected"'; ?>>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Status" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="stat" name="status">
                      <option <?php if($options=="Belum Menikah") echo 'selected="selected"'; ?>>Belum Menikah</option>
                      <option <?php if($options=="Menikah") echo 'selected="selected"'; ?>>Menikah</option>
                      <option <?php if($options=="Cerai Hidup") echo 'selected="selected"'; ?>>Cerai Hidup</option>
                      <option <?php if($options=="Cerai Mati") echo 'selected="selected"'; ?>>Cerai Mati</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Alamat" name="alamat" value="<?=$data['alamat']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Agama" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Agama" name="agama" value="<?=$data['agama']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Pekerjaan" name="pekerjaan" value="<?=$data['pekerjaan']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="KN" class="col-sm-2 col-form-label">Kewarnegaraan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="KN" name="kewarnegaraan" value="<?=$data['kewarnegaraan']?>">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                      <a href="data_penduduk.php" class="btn btn-primary">Back</a>
                      <input type="submit" value="Edit" class="btn btn-primary float-right">
                    </div>
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