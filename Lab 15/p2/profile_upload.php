<?php
echo "Lab 15 - B2\n";
$target = "profiles/" . basename($_FILES["profile"]["name"]);
if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target)) {
    echo "Profile updated\n";
} else {
    echo "Failed to update\n";
}
?>
