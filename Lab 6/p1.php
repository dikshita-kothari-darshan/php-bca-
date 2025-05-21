<?php
echo "LAB-6 A1<br>";
$n = 5;

// for loop
for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
}
echo "<br>";

// while loop
$i = 1;
while ($i <= $n) {
    echo $i . " ";
    $i++;
}
echo "<br>";

// do-while loop
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= $n);
?>
