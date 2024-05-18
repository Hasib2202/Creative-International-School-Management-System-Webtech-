<?php
session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];



    if (updateLibrarian($id, $name, $email, $mobile, $gender, $dob)) {
         echo '<script>alert("Librarian updated successfully."); window.location.href="../Views/viewLibrarian.php";</script>';
    } else {
         echo '<script>alert("Error updating teacher."); window.location.href="../Views/editLibrarian.php?id=' . $id . '";</script>';
    }
    } else {
        echo '<script>alert("Invalid request."); window.location.href="../Views/editLibrarian.php";</script>';
    }
?>