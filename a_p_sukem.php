<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s10'];
	$namab = $_POST['nkem'];
	$jkel1 = $_POST['jkem0'];
	$umur = $_POST['ukem'];
	$tangg = $_POST['tsuke'];
	$hari = $_POST['hkem'];
	$sebab = $_POST['sbb'];
	$asla = $_POST['alke1'];
	$temp = $_POST['tkem'];
	$kelya = $_POST['kelya'];
	$alkem = $_POST['aske'];
	$tsl = $_POST['ttsk'];
	
	$sql = "INSERT INTO data_surat_kemat VALUES ( '', '" . $jenis . "', '" . $namab . "', '" . $jkel1 . "', '" . $umur . "', '" . $tangg . "', '" . $hari . "', '" . $sebab . "', '" . $temp . "', '" . $alkem . "', '" . $asla . "', '" . $tsl . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:pilih_surat.php");
	}
	else{
		echo "Gagal";
		header("Location:pilih_surat.php");
	}
?>