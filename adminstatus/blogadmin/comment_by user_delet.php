
<?php include("dbc.php");?>
<?php

session_start();
$id= $_GET['id'];
$deletequery = "DELETE FROM `comment_ad` where id=$id";
$query= mysqli_query($conn,$deletequery);
?>

 <?php

if ($query) {

 	$_SESSION['action1']="your requested data value deleted successfully..!";
  echo "your database value Deleted  successfully."; 
 header('location:comment_by_user.php');
}
?>
else{
 
  <script>alert("sorry fail to  delete ! try again!</script>

}
?>

