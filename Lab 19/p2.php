<?php
echo "Lab 19 - A2\n";
$conn = mysqli_connect("localhost", "root", "", "college");
mysqli_query($conn, "UPDATE students SET name='Rahul' WHERE id=1");
mysqli_query($conn, "DELETE FROM students WHERE id=2");
echo "Updated and deleted.";
?>
