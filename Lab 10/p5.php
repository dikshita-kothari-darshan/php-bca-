<?php
echo "Lab 10 - C5\n";
function fibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $c = $a + $b;
        $a = $b;
        $b = $c;
    }
}
fibonacci(6);
?>
