<?php
include_once 'db/db.php';



    $result=mysqli_query($con,"select * from banner where sno=1");
    while($row=mysqli_fetch_array($result))
    {
     
     $image=$row['image'];
     $title= htmlspecialchars_decode($row['title']);

     }
                
                
 if(isset($_POST['submit']))
{
    
     
      if (empty($_FILES["image"]["name"] ) ) 
     { 
         $title=htmlspecialchars($_POST['title'], ENT_QUOTES);
         $result=mysqli_query($con,"UPDATE banner SET title='$title' where sno=1");
         
          if($result==true)
            {

            echo "<script>alert('Done!')</script>";
            }
            else{
               echo "<script>alert('Not successfull!')</script>";
            }
     }
     else{
         
         move_uploaded_file($_FILES["image"]["tmp_name"], "banner/". $_FILES["image"]["name"]);
         $fullnameimg=$_FILES["image"]["name"];
         $targetimg="banner/";
         $fulltargetimg=$targetimg.$fullnameimg;
         $title=htmlspecialchars($_POST['title'], ENT_QUOTES);       
         $result=mysqli_query($con,"UPDATE banner SET image='$fulltargetimg',title='$title' where sno=1");
         
         
          if($result==true)
            {

            echo "<script>alert('Done!')</script>";
            }
            else{
               echo "<script>alert('Not successfull!')</script>";
            }
     
     
     }
     
     
     
                  
            
    

}





?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Admin- True Potential</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet">
      
        <!-- Theme Styles -->
        <link href="assets/css/metrotheme.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
           
            <?php
            
            include 'include/side-nav.php';
            ?>
            
            <!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
            
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="dashboard.php"><span>True Potential</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="collapsed-sidebar-toggle-inv"><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                   
                                  
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatars/avatar1.png" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Profile</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Account Settings</a></li>
                                            <li><a href="#">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
                <!-- Page Inner -->
                <div class="page-inner no-page-title">
                    
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="col-md-6">
                                 <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Front Banner </h4>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    
                                    <form method="POST" action="#" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" value="<?php echo $title;?>" placeholder="Title" name="title">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Featured Image</label>
                                    <input type="file" class="form-control"  placeholder="file" name="image">
                                    <br/>
                                    <span class="btn-danger" >Banner Size: 1920 x 580 </span>
                                  </div>
                                  
                                  <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                </form>
                                    
                                    
                                </div>
                              </div>
                           </div>
                                
                                
                                
                        <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title"> </h4>
                                </div>
                                <div class="panel-body basic-form-panel">
                                    
                                    <img src="<?php echo $image;?>" class="img-thumbnail">
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                            </div>
                          
                        </div><!-- Row -->
                
                    </div><!-- Main Wrapper -->

                    
                </div><!-- /Page Inner -->
     
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/d3/d3.min.js"></script>
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/plugins/chartjs/chart.min.js"></script>
        <script src="assets/js/metrotheme.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
    </body>

<!-- Mirrored from stacksthemes.com/metro/theme/templates/admin1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Oct 2018 06:38:56 GMT -->
</html>