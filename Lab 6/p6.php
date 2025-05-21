<?php
echo "LAB-6 B6<br>";
$num = 7;
$flag = 0;

if ($num < 2) {
    $flag = 1;
}
for ($i = 2; $i <= $num / 2; $i++) {
    if ($num % $i == 0) {
        $flag = 1;
        break;
    }
}
if ($flag == 0) {
    echo "Prime";
} else {
    echo "Not Prime";
}
?>
