<?php
	$server = '127.0.0.1';
	$username = 'root';
	$password = '';
	$dbname = 'e_arsip';

	$conn = new mysqli($server, $username, $password, $dbname);

	// Check connection

	if ($conn->connect_error) {
		echo "Connection Failed!";
	}
?>