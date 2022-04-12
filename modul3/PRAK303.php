<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>
</head>

<body>
    <form action="" method="post">
        Batas Bawah : <input type="text" name="bawah" value="<?=isset($_POST['bawah']) ? $_POST['bawah'] : ''?>"> <br>
        Batas Atas : <input type="text" name="atas" value="<?=isset($_POST['atas']) ? $_POST['atas'] : ''?>"> <br>
        <button type="submit" name="submit"> Cetak </button>

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $kecil = $_POST['bawah'];
        $besar = $_POST['atas'];

        do {
            if(($kecil + 7) % 5 == 0) {
                echo "<img src='star-images.png' width='20px' height='20px'>";
            }
            else {
                echo "$kecil ";
            }
            $kecil++;
        } while ($kecil <=$besar);
    }
    ?>
</body>

</html>