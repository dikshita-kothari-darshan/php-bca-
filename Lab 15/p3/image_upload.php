<?php
echo "Lab 15 - C3\n";
$file = $_FILES['img'];
$size = $file['size'];
$type = $file['type'];
$name = $file['name'];

$validTypes = ['image/jpeg', 'image/jpg', 'image/png'];

if ($size > 1048576) {
    echo "File too large\n";
} elseif (!in_array($type, $validTypes)) {
    echo "Invalid file type\n";
} else {
    $path = "images/" . basename($name);
    move_uploaded_file($file['tmp_name'], $path);
    echo "Image uploaded\n";
}
?>
