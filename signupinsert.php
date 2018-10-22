<?php

include_once 'database/db.php';


if(isset($_POST['submit']))
{
     
      $date=date("l jS \of F Y ");    
      $fname = htmlspecialchars($_POST['fname'], ENT_QUOTES);
      $lname = htmlspecialchars($_POST['lname'], ENT_QUOTES);
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
      $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
      $pass = htmlspecialchars($_POST['password'], ENT_QUOTES);
      $interest = implode(',', $_POST['interest']);
      $result=mysqli_query($con,"insert into user(fname,lname,email,phone,password,registration_date,interest) values('$fname','$lname','$email','$phone','$pass','$date','$interest')");
                         
            
        if($result==true)
        {
          echo '<div class="alert success"  id="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span> 
            <strong> Blog Successfully Submit. </strong> 
             </div>';
        }
        else{
             echo '<div class="alert warning"  id="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='."'none';".'">&times;</span> 
            <strong> Something Went Wrong!!!. </strong> 
             </div>';
        }
        


}                                            
   

?>

