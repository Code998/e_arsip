<?php  
  session_start();
  if ($_SESSION['user'] == "" && $_SESSION['nip'] == "") {
		header("Location: index.php");
	}
  include_once 'connection.php';
  include('docxtemplate.class.php');
  	$id = $_GET['no'];
	$sql0 = "SELECT * FROM data_surat_pite WHERE no = '" . $id . "'";
	$result = $conn->query($sql0);
	$data = $result->fetch_assoc();
	$info = pathinfo($data['foto']);
		if ($info["extension"] == "jpg" || $info["extension"] == "png") {
			echo '<img src="assets/photo/'. rawurldecode($data['foto']) .'">';
		}
		elseif ($info["extension"] == "pdf") {
			$filename = rawurldecode($data['foto']);
			$file = "assets/photo/" . $filename;
			header('Content-type: application/pdf');
			header('Content-Disposition: inline; filename="' . $filename . '"');
			header('Content-Transfer-Encoding: binary');
			header('Accept-Ranges: bytes');
			@readfile($file);
		}
		elseif ($info["extension"] == "docx" || $info["extension"] == "doc") {
			$filename = rawurldecode($data['foto']);
			$file = "assets/photo/" . $filename;
			header('Content-type: application/msword');
			header('Content-Disposition: inline; filename="' . $filename . '"');
			header('Content-Transfer-Encoding: binary');
			header('Accept-Ranges: bytes');
			@readfile($file);
		}
		?>