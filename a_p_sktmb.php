<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s7'];
	$nama1 = $_POST['nsktmb'];
	$tmpt1 = $_POST['tetl7'];
	$date1 = $_POST['d7'];
	$jkel1 = $_POST['jke8'];
	$kewa1 = $_POST['kew7'];
	$agam1 = $_POST['agama7'];
	$stpe1 = $_POST['sp8'];
	$peker = $_POST['psktmb'];
	$nike1 = $_POST['nike4'];
	$temp1 = $_POST['tempa7'];
	$namaa = $_POST['namaa0'];
	$tmpt2 = $_POST['tetl8'];
	$date2 = $_POST['d8'];
	$pekea = $_POST['pean0'];
	$keper = $_POST['keperl2'];
	$jabat = $_POST['ttd8'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, jk, kewar, agama, st_pe, pekerjaan, nike, tempat, na_anak, ttl_anak, peke_anak, untuk, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $jkel1 . "', '" . $kewa1 . "', '" . $agam1 . "', '" . $stpe1 . "', '" . $peker . "', '" . $nike1 . "', '" . $temp1 . "', '" . $namaa . "', '" . $tmpt2 . ", " . $date2 . "', '" . $pekea . "', '" . $keper . "', '" . $jabat . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:pilih_surat.php");
	}
	else{
		echo "Gagal";
		header("Location:pilih_surat.php");
	}
?>