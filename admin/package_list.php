<?php

include_once 'db/db.php';
 if(isset($_POST['alldelete']))
{
 $cnt=array();
 $cnt=count($_POST['del']);
 for($i=0;$i<$cnt;$i++)
  {
     $del_id=$_POST['del'][$i];
    $result= mysqli_query($con,"delete from packages where sno=".$del_id);
  }
    
     if($result==true)
     {
     echo "<script>alert('Done')</script>";
     }
     else{
        echo "<script>alert('Not successfull')</script>";
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
       <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
      
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
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Contact From Website</h3>
                    </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Contact From Website</h4>
                                </div>
                                
                                <form  method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
                           
                               
                               
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table table-data-width">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Package Type</th>
                                                <th>Package Title</th>
                                                <th>Days</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th>#</th>
                                                <th>Package Type</th>
                                                <th>Package Title</th>
                                                <th>Days</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                            <?php
                                            
                                            
                                            $result=mysqli_query($con,"select * from packages order by sno desc");
                                            $i=1;
                                                while($row=mysqli_fetch_array($result))
                                                {

                                                    $ptitle= htmlspecialchars_decode($row['package_title']);
                                                    $ptype= htmlspecialchars_decode($row['package_type']);
                                                    $days= htmlspecialchars_decode($row['days']);
                                                    $date=$row['date'];
                                                    $price=$row['price'];
                                                    $sno=$row['sno'];

                                              ?>
                                            
                                            <tr>
                                                <td><input type='checkbox' class="checkbox" name='del[]'  value='<?php echo $sno;?>'> </td>
                                                <td> <?php echo $i;?></td>
                                                <td ><span class="btn btn-success"> <?php echo $ptype; ?> </span></td>
                                                <td><?php echo $ptitle;?></td>
                                                <td><?php echo $days;?></td>
                                                <td><?php echo $price;?></td>
                                                <td><a href='edit_package.php?pno=<?php echo $sno;?>' class='btn btn-info'>  <i class="fa fa-edit"></i> </a></td>
                                            </tr>
                                                    
                                                    
                                                    <?php
                                                    $i++;
                                                    
                                                       }
                                            
                                            ?>
                                          
                                     
                                        </tbody>
                                       </table>  
                                       
                                         <button class="btn btn-danger pull-left" name="alldelete" id="submit" style='float:left;' onclick="return confirm('Are you sure you want to delete this item?');" >Delete</button>

                                    </div>
                                </div>


                                 
                                 
                                </form>
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
        <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/js/metrotheme.min.js"></script>
        <script src="assets/js/pages/table-data.js"></script>
    </body>

</html>