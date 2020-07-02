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
	$array_bln	= array("01"=>"I", "02"=>"II", "03"=>"III", "04"=>"IV", "05"=>"V", "06"=>"VI", "07"=>"VII", "08"=>"VIII", "09"=>"IX", "10"=>"X", "11"=>"XI", "12"=>"XII");
	$bln		= $array_bln[date('m', strtotime($data1['ket']))];

			$docx = new DOCXTemplate('template/source/Surat_Kematian.docx');
			$docx->set('nomor',  '474 / ' . $data1['no'] . ' / 35.07.27.20.007 / ' . $bln . "/ " . date('Y', strtotime($data1['ket'])));
			$docx->set('nama', $data1['nama']);
			$docx->set('jk', $data1['jk']);
			$docx->set('alamat', $data1['alamat']);
			$docx->set('men_di', $data1['men_di']);
			$docx->set('umur', $data1['umur']);
			$docx->set('hari', $data1['hari']);
			$docx->set('tanggal', date('d/m/Y', strtotime($data1['tgl_men'])));
			$docx->set('tempat', $data1['hari']);
			$docx->set('tempat', $data1['alamat']);
			$docx->set('sakit', $data1['sakit']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data1['jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
				$docx->set('n', "Purwito");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
				$docx->set('n', "Nur Hasim");
			}
			$docx->set('ttd_jabat', $data1['jabat']);
			$nama = "surat_". $data1['jenis'] . "_" . $data1['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
?>