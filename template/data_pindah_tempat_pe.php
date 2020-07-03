<?php
  error_reporting(0);
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  $jenis = $_POST['jenis'];

  $sql = "SELECT * FROM data_surat_pite ORDER BY tgl";

  $search = $_POST['search'];

  if ($search != "") {
    $sql = "SELECT * FROM data_surat_pite WHERE nama LIKE '%" . $search . "%' OR ttl LIKE '%" . $search . "%' OR nik LIKE '%" . $search . "%' OR jk LIKE '%" . $search . "%' OR st_perk LIKE '%" . $search . "%' OR al_sek LIKE '%" . $search . "%' OR al_tuj LIKE '%" . $search . "%' OR agama LIKE '%" . $search . "%' OR pekerjaan LIKE '%" . $search . "%'";
  }

  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Sides - Data Surat</title>
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
              Buku Register
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="data_masuk.php">Register Masuk</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_umum.php">Register Umum</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_kelahiran.php">Register Kelahiran</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_kematian.php">Register Kematian</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="data_pindah_tempat.php">Register Pindah Tempat</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="data_pegawai.php">Data Pegawai</a>
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
          <div class="judul m-3">Register Pindah Tempat</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card mb-5">
            <div class="card-body">
              <div class="float-right mb-3">
                <a href="#" data-toggle="modal" data-target="#tambahd" class="btn btn-success text-light" >Tambah Data</a>
              </div>
              <div class="float-left mb-3">
                <form class="form-inline" method="POST" action="data_masuk.php">
                  <div class="form-group mr-sm-3 mb-2">
                    <input type="text" class="form-control" name="search" placeholder="Search....">
                  </div>
                  <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
                </form>
              </div>
              <div class="table-responsive" style="height: 400px;">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Nomor</th>
                      <th scope="col">Nomor Registrasi</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tempat, Tanggal Lahir</th>
                      <th scope="col">NIK</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Status Perkawinan</th>
                      <th scope="col">Agama</th>
                      <th scope="col">Pekerjaan</th>
                      <th scope="col">Alamat Sekarang </th>
                      <th scope="col">Alamat Tujuan</th>
                      <th scope="col" colspan="2">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                          <td>
                            <?=$row['no']?>
                          </td>
                          <td>
                            <?= $row['no_reg'] ?>
                          </td>
                          <td>
                            <?= $row['nama'] ?>
                          </td>
                          <td>
                            <?= $row['ttl'] ?>
                          </td>
                          <td>
                            <?= $row['nik'] ?>
                          </td>
                          <td>
                            <?= $row['jk'] ?>
                          </td>
                          <td>
                            <?= $row['st_perk'] ?>
                          </td>
                          <td>
                            <?= $row['agama'] ?>
                          </td>
                          <td>
                            <?= $row['pekerjaan'] ?>
                          </td>
                          <td>
                            <?= $row['al_sek'] ?>
                          </td>
                          <td>
                            <?= $row['al_tuj'] ?>
                          </td>
                          <td>
                            <a href="show_image_ptem.php?no=<?=$row['no']?>">
                                <img src="assets/img/writing.svg" height="22" width="22" title="Lihat Lampiran">
                            </a>
                            <a href="#" data-href="d_p_data_pitem.php?no=<?=$row['no']?>" data-toggle="modal" data-target="#confirm-delete">
                              <img src="assets/img/clear-button.svg" height="22" width="22" title="Delete">
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="float-right mt-3">
                <a href="c_p_data_petim.php" class="btn btn-dark d-flex justify-content-center"><i class="material-icons md-light mr-1">print</i>Print</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            Delete Data Surat
          </div>
            <div class="modal-body">
                Are you sure want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

        <div class="modal fade" id="tambahd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable mw-100 w-50" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Register Pindah Tempat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="mx-3" method="POST" action="a_p_pite.php" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="nrpt" class="col-sm-4 col-form-label">No Registrasi</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nrpt" name="noreg">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namapt" class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="namapt" name="npt">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="ttpt" class="col-sm-4 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-3">
                      <input type="text" class="form-control" id="ttpt" name="tetpt">
                    </div>
                    <div class="col-sm-5">
                      <input type="date" name="d3" id="date3" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nikpt" class="col-sm-4 col-form-label">NIK</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="nikpt" name="nkpt">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jeka" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="jeka" name="jpt">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="agamapt" class="col-sm-4 col-form-label">Agama</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="agamapt" name="apt">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="peker2" class="col-sm-4 col-form-label">Pekerjaan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="peker2" name="pkj2">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="stppt" class="col-sm-4 col-form-label">Status Perkawinan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="stppt" name="spt">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="as" class="col-sm-4 col-form-label">Alamat Sekarang</label>
                    <div class="col-sm-8">
                      <textarea name="al_sek" id="as" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="at" class="col-sm-4 col-form-label">Alamat Tujuan</label>
                    <div class="col-sm-8">
                      <textarea name="al_tuj" id="at" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="File" class="col-sm-4 col-form-label">File</label>
                    <div class="col-sm-8">
                      <input type="file" name="file">
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

    <!-- JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      });
    </script>
  </body>
</html>