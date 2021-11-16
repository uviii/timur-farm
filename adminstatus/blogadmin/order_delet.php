
<?php   include("dbc.php");?>
<?php
session_start();
$id= $_GET['id'];
$deletequery = "DELETE FROM `order` where id=$id";
$query= mysqli_query($conn,$deletequery);


if ($query) {

 	$_SESSION['action1']="delete  successfully. .!";
  // echo "your Cancelation successfull. Thans for being family of kupindetimur.com @kupindetimur Team"; 
 header('location:order_cancel.php');
}

else{

 
 echo "<script>alert('Something went wrong. Please try again.');</script>";

}
?>

