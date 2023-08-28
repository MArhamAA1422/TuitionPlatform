<?php
// connect to the database
session_start();

$db = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($db, 'tuitionplatform');

// get the content id from the form
if (isset($_POST['reject']) && isset($_POST['content_id']) && isset($_POST['content_id1'])) {
    $tutor_id = $_POST['content_id'];
    $tuition_id = $_POST['content_id1'];
    $fi = (int) $tuition_id;
    $se = (int) $tutor_id;
    // echo "$fi";
    // echo "$se";
    $sql="SELECT * FROM `guardianresponse` WHERE Tuition_id=$fi AND Tutor_id=$se";
    $result = mysqli_query($db, $sql);
     $user = mysqli_fetch_assoc($result);
     if($user){
         header("Location: g-job-board.php"); // redirect to index.php
      exit();
     }
     else{


    $que = "INSERT INTO `guardianresponse`(`Tuition_id`, `Tutor_id`, `Status`) VALUES ($fi, $se,'Sorry,you are rejected')";
    mysqli_query($db, $que);
    header("Location: g-job-board.php"); // redirect to index.php
      exit();
     }


    

}


?>
