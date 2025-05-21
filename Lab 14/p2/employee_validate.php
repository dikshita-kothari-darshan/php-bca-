<?php
echo "Lab 14 - B2\n";
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

if (empty($name) || empty($mobile) || empty($email)) {
    echo "All fields required\n";
} elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
    echo "Invalid Mobile Number\n";
} elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/", $email)) {
    echo "Invalid Email\n";
} else {
    echo "Valid Data\n";
}
?>
