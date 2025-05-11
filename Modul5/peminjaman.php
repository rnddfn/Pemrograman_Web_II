<?php 
    require 'Model.php';
    $query = getData("SELECT * FROM peminjaman");

    if (isset($_GET['id_peminjaman'])) {
        deleteData("peminjaman", "id_peminjaman", $_GET['id_peminjaman']);
        header("Location: peminjaman.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Data Peminjaman</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $row): ?>
            <tr>
                <td><?= $row['id_peminjaman']; ?></td>
                <td><?= $row['tgl_pinjam']; ?></td>
                <td><?= $row['tgl_kembali']; ?></td>
                <td>
                    <a href="formpeminjaman.php?id_peminjaman=<?= $row['id_peminjaman']; ?>" class="btn btn-success">Edit</a>
                    <a href="peminjaman.php?id_peminjaman=<?= $row['id_peminjaman']; ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="formpeminjaman.php" class="btn btn-primary">Tambah</a>
    <a href="index.php" class="btn btn-outline-info">Kembali Ke Dashboard</a>
</div>
</body>
</html>