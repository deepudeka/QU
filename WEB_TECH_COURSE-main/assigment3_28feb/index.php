<?php
include 'db.php';

$result = $conn->query("SELECT * FROM users");
echo "<a href='register.php'>Register New User</a><br><br>";

echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Actions</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>
            <a href='edit.php?id={$row['id']}'>Edit</a> |
            <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
        </td>
    </tr>";
}
echo "</table>";
?>
