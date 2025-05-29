<?php
echo "Lab 16 - A4\n";
$data = "101, Raj, Male, 9876543210\n102, Simran, Female, 9123456780";
file_put_contents("employee.txt", $data);
echo nl2br(file_get_contents("employee.txt"));
?>
