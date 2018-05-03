<?php
/**********************************************\
* Copyright (c) 2013 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

session_start();
define('INCLUDED',true);
require 'includes/core_func.php';
require 'includes/markup_func.php';

if (user_logged_in()) {
	if (get_last_page() !== false) {
		header('Location: http://'.get_last_page());
	}
	else {
		header('Location: ../');
	}
	die();
}

$errors = array();
if (isset($_SESSION['reg_errors']) && !empty($_SESSION['reg_errors'])) {
	$errors = $_SESSION['reg_errors'];
	unset($_SESSION['reg_errors']);
}
?>
<!DOCTYPE html">
<html>
	<head>
		<title>Registration Form</title>
		<meta charset="UTF-8">
		<link type="text/css" rel="stylesheet" href="css/chat_global.css">
		<style type="text/css">
			#uname,  #passwd, #submit_register{
				width: 318px;
				height: 50px;
				margin: 15px auto;
				display: block;
				font-size: 30px;
			}
			#login_link{
				width: 318px;
				height: 50px;
				margin: 15px auto;
				text-align: center;
			}
			#title {
				margin-bottom: 15px;
			}
			/* #recaptcha_widget_div {
				width: 318px;
				height: 129px;
				margin: 15px auto;
			} */
			#login_form {
				width: 500px;
				margin: 0 auto;
			}
			#container {
				margin-top: 100px;
			}
			.error {
				width: 318px;
				margin: 0 auto;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="container">
				<div id="title">
					<h1>Registration Form</h1>
				</div>
				<?php do_html_register_form($errors);?>
			</div>
		</div>
	</body>
</html>