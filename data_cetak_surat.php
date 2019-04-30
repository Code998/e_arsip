<?php  
	session_start();
	include_once 'connection.php';

	$sql = "SELECT * FROM arsip_surat";

	$result = $conn->query($sql);
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
				<th>No. Surat</th>
        <th>Jenis</th>
        <th>Dari / Kepada</th>
        <th>Tanggal Surat</th>
        <th>Perihal</th>
        <th>Laci</th>
        <th>Guide</th>
        <th>Alamat</th>
			</tr>
				<?php 
            while ($row = $result->fetch_assoc()) {
          ?>
            <tr>
              <td>
              <?php  
                if ($row['jenis'] == "Surat Keluar") {
                 echo "470 / " . $row['no_surat'] . " / 35.07.23.2003 / " . date('Y', strtotime($row['tanggal_input']));
                }
                elseif ($row['jenis'] == "Surat Masuk"){
                  echo $row['r_no_su'];
                }
              ?>
            </td>
            <td>
              <?= $row['jenis'] ?>
            </td>
            <td>
              <?= $row['dari_kpd'] ?>
            </td>
            <td>
              <?php
                if ($row['jenis'] == "Surat Masuk") {
                  $a = date('d/m/Y', strtotime($row['tanggal_surat']));
                  echo $a;
                }
                else{
                  $a = date('d/m/Y', strtotime($row['tanggal_input']));
                  echo $a;
                }
              ?>
            </td>
            <td>
              <?= $row['perihal'] ?>
            </td>
            <td>
              <?= $row['laci'] ?>
            </td>
            <td>
              <?= $row['guide'] ?>
            </td>
            <td>
              <?= $row['alamat'] ?>
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