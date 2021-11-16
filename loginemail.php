<?php session_start();
// error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include("./adminstatus/blogadmin/dbc.php");

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
    $localaddress1=  mysqli_real_escape_string($conn,   $_POST['localaddress1']);
      $zip=  mysqli_real_escape_string($conn,   $_POST['zip']);
  $cpassword=  mysqli_real_escape_string($conn,   $_POST['cpassword']);
  
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  
$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass=password_hash($cpassword, PASSWORD_BCRYPT);
$tokan=bin2hex(random_bytes(15));
  // $enc_password=$password;
$sql=mysqli_query($conn,"SELECT id FROM user where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{

  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";

}else

{if ($password===$cpassword) {


 
$msg=mysqli_query($conn,"INSERT INTO `user`(`fname`, `lname`, `email`, `contactno`, `country`, `state`, `district` , `city`, `localaddress`, `localaddress1`,`zipcode`,`password`, `cpassword`, `tokan`, `status`) VALUES ('$fname','$lname','$email','$contactno','$country','$state','$district','$city','$local_ad','$localaddress1','$zip','$pass','$cpass','$tokan','inactive')");
// echo "$msg";
  # code...
 }else{echo "<script>alert('password not matching');</script>";} 






if($msg)
{
 


require 'mail\vendor\autoload.php';
$mail = new PHPMailer(TRUE);
$fname=  mysqli_real_escape_string($conn,   $_POST['fname']);
  $lname=  mysqli_real_escape_string($conn,   $_POST['lname']);
  $email=  mysqli_real_escape_string($conn,   $_POST['email']);
  $subject = "account activation";

$message = " Hi 
dear .$fname.$lname.
thank you for creating a kupindetimur.com account,
 Please visit the link below and sign into your account to varify your email address and activate your account

 link to activation account clik here
http://localhost/timur%20farm/acount_activation.php?token=$tokan

attention!
we are recieving this email because of you recently created an account or changed your email address . if you did not do this,please contact us.

......
(kupindedaha timur krishi farm pvt.ltd)
https://kupindetimur.com





                  visit our website
                  loginto your account
                  get support


        coppy right kupindedaha timur krishi farm pvt.ltd. All rights reserved
 ";

   $mail->setFrom('yubrajbudhathoki01@gmail.com', 'kupindetimur.com');
   $mail->addAddress($email, $fname);
   $mail->Subject = $subject;
   $mail->Body = $message;
   /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   // $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'mail.kupindetimur.com';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'register@kupindetimur.com';
   
   /* SMTP authentication password. */
   $mail->Password = '20ec-5NU5tO.';
   
   /* Set the SMTP port. */
   $mail->Port = 465;
   
   /* Finally send the mail. */
   $mail->send();

     if (!$mail->send()) {

    echo 'massege couldnot be sent';


    # code...
  }else
  {
    $_SESSION['action1']="your account register successfully please visit your <b>$email.</b> to activate your account ? ";
  }


}



}





}



























if(isset($_POST['login']))
  {
 
    // Getting username/ email and password

    $password=$_POST['password'];
$useremail=$_POST['uemail'];

    //  $uname=$_POST['username'];
    // $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($conn,"SELECT * FROM user WHERE (email='$useremail' || fname='$useremail') AND status='active'");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['password']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {


$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
  } else {
echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('User not registered with us');</script>";
  }
 
}


if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($conn,"SELECT tokan,fname,lname, email,password FROM user WHERE email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$token=$row2['tokan'];
$fname=$row2['fname'];
$lname=$row2['lname'];
$message = "  Hi 
dear .$fname.$lname.
thank you for creating a kupindetimur.com account,
 Please visit the link below and sign into your account to varify your email address and activate your account

 link to retrive password clik here
https://www.kupindetimur.com/activate.php?token=$token

attention!
we are recieving this email because of you recently created an account or changed your email address . if you did not do this,please contact us.

......
(kupindedaha timur krishi farm pvt.ltd)
https://www.kupindetimur.com/




                  visit our website
                  loginto your account
                  get support


        coppy right kupindedaha timur krishi farm pvt.ltd. All rights reserved
 hi this is yubraj its test massage for you ,Your password is ".$token;
mail($email, $subject, $message, "From: yubrajbudhathoki01@gmail.com");
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
  <title>  login kupinde timur farm</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="kupindedaha,timur,agriculture,login,logout,Nepal,Salyan,Food">
<meta name="discription" content="No.1 classified herbal and food producer in Salyan district of Nepal,buy or sell and export or import all agriculture related product  ">
<?php include("link.php");?>
</head>
<body>




  <div class="row"> 
    <div class="col-sm-4 bg-dange container"></div>
     <div class="col-sm-4 bg-succes w3-container">
      <div class="bg-primary container w3-round-large w3-panel p-2 mt-0 mr-0 ml-0"> 
        <h5 class="form-login-heading  w3-center w3-text-red ">Welcome Login & Registration System</h5></div>
      <div id="login-page w3-container " class="">

      <div class="container w3-border w3-round-xlarge w3-container w3-blue ">
       <div class="bg-primary container w3-round-large w3-panel p-2 mt-0 mr-0 ml-0"> 
        <h2 class="form-login-heading  w3-center ">Login Now</h2></div>
          
          <form class="form-login w3-container  w3-round-large" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          
                  <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
                    
                     <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action'];?><?php echo $_SESSION['action']="";?></p>
                    
            <div class="login-wrap">
                <input type="text" name="uemail" class="form-control w3-pane p-4" placeholder="enter registred email ID" autofocus>
                
                <input type="password" name="password" class="form-control w3-panel p-4" placeholder="enter valid Password">

                <input  name="login" class="btn btn-theme btn-block w3-pink w3-hover-green" type="submit" value="login">
             
            </div>
            <!-- <div> user id:  yubrajbudhathoki01@gmail.com</div>
            <div> password:Test@123</div> -->
          </form>
          <br>
          <div> 
              <!-- Button to Open the Modal  -->
<button type="button" class="w3-orange w3-hover-red w3-text-white form-control" data-toggle="modal" data-target="#myyModal">
 <i class="fa fa-lock"></i>  forgate password
</button>
              </div> 
              <br>    
              
          <div> 
              <!-- Button to Open the Modal  -->
<button type="button" class="w3-green w3-hover-red w3-text-white form-control" data-toggle="modal" data-target="#myyModall">
<i class="fa fa-plus"></i> create account
</button>
              </div> 
              <br> 
      
      </div>
    </div>

    <br><br><hr>

   



    </div>

    <div class="col-sm-4"></div>
  </div>

   
<!-- The Modal -->
<div class="modal " id="myyModal">
  <div class="modal-dialog w3-blue">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header w3-blue">
        <h4 class="modal-title">Password Retrieve System</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

     <form class="form-login w3-container  w3-blue" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          
            <div class="login-wrap"><br>

              <input type="text" name="username" class="form-control" placeholder="Enter you registered Email ID" autofocus> <br>

                 <!-- <input type="email" name="femail" class="form-control" placeholder="email"><br >
               -->
                <input  name="send" class="btn btn-theme btn-block w3-orange w3-hover-red" type="submit" value="submit">
                <br>
              
             
            </div>
          </form>

      <!-- Modal footer -->
      <div class="modal-footer w3-blue">
        <button type="button" class="btn btn-danger w3-hover-blue" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- model registration -->
<!-- The Modal -->
<div class="modal " id="myyModall" >
  <div class="modal-dialog w3-blue">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header w3-blue">
        <h4 class="modal-title">user registration</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
          
           <form name="registration" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="container w3-blue ">
    <label class="w3-left ml-0 w3-panel"> <b>first name:</b></label><input class="form-control p-4"   placeholder="enter first name **" type="text"  name="fname">            
    <label class="w3-left ml-0 w3-panel"> <b>last name:</b></label><input class="form-control p-4"   placeholder="enter last name **" type="text"  name="lname">

<!-- UPDATE `shiping_charge` SET `id`=[value-1],`country`=[value-2],`district`=[value-3],`charge_nepal`=[value-4],`currency`=[value-5],`charge_other`=[value-6],`date`=[value-7] WHERE 1 -->

    <div><br><b class="w3-left ml-3">country:</b>
    <select class="form-control   " style="border:;" name="country" >
      <option type="text" name="country" value="" class="">select a country name</option>
      <?php 

           
   
            $selectquery = "SELECT*FROM shiping_charge ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
      <option type="text" name="country" value="<?php echo($result['country']) ?>"><?php echo($result['country']) ?></option>

     <?php
              # code...
            }
            ?>
    </select></div>

<!--  <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="shiping" class="form-control  " value=" <?php echo($result['charge_nepal']) ?>" class=" ml-4 mr-1" ></div></div>
 -->
 
 

  <!-- <label class="w3-left ml-0 w3-panel"> <b>contry:</b></label><input class="form-control p-4"   placeholder="enter country **" type="text"  name="country"> -->
  <label class="w3-left ml-0 w3-panel"> <b>state:</b></label><input class="form-control p-4"   placeholder="enter state **" type="text"  name="state">
  <label class="w3-left ml-0 w3-panel"> <b>district:</b></label><input class="form-control p-4"   placeholder="enter district **" type="text"  name="district">
  <label class="w3-left ml-0 w3-panel"> <b>city:</b></label><input class="form-control p-4"   placeholder="enter city **" type="text"  name="city">
  <label class="w3-left ml-0 w3-panel"> <b>local address:</b></label><input class="form-control p-4"   placeholder="enter local address **" type="text"  name="local_ad">
  <label class="w3-left ml-0 w3-panel"> <b> address_line-1:</b></label><input class="form-control p-4"   placeholder="enter local address (optional) **" type="text"  name="localaddress1">
  <label class="w3-left ml-0 w3-panel"> <b>zip code or post code:</b></label><input class="form-control p-4"   placeholder="insert zip code or post code  **" type="text"  name="zip">
    <label class="w3-left ml-0 w3-panel"> <b>email:</b></label><input class="form-control p-4"   placeholder="enter   valid email id **" type="text"  name="email">
  <label class="w3-left ml-0 w3-panel"> <b>contact no:</b></label><input class="form-control p-4"  placeholder=" inter contact no **" type="text"  name="contactno">
  <label class="w3-left ml-0 w3-panel"> <b>password:</b></label><input class="form-control p-4"   placeholder="enter strong password **" type="password"  name="password">
  <label class="w3-left ml-0 w3-panel"> <b>conform password:</b></label><input class="form-control p-4"   placeholder="comform password **" type="password"  name="cpassword">
  
                    

  
  
  <div class="sign-up">
                  <input type="reset" value="Reset" class="w3-hover-blue">
                  <input type="submit" name="signup" class="w3-hover-blue" value="register" >
                  <div class="clear"> </div>
                </div>

  
  </form>

      <!-- Modal footer -->
      <div class="modal-footer w3-blue">
        <button type="button" class="btn btn-danger w3-hover-blue" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<div class="  w3-center w3-opacity w3-black  w3-bottum"><div class="copyright ">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by<a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
</body>
</html>








