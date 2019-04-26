<?php  
	include_once 'connection.php';
	header('Content-Type: application/json');

	$sql1 = "SELECT * FROM arsip_surat WHERE guide = 'Undangan Dinas'";
	$sql2 = "SELECT * FROM arsip_surat WHERE guide = 'Tugas Dinas'";
	$sql3 = "SELECT * FROM arsip_surat WHERE guide = 'Pengantar'";

	$res1 = $conn->query($sql1)->num_rows;
	$res2 = $conn->query($sql2)->num_rows;
	$res3 = $conn->query($sql3)->num_rows;

	$result = [
		['guide' => 'Undangan Dinas', 'jumlah' =>  $res1],
		['guide' => 'Tugas Dinas', 'jumlah' =>  $res2],
		['guide' => 'Pengantar', 'jumlah' =>  $res3]
	];

	$data = array();
	foreach ($result as $key) {
		$data[] = $key;
	}

	print json_encode($data);
?>