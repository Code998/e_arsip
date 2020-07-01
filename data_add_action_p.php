<?php
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$password = $_POST['password1'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];

	$sql0 = "SELECT * FROM pegawai WHERE nip = " . $nip;

	$sql1 = "INSERT INTO pegawai VALUES ('" . $nama . "', '" . $password . "', '" . $alamat . "', '" . $nip . "', '" . $jabatan . "')";

	if ($conn->query($sql0)->num_rows == 0) {
		if ($conn->query($sql1) === TRUE) {
			echo "Data Sudah Dimasukkan";
			header("Location:index.php");
		}
		else{
			echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'index.php';</script>";
		}
	}
	else{
		echo "<script> alert('Data Anda Sudah Terdaftar'); window.location = 'index.php';</script>";
	}
?>