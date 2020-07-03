<?php
	include_once 'connection.php';
	header('Content-Type: application/json');

	$sql = "SELECT * FROM data_surat_umum";
	$sql0 = "SELECT * FROM data_surat_masuk";
	$sql1 = "SELECT * FROM data_surat_kemat";
	$sql2 = "SELECT * FROM data_surat_lahir";
	$sql3 = "SELECT * FROM data_surat_pite";

	$res = $conn->query($sql)->num_rows;
	$res0 = $conn->query($sql0)->num_rows;
	$res1 = $conn->query($sql1)->num_rows;
	$res2 = $conn->query($sql2)->num_rows;
	$res3 = $conn->query($sql3)->num_rows;

	$result = [
		['jenis' => 'Surat Umum', 'jumlah' =>  $res], 
		['jenis' => 'Surat Masuk', 'jumlah' =>  $res0],
		['jenis' => 'Surat Kematian', 'jumlah' =>  $res1],
		['jenis' => 'Surat Kelahiran', 'jumlah' =>  $res2],
		['jenis' => 'Surat Pindah', 'jumlah' =>  $res3]
	];

	$data = array();
	foreach ($result as $key) {
		$data[] = $key;
	}

	print json_encode($data);
?>