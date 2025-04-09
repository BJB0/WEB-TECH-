<?php
// users.php - View Users
include 'db_connect.php';
$result = $conn->query("SELECT * FROM users");
echo "<table border='1'><tr><th>ID</th><th>name</th><th>email</th><th>Actions</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td>";
    echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}'>Delete</a></td></tr>";
}
echo "</table>";
?>
