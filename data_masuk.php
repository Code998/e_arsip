<?php
  error_reporting(0);
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  $jenis = $_POST['jenis'];

  $sql = "SELECT * FROM data_surat_masuk ORDER BY tgl_simpan";

  $search = $_POST['search'];

  if ($search != "") {
    $sql = "SELECT * FROM data_surat_masuk WHERE nama LIKE '%" . $search . "%' OR no_surat LIKE '%" . $search . "%' OR tgl_surat LIKE '%" . $search . "%' OR tgl_simpan LIKE '%" . $search . "%' OR perihal LIKE '%" . $search . "%' OR isi LIKE '%" . $search . "%' OR alamat LIKE '%" . $search . "%'";
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
          <div class="judul m-3">Register Masuk</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card mb-5">
            <div class="card-body">
              <div class="float-right mb-3">
              </div>
              <div class="float-left mb-3">
                <form class="form-inline" method="POST" action="data_masuk.php">
                  <div class="form-group mr-sm-3 mb-2">
                    <input type="text" class="form-control" name="search" placeholder="Search....">
                  </div>
                  <button type="submit" class="btn btn-outline-primary mb-2">Search</button>
                </form>
              </div>
              <div class="table-responsive-lg" style="height: 400px;">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Nomor</th>
                      <th scope="col">Dari / Kepada</th>
                      <th scope="col">No Surat</th>
                      <th scope="col">Tanggal Surat</th>
                      <th scope="col">Perihal</th>
                      <th scope="col">Isi</th>
                      <th scope="col">Alamat</th>
                      <th scope="col" colspan="2">Keterangan</th>
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
                            <?= $row['nama'] ?>
                          </td>
                          <td>
                            <?= $row['no_surat'] ?>
                          </td>
                          <td>
                            <?= $row['tgl_surat'] ?>
                          </td>
                          <td>
                            <?= $row['perihal'] ?>
                          </td>
                          <td>
                            <?= $row['isi'] ?>
                          </td>
                          <td>
                            <?= $row['alamat'] ?>
                          </td>
                          <td>
                            <a href="show_image.php?no=<?=$row['no']?>">
                                <img src="assets/img/writing.svg" height="22" width="22" title="Lihat Lampiran">
                            </a>
                            <a href="#" data-href="d_p_data_masuk.php?no=<?=$row['no']?>" data-toggle="modal" data-target="#confirm-delete">
                              <img src="assets/img/clear-button.svg" height="22" width="22" title="Delete">
                            </a>
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="float-right">
                <a href="data_cetak_surat.php" class="btn btn-dark d-flex justify-content-center"><i class="material-icons md-light mr-1">print</i>Print</a>
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