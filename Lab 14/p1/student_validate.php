<?php
echo "Lab 14 - A1\n";
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];

if (empty($name) || empty($age) || empty($email)) {
    echo "All fields are required\n";
} elseif (!preg_match("/^[0-9]+$/", $age)) {
    echo "Age must be a number\n";
} elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
    echo "Invalid email\n";
} else {
    echo "Valid Data\n";
}
?>
