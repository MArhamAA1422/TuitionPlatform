<?php
session_start();
require_once('../info.php');


$id = $_SESSION['id'];

$query = "SELECT * FROM `guardianresponse` WHERE Tutor_id=$id";

$res = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job-board</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style-job-board.css">
</head>


<body>

    <header>
        <div class="empty">
            <h3 class="jb">Job Board</h3>
        </div>
        <div class="profile-btn">
            <a class="btn btn-primary profile" href="tutorprofile.php" role="button" style="float:right;">Profile</a>
        </div>
    </header>

    <div class="card" style="width:100%; text-align: center;">
        <?php

            while ($row = mysqli_fetch_assoc($res)) {
        ?>

            <!-- <div class="col">
                <div class="card"> -->
                    <div class="card-body" style="border-style: dashed; margin: 0 0 2.5px 5px;">
                        <p class="card-text"><strong>Tuition id:</strong> <?php echo $row['Tuition_id']; ?></p>
                        <p class="card-text"><strong> <?php echo $row['Status']; ?></strong> </p>
                    </div>
                <!-- </div>
            </div> -->

        <?php
            }
        ?>
    </div>

    <div class="copyright">
        <p>Copyright © 2023 TuitionPlatform CT</p>
    </div>

    <!-- bootstrap related js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>