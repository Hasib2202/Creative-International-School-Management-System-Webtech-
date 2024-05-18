<?php
require_once('MVC/Models/userModel.php');
$notices = getAllNotice();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creative International School Management System</title>
    <style>
       video {
        width: 100%;
        height: 100%;
        display: block;
        margin-bottom: 20px; /* Adjust as needed */
      }
      

      body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.header {
  background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
  color: white;
  padding: 2em;
  text-align: center;
}

.header h1 {
  margin: 0;
  font-size: 2.5em;
}

.header p {
  font-size: 1.2em;
}

.nav {
  background-color: #333;
  overflow: hidden;
  text-align: center;
}

.nav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.nav a:hover {
  background-color: #ddd;
  color: black;
}

.content {
  padding: 20px;
}

/* Updated course-container styles */
.course-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
  justify-content: center;
}

/* Updated card styles */
.card {
  background: white;
  border-radius: 8px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  padding: 20px;
  box-sizing: border-box;
  animation: fadeInUp 0.5s ease-out forwards;
  opacity: 0;
  transition: transform 0.3s;
}

.card:hover {
  transform: scale(1.05);
}

.card img {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.card-content {
  text-align: center;
}

.card-content h2 {
  margin-top: 10px;
  color: #333;
}

.card-content p {
  color: #666;
}

.footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 10px;
}

/* !new animation */
.navbar {
  display: flex;
  justify-content: center;
  background-color: #333;
  overflow: hidden;
  margin-bottom: 20px;
}

.navbar a {
  padding: 14px 16px;
  text-decoration: none;
  color: white;
  transition: color 0.3s, transform 0.3s;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
  transform: scale(1.1);
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #333;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  transition: background-color 0.3s, transform 0.3s;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
  transform: scale(1.05);
}


.course-card {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: 20px;
}

.course-list {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.course-item {
  text-align: center;
  margin: 10px;
}

.course-item img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 10px;
}

.course-item p {
  font-weight: bold;
  color: #333;
}
    </style>
    <script>
      const videoJS = document.getElementById('myVideoJS');
      videoJS.play();
      videoJS.loop = true;
    </script>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="header">
      <h1>Creative International School Management System</h1>
      <p>Empowering Education through Technology</p>
    </div>

    <video id="myVideo" autoplay loop muted>
      <source src="images/video.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    
    <nav class="navbar">
      <a href="MVC/Views/about.php">About</a>
      <a href="">Students</a>
      <a href="">Teachers</a>
      <a href="">Courses</a>
      <a href="">Goals</a>
      <a href="MVC/Controllers/loginController.php">Login</a>
    </nav>

    <div class="content">
      <div class="card">
        <h2 colspan="2" style="text-align: left;">Notices</h2>
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
          <table border="0">
            <tbody>
              <?php foreach ($notices as $notice): ?>
                <tr>
                  <td><?php echo $notice['notice']; ?></td>
                  <td><?php echo $notice['date']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </marquee>
      </div>

      <div class="card">
        <h2>Welcome to the Creative International School Management System.</h2>
        <p>Thanks for your support.</p>
      </div>

      <div class="footer">
        <p></p>
      </div>

      <br>
      
      <div class="card course-card">
  <h2>Offered Courses</h2>
  <div class="course-list">
    <div class="course-item">
      <img src="images/sc.jpg" alt="Science">
      <p>Science</p>
    </div>
    <div class="course-item">
      <img src="images/bus.jpg" alt="Business">
      <p>Business</p>
    </div>
    <div class="course-item">
      <img src="images/ir.jpg" alt="IR">
      <p>IR</p>
    </div>
  </div>
</div>
      <div class="container">
  <!-- <h2>Golas</h2>  -->
 
        <div class="course-container">
          
          <div class="card">

            <img src="images/math.jpg" alt="Image 1">
            <div class="card-content">
              <h2>Math</h2>
              <p>Detail coming soon..</p>
            </div>
          </div>
          <div class="card">
            <img src="images/vlog.jpg" alt="Image 2">
            <div class="card-content">
              <h2>Video Vlog</h2>
              <p>Detail coming soon..</p>
            </div>
          </div>
          <div class="card">
            <img src="images/free1.jpg" alt="Image 3">
            <div class="card-content">
              <h2>Free Course</h2>
              <p>Detail coming soon..</p>
            </div>
          </div>
        </div>
      </div>


      <div class="footer">
        <p></p>
      </div>

      <br>



      <div class="card">
        <h2>Up Comming Events</h2>
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
          <p>Events coming soon..</p>
        </marquee>
      </div>
    </div>

    <div class="footer">
      <p>Creative International School Management System</p>
    </div>
  </body>
</html>