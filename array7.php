<?php
$arrTinggi = array("Zean" => 163, "Steven" => 170, "Jamal" => 159, "Udin" => 172);
echo "<b>Array Sebelum diurutkan</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";

asort($arrTinggi);
reset($arrTinggi);
echo "<b>Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";

arsort($arrTinggi);
reset($arrTinggi);
echo "<b>Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrTinggi);
echo "</pre>";
