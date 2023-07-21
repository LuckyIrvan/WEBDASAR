<!DOCTYPE html>
<html>

<head>
	<title>UAS PWD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="judul">
		<h3>UAS Pemrograman Web Lanjut</h3>
	</div>
	<br />
	<a href="index.php">Lihat Semua Data</a>
	<br />
	<h3>Edit data</h3>
	<?php
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($host, "SELECT * FROM tbl_pelanggan WHERE id_pelanggan='$id'") or die(mysqli_error($host));
	$nomor = 1;
	while ($data = mysqli_fetch_array($query_mysql)) {
	?>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>ID Pelanggan</td>
					<td>
						<input type="text" name="id" value="<?php echo $data['id_pelanggan'] ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $data['Nama'] ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $data['Alamat'] ?>"></td>
				</tr>
				<tr>
					<td>No Telpon</td>
					<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>
	<?php } ?>
</body>

</html>