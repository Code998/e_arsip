<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s6'];
	$nama1 = $_POST['nsktm'];
	$tmpt1 = $_POST['tetl6'];
	$date1 = $_POST['d6'];
	$kewa1 = $_POST['kew6'];
	$jkel1 = $_POST['jke7'];
	$agam1 = $_POST['agama6'];
	$stpe1 = $_POST['sp7'];
	$peke1 = $_POST['pkj5'];
	$nike1 = $_POST['nike3'];
	$keper = $_POST['keperl1'];
	$temp1 = $_POST['tsktm'];
	$jabat = $_POST['ttd7'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, jk, kewar, agama, st_pe, pekerjaan, nike, tempat, untuk, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $jkel1 . "', '" . $kewa1 . "', '" . $agam1 . "', '" . $stpe1 . "', '" . $peke1 . "', '" . $nike1 . "', '" . $temp1 . "', '" . $keper . "', '" . $jabat . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:pilih_surat.php");
	}
	else{
		echo "Gagal";
		header("Location:pilih_surat.php");
	}
?>