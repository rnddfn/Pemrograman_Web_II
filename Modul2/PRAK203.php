<?php 
    if(isset($_POST['submitBtn'])){
        $suhuAwal = $_POST['nilai'];
        $konversiDari = $_POST['konversiDari'];
        $konversiKe = $_POST['konversiKe'];
        $suhuAkhir = $suhuAwal;
        if ($konversiDari == 'celcius') {
            if ($konversiKe == 'kelvin') {
                $suhuAkhir = $suhuAwal + 273.15;
            } elseif ($konversiKe == 'fahrenheit') {
                $suhuAkhir = ($suhuAwal * 9/5) + 32;
            } elseif ($konversiKe == 'rheamur') {
                $suhuAkhir = $suhuAwal * 4/5;
            }else{}
        } elseif ($konversiDari == 'fahrenheit') {
            if ($konversiKe == 'celcius') {
                $suhuAkhir = ($suhuAwal - 32) * 5/9;
            } elseif ($konversiKe == 'kelvin') {
                $suhuAkhir = ($suhuAwal - 32) * 5/9 + 273.15;
            } elseif ($konversiKe == 'rheamur') {
                $suhuAkhir = ($suhuAwal - 32) * 4/9;
            } else{}
        } elseif ($konversiDari == 'kelvin') {
            if ($konversiKe == 'celcius') {
                $suhuAkhir = $suhuAwal - 273.15;
            } elseif ($konversiKe == 'fahrenheit') {
                $suhuAkhir = ($suhuAwal - 273.15) * 9/5 + 32;
            } elseif ($konversiKe == 'rheamur') {
                $suhuAkhir = ($suhuAwal - 273.15) * 4/5;
            } else{}
        } elseif ($konversiDari == 'rheamur') {
            if ($konversiKe == 'celcius') {
                $suhuAkhir = $suhuAwal * 5/4;
            } elseif ($konversiKe == 'fahrenheit') {
                $suhuAkhir = ($suhuAwal * 9/4) + 32;
            } elseif ($konversiKe == 'kelvin') {
                $suhuAkhir = ($suhuAwal * 5/4) + 273.15;
            } else{}
        }
        
        $satuan = "";
        if ($konversiKe == "celcius") {
            $satuan = "°C";
        } elseif ($konversiKe == "fahrenheit") {
            $satuan = "°F";
        } elseif ($konversiKe == "rheamur") {
            $satuan = "°R";
        } elseif ($konversiKe == "kelvin") {
            $satuan = "°K";
        }
    
        $hasilKonversi = "<h2>Hasil Konversi: $suhuAkhir $satuan</h2>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Nilai: </label>    
        <input type="number" name="nilai"><br>
        Dari: <br>
        <input type="radio" name="konversiDari" value="celcius"> Celcius <br>
        <input type="radio" name="konversiDari" value="fahrenheit"> Fahrenheit <br>
        <input type="radio" name="konversiDari" value="rheamur"> Rheamur <br>
        <input type="radio" name="konversiDari" value="kelvin"> Kelvin <br>
        Ke: <br>
        <input type="radio" name="konversiKe" value="celcius"> Celcius <br>
        <input type="radio" name="konversiKe" value="fahrenheit"> Fahrenheit <br>
        <input type="radio" name="konversiKe" value="rheamur"> Rheamur <br>
        <input type="radio" name="konversiKe" value="kelvin"> Kelvin <br>
        <button type="submit" name="submitBtn">Konversi</button>
    </form>

    <?php 
    if(isset($hasilKonversi)){
        echo $hasilKonversi;
    }
    ?>
</body>
</html>