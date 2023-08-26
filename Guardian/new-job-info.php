<?php

$con = mysqli_connect('localhost','root');

// if ($con) {
//     echo "Succes";
// } else {
//     echo "error";
// }

mysqli_select_db($con, 'tuitionplatform');

$title = $_POST['title'];
$location = $_POST['location'];
$subject = $_POST['subject'];
$salary = $_POST['salary'];
$contact = $_POST['contact'];
$description = $_POST['description'];

$query = "INSERT INTO `post`(`Title`, `Location`, `Subject`, `Salary`, `Contact`, `Description`)
VALUES ('$title','$location','$subject', '$salary','$contact','$description')";

mysqli_query($con, $query);

$query1 = "SELECT id FROM `post`";

$res = mysqli_query($con, $query1);

$row = mysqli_fetch_assoc($res);

$rowcount = $row['id'];

while ($row = mysqli_fetch_assoc($res)) {
    $rowcount = $row['id'];
}

echo "$rowcount";

$query2 = "INSERT INTO `subject`(`SubjectName`, `id`) VALUES ('$subject',$rowcount)";
mysqli_query($con, $query2);

header('location:../index.php');

?>