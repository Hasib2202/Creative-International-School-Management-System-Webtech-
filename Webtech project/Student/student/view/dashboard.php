<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title><?=$title?></title>

</head>
<body>
  <?php include('header.php'); ?>

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <h1>Welcome to the Student Page</h1>
      
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>

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
  }
  
  .main-content h1 {
    color: #333;
  }
  </style>