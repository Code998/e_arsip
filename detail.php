<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  $id = $_GET['id'];
  $sql =  "SELECT * FROM arsip_surat WHERE no_surat = " . $id;
  $result = $conn->query($sql);
	$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Sides - Detail</title>
  <link rel="icon" href="assets/img/office-material.svg">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/infinite.css">
</head>
<body style="background-color: #3B3B3B;">

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
              <a class="dropdown-item" href="#">About</a>
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
        <div class="judul m-3">Detail Surat</div>
      </div>
      <div class="col-sm-12 px-5">
        <div class="card">
          <div class="card-body">
						  <?php  
						  	if ($data['jenis'] == "Surat Masuk") {
						  	?>
								<form method="POST" action="e_sum.php">
								  <div class="form-group row">
								    <label for="no" class="col-sm-2 col-form-label">No. Surat</label>
								    <div class="col-sm-4">
								    	<input type="hidden" value="<?=$data['no_surat']?>" name="noas">
								      <input type="text"  class="form-control" id="no" name="nosu" value="<?=$data['r_no_su']?>">
								    </div>
								  </div>
									<div class="form-group row">
								    <label for="nama" class="col-sm-2 col-form-label">Asal Surat</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="nama" name="asal" value="<?=$data['dari_kpd']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="alamat" name="alamat" value="<?=$data['alamat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="tgl" class="col-sm-2 col-form-label">Tanggal Surat</label>
								    <div class="col-sm-4">
								      <input type="date"  class="form-control" id="tgl" name="t_sur" value="<?=$data['tanggal_surat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="index" class="col-sm-2 col-form-label">Indeks</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="index" name="indeks" value="<?=$data['indeks']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="perihal" name="perihal" value="<?=$data['perihal']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="Isri" class="col-sm-2 col-form-label">Isi Ringkasan</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="Isri" name="isri" value="<?=$data['isi_ringkas']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="Jam" class="col-sm-2 col-form-label">Jam</label>
								    <div class="col-sm-4">
								      <input type="text" readonly class="form-control-plaintext" id="Jam" name="jam" value="<?=date('h:i:s', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="Admin" class="col-sm-2 col-form-label">Admin</label>
								    <div class="col-sm-4">
								      <input type="text" readonly class="form-control-plaintext" id="Admin" name="admin" value="<?=$data['admin']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="Tgl" class="col-sm-2 col-form-label">Tanggal Pembuatan</label>
								    <div class="col-sm-4">
								      <input type="text" readonly class="form-control-plaintext" id="Tgl" name="tgl_pem" value="<?=date('d/m/Y', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <div class="col-sm-6">
								    	<a href="p_data_surat.php" class="btn btn-primary">Back</a>
										<input type="submit" value="Edit" class="btn btn-primary float-right">
								    </div>
								  </div>
						  	<?php
						  	}
						  	else{
						  	?>
						  	<form>
									<div class="form-group row">
								    <label for="nama" class="col-sm-2 col-form-label">Nama Pemohon</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="nama" value="<?=$data['dari_kpd']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="nik" value="<?=$data['nik']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="alamat" value="<?=$data['alamat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="no" class="col-sm-2 col-form-label">No. Surat</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="no" value="<?="407 / " . $data['no_surat'] . " / 35.07.23.2003 / " . date('Y', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="perihal" value="<?=$data['perihal']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="tain" class="col-sm-2 col-form-label">Tanggal Pembuatan</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="tain" value="<?=date('d/m/Y', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="jam" value="<?=date('H:i:s', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="Admin" class="col-sm-2 col-form-label">Admin</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="Admin" value="<?=$data['admin']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <div class="col-sm-6">
								    	<a href="p_data_surat.php" class="btn btn-primary">Back</a>
						                <a href="show_image.php?id=<?=$data['no_surat']?>" class="btn btn-dark d-flex justify-content-center float-right"><i class="material-icons md-light ">print</i>Print</a>
								    </div>
								  </div>
						  	<?php
						  	}
						  ?>
						</form>
          </div>
       </div>
			</div>
		</div>
	</div>
</body>
</html>