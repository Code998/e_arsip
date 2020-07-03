<?php  
	session_start();
	if ($_SESSION['user'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';
	
	$date = date_create($_POST['d3']);
	$target = "assets/photo/".basename($_FILES['file']['name']);
	
	$noreg = $_POST['noreg'];
	$npt = $_POST['npt'];
	$tetpt = $_POST['tetpt'];
	$date1 = date_format($date, 'd-m-Y');
	$nkpt = $_POST['nkpt'];
	$jpt = $_POST['jpt'];
	$apt = $_POST['apt'];
	$pkj2 = $_POST['pkj2'];
	$spt = $_POST['spt'];
	$al_sek = $_POST['al_sek'];
	$al_tuj = $_POST['al_tuj'];
	
	$image = $_FILES['file']['name'];
	
	$sql = "INSERT INTO data_surat_pite VALUES ( '', '" . $noreg . "', '" . date("d-m-Y") . "', '" . $npt . "', '" . $tetpt . ", " . $date1 . "', '" . $nkpt . "', '" . $jpt . "', '" . $spt . "', '" . $apt . "', '" . $pkj2 . "', '" . $al_sek . "', '" . $al_tuj . "', '" . $image . "')";
	
	if ($conn->query($sql) === TRUE) {
				if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
					header("Location:data_pindah_tempat.php");
				}
			}
			else{
				echo "<script> alert('Maaf Anda Sudah Mendaftar'); window.location = 'data_pindah_tempat.php';</script>";
			}
?>