<?php
session_start();
include_once 'database/db.php';

if(isset($_POST['submit']))
{

$q = "SELECT * FROM user WHERE phone='$_POST[phone]' AND password='$_POST[password]'";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);
	if($ret == true)
	{
            
                 $_SESSION['phone']=$_POST['phone'];
                 $_SESSION['pass']=$_POST['password']; 
                  
                header("location:index-2.php");
	}
	else
	{
		echo "<script>alert('Wrong Login Details, Try Again!')</script>";
	}
    }




?>


<!doctype html>
<html lang="en">
  
<head>
    <title>Password Recovery - True Potential</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    
	<!-- Favicon icon -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
	
	
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawsome -->
    <link href="fonts/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="css/animate.css" rel="stylesheet">
    <!-- menu CSS-->
    <link href="css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- menu CSS-->
    <link href="slick/slick.css" rel="stylesheet">
	<!-- Lightbox Gallery -->
    <link href="inc/lightbox/css/jquery.fancybox.css" rel="stylesheet">
    <!-- Preloader CSS-->
    <link href="css/fakeLoader.css" rel="stylesheet">
    <!-- Video popup CSS-->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Main CSS -->
    <link href="style.css" rel="stylesheet">
    <!-- Color CSS --> 
    <link rel="stylesheet" href="color/color-switcher.css">     
	<!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
   
    	<style>
	.tesimonial-1x{
  background: linear-gradient(rgba(33, 41, 62, 0.95), rgba(33, 41, 62, 0.95)), url(images/cta-bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px 0 108px 0; 
  color:white;
  }
  
	</style>
  </head>
  <body>
  
    <!-- Preloader -->
    <div id="fakeloader"></div>
 

	<?php
        
        
        include 'include/header.php';
        
        ?>

	
	<div class="page-banner">           			
        <div class="hvrbox">
            <img src="images/video-bg.png" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                <div class="container">
                    <div class="overlay-text text-left">						
                        <h3>Recovery Password</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Recovery Password</li>
                          </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>	                     
    </div>
 
	<div class="sign-in-1x">
		<div class="container">
			<div class="form-container">
				<div class="row">
					<div class="col-md-4">
						<div class="sign-in-form">
							<h3>Recovery Password</h3>
                                                        <form method="POST" action="#">
								<div class="row">
                                                                                                                                     
                                                                    
                                                                    
									<div class="col-md-12">
										<div class="single-input">
											<i class="fas fa-key"></i>																  
											<div class="form-group">							    
											    <input type="email" class="form-control" placeholder="Email" name="email">							    
											</div>
									  	</div>
									</div>  		
									<div class="col-md-12">
										<div class="sign-in-btn">	


                                                                                  <button type="submit" class="btn btn-primary btn-lg" name="submit" id="truesign"> Recover </button>										
											
										
											<h5 style="font-size:15px;">Don’t have an account? <a href="sign-up.php"> Create one here!</a></h5>	
										</div>								
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-7 offset-md-1">
						<div class="sign-in-right">
							<a href="https://www.youtube.com/watch?v=gwinFP8_qIM" class="btn-circle video"><i class="fas fa-play"></i></a>
						</div>
					</div>													
				</div>
			</div>
		</div>
	</div> 

	<div class="tesimonial-1x">
		<div class="container">			
			<div class="col-md-10 offset-md-1">
			<div class="title-middle">
			<h2 style="color:white;">Testimonials  
			<center> <hr style="width:10%;"/> </center>
			</h2>
			</div>
				<div class="testimonial">
					<div class="single-testimonial text-center">
						<img src="images/testimonial-1.jpg" alt="slide 1">
						<p><i class="fas fa-quote-left"></i> Before Coursecity, I was working two minimum wage jobs. Now, I have a new job, a new mindset,<br> and new life!"I learned most of my programming skills and database management skills <br>  through self-study and the material available on Coursecity.</p>
						<h3>Stephanie Magion</h3>
					</div>

					<div class="single-testimonial text-center">
						<img src="images/testimonial-2.jpg" alt="slide 1">
						<p><i class="fas fa-quote-left"></i> Before Coursecity, I was working two minimum wage jobs. Now, I have a new job, a new mindset,<br> and new life!"I learned most of my programming skills and database management skills <br>  through self-study and the material available on Coursecity.</p>
						<h3>Jhon Alex</h3>
					</div>

				</div>
			</div>
		</div>
	</div>
	
	<?php
        
        
        include 'include/footer.php';
        
        ?>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<!-- Wow Script -->
	<script src="js/wow.min.js"></script>
	<!-- Counter Script -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<!-- Masonry Portfolio Script -->
    <script src='js/jquery.mixitup.min.js'></script>
	<!-- Lightbox js -->
	<script src="inc/lightbox/js/jquery.fancybox.pack.js"></script>
	<script src="inc/lightbox/js/lightbox.js"></script>
	<!-- Google map js -->
	<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa6w23do1qZsmF1Xo3atuFzzMYadTuTu0"></script>	
	<script src="js/map.js"></script>
	<!-- loader js-->
    <script src="js/fakeLoader.min.js"></script>
	<!-- Scroll bottom to top -->
	<script src="js/scrolltopcontrol.js"></script>
	<!-- menu -->
	<script src="js/bootstrap-4-navbar.js"></script>
	<!-- youtube popup video -->
	<script src="js/jquery.magnific-popup.min.js"></script> 	 
	<!-- Testimonial slider Script -->
	<script src="slick/slick.min.js"></script>
	
    <script src="js/custom.js"></script>
	
  </body>

</html>       