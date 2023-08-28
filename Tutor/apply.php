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
if (isset($_POST['apply']) && isset($_POST['content_id'])) {
    $tuition_id = $_POST['content_id'];
    $tutor_id = $_SESSION['id'];
    $fi = (int) $tuition_id;
    $se = (int) $tutor_id;
    echo "$fi";
    echo "$se";

    $que = "INSERT INTO `applicant`(`Tuition_id`, `Tutor_id`) VALUES ($fi, $se)";

    mysqli_query($db, $que);

}

header("Location: tutorfeed.php"); // redirect to index.php
exit();
?>
