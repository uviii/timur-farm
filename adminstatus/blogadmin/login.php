<?php include("dbc.php");?>

<?php
session_start();


error_reporting(0);

if(isset($_POST['login']))
  {
 
    // Getting username/ email and password

    $password=$_POST['password'];
$useremail=$_POST['username'];

    //  $uname=$_POST['username'];
    // $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($conn,"SELECT * FROM admin WHERE (email='$useremail' || username='$useremail')");
 $num=mysqli_fetch_array($sql);
if($num>0)
{
$hashpassword=$num['password']; // Hashed password fething from database
//verifying Password
if (password_verify($password, $hashpassword)) {


$_SESSION['login']=$_num['email'];
$_SESSION['Email']=$num['email'];
$_SESSION['admin']=$num['id'];
$_SESSION['name']=$num['username'];
$_SESSION['role']=$num['status'];


if ($num['status']=='0') { 
  // header('location:activate_1.php');
  echo "<script>alert(' access refused! your account not activate yet!  please contact to admin to activate your account ,thank you for joining with us');</script>";
  
}

if ($num['status']=='1') {

  header('location:main.php');
  # code...
}

if ($num['status']=='2' or $num['status']=='3'  or $num['status']=='4' ) {
  header('location:main1.php');
  # code...
}



    // echo "<script type='text/javascript'> document.location = 'main.php'; </script>";
  } else {
echo "<script>alert('Invalid password or email address or username');</script>";
 
  }
}
//if username or email not found in database
else{
echo "<script>alert('something going wrong please try again');</script>";
  }
 
}


?>




<!-- forgate password -->
<?php
if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($conn,"SELECT token,username email,password FROM admin WHERE email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$token=$row2['token'];
$username=$row2['username'];
$subject = "requested to retrive password";
$message = "  Hi! 
  
    Dear .$username.,

Recently a request was submitted to reset your password for our system  area. If you did not request this, please ignore this email and immiedietly contact to admin .

To reset your password, please visit the url below:
http://localhost/timur%20farm/activate.php?token=$token

When you visit the link above, you will have the opportunity to choose a new password.

---
(kupindedaha timur krishi farm pvt.ltd )
https://kupindetimur.com

visit our website | log in to your account | get support

Copyright © kupindedaha timur krishi farm pvt.ltd, All rights reserved.
";

mail($email, $subject, $message, "From: yubrajbudhathoki01@gmail.com");
echo  "<script>alert('Your Password has been sent Successfully check your email to retrive your password');</script>";
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
        <h2 class="form-login-heading  w3-center ">Login Now</h2></div>
      
          <form class="form-login w3-container  w3-round-large" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          
                  <p style="color:#F00; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
            <div class="login-wrap">
                <input type="text" name="username" class="form-control w3-pane p-4" placeholder="User ID" autofocus>
                <br>
                <input type="password" name="password" class="form-control w3-panel p-4" placeholder="Password"><br >
                <input  name="login" class="btn btn-theme btn-block bg-primary w3-hover-green" type="submit" value="login">
             
            </div>
            
          </form> <br>

       
            <div> 


<!-- Button to Open the Modal  -->
<button type="button" class="w3-orange w3-hover-red w3-text-white form-control" id="ol">
  forgete password
</button>

<script >
  $(document).ready(function(){
  $('#ol').click(function(){
  alert('sorry to say ! Please request to Domain Admin to retrive Your Password ! Thank you');
});
});
</script> 
              </div> 
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


    
<!-- 
<script>
function showfemail(str) {
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
  xhttp.open("GET", "ok.php?q="+str, true);
  xhttp.send();
}
</script> -->
      <!-- Modal footer -->
      

   


</body>
</html>








