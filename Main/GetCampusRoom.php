<?php
 include "dbconnect.php";
 $campus = $_GET['campus'];
if ($campus == 'Main Campus') {
    $sql = "SELECT Room FROM room_main";
} else if ($campus == 'Engineering Campus') {
    $sql = "SELECT Room FROM room_engineering";
} else {
    echo json_encode([]);
    exit;
}

$result = $conn->query($sql);
$rooms = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
}
echo json_encode($rooms);
$conn->close();