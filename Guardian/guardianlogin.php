<?php

$con = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($con, 'tuitionplatform');

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  $sql = "SELECT * FROM guardian WHERE Email = '$email'";

  $result = mysqli_query($con, $sql);  
  $user = mysqli_fetch_assoc($result);

  // echo $user['Email'];
  // echo $user['Pass'];
  // echo $email;
  // echo $pass;

  if ($user) {
      // verify the password using password_verify()
      if ($pass == $user['Pass']) {
        // start a session and store the user information
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['contact'] = $user['Phone'];
        // redirect to the home page
        
        header("location:GuardianProfile.php");
        exit();
    } else {
      // display an error message
      echo "<script type='text/javascript'>alert('Email or Password is wrong!'); document.location='guardianlogin.html'</script>";

      // header("Location: guardianlogin.html");
    }
  } else {
    // display an error message
    echo "<script>alert('Email or Password is wrong!'); document.location='guardianlogin.html'</script>"; // Not Working
    // header("Location: guardainlogin.html");
  }
}

?>