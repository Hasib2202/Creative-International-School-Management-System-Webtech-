<?php
session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];

    if (updateStudent($id, $name, $email, $mobile, $gender, $dob, $address, $class, $section, $roll)) {
        echo '<script>alert("Student information updated successfully."); window.location.href="../Views/viewStudent.php";</script>';
    } else {
        echo '<script>alert("Failed to update student information."); window.location.href="../Views/updateStudent.php?id='.$id.'";</script>';
    }
} else {
    header("Location: ../Views/viewStudent.php");
    exit;
}
?>
