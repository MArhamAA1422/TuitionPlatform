<?php

$con = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($con, 'tuitionplatform');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];


$query = "INSERT INTO `guardian`(`name`, `email`, `phone`, `pass`) 
        VALUES ('$name','$email','$phone','$pass')";

mysqli_query($con, $query);

header('location:guardianlogin.html');

?>