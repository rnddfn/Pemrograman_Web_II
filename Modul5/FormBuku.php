<?php 
require 'model.php';

$isEdit = false;

$Buku = [
    'id_buku' => '',
    'judul_buku' => '',
    'penulis' => '',
    'penerbit' => '',
    'tahun_terbit' => ''
];

if (isset($_GET['id_buku'])) {
    $isEdit = true;
    $idBuku = $_GET['id_buku'];
    $data = getData("SELECT * FROM buku WHERE id_buku = $idBuku");
    if ($data) {
        $Buku = $data[0];
    }
}

if (isset($_POST["submit"])) {
    if ($isEdit) {
        editData("buku", "id_buku", $_GET['id_buku'], $_POST);
    } else {
        insertData("buku", $_POST);
    }
    header("Location: buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Buku</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center"><?php echo $isEdit ? 'Edit Data Buku' : 'Tambah Data Buku'; ?></h1>

    <form method="post">
        <?php if ($isEdit): ?>
            <input type="hidden" name="id_buku" value="<?= htmlspecialchars($Buku['id_buku']); ?>">
        <?php endif; ?>

        <div class="mb-3 row">
            <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="judul_buku" id="judul_buku" value="<?= htmlspecialchars($Buku['judul_buku']); ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penulis" class="col-sm-2 col-form-label">Penulis:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="penulis" id="penulis" value="<?= htmlspecialchars($Buku['penulis']); ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="penerbit" class="col-sm-2 col-form-label">Penerbit:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= htmlspecialchars($Buku['penerbit']); ?>" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun Terbit:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= htmlspecialchars($Buku['tahun_terbit']); ?>" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" name="submit" class="btn <?= $isEdit ? 'btn-success' : 'btn-primary'; ?>">
                    <?= $isEdit ? 'Update' : 'Tambah'; ?>
                </button>
                <a href="buku.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>