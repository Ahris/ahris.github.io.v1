<?php
    session_start();
    $_SESSION['page'] = 'games';
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
                <div class="game">
                    <img class="gameCover left img-responsive" src="images/games/directoryQuestCover.png" alt="" />
                    <div class="gameAbout">
                        <strong><a class="gameTitle" href="http://www.slyvronline.com/games/stlgamejam">Directory Quest</a></strong><br />
                        St. Louis Game Jam 2013
                        <br />
                        Theme: Reticulate
                        <br />
                        <br />
                        Play as Tina Chelice on her first day at her unfortunate job as a systems manager. She finds mysterious notes and text puzzles in the company's directory left by the previous manager. Navigate through a Linux terminal to solve all the puzzles and find the clues to get through the worst first day of a new job.                                                                                             
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

