<?php
	include_once 'connection.php';

	$a = $_GET['id'];

	$sql = "DELETE FROM arsip_surat WHERE no_surat = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: p_data_surat.php.php");
	}
	else{
		echo "Gagal!";
	}
?>