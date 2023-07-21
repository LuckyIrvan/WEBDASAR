<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA MAHASISWA</title>
</head>
<style>
    table {border: 2px solid;}
    th { text-align: left;}
</style>
<body>
    <?php
    include "koneksi.php";
    ?>
    <form action="#" method="post">
        <table>
            <tr>
                <th><label for="id">ID Pelanggan</label></th>
                <td>:</td>
                <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
                <th><label for="name">NAMA</label></th>
                <td>:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <th><label for="address">ALAMAT</label></th>
                <td>:</td>
                <td><input type="text" name="address" id="address"></td>
            </tr>
            <tr>
                <th><label for="telp">NO TELPON</label></th>
                <td>:</td>
                <td><input type="text" name="telp" id="telp"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" name="input" id="input" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <a href="data_db.php">BACK TO TABLE PELANGGAN</a>
    <?php
    if (isset($_POST['input'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $telp = $_POST['telp'];
        $q = "insert into tbl_pelanggan(id_pelanggan,Nama,Alamat,no_telp)";
        $q .= " values('$id','$name','$address','$telp')";
        mysqli_query($koneksi, $q);
        echo '<script type="text/JavaScript">';
        echo 'alert("Data Tersimpan")';
        echo '</script>';
    }
    ?>
</body></html>