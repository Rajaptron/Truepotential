<?php


include_once 'db/db.php';



if(isset($_POST['submit']))
{
    
    $date=date("l jS \of F Y ");    
    $des = htmlspecialchars($_POST['des'], ENT_QUOTES);
    $result=mysqli_query($con,"insert into reviews(user_id,name,email,description,status,date) values('$_POST[uid]','$_POST[name]','$_POST[email]','$des','no','$date')");
                         
            
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
<title>Submit Testimonials  - True Potential</title>
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
                    <h2>Your Reviews/ Testimonials </h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Testimonials </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                
                
                
                 <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                        </div>
                        <div class="body">
                            <form id="basic-form" method="POST" action="#">
                                <div class="form-group">
                                    <label>Name</label>
                                     <input type="hidden" name="uid" class="form-control" required="" value="<?php echo $usid;?>" readonly="">
                                    <input type="text" name="name" class="form-control" required="" value="<?php echo $name;?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required="" value="<?php echo $email;?>" readonly="">
                                </div>
                                <div class="form-group">
                                    <label>Description </label>
                                    <textarea name="des" class="form-control" required> </textarea>
                                </div>
                             
                                <br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
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
