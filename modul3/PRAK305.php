<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 5</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="input">
        <button type="submit" name="submit"> Submit </button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['input'];
        $arrayKata = str_split($kata);
        
        echo "<h3> Input: </h3>" . $kata . "<br>";
        echo "<h3> Output </h3>";
        foreach ($arrayKata as $key => $value) {
            for ($i = 0; $i < count($arrayKata); $i++) {
                if ($i == 0) {
                    echo strtoupper($value);
                } else {
                    echo strtolower($value);
                }
            }
        }
    }
    ?>
</body>

</html>