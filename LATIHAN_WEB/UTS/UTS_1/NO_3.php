<html>
<head>
    <title>UAS PWD</title>
    <style>
        h2 {
            text-align: center;
        }
        .containerinput {
            margin-right: 50px;
            border: 2px solid;
            width: 450px;
            height: auto;
            padding: 50px;
        }
        .containeroutput {
            border: 2px solid;
            width: 450px;
            height: auto;
            padding: 50px;
        }
        .containerbody {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="containerbody">
        <div class="containerinput">
            <form action="#" method="get">
                <h2>PESANAN LAUNDRY</h2>
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
            <br>
        </div>
        <div class="containeroutput">
            <?php
            if (isset($_GET['simpan'])) {
                $kode = $_GET['kode'];
                $id = $_GET['id'];
                $tanggal = $_GET['tanggal'];
                $paket = $_GET['paket'];
                $berat = $_GET['berat'];
                $status = $_GET['status'];
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
                $total_bayar = $biaya * intval($berat);
                echo " <h2>DATA PEMESANAN </h2>";
                echo "<table >";
                echo "<tr><td>Kode Pesanan</td><td>=</td><td>" . $kode . "</td></tr>";
                echo "<tr><td>ID Pelanggan</td><td>=</td><td>" . $id . "</td></tr>";
                echo "<tr><td>Tanggal</td><td>=</td><td>" . $tanggal . "</td></tr>";
                echo "<tr><td>Harga Paket</td><td>=</td><td>" . $paket . "</td></tr>";
                echo "<tr><td>Jumlah Berat</td><td>=</td><td>" . $berat . "</td></tr>";
                echo "<tr><td>Total Bayar</td><td>=</td><td>" . $total_bayar . "</td></tr>";
                echo "<tr><td>Status</td><td>=</td><td>" . $status . "</td></tr>";
                echo "</table>";
                include 'koneksi.php';
                $kode = $_GET['kode'];
                $id = $_GET['id'];
                $tanggal = $_GET['tanggal'];
                $paket = $_GET['paket'];
                $berat = $_GET['berat'];
                $total_bayar;
                $status = $_GET['status'];

                mysqli_query($host, "INSERT INTO tbl_pesanan VALUES('$kode','$id','$tanggal','$paket','$berat','$total_bayar','$status')");
            }
            ?>
        </div>
    </div>
</body>

</html>