

<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("dbc.php");?>
<?php 
$idd= $_POST['id'];
$pname = $_POST['pname'];
$pqty = $_POST['pqty'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$offer = $_POST['offer'];
$avail = $_POST['avail'];
$pid = $_POST['pid'];

echo "$idd";
// UPDATE `payments` SET `id`=[value-1],`name`=[value-2],`bname`=[value-3],`account`=[value-4],`country`=[value-5],`branch`=[value-6],`ifsc`=[value-7],`type`=[value-8],`date`=[value-9] WHERE 1
$sql="UPDATE `product_qty` SET `pname`='$pname',`pid`='$pid',`unit`='$unit',`price`='$price',`offer`='$offer',`avail`='$avail',`status`='1' WHERE id=$idd";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 $_SESSION['action1']=" your product $pname, updated successfully ....";
 header('location:product_qty_view.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');


?>


<?php } ?>





