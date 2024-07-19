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
    <!-- Css internal style -->
    <style type=text/css>
        .link {
            margin-top: 8px;
            padding: 10px 15px;
            text-decoration: none;
            margin-left: 10px;
            border: 1px solid #ccc;
        }

        .Book {
            font-size: 18px;
            font-weight: 600;
            margin: 0px auto;
            border: 2px solid #000;
            padding: 10px;
            margin: 6px;

        }

        h2 {
            margin: 0px auto;
        }

        .aaa {
            margin-top: 7px;
            background: green;
            color: white;
            font-size: 18px;
        }

        p {
            margin: 5px auto;
            font-size: 22px;
            font-weight: 700;
        }
    </style>
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
    <!-- <div class="container">
        <button type="submit">
            <a href="#">Booking List</a>
        </button>
    </div> -->
    <!-- navbar End-->
    <!---------------------------------------------------------------------------------------------------------------------------------------------------- -->
    <!-- DB CON -->
    <?php
    include './connect.php';


    $sql = "select * from users";
    $res = $conn->query($sql);

    #Total no of Products
    $no_of_booking = $res->num_rows;
    $no_of_booking_per_page = 7;
    $no_of_pages = ceil($no_of_booking / $no_of_booking_per_page);
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start_limit = ($page - 1) * $no_of_booking_per_page;
    echo "<center><h2>Register List</h2><p>No of Registration : " . $no_of_booking . "</p></center>";
    echo "<center><p> pages : " . ($start_limit + 1) . " To " . ($start_limit  +  $no_of_booking_per_page) . "</p></center>";
    //$sql = "select * from users limit $start_limit,$no_of_booking_per_page";
    $sql = "select * from users ORDER BY id DESC limit $start_limit,$no_of_booking_per_page";
    $res = $conn->query($sql);
    while ($row = $res->fetch_assoc()) {
        echo "<p class='Book' >{$row['id']}--{$row['firstName']}--{$row['lastName']}--{$row['email']}--{$row['password']}--{$row['utype']}</p>";
    }
    for ($i = 1; $i <= $no_of_pages; $i++) {
        if ($page == $i) {
            echo "<a href='./Rpage.php?page={$i}' class='link aaa ' >{$i}</a>";
        } else {
            echo "<a href='./Rpage.php?page={$i}' class='link' >{$i}</a>";
        }
    }
    ?>
    <!-- DB End -->

    <!--------------------------------Display Php----------------------------------------------------------------------------------------------------------------------------------------------------->
    <!-- <footer start>  -->
    <footer class="footer-distributed" style="position: relative; top:300px;">

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

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./css/foot.css">
    </footer>














</body>

</html>