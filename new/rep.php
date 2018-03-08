<?php include ("server.php");?>

<!DOCTYPE html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ezzbooksearch</title>
    <link rel="stylesheet" href="style4.css">
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
    
     <script src="request.js"></script>
  </head>

<body background="images/orange-white.jpg">


<div class="p-3 mb-2 bg-success text-white">ezzBooks</div>
<div class="container">
<!--<div class="jumbotron">-->
<h3>Registration</h3>
</div>


<div class="container" class="container-fluid">
  <form name = "signup" id="signup" class="form-horizontal" action ="reg.php" method="post" enctype="multipart/form-data" autocomplete="on">
  <!--display validation errors here-->
  <?php include('errors.php'); ?>
    <div class="form-group" class="row">
      <label class="control-label col-sm-4" class="control-label col-xs-2"for="username">Username:</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="<?php echo $username; ?>">
      </div>
    </div>
   
    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $email; ?>">
    </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="passwordd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-4" for="confirmpassword">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm password">
      </div>
    </div>
    
    <div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" onclick = "loadDoc()" name="register" class="btn btn-success" value="submit">Register</button>
      </div>
  </div>
</div>
<p> Already a member? <a href="loginn.php">Sign in</a></p>
</form>
</div>
</body>
</html>
