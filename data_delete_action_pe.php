<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';
	
	$a = $_GET['nik'];
	$sql = "DELETE FROM penduduk WHERE nik = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: data_penduduk.php");
	}
	else{
		echo "Gagal!";
	}
?>
