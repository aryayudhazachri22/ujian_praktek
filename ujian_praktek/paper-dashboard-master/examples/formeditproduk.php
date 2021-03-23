<?php
include 'koneksi.php';
    $nama_produk = $_GET['nama_produk'];
    $sql    = "SELECT * FROM produk WHERE nama_produk='$nama_produk'";
    $query  = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);

if ( mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Form Input Produk</title>
    <style>
        body {
            text-decoration-color: white;
        }
    </style>
</head>

<body>
<form action="edit.php" method="POST">
    <div class="container">
            <div class="card">
            <form method="POST" action="edit.php" enctype="multipart/form-data" >
                <h4 class="card-header bg-dark text-white text-center">Form Edit Produk</h4>
                    <div class="card-body">
                        <section class="base">
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6">
                                <input type="hidden" value="<?php echo $row['id_produk']; ?>" name="id_produk"/>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label for="nama_produk" class="col-sm-3 col-form-label">Nama :</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" value="<?php echo $row['nama_produk']?>" name="nama_produk" id="txt_nama_produk">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label for="gambar" class="col-sm-3 col-form-label">Gambar :</label>
                            <div class="col-sm-6">
                                <img src="<?php echo $row['gambar_produk']; ?>" style="width: 150px; height: 95px; float: left; margin-bottom: 10px;">
                                <input type="text" class="form-control" name="gambar_produk" >
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <label for="harga" class="col-sm-3 col-form-label">Harga:</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" value="<?php echo $row['harga_produk']?>" name="harga_produk" id="txt_harga">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-9 mt-4 mb-4">
                                <button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
                            </div>
                        </div>
                    </section>
                    </div>
            </form>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>
</html>
