<?php
echo "Lab 19 - A1\n";
$conn = mysqli_connect("localhost", "root", "", "college");
mysqli_query($conn, "INSERT INTO students (name, email) VALUES ('Karan', 'karan@test.com')");
$result = mysqli_query($conn, "SELECT * FROM students");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . " - " . $row['email'] . "<br>";
}
?>
