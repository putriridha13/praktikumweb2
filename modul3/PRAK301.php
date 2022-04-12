<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 1</title>
</head>

<body>
    <form action="" method="post">
        Jumlah Peserta: <input type="text" name="input"> <br>
        <button type="submit" name="submit"> Cetak </button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['input'];
        $perulangan = 1;

        while($perulangan <= $jumlah) {

            if ($perulangan % 2 != 0) {
                echo "<h3><font color='red'>Peserta ke-$perulangan</font></h3>";
            } else {
                echo "<h3><font color='green'>Peserta ke-$perulangan</font></h3>";
            }
            $perulangan++;

        }
    }
    ?>
</body>

</html>