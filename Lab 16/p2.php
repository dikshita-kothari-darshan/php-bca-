<?php
echo "Lab 16 - A2\n";
$file = fopen("students.txt", "w");
fwrite($file, "Alice\nBob\nCharlie");
fclose($file);
echo "File created.";
?>
