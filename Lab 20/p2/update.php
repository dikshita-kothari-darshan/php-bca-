<?php
echo "Lab 20 - A2\n";

$conn = mysqli_connect("localhost", "root", "", "company");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "UPDATE employees SET name='$name', email='$email', mobile='$mobile' WHERE id=$id";
mysqli_query($conn, $query);

echo "Employee updated successfully.";
?>
