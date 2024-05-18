<?php
$title= "Result";
include('header.php');
include_once('../model/DatabaseConnection.php');
$viewmyresult = getUserbyid($_COOKIE['id']);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Result</title>
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
  </style>
</head>
<body>


  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <fieldset>
        <legend>My Result</legend>
        <table>
          <tr>
            <td>Name</td> 
            <td>:</td>
            <td><?php echo $viewmyresult['name']; ?></td>
          </tr>
          <tr>
            <td>Marks</td> 
            <td>:</td>
            <td><?php echo $viewmyresult['marks']; ?></td>
          </tr>
        </table>
      </fieldset>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
