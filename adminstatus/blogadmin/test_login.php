<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>

<?php

if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=($_POST['password']);
$ret=mysqli_query($conn,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="main.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="login.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>








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
echo '$token';
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
   echo "<script>alert('Register successfully');</script>";
  
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
        <h2 class="form-login-heading  w3-center ">sign in now</h2></div>
      
          <form class="form-login w3-container  w3-round-large" action="" method="post">
          
                  <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
            <div class="login-wrap">
                <input type="text" name="username" class="form-control" placeholder="User ID" autofocus>
                <br>
                <input type="password" name="password" class="form-control" placeholder="Password"><br >
                <input  name="login" class="btn btn-theme btn-block bg-primary" type="submit">
             
            </div>
          </form>     
      
      </div>
    </div>

    <br><br><hr>

    <div class="row">
     <div class="col-sm-12 bg-succes w3-container">
      <div id="login-page w3-container " class="">
      <div class="container w3-border w3-round-xlarge w3-container w3-blue ">
       <div class="bg-primary container w3-round-large w3-panel p-2 mt-0 mr-0 ml-0"> 
        <h2 class="form-login-heading  w3-center ">sign in now</h2></div>
      
          <form class="form-login w3-container  w3-round-large" action="" method="post">
          
            <div class="login-wrap">

              <input type="text" name="username" class="form-control" placeholder="User ID" autofocus> <br>

                 <input type="email" name="email" class="form-control" placeholder="email"><br >
                <input type="password" name="password" class="form-control" placeholder="Password"><br >
                <input  name="submit" class="btn btn-theme btn-block bg-primary" type="submit">
                <br>
              
             
            </div>
          </form>     
      
      </div>
    </div>
    </div>


  </div>




    </div>

    <div class="col-sm-4">d</div>
  </div>

   

  



<script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>

</body>
</html>










<!-- 




<?php session_start();
error_reporting(0);
include("./adminstatus/blogadmin/dbc.php");


// INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])

//Code for Registration 
if(isset($_POST['signup']))
{
  $fname=  mysqli_real_escape_string($conn,   $_POST['fname']);
  $lname=  mysqli_real_escape_string($conn,   $_POST['lname']);
  $email=  mysqli_real_escape_string($conn,   $_POST['email']);
  $contactno=  mysqli_real_escape_string($conn,   $_POST['contactno']);
  $country=  mysqli_real_escape_string($conn,   $_POST['country']);
  $state=  mysqli_real_escape_string($conn,   $_POST['state']);
  $district=  mysqli_real_escape_string($conn,   $_POST['district']);
  $city=  mysqli_real_escape_string($conn,   $_POST['city']);
  $local_ad=  mysqli_real_escape_string($conn,   $_POST['local_ad']);
  $cpassword=  mysqli_real_escape_string($conn,   $_POST['cpassword']);
  
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  
$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass=password_hash($cpassword, PASSWORD_BCRYPT);

  // $enc_password=$password;
$sql=mysqli_query($conn,"SELECT id FROM user where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";

  // INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12])
}

if ($password===$cpassword) {

 
$msg=mysqli_query($conn,"INSERT INTO `user`(`fname`, `lname`, `email`, `contactno`, `country`, `state`, `district` , `city`, `localaddress`, `password`, `cpassword`) VALUES ('$fname','$lname','$email','$contactno','$country','$state','$district','$city','$local_ad','$pass','$cpass')");

  # code...
 }else{echo "<script>alert('password not matching');</script>";} 

if($msg)
{
  echo "<script>alert('Register successfully');</script>";
}









}


// INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `city`, `localaddress`, `password`, `cpassword`, `tokan`, `status`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15])

//Database Configuration File
// include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password

    $password=$_POST['password'];
$useremail=$_POST['uemail'];

    //  $uname=$_POST['username'];
    // $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($conn,"SELECT * FROM user WHERE (email='$useremail' || fname='$useremail')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['password']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {


$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
    echo "<script type='text/javascript'> document.location = 'index2.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}





// // Code for login 
// if(isset($_POST['login']))
// {
//  include("./adminstatus/blogadmin/dbc.php");
// $password=$_POST['password'];
// $useremail=$_POST['uemail'];
// $pass= password_hash($password, PASSWORD_BCRYPT);
// $pass_check=password_verify($password, $pass)

// // $dec_password=$password;




// if($result>0)
// {
// $extra="index2.php";
// $_SESSION['login']=$_POST['email'];
// $_SESSION['id']=$num['id'];
// $_SESSION['name']=$num['fname'];
// $host=$_SERVER['HTTP_HOST'];
// $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
// header("location:http://$host$uri/$extra");
// exit();
// }
// else
// {
// echo "<script>alert('Invalid username or password');</script>";
// $extra="index.php";
// $host  = $_SERVER['HTTP_HOST'];
// $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
// //header("location:http://$host$uri/$extra");
// exit();
// }
// }

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($conn,"SELECT email,password FROM user WHERE email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>"; 
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Login System</title>
<?PHP include("link.php"); ?>
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
              type: 'default',       
              width: 'auto', 
              fit: true 
            });
          });
           </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100' rel='stylesheet' type='text/css'>
</head>
<body > <style > body{background-image:url(./images/flower.jpg);
 background-size:cover;
 background-position:center;
 box-sizing:border-box;
 } 
</style>
<br><br><br><br>
<div class="w3-container sticky-top"><button><a href="index.php"> <i class="fa fa-home"></i> <<<< return home</a></button></P></div>
<div class="main">
    <h1 class=""><span class="w3-text-orange"> Welcome In Registration and Login System</span></h1>
   <div class="sap_tabs w3-card w3-pink"> 
      <div id="horizontalTab" class="w3-pink" style="display: block; width: 100%; margin: 0px;">
        <ul class="resp-tabs-list">
            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><div class="top-img"><img src="images/top-note.png" alt=""/></div><span>Register</span>
              
        </li>
          <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><div class="top-img"><img src="images/top-lock.png" alt=""/></div><span>Login</span></li>
          <li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab"><div class="top-img"><img src="images/top-key.png" alt=""/></div><span>Forgot Password</span></li>
          <div class="clear"></div>
        </ul>   
           
      <div class="resp-tabs-container">
          <div class="tab-1 resp-tab-content " aria-labelledby="tab_item-0">
          <div class="facts w3-red " >
          
            <div class="register card w3-red  " style=" background-image: url(.uploade/flower.jpg);">

              
    
  <form name="registration" method="post" action="text_login.php" enctype="multipart/form-data" class="container ">
    <label class="w3-left ml-0 w3-panel"> <b>first name:</b></label><input class="form-control p-4"   placeholder="enter first name **" type="text" required name="fname">            
    <label class="w3-left ml-0 w3-panel"> <b>last name:</b></label><input class="form-control p-4"   placeholder="enter last name **" type="text" required name="lname">
  
  <label class="w3-left ml-0 w3-panel"> <b>contry:</b></label><input class="form-control p-4"   placeholder="enter country **" type="text" required name="country">
  <label class="w3-left ml-0 w3-panel"> <b>state:</b></label><input class="form-control p-4"   placeholder="enter state **" type="text" required name="state">
  <label class="w3-left ml-0 w3-panel"> <b>district:</b></label><input class="form-control p-4"   placeholder="enter district **" type="text" required name="district">
  <label class="w3-left ml-0 w3-panel"> <b>city:</b></label><input class="form-control p-4"   placeholder="enter city **" type="text" required name="city">
  <label class="w3-left ml-0 w3-panel"> <b>local address:</b></label><input class="form-control p-4"   placeholder="enter local address **" type="text" required name="local_ad">
    <label class="w3-left ml-0 w3-panel"> <b>email:</b></label><input class="form-control p-4"   placeholder="enter   valid email id **" type="text" required name="email">
  <label class="w3-left ml-0 w3-panel"> <b>contact no:</b></label><input class="form-control p-4"  placeholder=" inter contact no **" type="text" required name="contactno">
  <label class="w3-left ml-0 w3-panel"> <b>password:</b></label><input class="form-control p-4"   placeholder="enter strong password **" type="password" required name="password">
  <label class="w3-left ml-0 w3-panel"> <b>conform password:</b></label><input class="form-control p-4"   placeholder="comform password **" type="password" required name="cpassword">
  
                    

  
  
  <div class="sign-up">
                  <input type="reset" value="Reset">
                  <input type="submit" name="signup"  value="Sign Up" >
                  <div class="clear"> </div>
                </div>

  
  </form>

            </div>
          </div>
        </div>    
       <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
            <div class="fact w3-red ">
               <div class="login ">
              <div class="buttons">
                
                
              </div>
              <form name="login" action="" method="post" class="container  ">
                <div class="p-container w3-border w3-round-xlarge"><input type="text" class="w3-border w3-round-xlarge" name="uemail" value="" placeholder="Enter your registered email"  ><a href="#" class=" icon email"></a>

                <input class="w3-border w3-round-xlarge" type="password" value="" name="password" placeholder="Enter valid password"><a href="#" class=" icon lock"></a>
                  </div>
                <div class="p-container">
                
                  <div class="submit two">
                  <input class="w3-hover-blue" type="submit" name="login" value="LOG IN" >
                  </div>
                  <div class="clear"> </div>
                </div>

              </form>
          </div>
        </div> 
      </div>                         
         <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
            <div class="fact w3-red ">
               <div class="login">
              <div class="buttons">
                
                
              </div>
              <form name="login" action="" method="post" class="container">

                <div class="p-container"><input type="text" class=" w3-border w3-round-xlarge " name="femail" value="" placeholder="Enter your registered email" required  ><a href="#" class=" icon email"></a></div>
                  
                    <div class="submit three">
                      <input type="submit" name="send" onClick="myFunction()" value="Send Email" >
                    </div>
                  </form>
                  </div>
                  </div>                  
                </div>  
             </div> 
            </div>
          </div>
       </div><br><br>
       <div class="sticky-buttom"> <?php include("./adminstatus/blogadmin/footer.php"); ?></div>
     

</body>
</html> --><?php } ?>