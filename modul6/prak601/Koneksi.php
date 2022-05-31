<?php
function koneksi()
{
    try {
        $koneksi = new PDO('mysql:host=localhost;dbname=prak501', 'root', '',
            array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_PERSISTENT => true)
        );
    } catch (PDOException $e) {
        print "Koneksi gagal: " . $e->getMessage() . "<br/>";
        die();
    }
    return $koneksi;
}