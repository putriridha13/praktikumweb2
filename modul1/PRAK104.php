<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <style type="text/css">
    table,
    tr,
    td {
        border: 1px solid;
    }
    </style>
</head>

<body>
    <?php
        $tipe_samsung = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
    ?>
    <table>
        <tr>
            <td> <B> <?php echo "Daftar Smartphone Samsung" ?> <B> </td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung[0] ?></td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung[1] ?> </td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung[2] ?></td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung[3] ?> </td>
        </tr>
    </table>
</body>

</html>