<?php


include_once 'db/db.php';



if(isset($_POST['update']))
{
      $fname = htmlspecialchars($_POST['name'], ENT_QUOTES);
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
      $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
      $city = htmlspecialchars($_POST['city'], ENT_QUOTES);
      $state = htmlspecialchars($_POST['state'], ENT_QUOTES);
      $address = htmlspecialchars($_POST['address'], ENT_QUOTES);
      $school = htmlspecialchars($_POST['school'], ENT_QUOTES);
      $class = htmlspecialchars($_POST['class'], ENT_QUOTES);
      $date=date("l jS \of F Y ");    
      $result=mysqli_query($con,"UPDATE user SET fname='$fname',email='$email',phone='$phone',city='$city',state='$state',address='$address',school='$school',class='$class' where sno='$_POST[uid]'");
         
          if($result==true)
            {

            echo "<script>alert('Done!')</script>";
            }
            else{
               echo "<script>alert('Not successfull!')</script>";
            }
            
        }
        
        
        
                       
 if(isset($_POST['profile']))
{
    
     
   
   
         
         move_uploaded_file($_FILES["image"]["tmp_name"], "upload/". $_FILES["image"]["name"]);
         $fullnameimg=$_FILES["image"]["name"];
         $targetimg="upload/";
         $fulltargetimg=$targetimg.$fullnameimg;     
         $result=mysqli_query($con,"UPDATE user SET pimage='$fulltargetimg' where sno='$_POST[uid]'");
         
         
          if($result==true)
            {

            echo "<script>alert('Done!')</script>";
            }
            else{
               echo "<script>alert('Not successfull!')</script>";
            }
     
     
     }
     
     
     
                  
            
    


?>
<!doctype html>
<html lang="en">

<head>
<title>Upload Documents  - True Potential</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">


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

    
    <div class="opacity" id="opacity">
    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>My Profile</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ul>
                </div>
            </div>
        </div>

        
        <div class="container-fluid">           

            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">
                    <div class="card profile-header">
                        <div class="body text-center">
                            <div class="profile-image mb-3"><img src="<?php echo $pimage;?>" class="rounded-circle" alt="" width="100px"></div>
                            <div>
                                <h4 class="mb-0"><strong> <?php echo $name; ?></strong> </h4>
                                
                                <form method="POST" action="#" enctype="multipart/form-data">
                                    <br><br>
                                    <label> Profile Image </label>
                                    
                                     <input type="hidden" name="uid" class="form-control" required="" value="<?php echo $usid;?>" readonly="">
                                    <input type="file" name="image" >
                                    
                                    
                                <br>
                                <button type="submit" name="profile" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                                                      
                        </div>
                    </div>

                    
                    
                </div>

                <div class="col-lg-8 col-md-12">
                   
                    
                    
                    
                       <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <form method="POST" action="#">
                                 <input type="hidden" name="uid" class="form-control" required="" value="<?php echo $usid;?>" readonly="">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control" value="<?php echo $name;?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php echo $email;?>" required="">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                     <input type="text" name="phone" class="form-control" value="<?php echo $phone;?>" required="">
                                </div>
                                
                                 <div class="form-group">
                                    <label>School/Institution</label>
                                     <input type="text" name="school" class="form-control" value="<?php echo $school;?>" required="">
                                </div>
                                
                                 <div class="form-group">
                                    <label>Class</label>
                                     <input type="text" name="class" class="form-control" value="<?php echo $class;?>" required="" >
                                </div>
                                
                                <div class="form-group">
                                    <label>City</label>
                                     <input type="text" name="city" class="form-control" value="<?php echo $city;?>" required="">
                                </div>
                                
                                <div class="form-group">
                                    <label>State</label>
                                     <input type="text" name="state" class="form-control" value="<?php echo $state;?>" required="">
                                </div>
                                
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address" class="form-control"  required=""> <?php echo $address;?></textarea>
                                </div>
                             
                                <br>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
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

<script src="assets/bundles/c3.bundle.js"></script>
<script src="assets/bundles/chartist.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>
</body>

</html>
