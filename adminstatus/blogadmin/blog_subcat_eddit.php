

<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("dbc.php");?>
<?php 
$idd= $_POST['id'];	
$subcategories = $_POST['subcategories'];
$categories = $_POST['categories'];
$catid = $_POST['catid'];


// $sql="INSERT INTO `cat_b_sub`(`categories`, `catid`, `subcategories`)  VALUES ('$categories','$catid','$subcategories')";

$sql="UPDATE `cat_b_sub` SET `categories`='$categories',`subcategories`='$subcategories',`catid`='$catid' WHERE id=$idd";


echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 $_SESSION['action']=" your product $categories, updated successfully ....";
 header('location:categories.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');


?>


<?php } ?>





