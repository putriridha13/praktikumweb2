<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <style type="text/css">
    table,
    tr,
    td,
    th {
        border: 1px solid;
    }

    th {
        background-color: #FF0000;
        font-size: 24px;
        height: 65px
    }
    </style>
</head>

<body>
    <?php
        $tipe_samsung = ['tipe1' => 'Samsung Galaxy S22', 'tipe2' => 'Samsung Galaxy S22+', 'tipe3' => 'Samsung Galaxy A03', 'tipe4' =>'Samsung Galaxy Xcover 5'];
    ?>
    <table>
        <tr>
            <th> <B> Daftar Smartphone Samsung <B> </th>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung['tipe1'] ?></td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung['tipe2']  ?> </td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung['tipe3']  ?></td>
        </tr>
        <tr>
            <td><?php echo $tipe_samsung['tipe4']  ?> </td>
        </tr>
    </table>
</body>

</html>