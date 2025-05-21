<?php
echo "Lab 13 - A2\n";
$text = "   PHP is a powerful scripting language for web development.    ";
echo strlen($text) . "\n";
echo strtoupper($text) . "\n";
echo strtolower($text) . "\n";
echo strpos($text, "powerful") . "\n";
echo str_replace("scripting", "programming", $text) . "\n";
echo substr($text, 3, 3) . "\n";
echo strrev($text) . "\n";
echo trim($text) . "\n";
echo str_repeat("PHP ", 5) . "\n";
$arr = ["PHP", "is", "a", "powerful", "language"];
echo implode(" ", $arr) . "\n";
print_r(explode(" ", $text));
echo str_shuffle($text) . "\n";
echo nl2br("Hello\nWorld") . "\n";
?>
