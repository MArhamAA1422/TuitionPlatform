<?php

$con = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($con, 'tuitionplatform');

$name = $_POST['name'];
$uni = $_POST['uni'];
$regi = $_POST['regi'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];


$query = "INSERT INTO `tutor`(`Name`, `Institution`, `Institution_regi_no`, `Email`, `Phone`, `Pass`)
VALUES ('$name','$uni','$regi','$email','$phone','$pass')";

mysqli_query($con, $query);

header('location:tutorlogin.html');

?>