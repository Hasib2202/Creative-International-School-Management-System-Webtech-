<?php

session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');


if (isset($_POST['signup'])) 
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];


    $errors = [];

    if (empty($id) || empty($name) || empty($email) || empty($mobile) || empty($password) || empty($confirmpassword) || empty($dob) || $gender == 'select_gender' ) 
    {
        echo '<script>alert("Please fill out all fields."); window.location.href="../Views/addLibrarian.php";</script>';
    }
    elseif ($password !== $confirmpassword) 
    {
        echo '<script>alert("Passwords do not match."); window.location.href="../Views/addLibrarian.php";</script>';
    }
    else 
    {
        if (insertLibrarian($id, $name, $email, $mobile, $gender, $dob, $password)) 
        {
            echo '<script>alert("Librarian adding Complete."); window.location.href="../Views/addLibrarian.php";</script>';
        } 
        else 
        {
            echo 'Error registering user.';
        }
    }
}

?>