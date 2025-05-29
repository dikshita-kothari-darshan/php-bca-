<?php
echo "Lab 21 - A1: Insert using Prepared Statement<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$name = "John Doe";
$email = "john@example.com";

$stmt = mysqli_prepare($conn, "INSERT INTO students (name, email) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "ss", $name, $email);
mysqli_stmt_execute($stmt);

echo "Student inserted successfully.";
mysqli_close($conn);
?>
