<html>

<head>
    <title>DATA PEMESANAN TIKET BOLA SEAGEMES 2018</title>
</head>
<style>
    .title {
        text-align: center;

    }

    .form_text {
        border: 2px solid;
        margin: auto;
        width: 800px;
        height: 350px;
    }

    .form {
        margin: auto;
    }

    th {
        text-align: left;
    }
</style>

<body>
    <div class="form_text">
        <div class="title">
            <h1>rumah laundry</h1>
        </div>
        <?php
        $name = $_POST["name"];
        $alamat = $_POST["alamat"];
        $paket = $_POST["paket"];
        $berat = $_POST["berat"];
        define("ekonomis", 50000);
        define("keluarga", 20000);
        define("prioritas", 300000);
        if ($paket == "ekonomis") {
            $subTotal = intval($berat) * ekonomis;
        } else if ($paket == "keluarga") {
            $subTotal = intval($berat) * keluarga;
        } else if ($paket == "prioritas") {
            $subTotal = intval($berat) * prioritas;
        } else {
            echo "Error";
        }
        ?>
        <table class="form">
            <tr>
                <th><label for="name">Nama Pelanggan</label></th>
                <td>:</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th><label for="alamat">ALAMAT</label></th>
                <td>:</td>
                <td><?php echo $alamat ?></td>
            </tr>
            <tr>
                <th><label for="paket">PAKET LAUNDRY</label></th>
                <td>:</td>
                <td><?php echo $paket ?></td>
            </tr>
            <tr>
                <th><label for="berat">berat</label></th>
                <td>;</td>
                <td><?php echo $berat ?></td>
            </tr>
        </table>
        <hr>
        <table>
            <tr>
                <th>Total Bayar</th>
                <td>:</td>
                <td><?php echo $subTotal ?></td>
            </tr>
        </table>
    </div>
</body>

</html>