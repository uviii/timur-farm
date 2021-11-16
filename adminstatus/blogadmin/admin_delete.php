


session_start();

<?php include("dbc.php");?>
<?php
session_start();
$id= $_GET['id'];
$deletequery = "DELETE FROM admin where id=$id";
$query= mysqli_query($conn,$deletequery);


?>
 <?php

if ($query) {

 	$_SESSION['action1']="your requested data value deleted successfully..!";
header('location:admin_profile.php');
}
?>
else{
 
  <script>alert("sorry fail to delete....!</script>

}
?>

