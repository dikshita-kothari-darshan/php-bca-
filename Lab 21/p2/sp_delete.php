<?php
echo "Lab 21 - A2: Delete using Stored Procedure<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$id = 2;

$query = "CALL deleteStudent($id)";
mysqli_query($conn, $query);

echo "Student deleted using stored procedure.";
mysqli_close($conn);
?>
