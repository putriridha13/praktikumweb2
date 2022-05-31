<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}

require('./Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <style>
    th {
        background-color: #D3D3D3;
    }
    </style>
</head>

<body>
    <h1>Data Buku</h1>
    <a href="FormBuku.php"><button style='background-color:green; color:white'>Tambah Data</button></a>
    <table border="1" cellpadding='10'>
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?= tampil("buku") ?>
    </table>
</body>

</html>