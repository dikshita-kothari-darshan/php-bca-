<?php
echo "LAB-7 C3(a)<br>";
$num = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
?>


<?php
echo "LAB-7 C3(b)<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}
?>


<?php
echo "LAB-7 C3(c)<br>";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = $i; $k <= 5; $k++) {
        echo $k . " ";
    }
    echo "<br>";
}
?>
