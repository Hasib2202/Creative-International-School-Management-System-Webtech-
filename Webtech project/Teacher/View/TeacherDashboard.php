<?php
	session_start();
    require_once('../Model/DatabaseConnection.php');
    $User = getUserById($_COOKIE['ID']);
	if(isset($_COOKIE['flag'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: bisque;
      margin: 0;
      padding: 0;
      background-image: url('../Resources/PP.jpg'); 
      background-size: cover;
    }
    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('../Resources/PP.jpg'); 
      background-size: cover;
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
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }
    .user-info img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .user-info p {
      margin: 0;
      text-align: center;
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
    .semester-options {
      margin-bottom: 20px;
    }
    .semester-options select {
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      color: #333;
      cursor: pointer;
      appearance: none;
    }
    .semester-options select:focus {
      outline: none;
    }
    .semester-options option {
      background-color: lightblue;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #f1f1f1;
    }
    table {
      margin: 0 auto;
      border-collapse: collapse;
    }
    td {
      background-color: white; /* Setting background color to white */
      padding: 20px;
      text-align: center;
    }
    img {
      border-radius: 50%; /* Making the image circular */
    }
    h2, p, a {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php include("TeacherHeader.php") ?>
   
    <center>
        <video controls autoplay muted loop src="../Resources/talha1.mp4" width="1920" height="450">

        </video><br>

    </center>
    <div>
    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    <p style="color: red;"><b>Welcome to Teacher Dashboard</b></p>

      </marquee>
      </div>
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
        <form action="upload.php" method="post" enctype="multipart/form-data">
          <label for="fileToUpload">Upload Photo:</label>
          <input type="file" name="fileToUpload" id="fileToUpload">
          <input type="submit" value="Upload Image" name="submit">
        </form>
        <form action="delete.php" method="post">
          <input type="submit" value="Delete Image" name="delete">
        </form>
        <ul class="navigation">
          <li><a href="TeacherDashboard.php">Dashboard</a></li>
          <li><a href="ViewProfile.php">View Profile</a></li>
          <li><a href="StudentList.php">View Student's Profile</a></li>
          <li><a href="ViewSchoolNotice.php">School Notice</a></li>
          <li><a href="StudentListMarks.php">Student Marks</a></li>
          <li><a href="BookHistory.php">Book History</a></li>
          <li><a href="TeacherAbout.php">About</a></li>
          <li><a href="ChangePass.php">Reset Password</a></li>
          <li><a href="../Controller/Logout.php">Logout</a></li>
        </ul>
      </div>
      <div class="main-content">
        <h1>Welcome : <br><br><?php echo $User['name'];?></h1>
      </div>
      <div class="semester-options">
        <label for="semester">Select Semester:</label>
        <select id="semester" name="semester">
          <option value="summer">Summer</option>
          <option value="fall">Fall</option>
          <option value="spring">Spring</option>
        </select>
      </div>
      
    </div>
   
  </div>
  <footer>
        <h2>Project Creators</h2>
        <p>This project was created by the people below :</p>
        <table border="1" cellspacing="20">
        <tr>
            <td >
            <img src="../Resources/Talha.jpg"  alt="Profile Picture 1" width="100">
                <p>Name: ALIF HOSSAIN TALHA</p>
                <p>ID: 21-44923-2</p>
                <p>Web Developer with a passion for coding and creating amazing websites. Experienced in HTML, CSS, and JavaScript.</p>
                <a href="https://github.com/AlifTalha">Git_link</a>
            </td>
            <td></td> 
            
            
             </tr>
</body>
</html>
<?php
	}else{
		header('location: LoginPage.php');
	}
?>
