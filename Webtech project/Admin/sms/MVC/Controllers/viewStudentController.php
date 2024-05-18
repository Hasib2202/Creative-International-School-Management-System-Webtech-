<?php
session_start();

if(empty($_SESSION['id'])) {       
    header("location:../Views/login.php");
    exit();
}

require_once('../Models/database.php');
require_once('../Models/userModel.php');
$students = getAllStudents();

include('../Views/viewStudent.php');
?>
