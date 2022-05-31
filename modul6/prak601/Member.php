<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}

require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">

<hsead>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Member</title>
    <style>
    th {
        background-color: #D3D3D3;
    }
    </style>
</hsead>

<body>
    <h1>Data Member</h1>
    <a href="FormMember.php"><button style='background-color:green; color:white'>Tambah Data</button></a>
    <table border="1" cellpadding=' 10'>
        <tr>
            <th>ID Member</th>
            <th>Nama Member</th>
            <th>Nomor Member</th>
            <th>alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Bayar</th>
            <th>Aksi</th>
        </tr>
        <?= tampil("member") ?>
    </table>
</body>

</html>