<?php
include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $utype = $_POST['utype'];

    $checkEmail = "SELECT * From `users` where email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email Address Already Exists !";
    } else {
        $insertQuery = "INSERT INTO users(firstName,lastName,email,password,utype)
                       VALUES ('$firstName','$lastName','$email','$password','$utype')";
        if ($conn->query($insertQuery) == TRUE) {
            header("location: Rpage.php");
        } else {
            echo "Error:" . $conn->error;
        }
    }
}
// -------------------------------login form------------------------------------------------------------------------------------------------------------------------//

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location:index1.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password";
    }
}
