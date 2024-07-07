<?php
$club = array('Real Madrid', 'Manchester United', 'Juventus', 'Bayern Munchen', 'Arsenal');
echo "<pre>";
print_r($club);
echo "</pre>";
$mode = current($club);
echo $mode . "<br>";
$mode = next($club);
echo $mode . "<br>";
$mode = current($club);
echo $mode . "<br>";
$mode = prev($club);
echo $mode . "<br>";
$mode = end($club);
echo $mode . "<br>";
$mode = current($club);
echo $mode . "<br>";
