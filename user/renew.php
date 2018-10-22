<?php

session_start();
include_once 'db/db.php';

$time = date_default_timezone_set('Asia/Kolkata');  
$datecurrent=date("Y-m-d");

            if(isset($_SESSION['userphone']))
            {
                $result=mysqli_query($con,"select * from user where phone='$_SESSION[userphone]'");
                while($row=mysqli_fetch_array($result))
                 {
                $usid=$row['sno'];
                $name=$row['fname'];
                $pimage=$row['pimage'];
                $name= htmlspecialchars_decode($row['fname']);
                $email= htmlspecialchars_decode($row['email']);
                $phone= htmlspecialchars_decode($row['phone']);
                $school= htmlspecialchars_decode($row['school']);
                $class= htmlspecialchars_decode($row['class']);
                $status=$row['status'];
                $state= htmlspecialchars_decode($row['state']);
                $city= htmlspecialchars_decode($row['city']);
                $address= htmlspecialchars_decode($row['address']);
                $address= htmlspecialchars_decode($row['address']);
                $invoice=$row['invoice'];
                
                        


                }
            }
            else{
                  header("location:http://localhost/task_manager/index.php");
            }

            
        
            

?>


<!doctype html>
<html lang="en">


<head>
<title>Pricing - True Potential</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-orange">

    <!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="https://thememakker.com/templates/hexabit/html/assets/images/icon-light.svg" width="48" height="48" alt="HexaBit"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

   <nav class="navbar navbar-fixed-top">
       <div class="container-fluid">
           <h2 style="color:red;"> Please Renew Your Membership </h2>
           
       </div>
       
   </nav>
    

    <?php
    
    
    include 'include/side-nav.php';
    
    ?>

    <div id="main-content">
   
        <div class="container-fluid">           

            
            <div class="row clearfix">
                <div class="col-12">
                    <hr>
                </div>
                
                    
               
              <?php
              
              $result=mysqli_query($con,"select * from packages where package_type='Paid'");
                $i=1;
                while($row=mysqli_fetch_array($result))
                {

                $ptitle= htmlspecialchars_decode($row['package_title']);
                $ptype= htmlspecialchars_decode($row['package_type']);
                $days= htmlspecialchars_decode($row['days']);
                $features= htmlspecialchars_decode($row['features']);
                $date=$row['date'];
                $price=$row['price'];
                $sno=$row['sno'];
              
              
              
              ?>
                
              <div class="col-lg-3 col-md-12">
                    <div class="card pricing2">
                        <div class="body">
                            <div class="pricing-plan">
                                <img src="assets/images/membership.png" alt="" class="pricing-img">
                                <h2 class="pricing-header"><?php echo $ptitle;?></h2>
                                <ul class="pricing-features">
                                  <?php
                                                                            
                                            $output =str_replace(',', '<li>', $features );
                                                                                
                                            echo '<li>'. $output.'</li>';
                                                                            
				?>
                                </ul>
                                <span class="pricing-price"><i class="fa fa-rupee"></i><?php echo $price;?>/-</span>
                                <a href="know_package.php?pno=<?php echo $sno;?>">Know More </a><br/><br/><br/>
                                <form method="POST" action="checkout.php?pno=<?php echo $sno;?>">
                                <button type="submit" name="membership" value="Free" class="btn btn-outline-primary btn-lg">Get It</button>
                                
                              
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
                
                <?php
                
                }
                ?>
                
               
                
                  <?php
              
              $result=mysqli_query($con,"select * from packages where package_type='Free'");
                $i=1;
                while($row=mysqli_fetch_array($result))
                {

                $ptitle= htmlspecialchars_decode($row['package_title']);
                $ptype= htmlspecialchars_decode($row['package_type']);
                $days= htmlspecialchars_decode($row['days']);
                $features= htmlspecialchars_decode($row['features']);
                $date=$row['date'];
                $price=$row['price'];
                $sno=$row['sno'];
              
              
              
              ?>
                
              <div class="col-lg-3 col-md-12">
                    <div class="card pricing2">
                        <div class="body">
                            <div class="pricing-plan">
                                <img src="assets/images/membership.png" alt="" class="pricing-img">
                                <h2 class="pricing-header"><?php echo $ptitle;?></h2>
                                <ul class="pricing-features">
                                  <?php
                                                                            
                                            $output =str_replace(',', '<li>', $features );
                                                                                
                                            echo '<li>'. $output.'</li>';
                                                                            
				?>
                                </ul>
                                <span class="pricing-price">Free</span>
                                <a href="know_package.php?pno=<?php echo $sno;?>">Know More </a><br/><br/><br/>
                                <form method="POST" action="checkout.php?pno=<?php echo $sno;?>">
                                <button type="submit" name="membership" value="Free" class="btn btn-outline-primary btn-lg">Get It</button>
                                
                              
                                </form>
                              </div>
                        </div>
                    </div>
                </div>
                
                <?php
                
                }
                ?>
                
               
                
            </div>

            

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

</html>
