<?php
include "koneksi.php";
$id = $_GET['n'];
$q = "delete from tbl_pelanggan where id_pelanggan = '$id'";
mysqli_query($koneksi, $q);
echo '<script type="text/JavaScript">';
echo 'alert("Data Sudah Di Hapus")';
echo '</script>';
echo '<a href="data_db.php">BACK TO TABLE PELANGGAN</a>';
