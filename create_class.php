<?php
include '../main/connect.php';

$rank = $_POST['rank'];
$day = $_POST['day'];
$time = $_POST['time'];       // e.g., 17:00:00
$location = $_POST['location'];
$instructorId = $_POST['instructor_id'];

$sql = "INSERT INTO `CLASSES` (`RANK`, `DAY`, `TIME`, `LOCATION`, `INSTRUCTOR_ID`)
        VALUES ('$rank', '$day', '$time', '$location', '$instructorId')";

if (mysqli_query($con, $sql)) {
    $new_id = mysqli_insert_id($con);
    echo "Class added successfully!<br>";
    echo "Your Class ID is: $new_id<br><br>";
    echo '<a href="create_class.html">Add another class</a><br>';
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
