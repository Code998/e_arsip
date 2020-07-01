<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$date = date_create($_POST['datl']);
	
	$jenis = $_POST['jenis_s11'];
	$nama1 = $_POST['nlap'];
	$tmpt1 = $_POST['tlk'];
	$date1 = date_format($date 'd-m-Y');
	$kewa1 = $_POST['klk'];
	$agam1 = $_POST['alk'];
	$jk = $_POST['jklk'];
	$stpe1 = $_POST['splk'];
	$peke1 = $_POST['pkjlk'];
	$nike1 = $_POST['nikelk'];
	$temp = $_POST['ttin'];
	$bhila = $_POST['bayg1'];
	$thila = $_POST['tlk1'];
	$hari = $_POST['hlk'];
	$waktu = $_POST['plk'];
	$keper = $_POST['keplk'];
	$ttd = $_POST['ttdlk'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, jk, kewar, agama, st_pe, pekerjaan, nike, tempat, b_hil, temp_hil, hari, waktu, untuk, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "',  '" . $jk . "', '" . $kewa1 . "', '" . $agam1 . "', '" . $stpe1 . "', '" . $peke1 . "', '" . $nike1 . "', '" . $temp . "', '" . $bhila . "', '" . $thila . "', '" . $hari . "', '" . $waktu . "', '" . $keper . "', '" . $ttd . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_umum.php");
	}
	else{
		echo "Gagal";
		header("Location:data_umum.php");
	}
?>