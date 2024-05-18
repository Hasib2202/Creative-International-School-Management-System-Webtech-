<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/logStyle.css">

</head>
<body>
    
    <div class="header">
      <h1>Creative International School Management System</h1>
      <p>Empowering Education through Technology</p>
    </div>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="../Controllers/loginCheckController.php"> 
            <input type="text" name="id" placeholder="ID" >
            <input type="password" name="password" placeholder="Password" >
            <button type="submit" name="submit">Login</button>
        </form>
        <div class="forgot-password">
        </div>
        <div class="register">
            <p>Don't have an account? <a href="registration.php">Register</a></p>
            <a href="../../home.php">Home</a>
        </div>
    </div>
</body>
</html>
