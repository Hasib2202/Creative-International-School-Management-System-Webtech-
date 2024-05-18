<?php
session_start();

if(empty($_SESSION['id'])) {
    header("location:../Views/login.php");
}

require_once('../Models/userModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $student_id = $_POST['id'];
    $amount_paid = $_POST['amount'];
    $paid_date = $_POST['paid_date'];
    if (empty($amount_paid) || empty($paid_date)) {
        // $error_message = "Please enter the amount paid and paid date.";
        echo '<script>alert("Please fill out all fields."); window.location.href="../Views/fees.php";</script>';

    } 
    $student = getStudentById($student_id);
    $current_balance = $student['balance'];

    $new_balance = $current_balance - $amount_paid;

    $result = updateStudentFees($student_id, $new_balance, $amount_paid);

    if ($result) {

        header("Location: ../Views/fees.php?success=1");
        exit();
    } else {

        header("Location: ../Views/fees.php?error=1");
        exit();
    }
}

?>