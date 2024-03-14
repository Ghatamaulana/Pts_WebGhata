<?php

require_once 'database.php';
require_once 'ceklogin.php';

$idb = $_GET['id_barang'];

if(deletebarang($idb) > 0) {
    echo "<script>alert('Data Barang Berhasil Di Hapus!');
               document.location.href = 'listbarang.php';
              </script>";
} else {
    echo "<script>alert('Data Barang Gagal Di Hapus!');
               document.location.href = 'listbarang.php';
              </script>";
}
?>