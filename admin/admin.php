<?php 
session_start();
include('connect.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Administartor Page</title>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<style>
        body{
          margin: 0;
          padding: 0;
         background: lightgrey;
        }
      .col-lg-3{
        position: relative;
        top: 180px;
        left:540PX;
      }
      a{
        color: white;
      }
    </style>
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
    <section>
    	<div class="container-fluid">
    	<h2 class="text-center text-capitalize my-5">Welcome to Administrator Panel </h2>
		</div>
    </section>

 	  <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
  
</body>
</html>