<?php
echo "Lab 9 - A1\n";
$arr = [2, 5, 8, 9, 10, 13];
$even = 0;
$odd = 0;
foreach ($arr as $num) {
    if ($num % 2 == 0) $even++;
    else $odd++;
}
echo "Even: $even\n";
echo "Odd: $odd\n";
?>
