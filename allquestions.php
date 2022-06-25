<?php
    session_start();
    require("connect.php");
    $query = "SELECT question, answer, askedby, id FROM quans order by id";
    $sql = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Answered Questions </title>
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
    <!-- Sripts -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <style type="text/css">

    		body{

    			background:lightgrey;	}
    		.over{height: 100px;}
    		.card{ background: white;}
    	</style>

    <title></title>
  </head>
  <body>
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

<div class="container">
	<?php while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){ ?>
	<div class="card" style="padding-top: 25px;padding-left: 30px;padding-right:20px; margin: 70px; height:200px; background-color:grey;">
		<div class="row">
		</div>

<!-- fetching posted questions from Database -->
		<?php echo "Question:"."<h2>".$row['id']."</h2>"."<h2>".$row['question']."</h2>"; ?>


<!-- fetching answers from Database -->
		<div class="over">
    <p id="ans"><?php echo "Answers:"."<h5>"."•"." &nbsp;&nbsp;".$row['answer']."<h5>";?></p>
		</div>

    <!-- Detail Button -->
<?php echo '<span><a  style="margin-right:80%;" href="categories.php">Details</a>';?>
	</div>
<?php } ?>
</div>






  </body>


</html>
