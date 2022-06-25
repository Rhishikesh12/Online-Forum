<?php
    session_start();

    if( isset($_SESSION['user'])){
        header("Location: profile.php");
    }
    include('connect.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Technical Forum </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style media="screen">
        body{
          font-family: 'Century Gothic',sans-serif;
        }
        #ntro{
          font-family: 'Century Gothic',sans-serif;
        }
        </style>
    </head>
    <body id="_6">
      <!-- navigation bar -->
    


        <!-- content -->
        <div id="content">
            <div id="sf">
                <center>
                    <div class="heading">
                <div id="i"></div><div id="ntro">Technical Forum</div>

                    </div>

                    <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                        <input name="username" id="user" type="text" title="This will be your parmanent Id." placeholder="Create a Unique Username" required>

                        <input name="password" id="key" type="password" title="Password must contain at least 8 characters including alphabets,numbers, and symbols." placeholder="Create a Strong Password" required>
                        <i class="material-icons" id="lock">lock</i>

                        <i class="material-icons" id="person">person</i>
                        <input name="name" id="name" type="text" title="Although, you will be called by your name only" placeholder="Enter your Full Name" required>

                        <input name="email" id="mailbox" type="email" title="Your Email id is in safe hands." placeholder="Enter your Email Id" required>
                        <i class="material-icons" id="email">mail</i>

                        <i class="material-icons" id="iden">perm_identity</i>

                        <div id="button-block">
                            <center>
                                <div class="buttons"><input name="submit" type="submit" value="Create An Account" class="up-in"></div>
                                
                            </center>
                        </div>
                    </form>
                </center>
            </div>

            <div id="ta">
                <h1>Thank You For Registering With Us.</h1>
            </div>

        </div>

        <?php
			
			
			
			
            if( isset( $_POST["submit"] ) )
            {
             
                $username = $_POST["username"] ;
                $password = $_POST["password"] ;
                $name = $_POST["name"] ;
                $email = $_POST["email"] ;

                $query = "INSERT INTO users values( NULL, '$username', '$password', '$name', '$email', CURRENT_TIMESTAMP )";
                if(mysqli_error($conn)){
                    echo "<script>window.alert('Something Goes Wrong. Try Again');</script>";
                }           
                else if( mysqli_query( $conn, $query) ){
                    echo "<style>#sf{display: none;} #ta{display:block;}</style>";
					header('Location: index.php');
				}
			
                else{
                    echo "<script>window.alert('Username Already Exist !! Try Again');</script>";
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
