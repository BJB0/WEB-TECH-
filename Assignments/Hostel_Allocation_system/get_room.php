<?php
header('Content-Type: application/json');
require 'db.php';

$sql_query = "SELECT id, room_number, capacity, occupants FROM rooms";
$result = $conn->query($sql_query);

$rooms = [];
while ($row = $result->fetch_assoc()) {
    $row['status'] = ($row['occupants'] < $row['capacity']) ? 'vacant' : 'full';
    $rooms[] = $row;
}
echo json_encode($rooms);
?>
