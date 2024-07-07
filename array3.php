<?php
$arrWarna = array("Red", "Grey", "Yellow", "Green", "Blue");

echo "Menampilkan Isi Array dengan FOR : <br>";
for ($i = 0; $i < count($arrWarna); $i++) {
    echo "Warna Yang Dipilih : <font color=$arrWarna[$i]>" . $arrWarna[$i] . "</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH : <br>";
foreach ($arrWarna as $warna) {
    echo "Warna Yang Dipilih : <font color=$warna>" . $warna . "</font><br>";
}
