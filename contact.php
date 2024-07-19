<?php
include "./connect.php";

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];

  $sql = "insert into contact (fname,lname,email,mobile) values ('$fname','$lname','$email','$mobile')";
  if ($conn->query($sql)) {
    // echo "Contact form submitted";
  } else {
    echo "Contact form not submmitted";
  }
};
?>
<!----------------------------------------HTML------------------------------------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediaGlitz Contact</title>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- bootstarp css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- bootstrap icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- css external link -->
  <link href="css/style1.css" rel="stylesheet">
  <!-- css external con link -->
  <link href="./css/constyle3.css" rel="stylesheet">
  <!-- ==== Iconsout css==== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>

<body>
  <!-- Navbar start-->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#"><i class="fa-brands fa-mendeley"></i>MediaGlitz</a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Mediaglitz</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 active" aria-current="page" href="index1.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="about.php">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="project.php">Testimonials</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./sound.php">Sound</a></li>
                <li><a class="dropdown-item" href="./light.php">Lights</a></li>
                <li><a class="dropdown-item" href="./ledwall.php">Ledwall</a></li>

              </ul>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="book.php">Booking Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2" id="contact" href="contact.php">Enquiry</a>
            </li>
            <!-- <li class="nav-item">
                    <a class="nav-link mx-lg-2" id="Live" href="./live.php">Live</a>
                  </li> -->
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="./index.php" class="Register-button">Register</a>
      <!-- <a href="login.php" class="login-button">Login</a> -->
      <button class="navbar-toggler pe-0 m-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- navbar End -->
  <main>
    <!-- contact def -->
    <div class="conta">
      <h3>Get in touch</h3>
      <aside> We are eager to hear from you and assist with your event needs. Please feel free to get in touch with us through any of the following methods.</aside>
    </div>
    <!-- contact form -->
    <div class="container">
      <form action="./contact.php" method="post" enctype="multipart/form-data">

        <h2>General Enquiry</h2>
        <input type="text" id="firstName" name="fname" placeholder="First Name" required>
        <input type="text" id="lastName" name="lname" placeholder="Last Name" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="tel" id="mobile" name="mobile" placeholder="Mobile" maxlength="10" required>
        <textarea required name="text"></textarea>
        <input type="submit" value="Submit" name="submit" id="button">
      </form>
    </div>
    <!-- End contact form -->
  </main>
  <!-- footer center -->
  <footer>
    <div class="contact-info">
      <h3>Contact Info</h3>
      <!-- <p>123-456-789</p> -->
      <div class="infobox">
        <div><span class="icon"><ion-icon name="location"></ion-icon></span>
          <p>No: 10, PT Rajan Salai, KK Nagar
            Chennai - 600078, Tamil Nadu, India
            Landmark: Shivan Park / Karnataka Bank Building
          </p>
        </div>
        <div>
          <span class="icon"><ion-icon name="mail"></ion-icon>
          </span>
          <a href="mailto:mediaglitzadmin@gmail.com">mediaglitzadmin@gmail.com</a>
        </div>
        <div>
          <span class="icon"><ion-icon name="call"></ion-icon>
          </span>
          <a href="tel:+1234567890">+91 1234567890</a>
        </div>
      </div>
    </div>
    <!-- map -->
    <div class="map">
      <h3 style="margin:20px;">Map</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d50816077.99790616!2d62.69222786359385!3d11.64263163465303!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52678b6ec7b719%3A0xc0cf6f565e5669c7!2sSLA%20Institute!5e0!3m2!1sen!2sin!4v1713693055578!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- <footer start>  -->
    <footer class="footer-distributed">

      <div class="footer-left">
        <h3>Media<span>Glitz</span></h3>

        <p class="footer-links">
          <a href="./index1.php">Home</a>
          |
          <a href="./about.php">About</a>
          |
          <a href="./project.php">Testimonials</a>
          |
          <a href="./contact.php">Enquiry</a>
          |
        </p>
        <p class="footer-links">
          <a href="#">Our Services</a>
          |
          <a href="./sound.php">Sounds</a>
          |
          <a href="./light.php">Lights</a>
          |
          <a href="./ledwall.php">Ledwall</a>
          |
        </p>
        <div>
          <img src="./css/soundpic/2.jpg" width="100" height="100">
          <img src="./css/new img/Karen-Zoid-mediapro2-.webp" width="100" height="100">
          <img src="./css/images/WhatsApp-Image-2020-12-16-at-15.37.19-27.jpeg" width="100" height="100">
        </div>
      </div>

      <div class="footer-center">
        <div>
          <div style="margin-top:20px;">
            <i class="fa fa-map-marker"></i>
            <p><a href="">Location</a></p>
          </div>
          </a>

        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p><a href="">+91 8681041042</a></p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:#mohamedismail6362@gmail.com">mediaglitz@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          <strong>MediaGlitz</strong>
          Founded in 1998, Mediaglitz has pushed the boundaries of technical excellence & service provision for turnkey audio rental solutions.
        </p>
        <div class="footer-icons">
          <ul class="sci">
            <li><a href="https://www.facebook.com/soundcomindia"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="https://twitter.com/SOUND_COM?t=9niQ_nSFx1bi4HRp7Wqy4Q&s=09"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="https://www.linkedin.com/company/sound.com/"><ion-icon name="logo-linkedin"></ion-icon></a></li>
            <li><a href="https://www.instagram.com/sound_com/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <a href="https://youtube.com/@SOUNDCOMINDIA?si=BOf0tHBQh30qcSsw"><i class="fa fa-youtube"></i></a>
          </ul>
        </div>
        <p><a href="./privacy.php" style="color: #009970;margin: 5px;">Privacy |</a><a href="./disclaimer.php" style="color: #009970;">Disclaimer|</a></p>
        <hr>
        <b style="color: white;">Powered By <a href="http://www.pearlsys.in/" style="color: #009970;">PearlSys</a></b>

        <p class="footer-company-name" style="margin-top:7px;color: white;">Copyright © 2024 <strong>MediaGlitz</strong> All rights reserved</p>
      </div>

      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
      <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="./css/foot.css">
</body>

</html>
