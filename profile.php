<?php
    session_start();
    if(! isset($_SESSION['user']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Technical Forum </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link rel="icon" href="images/icon1.png" >
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <style media="screen">
        body{
          font-family: 'Century Gothic',sans-serif;
        }
        #content1, #ntro{
          font-family: 'Century Gothic',sans-serif;
        }
        </style>
    </head>
    <body id="pro">
      <!-- navigation bar -->
      <a href="index.php">
          <div id="log">
              <div id="i"></div><div id="ntro">Technical Forum</div>
          </div>
      </a>
      <ul id="nav-bar">
        <a href="allquestions.php"><li id="home">All Question</li>
        <a href="unanswered.php"><li>Unanswered Question</li>
        <a href="search.php"><li>Search</li></a>
        <a href="categories.php"><li>Categories</li></a>
        <a href="ask.php"><li>Ask Question</li></a>
        <?php
            if(! isset($_SESSION['user'])){
        ?>
        <a href="login.php"><li>Log In</li></a>
        <a href="signup.php"><li>Sign Up</li></a>
        <?php
            }
            else{
        ?>
        <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
        <a href="logout.php"><li>Log Out</li></a>
        <?php
            }
        ?>
    </ul>

        <!-- content -->
        <div id="content">
        <center>
            <h1 id="content1"><?php echo "Welcome ".$_SESSION["user"]; ?></h1>
            <div class="clearfix">
                <div id="hea-det content1">
                    <p id="first">N</p><p class="tit">ame: </p>
                    <p class="det"><?php echo $_SESSION["name"]; ?></p><br>
                    <p id="first">E</p><p class="tit">mail: </p>
                    <p class="det"><?php echo $_SESSION["email"]; ?></p><br>
                    <p id="first">J</p><p class="tit">oin Date: </p>
                    <p class="det"><?php echo $_SESSION["date"]; ?></p>
                </div>

            </div>
        </center>
        </div>




    </body>

</html>
