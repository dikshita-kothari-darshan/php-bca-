<?php
echo "Lab 19 - B3\n";
$conn = mysqli_connect("localhost", "root", "", "college");
$name = $_POST["name"];
$email = $_POST["email"];
mysqli_query($conn, "INSERT INTO students (name, email) VALUES ('$name', '$email')");

$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . " - " . $row['email'] . "<br>";
}
?>
