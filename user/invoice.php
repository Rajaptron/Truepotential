<?php


include_once 'db/db.php';




     
     
                  
            
    


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
                    <h2>Invoices</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Invoices</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
                
                
                <?php
                
                
                $result=mysqli_query($con,"select * from checkout where invoice='$_GET[invoice]'");
                $i=1;
                while($row=mysqli_fetch_array($result))
                {
            
                $cdate=$row['date'];
                $status=$row['status'];
                $uid=$row['user_id'];
                $pid=$row['package_id'];
                $csno=$row['sno'];
                $invoice=$row['invoice'];
                }
              
              $result2=mysqli_query($con,"select * from packages where sno='$pid'");
                $i=1;
                while($row=mysqli_fetch_array($result2))
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
                
        <div class="container-fluid">            

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                     
                        <div class="body">
                            <h3>Invoice Details : <strong class="text-primary"># <?php echo $invoice;?> </strong></h3>
                          
                            <div class="tab-content mt-3" >
                                <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                                    <div class="row clearfix">
                                        
                                          <div class="col-md-6 col-sm-6">
                                        
                                        </div>
                                   
                                        <div class="col-md-6 col-sm-6 text-right" style="float: right;">
                                            <p class="m-b-0"><strong>Order Date: </strong> <?php echo $cdate;?> </p>
                                            <p class="m-b-0"><strong>Order Status: </strong><span class="badge badge-success m-b-0"> <?php echo $status;?> </span></p>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>#</th>                                                        
                                                            <th>Package </th>
                                                            <th class="hidden-sm-down">End Membership</th>
                                                            <th>Total Days</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td> <?php echo $ptitle;?> </td>
                                                            <td class="hidden-sm-down"> <?php echo $date;?>  </td>
                                                            <td> <?php echo $days;?> </td>
                                                        </tr>
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row clearfix">
                                        <div class="col-md-6">
                                            <h5>Note</h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p class="m-b-0"><b>Sub-total:</b> <i class="fa fa-rupee"></i> <?php echo $price;?> </p>                                       
                                            <h3 class="m-b-0 m-t-10"><i class="fa fa-rupee"></i> <?php echo $price;?> </h3>
                                        </div>                                    
                                        <div class="hidden-print col-md-12 text-right">
                                           
                                        </div>
                                    </div>                                    
                                </div>                   
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
