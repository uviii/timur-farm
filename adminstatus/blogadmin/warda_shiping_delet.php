
<?php include("dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM `warda_munci` where id=$id";
$query= mysqli_query($conn,$deletequery);
?>
 <?php

if ($query) {

 	// $_SESSION['action1']="your requested data value deleted successfully..!";
  echo "your database value Deleted  successfully."; 
 // header('location:shiping_warda_view.php');
}
?>
else{
 
  <script>alert("sorry fail to  delete ! try again!</script>

}
?>

