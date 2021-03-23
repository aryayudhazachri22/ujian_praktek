<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nama_produk = $_POST['nama_produk'];
    $gambar_produk = $_POST['gambar_produk'];
    $harga_produk = $_POST['harga_produk'];

    $sql = "UPDATE produk SET nama_produk='$nama_produk', gambar_produk='$gambar_produk', harga_produk='$harga_produk', WHERE nama_produk='$nama_produk'";
    $query =mysqli_query($connect,$sql);
    if ($query) {
        header('Location: tables.php');
    }else{
        header('location: edit.php?status=gagal');
    }
}
?>