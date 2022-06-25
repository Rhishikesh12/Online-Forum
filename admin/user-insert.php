<?php
session_start();
include 'connect.php';

if(isset($_POST['done'])){

    $username = $_POST["username"] ;
    $password = $_POST["password"] ;
    $name = $_POST["name"] ;
    $email = $_POST["email"] ;
    $q = " INSERT INTO users (name, username, email, password) VALUES ('$name','$username','$email','$password')";

    $query = mysqli_query($con,$q);
}
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">

     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

</head>
<body>
 <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <?php include 'left_menu.php';?>
        </nav>
    </aside>
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
        <?php include 'header_menu.php';?>
        </header>
 <div class="col-lg-6">
 
 <form method="post">
 
 <br><br><div class="card">
  
 <div class="card-header bg-dark ">
 <h1 class="text-white text-center ">  Add User  </h1>
 </div><br>
 <div class="p-5">

 <label> Full Name: </label>
 <input type="text" name="name" class="form-control" required> <br>

 <label> Username: </label>
 <input type="text" name="username" class="form-control" required> <br>

 <label> Email: </label>
 <input type="email" name="email" class="form-control" required> <br>

 <label> Password: </label>
 <input type="Password" name="password" class="form-control" required> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
</div>
</div>
 </form>
 </div>

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>