<?php

session_start();
require_once('../Models/userModel.php');

if (isset($_POST['submit'])) {
    $id = $_SESSION['id']; 
    $currentPassword = $_POST['cpass'];
    $newPassword = $_POST['npass'];
    $retypePassword = $_POST['rpass'];
    $userData = getProfiles($id);
    $passwordFromDB = $userData['password']; 

    if ($currentPassword === $passwordFromDB) {

        if ($newPassword === $retypePassword) {

            if (updatePassword($id, $newPassword)) {
 
                echo '<script>alert("Password updated successfully."); window.location.href="../Controllers/logout.php";</script>';
            } else {

                echo '<script>alert("Failed to update password."); window.location.href="../Views/changePassword.php";</script>';
            }
        } else {

            echo '<script>alert("New password and retype password don\'t match."); window.location.href="../Views/changePassword.php";</script>';
        }
    } else {

        echo '<script>alert("Current password is incorrect."); window.location.href="../Views/changePassword.php";</script>';
    }
} else {

    header("Location: ../Views/changePassword.php");
    exit;
}


?>
<?php


// session_start();
// require_once('../Models/userModel.php');

// if(isset($_POST['submit']))
// {
//     $cpass = $_POST['cpass'];
//     $npass = $_POST['npass'];
//     $rpass = $_POST['rpass'];
//     $error_message = ""; 


//     if(empty($cpass) || empty($npass) || empty($rpass))
//     {
//         // $error_message = "Please fill all the fields.";
//         echo '<script>alert("Please fill all the fields."); window.location.href="../Views/changePassword.php";</script>';

//     }
//     elseif($npass !== $rpass)
//     {
//         // $error_message = "New password and Retype New password mismatch!";
//         echo '<script>alert("New password and Retype New password mismatch!"); window.location.href="../Views/changePassword.php";</script>';

        
//     }
//     elseif(strlen($npass) < 8)
//     {
//         // $error_message = "Password should be at least 8 characters long.";
//         echo '<script>alert("Password should be at least 8 characters long!"); window.location.href="../Views/changePassword.php";</script>';

        
//     }
//     else
//     {

//         $user = getUserById($_SESSION['id']);
//         $id = $user['id'];
//         $password = $user['password'];

//         if($cpass !== $password)
//         {
//             // $error_message = "Your entered current password is wrong.";
//             echo '<script>alert("Your entered current password is wrong"); window.location.href="../Views/changePassword.php";</script>';

//         }
//         else
//         {

//             $check = changePassword($id, $npass);
//             if($check)
//             {
//                 echo "Password changed!";
//                 header('location: ../Controllers/logout.php');
//                 exit;
//             }
//             else
//             {
//                 $error_message = "Error occurred!";
//             }
//         }
//     }

//     if(!empty($error_message))
//     {
//         echo $error_message;
//     }
// }
?>
