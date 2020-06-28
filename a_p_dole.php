<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$jenis = $_POST['jenis_s1'];
	$nama = $_POST['ndl'];
	$umur = $_POST['um'];
	$jabat = $_POST['jab'];
	$alam = $_POST['alam'];
	$jelam = $_POST['jlem'];
	$nalam = $_POST['nlem'];
	$bahuk = $_POST['bahu'];
	$allem = $_POST['alemb'];
	$ttd = $_POST['ttd2'];

	$sql = "INSERT INTO data_surat_umum(no, jenis, nama_pe, umur_pe, jabatan_pe, alamat_le, jenis_le, nama, ba_huk, tempat, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama . "', '" . $umur . "', '" . $jabat . "', '" . $alam . "', '" . $jelam . "', '" . $nalam . "', '" . $bahuk . "', '" . $allem . "', '" . $ttd . "', '" . date('Y-m-d') . "')";

	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_masuk.php");
	}
	else{
		echo "Gagal";
		header("Location:data_masuk.php");
	}
?>