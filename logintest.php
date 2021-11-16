<?php session_start();
error_reporting(0);
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
   $warda=  mysqli_real_escape_string($conn,   $_POST['warda']);
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


 
$msg=mysqli_query($conn,"INSERT INTO `user`(`fname`, `lname`, `email`, `contactno`, `country`, `state`, `district` , `city`,`warda`, `localaddress`, `localaddress1`,`zipcode`,`password`, `cpassword`, `tokan`, `status`) VALUES ('$fname','$lname','$email','$contactno','$country','$state','$district','$city','$warda','$local_ad','$localaddress1','$zip','$pass','$cpass','$tokan','inactive')");
// echo "$msg";
  # code...
 }else{echo "<script>alert('password not matching');</script>";} 






if($msg)
{
$fname=  mysqli_real_escape_string($conn,   $_POST['fname']);
  $lname=  mysqli_real_escape_string($conn,   $_POST['lname']);
  $email=  mysqli_real_escape_string($conn,   $_POST['email']);
$subject = "account activation";

$message = " Hi 
dear .$fname.$lname.
thank you for creating a kupindetimur.com account,
 Please visit the link below and sign into your account to varify your email address and activate your account

 link to retrive password clik here
https://www.kupindetimur.com/acount_activation.php?token=$tokan

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
mail($email, $subject, $message, "From: yubrajbudhathoki01@gmail.com");

$_SESSION['action1']="your account register successfully please visit your <b>$email.</b> to activate your account ? ";

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
echo "<script>alert('User not registered with us or you should activate your account from gmail');</script>";
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

              <input type="text" name="femail" class="form-control" placeholder="Enter you registered Email ID" autofocus> <br>

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
  <div class="modal-dialog w3-blu">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header w3-blu">
        <h4 class="modal-title">user registration</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
          
           <form name="registration" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="container w3-blu ">
    <label class="w3-left ml-0 w3-panel"> <b>first name:</b></label><input class="form-control p-4"  required placeholder="enter first name **" type="text"  name="fname">            
    <label class="w3-left ml-0 w3-panel"> <b>last name:</b></label><input class="form-control p-4"  required placeholder="enter last name **" type="text"  name="lname">

<!-- UPDATE `shiping_charge` SET `id`=[value-1],`country`=[value-2],`district`=[value-3],`charge_nepal`=[value-4],`currency`=[value-5],`charge_other`=[value-6],`date`=[value-7] WHERE 1 -->
<!-- 
    <div><br><b class="w3-left ml-3">country:</b>
    <select class="form-control   " style="border:;" name="country" >
      <option type="text" name="country" value="" class="">select a country name</option>
      <option></option>
      <?php 

           
   
            $selectquery = "SELECT*FROM shiping_charge where charge_other='country' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
      <option type="text" name="country" value="<?php echo($result['country']) ?>"><?php echo($result['country']) ?></option>

     <?php
              # code...
            }
            ?>
            <option></option>
    </select></div> --><br>

    <label style="font-weight: bold;">choose country:</label>
  <select name="country" class="form-control" onchange="showcountry(this.value)">
    <option  name="">-Select country-</option>
    
  
       <?php 
     include('dbc.php');
    $id=$_GET['q'];
     echo $id;
               
              $selec = "SELECT*FROM  `shiping_charge` where charge_other='country' ";
            $query = mysqli_query($conn , $selec) or die("error");
           
            while ($resu= mysqli_fetch_array($query)) {
              
                ?>
  
         
         


  
   
    <option value="<?php echo $resu['country'] ?>" name=""><?php echo $resu['country'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

  <!--   <option value="1st semestar">Select a customer:</option>
    <option value="2nd semestar">Alfreds Futterkiste</option>
    <option value="3rd semestar">North/South</option>
    <option value="8th semestar">Wolski Zajazd</option> -->
  </select>



   <div id="txtHint"></div>




<!-- muncipality -->

<script>
function showcity(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "warda.php?q="+str, true);
  xhttp.send();   
}
</script>


<!-- district -->


<script>
function showdistrict(strrr) {
  var xhttp;  
  if (strrr == "") {
    document.getElementById("txtHinttt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHinttt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dddd.php?q="+strrr, true);
  xhttp.send();
}
</script>

<!-- state -->

<script>
function showstate(strr) {
  var xhttp;  
  if (strr == "") {
    document.getElementById("txtHintt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ddddd.php?q="+strr, true);
  xhttp.send();
}
</script>

<!-- country -->

<script>
function showcountry(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dd.php?q="+str, true);
  xhttp.send();
}
</script>

  <!-- <label class="w3-left ml-0 w3-panel"> <b>contry:</b></label><input class="form-control p-4"  required placeholder="enter country **" type="text"  name="country"> -->
 <!--  <label class="w3-left ml-0 w3-panel"> <b>state:</b></label><input class="form-control p-4"  required placeholder="enter state **" type="text"  name="state"><br>
   <b>district:</b><br>
<div class="">  <table>
    <tr>
      <th><input class="form-control p-4"  required placeholder="enter district* OR" type="text"  name="district"></th>
      <th><select type="text" name="district" id="tsubjects"  class="form-control p " required="true">
<option value="">-Select District Nepal-</option>

        <?php 

           
            $selectquery = "SELECT*FROM `shiping_charge` where charge_other='district nepal'   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>                                                 
 
<option  value="<?php echo $result['district']; ?>"  name="district"><?php echo $result['district']; ?></option>
<?php
              # code...
            }
            ?>
  </select></th>
    </tr>

    
     
  </table></div> -->
<!--   <label class="w3-left ml-0 w3-panel"> <b>district:</b></label><input class="form-control p-4"  required placeholder="enter district **" type="text"  name="district"> -->
  <!-- <label class="w3-left ml-0 w3-panel"> <b>city:</b></label><input class="form-control p-4"  required placeholder="enter city **" type="text"  name="city"> -->
 <!--  <label class="w3-left ml-0 w3-panel"> <b>local address:</b></label><input class="form-control p-4"  required placeholder="enter local address **" type="text"  name="local_ad">
  <label class="w3-left ml-0 w3-panel"> <b> address_line-1:</b></label><input class="form-control p-4"  required placeholder="enter local address (optional) **" type="text"  name="localaddress1"> -->
  <label class="w3-left ml-0 w3-panel"> <b>zip code or post code:</b></label><input class="form-control p-4"  required placeholder="insert zip code or post code  **" type="text"  name="zip">
    <label class="w3-left ml-0 w3-panel"> <b>email:</b></label><input class="form-control p-4"  required placeholder="enter   valid email id **" type="text"  name="email">
  <label class="w3-left ml-0 w3-panel"> <b>contact no:</b></label><input class="form-control p-4" required placeholder=" inter contact no **" type="text"  name="contactno">
  <label class="w3-left ml-0 w3-panel"> <b>password:</b></label><input class="form-control p-4"  required placeholder="enter strong password **" type="password"  name="password">
  <label class="w3-left ml-0 w3-panel"> <b>conform password:</b></label><input class="form-control p-4"  required placeholder="comform password **" type="password"  name="cpassword"><br><br>
  
                    

  <div><span class="checkbox validates-as-required"><span class="list-item first last"><input type="checkbox" name="checkbox" value="I am not a Robot" required><span class="pl-2">I have read all<a href="our-term-&-condition.php" class="w3-text-re"> <b>terms and condition</b></a> & <a href="privacy and policy.php" class="w3-text-green"> <b>As well as privacy policy</b></a></span></span></span></div>
  <br>
  <div class="sign-up">
    <input type="submit" name="signup" class="w3-hover-blue form-control w3-green" value="register" >
                  <input type="reset"  value="Reset" class="w3-hover-blue form-control w3-red">
                  
                  <div class="clear"> </div>
                </div>

  
  </form>

      <!-- Modal footer -->
      <div class="modal-footer w3-blu">
        <button type="button" class="btn btn-danger w3-hover-blue" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<div class="  w3-center w3-opacity w3-black  w3-bottum"><div class="copyright ">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishi farm pvt. ltd.</span></a>. Powered by<a href="#" target="_blank" title="yuvraj"><span class="ml-2">yuvraj </span></a>.</div>
</div>
</body>
</html>








