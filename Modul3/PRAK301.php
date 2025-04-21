<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Jumlah peserta: </label>
        <input type="text" name="peserta"><br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>
</html>

<?php 
    $dariNol = 1;
    $jumlahPeserta = 0;
    if(isset($_POST['submit'])){
        $jumlahPeserta = $_POST['peserta'];
    }

    while($dariNol <= $jumlahPeserta){
       if($dariNol % 2== 0){
        echo "<p style='color:green;'>" . 'Peserta ke-'. $dariNol. '<br>';
    } else{
        echo"<p style='color:red;'>" . 'Peserta ke-'. $dariNol. '<br>';
    }
       $dariNol++;
    }
?>