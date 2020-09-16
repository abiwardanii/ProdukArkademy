<?php
 include_once('koneksi.php');
 
$id = $_GET['id'];


 $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id='$id'");
 $row  = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <form action="prosesEditProduk.php?id=<?php echo $id; ?>" method="post">
        <label>Nama Produk</label>
        <div><input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>"> </div>

        <label>Ketarangan</label>
        <div><input type="text" name="keterangan" value="<?php echo $row['keterangan'] ?>"></div>

        <label>Harga</label>
        <div><input type="text" name="harga" value="<?php echo $row['harga'] ?>"></div>

        <label>Jumlah</label>
        <div><input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>"></div> 
        
        <div><input type="submit" name="beli" value="Buy"></div>
    </form>
</body>
</html>