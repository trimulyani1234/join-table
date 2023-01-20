<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Form Tambah </h1>
    <form action="prosestambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" />
                </p>
                <p>
                    <label for="kelas">Kelas :</label>
                    <input type="text" name="kelas" />
                </p>
                <p>
                    <label for="nama_jurusan">Nama Jurusan :</label>
                    <select name="jurusan">
                        <option value="RPL">RPL</option>
                        <option value="TB">TB</option>
                        <option value="TBG">TBG</option>
                        <option value="TBSM">TBSM</option>
                        <option value="TL">TL</option>
                </select>
                </p>
                <p>
                    <label for="tahun">Tahun :</label>
                    <input type="text" name="tahun" />
                </p>
                <p>
                    <label for="nominal">Nominal :</label>
                    <input type="number" name="nominal" />
                </p>
                <p>
                     <input type="submit" value="tambah siswa" name="tambah_siswa" />
                </p>
</fieldset>
</form>
</body>
</html>