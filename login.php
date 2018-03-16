
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
</head>
<body background="books.jpg">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="registration.php">Register</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.html">Home</a></li>
        <li><a href="wishlist.html">Wish List</a></li>
        
      </ul>
      <form class="navbar-form navbar-left" role="search" >
      <div class = "form-group">
      <input type ="text" class="form-control" placeholder="search">
      </div>
      <button type ="submit" class="btn btn-default">Q</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<div class="jumbotron">
<h1>Login Page</h1>
<p>Here!</p></div>

<?php
			if(!(isset($_SESSION['username'])))
			{ 
			?>
<div class="container" class="container-fluid">
<form id="login" class="form-horizontal" action="login.php?page=login1" method="post" enctype="multipart/form-data" autocomplete="on">
<div class="form-group" class="row">
     
      <div class="col-sm-10">
	  <form  method="POST">
	   <label>Username:</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
        </div>
      </div>

	<div class="form-group">
      
      <div class="col-sm-10"> 
        <label>Password:</label>	  
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
	<br>
	<div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-warning" name="login">Login</button>
      </div>
  </div>
	</div>
	<p>
		Not yet a member? <a href="registration.php">Sign up</a>
	</p>
</form>
</div>
<?php
			}
			?>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

<?php
	session_start();
	//session_destroy();
	require("connect.php");
	if (isset($_GET['page']))
	{
		$pages=array("login","login1","registration");
			if (in_array($_GET['page'],$pages))
			{
				$_page=$_GET['page'];
			//echo "$_page";
			}
			else
			{
				$_page="books";
			}
	}
	else
	{
		$_page="books";
	}
	
?>



