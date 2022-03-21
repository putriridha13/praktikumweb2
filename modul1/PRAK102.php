<?php
    $alas_segitiga = 3.5;
    $tinggi_segitiga = 4.4;
    $tinggi_prisma = 5.4;

    $volume_prisma_segitiga = (1/2 * $alas_segitiga * $tinggi_segitiga) * $tinggi_prisma;
    $hasil = number_format($volume_prisma_segitiga, 3);
    echo $hasil . " m3";
?>