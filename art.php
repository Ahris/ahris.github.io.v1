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
                <div class="text-center">
		 <div class="albumPrev">
                    <a class="thumbnail" href="illustrationArt.php">
                        <img class="albumCover" src="images/art/girlMageCover.png" alt="" />
                    </a>
                    <a href="illustrationArt.php">
                        <div class="albumTitle">Illustration</div>
                    </a>
                </div>
                <div class="albumPrev">
                    <a class="thumbnail" href="acmArt.php">
                        <img class="albumCover" src="images/art/acmCover.jpg" alt="" />
                    </a>
                    <a href="acmArt.php">
                        <div class="albumTitle">ACM Brand</div>
                    </a>
                </div>
                <div class="albumPrev">
                    <a class="thumbnail" href="highSchoolArt.php">
                        <img class="albumCover" src="images/art/hsCover.jpg" alt="" />
                    </a>
                    <a href="highSchoolArt.php">
                        <div class="albumTitle">High School</div>
                    </a>
                </div>
                <div class="albumPrev">
                    <a class="thumbnail" href="3dArt.php">
                        <img class="albumCover" src="images/art/3dCover.jpg" alt="" />
                    </a>
                    <a href="acmArt.php">
                        <div class="albumTitle">Animation</div>
                    </a>
                </div>
            </div>

            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>

