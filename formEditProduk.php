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
    <div class="container">
        <form action="prosesEditProduk.php?id=<?php echo $id; ?>" method="post">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" value="<?php echo $row['nama_produk'] ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Ketarangan</label>
            <input type="text" name="keterangan" value="<?php echo $row['keterangan'] ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" value="<?php echo $row['harga'] ?>" class="form-control">
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input type="text" name="jumlah" value="<?php echo $row['jumlah'] ?>" class="form-control">
        </div>
            
            <button input type="submit" name="edit" value="edit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</body>
</html>
