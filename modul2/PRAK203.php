<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>

</head>

<body>
    <?php
    if(isset($_POST["submit"])) {
        $suhu = $_POST["suhu"];
        $suhuAwal = $_POST["suhuAwal"];
        $suhuAkhir = $_POST["suhuAkhir"];
    }
    ?>
    <form action=" " method="post">
        Nilai : <input type="number" name="suhu" value="<?php if (isset($suhu)) echo $suhu ?>"> <br>
        Dari: <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Celcius") echo "checked"; ?>
            value="Celcius"> Celcius <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Fahrenheit") echo "checked"; ?>
            value="Fahrenheit"> Fahrenheit <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Rheamur") echo "checked"; ?>
            value="Rheamur"> Rheamur <br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Kelvin") echo "checked"; ?>
            value="Kelvin"> Kelvin <br>

        Ke : <br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir == "Celcius") echo "checked"; ?>
            value="Celcius"> Celcius <br>
        <input type="radio" name="suhuAkhir"
            <?php if (isset($suhuAkhir) && $suhuAkhir == "Fahrenheit") echo "checked"; ?> value="Fahrenheit"> Fahrenheit
        <br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir == "Rheamur") echo "checked"; ?>
            value="Rheamur"> Rheamur <br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir == "Kelvin") echo "checked"; ?>
            value="Kelvin"> Kelvin <br>
        <button type="submit" name="submit"> Konversi </button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        switch ($suhuAwal) {
            case "Celcius":
                switch ($suhuAkhir) {
                    case 'Celcius':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi: " . $hasil . " °C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = (9/5) * $suhu  + 32;
                        echo "<h2> Hasil Konversi: " . $hasil . " °F</h2>";
                        break;
                    case "Rheamur":
                        $hasil = (4/5) * $suhu;
                        echo "<h2> Hasil Konversi: " . $hasil . " °R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu + 273;
                        echo "<h2> Hasil Konversi: " . $hasil . " °K</h2>";
                        break;
                }
                break;
            case "Fahrenheit":
                switch ($suhuAkhir) {
                    case 'Celcius':
                        $hasil = (5/9) * ($suhu - 32);
                        echo "<h2> Hasil Konversi: " . $hasil . " °C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi: " . $hasil . " ℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = (4/9) * ($suhu - 32);
                        echo "<h2> Hasil Konversi: " . $hasil . " °R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = (5/9) * ($suhu - 32) + 273;
                        echo "<h2> Hasil Konversi: " . $hasil . " °K</h2>";
                        break;
                }
                break;
            case "Rheamur":
                switch ($suhuAkhir) {
                    case 'Celcius':
                        $hasil = (5/4) * $suhu;
                        echo "<h2> Hasil Konversi: " . $hasil . " °C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = (9/4) * $suhu + 32;
                        echo "<h2> Hasil Konversi: " . $hasil . " ℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi: " . $hasil . " °R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = (5/4) * $suhu + 273;
                        echo "<h2> Hasil Konversi: " . $hasil . " °K</h2>";
                        break;
                }
                break;
            case "Kelvin":
                switch ($suhuAkhir) {
                    case 'Celcius':
                        $hasil = $suhu - 273;
                        echo "<h2> Hasil Konversi:" . $hasil . " °C</h2>";
                        break;
                    case 'Fahrenheit':
                        $hasil = (9/5) * ($suhu - 273) + 32;
                        echo "<h2> Hasil Konversi: " . $hasil . " ℉</h2>";
                        break;
                    case "Rheamur":
                        $hasil = (4/5) * ($suhu - 273);
                        echo "<h2> Hasil Konversi: " . $hasil . " °R</h2>";
                        break;
                    case 'Kelvin':
                        $hasil = $suhu;
                        echo "<h2> Hasil Konversi: " . $hasil . " °K</h2>";
                        break;
                }
                break;
            default:
                echo "invalid";
                break;
        }
    }
    ?>
</body>

</html>