<?php
echo "Lab 16 - C7\n";
$file = fopen("students.txt", "a");
fwrite($file, "\nDavid\nEmma\nFrank");
fclose($file);
echo "Students added.";
?>
