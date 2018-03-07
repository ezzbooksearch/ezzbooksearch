<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registeration, login and logout user in php</title>
	<link rel="stylesheet" type = "text/css" href="style4.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body background="images/orange-white.jpg">
<div class="p-3 mb-2 bg-success text-white">ezzBooks</div>
<div class="container">
<!--<div class="jumbotron">-->
  <h1>Login</h1>
</div>

<div class="container" class="container-fluid">
<form id="login" class="form-horizontal" action ="loginn.php" method="post" enctype="multipart/form-data" autocomplete="on">
<?php include 'errors.php'; ?>
<div class="form-group" class="row">
      <label class="control-label col-sm-4" class="control-label col-xs-2"for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
        </div>
      </div>

	<div class="form-group">
      <label class="control-label col-sm-4" for="password">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
	<br>
	<div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="login">Login</button>
      </div>
  </div>
	</div>
	<p>
		Not yet a member? <a href="reg.php">Sign up</a>
	</p>
</form>
</div>
</body>
</html> 

