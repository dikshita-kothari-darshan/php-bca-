<?php
echo "Lab 10 - A3\n";
function add($a, $b) { return $a + $b; }
function sub($a, $b) { return $a - $b; }
function mul($a, $b) { return $a * $b; }
function div($a, $b) { return $b != 0 ? $a / $b : 0; }

echo add(5,3) . "\n";
echo sub(5,3) . "\n";
echo mul(5,3) . "\n";
echo div(6,3) . "\n";
?>
