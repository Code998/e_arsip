<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$jenis = $_POST['jenis_s'];
	$data1 = $_POST['data1'];
	$nama1 = $_POST['nm1'];
	$tmpt1 = $_POST['tetl1'];
	$date1 = $_POST['d1'];
	$kewa1 = $_POST['kew1'];
	$jkel1 = $_POST['jke1'];
	$agam1 = $_POST['agama1'];
	$peke1 = $_POST['pkj'];
	$stpe1 = $_POST['sp1'];
	$temp1 = $_POST['tempa1'];
	$data2 = $_POST['data2'];
	$nama2 = $_POST['nm2'];
	$tmpt2 = $_POST['tetl2'];
	$date2 = $_POST['d2'];
	$jkel2 = $_POST['jke2'];
	$stpe2 = $_POST['sp2'];
	$nike1 = $_POST['nike'];
	$temp2 = $_POST['tempa2'];
	$benar = $_POST['ben1'];
	$keper = $_POST['keper'];
	$jabat = $_POST['ttd'];

	$sql = "INSERT INTO data_surat_umum(no, jenis, data1_t, nama, ttl, kewar, jk, agama, pekerjaan, st_pe, tempat, data2_t, nama_l2, ttl2, jk2, st_pe2, nike, tempat2, benar, untuk, ttd_jabat, ket) VALUES ( '', '" . $jenis . "', '" . $data1 . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $kewa1 . "', '" . $jkel1 . "', '" . $agam1 . "', '" . $peke1 . "', '" . $stpe1 . "', '" . $temp1 . "', '" . $data2 . "', '" . $nama2 . "', '" . $tmpt2 . ", " . $date2 . "', '" . $jkel2 . "', '" . $stpe2 . "', '" . $nike1 . "', '" . $temp2 . "', '" . $benar . "', '" . $keper . "', '" . $jabat . "',  '" . date('Y-m-d') . "')";

	if ($conn->query($sql) === TRUE) {
		echo "Data Sudah Dimasukkan";
		header("Location:data_umum.php");
	}
	else{
		echo "Gagal";
		header("Location:data_umum.php");
	}
?>