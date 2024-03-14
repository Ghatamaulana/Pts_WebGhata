<?php

require_once 'database.php';
require_once 'ceklogin.php';

$idp = $_GET['id_pinjam'];

if(deletepinjam($idp) > 0) {
    echo "<script>alert('Data Barang Berhasil Di Hapus!');
               document.location.href = 'listpinjam.php';
              </script>";
} else {
    echo "<script>alert('Data Barang Gagal Di Hapus!');
               document.location.href = 'listpinjam.php';
              </script>";
}
?>