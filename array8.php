<?php
$arrTinggi = array("Zean" => 163, "Steven" => 170, "Jamal" => 159, "Udin" => 172);
echo "<b>Array Sebelum diurutkan</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";

ksort($arrTinggi);
reset($arrTinggi);
echo "<b>Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";

krsort($arrTinggi);
reset($arrTinggi);
echo "<b>Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";
