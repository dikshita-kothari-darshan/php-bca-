<?php
echo "LAB-5 B4<br>";
$percentage = 55;
$class = "";

switch (true) {
    case ($percentage < 40):
        $class = "Fail";
        break;
    case ($percentage >= 40 && $percentage < 50):
        $class = "Pass Class";
        break;
    case ($percentage >= 50 && $percentage < 60):
        $class = "Second Class";
        break;
    case ($percentage >= 60 && $percentage < 70):
        $class = "First Class";
        break;
    default:
        $class = "Distinction";
}
echo $class;
?>
