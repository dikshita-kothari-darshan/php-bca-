<?php
echo "LAB-8 B4 (revised)<br>";
$scores = [85, 78, 92, 67, 90];

// Shuffle manually
for ($i = 0; $i < count($scores); $i++) {
    $rand = rand(0, count($scores) - 1);
    $temp = $scores[$i];
    $scores[$i] = $scores[$rand];
    $scores[$rand] = $temp;
}
echo "Shuffled: ";
for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . " ";
}
echo "<br>";

// Add new score to end
$scores[count($scores)] = 88;
echo "After Adding: ";
for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . " ";
}
echo "<br>";

// Remove last score
$newScores = [];
for ($i = 0; $i < count($scores) - 1; $i++) {
    $newScores[$i] = $scores[$i];
}
$scores = $newScores;
echo "After Removing Last: ";
for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . " ";
}
echo "<br>";

// Remove first score
$newScores = [];
for ($i = 1; $i < count($scores); $i++) {
    $newScores[$i - 1] = $scores[$i];
}
$scores = $newScores;
echo "After Removing First: ";
for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . " ";
}
echo "<br>";

// Add to beginning
$newScores = [];
$newScores[0] = 99;
for ($i = 0; $i < count($scores); $i++) {
    $newScores[$i + 1] = $scores[$i];
}
$scores = $newScores;
echo "After Adding to Beginning: ";
for ($i = 0; $i < count($scores); $i++) {
    echo $scores[$i] . " ";
}
?>
