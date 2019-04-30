<?php  
	session_start();
	include_once 'connection.php';

	$sql = "SELECT * FROM pegawai";

	$data = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cetak Surat Pegawai</title>
		<style type="text/css">
				body{
					text-align: center;
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

		<img src="assets/img/kop_surat.jpeg">
		<table style="width: 100%">
			<tr>
				<th>NIP</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jabatan</th>
			</tr>
				<?php 
          while ($row = $data->fetch_assoc()) {
        ?>
				<tr>
					<td><?=$row['nip']?></td>
					<td><?=$row['nama']?></td>
					<td><?=$row['alamat']?></td>
					<td><?=$row['jabatan']?></td>
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