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
                <div class="pageTitle">ACM Rebranding</div>
                <br />
<!--                 <div class="carousel img-responsive" data-role="carousel" data-param-period="4000"  data-param-effect="fade">
                    <div class="slides">
                        <div class="slide image" id="slide1">
                            <img class="artImage img-responsive" src="images/art/ACM%20logo%20test%20neat.jpg" alt="" />
                            <div class="description">
                            </div>
                        </div>
             
                        <div class="slide mixed" id="slide2">
                            <img class="artImage img-responsive" src="images/art/acm%20logo%20blue.png" alt="" />
                            <div class="description">
                            </div>
                        </div>
                        

                        <div class="slide mixed" id="slide3">
                            <img class="artImage img-responsive" src="images/art/ACM%20activities%20fair%20poster%20hori.png" alt="" />
                            <div class="description">
                            </div>
                        </div>

                        <div class="slide mixed" id="slide4">
                            <img class="artImage img-responsive" src="images/art/acm%20hackfest%20poster%20final.png" alt="" />
                            <div class="description">
                            </div>
                        </div>

                        <div class="slide mixed" id="slide5">
                            <img class="artImage img-responsive" src="images/art/acm%20hackfest%20banner.png" alt="" />
                            <div class="description">
                            </div>
                        </div>

                        <div class="slide mixed" id="slide6">
                            <img class="artImage img-responsive" src="images/art/acm%20poster%20interview%20edit.png" alt="" />
                            <div class="description">
                            </div>
                        </div>      

                        <div class="slide mixed" id="slide7">
                            <img class="artImage img-responsive" src="images/art/acm%20linux%20edit.png" alt="" />
                            <div class="description">
                            </div>
                        </div>

                        <div class="slide mixed" id="slide8">
                            <img class="artImage img-responsive" src="images/art/code%20and%20cookies%20ribbon.png" alt="" />
                            <div class="description">
                            </div>
                        </div>   

                        <div class="slide mixed" id="slide9">
                            <img class="artImage img-responsive" src="images/art/kickoff%20poster.png" alt="" />
                            <div class="description">
                            </div>
                        </div>  

                        <div class="slide mixed" id="slide10">
                            <img class="artImage  tallestImg img-responsive" src="images/art/ICPC%20poster%20fix.jpg" alt="" />
                            <div class="description">
                            </div>
                        </div>                                         
                    </div>
             
                    <span class="control left"> ‹ </span> 
                    <span class="control right"> › </span>
             
                </div> -->

                <img class="artImage img-responsive" src="images/art/ACM%20logo%20test%20neat.jpg" alt="" />
                2<img class="artImage img-responsive" src="images/art/acm%20logo%20blue.png" alt="" />
                3<img class="artImage img-responsive" src="images/art/ACM%20activities%20fair%20poster%20hori.png" alt="" />
                4<img class="artImage img-responsive" src="images/art/acm%20hackfest%20poster%20final.png" alt="" />
                5<img class="artImage img-responsive" src="images/art/acm%20hackfest%20banner.png" alt="" />
                6<img class="artImage img-responsive" src="images/art/acm%20poster%20interview%20edit.png" alt="" />
                7<img class="artImage img-responsive" src="images/art/acm%20linux%20edit.png" alt="" />
                8<img class="artImage img-responsive" src="images/art/code%20and%20cookies%20ribbon.png" alt="" />
                9<img class="artImage img-responsive" src="images/art/kickoff%20poster.png" alt="" />
                10<img class="artImage img-responsive" src="images/art/ICPC%20poster%20fix.jpg" alt="" />

                <div class="aboutArt">
                    Association of Computing Machinery - Director of Publicity 2012-2013
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

