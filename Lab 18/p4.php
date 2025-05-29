<?php
echo "Lab 18 - C4\n";
$conn = mysqli_connect("localhost", "root", "", "college");
if ($conn) {
    echo "Connected successfully.";
} else {
    echo "Connection failed.";
}
?>
