<?php

include_once 'db/db.php';
if(isset($_POST['checkout']))
{
         $date2 = time();
         $time = date_default_timezone_set('Asia/Kolkata');  
         $date=date("Y-m-d");
         
          $result=mysqli_query($con,"insert into checkout(invoice,user_id,package_id,status,date) values('$date2','$_POST[uid]','$_POST[pid]','Success','$date')");
          
           $result=mysqli_query($con,"UPDATE user SET status='$_POST[ptype]',invoice='$date2' where sno='$_POST[uid]'");
           
          if($result==true)
            {

              header("location:invoice.php?invoice=$date2");
            }
            else{
               echo "<script>alert('Not successfull!')</script>";
            }
    
     
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

  <?php
  
  include 'include/top-nav.php';
  ?>

    

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
              
              $result=mysqli_query($con,"select * from packages where sno='$_GET[pno]'");
                $i=1;
                while($row=mysqli_fetch_array($result))
                {

                $ptitle= htmlspecialchars_decode($row['package_title']);
                $ptype= htmlspecialchars_decode($row['package_type']);
                $days= htmlspecialchars_decode($row['days']);
                $features= htmlspecialchars_decode($row['features']);
                $note= htmlspecialchars_decode($row['note']);
                $date=$row['date'];
                $price=$row['price'];
                $sno=$row['sno'];
                }
              
             
              
              ?>
        <div class="col-md-12">
          <div class="card">
                        
            <div class="body">
                            <form method="POST" action="#">
                                
                                
                                 <input type="hidden" name="uid" class="form-control" required="" value="<?php echo $usid;?>" readonly="">
                                 <input type="hidden" name="pid" class="form-control" required="" value="<?php echo $sno;?>" readonly="">
                                
                                  <div class="form-group">
                                    <label>Package Type</label>
                                    <input type="text" name="ptype" class="form-control" value="<?php echo $ptype;?>" required="" readonly="">
                                </div>
                                
                                 <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="price" class="form-control" value="<?php echo $price;?>" required="" readonly="">
                                </div>
                                
                                
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name;?>" required="" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required="" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>" required="" readonly="">
                                </div>
                                
                               
                             
                                <br>
                                <button type="submit" name="checkout" class="btn btn-primary">Checkout <i class="fa fa-arrow-circle-o-right"> </i></button>
                            </form>
                        </div>
                
                
                
             
                
               
           
               
                
            </div>
          </div>
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
