<?php

require_once('../info.php');
$query = "SELECT * FROM `post`";
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
            <a class="btn btn-primary profile" href="GuardianProfile.html" role="button">Profile</a>
        </div>
    </header>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php

            while ($row = mysqli_fetch_assoc($res)) {
        ?>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tuition NO: <?php echo $row['id']; ?> </h5>
                        <p class="card-text"><strong><?php echo $row['Title']; ?> </strong></p>
                        <p class="card-text"><strong>Location:</strong> <?php echo $row['Location']; ?> <strong></p>
                        <p class="card-text"><strong>Salary:</strong> <?php echo $row['Salary']; ?> </p>
                        <!-- <p class="card-text"><strong>Contact:</strong> <?php echo $row['Contact']; ?> </p> -->
                        <a href="../apply.html" class="button">Apply</a>
                    </div>
                </div>
            </div>

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