<?php
$arrTinggi = array("Zean" => 163, "Steven" => 170, "Jamal" => 159, "Udin" => 172);
echo $arrTinggi['Zean'] . "<br>";
echo $arrTinggi['Steven'] . "<br>";
echo "Selisih Tinggi Badannya : " . $arrTinggi['Steven'] -  $arrTinggi['Zean'] . "<br><br>";

$arrBerat = array();
$arrBerat['Zean'] = 52;
$arrBerat['Steven'] = 60;
$arrBerat['Jamal'] = 57;
$arrBerat['Udin'] = 69;
echo $arrBerat['Zean'] . "<br>";
echo $arrBerat['Udin'] . "<br>";
echo "Selisih Berat Badannya : " . $arrBerat['Udin'] -  $arrBerat['Zean'] . "<br><br>";
