<?php
echo "Lab 16 - A1\n";
$filename = "students.txt";
if (file_exists($filename)) {
    echo "File size: " . filesize($filename) . " bytes";
} else {
    echo "File does not exist.";
}
?>
