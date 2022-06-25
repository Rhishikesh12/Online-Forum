<?php
    session_start();
    include('connect.php');
    if(!isset($_SESSION['user']))
        header("location: login.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Technical Forum </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">

        <style media="screen">
        body{
          font-family: 'Century Gothic',sans-serif;
        }
        #ntro{
          font-family: 'Century Gothic',sans-serif;
        }
        </style>
    </head>
    <body id="ask">
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
            <div id="sf">
                <center>
                    <div class="heading ask">
                      <div id="i"></div><div id="ntro">Technical Forum</div>
                    </div>

                    <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">

                        <input name="question" type="text" title="Your Question..." placeholder="Ask Your question here" id="question">

                        <select name="cat">
                            <option valus="Category">Category</option>
                            <option value="Programming Related Qquestions">Programming Related</option>
                            <option value="Syllabus Related Questions">Syllabus Related</option>
                            <option value="Event Related Questions">Event Related</option>
                        </select>
                        <input name="submit" type="submit" class="up-in" id="ask_submit">
                    </form>
                </center>
            </div>
        </div>

        <div id="ask-ta">
            <h1>Thank You.<br>Stay tunned for updates.</h1>
        </div>

        <?php

            if( isset( $_POST["submit"] ) )
            {

                function valid($data){
                    $data=trim(stripslashes(htmlspecialchars($data)));
                    return $data;
                }
                $question = valid( $_POST["question"] );

                $no = valid( $_POST["cat"]);
                $question = addslashes($question);
                $q = "SELECT * FROM quans WHERE question = '$question'";
                $result = mysqli_query($conn,$q);
                if(mysqli_error($conn))
                    echo "<script>window.alert('Some Error Occured. Try Again or Contact Us.');</script>";
                else if( $no == "Category"){
                    echo "<script>window.alert('Choose a Category.');</script>";
                }
                else if( mysqli_num_rows($result) == 0 ){
                    $query = "INSERT INTO quans VALUES(NULL, '$question', NULL,'".$_SESSION['user']."',NULL)";
                    $query1 = "INSERT INTO quacat SELECT q.id, c.name FROM quans as q, category as c WHERE q.question = '".$question."' AND c.name = '".$_POST['cat']."'";
                    mysqli_query( $conn, $query);
                    if(mysqli_query( $conn, $query1)){
                        echo "<style>#sf{display: none;} #ask-ta{display:block;}</style>";
                    }
                    else{
                        echo "<script>window.alert('Some Error Occured. Try Again or Contact Us.');</script>";
                    }
                }
                else{
                    echo "<script>window.alert('Question was already Asked. Search it on Home Page.');</script>";
                }

                mysqli_close($conn);
            }

        ?>



        <!-- Sripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
