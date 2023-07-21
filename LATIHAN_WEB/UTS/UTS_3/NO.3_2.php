<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA PESANAN</title>
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
    <?php

    if (isset($_POST['simpan'])) {
        $kode = $_POST['kode'];
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $paket = $_POST['paket'];
        $berat = $_POST['berat'];
        $status = $_POST['status'];
        define("PERSONAL", 7000);
        define("KELUARGA", 8000);
        define("BUSINESS", 10000);
        if ($paket == "personal") {
            $biaya = PERSONAL;
        } elseif ($paket == "keluarga") {
            $biaya = KELUARGA;
        } elseif ($paket == "business") {
            $biaya = BUSINESS;
        }
        $total = $biaya * intval($berat);
        include "koneksi.php";
        $q = "insert into tbl_pesanan(kode_pesanan,id_pelanggan,tanggal,Harga_paket,berat_paket,Total_biaya,Status)";
        $q .= " VALUES('$kode','$id','$tanggal','$paket','$berat','$total','$status')";
        mysqli_query($koneksi, $q);
    }
    ?>
    <div id="container">
        <h2>DATA PESANAN</h2>
        <table>
            <tr>
                <td><label for="kode">Kode Pesanan</label></td>
                <td>:</td>
                <td><?php echo $kode ?></td>
            </tr>
            <tr>
                <td><label for="id">ID Pelanggan</label></td>
                <td>:</td>
                <td><?php echo $id ?></td>
            </tr>
            <tr>
                <td><label for="tanggal">Tanggal</label></td>
                <td>:</td>
                <td><?php echo $tanggal ?></td>
            </tr>
            <tr>
                <td><label for="paket">HARGA PAKET</label></td>
                <td>:</td>
                <td><?php if ($paket == "personal") {
                        echo PERSONAL;
                    } else if ($paket == "keluarga") {
                        echo KELUARGA;
                    } else if ($paket == "business") {
                        echo BUSINESS;
                    } else {
                        echo "Invalid";
                    } ?></td>
            </tr>
            <tr>
                <td><label for="berat">JUMLAH BERAT</label>Kg</td>
                <td>:</td>
                <td><?php echo $berat ?></td>
            </tr>
            <tr>
                <td><label for="total">Total Bayar</label></td>
                <td>:</td>
                <td><?php echo $total ?></td>
            </tr>
            <tr>
                <td><label for="status">Status</label>Kg</td>
                <td>:</td>
                <td><?php echo $status ?></td>
            </tr>
        </table></body></html>