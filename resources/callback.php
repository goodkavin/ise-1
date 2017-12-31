<?php
session_start();
include 'connect.php';
$sql = "SELECT * FROM student WHERE student_email LIKE 'suppakit.neno@gmail.com'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0) {
	$_SESSION["student_id"] = $row['student_id'];
	$_SESSION["student_firstname_en"] = $row['student_firstname_en'];
	$_SESSION["student_lastname_en"] = $row['student_lastname_en'];
}
header("Location: ../main.php");
?>