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

	$sql1 = "SELECT * FROM data_surat_kemat WHERE no = '" . $id . "'";
	$result1 = $conn->query($sql1);
	$data1 = $result1->fetch_assoc();

	$sql2 = "SELECT * FROM data_surat_lahir WHERE no = '" . $id . "'";
	$result2 = $conn->query($sql2);
	$data2 = $result2->fetch_assoc();
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

			$docx = new DOCXTemplate('template/source/Surat_Keterangan_Beda_Nama.docx');
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

			$docx = new DOCXTemplate('template/source/Surat_keterangan_Domisili_Lembaga.docx');
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
		elseif ($data['jenis'] == "Domisili Pribadi") {

			$docx = new DOCXTemplate('template/source/Surat_keterangan_domisili_pribadi.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
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
		elseif ($data['jenis'] == "Belum Menikah") {

			$docx = new DOCXTemplate('template/source/Surat_Keterangan_Belum_Menikah.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
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
		elseif ($data['jenis'] == "Surat Kerja") {

			$docx = new DOCXTemplate('template/source/Surat_Kerja.docx');
			$docx->set('nomor',  '471 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
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
		elseif ($data['jenis'] == "Keterangan Usaha") {

			$docx = new DOCXTemplate('template/source/Surat_keterangan_domisili_pribadi.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('jenus]', $data['jenus']);
			$docx->set('taber', $data['taber']);
			$docx->set('temp_us', $data['dapem']);
			$docx->set('pem', $data['tempat']);
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
		elseif ($data['jenis'] == "Laporan Kehilangan") {

			$docx = new DOCXTemplate('template/source/Surat_keterangan_domisili_pribadi.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('agama]', $data['agama']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('temp_hil', $data['temp_hil']);
			$docx->set('hari', $data['hari']);
			$docx->set('waktu', $data['waktu']);
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

		elseif ($data2['jenis'] == "Kelahiran") {

			$docx = new DOCXTemplate('template/source/Surat_Kelahiran.docx');
			$docx->set('nomor',  '474 / ' . $data2['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
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
		}

		elseif ($data1['jenis'] == "Kematian") {

			$docx = new DOCXTemplate('template/source/Surat_Kematian.docx');
			$docx->set('nomor',  '474 / ' . $data1['no'] . ' / 35.07.27.20.007 / ' . date('Y', strtotime($data['ket'])));
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