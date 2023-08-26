<?php

require_once('../info.php');
require_once('tutorlogin.php');

// check if a user is logged in
if (isset($_SESSION['user'])) {
  // display their information or any other content
  header("Location: #");
} else {
  // redirect them to the login page or display a message
  header("Location: tutorlogin.html");
  exit();
}

?>
