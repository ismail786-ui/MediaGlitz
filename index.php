<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <!-- bootstarp css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- bootstrap bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- bootstrap icon -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- css external link -->
  <link rel="stylesheet" href="./css/style.css">
  <link href="css/style1.css" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- ionicons link -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
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
              <a class="nav-link mx-lg-2" id="Live" href=""></a>
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
  <!-- --------------------------------------------------------------------------------------------------------------------- -->
  <!-- register Form -->
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php" id="register">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="fName" id="fName" placeholder="First Name" required>
        <label for="fname">First Name</label>
        <div class="error"></div>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lName" id="lName" placeholder="Last Name" required>
        <label for="lName">Last Name</label>
        <div class="error"></div>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
        <div class="error"></div>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
        <div class="error"></div>
      </div>
      <div class="input-group">
        <select name="utype" for="utype" required id="select" style="width:10vw;padding:10px;margin:8px;">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
        <div class="error"></div>
      </div>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <!-- <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div> -->
    <div class="links">
      <a href="index.php">Already Have Account ?</a>
      <button id="signInButton">Sign In</button>
    </div>
  </div>
  <!-- --------------------------------login form--------------------------------------------------------------------------------------------------------- -->
  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register.php" id="signin">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <p class="recover">
        <!-- <a href="#">Recover Password</a> -->
      </p>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <!-- <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div> -->
    <div class="links">
      <a href="#register">Don't have account yet?</a>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>
  <script src="./script.js/script.js"></script>
</body>

</html>