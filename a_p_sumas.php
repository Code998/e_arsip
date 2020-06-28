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
	$perihal = $_POST['perihal'];
	$isri = $_POST['isri'];
	$image = $_FILES['file']['name'];

	$sql0 = "SELECT * FROM data_surat_masuk WHERE no = '" . $nosu . "'";

	$sql1 = "INSERT INTO data_surat_masuk VALUES ('', '" . $dake . "' ,'" . $nosu . "', '" . $tsur . "', '". date("Y/m/d") ."', '" . $perihal . "' , '" . $isri . "', '" . $alamat . "', '" . $image . "')";

	$sql2 = "SELECT * FROM data_surat_masuk";
	if ($conn->query($sql2)->num_rows == 0) {
		$sql3 = "ALTER TABLE data_surat_masuk AUTO_INCREMENT = 1";
		$conn->query($sql3);
		if ($conn->query($sql0)->num_rows == 0) {
			if ($conn->query($sql1) === TRUE) {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("Location:data_masuk.php");
				}
			}
			else{
				echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'data_masuk.php';</script>";
			}
		}
		else{
			echo "<script> alert('Data Anda Sudah Terdaftar'); window.location = 'data_masuk.php';</script>";
		}
	}
	else{
		if ($conn->query($sql0)->num_rows == 0) {
			if ($conn->query($sql1) === TRUE) {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("Location:data_masuk.php");
				}
			}
			else{
				echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'data_masuk.php';</script>";
			}
		}
		else{
			echo "<script> alert('Data Anda Sudah Terdaftar'); window.location = 'data_masuk.php';</script>";
		}
	}
?>