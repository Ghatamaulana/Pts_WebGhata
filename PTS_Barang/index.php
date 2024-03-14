<?php
require_once 'database.php';
require_once 'ceklogin.php';
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
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
               <button class="btn btn-outline-success my-1 my-sm-0"> <a href="logout.php">logout</a></button>
            </form>
        </div>
    </nav>

    <div class="container text-center">
        <div class="card-body text-center ">
        <h4 class="card-title">Selamat Datang</h4>
        <p class="mt-2 font-weight-normal">Website Ini menyediakan berbagai macam-macam barang untuk dipinjamkan, orang tua, orang dewasa, dan anak-anak boleh meminjam barang.</p>

        <hr>
            <div class="row text-center">

                <div class="col-sm-4">
                    <div class="card" style="width: 19rem;">
                        <img class="rounded mx-auto d-block" src="image/logitechG733.jpg" style="object-fit: cover; width: 40%; height: 40%;">
                        <h6 class="card-title">Logitech G733</h6>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 19rem;">
                        <img class="rounded mx-auto d-block" src="image/micsoundtech.jpeg" style="object-fit: cover; width: 40%; height: 40%;">
                        <h6 class="card-title">Mic SoundTech</h6>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 19rem; height: 153px;">
                        <img class="rounded mx-auto d-block" src="image/keyboardrexus.jpg" style="object-fit: cover; width: 70%; height: 70%;">
                        <h6 class="card-title">Keyboard Rexus</h6>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card" style="width: 19rem; height: 167px;">
                        <img class="rounded mx-auto d-block" src="image/soundboardgoxlr.png" style="object-fit: cover; width: 45%; height: 79%;">
                        <h6 class="card-title">SoundBoard GoxLr </h6>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 19rem;">
                        <img class="rounded mx-auto d-block" src="image/jblquantumduo.jpg" style="object-fit: cover; width: 40%; height: 40%;">
                        <h6 class="card-title">Jbl Quantum Duo</h6>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card" style="width: 19rem;">
                        <img class="rounded mx-auto d-block" src="image/monitorasus.jpg" style="object-fit: cover; width: 40%; height: 40%;">
                        <h6 class="card-title">Monitor Asus Tuf</h6>
                    </div>
                </div>
            </div>
            <br>
            <a href="lihat.php" class="btn btn-primary">Lihat</a>
        </div>
            <hr>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>