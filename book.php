<?php
//include connection
include './connect.php';
//php storeing 
if (isset($_POST['submit'])) {
  // Collect form data
  $customername = $_POST['customername'];
  $eventname = $_POST['eventname'];
  $eventtype = $_POST['eventtype'];
  $Wevent = $_POST['Wevent'];
  $elocation = $_POST['Elocation'];
  $eventcity = $_POST['eventcity'];
  $state = $_POST['state'];
  $people = $_POST['people'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $hour = $_POST['hour'];
  $iagree = isset($_POST['iagree']) ? 1 : 0; // Check if checkbox is checked
  // SQL to insert form data into database
  $sql = "INSERT INTO booking (customername, eventname, eventtype, Wevent, elocation, eventcity, state, people, date, time, hour,iagree)
    VALUES ('$customername', '$eventname', '$eventtype', '$Wevent', '$elocation', '$eventcity', '$state', '$people', '$date', '$time', '$hour','$iagree')";
  //code excute to db
  if ($conn->query($sql) === TRUE) {
    header("location:./Bpage.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
};
// Close the database connection
$conn->close();
?>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediaGlitz Book</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- bootstarp css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap bundle -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- bootstrap icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- css external link-1 -->
  <link href="css/style1.css" rel="stylesheet">
  <!-- css external link-2 -->
  <link rel="stylesheet" href="./css/book.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ==== Iconsout css==== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <!-- book script -->
  <script src="./script.js/book.js" type="text/javascript"></script>
  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
            <li class="nav-item nav">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./sound.php">Sound</a></li>
                <li><a class="dropdown-item" href="./light.php">Lights</a></li>
                <li><a class="dropdown-item" href="./ledwall.php">Ledwall</a></li>
            </li>
          </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="book.php">Booking Event</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" id="contact" href="contact.php">Enquiry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" id="Live" href="./vbook.php">Edit</a>
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
  <!-- navbar End -->
  <!--Main Start-->
  <main>

    <div class="container-fluid">
      <form method="post" action="./book.php" class="form-signup">
        <h5>Event Information</h5>
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label class="column">Customer name</label>
              <input type="text" id="customername" class="form-control" name="customername" placeholder="Customer Name" required>
            </div>
            <div class="col-md-6">
              <label>Event Name</label>
              <input type="text" class="form-control" id="eventname" name="eventname" placeholder="Event Name" required>
            </div>
          </div>
        </div>
        <!-- Second row -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <!-- Event options -->
              <h6>Event Types</h6>
              <div class="form-check">
                <select name="eventtype" class="form-select" required>
                  <option value="indoor">Indoor</option>
                  <option value="outdoor">Outdoor</option>
                  <option value="both">Both</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <h6> Events Lists</h6>
              <!-- <label>Select Event</label> -->
              <select name="Wevent" class="form-select" required>
                <option value="Wedding Events">Wedding </option>
                <option value="Birthday Events">Birthday Events</option>
                <option value="Megaconcert">Megaconcert</option>
                <option value="Ceremony Events">Ceremony Events</option>
                <option value="Music Festivals">Music Festivals</option>
                <option value="DJ Festivals">DJ Festivals</option>
                <option value="Minor Events">Minor Events</option>
                <option value="Major Events">Major Events</option>
                <option value="Heritage Events">Heritage Events</option>
                <option value="Folk Events">Folk Events</option>
                <option value="Trade Shows">Trade Shows</option>
                <option value="Cultural Event">Cultural Event</option>
                <option value="Live Streams">Live Streams</option>
                <option value="Reception Events">Reception Events</option>
                <option value="Product Launches">Product Launches</option>
              </select>
            </div>
          </div>
        </div>
        <!-- Third row -->
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label>Event Location</label>
              <input type="text" class="form-control" id='address' name="Elocation" placeholder="Event Location" required>
            </div>
            <div class="col-md-6">
              <label>Event City</label>
              <input type="text" class="form-control" id="eventcity" name="eventcity" placeholder="Event City" name="city" required>
            </div>
          </div>
          <!-- Fourth row -->
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="state">Select State</label>
                <select class="form-control" name="state" id="state" required>
                  <!-- <option placeholder="Select state"></option> -->
                  <option value="assam">Assam</option>
                  <option value="andhra pradesh">Andhra Pradesh</option>
                  <option value="arunachal pradesh">Arunachal Pradesh</option>
                  <option value="bihar">Bihar</option>
                  <option value="chhattisgarh">Chhattisgarh</option>
                  <option value="delhi">Delhi</option>
                  <option value="goa">Goa</option>
                  <option value="gujarat">Gujarat</option>
                  <option value="haryana">Haryana</option>
                  <option value="himachal pradesh">Himachal Pradesh</option>
                  <option value="jammu&kashmir">Jammu Kashmir</option>
                  <option value="jharkhand">Jharkhand</option>
                  <option value="karnataka">Karnataka</option>
                  <option value="kerala">Kerala</option>
                  <option value="manipur">Manipur</option>
                  <option value="madhaya pradesh">Madhya Pradesh</option>
                  <option value="maharashtra">Maharashtra</option>
                  <option value="meghalaya">Meghalaya</option>
                  <option value="mizoram">Mizoram</option>
                  <option value="nagaland">Nagaland</option>
                  <option value="odisha">Odisha</option>
                  <option value="punjab">Punjab</option>
                  <option value="rajasthan">Rajasthan</option>
                  <option value="sikkam">Sikkam</option>
                  <option value="tamilnadu">Tamilnadu</option>
                  <option value="telangana">Telanagana</option>
                  <option value="tripura">Tripura</option>
                  <option value="uttar pradesh">Uttar Pradesh</option>
                  <option value="uttarakhand">Uttarakhand</option>
                </select>
              </div>
              <div class="col-md-6">
                <label>Attenders</label>
                <input type="number" class="form-control" id="people" placeholder="Number of Attending" name="people" min="1" required>
              </div>
            </div>
            <!-- fifth row -->
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label>Event Date</label>
                  <input type="date" class="form-control" name="date" id="date" min="2024-05-29" required>
                </div>
                <div class="col-md-6">
                  <label>Event Time</label>
                  <input type="time" class="form-control" name="time" id="time" required>
                </div>
              </div>
            </div>
            <!-- Sixth row -->
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                  <label>Event Duration</label>
                  <input type="number" class="form-control" name="hour" id="hour" min="1" required>
                </div>
                <div class="form-group" id="check">
                  <div class="row check">
                    <div class="col-md-12" id="checkk">
                      <label for="iagree"></label>
                      <input type="checkbox" id="iagree" name="iagree" required> I accept<a href="#">Terms of Use</a>
                    </div>
                    <div class="row">
                      <div class="col-md-6" id="Btn">
                        <button type="submit" class="btn btn-primary btn-block text-center" name="submit">Submit</button>
                      </div>
                    </div>
                  </div>
      </form>
    </div>
  </main>
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
<!-- Bootstrap Bundle JS (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>