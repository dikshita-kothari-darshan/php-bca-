<?php
echo "LAB-6 A2<br>";
$n = 5;

// for loop
$count = 0;
for ($i = 1; $count < $n; $i += 2, $count++) {
    echo $i . " ";
}
echo "<br>";

// while loop
$i = 1;
$count = 0;
while ($count < $n) {
    echo $i . " ";
    $i += 2;
    $count++;
}
echo "<br>";

// do-while loop
$i = 1;
$count = 0;
do {
    echo $i . " ";
    $i += 2;
    $count++;
} while ($count < $n);
?>
