<?php
    include_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <a href="formBeli.php">Tambah Produk</a>
    <table border= "1px" class="table">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>
        <?php
            $query = mysqli_query($koneksi, 'SELECT * FROM produk');

            $no = 1;
            while($row=mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$row[nama_produk]</td>";
                echo "<td>$row[keterangan]</td>";
                echo "<td>$row[harga]</td>";
                echo "<td>$row[jumlah]</td>";
                echo "<td><a href ='prosesEditProduk.php?id=$row[id]'>Edit</a>
                <a href ='prosesDeleteProduk.php?id=$row[id]'>Delete</a></td>";

            $no++;
            }
        ?>

    </table>
</body>
</html>