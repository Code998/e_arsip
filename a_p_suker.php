<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s4'];
	$nama1 = $_POST['nsk'];
	$tmpt1 = $_POST['tetl4'];
	$date1 = $_POST['d4'];
	$kewa1 = $_POST['kew4'];
	$jkel1 = $_POST['jke5'];
	$agam1 = $_POST['agama4'];
	$peke1 = $_POST['pkj3'];
	$stpe1 = $_POST['sp5'];
	$nike1 = $_POST['nike1'];
	$temp1 = $_POST['tempa5'];
	$jabat = $_POST['ttd5'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, jk, kewar, agama, st_pe, pekerjaan, nike, tempat, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $jkel1 . "', '" . $kewa1 . "', '" . $agam1 . "', '" . $stpe1 . "', '" . $peke1 . "', '" . $nike1 . "', '" . $temp1 . "', '" . $jabat . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_umum.php");
	}
	else{
		echo "Gagal";
		header("Location:data_umum.php");
	}
?>