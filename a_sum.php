<?php
	session_start();
	include_once 'connection.php';

	$target = "assets/photo/".basename($_FILES['file']['name']);

	$jenis = $_POST['jenis_sp'];
	$dake = $_POST['asal'];
	$laci = $_POST['laci'];
	$guide = $_POST['guide'];
	$indeks = $_POST['indeks'];
	$isri = $_POST['isri'];
	$image = $_FILES['file']['name'];

	$sql0 = "SELECT * FROM arsip_surat WHERE dari_kpd = '" . $dake . "' AND laci = '" . $laci . "' AND guide = '" . $guide . "' AND perihal = '" . $indeks . ", " . $isri . "'";

	$sql1 = "INSERT INTO arsip_surat (jenis, no_surat, dari_kpd, tanggal_surat, perihal, laci, guide, file) VALUES ('" . $jenis . "', '', '" . $dake . "', NOW(), '" . $indeks . ", " . $isri . "', '" . $laci . "', '" . $guide . "', '" . $image . "')";

	if ($conn->query($sql0)->num_rows == 0) {
			if ($conn->query($sql1) === TRUE) {
				echo "Data Sudah Dimasukkan";
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("refresh:2;url=p_data_surat.php");
				}
			}
			else{
				echo "Gagal!";
			}
		}
		else{
			echo "Maaf anda sudah Terdaftar";
		}
?>