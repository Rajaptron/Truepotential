<?php

session_start();
include_once 'database/db.php';

if(isset($_POST['submit']))
{

$q = "SELECT * FROM user WHERE phone='$_POST[phone]'";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);
	if($ret == true)
	{
            
                $phone=$_POST['phone'];                
                header("location:sign-in.php?phone=$phone");
	}
	else
	{
                $phone=$_POST['phone'];  
		header("location:sign-up.php?phone=$phone");
	}
    }


    $result=mysqli_query($con,"select * from banner where sno=1");
    while($row=mysqli_fetch_array($result))
    {
     
     $image=$row['image'];
     $title= htmlspecialchars_decode($row['title']);

     }
     
     
     $result=mysqli_query($con,"select * from webcontent where sno=1");
    while($row=mysqli_fetch_array($result))
    {
     
     $whatwedo= htmlspecialchars_decode($row['whatwedo']);
     $organisation= htmlspecialchars_decode($row['organisation']);
     $featured= htmlspecialchars_decode($row['featured']);


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
    <style>
.banner-input{
       background-color:rgba(0,0,0,0) !important;
       color:white !important;
       font-size:30px;
       letter-spacing:2px;
}
::-webkit-input-placeholder, 
::-moz-placeholder,
:-ms-input-placeholder,
:-moz-placeholder {
  color: white;
}
    </style>
  </head>
  <body>
  
    <!-- Preloader -->
    <div id="fakeloader"></div>
    

    <?php
    
    include 'include/header.php';
    
    ?>

	<div class="main-banner">           			
        <div class="hvrbox">
            <img src="http://truepotential.in/admin/<?php echo $image;?>" alt="Mountains" class="hvrbox-layer_bottom">
            <div class="hvrbox-layer_top">
                    <div class="container">
                    <div class="overlay-text text-center">		

                        <br/><br/>					
                        
                        <div class="col-md-8 offset-md-2">
                            
                            <form method="POST" action="#">
							<div class="input-group">
							  <input type="text" class="form-control banner-input" name="phone" pattern="^\d{10}$" aria-label="Text input with dropdown button" placeholder="Enter Your Mobile Number" style="border:0;    border-bottom: 1px solid #ece9e9;background-color:none! important ;">
							 
							  <div class="input-group-append">
                                                              <button class="btn btn-search" type="submit" name="submit" style="background:none;border:0;"><i class="fa fa-arrow-circle-right" style="font-size:30px;"></i></button>
							  </div>
							</div>
                            </form>  
			</div>

						<div class="slider-feature">
							<h3><?php echo $title;?> </h3>
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
					<h2>What We Do?
                    <center> <hr style="width:10%;"/> </center>					</h2>
                                    <p>
                                        
                                        
                                          <?php 
                                        
                                             $wwd = strip_tags($whatwedo);

                                                if (strlen($wwd) > 10) {

                                                    // truncate string
                                                    $wwd = substr($wwd, 0, 200);

                                                    // make sure it ends in a word so assassinate doesn't become ass...
                                                    $wwd1 = substr($wwd, 0, strrpos($wwd, ' ')).'...'; 
                                                }
                                        
                                                echo $wwd1;?>
                                            <br/><br/>
                                            <a href="" data-toggle="modal" data-target="#whatwedobox" class="btn btn-info"> Read More</a>
                                        
                                        
                                        
                                        
                                    </p>
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
                                    <p>
                                        
                                        <?php 
                                        
                                             $fea = strip_tags($featured);

                                                if (strlen($fea) > 10) {

                                                    // truncate string
                                                    $fea = substr($fea, 0, 200);

                                                    // make sure it ends in a word so assassinate doesn't become ass...
                                                    $fea1 = substr($fea, 0, strrpos($fea, ' ')).'...'; 
                                                }
                                        
                                                echo $fea;?>
                                            <br/><br/>
                                            <a href="" data-toggle="modal" data-target="#featuredbox" class="btn btn-info"> Read More</a>
                                        
                                    </p>
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
					<p><?php 
                                        
                                             $org = strip_tags($organisation);

                                                if (strlen($org) > 10) {

                                                    // truncate string
                                                    $org = substr($org, 0, 200);

                                                    // make sure it ends in a word so assassinate doesn't become ass...
                                                    $org1 = substr($org, 0, strrpos($org, ' ')).'...'; 
                                                }
                                        
                                                echo $org;?>
                                            <br/><br/>
                                            <a href="" data-toggle="modal" data-target="#organisationbox" class="btn btn-info"> Read More</a>
                                        
                                        </p>
				</div>
			</div>
			</div>

      </div>
          
          
          
          
          
          
          
          
 <!-- Modal -->
<div class="modal fade" id="whatwedobox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">What We Do? </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $featured;?>
      </div>
      
    </div>
  </div>
</div>         
         

          
 <!-- Modal -->
<div class="modal fade" id="featuredbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Our Features </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $featured;?>
      </div>
      
    </div>
  </div>
</div>         
          
<!-- Modal -->
<div class="modal fade" id="organisationbox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Our Organisation </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $organisation;?>
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
                                    
                                    
                                    
                                    <?php
                                    
                                    
                                    
                                    
                                    
                                        $result=mysqli_query($con,"select * from reviews where status='yes'");
                                        while($row=mysqli_fetch_array($result))
                                        {

                                         
                                         $name= htmlspecialchars_decode($row['name']);
                                         $email= htmlspecialchars_decode($row['email']);
                                         $des= htmlspecialchars_decode($row['description']);

                                      

                                         
                                              ?>
                                    
					<div class="single-testimonial text-center">
						<img src="images/testimonial-1.jpg" alt="slide 1">
						<p><i class="fas fa-quote-left"></i>
                                                   <?php echo $des;?> 
                                                </p>
						<h3><?php echo $name;?> </h3>
					</div>

					
                                    
                                    <?php
                                    
                                    
                                        }
                                        ?>

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