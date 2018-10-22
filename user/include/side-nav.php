<?php

if(isset($_POST['logout']))
{
    
    session_destroy();
    header("location:http://localhost/task_manager/index.php");
}

?>

<div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.html"><span>True Potential</span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm btn-default float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="<?php echo $pimage;?>" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $name;?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="profile.php"><i class="icon-user"></i>My Profile</a></li>
                        <li class="divider"></li>
                        <li><form method="POST" action="#"> <button type="submit" name="logout" style="background: none;border: none;color:white;text-align: center;"><i class="icon-power"></i>Logout</button> </form></li>
                    </ul>
                </div>
            </div>  
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <li><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                    <li><a href="#" class="has-arrow"><i class="fa fa-file"></i><span>Upload Documents </span></a>
                        <ul>
                        <li><a href="edu_doc.php">Education Documents</a></li>
                        <li><a href="prof_doc.php">Professional Documents</a></li>
                        <li><a href="extra_doc.html">Extra Activity Documents</a></li>
                    
                        </ul>
                    </li>
                    <li><a href="testimonials.php"><i class="fa fa-edit"></i><span>Testimonials </span></a></li>
                    <!--
                    <li>
                        <a href="#Tables" class="has-arrow"><i class="icon-tag"></i><span>Tables</span></a>
                        <ul>
                            <li><a href="table-basic.html">Tables Example</a></li>
                            <li><a href="table-normal.html">Normal Tables</a></li>
                            <li><a href="table-jquery-datatable.html">Jquery Datatables</a></li>
                            <li><a href="table-editable.html">Editable Tables</a></li>
                            <li><a href="table-color.html">Tables Color</a></li>
                            <li><a href="table-filter.html">Table Filter</a></li>
                            <li><a href="table-dragger.html">Table dragger</a></li>
                        </ul>
                    </li>
                    -->
            
                </ul>
            </nav>     
        </div>
    </div>