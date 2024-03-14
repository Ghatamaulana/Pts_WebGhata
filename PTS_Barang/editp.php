<?php

require_once 'database.php';
require_once 'ceklogin.php';

$idp = $_GET['id_pinjam'];

$pinjam = query("SELECT * FROM peminjaman WHERE id_pinjam=$idp")[0];

if (isset($_POST['submiit'])) {
    if ( edit_pinjam($_POST) > 0 ) {
        echo "<script>alert('Data Peminjaman Berhasil Di Ubah!');
               document.location.href = 'listpinjam.php';
              </script>";
    } else {
        echo "<script>alert('Data Peminjaman Gagal Di Ubah!');
               document.location.href = 'listpinjam.php';
              </script>";
    }
}

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ubah Peminjaman</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <a class="navbar-brand" href="#">
                <img src="/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
            </a>
            <a class="navbar-brand" href="index.php">Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-1 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="listbarang.php">List Barang</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="listpinjam.php">Peminjaman</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="listuser.php">List User</a>
                </li>
            </ul>
            <form class="form my-2 my-lg-0">

                <a href="logout.php" class="btn btn-outline-success my-1 my-sm-0">logout</a>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <h4 class="text-center">Ubah Barang</h4>
        <form class="" method="post">
            <input type="hidden" name="id_pinjam" value="<?= $pinjam['id_pinjam']; ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" value="<?= $pinjam['username']; ?>" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="kode_brg">Kode Barang</label>
                <input type="text" value="<?= $pinjam['kode_brg']; ?>" class="form-control" name="kode_brg" id="kode_brg" placeholder="Kode Barang" required>
            </div>
            <div class="form-group">
                <label for="namabrng">Nama Barang</label>
                <input type="text" value="<?= $pinjam['namabrng']; ?>" class="form-control" name="namabrng" id="namabrng" placeholder="Nama Barang" required>
            </div>
            <div class="form-group">
                <label for="jumlahh">Jumlah</label>
                <input type="text" value="<?= $pinjam['jumlahh']; ?>" class="form-control" name="jumlahh" id="jumlahh" placeholder="jumlahh" required>
            </div>
            <div class="form-group">
                <label for="tanggal_kembali">Tanggal Kembali</label>
                <input type="date" value="<?= $pinjam['tanggal_kembali']; ?>" class="form-control" name="tanggal_kembali" id="tanggal_kembali" placeholder="Tanggal Kembali" required>
            </div>
            <button type="submit" name="submiit" class="btn btn-primary" style="float: right;">Ubah</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>