<?php
echo "Lab 21 - A2: Select using Stored Procedure<br>";

$conn = mysqli_connect("localhost", "root", "", "college");

$result = mysqli_query($conn, "CALL getStudents()");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " - " . $row['name'] . " - " . $row['email'] . "<br>";
}
mysqli_close($conn);
?>
