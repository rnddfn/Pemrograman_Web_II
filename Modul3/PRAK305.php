<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="input">
        <button type="submit" name="submit" value="Submit">submit</button>
    </form><br>
</body>
</html>

<?php 
if(isset($_POST['submit'])){
    $input = $_POST['input'];
    echo"<b>Input</b><br><br>";
    echo $input. "<br><br>";
    $input = strtolower($_POST['input']);
    $jumlahHuruf = strlen($input);

    echo"<b>Output</b><br><br>";
    for($i = 0; $i < $jumlahHuruf; $i++){
        for($j = 0; $j < $jumlahHuruf; $j++){
            if($j == 0){
                echo strtoupper($input[$i]);
            } else {
                echo $input[$i];
            }
        }
    }
}
?>