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
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">
		<table>
			<tr>
				<td>ID Pelanggan</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>NO Telpon</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>

</html>