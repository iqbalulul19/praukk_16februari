<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Data Alat Dan Bahan</h1>
<?php
include("koneksi.php");
?>
    
    <table border="1">
            <th>Id</th>
            <th>Nama user</th>
            <th>Jabatan</th>
            <th>Nama bahan</th>
            <th>Jenis bahan</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Kondisi</th>
            <th>Tanggal masuk</th>
            <th>Aksi</th>

    <?php
    include("koneksi.php");
    $query = mysqli_query($koneksi, "SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan = tb_bahan.id_bahan");

    while($alat=mysqli_fetch_array($query)){
        echo"<tr>";
            echo"<td>".$alat['id_bahan']."</td>";
            echo"<td>".$alat['nama_user']."</td>";
            echo"<td>".$alat['jabatan']."</td>";
            echo"<td>".$alat['nama_bahan']."</td>";
            echo"<td>".$alat['jenis_bahan']."</td>";
            echo"<td>".$alat['stok']."</td>";
            echo"<td>".$alat['harga']."</td>";
            echo"<td>".$alat['kondisi']."</td>";
            echo"<td>".$alat['tanggal_masuk']."</td>";
            echo"<td>";
            echo "<a href='edit.php?id_bahan=".$alat['id_bahan']."'>Edit</a> |";
            echo "<a href='hapus.php?id_bahan=".$alat['id_bahan']."'>Hapus</a>";
            echo "</td>";
        echo "</tr>";  

    }
    ?>
    <a href="tambah.php">Tambah</a>
    </table>
</body>
</html>