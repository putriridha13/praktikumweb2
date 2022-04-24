<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 1</title>
</head>

<body>
    <form action="">
        Panjang:
        <input type="text" name="baris" value="<?=isset($_GET['baris']) ? $_GET['baris'] : ''?>"> <br>
        Lebar:
        <input type="text" name="kolom" value="<?=isset($_GET['kolom']) ? $_GET['kolom'] : ''?>"> <br>
        Nilai:
        <input type="text" name="nilai" value="<?=isset($_GET['nilai']) ? $_GET['nilai'] : ''?>"> <br>
        <button type="submit" name="cetak">Cetak</button>
        <?php
        if(isset($_GET['cetak'])) {
            $baris = $_GET['baris'];
            $kolom = $_GET['kolom'];
            $nilai = $_GET['nilai'];
            $angka = explode(" ",$nilai);
            $data = count($angka);
            
            if(($baris * $kolom) == $data) {
                $hitung = 0;
                echo "<br> <br>";
                echo "<table border=1>";
                for($i=0; $i<$baris; $i++){
                    echo"<tr>";
                    for($j=0; $j<$kolom; $j++){
                        $hasil [$i][$j] = $angka[$hitung];
                        echo"<td width=50px height=50px>" . $hasil[$i][$j]. "</td>";
                        $hitung++;
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            else {
                echo "<br>";
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
        ?>
    </form>
</body>

</html>