
<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM  `blog_sub_cat` where id=$id";
$query= mysqli_query($conn,$deletequery);

?>
 <?php

if ($query) {

 	$_SESSION['action']="your requested data value deleted successfully..!";
  // echo "<script>alert('your database value updated successfully.');</script>"; 
 header('location:index_intro_view.php');
}
?>
else{
 
  <script>alert("sorry fail to delet please try again .....!</script>

}
?>
<?php } ?>
