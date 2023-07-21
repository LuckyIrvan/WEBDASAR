<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['no_telp'];
 
mysqli_query($host,"INSERT INTO tbl_pelanggan VALUES('$id','$nama','$alamat','$telp')");
 
header("location:index.php?pesan=input");
?>