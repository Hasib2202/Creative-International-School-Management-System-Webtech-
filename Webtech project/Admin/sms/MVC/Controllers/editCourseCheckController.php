<?php

session_start();
require_once('../Models/userModel.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $description = $_POST['description'];

    if (updateCourse($id, $name, $class, $description)) {
        echo '<script>alert("Course information updated successfully."); window.location.href="../Views/viewCourse.php";</script>';
    } else {
        echo '<script>alert("Failed to update course information."); window.location.href="../Views/editCourse.php?id='.$id.'";</script>';
    }
} else {
    header("Location: ../Views/editCourse.php");
    exit;
}
?>
