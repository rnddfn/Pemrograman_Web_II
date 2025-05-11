<?php 
require 'model.php';
$query = getData("SELECT * FROM buku");

if(isset($_GET['id_buku'])) {
    deleteData("buku", "id_buku", $_GET['id_buku']);
    header("Location: Buku.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Buku</h1>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $result): ?>    
            <tr>
            <th scope="col"><?php echo $result['id_buku'];?></th>
            <td><?php echo $result['judul_buku'];?></td>
            <td><?php echo $result['penulis'];?></td>
            <td><?php echo $result['penerbit'];?></td>
            <td><?php echo $result['tahun_terbit'];?></td>
            <td>    
                <a href="formbuku.php?id_buku=<?= $result['id_buku']; ?>" class="btn btn-success">Edit</a>
                <a href="buku.php?id_buku=<?= $result['id_buku']; ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
            </td>
            </tr>
            <?php
             endforeach;
            ?>
        </tbody>
        </table>
        <a href="formBuku.php" type="button" class="btn btn-primary">Tambah</a>
        <a href="index.php" class="btn btn-outline-info">Kembali Ke Dashboard</a>
    </div>
        
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>