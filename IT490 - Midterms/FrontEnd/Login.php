r<?php 
//session_start();

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  ini_set('display_errors', 1);

  include("err.php");
  include('server.php'); 
  //include_once("rabbitmqphp_example/testRabbitMQClient.php");
  
?>
     
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ezzbooksearch</title>
    <link rel="stylesheet" href="style4.css">
    <link rel-"stylesheet" href = "style1.css">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

<body background= "images/orange-white.jpg">

<div class="p-3 mb-2 bg-success text-white">ezzBooks</div>

</div>

<div class="container" class="container-fluid">
<form id="login" class="form-horizontal" action ="login.php" method="post" enctype="multipart/form-data" autocomplete="on">

<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><strong>Home</strong></a>

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
        <!--<button type="submit" class="btn btn-success" name="login">Login</button>-->
        <button type="submit" onclick = "sendReq()" class="btn btn-success" name="login">Login</button>
      </div>
  </div>
	</div>
 
	<p>
		Not yet a member? <a href="register.php">Sign up</a>
	</p>
</form>
</div>
<script src = "request.js"></script>
</body>
</html> 
