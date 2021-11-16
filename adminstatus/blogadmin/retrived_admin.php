<?php include("dbc.php");?>

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

if (isset($_GET['token'])) {
	$token=$_GET['token'];
	# code...

   $newpassword=  mysqli_real_escape_string($conn,   $_POST['newpassword']);
    $password=  mysqli_real_escape_string($conn,   $_POST['password']);

// $email = $_POST['email'];
// $password = $_POST['password'];
// UPDATE `admin` SET `id`=[value-1],`username`=[value-2],`password`=[value-3],`email`=[value-4],`token`=[value-5],`status`=[value-6],`date`=[value-7] WHERE 1
   $newpass= password_hash($newpassword, PASSWORD_BCRYPT);
      $pass= password_hash($password, PASSWORD_BCRYPT);
   
if($newpassword==$password)
{
$updatepass="UPDATE `admin` set password='$pass' WHERE token='$token'";
$iquery=mysqli_query($conn,$updatepass);

if ($iquery) {$_SESSION['msg']="your password has been retrived please login now";
header('location:login.php');
	# code...
	}else{
		$_SESSION['msg']="your password is not retrived please try again";
		header('location:retrived_admin.php');
	}	
 
}else{

echo "something gone wrong please try again";


}



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
        <h2 class="form-login-heading  w3-center ">change your password</h2></div>
       <form class="form-login w3-container  w3-round-large" action="" method="post">
          
            <div class="login-wrap">

               <input type="password" name="newpassword" class="form-control" placeholder="new password"><br >
                <input type="password" name="password" class="form-control" placeholder="comform Password"><br >
                <input  name="submit" class="btn btn-theme btn-block bg-primary" type="submit" value="register">
                <br>
              
             
            </div>
          </form> <br>

       
            <div>
            </div></div></div></div>
            <div class="col-sm-4"></div>


        </div> 




</body>
</html>


<?php } ?>





