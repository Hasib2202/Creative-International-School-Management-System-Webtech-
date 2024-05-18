<!DOCTYPE html>
<html>
<head>
  <title>Edit Registration</title>
  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
            background-color: #f0f0f0; 
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
      max-width: 100%;
      margin: 20px auto;
      padding: 20px;
      border-radius: 5px;
      overflow: hidden;
      background-color: bisque; 
    }
header {
  background-color: #8FBC8F;
  color: #fff;
  padding: 20px 0;
}
.header-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 90%;
  margin: 0 auto;
}
.header-container img {
  height: 40px;
  width: 40px;
}

nav ul {
  list-style-type: none;
}

nav ul li {
  display: inline;
  margin-right: 20px;
}
nav ul li a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px 0;
}
.registration-form {
  background-color: #fff;
  width: 90%;
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.registration-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 15px;
}

.input-group label {
  display: inline-block;
  width: 30%;
  font-weight: bold;
}
.input-group input[type="text"],
.input-group input[type="email"],
.input-group input[type="password"],
.input-group input[type="date"] {
  width: 60%;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

.input-group input[type="radio"] {
  margin-right:5px;
}
.button-group {
  text-align: center;
  margin-top: 15px;
}

.error-message {
  color: red;
  font-weight: bold;
  text-align: center;
}

footer {
  margin-top: 20px;
  text-align: center;
  padding: 10px 0;
}
nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: black; /* Link color */
            padding: 8px 20px;
            border: 2px solid black; /* Border color */
            border-radius: 5px; /* Border radius to create rounded corners */
            transition: all 0.3s ease; /* Smooth transition effect */
        }

        nav ul li a:hover {
            background-color: black; /* Background color on hover */
            color: white; /* Text color on hover */
        }
        .button-group {
  /* Optional: Adjust spacing between buttons */
  margin-top: 10px;
}

.button-group input[type="submit"],
.button-group input[type="reset"] {
  /* Increase width and height */
  width: 100px;
  height: 30px;
  /* Apply other styles as needed */
  background-color: #006400;
  color: black;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

/* Adjust hover styles if needed */
.button-group input[type="submit"]:hover,
.button-group input[type="reset"]:hover {
  /* Example: Darken background color */
  background-color: #004d00;
}



  </style>
  
</head>
<body>
  <header>
    <div class="header-container">
    <img src="../Resources/school_logo.png" alt="School Logo" style="width: 350px; height: 70px;">

      <nav>
        <ul>
          <li><a href="LoginPage.php" >Login</a></li>
          <li><a href="Registration.php">Registration</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <section class="registration-form">
      <h2>Edit Registration</h2>
      <form method="post" id="RegistrationForm" action="../Controller/RegCheck.php" onsubmit="return Registration()">
        <fieldset>
          <legend>Personal Information</legend>
          <div class="input-group">
            <label for="uname">Name:</label>
            <input type="text" id="uname" name="uname" value="" placeholder="Enter Name">
          </div>
          <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="" placeholder="Enter proper Email">
          </div>
          <div class="input-group">
            <label for="mobile">Mobile No.:</label>
            <input type="text" id="mobile" name="mobile" value="" placeholder="Enter Mobile Number">
          </div>
          <div class="input-group">
            <label for="id">ID:</label>
            <input type="text" id="id" name="ID" value="" placeholder="Enter Unique ID">
          </div>
          <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter Password">
          </div>
          <div class="input-group">
            <label for="repass">Confirm Password:</label>
            <input type="password" id="repass" name="confirm" placeholder="Enter Confirm Password">
          </div>
          <div class="input-group">
            <fieldset>
              <legend>Gender:</legend>
              <input type="radio" id="male" name="gender" value="male">
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female">
              <label for="female">Female</label>
              <input type="radio" id="other" name="gender" value="other">
              <label for="other">Other</label>
            </fieldset>
          </div>
          <div class="input-group">
            <fieldset>
              <legend>Date of Birth:</legend>
              <input type="date" id="dob" name="dob" value="">
            </fieldset>
          </div>
          <div class="button-group">
    <input type="submit" name="submit" value="Submit" style="background-color: #006400; color: black;">
    <input type="reset" name="reset" value="Reset" style="background-color: #DC143C; color: black;">
</div>
<div id="error_message" class="error-message"></div>

          
        </fieldset>
        <div class="background"></div>

<div class="container">
  <div class="content">
  </div>
</div>
      </form>
    </section>
  </main>

  <footer>
    <?php include("TeacherFooter.php") ?>
  </footer>

</body>
</html>
