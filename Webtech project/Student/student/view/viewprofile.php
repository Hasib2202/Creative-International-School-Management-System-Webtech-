<?php
$title= "View Profile";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viemyinfo = getUserbyid($_COOKIE['id']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
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

    .main-content fieldset {
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .main-content legend {
      font-weight: bold;
      margin-bottom: 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    a {
      text-decoration: none;
      color: #007bff;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <fieldset>
        <legend>MY PROFILE</legend>
        <table>
          <tr>
            <td>Name</td>
            <td>:</td>
            <td><?php echo $viemyinfo['name']; ?></td>
          </tr>

          <tr>
            <td>Email</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['email']; ?></td>
          </tr>

          <tr>
            <td>Mobile No</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['mobile']; ?></td>
          </tr>
        
          <tr>
            <td>Student Id</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['id']; ?></td>
          </tr>

          <tr>
            <td>Gender</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['gender']; ?></td>
          </tr>

          <tr>
            <td>Date of Birth</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['dob']; ?></td>
          </tr>

          <tr>
            <td>Present Address</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['p_address']; ?></td>
          </tr>

          <tr>
            <td>Class</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['class']; ?></td>
          </tr>
          
          <tr>
            <td>Section</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['section']; ?></td>
          </tr>

          <tr>
            <td>Roll No</td> 
            <td>:</td>
            <td><?php echo $viemyinfo['roll']; ?></td>
          </tr>
        </table>
      </fieldset>
      <a href="edit.php">Edit</a>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
