<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM `shiping_charge` where id=$id";
$query= mysqli_query($conn,$deletequery);
?>
 <?php

if ($query) {

 	$_SESSION['action1']="your requested data value deleted successfully..!";
  // echo "<script>alert('your database value updated successfully.');</script>"; 
 header('location:shiping_charge_view.php');
}
?>
else{
 
  <script>alert("sorry delete fail</script>

}
?>
<?php } ?>
