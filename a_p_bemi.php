<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s3'];
	$nama1 = $_POST['nsk'];
	$tmpt1 = $_POST['tetl3'];
	$date1 = $_POST['d3'];
	$kewa1 = $_POST['kew3'];
	$jkel1 = $_POST['jke4'];
	$agam1 = $_POST['agama3'];
	$peke1 = $_POST['pkj2'];
	$stpe1 = $_POST['sp4'];
	$temp1 = $_POST['tempa4'];
	$keper = $_POST['keperl'];
	$jabat = $_POST['ttd4'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, kewar, jk, agama, pekerjaan, st_pe, tempat, untuk, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $kewa1 . "', '" . $jkel1 . "', '" . $agam1 . "', '" . $peke1 . "', '" . $stpe1 . "', '" . $temp1 . "', '" . $keper . "', '" . $jabat . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:pilih_surat.php");
	}
	else{
		echo "Gagal";
		header("Location:pilih_surat.php");
	}
?>