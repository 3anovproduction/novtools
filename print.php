<?php 
	include 'koneksi.php';

	$member = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE user_id = '".$_GET['id']."' ");
	$u = mysqli_fetch_object($member);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bukti Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<script>window.print();</script>
</head>
<body>

	<h2>Bukti Pendaftaran</h2>
	<table class="table-data" border="0">
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $u->user_id ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo $u->tahun ?></td>
		</tr>

		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $u->nm_peserta ?></td>
		</tr>

		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $u->tmp_lahir.', '.$u->tgl_lahir ?></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $u->jk ?></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $u->alamat_peserta ?></td>
		</tr>
	</table>

</body>
</html>