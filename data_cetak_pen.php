<?php  
	session_start();
	if ($_SESSION['user'] == "" && $_SESSION['nip'] == "") {
		header("Location: index.php");
	}
	include_once 'connection.php';

	$sql = "SELECT * FROM penduduk";

	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cetak Surat Penduduk</title>
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
				<th>NIK</th>
				<th>No. KK</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Usia</th>
				<th>Jenis Kelamin</th>
				<th>Status</th>
				<th>Alamat</th>
				<th>Agama</th>
				<th>Pekerjaan</th>
				<th>Kewarnegaraan</th>
			</tr>
				<?php 
          while ($row = $result->fetch_assoc()) {
        ?>
	        <tr>
	          <td>
	            <?= $row['nik'] ?>
	          </td>
	          <td>
	            <?= $row['no_kk'] ?>
	          </td>
	          <td>
	            <?= $row['nama'] ?>
	          </td>
	          <td>
	            <?= $row['tempat_lahir'] ?>
	          </td>
	          <td>
	            <?= $row['tanggal_lahir'] ?>
	          </td>
	          <td>
	            <?= $row['usia'] ?>
	          </td>
	          <td>
	            <?php
	            if ($row['jenis_kelamin'] == "L" || $row['jenis_kelamin'] == "Laki-Laki") {
	              echo "Laki-Laki";
	            }
	            else{
	              echo "Perempuan";
	            }
	            ?>
	          </td>
	          <td>
	            <?= $row['status'] ?>
	          </td>
	          <td>
	            <?= $row['alamat'] ?>
	          </td>
	          <td>
	            <?= $row['agama'] ?>
	          </td>
	          <td>
	            <?= $row['pekerjaan'] ?>
	          </td>
	          <td>
	            <?= $row['kewarnegaraan'] ?>
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