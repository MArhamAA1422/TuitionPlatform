<?php

session_start();

$con = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($con, 'tuitionplatform');


$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT Email, Pass FROM tutor WHERE Email='$email'";

$result = mysqli_query($con, $sql);  
$user = mysqli_fetch_assoc($result);

// if ($user) echo "hello"; else echo "error";

// echo $user['Email'];
// echo $user['Pass'];
// echo $email;
// echo $pass;

// exit();

if ($user) {
    // verify the password using password_verify()
    if ($pass == $user['Pass']) {
      // start a session and store the user information
      session_start();
      $_SESSION['user'] = $user;
      // redirect to the home page
      
      header("location:tutorprofile.php");

      exit();
    } else {
      // display an error message
      echo "<script>alert('Email or Password is wrong!');</script>";

      header("Location: tutorlogin.html");
    }
  } else {
    // display an error message
    echo "<script>alert('Email or Password is wrong!');</script>"; // Not Working :'(
    header("Location: tutorlogin.html");
  }


?>