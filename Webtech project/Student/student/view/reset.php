<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Change Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa; /* Light gray background color */
      color: #212529; /* Black text color */
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

    form {
      width: 100%;
      max-width: 400px; /* Limit the width of the form for better readability */
      margin: 0 auto; /* Center the form horizontally */
    }

    fieldset {
      border: 1px solid #dee2e6; /* Light gray border */
      padding: 20px;
      border-radius: 5px;
    }

    legend {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    table {
      width: 100%;
    }

    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ced4da; /* Light gray border */
      border-radius: 5px;
    }

    #error_message {
      color: red;
      font-weight: bold;
      text-align: center;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #007bff; /* Blue background color */
      color: #fff; /* White text color */
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #0056b3; /* Darker blue color on hover */
    }
  </style>
</head>
<body>
  <?php include('header.php'); ?>

  <div class="container">
    <?php include('sideBar.php'); ?> 
    <div class="main-content">
      <form class="" action="../controller/passCheck.php" onsubmit="return val()" method="post">
        <fieldset>
          <legend>Change Password</legend>
          <table>
            <tr>
              <td>Current Password:</td>
              <td><input type="password" id="currentpass"  name="cpas" value=""></td>
            </tr>
            <tr>
              <td>New Password:</td>
              <td><input type="password" id="newpass" name="npass" value=""></td>
            </tr>
            <tr>
              <td>Retype New Password:</td>
              <td><input type="password" id="retypepass" name="rnpass" value=""></td>
            </tr>
            <tr>
              <td colspan="2">
                <div id="error_message">
                  <!-- Error message will appear here -->
                </div>
              </td>
            </tr>
          </table>
          <hr>
          <input type="submit" name="Change" value="Change">
        </fieldset>
      </form>
    </div>
  </div>

  <?php include('footer.php'); ?>
</body>
</html>
