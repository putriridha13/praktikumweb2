<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 2</title>

    <style type="text/css">
    .error {
        color: #FF0000;
    }
    </style>
</head>

<body>
    <?php
    $nama = " ";
    $nim = " ";
    $jenisKelamin = " ";
    $errorNm = " ";
    $errorNim = " ";
    $errorJk = " ";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"])) {
            $errorNm = "nama tidak boleh kosong";
        } else {
            $nama = $_POST["nama"];
        }
        if (empty($_POST["nim"])) {
            $errorNim = "nim tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }
        if (empty($_POST["jenisKelamin"])) {
            $errorJk = "jenis kelamin tidak boleh kosong";
        } else {
            $jenisKelamin = $_POST["jenisKelamin"];
        }
    }
    ?>

    <form action=" " method="post">
        Nama: <input type="text" name="nama" value="<?php echo $nama ?>"> <span class="error">*
            <?php echo $errorNm ?></span> <br>
        Nim: <input type="text" name="nim" value="<?php echo $nim ?>"> <span class="error">*
            <?php echo $errorNim ?></span> <br>
        Jenis Kelamin: <span class="error">* <?php echo $errorJk ?> </span><br>
        <input type="radio" id="laki-laki" name="jenisKelamin"
            <?php if (isset($jenisKelamin) && $jenisKelamin == "Laki-Laki") echo "checked"; ?> value="Laki-laki">
        Laki-laki<br>
        <input type="radio" id="prempuan" name="jenisKelamin"
            <?php if (isset($jenisKelamin) && $jenisKelamin == "Perempuan") echo "checked"; ?> value="Perempuan">
        Perempuan<br>
        <button type="submit" name="submit"> Submit </button>

        <?php
        if (!empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["jenisKelamin"])) {
            echo "<h2> Output: </h2>";
            echo $nama . "<br>";
            echo $nim . "<br>";
            echo $jenisKelamin . "<br>";
        }
    ?>
    </form>

</body>

</html>