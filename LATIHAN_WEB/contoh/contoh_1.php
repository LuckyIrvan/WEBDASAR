<html>

<body>
    <form action="#" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" /><br>
        <label for="umur">Umur</label>
        <input type="text" name="umur" id="umur" /><br><br>
        <input type="submit" name="bok" value="LOGIN" />
    </form>
    <?php
    if (isset($_GET['bok'])) {
        $name = $_GET['nama'];
        $umur = $_GET['umur'];
        echo "NAMA = ", $name, "<br>";
        echo "UMUR = ", $umur;
    }
    ?>
</body>

</html>