<?php  
	session_start();
	include_once 'connection.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '" . $user . "' AND password = '" . $pass . "'";

	if ($conn->query($sql)->num_rows == 1) {
		$_SESSION['user'] = $user;
		header("Location:p_s_keluar.php");
	}
	else{
		echo "Username atau Pass salah!!!!";
	}
?>