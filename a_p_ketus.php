<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$date = date_create($_POST['d5']);

	$jenis = $_POST['jenis_s5'];
	$nama1 = $_POST['nku'];
	$tmpt1 = $_POST['tetl5'];
	$date1 = date_format($date, 'd-m-Y');
	$jkel1 = $_POST['jke6'];
	$kewa1 = $_POST['kew5'];
	$agam1 = $_POST['agama5'];
	$stpe1 = $_POST['sp6'];
	$peke1 = $_POST['pkj4'];
	$nike1 = $_POST['nike2'];
	$rt = $_POST['rt1'];
	$rw = $_POST['rw1'];
	$dusun = $_POST['dusun1'];
	$desa = $_POST['desa1'];
	$ttd = $_POST['ttd5'];
	$jenus = $_POST['jeus1'];
	$tahun = $_POST['tabe1'];
	$alam = $_POST['alus1'];
	$dapem = $_POST['dape1'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, jk, kewar, agama, st_pe, pekerjaan, nike, rt, rw, dusun, desa, ttd_jabat, jenus, taber, alus, dapem, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $jkel1 . "', '" . $kewa1 . "', '" . $agam1 . "', '" . $stpe1 . "', '" . $peke1 . "', '" . $nike1 . "', '" . $rt . "', '" . $rw . "', '" . $dusun . "', '" . $desa . "', '" . $ttd . "', '" . $jenus . "', '" . $tahun . "', '" . $alam . "', '" . $dapem . "', '" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_umum.php");
	}
	else{
		echo "Gagal";
		header("Location:data_umum.php");
	}
?>