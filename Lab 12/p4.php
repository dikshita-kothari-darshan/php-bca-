<?php
echo "Lab 12 - C5\n";
function isPrime($n, $i = 2) {
    if ($n <= 2) return ($n == 2) ? 1 : 0;
    if ($n % $i == 0) return 0;
    if ($i * $i > $n) return 1;
    return isPrime($n, $i + 1);
}
echo isPrime(11) . "\n";
?>
