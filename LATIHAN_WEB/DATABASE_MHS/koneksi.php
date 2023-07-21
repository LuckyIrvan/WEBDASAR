<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$koneksi = mysqli_connect($host, $user, $pass);
mysqli_select_db($koneksi, "penjualan") or die(mysqli_connect_error());
