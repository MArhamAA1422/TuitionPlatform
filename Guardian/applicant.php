<?php

session_start();
include('../info.php');
// $query = "SELECT * FROM `post`, (SELECT * FROM `applicant`,`tutor` WHERE `applicant`.Tutor.id==`tutor`.id)"; 


if (isset($_POST['apply']) && isset($_POST['content_id'])) {
    $tuition_id=$_POST['content_id'];
    $query = "SELECT Tutor_id FROM `applicant` WHERE Tuition_id=$tuition_id"; // working?
    $res = mysqli_query($con,$query);

?>

<!doctype html>
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
    <div class="container-fluid bg-dark text-light py-3">
        <header class="text-center">
            <h1 class="display-6">Applicants List</h1>
        </header>
        <div class="profile-btn">
            <a class="btn btn-primary profile" href="g-job-board.php" role="button" style="float:right;">Dashboard</a>
        </div>
    </div>

    <div class="card" style="width:100%; text-align: center;">
        <?php

            while ($row = mysqli_fetch_assoc($res)) {
                $tutor_id=$row['Tutor_id'];
                $query1 = "SELECT * FROM `Tutor` WHERE id=$tutor_id";
                $res1 = mysqli_query($con,$query1);
                while ($row1 = mysqli_fetch_assoc($res1)) {

        ?>

            <!-- <div class="col">
                <div class="card"> -->
                    <div class="card-body" style="border-style: solid; margin: 0 0 2.5px 5px;">
                        <p class="card-text"><strong>Name: </strong> <?php echo $row1['Name']; ?></p>
                        <p class="card-text"><strong>Institution: </strong> <?php echo $row1['Institution']; ?> </p>
                        <p class="card-text"><strong>Email: </strong> <?php echo $row1['Email']; ?> </p>
                        <p class="card-text"><strong>Contact: </strong> <?php echo $row1['Phone']; ?></p>

                        <!-- <?php $fi = strval($tuition_id); $se = strval($tutor_id); ?> -->
                        
                        <form action="accepted.php" method="post">
                                <input type="hidden" name="content_id" value="<?php echo $row1['id']; ?>">
                                <input type="hidden" name="content_id1" value="<?php echo $tuition_id; ?>">
                                <input type="submit" name="approve" class="btn btn-primary" value="Approve">
                        </form> <br>

                        <form action="rejected.php" method="post">
                                <input type="hidden" name="content_id" value="<?php echo $row1['id']; ?>">
                                <input type="hidden" name="content_id1" value="<?php echo $tuition_id; ?>">
                                <input type="submit" name="reject" class="btn btn-danger" value="Reject">
                        </form>

                        <!-- <form action="accepted.php" method="post">
                            <input type="hidden" name="content_id" value="<?php echo $row1['id']; ?>">
                            <input type="submit" name="apply" value="Apply">
                        </form> -->

                        <!-- <a href="accepted.php" type="button" class="btn btn-primary">Approve</a>

                        <a type="button" class="btn btn-danger" onclick="openSigninBox()">Reject</a> -->

                        <!-- <a type="button" class="btn btn-danger" href="delete_applicant.php">Reject</a> -->
                        <!-- <form action="delete_applicant.php" method="post">
                            <input type="hidden" name="content_id" value="<?php echo $row_del['applicatio_id']; ?>">
                            <input type="submit" name="delete" value="Reject">
                        </form> -->
                        <!-- <div class="signin-box" id="signin-box">
                                <h2>OK</h2> <br>
                                <a type="button" class="btn btn-light" onclick="closeSigninBox()">Close</a>
                        </div> -->
                    </div>
                <!-- </div>
            </div> -->

        <?php
                }
            }
        ?>
    </div>

    <!-- bootstrap related js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- <script>
        let signin = document.getElementById("signin-box");
        function openSigninBox() {
            signin.classList.add("openSI");
        }
        function closeSigninBox() {
            signin.classList.remove("openSI");
        }
    </script> -->
</body>

</html>
<?php
                
            }
?>