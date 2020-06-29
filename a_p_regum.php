<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$target = "assets/photo/".basename($_FILES['file']['name']);
	
	$jenis = $_POST['jenis_s3'];
	$nama1 = $_POST['nsk'];
	$tmpt1 = $_POST['tetl3'];
	$date1 = $_POST['d3'];
	$kewa1 = $_POST['kew3'];
	$jkel1 = $_POST['jke4'];
	$agam1 = $_POST['agama3'];
	$peke1 = $_POST['pkj2'];
	$stpe1 = $_POST['sp4'];
	$temp1 = $_POST['tempa4'];
	$jabat = $_POST['ttd4'];
	$image = $_FILES['file']['name'];
	
	$sql = "INSERT INTO data_surat_umum(no, jenis, nama, ttl, kewar, jk, agama, pekerjaan, st_pe, tempat,  ttd_jabat, file, ket) VALUES ( '', '" . $jenis . "', '" . $nama1 . "', '" . $tmpt1 . ", " . $date1 . "', '" . $kewa1 . "', '" . $jkel1 . "', '" . $agam1 . "', '" . $peke1 . "', '" . $stpe1 . "', '" . $temp1 . "', '" . $jabat . "', '" . $image . "','" . date('Y-m-d') . "')";
	
	if ($conn->query($sql) === TRUE) {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("Location:data_umum.php");
				}
			}
			else{
				echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'data_umum.php';</script>";
			}
?>