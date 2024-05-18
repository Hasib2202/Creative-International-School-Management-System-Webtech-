<?php
	session_start();
    require_once('../Model/DatabaseConnection.php');
    $User = getUserById($_COOKIE['ID']);
	if(isset($_COOKIE['flag']))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Edit Teacher Profile</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
.background {
      background-image: url('../Resources/PP.jpg'); 
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: -1; 
    }
    .container {
      max-width: 100%;
      margin: 20px auto;
      padding: 20px;
      border-radius: 5px;
      overflow: hidden;
      background-color: bisque; 
    }
.container {
    max-width: 100%;
    margin: 20px auto;
    border-radius: 5px;
    overflow: hidden;
}

.header {
    background-color: blue;
    color: white;
    padding: 10px;
    text-align: center;
}

.sidebar {
    width: 250px;
    float: left;
    background-color: D3D3D3;
    padding: 20px;
}

.main-content {
    padding: 20px;
    overflow: hidden;
}

.navigation {
    list-style-type: none;
    padding: 0;
}

.navigation li {
    margin-bottom: 10px;
    background-color: white;
}

.navigation a {
    text-decoration: none;
    color: blue;
}

.navigation a:hover {
    text-decoration: underline;
}

fieldset {
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
}

legend {
    font-weight: bold;
}

form table {
    width: 100%;
}

.navigation a:last-child {
  display: block;
  padding: 5px 10px;
  border: 1px solid blue;
  border-radius: 5px;
  text-decoration: none;
  color: blue;
}
.navigation a:last-child:hover {
  background-color: blue;
  color: whie;
}

    </style>
    
</head>
<body>
<div class="container">
    <?php include("TeacherHeader.php") ?>
    <header class="header">
        <img src="../Resources/Teacher.jpg" alt="Teacher Image" height="80px" width="80px">
        <h1>Profile Information Change</h1>
    </header>
    <div class="sidebar">
        <ul class="navigation">
            <li><a href="TeacherDashboard.php">Dashboard</a></li>
            <li><a href="ViewProfile.php">View Profile</a></li>
            <li><a href="StudentList.php">View Student's Profile</a></li>
            <li><a href="ViewSchoolNotice.php">School Notice</a></li>
            <li><a href="StudentListMarks.php">Student Marks</a></li>
            <li><a href="BookHistory.php">Book History</a></li>
            <li><a href="UploadNotes.php">Upload Notes</a></li>
            <li><a href="TeacherAbout.php">About</a></li>
            <li><a href="ChangePass.php">Reset Password</a></li>
            <li><a href="../Controller/Logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content">
        <fieldset>
            <legend>EDIT PROFILE</legend>
            <form action="../Controller/EditCheck.php" method="post" onsubmit="return EditProfile()">
                <table>
                    <tr>
                        <td>ID</td>
                        <td>: <input type="text" id="id" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>: <input type="text" id="uname" name="uname" value="<?php echo $User['name']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <input type="email" id="email" name="email" value="<?php echo $User['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Mobile No.</td>
                        <td>: <input type="text" id="mobile" name="mobile" value="<?php echo $User['mobile']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>: <input type="radio" name="gender" <?php if($User['gender']=="male"){?> checked="true" <?php } ?> value="male">Male
                            <input type="radio" id="gender" name="gender" <?php if($User['gender']=="female"){?> checked="true" <?php } ?> value="female">Female
                            <input type="radio" id="gender" name="gender" <?php if($User['gender']=="other"){?> checked="true" <?php } ?> value="other">Other
                        </td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>: <input type="date" id="dob" name="dob" value="<?php echo $User['dob']; ?>"></td>
                    </tr>

                </table>
                <hr>
                <input type="submit" name="submit" value="Edit">
                <center>
                    <div id="error_message"></div>
                </center>
            </form>

        </fieldset>

 <div class="background"></div>
<div class="container">
 
  <div class="content">
  </div>
  
</div>
    </div>
    <?php include("TeacherFooter.php") ?>
</div>
</body>
</html>
<?php

	}else{
		header('location: LoginPage.php');
    }


?>
