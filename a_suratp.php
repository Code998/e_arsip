<?php
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$jenis = $_POST['jenis_sp'];
	$dake = $_POST['namaket'];
	$laci = $_POST['lacip'];
	$guide = $_POST['jenisP'];
	$nik = $_POST['nik'];
	$np = $_POST['namaPeg'];

	$sql = "SELECT * FROM penduduk WHERE nik = '" . $nik . "' AND nama = '" . $dake . "'";

	$data = $conn->query($sql)->fetch_assoc();

	$sql0 = "SELECT * FROM arsip_surat WHERE nik = '" . $nik . "' AND dari_kpd = '" . $dake . "' AND perihal = '" . $laci . " " . $guide . "'";

	$sql1 = "INSERT INTO arsip_surat(jenis, no_surat, nik, dari_kpd, tanggal_input, alamat, perihal, laci, guide, nama_pe, admin) VALUES ('" . $jenis . "', '', '" . $nik . "','" . $dake . "', NOW(), '" . $data['alamat'] . "' ,'" . $laci . " " . $guide . "', '" . $laci . "', '" . $guide . "', '" . $np . "', '" . $_SESSION['user'] . "')";

	$sql2 = "SELECT * FROM arsip_surat";

	if ($conn->query($sql2)->num_rows == 0) {
		$sql3 = "ALTER TABLE arsip_surat AUTO_INCREMENT = 1";
		$conn->query($sql3);
		if ($conn->query($sql)->num_rows == 1) {
			if ($conn->query($sql0)->num_rows == 0) {
				if ($conn->query($sql1) === TRUE) {
					header("Location:p_data_surat.php");
				}
				else{
					echo "<script> alert('Data Gagal Dimasukkan'); window.location = 'p_data_surat.php';</script>";
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
		if ($conn->query($sql)->num_rows == 1) {
			if ($conn->query($sql0)->num_rows == 0) {
				if ($conn->query($sql1) === TRUE) {
					header("Location:p_data_surat.php");
				}
				else{
					echo "<script> alert('Data Gagal Dimasukkan'); window.location = 'p_data_surat.php';</script>";
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