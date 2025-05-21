<?php
echo "Lab 12 - A1\n";
function sum($n) {
    if ($n == 0) return 0;
    return $n + sum($n - 1);
}
echo sum(5) . "\n";
?>
