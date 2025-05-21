<?php
echo "Lab 9 - C4\n";
$arr = [3, 8, 5, 1, 7];
$search = 5;
$found = false;
foreach ($arr as $num) {
    if ($num == $search) $found = true;
}
echo $found ? "Found\n" : "Not Found\n";
?>
