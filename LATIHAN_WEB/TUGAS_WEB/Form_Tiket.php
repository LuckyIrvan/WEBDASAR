<html>
<head>
    <title>FORM TIKET BOLA SEAGEMES 2018</title>
</head>
<style>
    .title {text-align: center;}

    .form_text {
        border: 2px solid;
        margin: auto;
        width: 800px;
        height: 350px;
    }

    .form {margin: auto;}

    th {text-align: left;}
</style>
<body>
    // ini bagian judul
    <div class="form_text">
        <div class="title">
            <h1>FORM TIKET BOLA SEAGEMES 2018</h1>
            <h2>INDONESIA VS MALAYSIA</h2>
            <h2>PUKUL 15.00 WIB</h2>
        </div>
        // ini awal dari form
        <form action="Data_Pesanan.php" method="post" target="_blank">
            <table class="form">
                <tr>
                // ini bagian input nama pesanan
                    <th><label for="name">NAMA PEMESAN</label></th>
                    <td>=</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                // ini bagian input telp
                    <th><label for="telp">TELP</label></th>
                    <td>=</td>
                    <td><input type="text" name="telp" id="telp"></td>
                </tr>
                <tr>
                // ini bagian input jenis tiket
                    <th><label for="tiket">JENIS TIKET</label></th>
                    <td>=</td>
                    <td>
                        <select name="tiket" id="tiket">
                            <option name="tiket" id="tiket" value="reguler">REGULER</option>
                            <option name="tiket" id="tiket" value="vip">VIP</option>
                        </select>
                    </td>
                </tr>
                <tr>
                // ini bagian input jumlah tiket
                    <th><label for="total">JUMLAH TIKET</label></th>
                    <td>=</td>
                    <td><input type="number" name="total" id="total"> Lembar</td>
                </tr>
                <tr>
                // ini bagian input data
                    <td></td>
                    <td colspan="2"><b><input type="submit" value="Simpan"></b></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>