<?php
session_start();


if (empty($_SESSION['id'])) {
    header("location:../Views/login.php");
    exit;
}

require_once('../Models/userModel.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $success = deleteTeacherById($id);
    if ($success) {
        $_SESSION['success'] = "Teacher deleted successfully.";
    } else {
        $_SESSION['errors'] = ["Error deleting teacher."];
    }
    header("Location: ../Views/viewTeacher.php");
    exit;
} else {
    header("Location: ../Views/viewTeacher.php");
    exit;
}
?>
