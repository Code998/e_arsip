<?php  
  session_start();
  include_once 'connection.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '" . $user . "' AND password = '" . $pass . "'";

	$sql0 = "SELECT * FROM pegawai WHERE nip = '" . $user . "' AND password = '" . $pass . "'";

	if ($conn->query($sql)->num_rows == 1) {
		$_SESSION['user'] = $user;
		header("Location:pilih_surat.php");
	}
	elseif ($conn->query($sql0)->num_rows == 1) {
		$_SESSION['nip'] = $user;
		header("Location:index.php");
	}
	else{
		echo "<script> alert('Username / Pass Salah'); </script>";
		header("Location:index.php");
	}
?>