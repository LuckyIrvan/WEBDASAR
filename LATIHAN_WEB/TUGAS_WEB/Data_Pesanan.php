<html>
<head>
    <title>DATA PEMESANAN TIKET BOLA SEAGEMES 2018</title>
</head>
 // INI BAGIAN STYLE
<style>
    .title {text-align: center;}
    .form_text {
        border: 2px solid;
        margin: auto;
        width: 800px;
        height: 350px; }
    .form {margin: auto;}
    th {text-align: left;}
</style>
// AKHIR STYLE 
<body>
    //  INI AWAL BAGIAN JUDUL
    <div class="form_text">
        <div class="title">
            <h1>DATA PEMESANAN TIKET BOLA SEAGEMES 2018</h1>
            <h2>INDONESIA VS MALAYSIA</h2>
            <h2>PUKUL 15.00 WIB</h2>
        </div>
        //  INI AKHIR BAGIAN JUDUL
        // INI LAGI BAGIAN PHP
        <?php
        // INI LAGI MANGGIL DATA INPUTAN DARI FORM 
        $name = $_POST["name"];
        $telp = $_POST["telp"];
        $tiket = $_POST["tiket"];
        $total = $_POST["total"];
        define("vip", 50_000);
        define("reguler", 25_000);
        // INI BAGIAN STAMENT JIKA TIKET APA HARGANYA JADI APA
        if ($tiket == "reguler") {
            $subTotal = $total * reguler;
        } else if ($tiket == "vip") {
            $subTotal = $total * vip;} 
        else {echo "Error";}
        ?>
        // INI AWAL TABEL OUPUT FORM
        <table class="form">
            <tr>
                <th><label for="name">Nama</label></th>
                <td>:</td>
                <td><?php echo $name ?></td>
            </tr>
            <tr>
                <th><label for="telp">Telp</label></th>
                <td>:</td>
                <td><?php echo $telp ?></td>
            </tr>
            <tr>
                <th><label for="tiket">Jenis Tiket</label></th>
                <td>:</td>
                <td><?php echo $tiket ?></td>
            </tr>
            <tr>
                <th><label for="harga">Harga tiket</label></th>
                <td>:</td>
                <td><?php if ($tiket == "reguler") {
                        echo reguler;
                    } else if ($tiket == "vip") {
                        echo vip;
                    } else {
                        echo "Error";
                    } ?></td>
            </tr>
            <tr>
                <th><label for="jumlah">Banyak Tiket</label></th>
                <td>;</td>
                <td><?php echo $total ?></td>
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
    // AKHIR TABLE FROM
</body>

</html>