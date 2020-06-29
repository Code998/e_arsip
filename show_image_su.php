<?php  
  session_start();
  if ($_SESSION['user'] == "" && $_SESSION['nip'] == "") {
		header("Location: index.php");
	}
  include_once 'connection.php';
  include('docxtemplate.class.php');
  	$id = $_GET['no'];
	$sql0 = "SELECT * FROM data_surat_umum WHERE no = '" . $id . "'";
	$result = $conn->query($sql0);
	$data = $result->fetch_assoc();
	$info = pathinfo($data['file']);

	if ($data['jenis'] == "SKTM") {

			$docx = new DOCXTemplate('template/source/SKTM.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl'] . "/ " . date('d/m/Y', strtotime($data['ttl'])));
			$docx->set('kewar', $data['kewar']);
			$docx->set('peker', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('alamat', $data['tempat']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('tgl', date('d/m/Y', strtotime($data['ket'])));
			$docx->set('nope', $data['nama_pe']);
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "SKTM Beasiswa") {

			$docx = new DOCXTemplate('template/source/SKTM_BEASISWA.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl'] . "/ " . date('d/m/Y', strtotime($data['ttl'])));
			$docx->set('kewar', $data['kewar']);
			$docx->set('peker', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('alamat', $data['tempat']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('nama_anak', $data['tempat']);
			$docx->set('ttl_anak', $data['tempat']);
			$docx->set('agama', $data['tempat']);
			$docx->set('pker_anak', $data['tempat']);
			$docx->set('keperluan', $data['tempat']);
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Surat jalan") {

			$docx = new DOCXTemplate('template/source/SKTM.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl'] . "/ " . date('d/m/Y', strtotime($data['ttl'])));
			$docx->set('kewar', $data['kewar']);
			$docx->set('jk', $data['jk']);
			$docx->set('agama', $data['agama']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('altuj', $data['altuj']);
			$docx->set('bermu', $data['bermu']);

			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Beda Identitas") {

			$docx = new DOCXTemplate('template/source/SKTM_BEASISWA.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl'] . "/ " . date('d/m/Y', strtotime($data['ttl'])));
			$docx->set('kewar', $data['kewar']);
			$docx->set('peker', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('alamat', $data['tempat']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('data1', $data['data1_t']);
			$docx->set('nama2', $data['nama_l2']);
			$docx->set('ttl2', $data['ttl2']);
			$docx->set('jk2', $data['jk2']);
			$docx->set('st_pe2', $data['st_pe2']);
			$docx->set('nike2', $data['nike']);
			$docx->set('tempat2', $data['tempat']);
			$docx->set('data2', $data['data2_t']);
			$docx->set('benar', $data['benar']);
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Domisli Lembaga") {

			$docx = new DOCXTemplate('template/source/SKTM_BEASISWA.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('umur', $data['umur_pe']);
			$docx->set('jabatan', $data['janatan']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('kleg', $data['jenis_le']);
			$docx->set('nleg', $data['nama']);
			$docx->set('bahuk', $data['ba_huk']);
			$docx->set('allem', $data['alamat_le']);
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
?>