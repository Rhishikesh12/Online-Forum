
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color:  #bfbfbf;
  padding: 20px 10px;
  color:#000;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 21px; 
  line-height: 25px;
  border-radius: 4px;
}



.header-right {
  float: right;
  margin-top: 10px;
}

.button {
  background-color: #1a75ff;
  border: none;
  color: white;
  padding-left:15px;
  padding-right: 15px;
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-right: 5px;
  margin-left: 20px;
  cursor: pointer;
}

.b{
  color: white;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
    font-size: 25px;
    font-weight: bold;
     text-align: center;
    color:white;
  }
}
</style>
</head>
<body>

<div class="header">


  <div class="header-right">
   <a>Welcome, <b class="b"><?php echo $_SESSION['user'] ?></b></a>
    <a href="index.php"><button class="button">Log Out</button></a>
  </div>
</div>


</body>
</html>
