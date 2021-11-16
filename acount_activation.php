
<?php 
include("./adminstatus/blogadmin/dbc.php");

session_start();


if (isset($_GET['token'])) {
	# code...
	$token=$_GET['token'];
	echo "$token";
	$updatequery= " UPDATE `user` SET `status`='active' WHERE tokan='$token'";
	echo "$updatequery";
	$query= mysqli_query($conn,$updatequery);
if ($query) {
$_SESSION['msg']="activated successfully,please login";
	# code...
header('location:logint.php');
}else{
	echo "<script>alert('your account did'not activated ,
	please try again.');</script>";

}


}else{echo"<script>alert('somethig gone wrong ,try again.');</script>";}


?>


