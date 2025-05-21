<?php
echo "LAB-8 B3<br>";
$data = [
    ["Alice", 85],
    ["Bob", 78],
    ["Charlie", 92]
];

for ($i = 0; $i < count($data); $i++) {
    for ($j = 0; $j < count($data[$i]); $j++) {
        echo $data[$i][$j] . " ";
    }
    echo "<br>";
}
?>
