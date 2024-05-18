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
    <title>Edit Student Profile</title>
    <style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.header {
    background-color: blue;
    color: white;
    text-align: center;
    padding: 20px 0;
}
.sidebar {
    background-color: #D3D3D3;
    padding: 20px;
}
.sidebar nav ul {
    list-style-type: none;
    padding: 0;
}
.sidebar nav ul li {
    margin-bottom: 10px;
}
.sidebar nav ul li a {
    text-decoration: none;
    color: black;
}

.main-content {
    padding: 20px;
}

.profile-table {
    width: 100%;
}

.profile-table td {
    padding: 8px;
}

.profile-table td:first-child {
    font-weight: bold;
}
.footer {
    background-color: blue;
    color: white;
    text-align: center;
    padding: 20px 0;
}
.header {
      background-color: blue;
      color: white;
      padding: 10px;
      text-align: center;
    }
    .profile-fieldset {
      background-color: #B5CBB8;
      border: 1px solid black;
      padding: 10px;
    }

    </style>
</head>
<body>
    <header class="header">
        <h1>Edit Student Profile</h1>
    </header>
    <aside class="sidebar">
        <nav>
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
        </nav>
    </aside>
    <main class="main-content">
        <!-- <fieldset>
            <legend>STUDENT PROFILE</legend>
            <form action="" method="post">
                <table class="profile-table">
                    <tr>
                        <td>Name</td>
                        <td>: <?php echo $User['name']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: <?php echo $User['email']; ?></td>
                    </tr>
                    <tr>
                        <td>Mobile No.</td>
                        <td>: <?php echo $User['mobile']; ?></td>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td>: <?php echo $User['id']; ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>: <?php echo $User['gender']; ?></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>: <?php echo $User['dob']; ?></td>
                    </tr>
                    <tr>
                        <td>Present Address</td>
                        <td>: <?php echo $User['p_address']; ?></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td>: <?php echo $User['class']; ?></td>
                    </tr>
                    <tr>
                        <td>Section</td>
                        <td>: <?php echo $User['section']; ?></td>
                    </tr>
                    <tr>
                        <td>Roll</td>
                        <td>: <?php echo $User['roll']; ?></td>
                    </tr>
                </table>
            </form>
        </fieldset> -->
        <fieldset class="profile-fieldset">
      <legend>STUDENT PROFILE</legend>
      <div>
        <p><strong>Name</strong>: Tanvir Hossain Alvi</p>
        <p><strong>Email</strong>: alvi@gmail.com</p>
        <p><strong>Mobile No.</strong>: 01711811411</p>
        <p><strong>ID</strong>: 3001</p>
        <p><strong>Gender</strong>: male</p>
        <p><strong>Date of Birth</strong>: 2006-02-02</p>
        <p><strong>Present Address</strong>: Sirajganj</p>
        <p><strong>Class</strong>: Seven</p>
        <p><strong>Section</strong>: B</p>
        <p><strong>Roll</strong>: 25</p>
      </div>
    </fieldset>
        
    </main>
    <footer class="footer">
    </footer>
</body>
</html>

<?php

	}else{
		header('location: LoginPage.php');
	}

?>
