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
  <title>View Profile</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: bisque;
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
header {
  background-color: blue;
  color: white;
  padding: 10px;
}
.sidebar {
  width: 250px;
  float: left;
  background-color: #D3D3D3;
  padding: 20px;
}
.user-info {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  background-color: white;
  color:black;
}
.user-info img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  margin-right: 10px;
  
}
.user-info p {
  margin: 0;
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
  color:black;
}
.navigation a:hover {
  text-decoration: underline;
}
.main-content {
  padding: 20px;
  overflow: hidden;
  
}
.profile-table {
  width: 100%;
}
.profile-table tr:nth-child(even) {
  background-color: aqua 
}
.profile-table td {
  padding: 5px;
}
.profile-table td:first-child {
  width: 150px; 
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
    <div class="content">
      <div class="sidebar">
        <div class="user-info">
          <img src="../Resources/Teacher.jpg" alt="Teacher Image">
          <div>
            <p><strong>Logged in as</strong></p>
            <p><a href="ViewProfile.php"><?php echo $User['name'];?></a></p>
            <p>(Teacher)</p>
          </div>
        </div>
        <ul class="navigation">
          <li><a href="TeacherDashboard.php">Dashboard</a></li>
          <li><a href="ViewProfile.php">View Profile</a></li>
          <li><a href="StudentList.php">View Student's Profile</a></li>
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
          <legend>PROFILE</legend>
          <table class="profile-table">
            <tr>
              <td>Name:</td>
              <td><?php echo $User['name'];?></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><?php echo $User['email'];?></td>
            </tr>
            <tr>
              <td>Mobile No.:</td>
              <td><?php echo $User['mobile'];?></td>
            </tr>
            <tr>
              <td>ID:</td>
              <td><?php echo $User['id'];?></td>
            </tr>
            <tr>
              <td>Gender:</td>
              <td><?php echo $User['gender'];?></td>
            </tr>
            <tr>
              <td>Date of Birth:</td>
              <td><?php echo $User['dob'];?></td>
            </tr>
          </table>
          <hr>
          <a href="EditProfile.php">Edit Profile</a>
        </fieldset>
      </div>
      <div class="background"></div>
  <div class="container">
    
    <div class="content">
      
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
