<?php 
require 'model.php';

$Member = [
    'id_member' => '',
    'nama_member' => '',
    'nomor_member' => '',
    'alamat' => '',
    'tgl_terakhir_bayar' => '',
];

if (isset($_GET['id_member'])) {
    $idMember = $_GET['id_member'];
    $Member = getData("SELECT * FROM member WHERE id_member = $idMember")[0];
}

if (isset($_POST["submit"])) {
    if (!empty($_POST['id_member'])) {
        editData("member", "id_member", $_POST['id_member'], $_POST);
    } else {
        insertData("member", $_POST);
    }
    header("Location: member.php");
    exit;
}

extract($Member);
$isEdit = !empty($id_member);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center"><?php echo $isEdit ? 'Edit Data Member' : 'Tambah Data Member'; ?></h1>
        
        <form method="post">
            <?php if ($isEdit): ?>
                <input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
            <?php endif; ?>

            <div class="mb-3 row">
                <label for="nama_member" class="col-sm-2 col-form-label">Nama Member:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_member" id="nama_member" value="<?php echo $nama_member; ?>" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nomor_member" class="col-sm-2 col-form-label">Nomor Member:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomor_member" id="nomor_member" value="<?php echo $nomor_member; ?>" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $alamat; ?>" required>
                </div>
            </div>

            <?php if ($isEdit): ?>
            <div class="mb-3 row">
                <label for="tgl_terakhir_bayar" class="col-sm-2 col-form-label">Tanggal Terakhir Bayar:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" value="<?php echo $tgl_terakhir_bayar; ?>" required>
                </div>
            </div>
            <?php endif; ?>

            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" name="submit" class="btn <?php echo $isEdit ? 'btn-success' : 'btn-primary'; ?>">
                        <?php echo $isEdit ? 'Update' : 'Tambah'; ?>
                    </button>
                    <a href="member.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>