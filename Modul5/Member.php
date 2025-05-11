<?php 
require 'model.php';
$query = getData("SELECT * FROM member");

if (isset($_GET['id_member'])) {
    deleteData("member", "id_member", $_GET['id_member']);
    header("Location: Member.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Member</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Member</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Alamat</th>
                    <th>Tanggal Daftar</th>
                    <th>Tanggal Terakhir Bayar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $result): ?>
                <tr>
                    <td><?= $result['id_member']; ?></td>
                    <td><?= $result['nama_member']; ?></td>
                    <td><?= $result['nomor_member']; ?></td>
                    <td><?= $result['alamat']; ?></td>
                    <td><?= $result['tgl_mendaftar']; ?></td>
                    <td><?= $result['tgl_terakhir_bayar']; ?></td>
                    <td>
                        <a href="formMember.php?id_member=<?= $result['id_member']; ?>" class="btn btn-success">Edit</a>
                        <a href="member.php?id_member=<?= $result['id_member']; ?>" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="formMember.php" class="btn btn-primary">Tambah</a>
        <a href="index.php" class="btn btn-outline-info">Kembali Ke Dashboard</a>
    </div>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>