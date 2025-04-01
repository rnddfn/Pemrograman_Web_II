<?php 
    $smartphones = array("Samsung Galaxy S22",
                        "Samsung Galaxy S22+",
                        "Samsung Galaxy A03",
                        "Samsung Galaxy Xcover 5");
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
    </style>
</head>
<body>
    <table>
        <tr><td><b>Daftar Smartphone Samsung</b></td></tr>
        <?php 
            foreach($smartphones as $smartphone) {
                echo "<tr><td>$smartphone</td></tr>";
            }
        ?>
    </table>
</body>
</html>