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
            <div class="textContent"> 
                <div class="pageTitle">Animation</div>
                <br />
                <img class="artImage img-responsive" src="images/art/dorm%20room%20render%202.png" alt="" />

                <div class="aboutArt">
                    Introduction to Animation at WashU - Fall 2012
                </div>

                <br />
                <button type="button" class="btn btn-default"><a href="art.php">Back (All)</a> </button>
                <button type="button" class="btn btn-default pull-right"><a href="acmArt.php">Next</a></button>
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>

