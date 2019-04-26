<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Data Surat</title>
  <link rel="icon" href="assets/img/office-material.svg">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body style="background-color: #3B3B3B;">

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
          <div class="judul m-3">Tambah Data Pegawai</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card">
            <div class="card-body">
              <form method="POST" action="data_add_action_pe.php">
                <div class="form-group row">
                  <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="NIK" name="nik">
                  </div>
                  <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="jk" name="jeka">
                      <option value="L">L</option>
                      <option value="P">P</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="NoKK" class="col-sm-2 col-form-label">No KK</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="NoKK" name="no_kk">
                  </div>
                  <label for="stat" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="stat" name="status">
                      <option>Single</option>
                      <option>Menikah</option>
                      <option>Cerai Hidup</option>
                      <option>Cerai Mati</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Nama" name="nama">
                  </div>
                  <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="Alamat" name="alamat">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tl" class="col-sm-2 col-form-label">Tempat Lahir</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="tl" name="tela">
                  </div>
                  <label for="ag" class="col-sm-2 col-form-label">Agama</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="ag" name="agama">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="t_l" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                  <div class="col-sm-4">
                    <input type="date" class="form-control" id="t_l" name="tala">
                  </div>
                  <label for="pk" class="col-sm-2 col-form-label">Pekerjaan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="pk" name="peker">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="usia" class="col-sm-2 col-form-label">Usia</label>
                  <div class="col-sm-4">
                    <input type="number" class="form-control" id="usia" name="usi">
                  </div>
                  <label for="kn" class="col-sm-2 col-form-label">Kewarnegaraan</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="kn" name="kener">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-12">
                    <div class="float-right">
                      <input type="submit" value="Tambah" class="btn btn-primary">
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