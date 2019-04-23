<?php  
  session_start();
  include_once 'connection.php';

  $jenis = $_POST['jenis'];

  if ($jenis == "Surat Masuk") {
    $sql = "SELECT * FROM arsip_surat WHERE jenis = '" . $jenis . "'";
  }
  elseif ($jenis == "Surat Keluar") {
    $sql = "SELECT * FROM arsip_surat WHERE jenis = '" . $jenis . "'";
  }
  else{
    $sql = "SELECT * FROM arsip_surat";
  }

  $search = $_POST['search'];

  if ($search == "") {
    $sql = "SELECT * FROM arsip_surat";
  }
  else{
    $sql = "SELECT * FROM arsip_surat WHERE jenis LIKE '%" . $search . "%' OR no_surat LIKE '%" . $search . "%' OR dari_kpd LIKE '%" . $search . "%' OR tanggal_surat LIKE '%" . $search . "%' OR tanggal_input LIKE '%" . $search . "%' OR perihal LIKE '%" . $search . "%' OR laci LIKE '%" . $search . "%' OR guide LIKE '%" . $search . "%'";
  }

  $result = $conn->query($sql);
?>

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
          <div class="judul m-3">Data Surat</div>
        </div>
        <div class="col-sm-12 px-5">
          <div class="card">
            <div class="card-body">
              <div class="float-right mb-3">
                <form action="p_data_surat.php" method="POST" class="form-inline">
                <select name="jenis" class="form-group mx-sm-3 mb-2">
                  <option>Semua</option>
                  <option>Surat Masuk</option>
                  <option>Surat Keluar</option>
                </select>
                <input type="submit" class="btn btn-outline-primary mb-2" value="Sort">
                </form>
              </div>
              <div class="float-left mb-3">
                <form class="form-inline" method="POST" action="p_data_surat.php">
                  <div class="form-group mr-sm-3 mb-2">
                    <input type="text" class="form-control" name="search" placeholder="Search....">
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Search</button>
                </form>
              </div>
              <div class="table-responsive-lg">
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">No. Surat</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Dari / Kepada</th>
                      <th scope="col">Tanggal Surat</th>
                      <th scope="col">Perihal</th>
                      <th scope="col">Laci</th>
                      <th scope="col">Guide</th>
                      <th scope="col" colspan="3">Keterangan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                          <td>
                            <?= $row['no_surat'] ?>
                          </td>
                          <td>
                            <?= $row['jenis'] ?>
                          </td>
                          <td>
                            <?= $row['dari_kpd'] ?>
                          </td>
                          <td>
                            <?= date('d/m/Y', strtotime($row['tanggal_input']))?>
                          </td>
                          <td>
                            <?= $row['perihal'] ?>
                          </td>
                          <td>
                            <?= $row['laci'] ?>
                          </td>
                          <td>
                            <?= $row['guide'] ?>
                          </td>
                          <td>
                            <a href="#">
                                <img src="assets/img/writing.svg" height="25" width="25">
                            </a>&nbsp;
                            <a href="delete.php?id=<?=$row['no_surat']?>">
                              <img src="assets/img/clear-button.svg" height="25" width="25">
                            </a>&nbsp;
                            <a href="detail.php?id=<?=$row['no_surat']?>">
                              <img src="assets/img/info.svg" height="25" width="25">
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

    <!-- JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>