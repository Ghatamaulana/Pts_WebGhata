<?php
session_start();

$conn = mysqli_connect("localhost","root","","pts_web");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_barang($post)
{
    global $conn;

    $kodebarang = htmlspecialchars( $post['kode_barang']);
    $namabarang = htmlspecialchars($post['nama_barang']);
    $merk = htmlspecialchars($post['merk']);
    $jumlah = htmlspecialchars($post['jumlah']);

    $query = "INSERT INTO barang VALUES('', '$kodebarang', '$namabarang', '$merk', '$jumlah')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function tambah_pinjam($post)
{
    global $conn;

    $username = htmlspecialchars($post['username']);
    $kodebarang = htmlspecialchars($post['kode_brg']);
    $namabarang = htmlspecialchars($post['namabrng']);
    $jumlah = htmlspecialchars($post['jumlahh']);
    $tanggalkembali= htmlspecialchars($post['tanggal_kembali']);

    $query = "INSERT INTO peminjaman VALUES('', '$username', '$kodebarang', '$namabarang', '$jumlah', CURRENT_TIMESTAMP(),'$tanggalkembali')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

function deletebarang($idb){
    global $conn;
    mysqli_query($conn, "DELETE FROM barang WHERE id_barang = $idb ");
    return mysqli_affected_rows($conn);
}

function deletepinjam($idp){
    global $conn;
    mysqli_query($conn, "DELETE FROM peminjaman WHERE id_pinjam = $idp ");
    return mysqli_affected_rows($conn);
}

function edit_pinjam($post)
{
    global $conn;

    $idp = $post['id_pinjam'];
    $username = htmlspecialchars($post['username']);
    $kodebarang = htmlspecialchars($post['kode_brg']);
    $namabarang = htmlspecialchars($post['namabrng']);
    $jumlah = htmlspecialchars($post['jumlahh']);
    $tanggalkembali= htmlspecialchars($post['tanggal_kembali']);

    $query = "UPDATE peminjaman SET username ='$username', kode_brg = '$kodebarang', namabrng = '$namabarang', jumlahh = '$jumlah', tanggal_kembali = '$tanggalkembali' WHERE id_pinjam = $idp ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit_barang($post)
{
    global $conn;

    $idb = $post['id_barang'];
    $kodebarang = htmlspecialchars( $post['kode_barang']);
    $namabarang = htmlspecialchars($post['nama_barang']);
    $merk = htmlspecialchars($post['merk']);
    $jumlah = htmlspecialchars($post['jumlah']);

    $query = "UPDATE barang SET kode_barang = '$kodebarang', nama_barang = '$namabarang', merk = '$merk', jumlah = '$jumlah' WHERE id_barang = $idb ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>