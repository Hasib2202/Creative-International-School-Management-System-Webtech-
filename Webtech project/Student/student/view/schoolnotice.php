
<?php
$title= "School Notice";
require_once('../model/DatabaseConnection.php');
$noticeList=getAllschoolnotice();
include('header.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>School Notice</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #007bff; /* Blue background color */
      color: #fff; /* White text color */
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
      color: #000; /* Black text color for table */
    }

    th, td {
      padding: 10px;
      border: 1px solid #ccc;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
  </style>
</head>
<body>
  

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <form method="post" action="">
        <fieldset>
          <legend>School Notice</legend>
          <?php
          echo "<table>
                  <tr align='center'>
                    <th>Notice</th>
                    <th>Time</th>
                  </tr>";
          foreach ($noticeList as $notice) {
            echo "<tr align='center'>
                    <td>{$notice['notice']}</td>
                    <td>(Time: {$notice['time']})</td>
                  </tr>";
          }
          echo "</table>";
          ?>
        </fieldset>
      </form>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
