<?php
echo "Lab 16 - B6\n";
if (file_exists("employee.txt")) {
    unlink("employee.txt");
    echo "File deleted.";
} else {
    echo "File not found.";
}
?>
