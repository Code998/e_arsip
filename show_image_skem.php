<?php  
  session_start();
  if ($_SESSION['user'] == "" && $_SESSION['nip'] == "") {
		header("Location: index.php");
	}
  include_once 'connection.php';
  include('docxtemplate.class.php');
  $id = $_GET['no'];
$sql1 = "SELECT * FROM data_surat_kemat WHERE no = '" . $id . "'";
	$result1 = $conn->query($sql1);
	$data1 = $result1->fetch_assoc();
if ($data1['jenis'] == "Kematian") {

			$docx = new DOCXTemplate('template/source/Surat_Kematian.docx');
			$docx->set('nomor',  '474 / ' . $data1['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data1['ket'])));
			$docx->set('nama', $data1['nama']);
			$docx->set('jk', $data1['jk']);
			$docx->set('alamat', $data1['alamat']);
			$docx->set('umur', $data1['umur']);
			$docx->set('hari', $data1['hari']);
			$docx->set('tanggal', $data1['tgl_men']);
			$docx->set('tempat', $data1['hari']);
			$docx->set('tempat', $data1['alamat']);
			$docx->set('sakit', $data1['sakit']);
			if ($data1['jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data1['jenis'] . "_" . $data1['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
?>