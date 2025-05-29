<?php
echo "Lab 21 - A1: Delete using Prepared Statement<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$id = 1;

$stmt = mysqli_prepare($conn, "DELETE FROM students WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

echo "Student deleted successfully.";
mysqli_close($conn);
?>
