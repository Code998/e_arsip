<?php  
  session_start();
  include_once 'connection.php';

  $id = $_GET['id'];
  $sql = $sql = "SELECT * FROM arsip_surat WHERE no_surat = " . $id;
  $result = $conn->query($sql);
	$data = $result->fetch_assoc();
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

    <!-- Contain -->
    <!-- Container -->
    <div class="container-fluid bckgrnd2">
     <div class="row">
      <div class="col-sm-12">
        <div class="judul m-3">Detail Surat</div>
      </div>
      <div class="col-sm-12 px-5">
        <div class="card">
          <div class="card-body">
						<form>
						  <?php  
						  	if ($data['jenis'] == "Surat Masuk") {
						  	?>
									<div class="form-group row">
								    <label for="nama" class="col-sm-2 col-form-label">Asal Surat</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="nama" value="<?=$data['dari_kpd']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="alamat" value="<?=$data['alamat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="no" class="col-sm-2 col-form-label">No. Surat</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="no" value="<?=$data['no_surat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="tgl" class="col-sm-2 col-form-label">Tanggal Surat</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="tgl" value="<?=$data['tanggal_surat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="index" class="col-sm-2 col-form-label">Indeks</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="index" value="<?=$data['indeks']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="perihal" class="col-sm-2 col-form-label">Perihal</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="perihal" value="<?=$data['perihal']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="isri" class="col-sm-2 col-form-label">Isi Ringkasan</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="isri" value="<?=$data['isi_ringkas']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="tain" class="col-sm-2 col-form-label">Tanggal Input</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="tain" value="<?=date('d/m/Y', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="jam" class="col-sm-2 col-form-label">Jam</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="jam" value="<?=date('H:i:s', strtotime($data['tanggal_input']))?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="Admin" class="col-sm-2 col-form-label">Admin</label>
								    <div class="col-sm-4">
								      <input type="text"  class="form-control" id="Admin" value="<?=$data['admin']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <div class="col-sm-6">
											<a href="" class="float-right btn btn-primary">Edit</a>
								    </div>
								  </div>
						  	<?php
						  	}
						  	else{
						  	?>
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
								      <input type="text" readonly class="form-control-plaintext" id="no" value="<?=$data['no_surat']?>">
								    </div>
								  </div>
								  <div class="form-group row">
								    <label for="index" class="col-sm-2 col-form-label">Indeks</label>
								    <div class="col-sm-10">
								      <input type="text" readonly class="form-control-plaintext" id="index" value="<?=$data['indeks']?>">
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