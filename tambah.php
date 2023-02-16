<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_user">Nama user : </label>
                <input type="text" name="nama_user">
            </p>
            <p>
                <label for="jabatan">Jabatan : </label>
                <input type="text" name="jabatan">
            </p>
            <p>
                <label for="nama_bahan">Nama bahan : </label>
                <input type="text" name="nama_bahan">
            </p>
            <p>
                <label for="jenis_bahan">Jenis bahan : </label>
                <input type="text" name="jenis_bahan">
            </p>
            <p>
                <label for="stok">Stok : </label>
                <input type="number" name="stok">
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="number" name="harga">
            </p>
            <p>
                <label for="kondisi">Kondisi : </label>
                <input type="radio" name="kondisi" value="baik">Baik
                <input type="radio" name="kondisi" value="Rusak">Rusak
            </p>
            <p>
                <label for="tanggal_masuk">Tanggal masuk : </label>
                <input type="date" name="tanggal_masuk">
            </p>
            <p>
                <input type="submit" value="Tambah" name="tambah">
            </p>
        </fieldset>
</form>
</body>
</html>