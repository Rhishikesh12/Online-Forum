<?php

include 'connect.php';

$id = $_GET['id'];

$u = " DELETE FROM `users` WHERE id = $id ";

mysqli_query($con, $u);

header('location:user-display.php');

?>