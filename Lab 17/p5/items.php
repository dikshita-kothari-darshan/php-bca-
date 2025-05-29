<?php
echo "Lab 17 - C5\n";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST["item"];
    $price = $_POST["price"];
    setcookie("cart[$item]", $price, time() + 3600);
    echo "$item added to cart.<br>";
}
?>

<h2>Available Items</h2>
<form method="post">
    <input type="hidden" name="item" value="Pen">
    <input type="hidden" name="price" value="10">
    <input type="submit" value="Add Pen (₹10)">
</form>

<form method="post">
    <input type="hidden" name="item" value="Notebook">
    <input type="hidden" name="price" value="50">
    <input type="submit" value="Add Notebook (₹50)">
</form>

<form method="post">
    <input type="hidden" name="item" value="Bag">
    <input type="hidden" name="price" value="500">
    <input type="submit" value="Add Bag (₹500)">
</form>

<br><br>
<form action="bill.php" method="post">
    <input type="submit" value="Purchase">
</form>
