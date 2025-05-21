<?php
echo "LAB-6 C8<br>";
$num = 153;
$temp = $num;
$sum = 0;

while ($num > 0) {
    $digit = $num % 10;
    $sum += $digit * $digit * $digit;
    $num = (int)($num / 10);
}
if ($sum == $temp) {
    echo "Armstrong";
} else {
    echo "Not Armstrong";
}
?>
