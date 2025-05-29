<?php
echo "Lab 16 - A3\n";
$file = fopen("students.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>
