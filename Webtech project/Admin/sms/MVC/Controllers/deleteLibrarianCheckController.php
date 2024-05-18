<?php
session_start();
if (empty($_SESSION['id'])) {
    header("location:../Views/login.php");
    exit;
}
require_once('../Models/userModel.php');
if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $success = deleteLibrarianById($id);
    if ($success) {
        $_SESSION['success'] = "Teacher deleted successfully.";
    } else {
        $_SESSION['errors'] = ["Error deleting librarian."];
    }
    header("Location: ../Views/viewLibrarian.php");
    exit;
} else {
    header("Location: ../Views/viewLibrarian.php");
    exit;
}
?>
