<?php 
session_start();
include('connect.php');

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
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


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
 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Administrator Data Table </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Name </th>
 <th> Username </th>
 <th> Email </th>
 <th> Password </th>
 <th> Edit/Update </th>
 <th> Delete </th>

 </tr >

 <?php

 include 'connect.php'; 
 $q = "select * from admin ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>


  <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?> && 
    name=<?php echo $res['name']; ?> && username=<?php echo $res['username']; ?> && email=<?php echo $res['email']; ?> && password=<?php echo $res['password']; ?>" class="text-white"> Edit/Update  </a> </button> </td>





 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

     <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>