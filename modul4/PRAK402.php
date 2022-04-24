<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 2</title>
    <style>
    th {
        background-color: #D3D3D3;
    }

    tr,
    th,
    td {
        padding: 15px;
    }
    </style>
</head>

<body>
    <?php
    $array = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
    ]
    ?>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
        for ($i=0; $i < count($array); $i++) { 
            $array[$i]["nilaiAkhir"] = $array[$i]["uts"] * (40/100) + $array[$i]["uas"] * (60/100);
            if($array[$i]["nilaiAkhir"] >= 80){
                $array[$i]["huruf"] = "A";
            }elseif($array[$i]["nilaiAkhir"] >= 70 && $array[$i]["nilaiAkhir"] <= 79){
                $array[$i]["huruf"] = "B";
            }elseif($array[$i]["nilaiAkhir"] >= 60 && $array[$i]["nilaiAkhir"] <= 69){
                $array[$i]["huruf"] = "C";
            }elseif($array[$i]["nilaiAkhir"] >= 50 && $array[$i]["nilaiAkhir"] <= 59){
                $array[$i]["huruf"] = "D";
            }elseif($array[$i]["nilaiAkhir"] < 50){
                $array[$i]["huruf"] = "E";
            }
        }

        for ($i=0; $i < count($array); $i++) { 
            echo "<tr>";
            echo "<td>".$array[$i]["nama"]."</td>";
            echo "<td>".$array[$i]["nim"]."</td>";
            echo "<td>".$array[$i]["uts"]."</td>";
            echo "<td>".$array[$i]["uas"]."</td>";
            echo "<td>".$array[$i]["nilaiAkhir"]."</td>";
            echo "<td>".$array[$i]["huruf"]."</td>";
            echo "</tr>";
        }       
        ?>
    </table>
</body>

</html>