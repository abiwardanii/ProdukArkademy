<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "arkademy";

   $koneksi= mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal")
?>