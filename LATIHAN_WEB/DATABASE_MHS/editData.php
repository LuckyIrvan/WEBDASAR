<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
</head>
<style>
    table { border: 2px solid;}
    th { text-align: left; }
</style>
<body>
    <?php
    include "koneksi.php";
    $id = $_GET['n'];
    $q = "select * from tbl_pelanggan where id_pelanggan = '$id'";
    $ex = mysqli_query($koneksi, $q);
    $r = mysqli_fetch_array($ex);
    ?>
    <form action="#" method="post">
        <table>
            <tr>
                <th><label for="id">ID Pelanggan</label></th>
                <td>:</td>
                <td><input type="text" name="id" id="id" value="<?php echo $r['id_pelanggan']; ?>"></td>
            </tr>
            <tr>
                <th><label for="name">NAMA</label></th>
                <td>:</td>
                <td><input type="text" name="name" id="name" value="<?php echo $r['Nama']; ?>"></td>
            </tr>
            <tr>
                <th><label for="address">ALAMAT</label></th>
                <td>:</td>
                <td><input type="text" name="address" id="address" value="<?php echo $r['Alamat']; ?>"></td>
            </tr>
            <tr>
                <th><label for="telp">NO TELPON</label></th>
                <td>:</td>
                <td><input type="text" name="telp" id="telp" value="<?php echo $r['no_telp']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2"><input type="submit" name="edit" id="edit" value="Edit Data"></td>
            </tr>
        </table>
    </form>
    <a href="data_db.php">BACK TO DATA PELANGGAN</a>
    <?php
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $telp = $_POST['telp'];
        $q = "update tbl_pelanggan set Nama = '$name' ,Alamat = '$address' , no_telp = '$telp'";
        $q .= "where id_pelanggan = '$id'";
        mysqli_query($koneksi, $q);
        echo '<script type="text/JavaScript">';
        echo 'alert("Data Berhasil di Edit")';
        echo '</script>';
    }
    ?>
</body>

</html>