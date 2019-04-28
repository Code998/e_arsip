<?php  
  session_start();
  if ($_SESSION['user'] == "") {
    header("Location: index.php");
  }
  include_once 'connection.php';
	include('docxtemplate.class.php');

	$id = $_GET['id'];

	$sql0 = "SELECT * FROM arsip_surat WHERE no_surat = '" . $id . "'";
	$result = $conn->query($sql0);
	$data = $result->fetch_assoc();

	if ($data['jenis'] == "Surat Masuk") {
		$info = pathinfo($data['file']);
		if ($info["extension"] == "jpg") {
			echo '<img src="assets/photo/'. rawurldecode($data['file']) .'">';
		}
		elseif ($info["extension"] == "pdf") {
			$filename = rawurldecode($data['file']);
			$file = "assets/photo/" . $filename;
			header('Content-type: application/pdf');
			header('Content-Disposition: inline; filename="' . $filename . '"');
			header('Content-Transfer-Encoding: binary');
			header('Accept-Ranges: bytes');
			@readfile($file);
		}
	}
	elseif ($data['jenis'] == "Surat Keluar") {
		if ($data['laci'] == "Surat Pengantar") {

			$sql1 = "SELECT * FROM penduduk WHERE nik = '" . $data['nik'] . "'";
			$res = $conn->query($sql1);
			$dat = $res->fetch_assoc();

			$docx = new DOCXTemplate('template/template_pengantar.docx');
			$docx->set('nomor',  $data['no_surat']);
			$docx->set('nama', $data['dari_kpd']);
			$docx->set('nik', $dat['nik']);
			$docx->set('ttl', $dat['tempat_lahir'] . "/ " . $dat['tanggal_lahir']);
			$docx->set('jk', $dat['jenis_kelamin']);
			$docx->set('status', $dat['status']);
			$docx->set('bangsa', $dat['kewarnegaraan']);
			$docx->set('agama', $dat['agama']);
			$docx->set('peker', $dat['pekerjaan']);
			$docx->set('alamat', $dat['alamat']);
			$docx->set('guide', $data['guide']);
			$docx->set('tgl', date('d/m/Y', strtotime($data['tanggal_input'])));

			$nama = "surat_". $data['perihal'] . "_" . $data['nik']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
	}

?>