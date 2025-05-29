<?php
echo "Lab 17 - C5\n";

$total = 0;

echo "<h2>Bill Summary</h2>";
if (isset($_COOKIE["cart"])) {
    echo "<table border='1' cellpadding='10'>
            <tr><th>Item</th><th>Price (₹)</th></tr>";
    foreach ($_COOKIE["cart"] as $item => $price) {
        echo "<tr><td>$item</td><td>$price</td></tr>";
        $total += $price;
    }
    echo "<tr><td><strong>Total</strong></td><td><strong>₹$total</strong></td></tr>";
    echo "</table>";
} else {
    echo "No items in cart.";
}
?>
