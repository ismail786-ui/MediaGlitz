<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Line Arrays</title>
  <!-- amp external link -->
  <link type="text/css" href="./css/amp.css">
  <!-- bootstarp css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <!-- bootstrap icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- css external link -->
  <link href="css/style1.css" rel="stylesheet">
  <!-- css external link-2 -->
  <link rel="stylesheet" href="./css/sound.css">
  <!-- javascript Link -->
  <script src="./script.js/sound.js"></script>
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Amp css link -->
  <link href="./css/larray.css" rel="stylesheet">
  <link href="./css/amp.css" rel="stylesheet">
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!--flickity link css & js  -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
  </script>
</head>

<body>
  <!-- Navbar start-->
  <nav class="navbar navbar-expand-lg ">
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
  <!-- Inner navigation -->
  <main class="main">
    <nav class="innav">
      <a href="./amp.php">Amplification</a>
      <a href="./console.php">Consoles</a>
      <a href="./larray.php">Line Arrays</a>
      <a href="./mic.php">Microphones</a>
    </nav>
    <section>
      <div class="main-carousel">
        <div class="cell"><img src="./Menu Img/l array - 3.jpg" alt="">
          <h5>L-Acoustics K2 Series </h5>
          <p>These wireless baton-shaped LED tubes can be mounted just about anywhere to light up an environment, add a creative element to a keynote stage, and create a plethora of lighting effects. You can lay them on tables, you can hang them, you can stand them up, just about anything is possible.</p>
        </div>
        <div class="cell"> <img src="Menu Img/L array - 6.jpg" alt="">
          <h5>K2 Loading...</h5>
          <p>A Follow Spot is a manually operated moving light typically used to highlight a featured actor, often in musicals or other presentational productions. With traditional follow spots, the operator has control over the iris (size of the circle), color (through use of drop in gels) in addition to pan and tilt.</p>
        </div>
        <div class="cell"> <img src="Menu Img/L array-4.jpg" alt="">
          <h5>V-dosc</h5>
          <p>Working with Mediaglitz has been a fantastic journey and ever since they took on the reigns of providing audio equipment for our concerts & awards functions.</p>
        </div>
        <div class="cell"><img src="Menu Img/larray - 1.jpg" alt="">
          <h5>K28 Series</h5>
          <p>Once used mainly for television and film lighting, LED pixel tube lights have taken the event planning industry by storm not only because of their unique look but also because they’re so easy to use and implement.</p>
        </div>

        <div class="cell"><img src="Menu Img/l-array-5.webp" alt="">
          <h5>K3 Series</h5>
          <p>Working with Mediaglitz has been a pleasure from the very start. He is a very talented sound technician,
        </div>
        <div class="cell"><img src="all images/gravity setup.jpg" alt="">
          <h5>DAS System</h5>
          <p>LED lighting is very different from other lighting types such as incandescent and CFL. Key differences include: Light Source: LEDs are the size of a fleck of pepper, and can emit light in a range of colors. </p>
        </div>
        <div class="cell"><img src="Menu Img/l array-8.jpg" alt="">
          <h5>Moniter Uploading..</h5>
          <p>Once used mainly for television and film lighting, LED pixel tube lights have taken the event planning industry by storm not only because of their unique look but also because they’re so easy to use and implement.</p>
        </div>
        <div class="cell"><img src="Menu Img/l array-7.jpg" alt="">
          <h5>Mini La-coustic</h5>
          <p>First invented for rock and roll tours by the company that became Varilite, moving lights can be found in many traditional theatres. These fixtures allow the designer to assign multiple attributes, including direction, color, shape as well as intensity.</p>
        </div>

      </div>
      <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
      <script type="text/javascript">
        $('.main-carousel').flickity({
          // options
          cellAlign: 'left',
          wrapAround: true,
          freeScroll: true
        });
      </script>
    </section>
  </main>
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
        <img src="./css/soundpic/2.jpg" id="Fpic">
        <img src="./css/new img/Karen-Zoid-mediapro2-.webp" id="Fpic">
        <img src="./css/images/WhatsApp-Image-2020-12-16-at-15.37.19-27.jpeg" id="Fpic">
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
    <style type="text/css">
      #Fpic {
        width: 100px;
        height: 100px;
      }
    </style>
</body>

</html>