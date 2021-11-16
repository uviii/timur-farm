
<?php include("dbc.php");?>
<?php
session_start();
$id= $_GET['id'];
$deletequery = "DELETE FROM `contact_product` where id=$id";
$query= mysqli_query($conn,$deletequery);
?>
 <?php

if ($query) {

 	$_SESSION['action1']="your requested data value deleted successfully..!";

 header('location:order_enquiry.php');
}
?>
else{
 
  <script>alert("sorry fail to  delete ! try again!</script>

}
?>

