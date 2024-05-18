<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About - Creative International School Management System</title>
  <link rel="stylesheet" href="../../css/style.css" />
  <style>
    /* Custom CSS for About page */
    .about-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 40px;
    }

    .about-content {
      max-width: 800px;
      text-align: center;
      margin-bottom: 40px;
    }

    .about-video {
      max-width: 800px;
      margin-bottom: 40px;
    }

    .about-video video {
      width: 100%;
      height: auto;
    }

    .about-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 1000px;
    }

    .about-gallery img {
      width: 300px;
      height: 200px;
      object-fit: cover;
      margin: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    /* Existing CSS styles... */

/* Custom CSS for About page */
.about-section {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 60px 0;
  background-color: #f8f8f8;
}

.about-content {
  max-width: 800px;
  text-align: center;
  margin-bottom: 60px;
  padding: 0 20px;
}

.about-content h2 {
  font-size: 36px;
  color: #333;
  margin-bottom: 20px;
}

.about-content p {
  font-size: 18px;
  line-height: 1.6;
  color: #666;
  margin-bottom: 20px;
}

.about-video {
  max-width: 800px;
  margin-bottom: 60px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.about-video video {
  width: 100%;
  height: auto;
  border-radius: 8px;
}

.about-gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  grid-gap: 20px;
  max-width: 1200px;
  padding: 0 20px;
}

.about-gallery h3 {
  font-size: 24px;
  color: #333;
  text-align: center;
  margin-bottom: 20px;
  grid-column: 1 / -1;
}

.about-gallery img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  transition: transform 0.3s ease-in-out;
}

.about-gallery img:hover {
  transform: scale(1.05);
}

@media (max-width: 768px) {
  .about-content h2 {
    font-size: 28px;
  }

  .about-content p {
    font-size: 16px;
  }

  .about-gallery img {
    height: 160px;
  }
}
  </style>

<script>
      const videoJS = document.getElementById('myVideoJS');
      videoJS.play();
      videoJS.loop = true;
    </script>
</head>
<body>
  <div class="header">
    <h1>Creative International School Management System</h1>
    <p>Empowering Education through Technology</p>
  </div>

  <nav class="navbar">
    <a href="../../home.php">Home</a>
    <a href="">About</a>
    <a href="">Students</a>
    <a href="">Teachers</a>
    <a href="">Courses</a>
    <a href="">Goals</a>
    <a href="login.php">Login</a>
  </nav>

  <div class="about-section">
    <div class="about-content">
      <h2>About Our School</h2>
      <p>Creative International School is a premier educational institution dedicated to providing high-quality education and nurturing the talents of our students. We strive to create a supportive and engaging learning environment that fosters academic excellence, personal growth, and a lifelong love for learning.</p>
      <p>Our experienced faculty members are passionate about their subjects and committed to helping students reach their full potential. We offer a diverse range of courses and extracurricular activities to cater to the diverse interests and talents of our students.</p>
    </div>

    <div class="about-video"autoplay loop muted>
      <h3 align="center">Watch Our School Video</h3>
      <video autoplay loop muted>
        <source src="../../images/about.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>

    <div class="about-gallery">
      <h3>School Gallery</h3>
      <img src="../../images/1.jpg" alt="Image 1" />
      <img src="../../images/2.jpg" alt="Image 2" />
      <img src="../../images/3.jpg" alt="Image 3" />
      <img src="../../images/4.jpg" alt="Image 4" />
      <img src="../../images/5.jpg" alt="Image 4" />
      <img src="../../images/6.jpg" alt="Image 4" />

    </div>
  </div>

  <div class="footer">
    <p>Creative International School Management System</p>
  </div>
</body>
</html>