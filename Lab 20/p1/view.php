<?php
echo "Lab 20 - A1\n";

$conn = mysqli_connect("localhost", "root", "", "company");

$result = mysqli_query($conn, "SELECT * FROM employees");

echo "<h2>Employee List</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Mobile</th><th>Actions</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['mobile']}</td>
            <td>
                <a href='edit_employee.php?id={$row['id']}'>Edit</a> | 
                <a href='delete_employee.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";
?>
