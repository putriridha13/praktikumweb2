<?php require('./Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
</head>

<body>
    <h1>Form Data Buku</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>
                    <input type="text" name="judul"
                        <?php echo (isset($_GET['id_buku'])) ?  "value = " . $data[0]["judul_buku"] . "" : "value = '' "; ?>><br>
                </td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td>
                    <input type="text" name="penulis"
                        <?php echo (isset($_GET['id_buku'])) ?  "value = " . $data[0]["penulis"] . "" : "value = '' "; ?>><br>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>
                    <input type="text" name="penerbit"
                        <?php echo (isset($_GET['id_buku'])) ?  "value = " . $data[0]["penerbit"] . "" : "value = '' "; ?>><br>
                </td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td>
                    <input type="text" name="tahunTerbit"
                        <?php echo (isset($_GET['id_buku'])) ?  "value = " . $data[0]["tahun_terbit"] . "" : "value = '' "; ?>><br>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_buku'])) {
                        echo "<button type='submit' name='update' style='background-color:green; color:white'>Update</button>";
                    } else {
                        echo "<button type='submit' name='submit' style='background-color:green; color:white'>Tambah</button>";
                    }

                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunTerbit']);
    }
    if (isset($_POST['update'])) {
        updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahunTerbit']);
    }
    ?>
</body>

</html>