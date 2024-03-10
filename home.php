<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ralph Cadiz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	  <link rel="icon" href="/images/FORMAL PICTURE.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/styles.css">
	</head>

<body>
  <header class="site-header">
    <nav class="site-nav">
        <a class="logo" href="home.php">Ralph Cadiz</a>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="about_me.php">About Me</a></li>
            <li><a href="usages.php">Usages</a></li>
            <li><a href="Cadiz_Resume.pdf" download>Download CV</a></li>
            <li><a href="mailto:rmcadiz121@gmail.com">Contact Me</a></li>
        </ul>
        <ul class="menu menu-social">
            <li><a href="https://www.facebook.com/ralph.cadiz.35/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/sizzlingplatezx/" target="_blank"><i class="fab fa-instagram" style="color:var(--dark-pink)"></i></a></li>
            <li><a href="https://github.com/Atzushirou" target="_blank"><i class="fab fa-github"></i></a></li>
            <li><a href="logout.php" target="_self">Logout</a></li>
        </ul>
    </nav>
</header>
<main class="content">
    <section class="hero">
        <div>
            <h1>Hi, I'm Ralph.</h1>
            <p>I'm an aspiring 2nd Year Student, aiming for <strong>CyberSec Position</strong> in the near future. I'm currently studying in NU FV, in order to further gain my ground and prepare for my future endeavors.</p>
            <p>I'm currently learning Web Programming, and Almalinux OS.</p>
        </div>
    <div>
    <figure>
        <picture>
          <img src="images/FORMAL PICTURE.png" alt="Ralph piktyur" loading="eager" width="350" height="500" />
        </picture>
    </figure>
    </div>
    </section>
    </main>
    <footer class="site-footer">
        <p>Created by Ralph Cadiz. All rights reserved.</p>
    </footer>
    
    </body>
    </html>