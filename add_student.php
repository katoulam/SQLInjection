<?php
include '../main/connect.php';


$name = $_POST['name'];
$dob = $_POST['dob'];
$join_date = $_POST['join_date'];

// Insert into STUDENTS table
$sql = "INSERT INTO STUDENTS (NAME, DOB, JOIN_DATE)
       VALUES ('$name', '$dob', '$join_date')";

if (mysqli_query($con, $sql)) {
    $new_id = mysqli_insert_id($con);

    echo "Student added successfully!<br>";
    echo "Your Student ID is: " . $new_id . "<br><br>";
    echo '<a href="add_student_form.html">Add another student</a><br>';

} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
