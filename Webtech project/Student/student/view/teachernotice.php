<?php
$title= "Teacher Notice";
include('header.php');
require_once('../model/DatabaseConnection.php');
$GetNotice = getAllNotice();
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

    .main-content h2 {
      margin-bottom: 20px;
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
  </style>
</head>
<body>
  

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <center><h2>Teacher Notice</h2></center>
      <?php if (!empty($GetNotice)) : ?>
        <table>
          <tr>
            <th>Notice</th>
            <th>Time</th>
          </tr>
          <?php foreach ($GetNotice as $notice) : ?>
            <tr>
              <td><?=$notice['notice']?></td>
              <td><?=$notice['time']?></td>
            </tr>
          <?php endforeach; ?>
        </table>
      <?php else : ?>
        <p>No notices available.</p>
      <?php endif; ?>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
