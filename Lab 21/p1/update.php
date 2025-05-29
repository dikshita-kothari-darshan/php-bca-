<?php
echo "Lab 21 - A1: Update using Prepared Statement<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$id = 1;
$name = "Updated Name";
$email = "updated@example.com";

$stmt = mysqli_prepare($conn, "UPDATE students SET name = ?, email = ? WHERE id = ?");
mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $id);
mysqli_stmt_execute($stmt);

echo "Student updated successfully.";
mysqli_close($conn);
?>
