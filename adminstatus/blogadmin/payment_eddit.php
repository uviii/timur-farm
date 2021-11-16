

<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("dbc.php");?>
<?php 

$id=$_POST['id'];
$name = $_POST['name'];
$bname = $_POST['bname'];
$account = $_POST['account'];
$country = $_POST['country'];
$branch = $_POST['branch'];
$ifsc = $_POST['ifsc'];
$type = $_POST['type'];

// UPDATE `payments` SET `id`=[value-1],`name`=[value-2],`bname`=[value-3],`account`=[value-4],`country`=[value-5],`branch`=[value-6],`ifsc`=[value-7],`type`=[value-8],`date`=[value-9] WHERE 1
$sql="UPDATE `payments` SET `name`='$name',`bname`='$bname',`account`='$account',`branch`='$branch',`country`='$country',`ifsc`='$ifsc',`type`='$type' WHERE id=$id   ";


echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 $_SESSION['action1']=" your account of $bname,$branch, Nepal updated successfully ....";
 header('location:payment_view.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');


?>


<?php } ?>





