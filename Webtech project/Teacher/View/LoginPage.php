<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  
  <style> 
  body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}
.background {
      background-image: url('../Resources/PP.jpg'); 
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: -1; 
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 5px;
      overflow: hidden;
      background-color: bisque; 
    }

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

nav a {
  margin-left: 10px;
  text-decoration: none;
  color: blue;
}

main {
  text-align: center;
}

fieldset {
  border: none;
}

legend {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 15px;
}

.input-group label {
  display: inline-block;
  width: 100px;
  text-align: right;
  margin-right: 10px;
}

.input-group input {
  width: 200px;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.button-group {
  margin-top: 20px;
}

.button-group input[type="submit"],
.button-group a {
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: blue;
  color: white;
  text-decoration: none;
  cursor: pointer;
}

.button-group input[type="submit"]:hover,
.button-group a:hover {
  background-color: darkblue;
}

#error-message {
  color: blue;
  font-weight: bold;
}
nav {
  display: flex;
  justify-content: flex-end;
}

nav a {
  display: inline-block;
  padding: 4px 9px; 
  border: 1px solid blue;
  border-radius: 5px;
  margin-left: 8px; 
  text-decoration: none;
  color: blue;
}

nav a:first-child {
  margin-left: 0;
}

nav a:hover {
  background-color: blue;
  color: white;
}
  </style>
  
</head>
<body>
  <div class="container">
    <header>
    <img src="../Resources/school_logo.png" alt="School Logo" style="width: 400px; height: 200px;">

      <nav>  
        <a href="Registration.php">Registration</a>
      </nav>
    </header>
    <main>
      <form id="loginForm" action="../Controller/LogCheck.php" method="post" onsubmit="return loginValid()">
        <fieldset>
          <legend>Login</legend>
          <div class="input-group">
            <label for="id">ID:</label>
            <input type="text" id="id" name="ID" required>
          </div>
          <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="button-group">
            <!-- <input type="submit" name="submit" value="Login"> -->
            <input type="submit" name="submit" value="Login" style="font-weight: bold;">
            <a href="Registration.php" class="signup-btn">Sign Up</a>
          </div>
          <div id="error-message"></div>
        </fieldset>
        <div class="background"></div>

<div class="container">
 
  <div class="content">
  </div>
  
</div>
      </form>
    </main>
    <?php include("TeacherFooter.php") ?>
  </div>
  <script src="../Script/LogCheck(script).js"></script>
</body>
</html>
