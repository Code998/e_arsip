<?php
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$target = "assets/photo/".basename($_FILES['file']['name']);

	$nosu = $_POST['nosu'];
	$jenis = $_POST['jenis_sp'];
	$dake = $_POST['asal'];
	$tsur = $_POST['t_sur'];
	$alamat = $_POST['alamat'];
	$indeks = $_POST['indeks'];
	$perihal = $_POST['perihal'];
	$isri = $_POST['isri'];
	$laci = $_POST['laci'];
	$guide = $_POST['guide'];
	$image = $_FILES['file']['name'];

	$sql0 = "SELECT * FROM arsip_surat WHERE no_surat = '" . $nosu . "'";

	$sql1 = "INSERT INTO arsip_surat (jenis, no_surat, r_no_su, dari_kpd, indeks, tanggal_surat, tanggal_input, alamat, perihal, isi_ringkas, laci, guide, file, admin) VALUES ('" . $jenis . "', '' ,'" . $nosu . "', '" . $dake . "', '" . $indeks . "', '" . $tsur . "' , NOW(), '" . $alamat . "', '" . $perihal . "', '" . $isri . "', '" . $laci . "', '" . $guide . "', '" . $image . "', '" . $_SESSION['user'] . "')";

	$sql2 = "SELECT * FROM arsip_surat";

	if ($conn->query($sql2)->num_rows == 0) {
		$sql3 = "ALTER TABLE arsip_surat AUTO_INCREMENT = 1";
		$conn->query($sql3);
		if ($conn->query($sql0)->num_rows == 0) {
			if ($conn->query($sql1) === TRUE) {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("Location:p_data_surat.php");
				}
			}
			else{
				echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'p_data_surat.php';</script>";
			}
		}
		else{
			echo "<script> alert('Data Anda Sudah Terdaftar'); window.location = 'p_data_surat.php';</script>";
		}
	}
	else{
		if ($conn->query($sql0)->num_rows == 0) {
			if ($conn->query($sql1) === TRUE) {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("Location:p_data_surat.php");
				}
			}
			else{
				echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'p_data_surat.php';</script>";
			}
		}
		else{
			echo "<script> alert('Data Anda Sudah Terdaftar'); window.location = 'p_data_surat.php';</script>";
		}
	}
?>