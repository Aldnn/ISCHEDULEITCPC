<?php
include "dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $subject_description = $_POST['subject_description'];
    $semester = $_POST['semester'];
    $days = isset($_POST['day']) ? (array)$_POST['day'] : [];
    $room = $_POST['room'];
    $campus = $_POST['campus'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    // Define all relevant tables
    $tables = [
        'CET' => 'cetsched',
        'CASE' => 'casesched',
        'CHTM' => 'chtmsched',
        'CBMA' => 'cbmasched',
        'Law' => 'lawsched',
        'Marine' => 'marinesched',
        'Crim' => 'crimsched',
    ];
    // Check if the selected department is valid
    if (!array_key_exists($department, $tables)) {
        echo "Invalid department selected.";
        exit;
    }
    $conflicting_entries = array();
    foreach ($tables as $dept => $tableName) {
        foreach ($days as $day) {
            // Conflict detection query
            $conflict_sql = "SELECT * FROM $tableName WHERE room = ? AND FIND_IN_SET(?, day)";
            $conflict_stmt = $conn->prepare($conflict_sql);
            $conflict_stmt->bind_param("ss", $room, $day);
            $conflict_stmt->execute();
            $result = $conflict_stmt->get_result();
            // If conflicts are found, collect them
            while ($row = $result->fetch_assoc()) {
                // Extract the existing start and end times from the Time column
                $existing_time = isset($row['Time']) ? $row['Time'] : null;
                if ($existing_time) {
                    list($existing_start_time, $existing_end_time) = explode(' - ', $existing_time);
                    // Check for overlap
                    if (($start_time < $existing_end_time) && ($end_time > $existing_start_time)) {
                        $conflict_course = isset($row['Course']) ? $row['Course'] : 'N/A';
                        $conflict_room = isset($row['Room']) ? $row['Room'] : 'N/A';
                        $conflict_day = $day;
                        $conflicting_entries[] = "Department: $dept, Course: $conflict_course, Room: $conflict_room, Time: $existing_time, Day: $conflict_day";
                    }
                }
            }
            $conflict_stmt->close();
        }
    }
    if (!empty($conflicting_entries)) {
        // If there are conflicting entries, show them in an alert
        echo "<script>
    alert('Conflict detected: Following entries already exist:\\n" . implode("\\n", $conflicting_entries) . "');
    window.location.href = 'AddSchedule.php';
</script>";
    } else {
        // Create the time variable
        if (!empty($start_time) && !empty($end_time)) {
            $time = $start_time . ' - ' . $end_time; // Concatenate start and end times
        } else {
            echo "<script>alert('Start time and end time must not be empty.');</script>";
            exit; // Stop execution if times are not set
        }
        $days_string = implode(',', $days);
        // Proceed with insertion if no conflict
        $insert_sql = "INSERT INTO $tables[$department] (subject, campus, semester, day, room, time, course) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_sql);
        $insert_stmt->bind_param("sssssss", $subject_description, $campus, $semester, $days_string, $room, $time, $course);
        if ($insert_stmt->execute()) {
            echo '<script>alert("Schedule added successfully."); window.location.href = "Schedule.php";</script>';
        } else {
            echo "<script>alert('Error: " . $insert_stmt->error . "');</script>";
        }
    }
    // Close the connection
    $conn->close();
}
?>