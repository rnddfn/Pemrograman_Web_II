<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label> Batas Bawah: </label><input type="number" name="batasBawah"><br>
        <label> Batas Atas: </label><input type="number" name="batasAtas"><br>
        <button type="submit" name="cetak" value="Cetak">Cetak</button><br>
    </form>
</body>
</html>

<?php 
    if(isset($_POST["cetak"])){
        $batasBawah = $_POST['batasBawah'];
        $batasAtas = $_POST['batasAtas'];
        echo"<br>";

        do{
            if(($batasBawah + 7) % 5 == 0 ){
                echo"<img src=resource/star.png width='10' height='10'> ";
            } else{
                echo $batasBawah . " ";    
            }
            $batasBawah++;
        } while($batasBawah <= $batasAtas);
    }
?>