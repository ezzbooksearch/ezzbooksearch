<?php

include ("server.php");

//if user not logged in, they can't have access
if (empty($_SESSION['username'])){
	header('location: loginn.php');
}

else {
    // Makes it easier to read
    $username = $_SESSION['username'];
    //$email    = $_SESSION['email'];
	  //$password = $_SESSION['password'];
    //$active   = $_SESSION['active'];
}

?>

<!DOCTYPE html>
<html>
 <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ezzbooksearch</title>

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
    
    <link rel"stylesheet" href="style4.css">

  </head>

<body id="page-top">

<!-- Navigation -->
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        
        <a class="navbar-brand" href="#">All Time Book Search Engine</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="topnav">
    <!--search bar-->
    <div id="search" class="search-container">
      <form id="forms">
        <input type="text" id = "books" placeholder="Title / Author / ISBN" name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div id="result"></div>
</div>


        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">ezz<h4><i>books</h4></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">Books You Read</h1>
          <h2 class="masthead-subheading mb-0">Reflect Who You Are</h2>
          <p>ezzbook is centered on providing customers with wide array of online books, and the idea of shooping prices.</p>
          <a href="index.html" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; ezzbooks 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    <!--before code-->   
<div class="container" class="container-fluid">
<div class="content">
	<?php if( isset($_SESSION['success']) && !empty($_SESSION['success']) ): ?>
			<div class="error success">
				<h3>
				<?php 
					  echo  ($_SESSION['success']);
	          unset ($_SESSION['success']);
				 ?>
				 </h3>

			</div>
			
  <?php endif ?>
	

	<?php if(isset($_SESSION['username'])): ?>
		<p> Welcome <strong> <?php echo $_SESSION['username']; ?></strong></p>
		<p><a href ="reg.php?logout='1' " style="color: red;">Logout</a></p>
	<?php endif //ends the if statement?>
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!--dms script>-->
    <script src="scriptdmz.js"></script>
    <!--<script src="scriptdmz.php"></script>-->
 <!--<link href="styler.css" rel="stylesheet" type="text/css">-->
</body>
</html> 


