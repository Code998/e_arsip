<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '" . $user . "' AND password = '" . $pass . "'";

	$sql0 = "SELECT * FROM pegawai WHERE nip = '" . $user . "' AND password = '" . $pass . "'";

	if ($conn->query($sql)->num_rows == 1) {
		$_SESSION['user'] = $user;
		header("Location:data_chart.php");
	}
	elseif ($conn->query($sql0)->num_rows == 1) {
		$_SESSION['nip'] = $user;
		header("Location:data_char_pe.php");
	}
	else{
			echo "<script> alert('Username / Pass Salah'); </script>";
	}
?>