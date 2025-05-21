<?php
echo "Lab 9 - A2\n";
$arr = [10, 20, 30, 40, 50];
$sum = 0;
$count = count($arr);
foreach ($arr as $num) $sum += $num;
$avg = $sum / $count;
echo "Average: $avg\n";
?>
