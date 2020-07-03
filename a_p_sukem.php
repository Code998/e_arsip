<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s10'];
	$namab = $_POST['nkem'];
	$jkel1 = $_POST['jkem0'];
	$asla = $_POST['alke1'];
	$umur = $_POST['ukem'];
	$hari = $_POST['hkem'];
	$tangg = $_POST['tsuke'];
	$temp = $_POST['tkem'];
	$sebab = $_POST['sbb'];
	$kelya = $_POST['kelya'];
	$alkem = $_POST['aske'];
	$tsl = $_POST['ttsk'];
	
	$sql = "INSERT INTO data_surat_kemat VALUES ( '', '" . $jenis . "', '" . $namab . "', '" . $jkel1 . "', '" . $umur . "', '" . $tangg . "', '" . $hari . "', '" . $sebab . "', '" . $temp . "', '" . $kelya . "', '" . $asla . "', '" . $alkem . "', '" . $tsl . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_kematian.php");
	}
	else{
		echo "Gagal";
		header("Location:data_kematian.php");
	}
?>