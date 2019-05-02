<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';

  	$noas = $_POST['noas'];
	$nosu = $_POST['nosu'];
	$dake = $_POST['asal'];
	$tsur = $_POST['t_sur'];
	$alamat = $_POST['alamat'];
	$indeks = $_POST['indeks'];
	$perihal = $_POST['perihal'];
	$isri = $_POST['isri'];

	$sql = "UPDATE arsip_surat SET dari_kpd = '" . $dake . "', tanggal_surat = '" . $tsur . "', alamat = '" . $alamat . "', indeks = '" . $indeks . "', perihal = '" . $perihal . "', isi_ringkas = '" . $isri . "', r_no_su = '" . $nosu . "' WHERE no_surat = ". $noas;

	if ($conn->query($sql) === TRUE) {
		header("Location: p_data_surat.php");
	}
	else{
			echo "<script> alert('Gagal Mengupdate'); window.location = 'p_data_surat.php';</script>";
		}
?>