<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>
    <style>
    th {
        background-color: #D3D3D3;
    }

    tr,
    td,
    th {
        padding: 5px;
    }
    </style>
</head>

<body>
    <?php
    $array = [
        ["no" => 1, "nama" => "Ridho", 
        "mk" => [
            ["mataKuliah" =>"Pemrograman I", "sks" => 2], 
            ["mataKuliah" => "Praktikum Pemrograman I", "sks" => 1],
            ["mataKuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
            ["mataKuliah" => "Arsitektur Komputer", "sks" => 3]
        ]
        ],

        ["no" => 2, "nama" => "Ratna", 
        "mk" => [
            ["mataKuliah" =>"Basis Data I", "sks" => 2], 
            ["mataKuliah" => "Praktikum Basis Data I", "sks" => 1],
            ["mataKuliah" => "Kalkulus", "sks" => 3]
        ]
        ],

        ["no" => 3, "nama" => "Tono", 
        "mk" => [
            ["mataKuliah" => "Rekayasa Perangkat Lunak", "sks" => 3], 
            ["mataKuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["mataKuliah" => "Komputasi Awan", "sks" => 3], 
            ["mataKuliah" => "Kecerdasan Bisnis", "sks" => 3]
        ]
        ]
    ];    
    ?>
    <table border=1>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
            for ($i=0; $i < count($array); $i++) {
                $jumlah = 0;
                for ($j=0; $j < count($array[$i]["mk"]); $j++) { 
                    $jumlah += $array[$i]["mk"][$j]["sks"];
                }
                $array[$i]["jumlah"] = $jumlah;
                if ($array[$i]["jumlah"] < 7) {
                    $array[$i]["keterangan"] = "<td bgcolor= #FF0000>Revisi KRS</td>";
                } else {
                    $array[$i]["keterangan"] = "<td bgcolor= #00FF00>Tidak Revisi</td>";
                }
            }

            for ($i=0; $i < count($array); $i++) {
                for ($j=0; $j < count($array[$i]["mk"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$array[$i]["no"]."</td>";
                        echo "<td>".$array[$i]["nama"]."</td>";
                        echo "<td>".$array[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$array[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td>".$array[$i]["jumlah"]."</td>";
                        echo $array[$i]["keterangan"];
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$array[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$array[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>

</html>