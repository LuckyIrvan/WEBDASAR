<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host, "DELETE FROM tbl_pelanggan WHERE id_pelanggan='$id'") or die(mysqli_error($host));

header("location:index.php?pesan=hapus");
?>