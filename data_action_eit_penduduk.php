<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

	$nikas = $_POST['nikas'];
	$anik = $_POST['anik'];
	$no_kk = $_POST['no_kk'];
	$nama = $_POST['nama'];
	$tempat_lahir = $_POST['tempat_lahir'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$usia = $_POST['usia'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$status = $_POST['status'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$kewarnegaraan = $_POST['kewarnegaraan'];

	$sql = "UPDATE penduduk SET nik = '" . $anik . "', no_kk = '" . $no_kk . "', nama = '" . $nama . "', tempat_lahir = '" . $tempat_lahir . "', tanggal_lahir = '" . $tanggal_lahir . "', usia = '" . $usia . "', jenis_kelamin = '" . $jenis_kelamin . "', status = '" . $status . "', alamat = '" . $alamat . "', pekerjaan = '" . $pekerjaan . "', kewarnegaraan = '" . $kewarnegaraan . "' WHERE nik = ". $nikas;

	if ($conn->query($sql) === TRUE) {
		header("Location: data_penduduk.php");
	}
	else{
		echo "<script> alert('Data Gagal Dimasukkan'); </script>";
	}