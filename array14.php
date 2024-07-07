<?php
function tambah_string($str)
{
    $str = $str . "Zean Ananda Pratama";
    return $str;
}

$string = "Nama Saya : ";
echo "\$string = $string<br>";
echo tambah_string($string) . "<br>";
echo "\$string = $string<br>";
