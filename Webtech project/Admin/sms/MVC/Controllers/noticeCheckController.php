<?php

session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');


if (isset($_POST['submit'])) 
{
    $id = $_POST['id'];
    
    $notice = $_POST['notice'];
    $date = $_POST['date'];

    $errors = [];

    if (empty($id) || empty($notice) || empty($date)) 
    {
        echo '<script>alert("Please fill out the notice field."); window.location.href="../Views/noticePost.php";</script>';
    }
    else{
        if (insertNotice($id, $notice,$date)) 
        {
            echo '<script>alert("Notice Post Complete."); window.location.href="../Views/noticePost.php";</script>';
        } 
        else 
        {
            echo 'Error notice.';
        }
    }
}

?>