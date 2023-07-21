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
	<?php
	if (isset($_GET['pesan'])) {
		$pesan = $_GET['pesan'];
		if ($pesan == "input") {
			echo "Data berhasil di input.";
		} else if ($pesan == "update") {
			echo "Data berhasil di update.";
		} else if ($pesan == "hapus") {
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br />
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>ID Pelanggan</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Telpon</th>
			<th>Opsi</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysqli_query($host, "SELECT * FROM tbl_pelanggan") or die(mysqli_error($host));
		$nomor = 1;
		while ($data = mysqli_fetch_array($query_mysql)) {
		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['id_pelanggan']; ?></td>
				<td><?php echo $data['Nama']; ?></td>
				<td><?php echo $data['Alamat']; ?></td>
				<td><?php echo $data['no_telp']; ?></td>
				<td>
					<a class="edit" href="edit.php?id=<?php echo $data['id_pelanggan']; ?>">Edit</a> |
					<a class="hapus" href="hapus.php?id=<?php echo $data['id_pelanggan']; ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>