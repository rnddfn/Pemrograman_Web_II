<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="panjang">Panjang: </label>
        <input type="number" name="panjang" required> <br>

        <label for="lebar">Lebar: </label>
        <input type="number" name="lebar" required> <br>

        <label for="nilai">Nilai: </label>
        <input type="text" name="nilai" required> <br>

        <button type="submit" name="cetak">Cetak</button>
    </form>

    <?php 
    if(isset($_POST['cetak'])){
        $panjang = intval($_POST['panjang']);
        $lebar = intval($_POST['lebar']);
        $nilai = trim($_POST['nilai']);

        $nilaiArray = array_filter(explode(" ", $nilai));
        $totalElemen = count($nilaiArray);

        if($totalElemen != ($panjang * $lebar)) {
            echo 'Panjang nilai tidak sesuai dengan ukuran matriks';
        } else {
            echo "<table border='1' cellpadding='5' cellspacing='0'>";

            $index = 0;
            for($i = 0; $i < $panjang; $i++){
                echo "<tr>";
                for($j = 0; $j < $lebar; $j++){
                    echo "<td>".$nilaiArray[$index]."</td>";
                    $index++;
                }
                echo "</tr>";
            }

            echo "</table>";
        }
    }
    ?>
</body>
</html>