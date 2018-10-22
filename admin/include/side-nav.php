<?php

session_start();
include_once 'db/db.php';

            if(isset($_SESSION['adminemail']))
            {
                $result=mysqli_query($con,"select * from admin where email='$_SESSION[adminemail]'");
                while($row=mysqli_fetch_array($result))
                 {
                $name=$row['name'];



                }
            }
            else{
                  header("location:login.php");
            }


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="page-sidebar">
                <a class="logo-box" href="index-2.html"><span>True Potential</span>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i></a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            <li class="active-page">
                                <a href="dashboard.php">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>
                            </li>
                         
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-flash_on"></i><span>Web Pages</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="banner.php">Banner</a></li>
                                    <li><a href="whatwedo.php">What We Do?</a></li>
                                    <li><a href="our-featured.php">Our Featured</a></li>
                                    <li><a href="our-organisation.php">Our Organisation</a></li>
                                    
                                    <li><a href="contact.php">Contact Details</a></li>
                                </ul>
                            </li>
                            
                            
                            
                            
                             <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon icon-flash_on"></i><span>Packages</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="add_package.php">Add Package</a></li>
                                    <li><a href="package_list.php">Packages</a></li>
                                </ul>
                            </li>
                            
                            
                            <li class="active-page">
                                <a href="contact-us.php">
                                    <i class="menu-icon icon-phone"></i><span>Contact Us</span>
                                </a>
                            </li>
                         
                  
                        </ul>
                    </div>
                </div>
            </div>
            
            