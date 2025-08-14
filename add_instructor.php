<?php
include '../main/connect.php';

$stu_id = $_POST['stu_id'];
$date = $_POST['promotion_date'];
$comp = $_POST['comp_status'];
$comp_amount = $_POST['comp_amount']; 

// Insert into Instructors table
$sql = "INSERT INTO INSTRUCTORS (STU_ID, PROMOTION_DATE, COMPENSATION_STATUS, COMPENSATION_AMOUNT)
        VALUES ('$stu_id', '$date', '$comp', '$comp_amount')";

if (mysqli_query($con, $sql)) {
    echo "Instructor added successfully!<br><br>";
    echo "Instructor ID: $stu_id<br><br>"; 
    echo '<a href="add_instructor_form.html">Add another instructor</a><br>';
    echo '<a href="../main/home.html">Back to Home</a>';

} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);
?>
