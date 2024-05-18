<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Teacher Search</title>
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
  <?php include('header.php'); ?>

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <?php
      $name = $_REQUEST['name'];

      $con = mysqli_connect('localhost', 'root', '', 'school_management_system');
      $sql = "SELECT * FROM teacher WHERE name LIKE '%{$name}%'";
      $result = mysqli_query($con, $sql);

      $response = "<table>
                    <tr align='center'>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Gender</th>
                      <th>Date of Birth</th>
                    </tr>";

      while ($row = mysqli_fetch_assoc($result)) {
        $response .= "<tr align='center'>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['mobile']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['dob']}</td>
                      </tr>";
      }

      $response .= "</table>";

      echo $response;
      ?>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
