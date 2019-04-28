<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

	$a = $_GET['id'];

	$sql1 = "SELECT * FROM arsip_surat WHERE no_surat = " . $a;
  	$result = $conn->query($sql1);
	$data = $result->fetch_assoc();
	if ($data['jenis'] == "Surat Masuk") {
		unlink("assets/photo/".$data['file']);
		$sql = "DELETE FROM arsip_surat WHERE no_surat = " . $a;

		if ($conn->query($sql) === TRUE) {
			header("Location: p_data_surat.php");
		}
		else{
			echo "Gagal!";
		}
	}
	else{
		$sql = "DELETE FROM arsip_surat WHERE no_surat = " . $a;

		if ($conn->query($sql) === TRUE) {
			header("Location: p_data_surat.php.php");
		}
		else{
			echo "Gagal!";
		}

	}
?>