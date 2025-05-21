<?php
echo "Lab 15 - A1\n";
$target = "uploads/" . basename($_FILES["myfile"]["name"]);
if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target)) {
    echo "File uploaded\n";
} else {
    echo "Upload failed\n";
}
?>
