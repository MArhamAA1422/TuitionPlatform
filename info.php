<?php

// Database Coonection

$con = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($con, 'tuitionplatform');

?>