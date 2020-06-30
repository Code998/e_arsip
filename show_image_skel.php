<?php  
  session_start();
  if ($_SESSION['user'] == "" && $_SESSION['nip'] == "") {
		header("Location: index.php");
	}
  include_once 'connection.php';
  include('docxtemplate.class.php');
  $id = $_GET['no'];
$sql2 = "SELECT * FROM data_surat_lahir WHERE no = '" . $id . "'";
	$result2 = $conn->query($sql2);
	$data2 = $result2->fetch_assoc();

			$docx = new DOCXTemplate('template/source/Surat_Kelahiran.docx');
			$docx->set('nomor',  '474 / ' . $data2['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data2['ket'])));
			$docx->set('hari', $data2['hari']);
			$docx->set('tgl', $data2['tgl_lahir']);
			$docx->set('pukul', $data2['jam']);
			$docx->set('di]', $data2['tempat']);
			$docx->set('jk', $data2['jk']);
			$docx->set('nama', $data2['nm_bayi']);
			$docx->set('anak_ke', $data2['anak_ke']);
			$docx->set('nama_ibu', $data2['nm_ibu']);
			$docx->set('nama_ayah', $data2['nm_ayah']);
			$docx->set('alamat', $data2['alamat']);
			if ($data2['jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data2['jenis'] . "_" . $data2['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
?>