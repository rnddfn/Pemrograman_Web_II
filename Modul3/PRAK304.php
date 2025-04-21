<?php
    $jumlahBintang = NULL;
    if(isset($_POST['jumlahBintang'])){
        $jumlahBintang = $_POST['jumlahBintang'];
    }

    if(isset($_POST['tambah'])){
        $jumlahBintang++;
    }

    if(isset($_POST['kurang'])){
        $jumlahBintang--;
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
<?php  
            if($jumlahBintang != NULL){
                echo "Jumlah bintang ".$jumlahBintang."<br>";
            }
            for ($i = 0; $i < $jumlahBintang; $i++) {             
                echo "<img src='resource/star.png' width='50' height='50'>";         
            }     
        ?>   

<?php if ($jumlahBintang == 0): ?>
        <form action="" method="POST">         
            <label>Jumlah Bintang</label>         
            <input type="number" name="jumlahBintang" required><br>       
            <button type="submit" name="submit">Submit</button>     
        </form>      
        <br>
    <?php endif; ?>

        <br><br>
        <?php if ($jumlahBintang != 0):?>
        <form action="" method="post">        
            <button type="submit" name="tambah">Tambah</button>   
            <input type='hidden' name='jumlahBintang' value='<?= $jumlahBintang; ?>'/>      
            <button type="submit" name="kurang">Kurang</button>     
        </form> 
        <?php endif; ?>
</body>
</html>