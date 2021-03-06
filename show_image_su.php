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

	$a = $data['ttd_jabat'];
	$sql1 = "SELECT * FROM pegawai WHERE jabatan = '" . $a . "'";
	$result1 = $conn->query($sql1);
	$data1 = $result1->fetch_assoc();

	$array_bln	= array("01"=>"I", "02"=>"II", "03"=>"III", "04"=>"IV", "05"=>"V", "06"=>"VI", "07"=>"VII", "08"=>"VIII", "09"=>"IX", "10"=>"X", "11"=>"XI", "12"=>"XII");
	$bln		= $array_bln[date('m', strtotime($data['ket']))];

		if ($data['jenis'] == "SKTM") {

			$docx = new DOCXTemplate('template/source/SKTM.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('jk', $data['jk']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('peker', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('alamat', $data['tempat']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('tgl', date('d/m/Y', strtotime($data['ket'])));
			$docx->set('nope', $data['nama_pe']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "SKTM Beasiswa") {

			$docx = new DOCXTemplate('template/source/SKTM_BEASISWA.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('peker', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('alamat', $data['tempat']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('nama_anak', $data['na_anak']);
			$docx->set('ttl_anak', $data['ttl_anak']);
			$docx->set('agama', $data['agama']);
			$docx->set('pker_anak', $data['peke_anak']);
			$docx->set('keperluan', $data['untuk']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Surat jalan") {

			$docx = new DOCXTemplate('template/source/Surat_Jalan.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('jk', $data['jk']);
			$docx->set('agama', $data['agama']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('altuj', $data['altuj']);
			$docx->set('bermu', $data['bermu']);

			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Beda Identitas") {

			$docx = new DOCXTemplate('template/source/Surat_Keterangan_Beda_Nama.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('jk', $data['jk']);
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
			$docx->set('nike2', $data['nike2']);
			$docx->set('tempat2', $data['tempat']);
			$docx->set('benar', $data['benar']);
			$docx->set('data2', $data['data2_t']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Domisili Lembaga") {

			$docx = new DOCXTemplate('template/source/Surat_keterangan_Domisili_Lembaga.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('umur', $data['umur_pe']);
			$docx->set('jabatan', $data['jabatan_pe']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('kleg', $data['jenis_le']);
			$docx->set('nleg', $data['nama_pe']);
			$docx->set('bahuk', $data['ba_huk']);
			$docx->set('allem', $data['alamat_le']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Domisili Pribadi") {

			$docx = new DOCXTemplate('template/source/Surat_keterangan_domisili_pribadi.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Belum Menikah") {

			$docx = new DOCXTemplate('template/source/Surat_Keterangan_Belum_Menikah.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('agama', $data['agama']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Surat Kerja") {

			$docx = new DOCXTemplate('template/source/Surat_Kerja.docx');
			$docx->set('nomor',  '471 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('agama', $data['agama']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Keterangan Usaha") {

			$docx = new DOCXTemplate('template/source/Surat_keterangan_Usaha.docx');
			$docx->set('nomor',  '470 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('nike', $data['nike']);
			$docx->set('rt', $data['rt']);
			$docx->set('rw', $data['rw']);
			$docx->set('tempat', "RT " . $data['rt'] . " RW " . $data['rw'] . " Desa " . $data['desa'] . " Dusun " . $data['dusun']);
			$docx->set('jenus', $data['jenus']);
			$docx->set('taber', $data['taber']);
			$docx->set('temp_us', $data['dapem']);
			$docx->set('pem', $data['alus']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		elseif ($data['jenis'] == "Laporan Kehilangan") {

			$docx = new DOCXTemplate('template/source/Surat_Tanda_Lapor_Kehilangan.docx');
			$docx->set('nomor',  '474 / ' . $data['no'] . ' / 35.07.20.007 / ' . $bln . "/ " . date('Y', strtotime($data['ket'])));
			$docx->set('nama', $data['nama']);
			$docx->set('ttl', $data['ttl']);
			$docx->set('kewar', $data['kewar']);
			$docx->set('agama', $data['agama']);
			$docx->set('st_pe', $data['st_pe']);
			$docx->set('jk', $data['jk']);
			$docx->set('untuk', $data['untuk']);
			$docx->set('pekerja', $data['pekerjaan']);
			$docx->set('nik', $data['nike']);
			$docx->set('tempat', $data['tempat']);
			$docx->set('bhil', $data['b_hil']);
			$docx->set('temp_hil', $data['temp_hil']);
			$docx->set('hari', $data['hari']);
			$docx->set('waktu', $data['waktu']);
			$docx->set('tgl_sekarang', date("d-m-Y"));
			if ($data['ttd_jabat'] == "Kepala Desa") {
				$docx->set('tambahan', "");
			}
			else{
				$docx->set('tambahan', "An. Kepala Desa");
			}
			$docx->set('n', $data1['nama']);
			$docx->set('ttd_jabat', $data['ttd_jabat']);
			$nama = "surat_". $data['jenis'] . "_" . $data['no']. ".docx";
			$docx->saveAs($nama); // or $docx->downloadAs('test.docx');

			header('Content-Type:application/msword');
			header('Content-Disposition: attachment; filename="' . $nama);
			@readfile($nama);
		}
		else{
			$info = pathinfo($data['file']);
			if ($info["extension"] == "jpg" || $info["extension"] == "png") {
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
			elseif ($info["extension"] == "docx" || $info["extension"] == "doc") {
				$filename = rawurldecode($data['file']);
				$file = "assets/photo/" . $filename;
				header('Content-type: application/msword');
				header('Content-Disposition: inline; filename="' . $filename . '"');
				header('Content-Transfer-Encoding: binary');
				header('Accept-Ranges: bytes');
				@readfile($file);
			}
		}
?>