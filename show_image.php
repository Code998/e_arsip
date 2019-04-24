<?php  
	include_once 'connection.php';
	session_start();

	$id = $_GET['id'];

	$sql0 = "SELECT * FROM arsip_surat WHERE no_surat = '" . $id . "'";
	$result = $conn->query($sql0);
	$data = $result->fetch_assoc();

	$info = pathinfo($data['file']);
	if ($info["extension"] == "jpg") {
		echo '<img src="assets/photo/'. rawurldecode($data['file']) .'">';
	}
	elseif ($info["extension"] == "pdf") {
		$filename = rawurldecode($data['file']);
		$file = "assets/photo/" . $filename;
		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Content-Transfer-Encoding: binary');
		header('Accept-Ranges: bytes');
		@readfile($file);
	}
?>