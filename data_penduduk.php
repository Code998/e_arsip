<?php
  error_reporting(0);
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  $search = $_POST['search'];

  if ($search == "") {
    $sql = "SELECT * FROM penduduk";
  }
  else{
    $sql = "SELECT * FROM penduduk WHERE nik LIKE '%" . $search . "%' OR no_kk LIKE '%" . $search . "%' OR nama LIKE '%" . $search . "%' OR tempat_lahir LIKE '%" . $search . "%' OR tanggal_lahir LIKE '%" . $search . "%' OR usia LIKE '%" . $search . "%' OR jenis_kelamin LIKE '%" . $search . "%' OR status LIKE '%" . $search . "%' OR alamat LIKE '%" . $search . "%' OR agama LIKE '%" . $search . "%' OR pekerjaan LIKE '%" . $search . "%' OR kewarnegaraan LIKE '%" . $search . "%' OR tanggal_buat LIKE '%" . $search . "%'";
  }

  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Sip - Data Penduduk</title>
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

    <!-- Container -->
    <div class="container-fluid bckgrnd">
       <div class="row">
        <div class="col-sm-12">
          <div class="judul m-3">Data Penduduk</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card">
            <div class="card-body">
              <div class="float-left mb-3">
                <form class="form-inline" method="POST" action="data_penduduk.php">
                  <div class="form-group mr-sm-3 mb-2">
                    <input type="text" class="form-control" name="search" placeholder="Search....">
                  </div>
                  <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
                </form>
              </div>
              <div class="float-right">
                <a href="data_add_penduduk.php" class="btn btn-primary">Tambah</a>
              </div>
              <div class="table-responsive">
                <table class="table text-center">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">NIK</th>
                      <th scope="col">No KK</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Usia</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Status</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Agama</th>
                      <th scope="col">Pekerjaan</th>
                      <th scope="col">Kewarnegaraan</th>
                      <th scope="col">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                          <td>
                            <?= $row['nik'] ?>
                          </td>
                          <td>
                            <?= $row['no_kk'] ?>
                          </td>
                          <td>
                            <?= $row['nama'] ?>
                          </td>
                          <td>
                            <?= $row['tempat_lahir'] ?>
                          </td>
                          <td>
                            <?= $row['tanggal_lahir'] ?>
                          </td>
                          <td>
                            <?= $row['usia'] ?>
                          </td>
                          <td>
                            <?php
                            if ($row['jenis_kelamin'] == "L") {
                              echo "Laki-Laki";
                            }
                            else{
                              echo "Perempuan";
                            }
                            ?>
                          </td>
                          <td>
                            <?= $row['status'] ?>
                          </td>
                          <td>
                            <?= $row['alamat'] ?>
                          </td>
                          <td>
                            <?= $row['agama'] ?>
                          </td>
                          <td>
                            <?= $row['pekerjaan'] ?>
                          </td>
                          <td>
                            <?= $row['kewarnegaraan'] ?>
                          </td>
                          <td>
                            <a href="data_edit_penduduk.php?nik=<?=$row['nik']?>">
                                <img src="assets/img/writing.svg" height="25" width="25" title="Edit Data">
                            </a>
                            <a href="#" data-href="data_delete_action_pe.php?nik=<?=$row['nik']?>" data-toggle="modal" data-target="#confirm-delete">
                              <img src="assets/img/clear-button.svg" height="25" width="25" title="Delete">
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
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
            Delete Data Penduduk
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