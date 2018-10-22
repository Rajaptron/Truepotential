
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                
                $resultcheckout=mysqli_query($con,"select * from checkout where invoice='$invoice'");
                while($rowcheck=mysqli_fetch_array($resultcheckout))
                 {
                $package_id=$rowcheck['package_id'];
                $date=$rowcheck['date'];
                
                 }
                
                $resultpackage=mysqli_query($con,"select * from packages where sno='$package_id'");
                while($rowpackage=mysqli_fetch_array($resultpackage))
                 {
                $days=$rowpackage['days'];
                 }
                
                 
         
                 $membershipdate= date('Y-m-d', strtotime($date. ' + '.$days.' days'));
                 
                 
              if($datecurrent>=$membershipdate)   
              {
                 header("location:http://truepotential.in/user/renew.php"); 
              }
              else{
                  
              }
           


                }
            }
            else{
                  header("location:http://truepotential.in/");
            }

            
        
            

?>

<nav class="navbar navbar-fixed-top">
        <div class="container-fluid">

            
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="fa fa-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu feeds_widget">
                                <li class="header">You have 5 new Notifications</li>
                                
                                
                                <li>
                                    <a href="javascript:void(0);">
                                      
                                        <div class="feeds-body">
                                            <h4 class="title text-success">7 New Feedback <small class="float-right text-muted">Today</small></h4>
                                            <small>It will give a smart finishing to your site</small>
                                        </div>
                                    </a>
                                </li>
                                
                            
                            </ul>
                        </li>
                        
                        <?php
                        
                        
                         if($status=='no'){
                
                                echo '<style> .opacity{ opacity:0.1; pointer-events: none;}  </style>';
                                ?>

                                <script> $("#opacity").attr('disabled','disabled'); </script>
                                
                                 <li class="btn btn-primary btn-sm" style="float: right;margin-right: 10px;">
                                    <a href="pricing.php" class="dropdown-toggle icon-menu" >
                                        <i class="fa fa-life-saver"></i> Select your Membership

                                    </a>

                                </li>   

                                <?php

                            }
                            else{
                                 echo '<style> .opacity{ opacity:1; }  </style>';
                                 
                                 
                                 
                                ?>
                                
                                  <li class="btn btn-info btn-sm" style="float: right;margin-right: 10px;">
                                        <a href="pricing.php" class="dropdown-toggle icon-menu" >
                                            <i class="fa fa-life-saver"></i> Update your Membership

                                        </a>

                                    </li>   
                                <?php
                            }

                        
                        ?>
                       
                       
                    </ul>
                </div>
            </div>
        </div>
    </nav>