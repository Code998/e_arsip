<?php
	session_start();
	include_once 'connection.php';

	$jenis = $_POST['jenis_sk'];
	$dake = $_POST['namap'];
	$laci = $_POST['laci'];
	$guide = $_POST['guide'];
	$nik = $_POST['nikp'];

	$sql = "SELECT * FROM penduduk WHERE nik = '" . $nik . "' AND nama = '" . $dake . "'";

	$sql0 = "SELECT * FROM arsip_surat WHERE nik = '" . $nik . "' AND dari_kpd = '" . $dake . "' AND perihal = '" . $laci . " " . $guide . "'";

	$sql1 = "INSERT INTO arsip_surat VALUES ('" . $jenis . "', '', '" . $nik . "','" . $dake . "', NOW(), '" . $laci . " " . $guide . "', '" . $laci . "', '" . $guide . "')";


	if ($conn->query($sql)->num_rows == 1) {
		if ($conn->query($sql0)->num_rows == 0) {
			if ($conn->query($sql1) === TRUE) {
				echo "Data Sudah Dimasukkan";
			}
			else{
				echo "Gagal!";
			}
		}
		else{
			echo "Maaf anda sudah Terdaftar";
		}
	}
	else{
		echo "Tidak Terdaftar dalam Penduduk";
	}
?>