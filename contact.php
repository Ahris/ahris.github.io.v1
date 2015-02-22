<?php
    session_start();
    $_SESSION['page'] = 'contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Contact</title>
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
                <?php
                    if(isset($_SESSION['emailSent'])) {
                        if($_SESSION['emailSent'] == true) {
                            echo 'Email sent! I\'ll get back to you soon! <br /> <br />'; 
                        } else if($_SESSION['emailSent'] == false) {
                            echo ' You were missing some fields! Please fill out all fields, thanks! <br /> <br />';
                        } 
                        $_SESSION['emailSent'] = NULL;
                    }
                ?>

                <a href="images/resumeJuniorYear.png"><img src="images/resumeJuniorYear.png" class="img-responsive thumbnail" alt="" /></a>
                <br />
                <br />

                <form class="form-horizontal" role="form" action="email.php" method="POST">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-2 control-label">Your Email</label>
                    <div class="col-lg-10">
                      <input type="email" class="form-control" id="inputEmail1" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="title" placeholder="Email title">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Job Type</label>
                    <div class="col-lg-10">
                        <select name="jobType" class="form-control">
                          <option value="cs">Programming</option>
                          <option value="art">Art and Design</option>
                          <option value="other">Other</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Time Frame</label>
                    <div class="col-lg-10">
                        <select name="time" class="form-control">
                          <option value="partTime">Part Time</option>
                          <option value="fullTime">Full Time</option>
                          <option value="other">Other</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-2 control-label">Message</label>
                    <div class="col-lg-10">
                        <textarea name="message" class="form-control" rows="3">Enter message here...</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button type="submit" class="btn btn-default">Send</button>
                    </div>
                  </div>
                </form>

            </div>
        </div>

        <?php include 'footer.php'; ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>

