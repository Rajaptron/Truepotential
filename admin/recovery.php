<?php
session_start();
include_once 'db/db.php';

if(isset($_POST['submit']))
{

$q = "SELECT * FROM admin WHERE email='$_POST[email]' AND password='$_POST[password]'";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);
	if($ret == true)
	{
            
                 $_SESSION['adminemail']=$_POST['email'];
                 $_SESSION['adminpass']=$_POST['password']; 
                  
                header("location:index.php");
	}
	else
	{
		echo "<script>alert('Wrong Login Details, Try Again!')</script>";
	}
    }




?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Admin- True Potential</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="assets/css/metrotheme.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container login-page">
            
            <!-- Page Content -->
            <div class="page-content">
            
                <!-- Page Inner -->
                <div class="page-inner">
                <div id="main-wrapper"><div class="row">
                        <div class="col-md-3 col-login-box-alt">
                            <div class="panel panel-white login-box">
                                <div class="panel-body">
                                    <a href="login.php" class="logo-name">True Potential</a>
                                    <p class="m-t-md">Recover Your Password.</p>
                                    <form class="m-t-md" method="POST" action="#">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required="" name="email">
                                        </div>
                                      
                                        <button type="submit" name="submit" class="btn btn-success btn-block">Login</button>
                                        <a href="login.php" class="display-block text-muted">Login to your Account</a>
                                    </form>
                                    <p class="text-center m-t-xs text-sm login-footer">© 2018 True Potential. <br/>Crafted with <i class="mdi mdi-heart text-danger"></i> by MICROCOM INTERNATIONAL </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/js/metrotheme.min.js"></script>
    </body>

</html>