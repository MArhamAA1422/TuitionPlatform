<?php
  session_start();
  if (empty($_SESSION['email'])) {
    header('location:tutorlogin.html');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TutorProfile</title>
  <link rel="stylesheet" href="../css/style-guardian.css">
  <style>
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    .active {
      background-color: #04AA6D;
    }
  </style>

  <script src="https://kit.fontawesome.com/97ebdf5864.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container">


    <ul>
      <li><a href="tutorfeed.php">Find Job</a></li>
      <li><a href="status.php">Inbox</a></li>
      <li><a href="tutorlogout.php">Log Out </a></li>
    </ul>
    <br>
    <img src="../images/M-images/5920.jpg" alt="Italian Trulli">



  </div>
</body>

</html>