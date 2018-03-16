

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

<p id="rabbit"></p>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();// Creates XMLHttp request
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {//When readyState is 4 and status is 200, the response is ready
      document.getElementById("rabbit").innerHTML = // response as a text string, using the responseText property
      this.responseText;
    }
  };
  xhttp.open("GET", "xmlhttp_info.txt", true);
  xhttp.send();
}
</script>
<body background="books.jpg"> 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="registration.php">Register </a>
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

<h1>Registration</h1>
<p>Here!</p>


<div class="container" class="container-fluid">
  <form id="signup" class="form-horizontal" action ="registration1.php" method="post" enctype="multipart/form-data" autocomplete="on">
  <!--display validation errors here-->
      <div class="form-group" class="row">
      
      <div class="col-sm-10">
	  <label>Username:</label>
        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" value="">
      </div>
    </div>
   
    <div class="form-group">
      
      <div class="col-sm-10"> 
        <label>Email:</label>	  
        <input type="email" name="emailid" class="form-control" id="emailid" placeholder="abc@b-kart.com" value="">
    </div>
    </div>
    
    <div class="form-group">
      
      <div class="col-sm-10"> 
        <label>Password:</label>	  
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
      </div>
    </div>
    
    <div class="form-group">
      
      <div class="col-sm-10"> 
        <label>Confirm Password:</label>	  
        <input type="password" name="confpassword" class="form-control" id="confpassword" placeholder="Confirm password">
      </div>
    </div>
    
    <div class="form-group"> 
       <div class="btn-group">   
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="register" class="btn btn-info">Register</button>
      </div>
  </div>
</div>
<p> Already a member? <a href="login.php">Sign in</a></p>
</form>

</div>


</body>
</html>