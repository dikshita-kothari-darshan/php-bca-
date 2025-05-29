<?php
echo "Lab 21 - A2: Insert using Stored Procedure<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$name = "Alice";
$email = "alice@example.com";

$query = "CALL insertStudent('$name', '$email')";
mysqli_query($conn, $query);

echo "Student inserted using stored procedure.";
mysqli_close($conn);
?>
