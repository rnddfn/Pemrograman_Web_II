<?php 
require 'Model.php';

$isEdit = isset($_GET['id_peminjaman']);

$Peminjaman = [
    'id_peminjaman' => '',
    'tgl_pinjam' => '',
    'tgl_kembali' => '',
];

if ($isEdit) {
    $idPeminjaman = $_GET['id_peminjaman'];
    $Peminjaman = getData("SELECT * FROM peminjaman WHERE id_peminjaman = $idPeminjaman")[0];
}

if (isset($_POST["submit"])) {
    if ($isEdit) {
        editData("peminjaman", "id_peminjaman", $_GET['id_peminjaman'], $_POST);
    } else {
        insertData("peminjaman", $_POST);
    }
    header("Location: peminjaman.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center"><?php echo $isEdit ? 'Edit Data Peminjaman' : 'Tambah Data Peminjaman'; ?></h1>

    <form method="post">
        <div class="mb-3 row">
            <label for="tgl_pinjam" class="col-sm-2 col-form-label">Tanggal Pinjam:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $Peminjaman['tgl_pinjam']; ?>" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Kembali:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?php echo $Peminjaman['tgl_kembali']; ?>" required>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" name="submit" class="btn <?php echo $isEdit ? 'btn-success' : 'btn-primary'; ?>">
                    <?php echo $isEdit ? 'Update' : 'Tambah'; ?>
                </button>
                <a href="peminjaman.php" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>