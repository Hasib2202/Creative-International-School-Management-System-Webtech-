<?php
$title= "Course Details";
// $javascript = "../script/courseSearch.js";
require_once('../model/DatabaseConnection.php');
require_once('../controller/getRegisteredCoursesController.php');
$courseList=getRegisteredCoursesController();
include('header.php');
?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Course Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa; /* Light gray background color */
      color: #212529; /* Black text color */
    }

    .container {
      display: flex;
    }

    .sidebar {
      width: 250px;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .main-content {
      flex-grow: 1;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      border: 1px solid #dee2e6; /* Light gray border color */
    }

    th {
      background-color: #f2f2f2; /* Light gray background color for table header */
      font-weight: bold;
    }

    input[type="text"] {
      width: 200px;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ced4da; /* Light gray border color */
      border-radius: 5px;
    }

    input[type="button"] {
      padding: 10px 20px;
      background-color: #007bff; /* Blue background color */
      color: #fff; /* White text color */
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="button"]:hover {
      background-color: #0056b3; /* Darker blue color on hover */
    }
  </style>
</head>
<body>


  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <center><h2>Course Details</h2></center>
      
      <div id="myh1" class="">
        <br>
        <?php
          echo "<table border = 1 width='100%' cellspacing = 0  >
                <tr align = 'center'>
                    <td>ID</td>
                    <td>Course Name</td>
                    <td>Class</td>
                    <td>Description</td>
                </tr>";
          for($i = 0; $i<count($courseList); $i++){
            echo "<tr align = 'center'>
                    <td>{$courseList[$i]['id']}</td>
                    <td>{$courseList[$i]['course_name']}</td>
                    <td>{$courseList[$i]['class']}</td>
                    <td>{$courseList[$i]['description']}</td>
                  </tr>";
          }
          echo "</table>";
        ?>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
