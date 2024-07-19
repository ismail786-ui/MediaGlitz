<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediaGlitz aboutus</title>
  <!-- bootstarp css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- bootstrap icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- css external link - 1 -->
  <link href="css/style1.css" rel="stylesheet">
  <!-- css external link - 2 -->
  <link rel="stylesheet" href="css/abtstyle2.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <!-- Navbar start-->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand me-auto" href="#"><i class="fa-brands fa-mendeley"></i>MediaGlitz</a>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><i class="fa-brands fa-mendeley"></i>Mediaglitz</h5>
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
              <a class="nav-link mx-lg-2" href="contact.php">Enquiry</a>
            </li>
          
            <li class="nav-item">
              <a class="nav-link mx-lg-2" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <a href="./index.php" class="Register-button">Register</a>
      <button class="navbar-toggler pe-0 m-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!--End navbar-->
  <!-- about us -->
  <section class="about">
    <h4>About us</h4>
    <p>Founded in 1998, Mediaglitz has pushed the boundaries of technical excellence & service provision for turnkey audio rental solutions. Within a short span of time we have become globally recognized as the company to work with in India. This is because we have a history of handling the best events, some of them include - The Commonwealth Games, Oman Tattoo, Carlos Santana, Sting & Sunburn, both in the country and neighbouring regions.</p>
    <p>
      Since its inception, MediaGlitz has evolved from being just a sound rental company to re-defining the idea of delivering an experience of 'great sound'. We are a privately owned, founder-led company and we stand for our reputation and quality of work, with infusion of technology, processes and a professional approach. We are committed to enhancing the sound experience by helping the audience build a palette for perfect sound and enabling an artiste to amplify his/her vision in a concert. We are proud of the clarity, intelligibility and good sound coverage we provide to our audience.
    </p>
    <h4>Our People</h4>
    <p>At MEDIAGLITZ, a young, talented team is driven by a single minded passion for audio sound. We are driven by the fact that sound is one of the most organic of sciences and we understand it better every day. Be it a festival in the arid deserts or on the beaches of Goa, our teams can deliver a great show.

      MEDIAGLITZ has been a leader in the field of audio engineering and we are very proud to belong to the Indian subcontinent.</p>
  </section>
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
  </footer>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/foot.css">
  <footer>
</body>

</html>





