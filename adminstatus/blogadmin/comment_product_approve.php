
<?php 
include("dbc.php");

session_start();


if (isset($_GET['pid'])) {
  # code...
  $ci=$_GET['pid'];
 $sql="UPDATE `product_comment` SET `status`='approved' WHERE id='$ci'";


// echo "$sql";
$query = mysqli_query($conn ,$sql);

if ($query) {
   $_SESSION['action1']="weldone!  comment approved..........";
 header('location:comment_product.php');
}else{
   $_SESSION['action1']="sorry !  comment  not approved..........";
 header('location:comment_product.php');
}


}else{
     $_SESSION['action1']="somethig gone wrong ,try again.......";
  header('location:comment_product.php');
}


?>
<?php
           




