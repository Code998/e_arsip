<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';
	
	$a = $_GET['no'];
	$sql = "DELETE FROM data_surat_masuk WHERE no = " . $a;

	if ($conn->query($sql) === TRUE) {
		header("Location: data_masuk.php");
	}
	else {
		echo "<script> alert('Gagal Menghapus')";
	}
?>
