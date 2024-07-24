<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Roll Number: " . $row["roll_number"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
