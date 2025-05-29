<?php
echo "Lab 21 - A1: Select using Prepared Statement<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$stmt = mysqli_prepare($conn, "SELECT id, name, email FROM students");
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $id, $name, $email);

echo "<ul>";
while (mysqli_stmt_fetch($stmt)) {
    echo "<li>$id - $name - $email</li>";
}
echo "</ul>";

mysqli_close($conn);
?>
