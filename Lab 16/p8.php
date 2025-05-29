<?php
echo "Lab 16 - C8\n";
$file = fopen("result.csv", "r");
while (($data = fgetcsv($file)) !== FALSE) {
    print_r($data);
    echo "<br>";
}
fclose($file);
?>
