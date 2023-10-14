<?php


$wh = WorkingHours::loadFromUserAndDate(1,date('Y-m-d'));
echo "<br>";

$whi = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($whi);


echo "<br>";

$whl = $wh->getLunchInterval()->format('%H:%I:%S');
print_r($whl);


echo "<br>";

$whe = $wh->getExitTime();
print_r($whe);



echo "<br>";

print_r(getLastDayOfMonth('2019-09'));

echo "<br>";

print_r(getFirstDayOfMonth('2019-09'));