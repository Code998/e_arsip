<?php  
	session_start();
	include_once 'connection.php';

	$sql = "SELECT * FROM data_surat_kemat";

	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cetak Tabel Registrasi Kematian</title>
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
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Tanggal Meninggal</th>
        <th>Sakit</th>
        <th>Tempat Meninggal</th>
        <th>Nama Keluarga</th>
        <th>Alamat</th>
        <th>Keterangan</th>
			</tr>
				<?php 
            while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
            	<td>
            		<?= $row['no'] ?>
            	</td>
	            <td>
	              <?= $row['nama'] ?>
	            </td>
	            <td>
	              <?= $row['jk'] ?>
	            </td>
	            <td>
	              <?= $row['umur'] ?>
	            </td>
				<td>
	              <?= $row['tgl_men'] ?>
	            </td>
	            <td>
	              <?= $row['sakit'] ?>
	            </td>
	            <td>
	              <?= $row['men_di'] ?>
	            </td>
	            <td>
	              <?= $row['na_keluarga'] ?>
	            </td>
	            <td>
	              <?= $row['alamat'] ?>
	            </td>
	            <td>
	              <?= $row['ket'] ?>
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