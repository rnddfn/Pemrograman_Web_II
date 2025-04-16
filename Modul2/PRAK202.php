<?php 
    $errorName = $errorNim = $errorGender = '';

    if(isset($_POST['submit'])){
        if(empty(trim($_POST['nama']))){
            $errorName = 'Nama tidak boleh kosong';
        } 
        if(empty(trim($_POST['nim']))){
            $errorNim = 'NIM tidak boleh kosong';
        }
        if(empty(trim($_POST['gender']))){
            $errorGender = 'Gender tidak boleh kosong';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form action="PRAK202.php" method="POST">
        <label>Nama: </label>
        <input type="text" name="nama" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">
        <span style="color:red;"><?= ' *' .$errorName ?></span>
        <br>

        <label>NIM: </label>
        <input type="text" name="nim" value="<?= isset($_POST['nim']) ? htmlspecialchars($_POST['nim']) : '' ?>">
        <span style="color:red;"><?=' *' . $errorNim ?></span>
        <br><br>

        <label>Gender: </label>
        <span style="color:red;"><?=' *' . $errorGender ?></span>
        <br>
        <input type="radio" name="gender" value="Laki-laki" id="laki-laki" 
        <?= (isset($_POST['gender']) && $_POST['gender'] == "Laki-laki") ? "checked" : "" ?>> Laki-laki 
        <br>
        <input type="radio" name="gender" value="Perempuan" id="perempuan" 
        <?= (isset($_POST['gender']) && $_POST['gender'] == "Perempuan") ? "checked" : "" ?>> Perempuan 
        <br><br>

        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    if (isset($_POST['submit'])) {
        if (
            !empty($_POST['nama']) &&
            !empty($_POST['nim']) && !empty($_POST['gender'])
        ) {
            echo "<h2><b>Output:</b></h2>";
            if (!empty($_POST["nama"])) {
                echo $_POST["nama"] . "<br>";
            }
            if (!empty($_POST["nim"])) {
                echo $_POST["nim"] . "<br>";
            }
            if (!empty($_POST["gender"])) {
                echo $_POST["gender"];
            }
        }
    }

?>
