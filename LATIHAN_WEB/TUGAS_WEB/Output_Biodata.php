<html>
<head>
    <title>Biodata Anda</title>
</head>
<style>
    th {text-align: left; }</style>
<body>
    // ini judul
    <h1>Biodata Anda</h1>
    / ini masuk bagian php
    <?php
    // ini bagian ambil data dar iform
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $hobby = $_POST["hobby"];
    $pendidikan = $_POST["pendidikan"];
    $alamat = $_POST["alamat"];
    ?>
    // ini table ouput data yang tadi di ambik
    <table>
        <tr>
            <th>Nama</th>
            <td>:</td>
            <td><?php echo $name ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>:</td>
            <td><?php echo $gender ?></td>
        </tr>
        <tr>
            <th>Hobby</th>
            <td>:</td>
            <td><?php foreach ($hobby as $key) {
                    echo  "$key,";
                } ?></td>
        </tr>
        <tr>
            <th>Pendidikan</th>
            <td>:</td>
            <td><?php echo $pendidikan ?></td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td><?php echo $alamat ?></td>
        </tr></table>
</body>
</html>