<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peminjaman</title>
    <style>
    th {
        background-color: #D3D3D3;
    }
    </style>
</head>

<body>
    <h1>Daftar Peminjaman</h1>
    <a href="FormPeminjaman.php"><button style='background-color:green; color:white'>Tambah Data</button></a>
    <table border="1" cellpadding='10'>
        <tr>
            <th>ID Peminjaman</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?= tampil("peminjaman") ?>
    </table>
</body>

</html>