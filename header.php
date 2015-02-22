  <div class="logo"><a href="index.php"><img src="images/birdLogo.png" alt="" /></a></div>
        <div class="text-center aliceWangName"><a href="index.php">Alice Wang</a></div>
        <div class="menu">
            <div class="divider"><hr /></div>
            <div class="menubar">
                <span <?php
                    if($_SESSION['page'] ==='about') {
                        echo 'id="highlight"';
                    }
                ?> class="menuLink"><a href="about.php">ABOUT</a></span>
                <span <?php
                    if($_SESSION['page'] ==='games') {
                        echo 'id="highlight"';
                    }
                ?> class="menuLink"><a href="games.php">GAMES</a></span>
                <span <?php
                    if($_SESSION['page'] ==='art') {
                        echo 'id="highlight"';
                    }
                ?> class="menuLink"><a href="art.php">ART</a></span>
                <span class="menuLink"><a href="http://www.thegoldenmage.com">BLOG</a></span>
            </div>
            <div class="divider"><hr /></div>
        </div>
