<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	// $id = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$gambar_produk = $_POST['gambar_produk'];
    $harga_produk = $_POST['harga_produk'];
	
    $sql = "INSERT INTO produk (nama_produk, gambar_produk, harga_produk) VALUES ('$nama_produk', '$gambar_produk','$harga_produk')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tables.php');
    }else{
        header('Location: simpandata.php?status=gagal');
    }
}
?>