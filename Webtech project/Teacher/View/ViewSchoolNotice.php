
<?php
	session_start();
	require_once('../Model/DatabaseConnection.php');
	$GetNotice = getAllSchoolNotice();
	if(isset($_COOKIE['flag'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>School Notice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: bisque;
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
      background-color: blue;
      color: white;
      padding: 10px;
      text-align: center;
    }
    .sidebar {
      width: 250px;
      float: left;
      background-color: #D3D3D3;
      padding: 20px;
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
      display: block;
      padding: 10px;
    }
    .navigation a:hover {
      text-decoration: underline;
    }
    .main-content {
      padding: 20px;
      overflow: hidden;
    }
    fieldset {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      padding: 10px;
    }
    legend {
      font-size: 20px;
      font-weight: bold;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table td {
      padding: 8px;
      border: 1px solid #ddd;
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
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php include("TeacherHeader.php") ?>

    <header class="header">
      <img src="../Resources/notice.jpg" alt="School Notice Image" height="80px" width="80px">
      <h1>School Notice</h1>
    </header>
    <div class="sidebar">
      <ul class="navigation">
        <li><a href="TeacherDashboard.php">Dashboard</a></li>
        <li><a href="ViewProfile.php">View Profile</a></li>
        <li><a href="StudentList.php">View Student's Profile</a></li>
        <li><a href="ViewSchoolNotice.php">School Notice</a></li>
        <li><a href="StudentListMarks.php">Student Marks</a></li>
        <li><a href="UploadNotes.php">Upload Notes</a></li>
        <li><a href="TeacherAbout.php">About</a></li>
        <li><a href="ChangePass.php">Reset Password</a></li>
        <li><a href="../Controller/Logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="main-content">
      <fieldset>
        <legend>NOTICES</legend>
        <form action="addNotice.php" method="post">
          <label for="notice">New Notice:</label>
          <input type="text" id="notice" name="notice" required>
          <input type="submit" value="Add Notice">
        </form>
        <?php
          echo "<table border='1' width='100%' cellspacing='0'>
            <tr align='center'>
              <td>ID</td>
              <td>Notice</td>
              <td>Time</td>
              <td>Actions</td>
            </tr>";
          for ($i = 0; $i < count($GetNotice); $i++) {
            echo "<tr align='center'>
              <td>{$GetNotice[$i]['id']}</td>
              <td>{$GetNotice[$i]['notice']}</td>
              <td>{$GetNotice[$i]['time']}</td>
              <td>
                <form action='updateNotice.php' method='post' style='display:inline-block;'>
                  <input type='hidden' name='id' value='{$GetNotice[$i]['id']}'>
                  <input type='text' name='notice' value='{$GetNotice[$i]['notice']}' required>
                  <input type='submit' value='Update'>
                </form>
                <form action='deleteNotice.php' method='post' style='display:inline-block;'>
                  <input type='hidden' name='id' value='{$GetNotice[$i]['id']}'>
                  <input type='submit' value='Delete'>
                </form>
              </td>
            </tr>";
          }
          echo "</table>";
        ?>
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
	} else {
		header('location: LoginPage.php');
	}
?>
