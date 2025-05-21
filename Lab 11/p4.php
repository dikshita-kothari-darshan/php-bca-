<?php
echo "Lab 11 - C4\n";
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
function printPrimes($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) echo "$i ";
    }
}
printPrimes(10, 20);
?>
