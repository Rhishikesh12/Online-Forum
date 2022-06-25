
<Style>
	
.menu-title{
	font-family: "Century Gothic",;
}

</Style>



<div class="navbar-header">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars"></i>
	</button>
	
</div>

<div id="main-menu" class="main-menu collapse navbar-collapse">
	<ul class="nav navbar-nav">
		<li class="active">
			<a class="navbar-brand" href="admin.php"><img src="images/tlogo.png" ></a>
	<a class="navbar-brand hidden" href="admin.php"><img src="images/tlogo.png" alt="Logo">TechForum</a>
		</li>
          <h3><a class="menu-title" href="admin.php">Home Page</a></h3>


		
		<h3 class="menu-title">Activities</h3><!-- /.menu-title -->
			
          <li class="menu-item-has-children dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit"></i>Admin Operations</a>
			<ul class="sub-menu children dropdown-menu">
				<li><i class="fa fa-plus-square"></i><a href="Insert.php">Add</a></li>
				<li><i class="fa fa-edit"></i><a href="Display.php">Display</a></li>
				<!-- <li><i class="fa fa-edit"></i><a href="Update.php">Update</a></li> -->
			</ul>
		</li>		
	
	     <li class="menu-item-has-children dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit"></i>User Operations</a>
			<ul class="sub-menu children dropdown-menu">
				<li><i class="fa fa-plus-square"></i><a href="user-insert.php">Add</a></li>
				<li><i class="fa fa-edit"></i><a href="user-display.php">Display</a></li>
				<!-- 	<li><i class="fa fa-edit"></i><a href="user-update.php">Update</a></li> -->
			</ul>
		</li>
		<li class="menu-item-has-children dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-edit"></i>Topic Operations</a>
			<ul class="sub-menu children dropdown-menu">
				<li><i class="fa fa-plus-square"></i><a href="add-topic.php">Add</a></li>
				<li><i class="fa fa-edit"></i><a href="display-topic.php">Display</a></li>
			</ul>
		</li>	
	
	
		<h3 class="menu-title">Extras</h3><!-- /.menu-title -->
		<li class="menu-item-has-children dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
			<ul class="sub-menu children dropdown-menu">
				<li><i class="menu-icon fa fa-sign-in"></i><a href="finalproject1/index.php">Log in</a></li>
			    <li><i class="menu-icon fa fa-sign-in"></i><a href="reg.php">Register</a></li>
			    <li><i class="menu-icon fa fa-sign-in"></i><a href="indexadmin.php">Logout</a></li>  
			</ul>
		</li> 
		 
	</ul>
</div><!-- /.navbar-collapse -->