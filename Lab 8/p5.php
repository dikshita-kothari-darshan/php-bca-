<?php
echo "LAB-8 C5 (revised)<br>";
$students = [
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "David" => 67,
    "Eve" => 90
];

// Total number of students
$count = 0;
foreach ($students as $k => $v) {
    $count++;
}
echo "Total students: $count<br>";

// Print names and scores separately
echo "Names: ";
foreach ($students as $name => $score) {
    echo $name . " ";
}
echo "<br>";

echo "Scores: ";
foreach ($students as $name => $score) {
    echo $score . " ";
}
echo "<br>";

// Calculate total and product
$total = 0;
$product = 1;
foreach ($students as $score) {
    $total += $score;
    $product *= $score;
}
echo "Total = $total<br>";
echo "Product = $product<br>";

// Min and Max without min(), max()
$min = 9999;
$max = -1;
foreach ($students as $score) {
    if ($score < $min) {
        $min = $score;
    }
    if ($score > $max) {
        $max = $score;
    }
}
echo "Min = $min<br>";
echo "Max = $max<br>";

// Check if score 90 exists
$found90 = false;
foreach ($students as $score) {
    if ($score == 90) {
        $found90 = true;
        break;
    }
}
echo $found90 ? "Score 90 found<br>" : "Score 90 not found<br>";

// Who scored 92
foreach ($students as $name => $score) {
    if ($score == 92) {
        echo "Scored 92: $name<br>";
    }
}

// Sort by scores ascending (using bubble sort)
$keys = array_keys($students);
$values = array_values($students);
$n = count($values);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($values[$j] > $values[$j + 1]) {
            $temp = $values[$j];
            $values[$j] = $values[$j + 1];
            $values[$j + 1] = $temp;

            $tempKey = $keys[$j];
            $keys[$j] = $keys[$j + 1];
            $keys[$j + 1] = $tempKey;
        }
    }
}
echo "Scores Ascending: ";
for ($i = 0; $i < $n; $i++) {
    echo $values[$i] . " ";
}
echo "<br>";

// Sort by names descending (bubble sort)
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($keys[$j] < $keys[$j + 1]) {
            $temp = $keys[$j];
            $keys[$j] = $keys[$j + 1];
            $keys[$j + 1] = $temp;
        }
    }
}
echo "Names Descending: ";
for ($i = 0; $i < $n; $i++) {
    echo $keys[$i] . " ";
}
?>
