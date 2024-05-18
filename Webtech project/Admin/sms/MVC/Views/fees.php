<?php
    session_start();

    if(empty($_SESSION['id'])) {
        header("location:../Views/login.php");
    }

    require_once('../Models/userModel.php');

    $students = getAllStudents();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/adminStyle.css">
    <link rel="stylesheet" href="../../css/addTeacher.css">
    <title>View Student</title>
    <style>
        .dashboard-table {
            margin-bottom: 20px;
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
    </style>
    <script>
        function ajax() {
            let input = document.getElementById('name').value.toLowerCase();
            let table = document.getElementById('studentTable');
            let tr = table.getElementsByTagName('tr');

            for (let i = 1; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName('td');
                let match = false;

                for (let j = 0; j < td.length - 1; j++) { // Skip the last column (option buttons)
                    if (td[j]) {
                        let textValue = td[j].textContent || td[j].innerText;
                        if (textValue.toLowerCase().indexOf(input) > -1) {
                            match = true;
                            break;
                        }
                    }
                }

                if (match) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
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
        <h1>Welcome Admin, <?php echo $_SESSION['name']; ?></h1>
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
    
    <div class="search-container">
        <h2>Student list</h2>
        <input type="text" name="name" id="name" placeholder="Search here" onkeyup="ajax()" />
        <input type="button" name="" value="Search">
    </div>

    <div class="content">
        <div class="dashboard-table">
            <h2 colspan="2" style="text-align: left;">Number of Students</h2>
            <table id="studentTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <!-- <th>Email</th> -->
                        <th>Mobile</th>
                        <th>Gender</th>
                        <!-- <th>Date of Birth</th> -->
                        <!-- <th>Present Address</th> -->
                        <th>Class</th>
                        <th>Section</th>
                        <th>Roll</th>
                        <th>Current Balnce</th>
                        <th>Amount Paid</th>
                        <th>Total Amount</th>
                        <!-- <th>Paid Date</th> -->
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo $student['id']; ?></td>
                            <td><?php echo $student['name']; ?></td>
                            <!-- <td><?php echo $student['email']; ?></td> -->
                            <td><?php echo $student['mobile']; ?></td>
                            <td><?php echo $student['gender']; ?></td>
                            <!-- <td><?php echo $student['dob']; ?></td> -->
                            <!-- <td><?php echo $student['address']; ?></td> -->
                            <td><?php echo $student['class']; ?></td>
                            <td><?php echo $student['section']; ?></td>
                            <td><?php echo $student['roll']; ?></td>
                            <td><?php echo $student['fees']; ?></td>
                            <td><?php echo $student['balance']; ?></td>
                            <td><?php echo $student['amount']; ?></td>
                            <td>
                                <a href="payment.php?id=<?php echo $student['id']; ?>">Payment</a>
                                <!-- <a href="../Controllers/deleteStudentCheckController.php?id=<?php echo $student['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?');">Delete</a> -->
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
