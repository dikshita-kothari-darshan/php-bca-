<?php
echo "Lab 21 - A2: Update using Stored Procedure<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$id = 2;
$name = "Alice Updated";
$email = "alice.updated@example.com";

$query = "CALL updateStudent($id, '$name', '$email')";
mysqli_query($conn, $query);

echo "Student updated using stored procedure.";
mysqli_close($conn);
?>
