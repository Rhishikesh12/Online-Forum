
<?php
    session_start();

    if( isset($_SESSION['user'])){
        header("Location: profile.php");
    }

    if( isset( $_POST["submit"] ) )
    {

        $inuser = $_POST["username"] ;
        $inkey = $_POST["password"] ;
		$usertypeop=$_POST['usertype'];
        include("connect.php");

        $query = "SELECT username, password, name, email, join_date FROM users WHERE username='$inuser'";
		$query1 = "SELECT username, password, name, email FROM admin WHERE username='$inuser'";

        $result = mysqli_query( $conn, $query);
		$result1 = mysqli_query( $conn, $query1);
		
		print_r($result);
		print_r($result1);
		
		if(mysqli_error($conn)){
            echo "<script>window.alert('Something Goes Wrong. Try Again');</script>";
        }
        else if( $usertypeop=="user" && mysqli_num_rows($result) > 0 ){
            while( $row = mysqli_fetch_assoc($result) ){
                $user = $row['username'];
                $pass = $row['password'];
                $name = $row['name'];
                $email = $row['email'];
                $date = $row['join_date'];

            }
            if( $inkey == $pass ) {
                $_SESSION['user'] = $user;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                $_SESSION['date'] = $date;
                header('Location: index.php');
            }
            else{
                echo "<script>window.alert('Wrong Username or Password Combination. Try Again');</script>";
            }
		}
		else if( $usertypeop=="admin" && mysqli_num_rows($result1) > 0 ){
            while( $row = mysqli_fetch_assoc($result1) ){
                $user = $row['username'];
                $pass = $row['password'];
                $name = $row['name'];
                $email = $row['email'];
                

            }
            if( $inkey == $pass ) {
                $_SESSION['user'] = $user;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('Location: admin/admin.php');
            }
            else{
                echo "<script>window.alert('Wrong Username or Password Combination. Try Again');</script>";
            }
			
			
			
			
			
        }
        else{
            echo "<script>window.alert('No Such User exist in database');</script>";
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Technical Forum </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        <style media="screen">
        body{
          font-family: 'Century Gothic',sans-serif;
        }
        #ntro{
          font-family: 'Century Gothic',sans-serif;
        }
        </style>
    </head>
    <body id="_5">
      <!-- navigation bar -->
    

        <!-- content -->
        <div id="content">
            <center>
                <div class="heading">
                    <div id=""></div><div id="ntro">Technical Forum</div>

                </div>
                <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="post" enctype="multipart/form-data">
                    <input name="username" id="user" type="text" title="Username" placeholder="Username" required>
                    <input name="password" id="key" type="password" title="Password" placeholder="Password" required>
                    <i class="material-icons" id="lock">lock</i>
                    <i class="material-icons" id="person">person</i>
                    
						<div>
                     

							<select name="usertype" >
							<option value=".">PLEASE SELECT LOGIN TYPE</option>
							<option value="user">USER</option>
							<option value="admin">ADMIN</option>
							</select>
                        </div>
					
					<div id="button-block">
                        <center>
                            <div class="buttons"><input name="submit" type="submit" value="Log In" class="up-in"></div>
                            <div class="buttons" id="new"><input type="button" value="Create a new account" class="up-in" id="tosign"></div>
                        </center>
                    </div>
                    <!-- <a href="contacts.php" id="trouble"><span>Having Trouble in login ? Contact Us</span></a> -->
                </form>
            </center>
        </div>




        <!-- Sripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script type="text/javascript" src="js/jquery-3.2.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="js/script.js"></script>

    </body>

</html>
