<?php
echo "LAB-5 C6<br>";
$a = 3;
$b = 4;
$c = 5;

if ($a == $b && $b == $c) {
    echo "Equilateral Triangle";
} elseif ($a == $b || $b == $c || $a == $c) {
    echo "Isosceles Triangle";
} elseif (($a * $a) + ($b * $b) == ($c * $c) || 
          ($a * $a) + ($c * $c) == ($b * $b) || 
          ($b * $b) + ($c * $c) == ($a * $a)) {
    echo "Right-angled Triangle";
} else {
    echo "Scalene Triangle";
}
?>
