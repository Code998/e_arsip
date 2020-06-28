<?php  
	session_start();
	include_once 'connection.php';

	$sql = "SELECT * FROM data_surat_lahir";

	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cetak Tabel Registrasi Kelahiran</title>
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
        <th>Nama Bayi</th>
        <th>Jenis Kelamin</th>
        <th>Hari</th>
        <th>Tanggal lahir</th>
        <th>Tempat</th>
        <th>Nama Ayah</th>
        <th>Nama Ibu</th>
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
	              <?= $row['nm_bayi'] ?>
	            </td>
	            <td>
	              <?= $row['jk'] ?>
	            </td>
	            <td>
	              <?= $row['hari'] ?>
	            </td>
				<td>
	              <?= $row['tgl_lahir'] ?>
	            </td>
	            <td>
	              <?= $row['tempat'] ?>
	            </td>
	            <td>
	              <?= $row['nm_ayah'] ?>
	            </td>
	            <td>
	              <?= $row['nm_ibu'] ?>
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