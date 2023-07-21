<?php
include "koneksi.php";

$q = "SELECT * FROM tbl_pelanggan";
$ex = mysqli_query($koneksi, $q);
echo "<a href='addData.php'>Tambah Pelanggan</a>";
echo "<table border='3' cellspacing='2'>";
echo "<tr>
        <th>ID Pelanggan</th>
        <th>NAMA</th>
        <th>Alamat</th>
        <th>NO TELEPON</th>
        <th colspan='2' >ACTION</th>
    </tr>";
while ($r = mysqli_fetch_array($ex)) {
    echo "<tr><td>" . $r['id_pelanggan'] . "</td>";
    echo "<td>" . $r['Nama'] . "</td>";
    echo "<td>" . $r['Alamat'] . "</td>";
    echo "<td>" . $r['no_telp'] . "</td>";
    echo "<td><a href='editData.php?n=" . $r['id_pelanggan'] . "'>Ubah</a></td>";
    echo "<td><a href='deleteData.php?n=" . $r['id_pelanggan'] . "'>hapus</a></td>";
    echo "</tr>";
}
echo "</table>";
