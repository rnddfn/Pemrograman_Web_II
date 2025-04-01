<?php 
    $smartphones = array("1" => "Samsung Galaxy S22",
                         "2" => "Samsung Galaxy S22+",
                         "3" => "Samsung Galaxy A03",
                         "4" => "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td{
            border: 1px solid black;
        }
        th{
            background-color: red;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th><h2>Daftar Smartphone Samsung</h2></th>
        </tr>
        <tr>
            <td><?= $smartphones["1"] ?></td>
        </tr>
        <tr>
            <td><?= $smartphones["2"] ?></td>
        </tr>
        <tr>
            <td><?= $smartphones["3"] ?></td>
        </tr>
        <tr>
            <td><?= $smartphones["4"] ?></td>
        </tr>
    </table>
</body>
</html>

