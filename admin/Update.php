<?php
session_start();
 include 'connect.php';

error_reporting(0);
$name= $_GET['name'];
$username= $_GET['username'];
$email= $_GET['email'];
$password= $_GET['password'];
?>



<?php

 include 'connect.php';

 if(isset($_POST['done'])){
 $id = $_GET['id'];
 $name = $_POST['name'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $q = " Update admin set id='$id',name='$name', username='$username',email='$email',password='$password' where id=$id ";

 $query = mysqli_query($con,$q);

 header('location:Display.php');
 }

?>
<!DOCTYPE html>
<html>
<head>
 <title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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
 <div class="col-lg-6 m-5">
 
 <form method="post">
 
 <br><br><div class="card">
  
 <div class="card-header bg-dark ">
 <h1 class="text-white text-center ">  Update Administartor </h1>
 </div><br>
 <div class="p-5">

 <label> Full Name: </label>
 <input type="text" name="name" value="<?php echo "$name"?>" class="form-control"> <br>

 <label> Username: </label>
 <input type="text" name="username" value="<?php echo "$username"?>" class="form-control"> <br>

 <label> Email: </label>
 <input type="email" name="email" value="<?php echo "$email"?>" class="form-control"> <br>

 <label> Password: </label>
 <input type="Password" name="password"  value="<?php echo "$password"?>" class="form-control"> <br>

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


