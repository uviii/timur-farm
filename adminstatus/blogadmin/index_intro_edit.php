

<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("dbc.php");?>
<?php 
$idd= $_POST['id'];	
$subcat = $_POST['subcat'];
$cat = $_POST['cat'];
$date = $_POST['date'];



// $sql="INSERT INTO `cat_b_sub`(`cat`, `catid`, `subcat`)  VALUES ('$cat','$catid','$subcat')";

$sql="UPDATE `blog_sub_cat` SET `date`='$date',`cat`='$cat',`subcat`='$subcat' WHERE id=$idd";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 $_SESSION['action']="  $cat, updated successfully ....";
 header('location:index_intro_view.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');


?>


<?php } ?>





