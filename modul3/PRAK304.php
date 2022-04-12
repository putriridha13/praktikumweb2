<?php
    $bintang = 0;
    if(isset($_POST['bintang'])){
        $bintang = $_POST['bintang'];
    }

    if(isset($_POST['tambah'])){
        $bintang++;
    }
    elseif(isset($_POST['kurang'])){
        $bintang--;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal 4</title>
</head>

<body>
    <?php 
    if($bintang == 0): ?>

    <form action="" method="post">
        Jumlah Bintang
        <input type="number" name="bintang"> <br>
        <button type="submit" name="masuk">Submit</button>
    </form>
    <?php
    endif;



    if($bintang != 0): 
    echo "Jumlah bintang $bintang <br><br>";
    for ($i=0; $i<$bintang; $i++){
        echo "<img src='star-images.png' width='50px' height='50px'>";
    }
    ?>

    <form action="" method="post">
        <input type="hidden" name="bintang" value="<?= $bintang; ?>">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>

    <?php
    endif;?>
</body>

</html>