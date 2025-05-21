<?php
echo "LAB-7 A1(a)<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
?>


<?php
echo "LAB-7 A1(b)<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>


<?php
echo "LAB-7 A1(c)<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= 6 - $i; $j--) {
        echo $j . " ";
    }
    echo "<br>";
}
?>


<?php
echo "LAB-7 A1(d)<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "<br>";
}
?>
