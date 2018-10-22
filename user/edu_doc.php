<?php


include_once 'db/db.php';



if(isset($_POST['submit']))
{
         
         $date=date("l jS \of F Y ");   
         move_uploaded_file($_FILES["doc"]["tmp_name"], "edu_doc/". $_FILES["doc"]["name"]);
         $fullnameimg=$_FILES["doc"]["name"];
         $targetimg="edu_doc/";
         $fulltargetimg=$targetimg.$fullnameimg;          
         $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
         $result=mysqli_query($con,"insert into edu_doc(user_id,title,document,date) values('$_POST[uid]','$title','$fulltargetimg','$date')");
                         
         
          if($result==true)
            {

            echo "<script>alert('Done!')</script>";
            }
            else{
               echo "<script>alert('Not successfull!')</script>";
            }
}    


if(isset($_POST['delete']))
{

    $result= mysqli_query($con,"delete from edu_doc where sno='$_POST[id]'");

    
     if($result==true)
     {
     echo "<script>alert('Done')</script>";
     }
     else{
        echo "<script>alert('Not successfull')</script>";
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
                    <h2>Upload Documents</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active">Upload Documents</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row clearfix">
                
                
                
                
                
                <div class="col-md-6">
                    
                    <div class="card">
                        <div class="header">
                            <h2>Education Documents List</h2>
                      
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table m-b-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Document</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                         <?php
              
                                            $result=mysqli_query($con,"select * from edu_doc where user_id='$usid'");
                                              $i=1;
                                              while($row=mysqli_fetch_array($result))
                                              {
                                                  
                                             ?>
                                    <form method="POST" action="#">
                                        <tr>
                                            <td><?php echo $i;?> <input type="hidden" name="id" value="<?php echo htmlspecialchars_decode($row['sno']); ?>"> </td>
                                            <td><span><?php echo htmlspecialchars_decode($row['title']); ?> </span></td>
                                            <td><span class="text-info"><a href=" <?php echo htmlspecialchars_decode($row['document']); ?>"> <img src="assets/pdf.png" style="width: 50px;"> </a> </span></td>
                                            <td><span class="badge badge-danger"><button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash"></i> </button></span></td>
                                        </tr>
                                    </form>     
                                        <?php
                                        
                                              }
                                              ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                
                 <div class="col-md-6">
                    <div class="card">
                           <div class="header">
                            <h2>Add Education Document</h2>
                      
                        </div>
                        <div class="body">
                            <form id="basic-form" method="POST" enctype="multipart/form-data">
                                
                                <div class="form-group">
                                    <input type="hidden" name="uid" class="form-control" required="" value="<?php echo $usid;?>" readonly="">
                                    <label>Document Title</label>
                                     <input type="text" class="form-control" name="title" required="">
                                </div>
                                <div class="form-group">
                                    <label>Document </label>
                                     <input type="file" name="doc" class="form-control" required="">
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
