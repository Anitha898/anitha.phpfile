<?php
include 'db.php';

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Room Number: " . $row["room_number"] . " - Type: " . $row["type"] . " - Capacity: " . $row["capacity"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
