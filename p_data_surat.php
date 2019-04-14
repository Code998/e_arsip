<?php  
  session_start();
  include_once 'connection.php';

  $sql = "SELECT * FROM arsip_surat";
  $result = $conn->query($sql);
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
                            <?= $row['tanggal_surat'] ?>
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