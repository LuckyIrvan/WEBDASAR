<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['no_telp'];

mysqli_query($host, "UPDATE tbl_pelanggan SET Nama='$nama', Alamat='$alamat', no_telp='$telp' WHERE id_pelanggan='$id'");

header("location:index.php?pesan=update");
