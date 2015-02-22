<!-- http://localhost/Portfolio/index.php -->
<?php
    session_start();
    $_SESSION['page'] = 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Alice Wang</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php include 'header.php'; ?>

        <div class="content">
            <img class="introPic img-responsive" src="images/grassBlade.jpg" alt="" />
            <div class="introText">
                <div class="about" id="line1"><a href="about.php">Comp Sci Student&nbsp;&nbsp;</a></div> <br />
                <div class="about" id="line2"><a href="art.php">Graphic Designer&nbsp;</a></div> <br />
                <div class="about" id="line3"><a href="games.php">Game Developer&nbsp;</a></div> 
            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>

