<?php
	session_start();
	if(isset($_COOKIE['flag']))
	{
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Public Home</title>
    <style media="screen">
      #error_messege {
        color: blue;
        font-weight: bold;
      }
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
        padding: 40px;
        border-radius: 5px;
        background-color: bisque; /* Background color set to bisque */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      table {
        width: 100%;
        border-collapse: collapse;
      }
      th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
      }
      
      #header {
        background-color: #87B0C4;
        color: white;
        padding: 10px;
      }
      #sidebar {
        background-color: LightGray;
        vertical-align: top;
        width: 30%;
      }
      #content {
        padding: 20px;
      }
      ul {
        list-style-type: none;
        padding: 0;
      }
      ul li {
        margin: 10px 0;
      }
      ul li a {
        display: block;
        padding: 10px;
        border: 1px solid blue;
        border-radius: 5px;
        text-decoration: none;
        color: blue;
        text-align: center;
        background-color: white;
        transition: background-color 0.3s, color 0.3s;
      }
      ul li a:hover {
        background-color: blue;
        color: white;
      }
    </style>
    <script src="../Script/FileUploadCheck(script).js"></script>
  </head>
  <body>
    <div class="background"></div>
    <div class="container">
      <table>
        <thead id="header">
          <tr>
            <td colspan="2"><?php include("TeacherHeader.php") ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="sidebar">
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
            </td>
            <td id="content">
              <fieldset>
                <form name="Upload" action="../Controller/UploadNotesCheck.php" method="post" enctype="multipart/form-data" onsubmit="return FileUpload()">
                  <fieldset>
                    <legend>Upload Notes</legend>
                    <input type="file" name="photo"><br>
                    <hr>
                    <input type="submit" name="submit" value="submit">
                    <a href="ViewUploadedNotes(Teacher).php"> View Uploaded Notes</a>
                    <center>
                      <div id="error_messege"></div>
                    </center>
                  </fieldset>
                </form>
              </fieldset>
            </td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"><?php include("TeacherFooter.php") ?></td>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>
</html>


<?php

	}else{
		header('location: LoginPage.php');
	}

?>
