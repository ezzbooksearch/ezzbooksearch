<?php
session_start();

if(!$_SESSION['email'])
{

    header("Location: login.php");//redirect to login page to secure the welcome page without login access.
}

?>


<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>My Profile</title>
</head>
<style>
.login-panel {
    margin-top: 150px;

</style>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">My Profile</h3>
                    </div>
                    <div class="panel-body">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" value="<?php echo $_SESSION['name'] ?>" name="name" readonly type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" value="<?php echo $_SESSION['email']  ?>"  name="email" readonly type="text">
                            </div>


                            <a class="btn btn-lg btn-success btn-block" type="button" href="welcome.php">Back</a>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user = "select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $userData = mysqli_fetch_row($run);
        $_SESSION['name']=$userData[1];
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>