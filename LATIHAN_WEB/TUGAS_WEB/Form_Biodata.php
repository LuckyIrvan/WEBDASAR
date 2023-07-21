<html>
<head>
    <title>FORM BIODATA</title>
</head>
<style>
    th {text-align: left;}
</style>
<body>
    // ini awal dari from
    <form action="Output_Biodata.php" method="post">
        <h1>FORM BIODATA</h1>
        <table>
            <tr>
                // ini bagian input nama
                <th><label for="name">First Name </label></th>
                <td>:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
            // ini bagian input jenis kelamin
                <th><label for="gender">Gender</label></th>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" id="gender" value="Laki-laki">Laki-laki<br>
                    <input type="radio" name="gender" id="gender" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
            // ini bagian input hobby
                <th><label for="hobby">Hobby</label></th>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobby[]" id="hobby" value="Korespondensi">Korespondensi<br>
                    <input type="checkbox" name="hobby[]" id="hobby" value="Traveling">Traveling<br>
                    <input type="checkbox" name="hobby[]" id="hobby" value="Shopping">Shopping
                </td>
            </tr>
            <tr>
            // ini bagian input pendidikan
                <th><label for="pendidikan">Pendidikan</label></th>
                <td>:</td>
                <td>
                    <select name="pendidikan">
                        <option name="pendidikan" id="pendidikan" value="SD">SD</option>
                        <option name="pendidikan" id="pendidikan" value="SMP">SMP</option>
                        <option name="pendidikan" id="pendidikan" value="SMA">SMA</option>
                    </select>
                </td>
            </tr>
            <tr>
            // ini bagian input alamat
                <th><label for="alamat">Alamat</label></th>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
            // ini bagian input data
                <td></td>
                <td colspan="2"><b><input type="submit" value="Simpan" target="_blank"></b></td>
            </tr>
        </table>
    </form>
</body>

</html>