<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql = "SELECT * FROM admin WHERE username = '" . $user . "' AND password = '" . $pass . "'";

	if ($conn->query($sql)->num_rows == 1) {
		$_SESSION['user'] = $user;
		header("Location:data_chart.php");
	}
	else{
			echo "<script> alert('Username / Pass Salah'); </script>";
		}
?>