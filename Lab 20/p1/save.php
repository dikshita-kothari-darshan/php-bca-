<?php
echo "Lab 20 - A1\n";

$conn = mysqli_connect("localhost", "root", "", "company");

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = "INSERT INTO employees (name, email, mobile) VALUES ('$name', '$email', '$mobile')";
mysqli_query($conn, $query);

echo "Employee inserted successfully.";
?>
