<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

	$nipas = $_POST['nipas'];
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];

	$sql = "UPDATE pegawai SET nip = '" . $nip . "', nama = '" . $nama . "', alamat = '" . $alamat . "', jabatan = '" . $jabatan . "' WHERE nip = ". $nipas;

	if ($conn->query($sql) === TRUE) {
		header("Location: data_pegawai.php");
	}
	else{
		echo "Gagal!";
	}