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
  <title>E-Sides - Surat Keluar</title>
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
            <a class="nav-link" href="pilih_surat.php">Pilih Surat</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Buku Registrasi
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="data_masuk.php">Registrasi Masuk</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_umum.php">Registrasi Umum</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_kelahiran.php">Registrasi Kelahiran</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_kematian.php">Registrasi Kematian</a>
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
              <div class="judul m-3">Pilih Surat Keluar</div>
            </div>
          </div>
          <div class="row mt-3 ml-3">
            <div class="col-sm-4 col-md-2 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Beda Identitas
                </div>
                <img class="card-img-top mt-3" src="assets/img/id-card.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#beid" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div> 
            <div class="col-sm-4 col-md-2 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Domisili Lembaga
                </div>
                <img class="card-img-top mt-3" src="assets/img/school.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#dole" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Domisili Pribadi
                </div>
                <img class="card-img-top mt-3" src="assets/img/user.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#dopr" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Belum Menikah
                </div>
                <img class="card-img-top mt-3" src="assets/img/man.svg" height="100" width="50" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#beme" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Keterangan Kerja
                </div>
                <img class="card-img-top mt-3" src="assets/img/suitcase.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#ketke" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div> 
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Keterangan Usaha
                </div>
                <img class="card-img-top mt-3" src="assets/img/shop.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#ketus" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            </div>
            <div class="row mt-3 ml-3">
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Laporan Kehilangan
                </div>
                <img class="card-img-top mt-3" src="assets/img/lost-and-found.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#lapke" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  SKTM
                </div>
                <img class="card-img-top mt-3" src="assets/img/alms.svg" height="100" width="50" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#sktm" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  SKTM Beasiswa
                </div>
                <img class="card-img-top mt-3" src="assets/img/education.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#sktmb" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div> 
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Jalan
                </div>
                <img class="card-img-top mt-3" src="assets/img/delivery.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#sujal" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Kelahiran
                </div>
                <img class="card-img-top mt-3" src="assets/img/newborn.svg" height="100" width="100" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#sukel" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-2 mt-sm-3 mt-md-0 text-center">
              <div class="card bg-card">
                <div class="card-header">
                  Surat Kematian
                </div>
                <img class="card-img-top mt-3" src="assets/img/funeral.svg" height="100" width="50" alt="Card image cap">
                <div class="card-body mt-3">
                  <a href="#" data-toggle="modal" data-target="#sukem" class="btn btn-primary">Buat Surat</a>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="beid" tabindex="-1" role="dialog" aria-labelledby="BedaIdentitas" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Form Beda Identitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <h2>Data 1</h2>
                <form class="mx-3" method="POST" action="a_p_dsbi.php">
                  <input type="hidden" name="jenis_s" value="Beda Identitas">
                  <div class="form-group row">
                    <label for="dt1" class="col-sm-4 col-form-label">Data 1 Tertera </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="dt1" name="data1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama1" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama1" name="nm1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl1" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl1" name="tetl1">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d1" id="date1" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa1" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa1" name="kew1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk1" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk1" name="jke1">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama" name="agama1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker" name="pkj">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe1" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe1" name="sp1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat1" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat1" name="tempa1">
                    </div>
                  </div>
                  <br>
                  <hr class="border-dark">
                  <br>
                  <h2>Data 2</h2>
                  <div class="form-group row">
                    <label for="dt2" class="col-sm-4 col-form-label">Data 2 Tertera </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="dt2" name="data2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama2" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nama2" name="nm2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl2" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl2" name="tetl2">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d2" id="date2" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk2" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk2" name="jke2">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe2" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe2" name="sp2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nik" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik" name="nike">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat2" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat2" name="tempa2">
                    </div>
                  </div>
                  <br>
                  <div class="form-group row">
                    <label for="benar" class="col-sm-4 col-form-label">Data yang benar pada</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="benar" name="ben1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kep" class="col-sm-4 col-form-label">Keperluan </label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kep" name="keper">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt" name="ttd">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="dole" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Domisili Lembaga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_dole.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s1" value="Domisili Lembaga">
                    <label for="namadl" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namadl" name="ndl">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="umur" class="col-sm-4 col-form-label">Umur</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="umur" name="um">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jabat" class="col-sm-4 col-form-label">Jabatan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="jabat" name="jab">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <textarea name="alam" id="alamat" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jelem" class="col-sm-4 col-form-label">Jenis Lembaga</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="jelem" name="jlem">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nalem" class="col-sm-4 col-form-label">Nama Lembaga</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nalem" name="nlem">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bahuk" class="col-sm-4 col-form-label">Badan hukum</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="bahuk" name="bahu">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alem" class="col-sm-4 col-form-label">Alamat Lembaga</label>
                    <div class="col-sm-8">
                      <textarea name="alemb" id="alem" class="form-control" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt2" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt2" name="ttd2">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="dopr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Domisili Pribadi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_dopr.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s2" value="Domisili Pribadi">
                    <label for="namadp" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namadp" name="ndp">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl3" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl3" name="tetl3">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d3" id="date3" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa2" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa2" name="kew2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk3" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk3" name="jke3">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama1" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama1" name="agama2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker1" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker1" name="pkj1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe3" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe3" name="sp3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat3" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat3" name="tempa3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt3" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt3" name="ttd3">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="beme" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Belum Menikah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_bemi.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s3" value="Belum Menikah">
                    <label for="namask" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namask" name="nsk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl3" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl3" name="tetl3">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d3" id="date3" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa3" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa3" name="kew3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk4" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk4" name="jke4">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama2" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama2" name="agama3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker2" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker2" name="pkj2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe4" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe4" name="sp4">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat4" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat4" name="tempa4">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keper" class="col-sm-4 col-form-label">Keperluan Untuk</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="keper" name="keperl">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt4" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt4" name="ttd4">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ketke" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_suker.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s4" value="Surat Kerja">
                    <label for="namask" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namask" name="nsk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl4" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl4" name="tetl4">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d4" id="date4" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk5" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk5" name="jke5">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa4" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa4" name="kew4">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama3" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama3" name="agama4">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe5" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe5" name="sp5">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker3" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker3" name="pkj3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nik1" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik1" name="nike1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat5" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat5" name="tempa5">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt5" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt5" name="ttd5">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ketus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Keterangan Usaha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_ketus.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s5" value="Keterangan Usaha">
                    <label for="namaku" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namaku" name="nku">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl5" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl5" name="tetl5">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d5" id="date5" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk6" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk6" name="jke6">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa5" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa5" name="kew5">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama4" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama4" name="agama5">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe6" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe6" name="sp6">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker4" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker4" name="pkj4">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nik2" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik2" name="nike2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="rt" class="col-sm-4 col-form-label">RT</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="rt" name="rt1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="rw" class="col-sm-4 col-form-label">RW</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="rw" name="rw1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="dusun" class="col-sm-4 col-form-label">Dusun</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="dusun" name="dusun1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desa" class="col-sm-4 col-form-label">Desa</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="desa" name="desa1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt5" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt5" name="ttd5">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jeus" class="col-sm-4 col-form-label">Jenis Usaha</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="jeus" name="jeus1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tabe" class="col-sm-4 col-form-label">Tahun Berdiri</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tabe" name="tabe1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alus" class="col-sm-4 col-form-label">Alamat Usaha</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alus" name="alus1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="dape" class="col-sm-4 col-form-label">Daerah Pemasaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="dape" name="dape1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt6" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tt6" name="ttd6">
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sktm" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Keterangan Tidak mampu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_sktm.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s6" value="SKTM">
                    <label for="namasktm" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namasktm" name="nsktm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl6" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl6" name="tetl6">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d6" id="date6" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk7" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk7" name="jke7">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa6" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa6" name="kew6">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama5" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama5" name="agama6">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe7" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe7" name="sp7">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker5" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker5" name="pkj5">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nik3" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik3" name="nike3">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keper1" class="col-sm-4 col-form-label">Keperluan Untuk</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="keper1" name="keperl1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tesktm" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tesktm" name="tsktm">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt7" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="t7t" name="ttd7">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form> 
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sktmb" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Keterangan Tidak Mampu Beasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_sktmb.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s7" value="SKTM Beasiswa">
                    <label for="namasktmb" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namasktmb" name="nsktmb">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl7" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl7" name="tetl7">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d7" id="date6" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa7" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa7" name="kew7">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk8" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk8" name="jke8">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama6" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama6" name="agama7">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe8" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe8" name="sp8">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peke0" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peke0" name="psktmb">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nik4" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nik4" name="nike4">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat7" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat7" name="tempa7">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaa" class="col-sm-4 col-form-label">Nama Anak</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namaa" name="namaa0">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl8" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl8" name="tetl8">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d8" id="date8" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pean" class="col-sm-4 col-form-label">Pekerjaan Anak</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pean" name="pean0">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keper2" class="col-sm-4 col-form-label">Keperluan Untuk</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="keper2" name="keperl2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tt8" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tt8" name="ttd8">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form> 
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sujal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Jalan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_sujel.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s8" value="Surat jalan">
                    <label for="namasj" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namasj" name="nsj">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttl8" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttl8" name="tetl8">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d8" id="date8" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kewa8" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kewa8" name="kew8">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jk9" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jk9" name="jke9">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agama7" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agama7" name="agama8">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker6" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker6" name="pkj6">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pe9" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pe9" name="sp9">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempat8" class="col-sm-4 col-form-label">Tempat Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempat8" name="tempa8">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="altu" class="col-sm-4 col-form-label">Alamat Tujuan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="altu" name="altu0">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="bemu" class="col-sm-4 col-form-label">Berlaku Mulai</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" id="bemu" name="bemu0">
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form> 
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sukel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Kelahiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_sukel.php">
                  <h2>Telah Lahir Pada</h2>
                  <br>
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s9" value="Kelahiran">
                    <label for="harila" class="col-sm-4 col-form-label">Hari</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="harila" name="hla">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tglsk" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-5">
                      <input type="date" name="tsk" id="tglsk" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pklsk" class="col-sm-4 col-form-label">Pukul</label>
                    <div class="col-sm-5">
                      <input type="time" name="psk" id="pklsk" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tempatl" class="col-sm-4 col-form-label">Di</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tempatl" name="tmptla">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jksl" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jksl" name="jsl">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaba" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namaba" name="nbayi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="anke" class="col-sm-4 col-form-label">Anak Ke</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="anke" name="ake">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="naay" class="col-sm-4 col-form-label">nama Ayah</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="naay" name="nayah">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="naib" class="col-sm-4 col-form-label">Nama Ibu</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="naib" name="nibu">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamatsl" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamatsl" name="asla">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttdsl" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="ttdsl" name="tsl">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form> 
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="sukem" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Kematian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_sukem.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s10" value="Kematian">
                    <label for="namake" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namake" name="nkem">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jkem" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jkem" name="jkem0">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alkem1" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alkem1" name="alke1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="umkem" class="col-sm-4 col-form-label">Umur</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="umkem" name="ukem">
                    </div>
                  </div>
                  <br>
                  <h2>Telah Meninggal Dunia Pada</h2>
                  <br>
                  <div class="form-group row">
                    <label for="hakem" class="col-sm-4 col-form-label">Hari</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="hakem" name="hkem">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tsk1" class="col-sm-4 col-form-label">Tanggal</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" id="tsk1" name="tsuke">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tmpkem" class="col-sm-4 col-form-label">Tempat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tmpkem" name="tkem">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="sebab" class="col-sm-4 col-form-label">Disebabkan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="sebab" name="sbb">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kydt" class="col-sm-4 col-form-label">Keluarga yang di Tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kydt" name="kelya">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamatsk" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="alamatsk" name="aske">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttdsk" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="ttdsk" name="ttsk">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <input type="submit" value="Buat" class="btn btn-primary float-right">
                </form> 
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="lapke" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Surat Laporan Kehilangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_lakel.php">
                  <div class="form-group row">
                  <input type="hidden" name="jenis_s11" value="Laporan Kehilangan">
                    <label for="nalake" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nalake" name="nlap">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttlk" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttlk" name="tlk">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="datl" id="dtlk" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kelapke" class="col-sm-4 col-form-label">Kewarnegaraan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="kelapke" name="klk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agalk" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agalk" name="alk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="st_pelk" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="st_pelk" name="splk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pekerlk" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="pekerlk" name="pkjlk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="niklk" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="niklk" name="nikelk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="byg1" class="col-sm-4 col-form-label">Barang Yang Hilang</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="byg1" name="bayg1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tptk" class="col-sm-4 col-form-label">Tempat Kehilangan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tptk" name="tlk1">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tting1" class="col-sm-4 col-form-label">Tempat tinggal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="tting1" name="ttin">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harilk" class="col-sm-4 col-form-label">Hari</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="harilk" name="hlk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pkllk" class="col-sm-4 col-form-label">Pukul</label>
                    <div class="col-sm-5">
                      <input type="time" name="plk" id="pkllk" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keperlk" class="col-sm-4 col-form-label">Keperluan Untuk</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="keperlk" name="keplk">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tlk" class="col-sm-4 col-form-label">TTD</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="tlk" name="ttdlk">
                        <option>Kepala Desa</option>
                        <option>Sekertaris Desa</option>
                      </select>
                    </div>
                  </div>
                  <br>
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