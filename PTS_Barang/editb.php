<?php

require_once 'database.php';
require_once 'ceklogin.php';

$idb = $_GET['id_barang'];

$barang= query("SELECT * FROM barang WHERE id_barang=$idb")[0];

if (isset($_POST['suubmit'])) {
    if ( edit_barang($_POST) > 0 ) {
        echo "<script>alert('Data Barang Berhasil Di Ubah!');
               document.location.href = 'listbarang.php';
              </script>";
    } else {
        echo "<script>alert('Data Barang Gagal Di Ubah!');
               document.location.href = 'listbarang.php';
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

    <title>Ubah Barang</title>
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
            <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" value="<?= $barang['kode_barang']; ?>" class="form-control" name="kode_barang" id="kode_barang" placeholder="Kode Barang" required>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" value="<?= $barang['nama_barang']; ?>" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" required>
            </div>
            <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" value="<?= $barang['merk']; ?>" class="form-control" name="merk" id="merk" placeholder="Merk" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" value="<?= $barang['jumlah']; ?>" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" required>
            </div>
            <button type="submit" name="suubmit" class="btn btn-primary" style="float: right;">Ubah</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>