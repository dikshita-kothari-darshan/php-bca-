<?php
echo "Lab 11 - B3\n";
function check($n) {
    if ($n < 2) return 0;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) return 0;
    }
    return 1;
}
echo check(7) . "\n";
?>
