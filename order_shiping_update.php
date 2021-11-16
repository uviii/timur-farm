
<?php 
 include("./adminstatus/blogadmin/dbc.php");
error_reporting(0);
if(isset($_POST['shiping']))
{
  $id=$_POST['id'];
 
  $country = $_POST['country'];

$sql="UPDATE `order` SET  `shiping`='$country' WHERE cid='$id'  ";


$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
  
  header('location:order_checkout.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 else {   
}
?>