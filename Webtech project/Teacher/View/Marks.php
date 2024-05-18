<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
  $Id = $_GET['id'];
	$User =  getStudentById($Id);
  $_SESSION['id'] = $Id;
	if(isset($_COOKIE['flag']))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mark Update</title>
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

.header {
  background-color: #3498db;
  color: white;
  text-align: center;
  padding: 20px 0;
}

.header img {
  height: 80px;
  width: 80px;
  vertical-align: middle;
}

.sidebar {
  background-color: #D3D3D3;
  padding: 20px;
}

.sidebar ul {
  list-style-type: none;
  padding: 0;
}

.sidebar ul li {
  margin-bottom: 10px;
}

.sidebar ul li a {
  text-decoration: none;
  color: #333;
}

.main {
  padding: 20px;
}

.form {
  max-width: 500px;
  margin: 0 auto;
}

.table {
  width: 100%;
}

.table td {
  padding: 8px;
}

.center {
  text-align: center;
}

.error_message {
  color: blue;
  font-weight: bold;
}
  </style>
</head>
<body>
  <header class="header">
    <img src="../Resources/grades.svg" alt="Logo">
    <h1>Marks Upload</h1>
  </header>

  <aside class="sidebar">
    <ul>
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
  </aside>
  <main class="main">
    <form class="form" id="MarksUpload" action="../Controller/MarksCheck.php" method="post" onsubmit="return Marks()">
      <fieldset>
        <legend>MARKS UPLOAD</legend>
        <table class="table">
          <tr>
            <td>ID:</td>
            <td><input type="number" id="id" name="ID" disabled value="<?php echo $User['id']; ?>"></td>
          </tr>
          <tr>
            <td>Name:</td>
            <td><input type="text" id="name" name="name" disabled value="<?php echo $User['name']; ?>"></td>
          </tr>
          <tr>
            <td>Class:</td>
            <td><input type="text" id="class" name="class" disabled value="<?php echo $User['class']; ?>"></td>
          </tr>
          <tr>
            <td>Roll:</td>
            <td><input type="number" id="roll" name="roll" disabled value="<?php echo $User['roll']; ?>"></td>
          </tr>
          <tr>
            <td>Update Marks:</td>
            <td><input type="text" id="marks" name="marks" value="<?php echo $User['marks']; ?>"></td>
          </tr>
          
        </table>
        <hr>
        
        <div class="center">
          <input type="submit" name="upload" value="Submit">
        </div>
        <div id="error_message" class="error_message"></div>
      </fieldset>
    </form>
  </main>
  <footer class="footer">
    <?php include("TeacherFooter.php") ?>
  </footer>
</body>
</html>
<?php

	}else{
		header('location: LoginPage.php');
	}

?>
