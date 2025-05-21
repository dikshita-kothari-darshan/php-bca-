<?php
echo "LAB-6 C7<br>";
$num = 121;
$temp = $num;
$rev = 0;

while ($num > 0) {
    $rem = $num % 10;
    $rev = $rev * 10 + $rem;
    $num = (int)($num / 10);
}
if ($rev == $temp) {
    echo "Palindrome";
} else {
    echo "Not Palindrome";
}
?>
