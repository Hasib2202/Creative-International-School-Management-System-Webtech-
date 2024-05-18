<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../../css/registrationStyle.css">
</head>
<body>
    <div class="container">
        <h1>Creative International School Management System</h1>
        <h2>Registration</h2>
        <form action="../Controllers/registrationCheckController.php" method="post" id="registration-form">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id" placeholder="ID">
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" id="confirm-password" name="confirm_password" placeholder="Confirm password">
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="select_role">Select role</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                    <option value="student">Student</option>
                    <option value="librarian">Librarian</option>
                </select>
            </div>
            <div class="form-group">
                <div class="button-container">
                    <button type="submit" name="signup">Sign Up</button>
                    <button type="button" onclick="resetForm()">Reset</button>
                </div>
            </div>
            
            <div class="form-group">
                <p>Already have an account? <a href="login.php">Sign In</a></p>
                <p><a href="../../home.php.">Home</a></p>
            </div>
        </form>
    </div>

    <script>
        function resetForm() {
            document.getElementById("registration-form").reset();
        }
    </script>
</body>
</html>
