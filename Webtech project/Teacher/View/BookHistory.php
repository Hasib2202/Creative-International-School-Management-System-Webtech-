<?php
	session_start();
  require_once('../Model/DatabaseConnection.php');
	$List = getAllBooks();
	if(isset($_COOKIE['flag']))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Book Arrival List</title>
  <script src="../Script/BookHistorySearch(script).js"></script>

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

fieldset {
  margin-bottom: 20px;
  border: 1px solid #ddd;
  padding: 10px;
}

legend {
  font-size: 20px;
  font-weight: bold;
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
      <img src="../Resources/Book.jpg" alt="Book Arrival List Image" height="80px" width="80px">
      <h1>Book Arrival List</h1>
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
        <legend>LIST OF BOOKS</legend>
        <form action="" method="post">
        <center>
									<b>Find Book:</b><input type="text" name="name" id="name">
									<input type="button" name="" value="Find" onclick="ajax()">
								</center>

          <div id="myh1" class="">
            <br>
            <?php
            echo "<table border = 1 width='100%' cellspacing = 0  >
            <tr align = 'center'>
                <td>ISBN</td>
                <td>Title</td>
                <td>Author</td>
                <td>Edition</td>
            </tr>";
            for($i = 0; $i<count($List); $i++){
                echo "<tr align = 'center'>
                <td>{$List[$i]['isbn']}</td>
                <td>{$List[$i]['title']}</td>
                <td>{$List[$i]['author']}</td>
                <td>{$List[$i]['edition']}</td>
            </tr>";
            }
            echo "</table>";
            ?>
          </div>
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
