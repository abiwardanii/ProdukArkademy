<?php
    include_once('koneksi.php');

    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    mysqli_query($koneksi, "INSERT INTO produk (nama_produk,keterangan,harga,jumlah) VALUES('$nama_produk','$keterangan', '$harga', '$jumlah')");
    
    header("location: index.php");
?>