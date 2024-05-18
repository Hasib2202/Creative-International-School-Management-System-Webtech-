<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher About</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: bisque;
      margin: 0;
      padding: 0;
      background-image: url('../Resources/PP.jpg'); 
      background-size: cover;
    }
    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('../Resources/PP.jpg'); 
      background-size: cover;
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
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }


    .container {
      background-color: bisque;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      max-width: 800px;
      width: 90%;
      padding: 20px;
      text-align: center;
    }

    .profile-img {
      border-radius: 50%;
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    h1 {
      font-size: 2em;
      margin-bottom: 10px;
      color: #333;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 20px;
      color: #555;
    }

    .details {
      text-align: left;
      margin-top: 20px;
    }

    .details p {
      margin: 5px 0;
    }

    .details strong {
      color: #333;
    }

    .contact {
      margin-top: 20px;
    }

    .contact a {
      text-decoration: none;
      color: #0066cc;
      font-weight: bold;
    }

    .contact a:hover {
      text-decoration: underline;
    }

    .back-button {
      margin-top: 20px;
    }

    .back-button a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #0066cc;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      font-weight: bold;
    }

    .back-button a:hover {
      background-color: #004999;
    }
  </style>
</head>
<body>

  <div class="container">
    <img src="../Resources/teacher.jpg" alt="Profile Picture" class="profile-img">
    <h1>Alif Hossain Talha</h1>
    <p>ID: 09-12789-2</p>
    <p>Web Developer with a passion for coding and creating amazing websites. Experienced in HTML, CSS, and JavaScript.</p>
    
    <div class="details">
      <p><strong>Experience:</strong> 5 years in web development</p>
      <p><strong>Education:</strong> B.Sc. in Computer Science</p>
      <p><strong>Skills:</strong> HTML, CSS, JavaScript, PHP, MySQL</p>
      <p><strong>Interests:</strong> Teaching, Coding, Open-source projects</p>
    </div>

    <div class="contact">
      <p>For more information, visit my <a href="https://github.com/AlifTalha">GitHub Profile</a>.</p>
    </div>

    <div class="back-button">
      <a href="TeacherDashboard.php">Back to Home</a>
    </div>
  </div>

</body>
</html>
