<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$jenis = $_POST['jenis_s8'];
	$nama1 = $_POST['nsj'];
	$tmpt1 = $_POST['tetl8'];
	$date1 = $_POST['d8'];
	$kewa1 = $_POST['kew8'];
	$jkel1 = $_POST['jke9'];
	$agam1 = $_POST['agama8'];
	$peker = $_POST['pkj6'];
	$stpe1 = $_POST['sp9'];
	$temp1 = $_POST['tempa8'];
	$altuj = $_POST['altu0'];
	$bermu = $_POST['bemu0'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, kewar, jk, agama, pekerjaan, st_pe, tempat, altuj, bermu, ttl, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $kewa1 . "', '" . $jkel1 . "', '" . $agam1 . "', '" . $peker . "', '" . $stpe1 . "', '" . $temp1 . "', '" . $altuj . "', '" . $bermu . "', '" . $tmpt1 . ", " . $date1 . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:pilih_surat.php");
	}
	else{
		echo "Gagal";
		header("Location:pilih_surat.php");
	}
?>