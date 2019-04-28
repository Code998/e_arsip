<?php
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	header('Content-Type: application/json');

	$sql1 = "SELECT * FROM arsip_surat WHERE guide = 'KTP'";
	$sql2 = "SELECT * FROM arsip_surat WHERE guide = 'KK'";
	$sql3 = "SELECT * FROM arsip_surat WHERE guide = 'SKCK'";
	$sql4 = "SELECT * FROM arsip_surat WHERE guide = 'Domisili'";

	$res1 = $conn->query($sql1)->num_rows;
	$res2 = $conn->query($sql2)->num_rows;
	$res3 = $conn->query($sql3)->num_rows;
	$res4 = $conn->query($sql4)->num_rows;

	$result = [
		['guide' => 'KK', 'jumlah' =>  $res1],
		['guide' => 'KTP', 'jumlah' =>  $res2],
		['guide' => 'SKCK', 'jumlah' =>  $res3],
		['guide' => 'Domisili', 'jumlah' =>  $res3]
	];

	$data = array();
	foreach ($result as $key) {
		$data[] = $key;
	}

	print json_encode($data);
?>