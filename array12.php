<?php
function cetak_genap($awal, $akhir)
{
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo "$i, ";
        }
    }
}
$a = 20;
$b = 80;
echo "<b>Bilangan ganjil dari $a sampai $b, adalah : </b><br>";
cetak_genap($a, $b);
