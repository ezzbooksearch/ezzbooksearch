<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="welcome.php">Book Search</a>
			</div>
			<div class="pull-right">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php
					echo $_SESSION['name'];
					?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="profile.php">My Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<form role="form" method="post" action="welcome.php">
		<div class="col-md-9" style="margin-bottom: 25px;">
			<div class="input-group">
				<input type="text" name="search" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default" name="submit" type="button">Go!</button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</form>
</div>

</body>
</html>
<?php

include("database/db_conection.php");
require_once 'bookapi/vendor/autoload.php';

// your API key here
$API_KEY = 'AIzaSyCA7DfyYRrwLGjNvXYcswnYSfgKqmNEArM';

if(isset($_POST['submit']))
{
	$user_search = isset($_POST['search']) ? $_POST['search'] : '';

	if(isset($user_search) && !empty($user_search))
	{
		$client = new Google_Client();
		$client->setApplicationName("GetBookData");
		$client->setDeveloperKey( $API_KEY );

		// get an instance of the Google Books client
		$service = new Google_Service_Books($client);

		// set options for your request
		$optParams = [];

		// make the API call to retrieve some search results
		$results = $service->volumes->listVolumes($user_search, $optParams);

		if(count($results) > 0)
		{
			$html = '';
			foreach ( $results as $item ) {
				$html = '';
				$html .=  '<div class="container"><div class="col-md-10">
				<div class="media">
				<div class="media-left">';

				if(!empty($item['volumeInfo']['imageLinks']['thumbnail']))
				{
					$html .= '<a href="' . $item['volumeInfo']['previewLink'] . '" target="_blank">
					<img class="media-object" height="200" width="200" src="'. $item['volumeInfo']['imageLinks']['thumbnail'] .'" alt="No Image Found">
					</a>';
				} else {
					$html .= '<a href="' . $item['volumeInfo']['previewLink'] . '" target="_blank">
					<img class="media-object" height="200" width="200" src="bootstrap-3.2.0-dist\images/No_Image_Available.png" alt="No Image Found">
					</a>';
				}


				$html .= '</div>
				<div class="media-body">
				<h4 class="media-heading">'. $item['volumeInfo']['title'] .'</h4>
				<p>Preview Link : <a href="' . $item['volumeInfo']['previewLink'] . '" target="_blank">' . $item['volumeInfo']['previewLink'] . '</a></p>';

				if(!empty($item['volumeInfo']['description']))
				{
					$html .= '<p>
					Description : '. $item['volumeInfo']['description'] . '
					</p>';
				}
				if(!empty($item['volumeInfo']['categories'][0]))
				{
					$html .= '<p>
					Category : '. $item['volumeInfo']['categories'][0] . '
					</p>';
				}
				if(!empty($item['volumeInfo']['authors'][0]))
				{
					$html .= '<p>
					Author : ' . $item['volumeInfo']['authors'][0] . '
					</p>';
				}
				if(!empty($item['volumeInfo']['publisher']))
				{
					$html .= '<p>
					Publisher : '. $item['volumeInfo']['publisher'] . '
					</p>';
				}
				if(!empty($item['volumeInfo']['pageCount']))
				{
					$html .= '<p>
					No. of Pages : '. $item['volumeInfo']['pageCount'] . '
					</p>';
				}
				if(!empty($item['volumeInfo']['publishedDate']))
				{
					$html .= '<p>
					Publish Date : '. $item['volumeInfo']['publishedDate'] . '
					</p>';
				}
				if(!empty($item['volumeInfo']['infoLink']))
				{
					$html .= '<p>
					Information Link : <a href="' . $item['volumeInfo']['infoLink'] . '" target="_blank">' . $item['volumeInfo']['infoLink'] . '</a>
					</p>';
				}

				$html .= '</div>
				</div><hr>
				</div></div>';

				echo $html;
			// echo '<pre>';
   			// useful for debugging and checking which fields actually are in each item of the response
			// print_r( $item );
			// echo '</pre>';
			}
		} else {
			echo '<div class="container"><div class="col-md-10"> No Books Found. </div></div>';
		}
	} else {
		echo "<script>alert('Please enter Book Name!')</script>";
	}
}
?>