<?php
	session_start();
	include_once 'connection.php';

	$nosu = $_POST['nosu'];
	$dake = $_POST['asal'];
	$tsur = $_POST['t_sur'];
	$alamat = $_POST['alamat'];
	$indeks = $_POST['indeks'];
	$perihal = $_POST['perihal'];
	$isri = $_POST['isri'];

	$sql = "UPDATE arsip_surat SET dari_kpd = '" . $dake . "', tanggal_surat = '" . $tsur . "', alamat = '" . $alamat . "', indeks = '" . $indeks . "', perihal = '" . $perihal . "', isi_ringkas = '" . $isri . "' WHERE no_surat = ". $nosu;

	if ($conn->query($sql) === TRUE) {
		header("Location: p_data_surat.php");
	}
	else{
		echo "Gagal!";
	}