<?php
header('Content-Type: application/json');
require 'db.php';

$data = json_decode(file_get_contents("php://input"), true);
$studentName = $conn->real_escape_string($data['name']);
$studentID = $conn->real_escape_string($data['student_id']);
$roomID = (int)$data['room_id'];

// Checking if student ID already exists
$checkStudent = $conn->query("SELECT id FROM students WHERE student_id = '$studentID'");
if ($checkStudent && $checkStudent->num_rows > 0) {
    echo json_encode(["success" => false, "message" => "Student ID already allocated to a room."]);
    exit;
}

// Checking if room has space
$checkRoom = $conn->query("SELECT occupants, capacity FROM rooms WHERE id = $roomID");
if (!$checkRoom || $checkRoom->num_rows === 0) {
    echo json_encode(["success" => false, "message" => "Room not found."]);
    exit;
}

$room = $checkRoom->fetch_assoc();
if ($room['occupants'] >= $room['capacity']) {
    echo json_encode(["success" => false, "message" => "Room is full. Please choose another room."]);
    exit;
}

// All good, we can allocate the room
$insert = $conn->query("INSERT INTO students (name, student_id, room_id) VALUES ('$studentName', '$studentID', $roomID)");
if ($insert) {
    $conn->query("UPDATE rooms SET occupants = occupants + 1 WHERE id = $roomID");
    echo json_encode(["success" => true, "message" => "Room allocated successfully."]);
} else {
    echo json_encode(["success" => false, "message" => "Failed to allocate room. Please try again."]);
}
?>
