<?php
session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');

if (isset($_POST['signup'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll = $_POST['roll'];
    $fees = $_POST['fees'];
    $amount = $_POST['amount'];



    $errors = [];

    if (empty($id) || empty($name) || empty($email) || empty($mobile) || empty($password) || empty($dob) || $gender == 'select_gender' || empty($address) || $class == 'select_class' || $section == 'select_section' ||  empty($roll) ||  empty($fees) ||  empty($amount)) {

        echo '<script>alert("Please fill out all fields."); window.location.href="../Views/addStudent.php";</script>';
        exit;
    } 
    elseif ($password !== $confirmpassword) 
    {
        echo '<script>alert("Passwords do not match."); window.location.href="../Views/addStudent.php";</script>';
    }
    else {

        if (insertStudent($id, $name, $email, $mobile, $gender, $dob, $password, $address, $class, $section, $roll, $fees, $amount)) {

            echo '<script>alert("Student adding Complete."); window.location.href="../Views/addStudent.php";</script>';
            exit;
        } else {

            echo '<script>alert("Error registering user."); window.location.href="../Views/addStudent.php";</script>';
            exit;
        }
    }
}
?>
