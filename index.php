<?php

require_once('info.php');
$query = "SELECT * FROM `post`";
$res = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tuitionPlatform</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style-idx.css">
</head>


<body>

    <header>
        <div class="empty">
            <h3 class="welcome">WELCOME!</h3>
        </div>
        <nav>
            <ul class="header-content-section">
                <li class="web-name"><img src="images/hu.png" class="hu-image">TuitionPlatform</li>
                <li class="sign-in"><a href="Guardian/guardianlogin.html" class="sign-in-link">
                        <button class="signin-button">Sign In</button>
                    </a></li>
                <!-- <li class="job-board"><a href="job-board.html"><strong>Job Board</strong></a></li> -->
            </ul>
        </nav>
    </header>

    <div class="tuition-types">
        <h2><strong>Tuition Types</strong></h2>
    </div>

    <section class="tuition-type">
        <div class="tuition-type-card">
            <h2>Home Tutoring</h2>
            <p>Home Tutoring allows students to learn in their own home.</p>
        </div>
        <div class="tuition-type-card">
            <h2>Group Tutoring</h2>
            <p>Group Tutoring allows students to learn together.</p>
        </div>
        <div class="tuition-type-card">
            <h2>Online Tutoring</h2>
            <p>Find the best tutors from anywhere and take online classes.</p>
        </div>
    </section>

    <!-- <div class="categories">
        <h2><strong>Categories</strong></h2>
    </div>

    <section class="cat-pic">
        <div class="pics">
            <div class="pics-img bn-m"></div>
            <h6><strong>Bangla Medium</strong></h6>
        </div>
        <div class="pics">
            <div class="pics-img lan-l"></div>
            <h6><strong>Language Learning</strong></h6>
        </div>
        <div class="pics">
            <div class="pics-img sk-d"></div>
            <h6><strong>Skill Development</strong></h6>
        </div>
        <div class="pics">
            <div class="pics-img chi-edu"></div>
            <h6><strong>Child Education</strong></h6>
        </div>
    </section> -->

    <div class="feed">
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
                            <p class="card-text"><strong>Contact:</strong> <?php echo $row['Contact']; ?> </p>
                            <!-- <button type="button" class="btn btn-primary"><a href="tutorlogincheck.php">Apply</a></button> -->
                            <a href="Tutor/tutorlogin.html" class="button">Apply</a>
                        </div>
                    </div>
                </div>

            <?php
                }
            ?>
        </div>
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