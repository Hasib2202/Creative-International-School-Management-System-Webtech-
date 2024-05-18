<?php
    
    // session_start();

    // $_SESSION['name'];

    // if(empty($_SESSION['id']))
    // {       
    //     header("location:../Views/login.php");
    // }

    // require_once('../Models/userModel.php');

    // $teachers = getAllTeachers();
    // $students = getAllStudents();
    // $librarians = getAllLibrarians();

    // $totalTeacher = getTotalTeachers();
    // $totalStudent = getTotalStudents();

    session_start();

    if(empty($_SESSION['id'])) {       
        header("location:../Views/login.php");
        exit(); 
    }


    require_once('../Models/userModel.php');

    $teachers = getAllTeachers();
    $students = getAllStudents();
    $librarians = getAllLibrarians();

    // Retrieve total counts
    $totalTeachers = getTotalTeachers();
    $totalStudents = getTotalStudents();
    $totalLibrarians = getTotalLibrarians();
    $totalNotics = getTotalNotices();
    $totalCourses = getTotalCourses();
    
    // $totalBalance = userModel::getTotalBalance();
    $totalBalance = getTotalBalance();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adminStyle.css">
    <link rel="stylesheet" href="../../css/addTeacher.css">
    <title>Admin Dashboard</title>
<style>
    
.dashboard-table {
    margin-bottom: 20px;
    float: center; 
    max-width: 70%; 
    margin-right: 20px; 
}

.dashboard-table table {
    width: 100%;
    border-collapse: collapse;
}

.dashboard-table th,
.dashboard-table td {
    border: 1px solid #ccc;
    padding: 8px;
}

.dashboard-table th {
    background-color: #5bc0de;
    text-align: center; 
}

.dashboard-table tbody tr:nth-child(even) {
    background-color: white;
}

.dashboard-table tbody tr:hover {
    background-color: #ddd;
}

.brand-name {
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #0056b3;
    border-bottom: 1px solid black;
    border-top: 1px solid black;
}

.brand-name h1 {
    font-size: 24px;
    margin: 0;
    color: #fff;
}

.side-menu {
    width: 250px;
    background-color: #165aaa;
    padding-top: 5px;
    padding-left: 0px;
    text-align: center;
    float: left; 
}

.content {
    flex-grow: 1;
    padding: 10px;
    margin-left: 270px; 
}

.dashboard-table {
    margin-bottom: 5px;
    max-width: 100%;
}

.dashboard-table td a {
    display: inline-block;
    padding: 8px 16px;
    margin: 0 5px;
    text-decoration: none;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.dashboard-table td a:hover {
    background-color: #45a049;
}

.dashboard-table td {
    text-align: center; 
}

.search-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}

.search-container h2 {
    margin-bottom: 10px;
}

.search-container input[type="text"] {
    width: 300px; 
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}

.search-container input[type="button"] {
    background-color: #4CAF50; 
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.search-container input[type="button"]:hover {
    background-color: #45a049; 
}

.total-counts {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}


.total-counts .dashboard-table {
    flex-basis: calc(30% - 20px); 
    margin-right: 20px;
    padding: 18px;
}

.total-counts .dashboard-table:last-child {
    margin-right: 0;
}

.total-counts .dashboard-table table {
    width: 100%;
    border-collapse: collapse;
}

.total-counts .dashboard-table th,
.total-counts .dashboard-table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: center;
}

.total-counts .dashboard-table th {
    background-color: #5bc0de;
    color: #fff; 
}


.total-counts .dashboard-table.teachers th {
    background-color: #FFA500; 
}

.total-counts .dashboard-table.students th {
    background-color: #FF6347; 
}

.total-counts .dashboard-table.librarians th {
    background-color: #4682B4; 
}

.total-counts .dashboard-table h2 {
    text-align: center;
}

.total-counts .dashboard-table.earning th {
    background-color: #168e18; 
}

.total-counts .dashboard-table.notice th {
    background-color: #3c3c3c;
}

.total-counts .dashboard-table.course th {
    background-color: #6a40d0;
; 
}



</style>
<script>
        function filterTable(inputId, tableId) {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById(inputId);
            filter = input.value.toUpperCase();
            table = document.getElementById(tableId);
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) {
                tr[i].style.display = "none";
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break;
                        }
                    }
                }
            }
        }
    </script>
</head>
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
            <li class="active"><a href="adminDash.php"><img src="../../images/dashboard (2).png" alt=""> Dashboard</a></li>
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
    
</div>

    <div class="total-counts">
        <div class="dashboard-table teachers">
            <h2>Total Teachers</h2>
            <table>
                <thead>
                    <tr>
                        <th>Total Teachers</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ">-"; ?><?php echo $totalTeachers; ?><?php echo "-<"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dashboard-table students">
            <h2>Total Students</h2>
            <table>
                <thead>
                    <tr>
                        <th>Total Students</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ">-"; ?><?php echo $totalStudents; ?><?php echo "-<"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dashboard-table librarians">
            <h2>Total Librarians</h2>
            <table>
                <thead>
                    <tr>
                        <th>Total Librarians</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ">-"; ?><?php echo $totalLibrarians; ?><?php echo "-<"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="total-counts">

        <div class="dashboard-table earning">
            <h2>Total Earning</h2>
            <table>
                <thead>
                    <tr>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ">"; ?><?php echo $totalBalance; ?><?php echo "-<"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dashboard-table notice">
            <h2>Total Notice</h2>
            <table>
                <thead>
                    <tr>
                        <th>Notices</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ">-"; ?><?php echo $totalNotics; ?><?php echo "-<"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="dashboard-table course">
            <h2>Total Courses</h2>
            <table>
                <thead>
                    <tr>
                        <th>Course</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo ">-"; ?><?php echo $totalCourses; ?><?php echo "-<"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


    <div class="content">
        <div class="search-container">
            <h2>Teacher Search</h2>
            <input type="text" id="teacherSearch" placeholder="Search here" onkeyup="filterTable('teacherSearch', 'teacherTable')" />
        </div>
        <div class="dashboard-table">
            <h2 colspan="2" style="text-align: left;">Number of Teachers</h2>
            <table id="teacherTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($teachers as $teacher): ?>
                        <tr>
                            <td><?php echo $teacher['id']; ?></td>
                            <td><?php echo $teacher['name']; ?></td>
                            <td><?php echo $teacher['email']; ?></td>
                            <td><?php echo $teacher['mobile']; ?></td>
                            <td><?php echo $teacher['gender']; ?></td>
                            <td><?php echo $teacher['dob']; ?></td>
                            <td><?php echo $teacher['subject']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="search-container">
            <h2>Librarian Search</h2>
            <input type="text" id="librarianSearch" placeholder="Search here" onkeyup="filterTable('librarianSearch', 'librarianTable')" />
        </div>
        <div class="dashboard-table">
            <h2 colspan="2" style="text-align: left;">Number of Librarians</h2>
            <table id="librarianTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($librarians as $librarian): ?>
                        <tr>
                            <td><?php echo $librarian['id']; ?></td>
                            <td><?php echo $librarian['name']; ?></td>
                            <td><?php echo $librarian['email']; ?></td>
                            <td><?php echo $librarian['mobile']; ?></td>
                            <td><?php echo $librarian['gender']; ?></td>
                            <td><?php echo $librarian['dob']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="search-container">
            <h2>Student Search</h2>
            <input type="text" id="studentSearch" placeholder="Search here" onkeyup="filterTable('studentSearch', 'studentTable')" />
        </div>
        <div class="dashboard-table">
            <h2 colspan="2" style="text-align: left;">Number of Students</h2>
            <table id="studentTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Present Address</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo $student['id']; ?></td>
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo $student['email']; ?></td>
                            <td><?php echo $student['mobile']; ?></td>
                            <td><?php echo $student['gender']; ?></td>
                            <td><?php echo $student['dob']; ?></td>
                            <td><?php echo $student['address']; ?></td>
                            <td><?php echo $student['class']; ?></td>
                            <td><?php echo $student['section']; ?></td>
                            <td><?php echo $student['roll']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
