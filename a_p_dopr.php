<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	$date = date_create($_POST['d3']);
	
	$jenis = $_POST['jenis_s2'];
	$nama1 = $_POST['ndp'];
	$tmpt1 = $_POST['tetl3'];
	$date1 = date_format($date, 'd-m-Y');
	$kewa1 = $_POST['kew2'];
	$jkel1 = $_POST['jke3'];
	$agam1 = $_POST['agama2'];
	$nik = $_POST['ndpr'];
	$peke1 = $_POST['pkj1'];
	$stpe1 = $_POST['sp3'];
	$temp1 = $_POST['tempa3'];
	$jabat = $_POST['ttd3'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl,kewar, jk, agama, nike, pekerjaan, st_pe, tempat, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $kewa1 . "', '" . $jkel1 . "', '" . $agam1 . "', '" . $nik . "', '" . $peke1 . "', '" . $stpe1 . "', '" . $temp1 . "', '" . $jabat . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_umum.php");
	}
	else{
		echo "Gagal";
		header("Location:data_umum.php");
	}
?>