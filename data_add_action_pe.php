<?php
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tela = $_POST['tela'];
	$tala = $_POST['tala'];
	$agama = $_POST['agama'];
	$kener = $_POST['kener'];
	$usi = $_POST['usi'];
	$jk = $_POST['jeka'];
	$peker = $_POST['peker'];
	$nokk = $_POST['no_kk'];
	$stat = $_POST['status'];

	$sql0 = "SELECT * FROM penduduk WHERE nik = '" . $nik . "' AND no_kk = " . $nokk;

	$sql1 = "INSERT INTO penduduk VALUES ('" . $nik . "', '" . $nokk . "', '" . $nama . "', '" . $tela . "', '" . $tala . "', '" . $usi . "', '" . $jk . "', '" . $stat . "', '" . $alamat . "', '" . $agama . "', '" . $peker . "', '" . $kener . "', NOW())";

	// echo $sql1;
	if ($conn->query($sql0)->num_rows == 0) {
		if ($conn->query($sql1) === TRUE) {
			echo "Data Sudah Dimasukkan";
			header("Location:data_penduduk.php");
		}
		else{
			echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'data_penduduk.php';</script>";
		}
	}
	else{
		echo "<script> alert('Data Anda Sudah Terdaftar'); window.location = 'data_penduduk.php';</script>";
	}
?>