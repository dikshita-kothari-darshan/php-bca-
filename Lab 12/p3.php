<?php
echo "Lab 12 - B3\n";
function factorial($n) {
    if ($n == 1) return 1;
    return $n * factorial($n - 1);
}
echo factorial(5) . "\n";
?>
