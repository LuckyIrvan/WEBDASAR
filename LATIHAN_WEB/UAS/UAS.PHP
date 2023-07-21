<?php
// Konfigurasi koneksi ke database
$host = "localhost";
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$database = "penjualan"; // Ganti dengan nama database Anda

// Fungsi untuk membuat koneksi ke database
function connectDB()
{
    global $host, $username, $password, $database;
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    return $conn;
}

// Fungsi untuk menutup koneksi ke database
function closeDB($conn)
{
    mysqli_close($conn);
}

// Fungsi untuk mendapatkan data pelanggan dari tabel
function getPelanggan()
{
    $conn = connectDB();
    $query = "SELECT * FROM tbl_pelanggan";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    closeDB($conn);
    return $data;
}

// Fungsi untuk menambahkan data pelanggan ke tabel
function tambahPelanggan($id, $nama, $alamat, $noTelp)
{
    $conn = connectDB();
    $query = "INSERT INTO tbl_pelanggan (id_pelanggan, Nama, Alamat, no_telp) VALUES ('$id', '$nama', '$alamat', '$noTelp')";
    $result = mysqli_query($conn, $query);
    closeDB($conn);
    return $result;
}

// Fungsi untuk memperbarui data pelanggan di tabel
function updatePelanggan($id, $nama, $alamat, $noTelp)
{
    $conn = connectDB();
    $query = "UPDATE tbl_pelanggan SET Nama='$nama', Alamat='$alamat', no_telp='$noTelp' WHERE id_pelanggan='$id'";
    $result = mysqli_query($conn, $query);
    closeDB($conn);
    return $result;
}

// Proses input data pelanggan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $noTelp = $_POST["noTelp"];
    tambahPelanggan($id, $nama, $alamat, $noTelp);
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}

// Proses update data pelanggan
if (isset($_GET["edit"])) {
    $id = $_GET["edit"];
    $dataPelanggan = getPelanggan();
    foreach ($dataPelanggan as $pelanggan) {
        if ($pelanggan["id_pelanggan"] == $id) {
            $editNama = $pelanggan["Nama"];
            $editAlamat = $pelanggan["Alamat"];
            $editNoTelp = $pelanggan["no_telp"];
            break;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $editNama = $_POST["edit_nama"];
        $editAlamat = $_POST["edit_alamat"];
        $editNoTelp = $_POST["edit_noTelp"];
        updatePelanggan($id, $editNama, $editAlamat, $editNoTelp);
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Pelanggan</title>
</head>

<body>
    <h2>Form Pelanggan</h2>

    <!-- Form tambah pelanggan -->
    <h3>Tambah Pelanggan</h3>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="id">ID Pelanggan:</label>
        <input type="text" id="id" name="id" required><br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br><br>
        <label for="noTelp">No. Telepon:</label>
        <input type="text" id="noTelp" name="noTelp" required><br><br>
        <input type="submit" value="Tambah">
    </form>

    <!-- Tabel pelanggan -->
    <h3>Data Pelanggan</h3>
    <table>
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php
        $dataPelanggan = getPelanggan();
        foreach ($dataPelanggan as $pelanggan) {
            echo "<tr>";
            echo "<td>" . $pelanggan["id_pelanggan"] . "</td>";
            echo "<td>" . $pelanggan["Nama"] . "</td>";
            echo "<td>" . $pelanggan["Alamat"] . "</td>";
            echo "<td>" . $pelanggan["no_telp"] . "</td>";
            echo "<td><a href='" . $_SERVER["PHP_SELF"] . "?edit=" . $pelanggan["id_pelanggan"] . "'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php if (isset($_GET["edit"])) : ?>
        <!-- Form edit pelanggan -->
        <h3>Edit Pelanggan</h3>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] . "?edit=" . $id; ?>">
            <label for="edit_nama">Nama:</label>
            <input type="text" id="edit_nama" name="edit_nama" value="<?php echo $editNama; ?>" required><br><br>
            <label for="edit_alamat">Alamat:</label>
            <input type="text" id="edit_alamat" name="edit_alamat" value="<?php echo $editAlamat; ?>" required><br><br>
            <label for="edit_noTelp">No. Telepon:</label>
            <input type="text" id="edit_noTelp" name="edit_noTelp" value="<?php echo $editNoTelp; ?>" required><br><br>
            <input type="submit" value="Update">
        </form>
    <?php endif; ?>
</body>

</html>