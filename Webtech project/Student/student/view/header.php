<?php

if(!isset($_COOKIE['flag'])) {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>
  </head>
<body>
  <div class="header">
    <div class="header-content">
      <img class="logo" src="../resources/logo.png" alt="Logo">
      <h1 class="header-title">Creative International School Mangement System</h1>
      <div class="header-links">
        <a href="../controller/logOut.php">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>


  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    .header {
      background-color: #fff;
      padding: 10px 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .logo {
      height: 50px;
      width: 150px;
      margin-right: 10px;
    }

    .header-content {
      display: flex;
      align-items: center;
    }

    .header-title {
      flex-grow: 1;
      text-align: center;
      margin: 0;
      background :blue;
    }

    .header-links {
      text-align: right;
    }

    .header-links a {
      color: #007bff;
      text-decoration: none;
      margin-left: 20px;
    }

    .header-links a:hover {
      text-decoration: underline;
    }
  </style>
