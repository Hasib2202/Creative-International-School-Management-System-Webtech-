<?php
// session_start();
// require_once('../Models/database.php');

// $conn = conn();

// if (isset($_POST['signup'])) {
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $confirmpassword = $_POST['confirm_password'];
//     $role = $_POST['role'];

//     $errors = [];

//     if (empty($id) || empty($name) || empty($email) || empty($password) || empty($confirmpassword) || $role == 'select_role') {
//         // $errors[] = 'Please fill out all fields';
//         echo '<script>alert("Please fill out all fields."); window.location.href="../Views/registration.php";</script>';

//     }

//     elseif ($password !== $confirmpassword) {
//         // $errors[] = 'Passwords do not match';
//         echo '<script>alert("Password do not match."); window.location.href="../Views/registration.php";</script>';

//     }

//     elseif (empty($errors)) {
//         // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//         $sql = "INSERT INTO users (id, name, email, password, role) VALUES ('$id', '$name', '$email', '$password', '$role')";

//         if ($conn->query($sql) === TRUE) {
//             // $_SESSION['signupmsg'] = 'Sign Up Complete. Please Log in now.';
//             echo '<script>alert("Sign Up Complete. Please Log in now."); window.location.href="../Views/login.php";</script>';
//         } else {
//             echo 'Error: ' . $sql . '<br>' . $conn->error;
//         }
//     } else {
//         foreach ($errors as $error) {
//             echo $error . '<br>';
//         }
//     }
// }
?>

<?php

session_start();
require_once('../Models/database.php');
require_once('../Models/userModel.php');

if (isset($_POST['signup'])) 
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirm_password'];
    $role = $_POST['role'];

    $errors = [];

    if (empty($id) || empty($name) || empty($email) || empty($password) || empty($confirmpassword) || $role == 'select_role') 
    {
        echo '<script>alert("Please fill out all fields."); window.location.href="../Views/registration.php";</script>';
    }
    elseif ($password !== $confirmpassword) 
    {
        echo '<script>alert("Passwords do not match."); window.location.href="../Views/registration.php";</script>';
    }
    else 
    {
        if (registerUser($id, $name, $email, $password, $role)) 
        {
            echo '<script>alert("Sign Up Complete. Please Log in now."); window.location.href="../Views/login.php";</script>';
        } 
        else 
        {
            echo 'Error registering user.';
        }
    }
}

?>

