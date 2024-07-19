<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediaGlitz Sound</title>
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
  <link href="./css/amp.css" rel="stylesheet">
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
  <!--  Inner navbar -->
  <main class="main">
    <nav class="innav">
      <a href="./amp.php">Amplification</a>
      <a href="./console.php">Consoles</a>
      <a href="./larray.php">Line Arrays</a>
      <a href="./mic.php">Microphones</a>
    </nav>
    <!-- Inner End Navbar -->
    <div class="main-carousel">
      <div class="cell"><img src="./all images/official s-4.jpg" alt="">
        <h5>Oranjuice Entertainment (at delhi, Feb 2021)</h4>
          <p>Live audio monitoring in music is a process that involves monitoring the sound levels of an audio signal in real-time. This is done to ensure that the audio levels remain consistent and that any unwanted noise is minimized.</p>
      </div>
      <div class="cell"> <img src="./all images/rose light.jpg" alt="">
        <h5>GRAMMY & Academy Award Winning Musician (at Vadfest, Vadodara, Jan 2019)</h4>
          <p>Live Monitor is a cloud-based tool that provides visibility into the status and operation of Desktop Metal devices. Access your system status and statistics any time from any web browser. Live Monitor can even show status across multiple devices in a single dashboard view.</p>
      </div>
      <div class="cell"> <img src="./all images/14003836ffff53436a9207c1a9be347b.jpg" alt="">
        <h5>G.S Entertainment(at goa, Dec 2023)</h4>
          <p>Live sound systems engineers are responsible for installing, optimizing, maintaining, and breaking down the sound systems used in live performances.</p>
      </div>
      <div class="cell"><img src="./all images/official s-main.jpg" alt="">
        <h5>Cineyug Worldwide Entertainment (at gujarat, Aug 2022)</h5>
        <p>To perform with live sound processing is to alter and affect the sounds of acoustic instruments, live, in performance </p>
      </div>

      <div class="cell"><img src="./all images/Gallery – PP 5.jpg" alt="">
        <h5>Anu Sharma World Musician (at kerala, May 2022)</h5>
        <p>Working with Mediaglitz has been a pleasure from the very start. He is a very talented sound technician,
      </div>
      <div class="cell"><img src="./all images/Gallery – PP 7.jpg" alt="">
        <h5>Anurag Thakur - CEO & Founder, Canvas Talent(at Rajasthan, Feb 2021)</h5>
        <p>Mediaglitz is the best we’ve worked with, through the years and Warren has brought in the finest gear and delivered superlative sound for all the show’s we’ve done right from MTV's Sessions to our Music & Marketing forums. We totally trust his experience and his work. </p>
      </div>
      <div class="cell"><img src="./all images/stage-scenic-mediapro-banner-5.jpg" alt="">
        <h5>John - CEO, Jaws Events(at Andhra, Jan 2023)</h5>
        <p>Mediaglitz,I just want to say it was a pleasure meeting you and the sound you produced for Ravi Shanker in the MFC was stunning</p>
      </div>
      <div class="cell"><img src="./all images/Desktop.ebb65632.creamfields_hardwell_roe_visual_led.jpg" alt="">
        <h5>Arun Kumar Light Music Event (at tamilnadu, Dec 2021)</h5>
        <p>Put simply, live sound engineers have the responsibility of making sure that the artist or band they're working with, are sounding as they should and even a bit better. So, they create a well-balanced mix that can be heard by the audience. This is called the “Front of house (FOH)” mix.</p>
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
  </main>
  </section>

  <!-- <footer start>  -->
  <footer class="footer-distributed">

    <div class="footer-left">
      <h3>Media<span>Glitz</span></h3>

      <p class="footer-links">
        <a href="./index1.html">Home</a>
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