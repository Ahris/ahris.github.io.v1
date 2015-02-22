<?php
    session_start();
    $_SESSION['page'] = 'art';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Art</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<body>
    <div class="container">
        <?php include 'header.php'; ?>

        <div class="content">
            <div class="textContent artContent"> 
                <div class="pageTitle">Illustration</div>
                <br />

                1<img class="artImage img-responsive" src="images/art/illustration/girlMagev3.png" alt="" />
                2<img class="artImage img-responsive" src="images/art/illustration/girlKnightv2.png" alt="" />
                3<img class="artImage img-responsive" src="images/art/illustration/girlHealerv1.png" alt="" />
                4<img class="artImage img-responsive" src="images/art/illustration/OregonMap.v4.png" alt="" />

                <div class="aboutArt">
                    Junior Year Basic Illustration 2014
                </div>

                <br />
                <button type="button" class="btn btn-default"> <a href="art.php">Back (All)</a></button>
                <button type="button" class="btn btn-default pull-right"> <a href="highSchoolArt.php">Next</a></button>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="carousel.js"></script>
</body>
</html>

