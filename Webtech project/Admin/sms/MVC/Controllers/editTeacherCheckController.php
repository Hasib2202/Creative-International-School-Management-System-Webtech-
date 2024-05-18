

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
    $subject = $_POST['subject'];

    // if (empty($id) || empty($name) || empty($email) || empty($mobile) || empty($dob) || empty($gender) || empty($subject)) {
    //     echo '<script>alert("Please fill out all fields."); window.location.href="../Views/editTeacher.php?id=' . $id . '";</script>';
    // } else {
        if (updateTeacher($id, $name, $email, $mobile, $gender, $dob, $subject)) {
            echo '<script>alert("Teacher updated successfully."); window.location.href="../Views/viewTeacher.php";</script>';
        } else {
            echo '<script>alert("Error updating teacher."); window.location.href="../Views/editTeacher.php?id=' . $id . '";</script>';
        }
    // }
} else {
    echo '<script>alert("Invalid request."); window.location.href="../Views/editTeacher.php";</script>';
}
?>

<?php
// session_start();
// require_once('../Models/userModel.php');
// require_once('../Models/database.php');

// if (isset($_POST['submit'])) {
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     $gender = $_POST['gender'];
//     $dob = $_POST['dob'];
//     $subject = $_POST['subject'];

//     if (updateTeacher($id, $name, $email, $mobile, $gender, $dob, $subject)) {
//         echo '<script>alert("Teacher information updated successfully."); window.location.href="../Views/viewTeacher.php";</script>';
//     } 
//     else {
//         echo '<script>alert("Failed to update teacher information."); window.location.href="../Views/updateStudent.php?id='.$id.'";</script>';
//     }
// } else {
//     header("Location: ../Views/viewTeacher.php");
//     exit;
// }
?>

