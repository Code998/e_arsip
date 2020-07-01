<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s9'];
	$namab = $_POST['nbayi'];
	$jkel1 = $_POST['jsl'];
	$hari = $_POST['hla'];
	$date = date_create($_POST['tsk']);
	$date1 = date_format($date, 'd-m-Y');
	$jam = $_POST['psk'];
	$temp = $_POST['tmptla'];
	$anake = $_POST['ake'];
	$naay = $_POST['nayah'];
	$naib= $_POST['nibu'];
	$asla = $_POST['asla'];
	$tsl = $_POST['tsl'];
	
	$sql = "INSERT INTO data_surat_lahir VALUES ( '', '" . $jenis . "', '" . $namab . "', '" . $anake . "', '" . $jkel1 . "', '" . $hari . "', '" . $tangg . "', '" . $jam . "', '" . $temp . "', '" . $naib . "', '" . $naay . "', '" . $asla . "', '" . $tsl . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_kelahiran.php");
	}
	else{
		echo "Gagal";
		header("Location:data_kelahiran.php");
	}
?>