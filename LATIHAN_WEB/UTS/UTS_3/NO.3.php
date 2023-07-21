<?php
// 
//buat Program input dan output FORM DATA LAUNDRY menggunakan bahasa PHP
// menggunakan method Post seperti gambar di bawah ini
// KETENTUAN
// Apabila Paket Laundry Ekonomis Maka Harga Rp 5.000 ,
// Apabila Paket Laundry Keluarga Maka Harga Rp 20.000,
// Apabila Paket Prioritas , Maka Harga Rp 300.000,
// Untuk Menghitung Total Bayar = Harga x Berat Barang
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA LAUNDRY</title>
    <style>
        #container {
            border: 2px solid;
            margin: auto;
            width: 500px;
            height: 350px;
        }

        h2 {
            text-align: center;
        }

        table {
            margin: auto;
        }
    </style>
</head>

<body>
    <div id="container">
        <h2>INPUT DATA PESANAN</h2>
        <form action="NO.3_2.php" method="post">
            <table>
                <tr>
                    <td><label for="kode">Kode Pesanan</label></td>
                    <td>=</td>
                    <td><input type="text" name="kode" id="kode"></td>
                </tr>
                <tr>
                    <td><label for="id">ID Pelanggan</label></td>
                    <td>=</td>
                    <td><input type="text" name="id" id="id"></td>
                </tr>
                <tr>
                    <td><label for="tanggal">Tanggal</label></td>
                    <td>=</td>
                    <td><input type="text" name="tanggal" id="tanggal"></td>
                </tr>
                <tr>
                    <td><label for="paket">Harga Paket</label></td>
                    <td>=</td>
                    <td> <select name="paket" id="paket">
                            <option name="paket" id="paket" value="personal">Personal</option>
                            <option name="paket" id="paket" value="keluarga">Keluarga</option>
                            <option name="paket" id="paket" value="business">Business</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="berat">Berat Paket</label></td>
                    <td>=</td>
                    <td><input type="number" name="berat" id="berat"></td>
                </tr>
                <tr>
                    <td><label for="status">Status</label></td>
                    <td>=</td>
                    <td><input type="text" name="status" id="status"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="SIMPAN"></td>
                </tr>
        </form>
        </table>
    </div>
</body>

</html>