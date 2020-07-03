<?php  
	session_start();
	include_once 'connection.php';

	$sql = "SELECT * FROM data_surat_pite";

	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cetak Tabel Registrasi Pindah Tempat</title>
		<style type="text/css">
				body{
					text-align: center;
					font-size: 10px;
				}
				@font-face{
					font-family: "Product Sans";
					src: url('assets/css/font/Product-Sans-Regular.ttf');
				}
        table{
					font-family: 'Product Sans';
					border-collapse: collapse;
        }
        tr:nth-child(odd) {background-color: #f2f2f2;}
        th{
        	background-color: #95afc0;
        }
        th, td{
        	padding: 10px;
        	text-align: center;
        }
    </style>
	</head>
	<body>

		<img src="assets/img/kop1.jpg" width="1000" height="200">
		<table style="width: 100%">
			<tr>
				<th>Nomor</th>
                <th>Nomor Registrasi</th>
                <th>Nama</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Status Perkawinan</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Alamat Sekarang </th>
                <th>Alamat Tujuan</th>
			</tr>
				<?php 
            while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
            	<td>
                            <?=$row['no']?>
                          </td>
                          <td>
                            <?= $row['no_reg'] ?>
                          </td>
                          <td>
                            <?= $row['no_surat'] ?>
                          </td>
                          <td>
                            <?= $row['nama'] ?>
                          </td>
                          <td>
                            <?= $row['ttl'] ?>
                          </td>
                          <td>
                            <?= $row['nik'] ?>
                          </td>
                          <td>
                            <?= $row['jk'] ?>
                          </td>
                          <td>
                            <?= $row['st_perk'] ?>
                          </td>
                          <td>
                            <?= $row['agama'] ?>
                          </td>
                          <td>
                            <?= $row['pekerjaan'] ?>
                          </td>
                          <td>
                            <?= $row['al_sek'] ?>
                          </td>
                          <td>
                            <?= $row['al_tuj'] ?>
                          </td>
		        </tr>
		      <?php 
		      	}
		      ?>
			</table>

		<script>
			window.print();
		</script>
	</body>
</html>