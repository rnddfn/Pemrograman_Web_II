<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Nilai: </label>
        <input type="number" name="input"> <br>
        <button type="submit" name="submit">Konversi</button>
    </form>
</body>
</html>

<?php 
    if(isset($_POST['submit'])){
        $nilai = $_POST['input'];

        echo "<h2>Hasil: ";
        if($nilai == 0){
            echo "Nol";
        } elseif($nilai > 0 && $nilai < 10){
            echo "Satuan";
        } elseif($nilai > 10 && $nilai < 20){
            echo "Belasan";
        } elseif(($nilai > 20 && $nilai < 100) || $nilai == 10){
            echo "Puluhan";
        } elseif($nilai > 100 && $nilai < 1000){
            echo "Ratusan";
        } else {
            echo "Anda Menginput Melebihi Limit Bilangan";
        }
        echo "</h2>";
    }
?>