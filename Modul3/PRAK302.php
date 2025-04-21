<?php 
if(isset($_POST['cetak'])){
    $tinggi = $_POST['tinggi'];
    $gambar = $_POST['gambar']; 
    $i = 0;

    while ($i < $tinggi) {
        $j = 0;
        while ($j < $i) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            $j++;
        }

        $k = 0;
        while ($k < ($tinggi - $i)) {
            echo "<img src='$gambar' width='20' height='20'> ";
            $k++;
        }

        echo "<br>";
        $i++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga Gambar</title>
</head>
<body>
    <form action="" method="post">
        <label>Tinggi: </label>
        <input type="number" name="tinggi" required>
        <br>
        <label>URL Gambar: </label>
        <input type="text" name="gambar" required>
        <br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
</body>
</html>
