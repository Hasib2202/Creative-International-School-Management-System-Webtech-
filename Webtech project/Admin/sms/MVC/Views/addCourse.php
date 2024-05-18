<?php
    
    session_start();

    $_SESSION['name'];

    if(empty($_SESSION['id']))
    {       
        header("location:../Views/login.php");
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adminStyle.css">
    <link rel="stylesheet" href="../../css/addTeacher.css">
    <title>Course</title>
    <style>
   
    </style>
</head>
<script>
    <script src="../Script/addTeacher.js"></script>
</script>
<body>

    <div class="header">
    <h1>Creative International School Management System</h1>
    </div>
    <div class="brand-name">
        <h1>Welcome Admin,<?php echo $_SESSION['name']; ?></h1>
    </div>
    <form action="">
    <div class="side-menu">
        <ul>
            <li><a href="adminDash.php"><img src="../../images/dashboard (2).png" alt=""> Dashboard</a></li>
			<li class="dropdown">
                <a href="addTeacher.php"><img src="../../images/teacher2.png" alt=""> Teacher</a>
                <div class="dropdown-content">
                    <a href="viewTeacher.php">View Teacher</a>
                </div>
            </li>
			<li class="dropdown">
                <a href="addStudent.php"><img src="../../images/student-32.png" alt=""> Student</a>
                <div class="dropdown-content">
                    <a href="viewStudent.php">View Student</a>
                </div>
            </li>
            <li><a href="fees.php"><img src="../../images/income.png" alt=""> Fees Section</a></li>
			<li class="dropdown">
                <a href="addLibrarian.php"><img src="../../images/library-32.png" alt=""> Librarian</a>
                <div class="dropdown-content">
                    <a href="viewLibrarian.php">View Librarian</a>
                </div>
            </li>
            <li><a href="noticePost.php"><img src="../../images/clipboard-2-32.png" alt=""> Notice Board</a></li>
            <li><a href="libraryBookInfo.php"><img src="../../images/reading-book (1).png" alt=""> Library Book Details</a></li>
            <li class="dropdown">
                <a href="../Controllers/addCourseController.php"><img src="../../images/book-2-32.png" alt=""> Courses</a>
                <div class="dropdown-content">
                    <a href="viewCourse.php">View Courses</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="viewProfile.php"><img src="../../images/settings.png" alt=""> Profile</a>
                <div class="dropdown-content">
                    <a href="changePassword.php">Change Password</a>
                </div>
            </li>
            <li><a href="../Controllers/logout.php"><img src="../../images/account-logout-32.png" alt=""> Logout</a></li>
        </ul>
    </div>
    </form>


    <div class="content">
    <form action="../Controllers/addCourseCheckController.php" method="POST" id="registration-form" onsubmit="return validation()">
        <h2 align="center">Course Registration</h2>

        <label for="name">Course Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter course name"><br>

        <label for="id">Course ID:</label><br>
        <input type="text" id="id" name="id" placeholder="Enter course ID"><br>

        <label for="class">Class:</label><br>
        <select name="class" id="class">
            <option value="select_class">Select Class</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>

        <label for="description">Description:</label><br>
        <input type="text" id="did" name="did" placeholder="Enter course description"><br>

        <div class="form-group">
            <div class="button-container">
                <button type="submit" name="signup">Add Course</button>
                <button type="button" onclick="resetForm()">Reset</button>
            </div>
        </div>
    </form>
</div>

<script>
    function resetForm() {
        document.getElementById("registration-form").reset();
    }
</script>

    

</body>
</html>


