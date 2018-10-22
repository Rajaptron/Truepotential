<?php

session_start();
include_once 'database/db.php';



if(isset($_POST['submit']))
{
     
      $date=date("l jS \of F Y ");    
      $fname = htmlspecialchars($_POST['fname'], ENT_QUOTES);
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
      $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
      $pass = htmlspecialchars($_POST['password'], ENT_QUOTES);
      $gender = htmlspecialchars($_POST['gender'], ENT_QUOTES);
      $dob = htmlspecialchars($_POST['dob'], ENT_QUOTES);
      $city = htmlspecialchars($_POST['city'], ENT_QUOTES);
      $state = htmlspecialchars($_POST['state'], ENT_QUOTES);
      $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
      $school = htmlspecialchars($_POST['school'], ENT_QUOTES);
      $class = htmlspecialchars($_POST['class'], ENT_QUOTES);
      $interest = implode(',', $_POST['interest']);
      
      $q = "SELECT * FROM user WHERE email='$email' AND phone='$phone'";
	$cq = mysqli_query($con,$q);
	$ret = mysqli_num_rows($cq);
	if($ret == true)
	{
          echo '<div class="alert warning"  id="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span> 
            <strong> You are Already Registered.</strong> 
             </div>';
           
        }
        
        else{
            
            
        $result=mysqli_query($con,"insert into user(fname,email,phone,password,registration_date,interest,gender,dob,city,state,address,school,class,status) values('$fname','$email','$phone','$pass','$date','$interest','$gender','$dob','$city','$state','$address','$school','$class','no')");
                         
            
        if($result==true)
        {
                 $_SESSION['userphone']=$_POST['phone'];
                  
                 header("location:http://truepotential.in/user/pricing.php");
          
          
          
          
        }
        else{
             echo '<div class="alert warning"  id="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span> 
            <strong> Something Went Wrong!!!. </strong> 
             </div>';
        }
            
        }
        


}                                            
   



                                           
   

?>

<!doctype html>
<html lang="en">
  
<head>
    <title>Sign Up - True Potential </title>
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
        
        
        
       <style>

       .alert {
           padding: 20px;
           background-color: #4CAF50;
           color: white;
           z-index: 999;
           position: fixed;
         top: 50%;
         left: 50%;
         margin-top: -50px;
         margin-left: -100px;

            animation: cssAnimation 0s ease-in 3s forwards;
       }
       .alert.success {background-color: #4CAF50;}
       .alert.info {background-color: #2196F3;}
       .alert.warning {background-color: #f44336;}

       @-webkit-keyframes cssAnimation {
           to {
               width:0;
               height:0;
               visibility:hidden;
           }
       }
       .redborder{
           border: 1px solid red;
         outline: none;
       }

      </style>
               
      
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideDown("slow");
    });
});
</script>
 
<style> 
#panel, #flip {
    padding: 5px;
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
}

#panel {
    padding: 50px;
    display: none;
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
                        <h3>Sign Up</h3>
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
					<div class="col-md-6">
						<div class="sign-in-form">
							<h3>Sign Up</h3>
                                                        <form method="POST" action="#">
								<div class="row">
                                                                    
                                                                    
                                                                    <?php
                                                                    
                                                                    if(isset($_GET['phone']))
                                                                        {
                                                                    ?>

									<div class="col-md-6">	
										<div class="">
											<label> Phone*</label>																  
											<div class="form-group">
                                                                                            <input type="text" class="form-control" value="<?php echo $_GET['phone'];?>" placeholder="Phone" aria-label="Name" name="phone" required="">				    										    						    
											</div>
										</div>
									</div>	
                                                                    
                                                                    
                                                                        <?php
                                                                        }
                                                                        else{
                                                                        ?>
                                                                    
                                                                    
                                                                        <div class="col-md-6">	
                                                                                    <div class="">
                                                                                            <label> Phone*</label>																  
                                                                                            <div class="form-group">
                                                                                                <input type="text" class="form-control" placeholder="Phone" aria-label="Name" name="phone" required="">				    										    						    
                                                                                            </div>
                                                                                    </div>
                                                                            </div>	
                                                                    
                                                                    
                                                                       <?php
                                                                        }
                                                                        ?>
                                                                    
                                                                    
									<div class="col-md-6">	
										<div class="">
                                                                                    <label> Email*</label>															  
											<div class="form-group">
                                                                                            <input type="email" class="form-control" placeholder="E-mail" aria-label="Name" name="email" required="">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="">
											<label> Full Name*</label>															  
											<div class="form-group">
                                                                                            <input type="text" class="form-control" placeholder="Full Name" aria-label="Name" name="fname" required="">				    										    						    
											</div>
										</div>
									</div>	
									<div class="col-md-6">	
										<div class="">
											<label> Gender</label>														  
											<div class="form-group">
                                                                                            <select class="form-control" name="gender">
                                                                                                <option><i class="fa fa-user"></i> Selct Gender*</option>
                                                                                                <option>Male</option>
                                                                                                <option>Female</option>
                                                                                            </select>				    										    						    
											</div>
										</div>
									</div>	
                                                                    
                                                                        <div class="col-md-6">	
										<div class="">
																								  
												<label> DOB*</label>														  
                                                                                                <div class="form-group">
                                                                                                    <input type="date" class="form-control" placeholder="DOB" aria-label="Name" name="dob" required="">				    										    						    
                                                                                                </div>
										      
										</div>
									</div>	
                                                                    
                                                                    <div class="col-md-6">	
										<div class="">
																								  
												<label>State*</label>														  
                                                                                                <div class="form-group">
                                                                                                    <input type="yext" class="form-control" placeholder="State" aria-label="Name" name="state" required="">				    										    						    
                                                                                                </div>
										      
										</div>
									</div>
                                                                    
                                                                    <div class="col-md-6">	
										<div class="">
																								  
												<label>City*</label>														  
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control" placeholder="City" aria-label="city" name="city7" required="">				    										    						    
                                                                                                </div>
										      
										</div>
									</div>
                                                                     <div class="col-md-6">	
										<div class="">
																								  
												<label>Address*</label>														  
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control" placeholder="Address" aria-label="Name" name="address" required="">				    										    						    
                                                                                                </div>
										      
										</div>
									</div>
                                                            
                                                                    
                                                                     <div class="col-md-6">	
										<div class="">
																								  
												<label>School/Institution </label>														  
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control" placeholder="School/Institution" aria-label="Name" name="school" >				    										    						    
                                                                                                </div>
										      
										</div>
									</div>
                                                                    
                                                                     <div class="col-md-6">	
										<div class="">
																								  
												<label>Class</label>														  
                                                                                                <div class="form-group">
                                                                                                    <input type="text" class="form-control" placeholder="Class" aria-label="Name" name="class" >				    										    						    
                                                                                                </div>
										      
										</div>
									</div>
                                                          
                                                                    
                                                                    
									<div class="col-md-6">
										<div class="">
											<label> <Password </label>															  
											<div class="form-group">							    
                                                    <label>Password* </label>                                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required="">							    
											</div>
									  	</div>
									</div> 
                                                                    
                                                                       <div class="col-md-6">
										<div class="">
											<label>Confirm Password* </label>																	  
											<div class="form-group">							    
                                                                                            <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" id="confirm_password" required="">							    
											</div>
									  	</div>
									</div> 
                                                             <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>       
                                                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>            
                                                                    
                                                                       <script>
 
                                                                            var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

                                                                              function validatePassword(){
                                                                                if(password.value != confirm_password.value) {
                                                                                  confirm_password.setCustomValidity("Passwords Don't Match");
                                                                                } else {
                                                                                  confirm_password.setCustomValidity('');
                                                                                }
                                                                              }

                                                                              password.onchange = validatePassword;
                                                                              confirm_password.onkeyup = validatePassword;

                                                                       </script>
	
									<div class="col-md-12">
																														
										
											<a class="" style="float:left;"> Choose Your Interest:  </a><br/><br/>
                                                                                        
                                                                                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#music">Academic</button>
                                                                                   
                                                                                        
                                                                                        
                                                                                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#sports">Sports</button>
                                                                                         <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#sports">Extra Curricular </button>
                                                                                        
                                                                                        <div id="music" class="collapse in">
                                                                                          Pop <input type="checkbox" name="interest[]" value="Pop">	
                                                                                        | Romantic <input type="checkbox" name="interest[]" value="Romantic ">	
                                                                                        | Hip-Hop <input type="checkbox" name="interest[]" value="Hip-Hop"> 
                                                                                        | God <input type="checkbox" name="interest[]" value="God">	 
                                                                                       
                                                                                        </div>
                                                                                        
                                                                                        <div id="sports" class="collapse in">
                                                                                          Cricket <input type="checkbox" name="interest[]" value="Cricket">	
                                                                                        | Golf <input type="checkbox" name="interest[]" value="Golf">	
                                                                                        | Horse Riding  <input type="checkbox" name="interest[]" value="Horse Riding"> 
                                                                                        Football  <input type="checkbox" name="interest[]" value="Football">
                                                                                         </div>
                                                                                        
                                                                                       
																		
									</div>
									
									
									<div class="col-md-12">
										<div class="sign-in-btn sign-up-btn">																						
										<br/>
                                                                                    <button type="submit" class="btn btn-primary btn-lg" name="submit" id="truesign"> Sign Up </button>
											<h4>Already have an account? <a href="sign-in.php"> Sign In here!</a></h4>	
										</div>								
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-6">
						<div class="sign-in-right sign-up-right">
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
	<!-- Color switcher js -->
	<!-- Custom script -->
    <script src="js/custom.js"></script>
	
  </body>

</html>       