<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $room_number = $_POST['room_number'];
    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    
    $sql = "INSERT INTO rooms (room_number, type, capacity) VALUES ('$room_number', '$type', '$capacity')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New room added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
