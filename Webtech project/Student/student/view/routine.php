<?php
$title= "Routine";
require_once('../model/DatabaseConnection.php');
$routine=getAllroutine();
include('header.php');
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
  </style>
</head>
<body>

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <fieldset>
        <legend>Class Routine</legend>
        <table>
          <tr>
            <th>Day</th>
            <th>10:00-11:00</th>
            <th>11:00-12:00</th>
            <th>12:00-01:00</th>
            <th>01:00-02:00</th>
            <th>02:00-03:00</th>
            <th>03:00-04:00</th>
          </tr>
          <?php
          for($i = 0; $i<count($routine); $i++){
            echo "<tr>
                    <td>{$routine[$i]['day']}</td>
                    <td>{$routine[$i]['10:00-11:00']}</td>
                    <td>{$routine[$i]['11:00-12:00']}</td>
                    <td>{$routine[$i]['12:00-01:00']}</td>
                    <td>{$routine[$i]['01:00-02:00']}</td>
                    <td>{$routine[$i]['02:00-03:00']}</td>
                    <td>{$routine[$i]['03:00-04:00']}</td>
                  </tr>";
          }
          ?>
        </table>
      </fieldset>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
