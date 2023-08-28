<?php


if (isset($_POST['find'])) {
session_start();

require_once('../info.php');
$sub=$_POST['subject'];
$query = "SELECT * FROM `post` WHERE Subject='$sub'";

$res = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>available-job</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style-job-board.css">
</head>


<body>

    <header>
        <div class="empty">
            <h3 class="jb">Job Board</h3>
          
            <div class="profile-btn">
                <a class="btn btn-primary profile" href="tutorfeed.php" role="button" style="float:right;">BACK</a>
            </div>
            
        </div>
    

    </header>

    <form action="apply.php" method="post" class="p-3 bg-light text-black">
    <div class="card" style="width:100%; text-align: center;">
        <?php

            while ($row = mysqli_fetch_assoc($res)) {
        ?>

            <!-- <div class="col">
                <div class="card"> -->
                    <div class="card-body" style="border-style: dashed; margin: 0 0 2.5px 5px;">
                        <h5 class="card-title">Tuition NO: <?php echo $row['id']; ?> </h5>
                        <p class="card-text"><strong><?php echo $row['Title']; ?> </strong></p>
                        <p class="card-text"><strong>Location:</strong> <?php echo $row['Location']; ?></p>
                        <p class="card-text"><strong>Subject:</strong> <?php echo $row['Subject']; ?></p>
                        <p class="card-text"><strong>Salary:</strong> <?php echo $row['Salary']; ?> </p>
                        <p class="card-text"><strong>Description:</strong> <?php echo $row['Description']; ?> </p>

                        <?php $tutor_id = $_SESSION['id'];
                            $fi = (int) $row['id'];
                            $se = (int) $tutor_id;
                            $applicant = "SELECT Tutor_id FROM `applicant` WHERE Tuition_id=$fi AND Tutor_id=$se";
                            $result = mysqli_query($con, $applicant);  
                            $user = mysqli_fetch_assoc($result);

                            $del = "SELECT Tuition_id FROM `booked` WHERE Tuition_id=$fi";
                            $result1 = mysqli_query($con, $del);
                            $user1 = mysqli_fetch_assoc($result1);  

                            if ($user1) {

                                    echo '<input type="radio" class="btn-check" name="options-base" id="option7" autocomplete="off" disabled>
                                        <label class="btn" for="option7">Booked</label>';
                                } else {
                                    if ($user) {
                                        echo '<input type="radio" class="btn-check" name="options-base" id="option7" autocomplete="off" disabled>
                                        <label class="btn" for="option7">Apply</label>';
                                    }
                                    else {
                                        ?>
                                        <form action="apply.php" method="post">
                                            <input type="hidden" name="content_id" value="<?php echo $row['id']; ?>">
                                            <input type="submit" name="apply" value="Apply">
                                        </form>
                                        <?php
                                    }
                                }
                        ?>
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
<?php
            }
?>