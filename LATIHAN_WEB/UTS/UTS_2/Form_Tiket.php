<html>

<head>
    <title>FORM TIKET BOLA SEAGEMES 2018</title>
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
            <h1>Jasa Laundry</h1>
        </div>
        <form action="Data_Pesanan.php" method="post" target="_blank">
            <table class="form">
                <tr>
                    <th><label for="name">NAMA PELANGGAN</label></th>
                    <td>=</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <th><label for="alamat">ALAMAT</label></th>
                    <td>=</td>
                    <td colspan="2"><textarea name="alamat" style="width:100%" rows="4"></textarea></td>
                </tr>
                <tr>
                    <th><label for="paket">PAKET LAUNDRY</label></th>
                    <td>=</td>
                    <td>
                        <select name="paket" id="paket">
                            <option name="paket" id="paket" value="ekonomis">EKONOMIS</option>
                            <option name="paket" id="paket" value="keluarga">KELUARGA</option>
                            <option name="paket" id="paket" value="prioritas">PRIORITAS</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="berat">BERAT BARANG</label></th>
                    <td>=</td>
                    <td><input type="number" name="berat" id="berat"> Kg</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2"><b><input type="submit" value="Simpan"></b></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>