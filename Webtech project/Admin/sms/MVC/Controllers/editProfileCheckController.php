<?php


session_start();
require_once('../Models/userModel.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (updateProfile($id, $name, $email)) {
        echo '<script>alert("Profile information updated successfully."); window.location.href="../Views/viewProfile.php";</script>';
    } else {
        echo '<script>alert("Failed to update profile information."); window.location.href="../Views/editProfile.php?id='.$id.'";</script>';
    }
} else {
    header("Location: ../Views/editProfile.php");
    exit;
}
?>
