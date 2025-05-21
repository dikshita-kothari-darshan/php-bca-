<?php
echo "LAB-5 B3<br>";
$a = 10;
$b = 5;
$op = '+';

switch ($op) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        if ($b != 0) {
            echo $a / $b;
        } else {
            echo "Cannot divide by zero";
        }
        break;
    default:
        echo "Invalid operator";
}
?>
