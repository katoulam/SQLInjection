<?php
include '../main/connect.php';

$class_id = $_POST['class_id'];
$stu_id = $_POST['stu_id'];

$sql = "INSERT INTO `CLASS_STUDENTS` (`CLASS_ID`, `STU_ID`)
        VALUES ('$class_id', '$stu_id')";

if (mysqli_query($con, $sql)) {
    echo "Student joined class successfully!<br>";
    echo '<a href="join_class.html">Join another class</a><br>';
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
