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
      <button class="navbar-toggler pe-0 m-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <!-- navbar End -->
    <table class="container-fluid" style="border:1px solid black;">
        <thead>
            <tr style="border:1px solid black;">
                <th class="m-1 p-3">FirstName</th>
                <th class="m-1 p-3">LastName</th>
                <th class="m-1 p-2">Email</th>
                <th class="m-1 p-1">Mobile</th>
                <th class="m-1 p-3">Message</th>
                <th class="m-1 p-3"> Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include "./connect.php"; 

            $sql = "select * from contact";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr style="border:1px solid black;" class="p-3" >
                <td class="m-1 p-3"><?php echo $row['fname']  ?></td>
                <td class="m-1 p-3"><?php echo $row['lname']  ?></td>
                <td class="m-1 p-2"><?php echo $row['email']  ?></td>
                <td class="m-1 p-1"><?php echo $row['mobile']  ?></td>
                <td class="m-1 p-3"><?php echo $row['message']  ?></td>
                <td> 
                <a href='conupdate.php?update=<?php echo $row['id'] ?>' class="btn btn-success m-1 p-2">Edit</a>   
                <a href='contdelete.php?delete=<?php echo $row['id'] ?>' class="btn btn-danger m-1">Delete</a>              
                </td>
            </tr>
        </tbody>
        <?php
          }
        }
        ?>
    </table>
    <div>
        <a  class="btn btn-primary m-3" href="contact.php">New Enquiry</a>
    </div>
</body>
</html>