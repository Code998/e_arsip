<?php
	session_start();
	if ($_SESSION['user'] == "" && $_SESSION['nip'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	header('Content-Type: application/json');

	$sql = "SELECT * FROM arsip_surat WHERE jenis = 'Surat Masuk'";
	$sql0 = "SELECT * FROM arsip_surat WHERE jenis = 'Surat Keluar'";

	$res = $conn->query($sql)->num_rows;
	$res0 = $conn->query($sql0)->num_rows;

	$result = [
		['jenis' => 'Surat Masuk', 'jumlah' =>  $res], 
		['jenis' => 'Surat Keluar', 'jumlah' =>  $res0]
	];

	$data = array();
	foreach ($result as $key) {
		$data[] = $key;
	}

	print json_encode($data);
?>