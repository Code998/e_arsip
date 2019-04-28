<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';
	
	$a = $_GET['nip'];
	$sql = "DELETE FROM pegawai WHERE nip = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: data_pegawai.php");
	}
	else{
		echo "Gagal!";
	}
?>
