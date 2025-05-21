<?php
echo "Lab 9 - B3\n";
$arr = [10, 12, 15, 7, 5, 18];
$sum = 0;
foreach ($arr as $num) {
    if ($num % 3 == 0 || $num % 5 == 0) $sum += $num;
}
echo "Sum: $sum\n";
?>
