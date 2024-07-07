<?php
$arrTinggi = array("Zean" => 163, "Steven" => 170, "Jamal" => 159, "Udin" => 172);
echo "<b>Array Sebelum diurutkan</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";

sort($arrTinggi);
reset($arrTinggi);
echo "<b>Array setelah diurutkan dengan sort()</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";

rsort($arrTinggi);
reset($arrTinggi);
echo "<b>Array setelah diurutkan dengan rsort()</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";
