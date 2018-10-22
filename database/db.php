<?php
$con = mysqli_connect("localhost","microxnm_demo","admin@546","microxnm_demo");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>