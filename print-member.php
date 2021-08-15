<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Bukti Member</title>
    <script>window.print();</script>
</head>
<body>

   <h2>Bukti Member</h2><br><br>
  
   <table class="table" border="1">
				<thead>
					<tr>
                        <th>No</th>
						<th>User ID</th>
						<th>Tanggal Pendaftaran</th>
						<th>Tahun</th>
						<th>Pembelian</th>
                        <th>Nama Lengkap</th>
                        <th>Tempat & Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						$list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");
						while($row = mysqli_fetch_array($list_peserta)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['user_id'] ?></td>
                        <td><?php echo $row['tgl_pendaftaran'] ?></td>
                        <td><?php echo $row['tahun'] ?></td>
                        <td><?php echo $row['pembelian'] ?></td>
                        <td><?php echo $row['nm_peserta'] ?></td>
						<td><?php echo $row['tmp_lahir'].', '.$row['tgl_lahir']?></td>
                        <td><?php echo $row['jk'] ?></td>
                        <td><?php echo $row['alamat_peserta'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

</body>
</html>