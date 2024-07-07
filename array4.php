<?php
$arrIPK = array("Zean" => 4.0, "Steven" => 3.7, "Jamal" => 3.5, "Udin" => 3.9);
echo "Menampilkann isi Array assosiatif dengan FOREACH : <br>";
foreach ($arrIPK as $nama => $IPK) {
    echo "IPK $nama = $IPK <br>";
}

reset($arrIPK);
echo "<br>Menampilkan isi Array assosiatif dengan WHILE dan LIST (manual each): <br>";

while (current($arrIPK) !== false) {
    $nama = key($arrIPK);
    $IPK = current($arrIPK);
    echo "IPK $nama = $IPK <br>";
    next($arrIPK);
}
