<?php
require_once 'database.php';
require_once 'ceklogin.php';


$datapinjam = query("SELECT * FROM peminjaman");

?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Lihat</title>
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

    <div class="container-fluid mt-3">
    <h4 class="text-center">List</h4>
    </div>
    

    <div class="container-fluid mt-4">
      <table class="table table-striped table-bordered table-sm text-center">
        <thead class="thead-dark">
          <tr>
              <th scope="col">id</th>
              <th scope="col">Username</th>
              <th scope="col">Kode Barang</th>
              <th scope="col">Nama Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Tanggal Pinjam</th>
              <th scope="col">Tanggal Kembali</th>
          </tr>
        </thead>

        <tbody>
        <?php $no = 1;?>
          <?php foreach($datapinjam as $pinjam) :?>
          <tr>
              <th><?= $no++; ?></th>
              <td><?= $pinjam ['username']; ?></td>
              <td><?= $pinjam ['kode_brg']; ?></td>
              <td><?= $pinjam ['namabrng']; ?></td>
              <td><?= $pinjam ['jumlahh']; ?></td>
              <td><?= date('d-m-Y | H-i-s', strtotime($pinjam['tanggal_pinjam'])); ?></td>
              <td><?= $pinjam ['tanggal_kembali']; ?></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>