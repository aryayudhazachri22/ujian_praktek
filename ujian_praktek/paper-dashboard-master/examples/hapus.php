<?php
include 'koneksi.php';
$nama_produk = $_GET["nama_produk"];

    $sql = "DELETE FROM `produk` WHERE nama_produk='$nama_produk'";
    $query = mysqli_query($connect, $sql);

    if(!$query) {
        die ("Gagal menghapus data: ".mysqli_errno($connect).
        " - ".mysqli_error($connect));
    } else {
        echo "<script>alert('Data berhasil dihapus.');window.location='tables.php';</script>";
    }