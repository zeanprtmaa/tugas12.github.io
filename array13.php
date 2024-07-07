<?php
function luas_segitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}

$alas = 10;
$tinggi = 5;
echo "Luas Segitiga dengan alas $alas dan tinggi $tinggi = ";
echo luas_segitiga($alas, $tinggi);
