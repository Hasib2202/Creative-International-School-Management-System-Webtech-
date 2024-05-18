<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
	$StudentList = getAllUser();
	if(isset($_COOKIE['flag']))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Students Profile</title>
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
      max-width: 800px;
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
.container {
  max-width: 100%;
  margin: 20px auto;
  border-radius: 5px;
  overflow: hidden;
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
}

.navigation a:hover {
  text-decoration: underline;
}

.main-content {
  padding: 20px;
  overflow: hidden;
}

.student-table {
  width: 100%;
  border-collapse: collapse;
}

.student-table th,
.student-table td {
  padding: 8px;
  border: 1px solid #ddd;
}

.student-table th {
  background-color: #f2f2f2;
  text-align: left;
}

.student-table tr:nth-child(even) {
  background-color: #f2f2f2;
}

.student-table tr:hover {
  background-color: #ddd;
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
      <img src="../Resources/Student.jpg" alt="Student Image" height="80px" width="80px">
      <h1>Student List</h1>
    </header>
    <div class="sidebar">
      <ul class="navigation">
        <li><a href="TeacherDashboard.php">Dashboard</a></li>
        <li><a href="ViewProfile.php">View Profile</a></li>
        <li><a href="ViewSchoolNotice.php">School Notice</a></li>
        <li><a href="BookHistory.php">Book History</a></li>
        <li><a href="UploadNotes.php">Upload Notes</a></li>
        <li><a href="TeacherAbout.php">About</a></li>
        <li><a href="ChangePass.php">Reset Password</a></li>
        <li><a href="../Controller/Logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="main-content">
      <fieldset>
        <legend>STUDENT LIST</legend>
        <form action="" method="post">
<center>
   <b>Find Student:</b><input type="text" name="name" id="name">
   <input type="button" name="" value="Find" onclick="ajax()">
 </center>
<div id="myh1" class="">
   <br>

        
        </form>
        <div id="myh1">
          <br>
          <?php
            echo "<table class='student-table'>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                      <th>Class</th>
                      <th>Section</th>
                      <th>Roll</th>
                      <th>Present Address</th>
                      <th>Profile View</th>
                    </tr>";
            for($i = 0; $i < count($StudentList); $i++) {
              echo "<tr>
                      <td>{$StudentList[$i]['id']}</td>
                      <td>{$StudentList[$i]['name']}</td>
                      <td>{$StudentList[$i]['email']}</td>
                      <td>{$StudentList[$i]['mobile']}</td>
                      <td>{$StudentList[$i]['gender']}</td>
                      <td>{$StudentList[$i]['dob']}</td>
                      <td>{$StudentList[$i]['class']}</td>
                      <td>{$StudentList[$i]['section']}</td>
                      <td>{$StudentList[$i]['roll']}</td>
                      <td>{$StudentList[$i]['p_address']}</td>
                      <td><a href='StudentProfile.php?id={$StudentList[$i]['id']}'>View Profile</a></td>
                    </tr>";
            }
            echo "</table>";
          ?>
        </div>
      </fieldset>
      <div class="background"></div>
  <div class="container">
   
    <div class="content">
    </div>
    
  </div>
    </div>
    
  </div>
</body>
</html>
<?php

	}else{
		header('location: LoginPage.php');
	}
?>
