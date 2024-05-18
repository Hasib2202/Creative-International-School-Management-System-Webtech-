<?php
session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $notice = $_POST['notice'];
    $date = $_POST['date'];


    if (updateNotice($id,$notice,$date)) {
        echo '<script>alert("Notice information updated successfully."); window.location.href="../Views/viewNotice.php";</script>';
    } else {
        echo '<script>alert("Failed to update student information."); window.location.href="../Views/editNotice.php?id='.$id.'";</script>';
    }
} else {
    header("Location: ../Views/noticePost.php");
    exit;
}
?>
