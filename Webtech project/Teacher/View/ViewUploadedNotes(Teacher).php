<?php
  session_start();
  require_once('../Model/DatabaseConnection.php');
  $GetNotes = getAllTeacherNotes();
  if(isset($_COOKIE['flag']))
  {
?>
<!DOCTYPE html>
<html>
<head>
  <title>Public Home</title>
  <script src="../Script/TeacherUploadedNotesSearch(script).js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: bisque;
      margin: 0;
      padding: 0;
    }
    .header {
      background-color: blue;
      color: white;
      padding: 10px;
      text-align: center;
    }
    .container {
      display: flex;
    }
    .sidebar {
      background-color: #D3D3D3;
      padding: 20px;
      width: 250px;
      box-shadow: 2px 0 5px rgba(0,0,0,0.1);
    }
    .sidebar ul {
      list-style-type: none;
      padding: 0;
    }
    .sidebar ul li {
      margin-bottom: 10px;
      background-color: white;
      padding: 10px;
      border-radius: 5px;
    }
    .sidebar ul li a {
      text-decoration: none;
      color: blue;
      display: block;
      padding: 10px 15px;
      border: 1px solid blue;
      border-radius: 5px;
    }
    .sidebar ul li a:hover {
      background-color: blue;
      color: white;
    .main-content {
      padding: 20px;
      width: 100%;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid black;
      text-align: left;
    }
    }
  </style>
</head>
<body>
  <?php include("TeacherHeader.php") ?>
  <div class="header">
    <img height="80px" width="80px" src="../Resources/Course.jpg" alt="">
    <h1>Uploaded Notes List</h1>
  </div>
  <div class="container">
    <div class="sidebar">
      <ul class="navigation">
        <li><a href="TeacherDashboard.php">Dashboard</a></li>
        <li><a href="ViewProfile.php">View Profile</a></li>
        <li><a href="StudentList.php">View Student's Profile</a></li>
        <li><a href="ViewSchoolNotice.php">School Notice</a></li>
        <li><a href="StudentListMarks.php">Student Marks</a></li>
        <li><a href="BookHistory.php">Book History</a></li>
        <li><a href="UploadNotes.php">Upload Notes</a></li>
        
        <li><a href="ChangePass.php">Reset Password</a></li>
        <li><a href="../Controller/Logout.php">Logout</a></li>
      </ul>
    </div>
    <div class="main-content">
      <fieldset>
        <legend>NOTES</legend>
        <form action="" method="post">
          <center>
            <b>Find Notes:</b>
            <input type="text" name="name" id="name">
            <input type="button" value="Find" onclick="ajax()">
          </center>
          <div id="myh1">
            <br>
            <?php
              echo "<table border='1' width='100%' cellspacing='0'>
                      <tr align='center'>
                        <th>ID</th>
                        <th>Notes</th>
                        <th>Time</th>
                        <th>Action</th>
                      </tr>";
              for($i = 0; $i < count($GetNotes); $i++){
                echo "<tr align='center'>
                        <td>{$GetNotes[$i]['id']}</td>
                        <td>{$GetNotes[$i]['notes']}</td>
                        <td>{$GetNotes[$i]['time']}</td>
                        <td><a href='EditNotes.php?id={$GetNotes[$i]['id']}'> Edit </a> | <a href='DeleteNotes.php?id={$GetNotes[$i]['id']}'> Delete </a></td>
                      </tr>";
              }
              echo "</table>";
            ?>
          </div>
        </form>
      </fieldset>
    </div>
  </div>
  <?php include("TeacherFooter.php") ?>
</body>
</html>
<?php
  } else {
    header('location: LoginPage.php');
  }
?>
