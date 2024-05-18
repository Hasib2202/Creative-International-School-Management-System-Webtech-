<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>


</head>

<body>
  <div class="container">
    <div class="content">
      <img class="logo" height="50px" width="150px" src="../resources/logo.png" alt="Logo">
      <h1>School Management System</h1>

      <form action="../controller/logCheck.php" onsubmit="return val()" method="post">
        <fieldset>
          <legend>LOGIN</legend>
          <label for="id">ID:</label>
          <input type="text" id="id" name="id" required>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <input type="checkbox" name="" value=""> Remember Me <br><br>
          <input type="submit" name="submit" value="LOGIN">
          <a href="registration.php">Sign Up</a>
          <div id="error_message"></div>
        </fieldset>
      </form>
      
    </div>
  </div>
</body>

</html>



  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      background-image: url('background.jpg'); 
      background-size: cover;
      background-position: center;
      height: 100vh; 
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      max-width: 500px;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      display: block;
      margin: 0 auto;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      margin-top: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #4caf50;
      color: white;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    a {
      text-decoration: none;
      color: #007bff;
      display: block;
      text-align: right;
      margin-top: 10px;
    }

    #error_message {
      color: red;
      font-weight: bold;
      text-align: center;
    }

    
  </style>
