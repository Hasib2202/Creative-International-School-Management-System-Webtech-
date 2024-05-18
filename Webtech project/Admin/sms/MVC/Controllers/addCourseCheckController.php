<?php

session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');


if (isset($_POST['signup'])) 
{
    $cname = $_POST['name'];
    $cid = $_POST['id'];
    $class = $_POST['class'];
    $description = $_POST['did'];

    $errors = [];

    if (empty($cname) || empty($cid) || $class == 'select_class'  || empty($description)) 
    {
        echo '<script>alert("Please fill out all fields."); window.location.href="../Views/addCourse.php";</script>';
    }
    else 
    {
        if (insertCourse($cname, $cid, $class, $description)) 
        {
            echo '<script>alert("Course adding Complete."); window.location.href="../Views/addCourse.php";</script>';
        } 
        else 
        {
            echo 'Error registering user.';
        }
    }
}

?>