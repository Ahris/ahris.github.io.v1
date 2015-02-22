<?php
    session_start();
    $_SESSION['page'] = 'about';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>About</title>
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
                <img id="dogImage" class="img-responsive" src="images/shiba.jpg" alt="" />
                <br />
                <br />
                <div class="aboutGrayBox">
                    My name is <span class="italic">Alice Wang</span>.
                    <br />
                    <br />
                    Studying at Washington University in St. Louis <br />
                    Major in <span class="italic">Computer Science</span> with a double minor in <span class="italic">Math</span> and <span class="italic"> Communication Design</span>.
                    <br />
                    <br />
                    <div class="aboutParagraph">
                        <!-- I love all things charming. Small mascots and pixel art are on the top of my favorites list. Design and video games should also aim to charm. That's why JRPG
                        s are my favorite genre of interactive entertainment. My favorite series is Final Fantasy and I'm playing Dragon's Crown right now. 
                    --> 
                    My favorite games are Final Fantasy 13, Snatcher, Bravely Default, Fantasy Life, Ghost Trick, The World Ends with You, and 999. I also born on the year of the dog and really love dogs!
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

