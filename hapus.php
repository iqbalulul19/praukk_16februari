<?php
include("koneksi.php");
$kode = $_GET['id_bahan'];

$sql = "DELETE FROM tb_bahan WHERE id_bahan = '$kode'";
$query = mysqli_query($koneksi, $sql);

$sql = "DELETE FROM tb_user WHERE id_user = '$kode'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header("location:tampil.php?status=sukses");
} else {
    die("akses dilarang");
}
?>