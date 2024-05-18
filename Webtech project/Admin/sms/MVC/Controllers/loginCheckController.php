
<?php

session_start();

require_once('../Models/userModel.php');

if(isset($_POST['submit'])) {  

    $id = $_POST['id'];
    $pass = $_POST['password'];

    $role = authenticateUser($id, $pass);

    if ($role) {
        $_SESSION['id'] = $id;
        $_SESSION['role'] = $role;

        if ($role == 'admin') {
            $adminName = getAdminName($id); 
            $_SESSION['name'] = $adminName;
        }

        switch ($role) {
            case 'admin':
                header("Location:../Views/adminDash.php");
                break;
            case 'teacher':
                header("Location:../Views/teacherDash.php");
                break;
            case 'student':
                header("Location:../Views/studentDash.php");
                break;
            case 'librarian':
                header("Location:../Views/librarianDash.php");
                break;
            default:
                echo "Invalid role.";
                break;
        }
    } 
    elseif(empty($id) || empty($pass)) {
        echo '<script>alert("Please fill out all fields."); window.location.href="../Views/login.php";</script>';
    }
    else {
        echo '<script>alert("Invalid user."); window.location.href="../Views/login.php";</script>';
    }

}
?>
