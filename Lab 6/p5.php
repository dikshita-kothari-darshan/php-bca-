<?php
echo "LAB-6 B5<br>";
$n = 5;
$sum = 0;
$product = 1;

for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
    $product *= $i;
}
echo "Sum = $sum<br>";
echo "Product = $product";
?>
