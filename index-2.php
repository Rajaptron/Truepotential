<?php
session_start();
include_once 'database/db.php';

if(isset($_SESSION['phone']))
{
    $result=mysqli_query($con,"select * from user where phone='$_SESSION[phone]'");
    while($row=mysqli_fetch_array($result))
     {
    $fname=$row['fname'];
    $lname=$row['lname'];
    
  
     
    }
}
else{
      header("location:index.php");
}

if(isset($_POST['logout']))
{
    session_destroy();
     header("location:index.php");
}


?>

<!doctype html>
<html lang="en">
  

<head>
    <title>True Potential</title>
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
  
    <!-- Preloader -->
    <div id="fakeloader"></div>
    


	<div class="main-menu-1x">	
		<div class="container">
			<div class="row">
				<div class="col-md-12">		
					<div class="main-menu">		
						<nav class="navbar navbar-expand-lg navbar-light bg-light btco-hover-menu">
							<a class="navbar-brand" href="#">
								<img src="images/logo.png" class="d-inline-block align-top" alt="">						
							</a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse" id="navbarSupportedContent">
						  
							<ul class="navbar-nav ml-auto main-menu-nav">

							  <li class="nav-item dropdown active">
									<a class="nav-link" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Home <span class="sr-only">(current)</span>
									</a>
									
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="#">xxxxxxx</a>
							  </li>

							  <li class="nav-item">
								<a class="nav-link" href="#">About Us</a>
							  </li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							  </li>
							  
							  
							    <li class="nav-item">
							  
							  <div class="col-md-12">
				             
							<div class="input-group">
							  <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search......">
							 </div>
				               </div>
							   
							   </li>

							  <li class="nav-item sign-in">
								<a class="nav-link" href="sign-in.html"> <i class="fa fa-user"></i>  </a>
								
								<ul class="dropdown-menu">
							                    <li><a class="dropdown-item" href=""><i class="fa fa-user" style="float:left;"></i> &nbsp;&nbsp; My Profile</a></li>	
								
												<li><a class="dropdown-item" href=""><i class="fa fa-gift" style="float:left;"></i> &nbsp;&nbsp; My Packages</a></li>
												<li><a class="dropdown-item" href=""><i class="fa fa-map-marker" style="float:left;"></i> &nbsp;&nbsp; My Assigned Task</a></li>
												
												<li><a class="dropdown-item" href=""><i class="fa fa-heart" style="float:left;"></i> &nbsp;&nbsp;My Potentail Report</a></li>
												<li><a class="dropdown-item" href=""> <i class="fa fa-lock" style="float:left;"></i> &nbsp;&nbsp;Change Password</a></li>
                                                                                                <li><form method="POST" action="#"> <button type="submit" name="logout" class="dropdown-item" style="font-size:15px;text-align: center;cursor: pointer;"><i class="fa fa-sign-out" ></i> &nbsp;&nbsp;Logout</button> </form></li>
											</ul>
								
								
								
							  </li>	

							  <li class="nav-item">
								
								
								
								
								
								
							  </li>	

							</ul>					
							
						  </div>
						</nav>
					</div>
				</div>
				
				
				
				
				
				
			</div>
		</div>
	</div>

	<div class="main-banner">           			
        <div class="hvrbox">
            <img src="images/banner-1.png" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                    <div class="container">
                    <div class="overlay-text text-center">		

                        <br/><br/>					
                        
                     

						<div class="slider-feature">
							<h3>Hello <?php echo $fname;?>&nbsp;<?php echo $lname; ?>..... </h3>
						</div>			
                    </div>
            	</div>
        	
        	</div>
        </div>	                     
    </div>

    <div class="course-category-1x">
		<div class="container">			
			<div class="col-md-12">
				<div class="title-middle">
					<h2>Our Speciality
                    <center> <hr style="width:10%;"/> </center>					</h2>
					<p>Find subjects you're passionate about by browsing our online Tasks. Start learning with top courses Built With Industry Experts. Find subjects you're passionate about by browsing our online Tasks. Start learning with top courses Built With Industry Experts.</p>
				</div>
			</div>

      </div>
	
	</div>
	
	<div class="learning-path-1x">
		<div class="container">
			<div class="col-md-12">
				<div class="title-middle">
					<h2>Categories <center> <hr style="width:10%;"/> </center></h2>
				</div>
			</div>

			<div class="col-md-12">
				<div class="learning-path">

					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/1.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text blue">
								<div class="hvrbox-text">
									<a href="#">Become a Designer</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/2.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text green">
								<div class="hvrbox-text">
									<a href="#">Become a Developer</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/3.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text red">
								<div class="hvrbox-text">
									<a href="#">Become a Manager</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/4.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text yellow">
								<div class="hvrbox-text">
									<a href="#">Become a Marketer</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/5.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text">
								<div class="hvrbox-text">
									<a href="#">Design Introduction</a>							
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	
	     <br/><br/><br/> 
	
		<div class="container">
			<div class="col-md-12">
				<div class="title-middle">
					<h2>Latest Tasks
					<center> <hr style="width:10%;"/> </center></h2>
				</div>
			</div>

			<div class="col-md-12">
				<div class="learning-path">

					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/1.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text blue">
								<div class="hvrbox-text">
									<a href="#">Become a Designer</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/2.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text green">
								<div class="hvrbox-text">
									<a href="#">Become a Developer</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/3.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text red">
								<div class="hvrbox-text">
									<a href="#">Become a Manager</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/4.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text yellow">
								<div class="hvrbox-text">
									<a href="#">Become a Marketer</a>							
								</div>
							</div>
						</div>
					</div>
					<div class="single-learning-path">
						<div class="hvrbox">
							<a href="#"><img src="images/5.jpg" alt="slide 1" class="hvrbox-layer_bottom"></a>
							<div class="hvrbox-layer_top hvrbox-text">
								<div class="hvrbox-text">
									<a href="#">Design Introduction</a>							
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>

	
	
	
	
	  <div class="course-category-1x">
		<div class="container">	
          <div class="row">		
			<div class="col-md-12">
				<div class="title-middle">
					<h2>Our Features
					<center> <hr style="width:10%;"/> </center>
					</h2>
					<p>Find subjects you're passionate about by browsing our online Tasks. Start learning with top courses Built With Industry Experts. Find subjects you're passionate about by browsing our online Tasks. Start learning with top courses Built With Industry Experts.</p>
				</div>
			</div>
		 </div>

      </div>
	  
	  <br/><br/><br/>
	
		<div class="container">	

           <div class="row">			
			<div class="col-md-12">
				<div class="title-middle">
					<h2>Our Organisation 
                    <center> <hr style="width:10%;"/> </center>
					</h2>
					<p>Find subjects you're passionate about by browsing our online Tasks. Start learning with top courses Built With Industry Experts. Find subjects you're passionate about by browsing our online Tasks. Start learning with top courses Built With Industry Experts.</p>
				</div>
			</div>
			</div>

      </div>
	
	</div>
	
	<style>
	.tesimonial-1x{
  background: linear-gradient(rgba(33, 41, 62, 0.95), rgba(33, 41, 62, 0.95)), url(images/cta-bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px 0 108px 0; 
  color:white;
  }
  
	</style>
	
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

	
	
	
	

	<footer class="footer-section-1x">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-top">
						<div class="row">
						

							<div class="col-md-8">
								<div class="footer-top-left">
									<div class="row">
										<div class="col-md-4">
											<div class="single-link">
												<h3>Quick Links</h3>	
												<ul>
													<li><a href="#">  About </a></li>
													<li><a href="#">  Faq's </a></li>
													<li><a href="#">  Disclaimer </a></li>
													<li><a href="#">  Contact Us </a></li>	
													<li><a href="#">  Privacy </a></li>	
													<li><a href="#">  Terms & Conditions </a></li>	
												</ul>
											</div>	
										</div>
									
										<div class="col-md-8">
											<div class="single-link">
												<h3>Payments</h3>
												<img src="images/payment/master.png" style="width:80px;">
												<img src="images/payment/visa.png" style="width:80px;">
												<img src="images/payment/paytm.png" style="width:80px;">
												<img src="images/payment/paypal.png" style="width:80px;">
												<img src="images/payment/payumoney.png" style="width:80px;">
												<img src="images/payment/hdfc.png" style="width:80px;">
												<img src="images/payment/axis.png" style="width:80px;">
												<img src="images/payment/icici.png" style="width:80px;">
												<img src="images/payment/mobikwik.png" style="width:80px;">
												<img src="images/payment/razorpay.png" style="width:80px;">
												
											</div>	
										</div>
										
									</div>
								</div>	
							</div>
							
							
							
							<div class="col-md-4">
								<div class="footer-top-right">														
								  <h3>Follow Us on</h3>
	                               <ul>
	                               		<li>+91 258 458 754</li>
	                               		<li>meditrust@info.com</li>																						
									</ul>

									<div class="footer-social-link">
										<ul>
											<li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>	
											<li><a href="#"> <i class="fab fa-instagram"></i> </a></li>		
											<li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
											<li><a href="#"> <i class="fab fa-google-plus-g"></i> </a></li>
										</ul>					
									</div>

								</div>	
							</div>
							
							

						</div>
					</div>	
				</div>

			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<p >© <a href="#">TruePotential  </a> All Rights Reserved </p> 
					</div>
					<div class="col-md-4 offset-md-1">
						<p > <p> Powered By: <a href=""> MICROCOM INTERNATIONAL </a></p>
					</div>
					
				</div>
			</div>						
		</div>	

	</footer>

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
	<!-- Color switcher js -->
    <!-- Color-switcher-active -->  
    <script src="js/color-switcher-active.js"></script>
	<!-- Custom script -->
    <script src="js/custom.js"></script>
	
  </body>

</html>       