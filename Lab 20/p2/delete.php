<?php
echo "Lab 20 - A2\n";

$conn = mysqli_connect("localhost", "root", "", "company");
$id = $_GET['id'];

$query = "DELETE FROM employees WHERE id=$id";
mysqli_query($conn, $query);

echo "Employee deleted successfully.";
?>
