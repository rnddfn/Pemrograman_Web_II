<?php
if (isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['name3'])) {
    $nama1 = $_POST['name1'];
    $nama2 = $_POST['name2'];
    $nama3 = $_POST['name3'];

        if ($nama1 < $nama2 && $nama1 < $nama3) {
            echo $nama1 . "<br>";
            if ($nama2 < $nama3) {
                echo $nama2 . "<br>";
                echo $nama3 . "<br>";
            } else {
                echo $nama3 . "<br>";
                echo $nama2 . "<br>";
            }
        } elseif ($nama2 < $nama1 && $nama2 < $nama3) {
            echo $nama2 . "<br>";
            if ($nama1 < $nama3) {
                echo $nama1 . "<br>";
                echo $nama3 . "<br>";
            } else {
                echo $nama3 . "<br>";
                echo $nama1 . "<br>";
            }
        } else {
            echo $nama3 . "<br>";
            if ($nama1 < $nama2) {
                echo $nama1 . "<br>";
                echo $nama2 . "<br>";
            } else {
                echo $nama2 . "<br>";
                echo $nama1 . "<br>";
            }
        }
}
?>

<form method="POST" action="">
    <label>Nama 1: </label>
    <input type="text" name="name1">
    <br>
    
    <label>Nama 2: </label>
    <input type="text" name="name2">
    <br>
    
    <label>Nama 3: </label>
    <input type="text" name="name3">
    <br>
    
    <input type="submit" value="Urutkan">
</form>