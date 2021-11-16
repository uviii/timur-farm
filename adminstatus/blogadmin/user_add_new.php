<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>

<?php



error_reporting(0);
if(isset($_POST['submit'])){

 $username=  mysqli_real_escape_string($conn,   $_POST['username']);
  $email=  mysqli_real_escape_string($conn,   $_POST['email']);
   $password=  mysqli_real_escape_string($conn,   $_POST['password']);

// $email = $_POST['email'];
// $password = $_POST['password'];

   $pass= password_hash($password, PASSWORD_BCRYPT);
    $token=bin2hex(random_bytes(15));

$sql=mysqli_query($conn,"SELECT id FROM admin where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";

  // INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])
}else{
$sql="INSERT INTO `admin`( `username`, `password`, `email`, `token`, `status`) VALUES ('$username','$pass','$email','$token','inactive')";



// echo "$sql";
$data = mysqli_query($conn ,$sql);


}




if($data)
 {
  

   $username=  mysqli_real_escape_string($conn,   $_POST['username']);
  $email=  mysqli_real_escape_string($conn,   $_POST['email']);
$subject = "request for admin ";

$message = "  Hi 
dear  .$username.
you are requested from kupindetimur.com account team,
to take responsibiliy of admin of some part of this system.
 Please! contact to admin to get your account detail and visit the link below and sign into your account 

 link
http://localhost/timur%20farm/adminstatus/blogadmin/login.php


any enquery please visit us,
......
(kupindedaha timur krishi farm pvt.ltd)
https://kupindetimur.com





                  visit our website
                  loginto your account
                  get support


        coppy right kupindedaha timur krishi farm pvt.ltd. All rights reserved
 ";
mail($email, $subject, $message, "From: yubrajbudhathoki01@gmail.com");
echo  "<script>alert('Your new warriar added Successfully');</script>";

}

else{echo "<script>alert('something gone worng plaease try again');</script>";}



}



 

?> 



<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php include("link.php");?>
</head>
<body>
<br>
<hr>

<body>
  <style > body{background-image:url(./uploade/flower.jpg);
 background-size:cover;
 background-position:center;
 box-sizing:border-box;
 } </style>
  <br><br><br><br><br><br><br>

  <div class="row"> 
    <div class="col-sm-4 bg-dange container"></div>
     <div class="col-sm-4 bg-succes w3-container">
      <div id="login-page w3-container " class="">
      <div class="container w3-border w3-round-xlarge w3-container w3-blue ">
       <div class="bg-primary container w3-round-large w3-panel p-2 mt-0 mr-0 ml-0"> 
        <h2 class="form-login-heading  w3-center ">Add New registration</h2></div>
      
         <form class="form-login w3-container  w3-round-large" action="" method="post">
          
            <div class="login-wrap">

              <input type="text" name="username" class="form-control" placeholder="User ID" autofocus> <br>

                 <input type="email" name="email" class="form-control" placeholder="email"><br >
                <input type="password" name="password" class="form-control" placeholder="Password"><br >
                <input  name="submit" class="btn btn-theme btn-block bg-primary" type="submit" value="register">
                <br>
              
             
            </div>
          </form> <br>

       
             <br>    
      
      </div>
    </div>

    <br><br><hr>

   




    </div>

    <div class="col-sm-4">d</div>
  </div>

   




<script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>












</body>
</html><?php } ?>








